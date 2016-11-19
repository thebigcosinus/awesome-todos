<?php

/* base.html.twig */
class __TwigTemplate_2dc604cc788500333169c28d282102e37094040cc9a0d8a9becf49b5be16295d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58ddceaf74001cdee8670efb41c55529d7b321f318996ca7cff1af144f7006ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ddceaf74001cdee8670efb41c55529d7b321f318996ca7cff1af144f7006ec->enter($__internal_58ddceaf74001cdee8670efb41c55529d7b321f318996ca7cff1af144f7006ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/symfony-collection/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 16
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_route", array("_switch_user" => "_exit"));
            echo "\">Exit impersonation</a>
        ";
        }
        // line 18
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_58ddceaf74001cdee8670efb41c55529d7b321f318996ca7cff1af144f7006ec->leave($__internal_58ddceaf74001cdee8670efb41c55529d7b321f318996ca7cff1af144f7006ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_615b1aee2cf8ad6fd43a6eca8061b397db7e7f8da5043675defdeae9867e9628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615b1aee2cf8ad6fd43a6eca8061b397db7e7f8da5043675defdeae9867e9628->enter($__internal_615b1aee2cf8ad6fd43a6eca8061b397db7e7f8da5043675defdeae9867e9628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_615b1aee2cf8ad6fd43a6eca8061b397db7e7f8da5043675defdeae9867e9628->leave($__internal_615b1aee2cf8ad6fd43a6eca8061b397db7e7f8da5043675defdeae9867e9628_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aabb33ba6d1a538ccb461be8469c1f3896241407ecb63d160649e91a7dc199ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabb33ba6d1a538ccb461be8469c1f3896241407ecb63d160649e91a7dc199ac->enter($__internal_aabb33ba6d1a538ccb461be8469c1f3896241407ecb63d160649e91a7dc199ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_aabb33ba6d1a538ccb461be8469c1f3896241407ecb63d160649e91a7dc199ac->leave($__internal_aabb33ba6d1a538ccb461be8469c1f3896241407ecb63d160649e91a7dc199ac_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fdeeace0ae67db0834e047d7039da2dd3f8e5c32f236b50320ec773e877a622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdeeace0ae67db0834e047d7039da2dd3f8e5c32f236b50320ec773e877a622->enter($__internal_0fdeeace0ae67db0834e047d7039da2dd3f8e5c32f236b50320ec773e877a622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0fdeeace0ae67db0834e047d7039da2dd3f8e5c32f236b50320ec773e877a622->leave($__internal_0fdeeace0ae67db0834e047d7039da2dd3f8e5c32f236b50320ec773e877a622_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_162a8e0ee74eecd7a972b05f9b927805a0fc4dfebeee8644c58fb52bb5ed0cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162a8e0ee74eecd7a972b05f9b927805a0fc4dfebeee8644c58fb52bb5ed0cb7->enter($__internal_162a8e0ee74eecd7a972b05f9b927805a0fc4dfebeee8644c58fb52bb5ed0cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_162a8e0ee74eecd7a972b05f9b927805a0fc4dfebeee8644c58fb52bb5ed0cb7->leave($__internal_162a8e0ee74eecd7a972b05f9b927805a0fc4dfebeee8644c58fb52bb5ed0cb7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 19,  111 => 18,  100 => 6,  88 => 5,  79 => 20,  76 => 19,  73 => 18,  67 => 16,  65 => 15,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}\">
        <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/symfony-collection/jquery.collection.js') }}\"></script>
    </head>
    <body>
        {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
            <a href=\"{{ path('new_route', {'_switch_user': '_exit'}) }}\">Exit impersonation</a>
        {% endif %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/fabien/symfony/forms/app/Resources/views/base.html.twig");
    }
}
