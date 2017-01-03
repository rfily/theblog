<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_83f25c8cf8ab8539c42397809d93e50a43319262a1384bcff25a5a3e03c05bac extends Twig_Template
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
        $__internal_804c54cdbd9ad7b43456f66086df11c87ec96a54e8e5c483190de6da1f44dab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804c54cdbd9ad7b43456f66086df11c87ec96a54e8e5c483190de6da1f44dab9->enter($__internal_804c54cdbd9ad7b43456f66086df11c87ec96a54e8e5c483190de6da1f44dab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804c54cdbd9ad7b43456f66086df11c87ec96a54e8e5c483190de6da1f44dab9->leave($__internal_804c54cdbd9ad7b43456f66086df11c87ec96a54e8e5c483190de6da1f44dab9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c21b28c09c2bab2bf973350451010703d2afba07459cdb091fc1b94b847c2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c21b28c09c2bab2bf973350451010703d2afba07459cdb091fc1b94b847c2c2->enter($__internal_0c21b28c09c2bab2bf973350451010703d2afba07459cdb091fc1b94b847c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c21b28c09c2bab2bf973350451010703d2afba07459cdb091fc1b94b847c2c2->leave($__internal_0c21b28c09c2bab2bf973350451010703d2afba07459cdb091fc1b94b847c2c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fdcf3c6187d453f6fc04c05ec99742386c5eb3ece33e9a695db415650802239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdcf3c6187d453f6fc04c05ec99742386c5eb3ece33e9a695db415650802239->enter($__internal_4fdcf3c6187d453f6fc04c05ec99742386c5eb3ece33e9a695db415650802239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4fdcf3c6187d453f6fc04c05ec99742386c5eb3ece33e9a695db415650802239->leave($__internal_4fdcf3c6187d453f6fc04c05ec99742386c5eb3ece33e9a695db415650802239_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb5a677baf342c426f2188ac9bf57e4c2fcca84b80c34bea191d481d1d252363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5a677baf342c426f2188ac9bf57e4c2fcca84b80c34bea191d481d1d252363->enter($__internal_eb5a677baf342c426f2188ac9bf57e4c2fcca84b80c34bea191d481d1d252363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb5a677baf342c426f2188ac9bf57e4c2fcca84b80c34bea191d481d1d252363->leave($__internal_eb5a677baf342c426f2188ac9bf57e4c2fcca84b80c34bea191d481d1d252363_prof);

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
