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

/* admin/AddStock.html.twig */
class __TwigTemplate_1ce784101a78c751e438c1c4de36649d56d28f60f74ebbf81ad2db24ae768cdf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/AddStock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/AddStock.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard.html.twig", "admin/AddStock.html.twig", 1);
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

        echo "DashBoard - Stocks";
        
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
                    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        <ul class=\"list-group\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 18
            echo "                <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $context["stock"], "html", null, true);
            echo " <a id=\"editPrs\" class=\"updateLink\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_livre_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["stock"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" ><i class=\"fas fa-trash-alt\"></i></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>

        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["StockType"]) || array_key_exists("StockType", $context) ? $context["StockType"] : (function () { throw new RuntimeError('Variable "StockType" does not exist.', 23, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["class" => "formSignIn"]]);
        echo "
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["StockType"]) || array_key_exists("StockType", $context) ? $context["StockType"] : (function () { throw new RuntimeError('Variable "StockType" does not exist.', 25, $this->source); })()), "quantite_stock", [], "any", false, false, false, 25), 'row');
        echo "
        </div>
        ";
        // line 28
        echo "        <button type=\"submit\" class=\"btnBlock btn-lg btn-success\" value=\"Edit\">Ajouter</button>
        ";
        // line 30
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["StockType"]) || array_key_exists("StockType", $context) ? $context["StockType"] : (function () { throw new RuntimeError('Variable "StockType" does not exist.', 30, $this->source); })()), 'form_end');
        echo "



    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/AddStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 30,  146 => 28,  141 => 25,  136 => 23,  132 => 21,  120 => 18,  116 => 17,  113 => 16,  99 => 8,  95 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard.html.twig' %}
{% block title %}DashBoard - Stocks{% endblock %}
{% block dashboard %}
    <div class=\"insideDash\">
        {% for message in app.flashes('success') %}
            <div class=\"text-center\" style=\"margin-top: 1%\">
                <div class=\"alert alert-success\" role=\"alert\" style=\"width: 35% ;margin: auto;\">
                    {{ message }}
                    <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

            </div>
        {% endfor %}
        <ul class=\"list-group\">
            {% for stock in stocks %}
                <li class=\"list-group-item\">{{ stock }} <a id=\"editPrs\" class=\"updateLink\" href=\"{{ path('app_admin_livre_delete', {'id': stock.id}) }}\" ><i class=\"fas fa-trash-alt\"></i></a>
                </li>
            {% endfor %}
        </ul>

        {{ form_start(StockType, {'method': 'POST', 'attr': {'class': 'formSignIn'} }) }}
        <div class=\"form-group\">
            {{ form_row(StockType.quantite_stock) }}
        </div>
        {#<div class=\"text-center\">#}
        <button type=\"submit\" class=\"btnBlock btn-lg btn-success\" value=\"Edit\">Ajouter</button>
        {#</div>#}
        {{ form_end(StockType) }}



    </div>
{% endblock %}", "admin/AddStock.html.twig", "C:\\wamp64\\www\\bookcatalogue\\templates\\admin\\AddStock.html.twig");
    }
}
