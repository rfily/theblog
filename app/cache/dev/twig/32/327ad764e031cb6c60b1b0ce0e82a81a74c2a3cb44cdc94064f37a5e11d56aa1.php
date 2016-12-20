<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6bc88384541263c6910e21e101b35c9b0558607df29e4355c4a1bd49183aecc6 extends Twig_Template
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
        $__internal_48399ffab93ef3b69b69a2ccaa0c46c1623b1b68bdbf4797631ade5e23784580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48399ffab93ef3b69b69a2ccaa0c46c1623b1b68bdbf4797631ade5e23784580->enter($__internal_48399ffab93ef3b69b69a2ccaa0c46c1623b1b68bdbf4797631ade5e23784580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_48399ffab93ef3b69b69a2ccaa0c46c1623b1b68bdbf4797631ade5e23784580->leave($__internal_48399ffab93ef3b69b69a2ccaa0c46c1623b1b68bdbf4797631ade5e23784580_prof);

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
