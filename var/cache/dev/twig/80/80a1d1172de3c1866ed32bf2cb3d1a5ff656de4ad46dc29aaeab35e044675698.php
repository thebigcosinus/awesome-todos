<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3b40afb3c33e6a50e41618ff2e1cf27bf647a5c67844ac517a277c65ee4f99a5 extends Twig_Template
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
        $__internal_2b59a8e684dba0649ebd46c45792ec2f695ab0954fd0aa01ffded84a0eebe0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b59a8e684dba0649ebd46c45792ec2f695ab0954fd0aa01ffded84a0eebe0b0->enter($__internal_2b59a8e684dba0649ebd46c45792ec2f695ab0954fd0aa01ffded84a0eebe0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2b59a8e684dba0649ebd46c45792ec2f695ab0954fd0aa01ffded84a0eebe0b0->leave($__internal_2b59a8e684dba0649ebd46c45792ec2f695ab0954fd0aa01ffded84a0eebe0b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
