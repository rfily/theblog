<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c8244e6ee40f393fbb064b1587d4bed6dc56ec0a15242d3e5e773d2373d0d58b extends Twig_Template
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
        $__internal_91f5a5745f194b0ed41c29c88c68c38e3d3afeae7731e1a67397383307a0aa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f5a5745f194b0ed41c29c88c68c38e3d3afeae7731e1a67397383307a0aa01->enter($__internal_91f5a5745f194b0ed41c29c88c68c38e3d3afeae7731e1a67397383307a0aa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_91f5a5745f194b0ed41c29c88c68c38e3d3afeae7731e1a67397383307a0aa01->leave($__internal_91f5a5745f194b0ed41c29c88c68c38e3d3afeae7731e1a67397383307a0aa01_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab136ef7ba1c4852ef3b9e65ae1c58fbc5e575a466e52e88ac1ce42040584c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab136ef7ba1c4852ef3b9e65ae1c58fbc5e575a466e52e88ac1ce42040584c17->enter($__internal_ab136ef7ba1c4852ef3b9e65ae1c58fbc5e575a466e52e88ac1ce42040584c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab136ef7ba1c4852ef3b9e65ae1c58fbc5e575a466e52e88ac1ce42040584c17->leave($__internal_ab136ef7ba1c4852ef3b9e65ae1c58fbc5e575a466e52e88ac1ce42040584c17_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7536e7530ba8ba5e264252775bc18abde25d0d7515b861f39677656199216fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7536e7530ba8ba5e264252775bc18abde25d0d7515b861f39677656199216fc8->enter($__internal_7536e7530ba8ba5e264252775bc18abde25d0d7515b861f39677656199216fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7536e7530ba8ba5e264252775bc18abde25d0d7515b861f39677656199216fc8->leave($__internal_7536e7530ba8ba5e264252775bc18abde25d0d7515b861f39677656199216fc8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ec467c65d4ed8b78a5150700c6e18144e195c34efe84d98c0385700c38f60413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec467c65d4ed8b78a5150700c6e18144e195c34efe84d98c0385700c38f60413->enter($__internal_ec467c65d4ed8b78a5150700c6e18144e195c34efe84d98c0385700c38f60413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ec467c65d4ed8b78a5150700c6e18144e195c34efe84d98c0385700c38f60413->leave($__internal_ec467c65d4ed8b78a5150700c6e18144e195c34efe84d98c0385700c38f60413_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
