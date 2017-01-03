<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_efeb2f8ba4b7c4724b83384e190cd7df6b382144038db469664b6ce0586859a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_39d7adf4c928fe698502ffaab3c884c6c0bdef9bb1f72877372b7b27897383e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d7adf4c928fe698502ffaab3c884c6c0bdef9bb1f72877372b7b27897383e8->enter($__internal_39d7adf4c928fe698502ffaab3c884c6c0bdef9bb1f72877372b7b27897383e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d7adf4c928fe698502ffaab3c884c6c0bdef9bb1f72877372b7b27897383e8->leave($__internal_39d7adf4c928fe698502ffaab3c884c6c0bdef9bb1f72877372b7b27897383e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07a438c8c538be65b363a6711fb95eb34bf4f74a4a9d444438b32764b543b924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a438c8c538be65b363a6711fb95eb34bf4f74a4a9d444438b32764b543b924->enter($__internal_07a438c8c538be65b363a6711fb95eb34bf4f74a4a9d444438b32764b543b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_07a438c8c538be65b363a6711fb95eb34bf4f74a4a9d444438b32764b543b924->leave($__internal_07a438c8c538be65b363a6711fb95eb34bf4f74a4a9d444438b32764b543b924_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
