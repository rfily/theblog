<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fb46e0c17133133d70f614ef0df5eb24c55f0b3c2ebc1f28080830d4e9381943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_637ef8dc286096f019963cfbc5ccabe02603db1b59265ee46090fa17575e6cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637ef8dc286096f019963cfbc5ccabe02603db1b59265ee46090fa17575e6cd4->enter($__internal_637ef8dc286096f019963cfbc5ccabe02603db1b59265ee46090fa17575e6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637ef8dc286096f019963cfbc5ccabe02603db1b59265ee46090fa17575e6cd4->leave($__internal_637ef8dc286096f019963cfbc5ccabe02603db1b59265ee46090fa17575e6cd4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c3ee7dca428ed3ebcecab9e64264c6e31e1996bccda8b57761ce18444792b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3ee7dca428ed3ebcecab9e64264c6e31e1996bccda8b57761ce18444792b79->enter($__internal_4c3ee7dca428ed3ebcecab9e64264c6e31e1996bccda8b57761ce18444792b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4c3ee7dca428ed3ebcecab9e64264c6e31e1996bccda8b57761ce18444792b79->leave($__internal_4c3ee7dca428ed3ebcecab9e64264c6e31e1996bccda8b57761ce18444792b79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
