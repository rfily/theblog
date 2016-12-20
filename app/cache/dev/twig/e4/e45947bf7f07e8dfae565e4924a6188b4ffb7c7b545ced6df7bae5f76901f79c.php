<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_354cb513554a9bae9e8c841fa499432a9e707a7548557c171317ff688b05c76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_78921cdce9c439a9ca823dc2badeaf0386ca4cb27f855d474757a91562c82716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78921cdce9c439a9ca823dc2badeaf0386ca4cb27f855d474757a91562c82716->enter($__internal_78921cdce9c439a9ca823dc2badeaf0386ca4cb27f855d474757a91562c82716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78921cdce9c439a9ca823dc2badeaf0386ca4cb27f855d474757a91562c82716->leave($__internal_78921cdce9c439a9ca823dc2badeaf0386ca4cb27f855d474757a91562c82716_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec1e3dbfa9426bb601cd10197b23955c1b7eb4dabe46c596970ff331b87c0f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1e3dbfa9426bb601cd10197b23955c1b7eb4dabe46c596970ff331b87c0f74->enter($__internal_ec1e3dbfa9426bb601cd10197b23955c1b7eb4dabe46c596970ff331b87c0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ec1e3dbfa9426bb601cd10197b23955c1b7eb4dabe46c596970ff331b87c0f74->leave($__internal_ec1e3dbfa9426bb601cd10197b23955c1b7eb4dabe46c596970ff331b87c0f74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
