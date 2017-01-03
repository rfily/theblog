<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2d0961f8ccf4c39f70a004fe1f59a187d9bd2b575224a6fd0fdb8225b2e1ae4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c5106118c0dc133673401394da49d18b029d3878f654bd89238b84fc3f4b2646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5106118c0dc133673401394da49d18b029d3878f654bd89238b84fc3f4b2646->enter($__internal_c5106118c0dc133673401394da49d18b029d3878f654bd89238b84fc3f4b2646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5106118c0dc133673401394da49d18b029d3878f654bd89238b84fc3f4b2646->leave($__internal_c5106118c0dc133673401394da49d18b029d3878f654bd89238b84fc3f4b2646_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb7a28d7c3bee94079c757c2f5b1f384060b34c294cef56d16ad81825f16336a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7a28d7c3bee94079c757c2f5b1f384060b34c294cef56d16ad81825f16336a->enter($__internal_bb7a28d7c3bee94079c757c2f5b1f384060b34c294cef56d16ad81825f16336a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb7a28d7c3bee94079c757c2f5b1f384060b34c294cef56d16ad81825f16336a->leave($__internal_bb7a28d7c3bee94079c757c2f5b1f384060b34c294cef56d16ad81825f16336a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5233897fcf7262228468722999f7b9c8a6f44b44584f8bbaee84b902e5ede005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5233897fcf7262228468722999f7b9c8a6f44b44584f8bbaee84b902e5ede005->enter($__internal_5233897fcf7262228468722999f7b9c8a6f44b44584f8bbaee84b902e5ede005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5233897fcf7262228468722999f7b9c8a6f44b44584f8bbaee84b902e5ede005->leave($__internal_5233897fcf7262228468722999f7b9c8a6f44b44584f8bbaee84b902e5ede005_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5fb7db912c8922424485ba7ba815bde3e90c8b99017f70aa4e7e7d391a30536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fb7db912c8922424485ba7ba815bde3e90c8b99017f70aa4e7e7d391a30536->enter($__internal_c5fb7db912c8922424485ba7ba815bde3e90c8b99017f70aa4e7e7d391a30536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c5fb7db912c8922424485ba7ba815bde3e90c8b99017f70aa4e7e7d391a30536->leave($__internal_c5fb7db912c8922424485ba7ba815bde3e90c8b99017f70aa4e7e7d391a30536_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
