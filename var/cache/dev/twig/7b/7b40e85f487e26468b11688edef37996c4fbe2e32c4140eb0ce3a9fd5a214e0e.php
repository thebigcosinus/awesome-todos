<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_231852e6c9dbc02f43775cd9d61e32f20c6232b5e9d3109153f4eb76fb368ce5 extends Twig_Template
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
        $__internal_4fe14dcac3182a79689796ea0240082f77779e0d5541c5a60db0cdeee8ec7c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe14dcac3182a79689796ea0240082f77779e0d5541c5a60db0cdeee8ec7c74->enter($__internal_4fe14dcac3182a79689796ea0240082f77779e0d5541c5a60db0cdeee8ec7c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4fe14dcac3182a79689796ea0240082f77779e0d5541c5a60db0cdeee8ec7c74->leave($__internal_4fe14dcac3182a79689796ea0240082f77779e0d5541c5a60db0cdeee8ec7c74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
