<?php

/* jedi/jedi.html.twig */
class __TwigTemplate_7b3c3a2e76b32d9eefa1c81b2b13935cb81c350aa0e9ccc597489867ea0b4c02 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "jedi/jedi.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jedi/jedi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "jedi/jedi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"/assets/home.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card mx-auto\" style=\"width: 23rem;\">
                        <img class=\"card-img-top img-responsive\" src= \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 12, $this->source); })()), "image", array()), "html", null, true);
        echo " \"alt=\"Card image cap\">
                    <span class=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 13, $this->source); })()), "name", array()), "html", null, true);
        echo "</span>
                    <span class=\"species\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 14, $this->source); })()), "species", array()), "html", null, true);
        echo "</span>
                </div>

                <div class=\"row \">
                    <div class=\"col-md-6 d-flex justify-content-end mt-5\">
                        <a href=\"/question4\" class=\"btn btn-lg text-white\">Like</a>
                    </div>
                    <div class=\"col-md-6 mt-5\">
                        <a href=\"/jedi\" class=\"btn btn-lg text-white\">Dislike</a>

                    </div>
                </div>
            </div>
            <div class=\"col-md-6 left\">
                <div class=\"card  mx-auto\" style=\"width: 25rem;\">
                    <img class=\"card-img-top2 img-responsive\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" alt=\"Card image cap\">
                    <span class=\"username\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</span>
                    <span class=\"species\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["species"]) || array_key_exists("species", $context) ? $context["species"] : (function () { throw new Twig_Error_Runtime('Variable "species" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jedi/jedi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  110 => 30,  106 => 29,  88 => 14,  84 => 13,  80 => 12,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/assets/home.css\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card mx-auto\" style=\"width: 23rem;\">
                        <img class=\"card-img-top img-responsive\" src= \"{{ jedi.image }} \"alt=\"Card image cap\">
                    <span class=\"username\">{{ jedi.name }}</span>
                    <span class=\"species\">{{ jedi.species }}</span>
                </div>

                <div class=\"row \">
                    <div class=\"col-md-6 d-flex justify-content-end mt-5\">
                        <a href=\"/question4\" class=\"btn btn-lg text-white\">Like</a>
                    </div>
                    <div class=\"col-md-6 mt-5\">
                        <a href=\"/jedi\" class=\"btn btn-lg text-white\">Dislike</a>

                    </div>
                </div>
            </div>
            <div class=\"col-md-6 left\">
                <div class=\"card  mx-auto\" style=\"width: 25rem;\">
                    <img class=\"card-img-top2 img-responsive\" src=\"{{ image }}\" alt=\"Card image cap\">
                    <span class=\"username\">{{ username }}</span>
                    <span class=\"species\">{{ species }}</span>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

", "jedi/jedi.html.twig", "/home/wilder/Documents/starlove2/app/Resources/views/jedi/jedi.html.twig");
    }
}
