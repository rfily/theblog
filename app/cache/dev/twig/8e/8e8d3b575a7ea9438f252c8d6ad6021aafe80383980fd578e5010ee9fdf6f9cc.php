<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_a1d56942e5dbc9959e3ec3dce0dd4d30f5e7e09b94179dfef8b8b7f70feeba8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
            'genemu_jqueryselect2_hidden_row' => array($this, 'block_genemu_jqueryselect2_hidden_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a561b43ba1cdeba517368d657130ecac2e554ed93efd93750afcbe58a5b73414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a561b43ba1cdeba517368d657130ecac2e554ed93efd93750afcbe58a5b73414->enter($__internal_a561b43ba1cdeba517368d657130ecac2e554ed93efd93750afcbe58a5b73414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GenemuFormBundle:Form:div_layout.html.twig"));

        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('genemu_jqueryselect2_hidden_row', $context, $blocks);
        
        $__internal_a561b43ba1cdeba517368d657130ecac2e554ed93efd93750afcbe58a5b73414->leave($__internal_a561b43ba1cdeba517368d657130ecac2e554ed93efd93750afcbe58a5b73414_prof);

    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        $__internal_8adf54c525b51c351e6fe13d92ffb032cbc53de1f73dc1bfca708fb53ddceeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adf54c525b51c351e6fe13d92ffb032cbc53de1f73dc1bfca708fb53ddceeaa->enter($__internal_8adf54c525b51c351e6fe13d92ffb032cbc53de1f73dc1bfca708fb53ddceeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_captcha_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "\" />
    ";
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8adf54c525b51c351e6fe13d92ffb032cbc53de1f73dc1bfca708fb53ddceeaa->leave($__internal_8adf54c525b51c351e6fe13d92ffb032cbc53de1f73dc1bfca708fb53ddceeaa_prof);

    }

    // line 8
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        $__internal_2ff6b3ced4ea6ce1d5a9922dc66b0814a3fa2f2fc10990ba5d92b3d681103402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff6b3ced4ea6ce1d5a9922dc66b0814a3fa2f2fc10990ba5d92b3d681103402->enter($__internal_2ff6b3ced4ea6ce1d5a9922dc66b0814a3fa2f2fc10990ba5d92b3d681103402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_recaptcha_widget"));

        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2ff6b3ced4ea6ce1d5a9922dc66b0814a3fa2f2fc10990ba5d92b3d681103402->leave($__internal_2ff6b3ced4ea6ce1d5a9922dc66b0814a3fa2f2fc10990ba5d92b3d681103402_prof);

    }

    // line 20
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        $__internal_45acb8415a6b7950306589701a18df08353430629810166532bbdcc67010f9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45acb8415a6b7950306589701a18df08353430629810166532bbdcc67010f9a5->enter($__internal_45acb8415a6b7950306589701a18df08353430629810166532bbdcc67010f9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_widget"));

        // line 21
        ob_start();
        // line 22
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 23
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 26
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 27
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 28
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 29
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 30
            echo "

            ";
            // line 32
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 33
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 34
            echo "            ";
            $context["value"] = "";
            // line 35
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
            // line 36
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45acb8415a6b7950306589701a18df08353430629810166532bbdcc67010f9a5->leave($__internal_45acb8415a6b7950306589701a18df08353430629810166532bbdcc67010f9a5_prof);

    }

    // line 42
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        $__internal_4f846d084e560714b7903aeb56ad21d5cd34e1a7572bef701b79093fb33d12e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f846d084e560714b7903aeb56ad21d5cd34e1a7572bef701b79093fb33d12e6->enter($__internal_4f846d084e560714b7903aeb56ad21d5cd34e1a7572bef701b79093fb33d12e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryslider_widget"));

        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4f846d084e560714b7903aeb56ad21d5cd34e1a7572bef701b79093fb33d12e6->leave($__internal_4f846d084e560714b7903aeb56ad21d5cd34e1a7572bef701b79093fb33d12e6_prof);

    }

    // line 49
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        $__internal_6eb9dc6bba09b44dcad0368283e987c9a288c0a22157a3675a639f8c809534c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb9dc6bba09b44dcad0368283e987c9a288c0a22157a3675a639f8c809534c5->enter($__internal_6eb9dc6bba09b44dcad0368283e987c9a288c0a22157a3675a639f8c809534c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocompleter_widget"));

        // line 50
        ob_start();
        // line 51
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 53
        $context["id"] = ("autocompleter_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 54
        echo "    ";
        $context["full_name"] = ("autocompleter_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 55
        echo "    ";
        $context["value"] = (isset($context["autocompleter_value"]) ? $context["autocompleter_value"] : $this->getContext($context, "autocompleter_value"));
        // line 56
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6eb9dc6bba09b44dcad0368283e987c9a288c0a22157a3675a639f8c809534c5->leave($__internal_6eb9dc6bba09b44dcad0368283e987c9a288c0a22157a3675a639f8c809534c5_prof);

    }

    // line 60
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        $__internal_3094140327b8a455d5782ece2af7aed300c5e93517c983d95b98c3b760936993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3094140327b8a455d5782ece2af7aed300c5e93517c983d95b98c3b760936993->enter($__internal_3094140327b8a455d5782ece2af7aed300c5e93517c983d95b98c3b760936993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_widget"));

        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-placeholder" =>         // line 63
(isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), "class" => "chzn-select"),         // line 65
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        // line 66
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3094140327b8a455d5782ece2af7aed300c5e93517c983d95b98c3b760936993->leave($__internal_3094140327b8a455d5782ece2af7aed300c5e93517c983d95b98c3b760936993_prof);

    }

    // line 70
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        $__internal_067b0a8f78ba9b64d44eb4c3baf60e4879387d58eb970ddce65e1e51f8de53b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067b0a8f78ba9b64d44eb4c3baf60e4879387d58eb970ddce65e1e51f8de53b4->enter($__internal_067b0a8f78ba9b64d44eb4c3baf60e4879387d58eb970ddce65e1e51f8de53b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_widget"));

        // line 71
        ob_start();
        // line 72
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 74
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_067b0a8f78ba9b64d44eb4c3baf60e4879387d58eb970ddce65e1e51f8de53b4->leave($__internal_067b0a8f78ba9b64d44eb4c3baf60e4879387d58eb970ddce65e1e51f8de53b4_prof);

    }

    // line 80
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        $__internal_1326e33abbd387c4c7cf7c6a49ee2600a677ab2c941b5e27d34ae1c2215a7ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1326e33abbd387c4c7cf7c6a49ee2600a677ab2c941b5e27d34ae1c2215a7ed6->enter($__internal_1326e33abbd387c4c7cf7c6a49ee2600a677ab2c941b5e27d34ae1c2215a7ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_widget"));

        // line 81
        ob_start();
        // line 82
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload\"></div>
    <div class=\"queue\">
        <div id=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue\"></div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1326e33abbd387c4c7cf7c6a49ee2600a677ab2c941b5e27d34ae1c2215a7ed6->leave($__internal_1326e33abbd387c4c7cf7c6a49ee2600a677ab2c941b5e27d34ae1c2215a7ed6_prof);

    }

    // line 90
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        $__internal_327c46cc58813f23e37dca98afd5026832bac398932abf41c444fdca977821f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327c46cc58813f23e37dca98afd5026832bac398932abf41c444fdca977821f5->enter($__internal_327c46cc58813f23e37dca98afd5026832bac398932abf41c444fdca977821f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_widget"));

        // line 91
        ob_start();
        // line 92
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 94
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 95
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 98
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_327c46cc58813f23e37dca98afd5026832bac398932abf41c444fdca977821f5->leave($__internal_327c46cc58813f23e37dca98afd5026832bac398932abf41c444fdca977821f5_prof);

    }

    // line 103
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        $__internal_3e085c7b88a292df897e542956e5d5287dc78babe9420a392d4de77b248fcab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e085c7b88a292df897e542956e5d5287dc78babe9420a392d4de77b248fcab3->enter($__internal_3e085c7b88a292df897e542956e5d5287dc78babe9420a392d4de77b248fcab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryrating_widget"));

        // line 104
        ob_start();
        // line 105
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3e085c7b88a292df897e542956e5d5287dc78babe9420a392d4de77b248fcab3->leave($__internal_3e085c7b88a292df897e542956e5d5287dc78babe9420a392d4de77b248fcab3_prof);

    }

    // line 113
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        $__internal_ae1e5d4821e55158d74729099e7c9a24cf5f51ec65c1133b78d3db7cb6bf7d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1e5d4821e55158d74729099e7c9a24cf5f51ec65c1133b78d3db7cb6bf7d26->enter($__internal_ae1e5d4821e55158d74729099e7c9a24cf5f51ec65c1133b78d3db7cb6bf7d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_widget"));

        // line 114
        ob_start();
        // line 115
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview\">
                ";
        // line 118
        $context["type"] = "hidden";
        // line 119
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 123
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 124
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width", array())) : (500));
            // line 125
            echo "                    ";
            $context["ratio"] = ((((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) > (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")))) ? (((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) / (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")))) : (1));
            // line 126
            echo "                    ";
            $context["asset"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file", array())) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))));
            // line 127
            echo "                    ";
            $context["width"] = ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) / (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")));
            // line 128
            echo "                    ";
            $context["height"] = ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")) / (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")));
            // line 129
            echo "                ";
        } else {
            // line 130
            echo "                    ";
            $context["asset"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 131
            echo "                    ";
            $context["width"] = 96;
            // line 132
            echo "                    ";
            $context["height"] = 96;
            // line 133
            echo "                ";
        }
        // line 134
        echo "
                <img id=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 139
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, $context["filter"], "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </ul>
            <div id=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload\"></div>
            <div class=\"queue\">
                <div id=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ae1e5d4821e55158d74729099e7c9a24cf5f51ec65c1133b78d3db7cb6bf7d26->leave($__internal_ae1e5d4821e55158d74729099e7c9a24cf5f51ec65c1133b78d3db7cb6bf7d26_prof);

    }

    // line 151
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        $__internal_cb2990f0749b6acfe7b8a22ea15195385b725fed45c5ebfa893b0595512ce835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2990f0749b6acfe7b8a22ea15195385b725fed45c5ebfa893b0595512ce835->enter($__internal_cb2990f0749b6acfe7b8a22ea15195385b725fed45c5ebfa893b0595512ce835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerytokeninput_widget"));

        // line 152
        ob_start();
        // line 153
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 155
        $context["id"] = ("tokeninput_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 156
        $context["full_name"] = ("tokeninput_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 157
        $context["value"] = (isset($context["tokeninput_value"]) ? $context["tokeninput_value"] : $this->getContext($context, "tokeninput_value"));
        // line 158
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cb2990f0749b6acfe7b8a22ea15195385b725fed45c5ebfa893b0595512ce835->leave($__internal_cb2990f0749b6acfe7b8a22ea15195385b725fed45c5ebfa893b0595512ce835_prof);

    }

    // line 162
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        $__internal_f0480f755961b2e2267bc2b9d5f5bcd1f0fe0404448daf0e5c1c2456013909f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0480f755961b2e2267bc2b9d5f5bcd1f0fe0404448daf0e5c1c2456013909f9->enter($__internal_f0480f755961b2e2267bc2b9d5f5bcd1f0fe0404448daf0e5c1c2456013909f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_plain_widget"));

        // line 163
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 164
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "</p>
    </div>
";
        
        $__internal_f0480f755961b2e2267bc2b9d5f5bcd1f0fe0404448daf0e5c1c2456013909f9->leave($__internal_f0480f755961b2e2267bc2b9d5f5bcd1f0fe0404448daf0e5c1c2456013909f9_prof);

    }

    // line 168
    public function block_genemu_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        $__internal_83aea228c720e9b8f572bf471d7cf1656f5bd5877dc9da5211c6b01fcafff5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aea228c720e9b8f572bf471d7cf1656f5bd5877dc9da5211c6b01fcafff5e8->enter($__internal_83aea228c720e9b8f572bf471d7cf1656f5bd5877dc9da5211c6b01fcafff5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_hidden_row"));

        // line 169
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_83aea228c720e9b8f572bf471d7cf1656f5bd5877dc9da5211c6b01fcafff5e8->leave($__internal_83aea228c720e9b8f572bf471d7cf1656f5bd5877dc9da5211c6b01fcafff5e8_prof);

    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  611 => 169,  605 => 168,  593 => 164,  588 => 163,  582 => 162,  572 => 158,  570 => 157,  568 => 156,  566 => 155,  561 => 153,  559 => 152,  553 => 151,  540 => 144,  535 => 142,  532 => 141,  523 => 139,  519 => 138,  515 => 137,  504 => 135,  501 => 134,  498 => 133,  495 => 132,  492 => 131,  489 => 130,  486 => 129,  483 => 128,  480 => 127,  477 => 126,  474 => 125,  471 => 124,  469 => 123,  464 => 121,  458 => 119,  456 => 118,  452 => 117,  446 => 115,  444 => 114,  438 => 113,  429 => 109,  420 => 107,  416 => 106,  411 => 105,  409 => 104,  403 => 103,  391 => 98,  385 => 95,  377 => 94,  370 => 93,  367 => 92,  365 => 91,  359 => 90,  348 => 85,  343 => 83,  338 => 82,  336 => 81,  330 => 80,  318 => 75,  316 => 74,  310 => 72,  308 => 71,  302 => 70,  291 => 66,  289 => 65,  288 => 63,  286 => 62,  284 => 61,  278 => 60,  267 => 56,  264 => 55,  261 => 54,  259 => 53,  253 => 51,  251 => 50,  245 => 49,  235 => 45,  230 => 44,  228 => 43,  222 => 42,  209 => 36,  206 => 35,  203 => 34,  200 => 33,  198 => 32,  194 => 30,  192 => 29,  191 => 28,  190 => 27,  189 => 26,  184 => 25,  178 => 23,  175 => 22,  173 => 21,  167 => 20,  153 => 12,  147 => 10,  145 => 9,  139 => 8,  129 => 4,  116 => 3,  114 => 2,  108 => 1,  101 => 168,  98 => 167,  96 => 162,  93 => 161,  91 => 151,  88 => 150,  86 => 113,  83 => 112,  81 => 103,  78 => 102,  76 => 90,  73 => 89,  71 => 80,  68 => 79,  66 => 70,  63 => 69,  61 => 60,  58 => 59,  56 => 49,  53 => 48,  51 => 42,  48 => 41,  46 => 20,  43 => 19,  41 => 8,  38 => 7,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block genemu_captcha_widget %}
{% spaceless %}
    <img src=\"{{ src }}\" width=\"{{ width }}\" height=\"{{ height }}\" title=\"{{ name|trans }}\" alt=\"{{ name|trans }}\" />
    {{ block(\"form_widget_simple\") }}
{% endspaceless %}
{% endblock %}

{% block genemu_recaptcha_widget %}
{% spaceless %}
    <div id=\"{{ id }}_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k={{ public_key }}\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
{% endspaceless %}
{% endblock genemu_recaptcha_widget %}

{% block genemu_jquerydate_widget %}
{% spaceless %}
    {% if widget == \"single_text\" %}
        {{ block(\"form_widget_simple\") }}
    {% else %}
        <div {{ block(\"widget_container_attributes\") }}>
            {{ date_pattern|replace({
                \"{{ year }}\":  form_widget(form.year),
                \"{{ month }}\": form_widget(form.month),
                \"{{ day }}\":   form_widget(form.day),
            })|raw }}

            {% set attr = {\"size\": 10}|merge(attr) %}
            {% set id = \"datepicker_\" ~ id %}
            {% set value = '' %}
            {% set full_name = \"datepicker_\" ~ full_name %}
            {{ block(\"hidden_widget\") }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock genemu_jquerydate_widget %}

{% block genemu_jqueryslider_widget %}
{% spaceless %}
    {{ block(\"hidden_widget\") }}
    <div id=\"{{ id }}_slider\"></div>
{% endspaceless %}
{% endblock genemu_jqueryslider_widget %}

{% block genemu_jqueryautocompleter_widget %}
{% spaceless %}
    {{ block(\"hidden_widget\") }}

    {% set id = \"autocompleter_\" ~ id %}
    {% set full_name = \"autocompleter_\" ~ full_name %}
    {% set value = autocompleter_value %}
    {{ block(\"form_widget_simple\") }}
{% endspaceless %}
{% endblock genemu_jqueryautocompleter_widget %}

{% block genemu_jquerychosen_widget %}
{% spaceless %}
    {% set attr = {
        \"data-placeholder\": empty_value,
        \"class\": \"chzn-select\"
    }|merge(attr) %}
    {{ block(\"choice_widget\") }}
{% endspaceless %}
{% endblock genemu_jquerychosen_widget %}

{% block genemu_jquerygeolocation_widget %}
{% spaceless %}
    {{ form_rest(form) }}

    {% if map is same as(true) %}
        <div id=\"{{ id }}_map\">&nbsp;</div>
    {% endif %}
{% endspaceless %}
{% endblock genemu_jquerygeolocation_widget %}

{% block genemu_jqueryfile_widget %}
{% spaceless %}
    {{ block(\"hidden_widget\") }}
    <div id=\"{{ id }}_upload\"></div>
    <div class=\"queue\">
        <div id=\"{{ id }}_queue\"></div>
    </div>
{% endspaceless %}
{% endblock genemu_jqueryfile_widget %}

{% block genemu_jquerycolor_widget %}
{% spaceless %}
    {% if widget == \"image\" %}
        <div id=\"{{ id }}_color\" {{ block(\"widget_container_attributes\") }}>
            <div{% if value %} style=\"background-color: #{{ value }};\"{% endif %}>&nbsp;</div>
            {{ block(\"hidden_widget\") }}
        </div>
    {% else %}
        {{ block(\"form_widget_simple\") }}
    {% endif %}
{% endspaceless %}
{% endblock genemu_jquerycolor_widget %}

{% block genemu_jqueryrating_widget %}
{% spaceless %}
    <div {{ block(\"widget_container_attributes\") }}>
    {% for child in form %}
        {{ form_widget(child) }}
    {% endfor %}
    </div>
{% endspaceless %}
{% endblock genemu_jqueryrating_widget %}

{% block genemu_jqueryimage_widget %}
{% spaceless %}
    <div id=\"{{ id }}_container\">
        <div class=\"left\">
            <div id=\"{{ id }}_preview\">
                {% set type = \"hidden\" %}
                {{ block(\"hidden_widget\") }}

                <a id=\"{{ id }}_overlay\" href=\"#\">&nbsp;</a>

                {% if value %}
                    {% set widthMax = thumbnail is defined ? thumbnail.width : 500 %}
                    {% set ratio = width > widthMax ? width / widthMax : 1 %}
                    {% set asset = asset(thumbnail is defined ? thumbnail.file : value) %}
                    {% set width = width / ratio %}
                    {% set height = height / ratio %}
                {% else %}
                    {% set asset = asset(\"bundles/genemuform/images/default.png\") %}
                    {% set width = 96 %}
                    {% set height = 96 %}
                {% endif %}

                <img id=\"{{ id }}_img_preview\" src=\"{{ asset }}\" width=\"{{ width }}\" height=\"{{ height }}\" />
            </div>
            <ul id=\"{{ id }}_options\" class=\"options\">
                {% for filter in filters %}
                    <li class=\"{{ filter }} change\"></li>
                {% endfor %}
            </ul>
            <div id=\"{{ id }}_upload\"></div>
            <div class=\"queue\">
                <div id=\"{{ id }}_queue\"></div>
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock genemu_jqueryimage_widget %}

{% block genemu_jquerytokeninput_widget %}
{% spaceless %}
{{ block(\"hidden_widget\") }}

{% set id = \"tokeninput_\" ~ id %}
{% set full_name = \"tokeninput_\" ~ full_name %}
{% set value = tokeninput_value %}
{{ block(\"form_widget_simple\") }}
{% endspaceless %}
{% endblock genemu_jquerytokeninput_widget %}

{% block genemu_plain_widget %}
    <div {{ block('container_attributes') }}>
        <p {{ block('widget_attributes') }}>{{ value|escape }}</p>
    </div>
{% endblock %}

{% block genemu_jqueryselect2_hidden_row %}
    {{ block('form_row') }}
{% endblock %}
", "GenemuFormBundle:Form:div_layout.html.twig", "C:\\wamp\\www\\theblog\\vendor\\genemu\\form-bundle\\Genemu\\Bundle\\FormBundle/Resources/views/Form/div_layout.html.twig");
    }
}
