<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9c44b19cd6dd4bcc2f768813cbfb2c965c9268725d25b75040cc8329622648f5 extends Twig_Template
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
        $__internal_044cf3bc788063046cdf544d71c5e0e134e0070b2881b0863c5797af34e4b30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044cf3bc788063046cdf544d71c5e0e134e0070b2881b0863c5797af34e4b30d->enter($__internal_044cf3bc788063046cdf544d71c5e0e134e0070b2881b0863c5797af34e4b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_044cf3bc788063046cdf544d71c5e0e134e0070b2881b0863c5797af34e4b30d->leave($__internal_044cf3bc788063046cdf544d71c5e0e134e0070b2881b0863c5797af34e4b30d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
