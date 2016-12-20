<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_4c64a02ca64bc03cf6fe3cac5d885adf39417cf24c450f30167ee0a5b71f6b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fd4602aa50fc00d5d36b6c563ad61bc599b2d9ff0cfae5a70608184dffbee8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4602aa50fc00d5d36b6c563ad61bc599b2d9ff0cfae5a70608184dffbee8ed->enter($__internal_fd4602aa50fc00d5d36b6c563ad61bc599b2d9ff0cfae5a70608184dffbee8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4602aa50fc00d5d36b6c563ad61bc599b2d9ff0cfae5a70608184dffbee8ed->leave($__internal_fd4602aa50fc00d5d36b6c563ad61bc599b2d9ff0cfae5a70608184dffbee8ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afddde79cfb9b09c4cfb3aa457d40ec4104156b0b4c2b1cc5df08954eff90508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afddde79cfb9b09c4cfb3aa457d40ec4104156b0b4c2b1cc5df08954eff90508->enter($__internal_afddde79cfb9b09c4cfb3aa457d40ec4104156b0b4c2b1cc5df08954eff90508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_afddde79cfb9b09c4cfb3aa457d40ec4104156b0b4c2b1cc5df08954eff90508->leave($__internal_afddde79cfb9b09c4cfb3aa457d40ec4104156b0b4c2b1cc5df08954eff90508_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
