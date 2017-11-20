<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29916d2093ed66e1a25d8f014cdb710c487544e72d56cdd1fe14cc0b7cefeacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29916d2093ed66e1a25d8f014cdb710c487544e72d56cdd1fe14cc0b7cefeacd->enter($__internal_29916d2093ed66e1a25d8f014cdb710c487544e72d56cdd1fe14cc0b7cefeacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_40ae4b5ad259d17c98ff624ea8685c77d874ef4156167d1a93885bdef1546494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ae4b5ad259d17c98ff624ea8685c77d874ef4156167d1a93885bdef1546494->enter($__internal_40ae4b5ad259d17c98ff624ea8685c77d874ef4156167d1a93885bdef1546494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <style>
          .submenu{
            display: none;
            position: relative;
            /*top:20px;*/
            /*left:-22px;*/
            background-color: #CCC;
            padding:8px;
            list-style-type: none;
            border-radius: 4px;
            width: 150px;
          }
          li:hover > ul.submenu {
            display: block;
            position: absolute;
          }

        </style>
        ";
        // line 27
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "    </head>
    <nav>
      <ul class=\"nav nav-tabs\">
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil Biblios</a></li>
        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_admin_page");
        echo "\">Auteurs</a></li>
        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_admin_page");
        echo "\">Livres</a></li>

      </ul>
    </nav>
    <body>
      <div class=\"container\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "      </div>
    </body>
</html>
";
        
        $__internal_29916d2093ed66e1a25d8f014cdb710c487544e72d56cdd1fe14cc0b7cefeacd->leave($__internal_29916d2093ed66e1a25d8f014cdb710c487544e72d56cdd1fe14cc0b7cefeacd_prof);

        
        $__internal_40ae4b5ad259d17c98ff624ea8685c77d874ef4156167d1a93885bdef1546494->leave($__internal_40ae4b5ad259d17c98ff624ea8685c77d874ef4156167d1a93885bdef1546494_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee6b5bf2c4e11f07c9d5182343f0ecde1d8474c7fb8d1ff71b307eb346334bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6b5bf2c4e11f07c9d5182343f0ecde1d8474c7fb8d1ff71b307eb346334bb6->enter($__internal_ee6b5bf2c4e11f07c9d5182343f0ecde1d8474c7fb8d1ff71b307eb346334bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0f1d5dbb4d915d4d1959d82e3f610a277f4fc1a863b72cb41a4a47820472ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f1d5dbb4d915d4d1959d82e3f610a277f4fc1a863b72cb41a4a47820472ded->enter($__internal_d0f1d5dbb4d915d4d1959d82e3f610a277f4fc1a863b72cb41a4a47820472ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP4 - Biblios - par François";
        
        $__internal_d0f1d5dbb4d915d4d1959d82e3f610a277f4fc1a863b72cb41a4a47820472ded->leave($__internal_d0f1d5dbb4d915d4d1959d82e3f610a277f4fc1a863b72cb41a4a47820472ded_prof);

        
        $__internal_ee6b5bf2c4e11f07c9d5182343f0ecde1d8474c7fb8d1ff71b307eb346334bb6->leave($__internal_ee6b5bf2c4e11f07c9d5182343f0ecde1d8474c7fb8d1ff71b307eb346334bb6_prof);

    }

    // line 27
    public function block_css($context, array $blocks = array())
    {
        $__internal_dff0164586b5d0806bb2cd04396a4943823db7c38d50c1361253c698481c6664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff0164586b5d0806bb2cd04396a4943823db7c38d50c1361253c698481c6664->enter($__internal_dff0164586b5d0806bb2cd04396a4943823db7c38d50c1361253c698481c6664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_d9a0e493dd2197760a487952a2ce362c0d2c486e3fe2756083aa273e2c569de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a0e493dd2197760a487952a2ce362c0d2c486e3fe2756083aa273e2c569de6->enter($__internal_d9a0e493dd2197760a487952a2ce362c0d2c486e3fe2756083aa273e2c569de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_d9a0e493dd2197760a487952a2ce362c0d2c486e3fe2756083aa273e2c569de6->leave($__internal_d9a0e493dd2197760a487952a2ce362c0d2c486e3fe2756083aa273e2c569de6_prof);

        
        $__internal_dff0164586b5d0806bb2cd04396a4943823db7c38d50c1361253c698481c6664->leave($__internal_dff0164586b5d0806bb2cd04396a4943823db7c38d50c1361253c698481c6664_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c310a0915e25a82591902f416d4dd836f83012a1d04ee8892c506dc5d00eaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c310a0915e25a82591902f416d4dd836f83012a1d04ee8892c506dc5d00eaaf->enter($__internal_0c310a0915e25a82591902f416d4dd836f83012a1d04ee8892c506dc5d00eaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_946a7aeab3bd2f0f2f4d998b5370a81768d47636962af6c4879a47e88a129743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946a7aeab3bd2f0f2f4d998b5370a81768d47636962af6c4879a47e88a129743->enter($__internal_946a7aeab3bd2f0f2f4d998b5370a81768d47636962af6c4879a47e88a129743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_946a7aeab3bd2f0f2f4d998b5370a81768d47636962af6c4879a47e88a129743->leave($__internal_946a7aeab3bd2f0f2f4d998b5370a81768d47636962af6c4879a47e88a129743_prof);

        
        $__internal_0c310a0915e25a82591902f416d4dd836f83012a1d04ee8892c506dc5d00eaaf->leave($__internal_0c310a0915e25a82591902f416d4dd836f83012a1d04ee8892c506dc5d00eaaf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  119 => 27,  101 => 5,  88 => 40,  86 => 39,  77 => 33,  73 => 32,  69 => 31,  64 => 28,  62 => 27,  39 => 7,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}TP4 - Biblios - par François{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <style>
          .submenu{
            display: none;
            position: relative;
            /*top:20px;*/
            /*left:-22px;*/
            background-color: #CCC;
            padding:8px;
            list-style-type: none;
            border-radius: 4px;
            width: 150px;
          }
          li:hover > ul.submenu {
            display: block;
            position: absolute;
          }

        </style>
        {% block css %}{% endblock %}
    </head>
    <nav>
      <ul class=\"nav nav-tabs\">
        <li><a href=\"{{ path('homepage') }}\">Accueil Biblios</a></li>
        <li><a href=\"{{ path('author_admin_page') }}\">Auteurs</a></li>
        <li><a href=\"{{ path('book_admin_page') }}\">Livres</a></li>

      </ul>
    </nav>
    <body>
      <div class=\"container\">
        {% block body %}{% endblock %}
      </div>
    </body>
</html>
", "base.html.twig", "/var/www/html/TP4/app/Resources/views/base.html.twig");
    }
}
