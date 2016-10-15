<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_dc21f8faf48dfd8840d165c920f7e60347c9b11c6093da290f13c74fdb211f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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

 \t\t<div class=\"jumbotron\">

 \t\t\t<h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h3>

\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "
\t\t\t<div class=\"chip\">
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t \t\t<hr class=\"m-y-2\">

\t \t\t<p>";
        // line 24
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true));
        echo "</p>

\t \t\t<p>Publié le ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</p>

\t \t\t<button class=\"btn btn-default\"><a style=\"color:white;\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\">Modifier</button>

\t \t</div>

\t \t\t

\t</div>


";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  71 => 26,  66 => 24,  61 => 21,  51 => 17,  47 => 15,  43 => 14,  38 => 12,  31 => 7,  28 => 6,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}


 {% block ocplatform_body %}

 \t<div class=\"container\">

 \t\t<div class=\"jumbotron\">

 \t\t\t<h3>{{ advert.title }}</h3>

\t\t\t{% for category in listCategories %}

\t\t\t<div class=\"chip\">
\t\t\t\t{{category.name}}
\t\t\t</div>

\t\t\t{% endfor %}

\t \t\t<hr class=\"m-y-2\">

\t \t\t<p>{{ advert.content|nl2br }}</p>

\t \t\t<p>Publié le {{ advert.date|date(\"d/m/Y\")}}</p>

\t \t\t<button class=\"btn btn-default\"><a style=\"color:white;\" href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\">Modifier</button>

\t \t</div>

\t \t\t

\t</div>


{% endblock %}


";
    }
}
