<?php

/* ::base.html.twig */
class __TwigTemplate_b183148d3aa34c2e0e30b7cb10c74ea907690aceb68a51944e2f44e5b8e7197c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a737129ba27fdcffebd8328a428af88f36ad248ff48151c881c76841e41107e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a737129ba27fdcffebd8328a428af88f36ad248ff48151c881c76841e41107e->enter($__internal_1a737129ba27fdcffebd8328a428af88f36ad248ff48151c881c76841e41107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1a737129ba27fdcffebd8328a428af88f36ad248ff48151c881c76841e41107e->leave($__internal_1a737129ba27fdcffebd8328a428af88f36ad248ff48151c881c76841e41107e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3803064035c752ce7a5136a2e57b29283a895b664e36642f8d2f07011f786ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3803064035c752ce7a5136a2e57b29283a895b664e36642f8d2f07011f786ead->enter($__internal_3803064035c752ce7a5136a2e57b29283a895b664e36642f8d2f07011f786ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3803064035c752ce7a5136a2e57b29283a895b664e36642f8d2f07011f786ead->leave($__internal_3803064035c752ce7a5136a2e57b29283a895b664e36642f8d2f07011f786ead_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a74b19ff1308d4e69abc20b587746d9a33e6937aa675c47480de346043232459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74b19ff1308d4e69abc20b587746d9a33e6937aa675c47480de346043232459->enter($__internal_a74b19ff1308d4e69abc20b587746d9a33e6937aa675c47480de346043232459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a74b19ff1308d4e69abc20b587746d9a33e6937aa675c47480de346043232459->leave($__internal_a74b19ff1308d4e69abc20b587746d9a33e6937aa675c47480de346043232459_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeda72c11ae0040072fbffdcf1554a6904dc34639eaff3592b4cf57ba7fab12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeda72c11ae0040072fbffdcf1554a6904dc34639eaff3592b4cf57ba7fab12d->enter($__internal_eeda72c11ae0040072fbffdcf1554a6904dc34639eaff3592b4cf57ba7fab12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eeda72c11ae0040072fbffdcf1554a6904dc34639eaff3592b4cf57ba7fab12d->leave($__internal_eeda72c11ae0040072fbffdcf1554a6904dc34639eaff3592b4cf57ba7fab12d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_211ee02901abc6a54ddfa5d524ecafd86f0cf376341c8f9c4aada7ce22797107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211ee02901abc6a54ddfa5d524ecafd86f0cf376341c8f9c4aada7ce22797107->enter($__internal_211ee02901abc6a54ddfa5d524ecafd86f0cf376341c8f9c4aada7ce22797107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_211ee02901abc6a54ddfa5d524ecafd86f0cf376341c8f9c4aada7ce22797107->leave($__internal_211ee02901abc6a54ddfa5d524ecafd86f0cf376341c8f9c4aada7ce22797107_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\theblog\\app/Resources\\views/base.html.twig");
    }
}
