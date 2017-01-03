<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f2a99020e294dfa33ad1ed6bf45621c0ff09e2b719924ffdd9b4529b0f80de98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a519a7bc48c0d22899ba92656cc24aa8957199d9b4c1e813f6e2159a886c4523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a519a7bc48c0d22899ba92656cc24aa8957199d9b4c1e813f6e2159a886c4523->enter($__internal_a519a7bc48c0d22899ba92656cc24aa8957199d9b4c1e813f6e2159a886c4523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a519a7bc48c0d22899ba92656cc24aa8957199d9b4c1e813f6e2159a886c4523->leave($__internal_a519a7bc48c0d22899ba92656cc24aa8957199d9b4c1e813f6e2159a886c4523_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
