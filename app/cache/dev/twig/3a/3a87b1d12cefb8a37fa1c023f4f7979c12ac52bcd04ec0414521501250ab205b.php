<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_03e05c0ec3ea1e5bf905355f0a5f7908592a782a1fca9aaf40f7839014dd9b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_883de7bbf848e998fe6949559a9bd857dc3f89c0ea77652309e21a6c6ffba6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883de7bbf848e998fe6949559a9bd857dc3f89c0ea77652309e21a6c6ffba6f7->enter($__internal_883de7bbf848e998fe6949559a9bd857dc3f89c0ea77652309e21a6c6ffba6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883de7bbf848e998fe6949559a9bd857dc3f89c0ea77652309e21a6c6ffba6f7->leave($__internal_883de7bbf848e998fe6949559a9bd857dc3f89c0ea77652309e21a6c6ffba6f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e4e33e24d8358d77082397870ab7b52e96d2347d113a60f9d9022c46dcd8197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4e33e24d8358d77082397870ab7b52e96d2347d113a60f9d9022c46dcd8197->enter($__internal_4e4e33e24d8358d77082397870ab7b52e96d2347d113a60f9d9022c46dcd8197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_4e4e33e24d8358d77082397870ab7b52e96d2347d113a60f9d9022c46dcd8197->leave($__internal_4e4e33e24d8358d77082397870ab7b52e96d2347d113a60f9d9022c46dcd8197_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
