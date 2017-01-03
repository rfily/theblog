<?php

/* TheBlogBlogBundle:Blog:details.html.twig */
class __TwigTemplate_f4c13bc7e5553094a6b778654f3a8f8a1323ddf5f945c092c7f9eb42dca98ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "TheBlogBlogBundle:Blog:details.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'theblog_body' => array($this, 'block_theblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TheBlogBlogBundle:Blog:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dda323cbeeea44b14dc7128422a16eda9970d9ec876a7652b45b6baddd8c6a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda323cbeeea44b14dc7128422a16eda9970d9ec876a7652b45b6baddd8c6a3b->enter($__internal_dda323cbeeea44b14dc7128422a16eda9970d9ec876a7652b45b6baddd8c6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda323cbeeea44b14dc7128422a16eda9970d9ec876a7652b45b6baddd8c6a3b->leave($__internal_dda323cbeeea44b14dc7128422a16eda9970d9ec876a7652b45b6baddd8c6a3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00f59f6f4b1f74914219c7ad190cc3e86e7eacd6886209a3e64d6fd744222bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f59f6f4b1f74914219c7ad190cc3e86e7eacd6886209a3e64d6fd744222bb7->enter($__internal_00f59f6f4b1f74914219c7ad190cc3e86e7eacd6886209a3e64d6fd744222bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Article
";
        
        $__internal_00f59f6f4b1f74914219c7ad190cc3e86e7eacd6886209a3e64d6fd744222bb7->leave($__internal_00f59f6f4b1f74914219c7ad190cc3e86e7eacd6886209a3e64d6fd744222bb7_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_c2a8eb79cf6260a291b053c994ab21c797eb3d6fa6397f984309f3113dd6b094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a8eb79cf6260a291b053c994ab21c797eb3d6fa6397f984309f3113dd6b094->enter($__internal_c2a8eb79cf6260a291b053c994ab21c797eb3d6fa6397f984309f3113dd6b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"details\">
        <div class=\"container\">
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image", array(), "any", false, true), "url", array(), "any", true, true)) {
            // line 11
            echo "            <div class=\"det_pic\">
                <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/theblog/" . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "url", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
            </div>
            ";
        }
        // line 15
        echo "            <div class=\"det_text\">
                <p>";
        // line 16
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "</p>
            </div>
            <ul class=\"links\">
                <li><i class=\"date\"> </i><span class=\"icon_text\">July 14, 2014</span></li>
                <li><a href=\"#\"><i class=\"admin\"> </i><span class=\"icon_text\">Admin</span></a></li>
                <li class=\"last\"><a href=\"#\"><i class=\"permalink\"> </i><span class=\"icon_text\">Permalink</span></a></li>
            </ul>
            <ul class=\"links_middle\">
                <li><a href=\"#\"><i class=\"title-icon\"> </i><span class=\"icon_text\">Lorem Ipsum Dolore</span></a></li>
                <li><i class=\"tags\"> </i><span class=\"icon_text\">No tags</span></li>
            </ul>
            <ul class=\"links_bottom\">
                <li><a href=\"#\"><i class=\"comments\"> </i><span class=\"icon_text\">5 Comments</span></a></li>
                <li><i class=\"views\"> </i><span class=\"icon_text\">49</span></li>
                <li><i class=\"likes\"> </i><span class=\"icon_text\">12</span></li>
            </ul>
            ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "commentaires", array())) > 0)) {
            // line 33
            echo "            <div class=\"comments1\">
                <h4>COMMENTS</h4>
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "commentaires", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 36
                echo "                <div class=\"comments-main\">
                    <div class=\"col-md-2 cmts-main-left\">
                        <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/theblog/images/avatar.png"), "html", null, true);
                echo "\" alt=\"\">
                    </div>
                    <div class=\"col-md-10 cmts-main-right\">
                        <h5>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "auteur", array()), "html", null, true);
                echo "</h5>
                        <p>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
                echo "</p>
                        <div class=\"cmts\">
                            <div class=\"cmnts-left\">
                                <p>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array()), "d-m-Y h:i"), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </div>
            ";
        }
        // line 55
        echo "            <div class=\"lev\">
                <div class=\"leave\">
                    <h4>Leave a comment</h4>
                </div>
                ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 60
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 62
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </div>
                ";
        } else {
            // line 66
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), 'errors');
            echo "
                ";
        }
        // line 68
        echo "                <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_details", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), 'enctype');
        echo "  id=\"commentform\">
                    <div>
                        ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "auteur", array()), 'label', array("label" => "Name"));
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "auteur", array()), 'errors');
        echo "
                        ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "auteur", array()), 'widget');
        echo "
                    </div>
                    <div>
                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "emailauteur", array()), 'label', array("label" => "Email"));
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "emailauteur", array()), 'errors');
        echo "
                        ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "emailauteur", array()), 'widget');
        echo "
                    </div>
                    <div>
                        ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "siteauteur", array()), 'label', array("label" => "SiteWeb"));
        echo "
                        ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "siteauteur", array()), 'errors');
        echo "
                        ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "siteauteur", array()), 'widget');
        echo "
                    </div>
                    <div>
                        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "contenu", array()), 'label', array("label" => "Comment"));
        echo "
                        ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "contenu", array()), 'errors');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), "contenu", array()), 'widget');
        echo "
                    </div>
                    ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formcommentaire"]) ? $context["formcommentaire"] : $this->getContext($context, "formcommentaire")), 'rest');
        echo "
                    <input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Send\">
                    <div class=\"clearfix\"></div>
                </form>
            </div>

        </div>
    </div>

