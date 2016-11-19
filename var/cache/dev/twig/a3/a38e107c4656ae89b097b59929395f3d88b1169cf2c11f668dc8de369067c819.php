<?php

/* todo/create.html.twig */
class __TwigTemplate_80a02d6f4f5c669558aa561dfee0bbb38760ffd54c33b16b6173d1817a76ff85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a056a5d3f8a7da52fb3ae21387bce7f445ad6e19144be10b666a1b41d59c053d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a056a5d3f8a7da52fb3ae21387bce7f445ad6e19144be10b666a1b41d59c053d->enter($__internal_a056a5d3f8a7da52fb3ae21387bce7f445ad6e19144be10b666a1b41d59c053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a056a5d3f8a7da52fb3ae21387bce7f445ad6e19144be10b666a1b41d59c053d->leave($__internal_a056a5d3f8a7da52fb3ae21387bce7f445ad6e19144be10b666a1b41d59c053d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cb66749f1026d5e0ef94fa6c1bcefabe24d1019d233042a170cd0c459b7ffa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb66749f1026d5e0ef94fa6c1bcefabe24d1019d233042a170cd0c459b7ffa9->enter($__internal_2cb66749f1026d5e0ef94fa6c1bcefabe24d1019d233042a170cd0c459b7ffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "todo/create.html.twig"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit Todos</h2>
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2cb66749f1026d5e0ef94fa6c1bcefabe24d1019d233042a170cd0c459b7ffa9->leave($__internal_2cb66749f1026d5e0ef94fa6c1bcefabe24d1019d233042a170cd0c459b7ffa9_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <h2 class=\"page-header\">Edit Todos</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{%  endblock %}
", "todo/create.html.twig", "/home/fabien/symfony/forms/app/Resources/views/todo/create.html.twig");
    }
}
