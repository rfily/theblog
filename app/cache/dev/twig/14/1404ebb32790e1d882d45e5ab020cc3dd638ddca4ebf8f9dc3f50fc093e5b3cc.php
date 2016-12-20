<?php

/* @GenemuForm/Form/jquery_layout.html.twig */
class __TwigTemplate_37dbcb18e215110f6234394919500abc3f13fa1c45099406a44bd1516eb676e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a595578497da365fe467952880affa6506ff33a754a838f405fbb592a6abe299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a595578497da365fe467952880affa6506ff33a754a838f405fbb592a6abe299->enter($__internal_a595578497da365fe467952880affa6506ff33a754a838f405fbb592a6abe299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GenemuForm/Form/jquery_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 196
        echo "
";
        // line 197
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 316
        echo "
";
        // line 317
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 345
        echo "
";
        // line 346
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 363
        echo "
";
        // line 364
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 486
        echo "
";
        // line 487
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 654
        echo "
";
        // line 655
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        
        $__internal_a595578497da365fe467952880affa6506ff33a754a838f405fbb592a6abe299->leave($__internal_a595578497da365fe467952880affa6506ff33a754a838f405fbb592a6abe299_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        $__internal_2c230d2bcbb957a6aeecd28a3624a5b1367d8ff1e6e0671098eaf54d26700787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c230d2bcbb957a6aeecd28a3624a5b1367d8ff1e6e0671098eaf54d26700787->enter($__internal_2c230d2bcbb957a6aeecd28a3624a5b1367d8ff1e6e0671098eaf54d26700787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Genemu\Bundle\FormBundle\Twig\Extension\FormExtension')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2c230d2bcbb957a6aeecd28a3624a5b1367d8ff1e6e0671098eaf54d26700787->leave($__internal_2c230d2bcbb957a6aeecd28a3624a5b1367d8ff1e6e0671098eaf54d26700787_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        $__internal_10476e2ba912cf09664af0408b21ae7b0e74c503f3021ae32d4c396edbb8c895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10476e2ba912cf09664af0408b21ae7b0e74c503f3021ae32d4c396edbb8c895->enter($__internal_10476e2ba912cf09664af0408b21ae7b0e74c503f3021ae32d4c396edbb8c895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_10476e2ba912cf09664af0408b21ae7b0e74c503f3021ae32d4c396edbb8c895->leave($__internal_10476e2ba912cf09664af0408b21ae7b0e74c503f3021ae32d4c396edbb8c895_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        $__internal_a7435d34268d92d38ec28b34fe264b2ff2f9d55aaa3f6dadf1dd796792a2ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7435d34268d92d38ec28b34fe264b2ff2f9d55aaa3f6dadf1dd796792a2ceac->enter($__internal_a7435d34268d92d38ec28b34fe264b2ff2f9d55aaa3f6dadf1dd796792a2ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_a7435d34268d92d38ec28b34fe264b2ff2f9d55aaa3f6dadf1dd796792a2ceac->leave($__internal_a7435d34268d92d38ec28b34fe264b2ff2f9d55aaa3f6dadf1dd796792a2ceac_prof);

    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        $__internal_11677183bab92e1cb9c387429738d3f354c77a11cc1b9f17e6e16a9e614dadbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11677183bab92e1cb9c387429738d3f354c77a11cc1b9f17e6e16a9e614dadbf->enter($__internal_11677183bab92e1cb9c387429738d3f354c77a11cc1b9f17e6e16a9e614dadbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_captcha_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_11677183bab92e1cb9c387429738d3f354c77a11cc1b9f17e6e16a9e614dadbf->leave($__internal_11677183bab92e1cb9c387429738d3f354c77a11cc1b9f17e6e16a9e614dadbf_prof);

    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        $__internal_96ac3c6fb4c3be0efb0b0f54d277706527fb743d7027e8862ddddb33a0a61695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ac3c6fb4c3be0efb0b0f54d277706527fb743d7027e8862ddddb33a0a61695->enter($__internal_96ac3c6fb4c3be0efb0b0f54d277706527fb743d7027e8862ddddb33a0a61695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_recaptcha_javascript"));

        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_96ac3c6fb4c3be0efb0b0f54d277706527fb743d7027e8862ddddb33a0a61695->leave($__internal_96ac3c6fb4c3be0efb0b0f54d277706527fb743d7027e8862ddddb33a0a61695_prof);

    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        $__internal_9b8a3b9ddf57282c98a9022f3d89b4c7376b943849a9c1bef22dc9d350f3eb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8a3b9ddf57282c98a9022f3d89b4c7376b943849a9c1bef22dc9d350f3eb22->enter($__internal_9b8a3b9ddf57282c98a9022f3d89b4c7376b943849a9c1bef22dc9d350f3eb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_tinymce_javascript"));

        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("script_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(            // line 57
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script_url", array()))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("mode" => "exact", "elements" =>             // line 62
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b8a3b9ddf57282c98a9022f3d89b4c7376b943849a9c1bef22dc9d350f3eb22->leave($__internal_9b8a3b9ddf57282c98a9022f3d89b4c7376b943849a9c1bef22dc9d350f3eb22_prof);

    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        $__internal_c9e6d09146c90b64a2b5784292470861ab0b09d45cc05e9d8d14126a0a39d8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e6d09146c90b64a2b5784292470861ab0b09d45cc05e9d8d14126a0a39d8cf->enter($__internal_c9e6d09146c90b64a2b5784292470861ab0b09d45cc05e9d8d14126a0a39d8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_javascript"));

        // line 90
        ob_start();
        // line 91
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 93
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 95
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 126
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c9e6d09146c90b64a2b5784292470861ab0b09d45cc05e9d8d14126a0a39d8cf->leave($__internal_c9e6d09146c90b64a2b5784292470861ab0b09d45cc05e9d8d14126a0a39d8cf_prof);

    }

    // line 95
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        $__internal_68ed926ee0d6669d0e0566f0aad22a208ebfe14a8589869da62ad272e94c3b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ed926ee0d6669d0e0566f0aad22a208ebfe14a8589869da62ad272e94c3b00->enter($__internal_68ed926ee0d6669d0e0566f0aad22a208ebfe14a8589869da62ad272e94c3b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_javascript_prototype"));

        // line 96
        echo "
        ";
        // line 97
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 98
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("buttonImage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(            // line 99
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "buttonImage", array()))));
            // line 101
            echo "        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if (((isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")) == "en")) {
            // line 104
            echo "            ";
            $context["culture"] = "en-GB";
            // line 105
            echo "        ";
        }
        // line 106
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : $this->getContext($context, "min_year")), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : $this->getContext($context, "max_year")), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 112
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 113
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 123
        echo "
            \$field.datepicker(\$configs);
        ";
        
        $__internal_68ed926ee0d6669d0e0566f0aad22a208ebfe14a8589869da62ad272e94c3b00->leave($__internal_68ed926ee0d6669d0e0566f0aad22a208ebfe14a8589869da62ad272e94c3b00_prof);

    }

    // line 131
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        $__internal_dcd00963297c9698cfb4cc411468c6eef19600ff0d6b0a4eedca24f97c254154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd00963297c9698cfb4cc411468c6eef19600ff0d6b0a4eedca24f97c254154->enter($__internal_dcd00963297c9698cfb4cc411468c6eef19600ff0d6b0a4eedca24f97c254154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryslider_javascript"));

        // line 132
        ob_start();
        // line 133
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 136
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                value: ";
        // line 137
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dcd00963297c9698cfb4cc411468c6eef19600ff0d6b0a4eedca24f97c254154->leave($__internal_dcd00963297c9698cfb4cc411468c6eef19600ff0d6b0a4eedca24f97c254154_prof);

    }

    // line 149
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        $__internal_88519e9ce2f69c84bb3cab258c3c01e0cf480feab7e9fe23daafd0acdcbfde37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88519e9ce2f69c84bb3cab258c3c01e0cf480feab7e9fe23daafd0acdcbfde37->enter($__internal_88519e9ce2f69c84bb3cab258c3c01e0cf480feab7e9fe23daafd0acdcbfde37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_javascript"));

        // line 150
        ob_start();
        // line 151
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 159
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 161
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 162
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 174
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 182
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88519e9ce2f69c84bb3cab258c3c01e0cf480feab7e9fe23daafd0acdcbfde37->leave($__internal_88519e9ce2f69c84bb3cab258c3c01e0cf480feab7e9fe23daafd0acdcbfde37_prof);

    }

    // line 187
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        $__internal_5099ae056954eafc5c3621846285420113ea177a63f0efd312fdb7465a1ff0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5099ae056954eafc5c3621846285420113ea177a63f0efd312fdb7465a1ff0f8->enter($__internal_5099ae056954eafc5c3621846285420113ea177a63f0efd312fdb7465a1ff0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryrating_javascript"));

        // line 188
        ob_start();
        // line 189
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5099ae056954eafc5c3621846285420113ea177a63f0efd312fdb7465a1ff0f8->leave($__internal_5099ae056954eafc5c3621846285420113ea177a63f0efd312fdb7465a1ff0f8_prof);

    }

    // line 197
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        $__internal_40105357bce03d9f7b5a6daf034ce7a71129a3805b58bee471c4ca936b9b6574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40105357bce03d9f7b5a6daf034ce7a71129a3805b58bee471c4ca936b9b6574->enter($__internal_40105357bce03d9f7b5a6daf034ce7a71129a3805b58bee471c4ca936b9b6574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerytokeninput_javascript"));

        // line 198
        ob_start();
        // line 199
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 206
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 207
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 210
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 214
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 215
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 216
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "]");
                // line 217
                echo "                ";
            } else {
                // line 218
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 219
                echo "                ";
            }
            // line 220
            echo "            ";
        }
        // line 221
        echo "
            var \$configs = \$.extend(";
        // line 222
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                prePopulate: ";
        // line 223
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : $this->getContext($context, "prePopulate"));
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 229
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 230
            echo "                '";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "'
            ";
        } else {
            // line 232
            echo "                ";
            $context["sourceChoices"] = array();
            // line 233
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 234
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 235
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo "
            ";
        }
        // line 237
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_40105357bce03d9f7b5a6daf034ce7a71129a3805b58bee471c4ca936b9b6574->leave($__internal_40105357bce03d9f7b5a6daf034ce7a71129a3805b58bee471c4ca936b9b6574_prof);

    }

    // line 245
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        $__internal_9484057c38738ebc893baa395d208bae85d117fc07730a70b3b26b9411910a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9484057c38738ebc893baa395d208bae85d117fc07730a70b3b26b9411910a03->enter($__internal_9484057c38738ebc893baa395d208bae85d117fc07730a70b3b26b9411910a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocompleter_javascript"));

        // line 246
        ob_start();
        // line 247
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 256
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 257
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 267
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 270
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 276
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 277
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 283
            echo "                ";
            $context["sourceChoices"] = array();
            // line 284
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 285
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 286
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo ";
            ";
        }
        // line 289
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 292
        if ((isset($context["free_values"]) ? $context["free_values"] : $this->getContext($context, "free_values"))) {
            // line 293
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 302
        echo "
            ";
        // line 303
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 304
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 312
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9484057c38738ebc893baa395d208bae85d117fc07730a70b3b26b9411910a03->leave($__internal_9484057c38738ebc893baa395d208bae85d117fc07730a70b3b26b9411910a03_prof);

    }

    // line 317
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        $__internal_dd404ee9827d50d1f6e192e6667a660200275d4dcfb67d95a5a72b5fa8df2e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd404ee9827d50d1f6e192e6667a660200275d4dcfb67d95a5a72b5fa8df2e9a->enter($__internal_dd404ee9827d50d1f6e192e6667a660200275d4dcfb67d95a5a72b5fa8df2e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocomplete_javascript"));

        // line 318
        ob_start();
        // line 319
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = ";
        // line 322
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

            ";
        // line 324
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 325
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 326
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 331
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : $this->getContext($context, "suggestions")));
            echo ";
            ";
        }
        // line 333
        echo "
            \$autocompleter.autocomplete(\$configs);

            ";
        // line 336
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minLength", array())))) {
            // line 337
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 341
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd404ee9827d50d1f6e192e6667a660200275d4dcfb67d95a5a72b5fa8df2e9a->leave($__internal_dd404ee9827d50d1f6e192e6667a660200275d4dcfb67d95a5a72b5fa8df2e9a_prof);

    }

    // line 346
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        $__internal_082b1150ca856d25b5420b85deac06c3a6412142e72f22fca6edd425721f6458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082b1150ca856d25b5420b85deac06c3a6412142e72f22fca6edd425721f6458->enter($__internal_082b1150ca856d25b5420b85deac06c3a6412142e72f22fca6edd425721f6458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_javascript"));

        // line 347
        ob_start();
        // line 348
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 352
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 359
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_082b1150ca856d25b5420b85deac06c3a6412142e72f22fca6edd425721f6458->leave($__internal_082b1150ca856d25b5420b85deac06c3a6412142e72f22fca6edd425721f6458_prof);

    }

    // line 352
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        $__internal_f9c145f70351fb30158c881589042c43f326f8a3203071bcb0bc6f31ebe962cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c145f70351fb30158c881589042c43f326f8a3203071bcb0bc6f31ebe962cb->enter($__internal_f9c145f70351fb30158c881589042c43f326f8a3203071bcb0bc6f31ebe962cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_javascript_prototype"));

        // line 353
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : $this->getContext($context, "no_results_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 355
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : $this->getContext($context, "allow_single_deselect"))) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 356
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : $this->getContext($context, "disable_search_threshold")), "html", null, true);
        echo "
                });
            ";
        
        $__internal_f9c145f70351fb30158c881589042c43f326f8a3203071bcb0bc6f31ebe962cb->leave($__internal_f9c145f70351fb30158c881589042c43f326f8a3203071bcb0bc6f31ebe962cb_prof);

    }

    // line 364
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        $__internal_13dcbba81b24ac95d6c789078b20ade572ece3438e20cb9ed78cdd68c955a4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dcbba81b24ac95d6c789078b20ade572ece3438e20cb9ed78cdd68c955a4f0->enter($__internal_13dcbba81b24ac95d6c789078b20ade572ece3438e20cb9ed78cdd68c955a4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_javascript"));

        // line 365
        ob_start();
        // line 366
        echo "    ";
        // line 367
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 368
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_map")));
            // line 369
            echo "    ";
        }
        // line 370
        echo "
    ";
        // line 371
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 372
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), "vars", array()), "id", array()))));
            // line 373
            echo "    ";
        }
        // line 374
        echo "
    ";
        // line 375
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 376
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), "vars", array()), "id", array()))));
            // line 377
            echo "    ";
        }
        // line 378
        echo "
    ";
        // line 379
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 380
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality", array()), "vars", array()), "id", array()))));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 384
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), "vars", array()), "id", array()))));
            // line 385
            echo "    ";
        }
        // line 386
        echo "
    ";
        // line 388
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 0)) {
            // line 389
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))));
            // line 390
            echo "    ";
        }
        // line 391
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 396
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

            ";
        // line 398
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 399
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 404
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_13dcbba81b24ac95d6c789078b20ade572ece3438e20cb9ed78cdd68c955a4f0->leave($__internal_13dcbba81b24ac95d6c789078b20ade572ece3438e20cb9ed78cdd68c955a4f0_prof);

    }

    // line 409
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        $__internal_e044cb60169e674a2f8216959589e8d89cd5ea5f84f27d419b009e2fd2c42d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e044cb60169e674a2f8216959589e8d89cd5ea5f84f27d419b009e2fd2c42d83->enter($__internal_e044cb60169e674a2f8216959589e8d89cd5ea5f84f27d419b009e2fd2c42d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_javascript"));

        // line 410
        ob_start();
        // line 411
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 414
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 482
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e044cb60169e674a2f8216959589e8d89cd5ea5f84f27d419b009e2fd2c42d83->leave($__internal_e044cb60169e674a2f8216959589e8d89cd5ea5f84f27d419b009e2fd2c42d83_prof);

    }

    // line 414
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        $__internal_bc724fea2fed52a0102cf704256c989ed6feffa7fc0d8c95fc17943383dc8518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc724fea2fed52a0102cf704256c989ed6feffa7fc0d8c95fc17943383dc8518->enter($__internal_bc724fea2fed52a0102cf704256c989ed6feffa7fc0d8c95fc17943383dc8518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_javascript_prototype"));

        // line 415
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 419
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(        // line 420
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(        // line 421
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(        // line 422
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 423
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 424
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 429
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 430
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 436
            echo "                        var value = data.file;
                    ";
        }
        // line 438
        echo "
                    \$('#";
        // line 439
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 453
        if (( !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "auto", array()) === false))) {
            // line 454
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 467
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 471
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
        
        $__internal_bc724fea2fed52a0102cf704256c989ed6feffa7fc0d8c95fc17943383dc8518->leave($__internal_bc724fea2fed52a0102cf704256c989ed6feffa7fc0d8c95fc17943383dc8518_prof);

    }

    // line 487
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        $__internal_ad1d5e869283a6a183b1d21f3233a01ec38b61307dab5c85250e4441fd1dbf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d5e869283a6a183b1d21f3233a01ec38b61307dab5c85250e4441fd1dbf56->enter($__internal_ad1d5e869283a6a183b1d21f3233a01ec38b61307dab5c85250e4441fd1dbf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_javascript"));

        // line 488
        ob_start();
        // line 489
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 491
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 492
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 650
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ad1d5e869283a6a183b1d21f3233a01ec38b61307dab5c85250e4441fd1dbf56->leave($__internal_ad1d5e869283a6a183b1d21f3233a01ec38b61307dab5c85250e4441fd1dbf56_prof);

    }

    // line 492
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        $__internal_e3d6039a51d69a110ef30eda13507bbd70e3b34014ef8da9a980d8e234c5d618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d6039a51d69a110ef30eda13507bbd70e3b34014ef8da9a980d8e234c5d618->enter($__internal_e3d6039a51d69a110ef30eda13507bbd70e3b34014ef8da9a980d8e234c5d618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_javascript_prototype"));

        // line 493
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 494
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array())), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 498
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array()), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 504
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(        // line 505
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(        // line 506
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(        // line 507
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 508
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 509
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 514
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 547
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "thumbnail", array()), "width", array())) : (500));
        // line 548
        echo "
                \$ratio = data.image.width > ";
        // line 549
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 593
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 602
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 609
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 614
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 632
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 633
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 635
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file", array())) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
            echo "',
                width: ";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width", array())) : ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")))), "html", null, true);
            echo ",
                height: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "height", array())) : ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 640
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
            echo ",
                height: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 645
            echo "        \$options.hide();
    ";
        }
        // line 647
        echo "
        \$field.uploadify(\$configs);
        ";
        
        $__internal_e3d6039a51d69a110ef30eda13507bbd70e3b34014ef8da9a980d8e234c5d618->leave($__internal_e3d6039a51d69a110ef30eda13507bbd70e3b34014ef8da9a980d8e234c5d618_prof);

    }

    // line 655
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        $__internal_5f5d5854ebc3de30c38cee26c654e6ef39719a71cdbde625c10d0b42df16ed6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5d5854ebc3de30c38cee26c654e6ef39719a71cdbde625c10d0b42df16ed6e->enter($__internal_5f5d5854ebc3de30c38cee26c654e6ef39719a71cdbde625c10d0b42df16ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript"));

        // line 656
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 658
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 660
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 663
        echo "    });
    </script>
";
        
        $__internal_5f5d5854ebc3de30c38cee26c654e6ef39719a71cdbde625c10d0b42df16ed6e->leave($__internal_5f5d5854ebc3de30c38cee26c654e6ef39719a71cdbde625c10d0b42df16ed6e_prof);

    }

    // line 660
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        $__internal_0b96b8d006a97bcda40a5d16612598679bed67d9caa43b2afb5f5a14e0c3d23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b96b8d006a97bcda40a5d16612598679bed67d9caa43b2afb5f5a14e0c3d23a->enter($__internal_0b96b8d006a97bcda40a5d16612598679bed67d9caa43b2afb5f5a14e0c3d23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript_prototype"));

        // line 661
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        ";
        
        $__internal_0b96b8d006a97bcda40a5d16612598679bed67d9caa43b2afb5f5a14e0c3d23a->leave($__internal_0b96b8d006a97bcda40a5d16612598679bed67d9caa43b2afb5f5a14e0c3d23a_prof);

    }

    public function getTemplateName()
    {
        return "@GenemuForm/Form/jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1465 => 661,  1459 => 660,  1450 => 663,  1448 => 660,  1443 => 658,  1439 => 656,  1433 => 655,  1424 => 647,  1420 => 645,  1413 => 641,  1409 => 640,  1403 => 637,  1399 => 636,  1395 => 635,  1391 => 633,  1389 => 632,  1368 => 614,  1360 => 609,  1350 => 602,  1338 => 593,  1289 => 549,  1286 => 548,  1284 => 547,  1248 => 514,  1241 => 509,  1239 => 508,  1238 => 507,  1237 => 506,  1236 => 505,  1235 => 504,  1226 => 498,  1222 => 497,  1217 => 495,  1213 => 494,  1210 => 493,  1204 => 492,  1194 => 650,  1192 => 492,  1188 => 491,  1184 => 489,  1182 => 488,  1176 => 487,  1159 => 471,  1153 => 467,  1138 => 454,  1136 => 453,  1119 => 439,  1116 => 438,  1112 => 436,  1102 => 430,  1100 => 429,  1093 => 424,  1091 => 423,  1090 => 422,  1089 => 421,  1088 => 420,  1087 => 419,  1081 => 416,  1078 => 415,  1072 => 414,  1062 => 482,  1060 => 414,  1056 => 413,  1052 => 411,  1050 => 410,  1044 => 409,  1034 => 404,  1027 => 399,  1025 => 398,  1020 => 396,  1015 => 394,  1010 => 391,  1007 => 390,  1004 => 389,  1001 => 388,  998 => 386,  995 => 385,  992 => 384,  990 => 383,  987 => 382,  984 => 381,  981 => 380,  979 => 379,  976 => 378,  973 => 377,  970 => 376,  968 => 375,  965 => 374,  962 => 373,  959 => 372,  957 => 371,  954 => 370,  951 => 369,  948 => 368,  945 => 367,  943 => 366,  941 => 365,  935 => 364,  925 => 356,  921 => 355,  917 => 354,  914 => 353,  908 => 352,  898 => 359,  896 => 352,  891 => 350,  887 => 348,  885 => 347,  879 => 346,  869 => 341,  863 => 337,  861 => 336,  856 => 333,  850 => 331,  842 => 326,  839 => 325,  837 => 324,  832 => 322,  828 => 321,  824 => 319,  822 => 318,  816 => 317,  806 => 312,  796 => 304,  794 => 303,  791 => 302,  780 => 293,  778 => 292,  773 => 289,  767 => 287,  761 => 286,  758 => 285,  753 => 284,  750 => 283,  742 => 278,  739 => 277,  737 => 276,  729 => 270,  724 => 267,  712 => 257,  710 => 256,  701 => 250,  697 => 249,  693 => 247,  691 => 246,  685 => 245,  672 => 237,  666 => 236,  660 => 235,  657 => 234,  652 => 233,  649 => 232,  643 => 230,  641 => 229,  632 => 223,  628 => 222,  625 => 221,  622 => 220,  619 => 219,  616 => 218,  613 => 217,  610 => 216,  607 => 215,  605 => 214,  599 => 210,  594 => 207,  592 => 206,  585 => 202,  581 => 201,  577 => 199,  575 => 198,  569 => 197,  555 => 191,  551 => 189,  549 => 188,  543 => 187,  533 => 182,  523 => 174,  507 => 162,  505 => 161,  500 => 159,  491 => 153,  487 => 151,  485 => 150,  479 => 149,  467 => 143,  458 => 137,  454 => 136,  450 => 135,  446 => 133,  444 => 132,  438 => 131,  429 => 123,  418 => 115,  414 => 114,  409 => 113,  407 => 112,  400 => 110,  396 => 109,  392 => 108,  388 => 106,  385 => 105,  382 => 104,  380 => 103,  377 => 102,  374 => 101,  372 => 99,  370 => 98,  368 => 97,  365 => 96,  359 => 95,  349 => 126,  347 => 95,  339 => 93,  335 => 91,  333 => 90,  327 => 89,  317 => 84,  312 => 80,  301 => 72,  298 => 71,  296 => 70,  293 => 68,  288 => 65,  285 => 64,  283 => 62,  281 => 60,  278 => 59,  276 => 57,  274 => 56,  271 => 55,  269 => 54,  263 => 53,  239 => 39,  231 => 35,  229 => 34,  223 => 33,  202 => 18,  197 => 15,  195 => 14,  189 => 13,  177 => 11,  165 => 9,  150 => 4,  145 => 3,  143 => 2,  137 => 1,  130 => 655,  127 => 654,  125 => 487,  122 => 486,  120 => 409,  117 => 408,  115 => 364,  112 => 363,  110 => 346,  107 => 345,  105 => 317,  102 => 316,  100 => 245,  97 => 244,  95 => 197,  92 => 196,  90 => 187,  87 => 186,  85 => 149,  82 => 148,  80 => 131,  77 => 130,  75 => 89,  72 => 88,  70 => 53,  67 => 52,  65 => 33,  62 => 32,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_javascript %}
{% spaceless %}
    {% for child in form %}
        {{ form_javascript(child) }}
    {% endfor %}
{% endspaceless %}
{% endblock form_javascript %}

{% block field_javascript \"\" %}

{% block button_javascript \"\" %}

{% block genemu_captcha_javascript %}
{% spaceless %}
    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"{{ path('genemu_base64')}}\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
{% endspaceless %}
{% endblock genemu_captcha_javascript %}

{% block genemu_recaptcha_javascript %}
{% spaceless %}
    <script type=\"text/javascript\" src=\"{{ asset(\"https://www.google.com/recaptcha/api/js/recaptcha_ajax.js\") }}\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('{{ public_key }}', '{{ id }}_div', {{ configs|json_encode|raw }});
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
{% endspaceless %}
{% endblock genemu_recaptcha_javascript %}

{% block genemu_tinymce_javascript %}
{% spaceless %}
    {% if configs.script_url is defined %}
        {% set configs = configs|merge({
            \"script_url\": asset(configs.script_url)
        }) %}
    {% else %}
        {% set configs = configs|merge({
            \"mode\": \"exact\",
            \"elements\": id
        }) %}
    {% endif %}

    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = {{ configs|json_encode|raw }};

        {%- if configs.script_url is defined %}

            var \$textarea = jQuery('#{{ id }}');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        {% else %}

            tinyMCE.init(\$configs);
        {% endif -%}

        });
    </script>
{% endspaceless %}
{% endblock genemu_tinymce_javascript %}

{% block genemu_jquerydate_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#{% if widget != \"single_text\" %}datepicker_{% endif %}{{ id }}');

        {% block genemu_jquerydate_javascript_prototype %}

        {% if configs.buttonImage is defined %}
            {% set configs = configs|merge({
                \"buttonImage\": asset(configs.buttonImage)
            }) %}
        {% endif %}

        {% if culture == \"en\" %}
            {% set culture = \"en-GB\" %}
        {% endif %}

            var \$configs = \$.extend({
                minDate: new Date({{ min_year }}, 0, 1),
                maxDate: new Date({{ max_year }}, 11, 31)
            }, \$.datepicker.regional['{{ culture }}'] ,{{ configs|json_encode|raw }});

        {% if widget != \"single_text\" %}
            var \$year = \$('#{{ form.year.vars.id }}');
            var \$month = \$('#{{ form.month.vars.id }}');
            var \$day = \$('#{{ form.day.vars.id }}');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        {% endif %}

            \$field.datepicker(\$configs);
        {% endblock %}
        });
    </script>
{% endspaceless %}
{% endblock %}

{% block genemu_jqueryslider_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#{{ id }}');
            var \$configs = \$.extend({{ configs|json_encode|raw }}, {
                value: {{ value ? value : 0 }},
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#{{ id }}_slider').slider(\$configs);
        });
    </script>
{% endspaceless %}
{% endblock genemu_jqueryslider_javascript %}

{% block genemu_jquerycolor_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#{{ id }}');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, {{ configs|json_encode|raw }});

        {% if widget == \"image\" %}
            \$picker = \$('#{{ id }}_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        {% else %}
            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        {% endif %}
        });
    </script>
{% endspaceless %}
{% endblock genemu_jquerycolor_javascript %}

{% block genemu_jqueryrating_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"{{ full_name }}\"]').rating({{ configs|json_encode|raw }});
        });
    </script>
{% endspaceless %}
{% endblock genemu_jqueryrating_javascript %}

{% block genemu_jquerytokeninput_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#{{ id }}');
            var \$tokeninput = \$('#tokeninput_{{ id }}');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            {% if multiple is empty %}
                for (first in \$val) break;
                \$val = \$val[first];
            {% endif %}

                \$field.val(JSON.stringify(\$val));
            };

            {% if value is not empty %}
                {% if multiple is empty %}
                    {% set prePopulate = '[' ~ value ~ ']' %}
                {% else %}
                    {% set prePopulate = value %}
                {% endif %}
            {% endif %}

            var \$configs = \$.extend({{ configs|json_encode|raw }}, {
                prePopulate: {{ prePopulate|raw }},
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            {% if route_name %}
                '{{ path(route_name) }}'
            {% else %}
                {% set sourceChoices = [] %}
                {% for choice in choices %}
                    {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}
                {% endfor %}
                {{ sourceChoices|json_encode|raw }}
            {% endif %},
                \$configs
            );
        });
    </script>
{% endspaceless %}
{% endblock genemu_jquerytokeninput_javascript %}

{% block genemu_jqueryautocompleter_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#{{ id }}');
            var \$autocompleter = \$('#autocompleter_{{ id }}');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                {% if multiple %}
                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                {% else %}
                    this.value = ui.item.label;
                    terms = ui.item;
                {% endif %}
                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            {% if route_name %}
                \$configs.source = function(request, response) {
                    \$.getJSON('{{ path(route_name) }}', {
                        term: request.term
                    }, response);
                };
            {% else %}
                {% set sourceChoices = [] %}
                {% for choice in choices %}
                    {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}
                {% endfor %}
                \$configs.source = {{ sourceChoices|json_encode|raw }};
            {% endif %}

                \$autocompleter.autocomplete(\$configs);

            {% if free_values %}
                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            {% endif %}

            {% if multiple %}
                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            {% endif %}
        });
    </script>
{% endspaceless %}
{% endblock genemu_jqueryautocompleter_javascript %}

{% block genemu_jqueryautocomplete_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#{{ id }}');
            var \$configs = {{ configs|json_encode|raw }};

            {% if route_name %}
                \$configs.source = function(request, response) {
                    \$.getJSON('{{ path(route_name) }}', {
                        term: request.term
                    }, response);
                };
            {% else %}
                \$configs.source = {{ suggestions|json_encode|raw }};
            {% endif %}

            \$autocompleter.autocomplete(\$configs);

            {% if configs.minLength is defined and 0 == configs.minLength %}
                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            {% endif %}
        });
    </script>
{% endspaceless %}
{% endblock %}

{% block genemu_jquerychosen_javascript %}
{% spaceless %}
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#{{ id }}');

            {% block genemu_jquerychosen_javascript_prototype %}
                \$field.chosen({
                    no_results_text: \"{{ no_results_text|trans({}, translation_domain) }}\",
                    allow_single_deselect: {{ allow_single_deselect ? 'true' : 'false' }},
                    disable_search_threshold: {{ disable_search_threshold }}
                });
            {% endblock %}
        });
    </script>
{% endspaceless %}
{% endblock %}

