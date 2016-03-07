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
        $__internal_6c7418e12ad633734cbfce76fe7e5fa0adfaeb3409ac24cfc839f565bc4b4076 = $this->env->getExtension("native_profiler");
        $__internal_6c7418e12ad633734cbfce76fe7e5fa0adfaeb3409ac24cfc839f565bc4b4076->enter($__internal_6c7418e12ad633734cbfce76fe7e5fa0adfaeb3409ac24cfc839f565bc4b4076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6c7418e12ad633734cbfce76fe7e5fa0adfaeb3409ac24cfc839f565bc4b4076->leave($__internal_6c7418e12ad633734cbfce76fe7e5fa0adfaeb3409ac24cfc839f565bc4b4076_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8af49b5220b3ac1b7d472932f505cc5a7f1863989276e62e7619ff93acd6f910 = $this->env->getExtension("native_profiler");
        $__internal_8af49b5220b3ac1b7d472932f505cc5a7f1863989276e62e7619ff93acd6f910->enter($__internal_8af49b5220b3ac1b7d472932f505cc5a7f1863989276e62e7619ff93acd6f910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8af49b5220b3ac1b7d472932f505cc5a7f1863989276e62e7619ff93acd6f910->leave($__internal_8af49b5220b3ac1b7d472932f505cc5a7f1863989276e62e7619ff93acd6f910_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_025ce6dabaafafd826a4e9c56657d4d60b05cb16a33e5276957db137783aa37c = $this->env->getExtension("native_profiler");
        $__internal_025ce6dabaafafd826a4e9c56657d4d60b05cb16a33e5276957db137783aa37c->enter($__internal_025ce6dabaafafd826a4e9c56657d4d60b05cb16a33e5276957db137783aa37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_025ce6dabaafafd826a4e9c56657d4d60b05cb16a33e5276957db137783aa37c->leave($__internal_025ce6dabaafafd826a4e9c56657d4d60b05cb16a33e5276957db137783aa37c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7445dc268c38850314c4c3722114bd5079ddcf869b30ca48cb20a5604a8b9a = $this->env->getExtension("native_profiler");
        $__internal_9c7445dc268c38850314c4c3722114bd5079ddcf869b30ca48cb20a5604a8b9a->enter($__internal_9c7445dc268c38850314c4c3722114bd5079ddcf869b30ca48cb20a5604a8b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c7445dc268c38850314c4c3722114bd5079ddcf869b30ca48cb20a5604a8b9a->leave($__internal_9c7445dc268c38850314c4c3722114bd5079ddcf869b30ca48cb20a5604a8b9a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90ccd892274ce477f6eb0e80097832e9508059ee859cee2d303e7f487caf826c = $this->env->getExtension("native_profiler");
        $__internal_90ccd892274ce477f6eb0e80097832e9508059ee859cee2d303e7f487caf826c->enter($__internal_90ccd892274ce477f6eb0e80097832e9508059ee859cee2d303e7f487caf826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90ccd892274ce477f6eb0e80097832e9508059ee859cee2d303e7f487caf826c->leave($__internal_90ccd892274ce477f6eb0e80097832e9508059ee859cee2d303e7f487caf826c_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
