<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_5848b971b3d5bff96a041d0cecf6d20866c84a1112f09b6ad024ffcef21aef2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 4);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 7
        echo "
\t<div class=\"container\">

\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 11
            echo "
\t\t

\t\t\t<div class=\"card\">

\t\t\t\t<div class=\"card-block\">

\t\t\t\t\t<h4 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</h4>

\t\t\t\t\t<hr>

\t\t\t\t</div>

\t\t\t\t<div class=\"card-data\">

\t\t            <p> Publié le ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "</p>

\t\t            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" class=\"link-text\" style=\"color:white;\"><h5>Read more<i class=\"fa fa-chevron-right\"></i></h5></a>
    \t\t\t
    \t\t\t</div>

\t\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t    <ul class=\"pagination\">
\t\t        <!--Numbers-->
\t\t        ";
        // line 39
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 40
            echo "\t\t\t\t    <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"page-item\"";
            }
            echo ">
\t\t\t\t      <a class=\"page-link\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t\t    </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t    </ul>


";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  97 => 41,  90 => 40,  85 => 39,  80 => 35,  67 => 28,  60 => 26,  49 => 18,  40 => 11,  36 => 10,  31 => 7,  28 => 6,  11 => 4,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

\t
\t{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block ocplatform_body %}

\t<div class=\"container\">

\t\t{% for advert in listAdverts %}

\t\t

\t\t\t<div class=\"card\">

\t\t\t\t<div class=\"card-block\">

\t\t\t\t\t<h4 class=\"card-title\">{{ advert.title}}</h4>

\t\t\t\t\t<hr>

\t\t\t\t</div>

\t\t\t\t<div class=\"card-data\">

\t\t            <p> Publié le {{ advert.date|date(\"d/m/Y\")}} par {{ advert.author}}</p>

\t\t            <a href=\"{{ path(\"oc_platform_view\", { 'id': advert.id }) }}\" class=\"link-text\" style=\"color:white;\"><h5>Read more<i class=\"fa fa-chevron-right\"></i></h5></a>
    \t\t\t
    \t\t\t</div>

\t\t\t</div>

\t\t{% endfor %}

\t\t    <ul class=\"pagination\">
\t\t        <!--Numbers-->
\t\t        {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
\t\t\t\t{% for p in range(1, nbPages) %}
\t\t\t\t    <li{% if p == page %} class=\"page-item\"{% endif %}>
\t\t\t\t      <a class=\"page-link\" href=\"{{ path('oc_platform_home', {'page': p}) }}\">{{ p }}</a>
\t\t\t\t    </li>
\t\t\t\t{% endfor %}
\t\t    </ul>


{% endblock %}";
    }
}
