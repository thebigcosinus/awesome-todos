<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67220f523dfacf6a675f18c64fe09e7e904653366104b9412dcdaf9c918c5522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_685b03d6c0a60bcbe5fc4fa7d83567b9f2b6a139a51352f72a52b39ea2892b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685b03d6c0a60bcbe5fc4fa7d83567b9f2b6a139a51352f72a52b39ea2892b2a->enter($__internal_685b03d6c0a60bcbe5fc4fa7d83567b9f2b6a139a51352f72a52b39ea2892b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685b03d6c0a60bcbe5fc4fa7d83567b9f2b6a139a51352f72a52b39ea2892b2a->leave($__internal_685b03d6c0a60bcbe5fc4fa7d83567b9f2b6a139a51352f72a52b39ea2892b2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4da8c91797af678cfe5187515554ce2c30f4f48a12735f4b2c5829a87c76d5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da8c91797af678cfe5187515554ce2c30f4f48a12735f4b2c5829a87c76d5c4->enter($__internal_4da8c91797af678cfe5187515554ce2c30f4f48a12735f4b2c5829a87c76d5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4da8c91797af678cfe5187515554ce2c30f4f48a12735f4b2c5829a87c76d5c4->leave($__internal_4da8c91797af678cfe5187515554ce2c30f4f48a12735f4b2c5829a87c76d5c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_129621f551a18526e345f0ec726c0c1382c34d1e483e774b3297953befc6ef95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129621f551a18526e345f0ec726c0c1382c34d1e483e774b3297953befc6ef95->enter($__internal_129621f551a18526e345f0ec726c0c1382c34d1e483e774b3297953befc6ef95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_129621f551a18526e345f0ec726c0c1382c34d1e483e774b3297953befc6ef95->leave($__internal_129621f551a18526e345f0ec726c0c1382c34d1e483e774b3297953befc6ef95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9ab627730b7cf96fae520dcab4044cede2bf87399729339f1f531c4a7250782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ab627730b7cf96fae520dcab4044cede2bf87399729339f1f531c4a7250782->enter($__internal_e9ab627730b7cf96fae520dcab4044cede2bf87399729339f1f531c4a7250782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e9ab627730b7cf96fae520dcab4044cede2bf87399729339f1f531c4a7250782->leave($__internal_e9ab627730b7cf96fae520dcab4044cede2bf87399729339f1f531c4a7250782_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
