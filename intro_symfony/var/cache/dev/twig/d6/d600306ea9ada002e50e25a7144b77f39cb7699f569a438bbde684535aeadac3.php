<?php

/* test/example.html.twig */
class __TwigTemplate_4879fe0f0a2b95b537f5649b5d90cf78be049055be014ec4055604a3f6214316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/example.html.twig", 1);
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
        $__internal_a1f6a45c8145277f9a2de8e7535ef353287b0da4ceb3b2b36dae54581d51c3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f6a45c8145277f9a2de8e7535ef353287b0da4ceb3b2b36dae54581d51c3ba->enter($__internal_a1f6a45c8145277f9a2de8e7535ef353287b0da4ceb3b2b36dae54581d51c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/example.html.twig"));

        $__internal_37d981d8b6b9b0a182a904d7e4e7c5ee2b0b96c4bff5ee7faed058e7095243eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d981d8b6b9b0a182a904d7e4e7c5ee2b0b96c4bff5ee7faed058e7095243eb->enter($__internal_37d981d8b6b9b0a182a904d7e4e7c5ee2b0b96c4bff5ee7faed058e7095243eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/example.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f6a45c8145277f9a2de8e7535ef353287b0da4ceb3b2b36dae54581d51c3ba->leave($__internal_a1f6a45c8145277f9a2de8e7535ef353287b0da4ceb3b2b36dae54581d51c3ba_prof);

        
        $__internal_37d981d8b6b9b0a182a904d7e4e7c5ee2b0b96c4bff5ee7faed058e7095243eb->leave($__internal_37d981d8b6b9b0a182a904d7e4e7c5ee2b0b96c4bff5ee7faed058e7095243eb_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_f1bcb5c48e48a2c88cbcb080c9bb6ab5a2d8df597d2ccd8ebe180d8da0659343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bcb5c48e48a2c88cbcb080c9bb6ab5a2d8df597d2ccd8ebe180d8da0659343->enter($__internal_f1bcb5c48e48a2c88cbcb080c9bb6ab5a2d8df597d2ccd8ebe180d8da0659343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_4bc4529e8d63a1c58b735829aa894dc7b9a7ff68246b38eb1897d638e0dbac3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc4529e8d63a1c58b735829aa894dc7b9a7ff68246b38eb1897d638e0dbac3c->enter($__internal_4bc4529e8d63a1c58b735829aa894dc7b9a7ff68246b38eb1897d638e0dbac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_4bc4529e8d63a1c58b735829aa894dc7b9a7ff68246b38eb1897d638e0dbac3c->leave($__internal_4bc4529e8d63a1c58b735829aa894dc7b9a7ff68246b38eb1897d638e0dbac3c_prof);

        
        $__internal_f1bcb5c48e48a2c88cbcb080c9bb6ab5a2d8df597d2ccd8ebe180d8da0659343->leave($__internal_f1bcb5c48e48a2c88cbcb080c9bb6ab5a2d8df597d2ccd8ebe180d8da0659343_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ceb7dbf5a7c414da2166400a4818cdec2cfbcafc30f8fc4503452d70671f570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ceb7dbf5a7c414da2166400a4818cdec2cfbcafc30f8fc4503452d70671f570->enter($__internal_0ceb7dbf5a7c414da2166400a4818cdec2cfbcafc30f8fc4503452d70671f570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_158c3547c0d893e9b2f4797591ad994adfad3d7c798e750d410c8f411be7615c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158c3547c0d893e9b2f4797591ad994adfad3d7c798e750d410c8f411be7615c->enter($__internal_158c3547c0d893e9b2f4797591ad994adfad3d7c798e750d410c8f411be7615c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<table class=\"table table-bordered table-striped\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 10
            echo "<tr>
  <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
  <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
  <td>
    ";
            // line 14
            if ( !$this->getAttribute($context["f"], "comestible", array())) {
                // line 15
                echo "    <span class=\"not-comestible\">Dangereux</span>
    ";
            }
            // line 17
            echo "  </td>
</tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>





";
        
        $__internal_158c3547c0d893e9b2f4797591ad994adfad3d7c798e750d410c8f411be7615c->leave($__internal_158c3547c0d893e9b2f4797591ad994adfad3d7c798e750d410c8f411be7615c_prof);

        
        $__internal_0ceb7dbf5a7c414da2166400a4818cdec2cfbcafc30f8fc4503452d70671f570->leave($__internal_0ceb7dbf5a7c414da2166400a4818cdec2cfbcafc30f8fc4503452d70671f570_prof);

    }

    public function getTemplateName()
    {
        return "test/example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  98 => 17,  94 => 15,  92 => 14,  87 => 12,  83 => 11,  80 => 10,  76 => 9,  72 => 7,  63 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block body %}

<table class=\"table table-bordered table-striped\">
  {% for f in fruits %}
<tr>
  <td>{{ f.name }}</td>
  <td>{{ f.origin}}</td>
  <td>
    {% if not f.comestible %}
    <span class=\"not-comestible\">Dangereux</span>
    {% endif %}
  </td>
</tr>
  {% endfor %}
</table>





{% endblock %}
", "test/example.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/test/example.html.twig");
    }
}
