<?php

/* ::base.html.twig */
class __TwigTemplate_ce0113c22ede87324b5937afaf9195e6247cc2e7d370edd2c1eb1356cdce915c extends Twig_Template
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
        $__internal_0b6721ea906e7cf8c8475be1b3d40a180795a5f6df3e63386839823be90c414e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6721ea906e7cf8c8475be1b3d40a180795a5f6df3e63386839823be90c414e->enter($__internal_0b6721ea906e7cf8c8475be1b3d40a180795a5f6df3e63386839823be90c414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0b6721ea906e7cf8c8475be1b3d40a180795a5f6df3e63386839823be90c414e->leave($__internal_0b6721ea906e7cf8c8475be1b3d40a180795a5f6df3e63386839823be90c414e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_162f2ad15b6aeab2b9d4e3ccda1a4705e2dcb3821ca9aefefd4f14a88d967c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162f2ad15b6aeab2b9d4e3ccda1a4705e2dcb3821ca9aefefd4f14a88d967c61->enter($__internal_162f2ad15b6aeab2b9d4e3ccda1a4705e2dcb3821ca9aefefd4f14a88d967c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_162f2ad15b6aeab2b9d4e3ccda1a4705e2dcb3821ca9aefefd4f14a88d967c61->leave($__internal_162f2ad15b6aeab2b9d4e3ccda1a4705e2dcb3821ca9aefefd4f14a88d967c61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce577b6a3267ffa9f56cc0aa758918c92e90bc3eb4182b53df9709644b25ef29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce577b6a3267ffa9f56cc0aa758918c92e90bc3eb4182b53df9709644b25ef29->enter($__internal_ce577b6a3267ffa9f56cc0aa758918c92e90bc3eb4182b53df9709644b25ef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce577b6a3267ffa9f56cc0aa758918c92e90bc3eb4182b53df9709644b25ef29->leave($__internal_ce577b6a3267ffa9f56cc0aa758918c92e90bc3eb4182b53df9709644b25ef29_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50b570d371689b26279a3e5c6d355017c73719a6d1500c14eeb5debc04778f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b570d371689b26279a3e5c6d355017c73719a6d1500c14eeb5debc04778f10->enter($__internal_50b570d371689b26279a3e5c6d355017c73719a6d1500c14eeb5debc04778f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50b570d371689b26279a3e5c6d355017c73719a6d1500c14eeb5debc04778f10->leave($__internal_50b570d371689b26279a3e5c6d355017c73719a6d1500c14eeb5debc04778f10_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6582233a510b6ea54af14f3bec4b9bccced02286f59a0a12368e518ebc3c380b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6582233a510b6ea54af14f3bec4b9bccced02286f59a0a12368e518ebc3c380b->enter($__internal_6582233a510b6ea54af14f3bec4b9bccced02286f59a0a12368e518ebc3c380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6582233a510b6ea54af14f3bec4b9bccced02286f59a0a12368e518ebc3c380b->leave($__internal_6582233a510b6ea54af14f3bec4b9bccced02286f59a0a12368e518ebc3c380b_prof);

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
