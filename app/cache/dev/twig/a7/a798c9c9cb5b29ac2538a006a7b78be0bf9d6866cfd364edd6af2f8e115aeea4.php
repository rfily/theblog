<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_bd01a6c2550711f1dc8f5817f76accda31ce1f93b08e1bf5fc9c6b98a8f730be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_fce6b73a5fcff9e31fa906542ee2c871a264df15c17fc7ddc32b64b8ba5b0446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce6b73a5fcff9e31fa906542ee2c871a264df15c17fc7ddc32b64b8ba5b0446->enter($__internal_fce6b73a5fcff9e31fa906542ee2c871a264df15c17fc7ddc32b64b8ba5b0446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce6b73a5fcff9e31fa906542ee2c871a264df15c17fc7ddc32b64b8ba5b0446->leave($__internal_fce6b73a5fcff9e31fa906542ee2c871a264df15c17fc7ddc32b64b8ba5b0446_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e861be2262227a2efbdea57e638872143d104389361542ba728c78494cf85656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e861be2262227a2efbdea57e638872143d104389361542ba728c78494cf85656->enter($__internal_e861be2262227a2efbdea57e638872143d104389361542ba728c78494cf85656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e861be2262227a2efbdea57e638872143d104389361542ba728c78494cf85656->leave($__internal_e861be2262227a2efbdea57e638872143d104389361542ba728c78494cf85656_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
