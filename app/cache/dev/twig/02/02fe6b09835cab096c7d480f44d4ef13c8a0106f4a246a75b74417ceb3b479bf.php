<?php

/* @UtilisateursUtilisateur/Default/index.html.twig */
class __TwigTemplate_3c12bf4ed6d965ebb0e0dc4af62e3915fd6f99a9ef09cf54f5cb36840a39728b extends Twig_Template
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
        $__internal_2b35b607904fc541d4572c71d62e261d610ca3a3e4dff591ed27c327eac16a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b35b607904fc541d4572c71d62e261d610ca3a3e4dff591ed27c327eac16a79->enter($__internal_2b35b607904fc541d4572c71d62e261d610ca3a3e4dff591ed27c327eac16a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateur/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2b35b607904fc541d4572c71d62e261d610ca3a3e4dff591ed27c327eac16a79->leave($__internal_2b35b607904fc541d4572c71d62e261d610ca3a3e4dff591ed27c327eac16a79_prof);

    }

    public function getTemplateName()
    {
        return "@UtilisateursUtilisateur/Default/index.html.twig";
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
", "@UtilisateursUtilisateur/Default/index.html.twig", "C:\\wamp\\www\\theblog\\src\\Utilisateurs\\UtilisateurBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
