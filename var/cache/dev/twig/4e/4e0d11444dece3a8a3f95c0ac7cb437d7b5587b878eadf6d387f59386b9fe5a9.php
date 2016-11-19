<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_83c0abefd0396cc2ea766a545b0eb0cfd257f3d45002f0faa5e410fc41ef7f0b extends Twig_Template
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
        $__internal_510ae7fd32e884f9aaa5c5d48a5e15a7ad86c8c5b7d9dcf8cc89753cdf20597c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510ae7fd32e884f9aaa5c5d48a5e15a7ad86c8c5b7d9dcf8cc89753cdf20597c->enter($__internal_510ae7fd32e884f9aaa5c5d48a5e15a7ad86c8c5b7d9dcf8cc89753cdf20597c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_510ae7fd32e884f9aaa5c5d48a5e15a7ad86c8c5b7d9dcf8cc89753cdf20597c->leave($__internal_510ae7fd32e884f9aaa5c5d48a5e15a7ad86c8c5b7d9dcf8cc89753cdf20597c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
