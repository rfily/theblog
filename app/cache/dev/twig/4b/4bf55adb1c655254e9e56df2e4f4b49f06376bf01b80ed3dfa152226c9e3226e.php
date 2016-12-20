<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3e58422bbcb6b8fbb1a6682e3cda165d151974e01bc895b6c42c4c668078f4f6 extends Twig_Template
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
        $__internal_3cf5bc21f0d95e4a7721fec391f18a79f44a1cd62b9dc0afe2fc4dc9eadcd6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf5bc21f0d95e4a7721fec391f18a79f44a1cd62b9dc0afe2fc4dc9eadcd6d4->enter($__internal_3cf5bc21f0d95e4a7721fec391f18a79f44a1cd62b9dc0afe2fc4dc9eadcd6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3cf5bc21f0d95e4a7721fec391f18a79f44a1cd62b9dc0afe2fc4dc9eadcd6d4->leave($__internal_3cf5bc21f0d95e4a7721fec391f18a79f44a1cd62b9dc0afe2fc4dc9eadcd6d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
