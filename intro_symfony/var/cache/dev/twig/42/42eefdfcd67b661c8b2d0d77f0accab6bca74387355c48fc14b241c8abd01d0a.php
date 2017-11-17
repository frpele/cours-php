<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_5d35b1a1fc5d6586a7e362a52a382b2055b5562eacc3c28f4e360892f143638f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d35b1a1fc5d6586a7e362a52a382b2055b5562eacc3c28f4e360892f143638f->enter($__internal_5d35b1a1fc5d6586a7e362a52a382b2055b5562eacc3c28f4e360892f143638f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a7b621def7de175b913e9477aa5f1d1acba9073df244e0cfa77ab4ccbd9d09d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b621def7de175b913e9477aa5f1d1acba9073df244e0cfa77ab4ccbd9d09d6->enter($__internal_a7b621def7de175b913e9477aa5f1d1acba9073df244e0cfa77ab4ccbd9d09d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d35b1a1fc5d6586a7e362a52a382b2055b5562eacc3c28f4e360892f143638f->leave($__internal_5d35b1a1fc5d6586a7e362a52a382b2055b5562eacc3c28f4e360892f143638f_prof);

        
        $__internal_a7b621def7de175b913e9477aa5f1d1acba9073df244e0cfa77ab4ccbd9d09d6->leave($__internal_a7b621def7de175b913e9477aa5f1d1acba9073df244e0cfa77ab4ccbd9d09d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac242ec86a8b4157b1ab65f2712ffa983b0d40322908bd03c02c8ea5ca9a9fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac242ec86a8b4157b1ab65f2712ffa983b0d40322908bd03c02c8ea5ca9a9fd8->enter($__internal_ac242ec86a8b4157b1ab65f2712ffa983b0d40322908bd03c02c8ea5ca9a9fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb8f67ab1d6f91475f69a367aa431cd26aec2d9547c01ff36f35589f0d3b712e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8f67ab1d6f91475f69a367aa431cd26aec2d9547c01ff36f35589f0d3b712e->enter($__internal_fb8f67ab1d6f91475f69a367aa431cd26aec2d9547c01ff36f35589f0d3b712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <p>J'apprends le Symfony</p>
";
        
        $__internal_fb8f67ab1d6f91475f69a367aa431cd26aec2d9547c01ff36f35589f0d3b712e->leave($__internal_fb8f67ab1d6f91475f69a367aa431cd26aec2d9547c01ff36f35589f0d3b712e_prof);

        
        $__internal_ac242ec86a8b4157b1ab65f2712ffa983b0d40322908bd03c02c8ea5ca9a9fd8->leave($__internal_ac242ec86a8b4157b1ab65f2712ffa983b0d40322908bd03c02c8ea5ca9a9fd8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
  <p>J'apprends le Symfony</p>
{% endblock %}
", "default/index.html.twig", "/var/www/html/intro_symfony/app/Resources/views/default/index.html.twig");
    }
}
