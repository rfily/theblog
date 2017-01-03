<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_362e62633841a347618c4a4d97b9732e7270163f4bf62034ac5b585edc464036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe67e9932937d0eac918e871111093814587e527425784b79d955723305cb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe67e9932937d0eac918e871111093814587e527425784b79d955723305cb7d->enter($__internal_cbe67e9932937d0eac918e871111093814587e527425784b79d955723305cb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe67e9932937d0eac918e871111093814587e527425784b79d955723305cb7d->leave($__internal_cbe67e9932937d0eac918e871111093814587e527425784b79d955723305cb7d_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_18f0de72c3dd40fd187a912124c75dd4c80d9003d41aeae18f92f2061b8f93f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f0de72c3dd40fd187a912124c75dd4c80d9003d41aeae18f92f2061b8f93f1->enter($__internal_18f0de72c3dd40fd187a912124c75dd4c80d9003d41aeae18f92f2061b8f93f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_18f0de72c3dd40fd187a912124c75dd4c80d9003d41aeae18f92f2061b8f93f1->leave($__internal_18f0de72c3dd40fd187a912124c75dd4c80d9003d41aeae18f92f2061b8f93f1_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:connect_success.html.twig", "C:\\wamp\\www\\theblog\\vendor\\hwi\\oauth-bundle/Resources/views/Connect/connect_success.html.twig");
    }
}
