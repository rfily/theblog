<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_14cd45ff68481d108fef53a925c51c14a5f135715dc121c8ba22792b83022ea2 extends Twig_Template
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
        $__internal_adec6d3e7581aef3fe44652bade161387061c55eebaf5aa27ca3d127bde80bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adec6d3e7581aef3fe44652bade161387061c55eebaf5aa27ca3d127bde80bd1->enter($__internal_adec6d3e7581aef3fe44652bade161387061c55eebaf5aa27ca3d127bde80bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_adec6d3e7581aef3fe44652bade161387061c55eebaf5aa27ca3d127bde80bd1->leave($__internal_adec6d3e7581aef3fe44652bade161387061c55eebaf5aa27ca3d127bde80bd1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_36f586fdf35426d09fdbe605ff256c0b07445fe48a21de845a3b5e078ebd3b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f586fdf35426d09fdbe605ff256c0b07445fe48a21de845a3b5e078ebd3b15->enter($__internal_36f586fdf35426d09fdbe605ff256c0b07445fe48a21de845a3b5e078ebd3b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_36f586fdf35426d09fdbe605ff256c0b07445fe48a21de845a3b5e078ebd3b15->leave($__internal_36f586fdf35426d09fdbe605ff256c0b07445fe48a21de845a3b5e078ebd3b15_prof);

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
