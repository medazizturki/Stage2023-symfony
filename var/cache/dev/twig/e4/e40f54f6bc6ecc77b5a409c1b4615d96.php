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

/* coach/index.html.twig */
class __TwigTemplate_ce409a064bb86f804f0e5c394e9779aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coach/index.html.twig", 1);
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

        echo "Liste des Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<style>
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.pagination a {
  display: inline-block;
  padding: 5px 10px;
  margin: 0 5px;
  background-color: #e9e9e9;
  color: #333;
  text-decoration: none;
  border-radius: 4px;
}

.pagination a.active {
  background-color: #333;
  color: #fff;
}

.inline-field {
    display: inline-block;
    margin-right: 10px;
}

.custom-button {  
  background-color: green;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
}

.custom-label {
  margin-left: -10px;
}



ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 100px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 80
        echo "<html lang=\"en\">
<head>
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css\" integrity=\"sha512-XXXXX\" crossorigin=\"anonymous\" />
  <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettB/css/style.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css\">
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js\"></script>


</head>
<body>
<center>
  <h2>Liste des Coach</h2>
</center>


<ul>
  <li><a class=\"active\" href=\"/coach/\">coach</a></li>
  <li><a href=\"/user/\">User</a></li>
  <li><a href=\"/produit/\">Produit</a></li>
</ul>

 

  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <br>
  <button class=\"bouton-vert custom-button\" id=\"addcoach\">AJOUTER</button>
  <br>
  <br>


<script>
  \$(document).ready(function() {
    \$('#addcoach').click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the button

      \$.ajax({
        url: '";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_new");
        echo "', // URL of your Symfony action to display the add form
        type: 'GET',
        success: function(response) {
          Swal.fire({
            title: 'Ajouter un Coach',
            html: response, // HTML content of the form
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            onOpen: () => {
              // Ajouter un gestionnaire d'événements pour la soumission du formulaire
              \$('#coachForm').submit(function(e) {
                e.preventDefault(); // Empêcher le comportement de soumission par défaut

                // Récupérer les données du formulaire
                var formData = \$(this).serialize();

                // Envoyer les données au serveur pour enregistrement
                \$.ajax({
                  url: '";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', coachId),
                  type: 'POST',
                  data: formData,
                  success: function() {
                    Swal.fire('Success', 'coach details updated!', 'success');
                    location.reload(); // Recharger la page pour afficher les mises à jour
                  },
                  error: function() {
                    Swal.fire('Error', 'An error occurred while updating coach details.', 'error');
                  }
                });
              });
            }
          });
        },
        error: function() {
          Swal.fire('Error', 'An error occurred while loading the form.', 'error');
        }
      });
    });

    \$('.edit-button').click(function() {
      var coachId = \$(this).data('coach-id');
      var url = '";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', coachId);
      openPopup(url);
    });
  });

  function openPopup(url) {
  \$.ajax({
    url: url,
    success: function(response) {
      Swal.fire({
        title: 'Modifier un Coach',
        html: response, // HTML content of the form
        showCloseButton: true,
        showCancelButton: false, // Remove the Cancel button
        showConfirmButton: false, // Remove the Save button
        onOpen: () => {
          // Ajouter un gestionnaire d'événements pour la soumission du formulaire
          \$('#coachForm').submit(function(e) {
            e.preventDefault(); // Empêcher le comportement de soumission par défaut

            // Récupérer les données du formulaire
            var formData = \$(this).serialize();

            // Envoyer les données au serveur pour enregistrement
            \$.ajax({
              url: '";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => "ID_PLACEHOLDER"]);
        echo "'.replace('ID_PLACEHOLDER', coachId),
              type: 'POST',
              data: formData,
              success: function() {
                Swal.fire('Success', 'coach details updated!', 'success');
                location.reload(); // Recharger la page pour afficher les mises à jour
              },
              error: function() {
                Swal.fire('Error', 'An error occurred while updating coach details.', 'error');
              }
            });
          });
        }
      });
    },
    error: function() {
      Swal.fire('Error', 'An error occurred while loading the form.', 'error');
    }
  });
}

