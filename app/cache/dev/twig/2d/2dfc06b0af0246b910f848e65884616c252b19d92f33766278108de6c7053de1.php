<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_13a40113532be10a7e43a78b23beb8458535407c407c801c6d31f59f6d015c2d extends Twig_Template
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
        $__internal_0b3122a3e6aab93df034b727407b52b93271ba34b63826abf43f1eb74373d6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3122a3e6aab93df034b727407b52b93271ba34b63826abf43f1eb74373d6a4->enter($__internal_0b3122a3e6aab93df034b727407b52b93271ba34b63826abf43f1eb74373d6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0b3122a3e6aab93df034b727407b52b93271ba34b63826abf43f1eb74373d6a4->leave($__internal_0b3122a3e6aab93df034b727407b52b93271ba34b63826abf43f1eb74373d6a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
