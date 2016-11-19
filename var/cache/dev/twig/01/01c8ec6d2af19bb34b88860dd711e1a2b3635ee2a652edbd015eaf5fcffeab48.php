<?php

/* :security:login.html.twig */
class __TwigTemplate_01799c7d0657314202b70471141fe6ebda6c96e909cf22e0627c20a399ecad48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":security:login.html.twig", 1);
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
        $__internal_c4bd195838548edfd251255f49c1ac603ab5599a97bba8bc150be1625330de58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bd195838548edfd251255f49c1ac603ab5599a97bba8bc150be1625330de58->enter($__internal_c4bd195838548edfd251255f49c1ac603ab5599a97bba8bc150be1625330de58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4bd195838548edfd251255f49c1ac603ab5599a97bba8bc150be1625330de58->leave($__internal_c4bd195838548edfd251255f49c1ac603ab5599a97bba8bc150be1625330de58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1748ecad671a564ba190117586a66e9d21855ed65dbaf0357b24f6ce3f84322f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1748ecad671a564ba190117586a66e9d21855ed65dbaf0357b24f6ce3f84322f->enter($__internal_1748ecad671a564ba190117586a66e9d21855ed65dbaf0357b24f6ce3f84322f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":security:login.html.twig"));

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
        
        $__internal_1748ecad671a564ba190117586a66e9d21855ed65dbaf0357b24f6ce3f84322f->leave($__internal_1748ecad671a564ba190117586a66e9d21855ed65dbaf0357b24f6ce3f84322f_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
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
", ":security:login.html.twig", "/home/fabien/symfony/forms/app/Resources/views/security/login.html.twig");
    }
}
