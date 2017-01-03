<?php

/* @HWIOAuth/Connect/connect_success.html.twig */
class __TwigTemplate_56626a714545501d31235120d2d6dc3b36cab4c4cc5fb481bdaa8b18974ac1a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "@HWIOAuth/Connect/connect_success.html.twig", 1);
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
        $__internal_e8c35a044e07f2fffd1e64bc83bc94b818ec80a77937e8e6110475e981b505ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c35a044e07f2fffd1e64bc83bc94b818ec80a77937e8e6110475e981b505ea->enter($__internal_e8c35a044e07f2fffd1e64bc83bc94b818ec80a77937e8e6110475e981b505ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HWIOAuth/Connect/connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c35a044e07f2fffd1e64bc83bc94b818ec80a77937e8e6110475e981b505ea->leave($__internal_e8c35a044e07f2fffd1e64bc83bc94b818ec80a77937e8e6110475e981b505ea_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_182ba83f9d84eaca622b4fef8b51679baf0fb4a35edad91112367149eae16d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182ba83f9d84eaca622b4fef8b51679baf0fb4a35edad91112367149eae16d1e->enter($__internal_182ba83f9d84eaca622b4fef8b51679baf0fb4a35edad91112367149eae16d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_182ba83f9d84eaca622b4fef8b51679baf0fb4a35edad91112367149eae16d1e->leave($__internal_182ba83f9d84eaca622b4fef8b51679baf0fb4a35edad91112367149eae16d1e_prof);

    }

    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/connect_success.html.twig";
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
    <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "@HWIOAuth/Connect/connect_success.html.twig", "C:\\wamp\\www\\theblog\\vendor\\hwi\\oauth-bundle\\Resources\\views\\Connect\\connect_success.html.twig");
    }
}
