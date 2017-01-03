<?php

/* AdminAdminBundle:Article:ajouter.html.twig */
class __TwigTemplate_8282c83660e99572be7436921a1c2be62f929c321339a493ab9a39f2b1f1ee81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "AdminAdminBundle:Article:ajouter.html.twig", 1);
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
        $__internal_132d66e403d33ebb9202fdc62ec8131fc745015668c91d72cf3d656d6b658f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132d66e403d33ebb9202fdc62ec8131fc745015668c91d72cf3d656d6b658f86->enter($__internal_132d66e403d33ebb9202fdc62ec8131fc745015668c91d72cf3d656d6b658f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Article:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132d66e403d33ebb9202fdc62ec8131fc745015668c91d72cf3d656d6b658f86->leave($__internal_132d66e403d33ebb9202fdc62ec8131fc745015668c91d72cf3d656d6b658f86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba3ae3eaa2132f777aa2118a9ff788a8d3b7d4b36483fe3ddfff502f713034e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3ae3eaa2132f777aa2118a9ff788a8d3b7d4b36483fe3ddfff502f713034e6->enter($__internal_ba3ae3eaa2132f777aa2118a9ff788a8d3b7d4b36483fe3ddfff502f713034e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajout d'Article
";
        
        $__internal_ba3ae3eaa2132f777aa2118a9ff788a8d3b7d4b36483fe3ddfff502f713034e6->leave($__internal_ba3ae3eaa2132f777aa2118a9ff788a8d3b7d4b36483fe3ddfff502f713034e6_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_6bf2ee28e0efa93a76f4a4b232dd1d296e996bff8daab522d47e2bca17b3b71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf2ee28e0efa93a76f4a4b232dd1d296e996bff8daab522d47e2bca17b3b71a->enter($__internal_6bf2ee28e0efa93a76f4a4b232dd1d296e996bff8daab522d47e2bca17b3b71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Ajout d'Article</h1>
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
                                ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "info"), "method")) {
            // line 23
            echo "                                    <div class=\"alert alert-success\">
                                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 25
                echo "                                            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                                    </div>
                                ";
        }
        // line 29
        echo "                                <form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_ajoutarticle");
        echo "\">
                                    <div class=\"form-group\">
                                        <label>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "titre", array()), 'label', array("label" => "Titre"));
        echo "</label>
                                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div><div class=\"form-group\">
                                        <label>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "auteur", array()), 'label', array("label" => "Auteur"));
        echo "</label>
                                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "auteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "contenu", array()), 'label', array("label" => "Contenu"));
        echo "</label>
                                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "contenu", array()), 'widget', array("attr" => array("class" => "tinymce")));
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "publication", array()), 'label', array("label" => "Publication"));
        echo "</label>
                                        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "publication", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "image", array()), "url", array()), 'label', array("label" => "Url Image"));
        echo "</label>
                                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "image", array()), "url", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <label>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "categories", array()), 'label', array("label" => "Catégorie"));
        echo "</label>
                                        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formajout"]) ? $context["formajout"] : $this->getContext($context, "formajout")), "categories", array()), 'widget', array("attr" => array("class" => "form-control myselect")));
        echo "
                                    </div>
                                    ";
        // line 53
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
        
        $__internal_6bf2ee28e0efa93a76f4a4b232dd1d296e996bff8daab522d47e2bca17b3b71a->leave($__internal_6bf2ee28e0efa93a76f4a4b232dd1d296e996bff8daab522d47e2bca17b3b71a_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Article:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  152 => 51,  148 => 50,  142 => 47,  138 => 46,  132 => 43,  128 => 42,  122 => 39,  118 => 38,  112 => 35,  108 => 34,  103 => 32,  99 => 31,  93 => 29,  89 => 27,  80 => 25,  76 => 24,  73 => 23,  71 => 22,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Ajout d'Article
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Ajout d'Article</h1>
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
                                {% if app.session.flashBag.has('info') %}
                                    <div class=\"alert alert-success\">
                                        {% for msg in app.session.flashBag.get('info') %}
                                            {{ msg }}
                                        {% endfor %}
                                    </div>
                                {% endif %}
                                <form method=\"post\" action=\"{{ path('admin_admin_ajoutarticle') }}\">
                                    <div class=\"form-group\">
                                        <label>{{ form_label(formajout.titre,'Titre') }}</label>
                                        {{ form_widget(formajout.titre, {'attr':{'class':'form-control'}}) }}
                                    </div><div class=\"form-group\">
                                        <label>{{ form_label(formajout.auteur,'Auteur') }}</label>
                                        {{ form_widget(formajout.auteur, {'attr':{'class':'form-control'}}) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label>{{ form_label(formajout.contenu,'Contenu') }}</label>
                                        {{ form_widget(formajout.contenu, {'attr':{'class':'tinymce'}}) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label>{{ form_label(formajout.publication,'Publication') }}</label>
                                        {{ form_widget(formajout.publication, {'attr':{'class':'form-control'}}) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label>{{ form_label(formajout.image.url,'Url Image') }}</label>
                                        {{ form_widget(formajout.image.url, {'attr':{'class':'form-control'}}) }}
                                    </div>
                                    <div class=\"form-group\">
                                        <label>{{ form_label(formajout.categories,'Catégorie') }}</label>
                                        {{ form_widget(formajout.categories, {'attr':{'class':'form-control myselect'}}) }}
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
{% endblock %}", "AdminAdminBundle:Article:ajouter.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Article/ajouter.html.twig");
    }
}
