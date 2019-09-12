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

/* inscript/Registry.html.twig */
class __TwigTemplate_a3f0cc71cad09cfebd067890221af899bb3c75f822467048b5e9ffc24bfa866a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscript/Registry.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscript/Registry.html.twig"));

        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        $this->parent = $this->loadTemplate("base.html.twig", "inscript/Registry.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Inscription ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<fieldset>
    <h1>Inscription</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            echo "    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 5), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 6, $this->source); })()), "Nom", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => "Nom"]]);
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 6, $this->source); })()), "Prenom", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => "Prénom"]]);
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 6, $this->source); })()), "Mail", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => "Email"]]);
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 6, $this->source); })()), "Password", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => "Mot
    de passe"]]);
        // line 7
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 7, $this->source); })()), "Adresse", [], "any", false, false, false, 7), 'row', ["attr" => ["placeholder" => "Adresse"]]);
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 7, $this->source); })()), "Profession", [], "any", false, false, false, 7), 'row', ["attr" => ["placeholder" => "Profession"]]);
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 8, $this->source); })()), "UrlWeb", [], "any", false, false, false, 8), 'row', ["attr" => ["required" => "false", "placeholder" => "Url de votre site web"]]);
        echo "
    <!-- <button type=\"button\" class=\"btn btn-secondary\" data-placement=\"left\">Annuler</button> -->
    <button type=\"submit\" class=\"btn btn-success\" data-placement=\"top\">Soumettre</button>
    <br>
    <br>
    <a id=\"retrolien1\" href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lien1"]) || array_key_exists("lien1", $context) ? $context["lien1"] : (function () { throw new RuntimeError('Variable "lien1" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</a><br>
    <a id=\"retrolien2\" href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lien2"]) || array_key_exists("lien2", $context) ? $context["lien2"] : (function () { throw new RuntimeError('Variable "lien2" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</a> <br>
</fieldset>
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["inscript"]) || array_key_exists("inscript", $context) ? $context["inscript"] : (function () { throw new RuntimeError('Variable "inscript" does not exist.', 16, $this->source); })()), 'form_end');
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscript/Registry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 16,  135 => 14,  131 => 13,  123 => 8,  116 => 7,  106 => 6,  97 => 5,  93 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% form_theme inscript 'bootstrap_4_layout.html.twig' %} {% block title %} Inscription {% endblock %} {% block body %} {{form_start(inscript)}}
<fieldset>
    <h1>Inscription</h1>
    {% for error in errors %}
    <li>{{ error.message }}</li>
    {% endfor %} {{form_row(inscript.Nom,{'attr':{'placeholder':'Nom'}})}} {{form_row(inscript.Prenom,{'attr':{'placeholder':'Prénom'}})}} {{form_row(inscript.Mail,{'attr':{'placeholder':'Email'}})}} {{form_row(inscript.Password,{'attr':{'placeholder':'Mot
    de passe'}})}} {#{{form_row(inscript.Test_Password,{'attr':{'placeholder':'Confirmer le mot de passe'}})}} #}{{form_row(inscript.Adresse,{'attr':{'placeholder':'Adresse'}})}} {{form_row(inscript.Profession,{'attr':{'placeholder':'Profession'}})}}
    {{form_row(inscript.UrlWeb,{'attr':{'required':'false','placeholder':'Url de votre site web'}})}}
    <!-- <button type=\"button\" class=\"btn btn-secondary\" data-placement=\"left\">Annuler</button> -->
    <button type=\"submit\" class=\"btn btn-success\" data-placement=\"top\">Soumettre</button>
    <br>
    <br>
    <a id=\"retrolien1\" href=\"#\">{{ lien1 }}</a><br>
    <a id=\"retrolien2\" href=\"#\">{{ lien2 }}</a> <br>
</fieldset>
{{form_end(inscript)}} {% endblock %}", "inscript/Registry.html.twig", "D:\\Dav\\10gitallab_project\\templates\\inscript\\Registry.html.twig");
    }
}
