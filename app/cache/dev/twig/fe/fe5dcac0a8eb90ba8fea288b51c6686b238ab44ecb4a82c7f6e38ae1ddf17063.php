<?php

/* @TheBlogBlog/Blog/archives.html.twig */
class __TwigTemplate_ba57d16d7d51549f2f3c273c24d024e734ce77ce8ee07299afe2e82a0316c42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "@TheBlogBlog/Blog/archives.html.twig", 1);
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
        $__internal_7c2c36b5ef845a5892e695443aa50e58b6d982630eaa478412a87d71035fe19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2c36b5ef845a5892e695443aa50e58b6d982630eaa478412a87d71035fe19b->enter($__internal_7c2c36b5ef845a5892e695443aa50e58b6d982630eaa478412a87d71035fe19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TheBlogBlog/Blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2c36b5ef845a5892e695443aa50e58b6d982630eaa478412a87d71035fe19b->leave($__internal_7c2c36b5ef845a5892e695443aa50e58b6d982630eaa478412a87d71035fe19b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75d841ed6e3928cf3a8880b6d2271ed0204aa5a1e80f8d1b988d7e481fecad4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d841ed6e3928cf3a8880b6d2271ed0204aa5a1e80f8d1b988d7e481fecad4b->enter($__internal_75d841ed6e3928cf3a8880b6d2271ed0204aa5a1e80f8d1b988d7e481fecad4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Archives
";
        
        $__internal_75d841ed6e3928cf3a8880b6d2271ed0204aa5a1e80f8d1b988d7e481fecad4b->leave($__internal_75d841ed6e3928cf3a8880b6d2271ed0204aa5a1e80f8d1b988d7e481fecad4b_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_c68d1dca2be6330cd2b83322694ce505329c4458afeb5363068560b9b3b06bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68d1dca2be6330cd2b83322694ce505329c4458afeb5363068560b9b3b06bce->enter($__internal_c68d1dca2be6330cd2b83322694ce505329c4458afeb5363068560b9b3b06bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_c68d1dca2be6330cd2b83322694ce505329c4458afeb5363068560b9b3b06bce->leave($__internal_c68d1dca2be6330cd2b83322694ce505329c4458afeb5363068560b9b3b06bce_prof);

    }

    public function getTemplateName()
    {
        return "@TheBlogBlog/Blog/archives.html.twig";
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
", "@TheBlogBlog/Blog/archives.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle\\Resources\\views\\Blog\\archives.html.twig");
    }
}
