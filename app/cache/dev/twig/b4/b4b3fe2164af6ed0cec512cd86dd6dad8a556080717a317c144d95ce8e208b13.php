<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b6ea6ff75e4bcd8e7a896e147b3b252e19a8fbd4368390a002ee3678c8d762cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_2f900a0c2b6c2069422131f9ebbd4c8762719a1391c140d563f8bba07adf2180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f900a0c2b6c2069422131f9ebbd4c8762719a1391c140d563f8bba07adf2180->enter($__internal_2f900a0c2b6c2069422131f9ebbd4c8762719a1391c140d563f8bba07adf2180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f900a0c2b6c2069422131f9ebbd4c8762719a1391c140d563f8bba07adf2180->leave($__internal_2f900a0c2b6c2069422131f9ebbd4c8762719a1391c140d563f8bba07adf2180_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5511c0803c284dc757432ec63dfd5e164c08146cad0ce168721ff57e20388fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5511c0803c284dc757432ec63dfd5e164c08146cad0ce168721ff57e20388fa9->enter($__internal_5511c0803c284dc757432ec63dfd5e164c08146cad0ce168721ff57e20388fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_5511c0803c284dc757432ec63dfd5e164c08146cad0ce168721ff57e20388fa9->leave($__internal_5511c0803c284dc757432ec63dfd5e164c08146cad0ce168721ff57e20388fa9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
