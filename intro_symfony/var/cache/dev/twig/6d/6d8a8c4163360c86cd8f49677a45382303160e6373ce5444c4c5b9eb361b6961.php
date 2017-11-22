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
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d533ece68a388422957c250ae3871ee6683f72eb6257d31db899a2c71fe9ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d533ece68a388422957c250ae3871ee6683f72eb6257d31db899a2c71fe9ccc->enter($__internal_9d533ece68a388422957c250ae3871ee6683f72eb6257d31db899a2c71fe9ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_02ca8fa12d1822d6c67a5ddb2c1a9d6bf073153a7f09d9ccf7e04ddd54bfb847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ca8fa12d1822d6c67a5ddb2c1a9d6bf073153a7f09d9ccf7e04ddd54bfb847->enter($__internal_02ca8fa12d1822d6c67a5ddb2c1a9d6bf073153a7f09d9ccf7e04ddd54bfb847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 54
        $this->displayBlock('js', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_9d533ece68a388422957c250ae3871ee6683f72eb6257d31db899a2c71fe9ccc->leave($__internal_9d533ece68a388422957c250ae3871ee6683f72eb6257d31db899a2c71fe9ccc_prof);

        
        $__internal_02ca8fa12d1822d6c67a5ddb2c1a9d6bf073153a7f09d9ccf7e04ddd54bfb847->leave($__internal_02ca8fa12d1822d6c67a5ddb2c1a9d6bf073153a7f09d9ccf7e04ddd54bfb847_prof);

    }

    // line 34
    public function block_css($context, array $blocks = array())
    {
        $__internal_a5c142696b979ed6381b15af8e319bc7379dbd7fc1bcd1a08b8042cb7073fd94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c142696b979ed6381b15af8e319bc7379dbd7fc1bcd1a08b8042cb7073fd94->enter($__internal_a5c142696b979ed6381b15af8e319bc7379dbd7fc1bcd1a08b8042cb7073fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_419fc11d81654817063a1d75e25938adf1f78874d25a5bf9c7be31100f040bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419fc11d81654817063a1d75e25938adf1f78874d25a5bf9c7be31100f040bd4->enter($__internal_419fc11d81654817063a1d75e25938adf1f78874d25a5bf9c7be31100f040bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_419fc11d81654817063a1d75e25938adf1f78874d25a5bf9c7be31100f040bd4->leave($__internal_419fc11d81654817063a1d75e25938adf1f78874d25a5bf9c7be31100f040bd4_prof);

        
        $__internal_a5c142696b979ed6381b15af8e319bc7379dbd7fc1bcd1a08b8042cb7073fd94->leave($__internal_a5c142696b979ed6381b15af8e319bc7379dbd7fc1bcd1a08b8042cb7073fd94_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec10595eee30f5ace12cbd9cca61203cd39d766d2725e3428e671cdc63b967f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec10595eee30f5ace12cbd9cca61203cd39d766d2725e3428e671cdc63b967f1->enter($__internal_ec10595eee30f5ace12cbd9cca61203cd39d766d2725e3428e671cdc63b967f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8060b9e6683874776604e15ce4db302a20f490cc7142032630f657cd32daa848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060b9e6683874776604e15ce4db302a20f490cc7142032630f657cd32daa848->enter($__internal_8060b9e6683874776604e15ce4db302a20f490cc7142032630f657cd32daa848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8060b9e6683874776604e15ce4db302a20f490cc7142032630f657cd32daa848->leave($__internal_8060b9e6683874776604e15ce4db302a20f490cc7142032630f657cd32daa848_prof);

        
        $__internal_ec10595eee30f5ace12cbd9cca61203cd39d766d2725e3428e671cdc63b967f1->leave($__internal_ec10595eee30f5ace12cbd9cca61203cd39d766d2725e3428e671cdc63b967f1_prof);

    }

    // line 54
    public function block_js($context, array $blocks = array())
    {
        $__internal_73dc86c6e03974ad588052d181d071994d409dd90726f48fd49f67dce40484ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dc86c6e03974ad588052d181d071994d409dd90726f48fd49f67dce40484ea->enter($__internal_73dc86c6e03974ad588052d181d071994d409dd90726f48fd49f67dce40484ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_e8f9561486d2f905454b514fc04f7c02d6c62ef978df4fe89a0c251f3410d6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f9561486d2f905454b514fc04f7c02d6c62ef978df4fe89a0c251f3410d6f1->enter($__internal_e8f9561486d2f905454b514fc04f7c02d6c62ef978df4fe89a0c251f3410d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_e8f9561486d2f905454b514fc04f7c02d6c62ef978df4fe89a0c251f3410d6f1->leave($__internal_e8f9561486d2f905454b514fc04f7c02d6c62ef978df4fe89a0c251f3410d6f1_prof);

        
        $__internal_73dc86c6e03974ad588052d181d071994d409dd90726f48fd49f67dce40484ea->leave($__internal_73dc86c6e03974ad588052d181d071994d409dd90726f48fd49f67dce40484ea_prof);

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
        return array (  152 => 54,  135 => 51,  118 => 34,  106 => 55,  104 => 54,  100 => 53,  97 => 52,  95 => 51,  85 => 44,  81 => 43,  77 => 42,  71 => 39,  67 => 38,  62 => 35,  60 => 34,  37 => 14,  28 => 7,);
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
        {% block js %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/intro_symfony/app/Resources/views/base.html.twig");
    }
}
