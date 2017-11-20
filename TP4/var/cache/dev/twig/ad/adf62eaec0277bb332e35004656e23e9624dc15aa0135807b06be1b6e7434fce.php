<?php

/* AppBundle:Book:index.html.twig */
class __TwigTemplate_d72c4b4026b75b492d7e98da24b748ef8a757d91f0e75d9db4a8d477f6f1f431 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Book:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de0b3ec3316428c05a9b02906020a6cc4d46cfd356f5a85b49cc3b8d5bbe19fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0b3ec3316428c05a9b02906020a6cc4d46cfd356f5a85b49cc3b8d5bbe19fa->enter($__internal_de0b3ec3316428c05a9b02906020a6cc4d46cfd356f5a85b49cc3b8d5bbe19fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:index.html.twig"));

        $__internal_3f29a0c032fd2719a47605d3770988e9e4dddabc0eb0f82a1ee270ed352d6013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f29a0c032fd2719a47605d3770988e9e4dddabc0eb0f82a1ee270ed352d6013->enter($__internal_3f29a0c032fd2719a47605d3770988e9e4dddabc0eb0f82a1ee270ed352d6013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de0b3ec3316428c05a9b02906020a6cc4d46cfd356f5a85b49cc3b8d5bbe19fa->leave($__internal_de0b3ec3316428c05a9b02906020a6cc4d46cfd356f5a85b49cc3b8d5bbe19fa_prof);

        
        $__internal_3f29a0c032fd2719a47605d3770988e9e4dddabc0eb0f82a1ee270ed352d6013->leave($__internal_3f29a0c032fd2719a47605d3770988e9e4dddabc0eb0f82a1ee270ed352d6013_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7d762b7017c512dcb53d79994f40f358b42e400bb14c79a2ffe43f2e5aee5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d762b7017c512dcb53d79994f40f358b42e400bb14c79a2ffe43f2e5aee5dc->enter($__internal_f7d762b7017c512dcb53d79994f40f358b42e400bb14c79a2ffe43f2e5aee5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf3ad3bd5c6c742b1529e80717bf2804a53ceca9e191a4d7aeb1555e6fe8550f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3ad3bd5c6c742b1529e80717bf2804a53ceca9e191a4d7aeb1555e6fe8550f->enter($__internal_cf3ad3bd5c6c742b1529e80717bf2804a53ceca9e191a4d7aeb1555e6fe8550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP4 - Biblios - Livres";
        
        $__internal_cf3ad3bd5c6c742b1529e80717bf2804a53ceca9e191a4d7aeb1555e6fe8550f->leave($__internal_cf3ad3bd5c6c742b1529e80717bf2804a53ceca9e191a4d7aeb1555e6fe8550f_prof);

        
        $__internal_f7d762b7017c512dcb53d79994f40f358b42e400bb14c79a2ffe43f2e5aee5dc->leave($__internal_f7d762b7017c512dcb53d79994f40f358b42e400bb14c79a2ffe43f2e5aee5dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61c66d94af1cec796420e411724de9064f820693cf7ceb1e3b5c2ff2d20ac948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c66d94af1cec796420e411724de9064f820693cf7ceb1e3b5c2ff2d20ac948->enter($__internal_61c66d94af1cec796420e411724de9064f820693cf7ceb1e3b5c2ff2d20ac948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fbf6026168468b8582847bb1259dd494d5364212c5d2d435a7028c547d271c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbf6026168468b8582847bb1259dd494d5364212c5d2d435a7028c547d271c1->enter($__internal_8fbf6026168468b8582847bb1259dd494d5364212c5d2d435a7028c547d271c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Bienvenue sur la rubrique Livres</h1>
<hr>
<p><strong><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_add_page");
        echo "\">> Ajouter un livre</a></strong></p>
<hr>
<h2>Liste des livres</h2>

<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Titre du livre</th>
    <th>N°ISBN</th>
    <th>Nombre de pages</th>
    <th>Auteur</th>
    <th>Actions</th>
  </tr>

  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["books"] ?? $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 23
            echo "  <tr>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "title", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "isbn", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "pages", array()), "html", null, true);
            echo "</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      ";
            // line 30
            if ($this->getAttribute($context["b"], "author", array())) {
                // line 31
                echo "
      ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["b"], "author", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["b"], "author", array()), "lastname", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 34
                echo "      Aucun auteur
      ";
            }
            // line 36
            echo "    </td>

    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_edit_page", array("id" => $this->getAttribute($context["b"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_delete_page", array("id" => $this->getAttribute($context["b"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
</table>
";
        
        $__internal_8fbf6026168468b8582847bb1259dd494d5364212c5d2d435a7028c547d271c1->leave($__internal_8fbf6026168468b8582847bb1259dd494d5364212c5d2d435a7028c547d271c1_prof);

        
        $__internal_61c66d94af1cec796420e411724de9064f820693cf7ceb1e3b5c2ff2d20ac948->leave($__internal_61c66d94af1cec796420e411724de9064f820693cf7ceb1e3b5c2ff2d20ac948_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Book:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  136 => 40,  132 => 39,  127 => 36,  123 => 34,  116 => 32,  113 => 31,  111 => 30,  104 => 26,  100 => 25,  96 => 24,  93 => 23,  89 => 22,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}TP4 - Biblios - Livres{% endblock %}

{% block body %}
<h1>Bienvenue sur la rubrique Livres</h1>
<hr>
<p><strong><a href=\"{{ path('book_add_page') }}\">> Ajouter un livre</a></strong></p>
<hr>
<h2>Liste des livres</h2>

<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Titre du livre</th>
    <th>N°ISBN</th>
    <th>Nombre de pages</th>
    <th>Auteur</th>
    <th>Actions</th>
  </tr>

  {% for b in books %}
  <tr>
    <td>{{ b.title }}</td>
    <td>{{ b.isbn }}</td>
    <td>{{ b.pages }}</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      {%if b.author %}

      {{ b.author.firstname }} {{ b.author.lastname }}
      {% else %}
      Aucun auteur
      {% endif %}
    </td>

    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"{{ path('book_edit_page', {'id': b.id}) }}\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"{{ path('book_delete_page', {'id': b.id}) }}\">Supprimer</a>
    </td>
  </tr>
  {% endfor %}

</table>
{% endblock %}
", "AppBundle:Book:index.html.twig", "/var/www/html/TP4/src/AppBundle/Resources/views/Book/index.html.twig");
    }
}
