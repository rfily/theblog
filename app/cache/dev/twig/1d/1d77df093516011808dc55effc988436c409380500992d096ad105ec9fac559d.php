<?php

/* TheBlogBlogBundle:Blog:photo.html.twig */
class __TwigTemplate_207f1e6f70931e94f766141aefb7b88cb2ee706bd47e4ed40007d07869e8e828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "TheBlogBlogBundle:Blog:photo.html.twig", 1);
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
        $__internal_2335a06da7cfcde9cb810fded1c0558e794bc6bced29d822acb5b210043c2e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2335a06da7cfcde9cb810fded1c0558e794bc6bced29d822acb5b210043c2e83->enter($__internal_2335a06da7cfcde9cb810fded1c0558e794bc6bced29d822acb5b210043c2e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:photo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2335a06da7cfcde9cb810fded1c0558e794bc6bced29d822acb5b210043c2e83->leave($__internal_2335a06da7cfcde9cb810fded1c0558e794bc6bced29d822acb5b210043c2e83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df102d57fd17365a9c72689335c961dde080067271cfc07e5036ee036077702c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df102d57fd17365a9c72689335c961dde080067271cfc07e5036ee036077702c->enter($__internal_df102d57fd17365a9c72689335c961dde080067271cfc07e5036ee036077702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Photos
";
        
        $__internal_df102d57fd17365a9c72689335c961dde080067271cfc07e5036ee036077702c->leave($__internal_df102d57fd17365a9c72689335c961dde080067271cfc07e5036ee036077702c_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_faa5132fd0288b5e6c76cd590c584ec6059a80485a0bf7039b5b83bccefe0014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa5132fd0288b5e6c76cd590c584ec6059a80485a0bf7039b5b83bccefe0014->enter($__internal_faa5132fd0288b5e6c76cd590c584ec6059a80485a0bf7039b5b83bccefe0014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_faa5132fd0288b5e6c76cd590c584ec6059a80485a0bf7039b5b83bccefe0014->leave($__internal_faa5132fd0288b5e6c76cd590c584ec6059a80485a0bf7039b5b83bccefe0014_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:photo.html.twig";
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
", "TheBlogBlogBundle:Blog:photo.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/photo.html.twig");
    }
}
