<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f65124527762b28a00c5c5264fa2db21c13749e797bfbcd3acfe31e0a7f9ce7d extends Twig_Template
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
        $__internal_03d13f12c4e57e75aa71d58dcb4ece80717d7171c65bd7b786ccc382b0888db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d13f12c4e57e75aa71d58dcb4ece80717d7171c65bd7b786ccc382b0888db3->enter($__internal_03d13f12c4e57e75aa71d58dcb4ece80717d7171c65bd7b786ccc382b0888db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_03d13f12c4e57e75aa71d58dcb4ece80717d7171c65bd7b786ccc382b0888db3->leave($__internal_03d13f12c4e57e75aa71d58dcb4ece80717d7171c65bd7b786ccc382b0888db3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
