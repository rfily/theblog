<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9ea5ad6192aff7bb940bf5d2e102837fecb4166ac9db21a715f0b5f403789558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_cc9cdb58e67ddd471e211fd7731924de4e2fe84895c90e56989bfe50c3b68c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9cdb58e67ddd471e211fd7731924de4e2fe84895c90e56989bfe50c3b68c56->enter($__internal_cc9cdb58e67ddd471e211fd7731924de4e2fe84895c90e56989bfe50c3b68c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9cdb58e67ddd471e211fd7731924de4e2fe84895c90e56989bfe50c3b68c56->leave($__internal_cc9cdb58e67ddd471e211fd7731924de4e2fe84895c90e56989bfe50c3b68c56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1dc0c3dfa8339f70671bb0b528632c99576d723abc9cd5bb4c8804f43128111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dc0c3dfa8339f70671bb0b528632c99576d723abc9cd5bb4c8804f43128111->enter($__internal_a1dc0c3dfa8339f70671bb0b528632c99576d723abc9cd5bb4c8804f43128111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_a1dc0c3dfa8339f70671bb0b528632c99576d723abc9cd5bb4c8804f43128111->leave($__internal_a1dc0c3dfa8339f70671bb0b528632c99576d723abc9cd5bb4c8804f43128111_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