{% block genemu_jquerygeolocation_javascript %}
{% spaceless %}
    {# Elements generation #}
    {% if map is same as(true) %}
        {% set elements = elements|merge({\"map\": \"#\" ~ id ~ \"_map\"}) %}
    {% endif %}

    {% if form.latitude is defined %}
        {% set elements = elements|merge({\"lat\": \"#\" ~ form.latitude.vars.id}) %}
    {% endif %}

    {% if form.longitude is defined %}
        {% set elements = elements|merge({\"lng\": \"#\" ~ form.longitude.vars.id}) %}
    {% endif %}

    {% if form.locality is defined %}
        {% set elements = elements|merge({\"locality\": \"#\" ~ form.locality.vars.id}) %}
    {% endif %}

    {% if form.country is defined %}
        {% set elements = elements|merge({\"country\": \"#\" ~ form.country.vars.id}) %}
    {% endif %}

    {# Configs generation #}
    {% if elements | length > 0 %}
        {% set configs = configs|merge({\"elements\": elements}) %}
    {% endif %}

    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#{{ form.address.vars.id }}');

            \$field.addresspicker({{ configs|json_encode|raw }});

            {% if map is same as(true) %}
                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            {% endif %}
        });
    </script>
{% endspaceless %}
{% endblock genemu_jquerygeolocation_javascript %}

{% block genemu_jqueryfile_javascript %}
{% spaceless %}
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#{{ id }}_upload');
        {% block genemu_jqueryfile_javascript_prototype %}
        var \$form = \$field.closest('form');
        var \$queue = \$('#{{ id }}_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend({{ configs|merge({
            'swf':       asset(configs.swf),
            'cancelImg': asset(configs.cancelImg),
            'uploader':  path(configs.script),
            'queueID':   id ~ '_queue'
        })|json_encode|raw }}, {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    {% if multiple %}
                        var value = \$('#{{ id }}').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    {% else %}
                        var value = data.file;
                    {% endif %}

                    \$('#{{ id }}').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    {% if configs.auto is not defined or configs.auto is same as(false) %}
        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    {% else %}
        \$form.submit(function(event) {
            return \$joinFiles();
        });
    {% endif %}

        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        {% endblock %}
    });
</script>
{% endspaceless %}
{% endblock %}

{% block genemu_jqueryimage_javascript %}
{% spaceless %}
<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#{{ id }}_upload');
        {% block genemu_jqueryimage_javascript_prototype %}
        var \$form    = \$field.closest('form');
        var \$preview = \$('#{{ id }}_img_preview');
        var \$options = \$('#{{ id }}_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '{{ asset(configs.folder) }}';
        \$basePath = \$basePath.substr(0, \$basePath.length - '{{ configs.folder }}'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend({{ configs|merge({
            'swf':       asset(configs.swf),
            'cancelImg': asset(configs.cancelImg),
            'uploader':  path(configs.script),
            'queueID':   id ~ '_queue'
        })|json_encode|raw }}, {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#{{ id }}').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                {% set widthMax = data.thumbnail is defined ? data.thumbnail.width : 500 %}

                \$ratio = data.image.width > {{ widthMax }} ? data.image.width / {{ widthMax }} : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#{{ id }}').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, {{ filters|json_encode|raw }}) !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '{{ path('genemu_form_image') }}',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#{{ id }}').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    {% if value %}
        createCrop({
            thumbnail: {
                file: '{{ thumbnail is defined ? thumbnail.file : value }}',
                width: {{ thumbnail is defined ? thumbnail.width : width }},
                height: {{ thumbnail is defined ? thumbnail.height : height }},
            },
            image: {
                width: {{ width }},
                height: {{ height }}
            }
        });
    {% else %}
        \$options.hide();
    {% endif %}

        \$field.uploadify(\$configs);
        {% endblock %}
    });
</script>
{% endspaceless %}
{% endblock %}

{% block genemu_jqueryselect2_javascript %}
    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#{{ id }}');

        {% block genemu_jqueryselect2_javascript_prototype %}
            \$field.select2({{ configs|json_encode|raw }});
        {% endblock %}
    });
    </script>
{% endblock %}
", "@GenemuForm/Form/jquery_layout.html.twig", "C:\\wamp\\www\\theblog\\vendor\\genemu\\form-bundle\\Genemu\\Bundle\\FormBundle\\Resources\\views\\Form\\jquery_layout.html.twig");
    }
}
