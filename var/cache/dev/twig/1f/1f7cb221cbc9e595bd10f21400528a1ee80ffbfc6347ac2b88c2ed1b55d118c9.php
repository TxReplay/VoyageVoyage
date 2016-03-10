<?php

/* base.html.twig */
class __TwigTemplate_2a68e5823784a514ef16a9e2d9ca28f1c059836c4a9182be36fa3023a6330d88 extends Twig_Template
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
        $__internal_9098a175cbb2e1500b4d796f67205e70978d9f5d89736aae6bed29ff9fb6bd48 = $this->env->getExtension("native_profiler");
        $__internal_9098a175cbb2e1500b4d796f67205e70978d9f5d89736aae6bed29ff9fb6bd48->enter($__internal_9098a175cbb2e1500b4d796f67205e70978d9f5d89736aae6bed29ff9fb6bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div class=\"sub-header\">
                <h1>
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"header-logo\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                    </a>
                </h1>

                <nav>
                    <ul>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Présentation</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Voyager</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Publier</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn\">Connexion</a></li>
                    </ul>
                </nav>
            </div>

            <div class=\"cover\">
                <h2>Commencez votre voyage</h2>
                <p>Trouvez un guide dans la ville que vous souhaitez visiter ou publiez un voyage pour être contacté</p>
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn\">Voyager !</a>
            </div>
        </header>
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
        <footer>

        </footer>

        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_9098a175cbb2e1500b4d796f67205e70978d9f5d89736aae6bed29ff9fb6bd48->leave($__internal_9098a175cbb2e1500b4d796f67205e70978d9f5d89736aae6bed29ff9fb6bd48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_282819bf86c1331619f508bd78c58a24b268c8351c689e604024eb11ebf5b965 = $this->env->getExtension("native_profiler");
        $__internal_282819bf86c1331619f508bd78c58a24b268c8351c689e604024eb11ebf5b965->enter($__internal_282819bf86c1331619f508bd78c58a24b268c8351c689e604024eb11ebf5b965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_282819bf86c1331619f508bd78c58a24b268c8351c689e604024eb11ebf5b965->leave($__internal_282819bf86c1331619f508bd78c58a24b268c8351c689e604024eb11ebf5b965_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a3a41150f39c7e29718e42df7fa39a3a397f727bf88c7fecace5528c6067d9a = $this->env->getExtension("native_profiler");
        $__internal_6a3a41150f39c7e29718e42df7fa39a3a397f727bf88c7fecace5528c6067d9a->enter($__internal_6a3a41150f39c7e29718e42df7fa39a3a397f727bf88c7fecace5528c6067d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>
        ";
        
        $__internal_6a3a41150f39c7e29718e42df7fa39a3a397f727bf88c7fecace5528c6067d9a->leave($__internal_6a3a41150f39c7e29718e42df7fa39a3a397f727bf88c7fecace5528c6067d9a_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_46b3c0a9f9a15415484be8b8c21725731f2833c067193e99fafd98578fb1ba42 = $this->env->getExtension("native_profiler");
        $__internal_46b3c0a9f9a15415484be8b8c21725731f2833c067193e99fafd98578fb1ba42->enter($__internal_46b3c0a9f9a15415484be8b8c21725731f2833c067193e99fafd98578fb1ba42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46b3c0a9f9a15415484be8b8c21725731f2833c067193e99fafd98578fb1ba42->leave($__internal_46b3c0a9f9a15415484be8b8c21725731f2833c067193e99fafd98578fb1ba42_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1328aa2fe023bf704a2c3ad6480ea5f26bc8e7de449a83e8e23b0ac6c0eb1ddc = $this->env->getExtension("native_profiler");
        $__internal_1328aa2fe023bf704a2c3ad6480ea5f26bc8e7de449a83e8e23b0ac6c0eb1ddc->enter($__internal_1328aa2fe023bf704a2c3ad6480ea5f26bc8e7de449a83e8e23b0ac6c0eb1ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1328aa2fe023bf704a2c3ad6480ea5f26bc8e7de449a83e8e23b0ac6c0eb1ddc->leave($__internal_1328aa2fe023bf704a2c3ad6480ea5f26bc8e7de449a83e8e23b0ac6c0eb1ddc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 46,  148 => 40,  137 => 8,  132 => 7,  126 => 6,  114 => 5,  105 => 47,  103 => 46,  96 => 41,  94 => 40,  88 => 37,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  52 => 19,  48 => 18,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/reset.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*             <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div class="sub-header">*/
/*                 <h1>*/
/*                     <a href="{{ path('homepage') }}" class="header-logo">*/
/*                         <img src="{{ asset('images/logo.png') }}" alt="Logo">*/
/*                     </a>*/
/*                 </h1>*/
/* */
/*                 <nav>*/
/*                     <ul>*/
/*                         <li><a href="{{ path('homepage') }}">Accueil</a></li>*/
/*                         <li><a href="{{ path('homepage') }}">Présentation</a></li>*/
/*                         <li><a href="{{ path('homepage') }}">Voyager</a></li>*/
/*                         <li><a href="{{ path('homepage') }}">Publier</a></li>*/
/*                         <li><a href="{{ path('homepage') }}" class="btn">Connexion</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="cover">*/
/*                 <h2>Commencez votre voyage</h2>*/
/*                 <p>Trouvez un guide dans la ville que vous souhaitez visiter ou publiez un voyage pour être contacté</p>*/
/*                 <a href="{{ path('homepage') }}" class="btn">Voyager !</a>*/
/*             </div>*/
/*         </header>*/
/*         {% block body %}{% endblock %}*/
/* */
/*         <footer>*/
/* */
/*         </footer>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
