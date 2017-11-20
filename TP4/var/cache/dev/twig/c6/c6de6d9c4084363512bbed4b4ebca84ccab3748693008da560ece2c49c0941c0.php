<?php

/* AppBundle:Author:index.html.twig */
class __TwigTemplate_35f71d41c0f303ca58c5957831225683e78977986a7a5cefc0608b5f325b2f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Author:index.html.twig", 1);
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
        $__internal_3fe06e6931e13b68011c722f7adb82f61c2e585deba669be19166e17b20d7644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe06e6931e13b68011c722f7adb82f61c2e585deba669be19166e17b20d7644->enter($__internal_3fe06e6931e13b68011c722f7adb82f61c2e585deba669be19166e17b20d7644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Author:index.html.twig"));

        $__internal_1f44ebf5a83caf173a7d1d75dc7630fa73bc7f6b486631a23c56d68c816118b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f44ebf5a83caf173a7d1d75dc7630fa73bc7f6b486631a23c56d68c816118b5->enter($__internal_1f44ebf5a83caf173a7d1d75dc7630fa73bc7f6b486631a23c56d68c816118b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Author:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe06e6931e13b68011c722f7adb82f61c2e585deba669be19166e17b20d7644->leave($__internal_3fe06e6931e13b68011c722f7adb82f61c2e585deba669be19166e17b20d7644_prof);

        
        $__internal_1f44ebf5a83caf173a7d1d75dc7630fa73bc7f6b486631a23c56d68c816118b5->leave($__internal_1f44ebf5a83caf173a7d1d75dc7630fa73bc7f6b486631a23c56d68c816118b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bdcf4d294fe48bc0528b781bd09693bad2e151676dd1d074a99cb5f99aa7ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdcf4d294fe48bc0528b781bd09693bad2e151676dd1d074a99cb5f99aa7ec4->enter($__internal_6bdcf4d294fe48bc0528b781bd09693bad2e151676dd1d074a99cb5f99aa7ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d40841c2ca92f376195b497be794ff48e92218ea91f085462ca89023d708117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d40841c2ca92f376195b497be794ff48e92218ea91f085462ca89023d708117->enter($__internal_7d40841c2ca92f376195b497be794ff48e92218ea91f085462ca89023d708117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP4 - Biblios - Auteurs";
        
        $__internal_7d40841c2ca92f376195b497be794ff48e92218ea91f085462ca89023d708117->leave($__internal_7d40841c2ca92f376195b497be794ff48e92218ea91f085462ca89023d708117_prof);

        
        $__internal_6bdcf4d294fe48bc0528b781bd09693bad2e151676dd1d074a99cb5f99aa7ec4->leave($__internal_6bdcf4d294fe48bc0528b781bd09693bad2e151676dd1d074a99cb5f99aa7ec4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_33d9ad36dec0ac1b8b11144b210e66088c85480dd39b1827c27158d528db9edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d9ad36dec0ac1b8b11144b210e66088c85480dd39b1827c27158d528db9edb->enter($__internal_33d9ad36dec0ac1b8b11144b210e66088c85480dd39b1827c27158d528db9edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cc447946c0ea3858b1f3dc1f754c921b71ae03bb902bf65c5d52ccb6b57bb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc447946c0ea3858b1f3dc1f754c921b71ae03bb902bf65c5d52ccb6b57bb87->enter($__internal_0cc447946c0ea3858b1f3dc1f754c921b71ae03bb902bf65c5d52ccb6b57bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Bienvenue sur la rubrique Auteurs</h1>
<hr>
<p><strong><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_add_page");
        echo "\">> Ajouter un auteur</a></strong></p>
<hr>
<h2>Liste des auteurs</h2>

<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Année de naissance</th>
    <th>Pays</th>
    <th>Livres</th>
    <th>Actions</th>

  </tr>

  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 25
            echo "  <tr>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "firstname", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "lastname", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "birthYear", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "country", array()), "html", null, true);
            echo "</td>
    <td>
    ";
            // line 31
            if ((twig_length_filter($this->env, $this->getAttribute($context["a"], "books", array())) > 0)) {
                // line 32
                echo "      - ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["a"], "books", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                    // line 33
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "title", array()), "html", null, true);
                    echo " -
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "    ";
            } else {
                // line 36
                echo "    Aucun livre enregistré
    ";
            }
            // line 38
            echo "    </td>
    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_edit_page", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_delete_page", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
</table>

";
        
        $__internal_0cc447946c0ea3858b1f3dc1f754c921b71ae03bb902bf65c5d52ccb6b57bb87->leave($__internal_0cc447946c0ea3858b1f3dc1f754c921b71ae03bb902bf65c5d52ccb6b57bb87_prof);

        
        $__internal_33d9ad36dec0ac1b8b11144b210e66088c85480dd39b1827c27158d528db9edb->leave($__internal_33d9ad36dec0ac1b8b11144b210e66088c85480dd39b1827c27158d528db9edb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Author:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  146 => 41,  142 => 40,  138 => 38,  134 => 36,  131 => 35,  122 => 33,  117 => 32,  115 => 31,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  95 => 25,  91 => 24,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}TP4 - Biblios - Auteurs{% endblock %}

{% block body %}
<h1>Bienvenue sur la rubrique Auteurs</h1>
<hr>
<p><strong><a href=\"{{ path('author_add_page') }}\">> Ajouter un auteur</a></strong></p>
<hr>
<h2>Liste des auteurs</h2>

<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Année de naissance</th>
    <th>Pays</th>
    <th>Livres</th>
    <th>Actions</th>

  </tr>

  {% for a in authors %}
  <tr>
    <td>{{ a.firstname }}</td>
    <td>{{ a.lastname }}</td>
    <td>{{ a.birthYear }}</td>
    <td>{{ a.country }}</td>
    <td>
    {% if a.books | length > 0 %}
      - {% for b in a.books %}
      {{ b.title }} -
      {% endfor %}
    {% else %}
    Aucun livre enregistré
    {% endif %}
    </td>
    <td>
      <a class=\"btn btn-primary btn-xs\" href=\"{{ path('author_edit_page', {'id': a.id}) }}\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"{{ path('author_delete_page', {'id': a.id}) }}\">Supprimer</a>
    </td>
  </tr>
  {% endfor %}

</table>

{% endblock %}
", "AppBundle:Author:index.html.twig", "/var/www/html/TP4/src/AppBundle/Resources/views/Author/index.html.twig");
    }
}
