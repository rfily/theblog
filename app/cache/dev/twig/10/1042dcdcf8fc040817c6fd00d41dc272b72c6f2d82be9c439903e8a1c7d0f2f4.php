<?php

/* TheBlogBlogBundle:Blog:about.html.twig */
class __TwigTemplate_febaf586cc6a8951c9250bad78c8d6ac45a69d190adc4b584289d7bd80731210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "TheBlogBlogBundle:Blog:about.html.twig", 1);
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
        $__internal_1ce22080dbcbb40b08e536919a067942b7785e76239734b8ff768aedb54291e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce22080dbcbb40b08e536919a067942b7785e76239734b8ff768aedb54291e0->enter($__internal_1ce22080dbcbb40b08e536919a067942b7785e76239734b8ff768aedb54291e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce22080dbcbb40b08e536919a067942b7785e76239734b8ff768aedb54291e0->leave($__internal_1ce22080dbcbb40b08e536919a067942b7785e76239734b8ff768aedb54291e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cfbf69b26765eb7dffbccce03a9a15be2d1e8436161f9681aa0fa078330f887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfbf69b26765eb7dffbccce03a9a15be2d1e8436161f9681aa0fa078330f887->enter($__internal_9cfbf69b26765eb7dffbccce03a9a15be2d1e8436161f9681aa0fa078330f887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    About
";
        
        $__internal_9cfbf69b26765eb7dffbccce03a9a15be2d1e8436161f9681aa0fa078330f887->leave($__internal_9cfbf69b26765eb7dffbccce03a9a15be2d1e8436161f9681aa0fa078330f887_prof);

    }

    // line 8
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_20d971fe6e1e5f1e02f7b753e9724aaaea3c082f9b322fdfa9648aa0a73fc790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d971fe6e1e5f1e02f7b753e9724aaaea3c082f9b322fdfa9648aa0a73fc790->enter($__internal_20d971fe6e1e5f1e02f7b753e9724aaaea3c082f9b322fdfa9648aa0a73fc790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 9
        echo "    <div class=\"about\">
        <div class=\"container\">
            <h2>About</h2>
            <div class=\"biography\">
                <div class=\"biographys\">
                    <div class=\"col-md-4 biography-info\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <div class=\"col-md-8 biography-into\">
                        <h4>Edie Campbell</h4>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below ook It has survived not only five centuries, a galley of type and reproduced scrambled  survived not only five  it to make a type specimen book for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href=\"details.html\" class=\"link\">Read More</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"biographys\">
                    <div class=\"col-md-8 biography-into\">
                        <h4>Georgia May Jagger</h4>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is for those interested reproduced below for those interested. Ipsum used since the 1500s is reproduced below for reproduced below for those interested those interested reproduced below  Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href=\"details.html\" class=\"link\">Read More</a>
                    </div>
                    <div class=\"col-md-4 biography-info\">
                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"biographys\">
                    <div class=\"col-md-4 biography-info\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <div class=\"col-md-8 biography-into\">
                        <h4>Drake Burnette</h4>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those of Lorem Ipsum used since the by Cicero are also reproduced below for interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced below for those of Lorem Ipsum used since the interested reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href=\"details.html\" class=\"link\">Read More</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_20d971fe6e1e5f1e02f7b753e9724aaaea3c082f9b322fdfa9648aa0a73fc790->leave($__internal_20d971fe6e1e5f1e02f7b753e9724aaaea3c082f9b322fdfa9648aa0a73fc790_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  82 => 31,  63 => 15,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
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
    About
{% endblock %}


{% block theblog_body %}
    <div class=\"about\">
        <div class=\"container\">
            <h2>About</h2>
            <div class=\"biography\">
                <div class=\"biographys\">
                    <div class=\"col-md-4 biography-info\">
                        <img src=\"{{ asset('bundles/theblog/images/img11.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <div class=\"col-md-8 biography-into\">
                        <h4>Edie Campbell</h4>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below ook It has survived not only five centuries, a galley of type and reproduced scrambled  survived not only five  it to make a type specimen book for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href=\"details.html\" class=\"link\">Read More</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"biographys\">
                    <div class=\"col-md-8 biography-into\">
                        <h4>Georgia May Jagger</h4>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is for those interested reproduced below for those interested. Ipsum used since the 1500s is reproduced below for reproduced below for those interested those interested reproduced below  Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href=\"details.html\" class=\"link\">Read More</a>
                    </div>
                    <div class=\"col-md-4 biography-info\">
                        <img src=\"{{ asset('bundles/theblog/images/img9.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"biographys\">
                    <div class=\"col-md-4 biography-info\">
                        <img src=\"{{ asset('bundles/theblog/images/img10.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </div>
                    <div class=\"col-md-8 biography-into\">
                        <h4>Drake Burnette</h4>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those of Lorem Ipsum used since the by Cicero are also reproduced below for interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced below for those of Lorem Ipsum used since the interested reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <a href=\"details.html\" class=\"link\">Read More</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "TheBlogBlogBundle:Blog:about.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/about.html.twig");
    }
}
