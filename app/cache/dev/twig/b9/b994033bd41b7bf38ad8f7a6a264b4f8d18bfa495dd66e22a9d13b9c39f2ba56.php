<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_320fb623e7c756bac92be4c1776836fc3cc016a395858f7ebf0691fe61379dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c444151016e6c2c7ae6db5acc0697dff71901c115eb8e30bbe63e27dabf9f5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c444151016e6c2c7ae6db5acc0697dff71901c115eb8e30bbe63e27dabf9f5b2->enter($__internal_c444151016e6c2c7ae6db5acc0697dff71901c115eb8e30bbe63e27dabf9f5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c444151016e6c2c7ae6db5acc0697dff71901c115eb8e30bbe63e27dabf9f5b2->leave($__internal_c444151016e6c2c7ae6db5acc0697dff71901c115eb8e30bbe63e27dabf9f5b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d7e4073de2b455da5044b9be25a955c834c7e0a7ce2105ef3779ff3e4f8164e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7e4073de2b455da5044b9be25a955c834c7e0a7ce2105ef3779ff3e4f8164e->enter($__internal_5d7e4073de2b455da5044b9be25a955c834c7e0a7ce2105ef3779ff3e4f8164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_5d7e4073de2b455da5044b9be25a955c834c7e0a7ce2105ef3779ff3e4f8164e->leave($__internal_5d7e4073de2b455da5044b9be25a955c834c7e0a7ce2105ef3779ff3e4f8164e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
