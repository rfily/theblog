<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9784630e54510c70f5c294c3fbc2ee3297d5e73aaeada41406667547a32365cc extends Twig_Template
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
        $__internal_83b2c0145500f03985e57209770bd7dcf6cc0c7e17bf33c61d43c98d78600f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b2c0145500f03985e57209770bd7dcf6cc0c7e17bf33c61d43c98d78600f3a->enter($__internal_83b2c0145500f03985e57209770bd7dcf6cc0c7e17bf33c61d43c98d78600f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83b2c0145500f03985e57209770bd7dcf6cc0c7e17bf33c61d43c98d78600f3a->leave($__internal_83b2c0145500f03985e57209770bd7dcf6cc0c7e17bf33c61d43c98d78600f3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_848a58c09580ad617e23cdd5871fb438444e6be642d14fe312a3d259ef405521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848a58c09580ad617e23cdd5871fb438444e6be642d14fe312a3d259ef405521->enter($__internal_848a58c09580ad617e23cdd5871fb438444e6be642d14fe312a3d259ef405521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_848a58c09580ad617e23cdd5871fb438444e6be642d14fe312a3d259ef405521->leave($__internal_848a58c09580ad617e23cdd5871fb438444e6be642d14fe312a3d259ef405521_prof);

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
