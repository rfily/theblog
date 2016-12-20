<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a155a7d257b47d39daa198599d53eba16201a8c61fa49a2cbfae9afb40d6b3f7 extends Twig_Template
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
        $__internal_e77c79e5e16a601e93ecadcff0bfc578232e86870eb4702360870fd9c9263d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77c79e5e16a601e93ecadcff0bfc578232e86870eb4702360870fd9c9263d29->enter($__internal_e77c79e5e16a601e93ecadcff0bfc578232e86870eb4702360870fd9c9263d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77c79e5e16a601e93ecadcff0bfc578232e86870eb4702360870fd9c9263d29->leave($__internal_e77c79e5e16a601e93ecadcff0bfc578232e86870eb4702360870fd9c9263d29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27994ab9d0ed85d66edcc07b5131a4fb15ef756db2834ed1f301c05484ed7675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27994ab9d0ed85d66edcc07b5131a4fb15ef756db2834ed1f301c05484ed7675->enter($__internal_27994ab9d0ed85d66edcc07b5131a4fb15ef756db2834ed1f301c05484ed7675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_27994ab9d0ed85d66edcc07b5131a4fb15ef756db2834ed1f301c05484ed7675->leave($__internal_27994ab9d0ed85d66edcc07b5131a4fb15ef756db2834ed1f301c05484ed7675_prof);

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
