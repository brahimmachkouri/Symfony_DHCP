<?php

/* dhcp/modifyHost.html.twig */
class __TwigTemplate_e15a777f280a9fd0aa0e2e24e4adcef7b2acba71885cf029fdcae64e71acb9b5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "dhcp/modifyHost.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/modifyHost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/modifyHost.html.twig"));

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

        echo "Modification de l'host ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 4, $this->source); })()), "hostname", array()), "html", null, true);
        echo " ";
        
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
\t\t<input type=\"text\" class=\"form-control\" id=\"hostname\" name=\"hostname\" placeholder=\"18X51\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 11, $this->source); })()), "hostname", array()), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">MAC Address</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"macAddress\" name=\"macAddress\" pattern=\"[0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2}\" placeholder=\"AA:AA:AA:AA:AA\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 15, $this->source); })()), "macAddress", array()), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t  <label for=\"dateModif\">Date</label>
\t\t  <input type=\"text\" class=\"form-control\" id=\"dateModif\" name=\"dateModif\" placeholder=\"\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 19, $this->source); })()), "dateModif", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "\">
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
      <input type=\"text\" class=\"form-control\" id=\"ipFixed\" name=\"ipFixed\" placeholder=\"192.168.0.1\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 31, $this->source); })()), "fixedIpAddress", array()), "html", null, true);
        echo "\">
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
      <input type=\"text\" class=\"form-control\" id=\"expirationDate\" name=\"expirationDate\" placeholder=\"\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 43, $this->source); })()), "expirationDate", array()), "html", null, true);
        echo "\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"desciption\">Description</label>
    <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Description... | (pipe) interdit ! \" rows=\"5\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 48, $this->source); })()), "commentaryHtml", array()), "html", null, true);
        echo "</textarea>
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
            echo "      ";
            $context["selected"] = "";
            // line 55
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["val"], "value", array()) == twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 55, $this->source); })()), "creator", array()))) {
                // line 56
                echo "        ";
                $context["selected"] = "selected";
                // line 57
                echo "      ";
            }
            // line 58
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "value", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 58, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </select>
  </div>
</form>
<button type=\"button\" class=\"btn btn-link\" id=\"backButton\">Back</button>
<button type=\"button\" class=\"btn btn-success\" id=\"saveButton\">Save</button>
<button type=\"button\" class=\"btn btn-danger\" id=\"deleteButton\" data-href=\"/deleteHost?id=";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 65, $this->source); })()), "hostname", array()), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\">Delete</button>

<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                Delete host ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 71, $this->source); })()), "hostname", array()), "html", null, true);
        echo "
            </div>
            <div class=\"modal-body\">
                Do you want to delete host ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new Twig_Error_Runtime('Variable "host" does not exist.', 74, $this->source); })()), "hostname", array()), "html", null, true);
        echo " ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-danger btn-ok\">Delete</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 86
        echo "<script>
\$(document).ready(function(){
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


\t//alert (\$('expirationDate').val());
\t
\tif(\$('#expirationDate').val() != \"01-01-0001\"){
                \$('#expirationDate').prop('disabled', false);
\t\t\$(\"#expirationDateCheck\").prop('checked', true);
\t}
\t
\t\$(\"#dateModif\").datepicker({
\t\tlanguage:\"fr\",
\t});
\t\$(\"#expirationDate\").datepicker({
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
        return "dhcp/modifyHost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 86,  212 => 85,  192 => 74,  186 => 71,  177 => 65,  170 => 60,  157 => 58,  154 => 57,  151 => 56,  148 => 55,  145 => 54,  141 => 53,  133 => 48,  125 => 43,  110 => 31,  95 => 19,  88 => 15,  81 => 11,  75 => 7,  66 => 6,  46 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/dhcp/list.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modification de l'host {{ host.hostname }} {% endblock %}

{% block body %}
<form action=\"/saveHost\" id=\"formSaveHost\" method=\"post\">
\t<div class=\"form-row\">
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">Hostname</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"hostname\" name=\"hostname\" placeholder=\"18X51\" value=\"{{ host.hostname }}\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t<label for=\"hostname\">MAC Address</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"macAddress\" name=\"macAddress\" pattern=\"[0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2}\" placeholder=\"AA:AA:AA:AA:AA\" value=\"{{ host.macAddress }}\">
\t\t</div>
\t\t<div class=\"col-md-4 mb-3\">
\t\t  <label for=\"dateModif\">Date</label>
\t\t  <input type=\"text\" class=\"form-control\" id=\"dateModif\" name=\"dateModif\" placeholder=\"\" value=\"{{ host.dateModif|date('d-m-Y H:i:s') }}\">
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
      <input type=\"text\" class=\"form-control\" id=\"ipFixed\" name=\"ipFixed\" placeholder=\"192.168.0.1\" value=\"{{ host.fixedIpAddress }}\">
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
      <input type=\"text\" class=\"form-control\" id=\"expirationDate\" name=\"expirationDate\" placeholder=\"\" value=\"{{ host.expirationDate }}\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"desciption\">Description</label>
    <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Description... | (pipe) interdit ! \" rows=\"5\">{{ host.commentaryHtml }}</textarea>
  </div>
  <div class=\"form-group\">
    <label for=\"creator\">Administrateur</label>
    <select class=\"form-control\" id=\"creator\" name=\"creator\">
    {% for val in users %}
      {% set selected = '' %}
      {% if (val.value == host.creator) %}
        {% set selected = 'selected' %}
      {% endif %}
      <option value=\"{{val.value}}\" {{ selected }}>{{ val.name }}</option>
    {% endfor %}
    </select>
  </div>
</form>
<button type=\"button\" class=\"btn btn-link\" id=\"backButton\">Back</button>
<button type=\"button\" class=\"btn btn-success\" id=\"saveButton\">Save</button>
<button type=\"button\" class=\"btn btn-danger\" id=\"deleteButton\" data-href=\"/deleteHost?id={{ host.hostname }}\" data-toggle=\"modal\" data-target=\"#confirm-delete\">Delete</button>

<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                Delete host {{ host.hostname }}
            </div>
            <div class=\"modal-body\">
                Do you want to delete host {{ host.hostname }} ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                <a class=\"btn btn-danger btn-ok\">Delete</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block js %}
<script>
\$(document).ready(function(){
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


\t//alert (\$('expirationDate').val());
\t
\tif(\$('#expirationDate').val() != \"01-01-0001\"){
                \$('#expirationDate').prop('disabled', false);
\t\t\$(\"#expirationDateCheck\").prop('checked', true);
\t}
\t
\t\$(\"#dateModif\").datepicker({
\t\tlanguage:\"fr\",
\t});
\t\$(\"#expirationDate\").datepicker({
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
", "dhcp/modifyHost.html.twig", "/var/www/dhcp/templates/dhcp/modifyHost.html.twig");
    }
}
