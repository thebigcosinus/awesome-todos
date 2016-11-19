<?php

/* ::jquery.collection.html.twig */
class __TwigTemplate_c354927e812ab5e2c7ab08b9086526edeb0db0b84cab2bb44f4fdcb57e8fcf6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e362c23669df694e255691a4719cf21c4402f00273dd8d2b1960c266f0e8f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e362c23669df694e255691a4719cf21c4402f00273dd8d2b1960c266f0e8f25->enter($__internal_2e362c23669df694e255691a4719cf21c4402f00273dd8d2b1960c266f0e8f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::jquery.collection.html.twig"));

        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
        
        $__internal_2e362c23669df694e255691a4719cf21c4402f00273dd8d2b1960c266f0e8f25->leave($__internal_2e362c23669df694e255691a4719cf21c4402f00273dd8d2b1960c266f0e8f25_prof);

    }

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c189d6e2bc3ddd8c4d46c47fc1106e9dd9c1fdb82de9ac8c32168462f92cdc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c189d6e2bc3ddd8c4d46c47fc1106e9dd9c1fdb82de9ac8c32168462f92cdc13->enter($__internal_c189d6e2bc3ddd8c4d46c47fc1106e9dd9c1fdb82de9ac8c32168462f92cdc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::jquery.collection.html.twig"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
            // line 26
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array())));
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-allow-add" => (((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) ? (1) : (0))));
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-allow-remove" => (((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) ? (1) : (0))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-name-prefix" => (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name"))));
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c189d6e2bc3ddd8c4d46c47fc1106e9dd9c1fdb82de9ac8c32168462f92cdc13->leave($__internal_c189d6e2bc3ddd8c4d46c47fc1106e9dd9c1fdb82de9ac8c32168462f92cdc13_prof);

    }

    public function getTemplateName()
    {
        return "::jquery.collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 31,  59 => 30,  56 => 29,  53 => 28,  50 => 27,  47 => 26,  44 => 25,  41 => 24,  38 => 23,  26 => 22,  23 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
# jquery.collection.html.twig
#
# Adds the following html attributes to the root node of your collection fields:
#
# - data-prototype-name: placeholder used in the prototype to replace element indexes on the collection
# - data-allow-add: if set to false, plugin will automatically set allow_add option to false
# - data-allow-delete: if set to false, plugin will automatically set allow_remove option to false
# - data-name-prefix: contains the collection's prefix used in descendant field names
#
# Those information let you configure the plugin options automatically.
#
# If you are already using a form theme, you can use both by using:
# {%
#   form_theme myForm
#       'FuzAppBundle::my-form-theme.html.twig'
#       'FuzAppBundle::jquery.collection.html.twig'
#       ...
# %}
#}

{% block collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': form_row(prototype)}) %}
            {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}
        {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}
", "::jquery.collection.html.twig", "/home/fabien/symfony/forms/app/Resources/views/jquery.collection.html.twig");
    }
}
