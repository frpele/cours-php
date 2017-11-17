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
        $__internal_121ecc8e84db17abfdb0e2e21183634f1e9ba8fa97f885019f3506def234a1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121ecc8e84db17abfdb0e2e21183634f1e9ba8fa97f885019f3506def234a1b2->enter($__internal_121ecc8e84db17abfdb0e2e21183634f1e9ba8fa97f885019f3506def234a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d181f48b38e527f6773ee03a2e2134b32387672e0cd3b587da1b16920d0afd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d181f48b38e527f6773ee03a2e2134b32387672e0cd3b587da1b16920d0afd5b->enter($__internal_d181f48b38e527f6773ee03a2e2134b32387672e0cd3b587da1b16920d0afd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121ecc8e84db17abfdb0e2e21183634f1e9ba8fa97f885019f3506def234a1b2->leave($__internal_121ecc8e84db17abfdb0e2e21183634f1e9ba8fa97f885019f3506def234a1b2_prof);

        
        $__internal_d181f48b38e527f6773ee03a2e2134b32387672e0cd3b587da1b16920d0afd5b->leave($__internal_d181f48b38e527f6773ee03a2e2134b32387672e0cd3b587da1b16920d0afd5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ddb5d50962104632e0edada3e68cae1a4b22533de64d77cd2ff6d794e074f9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb5d50962104632e0edada3e68cae1a4b22533de64d77cd2ff6d794e074f9a8->enter($__internal_ddb5d50962104632e0edada3e68cae1a4b22533de64d77cd2ff6d794e074f9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7e14f98aeab60135189142ed0db4abc65557a49aa27de68e47c780e879c547c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e14f98aeab60135189142ed0db4abc65557a49aa27de68e47c780e879c547c->enter($__internal_a7e14f98aeab60135189142ed0db4abc65557a49aa27de68e47c780e879c547c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7e14f98aeab60135189142ed0db4abc65557a49aa27de68e47c780e879c547c->leave($__internal_a7e14f98aeab60135189142ed0db4abc65557a49aa27de68e47c780e879c547c_prof);

        
        $__internal_ddb5d50962104632e0edada3e68cae1a4b22533de64d77cd2ff6d794e074f9a8->leave($__internal_ddb5d50962104632e0edada3e68cae1a4b22533de64d77cd2ff6d794e074f9a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccbebafa4bacd37d3135f25a4c2fc6d4f4a5eb843f741bab0056288ca20dbea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbebafa4bacd37d3135f25a4c2fc6d4f4a5eb843f741bab0056288ca20dbea7->enter($__internal_ccbebafa4bacd37d3135f25a4c2fc6d4f4a5eb843f741bab0056288ca20dbea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_82364a00937184e7cc28b30f5f20f582b7e3f00e8ded765bd3bcd26e2ed66d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82364a00937184e7cc28b30f5f20f582b7e3f00e8ded765bd3bcd26e2ed66d1c->enter($__internal_82364a00937184e7cc28b30f5f20f582b7e3f00e8ded765bd3bcd26e2ed66d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82364a00937184e7cc28b30f5f20f582b7e3f00e8ded765bd3bcd26e2ed66d1c->leave($__internal_82364a00937184e7cc28b30f5f20f582b7e3f00e8ded765bd3bcd26e2ed66d1c_prof);

        
        $__internal_ccbebafa4bacd37d3135f25a4c2fc6d4f4a5eb843f741bab0056288ca20dbea7->leave($__internal_ccbebafa4bacd37d3135f25a4c2fc6d4f4a5eb843f741bab0056288ca20dbea7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24c189e968bda7ed678de17072f5bd46e3129dde58982aae057a654ba4d46baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c189e968bda7ed678de17072f5bd46e3129dde58982aae057a654ba4d46baa->enter($__internal_24c189e968bda7ed678de17072f5bd46e3129dde58982aae057a654ba4d46baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01e9d1bddb3528636494c868aa5e4d813fc54f0403a39b6e5fcd38d8cbcbc1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e9d1bddb3528636494c868aa5e4d813fc54f0403a39b6e5fcd38d8cbcbc1da->enter($__internal_01e9d1bddb3528636494c868aa5e4d813fc54f0403a39b6e5fcd38d8cbcbc1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01e9d1bddb3528636494c868aa5e4d813fc54f0403a39b6e5fcd38d8cbcbc1da->leave($__internal_01e9d1bddb3528636494c868aa5e4d813fc54f0403a39b6e5fcd38d8cbcbc1da_prof);

        
        $__internal_24c189e968bda7ed678de17072f5bd46e3129dde58982aae057a654ba4d46baa->leave($__internal_24c189e968bda7ed678de17072f5bd46e3129dde58982aae057a654ba4d46baa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
