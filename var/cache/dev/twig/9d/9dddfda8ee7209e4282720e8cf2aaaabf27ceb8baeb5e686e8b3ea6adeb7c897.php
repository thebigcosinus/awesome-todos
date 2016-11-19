<?php

/* todo/index.html.twig */
class __TwigTemplate_6de1a0a47b24fadea8e686afa54505a19b338991cfb00f2aabbc6b88d517f2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/index.html.twig", 1);
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
        $__internal_bbede5e7e1a383478051c1acf104fdae308fd9ac0c607e8f42f2bf3c12452139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbede5e7e1a383478051c1acf104fdae308fd9ac0c607e8f42f2bf3c12452139->enter($__internal_bbede5e7e1a383478051c1acf104fdae308fd9ac0c607e8f42f2bf3c12452139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbede5e7e1a383478051c1acf104fdae308fd9ac0c607e8f42f2bf3c12452139->leave($__internal_bbede5e7e1a383478051c1acf104fdae308fd9ac0c607e8f42f2bf3c12452139_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce1f8813fa72e6862a71f04c7875b910a6f712946b13e47213e9b9c069b62cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1f8813fa72e6862a71f04c7875b910a6f712946b13e47213e9b9c069b62cf4->enter($__internal_ce1f8813fa72e6862a71f04c7875b910a6f712946b13e47213e9b9c069b62cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "todo/index.html.twig"));

        // line 4
        echo "    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Assigned Date</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 16
            echo "            <tr>
                <td scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "createDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "duedate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_details", array("id" => $this->getAttribute($context["todo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_edit", array("id" => $this->getAttribute($context["todo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo_delete", array("id" => $this->getAttribute($context["todo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
";
        
        $__internal_ce1f8813fa72e6862a71f04c7875b910a6f712946b13e47213e9b9c069b62cf4->leave($__internal_ce1f8813fa72e6862a71f04c7875b910a6f712946b13e47213e9b9c069b62cf4_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  85 => 24,  81 => 23,  77 => 22,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Assigned Date</th>
            <th>Due Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for todo in todos %}
            <tr>
                <td scope=\"row\">{{todo.id}}</td>
                <td>{{todo.name}}</td>
                <td>{{todo.createDate | date('F j, Y, g:i a')}}</td>
                <td>{{todo.duedate | date('F j, Y, g:i a')}}</td>
                <td>
                    <a href=\"{{ path('todo_details', {'id': todo.id}) }}\" class=\"btn btn-success\">View</a>
                    <a href=\"{{path('todo_edit', {'id': todo.id})}}\" class=\"btn btn-default\">Edit</a>
                    <a href=\"{{ path('todo_delete', {'id': todo.id})}}\" class=\"btn btn-danger\">Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "todo/index.html.twig", "/home/fabien/symfony/forms/app/Resources/views/todo/index.html.twig");
    }
}
