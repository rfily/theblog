<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_447c5f06e75b1cd2581bc338672321377ce98042f829c3a2f83d01e2552050b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a21df0021f8a2bbeaf375706c87a7223ec742277c91ea3556c2f0aac3164aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a21df0021f8a2bbeaf375706c87a7223ec742277c91ea3556c2f0aac3164aad->enter($__internal_1a21df0021f8a2bbeaf375706c87a7223ec742277c91ea3556c2f0aac3164aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "
            ";
        // line 2
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        
        $__internal_1a21df0021f8a2bbeaf375706c87a7223ec742277c91ea3556c2f0aac3164aad->leave($__internal_1a21df0021f8a2bbeaf375706c87a7223ec742277c91ea3556c2f0aac3164aad_prof);

    }

    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_d919b528e3e757bf8377b132ec63cd3c50b372c8c9fc9e8d456c677fd0a5cf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d919b528e3e757bf8377b132ec63cd3c50b372c8c9fc9e8d456c677fd0a5cf12->enter($__internal_d919b528e3e757bf8377b132ec63cd3c50b372c8c9fc9e8d456c677fd0a5cf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 3
        echo "            ";
        
        $__internal_d919b528e3e757bf8377b132ec63cd3c50b372c8c9fc9e8d456c677fd0a5cf12->leave($__internal_d919b528e3e757bf8377b132ec63cd3c50b372c8c9fc9e8d456c677fd0a5cf12_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
", "HWIOAuthBundle::layout.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
