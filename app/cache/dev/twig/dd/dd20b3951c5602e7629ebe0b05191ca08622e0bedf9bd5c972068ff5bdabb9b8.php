<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1d29e1ce7253b7273ec0ac41c4a1f883c6733dc76836d7f8b06aa68be3e5fc94 extends Twig_Template
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
        $__internal_264a7c8084d795316f738ed8e3691863fcb3fc88b91222c29fc3a9a2fb7e1f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264a7c8084d795316f738ed8e3691863fcb3fc88b91222c29fc3a9a2fb7e1f3b->enter($__internal_264a7c8084d795316f738ed8e3691863fcb3fc88b91222c29fc3a9a2fb7e1f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_264a7c8084d795316f738ed8e3691863fcb3fc88b91222c29fc3a9a2fb7e1f3b->leave($__internal_264a7c8084d795316f738ed8e3691863fcb3fc88b91222c29fc3a9a2fb7e1f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
