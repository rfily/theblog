<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_6e178da02d5af4d0a51a908456b8465ec4a0d80fb48f2ab970b0131f2f0c98c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_354c2bbeb8d817a2a5a9c576d25d85467700c5b7a93c3848f79a2df93df41e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354c2bbeb8d817a2a5a9c576d25d85467700c5b7a93c3848f79a2df93df41e2c->enter($__internal_354c2bbeb8d817a2a5a9c576d25d85467700c5b7a93c3848f79a2df93df41e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_354c2bbeb8d817a2a5a9c576d25d85467700c5b7a93c3848f79a2df93df41e2c->leave($__internal_354c2bbeb8d817a2a5a9c576d25d85467700c5b7a93c3848f79a2df93df41e2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3f44bcce79afbbab823db9cd908a854d0f6dd876c6ffd0ba4a33b492f72127d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f44bcce79afbbab823db9cd908a854d0f6dd876c6ffd0ba4a33b492f72127d->enter($__internal_d3f44bcce79afbbab823db9cd908a854d0f6dd876c6ffd0ba4a33b492f72127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d3f44bcce79afbbab823db9cd908a854d0f6dd876c6ffd0ba4a33b492f72127d->leave($__internal_d3f44bcce79afbbab823db9cd908a854d0f6dd876c6ffd0ba4a33b492f72127d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
