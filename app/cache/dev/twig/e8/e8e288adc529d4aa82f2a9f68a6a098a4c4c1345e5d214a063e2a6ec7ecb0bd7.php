<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_92e64e25af2049b8632589f3d974a6a5f3947f6d2a43480112c5e277b027f755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ff6a501a177469e172169adeeaabfe55e37ce8e12927d02ed517efb0ee3aef1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6a501a177469e172169adeeaabfe55e37ce8e12927d02ed517efb0ee3aef1b->enter($__internal_ff6a501a177469e172169adeeaabfe55e37ce8e12927d02ed517efb0ee3aef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff6a501a177469e172169adeeaabfe55e37ce8e12927d02ed517efb0ee3aef1b->leave($__internal_ff6a501a177469e172169adeeaabfe55e37ce8e12927d02ed517efb0ee3aef1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48b16a9870157086da1ddc34f2629bd83f87941b8074e18a52dfd52268814120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b16a9870157086da1ddc34f2629bd83f87941b8074e18a52dfd52268814120->enter($__internal_48b16a9870157086da1ddc34f2629bd83f87941b8074e18a52dfd52268814120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_48b16a9870157086da1ddc34f2629bd83f87941b8074e18a52dfd52268814120->leave($__internal_48b16a9870157086da1ddc34f2629bd83f87941b8074e18a52dfd52268814120_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
