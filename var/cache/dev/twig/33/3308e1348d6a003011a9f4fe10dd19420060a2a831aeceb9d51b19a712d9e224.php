<?php

/* default/new.html.twig */
class __TwigTemplate_9a4592e9636875b4d3892d8f56f73abe6c6da747289671b02844d2e1117745d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'integer_widget' => array($this, 'block_integer_widget'),
            '_task_descritpion_widget' => array($this, 'block__task_descritpion_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f82a28f9d12bf1ac43bb96ef7bc99cf9f198da0e27b0538be03c8a9422469a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82a28f9d12bf1ac43bb96ef7bc99cf9f198da0e27b0538be03c8a9422469a06->enter($__internal_f82a28f9d12bf1ac43bb96ef7bc99cf9f198da0e27b0538be03c8a9422469a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82a28f9d12bf1ac43bb96ef7bc99cf9f198da0e27b0538be03c8a9422469a06->leave($__internal_f82a28f9d12bf1ac43bb96ef7bc99cf9f198da0e27b0538be03c8a9422469a06_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_679e25a64590b93cee59d8424733fcb91dfdb188645c3dba48a1c03d9070f06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679e25a64590b93cee59d8424733fcb91dfdb188645c3dba48a1c03d9070f06d->enter($__internal_679e25a64590b93cee59d8424733fcb91dfdb188645c3dba48a1c03d9070f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/new.html.twig"));

        // line 6
        echo "
    ";
        // line 7
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 8
        echo "    ";
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('_task_descritpion_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_route"), "method" => "POST"));
        echo "
    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo "
    </div>

        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "

    <h3>Category</h3>
    <div class=\"category\">
        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), "name", array()), 'row');
        echo "
    </div>
    <h3>Labels</h3>
    <ul class=\"labels\" data-prototype=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 37
            echo "            <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["label"], "name", array()), 'row');
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ul>
";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script type=\"text/javascript\">
    jQuery('.my-selector').collection({
         up: '<a href=\"#\">&#x25B2;</a>',
         down: '<a href=\"#\">&#x25BC;</a>',
         add: '<a href=\"#\">[ + ]</a>',
         remove: '<a href=\"#\">[ - ]</a>',
         duplicate: '<a href=\"#\">[ # ]</a>',
         allow_up: false,
         allow_down: false,
         prototype_name: '";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), "vars", array()), "prototype", array()), "vars", array()), "name", array()), "html", null, true);
        echo "',
        allow_add: true,
        allow_remove: true,
        name_prefix:  '";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "',
         init_with_n_elements: 5,
         add_at_the_end: true,
         min:1,
         max:10
     });
