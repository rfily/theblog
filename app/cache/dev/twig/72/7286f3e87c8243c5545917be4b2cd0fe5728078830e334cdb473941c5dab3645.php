<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fb2d3e252c81d6b27cf4dea31eadb3aa85d3dcf9865b6b9e173b6652ca95f3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e6d4378776fbea23ae4853285062c55d54c7a68bf5afdb70db29141843c77259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d4378776fbea23ae4853285062c55d54c7a68bf5afdb70db29141843c77259->enter($__internal_e6d4378776fbea23ae4853285062c55d54c7a68bf5afdb70db29141843c77259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d4378776fbea23ae4853285062c55d54c7a68bf5afdb70db29141843c77259->leave($__internal_e6d4378776fbea23ae4853285062c55d54c7a68bf5afdb70db29141843c77259_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5efd83199d3888b3a9bfa993ecd6bf1559ae548ff24f35893140b23dbc509a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efd83199d3888b3a9bfa993ecd6bf1559ae548ff24f35893140b23dbc509a10->enter($__internal_5efd83199d3888b3a9bfa993ecd6bf1559ae548ff24f35893140b23dbc509a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5efd83199d3888b3a9bfa993ecd6bf1559ae548ff24f35893140b23dbc509a10->leave($__internal_5efd83199d3888b3a9bfa993ecd6bf1559ae548ff24f35893140b23dbc509a10_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
