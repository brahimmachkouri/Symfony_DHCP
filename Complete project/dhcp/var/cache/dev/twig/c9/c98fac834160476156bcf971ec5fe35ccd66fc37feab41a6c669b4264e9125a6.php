<?php

/* dhcp/list.html.twig */
class __TwigTemplate_11e6e6e36020438b7bb1656d8822e5c3b4225d6267125544a1e2b9ca3e8b7efc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "dhcp/list.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dhcp/list.html.twig"));

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
        echo "<h2>Nombre d'entrée du fichier '";
        echo twig_escape_filter($this->env, (isset($context["fn"]) || array_key_exists("fn", $context) ? $context["fn"] : (function () { throw new Twig_Error_Runtime('Variable "fn" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "' : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["hosts"]) || array_key_exists("hosts", $context) ? $context["hosts"] : (function () { throw new Twig_Error_Runtime('Variable "hosts" does not exist.', 8, $this->source); })())), "html", null, true);
        echo "</h2>
<div class=\"table-responsive\">
\t<table class=\"table table-hover table-sm\">
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hosts"]) || array_key_exists("hosts", $context) ? $context["hosts"] : (function () { throw new Twig_Error_Runtime('Variable "hosts" does not exist.', 11, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
            // line 12
            echo "\t  
      ";
            // line 13
            $context["class"] = "";
            // line 14
            echo "\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["host"], "fixedIpAddress", array()) != "")) {
                // line 15
                echo "\t     ";
                $context["class"] = "class=\"table-warning\"";
                // line 16
                echo "\t  ";
            }
            // line 17
            echo "\t\t\t<tr ";
            echo (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 17, $this->source); })());
            echo "><th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()), "html", null, true);
            echo "</th><td><a href=\"/modifyHost?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "hostname", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "hostname", array()), "html", null, true);
            echo "</a></td><td><a href=\"/modifyHost?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "hostname", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "macAddress", array()), "html", null, true);
            echo "</a></td><td><a href=\"/modifyHost?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "hostname", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "dateModif", array())), "html", null, true);
            echo "</a></td><td><a href=\"/modifyHost?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "hostname", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "expirationDate", array()), "html", null, true);
            echo "</a></td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["host"], "fixedIpAddress", array()), "html", null, true);
            echo "</td></tr>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dhcp/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 19,  112 => 17,  109 => 16,  106 => 15,  103 => 14,  101 => 13,  98 => 12,  81 => 11,  72 => 8,  63 => 7,  45 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/dhcp/list.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}DHCP Host list{% endblock %}


{% block body %}
<h2>Nombre d'entrée du fichier '{{ fn }}' : {{ hosts|length }}</h2>
<div class=\"table-responsive\">
\t<table class=\"table table-hover table-sm\">
\t{% for host in hosts %}
\t  
      {% set class = '' %}
\t  {% if (host.fixedIpAddress != \"\") %}
\t     {% set class='class=\"table-warning\"' %}
\t  {% endif %}
\t\t\t<tr {{ class|raw }}><th scope=\"row\">{{ loop.index0 }}</th><td><a href=\"/modifyHost?id={{ host.hostname }}\">{{ host.hostname }}</a></td><td><a href=\"/modifyHost?id={{ host.hostname }}\">{{ host.macAddress }}</a></td><td><a href=\"/modifyHost?id={{ host.hostname }}\">{{ host.dateModif|date }}</a></td><td><a href=\"/modifyHost?id={{ host.hostname }}\">{{ host.expirationDate }}</a></td><td>{{ host.fixedIpAddress }}</td></tr>
\t{% endfor %}
\t</table>
</div>
{% endblock %}
", "dhcp/list.html.twig", "/var/www/dhcp/templates/dhcp/list.html.twig");
    }
}
