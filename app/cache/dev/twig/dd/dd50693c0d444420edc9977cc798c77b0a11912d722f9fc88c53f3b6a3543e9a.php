<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_55e61462187b2f92facda7a89be2d69141dfe008e49eb63ee4bf0e4f9ef5e2f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fe820a383a453d2306300e8fcea06a6881e2bd5b88c2469a27ac2bcee61e53c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe820a383a453d2306300e8fcea06a6881e2bd5b88c2469a27ac2bcee61e53c0->enter($__internal_fe820a383a453d2306300e8fcea06a6881e2bd5b88c2469a27ac2bcee61e53c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe820a383a453d2306300e8fcea06a6881e2bd5b88c2469a27ac2bcee61e53c0->leave($__internal_fe820a383a453d2306300e8fcea06a6881e2bd5b88c2469a27ac2bcee61e53c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44096899d73c44d8bab9fd614868de35aae297265aa40b8ab9a786e5d0a069f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44096899d73c44d8bab9fd614868de35aae297265aa40b8ab9a786e5d0a069f4->enter($__internal_44096899d73c44d8bab9fd614868de35aae297265aa40b8ab9a786e5d0a069f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_44096899d73c44d8bab9fd614868de35aae297265aa40b8ab9a786e5d0a069f4->leave($__internal_44096899d73c44d8bab9fd614868de35aae297265aa40b8ab9a786e5d0a069f4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
