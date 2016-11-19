<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c087eee759ede84ff8c71084e44e499e5db6e59b3c7129be4d28d4325dfabbc3 extends Twig_Template
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
        $__internal_b7c3d0eb32569a22b24f0ef64c67cb305440a9108ec515a7d95343fbd8feb7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c3d0eb32569a22b24f0ef64c67cb305440a9108ec515a7d95343fbd8feb7b8->enter($__internal_b7c3d0eb32569a22b24f0ef64c67cb305440a9108ec515a7d95343fbd8feb7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b7c3d0eb32569a22b24f0ef64c67cb305440a9108ec515a7d95343fbd8feb7b8->leave($__internal_b7c3d0eb32569a22b24f0ef64c67cb305440a9108ec515a7d95343fbd8feb7b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
