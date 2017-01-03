<?php

/* layout.html.twig */
class __TwigTemplate_6296b7f3d5c38c6b7191794a9bdae365bad83093aeedf6d423f85d799b88a091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ebc9539296303439f07db90282db68388954ea91ef463dae3afa5d57563aa66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebc9539296303439f07db90282db68388954ea91ef463dae3afa5d57563aa66->enter($__internal_3ebc9539296303439f07db90282db68388954ea91ef463dae3afa5d57563aa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Graphic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
</head>
<body>
<!-- header -->
<div class=\"banner\">
    <div class=\"container\">
        <div class=\"header\">
            <div class=\"logo\">
                <a href=\"index.html\">First Symfony Blog</a>
            </div>
            <div class=\"header-right\">
                <ul>
                    <li><a href=\"#\"><i class=\"fb\"> </i></a></li>
                    <li><a href=\"#\"><i class=\"twt\"> </i></a></li>
                    ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TheBlogBlogBundle:Blog:recherche"));
        echo "
                </ul>

            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"head-nav\">
            <span class=\"menu\"> </span>
            <ul class=\"cl-effect-15\">
                <li class=\"";
        // line 60
        if ((is_string($__internal_66ef4e7744ace3639325330ca57319a0bc2b2ad5e9672643056d40d1c05413fb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3bb9c75989d1607410ef7761ca14d3e9a8cd6a597b3783ecaac937288c8270b0 = "theblog_accueil") && ('' === $__internal_3bb9c75989d1607410ef7761ca14d3e9a8cd6a597b3783ecaac937288c8270b0 || 0 === strpos($__internal_66ef4e7744ace3639325330ca57319a0bc2b2ad5e9672643056d40d1c05413fb, $__internal_3bb9c75989d1607410ef7761ca14d3e9a8cd6a597b3783ecaac937288c8270b0)))) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_accueil");
        echo "\">HOME</a></li>
                <li class=\"";
        // line 61
        if ((is_string($__internal_1d31308beaa84b73d5b56d4be3b0286731603e7ea3ebf97a8549506d694252fd = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d4f396d9302b16faa94237f679747cb2bac313ca01bf03afa58ae80292318ee7 = "theblog_about") && ('' === $__internal_d4f396d9302b16faa94237f679747cb2bac313ca01bf03afa58ae80292318ee7 || 0 === strpos($__internal_1d31308beaa84b73d5b56d4be3b0286731603e7ea3ebf97a8549506d694252fd, $__internal_d4f396d9302b16faa94237f679747cb2bac313ca01bf03afa58ae80292318ee7)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_about");
        echo "\">ABOUT</a></li>
                <li class=\"";
        // line 62
        if ((is_string($__internal_be9652b62546287d5eb5e709d13abbeefbe2a9b1601a23b911a990cced2886b1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1d092262b57d40bdc122b8984a42c88cf299a118250201aac468ab061202d2da = "theblog_photo") && ('' === $__internal_1d092262b57d40bdc122b8984a42c88cf299a118250201aac468ab061202d2da || 0 === strpos($__internal_be9652b62546287d5eb5e709d13abbeefbe2a9b1601a23b911a990cced2886b1, $__internal_1d092262b57d40bdc122b8984a42c88cf299a118250201aac468ab061202d2da)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_photo");
        echo "\">PHOTOS</a></li>
                <li class=\"";
        // line 63
        if ((is_string($__internal_9b5fdee6bc76c7fe7c95e8bbf0665487558e6a960afec7e059f0434820eddf0b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6a9464177f61bf68d94f9252506be696c8be3ad87e2c7ad1760d7a88ca21fe1f = "theblog_archives") && ('' === $__internal_6a9464177f61bf68d94f9252506be696c8be3ad87e2c7ad1760d7a88ca21fe1f || 0 === strpos($__internal_9b5fdee6bc76c7fe7c95e8bbf0665487558e6a960afec7e059f0434820eddf0b, $__internal_6a9464177f61bf68d94f9252506be696c8be3ad87e2c7ad1760d7a88ca21fe1f)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_archives");
        echo "\">ARCHIVES</a></li>
                <li class=\"";
        // line 64
        if ((is_string($__internal_e9f9625f8668aa8ba27cb38edd26b25329e21749461994cfbe08cc45fca7c1fb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a63d44e825c6abacfb630909b32874e22ed83dc783c846a52a659665d9485380 = "theblog_contact") && ('' === $__internal_a63d44e825c6abacfb630909b32874e22ed83dc783c846a52a659665d9485380 || 0 === strpos($__internal_e9f9625f8668aa8ba27cb38edd26b25329e21749461994cfbe08cc45fca7c1fb, $__internal_a63d44e825c6abacfb630909b32874e22ed83dc783c846a52a659665d9485380)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_contact");
        echo "\">CONTACT</a></li>
                <div class=\"clearfix\"> </div>
            </ul>
        </div>

        <!-- script-for-nav -->
        <script>
            \$( \"span.menu\" ).click(function() {
                \$( \".head-nav ul\" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->
    </div>
</div>
<!-- header -->

<!-- content -->
";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "<!-- content -->
<!-- footer -->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"ham\"></i>
            </div>
            <div class=\"top2\">
                <h6>Copyrights © 2015 Graphic</h6>
                <p>All rights reserved</p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"men\"></i>
            </div>
            <div class=\"top2\">
                <h6>Template by: </h6>
                <p><a href=\"http://w3layouts.com/\">W3layouts</a></p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"app\"></i>
            </div>
            <div class=\"top2\">
                <h6>Images From: </h6>
                <p><a href=\"#\"> www.wallcoo.net</a></p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"lik\"></i>
            </div>
            <div class=\"top2\">
                <h6>Admin </h6>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>
<!-- footer -->
</body>
</html>
";
        
        $__internal_3ebc9539296303439f07db90282db68388954ea91ef463dae3afa5d57563aa66->leave($__internal_3ebc9539296303439f07db90282db68388954ea91ef463dae3afa5d57563aa66_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_22537c46839017da516ba3eeffc64fa7be61e5065383f0a7910160a3cdf05505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22537c46839017da516ba3eeffc64fa7be61e5065383f0a7910160a3cdf05505->enter($__internal_22537c46839017da516ba3eeffc64fa7be61e5065383f0a7910160a3cdf05505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_22537c46839017da516ba3eeffc64fa7be61e5065383f0a7910160a3cdf05505->leave($__internal_22537c46839017da516ba3eeffc64fa7be61e5065383f0a7910160a3cdf05505_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e283e3888efd306aef408c7f2530adbc97e4e5a06e8d1b2722ed47b8c4348410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e283e3888efd306aef408c7f2530adbc97e4e5a06e8d1b2722ed47b8c4348410->enter($__internal_e283e3888efd306aef408c7f2530adbc97e4e5a06e8d1b2722ed47b8c4348410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cd77f43_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd77f43_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cd77f43_part_1_bootstrap_1.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "cd77f43_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd77f43_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cd77f43_part_1_style_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "cd77f43_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd77f43_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cd77f43_part_1_swipebox_3.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        } else {
            // asset "cd77f43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_cd77f43") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cd77f43.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        <link type=\"text/css\" src='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
    ";
        
        $__internal_e283e3888efd306aef408c7f2530adbc97e4e5a06e8d1b2722ed47b8c4348410->leave($__internal_e283e3888efd306aef408c7f2530adbc97e4e5a06e8d1b2722ed47b8c4348410_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cf387c8a853abf1e3c5414a4ae7ce3d2dbff5077960909bdb41c28a62480f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf387c8a853abf1e3c5414a4ae7ce3d2dbff5077960909bdb41c28a62480f42->enter($__internal_2cf387c8a853abf1e3c5414a4ae7ce3d2dbff5077960909bdb41c28a62480f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "49cf697_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_49cf697_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/49cf697_part_1_jquery.min_1.js");
            // line 14
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "49cf697_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_49cf697_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/49cf697_part_1_jquery.swipebox.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "49cf697"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_49cf697") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/49cf697.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <script>
            \$(document).ready(function () {
                size_li = \$(\"#myList li\").size();
                x=3;
                \$('#myList li:lt('+x+')').show();
                \$('#loadMore').click(function () {
                    x= (x+1 <= size_li) ? x+1 : size_li;
                    \$('#myList li:lt('+x+')').show();
                });
                \$('#showLess').click(function () {
                    x=(x-1<0) ? 1 : x-1;
                    \$('#myList li').not(':lt('+x+')').hide();
                });
            });
        </script>
    ";
        
        $__internal_2cf387c8a853abf1e3c5414a4ae7ce3d2dbff5077960909bdb41c28a62480f42->leave($__internal_2cf387c8a853abf1e3c5414a4ae7ce3d2dbff5077960909bdb41c28a62480f42_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8a8d7b9e34545eee8614cf0adb029e4f6259b7a7162eadd06a17013de8b927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8a8d7b9e34545eee8614cf0adb029e4f6259b7a7162eadd06a17013de8b927->enter($__internal_4c8a8d7b9e34545eee8614cf0adb029e4f6259b7a7162eadd06a17013de8b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c8a8d7b9e34545eee8614cf0adb029e4f6259b7a7162eadd06a17013de8b927->leave($__internal_4c8a8d7b9e34545eee8614cf0adb029e4f6259b7a7162eadd06a17013de8b927_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 83,  276 => 16,  256 => 14,  251 => 13,  245 => 12,  237 => 9,  211 => 7,  206 => 6,  200 => 5,  189 => 4,  133 => 84,  131 => 83,  105 => 64,  97 => 63,  89 => 62,  81 => 61,  73 => 60,  61 => 51,  42 => 34,  40 => 12,  37 => 11,  35 => 5,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}
        {% stylesheets 'bundles/theblogblog/css/*' filter='cssrewrite' %}
        <link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        {% endstylesheets %}
        <link type=\"text/css\" src='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
    {% endblock stylesheets %}

    {% block javascripts %}
        {% javascripts 'bundles/theblogblog/js/*' %}
        <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <script>
            \$(document).ready(function () {
                size_li = \$(\"#myList li\").size();
                x=3;
                \$('#myList li:lt('+x+')').show();
                \$('#loadMore').click(function () {
                    x= (x+1 <= size_li) ? x+1 : size_li;
                    \$('#myList li:lt('+x+')').show();
                });
                \$('#showLess').click(function () {
                    x=(x-1<0) ? 1 : x-1;
                    \$('#myList li').not(':lt('+x+')').hide();
                });
            });
        </script>
    {% endblock javascripts %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Graphic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
</head>
<body>
<!-- header -->
<div class=\"banner\">
    <div class=\"container\">
        <div class=\"header\">
            <div class=\"logo\">
                <a href=\"index.html\">First Symfony Blog</a>
            </div>
            <div class=\"header-right\">
                <ul>
                    <li><a href=\"#\"><i class=\"fb\"> </i></a></li>
                    <li><a href=\"#\"><i class=\"twt\"> </i></a></li>
                    {{ render(controller(\"TheBlogBlogBundle:Blog:recherche\")) }}
                </ul>

            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"head-nav\">
            <span class=\"menu\"> </span>
            <ul class=\"cl-effect-15\">
                <li class=\"{% if app.request.attributes.get('_route') starts with 'theblog_accueil' %}active{% endif %}\"><a  href=\"{{ path('theblog_accueil') }}\">HOME</a></li>
                <li class=\"{% if app.request.attributes.get('_route') starts with 'theblog_about' %}active{% endif %}\"><a href=\"{{ path('theblog_about') }}\">ABOUT</a></li>
                <li class=\"{% if app.request.attributes.get('_route') starts with 'theblog_photo' %}active{% endif %}\"><a href=\"{{ path('theblog_photo') }}\">PHOTOS</a></li>
                <li class=\"{% if app.request.attributes.get('_route') starts with 'theblog_archives' %}active{% endif %}\"><a href=\"{{ path('theblog_archives') }}\">ARCHIVES</a></li>
                <li class=\"{% if app.request.attributes.get('_route') starts with 'theblog_contact' %}active{% endif %}\"><a href=\"{{ path('theblog_contact') }}\">CONTACT</a></li>
                <div class=\"clearfix\"> </div>
            </ul>
        </div>

        <!-- script-for-nav -->
        <script>
            \$( \"span.menu\" ).click(function() {
                \$( \".head-nav ul\" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->
    </div>
</div>
<!-- header -->

<!-- content -->
{% block body %}{% endblock %}
<!-- content -->
<!-- footer -->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"ham\"></i>
            </div>
            <div class=\"top2\">
                <h6>Copyrights © 2015 Graphic</h6>
                <p>All rights reserved</p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"men\"></i>
            </div>
            <div class=\"top2\">
                <h6>Template by: </h6>
                <p><a href=\"http://w3layouts.com/\">W3layouts</a></p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"app\"></i>
            </div>
            <div class=\"top2\">
                <h6>Images From: </h6>
                <p><a href=\"#\"> www.wallcoo.net</a></p>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"col-md-3 copy\">
            <div class=\"top1\">
                <i class=\"lik\"></i>
            </div>
            <div class=\"top2\">
                <h6>Admin </h6>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>
<!-- footer -->
</body>
</html>
", "layout.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\views\\layout.html.twig");
    }
}
