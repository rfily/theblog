<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_03ef67960328bb35691f153e3d7461f2f4da81df8ef88ec32038a05055b821d8 extends Twig_Template
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
        $__internal_fcc0ff54c5e25fa993eebd06f02fcc101c91e226ca292fe5944eab0e0106006a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc0ff54c5e25fa993eebd06f02fcc101c91e226ca292fe5944eab0e0106006a->enter($__internal_fcc0ff54c5e25fa993eebd06f02fcc101c91e226ca292fe5944eab0e0106006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fcc0ff54c5e25fa993eebd06f02fcc101c91e226ca292fe5944eab0e0106006a->leave($__internal_fcc0ff54c5e25fa993eebd06f02fcc101c91e226ca292fe5944eab0e0106006a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d167a9f03513f7197a544776dd7526f2537e0711f63fd388f9f6121decd878d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d167a9f03513f7197a544776dd7526f2537e0711f63fd388f9f6121decd878d1->enter($__internal_d167a9f03513f7197a544776dd7526f2537e0711f63fd388f9f6121decd878d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d167a9f03513f7197a544776dd7526f2537e0711f63fd388f9f6121decd878d1->leave($__internal_d167a9f03513f7197a544776dd7526f2537e0711f63fd388f9f6121decd878d1_prof);

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
