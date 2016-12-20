<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_287405067da240d381739e14781a166b29f2af737d424c9bd94208669709ac81 extends Twig_Template
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
        $__internal_20e63b28e43f3ab4a1e8b52be8aa97cef58f4d8dc6d8f0e0ceb189a219df88b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e63b28e43f3ab4a1e8b52be8aa97cef58f4d8dc6d8f0e0ceb189a219df88b6->enter($__internal_20e63b28e43f3ab4a1e8b52be8aa97cef58f4d8dc6d8f0e0ceb189a219df88b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e63b28e43f3ab4a1e8b52be8aa97cef58f4d8dc6d8f0e0ceb189a219df88b6->leave($__internal_20e63b28e43f3ab4a1e8b52be8aa97cef58f4d8dc6d8f0e0ceb189a219df88b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_200a77705ef3ee0fb4064bd634e8a77b1c24d5b6b3d39606c8ac5bc48d2b0ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200a77705ef3ee0fb4064bd634e8a77b1c24d5b6b3d39606c8ac5bc48d2b0ec6->enter($__internal_200a77705ef3ee0fb4064bd634e8a77b1c24d5b6b3d39606c8ac5bc48d2b0ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_200a77705ef3ee0fb4064bd634e8a77b1c24d5b6b3d39606c8ac5bc48d2b0ec6->leave($__internal_200a77705ef3ee0fb4064bd634e8a77b1c24d5b6b3d39606c8ac5bc48d2b0ec6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58ffdaea128e8e997c5dc54871e2eab730560e2df14f955f212004a5e8b0936c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ffdaea128e8e997c5dc54871e2eab730560e2df14f955f212004a5e8b0936c->enter($__internal_58ffdaea128e8e997c5dc54871e2eab730560e2df14f955f212004a5e8b0936c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58ffdaea128e8e997c5dc54871e2eab730560e2df14f955f212004a5e8b0936c->leave($__internal_58ffdaea128e8e997c5dc54871e2eab730560e2df14f955f212004a5e8b0936c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_658234642049536d0657d33f1012bf791216b941b45de12b8d7f7c6d431dce38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658234642049536d0657d33f1012bf791216b941b45de12b8d7f7c6d431dce38->enter($__internal_658234642049536d0657d33f1012bf791216b941b45de12b8d7f7c6d431dce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_658234642049536d0657d33f1012bf791216b941b45de12b8d7f7c6d431dce38->leave($__internal_658234642049536d0657d33f1012bf791216b941b45de12b8d7f7c6d431dce38_prof);

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
