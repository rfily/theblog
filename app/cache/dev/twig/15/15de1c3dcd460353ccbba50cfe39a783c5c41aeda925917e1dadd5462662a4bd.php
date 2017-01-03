<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9a453d240ab962b704f9cc61b357f071b2147f1723e00369adabfef5a612aed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_778c769b4be7e6ae98a79fc3995be1de7a4058e43eb8cd7ddc1c947281da3eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778c769b4be7e6ae98a79fc3995be1de7a4058e43eb8cd7ddc1c947281da3eaa->enter($__internal_778c769b4be7e6ae98a79fc3995be1de7a4058e43eb8cd7ddc1c947281da3eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778c769b4be7e6ae98a79fc3995be1de7a4058e43eb8cd7ddc1c947281da3eaa->leave($__internal_778c769b4be7e6ae98a79fc3995be1de7a4058e43eb8cd7ddc1c947281da3eaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18a7a40479f5def510eddb26d814e8681514b05ca508c1b72def7304e30781fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a7a40479f5def510eddb26d814e8681514b05ca508c1b72def7304e30781fa->enter($__internal_18a7a40479f5def510eddb26d814e8681514b05ca508c1b72def7304e30781fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_18a7a40479f5def510eddb26d814e8681514b05ca508c1b72def7304e30781fa->leave($__internal_18a7a40479f5def510eddb26d814e8681514b05ca508c1b72def7304e30781fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
