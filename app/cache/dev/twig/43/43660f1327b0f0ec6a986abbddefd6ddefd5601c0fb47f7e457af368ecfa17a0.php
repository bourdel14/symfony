<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_c7c28c008a612c43bf59c1fcd00be7bbf11f0f1a2212f2876cde44e70952eff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        echo " <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-block\">

        <div class=\"text-xs-center\">
            <h3>Edit this Advert :</h3>
        </div>

        <hr class=\"m-t-2 m-b-2\">

          ";
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

          <!-- Date -->

          <div class=\"md-form\">
            
<div class=\"md-form\">
    <input placeholder=\"Selected date\" type=\"text\" id=\"date-picker-example\" class=\"form-control datepicker\">
    <label for=\"date-picker-example\">Try me...</label>
</div>


          <!-- Category -->

        <div class=\"select\">
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'errors', array("attr" => array("class" => "form-control")));
        echo "

              ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>

          <!-- Published -->

          ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "


          ";
        // line 97
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

          ";
        // line 102
        echo "          ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
          ";
        // line 105
        echo "          ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 105,  169 => 102,  163 => 97,  157 => 93,  149 => 88,  144 => 86,  124 => 69,  119 => 67,  105 => 56,  100 => 54,  87 => 44,  82 => 42,  68 => 32,  62 => 29,  51 => 20,  48 => 19,  43 => 16,  31 => 6,  28 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

 {% block ocplatform_body %}
 <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-block\">

        <div class=\"text-xs-center\">
            <h3>Edit this Advert :</h3>
        </div>

        <hr class=\"m-t-2 m-b-2\">

          {{ form_start(form, {'attr': {'class': 'form-horizontal validate'}}) }}

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

          <!-- Date -->

          <div class=\"md-form\">
            
<div class=\"md-form\">
    <input placeholder=\"Selected date\" type=\"text\" id=\"date-picker-example\" class=\"form-control datepicker\">
    <label for=\"date-picker-example\">Try me...</label>
</div>


          <!-- Category -->

        <div class=\"select\">
            {{ form_errors(form.categories, {'attr': {'class': 'form-control'}}) }}

              {{ form_widget(form.categories, {'attr': {'class': 'form-control'}}) }}
          </div>

          <!-- Published -->

          {{ form_row(form.published) }}


          {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
          {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

          {# Génération automatique des champs pas encore écrits.
             Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
             et tous les champs cachés (type « hidden »). #}
          {{ form_rest(form) }}
          
          {# Fermeture de la balise <form> du formulaire HTML #}
          {{ form_end(form) }}

      </div>
    </div>
  </div>
{% endblock %}
";
    }
}
