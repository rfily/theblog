<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_449fc718903e99c76a86487f834b0d03f63966e450a458efeb85106de95f0a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bfe77bff46dbbabf328f6af00e890d48db080da8240a592690c193926a9a4d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe77bff46dbbabf328f6af00e890d48db080da8240a592690c193926a9a4d1c->enter($__internal_bfe77bff46dbbabf328f6af00e890d48db080da8240a592690c193926a9a4d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe77bff46dbbabf328f6af00e890d48db080da8240a592690c193926a9a4d1c->leave($__internal_bfe77bff46dbbabf328f6af00e890d48db080da8240a592690c193926a9a4d1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e397b90737f784cab17f086f42c8f46964f9bb308b56abca335105d2951ec24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e397b90737f784cab17f086f42c8f46964f9bb308b56abca335105d2951ec24d->enter($__internal_e397b90737f784cab17f086f42c8f46964f9bb308b56abca335105d2951ec24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e397b90737f784cab17f086f42c8f46964f9bb308b56abca335105d2951ec24d->leave($__internal_e397b90737f784cab17f086f42c8f46964f9bb308b56abca335105d2951ec24d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
