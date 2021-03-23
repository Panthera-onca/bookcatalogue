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

/* search/resultat.html.twig */
class __TwigTemplate_af8435f19a2aff4f651103da79d6b56ba88c0604cebe1e580f0d17207a7e5e03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/resultat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/resultat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/resultat.html.twig", 1);
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

        echo "Resultat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"card-deck\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 6
            echo "            ";
            if (twig_test_empty($context["livre"])) {
                // line 7
                echo "                <div class=\"card\">
                    <p class=\"card-title\">Il n'ya pas des livres !</p>
                </div>
            ";
            } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source,             // line 10
$context["livre"], "id", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "livre", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)))) {
                // line 11
                echo "                ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "livre", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)))) {
                    // line 12
                    echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">titre_livre : ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre_livre", [], "any", false, false, false, 14), "html", null, true);
                    echo "</h5>
                            <p class=\"card-text\">auteur : ";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "auteur", [], "any", false, false, false, 15), "html", null, true);
                    echo "</p>
                            <p class=\"card-text\">filiere : ";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "filiere", [], "any", false, false, false, 16), "html", null, true);
                    echo "</p>
                            <p class=\"card-text\">categorie :";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "categorie", [], "any", false, false, false, 17), "html", null, true);
                    echo "</p>
                            <p class=\"card-footer\">
                                <small class=\"text-muted\">Livres ajoutees</small>
                            </p>
                        </div>
                    </div>
                ";
                }
                // line 24
                echo "
            ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
    <div class=\"card-deck\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 30
            echo "            ";
            if (twig_test_empty($context["stock"])) {
                // line 31
                echo "                <div class=\"card\">
                    <p class=\"card-title\">Il n'ya pas des livres en stock !</p>
                </div>
            ";
            } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source,             // line 34
$context["stock"], "id", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "stock", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)))) {
                // line 35
                echo "                ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "stock", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)))) {
                    // line 36
                    echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">quantite_stock : ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "quantite_stock", [], "any", false, false, false, 38), "html", null, true);
                    echo "</h5>
                            <p class=\"card-text\">date_modification : ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "date_modification", [], "any", false, false, false, 39), "html", null, true);
                    echo "</p>
                            <p class=\"card-text\">site : ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "site", [], "any", false, false, false, 40), "html", null, true);
                    echo "</p>
                            <p class=\"card-text\">livre :";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "livre", [], "any", false, false, false, 41), "html", null, true);
                    echo "</p>
                            <p class=\"card-footer\">
                                <small class=\"text-muted\">Livres en stock</small>
                            </p>
                        </div>
                    </div>
                ";
                }
                // line 48
                echo "
            ";
            }
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
    <div class=\"text-center\">
        <a class=\"btn btn-lg btn-dark\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_searchLivre");
        echo "\">Retour</a>
    </div>
    <div class=\"text-center\">
        <a class=\"btn btn-lg btn-dark\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche");
        echo "\">Stock</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 56,  205 => 53,  201 => 51,  195 => 50,  191 => 48,  181 => 41,  177 => 40,  173 => 39,  169 => 38,  165 => 36,  162 => 35,  160 => 34,  155 => 31,  152 => 30,  148 => 29,  144 => 27,  138 => 26,  134 => 24,  124 => 17,  120 => 16,  116 => 15,  112 => 14,  108 => 12,  105 => 11,  103 => 10,  98 => 7,  95 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Resultat{% endblock %}
{% block body %}
    <div class=\"card-deck\">
        {% for livre in livres %}
            {% if livre is empty %}
                <div class=\"card\">
                    <p class=\"card-title\">Il n'ya pas des livres !</p>
                </div>
            {% elseif livre.id != app.livre.id %}
                {% if livre.id != app.livre.id %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">titre_livre : {{ livre.titre_livre }}</h5>
                            <p class=\"card-text\">auteur : {{ livre.auteur }}</p>
                            <p class=\"card-text\">filiere : {{ livre.filiere }}</p>
                            <p class=\"card-text\">categorie :{{ livre.categorie }}</p>
                            <p class=\"card-footer\">
                                <small class=\"text-muted\">Livres ajoutees</small>
                            </p>
                        </div>
                    </div>
                {% endif %}

            {% endif %}
        {% endfor %}
    </div>
    <div class=\"card-deck\">
        {% for stock in stocks %}
            {% if stock is empty %}
                <div class=\"card\">
                    <p class=\"card-title\">Il n'ya pas des livres en stock !</p>
                </div>
            {% elseif stock.id != app.stock.id %}
                {% if stock.id != app.stock.id %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">quantite_stock : {{ stock.quantite_stock }}</h5>
                            <p class=\"card-text\">date_modification : {{ stock.date_modification }}</p>
                            <p class=\"card-text\">site : {{ stock.site }}</p>
                            <p class=\"card-text\">livre :{{ stock.livre }}</p>
                            <p class=\"card-footer\">
                                <small class=\"text-muted\">Livres en stock</small>
                            </p>
                        </div>
                    </div>
                {% endif %}

            {% endif %}
        {% endfor %}
    </div>
    <div class=\"text-center\">
        <a class=\"btn btn-lg btn-dark\" href=\"{{ path('app_searchLivre') }}\">Retour</a>
    </div>
    <div class=\"text-center\">
        <a class=\"btn btn-lg btn-dark\" href=\"{{ path('app_recherche') }}\">Stock</a>
    </div>
{% endblock %}", "search/resultat.html.twig", "C:\\wamp64\\www\\bookcatalogue\\templates\\search\\resultat.html.twig");
    }
}
