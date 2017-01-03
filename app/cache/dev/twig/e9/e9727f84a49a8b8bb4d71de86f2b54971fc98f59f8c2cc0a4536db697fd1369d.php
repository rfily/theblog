<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5c8f294f08a06cf6dda534a4245cba9ef794c891403c98feb4f462093883b556 extends Twig_Template
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
        $__internal_b06efbfec3cc1cee38088b27e812122db0072cae7a7a6cac177463cf250681fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06efbfec3cc1cee38088b27e812122db0072cae7a7a6cac177463cf250681fc->enter($__internal_b06efbfec3cc1cee38088b27e812122db0072cae7a7a6cac177463cf250681fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b06efbfec3cc1cee38088b27e812122db0072cae7a7a6cac177463cf250681fc->leave($__internal_b06efbfec3cc1cee38088b27e812122db0072cae7a7a6cac177463cf250681fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f68e81cbbf961be8398dba9fa565de39172a591615764aac3316abece7217384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68e81cbbf961be8398dba9fa565de39172a591615764aac3316abece7217384->enter($__internal_f68e81cbbf961be8398dba9fa565de39172a591615764aac3316abece7217384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f68e81cbbf961be8398dba9fa565de39172a591615764aac3316abece7217384->leave($__internal_f68e81cbbf961be8398dba9fa565de39172a591615764aac3316abece7217384_prof);

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
