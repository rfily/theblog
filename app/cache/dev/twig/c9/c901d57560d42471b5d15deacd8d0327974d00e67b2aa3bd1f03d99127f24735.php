<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_96aac620965138288ab4401ddf45d073d3d2ae7217a227006f02919fa5786d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2b86e9133137b188421ff40850013a619093f71967dca88ce98ffa8e3cbd3dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b86e9133137b188421ff40850013a619093f71967dca88ce98ffa8e3cbd3dcf->enter($__internal_2b86e9133137b188421ff40850013a619093f71967dca88ce98ffa8e3cbd3dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b86e9133137b188421ff40850013a619093f71967dca88ce98ffa8e3cbd3dcf->leave($__internal_2b86e9133137b188421ff40850013a619093f71967dca88ce98ffa8e3cbd3dcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_528009e945d66c4e1ee9c0630cd657f19f074bb381dfb1c5171413707bffebc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528009e945d66c4e1ee9c0630cd657f19f074bb381dfb1c5171413707bffebc6->enter($__internal_528009e945d66c4e1ee9c0630cd657f19f074bb381dfb1c5171413707bffebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_528009e945d66c4e1ee9c0630cd657f19f074bb381dfb1c5171413707bffebc6->leave($__internal_528009e945d66c4e1ee9c0630cd657f19f074bb381dfb1c5171413707bffebc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
