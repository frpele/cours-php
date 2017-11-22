<?php

/* base.html.twig */
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
        $__internal_bb265babb0e59215e88c1a1525286ec84b0d3f3b41a4ad86259868d70a5b6f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb265babb0e59215e88c1a1525286ec84b0d3f3b41a4ad86259868d70a5b6f42->enter($__internal_bb265babb0e59215e88c1a1525286ec84b0d3f3b41a4ad86259868d70a5b6f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c51d4aae6207cdb62f0a210a3d02623c2ac298885379d8ba275b6d8cb0a1e3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51d4aae6207cdb62f0a210a3d02623c2ac298885379d8ba275b6d8cb0a1e3b7->enter($__internal_c51d4aae6207cdb62f0a210a3d02623c2ac298885379d8ba275b6d8cb0a1e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_bb265babb0e59215e88c1a1525286ec84b0d3f3b41a4ad86259868d70a5b6f42->leave($__internal_bb265babb0e59215e88c1a1525286ec84b0d3f3b41a4ad86259868d70a5b6f42_prof);

        
        $__internal_c51d4aae6207cdb62f0a210a3d02623c2ac298885379d8ba275b6d8cb0a1e3b7->leave($__internal_c51d4aae6207cdb62f0a210a3d02623c2ac298885379d8ba275b6d8cb0a1e3b7_prof);

    }

    // line 34
    public function block_css($context, array $blocks = array())
    {
        $__internal_b305226911b3dc15764f8546a400d26613ac7b27b63e81cc4426590199b8d12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b305226911b3dc15764f8546a400d26613ac7b27b63e81cc4426590199b8d12b->enter($__internal_b305226911b3dc15764f8546a400d26613ac7b27b63e81cc4426590199b8d12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_53b51ec385cfce40412c39ebd3bc232bf6be02fc6689acd619a1889d648a1109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b51ec385cfce40412c39ebd3bc232bf6be02fc6689acd619a1889d648a1109->enter($__internal_53b51ec385cfce40412c39ebd3bc232bf6be02fc6689acd619a1889d648a1109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_53b51ec385cfce40412c39ebd3bc232bf6be02fc6689acd619a1889d648a1109->leave($__internal_53b51ec385cfce40412c39ebd3bc232bf6be02fc6689acd619a1889d648a1109_prof);

        
        $__internal_b305226911b3dc15764f8546a400d26613ac7b27b63e81cc4426590199b8d12b->leave($__internal_b305226911b3dc15764f8546a400d26613ac7b27b63e81cc4426590199b8d12b_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_de83d782b5b09535058a4037164596e58ad1ba0323e41cc2c35ef374719979ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de83d782b5b09535058a4037164596e58ad1ba0323e41cc2c35ef374719979ac->enter($__internal_de83d782b5b09535058a4037164596e58ad1ba0323e41cc2c35ef374719979ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74005704965c646d249651b79a600e7737d0044c1ca52e4d056ce1357627e7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74005704965c646d249651b79a600e7737d0044c1ca52e4d056ce1357627e7a2->enter($__internal_74005704965c646d249651b79a600e7737d0044c1ca52e4d056ce1357627e7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74005704965c646d249651b79a600e7737d0044c1ca52e4d056ce1357627e7a2->leave($__internal_74005704965c646d249651b79a600e7737d0044c1ca52e4d056ce1357627e7a2_prof);

        
        $__internal_de83d782b5b09535058a4037164596e58ad1ba0323e41cc2c35ef374719979ac->leave($__internal_de83d782b5b09535058a4037164596e58ad1ba0323e41cc2c35ef374719979ac_prof);

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
        return array (  134 => 51,  117 => 34,  103 => 54,  99 => 53,  96 => 52,  94 => 51,  84 => 44,  80 => 43,  76 => 42,  70 => 39,  66 => 38,  61 => 35,  59 => 34,  36 => 14,  27 => 7,);
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
            <script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
            <script src=\"{{asset('js/script.js')}}\"></script>
    </body>
</html>
", "base.html.twig", "/var/www/html/intro_symfony/app/Resources/views/base.html.twig");
    }
}
