<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_744a5464a70e5dabda61ce7b029055a2bea8b1ff2a01acbd7bd32162aab1f5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_265f21c9bfdad34454e187de97e5299a6d60788bdf006dd221e0bc44afc188f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265f21c9bfdad34454e187de97e5299a6d60788bdf006dd221e0bc44afc188f4->enter($__internal_265f21c9bfdad34454e187de97e5299a6d60788bdf006dd221e0bc44afc188f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265f21c9bfdad34454e187de97e5299a6d60788bdf006dd221e0bc44afc188f4->leave($__internal_265f21c9bfdad34454e187de97e5299a6d60788bdf006dd221e0bc44afc188f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76a24ebff77b3f08be0fe7769b671177649d502cc0e8f6a91ed75e597be481be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a24ebff77b3f08be0fe7769b671177649d502cc0e8f6a91ed75e597be481be->enter($__internal_76a24ebff77b3f08be0fe7769b671177649d502cc0e8f6a91ed75e597be481be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_76a24ebff77b3f08be0fe7769b671177649d502cc0e8f6a91ed75e597be481be->leave($__internal_76a24ebff77b3f08be0fe7769b671177649d502cc0e8f6a91ed75e597be481be_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb56554be5c9fcd8692a126b58c91d9ded80810a6a6c7ebeb05b2ef83215d685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb56554be5c9fcd8692a126b58c91d9ded80810a6a6c7ebeb05b2ef83215d685->enter($__internal_cb56554be5c9fcd8692a126b58c91d9ded80810a6a6c7ebeb05b2ef83215d685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb56554be5c9fcd8692a126b58c91d9ded80810a6a6c7ebeb05b2ef83215d685->leave($__internal_cb56554be5c9fcd8692a126b58c91d9ded80810a6a6c7ebeb05b2ef83215d685_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
