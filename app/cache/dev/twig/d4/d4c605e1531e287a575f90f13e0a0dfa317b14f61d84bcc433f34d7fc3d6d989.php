<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4d930393134b0cd71f18ead74a9db428ca25220b5b695a45915f8883a2f218c0 extends Twig_Template
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
        $__internal_67170306ca72b7038acc324fe90dbaf93ceabff77ff338bcbe381e11658115b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67170306ca72b7038acc324fe90dbaf93ceabff77ff338bcbe381e11658115b0->enter($__internal_67170306ca72b7038acc324fe90dbaf93ceabff77ff338bcbe381e11658115b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_67170306ca72b7038acc324fe90dbaf93ceabff77ff338bcbe381e11658115b0->leave($__internal_67170306ca72b7038acc324fe90dbaf93ceabff77ff338bcbe381e11658115b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ca457297a447f3ed283c712eebd08ccd5a939ff4e31ef87bddd218eb4be156a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca457297a447f3ed283c712eebd08ccd5a939ff4e31ef87bddd218eb4be156a->enter($__internal_4ca457297a447f3ed283c712eebd08ccd5a939ff4e31ef87bddd218eb4be156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4ca457297a447f3ed283c712eebd08ccd5a939ff4e31ef87bddd218eb4be156a->leave($__internal_4ca457297a447f3ed283c712eebd08ccd5a939ff4e31ef87bddd218eb4be156a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
