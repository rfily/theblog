<?php

/* UtilisateursUtilisateurBundle::layout.html.twig */
class __TwigTemplate_bbbdb2896c9512ab7d74f4659388bdc18fc12fec31de747b0ef8d6dfc37fc24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_028e6ce708747ab0b345e66c4ff80b7d24ed36be71fa11b035499b06221b4925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028e6ce708747ab0b345e66c4ff80b7d24ed36be71fa11b035499b06221b4925->enter($__internal_028e6ce708747ab0b345e66c4ff80b7d24ed36be71fa11b035499b06221b4925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursUtilisateurBundle::layout.html.twig"));

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
        // line 15
        echo "
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
";
        // line 24
        if (((is_string($__internal_d1fbfb27ced6091e94f8ea9106da5d7f75ca8f985f6389253e15b21ca0ca9b4c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_da1a4fb96414ad06871a8d3b0c8d6aea3de03a7f149313836295811a743fce7b = "fos_user_security_login") && ('' === $__internal_da1a4fb96414ad06871a8d3b0c8d6aea3de03a7f149313836295811a743fce7b || 0 === strpos($__internal_d1fbfb27ced6091e94f8ea9106da5d7f75ca8f985f6389253e15b21ca0ca9b4c, $__internal_da1a4fb96414ad06871a8d3b0c8d6aea3de03a7f149313836295811a743fce7b))) || (is_string($__internal_b7f9b2f2994c3a25ad3eee58e888ce24e15ce8a7cb16b7f06345e174ea24fbe0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_094c697cffff2b7154e0944427647b021b9ee523895a3b61a556cdbf8eda5618 = "fos_user_registration_register") && ('' === $__internal_094c697cffff2b7154e0944427647b021b9ee523895a3b61a556cdbf8eda5618 || 0 === strpos($__internal_b7f9b2f2994c3a25ad3eee58e888ce24e15ce8a7cb16b7f06345e174ea24fbe0, $__internal_094c697cffff2b7154e0944427647b021b9ee523895a3b61a556cdbf8eda5618))))) {
            // line 25
            echo "<div class=\"row\">
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            ";
            // line 28
            $this->displayBlock('content', $context, $blocks);
            // line 31
            echo "        </div>
    </div>
</div>
";
        } else {
            // line 35
            echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
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
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
                        <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Settings</a></li>
                        <li><a href=\"";
            // line 51
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
        <li class=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_homepage");
            echo "\"><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Articles</a></li>

        <li><a href=\"";
            // line 69
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
            // line 82
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 84
            echo "
</div><!--/.main-->
";
        }
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "</body>

</html>
";
        
        $__internal_028e6ce708747ab0b345e66c4ff80b7d24ed36be71fa11b035499b06221b4925->leave($__internal_028e6ce708747ab0b345e66c4ff80b7d24ed36be71fa11b035499b06221b4925_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f5b60c8249aab3c680da02c4d9a7563865f78ce8c3f5639efb5446d1890319e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5b60c8249aab3c680da02c4d9a7563865f78ce8c3f5639efb5446d1890319e->enter($__internal_5f5b60c8249aab3c680da02c4d9a7563865f78ce8c3f5639efb5446d1890319e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5f5b60c8249aab3c680da02c4d9a7563865f78ce8c3f5639efb5446d1890319e->leave($__internal_5f5b60c8249aab3c680da02c4d9a7563865f78ce8c3f5639efb5446d1890319e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e6d1002eb70cf63c8e2e60f86f7cbf9a929252eb0936978cb958859e4b25325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6d1002eb70cf63c8e2e60f86f7cbf9a929252eb0936978cb958859e4b25325->enter($__internal_1e6d1002eb70cf63c8e2e60f86f7cbf9a929252eb0936978cb958859e4b25325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e3628ab_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap-table_1.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap-theme_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap-theme.css_3.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap-theme.min_4.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap_5.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap.css_6.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_bootstrap.min_7.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_datepicker_8.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_datepicker3_9.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
            // asset "e3628ab_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab_part_1_styles_10.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        } else {
            // asset "e3628ab"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e3628ab") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/e3628ab.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    ";
        
        $__internal_1e6d1002eb70cf63c8e2e60f86f7cbf9a929252eb0936978cb958859e4b25325->leave($__internal_1e6d1002eb70cf63c8e2e60f86f7cbf9a929252eb0936978cb958859e4b25325_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_d82627c14bdcd1644ec9c95469b2d7b8f1debe7df34db44571591dd409b806e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82627c14bdcd1644ec9c95469b2d7b8f1debe7df34db44571591dd409b806e4->enter($__internal_d82627c14bdcd1644ec9c95469b2d7b8f1debe7df34db44571591dd409b806e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
            ";
        
        $__internal_d82627c14bdcd1644ec9c95469b2d7b8f1debe7df34db44571591dd409b806e4->leave($__internal_d82627c14bdcd1644ec9c95469b2d7b8f1debe7df34db44571591dd409b806e4_prof);

    }

    // line 82
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fec2f3c891f9c9e6dddc615199fd5783ad2b1fd33463c5b41380ac2bbb87fd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec2f3c891f9c9e6dddc615199fd5783ad2b1fd33463c5b41380ac2bbb87fd51->enter($__internal_fec2f3c891f9c9e6dddc615199fd5783ad2b1fd33463c5b41380ac2bbb87fd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 83
        echo "    ";
        
        $__internal_fec2f3c891f9c9e6dddc615199fd5783ad2b1fd33463c5b41380ac2bbb87fd51->leave($__internal_fec2f3c891f9c9e6dddc615199fd5783ad2b1fd33463c5b41380ac2bbb87fd51_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfee0faf466c4e8d84296a22d631305e966bacbb7cb60252f9da596f91ec009e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfee0faf466c4e8d84296a22d631305e966bacbb7cb60252f9da596f91ec009e->enter($__internal_cfee0faf466c4e8d84296a22d631305e966bacbb7cb60252f9da596f91ec009e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ce9fa24_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_jquery-1.11.1.min_1.js");
            // line 101
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_bootstrap-table_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_chart.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_chart-data_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_easypiechart_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_easypiechart-data_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_bootstrap-datepicker_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_lumino.glyphs_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_respond.min_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ce9fa24_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24_html5shiv.min_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ce9fa24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ce9fa24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ce9fa24.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 103
        echo "    <script>
        \$(window).on('resize', function () {
            if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
        })
        \$(window).on('resize', function () {
            if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
        })
    </script>
";
        
        $__internal_cfee0faf466c4e8d84296a22d631305e966bacbb7cb60252f9da596f91ec009e->leave($__internal_cfee0faf466c4e8d84296a22d631305e966bacbb7cb60252f9da596f91ec009e_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursUtilisateurBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 103,  287 => 101,  282 => 88,  276 => 87,  269 => 83,  263 => 82,  255 => 29,  249 => 28,  242 => 14,  174 => 12,  169 => 8,  163 => 7,  152 => 6,  142 => 112,  140 => 87,  135 => 84,  133 => 82,  117 => 69,  112 => 67,  93 => 51,  89 => 50,  85 => 49,  80 => 47,  66 => 35,  60 => 31,  58 => 28,  53 => 25,  51 => 24,  40 => 15,  38 => 7,  34 => 6,  27 => 1,);
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
{% if (app.request.attributes.get('_route') starts with 'fos_user_security_login') or (app.request.attributes.get('_route') starts with 'fos_user_registration_register')  %}
<div class=\"row\">
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            {% block content %}

            {% endblock %}
        </div>
    </div>
</div>
{% else %}
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
        <li class=\"{{ path('admin_admin_homepage') }}\"><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Articles</a></li>

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
    {% block fos_user_content %}
    {% endblock %}

</div><!--/.main-->
{% endif %}
{% block javascripts %}
    {% javascripts
    '@AdminAdminBundle/Resources/public/js/jquery-1.11.1.min.js'
    '@AdminAdminBundle/Resources/public/js/bootstrap.min.js'
    '@AdminAdminBundle/Resources/public/js/bootstrap-table.js'
    '@AdminAdminBundle/Resources/public/js/chart.min.js'
    '@AdminAdminBundle/Resources/public/js/chart-data.js'
    '@AdminAdminBundle/Resources/public/js/easypiechart.js'
    '@AdminAdminBundle/Resources/public/js/easypiechart-data.js'
    '@AdminAdminBundle/Resources/public/js/bootstrap-datepicker.js'
    '@AdminAdminBundle/Resources/public/js/lumino.glyphs.js'
    '@AdminAdminBundle/Resources/public/js/respond.min.js'
    '@AdminAdminBundle/Resources/public/js/html5shiv.min.js'
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
    </script>
{% endblock %}
</body>

</html>
", "UtilisateursUtilisateurBundle::layout.html.twig", "C:\\wamp\\www\\theblog\\src\\Utilisateurs\\UtilisateurBundle/Resources/views/layout.html.twig");
    }
}
