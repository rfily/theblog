<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_b513f67ad61e0689fac2600b19df744b32dc3a681e343e77b8d4e8bb1b3bc12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2b4e855e6a9f540a9b549339a93a65f8cc9c77fb2f255e7c1d894bb1349d4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b4e855e6a9f540a9b549339a93a65f8cc9c77fb2f255e7c1d894bb1349d4fc->enter($__internal_d2b4e855e6a9f540a9b549339a93a65f8cc9c77fb2f255e7c1d894bb1349d4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b4e855e6a9f540a9b549339a93a65f8cc9c77fb2f255e7c1d894bb1349d4fc->leave($__internal_d2b4e855e6a9f540a9b549339a93a65f8cc9c77fb2f255e7c1d894bb1349d4fc_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_0891b2d37426a1fcf423ed31331c1c29c6aec3fcf0c006ddfdd991b7874dfe78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0891b2d37426a1fcf423ed31331c1c29c6aec3fcf0c006ddfdd991b7874dfe78->enter($__internal_0891b2d37426a1fcf423ed31331c1c29c6aec3fcf0c006ddfdd991b7874dfe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-facebook\"><span class=\"fa fa-facebook\"></span> Connection avec Facebook</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0891b2d37426a1fcf423ed31331c1c29c6aec3fcf0c006ddfdd991b7874dfe78->leave($__internal_0891b2d37426a1fcf423ed31331c1c29c6aec3fcf0c006ddfdd991b7874dfe78_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\" class=\"btn btn-primary btn-facebook\"><span class=\"fa fa-facebook\"></span> Connection avec Facebook</a>
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/HWIOAuthBundle/views/Connect/login.html.twig");
    }
}
