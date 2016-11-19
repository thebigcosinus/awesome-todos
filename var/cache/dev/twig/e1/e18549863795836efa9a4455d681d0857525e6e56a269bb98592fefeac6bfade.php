<?php

/* todo/edit.html.twig */
class __TwigTemplate_e44592aac808d945eb8991fbf80e1b080a85dd36591415ffec88b135c5b73016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/edit.html.twig", 1);
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
        $__internal_74179c990f8adfd144c68b2a0c85ea3dd994f87db06c374af1f7f76638c93f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74179c990f8adfd144c68b2a0c85ea3dd994f87db06c374af1f7f76638c93f38->enter($__internal_74179c990f8adfd144c68b2a0c85ea3dd994f87db06c374af1f7f76638c93f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74179c990f8adfd144c68b2a0c85ea3dd994f87db06c374af1f7f76638c93f38->leave($__internal_74179c990f8adfd144c68b2a0c85ea3dd994f87db06c374af1f7f76638c93f38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf390a7495a4cb60532cc9ca2d4427918870db79180a849b3a871df6a6bd4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf390a7495a4cb60532cc9ca2d4427918870db79180a849b3a871df6a6bd4d5->enter($__internal_fcf390a7495a4cb60532cc9ca2d4427918870db79180a849b3a871df6a6bd4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "todo/edit.html.twig"));

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
        
        $__internal_fcf390a7495a4cb60532cc9ca2d4427918870db79180a849b3a871df6a6bd4d5->leave($__internal_fcf390a7495a4cb60532cc9ca2d4427918870db79180a849b3a871df6a6bd4d5_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
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
    {{form_start(form)}}
    {{form_widget(form)}}
    {{form_end(form)}}
{% endblock %}
", "todo/edit.html.twig", "/home/fabien/symfony/forms/app/Resources/views/todo/edit.html.twig");
    }
}
