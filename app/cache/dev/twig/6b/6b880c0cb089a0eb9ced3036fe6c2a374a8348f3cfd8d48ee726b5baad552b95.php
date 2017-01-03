<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c1b3d50e012c994437740bf6ecefac21831a72593f3fa708ad80acb8e614cdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_88321c672694ca8bd971fe0197a167bfdecd65139e69874c2790b4f731fa1063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88321c672694ca8bd971fe0197a167bfdecd65139e69874c2790b4f731fa1063->enter($__internal_88321c672694ca8bd971fe0197a167bfdecd65139e69874c2790b4f731fa1063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88321c672694ca8bd971fe0197a167bfdecd65139e69874c2790b4f731fa1063->leave($__internal_88321c672694ca8bd971fe0197a167bfdecd65139e69874c2790b4f731fa1063_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa716f2dde344bc37f19cf626bf3c009b86550fe58bef469b0a5056265b3e097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa716f2dde344bc37f19cf626bf3c009b86550fe58bef469b0a5056265b3e097->enter($__internal_fa716f2dde344bc37f19cf626bf3c009b86550fe58bef469b0a5056265b3e097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_fa716f2dde344bc37f19cf626bf3c009b86550fe58bef469b0a5056265b3e097->leave($__internal_fa716f2dde344bc37f19cf626bf3c009b86550fe58bef469b0a5056265b3e097_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp\\www\\theblog\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
