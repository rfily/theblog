<?php

/* AdminAdminBundle:Article:index.html.twig */
class __TwigTemplate_bdcb568d033eecd63c3478fb726b80383ee8249187a793c5a09d909c46f80907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "AdminAdminBundle:Article:index.html.twig", 1);
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
        $__internal_7cbe8cb4a834887e790915d87d04578740e7e36115baf6c5cfd39db3bf769044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbe8cb4a834887e790915d87d04578740e7e36115baf6c5cfd39db3bf769044->enter($__internal_7cbe8cb4a834887e790915d87d04578740e7e36115baf6c5cfd39db3bf769044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminAdminBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cbe8cb4a834887e790915d87d04578740e7e36115baf6c5cfd39db3bf769044->leave($__internal_7cbe8cb4a834887e790915d87d04578740e7e36115baf6c5cfd39db3bf769044_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f96b95f89352d829e480836da5fcd80202ab2cb1205c20857742191e57a95171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96b95f89352d829e480836da5fcd80202ab2cb1205c20857742191e57a95171->enter($__internal_f96b95f89352d829e480836da5fcd80202ab2cb1205c20857742191e57a95171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Article
";
        
        $__internal_f96b95f89352d829e480836da5fcd80202ab2cb1205c20857742191e57a95171->leave($__internal_f96b95f89352d829e480836da5fcd80202ab2cb1205c20857742191e57a95171_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_30fb76e35c824a748a6e61ee856b5a0ea356c77392bc3b0d451fd8a862f3acd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fb76e35c824a748a6e61ee856b5a0ea356c77392bc3b0d451fd8a862f3acd6->enter($__internal_30fb76e35c824a748a6e61ee856b5a0ea356c77392bc3b0d451fd8a862f3acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des articles</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_ajoutarticle");
        echo "\"><span class=\"btn btn-primary glyphicon glyphicon-plus\"> Ajouter</span></a>
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "                                            <tr>
                                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_modifierarticle", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><span class=\"btn btn-primary glyphicon glyphicon-pencil\"> Editer</span></a>
                                                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_supprimerarticle", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sure de vouloir supprimer l\\'article ?')\"><span class=\"btn btn-primary glyphicon glyphicon-minus\"> Supprimer</span></a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        
        $__internal_30fb76e35c824a748a6e61ee856b5a0ea356c77392bc3b0d451fd8a862f3acd6->leave($__internal_30fb76e35c824a748a6e61ee856b5a0ea356c77392bc3b0d451fd8a862f3acd6_prof);

    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  108 => 39,  104 => 38,  99 => 36,  95 => 35,  91 => 34,  88 => 33,  84 => 32,  70 => 21,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Liste des Article
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des articles</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                <a href=\"{{ path('admin_admin_ajoutarticle') }}\"><span class=\"btn btn-primary glyphicon glyphicon-plus\"> Ajouter</span></a>
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
                                        {% for article in articles %}
                                            <tr>
                                                <td>{{ article.id }}</td>
                                                <td>{{ article.titre }}</td>
                                                <td>{{ article.auteur }}</td>
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
{% endblock %}", "AdminAdminBundle:Article:index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle/Resources/views/Article/index.html.twig");
    }
}
