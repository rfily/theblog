<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ba18bba549aae3a7cd9b38b233f5e609343617205e4b759b5899ffe73f63715a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_24f1beea0d676792b02c351dba1d7225ffffa3ae9c91dec79272d1bfe5c5e210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f1beea0d676792b02c351dba1d7225ffffa3ae9c91dec79272d1bfe5c5e210->enter($__internal_24f1beea0d676792b02c351dba1d7225ffffa3ae9c91dec79272d1bfe5c5e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f1beea0d676792b02c351dba1d7225ffffa3ae9c91dec79272d1bfe5c5e210->leave($__internal_24f1beea0d676792b02c351dba1d7225ffffa3ae9c91dec79272d1bfe5c5e210_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c436b67d6e0735329a331495ad93eb20ba80dfe1c7234c07679c186792c114f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c436b67d6e0735329a331495ad93eb20ba80dfe1c7234c07679c186792c114f->enter($__internal_2c436b67d6e0735329a331495ad93eb20ba80dfe1c7234c07679c186792c114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2c436b67d6e0735329a331495ad93eb20ba80dfe1c7234c07679c186792c114f->leave($__internal_2c436b67d6e0735329a331495ad93eb20ba80dfe1c7234c07679c186792c114f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
