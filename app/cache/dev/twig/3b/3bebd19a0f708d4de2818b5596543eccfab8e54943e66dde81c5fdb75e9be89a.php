<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_670aa4ff147a203c2f939eb7dbbdc408433b3b97f1b44efbe9c5e389bff1528d extends Twig_Template
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
        $__internal_d22f793e37f247f121d8470d9500da2065c73bcc157bfd3ee9355676dacffe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22f793e37f247f121d8470d9500da2065c73bcc157bfd3ee9355676dacffe74->enter($__internal_d22f793e37f247f121d8470d9500da2065c73bcc157bfd3ee9355676dacffe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d22f793e37f247f121d8470d9500da2065c73bcc157bfd3ee9355676dacffe74->leave($__internal_d22f793e37f247f121d8470d9500da2065c73bcc157bfd3ee9355676dacffe74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db0544fcee73a89e630f21a450e3b7290dcf0c432011d89bea90ec338ddd6470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0544fcee73a89e630f21a450e3b7290dcf0c432011d89bea90ec338ddd6470->enter($__internal_db0544fcee73a89e630f21a450e3b7290dcf0c432011d89bea90ec338ddd6470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_db0544fcee73a89e630f21a450e3b7290dcf0c432011d89bea90ec338ddd6470->leave($__internal_db0544fcee73a89e630f21a450e3b7290dcf0c432011d89bea90ec338ddd6470_prof);

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
