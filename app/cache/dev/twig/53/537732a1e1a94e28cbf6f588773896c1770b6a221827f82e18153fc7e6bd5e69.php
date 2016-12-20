<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b2f140c70b228b90724f3594d4b63bf31ead7678270db88cecadf5936ebd63ad extends Twig_Template
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
        $__internal_25151bb7e7010ec0621b51d3cd87a18910dc9b977b4709b222d90ed0cb41bfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25151bb7e7010ec0621b51d3cd87a18910dc9b977b4709b222d90ed0cb41bfd2->enter($__internal_25151bb7e7010ec0621b51d3cd87a18910dc9b977b4709b222d90ed0cb41bfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_25151bb7e7010ec0621b51d3cd87a18910dc9b977b4709b222d90ed0cb41bfd2->leave($__internal_25151bb7e7010ec0621b51d3cd87a18910dc9b977b4709b222d90ed0cb41bfd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
