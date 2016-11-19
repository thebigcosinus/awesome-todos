<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f7a8f3f673babe3e7b9c427438b67a296e21e9834ad57e2040cec0b5ca4d7008 extends Twig_Template
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
        $__internal_c8349cade71a87c1df12d8a8438f694eea46e10091025eccb2c580013f9c63c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8349cade71a87c1df12d8a8438f694eea46e10091025eccb2c580013f9c63c6->enter($__internal_c8349cade71a87c1df12d8a8438f694eea46e10091025eccb2c580013f9c63c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c8349cade71a87c1df12d8a8438f694eea46e10091025eccb2c580013f9c63c6->leave($__internal_c8349cade71a87c1df12d8a8438f694eea46e10091025eccb2c580013f9c63c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
