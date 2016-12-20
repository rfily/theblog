<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4a3c8a9d6aabac65acfc77f1f5d1775ce0966a239b9786ae32d54a7a77f722d7 extends Twig_Template
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
        $__internal_3ab8466a333aad6fe62f02dcb56d31854a17576e7f32647f699b2a14ead995d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab8466a333aad6fe62f02dcb56d31854a17576e7f32647f699b2a14ead995d1->enter($__internal_3ab8466a333aad6fe62f02dcb56d31854a17576e7f32647f699b2a14ead995d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab8466a333aad6fe62f02dcb56d31854a17576e7f32647f699b2a14ead995d1->leave($__internal_3ab8466a333aad6fe62f02dcb56d31854a17576e7f32647f699b2a14ead995d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f309f5b0e0b42f0c1a6ba8d1c57aec6dca64b0e0338c4bd687d97d716028fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f309f5b0e0b42f0c1a6ba8d1c57aec6dca64b0e0338c4bd687d97d716028fb8->enter($__internal_2f309f5b0e0b42f0c1a6ba8d1c57aec6dca64b0e0338c4bd687d97d716028fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f309f5b0e0b42f0c1a6ba8d1c57aec6dca64b0e0338c4bd687d97d716028fb8->leave($__internal_2f309f5b0e0b42f0c1a6ba8d1c57aec6dca64b0e0338c4bd687d97d716028fb8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1abfdf25cacccf7b5c314d8e45f821d4ac64e8deb1f793f638be6dd65f03792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1abfdf25cacccf7b5c314d8e45f821d4ac64e8deb1f793f638be6dd65f03792->enter($__internal_e1abfdf25cacccf7b5c314d8e45f821d4ac64e8deb1f793f638be6dd65f03792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1abfdf25cacccf7b5c314d8e45f821d4ac64e8deb1f793f638be6dd65f03792->leave($__internal_e1abfdf25cacccf7b5c314d8e45f821d4ac64e8deb1f793f638be6dd65f03792_prof);

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
