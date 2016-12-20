<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b4f6fdced7f6f7405eceac701031e318a46aa45858956b8b79fce7c47d820c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6362b304c999048ea46a7885f474b11c22e7511574d3fe8a686545801466542f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6362b304c999048ea46a7885f474b11c22e7511574d3fe8a686545801466542f->enter($__internal_6362b304c999048ea46a7885f474b11c22e7511574d3fe8a686545801466542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6362b304c999048ea46a7885f474b11c22e7511574d3fe8a686545801466542f->leave($__internal_6362b304c999048ea46a7885f474b11c22e7511574d3fe8a686545801466542f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3637d5dab6b3dd707a466a44db84bf7b38839aec832a61e95bcf6629f2c1b517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3637d5dab6b3dd707a466a44db84bf7b38839aec832a61e95bcf6629f2c1b517->enter($__internal_3637d5dab6b3dd707a466a44db84bf7b38839aec832a61e95bcf6629f2c1b517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3637d5dab6b3dd707a466a44db84bf7b38839aec832a61e95bcf6629f2c1b517->leave($__internal_3637d5dab6b3dd707a466a44db84bf7b38839aec832a61e95bcf6629f2c1b517_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18164a61b1a97587919b314b71b43636134acc9f0dcb85bfa65a79f7ad15cadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18164a61b1a97587919b314b71b43636134acc9f0dcb85bfa65a79f7ad15cadd->enter($__internal_18164a61b1a97587919b314b71b43636134acc9f0dcb85bfa65a79f7ad15cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18164a61b1a97587919b314b71b43636134acc9f0dcb85bfa65a79f7ad15cadd->leave($__internal_18164a61b1a97587919b314b71b43636134acc9f0dcb85bfa65a79f7ad15cadd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_152c9a303d02ae3e2839c35e009647b7e9cec3dd057bf2077cec77f737a0dd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152c9a303d02ae3e2839c35e009647b7e9cec3dd057bf2077cec77f737a0dd97->enter($__internal_152c9a303d02ae3e2839c35e009647b7e9cec3dd057bf2077cec77f737a0dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_152c9a303d02ae3e2839c35e009647b7e9cec3dd057bf2077cec77f737a0dd97->leave($__internal_152c9a303d02ae3e2839c35e009647b7e9cec3dd057bf2077cec77f737a0dd97_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
