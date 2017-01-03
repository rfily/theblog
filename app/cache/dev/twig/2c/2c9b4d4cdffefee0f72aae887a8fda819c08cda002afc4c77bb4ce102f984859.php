<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_05fd900bd780b15ac84e3bd89673dee5f6a60bd09721626efd6b010b2ff05a6e extends Twig_Template
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
        $__internal_d2bd5f3ae59e7c2844437914dfd8ac0ec2688c337069a9e2288343cdc426b027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bd5f3ae59e7c2844437914dfd8ac0ec2688c337069a9e2288343cdc426b027->enter($__internal_d2bd5f3ae59e7c2844437914dfd8ac0ec2688c337069a9e2288343cdc426b027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d2bd5f3ae59e7c2844437914dfd8ac0ec2688c337069a9e2288343cdc426b027->leave($__internal_d2bd5f3ae59e7c2844437914dfd8ac0ec2688c337069a9e2288343cdc426b027_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
