<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_efcd701929b422802b62b9fa9397dac91d07ea24c2336b0b0fa4b9a7a8ca6594 extends Twig_Template
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
        $__internal_202fc53f2abd1de9587cd643f3e7a53d0bd31b41e743a2bf133551bd6773151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202fc53f2abd1de9587cd643f3e7a53d0bd31b41e743a2bf133551bd6773151f->enter($__internal_202fc53f2abd1de9587cd643f3e7a53d0bd31b41e743a2bf133551bd6773151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_202fc53f2abd1de9587cd643f3e7a53d0bd31b41e743a2bf133551bd6773151f->leave($__internal_202fc53f2abd1de9587cd643f3e7a53d0bd31b41e743a2bf133551bd6773151f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
