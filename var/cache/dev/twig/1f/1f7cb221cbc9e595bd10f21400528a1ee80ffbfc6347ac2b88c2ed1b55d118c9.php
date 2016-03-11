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
        $__internal_278066508de51da12d0da18d1f66e2141756827b5a7347ba43e53d48ec41dbe3 = $this->env->getExtension("native_profiler");
        $__internal_278066508de51da12d0da18d1f66e2141756827b5a7347ba43e53d48ec41dbe3->enter($__internal_278066508de51da12d0da18d1f66e2141756827b5a7347ba43e53d48ec41dbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div class=\"sub-header\">
                <h1>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"header-logo\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                    </a>
                </h1>

                <nav>
                    <ul>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"hvr-underline-from-left\">Accueil</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"hvr-underline-from-left\">Présentation</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"hvr-underline-from-left\">Voyager</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"hvr-underline-from-left\">Faire visiter</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn connexion hvr-fade hvr-buzz-out\">Connexion</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"lang hvr-icon-hang\">FR </a></li>
                    </ul>
                </nav>
            </div>

            <div class=\"cover\">
                <h2>Commencez votre voyage</h2>
                <p>Trouvez un guide dans la ville que vous souhaitez visiter ou publiez un voyage pour être contacté</p>
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn hvr-wobble-vertical hvr-fade\">Publier un voyage</a>
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn hvr-wobble-vertical hvr-fade\">Trouver un guide</a>
            </div>
        </header>
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
        <footer>

        </footer>

        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
        
        $__internal_278066508de51da12d0da18d1f66e2141756827b5a7347ba43e53d48ec41dbe3->leave($__internal_278066508de51da12d0da18d1f66e2141756827b5a7347ba43e53d48ec41dbe3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8da0540e7b241fdf1386120ecde981ecdd1b9b41b2d48eae8ed53c449db7ae59 = $this->env->getExtension("native_profiler");
        $__internal_8da0540e7b241fdf1386120ecde981ecdd1b9b41b2d48eae8ed53c449db7ae59->enter($__internal_8da0540e7b241fdf1386120ecde981ecdd1b9b41b2d48eae8ed53c449db7ae59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8da0540e7b241fdf1386120ecde981ecdd1b9b41b2d48eae8ed53c449db7ae59->leave($__internal_8da0540e7b241fdf1386120ecde981ecdd1b9b41b2d48eae8ed53c449db7ae59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa8b079aa6af1fc624856e1275987388bf9e1b604f6e75afed83119083710112 = $this->env->getExtension("native_profiler");
        $__internal_fa8b079aa6af1fc624856e1275987388bf9e1b604f6e75afed83119083710112->enter($__internal_fa8b079aa6af1fc624856e1275987388bf9e1b604f6e75afed83119083710112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/hover.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
        ";
        
        $__internal_fa8b079aa6af1fc624856e1275987388bf9e1b604f6e75afed83119083710112->leave($__internal_fa8b079aa6af1fc624856e1275987388bf9e1b604f6e75afed83119083710112_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8f0703d75c471e1a3836e7463bd724a6d088b2e8a0847cc4f469746e6401a2d = $this->env->getExtension("native_profiler");
        $__internal_e8f0703d75c471e1a3836e7463bd724a6d088b2e8a0847cc4f469746e6401a2d->enter($__internal_e8f0703d75c471e1a3836e7463bd724a6d088b2e8a0847cc4f469746e6401a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8f0703d75c471e1a3836e7463bd724a6d088b2e8a0847cc4f469746e6401a2d->leave($__internal_e8f0703d75c471e1a3836e7463bd724a6d088b2e8a0847cc4f469746e6401a2d_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c97b910891b462795eff2d494c82ed74e6b7c6ac3e3ca00632363470e59e700e = $this->env->getExtension("native_profiler");
        $__internal_c97b910891b462795eff2d494c82ed74e6b7c6ac3e3ca00632363470e59e700e->enter($__internal_c97b910891b462795eff2d494c82ed74e6b7c6ac3e3ca00632363470e59e700e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c97b910891b462795eff2d494c82ed74e6b7c6ac3e3ca00632363470e59e700e->leave($__internal_c97b910891b462795eff2d494c82ed74e6b7c6ac3e3ca00632363470e59e700e_prof);

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
        return array (  172 => 50,  161 => 44,  149 => 9,  145 => 8,  140 => 7,  134 => 6,  122 => 5,  113 => 51,  111 => 50,  104 => 45,  102 => 44,  96 => 41,  92 => 40,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  65 => 28,  61 => 27,  52 => 21,  48 => 20,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/reset.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/hover.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*             <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'>*/
/*             <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
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
/*                         <li><a href="{{ path('homepage') }}" class="hvr-underline-from-left">Accueil</a></li>*/
/*                         <li><a href="{{ path('homepage') }}" class="hvr-underline-from-left">Présentation</a></li>*/
/*                         <li><a href="{{ path('homepage') }}" class="hvr-underline-from-left">Voyager</a></li>*/
/*                         <li><a href="{{ path('homepage') }}" class="hvr-underline-from-left">Faire visiter</a></li>*/
/*                         <li><a href="{{ path('homepage') }}" class="btn connexion hvr-fade hvr-buzz-out">Connexion</a></li>*/
/*                         <li><a href="{{ path('homepage') }}" class="lang hvr-icon-hang">FR </a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <div class="cover">*/
/*                 <h2>Commencez votre voyage</h2>*/
/*                 <p>Trouvez un guide dans la ville que vous souhaitez visiter ou publiez un voyage pour être contacté</p>*/
/*                 <a href="{{ path('homepage') }}" class="btn hvr-wobble-vertical hvr-fade">Publier un voyage</a>*/
/*                 <a href="{{ path('homepage') }}" class="btn hvr-wobble-vertical hvr-fade">Trouver un guide</a>*/
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
