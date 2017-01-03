<?php

/* ::layout.html.twig */
class __TwigTemplate_d171d85ad7ea97e0d4fee4a3b79a43f9fbda65cebf016d32c282d9336d82e226 extends Twig_Template
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
        $__internal_d4c033ba455f6ca318e6e74c8327092c7466ebf6f29d1a966a04bdbecf9ac8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c033ba455f6ca318e6e74c8327092c7466ebf6f29d1a966a04bdbecf9ac8a4->enter($__internal_d4c033ba455f6ca318e6e74c8327092c7466ebf6f29d1a966a04bdbecf9ac8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        if ((is_string($__internal_52094d7d996020dbff6f3f792fddf96c2e85fd957e845d2c5a0f2c7212615971 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_825a9e0e0efe5798ee12fa70455f783126c0671affbf9fe7a44b3a1df1085445 = "theblog_accueil") && ('' === $__internal_825a9e0e0efe5798ee12fa70455f783126c0671affbf9fe7a44b3a1df1085445 || 0 === strpos($__internal_52094d7d996020dbff6f3f792fddf96c2e85fd957e845d2c5a0f2c7212615971, $__internal_825a9e0e0efe5798ee12fa70455f783126c0671affbf9fe7a44b3a1df1085445)))) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_accueil");
        echo "\">HOME</a></li>
                <li class=\"";
        // line 61
        if ((is_string($__internal_1dfd383e8c3a491e5a7da804ca9fefa8d4fb73edbb35664515bbd8867c7f7906 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0932fee1a2a605fe22d78d91f4fa0399379e1de7f35cd4816add8cd8a7036702 = "theblog_about") && ('' === $__internal_0932fee1a2a605fe22d78d91f4fa0399379e1de7f35cd4816add8cd8a7036702 || 0 === strpos($__internal_1dfd383e8c3a491e5a7da804ca9fefa8d4fb73edbb35664515bbd8867c7f7906, $__internal_0932fee1a2a605fe22d78d91f4fa0399379e1de7f35cd4816add8cd8a7036702)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_about");
        echo "\">ABOUT</a></li>
                <li class=\"";
        // line 62
        if ((is_string($__internal_7cc6dbf4c92cbe57008f38495d79926cdb91c8fb060c6529315e77da2691507b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_39df14a2124b00cb2f2b24fa76c97beeb8cf8c7ddd0db12fd2bb8b6b95e6d1b6 = "theblog_photo") && ('' === $__internal_39df14a2124b00cb2f2b24fa76c97beeb8cf8c7ddd0db12fd2bb8b6b95e6d1b6 || 0 === strpos($__internal_7cc6dbf4c92cbe57008f38495d79926cdb91c8fb060c6529315e77da2691507b, $__internal_39df14a2124b00cb2f2b24fa76c97beeb8cf8c7ddd0db12fd2bb8b6b95e6d1b6)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_photo");
        echo "\">PHOTOS</a></li>
                <li class=\"";
        // line 63
        if ((is_string($__internal_848cfefb812448b120dc5ac41b0f3e4eb09d42026b90a7ce9c6a76b8a4e50fcd = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7b1b62bc9d17de8a143b8ffccd7fb34649fe013d8a6b42a5e23f32bea6cd778b = "theblog_archives") && ('' === $__internal_7b1b62bc9d17de8a143b8ffccd7fb34649fe013d8a6b42a5e23f32bea6cd778b || 0 === strpos($__internal_848cfefb812448b120dc5ac41b0f3e4eb09d42026b90a7ce9c6a76b8a4e50fcd, $__internal_7b1b62bc9d17de8a143b8ffccd7fb34649fe013d8a6b42a5e23f32bea6cd778b)))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_archives");
        echo "\">ARCHIVES</a></li>
                <li class=\"";
        // line 64
        if ((is_string($__internal_d7f64e78960491e30df219118f37e58d3ca950ac7b1e854f0daa4c5bde7a1c58 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5afae466c3b97f5c3570f13f359912d5d7f0629fece9174cff7fcdeeb43edcf6 = "theblog_contact") && ('' === $__internal_5afae466c3b97f5c3570f13f359912d5d7f0629fece9174cff7fcdeeb43edcf6 || 0 === strpos($__internal_d7f64e78960491e30df219118f37e58d3ca950ac7b1e854f0daa4c5bde7a1c58, $__internal_5afae466c3b97f5c3570f13f359912d5d7f0629fece9174cff7fcdeeb43edcf6)))) {
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
        
        $__internal_d4c033ba455f6ca318e6e74c8327092c7466ebf6f29d1a966a04bdbecf9ac8a4->leave($__internal_d4c033ba455f6ca318e6e74c8327092c7466ebf6f29d1a966a04bdbecf9ac8a4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_211a8e4d3b96143557fa993804aacfa381c8ba486bbab1c8a3d0ace4a4aca1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211a8e4d3b96143557fa993804aacfa381c8ba486bbab1c8a3d0ace4a4aca1b2->enter($__internal_211a8e4d3b96143557fa993804aacfa381c8ba486bbab1c8a3d0ace4a4aca1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_211a8e4d3b96143557fa993804aacfa381c8ba486bbab1c8a3d0ace4a4aca1b2->leave($__internal_211a8e4d3b96143557fa993804aacfa381c8ba486bbab1c8a3d0ace4a4aca1b2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38826427ad6f0cfeaa5588c32fd35af94d37d6c7a32d878bea2c12a7f891649e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38826427ad6f0cfeaa5588c32fd35af94d37d6c7a32d878bea2c12a7f891649e->enter($__internal_38826427ad6f0cfeaa5588c32fd35af94d37d6c7a32d878bea2c12a7f891649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_38826427ad6f0cfeaa5588c32fd35af94d37d6c7a32d878bea2c12a7f891649e->leave($__internal_38826427ad6f0cfeaa5588c32fd35af94d37d6c7a32d878bea2c12a7f891649e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9eb1202a74b85ba1e227c71fea56dd03786f3911e85aa2d2d7e7fe8b80b4612a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb1202a74b85ba1e227c71fea56dd03786f3911e85aa2d2d7e7fe8b80b4612a->enter($__internal_9eb1202a74b85ba1e227c71fea56dd03786f3911e85aa2d2d7e7fe8b80b4612a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9eb1202a74b85ba1e227c71fea56dd03786f3911e85aa2d2d7e7fe8b80b4612a->leave($__internal_9eb1202a74b85ba1e227c71fea56dd03786f3911e85aa2d2d7e7fe8b80b4612a_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_b375e6756e2d25c73a59bcca4696fe12827939d86da1d98c55092702b4fce375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b375e6756e2d25c73a59bcca4696fe12827939d86da1d98c55092702b4fce375->enter($__internal_b375e6756e2d25c73a59bcca4696fe12827939d86da1d98c55092702b4fce375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b375e6756e2d25c73a59bcca4696fe12827939d86da1d98c55092702b4fce375->leave($__internal_b375e6756e2d25c73a59bcca4696fe12827939d86da1d98c55092702b4fce375_prof);

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
