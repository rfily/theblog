<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_39e3822c069f49c72e38f329647d131e05f6879a027d9d81e0d78d7b4cb5bcb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_3656ad4e40b58d8f493bbdb0b3d54f817cf67ad9966ba0b6503121c23ed8245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3656ad4e40b58d8f493bbdb0b3d54f817cf67ad9966ba0b6503121c23ed8245b->enter($__internal_3656ad4e40b58d8f493bbdb0b3d54f817cf67ad9966ba0b6503121c23ed8245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3656ad4e40b58d8f493bbdb0b3d54f817cf67ad9966ba0b6503121c23ed8245b->leave($__internal_3656ad4e40b58d8f493bbdb0b3d54f817cf67ad9966ba0b6503121c23ed8245b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_150437dfff6f0ed84882a581fcc832c19cab1ff653af98a06dc98e42068ef43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150437dfff6f0ed84882a581fcc832c19cab1ff653af98a06dc98e42068ef43e->enter($__internal_150437dfff6f0ed84882a581fcc832c19cab1ff653af98a06dc98e42068ef43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_150437dfff6f0ed84882a581fcc832c19cab1ff653af98a06dc98e42068ef43e->leave($__internal_150437dfff6f0ed84882a581fcc832c19cab1ff653af98a06dc98e42068ef43e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
