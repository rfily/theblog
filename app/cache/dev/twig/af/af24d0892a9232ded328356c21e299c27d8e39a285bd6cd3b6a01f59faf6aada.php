<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_87325525e33ed77d857752d95c6b24cf53e2cd5de5252baf24f057e6b65884c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
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
        $__internal_41a96619be30a830c7ce2586f6aebd12012d70c1238f471dfe63f6a5e07b96f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a96619be30a830c7ce2586f6aebd12012d70c1238f471dfe63f6a5e07b96f0->enter($__internal_41a96619be30a830c7ce2586f6aebd12012d70c1238f471dfe63f6a5e07b96f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a96619be30a830c7ce2586f6aebd12012d70c1238f471dfe63f6a5e07b96f0->leave($__internal_41a96619be30a830c7ce2586f6aebd12012d70c1238f471dfe63f6a5e07b96f0_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_3bbd3802e9de54362721c03919ff08e7eb0024185ea903f6ae2eb162b9edcae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbd3802e9de54362721c03919ff08e7eb0024185ea903f6ae2eb162b9edcae5->enter($__internal_3bbd3802e9de54362721c03919ff08e7eb0024185ea903f6ae2eb162b9edcae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_3bbd3802e9de54362721c03919ff08e7eb0024185ea903f6ae2eb162b9edcae5->leave($__internal_3bbd3802e9de54362721c03919ff08e7eb0024185ea903f6ae2eb162b9edcae5_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
", "HWIOAuthBundle:Connect:registration_success.html.twig", "C:\\wamp\\www\\theblog\\vendor\\hwi\\oauth-bundle/Resources/views/Connect/registration_success.html.twig");
    }
}
