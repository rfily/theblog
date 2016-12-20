<?php

/* layout.html.twig */
class __TwigTemplate_6147f5926aa626c9caf9d292fdac4f820fe5f78042f32a6cee6e61da44897200 extends Twig_Template
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
        $__internal_f0a85f294e791885036f4e2f001c4d7d06a36b34cefe814ddc5783a02f7e1e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a85f294e791885036f4e2f001c4d7d06a36b34cefe814ddc5783a02f7e1e08->enter($__internal_f0a85f294e791885036f4e2f001c4d7d06a36b34cefe814ddc5783a02f7e1e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        if ((is_string($__internal_0c8c171e4375d07740783f480ff8a89274e1756c0a07f968b55ce9d3025cdbc3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9879b188d5f933b8d3f2f16dcfe53eef382b1c0341074656a13d76fcf9ca3ec4 = "theblog_accueil") && ('' === $__internal_9879b188d5f933b8d3f2f16dcfe53eef382b1c0341074656a13d76fcf9ca3ec4 || 0 === strpos($__internal_0c8c171e4375d07740783f480ff8a89274e1756c0a07f968b55ce9d3025cdbc3, $__internal_9879b188d5f933b8d3f2f16dcfe53eef382b1c0341074656a13d76fcf9ca3ec4)))) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_accueil");
        echo "\">HOME</a></li>
                <li class=\"";
        // line 61
        if ((is_string($__internal_26160df0c83ec195145334ddbc651dd0552bb49c54eaa48c960b6129a9bd4751 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fd8078c9d4504a76ca0b0eaaee9919ceda29546facfd7fefafac94050f10bc6c = "theblog_about") && ('' === $__internal_fd8078c9d4504a76ca0b0eaaee9919ceda29546facfd7fefafac94050f10bc6c || 0 === strpos($__internal_26160df0c83ec195145334ddbc651dd0552bb49c54eaa48c960b6129a9bd4751, $__internal_fd8078c9d4504a76ca0b0eaaee9919ceda29546facfd7fefafac94050f10bc6c)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_about");
        echo "\">ABOUT</a></li>
                <li class=\"";
        // line 62
        if ((is_string($__internal_f88e2918271ccd8ebf25c3361dfd292f7add522c933f57b63d39d0baffda3de0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9fb1608529e0d4311e5f637b00289a796e433e3a224bf6c9f8dbaca70d472df2 = "theblog_photo") && ('' === $__internal_9fb1608529e0d4311e5f637b00289a796e433e3a224bf6c9f8dbaca70d472df2 || 0 === strpos($__internal_f88e2918271ccd8ebf25c3361dfd292f7add522c933f57b63d39d0baffda3de0, $__internal_9fb1608529e0d4311e5f637b00289a796e433e3a224bf6c9f8dbaca70d472df2)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_photo");
        echo "\">PHOTOS</a></li>
                <li class=\"";
        // line 63
        if ((is_string($__internal_a298b223ecc5ae87b256720e864d670196aa7f792bc0dd0e9e89b70687a4c64d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a99cf8c2fccca5908c7638248ed3be04dfca14505dec1ea9051d46157148c188 = "theblog_archives") && ('' === $__internal_a99cf8c2fccca5908c7638248ed3be04dfca14505dec1ea9051d46157148c188 || 0 === strpos($__internal_a298b223ecc5ae87b256720e864d670196aa7f792bc0dd0e9e89b70687a4c64d, $__internal_a99cf8c2fccca5908c7638248ed3be04dfca14505dec1ea9051d46157148c188)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_archives");
        echo "\">ARCHIVES</a></li>
                <li class=\"";
        // line 64
        if ((is_string($__internal_b924ccbd1483d18dc2c2816635efab241792486f36f40a3d48ee0120019a3d62 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b914fa2001cc4cd1705b2716f92812495454ee0223feece75973873dff5e3567 = "theblog_contact") && ('' === $__internal_b914fa2001cc4cd1705b2716f92812495454ee0223feece75973873dff5e3567 || 0 === strpos($__internal_b924ccbd1483d18dc2c2816635efab241792486f36f40a3d48ee0120019a3d62, $__internal_b914fa2001cc4cd1705b2716f92812495454ee0223feece75973873dff5e3567)))) {
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
        
        $__internal_f0a85f294e791885036f4e2f001c4d7d06a36b34cefe814ddc5783a02f7e1e08->leave($__internal_f0a85f294e791885036f4e2f001c4d7d06a36b34cefe814ddc5783a02f7e1e08_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5558dade01f69317312cd8fe6fab3e3078350258e01a534314e4ea9f722cdd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5558dade01f69317312cd8fe6fab3e3078350258e01a534314e4ea9f722cdd59->enter($__internal_5558dade01f69317312cd8fe6fab3e3078350258e01a534314e4ea9f722cdd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5558dade01f69317312cd8fe6fab3e3078350258e01a534314e4ea9f722cdd59->leave($__internal_5558dade01f69317312cd8fe6fab3e3078350258e01a534314e4ea9f722cdd59_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_530cb1120c48d0df64281823c684347d12cf48f0bb544050c98cbe925f432159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530cb1120c48d0df64281823c684347d12cf48f0bb544050c98cbe925f432159->enter($__internal_530cb1120c48d0df64281823c684347d12cf48f0bb544050c98cbe925f432159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_530cb1120c48d0df64281823c684347d12cf48f0bb544050c98cbe925f432159->leave($__internal_530cb1120c48d0df64281823c684347d12cf48f0bb544050c98cbe925f432159_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afdfa307b87981c2adeb5b2d74750e2624bed78fd9ce282cd01f91504fb847d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdfa307b87981c2adeb5b2d74750e2624bed78fd9ce282cd01f91504fb847d9->enter($__internal_afdfa307b87981c2adeb5b2d74750e2624bed78fd9ce282cd01f91504fb847d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_afdfa307b87981c2adeb5b2d74750e2624bed78fd9ce282cd01f91504fb847d9->leave($__internal_afdfa307b87981c2adeb5b2d74750e2624bed78fd9ce282cd01f91504fb847d9_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e6e3e84a5cd93c8a4927792cae026da0ffa003fbf9766965a518e7a610c198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e6e3e84a5cd93c8a4927792cae026da0ffa003fbf9766965a518e7a610c198->enter($__internal_f3e6e3e84a5cd93c8a4927792cae026da0ffa003fbf9766965a518e7a610c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3e6e3e84a5cd93c8a4927792cae026da0ffa003fbf9766965a518e7a610c198->leave($__internal_f3e6e3e84a5cd93c8a4927792cae026da0ffa003fbf9766965a518e7a610c198_prof);

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
