<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_088de561eaf7e79846c993a3a8f35528f5bfb4147b6b4b1fde7e9a26a9ef4f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_3e46087d4aaaef2607a1239f02f8c46db5edf1632976066dc7b82b0e0b4643ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e46087d4aaaef2607a1239f02f8c46db5edf1632976066dc7b82b0e0b4643ff->enter($__internal_3e46087d4aaaef2607a1239f02f8c46db5edf1632976066dc7b82b0e0b4643ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e46087d4aaaef2607a1239f02f8c46db5edf1632976066dc7b82b0e0b4643ff->leave($__internal_3e46087d4aaaef2607a1239f02f8c46db5edf1632976066dc7b82b0e0b4643ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e9090d0d70d90390f4bab6eed34fa3b3e1b63525169369e4c2d3fafce93e4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9090d0d70d90390f4bab6eed34fa3b3e1b63525169369e4c2d3fafce93e4c9->enter($__internal_6e9090d0d70d90390f4bab6eed34fa3b3e1b63525169369e4c2d3fafce93e4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_6e9090d0d70d90390f4bab6eed34fa3b3e1b63525169369e4c2d3fafce93e4c9->leave($__internal_6e9090d0d70d90390f4bab6eed34fa3b3e1b63525169369e4c2d3fafce93e4c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
