<?php

/* todo/details.html.twig */
class __TwigTemplate_b78e64367e540699d5f15ed9bfbea92265387c65b9cebadb316cceb418119eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/details.html.twig", 1);
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
        $__internal_57130068e05da683f47e9c2f62f771d5868cf18bedd6a1d8bfc1fc43effd66e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57130068e05da683f47e9c2f62f771d5868cf18bedd6a1d8bfc1fc43effd66e6->enter($__internal_57130068e05da683f47e9c2f62f771d5868cf18bedd6a1d8bfc1fc43effd66e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57130068e05da683f47e9c2f62f771d5868cf18bedd6a1d8bfc1fc43effd66e6->leave($__internal_57130068e05da683f47e9c2f62f771d5868cf18bedd6a1d8bfc1fc43effd66e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fe9a4201cdfd1d44b92a28275b220bec38adec66d1016eef1cd892f7003063e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe9a4201cdfd1d44b92a28275b220bec38adec66d1016eef1cd892f7003063e->enter($__internal_8fe9a4201cdfd1d44b92a28275b220bec38adec66d1016eef1cd892f7003063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "todo/details.html.twig"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_list");
        echo "\" class=\"btn btn-default\">Back to Todos</a>
    <h2 class=page-header>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item>Description : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "duedate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</li>
    </ul>
";
        
        $__internal_8fe9a4201cdfd1d44b92a28275b220bec38adec66d1016eef1cd892f7003063e->leave($__internal_8fe9a4201cdfd1d44b92a28275b220bec38adec66d1016eef1cd892f7003063e_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 8,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <a href=\"{{ path('todo_list') }}\" class=\"btn btn-default\">Back to Todos</a>
    <h2 class=page-header>{{todo.name}}</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category : {{todo.category}}</li>
        <li class=\"list-group-item>Description : {{todo.description}}</li>
        <li class=\"list-group-item\">Due: {{todo.duedate | date('F j, Y, g:i a')}}</li>
    </ul>
{% endblock %}
", "todo/details.html.twig", "/home/fabien/symfony/forms/app/Resources/views/todo/details.html.twig");
    }
}
