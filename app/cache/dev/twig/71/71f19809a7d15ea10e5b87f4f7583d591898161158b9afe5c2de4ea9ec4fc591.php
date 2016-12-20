<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_2503bef03528d48918161bb916a44358f0227431cca4ba15015eaf984be47f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_39ccb32aefb35de86ade1a5594e0aada2430954f0c539344f1066321b19b71a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ccb32aefb35de86ade1a5594e0aada2430954f0c539344f1066321b19b71a0->enter($__internal_39ccb32aefb35de86ade1a5594e0aada2430954f0c539344f1066321b19b71a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ccb32aefb35de86ade1a5594e0aada2430954f0c539344f1066321b19b71a0->leave($__internal_39ccb32aefb35de86ade1a5594e0aada2430954f0c539344f1066321b19b71a0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_462096582ec2b1b98cbf0c229cb5cdff6dd2d2b781e771585d31389eb25dd04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462096582ec2b1b98cbf0c229cb5cdff6dd2d2b781e771585d31389eb25dd04c->enter($__internal_462096582ec2b1b98cbf0c229cb5cdff6dd2d2b781e771585d31389eb25dd04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_462096582ec2b1b98cbf0c229cb5cdff6dd2d2b781e771585d31389eb25dd04c->leave($__internal_462096582ec2b1b98cbf0c229cb5cdff6dd2d2b781e771585d31389eb25dd04c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
