<?php

/* @AdminAdmin/Article/index.html.twig */
class __TwigTemplate_a9f22062dba0ef55e41071ac7c0ab480be5b7d31b84368bbc5e8ba38cd8f26ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminAdminBundle::layout.html.twig", "@AdminAdmin/Article/index.html.twig", 1);
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
        $__internal_2b396f4e1e2632cbe7d94ee2e69de73ef9bb167735feca2a06b537f55f810769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b396f4e1e2632cbe7d94ee2e69de73ef9bb167735feca2a06b537f55f810769->enter($__internal_2b396f4e1e2632cbe7d94ee2e69de73ef9bb167735feca2a06b537f55f810769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdminAdmin/Article/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b396f4e1e2632cbe7d94ee2e69de73ef9bb167735feca2a06b537f55f810769->leave($__internal_2b396f4e1e2632cbe7d94ee2e69de73ef9bb167735feca2a06b537f55f810769_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf1a6d1de32435326ae10eebc244db002ed25e694d81cf3ea90fa860ef924a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1a6d1de32435326ae10eebc244db002ed25e694d81cf3ea90fa860ef924a38->enter($__internal_bf1a6d1de32435326ae10eebc244db002ed25e694d81cf3ea90fa860ef924a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des Article
";
        
        $__internal_bf1a6d1de32435326ae10eebc244db002ed25e694d81cf3ea90fa860ef924a38->leave($__internal_bf1a6d1de32435326ae10eebc244db002ed25e694d81cf3ea90fa860ef924a38_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_7a0339bc7655e8dd33a745fa6a1bb36dda7309a032158b0ec010c0fd6f0b0876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0339bc7655e8dd33a745fa6a1bb36dda7309a032158b0ec010c0fd6f0b0876->enter($__internal_7a0339bc7655e8dd33a745fa6a1bb36dda7309a032158b0ec010c0fd6f0b0876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

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
        echo "\">Ajouter</a>
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
            echo "\">Editer</a>
                                                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_admin_supprimerarticle", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sure de vouloir supprimer l\\'article ?')\">Supprimer</a>
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
        
        $__internal_7a0339bc7655e8dd33a745fa6a1bb36dda7309a032158b0ec010c0fd6f0b0876->leave($__internal_7a0339bc7655e8dd33a745fa6a1bb36dda7309a032158b0ec010c0fd6f0b0876_prof);

    }

    public function getTemplateName()
    {
        return "@AdminAdmin/Article/index.html.twig";
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
                                <a href=\"{{ path('admin_admin_ajoutarticle') }}\">Ajouter</a>
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
                                                    <a href=\"{{ path('admin_admin_modifierarticle',{'id': article.id}) }}\">Editer</a>
                                                    <a href=\"{{ path('admin_admin_supprimerarticle', {'id': article.id}) }}\" onclick=\"return confirm('Etes vous sure de vouloir supprimer l\\'article ?')\">Supprimer</a>
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
{% endblock %}", "@AdminAdmin/Article/index.html.twig", "C:\\wamp\\www\\theblog\\src\\Admin\\AdminBundle\\Resources\\views\\Article\\index.html.twig");
    }
}
