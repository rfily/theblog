<?php

/* ::layout.html.twig */
class __TwigTemplate_d03c47b8610697f143726d3d206dc7bb86635b2a0e224b2a0a7814e223fc8965 extends Twig_Template
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
        $__internal_3fe709eb624dbd80df22f13b062fffa02855f4300a9ce11bde4a94cf4bafeb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe709eb624dbd80df22f13b062fffa02855f4300a9ce11bde4a94cf4bafeb0d->enter($__internal_3fe709eb624dbd80df22f13b062fffa02855f4300a9ce11bde4a94cf4bafeb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        if ((is_string($__internal_7d9f37a455c95494b80d0f285c5155d2d4132df1d96380ccc4786f2ea3bb5764 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fa894a7c8b4e0e17e30c9ffae31ae541128dfc186de14337f200ab933223f800 = "theblog_accueil") && ('' === $__internal_fa894a7c8b4e0e17e30c9ffae31ae541128dfc186de14337f200ab933223f800 || 0 === strpos($__internal_7d9f37a455c95494b80d0f285c5155d2d4132df1d96380ccc4786f2ea3bb5764, $__internal_fa894a7c8b4e0e17e30c9ffae31ae541128dfc186de14337f200ab933223f800)))) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_accueil");
        echo "\">HOME</a></li>
                <li class=\"";
        // line 61
        if ((is_string($__internal_de6136576845278ba979f0d10829e48c1ee2be314323ec5dc1935b16fca967d4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f1cd17d1fe79811631b63ded4bb54b840b51e24c2f94c6aa35bb5eeb5576aeb4 = "theblog_about") && ('' === $__internal_f1cd17d1fe79811631b63ded4bb54b840b51e24c2f94c6aa35bb5eeb5576aeb4 || 0 === strpos($__internal_de6136576845278ba979f0d10829e48c1ee2be314323ec5dc1935b16fca967d4, $__internal_f1cd17d1fe79811631b63ded4bb54b840b51e24c2f94c6aa35bb5eeb5576aeb4)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_about");
        echo "\">ABOUT</a></li>
                <li class=\"";
        // line 62
        if ((is_string($__internal_58577394ccc5a9bc40fddd8f96d72567b51de8db5087530e26b791a372aa9e01 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_eec1f4f7af95e4c47b51917fbaa105feef30b0c3f4e228562188caf2ffc6c908 = "theblog_photo") && ('' === $__internal_eec1f4f7af95e4c47b51917fbaa105feef30b0c3f4e228562188caf2ffc6c908 || 0 === strpos($__internal_58577394ccc5a9bc40fddd8f96d72567b51de8db5087530e26b791a372aa9e01, $__internal_eec1f4f7af95e4c47b51917fbaa105feef30b0c3f4e228562188caf2ffc6c908)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_photo");
        echo "\">PHOTOS</a></li>
                <li class=\"";
        // line 63
        if ((is_string($__internal_c7015b1a02b11572a4242234003d296b52f665b4e7aeea19492265ed4ae26580 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e79c41edae34ed113be2613447541de3a1e5d0c9e3b75f1f566d919c1ac04980 = "theblog_archives") && ('' === $__internal_e79c41edae34ed113be2613447541de3a1e5d0c9e3b75f1f566d919c1ac04980 || 0 === strpos($__internal_c7015b1a02b11572a4242234003d296b52f665b4e7aeea19492265ed4ae26580, $__internal_e79c41edae34ed113be2613447541de3a1e5d0c9e3b75f1f566d919c1ac04980)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_archives");
        echo "\">ARCHIVES</a></li>
                <li class=\"";
        // line 64
        if ((is_string($__internal_1073052ffcfcf39236f805097ac113527e683e664a6eb8a10b06c1e96556f8c1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1b070486d9efb3a591d938ae87beeac0c6bace34a4f3579a3d69d3d91e3493ef = "theblog_contact") && ('' === $__internal_1b070486d9efb3a591d938ae87beeac0c6bace34a4f3579a3d69d3d91e3493ef || 0 === strpos($__internal_1073052ffcfcf39236f805097ac113527e683e664a6eb8a10b06c1e96556f8c1, $__internal_1b070486d9efb3a591d938ae87beeac0c6bace34a4f3579a3d69d3d91e3493ef)))) {
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
        
        $__internal_3fe709eb624dbd80df22f13b062fffa02855f4300a9ce11bde4a94cf4bafeb0d->leave($__internal_3fe709eb624dbd80df22f13b062fffa02855f4300a9ce11bde4a94cf4bafeb0d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_94cebf6179033dec9f4dd26fc242fe19efc3d0603fe663af162d7fcd5d668b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cebf6179033dec9f4dd26fc242fe19efc3d0603fe663af162d7fcd5d668b20->enter($__internal_94cebf6179033dec9f4dd26fc242fe19efc3d0603fe663af162d7fcd5d668b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_94cebf6179033dec9f4dd26fc242fe19efc3d0603fe663af162d7fcd5d668b20->leave($__internal_94cebf6179033dec9f4dd26fc242fe19efc3d0603fe663af162d7fcd5d668b20_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfa8b15ea66429bc633aed704555480f0fec02ff30959f1a35d422b04e412a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa8b15ea66429bc633aed704555480f0fec02ff30959f1a35d422b04e412a67->enter($__internal_cfa8b15ea66429bc633aed704555480f0fec02ff30959f1a35d422b04e412a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cfa8b15ea66429bc633aed704555480f0fec02ff30959f1a35d422b04e412a67->leave($__internal_cfa8b15ea66429bc633aed704555480f0fec02ff30959f1a35d422b04e412a67_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf469c3de42b9220c63db60bf1e1af421f66429285b64d4160134e244d8e2328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf469c3de42b9220c63db60bf1e1af421f66429285b64d4160134e244d8e2328->enter($__internal_bf469c3de42b9220c63db60bf1e1af421f66429285b64d4160134e244d8e2328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bf469c3de42b9220c63db60bf1e1af421f66429285b64d4160134e244d8e2328->leave($__internal_bf469c3de42b9220c63db60bf1e1af421f66429285b64d4160134e244d8e2328_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c099b9db9c9201e74374a06b9bbb154ab21bcfd58a9ef8fba77e1a7b093405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c099b9db9c9201e74374a06b9bbb154ab21bcfd58a9ef8fba77e1a7b093405->enter($__internal_a9c099b9db9c9201e74374a06b9bbb154ab21bcfd58a9ef8fba77e1a7b093405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9c099b9db9c9201e74374a06b9bbb154ab21bcfd58a9ef8fba77e1a7b093405->leave($__internal_a9c099b9db9c9201e74374a06b9bbb154ab21bcfd58a9ef8fba77e1a7b093405_prof);

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
