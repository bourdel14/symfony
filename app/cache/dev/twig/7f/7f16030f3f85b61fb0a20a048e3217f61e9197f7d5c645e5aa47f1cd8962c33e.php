<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_d8f94033a1bb897cb59bd75e40ca9fe0c0531cb207ce54ebcaa627f75efb9644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:index.html.twig", 4);
        $this->blocks = array(
            'occore_body' => array($this, 'block_occore_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_occore_body($context, array $blocks = array())
    {
        // line 7
        echo "
 <div class=\"container\">
    <h1>Bienvenue sur l'accueil !</h1> 

     ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "FlashBag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "
        <div class=\"alert alert-info\">
         
        \tMESSAGE : ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  46 => 15,  41 => 12,  37 => 11,  31 => 7,  28 => 6,  11 => 4,);
    }

    public function getSource()
    {
        return "{# src/OC/CoreBundle/Resources/views/Core/index.html.twig #}

\t
\t{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block occore_body %}

 <div class=\"container\">
    <h1>Bienvenue sur l'accueil !</h1> 

     {% for message in app.session.FlashBag.get('info') %}

        <div class=\"alert alert-info\">
         
        \tMESSAGE : {{ message }} 

        </div>

    {% endfor %}
</div>

{% endblock %}";
    }
}
