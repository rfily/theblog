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
        $__internal_89fc767dd01ba6c349d7ed60dd3af48c16b9a0a84ee6bd14514226f2533837c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fc767dd01ba6c349d7ed60dd3af48c16b9a0a84ee6bd14514226f2533837c7->enter($__internal_89fc767dd01ba6c349d7ed60dd3af48c16b9a0a84ee6bd14514226f2533837c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89fc767dd01ba6c349d7ed60dd3af48c16b9a0a84ee6bd14514226f2533837c7->leave($__internal_89fc767dd01ba6c349d7ed60dd3af48c16b9a0a84ee6bd14514226f2533837c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b260f95a87c55c97021de166bd84cf4210109640f6e9ee2550dce3131b09278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b260f95a87c55c97021de166bd84cf4210109640f6e9ee2550dce3131b09278->enter($__internal_6b260f95a87c55c97021de166bd84cf4210109640f6e9ee2550dce3131b09278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b260f95a87c55c97021de166bd84cf4210109640f6e9ee2550dce3131b09278->leave($__internal_6b260f95a87c55c97021de166bd84cf4210109640f6e9ee2550dce3131b09278_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78517c01d52704e048a99658e84940b48393a58ad818a2add29b547111dc663f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78517c01d52704e048a99658e84940b48393a58ad818a2add29b547111dc663f->enter($__internal_78517c01d52704e048a99658e84940b48393a58ad818a2add29b547111dc663f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78517c01d52704e048a99658e84940b48393a58ad818a2add29b547111dc663f->leave($__internal_78517c01d52704e048a99658e84940b48393a58ad818a2add29b547111dc663f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7a8e317948b88215c8c3a26210725b92d6b96e013fdb54c76f785e51714d01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a8e317948b88215c8c3a26210725b92d6b96e013fdb54c76f785e51714d01c->enter($__internal_d7a8e317948b88215c8c3a26210725b92d6b96e013fdb54c76f785e51714d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7a8e317948b88215c8c3a26210725b92d6b96e013fdb54c76f785e51714d01c->leave($__internal_d7a8e317948b88215c8c3a26210725b92d6b96e013fdb54c76f785e51714d01c_prof);

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
