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
        $__internal_4f4bbd230aa5867176078d583103977a6d73f943ad349768aab0b98799e7c851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4bbd230aa5867176078d583103977a6d73f943ad349768aab0b98799e7c851->enter($__internal_4f4bbd230aa5867176078d583103977a6d73f943ad349768aab0b98799e7c851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c889d2deb263cc50f8a1eb88765975ce878c24aeed4c344c55d23ca24e3fa549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c889d2deb263cc50f8a1eb88765975ce878c24aeed4c344c55d23ca24e3fa549->enter($__internal_c889d2deb263cc50f8a1eb88765975ce878c24aeed4c344c55d23ca24e3fa549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4bbd230aa5867176078d583103977a6d73f943ad349768aab0b98799e7c851->leave($__internal_4f4bbd230aa5867176078d583103977a6d73f943ad349768aab0b98799e7c851_prof);

        
        $__internal_c889d2deb263cc50f8a1eb88765975ce878c24aeed4c344c55d23ca24e3fa549->leave($__internal_c889d2deb263cc50f8a1eb88765975ce878c24aeed4c344c55d23ca24e3fa549_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ff86f81d1e173c140daf7afbf889eb69435d881141773bf6ee7d07858ee03cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff86f81d1e173c140daf7afbf889eb69435d881141773bf6ee7d07858ee03cd->enter($__internal_7ff86f81d1e173c140daf7afbf889eb69435d881141773bf6ee7d07858ee03cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_756c5040b847036a40a3c0b851c0c609f4fa2ab8bf2e855d9347b9b9389f8dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756c5040b847036a40a3c0b851c0c609f4fa2ab8bf2e855d9347b9b9389f8dc5->enter($__internal_756c5040b847036a40a3c0b851c0c609f4fa2ab8bf2e855d9347b9b9389f8dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_756c5040b847036a40a3c0b851c0c609f4fa2ab8bf2e855d9347b9b9389f8dc5->leave($__internal_756c5040b847036a40a3c0b851c0c609f4fa2ab8bf2e855d9347b9b9389f8dc5_prof);

        
        $__internal_7ff86f81d1e173c140daf7afbf889eb69435d881141773bf6ee7d07858ee03cd->leave($__internal_7ff86f81d1e173c140daf7afbf889eb69435d881141773bf6ee7d07858ee03cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf14fc53d470c5d1ec21b27adcd643598d03af76c6d43a0037a754adeb217643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf14fc53d470c5d1ec21b27adcd643598d03af76c6d43a0037a754adeb217643->enter($__internal_bf14fc53d470c5d1ec21b27adcd643598d03af76c6d43a0037a754adeb217643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ebd07609595c754674a757d3a3562578a8f653e898ccc93270a172ce7307d3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd07609595c754674a757d3a3562578a8f653e898ccc93270a172ce7307d3b7->enter($__internal_ebd07609595c754674a757d3a3562578a8f653e898ccc93270a172ce7307d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ebd07609595c754674a757d3a3562578a8f653e898ccc93270a172ce7307d3b7->leave($__internal_ebd07609595c754674a757d3a3562578a8f653e898ccc93270a172ce7307d3b7_prof);

        
        $__internal_bf14fc53d470c5d1ec21b27adcd643598d03af76c6d43a0037a754adeb217643->leave($__internal_bf14fc53d470c5d1ec21b27adcd643598d03af76c6d43a0037a754adeb217643_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_290a170ef49ca18700d8a1ab779ece3632caae4d4f39c752ffd4ba6d3a854ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290a170ef49ca18700d8a1ab779ece3632caae4d4f39c752ffd4ba6d3a854ebf->enter($__internal_290a170ef49ca18700d8a1ab779ece3632caae4d4f39c752ffd4ba6d3a854ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e62ba20ef49d18ebb0c358649d3639215347f435c59820758f7b2c41979a509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e62ba20ef49d18ebb0c358649d3639215347f435c59820758f7b2c41979a509->enter($__internal_9e62ba20ef49d18ebb0c358649d3639215347f435c59820758f7b2c41979a509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e62ba20ef49d18ebb0c358649d3639215347f435c59820758f7b2c41979a509->leave($__internal_9e62ba20ef49d18ebb0c358649d3639215347f435c59820758f7b2c41979a509_prof);

        
        $__internal_290a170ef49ca18700d8a1ab779ece3632caae4d4f39c752ffd4ba6d3a854ebf->leave($__internal_290a170ef49ca18700d8a1ab779ece3632caae4d4f39c752ffd4ba6d3a854ebf_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/cours-php/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
