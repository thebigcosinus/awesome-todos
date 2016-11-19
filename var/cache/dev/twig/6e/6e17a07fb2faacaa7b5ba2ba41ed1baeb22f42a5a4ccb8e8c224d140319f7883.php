<?php

/* :morse:index.html.twig */
class __TwigTemplate_fde9bbe69e92aa6a28f26156024fdb34e47f672feb4d619ec450e8e0128e6a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":morse:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17aa2bb1f3b4377bf86ea6e56fafb4bfa3c70c7ffcd9826271fe3ea9b759aae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17aa2bb1f3b4377bf86ea6e56fafb4bfa3c70c7ffcd9826271fe3ea9b759aae0->enter($__internal_17aa2bb1f3b4377bf86ea6e56fafb4bfa3c70c7ffcd9826271fe3ea9b759aae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":morse:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17aa2bb1f3b4377bf86ea6e56fafb4bfa3c70c7ffcd9826271fe3ea9b759aae0->leave($__internal_17aa2bb1f3b4377bf86ea6e56fafb4bfa3c70c7ffcd9826271fe3ea9b759aae0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_464db5942fc3b44631141633b1abee7abadad0ead766351582785bd5d9b0c1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464db5942fc3b44631141633b1abee7abadad0ead766351582785bd5d9b0c1e0->enter($__internal_464db5942fc3b44631141633b1abee7abadad0ead766351582785bd5d9b0c1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":morse:index.html.twig"));

        // line 4
        echo "morse
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <div id=\"morse\"></div>
    <div id=\"responses\"></div>
";
        
        $__internal_464db5942fc3b44631141633b1abee7abadad0ead766351582785bd5d9b0c1e0->leave($__internal_464db5942fc3b44631141633b1abee7abadad0ead766351582785bd5d9b0c1e0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b376ceef549931fc4abd17e62be490d71bf826cc9f7807d90ed05ca3bff18720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b376ceef549931fc4abd17e62be490d71bf826cc9f7807d90ed05ca3bff18720->enter($__internal_b376ceef549931fc4abd17e62be490d71bf826cc9f7807d90ed05ca3bff18720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":morse:index.html.twig"));

        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morse/qcm.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b376ceef549931fc4abd17e62be490d71bf826cc9f7807d90ed05ca3bff18720->leave($__internal_b376ceef549931fc4abd17e62be490d71bf826cc9f7807d90ed05ca3bff18720_prof);

    }

    public function getTemplateName()
    {
        return ":morse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  56 => 11,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{%  block body %}
morse
{{ form(form) }}

    <div id=\"morse\"></div>
    <div id=\"responses\"></div>
{% endblock%}

{% block javascripts %}
<script src=\"{{ asset('js/morse/qcm.js') }}\"></script>
{% endblock %}
", ":morse:index.html.twig", "/home/fabien/symfony/forms/app/Resources/views/morse/index.html.twig");
    }
}
