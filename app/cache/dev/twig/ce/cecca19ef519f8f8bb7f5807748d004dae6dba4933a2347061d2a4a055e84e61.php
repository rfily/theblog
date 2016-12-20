<?php

/* base.html.twig */
class __TwigTemplate_643a421d96aa338b778085fe05021fd120593a81ea46e2da662db64c9bfe91a1 extends Twig_Template
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
        $__internal_a91654bb88a901f9b460dbf0d02c496786772e063a6f1e4c9f0c07ae394ddc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91654bb88a901f9b460dbf0d02c496786772e063a6f1e4c9f0c07ae394ddc9e->enter($__internal_a91654bb88a901f9b460dbf0d02c496786772e063a6f1e4c9f0c07ae394ddc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a91654bb88a901f9b460dbf0d02c496786772e063a6f1e4c9f0c07ae394ddc9e->leave($__internal_a91654bb88a901f9b460dbf0d02c496786772e063a6f1e4c9f0c07ae394ddc9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_391d9d0d545d67c942a590519fc57f282a6ac5aefb576131fda5de9336745cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391d9d0d545d67c942a590519fc57f282a6ac5aefb576131fda5de9336745cfb->enter($__internal_391d9d0d545d67c942a590519fc57f282a6ac5aefb576131fda5de9336745cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_391d9d0d545d67c942a590519fc57f282a6ac5aefb576131fda5de9336745cfb->leave($__internal_391d9d0d545d67c942a590519fc57f282a6ac5aefb576131fda5de9336745cfb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_964f41909599268999250249ac5e82066b0ea74bf39e26213a20bbab53de2bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964f41909599268999250249ac5e82066b0ea74bf39e26213a20bbab53de2bee->enter($__internal_964f41909599268999250249ac5e82066b0ea74bf39e26213a20bbab53de2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_964f41909599268999250249ac5e82066b0ea74bf39e26213a20bbab53de2bee->leave($__internal_964f41909599268999250249ac5e82066b0ea74bf39e26213a20bbab53de2bee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd2760d6a9dd82fef21030f9e8fd27e62be39b8a769a0748287e6d8981f4cb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2760d6a9dd82fef21030f9e8fd27e62be39b8a769a0748287e6d8981f4cb0e->enter($__internal_bd2760d6a9dd82fef21030f9e8fd27e62be39b8a769a0748287e6d8981f4cb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd2760d6a9dd82fef21030f9e8fd27e62be39b8a769a0748287e6d8981f4cb0e->leave($__internal_bd2760d6a9dd82fef21030f9e8fd27e62be39b8a769a0748287e6d8981f4cb0e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b0f1b28349e632482be6d3ab7338fa45056d3899a847db51dd9f0bbe6fe71b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0f1b28349e632482be6d3ab7338fa45056d3899a847db51dd9f0bbe6fe71b3->enter($__internal_8b0f1b28349e632482be6d3ab7338fa45056d3899a847db51dd9f0bbe6fe71b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b0f1b28349e632482be6d3ab7338fa45056d3899a847db51dd9f0bbe6fe71b3->leave($__internal_8b0f1b28349e632482be6d3ab7338fa45056d3899a847db51dd9f0bbe6fe71b3_prof);

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
