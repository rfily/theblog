<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1b9bbeb4c696bc9aead3d718f11ee409fa948e2f4115c0e704574480282352a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e42961e15a702b78e83f423d9bf6ca55b2c86fe4555a419c5ec6def6ba008cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42961e15a702b78e83f423d9bf6ca55b2c86fe4555a419c5ec6def6ba008cb8->enter($__internal_e42961e15a702b78e83f423d9bf6ca55b2c86fe4555a419c5ec6def6ba008cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e42961e15a702b78e83f423d9bf6ca55b2c86fe4555a419c5ec6def6ba008cb8->leave($__internal_e42961e15a702b78e83f423d9bf6ca55b2c86fe4555a419c5ec6def6ba008cb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb8594376b34893617e010eb379a9ab8e0fcc4dba01e1646f24f01566c571b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8594376b34893617e010eb379a9ab8e0fcc4dba01e1646f24f01566c571b70->enter($__internal_eb8594376b34893617e010eb379a9ab8e0fcc4dba01e1646f24f01566c571b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_eb8594376b34893617e010eb379a9ab8e0fcc4dba01e1646f24f01566c571b70->leave($__internal_eb8594376b34893617e010eb379a9ab8e0fcc4dba01e1646f24f01566c571b70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
