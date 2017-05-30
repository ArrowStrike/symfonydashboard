<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
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
        $__internal_5ef688a4e6599f7c71fa896c9089c07d1e259ea08ac4f3e3f20a8a291141e0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef688a4e6599f7c71fa896c9089c07d1e259ea08ac4f3e3f20a8a291141e0db->enter($__internal_5ef688a4e6599f7c71fa896c9089c07d1e259ea08ac4f3e3f20a8a291141e0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_84a17f18d15e424506e9ad44fbb8b8f6d898d92272dd10b420afb599685e363b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a17f18d15e424506e9ad44fbb8b8f6d898d92272dd10b420afb599685e363b->enter($__internal_84a17f18d15e424506e9ad44fbb8b8f6d898d92272dd10b420afb599685e363b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo");
        echo "\">Todo list</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create");
        echo "\">Create</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <div class=\"col-md-12\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 50
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
    </div>
</div>

<!-- /.container -->
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "</body>
</html>
";
        
        $__internal_5ef688a4e6599f7c71fa896c9089c07d1e259ea08ac4f3e3f20a8a291141e0db->leave($__internal_5ef688a4e6599f7c71fa896c9089c07d1e259ea08ac4f3e3f20a8a291141e0db_prof);

        
        $__internal_84a17f18d15e424506e9ad44fbb8b8f6d898d92272dd10b420afb599685e363b->leave($__internal_84a17f18d15e424506e9ad44fbb8b8f6d898d92272dd10b420afb599685e363b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_490914a890d2458b4e1efb13d5f8ecc2e5c32b7bdd532134a7c0d7da925ac3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490914a890d2458b4e1efb13d5f8ecc2e5c32b7bdd532134a7c0d7da925ac3ce->enter($__internal_490914a890d2458b4e1efb13d5f8ecc2e5c32b7bdd532134a7c0d7da925ac3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2ffe28c7a1e39f3b1dee647ce806f4922a444a3251541c58f65b86f3ac83914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ffe28c7a1e39f3b1dee647ce806f4922a444a3251541c58f65b86f3ac83914->enter($__internal_f2ffe28c7a1e39f3b1dee647ce806f4922a444a3251541c58f65b86f3ac83914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2ffe28c7a1e39f3b1dee647ce806f4922a444a3251541c58f65b86f3ac83914->leave($__internal_f2ffe28c7a1e39f3b1dee647ce806f4922a444a3251541c58f65b86f3ac83914_prof);

        
        $__internal_490914a890d2458b4e1efb13d5f8ecc2e5c32b7bdd532134a7c0d7da925ac3ce->leave($__internal_490914a890d2458b4e1efb13d5f8ecc2e5c32b7bdd532134a7c0d7da925ac3ce_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c10f8ed969e20755d6f52bb0d0c151f93f8557e5cbe2e47e77c834591b058be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c10f8ed969e20755d6f52bb0d0c151f93f8557e5cbe2e47e77c834591b058be->enter($__internal_9c10f8ed969e20755d6f52bb0d0c151f93f8557e5cbe2e47e77c834591b058be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e294fec2179c82c9132bbc1f1cd4994e1e6835f14183864a289bd4ae0877d075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e294fec2179c82c9132bbc1f1cd4994e1e6835f14183864a289bd4ae0877d075->enter($__internal_e294fec2179c82c9132bbc1f1cd4994e1e6835f14183864a289bd4ae0877d075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e294fec2179c82c9132bbc1f1cd4994e1e6835f14183864a289bd4ae0877d075->leave($__internal_e294fec2179c82c9132bbc1f1cd4994e1e6835f14183864a289bd4ae0877d075_prof);

        
        $__internal_9c10f8ed969e20755d6f52bb0d0c151f93f8557e5cbe2e47e77c834591b058be->leave($__internal_9c10f8ed969e20755d6f52bb0d0c151f93f8557e5cbe2e47e77c834591b058be_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a36c9e3d7faa7fb78ffa662ad9a6556d7ca0dbba1bacc6ae0479970405b6f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a36c9e3d7faa7fb78ffa662ad9a6556d7ca0dbba1bacc6ae0479970405b6f6e->enter($__internal_0a36c9e3d7faa7fb78ffa662ad9a6556d7ca0dbba1bacc6ae0479970405b6f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32c54479199e47ef141c9f24db4a9e3fd6306e5f4895808762f2b2615e718f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c54479199e47ef141c9f24db4a9e3fd6306e5f4895808762f2b2615e718f1d->enter($__internal_32c54479199e47ef141c9f24db4a9e3fd6306e5f4895808762f2b2615e718f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32c54479199e47ef141c9f24db4a9e3fd6306e5f4895808762f2b2615e718f1d->leave($__internal_32c54479199e47ef141c9f24db4a9e3fd6306e5f4895808762f2b2615e718f1d_prof);

        
        $__internal_0a36c9e3d7faa7fb78ffa662ad9a6556d7ca0dbba1bacc6ae0479970405b6f6e->leave($__internal_0a36c9e3d7faa7fb78ffa662ad9a6556d7ca0dbba1bacc6ae0479970405b6f6e_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b277a43e541962d3d83bf09e3a246ce44b95f842d6b50ddf7434a3e9eb909420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b277a43e541962d3d83bf09e3a246ce44b95f842d6b50ddf7434a3e9eb909420->enter($__internal_b277a43e541962d3d83bf09e3a246ce44b95f842d6b50ddf7434a3e9eb909420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a7c278340401105b17b903981a244284f28e61c333a44ecc0c1b814f59c763fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c278340401105b17b903981a244284f28e61c333a44ecc0c1b814f59c763fd->enter($__internal_a7c278340401105b17b903981a244284f28e61c333a44ecc0c1b814f59c763fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a7c278340401105b17b903981a244284f28e61c333a44ecc0c1b814f59c763fd->leave($__internal_a7c278340401105b17b903981a244284f28e61c333a44ecc0c1b814f59c763fd_prof);

        
        $__internal_b277a43e541962d3d83bf09e3a246ce44b95f842d6b50ddf7434a3e9eb909420->leave($__internal_b277a43e541962d3d83bf09e3a246ce44b95f842d6b50ddf7434a3e9eb909420_prof);

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
        return array (  194 => 58,  177 => 52,  160 => 16,  142 => 12,  130 => 59,  128 => 58,  121 => 53,  118 => 52,  109 => 50,  105 => 49,  102 => 48,  93 => 46,  89 => 45,  77 => 36,  70 => 32,  51 => 17,  49 => 16,  42 => 12,  29 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\"
                    aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ path('todo') }}\">Todo list</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('create') }}\">Create</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% for flash_message in app.session.flashbag.get('notice') %}
            <div class=\"alert alert-success\">{{ flash_message }}</div>
        {% endfor %}
        <div class=\"col-md-12\">
            {% for flash_message in app.session.flashbag.get('error') %}
            <div class=\"alert alert-danger\">{{ flash_message }}</div>
        {% endfor %}
        {% block body %}{% endblock %}

    </div>
</div>

<!-- /.container -->
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/app/Resources/views/base.html.twig");
    }
}
