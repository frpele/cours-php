<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ce7283d1e6732bda0034f6f64ab1b8670651b60f3857b750363e0676631ee22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce7283d1e6732bda0034f6f64ab1b8670651b60f3857b750363e0676631ee22->enter($__internal_1ce7283d1e6732bda0034f6f64ab1b8670651b60f3857b750363e0676631ee22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_52af34f5a3087d881c700ee275a5cb096ea8bffceee3f28d188f66188670607d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52af34f5a3087d881c700ee275a5cb096ea8bffceee3f28d188f66188670607d->enter($__internal_52af34f5a3087d881c700ee275a5cb096ea8bffceee3f28d188f66188670607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce7283d1e6732bda0034f6f64ab1b8670651b60f3857b750363e0676631ee22->leave($__internal_1ce7283d1e6732bda0034f6f64ab1b8670651b60f3857b750363e0676631ee22_prof);

        
        $__internal_52af34f5a3087d881c700ee275a5cb096ea8bffceee3f28d188f66188670607d->leave($__internal_52af34f5a3087d881c700ee275a5cb096ea8bffceee3f28d188f66188670607d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efd4b43363da654f50b4397762e2f7f935566c27db4e53977e57b1c0c2850ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd4b43363da654f50b4397762e2f7f935566c27db4e53977e57b1c0c2850ea9->enter($__internal_efd4b43363da654f50b4397762e2f7f935566c27db4e53977e57b1c0c2850ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b701a10c496e91115bff9244a12e613388ea6fcc8872f94234d4ccbfdadb5d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b701a10c496e91115bff9244a12e613388ea6fcc8872f94234d4ccbfdadb5d46->enter($__internal_b701a10c496e91115bff9244a12e613388ea6fcc8872f94234d4ccbfdadb5d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b701a10c496e91115bff9244a12e613388ea6fcc8872f94234d4ccbfdadb5d46->leave($__internal_b701a10c496e91115bff9244a12e613388ea6fcc8872f94234d4ccbfdadb5d46_prof);

        
        $__internal_efd4b43363da654f50b4397762e2f7f935566c27db4e53977e57b1c0c2850ea9->leave($__internal_efd4b43363da654f50b4397762e2f7f935566c27db4e53977e57b1c0c2850ea9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3fae9281d5798b8ef33f4c6d13421a842758121b5c12f26a4bfdfd31c6942ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fae9281d5798b8ef33f4c6d13421a842758121b5c12f26a4bfdfd31c6942ba->enter($__internal_d3fae9281d5798b8ef33f4c6d13421a842758121b5c12f26a4bfdfd31c6942ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b69436f51d04b524e85f4790d3fd26359732a73622882fe58edb239f5098a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b69436f51d04b524e85f4790d3fd26359732a73622882fe58edb239f5098a09->enter($__internal_7b69436f51d04b524e85f4790d3fd26359732a73622882fe58edb239f5098a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b69436f51d04b524e85f4790d3fd26359732a73622882fe58edb239f5098a09->leave($__internal_7b69436f51d04b524e85f4790d3fd26359732a73622882fe58edb239f5098a09_prof);

        
        $__internal_d3fae9281d5798b8ef33f4c6d13421a842758121b5c12f26a4bfdfd31c6942ba->leave($__internal_d3fae9281d5798b8ef33f4c6d13421a842758121b5c12f26a4bfdfd31c6942ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e88736565f183fe286177e5d19d5d68ea373aa35935cd3e5a7dfeadd178c70af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88736565f183fe286177e5d19d5d68ea373aa35935cd3e5a7dfeadd178c70af->enter($__internal_e88736565f183fe286177e5d19d5d68ea373aa35935cd3e5a7dfeadd178c70af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fa47ea5d837db7c547c3672630b234c757fef455bd35c5146edf1ba7cb9335f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa47ea5d837db7c547c3672630b234c757fef455bd35c5146edf1ba7cb9335f->enter($__internal_6fa47ea5d837db7c547c3672630b234c757fef455bd35c5146edf1ba7cb9335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6fa47ea5d837db7c547c3672630b234c757fef455bd35c5146edf1ba7cb9335f->leave($__internal_6fa47ea5d837db7c547c3672630b234c757fef455bd35c5146edf1ba7cb9335f_prof);

        
        $__internal_e88736565f183fe286177e5d19d5d68ea373aa35935cd3e5a7dfeadd178c70af->leave($__internal_e88736565f183fe286177e5d19d5d68ea373aa35935cd3e5a7dfeadd178c70af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/cours-php/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
