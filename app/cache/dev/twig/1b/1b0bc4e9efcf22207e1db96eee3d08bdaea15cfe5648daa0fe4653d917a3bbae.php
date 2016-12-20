<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_60ca9254523a33b091b102dd81cf8fc9639121e6aeb11f2cad6a785ac5c4b9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4bc59d6b0b36aceb1dd28268c7054c06e0d2fa412f06d86f7e5797a008e2b228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc59d6b0b36aceb1dd28268c7054c06e0d2fa412f06d86f7e5797a008e2b228->enter($__internal_4bc59d6b0b36aceb1dd28268c7054c06e0d2fa412f06d86f7e5797a008e2b228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc59d6b0b36aceb1dd28268c7054c06e0d2fa412f06d86f7e5797a008e2b228->leave($__internal_4bc59d6b0b36aceb1dd28268c7054c06e0d2fa412f06d86f7e5797a008e2b228_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e4026c31c0b6f6b751b2cfe3d3b050bd9ec9ce0554962564975f56c5a3beeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4026c31c0b6f6b751b2cfe3d3b050bd9ec9ce0554962564975f56c5a3beeb5->enter($__internal_6e4026c31c0b6f6b751b2cfe3d3b050bd9ec9ce0554962564975f56c5a3beeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6e4026c31c0b6f6b751b2cfe3d3b050bd9ec9ce0554962564975f56c5a3beeb5->leave($__internal_6e4026c31c0b6f6b751b2cfe3d3b050bd9ec9ce0554962564975f56c5a3beeb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
