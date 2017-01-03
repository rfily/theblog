<?php

/* AdminAdminBundle:Default:index.html.twig */
class __TwigTemplate_5ae37925c38809a8052af98dc58a348d5662fbf5f104ba88ae0b3921c7d6fa71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "AdminAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8601a17d37c6a42d8d921a3eb6fe5811b8db8673aed633a26b10de531a4d7d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8601a17d37c6a42d8d921a3eb6fe5811b8db8673aed633a26b10de531a4d7d4d->enter($__internal_8601a17d37c6a42d8d921a3eb6fe5811b8db8673aed633a26b10de531a4d7d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8601a17d37c6a42d8d921a3eb6fe5811b8db8673aed633a26b10de531a4d7d4d->leave($__internal_8601a17d37c6a42d8d921a3eb6fe5811b8db8673aed633a26b10de531a4d7d4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17949755d5d4863fcc3f467d2b8642ca9734dfadf60e27b33accb85e9c823187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17949755d5d4863fcc3f467d2b8642ca9734dfadf60e27b33accb85e9c823187->enter($__internal_17949755d5d4863fcc3f467d2b8642ca9734dfadf60e27b33accb85e9c823187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Article
";
        
        $__internal_17949755d5d4863fcc3f467d2b8642ca9734dfadf60e27b33accb85e9c823187->leave($__internal_17949755d5d4863fcc3f467d2b8642ca9734dfadf60e27b33accb85e9c823187_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_c6a2374d58165c3f7ec68b358e3bab6d3e3cb17acbc40ccef46a0b6b9c5fb938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a2374d58165c3f7ec68b358e3bab6d3e3cb17acbc40ccef46a0b6b9c5fb938->enter($__internal_c6a2374d58165c3f7ec68b358e3bab6d3e3cb17acbc40ccef46a0b6b9c5fb938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des articles</h1>
        </div>
    </div><!--/.row-->


    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">

            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
";
        
        $__internal_c6a2374d58165c3f7ec68b358e3bab6d3e3cb17acbc40ccef46a0b6b9c5fb938->leave($__internal_c6a2374d58165c3f7ec68b358e3bab6d3e3cb17acbc40ccef46a0b6b9c5fb938_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AdminAdminBundle::layout.html.twig\" %}

{% block title %}
    Liste des Article
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des articles</h1>
        </div>
    </div><!--/.row-->


    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">

            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
{% endblock %}", "AdminAdminBundle:Default:index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
