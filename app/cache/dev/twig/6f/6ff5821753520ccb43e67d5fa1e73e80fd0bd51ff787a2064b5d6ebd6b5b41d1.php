<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_0e26f675ed68bcb3d837e988eb83c5e204183b39029f824280f8142980ff86e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_d2a5a592f5ccbbdf6b2e0b40b78a042c9b47749ef9f8f28d876ae26a71a4507f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a5a592f5ccbbdf6b2e0b40b78a042c9b47749ef9f8f28d876ae26a71a4507f->enter($__internal_d2a5a592f5ccbbdf6b2e0b40b78a042c9b47749ef9f8f28d876ae26a71a4507f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a5a592f5ccbbdf6b2e0b40b78a042c9b47749ef9f8f28d876ae26a71a4507f->leave($__internal_d2a5a592f5ccbbdf6b2e0b40b78a042c9b47749ef9f8f28d876ae26a71a4507f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2846186aad38871dbf9fae802b01adbf6dc56d1769e44ac4752a23bb2929318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2846186aad38871dbf9fae802b01adbf6dc56d1769e44ac4752a23bb2929318->enter($__internal_a2846186aad38871dbf9fae802b01adbf6dc56d1769e44ac4752a23bb2929318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a2846186aad38871dbf9fae802b01adbf6dc56d1769e44ac4752a23bb2929318->leave($__internal_a2846186aad38871dbf9fae802b01adbf6dc56d1769e44ac4752a23bb2929318_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
