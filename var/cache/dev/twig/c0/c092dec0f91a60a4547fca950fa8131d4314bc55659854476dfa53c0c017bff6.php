<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_75eff1510988de99fea8e132e681be92628fc3b05e35c188adbd558f3f66dec7 extends Twig_Template
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
        $__internal_bcd08cf2c3b4c2887166a1187379beebc3f5578f6e1a9fa3803220eeaebe8758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd08cf2c3b4c2887166a1187379beebc3f5578f6e1a9fa3803220eeaebe8758->enter($__internal_bcd08cf2c3b4c2887166a1187379beebc3f5578f6e1a9fa3803220eeaebe8758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bcd08cf2c3b4c2887166a1187379beebc3f5578f6e1a9fa3803220eeaebe8758->leave($__internal_bcd08cf2c3b4c2887166a1187379beebc3f5578f6e1a9fa3803220eeaebe8758_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
