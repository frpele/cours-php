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
        $__internal_17534dc0ae5f2406017f1b8c1e6d2a47cc853b199d5f97c5b3d75311eccd90bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17534dc0ae5f2406017f1b8c1e6d2a47cc853b199d5f97c5b3d75311eccd90bc->enter($__internal_17534dc0ae5f2406017f1b8c1e6d2a47cc853b199d5f97c5b3d75311eccd90bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_447a430da83679e63f8c152b88ec5bfd9c674366b8ecb07439250a3332dedcf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447a430da83679e63f8c152b88ec5bfd9c674366b8ecb07439250a3332dedcf8->enter($__internal_447a430da83679e63f8c152b88ec5bfd9c674366b8ecb07439250a3332dedcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 16
        echo "    </head>
    <nav>
      <ul class=\"nav nav-tabs\">
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruits_page");
        echo "\">Fruits</a></li>
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("example_page");
        echo "\">Exemple</a></li>
        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruits_comestibles_page");
        echo "\">Fruits comestibles</a></li>
      </ul>
    </nav>
    <body>
      <div class=\"container\">
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "            </div>
    </body>
</html>
";
        
        $__internal_17534dc0ae5f2406017f1b8c1e6d2a47cc853b199d5f97c5b3d75311eccd90bc->leave($__internal_17534dc0ae5f2406017f1b8c1e6d2a47cc853b199d5f97c5b3d75311eccd90bc_prof);

        
        $__internal_447a430da83679e63f8c152b88ec5bfd9c674366b8ecb07439250a3332dedcf8->leave($__internal_447a430da83679e63f8c152b88ec5bfd9c674366b8ecb07439250a3332dedcf8_prof);

    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        $__internal_8b9e2226e1380b9c16977b27cb7549f4f95508580744c3270f4e7471741b0555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9e2226e1380b9c16977b27cb7549f4f95508580744c3270f4e7471741b0555->enter($__internal_8b9e2226e1380b9c16977b27cb7549f4f95508580744c3270f4e7471741b0555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_474b93a968426c4cf8509eaec8b5758e3c3fdc988c6a0d4a91df055aa38b3856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474b93a968426c4cf8509eaec8b5758e3c3fdc988c6a0d4a91df055aa38b3856->enter($__internal_474b93a968426c4cf8509eaec8b5758e3c3fdc988c6a0d4a91df055aa38b3856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_474b93a968426c4cf8509eaec8b5758e3c3fdc988c6a0d4a91df055aa38b3856->leave($__internal_474b93a968426c4cf8509eaec8b5758e3c3fdc988c6a0d4a91df055aa38b3856_prof);

        
        $__internal_8b9e2226e1380b9c16977b27cb7549f4f95508580744c3270f4e7471741b0555->leave($__internal_8b9e2226e1380b9c16977b27cb7549f4f95508580744c3270f4e7471741b0555_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3e5d4a036fa66240a83e65f7cb47f0577bf940139e347bfa5c6ce2157fe242d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e5d4a036fa66240a83e65f7cb47f0577bf940139e347bfa5c6ce2157fe242d->enter($__internal_b3e5d4a036fa66240a83e65f7cb47f0577bf940139e347bfa5c6ce2157fe242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aef2d448a35afdac302cc59bc2a09c060fea08ce650a0bb0c22d0e7f82053af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef2d448a35afdac302cc59bc2a09c060fea08ce650a0bb0c22d0e7f82053af7->enter($__internal_aef2d448a35afdac302cc59bc2a09c060fea08ce650a0bb0c22d0e7f82053af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aef2d448a35afdac302cc59bc2a09c060fea08ce650a0bb0c22d0e7f82053af7->leave($__internal_aef2d448a35afdac302cc59bc2a09c060fea08ce650a0bb0c22d0e7f82053af7_prof);

        
        $__internal_b3e5d4a036fa66240a83e65f7cb47f0577bf940139e347bfa5c6ce2157fe242d->leave($__internal_b3e5d4a036fa66240a83e65f7cb47f0577bf940139e347bfa5c6ce2157fe242d_prof);

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
        return array (  99 => 27,  82 => 15,  69 => 28,  67 => 27,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  42 => 16,  40 => 15,  36 => 14,  27 => 7,);
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
        {% block css %}{% endblock %}
    </head>
    <nav>
      <ul class=\"nav nav-tabs\">
        <li><a href=\"{{ path('homepage') }}\">Accueil</a></li>
        <li><a href=\"{{ path('fruits_page') }}\">Fruits</a></li>
        <li><a href=\"{{ path('example_page') }}\">Exemple</a></li>
        <li><a href=\"{{ path('fruits_comestibles_page') }}\">Fruits comestibles</a></li>
      </ul>
    </nav>
    <body>
      <div class=\"container\">
        {% block body %}{% endblock %}
            </div>
    </body>
</html>
", "base.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/base.html.twig");
    }
}
