<?php

/* dhcp/addNewHost.html.twig */
class __TwigTemplate_6ac3cc239b030d2012ac3ba267c0ad51e42e21695494bcdd1cd94a6eea150099 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "dhcp/addNewHost.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/addNewHost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/addNewHost.html.twig"));

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

        echo "Ajout d'un nouveau l'host";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<form action=\"/saveHost\" id=\"formSaveHost\" method=\"post\">
\t<div class=\"form-row\">
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">Hostname</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"hostname\" name=\"hostname\" placeholder=\"18X51\" value=\"\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">MAC Address</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"macAddress\" name=\"macAddress\" placeholder=\"AA:AA:AA:AA:AA\" value=\"\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t  <label for=\"dateModif\">Date</label>
\t\t  <input type=\"text\" class=\"form-control\" id=\"dateModif\" name=\"dateModif\" placeholder=\"\" value=\"\">
\t\t</div>
\t</div>
  <div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">
      <div class=\"form-check\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"fixedIPCheck\">
        <label class=\"form-check-label\" for=\"customCheck1\">Check to set fixed IP</label>
      </div>
    </div>
    <div class=\"col-md-4 mb-3\">
      <label for=\"ipFixed\">IP Address</label>
      <input type=\"text\" class=\"form-control\" id=\"ipFixed\" name=\"ipFixed\" placeholder=\"192.168.0.1\" value=\"\">
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">
      <div class=\"form-check\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"expirationDateCheck\">
        <label class=\"form-check-label\" for=\"customCheck1\">Expire ?</label>
      </div>
    </div>
    <div class=\"col-md-4 mb-3\">
      <label for=\"ipFixed\">Expiration date</label>
      <input type=\"text\" class=\"form-control\" id=\"expirationDate\" name=\"expirationDate\" placeholder=\"\" value=\"\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"desciption\">Description</label>
    <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"description...\" rows=\"5\"></textarea>
  </div>
  <div class=\"form-group\">
    <label for=\"creator\">Administrateur</label>
    <select class=\"form-control\" id=\"creator\" name=\"creator\">
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 54
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "value", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </select>
  </div>
</form>
<button type=\"button\" class=\"btn btn-link\" id=\"backButton\">Back</button>
<button type=\"button\" class=\"btn btn-success\" id=\"saveButton\">Save</button>

<div id=\"hostExist\" style=\"display:none;\">
\tL'hote <b><span id=\"hostExist_hostname\"></span></b> existe deja en base.
  <button type=\"button\" class=\"btn btn-success\" id=\"hostExist_load\">Charger</button>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 69
        echo "<script>

function loadPreviousHost() {
  var url = \"/modifyHost?id=\"+\$(\"#hostname\").val();
  window.location.replace(url);
}

