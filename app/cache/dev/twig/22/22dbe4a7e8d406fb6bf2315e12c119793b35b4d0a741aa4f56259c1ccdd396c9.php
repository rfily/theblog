<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5e6b0a055262b134a9328da4b3de6a14891606f86d66f724829c78a77362313d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0b957ec60a8ba69eb04e80c8c3198b56d837c97a1c6b4274d0d2b240ef2dfd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b957ec60a8ba69eb04e80c8c3198b56d837c97a1c6b4274d0d2b240ef2dfd42->enter($__internal_0b957ec60a8ba69eb04e80c8c3198b56d837c97a1c6b4274d0d2b240ef2dfd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b957ec60a8ba69eb04e80c8c3198b56d837c97a1c6b4274d0d2b240ef2dfd42->leave($__internal_0b957ec60a8ba69eb04e80c8c3198b56d837c97a1c6b4274d0d2b240ef2dfd42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63fea39daec45b1bce505504f2b97a46fe8898bb5af0cb6fdbd49567796ddeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fea39daec45b1bce505504f2b97a46fe8898bb5af0cb6fdbd49567796ddeb6->enter($__internal_63fea39daec45b1bce505504f2b97a46fe8898bb5af0cb6fdbd49567796ddeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_63fea39daec45b1bce505504f2b97a46fe8898bb5af0cb6fdbd49567796ddeb6->leave($__internal_63fea39daec45b1bce505504f2b97a46fe8898bb5af0cb6fdbd49567796ddeb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
