<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f59af81c4ec986c85838016be80ecf154d76cd6f83b4d515f1a2c4254d709c68 extends Twig_Template
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
        $__internal_c13aa7fbb6206e8190746829d5c7df213d893547d2cb5419cc1a2ad7dc393da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13aa7fbb6206e8190746829d5c7df213d893547d2cb5419cc1a2ad7dc393da0->enter($__internal_c13aa7fbb6206e8190746829d5c7df213d893547d2cb5419cc1a2ad7dc393da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c13aa7fbb6206e8190746829d5c7df213d893547d2cb5419cc1a2ad7dc393da0->leave($__internal_c13aa7fbb6206e8190746829d5c7df213d893547d2cb5419cc1a2ad7dc393da0_prof);

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
