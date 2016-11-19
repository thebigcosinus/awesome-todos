<?php

/* :Form:fields.html.twig */
class __TwigTemplate_0f1eaa6a62056b6eef601261abd14752a80838b8f275bb8ea76768087debc2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", ":Form:fields.html.twig", 1);
        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14f2cb930467d378d235a69571146622887261b97366f12712b5ef3f3d08941e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f2cb930467d378d235a69571146622887261b97366f12712b5ef3f3d08941e->enter($__internal_14f2cb930467d378d235a69571146622887261b97366f12712b5ef3f3d08941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14f2cb930467d378d235a69571146622887261b97366f12712b5ef3f3d08941e->leave($__internal_14f2cb930467d378d235a69571146622887261b97366f12712b5ef3f3d08941e_prof);

    }

    // line 3
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_6d9357c6d40087f957cbfba9ba88562d10edd8f2b2c1ed5780e2931de93cb61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9357c6d40087f957cbfba9ba88562d10edd8f2b2c1ed5780e2931de93cb61b->enter($__internal_6d9357c6d40087f957cbfba9ba88562d10edd8f2b2c1ed5780e2931de93cb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":Form:fields.html.twig"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "
        ";
        // line 6
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        ";
        // line 7
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 8
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))), "html", null, true);
            echo "\"/>
            ";
        }
        // line 10
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6d9357c6d40087f957cbfba9ba88562d10edd8f2b2c1ed5780e2931de93cb61b->leave($__internal_6d9357c6d40087f957cbfba9ba88562d10edd8f2b2c1ed5780e2931de93cb61b_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 8,  50 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block file_widget %}
    {% spaceless %}

        {{ block('form_widget') }}
        {% if image_url is not null %}
            <img src=\"{{ asset(image_url) }}\"/>
            {% endif %}
        {% endspaceless %}
{% endblock %}
", ":Form:fields.html.twig", "/home/fabien/symfony/forms/app/Resources/views/Form/fields.html.twig");
    }
}
