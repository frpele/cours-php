<?php

/* test/fruits.html.twig */
class __TwigTemplate_70ece2a6fe5ab3489b07c26cb35f841f6f3889152624286713155bd702a79aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/fruits.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b250db177b49667aa071eaaf7114a6370f1cec4c7a0dea5184ae951b71689b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b250db177b49667aa071eaaf7114a6370f1cec4c7a0dea5184ae951b71689b5->enter($__internal_9b250db177b49667aa071eaaf7114a6370f1cec4c7a0dea5184ae951b71689b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/fruits.html.twig"));

        $__internal_9de66478beb3d4f6bdf7b9d7cf86c2ea610d1123788b9c519d30a787373df545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de66478beb3d4f6bdf7b9d7cf86c2ea610d1123788b9c519d30a787373df545->enter($__internal_9de66478beb3d4f6bdf7b9d7cf86c2ea610d1123788b9c519d30a787373df545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/fruits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b250db177b49667aa071eaaf7114a6370f1cec4c7a0dea5184ae951b71689b5->leave($__internal_9b250db177b49667aa071eaaf7114a6370f1cec4c7a0dea5184ae951b71689b5_prof);

        
        $__internal_9de66478beb3d4f6bdf7b9d7cf86c2ea610d1123788b9c519d30a787373df545->leave($__internal_9de66478beb3d4f6bdf7b9d7cf86c2ea610d1123788b9c519d30a787373df545_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_b98b4afa845b6ceef31abf7bb550ee313a24be2e15886ffa3a5d1d67338aba9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98b4afa845b6ceef31abf7bb550ee313a24be2e15886ffa3a5d1d67338aba9f->enter($__internal_b98b4afa845b6ceef31abf7bb550ee313a24be2e15886ffa3a5d1d67338aba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_d05a0a137f2d896851691bf54b57335c6f58cc47bbd1cd8395bdb3d287a0b54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05a0a137f2d896851691bf54b57335c6f58cc47bbd1cd8395bdb3d287a0b54e->enter($__internal_d05a0a137f2d896851691bf54b57335c6f58cc47bbd1cd8395bdb3d287a0b54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "<style >
  .not-comestible {
    color: orange;
  }
</style>
";
        
        $__internal_d05a0a137f2d896851691bf54b57335c6f58cc47bbd1cd8395bdb3d287a0b54e->leave($__internal_d05a0a137f2d896851691bf54b57335c6f58cc47bbd1cd8395bdb3d287a0b54e_prof);

        
        $__internal_b98b4afa845b6ceef31abf7bb550ee313a24be2e15886ffa3a5d1d67338aba9f->leave($__internal_b98b4afa845b6ceef31abf7bb550ee313a24be2e15886ffa3a5d1d67338aba9f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be1c37554171df9be04bd24a8778e5976924ea43d2443feee96d508c2171ea8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1c37554171df9be04bd24a8778e5976924ea43d2443feee96d508c2171ea8a->enter($__internal_be1c37554171df9be04bd24a8778e5976924ea43d2443feee96d508c2171ea8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2223d680331d2b6f0fb2744970175dee304135e19bf839ea7e00b4ab8d4a6fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2223d680331d2b6f0fb2744970175dee304135e19bf839ea7e00b4ab8d4a6fd0->enter($__internal_2223d680331d2b6f0fb2744970175dee304135e19bf839ea7e00b4ab8d4a6fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
<ul>
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 15
            echo "  <li>";
            echo twig_escape_filter($this->env, $context["fruit"], "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>

<h2>Petit message en provenance du controleur</h2>
<p><strong>";
        // line 20
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</strong></p>

<select>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits2"] ?? $this->getContext($context, "fruits2")));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 24
            echo "  <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fruit"], "name", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>

<table class=\"table table-bordered table-striped\">
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits2"] ?? $this->getContext($context, "fruits2")));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 30
            echo "  <tr>
    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["fruit"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["fruit"], "origin", array()), "html", null, true);
            echo "</td>
    <td >
      ";
            // line 34
            if ( !$this->getAttribute($context["fruit"], "comestible", array())) {
                echo " <span >NON </span>";
            }
            // line 35
            echo "      Comestible
    </td>

  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>

<table class=\"table table-bordered table-striped\">
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits3"] ?? $this->getContext($context, "fruits3")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 44
            echo "  <tr>
    <td> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getOrigin", array(), "method"), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 48
            if ( !$this->getAttribute($context["f"], "comestible", array())) {
                echo " <span class=\"not-comestible\">Dangereux </span>
      ";
            } else {
                // line 49
                echo "<span >Aucun risque connu</span>";
            }
            // line 50
            echo "    </td>
    <td>
      ";
            // line 52
            if ( !$this->getAttribute($context["f"], "wiki", array())) {
                echo " <span>Aucun lien Wiki </span>
      ";
            } else {
                // line 53
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getWiki", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getWiki", array(), "method"), "html", null, true);
                echo "</a>";
            }
            // line 54
            echo "    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</table>


";
        // line 60
        if (($context["toto"] ?? $this->getContext($context, "toto"))) {
            // line 61
            echo "  <p>Toto est vrai</p>
";
        } else {
            // line 62
            echo "  <p>Toto n'est pas vrai (vaut false ou null)</p>
";
        }
        // line 64
        echo "
";
        
        $__internal_2223d680331d2b6f0fb2744970175dee304135e19bf839ea7e00b4ab8d4a6fd0->leave($__internal_2223d680331d2b6f0fb2744970175dee304135e19bf839ea7e00b4ab8d4a6fd0_prof);

        
        $__internal_be1c37554171df9be04bd24a8778e5976924ea43d2443feee96d508c2171ea8a->leave($__internal_be1c37554171df9be04bd24a8778e5976924ea43d2443feee96d508c2171ea8a_prof);

    }

    public function getTemplateName()
    {
        return "test/fruits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 64,  216 => 62,  212 => 61,  210 => 60,  205 => 57,  197 => 54,  190 => 53,  185 => 52,  181 => 50,  178 => 49,  173 => 48,  168 => 46,  164 => 45,  161 => 44,  157 => 43,  152 => 40,  142 => 35,  138 => 34,  133 => 32,  129 => 31,  126 => 30,  122 => 29,  117 => 26,  108 => 24,  104 => 23,  98 => 20,  93 => 17,  84 => 15,  80 => 14,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block css %}
<style >
  .not-comestible {
    color: orange;
  }
</style>
{% endblock %}

{% block body %}
<h1>{{ title }}</h1>
<ul>
  {% for fruit in fruits %}
  <li>{{ fruit }}</li>
  {% endfor %}
</ul>

<h2>Petit message en provenance du controleur</h2>
<p><strong>{{ message }}</strong></p>

<select>
  {% for fruit in fruits2 %}
  <option>{{ fruit.name }}</option>
  {% endfor %}
</select>

<table class=\"table table-bordered table-striped\">
  {% for fruit in fruits2 %}
  <tr>
    <td>{{ fruit.name }}</td>
    <td>{{ fruit.origin }}</td>
    <td >
      {% if not fruit.comestible %} <span >NON </span>{% endif%}
      Comestible
    </td>

  </tr>
  {% endfor %}
</table>

<table class=\"table table-bordered table-striped\">
  {% for f in fruits3 %}
  <tr>
    <td> {{f.name }}</td>
    <td> {{f.getOrigin() }}</td>
    <td>
      {% if not f.comestible %} <span class=\"not-comestible\">Dangereux </span>
      {% else %}<span >Aucun risque connu</span>{% endif%}
    </td>
    <td>
      {% if not f.wiki %} <span>Aucun lien Wiki </span>
      {% else %}<a href=\"{{f.getWiki() }}\" target=\"_blank\">{{f.getWiki() }}</a>{% endif%}
    </td>
  </tr>
  {% endfor %}
</table>


{% if toto %}
  <p>Toto est vrai</p>
{% else %}  <p>Toto n'est pas vrai (vaut false ou null)</p>
{% endif %}

{% endblock %}
", "test/fruits.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/test/fruits.html.twig");
    }
}
