<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b3bedcb56b0be59c85db2b23cd89f5b9f5182e73d362776a5e9ea5121eb096ef extends Twig_Template
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
        $__internal_39d45231d14aa6a40c93cfc36e85bb41a62d424f50d8f7bb1a3667e6a757e32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d45231d14aa6a40c93cfc36e85bb41a62d424f50d8f7bb1a3667e6a757e32c->enter($__internal_39d45231d14aa6a40c93cfc36e85bb41a62d424f50d8f7bb1a3667e6a757e32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_39d45231d14aa6a40c93cfc36e85bb41a62d424f50d8f7bb1a3667e6a757e32c->leave($__internal_39d45231d14aa6a40c93cfc36e85bb41a62d424f50d8f7bb1a3667e6a757e32c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
