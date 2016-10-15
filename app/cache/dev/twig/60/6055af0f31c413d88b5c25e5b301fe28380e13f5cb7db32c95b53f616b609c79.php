<?php

/* OCCoreBundle::base.html.twig */
class __TwigTemplate_1ed98e39e53088ea9b966b70dc853607dd5d984ed1c94dd591596c02f68ace9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    </head>
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
        <!-- Bootstrap -->
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
     <nav class=\"navbar navbar-inverse\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
        </div>

        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Annonce</a></li>
            <li><a href=\"#\">Mon profil</a></li>
            </ul>
          </li>
          <li><a href=\"#\">Contact</a></li> 
        </ul>

      </div>
    </nav>

        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
    ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 

        ";
    }

    public function getTemplateName()
    {
        return "OCCoreBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  110 => 45,  108 => 42,  87 => 23,  84 => 22,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  60 => 11,  57 => 10,  51 => 8,  45 => 47,  43 => 22,  39 => 20,  37 => 10,  32 => 8,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{% block title %}Welcome!{% endblock %}</title>

        {% block stylesheets %}

        <!-- Bootstrap -->
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
        <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        {% endblock %}

    </head>
    {% block body %}

     <nav class=\"navbar navbar-inverse\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
        </div>

        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Annonce</a></li>
            <li><a href=\"#\">Mon profil</a></li>
            </ul>
          </li>
          <li><a href=\"#\">Contact</a></li> 
        </ul>

      </div>
    </nav>

        {% block javascripts %} 

        {% endblock %}

    {% endblock %}

</html>
";
    }
}
