<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_598126d8b174a49abbd98af70b89819b003602ae28256d2f9182a796496bc754 extends Twig_Template
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
        $__internal_da6d1f50be695dcc03185bf5b5c5fb726fe3e3beb3a14e74e2d44c169a915173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6d1f50be695dcc03185bf5b5c5fb726fe3e3beb3a14e74e2d44c169a915173->enter($__internal_da6d1f50be695dcc03185bf5b5c5fb726fe3e3beb3a14e74e2d44c169a915173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_da6d1f50be695dcc03185bf5b5c5fb726fe3e3beb3a14e74e2d44c169a915173->leave($__internal_da6d1f50be695dcc03185bf5b5c5fb726fe3e3beb3a14e74e2d44c169a915173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
