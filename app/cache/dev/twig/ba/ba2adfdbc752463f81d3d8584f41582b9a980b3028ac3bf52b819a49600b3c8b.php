<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1bbc94c37f08f68afd1b601575d243d6227874d941827094db0c2737b15f370a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_fe6b776586c28dc3c336f9bd3823dc80b9648f78dea9578e16fcc5931311093a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6b776586c28dc3c336f9bd3823dc80b9648f78dea9578e16fcc5931311093a->enter($__internal_fe6b776586c28dc3c336f9bd3823dc80b9648f78dea9578e16fcc5931311093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe6b776586c28dc3c336f9bd3823dc80b9648f78dea9578e16fcc5931311093a->leave($__internal_fe6b776586c28dc3c336f9bd3823dc80b9648f78dea9578e16fcc5931311093a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02d67fe62c7cf71f4c647969c748f16cf23192067eed0b0141d0387f9174db51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d67fe62c7cf71f4c647969c748f16cf23192067eed0b0141d0387f9174db51->enter($__internal_02d67fe62c7cf71f4c647969c748f16cf23192067eed0b0141d0387f9174db51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_02d67fe62c7cf71f4c647969c748f16cf23192067eed0b0141d0387f9174db51->leave($__internal_02d67fe62c7cf71f4c647969c748f16cf23192067eed0b0141d0387f9174db51_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
