<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_1a89148a7f49bb0e7a097cb59d82fad0ca003ed132411a49107fb1b2d42d3fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c86d4e73587a0cfd7a0b8368f73d4e3a0e6f69e13f32598e3f79c2f0fb423492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86d4e73587a0cfd7a0b8368f73d4e3a0e6f69e13f32598e3f79c2f0fb423492->enter($__internal_c86d4e73587a0cfd7a0b8368f73d4e3a0e6f69e13f32598e3f79c2f0fb423492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c86d4e73587a0cfd7a0b8368f73d4e3a0e6f69e13f32598e3f79c2f0fb423492->leave($__internal_c86d4e73587a0cfd7a0b8368f73d4e3a0e6f69e13f32598e3f79c2f0fb423492_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70e0cbacc025aa309c289120df17f7c5c549c397dbcf7cc3b611bf0d5d7c86a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e0cbacc025aa309c289120df17f7c5c549c397dbcf7cc3b611bf0d5d7c86a0->enter($__internal_70e0cbacc025aa309c289120df17f7c5c549c397dbcf7cc3b611bf0d5d7c86a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_70e0cbacc025aa309c289120df17f7c5c549c397dbcf7cc3b611bf0d5d7c86a0->leave($__internal_70e0cbacc025aa309c289120df17f7c5c549c397dbcf7cc3b611bf0d5d7c86a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
