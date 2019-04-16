<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use App\Entity\Dhcp;
use App\Entity\DhcpHost;

use \Datetime;

class DhcpController extends Controller
{
    public function listHost(Request $request)
    {
        if ($request->isXmlHttpRequest())
	    {
		   $dhcp = Dhcp::readDhcpFile($this->container->getParameter('app.dhcpFile'));
           $searchId = $request->get("host");
		   $hosts  = $dhcp->getHosts() ;

		   if ($searchId != null) {
			   $searchId = strtolower($searchId);
		   }

           $hint = array();
		   if($searchId !== "")
		   {
			  foreach($hosts as $dhcpHost)
			  {
				  if (strpos(strtolower($dhcpHost->getHostName()), $searchId) === 0 ||
					  strpos(strtolower($dhcpHost->getMacAddress()), $searchId) === 0 ||
					  strpos(strtolower(($dhcpHost->getDateModif() == null ?"01-01-0001":$dhcpHost->getDateModif()->format('d-m-Y'))), $searchId) === 0)
				{
				  array_push($hint, $dhcpHost);
				}
			 }
	      }
	      else
	      {
			  foreach($hosts as $dhcpHost)
			  {
				  array_push($hint, $dhcpHost);
			  }
		  }
      $retour = array("data" => $hint, "dataLenght" => count ($hint), "access" => $this->container->getParameter('app.dhcpFile'));

	     return new JSonResponse(json_encode($retour));
	}
	return new Response("Error : not and ajax request", 400);
    }

    public function verifyHostname(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
	     $hostname = $request->get("id");
	     $dhcp = Dhcp::readDhcpFile($this->container->getParameter('app.dhcpFile'));
	     $ret = 0;
	     if($dhcp->hostExist($hostname))
	     {
		 $ret = 1;
             }
	     return new JSonResponse(array('data' => $ret));
        }
        return new Response("Error : not and ajax request", 400);
    }

    public function index(Request $request)
    {
        return $this->render('dhcp/index.html.twig', array());
    }

    public function getAdminUsers()
    {
      $users = array(
            array("name"=>"Name 1" , "value"=>"Shortcut 1"),
            array("name"=>"Name 2" , "value"=>"Shortcut 2"),
            array("name"=>"Name 3" , "value"=>"Shortcut 3"),
        );
      return $users;
    }

    public function modify(Request $request)
    {
		$dhcp = Dhcp::readDhcpFile($this->container->getParameter('app.dhcpFile'));
		$host = $dhcp->getHost($request->query->get('id'));

        return $this->render('dhcp/modifyHost.html.twig', array(
            'host' => $host, 'users' => DhcpController::getAdminUsers(),
        ));
	}

	public function modifyForm(Request $request) {
		$dhcp = Dhcp::readDhcpFile($this->container->getParameter('app.dhcpFile'));
		$host = $dhcp->getHost($request->query->get('id'));

		if ($host->getExpirationDate() == NULL) {
			$host->setExpirationDate(new DateTime("now"));
		} else {
			$host->setExpirationDate(DateTime::createFromFormat ("d-m-Y", $host->getExpirationDate()));
		}

        $form = $this->createFormBuilder($host)
            ->add('hostname', TextType::class)
            ->add('expirationDate', DateType::class, array('widget' => 'single_text'))
            ->add('save', SubmitType::class, array('label' => 'Save Host'))
            ->getForm();

        return $this->render('dhcp/new.html.twig', array(
            'form' => $form->createView(), 'host' => $host
        ));
	}

	public function deleteHost(Request $request) {
		$dhcp = Dhcp::readDhcpFile($this->container->getParameter('app.dhcpFile'));
		$array = $dhcp->getHosts();
		$this->addFlash('notice', 'nb host avant : '.count($array));

		unset($array[$request->query->get('id')]);
		$dhcp->setHosts($array);
		$this->addFlash('notice', 'nb host apres : '.count($dhcp->getHosts()));
		Dhcp::saveDhcp($dhcp);

		return $this->redirectToRoute('app_dhcp_main');
		//return $this->render('dhcp/delete.html.twig');
	}

    public function addNewHost(Request $request) {
        return $this->render('dhcp/addNewHost.html.twig', array( 'users' => DhcpController::getAdminUsers(),));
    }

	public function saveHost(Request $request) {
		$dhcpHost = new DhcpHost();

		$form = $this->createFormBuilder($dhcpHost)
        ->add('hostname', TextType::class)
        ->add('creator', TextType::class)
        ->add('macAddress', TextType::class)
        ->add('fixedIPAddress', TextType::class)
        ->add('dateModif', DateType::class)
        ->add('expirationDate', DateType::class)
        ->add('commentary', TextType::class)
        ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ->getForm();

		$form->handleRequest($request);

		$task = $form->getData();
		$array = $request->request->all();
		$hostname = $array["hostname"];
		$creator = $array["creator"];
		$macAddress = $array["macAddress"];
		if (array_key_exists("ipFixed", $array)) {
			$fixedIPAddress = $array["ipFixed"];
		} else {
			$fixedIPAddress = NULL;
		}
		$dateModif = $array["dateModif"];
		if (array_key_exists("expirationDate", $array)) {
			$expirationDate = $array["expirationDate"];
		} else {
			$expirationDate = "01-01-0001";
		}

		$commentary = $array["description"];

		$this->addFlash('notice', 'hostName : '.$hostname);

		$dhcp = Dhcp::readDhcpFile($this->container->getParameter('app.dhcpFile'));
	        if($dhcp->hostExist($hostname))
		{
		        $host = $dhcp->getHost($hostname);
			    $host->setCreator($creator);
	            $host->setMacAddress($macAddress);
	            $host->setFixedIpAddress($fixedIPAddress);
	            $host->setDateModif(new DateTime());
	            $host->setCommentary($commentary);
	            $host->setExpirationDate($expirationDate);
         		$dhcp->getHosts[$hostname] = $host;
		}
		else
		{
			$host = new DhcpHost();
			$host->setHostname($hostname);
			$host->setCreator($creator);
                        $host->setMacAddress($macAddress);
                        $host->setFixedIpAddress($fixedIPAddress);
                        $host->setDateModif(new DateTime());
                        $host->setCommentary($commentary);
	                    $host->setExpirationDate($expirationDate);
			$dhcp->addHost($hostname, $host);
		}
		Dhcp::saveDhcp($dhcp);

		if ($request->isMethod('POST')) {
			$this->addFlash('notice', 'POST');

		}

		if ($form->isSubmitted())
		{
			$this->addFlash('notice', 'Form is submitted!');
		}

		if ($form->isSubmitted() && $form->isValid()) {
			$task = $form->getData();

			return $this->redirectToRoute('task_success');
		}
		return $this->redirectToRoute('app_dhcp_main');
	}

	private function sortArray($array)
	{
		$price = array();
		foreach ($array as $key => $row)
		{
			$price[$key] = $row['value'];
		}
		array_multisort($price, SORT_DESC, $array);
		return $array;
	}
}
