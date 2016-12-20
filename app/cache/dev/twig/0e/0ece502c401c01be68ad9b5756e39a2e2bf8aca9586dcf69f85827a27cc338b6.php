<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e1f58f0a85ac06cc2df588af687ff5877ac7d6c45acd43bdedb997fe301a8506 extends Twig_Template
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
        $__internal_7ddce3bb2a962723bac8cfcfa4d83c4deee04a12029cf370a453f19376a7c430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddce3bb2a962723bac8cfcfa4d83c4deee04a12029cf370a453f19376a7c430->enter($__internal_7ddce3bb2a962723bac8cfcfa4d83c4deee04a12029cf370a453f19376a7c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ddce3bb2a962723bac8cfcfa4d83c4deee04a12029cf370a453f19376a7c430->leave($__internal_7ddce3bb2a962723bac8cfcfa4d83c4deee04a12029cf370a453f19376a7c430_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e07b7ade2eeaadad0ab2d552f501336a188dd2e163456be4567cb47c3a063be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07b7ade2eeaadad0ab2d552f501336a188dd2e163456be4567cb47c3a063be0->enter($__internal_e07b7ade2eeaadad0ab2d552f501336a188dd2e163456be4567cb47c3a063be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
                    <input  class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input  class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>
                <input  class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </fieldset>
        </form>
    </div>
";
        
        $__internal_e07b7ade2eeaadad0ab2d552f501336a188dd2e163456be4567cb47c3a063be0->leave($__internal_e07b7ade2eeaadad0ab2d552f501336a188dd2e163456be4567cb47c3a063be0_prof);

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
        return array (  79 => 25,  74 => 23,  62 => 14,  57 => 12,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\theblog\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
