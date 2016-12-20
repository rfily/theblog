<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_0721a3bfe8601d6a4ef798f0dae901ec58c7933bb5519c83cc597b2d202c22d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b3191091e9c8f2752dac302a343b7cf8ff4df929576273aa1e81287cf027c8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3191091e9c8f2752dac302a343b7cf8ff4df929576273aa1e81287cf027c8fc->enter($__internal_b3191091e9c8f2752dac302a343b7cf8ff4df929576273aa1e81287cf027c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3191091e9c8f2752dac302a343b7cf8ff4df929576273aa1e81287cf027c8fc->leave($__internal_b3191091e9c8f2752dac302a343b7cf8ff4df929576273aa1e81287cf027c8fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d584858bb1e43b73910c9a485731c389eb48c9a2fa79bd3ad6e3ae10d8c2cd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d584858bb1e43b73910c9a485731c389eb48c9a2fa79bd3ad6e3ae10d8c2cd74->enter($__internal_d584858bb1e43b73910c9a485731c389eb48c9a2fa79bd3ad6e3ae10d8c2cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d584858bb1e43b73910c9a485731c389eb48c9a2fa79bd3ad6e3ae10d8c2cd74->leave($__internal_d584858bb1e43b73910c9a485731c389eb48c9a2fa79bd3ad6e3ae10d8c2cd74_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
