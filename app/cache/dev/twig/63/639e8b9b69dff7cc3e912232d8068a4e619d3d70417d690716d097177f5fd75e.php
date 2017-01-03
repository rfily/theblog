<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_52d610af49fe70aae7f6f316e617c8e24fc77fc17955dd3556de31a2f556185f extends Twig_Template
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
        $__internal_44887195f2e8b17271e589d3d86a514d6cfb2149cd5b82e3a0f48ae052b0549d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44887195f2e8b17271e589d3d86a514d6cfb2149cd5b82e3a0f48ae052b0549d->enter($__internal_44887195f2e8b17271e589d3d86a514d6cfb2149cd5b82e3a0f48ae052b0549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StfalconTinymceBundle:Script:init.html.twig"));

        // line 1
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.jquery.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/ready.min.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.standard.js"), (isset($context["asset_package_name"]) ? $context["asset_package_name"] : $this->getContext($context, "asset_package_name"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ";
    initTinyMCE();
    //]]>
</script>
";
        
        $__internal_44887195f2e8b17271e589d3d86a514d6cfb2149cd5b82e3a0f48ae052b0549d->leave($__internal_44887195f2e8b17271e589d3d86a514d6cfb2149cd5b82e3a0f48ae052b0549d_prof);

    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 12,  49 => 10,  45 => 9,  40 => 8,  35 => 6,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if include_jquery %}
    <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
{% endif %}
{% if tinymce_jquery %}
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/init.jquery.js', asset_package_name) }}\"></script>
{% else %}
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/ready.min.js', asset_package_name) }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset(base_url~'bundles/stfalcontinymce/js/init.standard.js', asset_package_name) }}\"></script>
{% endif %}
<script type=\"text/javascript\">
    //<![CDATA[
    stfalcon_tinymce_config = {{ tinymce_config|raw }};
    initTinyMCE();
    //]]>
</script>
", "StfalconTinymceBundle:Script:init.html.twig", "C:\\wamp\\www\\theblog\\vendor\\stfalcon\\tinymce-bundle\\Stfalcon\\Bundle\\TinymceBundle/Resources/views/Script/init.html.twig");
    }
}
