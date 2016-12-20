<?php

/* TheBlogBlogBundle:Blog:recherchearticle.html.twig */
class __TwigTemplate_6ef9dcc2f04cc7c3fdd38fb049c221561a3dd21ca37a112e72f01bf692c2d43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3078ccb73b57738981dd876df1ac1713505e08a4c7e2c0ea549dc154e1ef1801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3078ccb73b57738981dd876df1ac1713505e08a4c7e2c0ea549dc154e1ef1801->enter($__internal_3078ccb73b57738981dd876df1ac1713505e08a4c7e2c0ea549dc154e1ef1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:recherchearticle.html.twig"));

        // line 1
        echo "<li>
    <div class=\"search2\">
        <form method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_recherche");
        echo "\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formrecherche"]) ? $context["formrecherche"] : $this->getContext($context, "formrecherche")), "titre", array()), 'widget');
        echo "
            <input type=\"submit\" value=\"\">
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formrecherche"]) ? $context["formrecherche"] : $this->getContext($context, "formrecherche")), 'rest');
        echo "
        </form>
    </div>
</li>
<div class=\"clearfix\"></div>";
        
        $__internal_3078ccb73b57738981dd876df1ac1713505e08a4c7e2c0ea549dc154e1ef1801->leave($__internal_3078ccb73b57738981dd876df1ac1713505e08a4c7e2c0ea549dc154e1ef1801_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:recherchearticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li>
    <div class=\"search2\">
        <form method=\"post\" action=\"{{ path('theblog_recherche') }}\">
            {{ form_widget(formrecherche.titre) }}
            <input type=\"submit\" value=\"\">
            {{ form_rest(formrecherche) }}
        </form>
    </div>
</li>
<div class=\"clearfix\"></div>", "TheBlogBlogBundle:Blog:recherchearticle.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/recherchearticle.html.twig");
    }
}
