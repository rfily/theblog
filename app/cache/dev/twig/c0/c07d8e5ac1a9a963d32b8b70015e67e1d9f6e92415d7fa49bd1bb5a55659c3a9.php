<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_28fbfc3073b8076e7280669021c84315935e9e938416f8d01647b4ad409cbde0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_36eaa595f85d325420d48907ed724bdd4f06f46df041a1eea716b7f1d83038a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eaa595f85d325420d48907ed724bdd4f06f46df041a1eea716b7f1d83038a5->enter($__internal_36eaa595f85d325420d48907ed724bdd4f06f46df041a1eea716b7f1d83038a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36eaa595f85d325420d48907ed724bdd4f06f46df041a1eea716b7f1d83038a5->leave($__internal_36eaa595f85d325420d48907ed724bdd4f06f46df041a1eea716b7f1d83038a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_404ab35a76ac6cae578852c938f8dbe97d078f2c46637ab04a3f5f498d7bb870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404ab35a76ac6cae578852c938f8dbe97d078f2c46637ab04a3f5f498d7bb870->enter($__internal_404ab35a76ac6cae578852c938f8dbe97d078f2c46637ab04a3f5f498d7bb870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_404ab35a76ac6cae578852c938f8dbe97d078f2c46637ab04a3f5f498d7bb870->leave($__internal_404ab35a76ac6cae578852c938f8dbe97d078f2c46637ab04a3f5f498d7bb870_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
