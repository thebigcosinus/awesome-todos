<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3a0384cbc952600c7e739abaab5beadfb89c22b4d5da90ddafc561ad8eec8a84 extends Twig_Template
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
        $__internal_b9a73e8e350f19866ba5b3218aaefa01e0dfffc59abae25a4aa022377a6c3dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a73e8e350f19866ba5b3218aaefa01e0dfffc59abae25a4aa022377a6c3dba->enter($__internal_b9a73e8e350f19866ba5b3218aaefa01e0dfffc59abae25a4aa022377a6c3dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b9a73e8e350f19866ba5b3218aaefa01e0dfffc59abae25a4aa022377a6c3dba->leave($__internal_b9a73e8e350f19866ba5b3218aaefa01e0dfffc59abae25a4aa022377a6c3dba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
