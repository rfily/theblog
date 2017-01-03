<?php

/* @HWIOAuth/Connect/login.html.twig */
class __TwigTemplate_9c2c1f5ceb039e0f876d58f3b7c5e838dbb96904ee06ed25f5710124e693357b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "@HWIOAuth/Connect/login.html.twig", 1);
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
        $__internal_b8ed44501ce794722d5dc27e1f27d29288427f4863b25696aa82b4eddfa64986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ed44501ce794722d5dc27e1f27d29288427f4863b25696aa82b4eddfa64986->enter($__internal_b8ed44501ce794722d5dc27e1f27d29288427f4863b25696aa82b4eddfa64986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HWIOAuth/Connect/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ed44501ce794722d5dc27e1f27d29288427f4863b25696aa82b4eddfa64986->leave($__internal_b8ed44501ce794722d5dc27e1f27d29288427f4863b25696aa82b4eddfa64986_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_8ba91ef15237566648b40cec1c389b44c42c2adab5ebbf819da83685597acf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba91ef15237566648b40cec1c389b44c42c2adab5ebbf819da83685597acf5d->enter($__internal_8ba91ef15237566648b40cec1c389b44c42c2adab5ebbf819da83685597acf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

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
            echo "\" class=\"btn btn-block btn-social btn-facebook\"><span class=\"fa fa-facebook\"></span>Connection avec Facebook</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8ba91ef15237566648b40cec1c389b44c42c2adab5ebbf819da83685597acf5d->leave($__internal_8ba91ef15237566648b40cec1c389b44c42c2adab5ebbf819da83685597acf5d_prof);

    }

    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/login.html.twig";
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
    <a href=\"{{ hwi_oauth_login_url(owner) }}\" class=\"btn btn-block btn-social btn-facebook\"><span class=\"fa fa-facebook\"></span>Connection avec Facebook</a>
    {% endfor %}
{% endblock hwi_oauth_content %}
", "@HWIOAuth/Connect/login.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\HWIOAuthBundle\\views\\Connect\\login.html.twig");
    }
}
