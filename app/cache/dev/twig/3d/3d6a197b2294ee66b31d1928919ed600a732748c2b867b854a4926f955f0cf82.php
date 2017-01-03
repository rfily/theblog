<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0c3c13532049d58cc12ac4a7a6a767a3a8f649cbe9e0bd192ca2aee2d7f29267 extends Twig_Template
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
        $__internal_de8ad7c9a39651ad4e1f3b4a395b6cbd72205a50eaf0bea08745d043848a885d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8ad7c9a39651ad4e1f3b4a395b6cbd72205a50eaf0bea08745d043848a885d->enter($__internal_de8ad7c9a39651ad4e1f3b4a395b6cbd72205a50eaf0bea08745d043848a885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_de8ad7c9a39651ad4e1f3b4a395b6cbd72205a50eaf0bea08745d043848a885d->leave($__internal_de8ad7c9a39651ad4e1f3b4a395b6cbd72205a50eaf0bea08745d043848a885d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
