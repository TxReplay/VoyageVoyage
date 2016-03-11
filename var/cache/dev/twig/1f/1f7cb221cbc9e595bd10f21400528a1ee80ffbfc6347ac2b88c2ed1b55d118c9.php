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
        $__internal_2d59a23557e25336d4c2c6a61e8184f242a02aec69c86eb92c3f78ba7c1a3d9b = $this->env->getExtension("native_profiler");
        $__internal_2d59a23557e25336d4c2c6a61e8184f242a02aec69c86eb92c3f78ba7c1a3d9b->enter($__internal_2d59a23557e25336d4c2c6a61e8184f242a02aec69c86eb92c3f78ba7c1a3d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 64
        echo "    </body>
</html>
";
        
        $__internal_2d59a23557e25336d4c2c6a61e8184f242a02aec69c86eb92c3f78ba7c1a3d9b->leave($__internal_2d59a23557e25336d4c2c6a61e8184f242a02aec69c86eb92c3f78ba7c1a3d9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d70f0cee12ed0519101a67fb14ec8a55b150a3d7a73183952caa9fad6491f6f = $this->env->getExtension("native_profiler");
        $__internal_9d70f0cee12ed0519101a67fb14ec8a55b150a3d7a73183952caa9fad6491f6f->enter($__internal_9d70f0cee12ed0519101a67fb14ec8a55b150a3d7a73183952caa9fad6491f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d70f0cee12ed0519101a67fb14ec8a55b150a3d7a73183952caa9fad6491f6f->leave($__internal_9d70f0cee12ed0519101a67fb14ec8a55b150a3d7a73183952caa9fad6491f6f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95c23a5ce6eaec7af7f499c10ea100e9ec99842899d5cd26706bb6cf0fc6e9a0 = $this->env->getExtension("native_profiler");
        $__internal_95c23a5ce6eaec7af7f499c10ea100e9ec99842899d5cd26706bb6cf0fc6e9a0->enter($__internal_95c23a5ce6eaec7af7f499c10ea100e9ec99842899d5cd26706bb6cf0fc6e9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_95c23a5ce6eaec7af7f499c10ea100e9ec99842899d5cd26706bb6cf0fc6e9a0->leave($__internal_95c23a5ce6eaec7af7f499c10ea100e9ec99842899d5cd26706bb6cf0fc6e9a0_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c0bf35042e59e0170117e76f598587d265bf61b4d37ba35564001af28c2f1c = $this->env->getExtension("native_profiler");
        $__internal_43c0bf35042e59e0170117e76f598587d265bf61b4d37ba35564001af28c2f1c->enter($__internal_43c0bf35042e59e0170117e76f598587d265bf61b4d37ba35564001af28c2f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_43c0bf35042e59e0170117e76f598587d265bf61b4d37ba35564001af28c2f1c->leave($__internal_43c0bf35042e59e0170117e76f598587d265bf61b4d37ba35564001af28c2f1c_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ad4cabbfebb9ead84bc468252a18ccaf073753748b9ce32df95ed6f778c4821 = $this->env->getExtension("native_profiler");
        $__internal_6ad4cabbfebb9ead84bc468252a18ccaf073753748b9ce32df95ed6f778c4821->enter($__internal_6ad4cabbfebb9ead84bc468252a18ccaf073753748b9ce32df95ed6f778c4821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "            <script>
                if ( window.addEventListener ) {
                    var kkeys = [], konami = \"38,38,40,40,37,39,37,39,66,65\";
                    window.addEventListener(\"keydown\", function(e){
                        kkeys.push( e.keyCode );
                        if ( kkeys.toString().indexOf( konami ) >= 0 ) {
                            var audio = new Audio('";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("music/voyage-voyage.mp3"), "html", null, true);
        echo "');
                            audio.play();
                        }
                    }, true);
                }
            </script>
        ";
        
        $__internal_6ad4cabbfebb9ead84bc468252a18ccaf073753748b9ce32df95ed6f778c4821->leave($__internal_6ad4cabbfebb9ead84bc468252a18ccaf073753748b9ce32df95ed6f778c4821_prof);

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
        return array (  186 => 57,  178 => 51,  172 => 50,  161 => 44,  149 => 9,  145 => 8,  140 => 7,  134 => 6,  122 => 5,  113 => 64,  111 => 50,  104 => 45,  102 => 44,  96 => 41,  92 => 40,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  65 => 28,  61 => 27,  52 => 21,  48 => 20,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block javascripts %}*/
/*             <script>*/
/*                 if ( window.addEventListener ) {*/
/*                     var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";*/
/*                     window.addEventListener("keydown", function(e){*/
/*                         kkeys.push( e.keyCode );*/
/*                         if ( kkeys.toString().indexOf( konami ) >= 0 ) {*/
/*                             var audio = new Audio('{{ asset('music/voyage-voyage.mp3') }}');*/
/*                             audio.play();*/
/*                         }*/
/*                     }, true);*/
/*                 }*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
