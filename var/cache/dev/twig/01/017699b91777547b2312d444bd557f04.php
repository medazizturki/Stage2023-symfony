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

/* coachregistration/register.html.twig */
class __TwigTemplate_9a5df2ba6566ac66ae01d5faba57f721 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachregistration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coachregistration/register.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 1, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
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
        height: 85%;
        max-width: 400px;
        padding: 30px;
        border: 10px solid #ccc;
        border-radius: 50px;
        background-color: #f9f9f9;
        position: relative; /* Set the container as a reference for positioning */
    }

    /* Add background image */
    .centered-form {
        background-image: url(\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/img/bg.png"), "html", null, true);
        echo "\");
        background-size: cover;
        background-repeat: no-repeat;
    }

     /* Custom styles for text fields */
    .form-floating input[type=\"text\"],
    .form-floating input[type=\"email\"],
    .form-floating input[type=\"password\"] {
        /* Customize the border color */
        border-color: #5a5a5a;
        /* Optional: Change the font-size and color of the text */
        font-size: 16px;
        color: #333;
    }

    /* Customize the placeholder color */
    .form-floating input::placeholder {
        color: #888;
    }

    /* Optional: Adjust the focus and active states */
    .form-floating input[type=\"text\"]:focus,
    .form-floating input[type=\"text\"]:active,
    .form-floating input[type=\"email\"]:focus,
    .form-floating input[type=\"email\"]:active,
    .form-floating input[type=\"password\"]:focus,
    .form-floating input[type=\"password\"]:active {
        border-color: #4285f4;
        box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
    }

    /* Optional: Customize the button style */
    .btn-primary {
        background-color: #4285f4;
        border-color: #4285f4;
    }

    .form-floating input {
    width: 100%;
    border: 2px solid #999999;
    border-radius: 8px;

}

/* Custom styles for the link */
    .back-link {
        color: red; /* Change the color to red */
        text-decoration: none; /* Remove underline from the link */
    }

    /* Custom styles for the icon */
    .back-icon {
        font-weight: bold; /* Adjust font weight if needed */
        vertical-align: middle; /* Align the icon vertically */
    }


ul {
    list-style-type: none;
    padding: 0;
    display: flex;
  }

  li {
    margin: 0 10px; /* Add margin to separate list items */
  }

  li a {
    display: block;
    color: white; /* Change the color to red */
    text-align: center;
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    font-size: 18px;
  }

  li a:hover:not(.active) {
    background-color: transparent;
  }

  .active {
    background-color: red; /* Change the background color to red */
  }
</style>



<div class=\"centered-form\">
    <div class=\"form-frame\">
    
    <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"back-link\">
        <span class=\"back-icon\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M11.354 3.354a.5.5 0 0 0-.708-.708L4.293 8l6.353 6.354a.5.5 0 0 0 .708-.708L5.207 8l6.147-6.146a.5.5 0 0 0 0-.708z\"/>
        </svg>
    </span>
</a>
<center>
<ul>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li><a class=\"active\" href=\"/register\">User</a></li>
  <li><a class=\"active\" href=\"/coach/\">coach</a></li>
</ul>

</center>
        <h3 class=\"text-center mb-4\">Sign Up</h3>


        ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 142, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-floating mb-3\">
            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 144, $this->source); })()), "nom", [], "any", false, false, false, 144), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 147, $this->source); })()), "prenom", [], "any", false, false, false, 147), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 150, $this->source); })()), "sexe", [], "any", false, false, false, 150), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 153, $this->source); })()), "age", [], "any", false, false, false, 153), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 156, $this->source); })()), "contrat", [], "any", false, false, false, 156), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 159, $this->source); })()), "datedebut", [], "any", false, false, false, 159), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 162, $this->source); })()), "email", [], "any", false, false, false, 162), 'row');
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 165, $this->source); })()), "plainPassword", [], "any", false, false, false, 165), 'row', ["label" => "Password"]);
        // line 167
        echo "
        </div>
        <div class=\"form-floating mb-3\">
            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 170, $this->source); })()), "roles", [], "any", false, false, false, 170), 'row');
        echo "
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        <p class=\"text-center mb-0\">Already have an Account? <a href=\"login\">Sign In</a></p>
        ";
        // line 174
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["coachRegistrationForm"]) || array_key_exists("coachRegistrationForm", $context) ? $context["coachRegistrationForm"] : (function () { throw new RuntimeError('Variable "coachRegistrationForm" does not exist.', 174, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "coachregistration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 174,  247 => 170,  242 => 167,  240 => 165,  234 => 162,  228 => 159,  222 => 156,  216 => 153,  210 => 150,  204 => 147,  198 => 144,  193 => 142,  168 => 120,  74 => 29,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme coachRegistrationForm 'bootstrap_5_layout.html.twig' %}



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
        height: 85%;
        max-width: 400px;
        padding: 30px;
        border: 10px solid #ccc;
        border-radius: 50px;
        background-color: #f9f9f9;
        position: relative; /* Set the container as a reference for positioning */
    }

    /* Add background image */
    .centered-form {
        background-image: url(\"{{asset('assettF/img/bg.png')}}\");
        background-size: cover;
        background-repeat: no-repeat;
    }

     /* Custom styles for text fields */
    .form-floating input[type=\"text\"],
    .form-floating input[type=\"email\"],
    .form-floating input[type=\"password\"] {
        /* Customize the border color */
        border-color: #5a5a5a;
        /* Optional: Change the font-size and color of the text */
        font-size: 16px;
        color: #333;
    }

    /* Customize the placeholder color */
    .form-floating input::placeholder {
        color: #888;
    }

    /* Optional: Adjust the focus and active states */
    .form-floating input[type=\"text\"]:focus,
    .form-floating input[type=\"text\"]:active,
    .form-floating input[type=\"email\"]:focus,
    .form-floating input[type=\"email\"]:active,
    .form-floating input[type=\"password\"]:focus,
    .form-floating input[type=\"password\"]:active {
        border-color: #4285f4;
        box-shadow: 0 0 0 0.2rem rgba(66, 133, 244, 0.25);
    }

    /* Optional: Customize the button style */
    .btn-primary {
        background-color: #4285f4;
        border-color: #4285f4;
    }

    .form-floating input {
    width: 100%;
    border: 2px solid #999999;
    border-radius: 8px;

}

/* Custom styles for the link */
    .back-link {
        color: red; /* Change the color to red */
        text-decoration: none; /* Remove underline from the link */
    }

    /* Custom styles for the icon */
    .back-icon {
        font-weight: bold; /* Adjust font weight if needed */
        vertical-align: middle; /* Align the icon vertically */
    }


ul {
    list-style-type: none;
    padding: 0;
    display: flex;
  }

  li {
    margin: 0 10px; /* Add margin to separate list items */
  }

  li a {
    display: block;
    color: white; /* Change the color to red */
    text-align: center;
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    font-size: 18px;
  }

  li a:hover:not(.active) {
    background-color: transparent;
  }

  .active {
    background-color: red; /* Change the background color to red */
  }
</style>



<div class=\"centered-form\">
    <div class=\"form-frame\">
    
    <a href=\"{{ path('app_home') }}\" class=\"back-link\">
        <span class=\"back-icon\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-left\" viewBox=\"0 0 16 16\">
            <path fill-rule=\"evenodd\" d=\"M11.354 3.354a.5.5 0 0 0-.708-.708L4.293 8l6.353 6.354a.5.5 0 0 0 .708-.708L5.207 8l6.147-6.146a.5.5 0 0 0 0-.708z\"/>
        </svg>
    </span>
</a>
<center>
<ul>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li><a class=\"active\" href=\"/register\">User</a></li>
  <li><a class=\"active\" href=\"/coach/\">coach</a></li>
</ul>

</center>
        <h3 class=\"text-center mb-4\">Sign Up</h3>


        {{ form_start(coachRegistrationForm) }}
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.nom) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.prenom) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.sexe) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.age) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.contrat) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.datedebut) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.email) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.plainPassword, {
                label: 'Password'
            }) }}
        </div>
        <div class=\"form-floating mb-3\">
            {{ form_row(coachRegistrationForm.roles) }}
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        <p class=\"text-center mb-0\">Already have an Account? <a href=\"login\">Sign In</a></p>
        {{ form_end(coachRegistrationForm) }}
    </div>
</div>
", "coachregistration/register.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\coachregistration\\register.html.twig");
    }
}
