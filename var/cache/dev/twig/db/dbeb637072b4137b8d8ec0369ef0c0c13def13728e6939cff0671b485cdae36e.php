<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f4c518d94e870396977c66f0609adb6d25a3ce44d51f253b402df28184381d27 extends Twig_Template
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
        $__internal_87edda5d57bc5f13a3521f7582d0c1a7c8e13552e8d4666b231a4c0012ac5ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87edda5d57bc5f13a3521f7582d0c1a7c8e13552e8d4666b231a4c0012ac5ac3->enter($__internal_87edda5d57bc5f13a3521f7582d0c1a7c8e13552e8d4666b231a4c0012ac5ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_87edda5d57bc5f13a3521f7582d0c1a7c8e13552e8d4666b231a4c0012ac5ac3->leave($__internal_87edda5d57bc5f13a3521f7582d0c1a7c8e13552e8d4666b231a4c0012ac5ac3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
