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
        $__internal_93d49f26fe76329df3b78eba1efdede7822ebe46f9b3d5d480cb96a6910a5a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d49f26fe76329df3b78eba1efdede7822ebe46f9b3d5d480cb96a6910a5a36->enter($__internal_93d49f26fe76329df3b78eba1efdede7822ebe46f9b3d5d480cb96a6910a5a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_33c28d39f40792616f3458e33b284643d9061dafb8eb39b7c0150d3ea3ae2d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c28d39f40792616f3458e33b284643d9061dafb8eb39b7c0150d3ea3ae2d91->enter($__internal_33c28d39f40792616f3458e33b284643d9061dafb8eb39b7c0150d3ea3ae2d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d49f26fe76329df3b78eba1efdede7822ebe46f9b3d5d480cb96a6910a5a36->leave($__internal_93d49f26fe76329df3b78eba1efdede7822ebe46f9b3d5d480cb96a6910a5a36_prof);

        
        $__internal_33c28d39f40792616f3458e33b284643d9061dafb8eb39b7c0150d3ea3ae2d91->leave($__internal_33c28d39f40792616f3458e33b284643d9061dafb8eb39b7c0150d3ea3ae2d91_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8501873d75caf6c970329bc79eba2631236a4724521af64aa56a51146aa3bb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8501873d75caf6c970329bc79eba2631236a4724521af64aa56a51146aa3bb2b->enter($__internal_8501873d75caf6c970329bc79eba2631236a4724521af64aa56a51146aa3bb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_010ee1bbeb00820e9173feff563bcfd045471de0ca97b9e6ca9ee0e049d1badc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010ee1bbeb00820e9173feff563bcfd045471de0ca97b9e6ca9ee0e049d1badc->enter($__internal_010ee1bbeb00820e9173feff563bcfd045471de0ca97b9e6ca9ee0e049d1badc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Fruits</h2>

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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producers"] ?? $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
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
        // line 25
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <p>Catégories</p>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 31
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
        // line 33
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
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 54
            echo "  <tr>
    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      ";
            // line 60
            if ($this->getAttribute($context["f"], "producer", array())) {
                // line 61
                echo "
      ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "producer", array()), "name", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 64
                echo "      Aucun producteur
      ";
            }
            // line 66
            echo "    </td>
    <td style=\"display:none\" >
    ";
            // line 68
            if ((twig_length_filter($this->env, $this->getAttribute($context["f"], "retailors", array())) > 0)) {
                // line 69
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "retailors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 70
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                    echo ",
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "    ";
            } else {
                // line 73
                echo "    Aucun distributeur
    ";
            }
            // line 75
            echo "    </td>
    <td>
      ";
            // line 77
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 78
                echo "      oui
      ";
            } else {
                // line 80
                echo "      non
      ";
            }
            // line 82
            echo "    </td>
    <td>
      <a class=\"btn btn-default btn-xs\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_details", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Détail</a>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
</table>

";
        
        $__internal_010ee1bbeb00820e9173feff563bcfd045471de0ca97b9e6ca9ee0e049d1badc->leave($__internal_010ee1bbeb00820e9173feff563bcfd045471de0ca97b9e6ca9ee0e049d1badc_prof);

        
        $__internal_8501873d75caf6c970329bc79eba2631236a4724521af64aa56a51146aa3bb2b->leave($__internal_8501873d75caf6c970329bc79eba2631236a4724521af64aa56a51146aa3bb2b_prof);

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
        return array (  223 => 90,  213 => 86,  209 => 85,  205 => 84,  201 => 82,  197 => 80,  193 => 78,  191 => 77,  187 => 75,  183 => 73,  180 => 72,  171 => 70,  166 => 69,  164 => 68,  160 => 66,  156 => 64,  151 => 62,  148 => 61,  146 => 60,  139 => 56,  135 => 55,  132 => 54,  128 => 53,  106 => 33,  95 => 31,  91 => 30,  84 => 25,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
