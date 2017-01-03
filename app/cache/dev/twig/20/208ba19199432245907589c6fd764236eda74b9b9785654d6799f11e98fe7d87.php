<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_89d61cf2572f92f0ad2f13c29743164eba7f16395ca731eb6d08f384303940d8 extends Twig_Template
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
        $__internal_ee10fdac3190748564c76ddddf0af710ad4962c7bc8234343d2abbe4c2b27467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee10fdac3190748564c76ddddf0af710ad4962c7bc8234343d2abbe4c2b27467->enter($__internal_ee10fdac3190748564c76ddddf0af710ad4962c7bc8234343d2abbe4c2b27467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee10fdac3190748564c76ddddf0af710ad4962c7bc8234343d2abbe4c2b27467->leave($__internal_ee10fdac3190748564c76ddddf0af710ad4962c7bc8234343d2abbe4c2b27467_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e9bc004bd53bd761d95319c3e78e638ae601064d623b56f6e96e04b1bf05a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9bc004bd53bd761d95319c3e78e638ae601064d623b56f6e96e04b1bf05a8a->enter($__internal_1e9bc004bd53bd761d95319c3e78e638ae601064d623b56f6e96e04b1bf05a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_1e9bc004bd53bd761d95319c3e78e638ae601064d623b56f6e96e04b1bf05a8a->leave($__internal_1e9bc004bd53bd761d95319c3e78e638ae601064d623b56f6e96e04b1bf05a8a_prof);

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
