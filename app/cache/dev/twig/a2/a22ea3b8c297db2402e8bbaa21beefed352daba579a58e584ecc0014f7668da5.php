<?php

/* @TheBlogBlog/Blog/archives.html.twig */
class __TwigTemplate_66c9673b68f524b3c804472d847c5054cdaf7db9daab3d99470d24b7c048489a extends Twig_Template
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
        $__internal_27f80898d1245e14a81123dfce8836c312e30c1d93f6d95d7377115d43489b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f80898d1245e14a81123dfce8836c312e30c1d93f6d95d7377115d43489b9e->enter($__internal_27f80898d1245e14a81123dfce8836c312e30c1d93f6d95d7377115d43489b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TheBlogBlog/Blog/archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f80898d1245e14a81123dfce8836c312e30c1d93f6d95d7377115d43489b9e->leave($__internal_27f80898d1245e14a81123dfce8836c312e30c1d93f6d95d7377115d43489b9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ea9d95d6ab8805d04a5434804fbf80fa09ea933458787b3e24f47f087cd97c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea9d95d6ab8805d04a5434804fbf80fa09ea933458787b3e24f47f087cd97c5->enter($__internal_1ea9d95d6ab8805d04a5434804fbf80fa09ea933458787b3e24f47f087cd97c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Archives
";
        
        $__internal_1ea9d95d6ab8805d04a5434804fbf80fa09ea933458787b3e24f47f087cd97c5->leave($__internal_1ea9d95d6ab8805d04a5434804fbf80fa09ea933458787b3e24f47f087cd97c5_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_d7df02ecc2226b504f445006ae6f86d0f54a067a42ca10592091bd5950fe29ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7df02ecc2226b504f445006ae6f86d0f54a067a42ca10592091bd5950fe29ef->enter($__internal_d7df02ecc2226b504f445006ae6f86d0f54a067a42ca10592091bd5950fe29ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_d7df02ecc2226b504f445006ae6f86d0f54a067a42ca10592091bd5950fe29ef->leave($__internal_d7df02ecc2226b504f445006ae6f86d0f54a067a42ca10592091bd5950fe29ef_prof);

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
