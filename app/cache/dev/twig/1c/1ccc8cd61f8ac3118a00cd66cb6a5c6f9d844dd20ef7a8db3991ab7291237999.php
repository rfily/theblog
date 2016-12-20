<?php

/* @AdminAdmin/Categorie/modifier.html.twig */
class __TwigTemplate_9eaa617f23ea6a4ff1d12b033d26245472af6dadee689c56cdef2efec1925292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "@AdminAdmin/Categorie/modifier.html.twig", 1);
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
        $__internal_5330d15bd9d7d6e24ee819d768bf6d781954eda106c37e029d156aacf698000b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5330d15bd9d7d6e24ee819d768bf6d781954eda106c37e029d156aacf698000b->enter($__internal_5330d15bd9d7d6e24ee819d768bf6d781954eda106c37e029d156aacf698000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/Categorie/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5330d15bd9d7d6e24ee819d768bf6d781954eda106c37e029d156aacf698000b->leave($__internal_5330d15bd9d7d6e24ee819d768bf6d781954eda106c37e029d156aacf698000b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d9292dc18ac4bb7da1794e99fa2c66a3bcbc9b625c656230963a5b4404275e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d9292dc18ac4bb7da1794e99fa2c66a3bcbc9b625c656230963a5b4404275e->enter($__internal_e9d9292dc18ac4bb7da1794e99fa2c66a3bcbc9b625c656230963a5b4404275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modification de Categorie
";
        
        $__internal_e9d9292dc18ac4bb7da1794e99fa2c66a3bcbc9b625c656230963a5b4404275e->leave($__internal_e9d9292dc18ac4bb7da1794e99fa2c66a3bcbc9b625c656230963a5b4404275e_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_c4a65f432afa6cd063467e52a39029d59ebd4d1b1e6a1563aad0ae4fdedf75fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a65f432afa6cd063467e52a39029d59ebd4d1b1e6a1563aad0ae4fdedf75fc->enter($__internal_c4a65f432afa6cd063467e52a39029d59ebd4d1b1e6a1563aad0ae4fdedf75fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        
        $__internal_c4a65f432afa6cd063467e52a39029d59ebd4d1b1e6a1563aad0ae4fdedf75fc->leave($__internal_c4a65f432afa6cd063467e52a39029d59ebd4d1b1e6a1563aad0ae4fdedf75fc_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/Categorie/modifier.html.twig";
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
{% endblock %}", "@AdminAdmin/Categorie/modifier.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\Categorie\\modifier.html.twig");
    }
}
