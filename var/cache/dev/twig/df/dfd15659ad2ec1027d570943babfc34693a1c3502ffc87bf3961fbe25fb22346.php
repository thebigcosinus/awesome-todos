<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4a982791a052d1c759b6ce6eaf7fea6af8a7a61492889b59dac083341ba4153c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b8e2acac2e3929181271a36fe503a22d06ca79ca56885e897a65731369af111f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e2acac2e3929181271a36fe503a22d06ca79ca56885e897a65731369af111f->enter($__internal_b8e2acac2e3929181271a36fe503a22d06ca79ca56885e897a65731369af111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e2acac2e3929181271a36fe503a22d06ca79ca56885e897a65731369af111f->leave($__internal_b8e2acac2e3929181271a36fe503a22d06ca79ca56885e897a65731369af111f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe08bafb1b856b1455969e6fd691c370938fcc509611561a2fc318e4acccccf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe08bafb1b856b1455969e6fd691c370938fcc509611561a2fc318e4acccccf6->enter($__internal_fe08bafb1b856b1455969e6fd691c370938fcc509611561a2fc318e4acccccf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_fe08bafb1b856b1455969e6fd691c370938fcc509611561a2fc318e4acccccf6->leave($__internal_fe08bafb1b856b1455969e6fd691c370938fcc509611561a2fc318e4acccccf6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4b8060a0a236e8f934017eadbc472075dc02bf59b275a253f7f8c2c6c5bd6162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8060a0a236e8f934017eadbc472075dc02bf59b275a253f7f8c2c6c5bd6162->enter($__internal_4b8060a0a236e8f934017eadbc472075dc02bf59b275a253f7f8c2c6c5bd6162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b8060a0a236e8f934017eadbc472075dc02bf59b275a253f7f8c2c6c5bd6162->leave($__internal_4b8060a0a236e8f934017eadbc472075dc02bf59b275a253f7f8c2c6c5bd6162_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44db78f91461f4a21be91957d627ac98dc7ca0e6c9dabc1c3fbefa22e71097d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44db78f91461f4a21be91957d627ac98dc7ca0e6c9dabc1c3fbefa22e71097d6->enter($__internal_44db78f91461f4a21be91957d627ac98dc7ca0e6c9dabc1c3fbefa22e71097d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44db78f91461f4a21be91957d627ac98dc7ca0e6c9dabc1c3fbefa22e71097d6->leave($__internal_44db78f91461f4a21be91957d627ac98dc7ca0e6c9dabc1c3fbefa22e71097d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
