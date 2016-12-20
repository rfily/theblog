<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_496ee4e430701d2f307d44756ec0314ef63f4add9932241d319012de4c517964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b1bb506b0735060fa8ac86551dfbed75fe0eefa44680fbde0ce99cf7f4014ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bb506b0735060fa8ac86551dfbed75fe0eefa44680fbde0ce99cf7f4014ee2->enter($__internal_b1bb506b0735060fa8ac86551dfbed75fe0eefa44680fbde0ce99cf7f4014ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1bb506b0735060fa8ac86551dfbed75fe0eefa44680fbde0ce99cf7f4014ee2->leave($__internal_b1bb506b0735060fa8ac86551dfbed75fe0eefa44680fbde0ce99cf7f4014ee2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79e184fbba52036db42dd50c2f696970895db4afe3bdaaf887df50124864a90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e184fbba52036db42dd50c2f696970895db4afe3bdaaf887df50124864a90a->enter($__internal_79e184fbba52036db42dd50c2f696970895db4afe3bdaaf887df50124864a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_79e184fbba52036db42dd50c2f696970895db4afe3bdaaf887df50124864a90a->leave($__internal_79e184fbba52036db42dd50c2f696970895db4afe3bdaaf887df50124864a90a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
