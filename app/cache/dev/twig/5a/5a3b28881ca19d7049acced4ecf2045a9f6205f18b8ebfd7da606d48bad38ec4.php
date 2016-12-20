<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0e4789e5462aa4ac19dc6a0ae41bbd68f8109e11740fc22bb82ba6e928e9bf92 extends Twig_Template
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
        $__internal_2f523b7222f322a9f9d79e257cb22cb5eca3287b0e1f3467f806f93fcc1f4e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f523b7222f322a9f9d79e257cb22cb5eca3287b0e1f3467f806f93fcc1f4e3b->enter($__internal_2f523b7222f322a9f9d79e257cb22cb5eca3287b0e1f3467f806f93fcc1f4e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f523b7222f322a9f9d79e257cb22cb5eca3287b0e1f3467f806f93fcc1f4e3b->leave($__internal_2f523b7222f322a9f9d79e257cb22cb5eca3287b0e1f3467f806f93fcc1f4e3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1691a9d52f6e3cf2eeca7a6968e74050e7c4b4d9b069ef0c4883421778c5faf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1691a9d52f6e3cf2eeca7a6968e74050e7c4b4d9b069ef0c4883421778c5faf7->enter($__internal_1691a9d52f6e3cf2eeca7a6968e74050e7c4b4d9b069ef0c4883421778c5faf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1691a9d52f6e3cf2eeca7a6968e74050e7c4b4d9b069ef0c4883421778c5faf7->leave($__internal_1691a9d52f6e3cf2eeca7a6968e74050e7c4b4d9b069ef0c4883421778c5faf7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c6e2a6a1a2c94e546b53b77e1c07ac3689342a87ec1e99b08a81b4b90875b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6e2a6a1a2c94e546b53b77e1c07ac3689342a87ec1e99b08a81b4b90875b13->enter($__internal_8c6e2a6a1a2c94e546b53b77e1c07ac3689342a87ec1e99b08a81b4b90875b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c6e2a6a1a2c94e546b53b77e1c07ac3689342a87ec1e99b08a81b4b90875b13->leave($__internal_8c6e2a6a1a2c94e546b53b77e1c07ac3689342a87ec1e99b08a81b4b90875b13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed721217a54d51fc1b4fae9aecaf832ff7f6b8fec237cb3fcf9b503b2489b5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed721217a54d51fc1b4fae9aecaf832ff7f6b8fec237cb3fcf9b503b2489b5be->enter($__internal_ed721217a54d51fc1b4fae9aecaf832ff7f6b8fec237cb3fcf9b503b2489b5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed721217a54d51fc1b4fae9aecaf832ff7f6b8fec237cb3fcf9b503b2489b5be->leave($__internal_ed721217a54d51fc1b4fae9aecaf832ff7f6b8fec237cb3fcf9b503b2489b5be_prof);

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
