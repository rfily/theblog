<?php

/* UtilisateursUtilisateurBundle:Default:index.html.twig */
class __TwigTemplate_b641d058a04ac8163ac7450476db4b90cfa219a4b199f497ee0f260986f62cf8 extends Twig_Template
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
        $__internal_4020c67bff029a3b9036e636e8252d155ea04c31f3e058f47784c2a3453339a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4020c67bff029a3b9036e636e8252d155ea04c31f3e058f47784c2a3453339a5->enter($__internal_4020c67bff029a3b9036e636e8252d155ea04c31f3e058f47784c2a3453339a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateurBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4020c67bff029a3b9036e636e8252d155ea04c31f3e058f47784c2a3453339a5->leave($__internal_4020c67bff029a3b9036e636e8252d155ea04c31f3e058f47784c2a3453339a5_prof);

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
