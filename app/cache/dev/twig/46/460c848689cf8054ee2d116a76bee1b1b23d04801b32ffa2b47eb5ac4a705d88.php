<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_dd8e966c95621b7915c06fc266aa7c62412c3a4e9d260f834034c419106f8ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fa23db77484b1f78b0cc874abb32bf54acf37dbbb3362bcc08611fe150328cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa23db77484b1f78b0cc874abb32bf54acf37dbbb3362bcc08611fe150328cdc->enter($__internal_fa23db77484b1f78b0cc874abb32bf54acf37dbbb3362bcc08611fe150328cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa23db77484b1f78b0cc874abb32bf54acf37dbbb3362bcc08611fe150328cdc->leave($__internal_fa23db77484b1f78b0cc874abb32bf54acf37dbbb3362bcc08611fe150328cdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a5020fdc5688f3182e6c2380f9d4ea226e4189a2654333deb5daec5550962a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5020fdc5688f3182e6c2380f9d4ea226e4189a2654333deb5daec5550962a1->enter($__internal_6a5020fdc5688f3182e6c2380f9d4ea226e4189a2654333deb5daec5550962a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6a5020fdc5688f3182e6c2380f9d4ea226e4189a2654333deb5daec5550962a1->leave($__internal_6a5020fdc5688f3182e6c2380f9d4ea226e4189a2654333deb5daec5550962a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