\$(document).ready(function(){
//    \$(\"#hostExist\").dialog({title: \"Warning\"}).parent().addClass(\"ui-state-error\");
//    \$(\"#hostExist\").dialog();
//    \$(\"#hostExist\").hide();
    \$('#backButton').on('click', function(event) {
      window.location = '/';
    });
    \$('#fixedIPCheck').on('change', function(event) {
      if (\$('#fixedIPCheck').is(':checked')) {
\t\t\$('#ipFixed').prop('disabled', false);
\t  }
\t  else
\t  {
\t\t\$('#ipFixed').prop('disabled', true);
\t  }
    });

    \$(\"#hostname\").focusout(function() {
\t    \$.ajax({
\t\t      url: \"/verifyHostname\",
\t\t      data: {id: \$(\"#hostname\").val()}
\t    }).done(function(json) {
\t\t   if (json['data'] == 1)
\t           {
\t\t      \$(\"#hostExist\").dialog({title: \"Warning\"}).parent().addClass(\"ui-state-error\");
                      \$(\"#hostExist_hostname\").text(\$(\"#hostname\").val());
\t\t      \$('#hostExist_load').attr(\"onclick\",\"loadPreviousHost()\");
\t\t      \$(\"#hostExist\").dialog();
\t           }
\t    })
\t    .fail(function() {
\t        alert( \"error\" );
\t    })
\t    //.always(function() {
\t        //alert( \"complete\" );
\t    //});
    });
    
    \$('#expirationDateCheck').on('change', function(event) {
      if (\$('#expirationDateCheck').is(':checked')) {
\t\t\$('#expirationDate').prop('disabled', false);
\t  }
\t  else
\t  {
\t\t\$('#expirationDate').prop('disabled', true);
\t  }
    });
    
    // coche la checkbox d'IP fixe selon si le champ ipFixed est renreigne ou non
\t\$('#fixedIPCheck').prop( \"checked\", \$(\"#ipFixed\").val() != \"\" );
\tif (!\$('#fixedIPCheck').is(':checked')) {
\t  \$('#ipFixed').prop('disabled', true);
\t}
\t
\tif(!\$(\"#expirationDate\").is(\":checked\")) {
\t  \$('#expirationDate').prop('disabled', true);
\t}
\t
\t\$(\"#expirationDate\").datepicker({
\t\tlanguage:\"fr\",
\t});
\t
\t\$(\"#dateModif\").datepicker({
\t\tlanguage:\"fr\",
\t});
\t
\t\$( \"#saveButton\" ).click(function() {
\t\t\$( \"#formSaveHost\" ).submit();
\t});
\t\$( \"#deleteButton\" ).click(function() {
\t\t
\t});
\t
\t\$('#confirm-delete').on('show.bs.modal', function(e) {
\t\t\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
\t});
});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dhcp/addNewHost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  156 => 68,  136 => 56,  125 => 54,  121 => 53,  73 => 7,  64 => 6,  46 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/dhcp/list.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Ajout d'un nouveau l'host{% endblock %}

{% block body %}
<form action=\"/saveHost\" id=\"formSaveHost\" method=\"post\">
\t<div class=\"form-row\">
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">Hostname</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"hostname\" name=\"hostname\" placeholder=\"18X51\" value=\"\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">MAC Address</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"macAddress\" name=\"macAddress\" placeholder=\"AA:AA:AA:AA:AA\" value=\"\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t  <label for=\"dateModif\">Date</label>
\t\t  <input type=\"text\" class=\"form-control\" id=\"dateModif\" name=\"dateModif\" placeholder=\"\" value=\"\">
\t\t</div>
\t</div>
  <div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">
      <div class=\"form-check\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"fixedIPCheck\">
        <label class=\"form-check-label\" for=\"customCheck1\">Check to set fixed IP</label>
      </div>
    </div>
    <div class=\"col-md-4 mb-3\">
      <label for=\"ipFixed\">IP Address</label>
      <input type=\"text\" class=\"form-control\" id=\"ipFixed\" name=\"ipFixed\" placeholder=\"192.168.0.1\" value=\"\">
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">
      <div class=\"form-check\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"expirationDateCheck\">
        <label class=\"form-check-label\" for=\"customCheck1\">Expire ?</label>
      </div>
    </div>
    <div class=\"col-md-4 mb-3\">
      <label for=\"ipFixed\">Expiration date</label>
      <input type=\"text\" class=\"form-control\" id=\"expirationDate\" name=\"expirationDate\" placeholder=\"\" value=\"\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"desciption\">Description</label>
    <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"description...\" rows=\"5\"></textarea>
  </div>
  <div class=\"form-group\">
    <label for=\"creator\">Administrateur</label>
    <select class=\"form-control\" id=\"creator\" name=\"creator\">
    {% for val in users %}
      <option value=\"{{val.value}}\">{{ val.name }}</option>
    {% endfor %}
    </select>
  </div>
</form>
<button type=\"button\" class=\"btn btn-link\" id=\"backButton\">Back</button>
<button type=\"button\" class=\"btn btn-success\" id=\"saveButton\">Save</button>

<div id=\"hostExist\" style=\"display:none;\">
\tL'hote <b><span id=\"hostExist_hostname\"></span></b> existe deja en base.
  <button type=\"button\" class=\"btn btn-success\" id=\"hostExist_load\">Charger</button>
</div>
{% endblock %}

{% block js %}
<script>

function loadPreviousHost() {
  var url = \"/modifyHost?id=\"+\$(\"#hostname\").val();
  window.location.replace(url);
}

\$(document).ready(function(){
//    \$(\"#hostExist\").dialog({title: \"Warning\"}).parent().addClass(\"ui-state-error\");
//    \$(\"#hostExist\").dialog();
//    \$(\"#hostExist\").hide();
    \$('#backButton').on('click', function(event) {
      window.location = '/';
    });
    \$('#fixedIPCheck').on('change', function(event) {
      if (\$('#fixedIPCheck').is(':checked')) {
\t\t\$('#ipFixed').prop('disabled', false);
\t  }
\t  else
\t  {
\t\t\$('#ipFixed').prop('disabled', true);
\t  }
    });

    \$(\"#hostname\").focusout(function() {
\t    \$.ajax({
\t\t      url: \"/verifyHostname\",
\t\t      data: {id: \$(\"#hostname\").val()}
\t    }).done(function(json) {
\t\t   if (json['data'] == 1)
\t           {
\t\t      \$(\"#hostExist\").dialog({title: \"Warning\"}).parent().addClass(\"ui-state-error\");
                      \$(\"#hostExist_hostname\").text(\$(\"#hostname\").val());
\t\t      \$('#hostExist_load').attr(\"onclick\",\"loadPreviousHost()\");
\t\t      \$(\"#hostExist\").dialog();
\t           }
\t    })
\t    .fail(function() {
\t        alert( \"error\" );
\t    })
\t    //.always(function() {
\t        //alert( \"complete\" );
\t    //});
    });
    
    \$('#expirationDateCheck').on('change', function(event) {
      if (\$('#expirationDateCheck').is(':checked')) {
\t\t\$('#expirationDate').prop('disabled', false);
\t  }
\t  else
\t  {
\t\t\$('#expirationDate').prop('disabled', true);
\t  }
    });
    
    // coche la checkbox d'IP fixe selon si le champ ipFixed est renreigne ou non
\t\$('#fixedIPCheck').prop( \"checked\", \$(\"#ipFixed\").val() != \"\" );
\tif (!\$('#fixedIPCheck').is(':checked')) {
\t  \$('#ipFixed').prop('disabled', true);
\t}
\t
\tif(!\$(\"#expirationDate\").is(\":checked\")) {
\t  \$('#expirationDate').prop('disabled', true);
\t}
\t
\t\$(\"#expirationDate\").datepicker({
\t\tlanguage:\"fr\",
\t});
\t
\t\$(\"#dateModif\").datepicker({
\t\tlanguage:\"fr\",
\t});
\t
\t\$( \"#saveButton\" ).click(function() {
\t\t\$( \"#formSaveHost\" ).submit();
\t});
\t\$( \"#deleteButton\" ).click(function() {
\t\t
\t});
\t
\t\$('#confirm-delete').on('show.bs.modal', function(e) {
\t\t\$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
\t});
});
</script>
{% endblock %}
", "dhcp/addNewHost.html.twig", "/var/www/dhcp/templates/dhcp/addNewHost.html.twig");
    }
}
