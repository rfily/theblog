<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_fda99e835d6fbb364387114e8da10aa12426526d3ab4abd6f566d10453dafc23 extends Twig_Template
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
        $__internal_4c173a0fabf9b42293326d40d545a6a40b8f33ce7610c4c701777273faf028fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c173a0fabf9b42293326d40d545a6a40b8f33ce7610c4c701777273faf028fd->enter($__internal_4c173a0fabf9b42293326d40d545a6a40b8f33ce7610c4c701777273faf028fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "
            ";
        // line 2
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        
        $__internal_4c173a0fabf9b42293326d40d545a6a40b8f33ce7610c4c701777273faf028fd->leave($__internal_4c173a0fabf9b42293326d40d545a6a40b8f33ce7610c4c701777273faf028fd_prof);

    }

    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_18e45eff596c6983c87c57d96b215bf471ad1c5d77a89cf1ee5a4fba30467324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e45eff596c6983c87c57d96b215bf471ad1c5d77a89cf1ee5a4fba30467324->enter($__internal_18e45eff596c6983c87c57d96b215bf471ad1c5d77a89cf1ee5a4fba30467324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 3
        echo "            ";
        
        $__internal_18e45eff596c6983c87c57d96b215bf471ad1c5d77a89cf1ee5a4fba30467324->leave($__internal_18e45eff596c6983c87c57d96b215bf471ad1c5d77a89cf1ee5a4fba30467324_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
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
", "HWIOAuthBundle::layout.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
