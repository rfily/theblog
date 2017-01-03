<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b676bd566dc90b277eb6d161eea16132da8f0226dd1dc11ba75fa865ac2cc64a extends Twig_Template
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
        $__internal_e89dbb75a4dbdcf3c50e209495fdf31281d56b62dddd0d96e41d9d322709d9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89dbb75a4dbdcf3c50e209495fdf31281d56b62dddd0d96e41d9d322709d9a0->enter($__internal_e89dbb75a4dbdcf3c50e209495fdf31281d56b62dddd0d96e41d9d322709d9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e89dbb75a4dbdcf3c50e209495fdf31281d56b62dddd0d96e41d9d322709d9a0->leave($__internal_e89dbb75a4dbdcf3c50e209495fdf31281d56b62dddd0d96e41d9d322709d9a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
