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

/* coach/show.html.twig */
class __TwigTemplate_4f8504da990e2dcad4e20c19ea7963d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coach/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coach";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Coach</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 24, $this->source); })()), "sexe", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 28, $this->source); })()), "age", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contrat</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 32, $this->source); })()), "contrat", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 36, $this->source); })()), "datedebut", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 36, $this->source); })()), "datedebut", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 40, $this->source); })()), "datefin", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 40, $this->source); })()), "datefin", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 48, $this->source); })()), "roles", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 48, $this->source); })()), "roles", [], "any", false, false, false, 48)), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 61
        echo twig_include($this->env, $context, "coach/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coach/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 61,  179 => 59,  174 => 57,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Coach{% endblock %}

{% block body %}
    <h1>Coach</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ coach.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ coach.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ coach.prenom }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ coach.sexe }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ coach.age }}</td>
            </tr>
            <tr>
                <th>Contrat</th>
                <td>{{ coach.contrat }}</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>{{ coach.datedebut ? coach.datedebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>{{ coach.datefin ? coach.datefin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ coach.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ coach.roles ? coach.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ coach.password }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_coach_index') }}\">back to list</a>

    <a href=\"{{ path('app_coach_edit', {'id': coach.id}) }}\">edit</a>

    {{ include('coach/_delete_form.html.twig') }}
{% endblock %}
", "coach/show.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\coach\\show.html.twig");
    }
}
