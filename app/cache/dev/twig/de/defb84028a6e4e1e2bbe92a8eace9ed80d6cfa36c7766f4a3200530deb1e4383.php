<?php

/* @TheBlogBlog/Blog/photo.html.twig */
class __TwigTemplate_38d98dc91114e5a669500b2ac8d795b362093dc96a2fbf3181899adbaeb9b40d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "@TheBlogBlog/Blog/photo.html.twig", 1);
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
        $__internal_459dc44d62e98f59f4ad1d4a1af25bf5f579294bd2e4d84929698902a601c844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459dc44d62e98f59f4ad1d4a1af25bf5f579294bd2e4d84929698902a601c844->enter($__internal_459dc44d62e98f59f4ad1d4a1af25bf5f579294bd2e4d84929698902a601c844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TheBlogBlog/Blog/photo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_459dc44d62e98f59f4ad1d4a1af25bf5f579294bd2e4d84929698902a601c844->leave($__internal_459dc44d62e98f59f4ad1d4a1af25bf5f579294bd2e4d84929698902a601c844_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ba49b58c309a3dc41d3472b73e8b5e99930773d9af18b0ab0e1f873379341f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba49b58c309a3dc41d3472b73e8b5e99930773d9af18b0ab0e1f873379341f2->enter($__internal_5ba49b58c309a3dc41d3472b73e8b5e99930773d9af18b0ab0e1f873379341f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Photos
";
        
        $__internal_5ba49b58c309a3dc41d3472b73e8b5e99930773d9af18b0ab0e1f873379341f2->leave($__internal_5ba49b58c309a3dc41d3472b73e8b5e99930773d9af18b0ab0e1f873379341f2_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_b29857310799ce0653ec8bf14036ff8b5ad9cab2d58a1665b07da110d187e46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29857310799ce0653ec8bf14036ff8b5ad9cab2d58a1665b07da110d187e46c->enter($__internal_b29857310799ce0653ec8bf14036ff8b5ad9cab2d58a1665b07da110d187e46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"photos\">
        <div class=\"container\">
            <h2>Photos</h2>
            <!-- portfolio-section -->
            <div class=\"portfolio\"  id=\"portfolio\">
                <div id=\"portfoliolist\">
                    <div class=\"portfolio card mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img9.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img10.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>

                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img11.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio card mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img13.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img13.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img14.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img14.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>

                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img15.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img15.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"portfolio card mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img17.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img17.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img12.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box last\">
                            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img16.jpg"), "html", null, true);
        echo "\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/img16.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>



        </div>
    </div>

";
        
        $__internal_b29857310799ce0653ec8bf14036ff8b5ad9cab2d58a1665b07da110d187e46c->leave($__internal_b29857310799ce0653ec8bf14036ff8b5ad9cab2d58a1665b07da110d187e46c_prof);

    }

    public function getTemplateName()
    {
        return "@TheBlogBlog/Blog/photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 60,  139 => 55,  129 => 50,  117 => 43,  106 => 37,  96 => 32,  86 => 27,  75 => 21,  65 => 16,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Photos
{% endblock %}

{% block theblog_body %}
    <div class=\"photos\">
        <div class=\"container\">
            <h2>Photos</h2>
            <!-- portfolio-section -->
            <div class=\"portfolio\"  id=\"portfolio\">
                <div id=\"portfoliolist\">
                    <div class=\"portfolio card mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img9.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img9.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img10.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img10.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>

                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img11.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img11.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio card mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img13.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img13.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img14.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img14.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>

                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img15.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img15.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>

                    <div class=\"clearfix\"></div>
                    <div class=\"portfolio card mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"card\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img17.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img17.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box\">
                            <a href=\"{{ asset('bundles/theblog/images/img12.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img12.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"portfolio app mix_all  wow bounceIn\" data-wow-delay=\"0.4s\" data-cat=\"app\" style=\"display: inline-block; opacity: 1;\">
                        <div class=\"portfolio-wrapper grid_box last\">
                            <a href=\"{{ asset('bundles/theblog/images/img16.jpg') }}\" class=\"swipebox\"  title=\"Image Title\"> <img src=\"{{ asset('bundles/theblog/images/img16.jpg') }}\" class=\"img-responsive\" alt=\"\"><span class=\"zoom-icon\"></span> </a>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>



        </div>
    </div>

{% endblock %}
", "@TheBlogBlog/Blog/photo.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle\\Resources\\views\\Blog\\photo.html.twig");
    }
}
