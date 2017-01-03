<?php

/* TheBlogBlogBundle:Blog:archives.html.twig */
class __TwigTemplate_85410778c4340ee108b62250ba26733d184fa981875784a14dcd8221a87a112d extends Twig_Template
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
        $__internal_b446a56ef738e661d6427ef2874a45d50a3e17657ef5731b2bf0e6cfbbf9c549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b446a56ef738e661d6427ef2874a45d50a3e17657ef5731b2bf0e6cfbbf9c549->enter($__internal_b446a56ef738e661d6427ef2874a45d50a3e17657ef5731b2bf0e6cfbbf9c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b446a56ef738e661d6427ef2874a45d50a3e17657ef5731b2bf0e6cfbbf9c549->leave($__internal_b446a56ef738e661d6427ef2874a45d50a3e17657ef5731b2bf0e6cfbbf9c549_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_114eb0469f7305073b364f95915a15e1d13724aa719b0a8d268dc7c96327410e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114eb0469f7305073b364f95915a15e1d13724aa719b0a8d268dc7c96327410e->enter($__internal_114eb0469f7305073b364f95915a15e1d13724aa719b0a8d268dc7c96327410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Archives
";
        
        $__internal_114eb0469f7305073b364f95915a15e1d13724aa719b0a8d268dc7c96327410e->leave($__internal_114eb0469f7305073b364f95915a15e1d13724aa719b0a8d268dc7c96327410e_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_1db6f89816ab693ef0a77813bf1277f0fb965865a9627c479c6903752d039656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db6f89816ab693ef0a77813bf1277f0fb965865a9627c479c6903752d039656->enter($__internal_1db6f89816ab693ef0a77813bf1277f0fb965865a9627c479c6903752d039656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_1db6f89816ab693ef0a77813bf1277f0fb965865a9627c479c6903752d039656->leave($__internal_1db6f89816ab693ef0a77813bf1277f0fb965865a9627c479c6903752d039656_prof);

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
