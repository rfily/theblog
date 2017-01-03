<?php

/* @AdminAdmin/Default/index.html.twig */
class __TwigTemplate_f8e3c91e912a2278f5742c0bc5d3d5c0f17af22a63712f7e20aca995d2122e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "@AdminAdmin/Default/index.html.twig", 1);
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
        $__internal_4ec3b8502bc216041570ef5939a4bc06c0676b7dcf494dd4b31955ae89c294f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec3b8502bc216041570ef5939a4bc06c0676b7dcf494dd4b31955ae89c294f2->enter($__internal_4ec3b8502bc216041570ef5939a4bc06c0676b7dcf494dd4b31955ae89c294f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec3b8502bc216041570ef5939a4bc06c0676b7dcf494dd4b31955ae89c294f2->leave($__internal_4ec3b8502bc216041570ef5939a4bc06c0676b7dcf494dd4b31955ae89c294f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12a1515adb0b0dd73d759df417c6cbc6164943f1c1958bd936e9fe1df5f88f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a1515adb0b0dd73d759df417c6cbc6164943f1c1958bd936e9fe1df5f88f39->enter($__internal_12a1515adb0b0dd73d759df417c6cbc6164943f1c1958bd936e9fe1df5f88f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Article
";
        
        $__internal_12a1515adb0b0dd73d759df417c6cbc6164943f1c1958bd936e9fe1df5f88f39->leave($__internal_12a1515adb0b0dd73d759df417c6cbc6164943f1c1958bd936e9fe1df5f88f39_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_8a6f7d29967380e08a9d3ae16f34b2d97140e216a0d0e6bac9876cad9a61bd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6f7d29967380e08a9d3ae16f34b2d97140e216a0d0e6bac9876cad9a61bd12->enter($__internal_8a6f7d29967380e08a9d3ae16f34b2d97140e216a0d0e6bac9876cad9a61bd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_8a6f7d29967380e08a9d3ae16f34b2d97140e216a0d0e6bac9876cad9a61bd12->leave($__internal_8a6f7d29967380e08a9d3ae16f34b2d97140e216a0d0e6bac9876cad9a61bd12_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/Default/index.html.twig";
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
{% endblock %}", "@AdminAdmin/Default/index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
