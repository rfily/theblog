<?php

/* AdminAdminBundle::layout.html.twig */
class __TwigTemplate_076e55650e0f5ffcefeac7b27233fad9f2ddb35659fac07db6187eed16b18e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'theblog_body' => array($this, 'block_theblog_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cad71f73d62fdc06cf5fcf36d1f8df6ad0e0a5c95739fdd22a1d7b44e46a7027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad71f73d62fdc06cf5fcf36d1f8df6ad0e0a5c95739fdd22a1d7b44e46a7027->enter($__internal_cad71f73d62fdc06cf5fcf36d1f8df6ad0e0a5c95739fdd22a1d7b44e46a7027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><span>MyBlog</span>Admin</a>
            <ul class=\"user-menu\">
                <li class=\"dropdown pull-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Settings</a></li>
                        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
    <form role=\"search\">
        <div class=\"form-group\">
        </div>
    </form>
    <ul class=\"nav menu\">
        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_page");
        echo "\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Pages</a></li>
        <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_homepage");
        echo "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Articles</a></li>
        <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_categorie");
        echo "\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Categories</a></li>
        <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Utilisateurs</a></li>
    </ul>

</div><!--/.sidebar-->

<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    <div class=\"row\">
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
            <li class=\"active\">Icons</li>
        </ol>
    </div><!--/.row-->
    ";
        // line 71
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 73
        echo "
</div><!--/.main-->
";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit(array("theme" => array("simple" => array("menubar" => false))));
        echo "
</body>

</html>
";
        
        $__internal_cad71f73d62fdc06cf5fcf36d1f8df6ad0e0a5c95739fdd22a1d7b44e46a7027->leave($__internal_cad71f73d62fdc06cf5fcf36d1f8df6ad0e0a5c95739fdd22a1d7b44e46a7027_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4f83108f48a6fc3b6e17d1529083320b695428efdada00d783af30d0350fba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f83108f48a6fc3b6e17d1529083320b695428efdada00d783af30d0350fba9->enter($__internal_c4f83108f48a6fc3b6e17d1529083320b695428efdada00d783af30d0350fba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c4f83108f48a6fc3b6e17d1529083320b695428efdada00d783af30d0350fba9->leave($__internal_c4f83108f48a6fc3b6e17d1529083320b695428efdada00d783af30d0350fba9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70040819bbb88cedd23d7c76b01f21ad97b41929a18a2603349473288fe97853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70040819bbb88cedd23d7c76b01f21ad97b41929a18a2603349473288fe97853->enter($__internal_70040819bbb88cedd23d7c76b01f21ad97b41929a18a2603349473288fe97853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "90e212d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-social_1.css");
            // line 13
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-table_2.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-theme_3.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-theme.css_4.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-theme.min_5.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap_6.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap.css_7.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_datepicker_8.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_datepicker3_9.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "90e212d_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_styles_10.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        } else {
            // asset "90e212d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "
    ";
        
        $__internal_70040819bbb88cedd23d7c76b01f21ad97b41929a18a2603349473288fe97853->leave($__internal_70040819bbb88cedd23d7c76b01f21ad97b41929a18a2603349473288fe97853_prof);

    }

    // line 71
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_b1be78c0440b24c28e7c703e1a8f8077e092c43f149e3ed8c99bcb4eccdc828c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1be78c0440b24c28e7c703e1a8f8077e092c43f149e3ed8c99bcb4eccdc828c->enter($__internal_b1be78c0440b24c28e7c703e1a8f8077e092c43f149e3ed8c99bcb4eccdc828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 72
        echo "    ";
        
        $__internal_b1be78c0440b24c28e7c703e1a8f8077e092c43f149e3ed8c99bcb4eccdc828c->leave($__internal_b1be78c0440b24c28e7c703e1a8f8077e092c43f149e3ed8c99bcb4eccdc828c_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a35cbd6889623f2e8868099d9a1412185708d0a7ba7aa12fbf6b8330b9073cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35cbd6889623f2e8868099d9a1412185708d0a7ba7aa12fbf6b8330b9073cca->enter($__internal_a35cbd6889623f2e8868099d9a1412185708d0a7ba7aa12fbf6b8330b9073cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bf18833_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_jquery-1.11.1.min_1.js");
            // line 92
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_bootstrap-table_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_chart.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_chart-data_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_easypiechart_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_easypiechart-data_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_bootstrap-datepicker_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_lumino.glyphs_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_respond.min_10.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_html5shiv.min_11.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_select2_12.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_Helper_13.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bf18833_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833_page_14.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "bf18833"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bf18833") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bf18833.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 94
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script>
        \$(window).on('resize', function () {
            if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
        })
        \$(window).on('resize', function () {
            if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
        })

        \$(document).ready(function(){
            \$('.myselect').select2();
        });
    </script>
";
        
        $__internal_a35cbd6889623f2e8868099d9a1412185708d0a7ba7aa12fbf6b8330b9073cca->leave($__internal_a35cbd6889623f2e8868099d9a1412185708d0a7ba7aa12fbf6b8330b9073cca_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 95,  354 => 94,  262 => 92,  257 => 76,  251 => 75,  244 => 72,  238 => 71,  230 => 15,  162 => 13,  157 => 9,  151 => 8,  140 => 6,  128 => 109,  126 => 75,  122 => 73,  120 => 71,  104 => 58,  100 => 57,  96 => 56,  78 => 41,  74 => 40,  70 => 39,  65 => 37,  43 => 17,  41 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />
    {% block stylesheets %}
        {% stylesheets
            'bundles/commoncommon/css/*'
             filter='cssrewrite'
        %}
            <link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        {% endstylesheets %}

    {% endblock %}

    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><span>MyBlog</span>Admin</a>
            <ul class=\"user-menu\">
                <li class=\"dropdown pull-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"{{ path('fos_user_profile_show') }}\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
                        <li><a href=\"{{ path('fos_user_profile_edit') }}\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Settings</a></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
    <form role=\"search\">
        <div class=\"form-group\">
        </div>
    </form>
    <ul class=\"nav menu\">
        <li><a href=\"{{ path('admin_admin_page') }}\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Pages</a></li>
        <li><a href=\"{{ path('admin_admin_homepage') }}\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Articles</a></li>
        <li><a href=\"{{ path('admin_admin_categorie') }}\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Categories</a></li>
        <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Utilisateurs</a></li>
    </ul>

</div><!--/.sidebar-->

<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    <div class=\"row\">
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
            <li class=\"active\">Icons</li>
        </ol>
    </div><!--/.row-->
    {% block theblog_body %}
    {% endblock %}

</div><!--/.main-->
{% block javascripts %}
    {% javascripts
        '@CommonCommonBundle/Resources/public/js/jquery-1.11.1.min.js'
        '@CommonCommonBundle/Resources/public/js/bootstrap.min.js'
        '@CommonCommonBundle/Resources/public/js/bootstrap-table.js'
        '@CommonCommonBundle/Resources/public/js/chart.min.js'
        '@CommonCommonBundle/Resources/public/js/chart-data.js'
        '@CommonCommonBundle/Resources/public/js/easypiechart.js'
        '@CommonCommonBundle/Resources/public/js/easypiechart-data.js'
        '@CommonCommonBundle/Resources/public/js/bootstrap-datepicker.js'
        '@CommonCommonBundle/Resources/public/js/lumino.glyphs.js'
        '@CommonCommonBundle/Resources/public/js/respond.min.js'
        '@CommonCommonBundle/Resources/public/js/html5shiv.min.js'
        '@CommonCommonBundle/Resources/public/js/select2/dist/js/select2.js'
        '@CommonCommonBundle/Resources/public/js/Common/Helper.js'
        '@CommonCommonBundle/Resources/public/js/Page/page.js'
    %}
        <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script>
        \$(window).on('resize', function () {
            if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
        })
        \$(window).on('resize', function () {
            if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
        })

        \$(document).ready(function(){
            \$('.myselect').select2();
        });
    </script>
{% endblock %}
{{ tinymce_init({'theme': {'simple': {'menubar': false}}}) }}
</body>

</html>
", "AdminAdminBundle::layout.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/layout.html.twig");
    }
}
