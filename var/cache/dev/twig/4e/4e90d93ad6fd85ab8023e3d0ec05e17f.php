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

/* user/_form.html.twig */
class __TwigTemplate_2732a4d18f833da30fc99011cf8896e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 2
        echo "
<style>
    .custom-label {
        position: relative;
    }

    .custom-label-left {
        left: -200px;
    }

    .custom-label-left2 {
        left: -190px;
    }

    .custom-label-left3 {
        left: -150px;
    }

    .custom-label-left4 {
        left: -165px;
    }

    .custom-label-left5 {
        left: -180px;
    }
    
</style>





";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <label for=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Nom</label>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "\" class=\"custom-label custom-label-left2\">Prénom</label>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "sexe", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"custom-label custom-label-left3\">Sexe</label>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "sexe", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "age", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Âge</label>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "age", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "abonnement", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "\" class=\"custom-label custom-label-left4\">Abonnement</label>
        <div class=\"custom-inline-checkbox\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "abonnement", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 55
            echo "                <div class=\"form-check form-check-inline\">
                    ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "datedebut", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "\" class=\"custom-label custom-label-left5\">datedebut</label>
        <div class=\"custom-inline-checkbox\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "datedebut", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 65
            echo "                <div class=\"form-check form-check-inline\">
                    ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input5"]]);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Email</label>
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "roles", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Rôles</label>
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "roles", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    
    <button type=\"submit\" id=\"saveButton\" class=\"custom-button\">Enregistrer</button>
";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 81,  190 => 77,  186 => 76,  180 => 73,  176 => 72,  171 => 69,  162 => 66,  159 => 65,  155 => 64,  150 => 62,  145 => 59,  136 => 56,  133 => 55,  129 => 54,  124 => 52,  118 => 49,  114 => 48,  108 => 45,  104 => 44,  98 => 41,  94 => 40,  88 => 37,  84 => 36,  79 => 34,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_5_layout.html.twig' %}

<style>
    .custom-label {
        position: relative;
    }

    .custom-label-left {
        left: -200px;
    }

    .custom-label-left2 {
        left: -190px;
    }

    .custom-label-left3 {
        left: -150px;
    }

    .custom-label-left4 {
        left: -165px;
    }

    .custom-label-left5 {
        left: -180px;
    }
    
</style>





{{ form_start(form) }}
    <div class=\"form-group\">
        <label for=\"{{ form.nom.vars.id }}\" class=\"custom-label custom-label-left\">Nom</label>
        {{ form_widget(form.nom, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.prenom.vars.id }}\" class=\"custom-label custom-label-left2\">Prénom</label>
        {{ form_widget(form.prenom, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.sexe.vars.id }}\" class=\"custom-label custom-label-left3\">Sexe</label>
        {{ form_widget(form.sexe, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.age.vars.id }}\" class=\"custom-label custom-label-left\">Âge</label>
        {{ form_widget(form.age, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.abonnement.vars.id }}\" class=\"custom-label custom-label-left4\">Abonnement</label>
        <div class=\"custom-inline-checkbox\">
            {% for choice in form.abonnement %}
                <div class=\"form-check form-check-inline\">
                    {{ form_widget(choice, {'attr': {'class': 'form-check-input'}}) }}
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.datedebut.vars.id }}\" class=\"custom-label custom-label-left5\">datedebut</label>
        <div class=\"custom-inline-checkbox\">
            {% for choice in form.datedebut %}
                <div class=\"form-check form-check-inline\">
                    {{ form_widget(choice, {'attr': {'class': 'form-check-input5'}}) }}
                </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.email.vars.id }}\" class=\"custom-label custom-label-left\">Email</label>
        {{ form_widget(form.email, {'attr': {'class': 'custom-input'}}) }}
    </div>
    <div class=\"form-group\">
        <label for=\"{{ form.roles.vars.id }}\" class=\"custom-label custom-label-left\">Rôles</label>
        {{ form_widget(form.roles, {'attr': {'class': 'custom-input'}}) }}
    </div>
    
    <button type=\"submit\" id=\"saveButton\" class=\"custom-button\">Enregistrer</button>
{{ form_end(form) }}

", "user/_form.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\user\\_form.html.twig");
    }
}
