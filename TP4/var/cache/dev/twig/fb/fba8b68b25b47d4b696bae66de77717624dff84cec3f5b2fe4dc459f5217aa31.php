<?php

/* AppBundle:Book:edit.html.twig */
class __TwigTemplate_6d578129cc5de4ea05e1dd545abb0743a8373913bf2d29c6b7685308faf0f090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Book:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c5ddbfaf493f11a31cd33d2770c95e615b4db1fcecb6c9d0e195f12789ac4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c5ddbfaf493f11a31cd33d2770c95e615b4db1fcecb6c9d0e195f12789ac4e->enter($__internal_29c5ddbfaf493f11a31cd33d2770c95e615b4db1fcecb6c9d0e195f12789ac4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:edit.html.twig"));

        $__internal_92a0f1b3c4d2fb58aca03146888cd1e36db5967e3145387798c41fbbce2126ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a0f1b3c4d2fb58aca03146888cd1e36db5967e3145387798c41fbbce2126ee->enter($__internal_92a0f1b3c4d2fb58aca03146888cd1e36db5967e3145387798c41fbbce2126ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c5ddbfaf493f11a31cd33d2770c95e615b4db1fcecb6c9d0e195f12789ac4e->leave($__internal_29c5ddbfaf493f11a31cd33d2770c95e615b4db1fcecb6c9d0e195f12789ac4e_prof);

        
        $__internal_92a0f1b3c4d2fb58aca03146888cd1e36db5967e3145387798c41fbbce2126ee->leave($__internal_92a0f1b3c4d2fb58aca03146888cd1e36db5967e3145387798c41fbbce2126ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fec4c121c3292cd1a2f80e2349d0a7e1131d0725032d3ca95ad43ce399c23de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec4c121c3292cd1a2f80e2349d0a7e1131d0725032d3ca95ad43ce399c23de1->enter($__internal_fec4c121c3292cd1a2f80e2349d0a7e1131d0725032d3ca95ad43ce399c23de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea2a39201f717da0ef1c2da46214e891a40accc31f2110d5d8a21fe0418df3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2a39201f717da0ef1c2da46214e891a40accc31f2110d5d8a21fe0418df3be->enter($__internal_ea2a39201f717da0ef1c2da46214e891a40accc31f2110d5d8a21fe0418df3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Book:edit";
        
        $__internal_ea2a39201f717da0ef1c2da46214e891a40accc31f2110d5d8a21fe0418df3be->leave($__internal_ea2a39201f717da0ef1c2da46214e891a40accc31f2110d5d8a21fe0418df3be_prof);

        
        $__internal_fec4c121c3292cd1a2f80e2349d0a7e1131d0725032d3ca95ad43ce399c23de1->leave($__internal_fec4c121c3292cd1a2f80e2349d0a7e1131d0725032d3ca95ad43ce399c23de1_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_5b2cd9d800ccf4a5bea33a991831b55c352711560aa2dfe206af270811444708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2cd9d800ccf4a5bea33a991831b55c352711560aa2dfe206af270811444708->enter($__internal_5b2cd9d800ccf4a5bea33a991831b55c352711560aa2dfe206af270811444708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_077a1aa65d06bdcb743f386bdde75b7e7319346a9017258b0433a64bff19afdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077a1aa65d06bdcb743f386bdde75b7e7319346a9017258b0433a64bff19afdf->enter($__internal_077a1aa65d06bdcb743f386bdde75b7e7319346a9017258b0433a64bff19afdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "<style>
        .form { width: 30%; }


</style>";
        
        $__internal_077a1aa65d06bdcb743f386bdde75b7e7319346a9017258b0433a64bff19afdf->leave($__internal_077a1aa65d06bdcb743f386bdde75b7e7319346a9017258b0433a64bff19afdf_prof);

        
        $__internal_5b2cd9d800ccf4a5bea33a991831b55c352711560aa2dfe206af270811444708->leave($__internal_5b2cd9d800ccf4a5bea33a991831b55c352711560aa2dfe206af270811444708_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bcace0de6f58c723acee409917ebf05367a9710f0b3b77bf70107aa6ec7c2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bcace0de6f58c723acee409917ebf05367a9710f0b3b77bf70107aa6ec7c2ba->enter($__internal_7bcace0de6f58c723acee409917ebf05367a9710f0b3b77bf70107aa6ec7c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f2406c3b38af27fee64c26c32600dfd308bf9355086103bb5130fb107a253b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2406c3b38af27fee64c26c32600dfd308bf9355086103bb5130fb107a253b9->enter($__internal_4f2406c3b38af27fee64c26c32600dfd308bf9355086103bb5130fb107a253b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<h1>Modifier la fiche du livre

 </h1>
<hr>
<p><strong><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_admin_page");
        echo "\">< Retour à la liste des livres</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "


";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_4f2406c3b38af27fee64c26c32600dfd308bf9355086103bb5130fb107a253b9->leave($__internal_4f2406c3b38af27fee64c26c32600dfd308bf9355086103bb5130fb107a253b9_prof);

        
        $__internal_7bcace0de6f58c723acee409917ebf05367a9710f0b3b77bf70107aa6ec7c2ba->leave($__internal_7bcace0de6f58c723acee409917ebf05367a9710f0b3b77bf70107aa6ec7c2ba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Book:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 27,  107 => 24,  98 => 18,  92 => 14,  83 => 13,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Book:edit{% endblock %}

{% block css %}
<style>
        .form { width: 30%; }


</style>{% endblock %}


{% block body %}
<h1>Modifier la fiche du livre

 </h1>
<hr>
<p><strong><a href=\"{{ path('book_admin_page') }}\">< Retour à la liste des livres</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


{{ form_start(form) }}


{{ form_end(form) }}
</div>
{% endblock %}
", "AppBundle:Book:edit.html.twig", "/var/www/html/TP4/src/AppBundle/Resources/views/Book/edit.html.twig");
    }
}
