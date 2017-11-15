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
        $__internal_89bb8836509d1ac1861ef0eae16a55b525ff4052d442f8b8948619f63a4f5e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bb8836509d1ac1861ef0eae16a55b525ff4052d442f8b8948619f63a4f5e55->enter($__internal_89bb8836509d1ac1861ef0eae16a55b525ff4052d442f8b8948619f63a4f5e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_c55bfc31a9fe394d445af808b52f6236ebed53f6c1e57428fcc236631d75408b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55bfc31a9fe394d445af808b52f6236ebed53f6c1e57428fcc236631d75408b->enter($__internal_c55bfc31a9fe394d445af808b52f6236ebed53f6c1e57428fcc236631d75408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89bb8836509d1ac1861ef0eae16a55b525ff4052d442f8b8948619f63a4f5e55->leave($__internal_89bb8836509d1ac1861ef0eae16a55b525ff4052d442f8b8948619f63a4f5e55_prof);

        
        $__internal_c55bfc31a9fe394d445af808b52f6236ebed53f6c1e57428fcc236631d75408b->leave($__internal_c55bfc31a9fe394d445af808b52f6236ebed53f6c1e57428fcc236631d75408b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c16aa9eca50d155355bbc16ef9f6ce77bdc2c6158b08aef0468da844d1594769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16aa9eca50d155355bbc16ef9f6ce77bdc2c6158b08aef0468da844d1594769->enter($__internal_c16aa9eca50d155355bbc16ef9f6ce77bdc2c6158b08aef0468da844d1594769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e05af39d1e7a45130eafa90ef2f00657eb942a377106940e6d90402ce0f8fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e05af39d1e7a45130eafa90ef2f00657eb942a377106940e6d90402ce0f8fd6->enter($__internal_1e05af39d1e7a45130eafa90ef2f00657eb942a377106940e6d90402ce0f8fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 36
            echo "  <tr>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 40
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 41
                echo "      oui
      ";
            } else {
                // line 43
                echo "      non
      ";
            }
            // line 45
            echo "    </td>
    <td>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
</table>

";
        
        $__internal_1e05af39d1e7a45130eafa90ef2f00657eb942a377106940e6d90402ce0f8fd6->leave($__internal_1e05af39d1e7a45130eafa90ef2f00657eb942a377106940e6d90402ce0f8fd6_prof);

        
        $__internal_c16aa9eca50d155355bbc16ef9f6ce77bdc2c6158b08aef0468da844d1594769->leave($__internal_c16aa9eca50d155355bbc16ef9f6ce77bdc2c6158b08aef0468da844d1594769_prof);

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
        return array (  122 => 51,  112 => 47,  108 => 45,  104 => 43,  100 => 41,  98 => 40,  93 => 38,  89 => 37,  86 => 36,  82 => 35,  49 => 4,  40 => 3,  11 => 1,);
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
      <a class=\"btn btn-danger btn-xs\" href=\"{{ path('fruit_delete', {'id': f.id}) }}\">Supprimer</a>
    </td>
  </tr>
  {% endfor %}

</table>

{% endblock %}
", "fruit/index.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/fruit/index.html.twig");
    }
}
