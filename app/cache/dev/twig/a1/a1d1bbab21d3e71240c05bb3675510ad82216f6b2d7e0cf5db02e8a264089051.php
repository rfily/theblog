<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0ceb81f3a8480578a1743bd3bfa946f7a13356d91e127a80e91071ec80ecd783 extends Twig_Template
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
        $__internal_0b3c09a9bbe0291c364eeaf78fb2a4d53c9bfccfba1bb3da068ada097de7a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3c09a9bbe0291c364eeaf78fb2a4d53c9bfccfba1bb3da068ada097de7a3db->enter($__internal_0b3c09a9bbe0291c364eeaf78fb2a4d53c9bfccfba1bb3da068ada097de7a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0b3c09a9bbe0291c364eeaf78fb2a4d53c9bfccfba1bb3da068ada097de7a3db->leave($__internal_0b3c09a9bbe0291c364eeaf78fb2a4d53c9bfccfba1bb3da068ada097de7a3db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
