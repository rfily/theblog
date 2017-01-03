<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a1166a7b39980fd946c47516bac8a417259930daa810ba78747d880ff31d3a7f extends Twig_Template
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
        $__internal_7d742b3edb86dd53c65c4070ccd62a368892b664b630612401a30dfcb8a84cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d742b3edb86dd53c65c4070ccd62a368892b664b630612401a30dfcb8a84cd1->enter($__internal_7d742b3edb86dd53c65c4070ccd62a368892b664b630612401a30dfcb8a84cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d742b3edb86dd53c65c4070ccd62a368892b664b630612401a30dfcb8a84cd1->leave($__internal_7d742b3edb86dd53c65c4070ccd62a368892b664b630612401a30dfcb8a84cd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1fd2a0f85a0bb2134714b180879433376ea5d6379eb63a1dbe72e765e7cf45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fd2a0f85a0bb2134714b180879433376ea5d6379eb63a1dbe72e765e7cf45a->enter($__internal_d1fd2a0f85a0bb2134714b180879433376ea5d6379eb63a1dbe72e765e7cf45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1fd2a0f85a0bb2134714b180879433376ea5d6379eb63a1dbe72e765e7cf45a->leave($__internal_d1fd2a0f85a0bb2134714b180879433376ea5d6379eb63a1dbe72e765e7cf45a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a2839c9b7dcf829ef691bb5b208157cd3959a3d7ca016a6b56fdae7deb2d8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2839c9b7dcf829ef691bb5b208157cd3959a3d7ca016a6b56fdae7deb2d8b7->enter($__internal_2a2839c9b7dcf829ef691bb5b208157cd3959a3d7ca016a6b56fdae7deb2d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a2839c9b7dcf829ef691bb5b208157cd3959a3d7ca016a6b56fdae7deb2d8b7->leave($__internal_2a2839c9b7dcf829ef691bb5b208157cd3959a3d7ca016a6b56fdae7deb2d8b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_747a08dfb3c329e077218407cb27525dedd1f356207efa976e7c18670b00a59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747a08dfb3c329e077218407cb27525dedd1f356207efa976e7c18670b00a59d->enter($__internal_747a08dfb3c329e077218407cb27525dedd1f356207efa976e7c18670b00a59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_747a08dfb3c329e077218407cb27525dedd1f356207efa976e7c18670b00a59d->leave($__internal_747a08dfb3c329e077218407cb27525dedd1f356207efa976e7c18670b00a59d_prof);

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
