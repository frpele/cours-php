<?php

/* fruit/index.html.twig */
class __TwigTemplate_d21eb80562e73d78c64f7d8aa5fb36ca9cb13266abe43c84ee8f19fbdc35eee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fruit/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60991246840073eba5a01779a7b86de6ef033c778dfe313d6d2b74b36cf00c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60991246840073eba5a01779a7b86de6ef033c778dfe313d6d2b74b36cf00c71->enter($__internal_60991246840073eba5a01779a7b86de6ef033c778dfe313d6d2b74b36cf00c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_83dd7db35f5765623794e68f615325373048196875f230b6c5818e76ec89fe02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83dd7db35f5765623794e68f615325373048196875f230b6c5818e76ec89fe02->enter($__internal_83dd7db35f5765623794e68f615325373048196875f230b6c5818e76ec89fe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60991246840073eba5a01779a7b86de6ef033c778dfe313d6d2b74b36cf00c71->leave($__internal_60991246840073eba5a01779a7b86de6ef033c778dfe313d6d2b74b36cf00c71_prof);

        
        $__internal_83dd7db35f5765623794e68f615325373048196875f230b6c5818e76ec89fe02->leave($__internal_83dd7db35f5765623794e68f615325373048196875f230b6c5818e76ec89fe02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67c3dad5cc3d0bee5bdfc52c967baae40c2ab72e3dd4a3084f93ec24b20b73d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c3dad5cc3d0bee5bdfc52c967baae40c2ab72e3dd4a3084f93ec24b20b73d9->enter($__internal_67c3dad5cc3d0bee5bdfc52c967baae40c2ab72e3dd4a3084f93ec24b20b73d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab4b583f37febc3c4d38644b5560926f1badc25554c4e193263c76695e775866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4b583f37febc3c4d38644b5560926f1badc25554c4e193263c76695e775866->enter($__internal_ab4b583f37febc3c4d38644b5560926f1badc25554c4e193263c76695e775866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Fruits</h2>

  <button id=\"btnHideForm\" type=\"button\">Afficher le formulaire</button>
<form class=\"form-inline well\" method=\"post\">
  <div class=\"form-group\">
    <input type=\"text\" name=\"name\" placeholder=\"Nom\" >
  </div>

  <div class=\"form-group\">
    <input type=\"text\" name=\"origin\" placeholder=\"Origine\" >
  </div>
  <div class=\"form-group\">
    <label for=\"comestible\">Comestible</label>
    <input type=\"checkbox\" name=\"comestible\">
  </div>
  <div class=\"form-group\">
    <select class=\"\" name=\"producer_id\">
      <option value=\"0\">Choisir un producteur</option>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producers"] ?? $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 24
            echo "        <option value=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </select>
  </div>

  <div class=\"form-group\">
    <p>Catégories</p>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 32
            echo "    <input type=\"checkbox\" name=\"categories[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>

    <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Producteur</th>
    <th style=\"display:none\">Détaillant</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 55
            echo "  <tr>
    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      ";
            // line 61
            if ($this->getAttribute($context["f"], "producer", array())) {
                // line 62
                echo "
      ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "producer", array()), "name", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 65
                echo "      Aucun producteur
      ";
            }
            // line 67
            echo "    </td>
    <td style=\"display:none\" >
    ";
            // line 69
            if ((twig_length_filter($this->env, $this->getAttribute($context["f"], "retailors", array())) > 0)) {
                // line 70
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "retailors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 71
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                    echo ",
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "    ";
            } else {
                // line 74
                echo "    Aucun distributeur
    ";
            }
            // line 76
            echo "    </td>
    <td>
      ";
            // line 78
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 79
                echo "      oui
      ";
            } else {
                // line 81
                echo "      non
      ";
            }
            // line 83
            echo "    </td>
    <td>
      <a class=\"btn btn-default btn-xs\" href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_details", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Détail</a>
      <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
</table>

";
        
        $__internal_ab4b583f37febc3c4d38644b5560926f1badc25554c4e193263c76695e775866->leave($__internal_ab4b583f37febc3c4d38644b5560926f1badc25554c4e193263c76695e775866_prof);

        
        $__internal_67c3dad5cc3d0bee5bdfc52c967baae40c2ab72e3dd4a3084f93ec24b20b73d9->leave($__internal_67c3dad5cc3d0bee5bdfc52c967baae40c2ab72e3dd4a3084f93ec24b20b73d9_prof);

    }

    // line 96
    public function block_js($context, array $blocks = array())
    {
        $__internal_e1bcf33159f0eff0da31ce48cc996ec01e6deacb6a06f9b28bb081e8e41cc0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bcf33159f0eff0da31ce48cc996ec01e6deacb6a06f9b28bb081e8e41cc0a0->enter($__internal_e1bcf33159f0eff0da31ce48cc996ec01e6deacb6a06f9b28bb081e8e41cc0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_b29f6791378748673d8bfa9b947b026b693f40a5fd9bae59abdd990628b6071c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29f6791378748673d8bfa9b947b026b693f40a5fd9bae59abdd990628b6071c->enter($__internal_b29f6791378748673d8bfa9b947b026b693f40a5fd9bae59abdd990628b6071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 97
        echo "
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_b29f6791378748673d8bfa9b947b026b693f40a5fd9bae59abdd990628b6071c->leave($__internal_b29f6791378748673d8bfa9b947b026b693f40a5fd9bae59abdd990628b6071c_prof);

        
        $__internal_e1bcf33159f0eff0da31ce48cc996ec01e6deacb6a06f9b28bb081e8e41cc0a0->leave($__internal_e1bcf33159f0eff0da31ce48cc996ec01e6deacb6a06f9b28bb081e8e41cc0a0_prof);

    }

    public function getTemplateName()
    {
        return "fruit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 98,  247 => 97,  238 => 96,  225 => 91,  215 => 87,  211 => 86,  207 => 85,  203 => 83,  199 => 81,  195 => 79,  193 => 78,  189 => 76,  185 => 74,  182 => 73,  173 => 71,  168 => 70,  166 => 69,  162 => 67,  158 => 65,  153 => 63,  150 => 62,  148 => 61,  141 => 57,  137 => 56,  134 => 55,  130 => 54,  108 => 34,  97 => 32,  93 => 31,  86 => 26,  75 => 24,  71 => 23,  50 => 4,  41 => 3,  11 => 1,);
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

<h2>Fruits</h2>

  <button id=\"btnHideForm\" type=\"button\">Afficher le formulaire</button>
<form class=\"form-inline well\" method=\"post\">
  <div class=\"form-group\">
    <input type=\"text\" name=\"name\" placeholder=\"Nom\" >
  </div>

  <div class=\"form-group\">
    <input type=\"text\" name=\"origin\" placeholder=\"Origine\" >
  </div>
  <div class=\"form-group\">
    <label for=\"comestible\">Comestible</label>
    <input type=\"checkbox\" name=\"comestible\">
  </div>
  <div class=\"form-group\">
    <select class=\"\" name=\"producer_id\">
      <option value=\"0\">Choisir un producteur</option>
      {% for p in producers %}
        <option value=\" {{ p.id }}\">{{ p.name }}</option>
        {% endfor %}
    </select>
  </div>

  <div class=\"form-group\">
    <p>Catégories</p>
    {% for c in categories %}
    <input type=\"checkbox\" name=\"categories[]\" value=\"{{ c.id }}\"> {{ c.name}}
    {% endfor %}
  </div>

    <input type=\"submit\" name=\"submit\" value=\"Enregistrer\">
</form>

<hr>



<table class=\"table table-bordered table-striped\">

  <tr>
    <th>Nom</th>
    <th>Origine</th>
    <th>Producteur</th>
    <th style=\"display:none\">Détaillant</th>
    <th>Comestible</th>
    <th>Actions</th>
  </tr>

  {% for f in fruits %}
  <tr>
    <td>{{ f.name }}</td>
    <td>{{ f.origin }}</td>
    <td>
      <!-- Si la  propriété producer ne vaut pas NULL :
    On peut accéder à l'objet producer-->
      {%if f.producer %}

      {{ f.producer.name }}
      {% else %}
      Aucun producteur
      {% endif %}
    </td>
    <td style=\"display:none\" >
    {% if f.retailors | length > 0 %}
      {% for r in f.retailors %}
      {{ r.name }},
      {% endfor %}
    {% else %}
    Aucun distributeur
    {% endif %}
    </td>
    <td>
      {% if f.comestible == 1 %}
      oui
      {% else %}
      non
      {% endif %}
    </td>
    <td>
      <a class=\"btn btn-default btn-xs\" href=\"{{ path('fruit_details', {'id': f.id}) }}\">Détail</a>
      <a class=\"btn btn-primary btn-xs\" href=\"{{ path('fruit_update', {'id': f.id}) }}\">Modifier</a>
      <a class=\"btn btn-danger btn-xs\" href=\"{{ path('fruit_delete', {'id': f.id}) }}\">Supprimer</a>
    </td>
  </tr>
  {% endfor %}

</table>

{% endblock %}

{% block js %}

<script src=\"{{asset('js/script.js')}}\"></script>

{% endblock %}
", "fruit/index.html.twig", "/var/www/html/intro_symfony/app/Resources/views/fruit/index.html.twig");
    }
}
