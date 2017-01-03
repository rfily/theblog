<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_228e105e487814e1f71d518d5a6c4711edb31be905525e689acf1752a05bbbe7 extends Twig_Template
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
        $__internal_dd1c48f0d090bd36e690059f9427c48c1093acaf978fc4f0c370757ac24f4794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1c48f0d090bd36e690059f9427c48c1093acaf978fc4f0c370757ac24f4794->enter($__internal_dd1c48f0d090bd36e690059f9427c48c1093acaf978fc4f0c370757ac24f4794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dd1c48f0d090bd36e690059f9427c48c1093acaf978fc4f0c370757ac24f4794->leave($__internal_dd1c48f0d090bd36e690059f9427c48c1093acaf978fc4f0c370757ac24f4794_prof);

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
