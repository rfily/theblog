<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8dbc25ccb65e6011feae69bbe2a045e1927e1fdeaabdbb2f1e1d9a09c56b564b extends Twig_Template
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
        $__internal_44fc6e5f6a58860431aa7c66ee6e0ac50f28b865878048dbf643994bb64d6b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fc6e5f6a58860431aa7c66ee6e0ac50f28b865878048dbf643994bb64d6b4c->enter($__internal_44fc6e5f6a58860431aa7c66ee6e0ac50f28b865878048dbf643994bb64d6b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_44fc6e5f6a58860431aa7c66ee6e0ac50f28b865878048dbf643994bb64d6b4c->leave($__internal_44fc6e5f6a58860431aa7c66ee6e0ac50f28b865878048dbf643994bb64d6b4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
