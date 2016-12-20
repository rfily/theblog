<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bc0239422a07d0c560983f6fd72ff30d7c8b15ceb01e28b1b52bde409be8dde3 extends Twig_Template
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
        $__internal_b95a76e9b630c6a67eaf88a2a86c01ee9213614bf3ff1d9c2d690fb38be5abc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95a76e9b630c6a67eaf88a2a86c01ee9213614bf3ff1d9c2d690fb38be5abc1->enter($__internal_b95a76e9b630c6a67eaf88a2a86c01ee9213614bf3ff1d9c2d690fb38be5abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b95a76e9b630c6a67eaf88a2a86c01ee9213614bf3ff1d9c2d690fb38be5abc1->leave($__internal_b95a76e9b630c6a67eaf88a2a86c01ee9213614bf3ff1d9c2d690fb38be5abc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