";
        
        $__internal_c2a8eb79cf6260a291b053c994ab21c797eb3d6fa6397f984309f3113dd6b094->leave($__internal_c2a8eb79cf6260a291b053c994ab21c797eb3d6fa6397f984309f3113dd6b094_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 89,  232 => 87,  228 => 86,  224 => 85,  218 => 82,  214 => 81,  210 => 80,  204 => 77,  200 => 76,  196 => 75,  190 => 72,  186 => 71,  182 => 70,  174 => 68,  168 => 66,  164 => 64,  155 => 62,  151 => 61,  148 => 60,  146 => 59,  140 => 55,  136 => 53,  122 => 45,  116 => 42,  112 => 41,  106 => 38,  102 => 36,  98 => 35,  94 => 33,  92 => 32,  73 => 16,  70 => 15,  64 => 12,  61 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TheBlogBlogBundle:Blog:layout.html.twig\" %}

{% block title %}
    Article
{% endblock %}

{% block theblog_body %}
    <div class=\"details\">
        <div class=\"container\">
            {% if article.image.url is defined %}
            <div class=\"det_pic\">
                <img src=\"{{ asset('bundles/theblog/' ~ article.image.url) }}\" class=\"img-responsive\" alt=\"\">
            </div>
            {% endif %}
            <div class=\"det_text\">
                <p>{{ article.contenu | raw }}</p>
            </div>
            <ul class=\"links\">
                <li><i class=\"date\"> </i><span class=\"icon_text\">July 14, 2014</span></li>
                <li><a href=\"#\"><i class=\"admin\"> </i><span class=\"icon_text\">Admin</span></a></li>
                <li class=\"last\"><a href=\"#\"><i class=\"permalink\"> </i><span class=\"icon_text\">Permalink</span></a></li>
            </ul>
            <ul class=\"links_middle\">
                <li><a href=\"#\"><i class=\"title-icon\"> </i><span class=\"icon_text\">Lorem Ipsum Dolore</span></a></li>
                <li><i class=\"tags\"> </i><span class=\"icon_text\">No tags</span></li>
            </ul>
            <ul class=\"links_bottom\">
                <li><a href=\"#\"><i class=\"comments\"> </i><span class=\"icon_text\">5 Comments</span></a></li>
                <li><i class=\"views\"> </i><span class=\"icon_text\">49</span></li>
                <li><i class=\"likes\"> </i><span class=\"icon_text\">12</span></li>
            </ul>
            {% if article.commentaires | length > 0 %}
            <div class=\"comments1\">
                <h4>COMMENTS</h4>
                {% for commentaire in article.commentaires %}
                <div class=\"comments-main\">
                    <div class=\"col-md-2 cmts-main-left\">
                        <img src=\"{{ asset('bundles/theblog/images/avatar.png') }}\" alt=\"\">
                    </div>
                    <div class=\"col-md-10 cmts-main-right\">
                        <h5>{{ commentaire.auteur }}</h5>
                        <p>{{ commentaire.contenu }}</p>
                        <div class=\"cmts\">
                            <div class=\"cmnts-left\">
                                <p>{{ commentaire.date | date('d-m-Y h:i') }}</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                {% endfor %}
            </div>
            {% endif %}
            <div class=\"lev\">
                <div class=\"leave\">
                    <h4>Leave a comment</h4>
                </div>
                {% if app.session.flashBag.has('success') %}
                <div class=\"alert alert-success\">
                    {% for msg in app.session.flashBag.get('success') %}
                        {{ msg }}
                    {% endfor %}
                </div>
                {% else %}
                    {{ form_errors(formcommentaire) }}
                {% endif %}
                <form method=\"post\" action=\"{{ path('theblog_details', {'id': article.id}) }}\" {{ form_enctype(formcommentaire) }}  id=\"commentform\">
                    <div>
                        {{ form_label(formcommentaire.auteur, 'Name') }}
                        {{ form_errors(formcommentaire.auteur) }}
                        {{ form_widget(formcommentaire.auteur) }}
                    </div>
                    <div>
                        {{ form_label(formcommentaire.emailauteur, 'Email') }}
                        {{ form_errors(formcommentaire.emailauteur) }}
                        {{ form_widget(formcommentaire.emailauteur) }}
                    </div>
                    <div>
                        {{ form_label(formcommentaire.siteauteur, 'SiteWeb') }}
                        {{ form_errors(formcommentaire.siteauteur) }}
                        {{ form_widget(formcommentaire.siteauteur) }}
                    </div>
                    <div>
                        {{ form_label(formcommentaire.contenu, 'Comment') }}
                        {{ form_errors(formcommentaire.contenu) }}
                        {{ form_widget(formcommentaire.contenu) }}
                    </div>
                    {{ form_rest(formcommentaire) }}
                    <input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Send\">
                    <div class=\"clearfix\"></div>
                </form>
            </div>

        </div>
    </div>

{% endblock %}
", "TheBlogBlogBundle:Blog:details.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/details.html.twig");
    }
}
