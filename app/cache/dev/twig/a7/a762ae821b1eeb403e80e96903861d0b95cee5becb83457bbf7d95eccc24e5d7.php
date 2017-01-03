<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_415b61208463c44cd31db91c5dbf6b7b407fadcb983422441b40935a74a3bf66 extends Twig_Template
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
        $__internal_2628ea5f93958b4c4c89070b851fb81843f5796d490641a29bd660ed9a08e318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2628ea5f93958b4c4c89070b851fb81843f5796d490641a29bd660ed9a08e318->enter($__internal_2628ea5f93958b4c4c89070b851fb81843f5796d490641a29bd660ed9a08e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2628ea5f93958b4c4c89070b851fb81843f5796d490641a29bd660ed9a08e318->leave($__internal_2628ea5f93958b4c4c89070b851fb81843f5796d490641a29bd660ed9a08e318_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
