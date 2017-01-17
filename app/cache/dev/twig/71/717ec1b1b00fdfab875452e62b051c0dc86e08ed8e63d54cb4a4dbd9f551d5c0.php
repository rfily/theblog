<?php

/* AdminAdminBundle:Page:ajouter.html.twig */
class __TwigTemplate_1e03d5c33e792bf93ad3139185af9fb908ad0519f03566a31f4fa06bc4203935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c2404e41146423d3acae66c48c2f26fb20dde71d5fac502f3a25a08f1ad5232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2404e41146423d3acae66c48c2f26fb20dde71d5fac502f3a25a08f1ad5232->enter($__internal_1c2404e41146423d3acae66c48c2f26fb20dde71d5fac502f3a25a08f1ad5232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Page:ajouter.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

<form method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_doajoutpage");
        echo "\" class=\"ajaxForm\">
    <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
        </div>
        <div class=\"modal-body\">
            ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "info"), "method")) {
            // line 26
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </div>
            ";
        }
        // line 32
        echo "                <div class=\"alert alert-danger\"></div>
                <div class=\"form-group\">
                    <label>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "titre", array()), 'label', array("label" => "Titre"));
        echo "</label>
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "suffix", array()), 'label', array("label" => "Suffix"));
        echo "</label>
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "suffix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "contenu", array()), 'label', array("label" => "Contenu"));
        echo "</label>
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "contenu", array()), 'widget', array("attr" => array("class" => "tinymce")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "meta", array()), 'label', array("label" => "Meta dynamique"));
        echo "</label>
                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "meta", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), 'rest');
        echo "

        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary submitForm\" >Save changes</button>
        </div>
    </div>
        </div>
</form>
";
        // line 59
        echo $this->env->getExtension('Stfalcon\Bundle\TinymceBundle\Twig\Extension\StfalconTinymceExtension')->tinymceInit(array("theme" => array("simple" => array("menubar" => false))));
        
        $__internal_1c2404e41146423d3acae66c48c2f26fb20dde71d5fac502f3a25a08f1ad5232->leave($__internal_1c2404e41146423d3acae66c48c2f26fb20dde71d5fac502f3a25a08f1ad5232_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17f59c887b977b721a8968e53b7956dca8b7a9dbc24d1ab0028c25c6d7052178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f59c887b977b721a8968e53b7956dca8b7a9dbc24d1ab0028c25c6d7052178->enter($__internal_17f59c887b977b721a8968e53b7956dca8b7a9dbc24d1ab0028c25c6d7052178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "90e212d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-social_1.css");
            // line 7
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-table_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-theme_3.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-theme.css_4.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap-theme.min_5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap_6.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_bootstrap.css_7.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_datepicker_8.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_datepicker3_9.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
            // asset "90e212d_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d_part_1_styles_10.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
        } else {
            // asset "90e212d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90e212d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/90e212d.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_17f59c887b977b721a8968e53b7956dca8b7a9dbc24d1ab0028c25c6d7052178->leave($__internal_17f59c887b977b721a8968e53b7956dca8b7a9dbc24d1ab0028c25c6d7052178_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Page:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 9,  140 => 7,  135 => 3,  129 => 2,  122 => 59,  109 => 49,  104 => 47,  100 => 46,  94 => 43,  90 => 42,  84 => 39,  80 => 38,  74 => 35,  70 => 34,  66 => 32,  62 => 30,  53 => 28,  49 => 27,  46 => 26,  44 => 25,  33 => 17,  25 => 11,  23 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#% extends \"AdminAdminBundle::layout.ajax.html.twig\" %#}
{% block stylesheets %}
    {% stylesheets
    'bundles/commoncommon/css/*'
    filter='cssrewrite'
    %}
    <link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
    {% endstylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />
{% endblock %}

<!--[if lt IE 9]>
<script src=\"js/html5shiv.js\"></script>
<script src=\"js/respond.min.js\"></script>
<![endif]-->

<form method=\"post\" action=\"{{ path('admin_admin_doajoutpage') }}\" class=\"ajaxForm\">
    <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
        </div>
        <div class=\"modal-body\">
            {% if app.session.flashBag.has('info') %}
                <div class=\"alert alert-success\">
                    {% for msg in app.session.flashBag.get('info') %}
                        {{ msg }}
                    {% endfor %}
                </div>
            {% endif %}
                <div class=\"alert alert-danger\"></div>
                <div class=\"form-group\">
                    <label>{{ form_label(formajout.titre,'Titre') }}</label>
                    {{ form_widget(formajout.titre, {'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label>{{ form_label(formajout.suffix,'Suffix') }}</label>
                    {{ form_widget(formajout.suffix, {'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label>{{ form_label(formajout.contenu,'Contenu') }}</label>
                    {{ form_widget(formajout.contenu, {'attr':{'class':'tinymce'}}) }}
                </div>
                <div class=\"form-group\">
                    <label>{{ form_label(formajout.meta,'Meta dynamique') }}</label>
                    {{ form_widget(formajout.meta, {'attr':{'class':'form-control'}}) }}
                </div>
                {{ form_rest(formajout) }}

        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            <button type=\"button\" class=\"btn btn-primary submitForm\" >Save changes</button>
        </div>
    </div>
        </div>
</form>
{{ tinymce_init({'theme': {'simple': {'menubar': false}}}) }}", "AdminAdminBundle:Page:ajouter.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Page/ajouter.html.twig");
    }
}
