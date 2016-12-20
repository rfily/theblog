<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_25d4a37bb81448318fbf453b1e9d6ef5b0eb4ec9c80f4236c9465d40cd85abcf extends Twig_Template
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
        $__internal_54a817f9d9cf3bf645d781b0c6c8d0d592a1c85168b61106b828ed61d28825f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a817f9d9cf3bf645d781b0c6c8d0d592a1c85168b61106b828ed61d28825f2->enter($__internal_54a817f9d9cf3bf645d781b0c6c8d0d592a1c85168b61106b828ed61d28825f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_54a817f9d9cf3bf645d781b0c6c8d0d592a1c85168b61106b828ed61d28825f2->leave($__internal_54a817f9d9cf3bf645d781b0c6c8d0d592a1c85168b61106b828ed61d28825f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
