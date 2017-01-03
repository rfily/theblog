<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6ffd2ec9bdf00ccd6b7ad0d1f075f67903b43fa0287e1348ae12ba28e1ae617d extends Twig_Template
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
        $__internal_76de6b5f958fae95138fd47aa658a786341099dbe941326c0185104a36d1dab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76de6b5f958fae95138fd47aa658a786341099dbe941326c0185104a36d1dab0->enter($__internal_76de6b5f958fae95138fd47aa658a786341099dbe941326c0185104a36d1dab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_76de6b5f958fae95138fd47aa658a786341099dbe941326c0185104a36d1dab0->leave($__internal_76de6b5f958fae95138fd47aa658a786341099dbe941326c0185104a36d1dab0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c4d3c04187f4ae9d9be4f72a500558a086ed312a762d018743622c3c03c7ad70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d3c04187f4ae9d9be4f72a500558a086ed312a762d018743622c3c03c7ad70->enter($__internal_c4d3c04187f4ae9d9be4f72a500558a086ed312a762d018743622c3c03c7ad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c4d3c04187f4ae9d9be4f72a500558a086ed312a762d018743622c3c03c7ad70->leave($__internal_c4d3c04187f4ae9d9be4f72a500558a086ed312a762d018743622c3c03c7ad70_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_280fb13db42cc700e40bea025e75a342bfcf64cc08d697b9d9f4e05316535875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280fb13db42cc700e40bea025e75a342bfcf64cc08d697b9d9f4e05316535875->enter($__internal_280fb13db42cc700e40bea025e75a342bfcf64cc08d697b9d9f4e05316535875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_280fb13db42cc700e40bea025e75a342bfcf64cc08d697b9d9f4e05316535875->leave($__internal_280fb13db42cc700e40bea025e75a342bfcf64cc08d697b9d9f4e05316535875_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eb486ca16bbbdf0f95ec6512c94926cc9d1e3049ba9378fbe8e64a13e5e9ea10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb486ca16bbbdf0f95ec6512c94926cc9d1e3049ba9378fbe8e64a13e5e9ea10->enter($__internal_eb486ca16bbbdf0f95ec6512c94926cc9d1e3049ba9378fbe8e64a13e5e9ea10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eb486ca16bbbdf0f95ec6512c94926cc9d1e3049ba9378fbe8e64a13e5e9ea10->leave($__internal_eb486ca16bbbdf0f95ec6512c94926cc9d1e3049ba9378fbe8e64a13e5e9ea10_prof);

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
