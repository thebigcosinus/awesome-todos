<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d95c6881f5a74aa4cd082cf8c2322f45b71f47feb6c0227b909344fc01277641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f818315bb0e9b43dc42cf7412429a78990d35bee0fe8a2308a4b13f8dfbc06da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f818315bb0e9b43dc42cf7412429a78990d35bee0fe8a2308a4b13f8dfbc06da->enter($__internal_f818315bb0e9b43dc42cf7412429a78990d35bee0fe8a2308a4b13f8dfbc06da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f818315bb0e9b43dc42cf7412429a78990d35bee0fe8a2308a4b13f8dfbc06da->leave($__internal_f818315bb0e9b43dc42cf7412429a78990d35bee0fe8a2308a4b13f8dfbc06da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d3514fb6740c5ea678bad70e5ac0f796549ca07c4ca9b8ff970c33e96020f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3514fb6740c5ea678bad70e5ac0f796549ca07c4ca9b8ff970c33e96020f9a->enter($__internal_5d3514fb6740c5ea678bad70e5ac0f796549ca07c4ca9b8ff970c33e96020f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_5d3514fb6740c5ea678bad70e5ac0f796549ca07c4ca9b8ff970c33e96020f9a->leave($__internal_5d3514fb6740c5ea678bad70e5ac0f796549ca07c4ca9b8ff970c33e96020f9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5f6b0b79f023e3d119d70cc4dcfc5b6b4ad1e0a0d191b31e4d2aebd24fedfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f6b0b79f023e3d119d70cc4dcfc5b6b4ad1e0a0d191b31e4d2aebd24fedfaa->enter($__internal_b5f6b0b79f023e3d119d70cc4dcfc5b6b4ad1e0a0d191b31e4d2aebd24fedfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b5f6b0b79f023e3d119d70cc4dcfc5b6b4ad1e0a0d191b31e4d2aebd24fedfaa->leave($__internal_b5f6b0b79f023e3d119d70cc4dcfc5b6b4ad1e0a0d191b31e4d2aebd24fedfaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18cf6c066fb3d531adccb8d48f79984402171f4fc34989a968f44aeb92dfbc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cf6c066fb3d531adccb8d48f79984402171f4fc34989a968f44aeb92dfbc0b->enter($__internal_18cf6c066fb3d531adccb8d48f79984402171f4fc34989a968f44aeb92dfbc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18cf6c066fb3d531adccb8d48f79984402171f4fc34989a968f44aeb92dfbc0b->leave($__internal_18cf6c066fb3d531adccb8d48f79984402171f4fc34989a968f44aeb92dfbc0b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
