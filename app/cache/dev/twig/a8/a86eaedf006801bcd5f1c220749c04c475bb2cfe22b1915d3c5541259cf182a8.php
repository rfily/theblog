<?php

/* @AdminAdmin/Default/index.html.twig */
class __TwigTemplate_60ac67601faafc44e7f05cfc5c21141c2a4a2169a6f7f20bed189ee5a50b3023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "@AdminAdmin/Default/index.html.twig", 1);
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
        $__internal_0f1f2c2dc04ec8d66133649c3923ae98b8a90358f025ae33716e237ff8b8fbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1f2c2dc04ec8d66133649c3923ae98b8a90358f025ae33716e237ff8b8fbce->enter($__internal_0f1f2c2dc04ec8d66133649c3923ae98b8a90358f025ae33716e237ff8b8fbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1f2c2dc04ec8d66133649c3923ae98b8a90358f025ae33716e237ff8b8fbce->leave($__internal_0f1f2c2dc04ec8d66133649c3923ae98b8a90358f025ae33716e237ff8b8fbce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af98943ee51e3a3ed3a8679b187669b474cbd528f510c42be3370163ed8feab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af98943ee51e3a3ed3a8679b187669b474cbd528f510c42be3370163ed8feab4->enter($__internal_af98943ee51e3a3ed3a8679b187669b474cbd528f510c42be3370163ed8feab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Article
";
        
        $__internal_af98943ee51e3a3ed3a8679b187669b474cbd528f510c42be3370163ed8feab4->leave($__internal_af98943ee51e3a3ed3a8679b187669b474cbd528f510c42be3370163ed8feab4_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_661ff5002749fbc6613bda3c3b1c4e61d11cf60e3c919aa03d82a44ac9ff18c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661ff5002749fbc6613bda3c3b1c4e61d11cf60e3c919aa03d82a44ac9ff18c8->enter($__internal_661ff5002749fbc6613bda3c3b1c4e61d11cf60e3c919aa03d82a44ac9ff18c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_661ff5002749fbc6613bda3c3b1c4e61d11cf60e3c919aa03d82a44ac9ff18c8->leave($__internal_661ff5002749fbc6613bda3c3b1c4e61d11cf60e3c919aa03d82a44ac9ff18c8_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/Default/index.html.twig";
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
{% endblock %}", "@AdminAdmin/Default/index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
