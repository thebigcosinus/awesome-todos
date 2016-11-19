<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f17bdfff419eb38c81a5a267d7464ec81930022a58f8a8a931d5fa028d7e37c4 extends Twig_Template
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
        $__internal_7029cb79643a925c57d3d81d55c574bd921f65271629329d9355ebc2ed5e1770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7029cb79643a925c57d3d81d55c574bd921f65271629329d9355ebc2ed5e1770->enter($__internal_7029cb79643a925c57d3d81d55c574bd921f65271629329d9355ebc2ed5e1770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7029cb79643a925c57d3d81d55c574bd921f65271629329d9355ebc2ed5e1770->leave($__internal_7029cb79643a925c57d3d81d55c574bd921f65271629329d9355ebc2ed5e1770_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
