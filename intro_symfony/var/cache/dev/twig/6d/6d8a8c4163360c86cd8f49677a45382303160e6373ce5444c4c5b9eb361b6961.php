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
        $__internal_b37ce8b0d2ab46729e582350fb5fcb00d816017c5985e96e479a1a7ae20aee38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37ce8b0d2ab46729e582350fb5fcb00d816017c5985e96e479a1a7ae20aee38->enter($__internal_b37ce8b0d2ab46729e582350fb5fcb00d816017c5985e96e479a1a7ae20aee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b9a190219bf3af1d34a7ab4c1dcbd308ec5144622f7eca945f4686ed42866fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a190219bf3af1d34a7ab4c1dcbd308ec5144622f7eca945f4686ed42866fac->enter($__internal_b9a190219bf3af1d34a7ab4c1dcbd308ec5144622f7eca945f4686ed42866fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b37ce8b0d2ab46729e582350fb5fcb00d816017c5985e96e479a1a7ae20aee38->leave($__internal_b37ce8b0d2ab46729e582350fb5fcb00d816017c5985e96e479a1a7ae20aee38_prof);

        
        $__internal_b9a190219bf3af1d34a7ab4c1dcbd308ec5144622f7eca945f4686ed42866fac->leave($__internal_b9a190219bf3af1d34a7ab4c1dcbd308ec5144622f7eca945f4686ed42866fac_prof);

    }

    // line 34
    public function block_css($context, array $blocks = array())
    {
        $__internal_929abdb6cf468f72e49da1fc05a4ad13be58e1438028c6bb366a8ed1b877dc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929abdb6cf468f72e49da1fc05a4ad13be58e1438028c6bb366a8ed1b877dc2e->enter($__internal_929abdb6cf468f72e49da1fc05a4ad13be58e1438028c6bb366a8ed1b877dc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_55348389d715a32ad52928545b57d68c74152b245bd8f5ec8024cdbb5a8e0299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55348389d715a32ad52928545b57d68c74152b245bd8f5ec8024cdbb5a8e0299->enter($__internal_55348389d715a32ad52928545b57d68c74152b245bd8f5ec8024cdbb5a8e0299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_55348389d715a32ad52928545b57d68c74152b245bd8f5ec8024cdbb5a8e0299->leave($__internal_55348389d715a32ad52928545b57d68c74152b245bd8f5ec8024cdbb5a8e0299_prof);

        
        $__internal_929abdb6cf468f72e49da1fc05a4ad13be58e1438028c6bb366a8ed1b877dc2e->leave($__internal_929abdb6cf468f72e49da1fc05a4ad13be58e1438028c6bb366a8ed1b877dc2e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_12dca86781841eca643ae9aec16359789f6e0f6a3e3dfb09741b14c89d697b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dca86781841eca643ae9aec16359789f6e0f6a3e3dfb09741b14c89d697b0b->enter($__internal_12dca86781841eca643ae9aec16359789f6e0f6a3e3dfb09741b14c89d697b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ded804b580c27ff8b201dde4cefaf30fabeac0d80004e0ee23d2ddf79812634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ded804b580c27ff8b201dde4cefaf30fabeac0d80004e0ee23d2ddf79812634->enter($__internal_2ded804b580c27ff8b201dde4cefaf30fabeac0d80004e0ee23d2ddf79812634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ded804b580c27ff8b201dde4cefaf30fabeac0d80004e0ee23d2ddf79812634->leave($__internal_2ded804b580c27ff8b201dde4cefaf30fabeac0d80004e0ee23d2ddf79812634_prof);

        
        $__internal_12dca86781841eca643ae9aec16359789f6e0f6a3e3dfb09741b14c89d697b0b->leave($__internal_12dca86781841eca643ae9aec16359789f6e0f6a3e3dfb09741b14c89d697b0b_prof);

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
", "base.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/base.html.twig");
    }
}
