<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_537088bc32a64bc06fe7e10136d5010fa9e7c32bd3977288baffe667dbf8e8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1e29b40b1945360103875b1d93399877519305a4ba46efa6f947c941e4ff5dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e29b40b1945360103875b1d93399877519305a4ba46efa6f947c941e4ff5dda->enter($__internal_1e29b40b1945360103875b1d93399877519305a4ba46efa6f947c941e4ff5dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e29b40b1945360103875b1d93399877519305a4ba46efa6f947c941e4ff5dda->leave($__internal_1e29b40b1945360103875b1d93399877519305a4ba46efa6f947c941e4ff5dda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cd12a06c1a471eeb011bb8ad5933237b8cb032b700b42aa2135de8a7a8da530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd12a06c1a471eeb011bb8ad5933237b8cb032b700b42aa2135de8a7a8da530->enter($__internal_9cd12a06c1a471eeb011bb8ad5933237b8cb032b700b42aa2135de8a7a8da530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9cd12a06c1a471eeb011bb8ad5933237b8cb032b700b42aa2135de8a7a8da530->leave($__internal_9cd12a06c1a471eeb011bb8ad5933237b8cb032b700b42aa2135de8a7a8da530_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
