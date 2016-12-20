<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1f807246a4d8fdbe0a113f24b01bbadd10572b572bdd4086cc938c42bce5f20b extends Twig_Template
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
        $__internal_9194e25ae8a054e43de6b197bea67b8ba3fda3d8c3f6d6a9c727558eff0ace9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9194e25ae8a054e43de6b197bea67b8ba3fda3d8c3f6d6a9c727558eff0ace9f->enter($__internal_9194e25ae8a054e43de6b197bea67b8ba3fda3d8c3f6d6a9c727558eff0ace9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9194e25ae8a054e43de6b197bea67b8ba3fda3d8c3f6d6a9c727558eff0ace9f->leave($__internal_9194e25ae8a054e43de6b197bea67b8ba3fda3d8c3f6d6a9c727558eff0ace9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
