<?php

/* TheBlogBlogBundle:Blog:layout.html.twig */
class __TwigTemplate_f140b4f111246c2bd3af5895cdd1726a2293bda80bb8a625d0fb9550b668022b extends Twig_Template
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
        $__internal_ac39028918c4b6fa173ebbb8f1f64063775f093ddcbfceba71ff67a640b7c651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac39028918c4b6fa173ebbb8f1f64063775f093ddcbfceba71ff67a640b7c651->enter($__internal_ac39028918c4b6fa173ebbb8f1f64063775f093ddcbfceba71ff67a640b7c651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac39028918c4b6fa173ebbb8f1f64063775f093ddcbfceba71ff67a640b7c651->leave($__internal_ac39028918c4b6fa173ebbb8f1f64063775f093ddcbfceba71ff67a640b7c651_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_295c1b2f8e8dbde636a63f4db6054be2c625eb40d5ba50c66cabdc398f2a25bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295c1b2f8e8dbde636a63f4db6054be2c625eb40d5ba50c66cabdc398f2a25bf->enter($__internal_295c1b2f8e8dbde636a63f4db6054be2c625eb40d5ba50c66cabdc398f2a25bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_295c1b2f8e8dbde636a63f4db6054be2c625eb40d5ba50c66cabdc398f2a25bf->leave($__internal_295c1b2f8e8dbde636a63f4db6054be2c625eb40d5ba50c66cabdc398f2a25bf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_814d33c9f77a8fd95889863e40215fee5671257b7ee762a1ba76ea165888b343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814d33c9f77a8fd95889863e40215fee5671257b7ee762a1ba76ea165888b343->enter($__internal_814d33c9f77a8fd95889863e40215fee5671257b7ee762a1ba76ea165888b343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_814d33c9f77a8fd95889863e40215fee5671257b7ee762a1ba76ea165888b343->leave($__internal_814d33c9f77a8fd95889863e40215fee5671257b7ee762a1ba76ea165888b343_prof);

    }

    // line 9
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_c66bee31c26e307769af9fbea3aad333830fc98f38a22cba732c764681c00bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66bee31c26e307769af9fbea3aad333830fc98f38a22cba732c764681c00bdc->enter($__internal_c66bee31c26e307769af9fbea3aad333830fc98f38a22cba732c764681c00bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 10
        echo "
    ";
        
        $__internal_c66bee31c26e307769af9fbea3aad333830fc98f38a22cba732c764681c00bdc->leave($__internal_c66bee31c26e307769af9fbea3aad333830fc98f38a22cba732c764681c00bdc_prof);

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
