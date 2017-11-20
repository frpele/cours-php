<?php

/* AppBundle:Author:add.html.twig */
class __TwigTemplate_5de6a103db9fe3f948be06a00ccb578517f96a4d6ddcac3dc3aa76b9d454d650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Author:add.html.twig", 1);
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
        $__internal_01d7303907f62b02c4d22dc83bd30abae902b6a175095fd475af41a42319d18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d7303907f62b02c4d22dc83bd30abae902b6a175095fd475af41a42319d18e->enter($__internal_01d7303907f62b02c4d22dc83bd30abae902b6a175095fd475af41a42319d18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Author:add.html.twig"));

        $__internal_36e814b6e11040cfc669956a42d15a5b77cfbc83394437cab32f6622a72b64b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e814b6e11040cfc669956a42d15a5b77cfbc83394437cab32f6622a72b64b0->enter($__internal_36e814b6e11040cfc669956a42d15a5b77cfbc83394437cab32f6622a72b64b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Author:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d7303907f62b02c4d22dc83bd30abae902b6a175095fd475af41a42319d18e->leave($__internal_01d7303907f62b02c4d22dc83bd30abae902b6a175095fd475af41a42319d18e_prof);

        
        $__internal_36e814b6e11040cfc669956a42d15a5b77cfbc83394437cab32f6622a72b64b0->leave($__internal_36e814b6e11040cfc669956a42d15a5b77cfbc83394437cab32f6622a72b64b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09dbb11b3573317669dbfb83703e3840124cd0e7839b72e1d5e025dc8edc7358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dbb11b3573317669dbfb83703e3840124cd0e7839b72e1d5e025dc8edc7358->enter($__internal_09dbb11b3573317669dbfb83703e3840124cd0e7839b72e1d5e025dc8edc7358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a926a454ec4a969869aa03304f5361d62004ae0dc22d282ee5cefa11293ec2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a926a454ec4a969869aa03304f5361d62004ae0dc22d282ee5cefa11293ec2f1->enter($__internal_a926a454ec4a969869aa03304f5361d62004ae0dc22d282ee5cefa11293ec2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un auteur";
        
        $__internal_a926a454ec4a969869aa03304f5361d62004ae0dc22d282ee5cefa11293ec2f1->leave($__internal_a926a454ec4a969869aa03304f5361d62004ae0dc22d282ee5cefa11293ec2f1_prof);

        
        $__internal_09dbb11b3573317669dbfb83703e3840124cd0e7839b72e1d5e025dc8edc7358->leave($__internal_09dbb11b3573317669dbfb83703e3840124cd0e7839b72e1d5e025dc8edc7358_prof);

    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        $__internal_3e786459c93f26569e000c6e90fc949754f4affecc9e2e7d0558e2fc662feda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e786459c93f26569e000c6e90fc949754f4affecc9e2e7d0558e2fc662feda2->enter($__internal_3e786459c93f26569e000c6e90fc949754f4affecc9e2e7d0558e2fc662feda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_a7bb632c3ecbc2a1c9924d07b1154e6b73b2ec7415f7d0aa7b147f3e63bafa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bb632c3ecbc2a1c9924d07b1154e6b73b2ec7415f7d0aa7b147f3e63bafa2f->enter($__internal_a7bb632c3ecbc2a1c9924d07b1154e6b73b2ec7415f7d0aa7b147f3e63bafa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 7
        echo "<style>
        .form { width: 30%; }


</style>";
        
        $__internal_a7bb632c3ecbc2a1c9924d07b1154e6b73b2ec7415f7d0aa7b147f3e63bafa2f->leave($__internal_a7bb632c3ecbc2a1c9924d07b1154e6b73b2ec7415f7d0aa7b147f3e63bafa2f_prof);

        
        $__internal_3e786459c93f26569e000c6e90fc949754f4affecc9e2e7d0558e2fc662feda2->leave($__internal_3e786459c93f26569e000c6e90fc949754f4affecc9e2e7d0558e2fc662feda2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4672a0268c970240f2241aab1a960cf385fb53a996029c4f6ed02d6f42eda7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4672a0268c970240f2241aab1a960cf385fb53a996029c4f6ed02d6f42eda7f9->enter($__internal_4672a0268c970240f2241aab1a960cf385fb53a996029c4f6ed02d6f42eda7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2d025d41b7c8391b9bb934cdfb0586fc41e549062133da582570362106e95fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d025d41b7c8391b9bb934cdfb0586fc41e549062133da582570362106e95fa->enter($__internal_d2d025d41b7c8391b9bb934cdfb0586fc41e549062133da582570362106e95fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "



<h1>Ajouter un nouvel auteur</h1>
<hr>
<p><strong><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_admin_page");
        echo "\">< Retour à la liste des auteurs</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "


";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_d2d025d41b7c8391b9bb934cdfb0586fc41e549062133da582570362106e95fa->leave($__internal_d2d025d41b7c8391b9bb934cdfb0586fc41e549062133da582570362106e95fa_prof);

        
        $__internal_4672a0268c970240f2241aab1a960cf385fb53a996029c4f6ed02d6f42eda7f9->leave($__internal_4672a0268c970240f2241aab1a960cf385fb53a996029c4f6ed02d6f42eda7f9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Author:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  109 => 26,  100 => 20,  92 => 14,  83 => 13,  69 => 7,  60 => 6,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter un auteur{% endblock %}


{% block css %}
<style>
        .form { width: 30%; }


</style>{% endblock %}

{% block body %}




<h1>Ajouter un nouvel auteur</h1>
<hr>
<p><strong><a href=\"{{ path('author_admin_page') }}\">< Retour à la liste des auteurs</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


{{ form_start(form) }}


{{ form_end(form) }}

</div>
{% endblock %}
", "AppBundle:Author:add.html.twig", "/var/www/html/TP4/src/AppBundle/Resources/views/Author/add.html.twig");
    }
}
