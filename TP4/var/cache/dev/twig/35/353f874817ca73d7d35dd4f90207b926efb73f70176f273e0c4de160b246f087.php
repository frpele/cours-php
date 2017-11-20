<?php

/* AppBundle:Author:edit.html.twig */
class __TwigTemplate_24e809c9e057ff056963d1b64d85c07ac1e6498bcdd62f03e85ed78ac238b7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Author:edit.html.twig", 1);
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
        $__internal_813d283dfbe9b0df72355111cba72b983b57c23eed804da35fb72c65ad5430d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813d283dfbe9b0df72355111cba72b983b57c23eed804da35fb72c65ad5430d6->enter($__internal_813d283dfbe9b0df72355111cba72b983b57c23eed804da35fb72c65ad5430d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Author:edit.html.twig"));

        $__internal_4ccfee1c390732b139d37459e96493bc14b61654a55b5af8759346752576142b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccfee1c390732b139d37459e96493bc14b61654a55b5af8759346752576142b->enter($__internal_4ccfee1c390732b139d37459e96493bc14b61654a55b5af8759346752576142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Author:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813d283dfbe9b0df72355111cba72b983b57c23eed804da35fb72c65ad5430d6->leave($__internal_813d283dfbe9b0df72355111cba72b983b57c23eed804da35fb72c65ad5430d6_prof);

        
        $__internal_4ccfee1c390732b139d37459e96493bc14b61654a55b5af8759346752576142b->leave($__internal_4ccfee1c390732b139d37459e96493bc14b61654a55b5af8759346752576142b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77e201fa1f6e7cea7703867457d6e2cd7c68d73a6c13daf2872e21c510b1402b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e201fa1f6e7cea7703867457d6e2cd7c68d73a6c13daf2872e21c510b1402b->enter($__internal_77e201fa1f6e7cea7703867457d6e2cd7c68d73a6c13daf2872e21c510b1402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7181393ea940ffed66cf86f1936d01b9a33cb5234532516591b25f1c7c35a28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7181393ea940ffed66cf86f1936d01b9a33cb5234532516591b25f1c7c35a28d->enter($__internal_7181393ea940ffed66cf86f1936d01b9a33cb5234532516591b25f1c7c35a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier un auteur";
        
        $__internal_7181393ea940ffed66cf86f1936d01b9a33cb5234532516591b25f1c7c35a28d->leave($__internal_7181393ea940ffed66cf86f1936d01b9a33cb5234532516591b25f1c7c35a28d_prof);

        
        $__internal_77e201fa1f6e7cea7703867457d6e2cd7c68d73a6c13daf2872e21c510b1402b->leave($__internal_77e201fa1f6e7cea7703867457d6e2cd7c68d73a6c13daf2872e21c510b1402b_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_c7d7817e62c9efa574c07eb284201a9887a331eeddd189c2f19d8e63d5ba976e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d7817e62c9efa574c07eb284201a9887a331eeddd189c2f19d8e63d5ba976e->enter($__internal_c7d7817e62c9efa574c07eb284201a9887a331eeddd189c2f19d8e63d5ba976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_2cb6ce6652b502e83343372fe885925bd40c3c37c87ab39bc7bf2b507d8c6add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb6ce6652b502e83343372fe885925bd40c3c37c87ab39bc7bf2b507d8c6add->enter($__internal_2cb6ce6652b502e83343372fe885925bd40c3c37c87ab39bc7bf2b507d8c6add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "<style>
        .form { width: 30%; }


</style>";
        
        $__internal_2cb6ce6652b502e83343372fe885925bd40c3c37c87ab39bc7bf2b507d8c6add->leave($__internal_2cb6ce6652b502e83343372fe885925bd40c3c37c87ab39bc7bf2b507d8c6add_prof);

        
        $__internal_c7d7817e62c9efa574c07eb284201a9887a331eeddd189c2f19d8e63d5ba976e->leave($__internal_c7d7817e62c9efa574c07eb284201a9887a331eeddd189c2f19d8e63d5ba976e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffcbaebc6abaa8a2693b1d8a2c8714e78ab8966c33a83ac3093f6f938ba2417a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcbaebc6abaa8a2693b1d8a2c8714e78ab8966c33a83ac3093f6f938ba2417a->enter($__internal_ffcbaebc6abaa8a2693b1d8a2c8714e78ab8966c33a83ac3093f6f938ba2417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd7908cd0d4d8a6aae2fadc90abdf45293d5b8199e3f8a772cf44a6b0eaf1c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7908cd0d4d8a6aae2fadc90abdf45293d5b8199e3f8a772cf44a6b0eaf1c6f->enter($__internal_cd7908cd0d4d8a6aae2fadc90abdf45293d5b8199e3f8a772cf44a6b0eaf1c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "<h1>Modifier la fiche auteur : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["author"] ?? $this->getContext($context, "author")), "getFullname", array(), "method"), "html", null, true);
        echo "

 </h1>
<hr>
<p><strong><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_admin_page");
        echo "\">< Retour à la liste des auteurs</a></strong></p>
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
        
        $__internal_cd7908cd0d4d8a6aae2fadc90abdf45293d5b8199e3f8a772cf44a6b0eaf1c6f->leave($__internal_cd7908cd0d4d8a6aae2fadc90abdf45293d5b8199e3f8a772cf44a6b0eaf1c6f_prof);

        
        $__internal_ffcbaebc6abaa8a2693b1d8a2c8714e78ab8966c33a83ac3093f6f938ba2417a->leave($__internal_ffcbaebc6abaa8a2693b1d8a2c8714e78ab8966c33a83ac3093f6f938ba2417a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Author:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  109 => 24,  100 => 18,  92 => 14,  83 => 13,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Modifier un auteur{% endblock %}

{% block css %}
<style>
        .form { width: 30%; }


</style>{% endblock %}


{% block body %}
<h1>Modifier la fiche auteur : {{ author.getFullname() }}

 </h1>
<hr>
<p><strong><a href=\"{{ path('author_admin_page') }}\">< Retour à la liste des auteurs</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


{{ form_start(form) }}


{{ form_end(form) }}
</div>
{% endblock %}
", "AppBundle:Author:edit.html.twig", "/var/www/html/TP4/src/AppBundle/Resources/views/Author/edit.html.twig");
    }
}
