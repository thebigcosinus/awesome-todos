<?php

/* security/login.html.twig */
class __TwigTemplate_811988827b9412970429214c48242c04ded392f165488e9c4bf3e877cee900bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc18eb553d1196326ca61f0f03b2d9563213540e0b015cdbf50b978af3a3b3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc18eb553d1196326ca61f0f03b2d9563213540e0b015cdbf50b978af3a3b3fe->enter($__internal_cc18eb553d1196326ca61f0f03b2d9563213540e0b015cdbf50b978af3a3b3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc18eb553d1196326ca61f0f03b2d9563213540e0b015cdbf50b978af3a3b3fe->leave($__internal_cc18eb553d1196326ca61f0f03b2d9563213540e0b015cdbf50b978af3a3b3fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6e16dae00d8a096d9c3302b76bb6fc5d2a52af9791c0e87516c7c26964ddbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e16dae00d8a096d9c3302b76bb6fc5d2a52af9791c0e87516c7c26964ddbf0->enter($__internal_e6e16dae00d8a096d9c3302b76bb6fc5d2a52af9791c0e87516c7c26964ddbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "security/login.html.twig"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\"/>

        <input type=\"hidden\" name=\"_csrf_security_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
        <label for=\"remember_me\">Keep me logged in</label>

        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_e6e16dae00d8a096d9c3302b76bb6fc5d2a52af9791c0e87516c7c26964ddbf0->leave($__internal_e6e16dae00d8a096d9c3302b76bb6fc5d2a52af9791c0e87516c7c26964ddbf0_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  56 => 10,  51 => 8,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
{%  if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\"/>

        <input type=\"hidden\" name=\"_csrf_security_token\" value=\"{{ csrf_token('authenticate') }}\">

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
        <label for=\"remember_me\">Keep me logged in</label>

        <button type=\"submit\">login</button>
    </form>
{% endblock %}
", "security/login.html.twig", "/home/fabien/symfony/forms/app/Resources/views/security/login.html.twig");
    }
}
