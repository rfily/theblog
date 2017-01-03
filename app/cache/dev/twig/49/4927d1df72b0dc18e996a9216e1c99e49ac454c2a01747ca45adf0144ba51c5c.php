<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_58079fcfb673ae767b32cd95f716249b3180cd6e715a50d7c20370f490312560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aedb62680427b6a10ed635774f0f5f5b11b79cc1c322becd0240c53a5b301f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedb62680427b6a10ed635774f0f5f5b11b79cc1c322becd0240c53a5b301f10->enter($__internal_aedb62680427b6a10ed635774f0f5f5b11b79cc1c322becd0240c53a5b301f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedb62680427b6a10ed635774f0f5f5b11b79cc1c322becd0240c53a5b301f10->leave($__internal_aedb62680427b6a10ed635774f0f5f5b11b79cc1c322becd0240c53a5b301f10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8bf7032e03c0713ce752134d32ef9a751632eff4a9a4069e2ef1bf5ebfa9809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bf7032e03c0713ce752134d32ef9a751632eff4a9a4069e2ef1bf5ebfa9809->enter($__internal_e8bf7032e03c0713ce752134d32ef9a751632eff4a9a4069e2ef1bf5ebfa9809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e8bf7032e03c0713ce752134d32ef9a751632eff4a9a4069e2ef1bf5ebfa9809->leave($__internal_e8bf7032e03c0713ce752134d32ef9a751632eff4a9a4069e2ef1bf5ebfa9809_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_898d1046f47d58c907f40c4ba0ee9e2bf3a8b18db0fe65bd0afedc4ee6ba177d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898d1046f47d58c907f40c4ba0ee9e2bf3a8b18db0fe65bd0afedc4ee6ba177d->enter($__internal_898d1046f47d58c907f40c4ba0ee9e2bf3a8b18db0fe65bd0afedc4ee6ba177d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_898d1046f47d58c907f40c4ba0ee9e2bf3a8b18db0fe65bd0afedc4ee6ba177d->leave($__internal_898d1046f47d58c907f40c4ba0ee9e2bf3a8b18db0fe65bd0afedc4ee6ba177d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