</script>


<table class=\"table\">
  <thead>
    <tr>
      <th>Id</th>
      <th><a href=\"";
        // line 215
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_index", ["sort" => "nom"]);
        echo "\">Nom</a></th>
      <th>Prenom</th>
      <th>Sexe</th>
      <th>Age</th>
      <th>Contrat (Months)</th>
      <th>date debut</th>
      <th>date fin</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 228, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 229
            echo "    <tr>
      <td>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 230), "html", null, true);
            echo "</td>
      <td>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 231), "html", null, true);
            echo "</td>
      <td>";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 232), "html", null, true);
            echo "</td>
      <td>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "sexe", [], "any", false, false, false, 233), "html", null, true);
            echo "</td>
      <td>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "age", [], "any", false, false, false, 234), "html", null, true);
            echo "</td>
      <td>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "contrat", [], "any", false, false, false, 235), "html", null, true);
            echo "</td>
      <td>";
            // line 236
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "datedebut", [], "any", false, false, false, 236)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "datedebut", [], "any", false, false, false, 236), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
      <td>";
            // line 237
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "datefin", [], "any", false, false, false, 237)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "datefin", [], "any", false, false, false, 237), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
      <td>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "email", [], "any", false, false, false, 238), "html", null, true);
            echo "</td>
        
        <td>
          <button style=\"background-color: #87CCEE; color: white; padding: 5px 10px; text-decoration: none;\" class=\"edit-button\" data-coach-id=\"";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 241), "html", null, true);
            echo "\">Modifier</button>
        </td>
        <td>
          ";
            // line 244
            echo twig_include($this->env, $context, "coach/_delete_form.html.twig");
            echo "
        </td>
      </tr>
      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 248
            echo "      <tr>
        <td colspan=\"5\">no records found</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "      </tbody>
</table>

<center>
  <div class=\"pagination\">
    ";
        // line 257
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 257, $this->source); })()));
        echo "
  </div>
</center>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coach/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 257,  440 => 252,  431 => 248,  414 => 244,  408 => 241,  402 => 238,  398 => 237,  394 => 236,  390 => 235,  386 => 234,  382 => 233,  378 => 232,  374 => 231,  370 => 230,  367 => 229,  349 => 228,  333 => 215,  302 => 187,  274 => 162,  248 => 139,  226 => 120,  188 => 85,  181 => 80,  171 => 79,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Utilisateurs{% endblock %}
{% block stylesheets %}
<style>
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.pagination a {
  display: inline-block;
  padding: 5px 10px;
  margin: 0 5px;
  background-color: #e9e9e9;
  color: #333;
  text-decoration: none;
  border-radius: 4px;
}

.pagination a.active {
  background-color: #333;
  color: #fff;
}

.inline-field {
    display: inline-block;
    margin-right: 10px;
}

.custom-button {  
  background-color: green;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  text-decoration: none;
}

.custom-label {
  margin-left: -10px;
}



ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 100px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>


{% endblock %}

{% block body %}
<html lang=\"en\">
<head>
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css\" integrity=\"sha512-XXXXX\" crossorigin=\"anonymous\" />
  <link rel=\"stylesheet\" href=\"{{ asset('assettB/css/style.css') }}\">

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css\">
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js\"></script>


</head>
<body>
<center>
  <h2>Liste des Coach</h2>
</center>


<ul>
  <li><a class=\"active\" href=\"/coach/\">coach</a></li>
  <li><a href=\"/user/\">User</a></li>
  <li><a href=\"/produit/\">Produit</a></li>
</ul>

 

  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

  <br>
  <button class=\"bouton-vert custom-button\" id=\"addcoach\">AJOUTER</button>
  <br>
  <br>


