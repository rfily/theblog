<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c580f5791e318987846ef3bd56332827769ae818d269ef6c155bebb6e5eac645 extends Twig_Template
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
        $__internal_ec2ccfde4c1a7b08f4fb94bda74de20f0da9032f1475b46ca9dd49db59ed6f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2ccfde4c1a7b08f4fb94bda74de20f0da9032f1475b46ca9dd49db59ed6f02->enter($__internal_ec2ccfde4c1a7b08f4fb94bda74de20f0da9032f1475b46ca9dd49db59ed6f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2ccfde4c1a7b08f4fb94bda74de20f0da9032f1475b46ca9dd49db59ed6f02->leave($__internal_ec2ccfde4c1a7b08f4fb94bda74de20f0da9032f1475b46ca9dd49db59ed6f02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b9d64a62020692883b3b1e9b2c46e9eb2b4adc2f30e706225308d182efe0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9d64a62020692883b3b1e9b2c46e9eb2b4adc2f30e706225308d182efe0782->enter($__internal_2b9d64a62020692883b3b1e9b2c46e9eb2b4adc2f30e706225308d182efe0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2b9d64a62020692883b3b1e9b2c46e9eb2b4adc2f30e706225308d182efe0782->leave($__internal_2b9d64a62020692883b3b1e9b2c46e9eb2b4adc2f30e706225308d182efe0782_prof);

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
