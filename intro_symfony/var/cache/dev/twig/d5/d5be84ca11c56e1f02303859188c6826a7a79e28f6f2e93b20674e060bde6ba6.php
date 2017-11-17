<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6a8ca680fe15ba4492c4574e11edce9587b13354f8a9dbfe9af29893cca8e02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8ca680fe15ba4492c4574e11edce9587b13354f8a9dbfe9af29893cca8e02e->enter($__internal_6a8ca680fe15ba4492c4574e11edce9587b13354f8a9dbfe9af29893cca8e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ecfffeefbfb3d5430fc6664d6e318f43219447bd85e4ed5cc2ddb1697a4d0cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfffeefbfb3d5430fc6664d6e318f43219447bd85e4ed5cc2ddb1697a4d0cbf->enter($__internal_ecfffeefbfb3d5430fc6664d6e318f43219447bd85e4ed5cc2ddb1697a4d0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8ca680fe15ba4492c4574e11edce9587b13354f8a9dbfe9af29893cca8e02e->leave($__internal_6a8ca680fe15ba4492c4574e11edce9587b13354f8a9dbfe9af29893cca8e02e_prof);

        
        $__internal_ecfffeefbfb3d5430fc6664d6e318f43219447bd85e4ed5cc2ddb1697a4d0cbf->leave($__internal_ecfffeefbfb3d5430fc6664d6e318f43219447bd85e4ed5cc2ddb1697a4d0cbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3074777f61e2bb0b37e0c7f5c714d64f9f2e491fa3754a2830dcd27812490a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3074777f61e2bb0b37e0c7f5c714d64f9f2e491fa3754a2830dcd27812490a91->enter($__internal_3074777f61e2bb0b37e0c7f5c714d64f9f2e491fa3754a2830dcd27812490a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c66a637ae1fb23bc1e4e8c270a8fa7be4c8fe1cb43ec40f41e36ca47cb81572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c66a637ae1fb23bc1e4e8c270a8fa7be4c8fe1cb43ec40f41e36ca47cb81572->enter($__internal_1c66a637ae1fb23bc1e4e8c270a8fa7be4c8fe1cb43ec40f41e36ca47cb81572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1c66a637ae1fb23bc1e4e8c270a8fa7be4c8fe1cb43ec40f41e36ca47cb81572->leave($__internal_1c66a637ae1fb23bc1e4e8c270a8fa7be4c8fe1cb43ec40f41e36ca47cb81572_prof);

        
        $__internal_3074777f61e2bb0b37e0c7f5c714d64f9f2e491fa3754a2830dcd27812490a91->leave($__internal_3074777f61e2bb0b37e0c7f5c714d64f9f2e491fa3754a2830dcd27812490a91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1dac67790cb695f30822ef70b6ee1d9b350ce0abd58944270ea5b104165273b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1dac67790cb695f30822ef70b6ee1d9b350ce0abd58944270ea5b104165273b->enter($__internal_e1dac67790cb695f30822ef70b6ee1d9b350ce0abd58944270ea5b104165273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1573e90b34b235fab699da290febaeab3713dcec4af32af137376565559d7b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1573e90b34b235fab699da290febaeab3713dcec4af32af137376565559d7b1f->enter($__internal_1573e90b34b235fab699da290febaeab3713dcec4af32af137376565559d7b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1573e90b34b235fab699da290febaeab3713dcec4af32af137376565559d7b1f->leave($__internal_1573e90b34b235fab699da290febaeab3713dcec4af32af137376565559d7b1f_prof);

        
        $__internal_e1dac67790cb695f30822ef70b6ee1d9b350ce0abd58944270ea5b104165273b->leave($__internal_e1dac67790cb695f30822ef70b6ee1d9b350ce0abd58944270ea5b104165273b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8157518619b1511f7301fcd1efd5d5676b3a458f06078188973d2498f712a8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8157518619b1511f7301fcd1efd5d5676b3a458f06078188973d2498f712a8f2->enter($__internal_8157518619b1511f7301fcd1efd5d5676b3a458f06078188973d2498f712a8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70543953a6d5eb23ac6a143e0b462d607314146662cd0f3f618625c4f28f5f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70543953a6d5eb23ac6a143e0b462d607314146662cd0f3f618625c4f28f5f1c->enter($__internal_70543953a6d5eb23ac6a143e0b462d607314146662cd0f3f618625c4f28f5f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_70543953a6d5eb23ac6a143e0b462d607314146662cd0f3f618625c4f28f5f1c->leave($__internal_70543953a6d5eb23ac6a143e0b462d607314146662cd0f3f618625c4f28f5f1c_prof);

        
        $__internal_8157518619b1511f7301fcd1efd5d5676b3a458f06078188973d2498f712a8f2->leave($__internal_8157518619b1511f7301fcd1efd5d5676b3a458f06078188973d2498f712a8f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
