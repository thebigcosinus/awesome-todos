<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e63007e11f4e5bfdde6755e4bcf6c8b67c77a158a637dc4d99f043156617dbe9 extends Twig_Template
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
        $__internal_c231a52acddf6af28c69a60ad966e76adf98d29a61c3b1a6394479e6b75be8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c231a52acddf6af28c69a60ad966e76adf98d29a61c3b1a6394479e6b75be8d0->enter($__internal_c231a52acddf6af28c69a60ad966e76adf98d29a61c3b1a6394479e6b75be8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c231a52acddf6af28c69a60ad966e76adf98d29a61c3b1a6394479e6b75be8d0->leave($__internal_c231a52acddf6af28c69a60ad966e76adf98d29a61c3b1a6394479e6b75be8d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
