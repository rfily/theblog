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
        $__internal_40085e1e989e84f03d0e3d29f84de1f41a28e7db343a4b816f78ff3a807e436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40085e1e989e84f03d0e3d29f84de1f41a28e7db343a4b816f78ff3a807e436f->enter($__internal_40085e1e989e84f03d0e3d29f84de1f41a28e7db343a4b816f78ff3a807e436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40085e1e989e84f03d0e3d29f84de1f41a28e7db343a4b816f78ff3a807e436f->leave($__internal_40085e1e989e84f03d0e3d29f84de1f41a28e7db343a4b816f78ff3a807e436f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d89c8eb41d21e35ed5f3f64d0450ea9fbf248dee265c6bbb2bce6d9b4e85ae62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89c8eb41d21e35ed5f3f64d0450ea9fbf248dee265c6bbb2bce6d9b4e85ae62->enter($__internal_d89c8eb41d21e35ed5f3f64d0450ea9fbf248dee265c6bbb2bce6d9b4e85ae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d89c8eb41d21e35ed5f3f64d0450ea9fbf248dee265c6bbb2bce6d9b4e85ae62->leave($__internal_d89c8eb41d21e35ed5f3f64d0450ea9fbf248dee265c6bbb2bce6d9b4e85ae62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_533b4209445b413dd1ac57e506abc412db6f644b4900d43e5f5b6fc73ce10416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b4209445b413dd1ac57e506abc412db6f644b4900d43e5f5b6fc73ce10416->enter($__internal_533b4209445b413dd1ac57e506abc412db6f644b4900d43e5f5b6fc73ce10416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_533b4209445b413dd1ac57e506abc412db6f644b4900d43e5f5b6fc73ce10416->leave($__internal_533b4209445b413dd1ac57e506abc412db6f644b4900d43e5f5b6fc73ce10416_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6a937191d36fcd066fa9f7f709cf1046118905116d95f387bf7849f5077b30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a937191d36fcd066fa9f7f709cf1046118905116d95f387bf7849f5077b30a->enter($__internal_d6a937191d36fcd066fa9f7f709cf1046118905116d95f387bf7849f5077b30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6a937191d36fcd066fa9f7f709cf1046118905116d95f387bf7849f5077b30a->leave($__internal_d6a937191d36fcd066fa9f7f709cf1046118905116d95f387bf7849f5077b30a_prof);

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
