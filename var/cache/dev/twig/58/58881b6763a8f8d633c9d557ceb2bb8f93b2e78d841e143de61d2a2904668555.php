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
        $__internal_0074ad89ee8645a4036e2ef955fe9c966750ce0ce6f891cc92464b455d203822 = $this->env->getExtension("native_profiler");
        $__internal_0074ad89ee8645a4036e2ef955fe9c966750ce0ce6f891cc92464b455d203822->enter($__internal_0074ad89ee8645a4036e2ef955fe9c966750ce0ce6f891cc92464b455d203822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0074ad89ee8645a4036e2ef955fe9c966750ce0ce6f891cc92464b455d203822->leave($__internal_0074ad89ee8645a4036e2ef955fe9c966750ce0ce6f891cc92464b455d203822_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f154503c5bfc955cbaf055c09e986c76f9b75c1ad1a347cdb9ad6e2043ac9dfd = $this->env->getExtension("native_profiler");
        $__internal_f154503c5bfc955cbaf055c09e986c76f9b75c1ad1a347cdb9ad6e2043ac9dfd->enter($__internal_f154503c5bfc955cbaf055c09e986c76f9b75c1ad1a347cdb9ad6e2043ac9dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f154503c5bfc955cbaf055c09e986c76f9b75c1ad1a347cdb9ad6e2043ac9dfd->leave($__internal_f154503c5bfc955cbaf055c09e986c76f9b75c1ad1a347cdb9ad6e2043ac9dfd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47af14b80ae94da45602dc83245fb0d1c5554284f197fe72a0b63dc0bbb58b87 = $this->env->getExtension("native_profiler");
        $__internal_47af14b80ae94da45602dc83245fb0d1c5554284f197fe72a0b63dc0bbb58b87->enter($__internal_47af14b80ae94da45602dc83245fb0d1c5554284f197fe72a0b63dc0bbb58b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47af14b80ae94da45602dc83245fb0d1c5554284f197fe72a0b63dc0bbb58b87->leave($__internal_47af14b80ae94da45602dc83245fb0d1c5554284f197fe72a0b63dc0bbb58b87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_333edb750910e9c42cb36353ee52fd587963c714432ea95ff89a403b173c3d45 = $this->env->getExtension("native_profiler");
        $__internal_333edb750910e9c42cb36353ee52fd587963c714432ea95ff89a403b173c3d45->enter($__internal_333edb750910e9c42cb36353ee52fd587963c714432ea95ff89a403b173c3d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_333edb750910e9c42cb36353ee52fd587963c714432ea95ff89a403b173c3d45->leave($__internal_333edb750910e9c42cb36353ee52fd587963c714432ea95ff89a403b173c3d45_prof);

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
