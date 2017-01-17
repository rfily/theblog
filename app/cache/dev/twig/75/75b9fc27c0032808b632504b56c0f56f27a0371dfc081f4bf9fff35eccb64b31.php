<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8fc92b260d188948088aeaac7376dd3eaefe32ee1c0749715967043fc84c8397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_83e8c1c076fe6563717573384b98a0ee8a21489edc71966582329b92a11674e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e8c1c076fe6563717573384b98a0ee8a21489edc71966582329b92a11674e7->enter($__internal_83e8c1c076fe6563717573384b98a0ee8a21489edc71966582329b92a11674e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e8c1c076fe6563717573384b98a0ee8a21489edc71966582329b92a11674e7->leave($__internal_83e8c1c076fe6563717573384b98a0ee8a21489edc71966582329b92a11674e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34342e4834dd6583d6d52b2ae372c459272406d4601c90fc091666800d96ea7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34342e4834dd6583d6d52b2ae372c459272406d4601c90fc091666800d96ea7d->enter($__internal_34342e4834dd6583d6d52b2ae372c459272406d4601c90fc091666800d96ea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34342e4834dd6583d6d52b2ae372c459272406d4601c90fc091666800d96ea7d->leave($__internal_34342e4834dd6583d6d52b2ae372c459272406d4601c90fc091666800d96ea7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b62589022e92967e7645473beb8da12f27c065e471b15a8a26e16bf381f85fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b62589022e92967e7645473beb8da12f27c065e471b15a8a26e16bf381f85fb->enter($__internal_7b62589022e92967e7645473beb8da12f27c065e471b15a8a26e16bf381f85fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b62589022e92967e7645473beb8da12f27c065e471b15a8a26e16bf381f85fb->leave($__internal_7b62589022e92967e7645473beb8da12f27c065e471b15a8a26e16bf381f85fb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86dacf23549fb4b2e8ad012fd89ef23b49af1c6f1f7664d1aa3d1aafcf21c9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86dacf23549fb4b2e8ad012fd89ef23b49af1c6f1f7664d1aa3d1aafcf21c9c3->enter($__internal_86dacf23549fb4b2e8ad012fd89ef23b49af1c6f1f7664d1aa3d1aafcf21c9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_86dacf23549fb4b2e8ad012fd89ef23b49af1c6f1f7664d1aa3d1aafcf21c9c3->leave($__internal_86dacf23549fb4b2e8ad012fd89ef23b49af1c6f1f7664d1aa3d1aafcf21c9c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
