<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dbbb8b389f627ebb79d5eba832662e7b057f2004a86b77c0b8e3fd81708095da extends Twig_Template
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
        $__internal_2759d717864a4b327df228daa997cba2cba94703cd5030c79e9162474094ab5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2759d717864a4b327df228daa997cba2cba94703cd5030c79e9162474094ab5d->enter($__internal_2759d717864a4b327df228daa997cba2cba94703cd5030c79e9162474094ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2759d717864a4b327df228daa997cba2cba94703cd5030c79e9162474094ab5d->leave($__internal_2759d717864a4b327df228daa997cba2cba94703cd5030c79e9162474094ab5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2032182936997336c0f58eb36f6e9a5607feb82df309312b1e8b8b699b42ff00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2032182936997336c0f58eb36f6e9a5607feb82df309312b1e8b8b699b42ff00->enter($__internal_2032182936997336c0f58eb36f6e9a5607feb82df309312b1e8b8b699b42ff00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2032182936997336c0f58eb36f6e9a5607feb82df309312b1e8b8b699b42ff00->leave($__internal_2032182936997336c0f58eb36f6e9a5607feb82df309312b1e8b8b699b42ff00_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d75e6709273ef9b03a593ba95d879a2e4b0c5ee9c1d1a074837f81e0a23a9d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75e6709273ef9b03a593ba95d879a2e4b0c5ee9c1d1a074837f81e0a23a9d73->enter($__internal_d75e6709273ef9b03a593ba95d879a2e4b0c5ee9c1d1a074837f81e0a23a9d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d75e6709273ef9b03a593ba95d879a2e4b0c5ee9c1d1a074837f81e0a23a9d73->leave($__internal_d75e6709273ef9b03a593ba95d879a2e4b0c5ee9c1d1a074837f81e0a23a9d73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03afd0de766a5f328f1e59071b626ca42c2c7411c478d99ba045e57620fbdd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03afd0de766a5f328f1e59071b626ca42c2c7411c478d99ba045e57620fbdd86->enter($__internal_03afd0de766a5f328f1e59071b626ca42c2c7411c478d99ba045e57620fbdd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_03afd0de766a5f328f1e59071b626ca42c2c7411c478d99ba045e57620fbdd86->leave($__internal_03afd0de766a5f328f1e59071b626ca42c2c7411c478d99ba045e57620fbdd86_prof);

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
