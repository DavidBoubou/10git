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

/* accueil/index.html.twig */
class __TwigTemplate_a311c74580aa60b06aa6032b64c7c9d17a8ba6ecff27ef38edeb0077f3525e65 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "<div class=\"jumbotron\">
    <div>
        <h1>10gitallab_project</h1>
        <h2>Notre vision</h2>
        <p>Chez 10GITALLAB, nous pensons que le niveau d'engagement nécessaire pour mener à bien les projets de nos clients n'est possible que pour des collaborateurs. C'est pourquoi nous faisons le choix de recruter des <strong>experts métiers</strong>            plutôt que de travailler avec des freelances. Ainsi, quand vous nous confiez une mission, vous savez que les personnes impliquées sont membres de <a href=\"/agence/notre-equipe\">notre équipe</a>. Aucun risque de fuite d'information : tous les
            collaborateurs signent une clause de confidentialité en rejoignant notre structure. <br> Pour vous, cette vision vous garantit que :
        </p>
        <ul>
            <li>Nous maîtrisons toute la chaîne de valeurs nécessaire à la réalisation d'un projet digital.</li>
            <li>Les membres de l’équipe peuvent se relayer sur votre projet en cas de besoin. Votre dossier est toujours suivi.</li>
            <li>Les collaborateurs de l’agence mettent des compétences complémentaires au service de votre entreprise</li>
        </ul>
        Enfin, nous adoptons une <a href=\"#\">approche de pilotage de projet</a> pour faciliter le partenariat avec nos clients, leur éviter d'avoir plusieurs interlocuteurs et leur faire gagner du temps !
        <p></p>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block title %}Accueil{% endblock %} 
 {% block body %}
<div class=\"jumbotron\">
    <div>
        <h1>10gitallab_project</h1>
        <h2>Notre vision</h2>
        <p>Chez 10GITALLAB, nous pensons que le niveau d'engagement nécessaire pour mener à bien les projets de nos clients n'est possible que pour des collaborateurs. C'est pourquoi nous faisons le choix de recruter des <strong>experts métiers</strong>            plutôt que de travailler avec des freelances. Ainsi, quand vous nous confiez une mission, vous savez que les personnes impliquées sont membres de <a href=\"/agence/notre-equipe\">notre équipe</a>. Aucun risque de fuite d'information : tous les
            collaborateurs signent une clause de confidentialité en rejoignant notre structure. <br> Pour vous, cette vision vous garantit que :
        </p>
        <ul>
            <li>Nous maîtrisons toute la chaîne de valeurs nécessaire à la réalisation d'un projet digital.</li>
            <li>Les membres de l’équipe peuvent se relayer sur votre projet en cas de besoin. Votre dossier est toujours suivi.</li>
            <li>Les collaborateurs de l’agence mettent des compétences complémentaires au service de votre entreprise</li>
        </ul>
        Enfin, nous adoptons une <a href=\"#\">approche de pilotage de projet</a> pour faciliter le partenariat avec nos clients, leur éviter d'avoir plusieurs interlocuteurs et leur faire gagner du temps !
        <p></p>
    </div>
</div>
{% endblock %}", "accueil/index.html.twig", "C:\\Users\\Sam Desgn\\Desktop\\dAV\\10gitallab_project\\10gitallab_project\\templates\\accueil\\index.html.twig");
    }
}
