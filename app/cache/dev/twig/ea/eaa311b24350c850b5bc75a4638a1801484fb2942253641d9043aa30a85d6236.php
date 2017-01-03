<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d2be16b795c64376fd4f5acd75ba31e2e79011d5f2c3edc37eaa92e1cc57b8ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9ed6de3797d035e18b2e92295113c385c129daa31990448a5f506afecf0853cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed6de3797d035e18b2e92295113c385c129daa31990448a5f506afecf0853cf->enter($__internal_9ed6de3797d035e18b2e92295113c385c129daa31990448a5f506afecf0853cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed6de3797d035e18b2e92295113c385c129daa31990448a5f506afecf0853cf->leave($__internal_9ed6de3797d035e18b2e92295113c385c129daa31990448a5f506afecf0853cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8728cd08ca9f9cb162744cac79d75e47358cf50f0fa7323119e58029859f226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8728cd08ca9f9cb162744cac79d75e47358cf50f0fa7323119e58029859f226->enter($__internal_c8728cd08ca9f9cb162744cac79d75e47358cf50f0fa7323119e58029859f226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c8728cd08ca9f9cb162744cac79d75e47358cf50f0fa7323119e58029859f226->leave($__internal_c8728cd08ca9f9cb162744cac79d75e47358cf50f0fa7323119e58029859f226_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
