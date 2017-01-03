<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8fa6e2956d342ef01f7a75f7300ce51b1ae7bb315bb19762f797590de3e43a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa62b111e244d360873f4752ef4af7b5b15372549c7028e0252ac5628d67a133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa62b111e244d360873f4752ef4af7b5b15372549c7028e0252ac5628d67a133->enter($__internal_fa62b111e244d360873f4752ef4af7b5b15372549c7028e0252ac5628d67a133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa62b111e244d360873f4752ef4af7b5b15372549c7028e0252ac5628d67a133->leave($__internal_fa62b111e244d360873f4752ef4af7b5b15372549c7028e0252ac5628d67a133_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d8c9658fdff007cc9a676aaf81931f2c6c43c0260cbb5e0caaa9b241574a9f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c9658fdff007cc9a676aaf81931f2c6c43c0260cbb5e0caaa9b241574a9f88->enter($__internal_d8c9658fdff007cc9a676aaf81931f2c6c43c0260cbb5e0caaa9b241574a9f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_d8c9658fdff007cc9a676aaf81931f2c6c43c0260cbb5e0caaa9b241574a9f88->leave($__internal_d8c9658fdff007cc9a676aaf81931f2c6c43c0260cbb5e0caaa9b241574a9f88_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a3ae1209063b098265cc6855af2255003018f7916be2e4d89e0678b29a6bbc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ae1209063b098265cc6855af2255003018f7916be2e4d89e0678b29a6bbc92->enter($__internal_a3ae1209063b098265cc6855af2255003018f7916be2e4d89e0678b29a6bbc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a3ae1209063b098265cc6855af2255003018f7916be2e4d89e0678b29a6bbc92->leave($__internal_a3ae1209063b098265cc6855af2255003018f7916be2e4d89e0678b29a6bbc92_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fe04ce0b6fa386ff90f119d6bedda92da1386f90f3d53f7c9be14a52e3f2e2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe04ce0b6fa386ff90f119d6bedda92da1386f90f3d53f7c9be14a52e3f2e2b1->enter($__internal_fe04ce0b6fa386ff90f119d6bedda92da1386f90f3d53f7c9be14a52e3f2e2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fe04ce0b6fa386ff90f119d6bedda92da1386f90f3d53f7c9be14a52e3f2e2b1->leave($__internal_fe04ce0b6fa386ff90f119d6bedda92da1386f90f3d53f7c9be14a52e3f2e2b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
