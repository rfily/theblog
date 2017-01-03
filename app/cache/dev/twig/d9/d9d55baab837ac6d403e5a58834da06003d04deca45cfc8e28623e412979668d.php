<?php

/* AdminAdminBundle:Categorie:modifier.html.twig */
class __TwigTemplate_021583c7b2be70a9f82d535662893ff19f64961284d9d87995ff2e3fd7c05e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "AdminAdminBundle:Categorie:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae93db4f0faeda5bcd30873ee22fc13060d4bbb48a02a5f8516143bdfee8d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae93db4f0faeda5bcd30873ee22fc13060d4bbb48a02a5f8516143bdfee8d15->enter($__internal_9ae93db4f0faeda5bcd30873ee22fc13060d4bbb48a02a5f8516143bdfee8d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Categorie:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae93db4f0faeda5bcd30873ee22fc13060d4bbb48a02a5f8516143bdfee8d15->leave($__internal_9ae93db4f0faeda5bcd30873ee22fc13060d4bbb48a02a5f8516143bdfee8d15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c74015ba98f34466df088220995886f1897beebbb96a4ee0c7f024330ec271f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c74015ba98f34466df088220995886f1897beebbb96a4ee0c7f024330ec271f->enter($__internal_9c74015ba98f34466df088220995886f1897beebbb96a4ee0c7f024330ec271f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modification de Categorie
";
        
        $__internal_9c74015ba98f34466df088220995886f1897beebbb96a4ee0c7f024330ec271f->leave($__internal_9c74015ba98f34466df088220995886f1897beebbb96a4ee0c7f024330ec271f_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_d5e2ccad94bcdf7274ce5acc480b14430549ef7a9c60f97b7c285213300e0cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e2ccad94bcdf7274ce5acc480b14430549ef7a9c60f97b7c285213300e0cf3->enter($__internal_d5e2ccad94bcdf7274ce5acc480b14430549ef7a9c60f97b7c285213300e0cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Modification de catégorie</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Formulaire</div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <form method=\"post\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_modifiercategorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                        <label>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "nom", array()), 'label', array("label" => "Nom"));
        echo "</label>
                                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), 'rest');
        echo "
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->


            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
";
        
        $__internal_d5e2ccad94bcdf7274ce5acc480b14430549ef7a9c60f97b7c285213300e0cf3->leave($__internal_d5e2ccad94bcdf7274ce5acc480b14430549ef7a9c60f97b7c285213300e0cf3_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Categorie:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  80 => 25,  76 => 24,  71 => 22,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AdminAdminBundle::layout.html.twig\" %}

{% block title %}
    Modification de Categorie
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Modification de catégorie</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Formulaire</div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <form method=\"post\" action=\"{{ path('admin_admin_modifiercategorie',{'id': categorie.id}) }}\">
                                    <div class=\"form-group\">
                                        <label>{{ form_label(formajout.nom,'Nom') }}</label>
                                        {{ form_widget(formajout.nom, {'attr':{'class':'form-control'}}) }}
                                    </div>
                                    {{ form_rest(formajout) }}
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->


            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
{% endblock %}", "AdminAdminBundle:Categorie:modifier.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Categorie/modifier.html.twig");
    }
}
