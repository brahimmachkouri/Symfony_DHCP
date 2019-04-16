<?php

/* dhcp/index.html.twig */
class __TwigTemplate_0e9dc6a9df181a61c2d313b0bf7cba53338e3aae10705b6be615ccfbb80c7ffe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "dhcp/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DHCP Host list";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"table-responsive\">

\t<h3> voici le nombre d'utilisateur : <span id=\"nbHost\"></span> provenant du fichier : <span id=\"access\"></span> </h3>
\t<table class=\"table table-hover table-sm\" id=\"tablehost\"></table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 16
        echo "<script>

\tfunction searchHost()
\t{
\t    \$.ajax({
        url:\"/listHost\",
\t\tmethod: \"post\",
\t\tdata: {host: \$(\"#searchHost\").val()},
\t\tdataType: 'json',
\t\tsuccess: function (data) {
\t\t\t \$(\"#tablehost\").find(\"tr\").remove();
\t\t\t \$js = JSON.parse(data);
\t\t\t \$(\"#nbHost\").text(\$js[\"dataLenght\"]);
\t\t\t \$(\"#access\").text(\$js[\"access\"]);
\t\t\tvar numLine = 0;
\t\t\t\$.each(\$js[\"data\"], function(index, element) {
\t\t\t\tvar classCss = \"\";
\t\t\t\tnumLine = numLine + 1;
\t\t\t\tif (element.fixedIpAddress != \"\")
\t\t\t\t{
\t\t\t\t\tclassCss = 'class=\"table-warning\"';
\t\t\t\t}
\t\t\t\t\$('#tablehost').append('<tr '+classCss+'> <td id=\"ligne\">' + numLine + '</td> <td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.hostname+'</td><td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.macAddress+'</td><td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.dateModif+'</td> <td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.fixedIpAddress+'</td></tr>');

\t\t\t});
\t\t}
\t    });
\t}

    \$(document).ready(function(){

\t\tsearchHost();
\t\t\$( \"#searchHost\" ).keyup(function() {
\t\t  //console.log( \"Handler for .keypress() called.\" + \$( \"#searchHost\" ).val());
\t\t  searchHost();
\t\t});

    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dhcp/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  88 => 15,  73 => 8,  64 => 7,  46 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/dhcp/list.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}DHCP Host list{% endblock %}


{% block body %}
<div class=\"table-responsive\">

\t<h3> voici le nombre d'utilisateur : <span id=\"nbHost\"></span> provenant du fichier : <span id=\"access\"></span> </h3>
\t<table class=\"table table-hover table-sm\" id=\"tablehost\"></table>
</div>
{% endblock %}

{% block js %}
<script>

\tfunction searchHost()
\t{
\t    \$.ajax({
        url:\"/listHost\",
\t\tmethod: \"post\",
\t\tdata: {host: \$(\"#searchHost\").val()},
\t\tdataType: 'json',
\t\tsuccess: function (data) {
\t\t\t \$(\"#tablehost\").find(\"tr\").remove();
\t\t\t \$js = JSON.parse(data);
\t\t\t \$(\"#nbHost\").text(\$js[\"dataLenght\"]);
\t\t\t \$(\"#access\").text(\$js[\"access\"]);
\t\t\tvar numLine = 0;
\t\t\t\$.each(\$js[\"data\"], function(index, element) {
\t\t\t\tvar classCss = \"\";
\t\t\t\tnumLine = numLine + 1;
\t\t\t\tif (element.fixedIpAddress != \"\")
\t\t\t\t{
\t\t\t\t\tclassCss = 'class=\"table-warning\"';
\t\t\t\t}
\t\t\t\t\$('#tablehost').append('<tr '+classCss+'> <td id=\"ligne\">' + numLine + '</td> <td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.hostname+'</td><td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.macAddress+'</td><td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.dateModif+'</td> <td><a href=\"/modifyHost?id='+element.hostname+'\">'+element.fixedIpAddress+'</td></tr>');

\t\t\t});
\t\t}
\t    });
\t}

    \$(document).ready(function(){

\t\tsearchHost();
\t\t\$( \"#searchHost\" ).keyup(function() {
\t\t  //console.log( \"Handler for .keypress() called.\" + \$( \"#searchHost\" ).val());
\t\t  searchHost();
\t\t});

    });
</script>
{% endblock %}
", "dhcp/index.html.twig", "/var/www/dhcp/templates/dhcp/index.html.twig");
    }
}
