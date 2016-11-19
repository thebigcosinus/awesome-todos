<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3a6d619391ac1e8264012072fb706706cf4ac556ad2ebd5b01d87a1a843626ad extends Twig_Template
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
        $__internal_00609c6d0f71758d5c5efbdb26a670614a9caf05a095a0f5d7d92a921b3a1edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00609c6d0f71758d5c5efbdb26a670614a9caf05a095a0f5d7d92a921b3a1edd->enter($__internal_00609c6d0f71758d5c5efbdb26a670614a9caf05a095a0f5d7d92a921b3a1edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_00609c6d0f71758d5c5efbdb26a670614a9caf05a095a0f5d7d92a921b3a1edd->leave($__internal_00609c6d0f71758d5c5efbdb26a670614a9caf05a095a0f5d7d92a921b3a1edd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
