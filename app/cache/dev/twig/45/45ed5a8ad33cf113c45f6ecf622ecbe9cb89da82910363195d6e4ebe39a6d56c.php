<?php

/* @AdminAdmin/Categorie/ajouter.html.twig */
class __TwigTemplate_babc5d135d27b712e4737c4f7b01c8ba22d09a24fc999c9164a519f7a9efb073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "@AdminAdmin/Categorie/ajouter.html.twig", 1);
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
        $__internal_6f6c0d76e3fa65a05f11514620a79c6f880eebe7dd0f9ff046964191a36ae9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6c0d76e3fa65a05f11514620a79c6f880eebe7dd0f9ff046964191a36ae9bc->enter($__internal_6f6c0d76e3fa65a05f11514620a79c6f880eebe7dd0f9ff046964191a36ae9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/Categorie/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6c0d76e3fa65a05f11514620a79c6f880eebe7dd0f9ff046964191a36ae9bc->leave($__internal_6f6c0d76e3fa65a05f11514620a79c6f880eebe7dd0f9ff046964191a36ae9bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6747b4ff0d1ad9bd21672f1878fb62ab2ff9578a6263124a651e3b3a026281b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6747b4ff0d1ad9bd21672f1878fb62ab2ff9578a6263124a651e3b3a026281b7->enter($__internal_6747b4ff0d1ad9bd21672f1878fb62ab2ff9578a6263124a651e3b3a026281b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajout de Categorie
";
        
        $__internal_6747b4ff0d1ad9bd21672f1878fb62ab2ff9578a6263124a651e3b3a026281b7->leave($__internal_6747b4ff0d1ad9bd21672f1878fb62ab2ff9578a6263124a651e3b3a026281b7_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_1cdc9f17b9fed1354047d8b0a7dc1ce419fc80db9cd37b46ec698fd02e4f2605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdc9f17b9fed1354047d8b0a7dc1ce419fc80db9cd37b46ec698fd02e4f2605->enter($__internal_1cdc9f17b9fed1354047d8b0a7dc1ce419fc80db9cd37b46ec698fd02e4f2605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Ajout de catégorie</h1>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_ajoutcategorie");
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
        
        $__internal_1cdc9f17b9fed1354047d8b0a7dc1ce419fc80db9cd37b46ec698fd02e4f2605->leave($__internal_1cdc9f17b9fed1354047d8b0a7dc1ce419fc80db9cd37b46ec698fd02e4f2605_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/Categorie/ajouter.html.twig";
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
    Ajout de Categorie
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Ajout de catégorie</h1>
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
                                <form method=\"post\" action=\"{{ path('admin_admin_ajoutcategorie') }}\">
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
{% endblock %}", "@AdminAdmin/Categorie/ajouter.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\Categorie\\ajouter.html.twig");
    }
}