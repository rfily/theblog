<?php

/* @HWIOAuth/Connect/registration_success.html.twig */
class __TwigTemplate_99f7b5007d19721950dfb468f0be94bb63d37e0492074871ff756390fcd5269f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "@HWIOAuth/Connect/registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1be4020d934e3d4b8c6c6b6077f7977223d40393e120d191c083e40eed165b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be4020d934e3d4b8c6c6b6077f7977223d40393e120d191c083e40eed165b8d->enter($__internal_1be4020d934e3d4b8c6c6b6077f7977223d40393e120d191c083e40eed165b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HWIOAuth/Connect/registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be4020d934e3d4b8c6c6b6077f7977223d40393e120d191c083e40eed165b8d->leave($__internal_1be4020d934e3d4b8c6c6b6077f7977223d40393e120d191c083e40eed165b8d_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_4c0890165e3becacf4190514ebe8ca4cb2d18ea385a8b1a8ed4d7d693ab7f50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0890165e3becacf4190514ebe8ca4cb2d18ea385a8b1a8ed4d7d693ab7f50e->enter($__internal_4c0890165e3becacf4190514ebe8ca4cb2d18ea385a8b1a8ed4d7d693ab7f50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_4c0890165e3becacf4190514ebe8ca4cb2d18ea385a8b1a8ed4d7d693ab7f50e->leave($__internal_4c0890165e3becacf4190514ebe8ca4cb2d18ea385a8b1a8ed4d7d693ab7f50e_prof);

    }

    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/registration_success.html.twig";
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
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "@HWIOAuth/Connect/registration_success.html.twig", "C:\\wamp\\www\\theblog\\vendor\\hwi\\oauth-bundle\\Resources\\views\\Connect\\registration_success.html.twig");
    }
}
