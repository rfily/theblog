<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dc47c7f0b70440fa67e78adaa0f61ff4a4688aa02a11b03fce970c18d0cdee74 extends Twig_Template
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
        $__internal_c3fcf0b95917672c258fd6dcd3ea286e97bdf392f312d41dfe3e3851305dccc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fcf0b95917672c258fd6dcd3ea286e97bdf392f312d41dfe3e3851305dccc2->enter($__internal_c3fcf0b95917672c258fd6dcd3ea286e97bdf392f312d41dfe3e3851305dccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c3fcf0b95917672c258fd6dcd3ea286e97bdf392f312d41dfe3e3851305dccc2->leave($__internal_c3fcf0b95917672c258fd6dcd3ea286e97bdf392f312d41dfe3e3851305dccc2_prof);

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
