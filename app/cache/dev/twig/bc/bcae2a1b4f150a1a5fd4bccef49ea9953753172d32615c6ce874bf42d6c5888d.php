<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ba9c8b3070b90bbbbc05d254a9a313495074c6123ca15e1d0894cbc737419a24 extends Twig_Template
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
        $__internal_9f12b91aacffc78b5cd13f555442a207f77f81ec4cf8bee98d7c18c2fd3cb1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f12b91aacffc78b5cd13f555442a207f77f81ec4cf8bee98d7c18c2fd3cb1f5->enter($__internal_9f12b91aacffc78b5cd13f555442a207f77f81ec4cf8bee98d7c18c2fd3cb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9f12b91aacffc78b5cd13f555442a207f77f81ec4cf8bee98d7c18c2fd3cb1f5->leave($__internal_9f12b91aacffc78b5cd13f555442a207f77f81ec4cf8bee98d7c18c2fd3cb1f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a347b5f849162ec14210af5dfefcf36f70b11edbd8dad23c08a39a8e0cbb46c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a347b5f849162ec14210af5dfefcf36f70b11edbd8dad23c08a39a8e0cbb46c4->enter($__internal_a347b5f849162ec14210af5dfefcf36f70b11edbd8dad23c08a39a8e0cbb46c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_a347b5f849162ec14210af5dfefcf36f70b11edbd8dad23c08a39a8e0cbb46c4->leave($__internal_a347b5f849162ec14210af5dfefcf36f70b11edbd8dad23c08a39a8e0cbb46c4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bb8984ea2ec8b3ea0edd5f70f7e6a5626c84eba4563d589d101281d155abbd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8984ea2ec8b3ea0edd5f70f7e6a5626c84eba4563d589d101281d155abbd14->enter($__internal_bb8984ea2ec8b3ea0edd5f70f7e6a5626c84eba4563d589d101281d155abbd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb8984ea2ec8b3ea0edd5f70f7e6a5626c84eba4563d589d101281d155abbd14->leave($__internal_bb8984ea2ec8b3ea0edd5f70f7e6a5626c84eba4563d589d101281d155abbd14_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_945b0d95ebb7fbc625bb68a4af9ca0444a1eec70630f498bfbcda95144286ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945b0d95ebb7fbc625bb68a4af9ca0444a1eec70630f498bfbcda95144286ce7->enter($__internal_945b0d95ebb7fbc625bb68a4af9ca0444a1eec70630f498bfbcda95144286ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_945b0d95ebb7fbc625bb68a4af9ca0444a1eec70630f498bfbcda95144286ce7->leave($__internal_945b0d95ebb7fbc625bb68a4af9ca0444a1eec70630f498bfbcda95144286ce7_prof);

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
