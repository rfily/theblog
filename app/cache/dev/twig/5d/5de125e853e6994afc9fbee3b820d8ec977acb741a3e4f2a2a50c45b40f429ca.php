<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_ab050730a2327dbc8ae2d63d72c1859e96b845fb06c14525d4d2e0784136f8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9f09a69371513be596baa8d79d5cec4d0b572607f1cb0d8e61ff12ffd4ca8976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f09a69371513be596baa8d79d5cec4d0b572607f1cb0d8e61ff12ffd4ca8976->enter($__internal_9f09a69371513be596baa8d79d5cec4d0b572607f1cb0d8e61ff12ffd4ca8976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f09a69371513be596baa8d79d5cec4d0b572607f1cb0d8e61ff12ffd4ca8976->leave($__internal_9f09a69371513be596baa8d79d5cec4d0b572607f1cb0d8e61ff12ffd4ca8976_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e45d07896324c30425404088aa446cca2e29b09e5c7d5b575bd9e9e32b3ab7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45d07896324c30425404088aa446cca2e29b09e5c7d5b575bd9e9e32b3ab7dc->enter($__internal_e45d07896324c30425404088aa446cca2e29b09e5c7d5b575bd9e9e32b3ab7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e45d07896324c30425404088aa446cca2e29b09e5c7d5b575bd9e9e32b3ab7dc->leave($__internal_e45d07896324c30425404088aa446cca2e29b09e5c7d5b575bd9e9e32b3ab7dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
