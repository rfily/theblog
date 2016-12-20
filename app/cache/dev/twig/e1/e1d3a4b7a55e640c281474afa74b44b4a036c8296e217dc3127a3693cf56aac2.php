<?php

/* TheBlogBlogBundle:Blog:layout.html.twig */
class __TwigTemplate_b061f1391b3009be4cdcc3436301682e549482eb665d72cab1657a482575492c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TheBlogBlogBundle:Blog:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8216651db8d84fa7a3b1b32b1ee53549ce8074bc130927c43b5cb402c4533bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8216651db8d84fa7a3b1b32b1ee53549ce8074bc130927c43b5cb402c4533bf7->enter($__internal_8216651db8d84fa7a3b1b32b1ee53549ce8074bc130927c43b5cb402c4533bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8216651db8d84fa7a3b1b32b1ee53549ce8074bc130927c43b5cb402c4533bf7->leave($__internal_8216651db8d84fa7a3b1b32b1ee53549ce8074bc130927c43b5cb402c4533bf7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18724dd995e237be080341c6205ae6867aa60e44fde6db673cc4263432016088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18724dd995e237be080341c6205ae6867aa60e44fde6db673cc4263432016088->enter($__internal_18724dd995e237be080341c6205ae6867aa60e44fde6db673cc4263432016088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18724dd995e237be080341c6205ae6867aa60e44fde6db673cc4263432016088->leave($__internal_18724dd995e237be080341c6205ae6867aa60e44fde6db673cc4263432016088_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2931e549e4122b7ac445d5198a7e93a61241d7c3bd331030192784842648b683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2931e549e4122b7ac445d5198a7e93a61241d7c3bd331030192784842648b683->enter($__internal_2931e549e4122b7ac445d5198a7e93a61241d7c3bd331030192784842648b683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_2931e549e4122b7ac445d5198a7e93a61241d7c3bd331030192784842648b683->leave($__internal_2931e549e4122b7ac445d5198a7e93a61241d7c3bd331030192784842648b683_prof);

    }

    // line 9
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_7eb7fd33707f303f5eb7b777dd0bdbab8250dd27656d15fb0e48e3afd8edb2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb7fd33707f303f5eb7b777dd0bdbab8250dd27656d15fb0e48e3afd8edb2aa->enter($__internal_7eb7fd33707f303f5eb7b777dd0bdbab8250dd27656d15fb0e48e3afd8edb2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 10
        echo "
    ";
        
        $__internal_7eb7fd33707f303f5eb7b777dd0bdbab8250dd27656d15fb0e48e3afd8edb2aa->leave($__internal_7eb7fd33707f303f5eb7b777dd0bdbab8250dd27656d15fb0e48e3afd8edb2aa_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  71 => 9,  63 => 12,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}
    Blog - {{ parent() }}
{% endblock %}

{% block body %}

    {% block theblog_body %}

    {% endblock %}

{% endblock %}
", "TheBlogBlogBundle:Blog:layout.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/layout.html.twig");
    }
}
