<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ece7e6aa63cc003fc26f3fe31a27a6530d850f77777f190ba5c93f6a797b4deb extends Twig_Template
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
        $__internal_0ef2f44e6e9487e50a1f9b42ac9130ef538a661b09a99d1096c0307ce9792b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef2f44e6e9487e50a1f9b42ac9130ef538a661b09a99d1096c0307ce9792b86->enter($__internal_0ef2f44e6e9487e50a1f9b42ac9130ef538a661b09a99d1096c0307ce9792b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ef2f44e6e9487e50a1f9b42ac9130ef538a661b09a99d1096c0307ce9792b86->leave($__internal_0ef2f44e6e9487e50a1f9b42ac9130ef538a661b09a99d1096c0307ce9792b86_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c99c46f423c9d6f572deea0c4fb29bf6c32d66e987cb4ee3b1ba27291fd5055d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99c46f423c9d6f572deea0c4fb29bf6c32d66e987cb4ee3b1ba27291fd5055d->enter($__internal_c99c46f423c9d6f572deea0c4fb29bf6c32d66e987cb4ee3b1ba27291fd5055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c99c46f423c9d6f572deea0c4fb29bf6c32d66e987cb4ee3b1ba27291fd5055d->leave($__internal_c99c46f423c9d6f572deea0c4fb29bf6c32d66e987cb4ee3b1ba27291fd5055d_prof);

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
