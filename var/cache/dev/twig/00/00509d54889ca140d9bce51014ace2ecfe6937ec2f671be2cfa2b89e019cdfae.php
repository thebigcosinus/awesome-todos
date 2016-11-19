<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f76502134b96714bc915c8cb7d793c0aaf7ee3c25562580a6659e39f0ed959e7 extends Twig_Template
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
        $__internal_52667f74895ddf949655167ef43d3137745f36addf86d323fa0e0f53a2c0b248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52667f74895ddf949655167ef43d3137745f36addf86d323fa0e0f53a2c0b248->enter($__internal_52667f74895ddf949655167ef43d3137745f36addf86d323fa0e0f53a2c0b248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_52667f74895ddf949655167ef43d3137745f36addf86d323fa0e0f53a2c0b248->leave($__internal_52667f74895ddf949655167ef43d3137745f36addf86d323fa0e0f53a2c0b248_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
