<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f2f7b6ebd0aff204b79b76de7fc5b372450b39b5855086ce2861c46cc9217f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_143f65d4aca6d2b243a268ee8512cb9e8a4a64de1bf08e07b695bc69c9ba0c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143f65d4aca6d2b243a268ee8512cb9e8a4a64de1bf08e07b695bc69c9ba0c2b->enter($__internal_143f65d4aca6d2b243a268ee8512cb9e8a4a64de1bf08e07b695bc69c9ba0c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143f65d4aca6d2b243a268ee8512cb9e8a4a64de1bf08e07b695bc69c9ba0c2b->leave($__internal_143f65d4aca6d2b243a268ee8512cb9e8a4a64de1bf08e07b695bc69c9ba0c2b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9577313bd8625c193433abe52447c8086c7df354a4cc6a64fdef1d62afc9d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9577313bd8625c193433abe52447c8086c7df354a4cc6a64fdef1d62afc9d9c->enter($__internal_e9577313bd8625c193433abe52447c8086c7df354a4cc6a64fdef1d62afc9d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e9577313bd8625c193433abe52447c8086c7df354a4cc6a64fdef1d62afc9d9c->leave($__internal_e9577313bd8625c193433abe52447c8086c7df354a4cc6a64fdef1d62afc9d9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
