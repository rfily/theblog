<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f9bbae330dfe6b7dd23b64fbffb70c4fc924c844868c75ccd777ff8d3d425f43 extends Twig_Template
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
        $__internal_5d9a7181951c0d881158d652db776dc5813689cc15ea75b6fe6e0bba3a209ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9a7181951c0d881158d652db776dc5813689cc15ea75b6fe6e0bba3a209ef6->enter($__internal_5d9a7181951c0d881158d652db776dc5813689cc15ea75b6fe6e0bba3a209ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5d9a7181951c0d881158d652db776dc5813689cc15ea75b6fe6e0bba3a209ef6->leave($__internal_5d9a7181951c0d881158d652db776dc5813689cc15ea75b6fe6e0bba3a209ef6_prof);

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
