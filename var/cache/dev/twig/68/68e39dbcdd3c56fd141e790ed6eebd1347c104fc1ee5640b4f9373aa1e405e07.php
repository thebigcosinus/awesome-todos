<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_70755a2df5fd64c550bf04706dc1bfe3ec6c5538b5f4c905988eb319c7efbe1b extends Twig_Template
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
        $__internal_e8410d72c0bbc8bf5482685311d42d87df9a278bad1e275bacfd830e9e59609d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8410d72c0bbc8bf5482685311d42d87df9a278bad1e275bacfd830e9e59609d->enter($__internal_e8410d72c0bbc8bf5482685311d42d87df9a278bad1e275bacfd830e9e59609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e8410d72c0bbc8bf5482685311d42d87df9a278bad1e275bacfd830e9e59609d->leave($__internal_e8410d72c0bbc8bf5482685311d42d87df9a278bad1e275bacfd830e9e59609d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
