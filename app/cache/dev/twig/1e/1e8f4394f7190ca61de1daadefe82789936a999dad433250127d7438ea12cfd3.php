<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b7c9ef5fd681f6517220c26f14f0a0288c82ff682deab97dfa983faf30c44d90 extends Twig_Template
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
        $__internal_55824bb4d2545cb37916159edddf49ada6784a8dbc990be5a7c4f6b48ef06593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55824bb4d2545cb37916159edddf49ada6784a8dbc990be5a7c4f6b48ef06593->enter($__internal_55824bb4d2545cb37916159edddf49ada6784a8dbc990be5a7c4f6b48ef06593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55824bb4d2545cb37916159edddf49ada6784a8dbc990be5a7c4f6b48ef06593->leave($__internal_55824bb4d2545cb37916159edddf49ada6784a8dbc990be5a7c4f6b48ef06593_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1ed650b985b5f2797767a97a9c307d982e830f4b850943d4c0e6cde48f09cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ed650b985b5f2797767a97a9c307d982e830f4b850943d4c0e6cde48f09cd4->enter($__internal_f1ed650b985b5f2797767a97a9c307d982e830f4b850943d4c0e6cde48f09cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1ed650b985b5f2797767a97a9c307d982e830f4b850943d4c0e6cde48f09cd4->leave($__internal_f1ed650b985b5f2797767a97a9c307d982e830f4b850943d4c0e6cde48f09cd4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25a9a78a54114d51a1591341360feb2516410061fadc31d948a9a1811a991499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a9a78a54114d51a1591341360feb2516410061fadc31d948a9a1811a991499->enter($__internal_25a9a78a54114d51a1591341360feb2516410061fadc31d948a9a1811a991499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25a9a78a54114d51a1591341360feb2516410061fadc31d948a9a1811a991499->leave($__internal_25a9a78a54114d51a1591341360feb2516410061fadc31d948a9a1811a991499_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f540beb0a415f74862ac14fa05a6440eecabb823c2e72643d3867b22a0560feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f540beb0a415f74862ac14fa05a6440eecabb823c2e72643d3867b22a0560feb->enter($__internal_f540beb0a415f74862ac14fa05a6440eecabb823c2e72643d3867b22a0560feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f540beb0a415f74862ac14fa05a6440eecabb823c2e72643d3867b22a0560feb->leave($__internal_f540beb0a415f74862ac14fa05a6440eecabb823c2e72643d3867b22a0560feb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
