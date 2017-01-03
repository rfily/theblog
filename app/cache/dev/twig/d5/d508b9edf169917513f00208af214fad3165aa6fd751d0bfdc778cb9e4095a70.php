<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8cdcbbdddede0b9f6af4ff01a9c6110214b871eab947fa7884c124893c54161e extends Twig_Template
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
        $__internal_5292f5f188d05df20bb5c64e3b8ae8132883fbc8b23932825c5039f4f0491613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5292f5f188d05df20bb5c64e3b8ae8132883fbc8b23932825c5039f4f0491613->enter($__internal_5292f5f188d05df20bb5c64e3b8ae8132883fbc8b23932825c5039f4f0491613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5292f5f188d05df20bb5c64e3b8ae8132883fbc8b23932825c5039f4f0491613->leave($__internal_5292f5f188d05df20bb5c64e3b8ae8132883fbc8b23932825c5039f4f0491613_prof);

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
