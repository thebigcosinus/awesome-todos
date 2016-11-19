<?php

/* base.html.twig */
class __TwigTemplate_5947321ff714aec00e83d6632e81925feeaf89ab69b1368f8ab994e3692f2b5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_697f2f90dd7e8a71e8e0f6543fc7de29efba586ce815869f6b7c66a75cbacd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697f2f90dd7e8a71e8e0f6543fc7de29efba586ce815869f6b7c66a75cbacd0e->enter($__internal_697f2f90dd7e8a71e8e0f6543fc7de29efba586ce815869f6b7c66a75cbacd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-COMPATIBLE\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/symfony-collection/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Todolist</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"/\">Home</a></li>
                    <li><a href=\"/todos/create\">Create</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <br><br><br>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "                    <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 50
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "            </div>
        </div>
    </div><!-- /.container -->
        ";
        // line 56
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 57
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_route", array("_switch_user" => "_exit"));
            echo "\">Exit impersonation</a>
        ";
        }
        // line 59
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_697f2f90dd7e8a71e8e0f6543fc7de29efba586ce815869f6b7c66a75cbacd0e->leave($__internal_697f2f90dd7e8a71e8e0f6543fc7de29efba586ce815869f6b7c66a75cbacd0e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_75af7fb949358e85654db72da38fada626ca39c62e8b0b095b93e93c4e038690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75af7fb949358e85654db72da38fada626ca39c62e8b0b095b93e93c4e038690->enter($__internal_75af7fb949358e85654db72da38fada626ca39c62e8b0b095b93e93c4e038690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_75af7fb949358e85654db72da38fada626ca39c62e8b0b095b93e93c4e038690->leave($__internal_75af7fb949358e85654db72da38fada626ca39c62e8b0b095b93e93c4e038690_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd60743e86beaab006edf8f45f8292b2eb650f5152574ba0d37817ba889f7581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd60743e86beaab006edf8f45f8292b2eb650f5152574ba0d37817ba889f7581->enter($__internal_bd60743e86beaab006edf8f45f8292b2eb650f5152574ba0d37817ba889f7581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_bd60743e86beaab006edf8f45f8292b2eb650f5152574ba0d37817ba889f7581->leave($__internal_bd60743e86beaab006edf8f45f8292b2eb650f5152574ba0d37817ba889f7581_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_498e6fdad6048bd57782d88839964f429e8b1c834e5c5c2f4bd7ab58304d8e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498e6fdad6048bd57782d88839964f429e8b1c834e5c5c2f4bd7ab58304d8e2b->enter($__internal_498e6fdad6048bd57782d88839964f429e8b1c834e5c5c2f4bd7ab58304d8e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_498e6fdad6048bd57782d88839964f429e8b1c834e5c5c2f4bd7ab58304d8e2b->leave($__internal_498e6fdad6048bd57782d88839964f429e8b1c834e5c5c2f4bd7ab58304d8e2b_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70d4df08db2b95e2de6b2cf20b1b0814b39618ccb58f22b8cb2e5cec24856921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d4df08db2b95e2de6b2cf20b1b0814b39618ccb58f22b8cb2e5cec24856921->enter($__internal_70d4df08db2b95e2de6b2cf20b1b0814b39618ccb58f22b8cb2e5cec24856921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_70d4df08db2b95e2de6b2cf20b1b0814b39618ccb58f22b8cb2e5cec24856921->leave($__internal_70d4df08db2b95e2de6b2cf20b1b0814b39618ccb58f22b8cb2e5cec24856921_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  176 => 52,  165 => 13,  153 => 9,  144 => 60,  141 => 59,  135 => 57,  133 => 56,  128 => 53,  125 => 52,  116 => 50,  112 => 49,  109 => 48,  100 => 46,  96 => 45,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  49 => 13,  45 => 12,  40 => 10,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-COMPATIBLE\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}\">
        {% block stylesheets %}{% endblock %}

        <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/symfony-collection/jquery.collection.js') }}\"></script>
    </head>
    <body>
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Todolist</a>
            </div>
            <div id=\"navbar\" class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"/\">Home</a></li>
                    <li><a href=\"/todos/create\">Create</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <br><br><br>
                {% for flash_message in app.session.flashbag.get('notice') %}
                    <div class=\"alert alert-success\">{{flash_message}}</div>
                {% endfor %}

                {% for flash_message in app.session.flashbag.get('error') %}
                    <div class=\"alert alert-danger\">{{flash_message}}</div>
                {% endfor %}
                {% block body %}{% endblock %}
            </div>
        </div>
    </div><!-- /.container -->
        {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
            <a href=\"{{ path('new_route', {'_switch_user': '_exit'}) }}\">Exit impersonation</a>
        {% endif %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/fabien/symfony/forms/app/Resources/views/base.html.twig");
    }
}
