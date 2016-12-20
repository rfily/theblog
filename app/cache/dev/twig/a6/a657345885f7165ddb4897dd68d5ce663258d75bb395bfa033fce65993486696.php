<?php

/* AdminAdminBundle:Default:index.html.twig */
class __TwigTemplate_0f85f2990a483377080f06b70ff0a09f757394ab4b7e1bb8dc36b257999dc503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "AdminAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f09935f3460a51453ee0ed5ce6cc4da97cb0263361cb47a88c79396a3fb395b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f09935f3460a51453ee0ed5ce6cc4da97cb0263361cb47a88c79396a3fb395b->enter($__internal_9f09935f3460a51453ee0ed5ce6cc4da97cb0263361cb47a88c79396a3fb395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f09935f3460a51453ee0ed5ce6cc4da97cb0263361cb47a88c79396a3fb395b->leave($__internal_9f09935f3460a51453ee0ed5ce6cc4da97cb0263361cb47a88c79396a3fb395b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25b24f992c5df97a90e1e43e53b41fc7802f101f9ad7d94a8ce73bd32c8bd2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b24f992c5df97a90e1e43e53b41fc7802f101f9ad7d94a8ce73bd32c8bd2c9->enter($__internal_25b24f992c5df97a90e1e43e53b41fc7802f101f9ad7d94a8ce73bd32c8bd2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Article
";
        
        $__internal_25b24f992c5df97a90e1e43e53b41fc7802f101f9ad7d94a8ce73bd32c8bd2c9->leave($__internal_25b24f992c5df97a90e1e43e53b41fc7802f101f9ad7d94a8ce73bd32c8bd2c9_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_1fe4a04e01d809a6bd0817c5bdf6d7cd059bd2e2d5d035a809afbb4ce88f1ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe4a04e01d809a6bd0817c5bdf6d7cd059bd2e2d5d035a809afbb4ce88f1ad2->enter($__internal_1fe4a04e01d809a6bd0817c5bdf6d7cd059bd2e2d5d035a809afbb4ce88f1ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des articles</h1>
        </div>
    </div><!--/.row-->


    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">

            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
";
        
        $__internal_1fe4a04e01d809a6bd0817c5bdf6d7cd059bd2e2d5d035a809afbb4ce88f1ad2->leave($__internal_1fe4a04e01d809a6bd0817c5bdf6d7cd059bd2e2d5d035a809afbb4ce88f1ad2_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AdminAdminBundle::layout.html.twig\" %}

{% block title %}
    Liste des Article
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des articles</h1>
        </div>
    </div><!--/.row-->


    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">

            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
{% endblock %}", "AdminAdminBundle:Default:index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Default/index.html.twig");
    }
}
