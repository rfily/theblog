<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3e899c9a39ef0be0ffabb360cfa281dc6132d0c8df2b0a39ffed39bb165f3b4e extends Twig_Template
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
        $__internal_d0cf4bab659a6134fd6c0a9b7592098a099bdebc1753908c191e11cdd1480ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cf4bab659a6134fd6c0a9b7592098a099bdebc1753908c191e11cdd1480ba4->enter($__internal_d0cf4bab659a6134fd6c0a9b7592098a099bdebc1753908c191e11cdd1480ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d0cf4bab659a6134fd6c0a9b7592098a099bdebc1753908c191e11cdd1480ba4->leave($__internal_d0cf4bab659a6134fd6c0a9b7592098a099bdebc1753908c191e11cdd1480ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
