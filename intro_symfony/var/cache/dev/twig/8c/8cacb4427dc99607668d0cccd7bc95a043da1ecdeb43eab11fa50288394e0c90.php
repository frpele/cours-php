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
        $__internal_e0b450eccdae8864ac0a35c27e63e56195dec6043a04a27adc3a589354d5ad71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b450eccdae8864ac0a35c27e63e56195dec6043a04a27adc3a589354d5ad71->enter($__internal_e0b450eccdae8864ac0a35c27e63e56195dec6043a04a27adc3a589354d5ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_80dec083224fd4bf86bb991b122378b68ac5b90beaa380b5d9e422423b926066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dec083224fd4bf86bb991b122378b68ac5b90beaa380b5d9e422423b926066->enter($__internal_80dec083224fd4bf86bb991b122378b68ac5b90beaa380b5d9e422423b926066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b450eccdae8864ac0a35c27e63e56195dec6043a04a27adc3a589354d5ad71->leave($__internal_e0b450eccdae8864ac0a35c27e63e56195dec6043a04a27adc3a589354d5ad71_prof);

        
        $__internal_80dec083224fd4bf86bb991b122378b68ac5b90beaa380b5d9e422423b926066->leave($__internal_80dec083224fd4bf86bb991b122378b68ac5b90beaa380b5d9e422423b926066_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_443b81a5bc07729af660f87e72a48bc7937a9612025dde15be76b349534dde77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443b81a5bc07729af660f87e72a48bc7937a9612025dde15be76b349534dde77->enter($__internal_443b81a5bc07729af660f87e72a48bc7937a9612025dde15be76b349534dde77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bd4d22e3bf46a085bcbb932829263c38538677c2264b3dff2595f3f51948511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd4d22e3bf46a085bcbb932829263c38538677c2264b3dff2595f3f51948511->enter($__internal_3bd4d22e3bf46a085bcbb932829263c38538677c2264b3dff2595f3f51948511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

  <select class=\"\" name=\"producer_id\">
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

    <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Producteur</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 45
            echo "  <tr>
    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      ";
            // line 51
            if ($this->getAttribute($context["f"], "producer", array())) {
                // line 52
                echo "
      ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "producer", array()), "name", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 55
                echo "      Aucun producteur
      ";
            }
            // line 57
            echo "    </td>
    <td>
      ";
            // line 59
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 60
                echo "      oui
      ";
            } else {
                // line 62
                echo "      non
      ";
            }
            // line 64
            echo "    </td>
    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
</table>

";
        
        $__internal_3bd4d22e3bf46a085bcbb932829263c38538677c2264b3dff2595f3f51948511->leave($__internal_3bd4d22e3bf46a085bcbb932829263c38538677c2264b3dff2595f3f51948511_prof);

        
        $__internal_443b81a5bc07729af660f87e72a48bc7937a9612025dde15be76b349534dde77->leave($__internal_443b81a5bc07729af660f87e72a48bc7937a9612025dde15be76b349534dde77_prof);

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
        return array (  169 => 71,  159 => 67,  155 => 66,  151 => 64,  147 => 62,  143 => 60,  141 => 59,  137 => 57,  133 => 55,  128 => 53,  125 => 52,  123 => 51,  116 => 47,  112 => 46,  109 => 45,  105 => 44,  84 => 25,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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

  <select class=\"\" name=\"producer_id\">
    <option value=\"0\">Choisir un producteur</option>
    {% for p in producers %}
      <option value=\" {{ p.id }}\">{{ p.name }}</option>
      {% endfor %}
  </select>

    <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Producteur</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  {% for f in fruits %}
  <tr>
    <td>{{ f.name }}</td>
    <td>{{ f.origin }}</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      {%if f.producer %}

      {{ f.producer.name }}
      {% else %}
      Aucun producteur
      {% endif %}
    </td>
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
