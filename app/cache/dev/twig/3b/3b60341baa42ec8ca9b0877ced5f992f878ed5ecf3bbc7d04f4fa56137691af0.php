<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_523a46183cbd5a876f5373db5b5da6f8b725c1defcd8a784ea5d0498e3725b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-block\">

        <div class=\"text-xs-center\">
            <h3><i class=\"fa fa-edit\"></i> Edit this Advert :</h3>
        </div>

        <hr class=\"m-t-2 m-b-2\">

      \t  ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal validate")));
        echo "

          ";
        // line 19
        echo "
          ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

          <!-- Title -->

          <div class=\"md-form\">

            <i class=\"fa fa-tag prefix\"></i>

            ";
        // line 29
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

          </div>

          <!-- Content -->

          <div class=\"md-form\">

            <i class=\"fa fa-pencil prefix\"></i>

              ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "

              ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

          </div>

          <!-- City -->

          <div class=\"md-form\">

            <i class=\"fa fa-home prefix\"></i>

              ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo "

              ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

          </div>


          <!-- Author -->

          <div class=\"md-form\">

            <i class=\"fa fa-user prefix\"></i>

            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "

            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

          </div>

          <!-- Category -->

        <div class=\"select\">
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'errors', array("attr" => array("class" => "form-control")));
        echo "

              ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>


          ";
        // line 83
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

          ";
        // line 88
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
          ";
        // line 91
        echo "          ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t    </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 91,  152 => 88,  146 => 83,  139 => 78,  134 => 76,  124 => 69,  119 => 67,  105 => 56,  100 => 54,  87 => 44,  82 => 42,  68 => 32,  62 => 29,  51 => 20,  48 => 19,  43 => 16,  31 => 6,  28 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block ocplatform_body %}
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-block\">

        <div class=\"text-xs-center\">
            <h3><i class=\"fa fa-edit\"></i> Edit this Advert :</h3>
        </div>

        <hr class=\"m-t-2 m-b-2\">

      \t  {{ form_start(form, {'attr': {'class': 'form-horizontal validate'}}) }}

          {# Les erreurs générales du formulaire. #}

          {{ form_errors(form) }}

          <!-- Title -->

          <div class=\"md-form\">

            <i class=\"fa fa-tag prefix\"></i>

            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.title) }}

            {# Génération de l'input. #}
            {{ form_widget(form.title,{'attr': {'class': 'form-control'}}) }}

          </div>

          <!-- Content -->

          <div class=\"md-form\">

            <i class=\"fa fa-pencil prefix\"></i>

              {{ form_errors(form.content) }}

              {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}

          </div>

          <!-- City -->

          <div class=\"md-form\">

            <i class=\"fa fa-home prefix\"></i>

              {{ form_errors(form.city) }}

              {{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}

          </div>


          <!-- Author -->

          <div class=\"md-form\">

            <i class=\"fa fa-user prefix\"></i>

            {{ form_errors(form.author) }}

            {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}

          </div>

          <!-- Category -->

        <div class=\"select\">
            {{ form_errors(form.categories, {'attr': {'class': 'form-control'}}) }}

              {{ form_widget(form.categories, {'attr': {'class': 'form-control'}}) }}
          </div>


          {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
          {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

          {# Génération automatique des champs pas encore écrits.
             Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
             et tous les champs cachés (type « hidden »). #}
          {{ form_rest(form) }}
          
          {# Fermeture de la balise <form> du formulaire HTML #}
          {{ form_end(form) }}

\t    </div>
    </div>
  </div>
{% endblock %}
";
    }
}
