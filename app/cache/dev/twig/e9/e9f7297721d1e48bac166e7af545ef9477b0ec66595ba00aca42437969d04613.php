<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_cf79c83988b091dc28af1724caf261a01e42f694d09c74fd9d9de283d58d9338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCCoreBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'occore_body' => array($this, 'block_occore_body'),
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
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
                    <a class=\"nav-link\" href=\"#\">Annonce</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Profil</a>
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
        // line 47
        $this->displayBlock('occore_body', $context, $blocks);
        // line 49
        echo "
";
    }

    // line 47
    public function block_occore_body($context, array $blocks = array())
    {
        // line 48
        echo "  ";
    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  89 => 47,  84 => 49,  82 => 47,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/CoreBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block body %}

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
                    <a class=\"nav-link\" href=\"#\">Annonce</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Profil</a>
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
    
  {% block occore_body %}
  {% endblock %}

{% endblock %}";
    }
}
