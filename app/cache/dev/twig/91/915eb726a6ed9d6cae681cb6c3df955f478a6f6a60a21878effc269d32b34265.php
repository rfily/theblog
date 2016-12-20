<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e44d4bfb1d6cb782b002db34732219e43e8e72087236bf9066507d4502e4b7fc extends Twig_Template
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
        $__internal_eb04b1fd983024749ee42e81134629af22d4f83f58e871e1d56a1f40d82c21c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb04b1fd983024749ee42e81134629af22d4f83f58e871e1d56a1f40d82c21c0->enter($__internal_eb04b1fd983024749ee42e81134629af22d4f83f58e871e1d56a1f40d82c21c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_eb04b1fd983024749ee42e81134629af22d4f83f58e871e1d56a1f40d82c21c0->leave($__internal_eb04b1fd983024749ee42e81134629af22d4f83f58e871e1d56a1f40d82c21c0_prof);

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
