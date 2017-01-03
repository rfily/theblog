<?php

/* base.html.twig */
class __TwigTemplate_8b54fc578459132cf91aa72c59647fbecb3e19dd8e6516324e1f0a1d36432fae extends Twig_Template
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
        $__internal_1ede8962747199fcb5d1ec2b511777aa83588799b458ca0c980b5241232adb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ede8962747199fcb5d1ec2b511777aa83588799b458ca0c980b5241232adb61->enter($__internal_1ede8962747199fcb5d1ec2b511777aa83588799b458ca0c980b5241232adb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1ede8962747199fcb5d1ec2b511777aa83588799b458ca0c980b5241232adb61->leave($__internal_1ede8962747199fcb5d1ec2b511777aa83588799b458ca0c980b5241232adb61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8b4823d54ed5cdcd7f8d7cf9f07fb05fda9370421b053d0ac96ba0ec3db2722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b4823d54ed5cdcd7f8d7cf9f07fb05fda9370421b053d0ac96ba0ec3db2722->enter($__internal_b8b4823d54ed5cdcd7f8d7cf9f07fb05fda9370421b053d0ac96ba0ec3db2722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b8b4823d54ed5cdcd7f8d7cf9f07fb05fda9370421b053d0ac96ba0ec3db2722->leave($__internal_b8b4823d54ed5cdcd7f8d7cf9f07fb05fda9370421b053d0ac96ba0ec3db2722_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24751bbd47348b6082f4ae6aa449e274488bc14b67abdde1f90cdf23edc1ea86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24751bbd47348b6082f4ae6aa449e274488bc14b67abdde1f90cdf23edc1ea86->enter($__internal_24751bbd47348b6082f4ae6aa449e274488bc14b67abdde1f90cdf23edc1ea86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24751bbd47348b6082f4ae6aa449e274488bc14b67abdde1f90cdf23edc1ea86->leave($__internal_24751bbd47348b6082f4ae6aa449e274488bc14b67abdde1f90cdf23edc1ea86_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4de62cbd5af9725fcd998468a858fc933fc211a8b03645707fbae42ddf3f4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4de62cbd5af9725fcd998468a858fc933fc211a8b03645707fbae42ddf3f4f6->enter($__internal_c4de62cbd5af9725fcd998468a858fc933fc211a8b03645707fbae42ddf3f4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4de62cbd5af9725fcd998468a858fc933fc211a8b03645707fbae42ddf3f4f6->leave($__internal_c4de62cbd5af9725fcd998468a858fc933fc211a8b03645707fbae42ddf3f4f6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c68115930d3a1b0d65e60d845cc57cf5b56e6d0214f5ab949b44677b4155fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c68115930d3a1b0d65e60d845cc57cf5b56e6d0214f5ab949b44677b4155fce->enter($__internal_5c68115930d3a1b0d65e60d845cc57cf5b56e6d0214f5ab949b44677b4155fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c68115930d3a1b0d65e60d845cc57cf5b56e6d0214f5ab949b44677b4155fce->leave($__internal_5c68115930d3a1b0d65e60d845cc57cf5b56e6d0214f5ab949b44677b4155fce_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\views\\base.html.twig");
    }
}
