<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cb186e7f7267bbfabe30a127cdbeead0e562e17a11ca8960bdabf1196cabedf1 extends Twig_Template
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
        $__internal_fdc2bdf1f6e41f5467acdc19e85098cfd73feae44eb3c5b785187d12a6d9c94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc2bdf1f6e41f5467acdc19e85098cfd73feae44eb3c5b785187d12a6d9c94e->enter($__internal_fdc2bdf1f6e41f5467acdc19e85098cfd73feae44eb3c5b785187d12a6d9c94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fdc2bdf1f6e41f5467acdc19e85098cfd73feae44eb3c5b785187d12a6d9c94e->leave($__internal_fdc2bdf1f6e41f5467acdc19e85098cfd73feae44eb3c5b785187d12a6d9c94e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/fabien/symfony/forms/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
