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

/* registration/_form.html.twig */
class __TwigTemplate_1c7fb0c76a458cd186067d4354be354e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 1, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 2
        echo "
<style>
    /* Custom CSS for centering the form and adding a frame */
    .centered-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-frame {
        
        position: center;
        width: 50%;
        height: 50%;
        max-width: 400px;
        padding: 30px;
        border: 10px solid #ccc;
        border-radius: 50px;
        background-color: #f9f9f9;
        position: relative; /* Set the container as a reference for positioning */
    }

    /* Container for the background image */
    .background-image-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; /* Place it behind the form content */
    }

    /* Add the background image URL */
    .background-image {
        width: 100%;
        height: 100%;
        background-image: url(\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/img/bg.png"), "html", null, true);
        echo "\");
        /* Adjust background positioning and sizing as needed */
        background-size: cover;
        background-position: center;
        opacity: 0.6; /* Adjust the opacity of the background image as per your preference */
    }


</style>

<div class=\"centered-form\">
    <div class=\"form-frame\">
        <h3 class=\"text-center mb-4\">Sign Up</h3>
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-floating mb-3\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "sexe", [], "any", false, false, false, 60), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "age", [], "any", false, false, false, 63), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "abonnement", [], "any", false, false, false, 66), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), 'row', ["label" => "Password"]);
        // line 74
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "roles", [], "any", false, false, false, 77), 'row');
        echo "
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        <p class=\"text-center mb-0\">Already have an Account? <a href=\"login\">Sign In</a></p>
        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 81,  148 => 77,  143 => 74,  141 => 72,  135 => 69,  129 => 66,  123 => 63,  117 => 60,  111 => 57,  105 => 54,  100 => 52,  84 => 39,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme registrationForm 'bootstrap_5_layout.html.twig' %}

<style>
    /* Custom CSS for centering the form and adding a frame */
    .centered-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-frame {
        
        position: center;
        width: 50%;
        height: 50%;
        max-width: 400px;
        padding: 30px;
        border: 10px solid #ccc;
        border-radius: 50px;
        background-color: #f9f9f9;
        position: relative; /* Set the container as a reference for positioning */
    }

    /* Container for the background image */
    .background-image-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; /* Place it behind the form content */
    }

    /* Add the background image URL */
    .background-image {
        width: 100%;
        height: 100%;
        background-image: url(\"{{asset('assettF/img/bg.png')}}\");
        /* Adjust background positioning and sizing as needed */
        background-size: cover;
        background-position: center;
        opacity: 0.6; /* Adjust the opacity of the background image as per your preference */
    }


</style>

<div class=\"centered-form\">
    <div class=\"form-frame\">
        <h3 class=\"text-center mb-4\">Sign Up</h3>
        {{ form_start(registrationForm) }}
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.nom) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.prenom) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.sexe) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.age) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.abonnement) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.email) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.plainPassword, {
                label: 'Password'
            }) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(registrationForm.roles) }}
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        <p class=\"text-center mb-0\">Already have an Account? <a href=\"login\">Sign In</a></p>
        {{ form_end(registrationForm) }}
    </div>
</div>
", "registration/_form.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\registration\\_form.html.twig");
    }
}
