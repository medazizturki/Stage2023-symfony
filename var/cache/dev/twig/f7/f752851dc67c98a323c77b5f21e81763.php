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

/* security/login.html.twig */
class __TwigTemplate_b73e0970bec6defeecc1ee8c0a0f42de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<style>

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

    /* Add background image */
    .centered-form {
        background-image: url(\"";
        // line 25
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
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
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
  <li><a class=\"active\" href=\"/login\">Client</a></li>
  <li><a class=\"active\" href=\"/registerr\">Coach</a></li>
</ul>

        <h2 class=\"text-center mb-4\">Sign In</h2>
</center>
";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 138
        echo "<form method=\"post\">
    ";
        // line 139
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 139, $this->source); })())) {
            // line 140
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 140, $this->source); })()), "messageKey", [], "any", false, false, false, 140), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 140, $this->source); })()), "messageData", [], "any", false, false, false, 140), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143)) {
            // line 144
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "userIdentifier", [], "any", false, false, false, 145), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 148
        echo "
    <h1 class=\"h3 mb-3 font-weight-normal\"></h1>
    <div class=\"form-floating mb-3\">
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 152, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    </div>
    <div class=\"form-floating mb-3\">
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    ";
        // line 172
        echo " <a href=\"reset-password\">Forgot Password</a>
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>

<br>
<a>You don't have an Account?</a>
    <a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Sign up</a>
</form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 179,  256 => 172,  250 => 159,  240 => 152,  234 => 148,  226 => 145,  223 => 144,  221 => 143,  218 => 142,  212 => 140,  210 => 139,  207 => 138,  188 => 137,  164 => 116,  70 => 25,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

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
    
    <a href=\"{{ path('app_acceuil') }}\" class=\"back-link\">
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
  <li><a class=\"active\" href=\"/login\">Client</a></li>
  <li><a class=\"active\" href=\"/registerr\">Coach</a></li>
</ul>

        <h2 class=\"text-center mb-4\">Sign In</h2>
</center>
{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\"></h1>
    <div class=\"form-floating mb-3\">
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    </div>
    <div class=\"form-floating mb-3\">
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}
 <a href=\"reset-password\">Forgot Password</a>
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>

<br>
<a>You don't have an Account?</a>
    <a href=\"{{ path('app_register') }}\">Sign up</a>
</form>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\security\\login.html.twig");
    }
}
