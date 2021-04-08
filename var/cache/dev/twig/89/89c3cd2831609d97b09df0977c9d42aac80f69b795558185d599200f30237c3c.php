<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/allLivre.html.twig */
class __TwigTemplate_7bb0a3ae3735cf4051790fc8110aefccb4fee0875b4f3e5d8924036f6e93c7b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'dashboard' => [$this, 'block_dashboard'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/allLivre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/allLivre.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard.html.twig", "admin/allLivre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DashBoard - Users";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        // line 4
        echo "    <div class=\"insideDash\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"text-center\" style=\"margin-top: 1%\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"width: 35% ;margin: auto;\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <div class=\"card-deck\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 15
            echo "                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Titre : ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreLivre", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">ID : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">Auteur : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "auteur", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">Refeni : ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "refEni", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">ISBN : ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "isbn", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                        <p class=\"card-footer\">
                            <small class=\"text-muted\">Filiere : ";
            // line 23
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["livre"], "filiere", [], "any", false, false, false, 23)), "html", null, true);
            echo "</small>
                        </p>
                    </div>
                    <div class=\"inline text-center\">
                        <a id=\"editPr\" class=\"updateLink\"
                           href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard_livre_edit", ["titre_livre" => twig_get_attribute($this->env, $this->source, $context["livre"], "titreLivre", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><i
                                    class=\"far fa-edit\"></i></a>
                        <a id=\"editPr\" class=\"updateLink\"
                           href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_livre_delete_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"><i
                                    class=\"fas fa-user-times\"></i></a>
                    </div>


                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/allLivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 38,  156 => 31,  150 => 28,  142 => 23,  137 => 21,  133 => 20,  129 => 19,  125 => 18,  121 => 17,  117 => 15,  113 => 14,  109 => 12,  99 => 8,  95 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard.html.twig' %}
{% block title %}DashBoard - Users{% endblock %}
{% block dashboard %}
    <div class=\"insideDash\">
        {% for message in app.flashes('success') %}
            <div class=\"text-center\" style=\"margin-top: 1%\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"width: 35% ;margin: auto;\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}

        <div class=\"card-deck\">
            {% for livre in livres %}
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Titre : {{ livre.titreLivre }}</h5>
                        <p class=\"card-text\">ID : {{ livre.id }}</p>
                        <p class=\"card-text\">Auteur : {{ livre.auteur }}</p>
                        <p class=\"card-text\">Refeni : {{ livre.refEni }}</p>
                        <p class=\"card-text\">ISBN : {{ livre.isbn }}</p>
                        <p class=\"card-footer\">
                            <small class=\"text-muted\">Filiere : {{ livre.filiere|json_encode }}</small>
                        </p>
                    </div>
                    <div class=\"inline text-center\">
                        <a id=\"editPr\" class=\"updateLink\"
                           href=\"{{ path('app_admin_dashboard_livre_edit',  {'titre_livre': livre.titreLivre}) }}\"><i
                                    class=\"far fa-edit\"></i></a>
                        <a id=\"editPr\" class=\"updateLink\"
                           href=\"{{ path('app_admin_livre_delete_confirm', {'id': livre.id}) }}\"><i
                                    class=\"fas fa-user-times\"></i></a>
                    </div>


                </div>
            {% endfor %}
        </div>

    </div>
{% endblock %}", "admin/allLivre.html.twig", "C:\\wamp64\\www\\bookcatalogue\\templates\\admin\\allLivre.html.twig");
    }
}
