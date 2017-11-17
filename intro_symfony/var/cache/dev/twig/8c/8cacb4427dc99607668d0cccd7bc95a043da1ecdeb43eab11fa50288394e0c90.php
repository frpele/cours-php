<?php

/* fruit/index.html.twig */
class __TwigTemplate_d21eb80562e73d78c64f7d8aa5fb36ca9cb13266abe43c84ee8f19fbdc35eee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fruit/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e36b651fef6267e1318b94b792de7f31fdbf0ea8b74cb741591e87a1f10d689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e36b651fef6267e1318b94b792de7f31fdbf0ea8b74cb741591e87a1f10d689->enter($__internal_8e36b651fef6267e1318b94b792de7f31fdbf0ea8b74cb741591e87a1f10d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_c01345455739f9852466b25f52998ebd169e650acc453eaa080665d4feabadbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01345455739f9852466b25f52998ebd169e650acc453eaa080665d4feabadbe->enter($__internal_c01345455739f9852466b25f52998ebd169e650acc453eaa080665d4feabadbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e36b651fef6267e1318b94b792de7f31fdbf0ea8b74cb741591e87a1f10d689->leave($__internal_8e36b651fef6267e1318b94b792de7f31fdbf0ea8b74cb741591e87a1f10d689_prof);

        
        $__internal_c01345455739f9852466b25f52998ebd169e650acc453eaa080665d4feabadbe->leave($__internal_c01345455739f9852466b25f52998ebd169e650acc453eaa080665d4feabadbe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8657e0f857607807e2c596d047261070a84abb7988a8ef2fa534b425d7000a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8657e0f857607807e2c596d047261070a84abb7988a8ef2fa534b425d7000a8->enter($__internal_a8657e0f857607807e2c596d047261070a84abb7988a8ef2fa534b425d7000a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e41864cee0902e642810098a567d62ebb488e6a558e7d1a7bc6146afd2f2839f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41864cee0902e642810098a567d62ebb488e6a558e7d1a7bc6146afd2f2839f->enter($__internal_e41864cee0902e642810098a567d62ebb488e6a558e7d1a7bc6146afd2f2839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Fruits</h2>

<form class=\"form-inline\" method=\"post\">
  <div class=\"form-group\">
    <input type=\"text\" name=\"name\" placeholder=\"Nom\" >
  </div>

  <div class=\"form-group\">
    <input type=\"text\" name=\"origin\" placeholder=\"Origine\" >
  </div>
  <div class=\"form-group\">
    <label for=\"comestible\">Comestible</label>
    <input type=\"checkbox\" name=\"comestible\">
  </div>
  <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
  <select class=\"\" name=\"category\">
    <option value=\"0\">Choisir un producteur</option>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producers"] ?? $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "      <option value=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </select>
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 42
            echo "  <tr>
    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 46
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 47
                echo "      oui
      ";
            } else {
                // line 49
                echo "      non
      ";
            }
            // line 51
            echo "    </td>
    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
</table>

";
        
        $__internal_e41864cee0902e642810098a567d62ebb488e6a558e7d1a7bc6146afd2f2839f->leave($__internal_e41864cee0902e642810098a567d62ebb488e6a558e7d1a7bc6146afd2f2839f_prof);

        
        $__internal_a8657e0f857607807e2c596d047261070a84abb7988a8ef2fa534b425d7000a8->leave($__internal_a8657e0f857607807e2c596d047261070a84abb7988a8ef2fa534b425d7000a8_prof);

    }

    public function getTemplateName()
    {
        return "fruit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 58,  136 => 54,  132 => 53,  128 => 51,  124 => 49,  120 => 47,  118 => 46,  113 => 44,  109 => 43,  106 => 42,  102 => 41,  84 => 25,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h2>Fruits</h2>

<form class=\"form-inline\" method=\"post\">
  <div class=\"form-group\">
    <input type=\"text\" name=\"name\" placeholder=\"Nom\" >
  </div>

  <div class=\"form-group\">
    <input type=\"text\" name=\"origin\" placeholder=\"Origine\" >
  </div>
  <div class=\"form-group\">
    <label for=\"comestible\">Comestible</label>
    <input type=\"checkbox\" name=\"comestible\">
  </div>
  <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
  <select class=\"\" name=\"category\">
    <option value=\"0\">Choisir un producteur</option>
    {% for p in producers %}
      <option value=\" {{ p.id }}\">{{ p.name }}</option>
      {% endfor %}
  </select>
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  {% for f in fruits %}
  <tr>
    <td>{{ f.name }}</td>
    <td>{{ f.origin }}</td>
    <td>
      {% if f.comestible == 1 %}
      oui
      {% else %}
      non
      {% endif %}
    </td>
    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"{{ path('fruit_update', {'id': f.id}) }}\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"{{ path('fruit_delete', {'id': f.id}) }}\">Supprimer</a>
    </td>
  </tr>
  {% endfor %}

</table>

{% endblock %}
", "fruit/index.html.twig", "/var/www/html/intro_symfony/app/Resources/views/fruit/index.html.twig");
    }
}
