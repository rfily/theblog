<?php

/* @AdminAdmin/layout.html.twig */
class __TwigTemplate_82ebeb4689e412288828d22ad9139bb092a7e5ba4de9cfdfc52af50bca425e8d extends Twig_Template
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
        $__internal_0fce9a1793321b8f987f4807c349753619763859f849313d9b8db505046d76d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fce9a1793321b8f987f4807c349753619763859f849313d9b8db505046d76d9->enter($__internal_0fce9a1793321b8f987f4807c349753619763859f849313d9b8db505046d76d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/layout.html.twig"));

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
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Settings</a></li>
                        <li><a href=\"";
        // line 40
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
        <li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Pages</a></li>
        <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_homepage");
        echo "\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Articles</a></li>
        <li><a href=\"";
        // line 57
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
        // line 70
        $this->displayBlock('theblog_body', $context, $blocks);
        // line 72
        echo "
</div><!--/.main-->
";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit(array("theme" => array("simple" => array("menubar" => false))));
        echo "
</body>

</html>
";
        
        $__internal_0fce9a1793321b8f987f4807c349753619763859f849313d9b8db505046d76d9->leave($__internal_0fce9a1793321b8f987f4807c349753619763859f849313d9b8db505046d76d9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3de5fb7b036d0cab96e9296f7473189b3a2e60ee134253c3fd5340956fbd6ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de5fb7b036d0cab96e9296f7473189b3a2e60ee134253c3fd5340956fbd6ba4->enter($__internal_3de5fb7b036d0cab96e9296f7473189b3a2e60ee134253c3fd5340956fbd6ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3de5fb7b036d0cab96e9296f7473189b3a2e60ee134253c3fd5340956fbd6ba4->leave($__internal_3de5fb7b036d0cab96e9296f7473189b3a2e60ee134253c3fd5340956fbd6ba4_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c5d8f9bd32d564e8d2c7bb8eb1e36e0a47e225a83c8dbb95e4e6b5f861194fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5d8f9bd32d564e8d2c7bb8eb1e36e0a47e225a83c8dbb95e4e6b5f861194fd->enter($__internal_6c5d8f9bd32d564e8d2c7bb8eb1e36e0a47e225a83c8dbb95e4e6b5f861194fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5bcb0ee_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap-table_1.css");
            // line 13
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap-theme_2.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap-theme.css_3.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap-theme.min_4.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap_5.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap.css_6.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_bootstrap.min_7.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_datepicker_8.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_datepicker3_9.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_part_1_styles_10.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "5bcb0ee_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee_select2_2.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        } else {
            // asset "5bcb0ee"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5bcb0ee") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5bcb0ee.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "    ";
        
        $__internal_6c5d8f9bd32d564e8d2c7bb8eb1e36e0a47e225a83c8dbb95e4e6b5f861194fd->leave($__internal_6c5d8f9bd32d564e8d2c7bb8eb1e36e0a47e225a83c8dbb95e4e6b5f861194fd_prof);

    }

    // line 70
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_a892c9c5871023d32980211a4d1ad1e510c0cab37b526eff00e1bb9d00f8b3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a892c9c5871023d32980211a4d1ad1e510c0cab37b526eff00e1bb9d00f8b3f2->enter($__internal_a892c9c5871023d32980211a4d1ad1e510c0cab37b526eff00e1bb9d00f8b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 71
        echo "    ";
        
        $__internal_a892c9c5871023d32980211a4d1ad1e510c0cab37b526eff00e1bb9d00f8b3f2->leave($__internal_a892c9c5871023d32980211a4d1ad1e510c0cab37b526eff00e1bb9d00f8b3f2_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c81a8603a13e9e03ac6838a5d3169a4cf39f001db31883912a2074304160158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c81a8603a13e9e03ac6838a5d3169a4cf39f001db31883912a2074304160158->enter($__internal_0c81a8603a13e9e03ac6838a5d3169a4cf39f001db31883912a2074304160158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e19b3b7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_jquery-1.11.1.min_1.js");
            // line 86
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_bootstrap-table_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_chart.min_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_chart-data_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_lumino.glyphs_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_respond.min_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_html5shiv.min_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e19b3b7_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7_select2_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e19b3b7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e19b3b7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e19b3b7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 88
        echo "
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
        
        $__internal_0c81a8603a13e9e03ac6838a5d3169a4cf39f001db31883912a2074304160158->leave($__internal_0c81a8603a13e9e03ac6838a5d3169a4cf39f001db31883912a2074304160158_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 88,  260 => 86,  255 => 75,  249 => 74,  242 => 71,  236 => 70,  229 => 15,  155 => 13,  150 => 8,  144 => 7,  133 => 6,  121 => 102,  119 => 74,  115 => 72,  113 => 70,  97 => 57,  93 => 56,  74 => 40,  70 => 39,  66 => 38,  61 => 36,  39 => 16,  37 => 7,  33 => 6,  26 => 1,);
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
    {% block stylesheets %}
        {% stylesheets
            '@AdminAdminBundle/Resources/public/css/*'
            '@AdminAdminBundle/Resources/public/js/select2/dist/css/select2.css'
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
        <li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Pages</a></li>
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
        '@AdminAdminBundle/Resources/public/js/jquery-1.11.1.min.js'
        '@AdminAdminBundle/Resources/public/js/bootstrap.min.js'
        '@AdminAdminBundle/Resources/public/js/bootstrap-table.js'
        '@AdminAdminBundle/Resources/public/js/chart.min.js'
        '@AdminAdminBundle/Resources/public/js/chart-data.js'
        '@AdminAdminBundle/Resources/public/js/lumino.glyphs.js'
        '@AdminAdminBundle/Resources/public/js/respond.min.js'
        '@AdminAdminBundle/Resources/public/js/html5shiv.min.js'
        '@AdminAdminBundle/Resources/public/js/select2/dist/js/select2.js'
    %}
        <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

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
", "@AdminAdmin/layout.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\layout.html.twig");
    }
}
