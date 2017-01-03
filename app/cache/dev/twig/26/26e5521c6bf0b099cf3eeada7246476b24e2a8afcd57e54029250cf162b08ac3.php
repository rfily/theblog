<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8920c7b5e00bfbf18222e9741a49c1ffc319f1e816a5c4819e4973c7bb3e1895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71e1e7852e646071bf354f1ca85201347232e26ed539d29b65e72e13f1b7e949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e1e7852e646071bf354f1ca85201347232e26ed539d29b65e72e13f1b7e949->enter($__internal_71e1e7852e646071bf354f1ca85201347232e26ed539d29b65e72e13f1b7e949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e1e7852e646071bf354f1ca85201347232e26ed539d29b65e72e13f1b7e949->leave($__internal_71e1e7852e646071bf354f1ca85201347232e26ed539d29b65e72e13f1b7e949_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1405195076314bead4879d90686ecffe1ba78dec613105d5fd4d9a5b4695a0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1405195076314bead4879d90686ecffe1ba78dec613105d5fd4d9a5b4695a0c5->enter($__internal_1405195076314bead4879d90686ecffe1ba78dec613105d5fd4d9a5b4695a0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1405195076314bead4879d90686ecffe1ba78dec613105d5fd4d9a5b4695a0c5->leave($__internal_1405195076314bead4879d90686ecffe1ba78dec613105d5fd4d9a5b4695a0c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
