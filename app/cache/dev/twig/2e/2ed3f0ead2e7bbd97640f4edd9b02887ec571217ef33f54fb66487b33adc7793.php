<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_40daccb56de6e74991ef72d9835183c30c6a4d1fb9fc6840b7d8866e8c7a76b8 extends Twig_Template
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
        $__internal_5abfbfe047d136275c83e17f07d8d7d4739008182bdb32fe3d43a3bca4a10721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abfbfe047d136275c83e17f07d8d7d4739008182bdb32fe3d43a3bca4a10721->enter($__internal_5abfbfe047d136275c83e17f07d8d7d4739008182bdb32fe3d43a3bca4a10721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abfbfe047d136275c83e17f07d8d7d4739008182bdb32fe3d43a3bca4a10721->leave($__internal_5abfbfe047d136275c83e17f07d8d7d4739008182bdb32fe3d43a3bca4a10721_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52e090c730be640ff4bdc5b2c002898fdde106877518e0522c757a89994dfa23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e090c730be640ff4bdc5b2c002898fdde106877518e0522c757a89994dfa23->enter($__internal_52e090c730be640ff4bdc5b2c002898fdde106877518e0522c757a89994dfa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_52e090c730be640ff4bdc5b2c002898fdde106877518e0522c757a89994dfa23->leave($__internal_52e090c730be640ff4bdc5b2c002898fdde106877518e0522c757a89994dfa23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c0ed02998e3509a830f8ccc3a323ba7693ac1323717074dd423ea296abf380f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0ed02998e3509a830f8ccc3a323ba7693ac1323717074dd423ea296abf380f->enter($__internal_8c0ed02998e3509a830f8ccc3a323ba7693ac1323717074dd423ea296abf380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8c0ed02998e3509a830f8ccc3a323ba7693ac1323717074dd423ea296abf380f->leave($__internal_8c0ed02998e3509a830f8ccc3a323ba7693ac1323717074dd423ea296abf380f_prof);

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
