<?php

/* base.html.twig */
class __TwigTemplate_7ab1f9b753bc645ceff1ab700a3ac5f3625fe9b9e1ed78c2fb161fe84a1acb66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9412a3163a135be36d1f1472f9b5f309d43f84d0d03991f03988cb750670c8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9412a3163a135be36d1f1472f9b5f309d43f84d0d03991f03988cb750670c8bb->enter($__internal_9412a3163a135be36d1f1472f9b5f309d43f84d0d03991f03988cb750670c8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_9412a3163a135be36d1f1472f9b5f309d43f84d0d03991f03988cb750670c8bb->leave($__internal_9412a3163a135be36d1f1472f9b5f309d43f84d0d03991f03988cb750670c8bb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_896d176d6c5e03f0857600c4c1ddce0371ec95c4e98fa0eee3107470273c624c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896d176d6c5e03f0857600c4c1ddce0371ec95c4e98fa0eee3107470273c624c->enter($__internal_896d176d6c5e03f0857600c4c1ddce0371ec95c4e98fa0eee3107470273c624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_896d176d6c5e03f0857600c4c1ddce0371ec95c4e98fa0eee3107470273c624c->leave($__internal_896d176d6c5e03f0857600c4c1ddce0371ec95c4e98fa0eee3107470273c624c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61c9bd1356cf90a847b2b51b2a6724f27d5ebc48666004bdc7f18671fea0707a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c9bd1356cf90a847b2b51b2a6724f27d5ebc48666004bdc7f18671fea0707a->enter($__internal_61c9bd1356cf90a847b2b51b2a6724f27d5ebc48666004bdc7f18671fea0707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_61c9bd1356cf90a847b2b51b2a6724f27d5ebc48666004bdc7f18671fea0707a->leave($__internal_61c9bd1356cf90a847b2b51b2a6724f27d5ebc48666004bdc7f18671fea0707a_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_64199745e3a15e4923425571b39d1207af70b76d4c174dafb4b612d3d7d9cc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64199745e3a15e4923425571b39d1207af70b76d4c174dafb4b612d3d7d9cc03->enter($__internal_64199745e3a15e4923425571b39d1207af70b76d4c174dafb4b612d3d7d9cc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_64199745e3a15e4923425571b39d1207af70b76d4c174dafb4b612d3d7d9cc03->leave($__internal_64199745e3a15e4923425571b39d1207af70b76d4c174dafb4b612d3d7d9cc03_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_681afc29033d497301dc21fa811d8b53aa19423e5ec618d3d9ba63791165e0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681afc29033d497301dc21fa811d8b53aa19423e5ec618d3d9ba63791165e0ac->enter($__internal_681afc29033d497301dc21fa811d8b53aa19423e5ec618d3d9ba63791165e0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_681afc29033d497301dc21fa811d8b53aa19423e5ec618d3d9ba63791165e0ac->leave($__internal_681afc29033d497301dc21fa811d8b53aa19423e5ec618d3d9ba63791165e0ac_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_038bd117abbbe95a64289029b6b6a69d69aa49b609c8bac08dd734e427e02805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038bd117abbbe95a64289029b6b6a69d69aa49b609c8bac08dd734e427e02805->enter($__internal_038bd117abbbe95a64289029b6b6a69d69aa49b609c8bac08dd734e427e02805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_038bd117abbbe95a64289029b6b6a69d69aa49b609c8bac08dd734e427e02805->leave($__internal_038bd117abbbe95a64289029b6b6a69d69aa49b609c8bac08dd734e427e02805_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_2b79ddcd14a70fa62f1a8eda81e9f4c7036091873107bddf2de566cd4329195b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b79ddcd14a70fa62f1a8eda81e9f4c7036091873107bddf2de566cd4329195b->enter($__internal_2b79ddcd14a70fa62f1a8eda81e9f4c7036091873107bddf2de566cd4329195b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2b79ddcd14a70fa62f1a8eda81e9f4c7036091873107bddf2de566cd4329195b->leave($__internal_2b79ddcd14a70fa62f1a8eda81e9f4c7036091873107bddf2de566cd4329195b_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1680c183ae401199daed17e9d30af6e142bab483c674300bd4f6c607f57ca95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1680c183ae401199daed17e9d30af6e142bab483c674300bd4f6c607f57ca95f->enter($__internal_1680c183ae401199daed17e9d30af6e142bab483c674300bd4f6c607f57ca95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1680c183ae401199daed17e9d30af6e142bab483c674300bd4f6c607f57ca95f->leave($__internal_1680c183ae401199daed17e9d30af6e142bab483c674300bd4f6c607f57ca95f_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
