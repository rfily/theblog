<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a57aacf2007b975bd31502ea3c2256b8146553958e07d1468385f0496cc209f2 extends Twig_Template
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
        $__internal_9cc9c2f4d8bd71a4d8c8637fdc0e6d666ee5582d6e6d51199e81db9462e05f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc9c2f4d8bd71a4d8c8637fdc0e6d666ee5582d6e6d51199e81db9462e05f18->enter($__internal_9cc9c2f4d8bd71a4d8c8637fdc0e6d666ee5582d6e6d51199e81db9462e05f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9cc9c2f4d8bd71a4d8c8637fdc0e6d666ee5582d6e6d51199e81db9462e05f18->leave($__internal_9cc9c2f4d8bd71a4d8c8637fdc0e6d666ee5582d6e6d51199e81db9462e05f18_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eaa20a894506a17c8c866c908550b05afe97b575db6e52ceb9cacee10b06ca31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa20a894506a17c8c866c908550b05afe97b575db6e52ceb9cacee10b06ca31->enter($__internal_eaa20a894506a17c8c866c908550b05afe97b575db6e52ceb9cacee10b06ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_eaa20a894506a17c8c866c908550b05afe97b575db6e52ceb9cacee10b06ca31->leave($__internal_eaa20a894506a17c8c866c908550b05afe97b575db6e52ceb9cacee10b06ca31_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_01d3226934f36ecd53da53f40af1e988145a2be2ea7bac4c34a49b641bd17809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d3226934f36ecd53da53f40af1e988145a2be2ea7bac4c34a49b641bd17809->enter($__internal_01d3226934f36ecd53da53f40af1e988145a2be2ea7bac4c34a49b641bd17809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_01d3226934f36ecd53da53f40af1e988145a2be2ea7bac4c34a49b641bd17809->leave($__internal_01d3226934f36ecd53da53f40af1e988145a2be2ea7bac4c34a49b641bd17809_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_935c0f6dbf942d4db0987895cebde0274052e95533fd9ae0536db62d2ea398a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935c0f6dbf942d4db0987895cebde0274052e95533fd9ae0536db62d2ea398a9->enter($__internal_935c0f6dbf942d4db0987895cebde0274052e95533fd9ae0536db62d2ea398a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_935c0f6dbf942d4db0987895cebde0274052e95533fd9ae0536db62d2ea398a9->leave($__internal_935c0f6dbf942d4db0987895cebde0274052e95533fd9ae0536db62d2ea398a9_prof);

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
