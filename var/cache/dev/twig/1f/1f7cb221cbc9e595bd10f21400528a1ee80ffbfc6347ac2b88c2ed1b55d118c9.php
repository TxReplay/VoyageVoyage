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
        $__internal_222e28feeb5405ca2b2cf5a952b067f87fc5ee2da50d9f9bf215da8e453dba3f = $this->env->getExtension("native_profiler");
        $__internal_222e28feeb5405ca2b2cf5a952b067f87fc5ee2da50d9f9bf215da8e453dba3f->enter($__internal_222e28feeb5405ca2b2cf5a952b067f87fc5ee2da50d9f9bf215da8e453dba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "\" class=\"btn\">Publier un voyage</a>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn\">Trouver un guide</a>
            </div>
        </header>
        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
        <footer>

        </footer>

        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_222e28feeb5405ca2b2cf5a952b067f87fc5ee2da50d9f9bf215da8e453dba3f->leave($__internal_222e28feeb5405ca2b2cf5a952b067f87fc5ee2da50d9f9bf215da8e453dba3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_686972ba26462dc15eeb8e54f1614b958503654222aef5c6fb447ae61060cfe5 = $this->env->getExtension("native_profiler");
        $__internal_686972ba26462dc15eeb8e54f1614b958503654222aef5c6fb447ae61060cfe5->enter($__internal_686972ba26462dc15eeb8e54f1614b958503654222aef5c6fb447ae61060cfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_686972ba26462dc15eeb8e54f1614b958503654222aef5c6fb447ae61060cfe5->leave($__internal_686972ba26462dc15eeb8e54f1614b958503654222aef5c6fb447ae61060cfe5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7cf2bdb9806edd5b6b9e81e4c06e20997301430e1ff489cdee60ebf355d13ff9 = $this->env->getExtension("native_profiler");
        $__internal_7cf2bdb9806edd5b6b9e81e4c06e20997301430e1ff489cdee60ebf355d13ff9->enter($__internal_7cf2bdb9806edd5b6b9e81e4c06e20997301430e1ff489cdee60ebf355d13ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7cf2bdb9806edd5b6b9e81e4c06e20997301430e1ff489cdee60ebf355d13ff9->leave($__internal_7cf2bdb9806edd5b6b9e81e4c06e20997301430e1ff489cdee60ebf355d13ff9_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f0ada628ea210550e1f07eacbc7438611d533824c4178175176aa0179adcbb = $this->env->getExtension("native_profiler");
        $__internal_73f0ada628ea210550e1f07eacbc7438611d533824c4178175176aa0179adcbb->enter($__internal_73f0ada628ea210550e1f07eacbc7438611d533824c4178175176aa0179adcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73f0ada628ea210550e1f07eacbc7438611d533824c4178175176aa0179adcbb->leave($__internal_73f0ada628ea210550e1f07eacbc7438611d533824c4178175176aa0179adcbb_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_511fc9933056ca2999f6e3a278ffdcb8773faad05e37e8a7e821f90006c98c72 = $this->env->getExtension("native_profiler");
        $__internal_511fc9933056ca2999f6e3a278ffdcb8773faad05e37e8a7e821f90006c98c72->enter($__internal_511fc9933056ca2999f6e3a278ffdcb8773faad05e37e8a7e821f90006c98c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_511fc9933056ca2999f6e3a278ffdcb8773faad05e37e8a7e821f90006c98c72->leave($__internal_511fc9933056ca2999f6e3a278ffdcb8773faad05e37e8a7e821f90006c98c72_prof);

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
        return array (  163 => 47,  152 => 41,  141 => 8,  136 => 7,  130 => 6,  118 => 5,  109 => 48,  107 => 47,  100 => 42,  98 => 41,  92 => 38,  88 => 37,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  52 => 19,  48 => 18,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*                 <a href="{{ path('homepage') }}" class="btn">Publier un voyage</a>*/
/*                 <a href="{{ path('homepage') }}" class="btn">Trouver un guide</a>*/
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
