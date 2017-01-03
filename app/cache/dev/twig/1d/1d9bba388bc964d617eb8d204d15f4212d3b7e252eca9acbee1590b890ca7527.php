<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_92629cea9f22b7570853f2b2a3732ba8a96860c67383920ceaec2aa25d944636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb2943fafafa4e7c3c36a3090b9ae70253fd8513c944132ff251126ab999562c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2943fafafa4e7c3c36a3090b9ae70253fd8513c944132ff251126ab999562c->enter($__internal_fb2943fafafa4e7c3c36a3090b9ae70253fd8513c944132ff251126ab999562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2943fafafa4e7c3c36a3090b9ae70253fd8513c944132ff251126ab999562c->leave($__internal_fb2943fafafa4e7c3c36a3090b9ae70253fd8513c944132ff251126ab999562c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea1f38ab16885c6281b5ca4035f535001a66b6cabbe95f8a531c6f9d0618fc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1f38ab16885c6281b5ca4035f535001a66b6cabbe95f8a531c6f9d0618fc40->enter($__internal_ea1f38ab16885c6281b5ca4035f535001a66b6cabbe95f8a531c6f9d0618fc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"panel-body\">
        <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <fieldset>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_connect"));
        echo "
                </div>
                <div class=\"form-group\">
                    <input  class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input  class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>
                <input  class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </fieldset>
        </form>
    </div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                //appId      : '311144429285690',
                appId      : '311150865951713',
                xfbml      : true,
                version    : 'v2.8'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
";
        
        $__internal_ea1f38ab16885c6281b5ca4035f535001a66b6cabbe95f8a531c6f9d0618fc40->leave($__internal_ea1f38ab16885c6281b5ca4035f535001a66b6cabbe95f8a531c6f9d0618fc40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  80 => 26,  68 => 17,  62 => 14,  57 => 12,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"panel-body\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <fieldset>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                <div class=\"form-group\">
                    {{ render(url('hwi_oauth_connect')) }}
                </div>
                <div class=\"form-group\">
                    <input  class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input  class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                </div>
                <input  class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
            </fieldset>
        </form>
    </div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                //appId      : '311144429285690',
                appId      : '311150865951713',
                xfbml      : true,
                version    : 'v2.8'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
