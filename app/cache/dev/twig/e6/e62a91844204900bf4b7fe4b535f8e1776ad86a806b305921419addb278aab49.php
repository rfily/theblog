<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a2ef235e9a5c07c95f18c382401e6cd9ccd96870f7d71c55dd76d9bae29f2e5b extends Twig_Template
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
        $__internal_91e1070c06c5b68a652d5af10f0c8c14123686576f9ab09738fecca065d990f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e1070c06c5b68a652d5af10f0c8c14123686576f9ab09738fecca065d990f4->enter($__internal_91e1070c06c5b68a652d5af10f0c8c14123686576f9ab09738fecca065d990f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_91e1070c06c5b68a652d5af10f0c8c14123686576f9ab09738fecca065d990f4->leave($__internal_91e1070c06c5b68a652d5af10f0c8c14123686576f9ab09738fecca065d990f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
