<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c3aff2c158c09b5a8bc623fd6cfb7ea84659a9ed20e13a9c5be6d2468504ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3aff2c158c09b5a8bc623fd6cfb7ea84659a9ed20e13a9c5be6d2468504ba3->enter($__internal_4c3aff2c158c09b5a8bc623fd6cfb7ea84659a9ed20e13a9c5be6d2468504ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_394d4585815f4db2f688c414e8945cb0d5a13a165ebd9538a5798acd521978e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394d4585815f4db2f688c414e8945cb0d5a13a165ebd9538a5798acd521978e1->enter($__internal_394d4585815f4db2f688c414e8945cb0d5a13a165ebd9538a5798acd521978e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3aff2c158c09b5a8bc623fd6cfb7ea84659a9ed20e13a9c5be6d2468504ba3->leave($__internal_4c3aff2c158c09b5a8bc623fd6cfb7ea84659a9ed20e13a9c5be6d2468504ba3_prof);

        
        $__internal_394d4585815f4db2f688c414e8945cb0d5a13a165ebd9538a5798acd521978e1->leave($__internal_394d4585815f4db2f688c414e8945cb0d5a13a165ebd9538a5798acd521978e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea0a43ffd8b440706626b2c093a0c4c0a1ba466c7b9943a1c9cbd47e9805abea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0a43ffd8b440706626b2c093a0c4c0a1ba466c7b9943a1c9cbd47e9805abea->enter($__internal_ea0a43ffd8b440706626b2c093a0c4c0a1ba466c7b9943a1c9cbd47e9805abea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dfbf5ebcac668a606c5cfd8d75add1dffaadde77480c4f323650d351502529b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfbf5ebcac668a606c5cfd8d75add1dffaadde77480c4f323650d351502529b->enter($__internal_2dfbf5ebcac668a606c5cfd8d75add1dffaadde77480c4f323650d351502529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Bienvenue sur </span> Biblios </h1>
            </div>
        </div>
    </div>
";
        
        $__internal_2dfbf5ebcac668a606c5cfd8d75add1dffaadde77480c4f323650d351502529b->leave($__internal_2dfbf5ebcac668a606c5cfd8d75add1dffaadde77480c4f323650d351502529b_prof);

        
        $__internal_ea0a43ffd8b440706626b2c093a0c4c0a1ba466c7b9943a1c9cbd47e9805abea->leave($__internal_ea0a43ffd8b440706626b2c093a0c4c0a1ba466c7b9943a1c9cbd47e9805abea_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4698da603e72558bbaaa8bc124fb7607285b7a743d4fb3bad4d3ce163eeeca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4698da603e72558bbaaa8bc124fb7607285b7a743d4fb3bad4d3ce163eeeca2->enter($__internal_b4698da603e72558bbaaa8bc124fb7607285b7a743d4fb3bad4d3ce163eeeca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0668052ec2ae07065485681309ef374b59d02bace872cd3fff7709274cf73f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0668052ec2ae07065485681309ef374b59d02bace872cd3fff7709274cf73f1c->enter($__internal_0668052ec2ae07065485681309ef374b59d02bace872cd3fff7709274cf73f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_0668052ec2ae07065485681309ef374b59d02bace872cd3fff7709274cf73f1c->leave($__internal_0668052ec2ae07065485681309ef374b59d02bace872cd3fff7709274cf73f1c_prof);

        
        $__internal_b4698da603e72558bbaaa8bc124fb7607285b7a743d4fb3bad4d3ce163eeeca2->leave($__internal_b4698da603e72558bbaaa8bc124fb7607285b7a743d4fb3bad4d3ce163eeeca2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  67 => 13,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Bienvenue sur </span> Biblios </h1>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "/var/www/html/TP4/app/Resources/views/default/index.html.twig");
    }
}
