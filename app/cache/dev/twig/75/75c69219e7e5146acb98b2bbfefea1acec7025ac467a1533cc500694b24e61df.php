<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_17b2a1f06141abde38b2a94dfbe944cbb6238c306c579ef3894a62a0ad9da497 extends Twig_Template
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
        $__internal_37cf34edea4243da42447fabc3aabfa8f2bcc1adbe411d1d7fdecb3b2123b4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cf34edea4243da42447fabc3aabfa8f2bcc1adbe411d1d7fdecb3b2123b4f4->enter($__internal_37cf34edea4243da42447fabc3aabfa8f2bcc1adbe411d1d7fdecb3b2123b4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_37cf34edea4243da42447fabc3aabfa8f2bcc1adbe411d1d7fdecb3b2123b4f4->leave($__internal_37cf34edea4243da42447fabc3aabfa8f2bcc1adbe411d1d7fdecb3b2123b4f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
