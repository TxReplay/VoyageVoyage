<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_49ab8c6675fffd66b9942670653407d4618319f6c1caebcfcbb2e680c328e9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc1c23921264ad186796a51e96b152eb5fdc22b3346f42c5aff190cefbdaad5 = $this->env->getExtension("native_profiler");
        $__internal_7cc1c23921264ad186796a51e96b152eb5fdc22b3346f42c5aff190cefbdaad5->enter($__internal_7cc1c23921264ad186796a51e96b152eb5fdc22b3346f42c5aff190cefbdaad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc1c23921264ad186796a51e96b152eb5fdc22b3346f42c5aff190cefbdaad5->leave($__internal_7cc1c23921264ad186796a51e96b152eb5fdc22b3346f42c5aff190cefbdaad5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5181ebececec4dbb1af359b1a1a665eaa67cb0498d0e82975adacd4515cdf695 = $this->env->getExtension("native_profiler");
        $__internal_5181ebececec4dbb1af359b1a1a665eaa67cb0498d0e82975adacd4515cdf695->enter($__internal_5181ebececec4dbb1af359b1a1a665eaa67cb0498d0e82975adacd4515cdf695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5181ebececec4dbb1af359b1a1a665eaa67cb0498d0e82975adacd4515cdf695->leave($__internal_5181ebececec4dbb1af359b1a1a665eaa67cb0498d0e82975adacd4515cdf695_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fc78f593316cec0fa7d864a1872c7d7ec6def38a628e993183804514a23ac45 = $this->env->getExtension("native_profiler");
        $__internal_6fc78f593316cec0fa7d864a1872c7d7ec6def38a628e993183804514a23ac45->enter($__internal_6fc78f593316cec0fa7d864a1872c7d7ec6def38a628e993183804514a23ac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6fc78f593316cec0fa7d864a1872c7d7ec6def38a628e993183804514a23ac45->leave($__internal_6fc78f593316cec0fa7d864a1872c7d7ec6def38a628e993183804514a23ac45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a759b69b307a61ac9eb60e19d870512f1ca71796893359288efa325e127189c4 = $this->env->getExtension("native_profiler");
        $__internal_a759b69b307a61ac9eb60e19d870512f1ca71796893359288efa325e127189c4->enter($__internal_a759b69b307a61ac9eb60e19d870512f1ca71796893359288efa325e127189c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a759b69b307a61ac9eb60e19d870512f1ca71796893359288efa325e127189c4->leave($__internal_a759b69b307a61ac9eb60e19d870512f1ca71796893359288efa325e127189c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
