<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_96bd06fd9684958ceb5996be25874ec13fb7e715bb1030c43afa3401779f3b62 extends Twig_Template
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
        $__internal_bbb42421f1be7bfef5e145001dad8bf6b162915af48df18a7490d63d38ab0737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb42421f1be7bfef5e145001dad8bf6b162915af48df18a7490d63d38ab0737->enter($__internal_bbb42421f1be7bfef5e145001dad8bf6b162915af48df18a7490d63d38ab0737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb42421f1be7bfef5e145001dad8bf6b162915af48df18a7490d63d38ab0737->leave($__internal_bbb42421f1be7bfef5e145001dad8bf6b162915af48df18a7490d63d38ab0737_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2040129eccd36e2f7a51acb176b74c669a3699962ea25ecb23b16694d59e4a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2040129eccd36e2f7a51acb176b74c669a3699962ea25ecb23b16694d59e4a93->enter($__internal_2040129eccd36e2f7a51acb176b74c669a3699962ea25ecb23b16694d59e4a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2040129eccd36e2f7a51acb176b74c669a3699962ea25ecb23b16694d59e4a93->leave($__internal_2040129eccd36e2f7a51acb176b74c669a3699962ea25ecb23b16694d59e4a93_prof);

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
