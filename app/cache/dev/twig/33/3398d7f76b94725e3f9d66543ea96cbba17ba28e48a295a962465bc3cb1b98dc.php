<?php

/* @UtilisateursUtilisateur/Default/index.html.twig */
class __TwigTemplate_218fcdfdd8c7266a2600817e962235f62ab4319d7e64f5440021ab9cd6472916 extends Twig_Template
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
        $__internal_09584a42ca8ca7c7046fed2fae09d8ce271c165b5c6c645a75c427c6b5a930dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09584a42ca8ca7c7046fed2fae09d8ce271c165b5c6c645a75c427c6b5a930dd->enter($__internal_09584a42ca8ca7c7046fed2fae09d8ce271c165b5c6c645a75c427c6b5a930dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@UtilisateursUtilisateur/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_09584a42ca8ca7c7046fed2fae09d8ce271c165b5c6c645a75c427c6b5a930dd->leave($__internal_09584a42ca8ca7c7046fed2fae09d8ce271c165b5c6c645a75c427c6b5a930dd_prof);

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
