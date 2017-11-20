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
        $__internal_96946cb89789c3603d2acc4bd95d87e751ffa12e52a209ef9971c2c7bf0ba1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96946cb89789c3603d2acc4bd95d87e751ffa12e52a209ef9971c2c7bf0ba1c5->enter($__internal_96946cb89789c3603d2acc4bd95d87e751ffa12e52a209ef9971c2c7bf0ba1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4f40dfa2475eff7e2d10ec5155526d8399a7a2ecc1a6a36d086d5154b0466ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f40dfa2475eff7e2d10ec5155526d8399a7a2ecc1a6a36d086d5154b0466ee8->enter($__internal_4f40dfa2475eff7e2d10ec5155526d8399a7a2ecc1a6a36d086d5154b0466ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96946cb89789c3603d2acc4bd95d87e751ffa12e52a209ef9971c2c7bf0ba1c5->leave($__internal_96946cb89789c3603d2acc4bd95d87e751ffa12e52a209ef9971c2c7bf0ba1c5_prof);

        
        $__internal_4f40dfa2475eff7e2d10ec5155526d8399a7a2ecc1a6a36d086d5154b0466ee8->leave($__internal_4f40dfa2475eff7e2d10ec5155526d8399a7a2ecc1a6a36d086d5154b0466ee8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb8faab774bd7c2bcd5aa7ed53aabab6ebeb0295c26ed5d54544e456fd5355ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8faab774bd7c2bcd5aa7ed53aabab6ebeb0295c26ed5d54544e456fd5355ed->enter($__internal_bb8faab774bd7c2bcd5aa7ed53aabab6ebeb0295c26ed5d54544e456fd5355ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_900bc2951a7e7254a93976308c552c3a14fbc3c3e35e5c0561b0e0526d151041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900bc2951a7e7254a93976308c552c3a14fbc3c3e35e5c0561b0e0526d151041->enter($__internal_900bc2951a7e7254a93976308c552c3a14fbc3c3e35e5c0561b0e0526d151041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_900bc2951a7e7254a93976308c552c3a14fbc3c3e35e5c0561b0e0526d151041->leave($__internal_900bc2951a7e7254a93976308c552c3a14fbc3c3e35e5c0561b0e0526d151041_prof);

        
        $__internal_bb8faab774bd7c2bcd5aa7ed53aabab6ebeb0295c26ed5d54544e456fd5355ed->leave($__internal_bb8faab774bd7c2bcd5aa7ed53aabab6ebeb0295c26ed5d54544e456fd5355ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f45f62d862904ab72b5bf46652b52fbe4d2b8ea3d2a6b54cab0fefe67d4b9832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45f62d862904ab72b5bf46652b52fbe4d2b8ea3d2a6b54cab0fefe67d4b9832->enter($__internal_f45f62d862904ab72b5bf46652b52fbe4d2b8ea3d2a6b54cab0fefe67d4b9832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fdc27af6efe33d4f6259c76bc3360c283f57a710544252433c5a23a93208515f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc27af6efe33d4f6259c76bc3360c283f57a710544252433c5a23a93208515f->enter($__internal_fdc27af6efe33d4f6259c76bc3360c283f57a710544252433c5a23a93208515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdc27af6efe33d4f6259c76bc3360c283f57a710544252433c5a23a93208515f->leave($__internal_fdc27af6efe33d4f6259c76bc3360c283f57a710544252433c5a23a93208515f_prof);

        
        $__internal_f45f62d862904ab72b5bf46652b52fbe4d2b8ea3d2a6b54cab0fefe67d4b9832->leave($__internal_f45f62d862904ab72b5bf46652b52fbe4d2b8ea3d2a6b54cab0fefe67d4b9832_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f0c450860dc2804a6c9698e2c23a1b8da2b7e6fc6b9d42a96ec5974159da6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0c450860dc2804a6c9698e2c23a1b8da2b7e6fc6b9d42a96ec5974159da6cd->enter($__internal_5f0c450860dc2804a6c9698e2c23a1b8da2b7e6fc6b9d42a96ec5974159da6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29e7c053feb98cf02b9a92ca1fad5406e8884f16dc82a6ff167d684f4e09c00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e7c053feb98cf02b9a92ca1fad5406e8884f16dc82a6ff167d684f4e09c00e->enter($__internal_29e7c053feb98cf02b9a92ca1fad5406e8884f16dc82a6ff167d684f4e09c00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_29e7c053feb98cf02b9a92ca1fad5406e8884f16dc82a6ff167d684f4e09c00e->leave($__internal_29e7c053feb98cf02b9a92ca1fad5406e8884f16dc82a6ff167d684f4e09c00e_prof);

        
        $__internal_5f0c450860dc2804a6c9698e2c23a1b8da2b7e6fc6b9d42a96ec5974159da6cd->leave($__internal_5f0c450860dc2804a6c9698e2c23a1b8da2b7e6fc6b9d42a96ec5974159da6cd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/TP4/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
