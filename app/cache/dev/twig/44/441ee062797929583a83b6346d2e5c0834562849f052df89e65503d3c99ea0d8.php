<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c3a5a269fcd1552e06711d9c2860aedc3a8ccd7160d93b6626a4cecc784e09cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_d17323823bb8fc626389de51dfa813a06972295db70fd499303cf26e5fd3651d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17323823bb8fc626389de51dfa813a06972295db70fd499303cf26e5fd3651d->enter($__internal_d17323823bb8fc626389de51dfa813a06972295db70fd499303cf26e5fd3651d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17323823bb8fc626389de51dfa813a06972295db70fd499303cf26e5fd3651d->leave($__internal_d17323823bb8fc626389de51dfa813a06972295db70fd499303cf26e5fd3651d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a43bb5c802ba6e640e1e834dc86bd342d06943472399f76563463d067f1766c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a43bb5c802ba6e640e1e834dc86bd342d06943472399f76563463d067f1766c->enter($__internal_9a43bb5c802ba6e640e1e834dc86bd342d06943472399f76563463d067f1766c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_9a43bb5c802ba6e640e1e834dc86bd342d06943472399f76563463d067f1766c->leave($__internal_9a43bb5c802ba6e640e1e834dc86bd342d06943472399f76563463d067f1766c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
