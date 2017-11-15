<?php

/* test/fruits-comestibles.html.twig */
class __TwigTemplate_10a0177336e4d79c237dde936434ef8005e58ecb00d200d75961cfa289fa7a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/fruits-comestibles.html.twig", 1);
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
        $__internal_3ef81b99064a5e8751f1929ad4670dbdfc8275c9e34d41e03d2f91720c5b847a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef81b99064a5e8751f1929ad4670dbdfc8275c9e34d41e03d2f91720c5b847a->enter($__internal_3ef81b99064a5e8751f1929ad4670dbdfc8275c9e34d41e03d2f91720c5b847a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/fruits-comestibles.html.twig"));

        $__internal_b5db2dedc2c72f0d1642ab6385d33d882091f266c363fa851b78cc8fef6fb1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5db2dedc2c72f0d1642ab6385d33d882091f266c363fa851b78cc8fef6fb1f0->enter($__internal_b5db2dedc2c72f0d1642ab6385d33d882091f266c363fa851b78cc8fef6fb1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/fruits-comestibles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ef81b99064a5e8751f1929ad4670dbdfc8275c9e34d41e03d2f91720c5b847a->leave($__internal_3ef81b99064a5e8751f1929ad4670dbdfc8275c9e34d41e03d2f91720c5b847a_prof);

        
        $__internal_b5db2dedc2c72f0d1642ab6385d33d882091f266c363fa851b78cc8fef6fb1f0->leave($__internal_b5db2dedc2c72f0d1642ab6385d33d882091f266c363fa851b78cc8fef6fb1f0_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_20c6c4d141edb92b8489ab89d73357ba150baaa489e5be146c9b0956dd6ceb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c6c4d141edb92b8489ab89d73357ba150baaa489e5be146c9b0956dd6ceb1f->enter($__internal_20c6c4d141edb92b8489ab89d73357ba150baaa489e5be146c9b0956dd6ceb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_c8bb7162362e5b3c8379caba087383b55355a4cb85b7571092d083644a2ac9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bb7162362e5b3c8379caba087383b55355a4cb85b7571092d083644a2ac9da->enter($__internal_c8bb7162362e5b3c8379caba087383b55355a4cb85b7571092d083644a2ac9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "<style >
  .not-comestible {
    color: orange;
  }
</style>
";
        
        $__internal_c8bb7162362e5b3c8379caba087383b55355a4cb85b7571092d083644a2ac9da->leave($__internal_c8bb7162362e5b3c8379caba087383b55355a4cb85b7571092d083644a2ac9da_prof);

        
        $__internal_20c6c4d141edb92b8489ab89d73357ba150baaa489e5be146c9b0956dd6ceb1f->leave($__internal_20c6c4d141edb92b8489ab89d73357ba150baaa489e5be146c9b0956dd6ceb1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f493b3b3941297e6b66c690400cd32cb8796fc847a1bb4f07325e319c186ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f493b3b3941297e6b66c690400cd32cb8796fc847a1bb4f07325e319c186ab->enter($__internal_14f493b3b3941297e6b66c690400cd32cb8796fc847a1bb4f07325e319c186ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2c2e92654f62f040cb5069ef413391c9a193d9ea1226f8fc3cc505014992d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c2e92654f62f040cb5069ef413391c9a193d9ea1226f8fc3cc505014992d0c->enter($__internal_d2c2e92654f62f040cb5069ef413391c9a193d9ea1226f8fc3cc505014992d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

<table class=\"table table-bordered table-striped\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits3"] ?? $this->getContext($context, "fruits3")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 16
            echo "  ";
            if ($this->getAttribute($context["f"], "comestible", array())) {
                // line 17
                echo "  <tr>
    <td> ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
                echo "</td>
    <td> ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getOrigin", array(), "method"), "html", null, true);
                echo "</td>
    <td>
       <span >Aucun risque connu</span>
    </td>
    <td>
      ";
                // line 24
                if ( !$this->getAttribute($context["f"], "wiki", array())) {
                    echo " <span>Aucun lien Wiki </span>
      ";
                } else {
                    // line 25
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getWiki", array(), "method"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getWiki", array(), "method"), "html", null, true);
                    echo "</a>";
                }
                // line 26
                echo "    </td>
  </tr>
  ";
            }
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>


";
        
        $__internal_d2c2e92654f62f040cb5069ef413391c9a193d9ea1226f8fc3cc505014992d0c->leave($__internal_d2c2e92654f62f040cb5069ef413391c9a193d9ea1226f8fc3cc505014992d0c_prof);

        
        $__internal_14f493b3b3941297e6b66c690400cd32cb8796fc847a1bb4f07325e319c186ab->leave($__internal_14f493b3b3941297e6b66c690400cd32cb8796fc847a1bb4f07325e319c186ab_prof);

    }

    public function getTemplateName()
    {
        return "test/fruits-comestibles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 30,  120 => 29,  115 => 26,  108 => 25,  103 => 24,  95 => 19,  91 => 18,  88 => 17,  85 => 16,  81 => 15,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
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

<table class=\"table table-bordered table-striped\">
  {% for f in fruits3 %}
  {% if f.comestible %}
  <tr>
    <td> {{f.name }}</td>
    <td> {{f.getOrigin() }}</td>
    <td>
       <span >Aucun risque connu</span>
    </td>
    <td>
      {% if not f.wiki %} <span>Aucun lien Wiki </span>
      {% else %}<a href=\"{{f.getWiki() }}\" target=\"_blank\">{{f.getWiki() }}</a>{% endif%}
    </td>
  </tr>
  {% endif%}
  {% endfor %}
</table>


{% endblock %}
", "test/fruits-comestibles.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/test/fruits-comestibles.html.twig");
    }
}
