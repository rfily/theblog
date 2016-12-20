<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4ff05425d5f4d05feddd9917f031d834c206cbd7c66c7f2159c844971be4dae9 extends Twig_Template
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
        $__internal_adc0191288b29d37d150cb66641618c8fa489eed9d723f107e9c1e1aa79a886d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc0191288b29d37d150cb66641618c8fa489eed9d723f107e9c1e1aa79a886d->enter($__internal_adc0191288b29d37d150cb66641618c8fa489eed9d723f107e9c1e1aa79a886d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_adc0191288b29d37d150cb66641618c8fa489eed9d723f107e9c1e1aa79a886d->leave($__internal_adc0191288b29d37d150cb66641618c8fa489eed9d723f107e9c1e1aa79a886d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
