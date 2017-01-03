<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_6be7835a9cdf3f212e3a6f37b4988a12912e482e4295b5ebf1b8777e7c02aed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f84bb0f9c126e5346200821fbb3faa5baaa61697bb9aa2e48bb6bec6680ab8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84bb0f9c126e5346200821fbb3faa5baaa61697bb9aa2e48bb6bec6680ab8ce->enter($__internal_f84bb0f9c126e5346200821fbb3faa5baaa61697bb9aa2e48bb6bec6680ab8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84bb0f9c126e5346200821fbb3faa5baaa61697bb9aa2e48bb6bec6680ab8ce->leave($__internal_f84bb0f9c126e5346200821fbb3faa5baaa61697bb9aa2e48bb6bec6680ab8ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71006d7bd51e09432b69d38fadd760d99ddbfabc81881812ab5f866b62050b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71006d7bd51e09432b69d38fadd760d99ddbfabc81881812ab5f866b62050b1a->enter($__internal_71006d7bd51e09432b69d38fadd760d99ddbfabc81881812ab5f866b62050b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_71006d7bd51e09432b69d38fadd760d99ddbfabc81881812ab5f866b62050b1a->leave($__internal_71006d7bd51e09432b69d38fadd760d99ddbfabc81881812ab5f866b62050b1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
