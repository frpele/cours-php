<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_936b1bb6e64b0da578a1071360faffab551ac99dc70ad8df4493444260f1bd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936b1bb6e64b0da578a1071360faffab551ac99dc70ad8df4493444260f1bd53->enter($__internal_936b1bb6e64b0da578a1071360faffab551ac99dc70ad8df4493444260f1bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b94301e6249890ef2d806388a12add9aa1f6cb9c4ca440a909c43ce5ccbc599f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94301e6249890ef2d806388a12add9aa1f6cb9c4ca440a909c43ce5ccbc599f->enter($__internal_b94301e6249890ef2d806388a12add9aa1f6cb9c4ca440a909c43ce5ccbc599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_936b1bb6e64b0da578a1071360faffab551ac99dc70ad8df4493444260f1bd53->leave($__internal_936b1bb6e64b0da578a1071360faffab551ac99dc70ad8df4493444260f1bd53_prof);

        
        $__internal_b94301e6249890ef2d806388a12add9aa1f6cb9c4ca440a909c43ce5ccbc599f->leave($__internal_b94301e6249890ef2d806388a12add9aa1f6cb9c4ca440a909c43ce5ccbc599f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bc1bfad30cd579e42bfdfcf005d0585af3969e6c9122bbcb9b68c2385a41c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc1bfad30cd579e42bfdfcf005d0585af3969e6c9122bbcb9b68c2385a41c69->enter($__internal_4bc1bfad30cd579e42bfdfcf005d0585af3969e6c9122bbcb9b68c2385a41c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_596c2ca6a34408cfb2132000e11af864f29a941259ce4d0e33f482211dbe6a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596c2ca6a34408cfb2132000e11af864f29a941259ce4d0e33f482211dbe6a77->enter($__internal_596c2ca6a34408cfb2132000e11af864f29a941259ce4d0e33f482211dbe6a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_596c2ca6a34408cfb2132000e11af864f29a941259ce4d0e33f482211dbe6a77->leave($__internal_596c2ca6a34408cfb2132000e11af864f29a941259ce4d0e33f482211dbe6a77_prof);

        
        $__internal_4bc1bfad30cd579e42bfdfcf005d0585af3969e6c9122bbcb9b68c2385a41c69->leave($__internal_4bc1bfad30cd579e42bfdfcf005d0585af3969e6c9122bbcb9b68c2385a41c69_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_91de9ec0c52d3bea30bb1310e4cd2f5767bb518c8fd34cff1f5662ba4b834a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91de9ec0c52d3bea30bb1310e4cd2f5767bb518c8fd34cff1f5662ba4b834a54->enter($__internal_91de9ec0c52d3bea30bb1310e4cd2f5767bb518c8fd34cff1f5662ba4b834a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad7a54cc32d8bf6e21dc313418973fe455ce287ecbcb10fb4d9b8965742c4146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7a54cc32d8bf6e21dc313418973fe455ce287ecbcb10fb4d9b8965742c4146->enter($__internal_ad7a54cc32d8bf6e21dc313418973fe455ce287ecbcb10fb4d9b8965742c4146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad7a54cc32d8bf6e21dc313418973fe455ce287ecbcb10fb4d9b8965742c4146->leave($__internal_ad7a54cc32d8bf6e21dc313418973fe455ce287ecbcb10fb4d9b8965742c4146_prof);

        
        $__internal_91de9ec0c52d3bea30bb1310e4cd2f5767bb518c8fd34cff1f5662ba4b834a54->leave($__internal_91de9ec0c52d3bea30bb1310e4cd2f5767bb518c8fd34cff1f5662ba4b834a54_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f44df6317e04f7c8c68aad5ee5e0d27ba9d16061e11e67c18e9a3b0e66123be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44df6317e04f7c8c68aad5ee5e0d27ba9d16061e11e67c18e9a3b0e66123be1->enter($__internal_f44df6317e04f7c8c68aad5ee5e0d27ba9d16061e11e67c18e9a3b0e66123be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42da9aca930b2c90de167c691956e44b60ad2a503e2d22352d5bbc3cbb9559e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42da9aca930b2c90de167c691956e44b60ad2a503e2d22352d5bbc3cbb9559e3->enter($__internal_42da9aca930b2c90de167c691956e44b60ad2a503e2d22352d5bbc3cbb9559e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42da9aca930b2c90de167c691956e44b60ad2a503e2d22352d5bbc3cbb9559e3->leave($__internal_42da9aca930b2c90de167c691956e44b60ad2a503e2d22352d5bbc3cbb9559e3_prof);

        
        $__internal_f44df6317e04f7c8c68aad5ee5e0d27ba9d16061e11e67c18e9a3b0e66123be1->leave($__internal_f44df6317e04f7c8c68aad5ee5e0d27ba9d16061e11e67c18e9a3b0e66123be1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/TP4/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
