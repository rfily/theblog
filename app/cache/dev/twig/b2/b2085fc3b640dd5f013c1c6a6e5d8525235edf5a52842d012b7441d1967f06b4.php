<?php

/* TheBlogBlogBundle:Blog:index.html.twig */
class __TwigTemplate_36ee7cdeec84ec3c6ea07d3f3fd6eb9ecdb582ddf4f2cb855ad8215c4541945a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TheBlogBlogBundle:Blog:layout.html.twig", "TheBlogBlogBundle:Blog:index.html.twig", 1);
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
        $__internal_1c798c9b7256b6ee9366965c0169261c45b9056f27f199b53337002cc4025c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c798c9b7256b6ee9366965c0169261c45b9056f27f199b53337002cc4025c50->enter($__internal_1c798c9b7256b6ee9366965c0169261c45b9056f27f199b53337002cc4025c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TheBlogBlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c798c9b7256b6ee9366965c0169261c45b9056f27f199b53337002cc4025c50->leave($__internal_1c798c9b7256b6ee9366965c0169261c45b9056f27f199b53337002cc4025c50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1acda1d5c9a8fc40240667459b2f49d32bdb791f09ea49d5cc8babb4f6635d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acda1d5c9a8fc40240667459b2f49d32bdb791f09ea49d5cc8babb4f6635d1d->enter($__internal_1acda1d5c9a8fc40240667459b2f49d32bdb791f09ea49d5cc8babb4f6635d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil
";
        
        $__internal_1acda1d5c9a8fc40240667459b2f49d32bdb791f09ea49d5cc8babb4f6635d1d->leave($__internal_1acda1d5c9a8fc40240667459b2f49d32bdb791f09ea49d5cc8babb4f6635d1d_prof);

    }

    // line 7
    public function block_theblog_body($context, array $blocks = array())
    {
        $__internal_439eae1332d6258791326d5af56ed9ffd1620e9bb62ef54de0448b5aaac9cb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439eae1332d6258791326d5af56ed9ffd1620e9bb62ef54de0448b5aaac9cb8b->enter($__internal_439eae1332d6258791326d5af56ed9ffd1620e9bb62ef54de0448b5aaac9cb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "theblog_body"));

        // line 8
        echo "    <div class=\"content\">
        <div class=\"container\">
            <div class=\"load_more\">
                <ul id=\"myList\">
                    <!-- These are our grid blocks -->
                    <li>

                        <div class=\"l_g\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "
                                <div class=\"col-md-3 praesent\">
                                    <div class=\"l_g_r\">
                                        <div class=\"dapibus\">
                                            <h2>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h2>
                                            <p class=\"adm\">Posted by <a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</a>  |  7 days ago</p>
                                            <a href=\"details.html\">
                                                ";
            // line 24
            if ($this->getAttribute($this->getAttribute($context["article"], "image", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 25
                echo "                                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/theblogblog/" . $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()))), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"\"></a>
                                                ";
            }
            // line 27
            echo "                                            <p>";
            echo $this->getAttribute($context["article"], "contenu", array());
            echo "</p>
                                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("theblog_details", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"link\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                ";
            // line 32
            if ((((($this->getAttribute($context["loop"], "index", array()) % 3) == 0) && ($this->getAttribute($context["loop"], "index", array()) != 0)) && ($this->getAttribute($context["loop"], "index", array()) <= 3))) {
                // line 33
                echo "
                                    <div class=\"col-md-3 integ\">
                                        <div class=\"l_g_r\">
                                            <div class=\"posts\">
                                                <h4>Recent posts</h4>
                                                <h6><a href=\"#\">Aliquam tincidunt mauris</a></h6>
                                                <h6><a href=\"#\">Vestibulum auctor lipsum</a></h6>
                                                <h6><a href=\"#\">Nunc dignissim risus</a></h6>
                                                <h6><a href=\"#\">Cras ornare tristiqu</a></h6>
                                            </div>
                                            <div class=\"comments\">
                                                <h4>Recent Comments</h4>
                                                <h6><a href=\"#\">Amada Doe <span>on</span> Hello World!</a></h6>
                                                <h6><a href=\"#\">Peter Doe <span>on</span> Photography</a></h6>
                                                <h6><a href=\"#\">Steve Roberts <span>on</span> HTML5/CSS3</a></h6>
                                                <h6><a href=\"#\">Doe Peter<span>on</span> Photography</a></h6>
                                            </div>
                                            <div class=\"archievs\">
                                                <h4>Archives</h4>
                                                <h6><a href=\"#\">October 2013</a></h6>
                                                <h6><a href=\"#\">September 2013</a></h6>
                                                <h6><a href=\"#\">August 2013</a></h6>
                                                <h6><a href=\"#\">July 2013</a></h6>
                                            </div>

                                        </div>
                                    </div>
                            ";
            }
            // line 61
            echo "                            ";
            if (((((($this->getAttribute($context["loop"], "index", array()) % 3) == 0) && ($this->getAttribute($context["loop"], "index", array()) != 0)) && ($this->getAttribute($context["loop"], "index", array()) > 3)) && ($this->getAttribute($context["loop"], "index", array()) <= (3 * 2)))) {
                // line 62
                echo "
                                <div class=\"col-md-3 integ\">
                                <div class=\"l_g_r\">
                                    <div class=\"categories\">
                                        <h4>Categories</h4>
                                        <h6><a href=\"#\">Vivamus vestibulum nulla</a></h6>
                                        <h6><a href=\"#\">Integer vitae libero ac risus e</a></h6>
                                        <h6><a href=\"#\">Vestibulum commo</a></h6>
                                        <h6><a href=\"#\">Cras iaculis ultricies</a></h6>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 75
            echo "
                            ";
            // line 76
            if (((($this->getAttribute($context["loop"], "index", array()) % 3) == 0) && ($this->getAttribute($context["loop"], "index", array()) != 0))) {
                // line 77
                echo "                            <div class=\"clearfix\"></div>
                        </div>
                    </li>
                    <li>
                        <div class=\"l_g\">
                            ";
            }
            // line 83
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    <div class=\"clearfix\"></div>
                </ul>
                <div id=\"loadMore\">Load more</div>
                <div id=\"showLess\">Show less</div>

            </div>
        </div>
    </div>

";
        
        $__internal_439eae1332d6258791326d5af56ed9ffd1620e9bb62ef54de0448b5aaac9cb8b->leave($__internal_439eae1332d6258791326d5af56ed9ffd1620e9bb62ef54de0448b5aaac9cb8b_prof);

    }

    public function getTemplateName()
    {
        return "TheBlogBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 84,  180 => 83,  172 => 77,  170 => 76,  167 => 75,  152 => 62,  149 => 61,  119 => 33,  117 => 32,  110 => 28,  105 => 27,  99 => 25,  97 => 24,  92 => 22,  88 => 21,  82 => 17,  65 => 16,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Accueil
{% endblock %}

{% block theblog_body %}
    <div class=\"content\">
        <div class=\"container\">
            <div class=\"load_more\">
                <ul id=\"myList\">
                    <!-- These are our grid blocks -->
                    <li>

                        <div class=\"l_g\">
                            {% for article in articles %}

                                <div class=\"col-md-3 praesent\">
                                    <div class=\"l_g_r\">
                                        <div class=\"dapibus\">
                                            <h2>{{ article.titre }}</h2>
                                            <p class=\"adm\">Posted by <a href=\"#\">{{ article.auteur }}</a>  |  7 days ago</p>
                                            <a href=\"details.html\">
                                                {% if article.image.url is defined %}
                                                    <img src=\"{{ asset('bundles/theblogblog/' ~ article.image.url) }}\" class=\"img-responsive\" alt=\"\"></a>
                                                {% endif %}
                                            <p>{{ article.contenu | raw }}</p>
                                            <a href=\"{{ path('theblog_details',{'id': article.id}) }}\" class=\"link\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                {% if ( loop.index ) % 3 == 0 and loop.index != 0 and loop.index <= 3  %}

                                    <div class=\"col-md-3 integ\">
                                        <div class=\"l_g_r\">
                                            <div class=\"posts\">
                                                <h4>Recent posts</h4>
                                                <h6><a href=\"#\">Aliquam tincidunt mauris</a></h6>
                                                <h6><a href=\"#\">Vestibulum auctor lipsum</a></h6>
                                                <h6><a href=\"#\">Nunc dignissim risus</a></h6>
                                                <h6><a href=\"#\">Cras ornare tristiqu</a></h6>
                                            </div>
                                            <div class=\"comments\">
                                                <h4>Recent Comments</h4>
                                                <h6><a href=\"#\">Amada Doe <span>on</span> Hello World!</a></h6>
                                                <h6><a href=\"#\">Peter Doe <span>on</span> Photography</a></h6>
                                                <h6><a href=\"#\">Steve Roberts <span>on</span> HTML5/CSS3</a></h6>
                                                <h6><a href=\"#\">Doe Peter<span>on</span> Photography</a></h6>
                                            </div>
                                            <div class=\"archievs\">
                                                <h4>Archives</h4>
                                                <h6><a href=\"#\">October 2013</a></h6>
                                                <h6><a href=\"#\">September 2013</a></h6>
                                                <h6><a href=\"#\">August 2013</a></h6>
                                                <h6><a href=\"#\">July 2013</a></h6>
                                            </div>

                                        </div>
                                    </div>
                            {% endif %}
                            {% if ( loop.index ) % 3 == 0 and loop.index != 0 and loop.index > 3 and loop.index <= 3 * 2  %}

                                <div class=\"col-md-3 integ\">
                                <div class=\"l_g_r\">
                                    <div class=\"categories\">
                                        <h4>Categories</h4>
                                        <h6><a href=\"#\">Vivamus vestibulum nulla</a></h6>
                                        <h6><a href=\"#\">Integer vitae libero ac risus e</a></h6>
                                        <h6><a href=\"#\">Vestibulum commo</a></h6>
                                        <h6><a href=\"#\">Cras iaculis ultricies</a></h6>
                                    </div>
                                </div>
                            </div>
                            {% endif %}

                            {% if loop.index % 3 == 0 and loop.index != 0 %}
                            <div class=\"clearfix\"></div>
                        </div>
                    </li>
                    <li>
                        <div class=\"l_g\">
                            {% endif %}
                            {% endfor %}
                    <div class=\"clearfix\"></div>
                </ul>
                <div id=\"loadMore\">Load more</div>
                <div id=\"showLess\">Show less</div>

            </div>
        </div>
    </div>

{% endblock %}
", "TheBlogBlogBundle:Blog:index.html.twig", "C:\\wamp\\www\\theblog\\src\\TheBlog\\BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
