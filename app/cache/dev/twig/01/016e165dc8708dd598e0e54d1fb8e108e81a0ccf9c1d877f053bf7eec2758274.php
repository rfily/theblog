<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_dcb2463ff5a5d0295ca7ec0def6e58eae19e35ffa279292d6d655422059e6397 extends Twig_Template
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
        $__internal_5bbc19e6cfe9b8dc8aa13ec7a4ea0f74bd321c56ee362bfd04df33053622101c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbc19e6cfe9b8dc8aa13ec7a4ea0f74bd321c56ee362bfd04df33053622101c->enter($__internal_5bbc19e6cfe9b8dc8aa13ec7a4ea0f74bd321c56ee362bfd04df33053622101c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbc19e6cfe9b8dc8aa13ec7a4ea0f74bd321c56ee362bfd04df33053622101c->leave($__internal_5bbc19e6cfe9b8dc8aa13ec7a4ea0f74bd321c56ee362bfd04df33053622101c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3c7f40436205207fe3705c145b3bd5f70b6e2b2bc19c63c275a4714adc78033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c7f40436205207fe3705c145b3bd5f70b6e2b2bc19c63c275a4714adc78033->enter($__internal_b3c7f40436205207fe3705c145b3bd5f70b6e2b2bc19c63c275a4714adc78033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b3c7f40436205207fe3705c145b3bd5f70b6e2b2bc19c63c275a4714adc78033->leave($__internal_b3c7f40436205207fe3705c145b3bd5f70b6e2b2bc19c63c275a4714adc78033_prof);

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
