<?php

/* AdminAdminBundle:Page:index.html.twig */
class __TwigTemplate_87c326058e3e5ced1a9dd7d3bdc58a11f8eb994a445cd828a35bb88e280d1b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "AdminAdminBundle:Page:index.html.twig", 1);
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
        $__internal_e901d02827fa147687fc2777f1d8170482e2a2f06effb31abe5375dbc1c88360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e901d02827fa147687fc2777f1d8170482e2a2f06effb31abe5375dbc1c88360->enter($__internal_e901d02827fa147687fc2777f1d8170482e2a2f06effb31abe5375dbc1c88360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e901d02827fa147687fc2777f1d8170482e2a2f06effb31abe5375dbc1c88360->leave($__internal_e901d02827fa147687fc2777f1d8170482e2a2f06effb31abe5375dbc1c88360_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1b57c3aea37a994748da028efc17162ab3a5b13dd546ba1512d604d73bd83bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b57c3aea37a994748da028efc17162ab3a5b13dd546ba1512d604d73bd83bc->enter($__internal_a1b57c3aea37a994748da028efc17162ab3a5b13dd546ba1512d604d73bd83bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Pages
";
        
        $__internal_a1b57c3aea37a994748da028efc17162ab3a5b13dd546ba1512d604d73bd83bc->leave($__internal_a1b57c3aea37a994748da028efc17162ab3a5b13dd546ba1512d604d73bd83bc_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_699cebdce399d2dce54bed9c2c2790d7cf61bb1524168912131ca747e94c9600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699cebdce399d2dce54bed9c2c2790d7cf61bb1524168912131ca747e94c9600->enter($__internal_699cebdce399d2dce54bed9c2c2790d7cf61bb1524168912131ca747e94c9600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "
    <div id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" class=\"modal fade\">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des pages</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <button class=\"btn btn-primary glyphicon glyphicon-plus link_ajouter\"> Ajouter</button>
                                <table data-toggle=\"table\" data-show-refresh=\"false\" data-show-toggle=\"false\" data-show-columns=\"false\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\">ID</th>
                                        <th data-field=\"title\"  data-sortable=\"true\">Titre</th>
                                        <th data-field=\"auteur\" data-sortable=\"true\">Auteur</th>
                                        <th data-field=\"actions\" data-sortable=\"true\">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 36
            echo "                                            <tr>
                                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "suffix", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_modifierarticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\"><span class=\"btn btn-primary glyphicon glyphicon-pencil\"> Editer</span></a>
                                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_supprimerarticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sure de vouloir supprimer l\\'article ?')\"><span class=\"btn btn-primary glyphicon glyphicon-minus\"> Supprimer</span></a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->


            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
";
        
        $__internal_699cebdce399d2dce54bed9c2c2790d7cf61bb1524168912131ca747e94c9600->leave($__internal_699cebdce399d2dce54bed9c2c2790d7cf61bb1524168912131ca747e94c9600_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  108 => 42,  104 => 41,  99 => 39,  95 => 38,  91 => 37,  88 => 36,  84 => 35,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Liste des Pages
{% endblock %}

{% block theblog_body %}

    <div id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" class=\"modal fade\">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des pages</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <button class=\"btn btn-primary glyphicon glyphicon-plus link_ajouter\"> Ajouter</button>
                                <table data-toggle=\"table\" data-show-refresh=\"false\" data-show-toggle=\"false\" data-show-columns=\"false\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\">ID</th>
                                        <th data-field=\"title\"  data-sortable=\"true\">Titre</th>
                                        <th data-field=\"auteur\" data-sortable=\"true\">Auteur</th>
                                        <th data-field=\"actions\" data-sortable=\"true\">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        {% for page in pages %}
                                            <tr>
                                                <td>{{ page.id }}</td>
                                                <td>{{ page.titre }}</td>
                                                <td>{{ page.suffix }}</td>
                                                <td>
                                                    <a href=\"{{ path('admin_admin_modifierarticle',{'id': article.id}) }}\"><span class=\"btn btn-primary glyphicon glyphicon-pencil\"> Editer</span></a>
                                                    <a href=\"{{ path('admin_admin_supprimerarticle', {'id': article.id}) }}\" onclick=\"return confirm('Etes vous sure de vouloir supprimer l\\'article ?')\"><span class=\"btn btn-primary glyphicon glyphicon-minus\"> Supprimer</span></a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->


            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
{% endblock %}", "AdminAdminBundle:Page:index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Page/index.html.twig");
    }
}
