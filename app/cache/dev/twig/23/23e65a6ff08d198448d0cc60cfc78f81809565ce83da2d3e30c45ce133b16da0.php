<?php

/* TheBlogBlogBundle:Blog:layout.html.twig */
class __TwigTemplate_622f70466469633a069674bc3158961eb16aa0bce931b195729a8d3c8061db69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TheBlogBlogBundle:Blog:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7df455b1b0aec9e5dc30a1e4cbde1e5c69010ed0f3ff003bb4f296f1987db8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df455b1b0aec9e5dc30a1e4cbde1e5c69010ed0f3ff003bb4f296f1987db8ac->enter($__internal_7df455b1b0aec9e5dc30a1e4cbde1e5c69010ed0f3ff003bb4f296f1987db8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df455b1b0aec9e5dc30a1e4cbde1e5c69010ed0f3ff003bb4f296f1987db8ac->leave($__internal_7df455b1b0aec9e5dc30a1e4cbde1e5c69010ed0f3ff003bb4f296f1987db8ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46e00082688436658b3603880a7d7027f4d44dbd7bf15d931d786d7067f27f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e00082688436658b3603880a7d7027f4d44dbd7bf15d931d786d7067f27f19->enter($__internal_46e00082688436658b3603880a7d7027f4d44dbd7bf15d931d786d7067f27f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_46e00082688436658b3603880a7d7027f4d44dbd7bf15d931d786d7067f27f19->leave($__internal_46e00082688436658b3603880a7d7027f4d44dbd7bf15d931d786d7067f27f19_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_379e8a44d62c9691aae4bf62df5180d4ccb4158c22eede1bc98875b838e65dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379e8a44d62c9691aae4bf62df5180d4ccb4158c22eede1bc98875b838e65dce->enter($__internal_379e8a44d62c9691aae4bf62df5180d4ccb4158c22eede1bc98875b838e65dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_379e8a44d62c9691aae4bf62df5180d4ccb4158c22eede1bc98875b838e65dce->leave($__internal_379e8a44d62c9691aae4bf62df5180d4ccb4158c22eede1bc98875b838e65dce_prof);

    }

    // line 9
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_7ab13b5cf08047a192c39534bb6a2be8af6c0d902c63946f2e679d9e895b19b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab13b5cf08047a192c39534bb6a2be8af6c0d902c63946f2e679d9e895b19b9->enter($__internal_7ab13b5cf08047a192c39534bb6a2be8af6c0d902c63946f2e679d9e895b19b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 10
        echo "
    ";
        
        $__internal_7ab13b5cf08047a192c39534bb6a2be8af6c0d902c63946f2e679d9e895b19b9->leave($__internal_7ab13b5cf08047a192c39534bb6a2be8af6c0d902c63946f2e679d9e895b19b9_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  71 => 9,  63 => 12,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}
    Blog - {{ parent() }}
{% endblock %}

{% block body %}

    {% block theblog_body %}

    {% endblock %}

{% endblock %}
", "TheBlogBlogBundle:Blog:layout.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/layout.html.twig");
    }
}
