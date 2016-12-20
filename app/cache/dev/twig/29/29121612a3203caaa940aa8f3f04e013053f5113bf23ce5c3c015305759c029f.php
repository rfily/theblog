<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0f23680dc9fae660c552f0360b0de6fe2d669d04ca5c47cfd3c3cef39891fbaf extends Twig_Template
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
        $__internal_80fbc644ed5579aef2a5eacf34ca8639574523fe8c9708f2fe733f1a1cf55b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fbc644ed5579aef2a5eacf34ca8639574523fe8c9708f2fe733f1a1cf55b9c->enter($__internal_80fbc644ed5579aef2a5eacf34ca8639574523fe8c9708f2fe733f1a1cf55b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_80fbc644ed5579aef2a5eacf34ca8639574523fe8c9708f2fe733f1a1cf55b9c->leave($__internal_80fbc644ed5579aef2a5eacf34ca8639574523fe8c9708f2fe733f1a1cf55b9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\theblog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
