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

/* coach/_form.html.twig */
class __TwigTemplate_90260e58e1f0b2bb7af6d18cff2c5987 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 2
        echo "
<style>

    
</style>





";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        <label for=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Nom</label>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\" class=\"custom-label custom-label-left2\">Prénom</label>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "sexe", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\" class=\"custom-label custom-label-left3\">Sexe</label>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "sexe", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "age", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Âge</label>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "age", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "contrat", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "\" class=\"custom-label custom-label-left4\">contrat</label>
        <div class=\"custom-inline-checkbox\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "contrat", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 33
            echo "                <div class=\"form-check form-check-inline\">
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "datedebut", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "\" class=\"custom-label custom-label-left5\">datedebut</label>
        <div class=\"custom-inline-checkbox\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "datedebut", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            echo "                <div class=\"form-check form-check-inline\">
                    ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choice"], 'widget', ["attr" => ["class" => "form-check-input5"]]);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Email</label>
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    <div class=\"form-group\">
        <label for=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "roles", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\" class=\"custom-label custom-label-left\">Rôles</label>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "custom-input"]]);
        echo "
    </div>
    
    <button type=\"submit\" id=\"saveButton\" class=\"custom-button\">Enregistrer</button>
";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "coach/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 59,  168 => 55,  164 => 54,  158 => 51,  154 => 50,  149 => 47,  140 => 44,  137 => 43,  133 => 42,  128 => 40,  123 => 37,  114 => 34,  111 => 33,  107 => 32,  102 => 30,  96 => 27,  92 => 26,  86 => 23,  82 => 22,  76 => 19,  72 => 18,  66 => 15,  62 => 14,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_5_layout.html.twig' %}

<style>

    
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
        <label for=\"{{ form.contrat.vars.id }}\" class=\"custom-label custom-label-left4\">contrat</label>
        <div class=\"custom-inline-checkbox\">
            {% for choice in form.contrat %}
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
", "coach/_form.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\coach\\_form.html.twig");
    }
}
