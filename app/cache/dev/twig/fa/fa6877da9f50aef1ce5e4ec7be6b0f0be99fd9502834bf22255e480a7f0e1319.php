<?php

/* @HWIOAuth/layout.html.twig */
class __TwigTemplate_3e77a8ed5e3b26f6dacd97213cf7c13c2ab70e775885200278def860ff7ba256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d080872202fe3d0e81f8efaaffff591f518843bbab65ec5d6c9f0959b86ec17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d080872202fe3d0e81f8efaaffff591f518843bbab65ec5d6c9f0959b86ec17b->enter($__internal_d080872202fe3d0e81f8efaaffff591f518843bbab65ec5d6c9f0959b86ec17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HWIOAuth/layout.html.twig"));

        // line 1
        echo "
            ";
        // line 2
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        
        $__internal_d080872202fe3d0e81f8efaaffff591f518843bbab65ec5d6c9f0959b86ec17b->leave($__internal_d080872202fe3d0e81f8efaaffff591f518843bbab65ec5d6c9f0959b86ec17b_prof);

    }

    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_4e9d0d833fe882ab5b8fe33e869d0bb7a702d07c5a10c449d4b5563243493e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9d0d833fe882ab5b8fe33e869d0bb7a702d07c5a10c449d4b5563243493e45->enter($__internal_4e9d0d833fe882ab5b8fe33e869d0bb7a702d07c5a10c449d4b5563243493e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 3
        echo "            ";
        
        $__internal_4e9d0d833fe882ab5b8fe33e869d0bb7a702d07c5a10c449d4b5563243493e45->leave($__internal_4e9d0d833fe882ab5b8fe33e869d0bb7a702d07c5a10c449d4b5563243493e45_prof);

    }

    public function getTemplateName()
    {
        return "@HWIOAuth/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
", "@HWIOAuth/layout.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\HWIOAuthBundle\\views\\layout.html.twig");
    }
}
