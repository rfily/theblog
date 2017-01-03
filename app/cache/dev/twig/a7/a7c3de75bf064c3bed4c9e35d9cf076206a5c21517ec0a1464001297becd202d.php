<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_27fda71f8ae0443fec130d67d8c75689d65e289fb4ff3cccaff8b29eada21cc4 extends Twig_Template
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
        $__internal_dfe4a5b230b099106cd3830fc15e9d3915876b8bfc6ee3b439cc9cd4926b58e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe4a5b230b099106cd3830fc15e9d3915876b8bfc6ee3b439cc9cd4926b58e1->enter($__internal_dfe4a5b230b099106cd3830fc15e9d3915876b8bfc6ee3b439cc9cd4926b58e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe4a5b230b099106cd3830fc15e9d3915876b8bfc6ee3b439cc9cd4926b58e1->leave($__internal_dfe4a5b230b099106cd3830fc15e9d3915876b8bfc6ee3b439cc9cd4926b58e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a209758dab76e07925acd185e9633d2368926da9f42fba1a38a4bb9737b5dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a209758dab76e07925acd185e9633d2368926da9f42fba1a38a4bb9737b5dce->enter($__internal_4a209758dab76e07925acd185e9633d2368926da9f42fba1a38a4bb9737b5dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a209758dab76e07925acd185e9633d2368926da9f42fba1a38a4bb9737b5dce->leave($__internal_4a209758dab76e07925acd185e9633d2368926da9f42fba1a38a4bb9737b5dce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7263826b25415db8bd39d922a3ddb856b001a4546207538d491047982db6ae0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7263826b25415db8bd39d922a3ddb856b001a4546207538d491047982db6ae0f->enter($__internal_7263826b25415db8bd39d922a3ddb856b001a4546207538d491047982db6ae0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7263826b25415db8bd39d922a3ddb856b001a4546207538d491047982db6ae0f->leave($__internal_7263826b25415db8bd39d922a3ddb856b001a4546207538d491047982db6ae0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_669bfcab2ed83cf1d46a49080d8c4bf4bb2bfce4bb562cd5b86bbddf47dc6a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669bfcab2ed83cf1d46a49080d8c4bf4bb2bfce4bb562cd5b86bbddf47dc6a98->enter($__internal_669bfcab2ed83cf1d46a49080d8c4bf4bb2bfce4bb562cd5b86bbddf47dc6a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_669bfcab2ed83cf1d46a49080d8c4bf4bb2bfce4bb562cd5b86bbddf47dc6a98->leave($__internal_669bfcab2ed83cf1d46a49080d8c4bf4bb2bfce4bb562cd5b86bbddf47dc6a98_prof);

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
