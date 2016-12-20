<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_61940537c9a9037dc13b520ddf3a1505f13cc5ab3cab1785ac796407761e44b7 extends Twig_Template
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
        $__internal_17b526a44eb9d1ae87aab3f958be1a50cfc8c024bf14f39da72a5e0318acb396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b526a44eb9d1ae87aab3f958be1a50cfc8c024bf14f39da72a5e0318acb396->enter($__internal_17b526a44eb9d1ae87aab3f958be1a50cfc8c024bf14f39da72a5e0318acb396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_17b526a44eb9d1ae87aab3f958be1a50cfc8c024bf14f39da72a5e0318acb396->leave($__internal_17b526a44eb9d1ae87aab3f958be1a50cfc8c024bf14f39da72a5e0318acb396_prof);

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
