<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a367fa1ac56170f076a2ec5438b18f800824fb8e030a3010c021e8fc6955555a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ce71edd358dab0b00f1bfbcc81eb3f93206c32d542563c552d429c8a58eff2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce71edd358dab0b00f1bfbcc81eb3f93206c32d542563c552d429c8a58eff2f2->enter($__internal_ce71edd358dab0b00f1bfbcc81eb3f93206c32d542563c552d429c8a58eff2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce71edd358dab0b00f1bfbcc81eb3f93206c32d542563c552d429c8a58eff2f2->leave($__internal_ce71edd358dab0b00f1bfbcc81eb3f93206c32d542563c552d429c8a58eff2f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29af9d7a5f7112a71a5feb33315a6515331301d2b92eec58ceafb0ee59b4f849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29af9d7a5f7112a71a5feb33315a6515331301d2b92eec58ceafb0ee59b4f849->enter($__internal_29af9d7a5f7112a71a5feb33315a6515331301d2b92eec58ceafb0ee59b4f849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_29af9d7a5f7112a71a5feb33315a6515331301d2b92eec58ceafb0ee59b4f849->leave($__internal_29af9d7a5f7112a71a5feb33315a6515331301d2b92eec58ceafb0ee59b4f849_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
