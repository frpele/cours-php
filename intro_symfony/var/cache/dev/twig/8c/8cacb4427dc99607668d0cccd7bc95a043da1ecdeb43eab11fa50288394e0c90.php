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
        $__internal_d6eb54c3050df9f52cdc30ab7ea5436a9c82820999ea486e68a5cd9b27724c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6eb54c3050df9f52cdc30ab7ea5436a9c82820999ea486e68a5cd9b27724c0a->enter($__internal_d6eb54c3050df9f52cdc30ab7ea5436a9c82820999ea486e68a5cd9b27724c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_ecd03ccb1d7795dba8e958c9f11f2cf23a1a0bfd2155e9a193600e5030882b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd03ccb1d7795dba8e958c9f11f2cf23a1a0bfd2155e9a193600e5030882b23->enter($__internal_ecd03ccb1d7795dba8e958c9f11f2cf23a1a0bfd2155e9a193600e5030882b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6eb54c3050df9f52cdc30ab7ea5436a9c82820999ea486e68a5cd9b27724c0a->leave($__internal_d6eb54c3050df9f52cdc30ab7ea5436a9c82820999ea486e68a5cd9b27724c0a_prof);

        
        $__internal_ecd03ccb1d7795dba8e958c9f11f2cf23a1a0bfd2155e9a193600e5030882b23->leave($__internal_ecd03ccb1d7795dba8e958c9f11f2cf23a1a0bfd2155e9a193600e5030882b23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_204580431903fab58b63910ace331949425e84e4323eafcf93719420391df414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204580431903fab58b63910ace331949425e84e4323eafcf93719420391df414->enter($__internal_204580431903fab58b63910ace331949425e84e4323eafcf93719420391df414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a81363760bfa466fe5d531b740a14898135336bcce817fdf30082b797999701c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81363760bfa466fe5d531b740a14898135336bcce817fdf30082b797999701c->enter($__internal_a81363760bfa466fe5d531b740a14898135336bcce817fdf30082b797999701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <th>Détaillant</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 46
            echo "  <tr>
    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      ";
            // line 52
            if ($this->getAttribute($context["f"], "producer", array())) {
                // line 53
                echo "
      ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "producer", array()), "name", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 56
                echo "      Aucun producteur
      ";
            }
            // line 58
            echo "    </td>
    <td>
    ";
            // line 60
            if ((twig_length_filter($this->env, $this->getAttribute($context["f"], "retailors", array())) > 0)) {
                // line 61
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "retailors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 62
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                    echo ",
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "    ";
            } else {
                // line 65
                echo "    Aucun distributeur
    ";
            }
            // line 67
            echo "    </td>
    <td>
      ";
            // line 69
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 70
                echo "      oui
      ";
            } else {
                // line 72
                echo "      non
      ";
            }
            // line 74
            echo "    </td>
    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
</table>

";
        
        $__internal_a81363760bfa466fe5d531b740a14898135336bcce817fdf30082b797999701c->leave($__internal_a81363760bfa466fe5d531b740a14898135336bcce817fdf30082b797999701c_prof);

        
        $__internal_204580431903fab58b63910ace331949425e84e4323eafcf93719420391df414->leave($__internal_204580431903fab58b63910ace331949425e84e4323eafcf93719420391df414_prof);

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
        return array (  197 => 81,  187 => 77,  183 => 76,  179 => 74,  175 => 72,  171 => 70,  169 => 69,  165 => 67,  161 => 65,  158 => 64,  149 => 62,  144 => 61,  142 => 60,  138 => 58,  134 => 56,  129 => 54,  126 => 53,  124 => 52,  117 => 48,  113 => 47,  110 => 46,  106 => 45,  84 => 25,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <th>Détaillant</th>
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
    {% if f.retailors | length > 0 %}
      {% for r in f.retailors %}
      {{ r.name }},
      {% endfor %}
    {% else %}
    Aucun distributeur
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
