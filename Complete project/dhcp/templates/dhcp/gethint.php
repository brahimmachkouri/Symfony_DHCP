<?php

//Arraynames
$a = $array ;
//array("Paris","Madrid","Sofia","Prague","Berlin","Amsterdam","Londre","Rome");
$q = $_REQUEST["q"];
//récupérer le paramètre "q" de la requête 
$hint = "";
if($q!==""){
  //chercher les occurrences dans le tableau si $q différent de ""
  $q=strtolower($q);
  $len=strlen($q);
  foreach($a as $name){
    if(stristr($q,substr($name,0,$len))){
      if($hint==="")
      {
		  $hint=$name;
		  }
      else{$hint.=",$name";
		  }}}}
      //Affichage "aucune suggestion" si aucune occurrence,
      //sinon affichage valeur
      echo $hint===""?"aucune suggestion":$hint;
      
?>
