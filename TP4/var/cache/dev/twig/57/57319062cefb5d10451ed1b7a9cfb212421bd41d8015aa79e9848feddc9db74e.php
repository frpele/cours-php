<?php

/* AppBundle:Book:add.html.twig */
class __TwigTemplate_98d2d9ab1d76fa7114e4513071b6d36a207271518861b7c32d1953b44536da3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Book:add.html.twig", 1);
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
        $__internal_db3855753e7ff6a1a97cd1f906452b26c0d07827901c1c156b891c66da4a0b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3855753e7ff6a1a97cd1f906452b26c0d07827901c1c156b891c66da4a0b6d->enter($__internal_db3855753e7ff6a1a97cd1f906452b26c0d07827901c1c156b891c66da4a0b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:add.html.twig"));

        $__internal_da7882f2d9af45dd5cfb9ed7949c096d26304d32633d2566be9d5e6a03def17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7882f2d9af45dd5cfb9ed7949c096d26304d32633d2566be9d5e6a03def17b->enter($__internal_da7882f2d9af45dd5cfb9ed7949c096d26304d32633d2566be9d5e6a03def17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db3855753e7ff6a1a97cd1f906452b26c0d07827901c1c156b891c66da4a0b6d->leave($__internal_db3855753e7ff6a1a97cd1f906452b26c0d07827901c1c156b891c66da4a0b6d_prof);

        
        $__internal_da7882f2d9af45dd5cfb9ed7949c096d26304d32633d2566be9d5e6a03def17b->leave($__internal_da7882f2d9af45dd5cfb9ed7949c096d26304d32633d2566be9d5e6a03def17b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b59be1f4324111d7a04b9eae7d3b8e8c7f4d7f6abb8942ee159ec57a5acbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b59be1f4324111d7a04b9eae7d3b8e8c7f4d7f6abb8942ee159ec57a5acbbc->enter($__internal_85b59be1f4324111d7a04b9eae7d3b8e8c7f4d7f6abb8942ee159ec57a5acbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_276ad2706d11ef95bd807a93716afa598d492264295d8935487527f94ffd1440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276ad2706d11ef95bd807a93716afa598d492264295d8935487527f94ffd1440->enter($__internal_276ad2706d11ef95bd807a93716afa598d492264295d8935487527f94ffd1440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un livre";
        
        $__internal_276ad2706d11ef95bd807a93716afa598d492264295d8935487527f94ffd1440->leave($__internal_276ad2706d11ef95bd807a93716afa598d492264295d8935487527f94ffd1440_prof);

        
        $__internal_85b59be1f4324111d7a04b9eae7d3b8e8c7f4d7f6abb8942ee159ec57a5acbbc->leave($__internal_85b59be1f4324111d7a04b9eae7d3b8e8c7f4d7f6abb8942ee159ec57a5acbbc_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_16eaa4a2e3a2cd54952d51650d200ad86a8bb57640a6326dc6d203a811e77a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16eaa4a2e3a2cd54952d51650d200ad86a8bb57640a6326dc6d203a811e77a34->enter($__internal_16eaa4a2e3a2cd54952d51650d200ad86a8bb57640a6326dc6d203a811e77a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_e9f81f9c16b2fcf97dada40ae167eca690c44e311a117ace0fc4768e7719bd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f81f9c16b2fcf97dada40ae167eca690c44e311a117ace0fc4768e7719bd06->enter($__internal_e9f81f9c16b2fcf97dada40ae167eca690c44e311a117ace0fc4768e7719bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "<style>
        .form { width: 30%; }


</style>";
        
        $__internal_e9f81f9c16b2fcf97dada40ae167eca690c44e311a117ace0fc4768e7719bd06->leave($__internal_e9f81f9c16b2fcf97dada40ae167eca690c44e311a117ace0fc4768e7719bd06_prof);

        
        $__internal_16eaa4a2e3a2cd54952d51650d200ad86a8bb57640a6326dc6d203a811e77a34->leave($__internal_16eaa4a2e3a2cd54952d51650d200ad86a8bb57640a6326dc6d203a811e77a34_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e916ff7d2fe3c517469aef7da44f1c5fca34caf24a5e047a5d874c1e940f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e916ff7d2fe3c517469aef7da44f1c5fca34caf24a5e047a5d874c1e940f5f->enter($__internal_07e916ff7d2fe3c517469aef7da44f1c5fca34caf24a5e047a5d874c1e940f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23ace0a5433336a3e09e11f59a8af1144ba7f8b6feb7fd7e986bfd5dc2f3522a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ace0a5433336a3e09e11f59a8af1144ba7f8b6feb7fd7e986bfd5dc2f3522a->enter($__internal_23ace0a5433336a3e09e11f59a8af1144ba7f8b6feb7fd7e986bfd5dc2f3522a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<h1>Ajouter un nouveau livre</h1>
<hr>
<p><strong><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_admin_page");
        echo "\">< Retour à la liste des livres</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "


";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_23ace0a5433336a3e09e11f59a8af1144ba7f8b6feb7fd7e986bfd5dc2f3522a->leave($__internal_23ace0a5433336a3e09e11f59a8af1144ba7f8b6feb7fd7e986bfd5dc2f3522a_prof);

        
        $__internal_07e916ff7d2fe3c517469aef7da44f1c5fca34caf24a5e047a5d874c1e940f5f->leave($__internal_07e916ff7d2fe3c517469aef7da44f1c5fca34caf24a5e047a5d874c1e940f5f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Book:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 22,  105 => 19,  96 => 13,  92 => 11,  83 => 10,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Ajouter un livre{% endblock %}
{% block css %}
<style>
        .form { width: 30%; }


</style>{% endblock %}
{% block body %}
<h1>Ajouter un nouveau livre</h1>
<hr>
<p><strong><a href=\"{{ path('book_admin_page') }}\">< Retour à la liste des livres</a></strong></p>
<hr>
<h2>Remplissez les champs ci-dessous : </h2>
<div class=\"form\">


{{ form_start(form) }}


{{ form_end(form) }}
</div>
{% endblock %}
", "AppBundle:Book:add.html.twig", "/var/www/html/TP4/src/AppBundle/Resources/views/Book/add.html.twig");
    }
}
