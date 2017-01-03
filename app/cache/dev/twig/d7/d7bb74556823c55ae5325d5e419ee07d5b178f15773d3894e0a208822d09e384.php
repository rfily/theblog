<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_e7f2081940cfa606d969a83d157cd3ba891c263bc5693ccd1a59236aea13a8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f45e5b5a55a90a70e4e26c26c3653fe07e97154e81c636b7f7455561f1175e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f45e5b5a55a90a70e4e26c26c3653fe07e97154e81c636b7f7455561f1175e3->enter($__internal_1f45e5b5a55a90a70e4e26c26c3653fe07e97154e81c636b7f7455561f1175e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"panel-body\">
    <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        <fieldset>
            <div class=\"form-group\">
                ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Utilisateur"));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array(), "array"), 'label', array("label" => "Mot de passe"));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array(), "array"), 'label', array("label" => "Répeter mot de passe"));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </fieldset>
    </form>
</div>";
        
        $__internal_1f45e5b5a55a90a70e4e26c26c3653fe07e97154e81c636b7f7455561f1175e3->leave($__internal_1f45e5b5a55a90a70e4e26c26c3653fe07e97154e81c636b7f7455561f1175e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  79 => 28,  73 => 25,  67 => 22,  61 => 19,  55 => 16,  49 => 13,  43 => 10,  37 => 7,  31 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"panel-body\">
    <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
        {{ form_widget(form._token) }}
        <fieldset>
            <div class=\"form-group\">
                {{ form_label(form.email,'Email') }}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.username,'Utilisateur') }}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.plainPassword['first'],'Mot de passe') }}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.plainPassword['first'], {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(form.plainPassword['second'],'Répeter mot de passe') }}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.plainPassword['second'], {'attr': {'class': 'form-control'}}) }}
            </div>
            <div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'registration.submit'|trans }}\" />
            </div>
        </fieldset>
    </form>
</div>", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\theblog\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
