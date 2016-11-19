<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6bf8acee36b64411360e0feca2a9591f6378ebca71d1a65dd98355d84ac08f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_613aec252b8e58d17139f0f63a6fd9d3d19e00e9fcf81be094be3d2a53bcb8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613aec252b8e58d17139f0f63a6fd9d3d19e00e9fcf81be094be3d2a53bcb8f6->enter($__internal_613aec252b8e58d17139f0f63a6fd9d3d19e00e9fcf81be094be3d2a53bcb8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_613aec252b8e58d17139f0f63a6fd9d3d19e00e9fcf81be094be3d2a53bcb8f6->leave($__internal_613aec252b8e58d17139f0f63a6fd9d3d19e00e9fcf81be094be3d2a53bcb8f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce891527d966e3465c06a81d66d169e7fd7ddfc8dfcc53614a3f03a2eceff127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce891527d966e3465c06a81d66d169e7fd7ddfc8dfcc53614a3f03a2eceff127->enter($__internal_ce891527d966e3465c06a81d66d169e7fd7ddfc8dfcc53614a3f03a2eceff127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_ce891527d966e3465c06a81d66d169e7fd7ddfc8dfcc53614a3f03a2eceff127->leave($__internal_ce891527d966e3465c06a81d66d169e7fd7ddfc8dfcc53614a3f03a2eceff127_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
