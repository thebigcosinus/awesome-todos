<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6555fe1916ba6b42cd39e584c168bcd40c3734aa28d47aae83135f19778aa43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08ee4f1de480fa5ed7d85e555e8d992cd5c35dde01f3993a134dfc36761c44b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ee4f1de480fa5ed7d85e555e8d992cd5c35dde01f3993a134dfc36761c44b6->enter($__internal_08ee4f1de480fa5ed7d85e555e8d992cd5c35dde01f3993a134dfc36761c44b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ee4f1de480fa5ed7d85e555e8d992cd5c35dde01f3993a134dfc36761c44b6->leave($__internal_08ee4f1de480fa5ed7d85e555e8d992cd5c35dde01f3993a134dfc36761c44b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73c95da9e3d349b9ef31783ded9aa7ddd1b45c04a3e434a1cca06fea7975e5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c95da9e3d349b9ef31783ded9aa7ddd1b45c04a3e434a1cca06fea7975e5fe->enter($__internal_73c95da9e3d349b9ef31783ded9aa7ddd1b45c04a3e434a1cca06fea7975e5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73c95da9e3d349b9ef31783ded9aa7ddd1b45c04a3e434a1cca06fea7975e5fe->leave($__internal_73c95da9e3d349b9ef31783ded9aa7ddd1b45c04a3e434a1cca06fea7975e5fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67b2d419496d537ade8de981633c70809d39b7d76028cb43a766baa75e650be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67b2d419496d537ade8de981633c70809d39b7d76028cb43a766baa75e650be->enter($__internal_e67b2d419496d537ade8de981633c70809d39b7d76028cb43a766baa75e650be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e67b2d419496d537ade8de981633c70809d39b7d76028cb43a766baa75e650be->leave($__internal_e67b2d419496d537ade8de981633c70809d39b7d76028cb43a766baa75e650be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4125ed42a84bdecd81d9669e881b1bfd691103e6093743bcf6e8b509c132d33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4125ed42a84bdecd81d9669e881b1bfd691103e6093743bcf6e8b509c132d33e->enter($__internal_4125ed42a84bdecd81d9669e881b1bfd691103e6093743bcf6e8b509c132d33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4125ed42a84bdecd81d9669e881b1bfd691103e6093743bcf6e8b509c132d33e->leave($__internal_4125ed42a84bdecd81d9669e881b1bfd691103e6093743bcf6e8b509c132d33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
