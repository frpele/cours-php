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
        $__internal_607798d88db47acae414f77e57ceb609409c9bc0b86018a8db36a905956a6fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607798d88db47acae414f77e57ceb609409c9bc0b86018a8db36a905956a6fc9->enter($__internal_607798d88db47acae414f77e57ceb609409c9bc0b86018a8db36a905956a6fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_7d60ef45828df0d1443650af661c0e0d463bf88504f52670da57cad6d1ef345b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d60ef45828df0d1443650af661c0e0d463bf88504f52670da57cad6d1ef345b->enter($__internal_7d60ef45828df0d1443650af661c0e0d463bf88504f52670da57cad6d1ef345b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_607798d88db47acae414f77e57ceb609409c9bc0b86018a8db36a905956a6fc9->leave($__internal_607798d88db47acae414f77e57ceb609409c9bc0b86018a8db36a905956a6fc9_prof);

        
        $__internal_7d60ef45828df0d1443650af661c0e0d463bf88504f52670da57cad6d1ef345b->leave($__internal_7d60ef45828df0d1443650af661c0e0d463bf88504f52670da57cad6d1ef345b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83020f0467d4781bbfa6d5db4acbf5dbae4785100305b666623889ee78dc3153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83020f0467d4781bbfa6d5db4acbf5dbae4785100305b666623889ee78dc3153->enter($__internal_83020f0467d4781bbfa6d5db4acbf5dbae4785100305b666623889ee78dc3153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b06264022ea9d06b604fa04e1e4fbecd0a0fa1750ff92b56e2951927710b6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b06264022ea9d06b604fa04e1e4fbecd0a0fa1750ff92b56e2951927710b6b1->enter($__internal_9b06264022ea9d06b604fa04e1e4fbecd0a0fa1750ff92b56e2951927710b6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Fruits</h2>

  <button id=\"btnHideForm\" type=\"button\">Afficher le formulaire</button>
<form class=\"form-inline well\" method=\"post\">
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
  <div class=\"form-group\">
    <select class=\"\" name=\"producer_id\">
      <option value=\"0\">Choisir un producteur</option>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producers"] ?? $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "        <option value=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <p>Catégories</p>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 32
            echo "    <input type=\"checkbox\" name=\"categories[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>

    <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Producteur</th>
    <th style=\"display:none\">Détaillant</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 55
            echo "  <tr>
    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      ";
            // line 61
            if ($this->getAttribute($context["f"], "producer", array())) {
                // line 62
                echo "
      ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "producer", array()), "name", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 65
                echo "      Aucun producteur
      ";
            }
            // line 67
            echo "    </td>
    <td style=\"display:none\" >
    ";
            // line 69
            if ((twig_length_filter($this->env, $this->getAttribute($context["f"], "retailors", array())) > 0)) {
                // line 70
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "retailors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 71
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                    echo ",
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "    ";
            } else {
                // line 74
                echo "    Aucun distributeur
    ";
            }
            // line 76
            echo "    </td>
    <td>
      ";
            // line 78
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 79
                echo "      oui
      ";
            } else {
                // line 81
                echo "      non
      ";
            }
            // line 83
            echo "    </td>
    <td>
      <a class=\"btn btn-default btn-xs\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_details", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Détail</a>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
</table>

";
        
        $__internal_9b06264022ea9d06b604fa04e1e4fbecd0a0fa1750ff92b56e2951927710b6b1->leave($__internal_9b06264022ea9d06b604fa04e1e4fbecd0a0fa1750ff92b56e2951927710b6b1_prof);

        
        $__internal_83020f0467d4781bbfa6d5db4acbf5dbae4785100305b666623889ee78dc3153->leave($__internal_83020f0467d4781bbfa6d5db4acbf5dbae4785100305b666623889ee78dc3153_prof);

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
        return array (  224 => 91,  214 => 87,  210 => 86,  206 => 85,  202 => 83,  198 => 81,  194 => 79,  192 => 78,  188 => 76,  184 => 74,  181 => 73,  172 => 71,  167 => 70,  165 => 69,  161 => 67,  157 => 65,  152 => 63,  149 => 62,  147 => 61,  140 => 57,  136 => 56,  133 => 55,  129 => 54,  107 => 34,  96 => 32,  92 => 31,  85 => 26,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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

  <button id=\"btnHideForm\" type=\"button\">Afficher le formulaire</button>
<form class=\"form-inline well\" method=\"post\">
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
  <div class=\"form-group\">
    <select class=\"\" name=\"producer_id\">
      <option value=\"0\">Choisir un producteur</option>
      {% for p in producers %}
        <option value=\" {{ p.id }}\">{{ p.name }}</option>
        {% endfor %}
    </select>
  </div>

  <div class=\"form-group\">
    <p>Catégories</p>
    {% for c in categories %}
    <input type=\"checkbox\" name=\"categories[]\" value=\"{{ c.id }}\"> {{ c.name}}
    {% endfor %}
  </div>

    <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Producteur</th>
    <th style=\"display:none\">Détaillant</th>
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
    <td style=\"display:none\" >
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
      <a class=\"btn btn-default btn-xs\" href=\"{{ path('fruit_details', {'id': f.id}) }}\">Détail</a>
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
