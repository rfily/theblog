<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1ca4fb4db69b613afcf903a57f581f22c45ed6a1bc9dc2b7e1692d0d3f101d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_34587296faaa7d52a46346495efbcf10c97cecc8a7961d0876f197f2ad18252d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34587296faaa7d52a46346495efbcf10c97cecc8a7961d0876f197f2ad18252d->enter($__internal_34587296faaa7d52a46346495efbcf10c97cecc8a7961d0876f197f2ad18252d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34587296faaa7d52a46346495efbcf10c97cecc8a7961d0876f197f2ad18252d->leave($__internal_34587296faaa7d52a46346495efbcf10c97cecc8a7961d0876f197f2ad18252d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49e4541af5dbb38c8f9d066102b711591ee6bd7889d5b469e7600d9959649e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e4541af5dbb38c8f9d066102b711591ee6bd7889d5b469e7600d9959649e15->enter($__internal_49e4541af5dbb38c8f9d066102b711591ee6bd7889d5b469e7600d9959649e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_49e4541af5dbb38c8f9d066102b711591ee6bd7889d5b469e7600d9959649e15->leave($__internal_49e4541af5dbb38c8f9d066102b711591ee6bd7889d5b469e7600d9959649e15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
