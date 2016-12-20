<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_53be18de4f8714bb271ab03cfdec8dadfbd33e906655394c914efd54f6013d6a extends Twig_Template
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
        $__internal_b774be8edb757985eb10bb26a9c3fac88d8e5d7a6f05fcd572be2b538214f1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b774be8edb757985eb10bb26a9c3fac88d8e5d7a6f05fcd572be2b538214f1cb->enter($__internal_b774be8edb757985eb10bb26a9c3fac88d8e5d7a6f05fcd572be2b538214f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b774be8edb757985eb10bb26a9c3fac88d8e5d7a6f05fcd572be2b538214f1cb->leave($__internal_b774be8edb757985eb10bb26a9c3fac88d8e5d7a6f05fcd572be2b538214f1cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c952bb51bb7c9891728c9d9a0b036d0bbf51f27419f6bd3aca8f904b2cc6e703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c952bb51bb7c9891728c9d9a0b036d0bbf51f27419f6bd3aca8f904b2cc6e703->enter($__internal_c952bb51bb7c9891728c9d9a0b036d0bbf51f27419f6bd3aca8f904b2cc6e703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c952bb51bb7c9891728c9d9a0b036d0bbf51f27419f6bd3aca8f904b2cc6e703->leave($__internal_c952bb51bb7c9891728c9d9a0b036d0bbf51f27419f6bd3aca8f904b2cc6e703_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1228693787be8c4bddc17e86a52205178a8794d952de53018caec435ef09b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1228693787be8c4bddc17e86a52205178a8794d952de53018caec435ef09b1d->enter($__internal_d1228693787be8c4bddc17e86a52205178a8794d952de53018caec435ef09b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1228693787be8c4bddc17e86a52205178a8794d952de53018caec435ef09b1d->leave($__internal_d1228693787be8c4bddc17e86a52205178a8794d952de53018caec435ef09b1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7908543507459455447444d45f1baf93eba4c0b04ddb47e36bb8cc56a87c2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7908543507459455447444d45f1baf93eba4c0b04ddb47e36bb8cc56a87c2ff->enter($__internal_c7908543507459455447444d45f1baf93eba4c0b04ddb47e36bb8cc56a87c2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c7908543507459455447444d45f1baf93eba4c0b04ddb47e36bb8cc56a87c2ff->leave($__internal_c7908543507459455447444d45f1baf93eba4c0b04ddb47e36bb8cc56a87c2ff_prof);

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
