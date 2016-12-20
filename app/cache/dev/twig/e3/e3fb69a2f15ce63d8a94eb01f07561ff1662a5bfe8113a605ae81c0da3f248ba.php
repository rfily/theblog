<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d4afc00bf204a0f607a481869fc499d05756710a15153a4aeb1ed36a9e4b852c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ec29b44e0043272dcb1a4f9038d857524be47909a0903cc3757dcd86ea9b91a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec29b44e0043272dcb1a4f9038d857524be47909a0903cc3757dcd86ea9b91a7->enter($__internal_ec29b44e0043272dcb1a4f9038d857524be47909a0903cc3757dcd86ea9b91a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec29b44e0043272dcb1a4f9038d857524be47909a0903cc3757dcd86ea9b91a7->leave($__internal_ec29b44e0043272dcb1a4f9038d857524be47909a0903cc3757dcd86ea9b91a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a6b729b5c54f97ddca694d7711a93bac4b050154fa3009c7e95fc6d4a5c9db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6b729b5c54f97ddca694d7711a93bac4b050154fa3009c7e95fc6d4a5c9db3->enter($__internal_3a6b729b5c54f97ddca694d7711a93bac4b050154fa3009c7e95fc6d4a5c9db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3a6b729b5c54f97ddca694d7711a93bac4b050154fa3009c7e95fc6d4a5c9db3->leave($__internal_3a6b729b5c54f97ddca694d7711a93bac4b050154fa3009c7e95fc6d4a5c9db3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