<script>
  \$(document).ready(function() {
    \$('#addcoach').click(function(e) {
      e.preventDefault(); // Prevent the default behavior of the button

      \$.ajax({
        url: '{{ path('app_coach_new') }}', // URL of your Symfony action to display the add form
        type: 'GET',
        success: function(response) {
          Swal.fire({
            title: 'Ajouter un Coach',
            html: response, // HTML content of the form
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            onOpen: () => {
              // Ajouter un gestionnaire d'événements pour la soumission du formulaire
              \$('#coachForm').submit(function(e) {
                e.preventDefault(); // Empêcher le comportement de soumission par défaut

                // Récupérer les données du formulaire
                var formData = \$(this).serialize();

                // Envoyer les données au serveur pour enregistrement
                \$.ajax({
                  url: '{{ path('app_coach_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', coachId),
                  type: 'POST',
                  data: formData,
                  success: function() {
                    Swal.fire('Success', 'coach details updated!', 'success');
                    location.reload(); // Recharger la page pour afficher les mises à jour
                  },
                  error: function() {
                    Swal.fire('Error', 'An error occurred while updating coach details.', 'error');
                  }
                });
              });
            }
          });
        },
        error: function() {
          Swal.fire('Error', 'An error occurred while loading the form.', 'error');
        }
      });
    });

    \$('.edit-button').click(function() {
      var coachId = \$(this).data('coach-id');
      var url = '{{ path('app_coach_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', coachId);
      openPopup(url);
    });
  });

  function openPopup(url) {
  \$.ajax({
    url: url,
    success: function(response) {
      Swal.fire({
        title: 'Modifier un Coach',
        html: response, // HTML content of the form
        showCloseButton: true,
        showCancelButton: false, // Remove the Cancel button
        showConfirmButton: false, // Remove the Save button
        onOpen: () => {
          // Ajouter un gestionnaire d'événements pour la soumission du formulaire
          \$('#coachForm').submit(function(e) {
            e.preventDefault(); // Empêcher le comportement de soumission par défaut

            // Récupérer les données du formulaire
            var formData = \$(this).serialize();

            // Envoyer les données au serveur pour enregistrement
            \$.ajax({
              url: '{{ path('app_coach_edit', {'id': 'ID_PLACEHOLDER'}) }}'.replace('ID_PLACEHOLDER', coachId),
              type: 'POST',
              data: formData,
              success: function() {
                Swal.fire('Success', 'coach details updated!', 'success');
                location.reload(); // Recharger la page pour afficher les mises à jour
              },
              error: function() {
                Swal.fire('Error', 'An error occurred while updating coach details.', 'error');
              }
            });
          });
        }
      });
    },
    error: function() {
      Swal.fire('Error', 'An error occurred while loading the form.', 'error');
    }
  });
}

</script>


<table class=\"table\">
  <thead>
    <tr>
      <th>Id</th>
      <th><a href=\"{{ path('app_coach_index', {'sort': 'nom'}) }}\">Nom</a></th>
      <th>Prenom</th>
      <th>Sexe</th>
      <th>Age</th>
      <th>Contrat (Months)</th>
      <th>date debut</th>
      <th>date fin</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    {% for coach in coaches %}
    <tr>
      <td>{{ coach.id }}</td>
      <td>{{ coach.nom }}</td>
      <td>{{ coach.prenom }}</td>
      <td>{{ coach.sexe }}</td>
      <td>{{ coach.age }}</td>
      <td>{{ coach.contrat }}</td>
      <td>{{ coach.datedebut ? coach.datedebut|date('d-m-Y') : '' }}</td>
      <td>{{ coach.datefin ? coach.datefin|date('d-m-Y') : '' }}</td>
      <td>{{ coach.email }}</td>
        
        <td>
          <button style=\"background-color: #87CCEE; color: white; padding: 5px 10px; text-decoration: none;\" class=\"edit-button\" data-coach-id=\"{{ coach.id }}\">Modifier</button>
        </td>
        <td>
          {{ include('coach/_delete_form.html.twig') }}
        </td>
      </tr>
      {% else %}
      <tr>
        <td colspan=\"5\">no records found</td>
      </tr>
      {% endfor %}
      </tbody>
</table>

<center>
  <div class=\"pagination\">
    {{ knp_pagination_render(coaches) }}
  </div>
</center>

</body>
</html>
{% endblock %}
", "coach/index.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\coach\\index.html.twig");
    }
}
