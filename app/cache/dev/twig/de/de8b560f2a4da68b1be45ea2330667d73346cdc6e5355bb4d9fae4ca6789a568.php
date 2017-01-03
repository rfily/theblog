<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_7d40143ec79ae48f06ab90474da7818f34cee0f0712894acc1e81bfda58a6743 extends Twig_Template
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
        $__internal_1c841e0b410b6b5b62b65fa47319bc85e16d25ff8ce107e3dbf4c343d7e8546f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c841e0b410b6b5b62b65fa47319bc85e16d25ff8ce107e3dbf4c343d7e8546f->enter($__internal_1c841e0b410b6b5b62b65fa47319bc85e16d25ff8ce107e3dbf4c343d7e8546f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1c841e0b410b6b5b62b65fa47319bc85e16d25ff8ce107e3dbf4c343d7e8546f->leave($__internal_1c841e0b410b6b5b62b65fa47319bc85e16d25ff8ce107e3dbf4c343d7e8546f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d2e1a99c4af64d38808939d80ecda557f10e8812bdb4d75c8a2624ab68c475e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e1a99c4af64d38808939d80ecda557f10e8812bdb4d75c8a2624ab68c475e5->enter($__internal_d2e1a99c4af64d38808939d80ecda557f10e8812bdb4d75c8a2624ab68c475e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d2e1a99c4af64d38808939d80ecda557f10e8812bdb4d75c8a2624ab68c475e5->leave($__internal_d2e1a99c4af64d38808939d80ecda557f10e8812bdb4d75c8a2624ab68c475e5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d1bdf8cfd366715b461fdbb119100899ad9ad6f2933ca8b31beabb80d3bc2b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bdf8cfd366715b461fdbb119100899ad9ad6f2933ca8b31beabb80d3bc2b86->enter($__internal_d1bdf8cfd366715b461fdbb119100899ad9ad6f2933ca8b31beabb80d3bc2b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d1bdf8cfd366715b461fdbb119100899ad9ad6f2933ca8b31beabb80d3bc2b86->leave($__internal_d1bdf8cfd366715b461fdbb119100899ad9ad6f2933ca8b31beabb80d3bc2b86_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ba5fa0ca450922e49ddfd02b9e64885bd4cb501e880a45ece500fc33dc31b968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5fa0ca450922e49ddfd02b9e64885bd4cb501e880a45ece500fc33dc31b968->enter($__internal_ba5fa0ca450922e49ddfd02b9e64885bd4cb501e880a45ece500fc33dc31b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ba5fa0ca450922e49ddfd02b9e64885bd4cb501e880a45ece500fc33dc31b968->leave($__internal_ba5fa0ca450922e49ddfd02b9e64885bd4cb501e880a45ece500fc33dc31b968_prof);

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
