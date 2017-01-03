<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_cc0c9667e04b14fe68820038c607cbd77255a69127109c40df43568ef36b3929 extends Twig_Template
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
        $__internal_dca8f82da4364cccd4ea39f1c41bc87962cf8b498a98887db846e92116096096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca8f82da4364cccd4ea39f1c41bc87962cf8b498a98887db846e92116096096->enter($__internal_dca8f82da4364cccd4ea39f1c41bc87962cf8b498a98887db846e92116096096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dca8f82da4364cccd4ea39f1c41bc87962cf8b498a98887db846e92116096096->leave($__internal_dca8f82da4364cccd4ea39f1c41bc87962cf8b498a98887db846e92116096096_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_163936ded7cb00b63ab1ff7b2d1bce25c645fc52f8d012bdb1d46f190039ba13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163936ded7cb00b63ab1ff7b2d1bce25c645fc52f8d012bdb1d46f190039ba13->enter($__internal_163936ded7cb00b63ab1ff7b2d1bce25c645fc52f8d012bdb1d46f190039ba13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_163936ded7cb00b63ab1ff7b2d1bce25c645fc52f8d012bdb1d46f190039ba13->leave($__internal_163936ded7cb00b63ab1ff7b2d1bce25c645fc52f8d012bdb1d46f190039ba13_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_faf227ea0a35761a78de8331be91667eacfaa6f853a31a39463df9703984d745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf227ea0a35761a78de8331be91667eacfaa6f853a31a39463df9703984d745->enter($__internal_faf227ea0a35761a78de8331be91667eacfaa6f853a31a39463df9703984d745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_faf227ea0a35761a78de8331be91667eacfaa6f853a31a39463df9703984d745->leave($__internal_faf227ea0a35761a78de8331be91667eacfaa6f853a31a39463df9703984d745_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_22fc2ad4e0ab62a0dfee93c10f4a22085af1124747115c39848d0aafd38a02fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fc2ad4e0ab62a0dfee93c10f4a22085af1124747115c39848d0aafd38a02fa->enter($__internal_22fc2ad4e0ab62a0dfee93c10f4a22085af1124747115c39848d0aafd38a02fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_22fc2ad4e0ab62a0dfee93c10f4a22085af1124747115c39848d0aafd38a02fa->leave($__internal_22fc2ad4e0ab62a0dfee93c10f4a22085af1124747115c39848d0aafd38a02fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
