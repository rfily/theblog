<?php

/* ::layout.html.twig */
class __TwigTemplate_2a2cc63e4fc23ed545d87d4df3e0265e1a04a04dd17f09bcd4010761307cfe0f extends Twig_Template
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
        $__internal_618f20d60c2d522524b4a6b77da349aa0b753104b9af1fb43c91de6986102649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618f20d60c2d522524b4a6b77da349aa0b753104b9af1fb43c91de6986102649->enter($__internal_618f20d60c2d522524b4a6b77da349aa0b753104b9af1fb43c91de6986102649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        if ((is_string($__internal_7dfbc00cb63a89d0dd8e7071aabc9712745a0253c62b17281b42a5232718da95 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4d7049385ff121c11c4a0888415b19d17f395647961a8f5e6ee6e10e21d05d44 = "theblog_accueil") && ('' === $__internal_4d7049385ff121c11c4a0888415b19d17f395647961a8f5e6ee6e10e21d05d44 || 0 === strpos($__internal_7dfbc00cb63a89d0dd8e7071aabc9712745a0253c62b17281b42a5232718da95, $__internal_4d7049385ff121c11c4a0888415b19d17f395647961a8f5e6ee6e10e21d05d44)))) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_accueil");
        echo "\">HOME</a></li>
                <li class=\"";
        // line 61
        if ((is_string($__internal_b031584061fb64c32fd641c22aaa87809579cc442e2cdbdd77081fc6924eabf9 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7af975031f21ba3ec07049168d42fd961ef430c7f2f848037b80cdb5df8e6db4 = "theblog_about") && ('' === $__internal_7af975031f21ba3ec07049168d42fd961ef430c7f2f848037b80cdb5df8e6db4 || 0 === strpos($__internal_b031584061fb64c32fd641c22aaa87809579cc442e2cdbdd77081fc6924eabf9, $__internal_7af975031f21ba3ec07049168d42fd961ef430c7f2f848037b80cdb5df8e6db4)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_about");
        echo "\">ABOUT</a></li>
                <li class=\"";
        // line 62
        if ((is_string($__internal_e83fe44f916e92e6d3ea7c133b980a58d79397f147ea08e38ec780004c810537 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_88f8a9256e4a7e348fc9980a3602677aea2e93ad08a0ffaa5ec40138b8e3187b = "theblog_photo") && ('' === $__internal_88f8a9256e4a7e348fc9980a3602677aea2e93ad08a0ffaa5ec40138b8e3187b || 0 === strpos($__internal_e83fe44f916e92e6d3ea7c133b980a58d79397f147ea08e38ec780004c810537, $__internal_88f8a9256e4a7e348fc9980a3602677aea2e93ad08a0ffaa5ec40138b8e3187b)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_photo");
        echo "\">PHOTOS</a></li>
                <li class=\"";
        // line 63
        if ((is_string($__internal_4156994acfa6b0d0af0c7c9a55f6e79dded876d3c18a0667edd7a66289393619 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1a33d6e8902cdc2ee3cde0ca3a7e831598cecbe88eab14eba5c3579762489f19 = "theblog_archives") && ('' === $__internal_1a33d6e8902cdc2ee3cde0ca3a7e831598cecbe88eab14eba5c3579762489f19 || 0 === strpos($__internal_4156994acfa6b0d0af0c7c9a55f6e79dded876d3c18a0667edd7a66289393619, $__internal_1a33d6e8902cdc2ee3cde0ca3a7e831598cecbe88eab14eba5c3579762489f19)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_archives");
        echo "\">ARCHIVES</a></li>
                <li class=\"";
        // line 64
        if ((is_string($__internal_9259a43fbdc239920fd72c6c580f7c137cdc70434b59a357f5993e5aa9521bc8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b06bc572f4dd3e83bba6415e65e90f174d2ddc166972cd87cb495882220c4ff6 = "theblog_contact") && ('' === $__internal_b06bc572f4dd3e83bba6415e65e90f174d2ddc166972cd87cb495882220c4ff6 || 0 === strpos($__internal_9259a43fbdc239920fd72c6c580f7c137cdc70434b59a357f5993e5aa9521bc8, $__internal_b06bc572f4dd3e83bba6415e65e90f174d2ddc166972cd87cb495882220c4ff6)))) {
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
        
        $__internal_618f20d60c2d522524b4a6b77da349aa0b753104b9af1fb43c91de6986102649->leave($__internal_618f20d60c2d522524b4a6b77da349aa0b753104b9af1fb43c91de6986102649_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_90912e36ab5ceac2f15b8b3c920f8429fa8d2c5db9ea879f81a6811fedee46f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90912e36ab5ceac2f15b8b3c920f8429fa8d2c5db9ea879f81a6811fedee46f9->enter($__internal_90912e36ab5ceac2f15b8b3c920f8429fa8d2c5db9ea879f81a6811fedee46f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_90912e36ab5ceac2f15b8b3c920f8429fa8d2c5db9ea879f81a6811fedee46f9->leave($__internal_90912e36ab5ceac2f15b8b3c920f8429fa8d2c5db9ea879f81a6811fedee46f9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88882a97af914d6d79f628a931b1525ea875c27cacaf1d643152af571a1fbffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88882a97af914d6d79f628a931b1525ea875c27cacaf1d643152af571a1fbffe->enter($__internal_88882a97af914d6d79f628a931b1525ea875c27cacaf1d643152af571a1fbffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_88882a97af914d6d79f628a931b1525ea875c27cacaf1d643152af571a1fbffe->leave($__internal_88882a97af914d6d79f628a931b1525ea875c27cacaf1d643152af571a1fbffe_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6cb31fecde188b5468d64cd11225a28f0a939434bd78a67fb95454fdbe3838d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb31fecde188b5468d64cd11225a28f0a939434bd78a67fb95454fdbe3838d0->enter($__internal_6cb31fecde188b5468d64cd11225a28f0a939434bd78a67fb95454fdbe3838d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6cb31fecde188b5468d64cd11225a28f0a939434bd78a67fb95454fdbe3838d0->leave($__internal_6cb31fecde188b5468d64cd11225a28f0a939434bd78a67fb95454fdbe3838d0_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_24a400f888c9357bcf361fa1c5bca84822d40df90ddf9b2bf5449e177dcfb9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a400f888c9357bcf361fa1c5bca84822d40df90ddf9b2bf5449e177dcfb9f3->enter($__internal_24a400f888c9357bcf361fa1c5bca84822d40df90ddf9b2bf5449e177dcfb9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24a400f888c9357bcf361fa1c5bca84822d40df90ddf9b2bf5449e177dcfb9f3->leave($__internal_24a400f888c9357bcf361fa1c5bca84822d40df90ddf9b2bf5449e177dcfb9f3_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
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
", "::layout.html.twig", "C:\\wamp\\www\\theblog\\app/Resources\\views/layout.html.twig");
    }
}
