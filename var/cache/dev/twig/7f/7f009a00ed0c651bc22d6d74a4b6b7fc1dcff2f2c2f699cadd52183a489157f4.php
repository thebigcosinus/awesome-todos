<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c6783ac43dd907379c39cced4ff8bb5fb60e4025e96a0f2224e2f710f17ad59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e35ed3fe21883f0868a9448f11d7201191e4d8e607571cd6978a01d52fb2fa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35ed3fe21883f0868a9448f11d7201191e4d8e607571cd6978a01d52fb2fa64->enter($__internal_e35ed3fe21883f0868a9448f11d7201191e4d8e607571cd6978a01d52fb2fa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e35ed3fe21883f0868a9448f11d7201191e4d8e607571cd6978a01d52fb2fa64->leave($__internal_e35ed3fe21883f0868a9448f11d7201191e4d8e607571cd6978a01d52fb2fa64_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_299ab3364e4dc7f35a558511154902dbe9b71375a52d3f9b9bd6aff8a48c5ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299ab3364e4dc7f35a558511154902dbe9b71375a52d3f9b9bd6aff8a48c5ffd->enter($__internal_299ab3364e4dc7f35a558511154902dbe9b71375a52d3f9b9bd6aff8a48c5ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_299ab3364e4dc7f35a558511154902dbe9b71375a52d3f9b9bd6aff8a48c5ffd->leave($__internal_299ab3364e4dc7f35a558511154902dbe9b71375a52d3f9b9bd6aff8a48c5ffd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cab65479a84783dba560231c17fda4bda3b0d5992d7fe49e82a8cbff7370b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cab65479a84783dba560231c17fda4bda3b0d5992d7fe49e82a8cbff7370b5->enter($__internal_05cab65479a84783dba560231c17fda4bda3b0d5992d7fe49e82a8cbff7370b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_05cab65479a84783dba560231c17fda4bda3b0d5992d7fe49e82a8cbff7370b5->leave($__internal_05cab65479a84783dba560231c17fda4bda3b0d5992d7fe49e82a8cbff7370b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
