<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e3046c27f16e867f4df1ded945a26cec61022638ab399ee9270435b5187108b4 extends Twig_Template
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
        $__internal_e88a1f2b76d50a015d60b56862b3900bcbaf0dadb2e42c680274ff695fdb7bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88a1f2b76d50a015d60b56862b3900bcbaf0dadb2e42c680274ff695fdb7bce->enter($__internal_e88a1f2b76d50a015d60b56862b3900bcbaf0dadb2e42c680274ff695fdb7bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e88a1f2b76d50a015d60b56862b3900bcbaf0dadb2e42c680274ff695fdb7bce->leave($__internal_e88a1f2b76d50a015d60b56862b3900bcbaf0dadb2e42c680274ff695fdb7bce_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f26ca3d4bde8a6aa9379e74cd9d19a60ef288dd6f04fe0b29fc278594082c005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26ca3d4bde8a6aa9379e74cd9d19a60ef288dd6f04fe0b29fc278594082c005->enter($__internal_f26ca3d4bde8a6aa9379e74cd9d19a60ef288dd6f04fe0b29fc278594082c005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f26ca3d4bde8a6aa9379e74cd9d19a60ef288dd6f04fe0b29fc278594082c005->leave($__internal_f26ca3d4bde8a6aa9379e74cd9d19a60ef288dd6f04fe0b29fc278594082c005_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fdae34078a3be19a7f665530119fa4dae967f91f5fc1939a19fc67ab44eaa410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdae34078a3be19a7f665530119fa4dae967f91f5fc1939a19fc67ab44eaa410->enter($__internal_fdae34078a3be19a7f665530119fa4dae967f91f5fc1939a19fc67ab44eaa410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fdae34078a3be19a7f665530119fa4dae967f91f5fc1939a19fc67ab44eaa410->leave($__internal_fdae34078a3be19a7f665530119fa4dae967f91f5fc1939a19fc67ab44eaa410_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f3329f0f240c28ca110d21887e85b94b91fef9ff938f734e4c65814333952ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3329f0f240c28ca110d21887e85b94b91fef9ff938f734e4c65814333952ef7->enter($__internal_f3329f0f240c28ca110d21887e85b94b91fef9ff938f734e4c65814333952ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f3329f0f240c28ca110d21887e85b94b91fef9ff938f734e4c65814333952ef7->leave($__internal_f3329f0f240c28ca110d21887e85b94b91fef9ff938f734e4c65814333952ef7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
