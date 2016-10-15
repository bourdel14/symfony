<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_dc241c02d0b0585f3f4eaa010a3b575bc6efc93f46f79e61bd088c8a02ee07e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "
<nav class=\"navbar navbar-dark primary-color-dark\">

    <!-- Collapse button-->
    <button class=\"navbar-toggler hidden-sm-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseEx\">
        <i class=\"fa fa-bars\"></i>
    </button>

    <div class=\"container\">

        <!--Collapse content-->
        <div class=\"collapse navbar-toggleable-xs\" id=\"collapseEx\">
            <!--Navbar Brand-->
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <!--Links-->
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Ajouter une annonce</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">profil</a>
                </li>
            </ul>
            <!--Search form-->
            <form class=\"form-inline\">
                <input class=\"form-control\" type=\"text\" placeholder=\"Search\">
            </form>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>

  ";
        // line 50
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 52
        echo "
";
    }

    // line 50
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 51
        echo "  ";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  93 => 50,  88 => 52,  85 => 50,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}

<nav class=\"navbar navbar-dark primary-color-dark\">

    <!-- Collapse button-->
    <button class=\"navbar-toggler hidden-sm-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseEx\">
        <i class=\"fa fa-bars\"></i>
    </button>

    <div class=\"container\">

        <!--Collapse content-->
        <div class=\"collapse navbar-toggleable-xs\" id=\"collapseEx\">
            <!--Navbar Brand-->
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <!--Links-->
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Ajouter une annonce</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">profil</a>
                </li>
            </ul>
            <!--Search form-->
            <form class=\"form-inline\">
                <input class=\"form-control\" type=\"text\" placeholder=\"Search\">
            </form>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}";
    }
}
