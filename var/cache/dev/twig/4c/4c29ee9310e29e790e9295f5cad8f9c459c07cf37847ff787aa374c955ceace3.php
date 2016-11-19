<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_06fa035cdfad18a990ce1a41d236abf9c606cffd0ddad626877d7240a562a235 extends Twig_Template
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
        $__internal_991d2cf454a8ef73adb469c0c5245dc159a06af6a7a58145bf2348afa4eac183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991d2cf454a8ef73adb469c0c5245dc159a06af6a7a58145bf2348afa4eac183->enter($__internal_991d2cf454a8ef73adb469c0c5245dc159a06af6a7a58145bf2348afa4eac183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_991d2cf454a8ef73adb469c0c5245dc159a06af6a7a58145bf2348afa4eac183->leave($__internal_991d2cf454a8ef73adb469c0c5245dc159a06af6a7a58145bf2348afa4eac183_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