</script>
";
        
        $__internal_679e25a64590b93cee59d8424733fcb91dfdb188645c3dba48a1c03d9070f06d->leave($__internal_679e25a64590b93cee59d8424733fcb91dfdb188645c3dba48a1c03d9070f06d_prof);

    }

    // line 8
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_facaeafb18288431a4c27fd52e68ee33316d183b2a23d7ba9bcbdea5f7e7b279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facaeafb18288431a4c27fd52e68ee33316d183b2a23d7ba9bcbdea5f7e7b279->enter($__internal_facaeafb18288431a4c27fd52e68ee33316d183b2a23d7ba9bcbdea5f7e7b279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/new.html.twig"));

        // line 9
        echo "        <div class=\"integer_widget\">
            ";
        // line 10
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 11
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
    ";
        
        $__internal_facaeafb18288431a4c27fd52e68ee33316d183b2a23d7ba9bcbdea5f7e7b279->leave($__internal_facaeafb18288431a4c27fd52e68ee33316d183b2a23d7ba9bcbdea5f7e7b279_prof);

    }

    // line 15
    public function block__task_descritpion_widget($context, array $blocks = array())
    {
        $__internal_10514be0ee6c3649fca71b9240bd4c40d22115bc148ea1501454c68abb1fa128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10514be0ee6c3649fca71b9240bd4c40d22115bc148ea1501454c68abb1fa128->enter($__internal_10514be0ee6c3649fca71b9240bd4c40d22115bc148ea1501454c68abb1fa128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/new.html.twig"));

        // line 16
        echo "        <div class=\"text_widget fabien\">
            ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
    ";
        
        $__internal_10514be0ee6c3649fca71b9240bd4c40d22115bc148ea1501454c68abb1fa128->leave($__internal_10514be0ee6c3649fca71b9240bd4c40d22115bc148ea1501454c68abb1fa128_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 17,  177 => 16,  171 => 15,  160 => 11,  158 => 10,  155 => 9,  149 => 8,  134 => 55,  128 => 52,  114 => 41,  110 => 40,  107 => 39,  98 => 37,  94 => 36,  90 => 35,  84 => 32,  77 => 28,  71 => 25,  67 => 24,  63 => 23,  58 => 21,  55 => 20,  53 => 15,  50 => 14,  47 => 8,  45 => 7,  42 => 6,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
{#
    {% form_theme form 'jquery.collection.html.twig'  %}
#}

    {% form_theme form _self %}
    {% block integer_widget %}
        <div class=\"integer_widget\">
            {% set type = type|default('number') %}
            {{ block('form_widget_simple') }}
        </div>
    {% endblock %}

    {% block _task_descritpion_widget %}
        <div class=\"text_widget fabien\">
            {{ block('form_widget_simple') }}
        </div>
    {% endblock %}

{{ form_start(form, {'attr' :{'novalidate':'novalidate'}, 'action':path('new_route'), 'method':'POST'}) }}
    <div class=\"form-group\">
        {{ form_label(form.isActive) }}
        {{ form_errors(form.isActive) }}
        {{ form_widget(form.isActive) }}
    </div>

        {{ form_widget(form.description) }}

    <h3>Category</h3>
    <div class=\"category\">
        {{ form_row(form.category.name) }}
    </div>
    <h3>Labels</h3>
    <ul class=\"labels\" data-prototype=\"{{ form_widget(form.label.vars.prototype)|e('html_attr') }}\">
        {% for label in form.label %}
            <li>{{ form_row(label.name) }}</li>
        {% endfor %}
    </ul>
{{ form_widget(form) }}
{{ form_end(form) }}

<script type=\"text/javascript\">
    jQuery('.my-selector').collection({
         up: '<a href=\"#\">&#x25B2;</a>',
         down: '<a href=\"#\">&#x25BC;</a>',
         add: '<a href=\"#\">[ + ]</a>',
         remove: '<a href=\"#\">[ - ]</a>',
         duplicate: '<a href=\"#\">[ # ]</a>',
         allow_up: false,
         allow_down: false,
         prototype_name: '{{ form.label.vars.prototype.vars.name }}',
        allow_add: true,
        allow_remove: true,
        name_prefix:  '{{ form.label.vars.full_name }}',
         init_with_n_elements: 5,
         add_at_the_end: true,
         min:1,
         max:10
     });
</script>
{#    <script>
    var \$collectionHolder;

    var \$addLabelLink = \$('<a href=\"#\" class=\"add_tag_link\">Add a tag</a>');
    var \$newLinkli = \$('<li></li>').append(\$addLabelLink);

     jQuery(document).ready(function() {
     console.log('toto');
        \$collectionHolder = \$('ul.labels');
        \$collectionHolder.append(\$newLinkli);

        \$collectionHolder.find('li').each(function() {
            addLabelFormDeleteLink(\$(this));
        });

        \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

        \$addLabelLink.on('click', function(e) {
            e.preventDefault();

            addLabelForm(\$collectionHolder, \$newLinkli);
            addLabelFormDeleteLink();
        });

        function addLabelFormDeleteLink(\$labelFormLi) {
             var \$removeFormA = \$('<a href=\"#\">delete this label</a>');
             \$labelFormLi.append(\$removeFormA);
             \$removeFormA.on('click', function(e) {
                e.preventDefault();
                \$labelFormLi.remove();
             });
        }


        function addLabelForm(\$collectionHolder, \$newLinkLi) {
            var prototype = \$collectionHolder.data('prototype');

            var index = \$collectionHolder.data('index');

            var newForm = prototype.replace(/__name__/g, index);

            \$collectionHolder.data('index', index+1);

            var \$newFormLi = \$('<li></li>').append(newForm);
            \$newLinkli.before(\$newFormLi);
        }
     });

</script>#}
{% endblock %}
", "default/new.html.twig", "/home/fabien/symfony/forms/app/Resources/views/default/new.html.twig");
    }
}
