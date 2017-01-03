<?php

/* @TheBlogBlog/Blog/layout.html.twig */
class __TwigTemplate_1d966f90f16b018708f3e23fd41c64a3c2f253492baa75c9d5592d5e4c6c3a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@TheBlogBlog/Blog/layout.html.twig", 1);
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
        $__internal_9749b124bfca0a36205231fae84de8fec3b572c2ea329ed930dcfa39ba1e4137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9749b124bfca0a36205231fae84de8fec3b572c2ea329ed930dcfa39ba1e4137->enter($__internal_9749b124bfca0a36205231fae84de8fec3b572c2ea329ed930dcfa39ba1e4137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TheBlogBlog/Blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9749b124bfca0a36205231fae84de8fec3b572c2ea329ed930dcfa39ba1e4137->leave($__internal_9749b124bfca0a36205231fae84de8fec3b572c2ea329ed930dcfa39ba1e4137_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d46808765023654d170068fb57cf00577c4a355f1df9bca29b6035eb3c744d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d46808765023654d170068fb57cf00577c4a355f1df9bca29b6035eb3c744d->enter($__internal_e4d46808765023654d170068fb57cf00577c4a355f1df9bca29b6035eb3c744d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e4d46808765023654d170068fb57cf00577c4a355f1df9bca29b6035eb3c744d->leave($__internal_e4d46808765023654d170068fb57cf00577c4a355f1df9bca29b6035eb3c744d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_027d20373ee670121c6236eaa00c74da90da7a22a2237018fb312187f9b086d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027d20373ee670121c6236eaa00c74da90da7a22a2237018fb312187f9b086d3->enter($__internal_027d20373ee670121c6236eaa00c74da90da7a22a2237018fb312187f9b086d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 12
        echo "
";
        
        $__internal_027d20373ee670121c6236eaa00c74da90da7a22a2237018fb312187f9b086d3->leave($__internal_027d20373ee670121c6236eaa00c74da90da7a22a2237018fb312187f9b086d3_prof);

    }

    // line 9
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_20b862abb48c146e8edf67bbaf29a4af12690f86d8ac488df423d70e7d7d59c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b862abb48c146e8edf67bbaf29a4af12690f86d8ac488df423d70e7d7d59c1->enter($__internal_20b862abb48c146e8edf67bbaf29a4af12690f86d8ac488df423d70e7d7d59c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 10
        echo "
    ";
        
        $__internal_20b862abb48c146e8edf67bbaf29a4af12690f86d8ac488df423d70e7d7d59c1->leave($__internal_20b862abb48c146e8edf67bbaf29a4af12690f86d8ac488df423d70e7d7d59c1_prof);

    }

    public function getTemplateName()
    {
        return "@TheBlogBlog/Blog/layout.html.twig";
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
", "@TheBlogBlog/Blog/layout.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle\\Resources\\views\\Blog\\layout.html.twig");
    }
}
