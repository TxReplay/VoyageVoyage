<?php

/* default/index.html.twig */
class __TwigTemplate_e2ae7fab2b5e6c6eb3de5f81b5f304fe9482addff8d4e080ad6d483021f21402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb7a1efeca37762962f51c6c269483ebed9870b791fd3e2adc7cfd4e654eeb72 = $this->env->getExtension("native_profiler");
        $__internal_bb7a1efeca37762962f51c6c269483ebed9870b791fd3e2adc7cfd4e654eeb72->enter($__internal_bb7a1efeca37762962f51c6c269483ebed9870b791fd3e2adc7cfd4e654eeb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7a1efeca37762962f51c6c269483ebed9870b791fd3e2adc7cfd4e654eeb72->leave($__internal_bb7a1efeca37762962f51c6c269483ebed9870b791fd3e2adc7cfd4e654eeb72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7ad0aac0dc6f507ed3c7d3fb4a9401c8ee4558a2630b148c144174ad9e7ca3f = $this->env->getExtension("native_profiler");
        $__internal_f7ad0aac0dc6f507ed3c7d3fb4a9401c8ee4558a2630b148c144174ad9e7ca3f->enter($__internal_f7ad0aac0dc6f507ed3c7d3fb4a9401c8ee4558a2630b148c144174ad9e7ca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        <div class=\"how-it-works\">
            <div class=\"border\"></div>

            <div class=\"container\">
                <h3>Comment ça marche ?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
            </div>

            <div class=\"border\"></div>
        </div>

        <div class=\"most-visited\">
            <div class=\"container\">
                <h3>Les plus visités</h3>
                <ul class=\"gallery\">
                    <li>
                        <a href=\"#\" class=\"hvr-grow-rotate\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/seville.png"), "html", null, true);
        echo "\" alt=\"Visiter Séville\">
                            <p>Séville</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"hvr-grow-rotate\">
                            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/rome.png"), "html", null, true);
        echo "\" alt=\"Visiter Rome\">
                            <p>Rome</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"hvr-grow-rotate\">
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sanfransisco.png"), "html", null, true);
        echo "\" alt=\"Visiter San Fransisco\">
                            <p>San Fransisco</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"hvr-grow-rotate\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/paris.png"), "html", null, true);
        echo "\" alt=\"Visiter Paris\">
                            <p>Paris</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"waiting-for-you\">
            <div class=\"border\"></div>
            <div class=\"container\">
                <h3>Ils vous attendent !</h3>

                <ul class=\"people\">
                    <li>
                        <a href=\"#\">
                            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/valentin.png"), "html", null, true);
        echo "\" class=\"hvr-glow\" alt=\"Photo de Valentin\">
                            <p class=\"name\">Valentin C.</p>
                            <p class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                               Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/manu.png"), "html", null, true);
        echo "\" class=\"hvr-glow\" alt=\"Photo d'Emmanuel\">
                            <p class=\"name\">Emmanuel G.</p>
                            <p class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                               Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/toni.png"), "html", null, true);
        echo "\" class=\"hvr-glow\" alt=\"Photo de Toni\">
                            <p class=\"name\">Toni O.</p>
                            <p class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                               Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/alex.png"), "html", null, true);
        echo "\" class=\"hvr-glow\" alt=\"Photo d'Alexandra\">
                            <p class=\"name\">Alexandra C.</p>
                            <p class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.
                               Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"sign-in\">
            <div class=\"container\">
                <h3>Inscrivez-vous !</h3>
                <p>L’inscription ne vous prendra pas plus de 30 secondes et vous permettra d’aller jusqu’au bout du monde !</p>
                <a href=\"#\" class=\"btn hvr-wobble-vertical hvr-fade\">Inscription</a>
            </div>
        </div>

    </div>
";
        
        $__internal_f7ad0aac0dc6f507ed3c7d3fb4a9401c8ee4558a2630b148c144174ad9e7ca3f->leave($__internal_f7ad0aac0dc6f507ed3c7d3fb4a9401c8ee4558a2630b148c144174ad9e7ca3f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 80,  128 => 72,  117 => 64,  106 => 56,  87 => 40,  78 => 34,  69 => 28,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*         <div class="how-it-works">*/
/*             <div class="border"></div>*/
/* */
/*             <div class="container">*/
/*                 <h3>Comment ça marche ?</h3>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>*/
/*             </div>*/
/* */
/*             <div class="border"></div>*/
/*         </div>*/
/* */
/*         <div class="most-visited">*/
/*             <div class="container">*/
/*                 <h3>Les plus visités</h3>*/
/*                 <ul class="gallery">*/
/*                     <li>*/
/*                         <a href="#" class="hvr-grow-rotate">*/
/*                             <img src="{{ asset('images/seville.png') }}" alt="Visiter Séville">*/
/*                             <p>Séville</p>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#" class="hvr-grow-rotate">*/
/*                             <img src="{{ asset('images/rome.png') }}" alt="Visiter Rome">*/
/*                             <p>Rome</p>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#" class="hvr-grow-rotate">*/
/*                             <img src="{{ asset('images/sanfransisco.png') }}" alt="Visiter San Fransisco">*/
/*                             <p>San Fransisco</p>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#" class="hvr-grow-rotate">*/
/*                             <img src="{{ asset('images/paris.png') }}" alt="Visiter Paris">*/
/*                             <p>Paris</p>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="waiting-for-you">*/
/*             <div class="border"></div>*/
/*             <div class="container">*/
/*                 <h3>Ils vous attendent !</h3>*/
/* */
/*                 <ul class="people">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('images/valentin.png') }}" class="hvr-glow" alt="Photo de Valentin">*/
/*                             <p class="name">Valentin C.</p>*/
/*                             <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.*/
/*                                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('images/manu.png') }}" class="hvr-glow" alt="Photo d'Emmanuel">*/
/*                             <p class="name">Emmanuel G.</p>*/
/*                             <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.*/
/*                                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('images/toni.png') }}" class="hvr-glow" alt="Photo de Toni">*/
/*                             <p class="name">Toni O.</p>*/
/*                             <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.*/
/*                                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('images/alex.png') }}" class="hvr-glow" alt="Photo d'Alexandra">*/
/*                             <p class="name">Alexandra C.</p>*/
/*                             <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.*/
/*                                Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="sign-in">*/
/*             <div class="container">*/
/*                 <h3>Inscrivez-vous !</h3>*/
/*                 <p>L’inscription ne vous prendra pas plus de 30 secondes et vous permettra d’aller jusqu’au bout du monde !</p>*/
/*                 <a href="#" class="btn hvr-wobble-vertical hvr-fade">Inscription</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
