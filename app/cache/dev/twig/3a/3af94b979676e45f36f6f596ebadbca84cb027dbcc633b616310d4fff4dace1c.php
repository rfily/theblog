<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_da4f23a5f9deaa01dd4a403b70512f576413f07cacd7715be4c9ebd15cbb2c73 extends Twig_Template
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
        $__internal_0057757f7e7a16081434196f899623288c0d7a1a155bc3b4c69824f7dc4f53e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0057757f7e7a16081434196f899623288c0d7a1a155bc3b4c69824f7dc4f53e3->enter($__internal_0057757f7e7a16081434196f899623288c0d7a1a155bc3b4c69824f7dc4f53e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0057757f7e7a16081434196f899623288c0d7a1a155bc3b4c69824f7dc4f53e3->leave($__internal_0057757f7e7a16081434196f899623288c0d7a1a155bc3b4c69824f7dc4f53e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
