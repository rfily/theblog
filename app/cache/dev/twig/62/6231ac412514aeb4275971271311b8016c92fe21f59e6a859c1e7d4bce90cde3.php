<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_790142c7c0cc88dd8c7d457e428930297b21c53c994b3cbbd54a2597b1348171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_537a77714d94069927528b3775918f31b408f8f7b2ec594b908f8c7cc0d949e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537a77714d94069927528b3775918f31b408f8f7b2ec594b908f8c7cc0d949e6->enter($__internal_537a77714d94069927528b3775918f31b408f8f7b2ec594b908f8c7cc0d949e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537a77714d94069927528b3775918f31b408f8f7b2ec594b908f8c7cc0d949e6->leave($__internal_537a77714d94069927528b3775918f31b408f8f7b2ec594b908f8c7cc0d949e6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da72a19ab20227af9442a79c580def4885a1f2b2f5c7504edce4f0b20c83b0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da72a19ab20227af9442a79c580def4885a1f2b2f5c7504edce4f0b20c83b0cd->enter($__internal_da72a19ab20227af9442a79c580def4885a1f2b2f5c7504edce4f0b20c83b0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_da72a19ab20227af9442a79c580def4885a1f2b2f5c7504edce4f0b20c83b0cd->leave($__internal_da72a19ab20227af9442a79c580def4885a1f2b2f5c7504edce4f0b20c83b0cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
