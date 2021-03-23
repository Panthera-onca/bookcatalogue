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

/* admin/AddLivre.html.twig */
class __TwigTemplate_a86d1576d876ad54c308f7c5c48d70cecfbecf47c770a8e29befe41446386ff8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'dashboard' => [$this, 'block_dashboard'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/AddLivre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/AddLivre.html.twig"));

        // line 1
        echo "% extends 'admin/dashboard.html.twig' %}
";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        $this->displayBlock('dashboard', $context, $blocks);
        
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

        echo "DashBoard - Instruments";
        
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
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 18
            echo "                <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $context["livre"], "html", null, true);
            echo " <a id=\"editPri\" class=\"updateLink\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_livre_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" ><i class=\"fas fa-trash-alt\"></i></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>

        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["LivreType"]) || array_key_exists("LivreType", $context) ? $context["LivreType"] : (function () { throw new RuntimeError('Variable "LivreType" does not exist.', 23, $this->source); })()), 'form_start', ["method" => "POST", "attr" => ["class" => "formSignIn"]]);
        echo "
        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["LivreType"]) || array_key_exists("LivreType", $context) ? $context["LivreType"] : (function () { throw new RuntimeError('Variable "LivreType" does not exist.', 25, $this->source); })()), "titre_livre", [], "any", false, false, false, 25), 'row');
        echo "
        </div>
        ";
        // line 28
        echo "        <button type=\"submit\" class=\"btnBlock btn-lg btn-success\" value=\"Edit\">Ajouter</button>
        ";
        // line 30
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["LivreType"]) || array_key_exists("LivreType", $context) ? $context["LivreType"] : (function () { throw new RuntimeError('Variable "LivreType" does not exist.', 30, $this->source); })()), 'form_end');
        echo "



    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/AddLivre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 30,  147 => 28,  142 => 25,  137 => 23,  133 => 21,  121 => 18,  117 => 17,  114 => 16,  100 => 8,  96 => 6,  92 => 5,  89 => 4,  79 => 3,  60 => 2,  50 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("% extends 'admin/dashboard.html.twig' %}
{% block title %}DashBoard - Instruments{% endblock %}
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
            {% for livre in livres %}
                <li class=\"list-group-item\">{{ livre }} <a id=\"editPri\" class=\"updateLink\" href=\"{{ path('app_admin_livre_delete', {'id': livre.id}) }}\" ><i class=\"fas fa-trash-alt\"></i></a>
                </li>
            {% endfor %}
        </ul>

        {{ form_start(LivreType, {'method': 'POST', 'attr': {'class': 'formSignIn'} }) }}
        <div class=\"form-group\">
            {{ form_row(LivreType.titre_livre) }}
        </div>
        {#<div class=\"text-center\">#}
        <button type=\"submit\" class=\"btnBlock btn-lg btn-success\" value=\"Edit\">Ajouter</button>
        {#</div>#}
        {{ form_end(LivreType) }}



    </div>
{% endblock %}", "admin/AddLivre.html.twig", "C:\\wamp64\\www\\bookcatalogue\\templates\\admin\\AddLivre.html.twig");
    }
}
