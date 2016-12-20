<?php

/* TheBlogBlogBundle:Blog:recherchearticle.html.twig */
class __TwigTemplate_0432233974baeb11ebbaa44ac719da4de594b62219d4564f7403a9f3c8261fda extends Twig_Template
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
        $__internal_92ae64b19d6af5e8ebf6bc2e4349b4c12cadda181129a717b9a62b0fea2af7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ae64b19d6af5e8ebf6bc2e4349b4c12cadda181129a717b9a62b0fea2af7b0->enter($__internal_92ae64b19d6af5e8ebf6bc2e4349b4c12cadda181129a717b9a62b0fea2af7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:recherchearticle.html.twig"));

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
        
        $__internal_92ae64b19d6af5e8ebf6bc2e4349b4c12cadda181129a717b9a62b0fea2af7b0->leave($__internal_92ae64b19d6af5e8ebf6bc2e4349b4c12cadda181129a717b9a62b0fea2af7b0_prof);

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
