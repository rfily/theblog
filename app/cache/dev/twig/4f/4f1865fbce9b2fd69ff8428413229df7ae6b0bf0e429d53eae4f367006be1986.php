<?php

/* @AdminAdmin/Categorie/index.html.twig */
class __TwigTemplate_791d7cf1fc5c43e2333e8c0a081fec6220b9207b5a38abeb3c3c3e19d7b1368c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "@AdminAdmin/Categorie/index.html.twig", 1);
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
        $__internal_8b62228ad8265c4091a3dafbeda2ed383b45a4966bcfe92d7b618bcdeda6ec83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b62228ad8265c4091a3dafbeda2ed383b45a4966bcfe92d7b618bcdeda6ec83->enter($__internal_8b62228ad8265c4091a3dafbeda2ed383b45a4966bcfe92d7b618bcdeda6ec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/Categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b62228ad8265c4091a3dafbeda2ed383b45a4966bcfe92d7b618bcdeda6ec83->leave($__internal_8b62228ad8265c4091a3dafbeda2ed383b45a4966bcfe92d7b618bcdeda6ec83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d147e4edc3b0be079d9b501b6c39e2d67c174914593b2a27f589e3069905927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d147e4edc3b0be079d9b501b6c39e2d67c174914593b2a27f589e3069905927->enter($__internal_8d147e4edc3b0be079d9b501b6c39e2d67c174914593b2a27f589e3069905927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Categories
";
        
        $__internal_8d147e4edc3b0be079d9b501b6c39e2d67c174914593b2a27f589e3069905927->leave($__internal_8d147e4edc3b0be079d9b501b6c39e2d67c174914593b2a27f589e3069905927_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_78ad26b3dc412c9ff3ac3d0a7064f82adb48c9916d2dcfcd5bed056bed689d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ad26b3dc412c9ff3ac3d0a7064f82adb48c9916d2dcfcd5bed056bed689d87->enter($__internal_78ad26b3dc412c9ff3ac3d0a7064f82adb48c9916d2dcfcd5bed056bed689d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des catégories</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "info"), "method")) {
            // line 22
            echo "                                    <div class=\"alert alert-success\">
                                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 24
                echo "                                            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                                    </div>
                                ";
        }
        // line 28
        echo "                                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_ajoutcategorie");
        echo "\">Ajouter</a>
                                <table data-toggle=\"table\" data-show-refresh=\"false\" data-show-toggle=\"false\" data-show-columns=\"false\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\">ID</th>
                                        <th data-field=\"title\"  data-sortable=\"true\">Nom</th>
                                        <th data-field=\"actions\" data-sortable=\"true\">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 39
            echo "                                            <tr>
                                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_modifiercategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                                                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_supprimercategorie", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sure de vouloir supprimer la catégorie ?')\">Supprimer</a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        
        $__internal_78ad26b3dc412c9ff3ac3d0a7064f82adb48c9916d2dcfcd5bed056bed689d87->leave($__internal_78ad26b3dc412c9ff3ac3d0a7064f82adb48c9916d2dcfcd5bed056bed689d87_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/Categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  126 => 44,  122 => 43,  117 => 41,  113 => 40,  110 => 39,  106 => 38,  92 => 28,  88 => 26,  79 => 24,  75 => 23,  72 => 22,  70 => 21,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Liste des Categories
{% endblock %}

{% block theblog_body %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des catégories</h1>
        </div>
    </div><!--/.row-->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
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
                                <a href=\"{{ path('admin_admin_ajoutcategorie') }}\">Ajouter</a>
                                <table data-toggle=\"table\" data-show-refresh=\"false\" data-show-toggle=\"false\" data-show-columns=\"false\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\">ID</th>
                                        <th data-field=\"title\"  data-sortable=\"true\">Nom</th>
                                        <th data-field=\"actions\" data-sortable=\"true\">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        {% for categorie in categories %}
                                            <tr>
                                                <td>{{ categorie.id }}</td>
                                                <td>{{ categorie.nom }}</td>
                                                <td>
                                                    <a href=\"{{ path('admin_admin_modifiercategorie', {'id': categorie.id}) }}\">Editer</a>
                                                    <a href=\"{{ path('admin_admin_supprimercategorie', {'id': categorie.id}) }}\" onclick=\"return confirm('Etes vous sure de vouloir supprimer la catégorie ?')\">Supprimer</a>
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
{% endblock %}", "@AdminAdmin/Categorie/index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\Categorie\\index.html.twig");
    }
}
