<?php

/* :default:contact.html.twig */
class __TwigTemplate_1454f8bdfe62c66f5f5946a36aeacfdf802653e85a846b73c4ef320ca3aed471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae8ecbbe7365fa23d40f7d67263bdb1795fb6a3bd23c090d63876e58cf26309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae8ecbbe7365fa23d40f7d67263bdb1795fb6a3bd23c090d63876e58cf26309->enter($__internal_cae8ecbbe7365fa23d40f7d67263bdb1795fb6a3bd23c090d63876e58cf26309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:contact.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_cae8ecbbe7365fa23d40f7d67263bdb1795fb6a3bd23c090d63876e58cf26309->leave($__internal_cae8ecbbe7365fa23d40f7d67263bdb1795fb6a3bd23c090d63876e58cf26309_prof);

    }

    public function getTemplateName()
    {
        return ":default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr':{'novalidate':'novalidate'}}) }}
{{ form_widget(form) }}
{{ form_end(form) }}
", ":default:contact.html.twig", "/home/fabien/symfony/forms/app/Resources/views/default/contact.html.twig");
    }
}
