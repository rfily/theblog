<?php

/* TheBlogBlogBundle:Blog:archives.html.twig */
class __TwigTemplate_922709b9dde2c8705d17de32961ad2c4911e4bd75b7aa3ae84a11212673a29b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "TheBlogBlogBundle:Blog:archives.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TheBlogBlogBundle:Blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3288220b7f192e90758ab98d73bec4c73f567c7f536a7da9476085928f5eb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3288220b7f192e90758ab98d73bec4c73f567c7f536a7da9476085928f5eb63->enter($__internal_e3288220b7f192e90758ab98d73bec4c73f567c7f536a7da9476085928f5eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3288220b7f192e90758ab98d73bec4c73f567c7f536a7da9476085928f5eb63->leave($__internal_e3288220b7f192e90758ab98d73bec4c73f567c7f536a7da9476085928f5eb63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_684b41994c54d632e926bed287f0f00d873e947e0a38f082f35dbe9ce5d68d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684b41994c54d632e926bed287f0f00d873e947e0a38f082f35dbe9ce5d68d7d->enter($__internal_684b41994c54d632e926bed287f0f00d873e947e0a38f082f35dbe9ce5d68d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Archives
";
        
        $__internal_684b41994c54d632e926bed287f0f00d873e947e0a38f082f35dbe9ce5d68d7d->leave($__internal_684b41994c54d632e926bed287f0f00d873e947e0a38f082f35dbe9ce5d68d7d_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_2323a86795e5fd9817b5c16c30ace442aa8df919058af7d2ca864958de69bbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2323a86795e5fd9817b5c16c30ace442aa8df919058af7d2ca864958de69bbe3->enter($__internal_2323a86795e5fd9817b5c16c30ace442aa8df919058af7d2ca864958de69bbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"main\">
        <div class=\"container\">
            <div class=\"error-404 text-center\">
                <h1>404</h1>
                <p>this link dead link</p>
                <a class=\"b-home\" href=\"index.html\">Back to Home</a>
            </div>
        </div>
    </div>

";
        
        $__internal_2323a86795e5fd9817b5c16c30ace442aa8df919058af7d2ca864958de69bbe3->leave($__internal_2323a86795e5fd9817b5c16c30ace442aa8df919058af7d2ca864958de69bbe3_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:archives.html.twig";
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
        return new Twig_Source("{% extends \"TheBlogBlogBundle:Blog:layout.html.twig\" %}

{% block title %}
    Archives
{% endblock %}

{% block theblog_body %}
    <div class=\"main\">
        <div class=\"container\">
            <div class=\"error-404 text-center\">
                <h1>404</h1>
                <p>this link dead link</p>
                <a class=\"b-home\" href=\"index.html\">Back to Home</a>
            </div>
        </div>
    </div>

{% endblock %}
", "TheBlogBlogBundle:Blog:archives.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/archives.html.twig");
    }
}
