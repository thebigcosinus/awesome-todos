<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_da6001889948e5854baad51c11accca3a3384a09ae56dab8008b926a69392a42 extends Twig_Template
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
        $__internal_593ae798ca0894577a23d0ec3462db83fc5a098b8273018f2131c20df9da19f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593ae798ca0894577a23d0ec3462db83fc5a098b8273018f2131c20df9da19f9->enter($__internal_593ae798ca0894577a23d0ec3462db83fc5a098b8273018f2131c20df9da19f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_593ae798ca0894577a23d0ec3462db83fc5a098b8273018f2131c20df9da19f9->leave($__internal_593ae798ca0894577a23d0ec3462db83fc5a098b8273018f2131c20df9da19f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
