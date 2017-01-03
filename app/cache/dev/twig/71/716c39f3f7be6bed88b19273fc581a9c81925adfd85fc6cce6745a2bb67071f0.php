<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_dba9568dc62141af297e2ba217d1a420e98141d8506347dd1d7ab09e96c88c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67685957e43aa2d5cd1ca0d1317320995d4a512ea6a98621d288d532bef8695d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67685957e43aa2d5cd1ca0d1317320995d4a512ea6a98621d288d532bef8695d->enter($__internal_67685957e43aa2d5cd1ca0d1317320995d4a512ea6a98621d288d532bef8695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67685957e43aa2d5cd1ca0d1317320995d4a512ea6a98621d288d532bef8695d->leave($__internal_67685957e43aa2d5cd1ca0d1317320995d4a512ea6a98621d288d532bef8695d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_417311c2ccf04ac04ffb680be4ae2ac1071d37a8874b236ebebc07734a45de1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417311c2ccf04ac04ffb680be4ae2ac1071d37a8874b236ebebc07734a45de1a->enter($__internal_417311c2ccf04ac04ffb680be4ae2ac1071d37a8874b236ebebc07734a45de1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_417311c2ccf04ac04ffb680be4ae2ac1071d37a8874b236ebebc07734a45de1a->leave($__internal_417311c2ccf04ac04ffb680be4ae2ac1071d37a8874b236ebebc07734a45de1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
