<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e983bb211827e34500858f263df945aca38e5ba96edc370f53565c5f95d6f36c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b4a58d89e5db24a7a3a7b1eb1a14e24d1f235e20120c8613793894866f3d974d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a58d89e5db24a7a3a7b1eb1a14e24d1f235e20120c8613793894866f3d974d->enter($__internal_b4a58d89e5db24a7a3a7b1eb1a14e24d1f235e20120c8613793894866f3d974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a58d89e5db24a7a3a7b1eb1a14e24d1f235e20120c8613793894866f3d974d->leave($__internal_b4a58d89e5db24a7a3a7b1eb1a14e24d1f235e20120c8613793894866f3d974d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e4f4997bcd9944b4687d04d9bd08b6db87a93c296cf39b98e9482c5be70fa70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4f4997bcd9944b4687d04d9bd08b6db87a93c296cf39b98e9482c5be70fa70->enter($__internal_8e4f4997bcd9944b4687d04d9bd08b6db87a93c296cf39b98e9482c5be70fa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8e4f4997bcd9944b4687d04d9bd08b6db87a93c296cf39b98e9482c5be70fa70->leave($__internal_8e4f4997bcd9944b4687d04d9bd08b6db87a93c296cf39b98e9482c5be70fa70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
