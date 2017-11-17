<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6b3c378f70b5a90e826b1cdd3a81fa55e376e13e4f5ca372cba957233c68ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b3c378f70b5a90e826b1cdd3a81fa55e376e13e4f5ca372cba957233c68ece->enter($__internal_b6b3c378f70b5a90e826b1cdd3a81fa55e376e13e4f5ca372cba957233c68ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2daab9a6c502437365ec80fa1b2ffa97413378a689f9f0000def6eeca1d2a145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2daab9a6c502437365ec80fa1b2ffa97413378a689f9f0000def6eeca1d2a145->enter($__internal_2daab9a6c502437365ec80fa1b2ffa97413378a689f9f0000def6eeca1d2a145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 7
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Intro Symfony par Christophe</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
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
        // line 34
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "    </head>
    <nav>
      <ul class=\"nav nav-tabs\">
        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_admin_page");
        echo "\">Fruits</a></li>
        <li><a href=\"#\">Test</a>
          <ul class=\"submenu\">
            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruits_page");
        echo "\">Fruits</a></li>
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("example_page");
        echo "\">Exemple</a></li>
            <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruits_comestibles_page");
        echo "\">Fruits comestibles</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <body>
      <div class=\"container\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "            </div>
    </body>
</html>
";
        
        $__internal_b6b3c378f70b5a90e826b1cdd3a81fa55e376e13e4f5ca372cba957233c68ece->leave($__internal_b6b3c378f70b5a90e826b1cdd3a81fa55e376e13e4f5ca372cba957233c68ece_prof);

        
        $__internal_2daab9a6c502437365ec80fa1b2ffa97413378a689f9f0000def6eeca1d2a145->leave($__internal_2daab9a6c502437365ec80fa1b2ffa97413378a689f9f0000def6eeca1d2a145_prof);

    }

    // line 34
    public function block_css($context, array $blocks = array())
    {
        $__internal_e2a719ee7fed2255462e7bcf0d782b16d77d527c873cab7eadd4518ad36ba659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a719ee7fed2255462e7bcf0d782b16d77d527c873cab7eadd4518ad36ba659->enter($__internal_e2a719ee7fed2255462e7bcf0d782b16d77d527c873cab7eadd4518ad36ba659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_e7c1dc5a6ec0d1d22708ca29fb062ca96b547a979a4f15c2374765f8988bf37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c1dc5a6ec0d1d22708ca29fb062ca96b547a979a4f15c2374765f8988bf37e->enter($__internal_e7c1dc5a6ec0d1d22708ca29fb062ca96b547a979a4f15c2374765f8988bf37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_e7c1dc5a6ec0d1d22708ca29fb062ca96b547a979a4f15c2374765f8988bf37e->leave($__internal_e7c1dc5a6ec0d1d22708ca29fb062ca96b547a979a4f15c2374765f8988bf37e_prof);

        
        $__internal_e2a719ee7fed2255462e7bcf0d782b16d77d527c873cab7eadd4518ad36ba659->leave($__internal_e2a719ee7fed2255462e7bcf0d782b16d77d527c873cab7eadd4518ad36ba659_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba494aa71d881ad337817812c4b907b123c6289c21659ca11a40a0794228a8a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba494aa71d881ad337817812c4b907b123c6289c21659ca11a40a0794228a8a7->enter($__internal_ba494aa71d881ad337817812c4b907b123c6289c21659ca11a40a0794228a8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bea6861e03f9058d707437456ce2e0dc0fb607c985a2dccee9d8e38466ee6382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea6861e03f9058d707437456ce2e0dc0fb607c985a2dccee9d8e38466ee6382->enter($__internal_bea6861e03f9058d707437456ce2e0dc0fb607c985a2dccee9d8e38466ee6382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bea6861e03f9058d707437456ce2e0dc0fb607c985a2dccee9d8e38466ee6382->leave($__internal_bea6861e03f9058d707437456ce2e0dc0fb607c985a2dccee9d8e38466ee6382_prof);

        
        $__internal_ba494aa71d881ad337817812c4b907b123c6289c21659ca11a40a0794228a8a7->leave($__internal_ba494aa71d881ad337817812c4b907b123c6289c21659ca11a40a0794228a8a7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  109 => 34,  96 => 52,  94 => 51,  84 => 44,  80 => 43,  76 => 42,  70 => 39,  66 => 38,  61 => 35,  59 => 34,  36 => 14,  27 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#commentaire

{{ }} permet de lire une variable
{% %} permet de définir un bloc d'instructions (exemple: for in, if)

 #}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Intro Symfony par Christophe</title>
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
        <li><a href=\"{{ path('homepage') }}\">Accueil</a></li>
        <li><a href=\"{{ path('fruit_admin_page') }}\">Fruits</a></li>
        <li><a href=\"#\">Test</a>
          <ul class=\"submenu\">
            <li><a href=\"{{ path('fruits_page') }}\">Fruits</a></li>
            <li><a href=\"{{ path('example_page') }}\">Exemple</a></li>
            <li><a href=\"{{ path('fruits_comestibles_page') }}\">Fruits comestibles</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <body>
      <div class=\"container\">
        {% block body %}{% endblock %}
            </div>
    </body>
</html>
", "::base.html.twig", "/var/www/html/intro_symfony/app/Resources/views/base.html.twig");
    }
}
