<?php

/* @TheBlogBlog/Blog/layout.html.twig */
class __TwigTemplate_0f450f8b61ba1de7c51a0eac3cf7b0fe0a6d39de707a67adc6e9706ad10c2a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@TheBlogBlog/Blog/layout.html.twig", 1);
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
        $__internal_ad4155c09e48df3bd3676aa012a6146db23ec154f21bca79eebb38b3ba9bf2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4155c09e48df3bd3676aa012a6146db23ec154f21bca79eebb38b3ba9bf2f6->enter($__internal_ad4155c09e48df3bd3676aa012a6146db23ec154f21bca79eebb38b3ba9bf2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TheBlogBlog/Blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4155c09e48df3bd3676aa012a6146db23ec154f21bca79eebb38b3ba9bf2f6->leave($__internal_ad4155c09e48df3bd3676aa012a6146db23ec154f21bca79eebb38b3ba9bf2f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2f3da63127273db3eaae5b064ef6604d29173c83db53eb14a51b2d1357f4b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f3da63127273db3eaae5b064ef6604d29173c83db53eb14a51b2d1357f4b3b->enter($__internal_b2f3da63127273db3eaae5b064ef6604d29173c83db53eb14a51b2d1357f4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b2f3da63127273db3eaae5b064ef6604d29173c83db53eb14a51b2d1357f4b3b->leave($__internal_b2f3da63127273db3eaae5b064ef6604d29173c83db53eb14a51b2d1357f4b3b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70399debd5ade631f92f10bec573646012a14805bdac73057355ed5bd11ba1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70399debd5ade631f92f10bec573646012a14805bdac73057355ed5bd11ba1d->enter($__internal_d70399debd5ade631f92f10bec573646012a14805bdac73057355ed5bd11ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_d70399debd5ade631f92f10bec573646012a14805bdac73057355ed5bd11ba1d->leave($__internal_d70399debd5ade631f92f10bec573646012a14805bdac73057355ed5bd11ba1d_prof);

    }

    // line 9
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_491c6bf9d569caef5b86fbe40b91ddca0f261c5eeaac534b78f4c97f14208179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491c6bf9d569caef5b86fbe40b91ddca0f261c5eeaac534b78f4c97f14208179->enter($__internal_491c6bf9d569caef5b86fbe40b91ddca0f261c5eeaac534b78f4c97f14208179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 10
        echo "
    ";
        
        $__internal_491c6bf9d569caef5b86fbe40b91ddca0f261c5eeaac534b78f4c97f14208179->leave($__internal_491c6bf9d569caef5b86fbe40b91ddca0f261c5eeaac534b78f4c97f14208179_prof);

    }

    public function getTemplateName()
    {
        return "@TheBlogBlog/Blog/layout.html.twig";
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
", "@TheBlogBlog/Blog/layout.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle\\Resources\\views\\Blog\\layout.html.twig");
    }
}
