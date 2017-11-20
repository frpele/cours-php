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
        $__internal_acb1a16cefcdaa32a11e40bd342a2ef7b7994b5c8a2d25631a70c660e982bea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb1a16cefcdaa32a11e40bd342a2ef7b7994b5c8a2d25631a70c660e982bea1->enter($__internal_acb1a16cefcdaa32a11e40bd342a2ef7b7994b5c8a2d25631a70c660e982bea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_667dadbe0985026a3b56b3eb998e38e5f0559b5736e183707f3f39ea5cea5ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667dadbe0985026a3b56b3eb998e38e5f0559b5736e183707f3f39ea5cea5ee8->enter($__internal_667dadbe0985026a3b56b3eb998e38e5f0559b5736e183707f3f39ea5cea5ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb1a16cefcdaa32a11e40bd342a2ef7b7994b5c8a2d25631a70c660e982bea1->leave($__internal_acb1a16cefcdaa32a11e40bd342a2ef7b7994b5c8a2d25631a70c660e982bea1_prof);

        
        $__internal_667dadbe0985026a3b56b3eb998e38e5f0559b5736e183707f3f39ea5cea5ee8->leave($__internal_667dadbe0985026a3b56b3eb998e38e5f0559b5736e183707f3f39ea5cea5ee8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a37f66fcf5a819ff821b1f78178d3a1d1e28683aa020581a20e226d164ab555c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37f66fcf5a819ff821b1f78178d3a1d1e28683aa020581a20e226d164ab555c->enter($__internal_a37f66fcf5a819ff821b1f78178d3a1d1e28683aa020581a20e226d164ab555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d2b7ad295359f56d23d411933e503d61f2896fe60dc446e475e54dd54c0ea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2b7ad295359f56d23d411933e503d61f2896fe60dc446e475e54dd54c0ea07->enter($__internal_0d2b7ad295359f56d23d411933e503d61f2896fe60dc446e475e54dd54c0ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0d2b7ad295359f56d23d411933e503d61f2896fe60dc446e475e54dd54c0ea07->leave($__internal_0d2b7ad295359f56d23d411933e503d61f2896fe60dc446e475e54dd54c0ea07_prof);

        
        $__internal_a37f66fcf5a819ff821b1f78178d3a1d1e28683aa020581a20e226d164ab555c->leave($__internal_a37f66fcf5a819ff821b1f78178d3a1d1e28683aa020581a20e226d164ab555c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4c65e390c7d9abed9d273494cf3c17bbb3f4089ec24f37dcb9dee4e46c1edebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c65e390c7d9abed9d273494cf3c17bbb3f4089ec24f37dcb9dee4e46c1edebb->enter($__internal_4c65e390c7d9abed9d273494cf3c17bbb3f4089ec24f37dcb9dee4e46c1edebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_541bafed9dae438ec3b17a4eac7eb0ae17f254beb7339f6df69f09d1a5121ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541bafed9dae438ec3b17a4eac7eb0ae17f254beb7339f6df69f09d1a5121ad1->enter($__internal_541bafed9dae438ec3b17a4eac7eb0ae17f254beb7339f6df69f09d1a5121ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_541bafed9dae438ec3b17a4eac7eb0ae17f254beb7339f6df69f09d1a5121ad1->leave($__internal_541bafed9dae438ec3b17a4eac7eb0ae17f254beb7339f6df69f09d1a5121ad1_prof);

        
        $__internal_4c65e390c7d9abed9d273494cf3c17bbb3f4089ec24f37dcb9dee4e46c1edebb->leave($__internal_4c65e390c7d9abed9d273494cf3c17bbb3f4089ec24f37dcb9dee4e46c1edebb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c61fe5cee9176490f7e067ef7c38e6b93d79e95872a9c0c3448992159e0af36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61fe5cee9176490f7e067ef7c38e6b93d79e95872a9c0c3448992159e0af36c->enter($__internal_c61fe5cee9176490f7e067ef7c38e6b93d79e95872a9c0c3448992159e0af36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05d9605fa75c2385f69ea6e1fcd785dc1dd0edbc4e5ed9ac5dcf2e09f80ba1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d9605fa75c2385f69ea6e1fcd785dc1dd0edbc4e5ed9ac5dcf2e09f80ba1e5->enter($__internal_05d9605fa75c2385f69ea6e1fcd785dc1dd0edbc4e5ed9ac5dcf2e09f80ba1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_05d9605fa75c2385f69ea6e1fcd785dc1dd0edbc4e5ed9ac5dcf2e09f80ba1e5->leave($__internal_05d9605fa75c2385f69ea6e1fcd785dc1dd0edbc4e5ed9ac5dcf2e09f80ba1e5_prof);

        
        $__internal_c61fe5cee9176490f7e067ef7c38e6b93d79e95872a9c0c3448992159e0af36c->leave($__internal_c61fe5cee9176490f7e067ef7c38e6b93d79e95872a9c0c3448992159e0af36c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/TP4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
