<?php

/* profil.html.twig */
class __TwigTemplate_ae98d863c6f5dcf2804e647f38f17cfe07e895e448e53b7140db2cac71fcf890 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profil.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profil.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"/assets/profil.css\">
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 d-flex justify-content-center\">
                <ul class=\"list-group text-center text-white\">
                    <li class=\"list-group-item\" style=\"background-color: deeppink\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\" style=\"background-color: hotpink\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["species"]) || array_key_exists("species", $context) ? $context["species"] : (function () { throw new Twig_Error_Runtime('Variable "species" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</li>
                </ul>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src= \" ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " \" alt=\"Card image cap\">
                </div>
            </div>
        </div>
    </div>
    <br>

    <h1 class=\"liké text-white\">Personnes likées</h1>

            <div class=\"row\">
                    <div class=\"col-md-4 d-flex justify-content-center\">
                        <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
                            <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cougar"]) || array_key_exists("cougar", $context) ? $context["cougar"] : (function () { throw new Twig_Error_Runtime('Variable "cougar" does not exist.', 30, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cougar"]) || array_key_exists("cougar", $context) ? $context["cougar"] : (function () { throw new Twig_Error_Runtime('Variable "cougar" does not exist.', 30, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                        </div>
                        <br>
                        <div class=\"modal fade bd-example-modal-lg\" id=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cougar"]) || array_key_exists("cougar", $context) ? $context["cougar"] : (function () { throw new Twig_Error_Runtime('Variable "cougar" does not exist.', 33, $this->source); })()), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
                            <div class=\"modal-dialog modal-lg\">
                                <div class=\"modal-content\">
                                    <div class=\"card mx-auto\" style=\"width: 55rem;\">
                                        <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cougar"]) || array_key_exists("cougar", $context) ? $context["cougar"] : (function () { throw new Twig_Error_Runtime('Variable "cougar" does not exist.', 37, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item mx-auto\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cougar"]) || array_key_exists("cougar", $context) ? $context["cougar"] : (function () { throw new Twig_Error_Runtime('Variable "cougar" does not exist.', 39, $this->source); })()), "name", array()), "html", null, true);
        echo "</li>
                                            <li class=\"list-group-item mx-auto\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cougar"]) || array_key_exists("cougar", $context) ? $context["cougar"] : (function () { throw new Twig_Error_Runtime('Variable "cougar" does not exist.', 40, $this->source); })()), "wiki", array()), "html", null, true);
        echo "\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4 d-flex justify-content-center\">
                        <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
                            <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 50, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 50, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                        </div>
                        <br>
                        <div class=\"modal fade bd-example-modal-lg\" id=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 53, $this->source); })()), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
                            <div class=\"modal-dialog modal-lg\">
                                <div class=\"modal-content\">
                                    <div class=\"card mx-auto\" style=\"width: 55rem;\">
                                        <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 57, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item mx-auto\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 59, $this->source); })()), "name", array()), "html", null, true);
        echo "</li>
                                            <li class=\"list-group-item mx-auto\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jedi"]) || array_key_exists("jedi", $context) ? $context["jedi"] : (function () { throw new Twig_Error_Runtime('Variable "jedi" does not exist.', 60, $this->source); })()), "wiki", array()), "html", null, true);
        echo "\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class=\"col-md-4 d-flex justify-content-center\">
                            <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
                                <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 70, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 70, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                            </div>
                            <br>
                            <div class=\"modal fade bd-example-modal-lg\" id=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 73, $this->source); })()), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
                                <div class=\"modal-dialog modal-lg\">
                                    <div class=\"modal-content\">
                                        <div class=\"card mx-auto\" style=\"width: 55rem;\">
                                            <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 77, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\">
                                            <ul class=\"list-group list-group-flush\">
                                                <li class=\"list-group-item mx-auto\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 79, $this->source); })()), "name", array()), "html", null, true);
        echo "</li>
                                                <li class=\"list-group-item mx-auto\"><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 80, $this->source); })()), "wiki", array()), "html", null, true);
        echo "\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
                <br>

                <h1 class=\"liké text-white\">Personnes matchées</h1>
    <br>
    <div class=\"col-md-12 d-flex justify-content-center\">
        <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
            <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 94, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 94, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
        </div>
        <br>
        <div class=\"modal fade bd-example-modal-lg\" id=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 97, $this->source); })()), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"card mx-auto\" style=\"width: 55rem;\">
                        <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 101, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\">
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item mx-auto\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 103, $this->source); })()), "name", array()), "html", null, true);
        echo "</li>
                            <li class=\"list-group-item mx-auto\"><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["robot"]) || array_key_exists("robot", $context) ? $context["robot"] : (function () { throw new Twig_Error_Runtime('Variable "robot" does not exist.', 104, $this->source); })()), "wiki", array()), "html", null, true);
        echo "\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
        return "profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 104,  242 => 103,  237 => 101,  230 => 97,  222 => 94,  205 => 80,  201 => 79,  196 => 77,  189 => 73,  181 => 70,  168 => 60,  164 => 59,  159 => 57,  152 => 53,  144 => 50,  131 => 40,  127 => 39,  122 => 37,  115 => 33,  107 => 30,  92 => 18,  84 => 13,  80 => 12,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"/assets/profil.css\">
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 d-flex justify-content-center\">
                <ul class=\"list-group text-center text-white\">
                    <li class=\"list-group-item\" style=\"background-color: deeppink\">{{ username }}</li>
                    <li class=\"list-group-item\" style=\"background-color: hotpink\">{{ species }}</li>
                </ul>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center\">
                <div class=\"card\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src= \" {{ image }} \" alt=\"Card image cap\">
                </div>
            </div>
        </div>
    </div>
    <br>

    <h1 class=\"liké text-white\">Personnes likées</h1>

            <div class=\"row\">
                    <div class=\"col-md-4 d-flex justify-content-center\">
                        <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
                            <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"{{ cougar.image }}\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#{{ cougar.id }}\">
                        </div>
                        <br>
                        <div class=\"modal fade bd-example-modal-lg\" id=\"{{ cougar.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
                            <div class=\"modal-dialog modal-lg\">
                                <div class=\"modal-content\">
                                    <div class=\"card mx-auto\" style=\"width: 55rem;\">
                                        <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"{{ cougar.image }}\" alt=\"Card image cap\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item mx-auto\">{{ cougar.name }}</li>
                                            <li class=\"list-group-item mx-auto\"><a href=\"{{ cougar.wiki }}\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4 d-flex justify-content-center\">
                        <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
                            <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"{{ jedi.image }}\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#{{ jedi.id }}\">
                        </div>
                        <br>
                        <div class=\"modal fade bd-example-modal-lg\" id=\"{{ jedi.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
                            <div class=\"modal-dialog modal-lg\">
                                <div class=\"modal-content\">
                                    <div class=\"card mx-auto\" style=\"width: 55rem;\">
                                        <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"{{ jedi.image }}\" alt=\"Card image cap\">
                                        <ul class=\"list-group list-group-flush\">
                                            <li class=\"list-group-item mx-auto\">{{ jedi.name }}</li>
                                            <li class=\"list-group-item mx-auto\"><a href=\"{{ jedi.wiki }}\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class=\"col-md-4 d-flex justify-content-center\">
                            <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
                                <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"{{ robot.image }}\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#{{ robot.id }}\">
                            </div>
                            <br>
                            <div class=\"modal fade bd-example-modal-lg\" id=\"{{ robot.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
                                <div class=\"modal-dialog modal-lg\">
                                    <div class=\"modal-content\">
                                        <div class=\"card mx-auto\" style=\"width: 55rem;\">
                                            <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"{{ robot.image }}\" alt=\"Card image cap\">
                                            <ul class=\"list-group list-group-flush\">
                                                <li class=\"list-group-item mx-auto\">{{ robot.name }}</li>
                                                <li class=\"list-group-item mx-auto\"><a href=\"{{ robot.wiki }}\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
                <br>

                <h1 class=\"liké text-white\">Personnes matchées</h1>
    <br>
    <div class=\"col-md-12 d-flex justify-content-center\">
        <div class=\"card\" style=\"width: 12rem; height: 15rem;\">
            <img class=\"card-img-top\" style=\"width: 12rem; height: 15rem;\" src=\"{{ robot.image }}\" alt=\"Card image cap\" data-toggle=\"modal\" data-target=\"#{{ robot.id }}\">
        </div>
        <br>
        <div class=\"modal fade bd-example-modal-lg\" id=\"{{ robot.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\" style=\"background-image: https://i.imgur.com/14uH65r.jpg;\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"card mx-auto\" style=\"width: 55rem;\">
                        <img class=\"card-img-top mx-auto\" style=\"width: 30rem; height: 35rem;\" src=\"{{ robot.image }}\" alt=\"Card image cap\">
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item mx-auto\">{{ robot.name }}</li>
                            <li class=\"list-group-item mx-auto\"><a href=\"{{ robot.wiki }}\" target = \"_blank\" class=\"btn text-white\">En savoir plus</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
            </div>


{% endblock %}

", "profil.html.twig", "/home/wilder/Documents/starlove2/app/Resources/views/profil.html.twig");
    }
}
