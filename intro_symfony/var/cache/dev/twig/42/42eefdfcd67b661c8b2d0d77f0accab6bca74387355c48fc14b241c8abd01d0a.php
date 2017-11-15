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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ebe1bde555ce1a82992dabcc10e4d5264d37ac951e89fa781ec98846efdacdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebe1bde555ce1a82992dabcc10e4d5264d37ac951e89fa781ec98846efdacdd->enter($__internal_2ebe1bde555ce1a82992dabcc10e4d5264d37ac951e89fa781ec98846efdacdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_96d1a7107255a2967681f86352653822522785b14d5982b117e9162ff465b094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d1a7107255a2967681f86352653822522785b14d5982b117e9162ff465b094->enter($__internal_96d1a7107255a2967681f86352653822522785b14d5982b117e9162ff465b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ebe1bde555ce1a82992dabcc10e4d5264d37ac951e89fa781ec98846efdacdd->leave($__internal_2ebe1bde555ce1a82992dabcc10e4d5264d37ac951e89fa781ec98846efdacdd_prof);

        
        $__internal_96d1a7107255a2967681f86352653822522785b14d5982b117e9162ff465b094->leave($__internal_96d1a7107255a2967681f86352653822522785b14d5982b117e9162ff465b094_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60da5352dbf28a199d0ae39ed075a7ec7ed236d4587de9fb0fd5cae486000763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60da5352dbf28a199d0ae39ed075a7ec7ed236d4587de9fb0fd5cae486000763->enter($__internal_60da5352dbf28a199d0ae39ed075a7ec7ed236d4587de9fb0fd5cae486000763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa1b5dd43aa58c580ee1c1e943fa928fdb99787906ca4bf02cc986dda5ed062c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1b5dd43aa58c580ee1c1e943fa928fdb99787906ca4bf02cc986dda5ed062c->enter($__internal_aa1b5dd43aa58c580ee1c1e943fa928fdb99787906ca4bf02cc986dda5ed062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <p>J'apprends le Symfony</p>
";
        
        $__internal_aa1b5dd43aa58c580ee1c1e943fa928fdb99787906ca4bf02cc986dda5ed062c->leave($__internal_aa1b5dd43aa58c580ee1c1e943fa928fdb99787906ca4bf02cc986dda5ed062c_prof);

        
        $__internal_60da5352dbf28a199d0ae39ed075a7ec7ed236d4587de9fb0fd5cae486000763->leave($__internal_60da5352dbf28a199d0ae39ed075a7ec7ed236d4587de9fb0fd5cae486000763_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
  <p>J'apprends le Symfony</p>
{% endblock %}
", "default/index.html.twig", "/var/www/html/cours-php/intro_symfony/app/Resources/views/default/index.html.twig");
    }
}
