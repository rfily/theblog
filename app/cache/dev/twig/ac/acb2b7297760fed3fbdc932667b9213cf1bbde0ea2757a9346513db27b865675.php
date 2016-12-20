<?php

/* UtilisateursUtilisateurBundle:Default:index.html.twig */
class __TwigTemplate_81535be4ee0d2dcceb5a243c15e2ea869fa3cf9393116ad768c5349c75e7e9bf extends Twig_Template
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
        $__internal_dd4cbbe0e8e0e17e53937748562de32875ab485742313f592588685ce4e337b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4cbbe0e8e0e17e53937748562de32875ab485742313f592588685ce4e337b6->enter($__internal_dd4cbbe0e8e0e17e53937748562de32875ab485742313f592588685ce4e337b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateurBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_dd4cbbe0e8e0e17e53937748562de32875ab485742313f592588685ce4e337b6->leave($__internal_dd4cbbe0e8e0e17e53937748562de32875ab485742313f592588685ce4e337b6_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateurBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "UtilisateursUtilisateurBundle:Default:index.html.twig", "C:\\wamp\\www\\theblog\\src\\Utilisateurs\\UtilisateurBundle/Resources/views/Default/index.html.twig");
    }
}
