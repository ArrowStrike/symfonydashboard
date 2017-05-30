<?php

/* ::base_copy.html.twig */
class __TwigTemplate_27d32e48999cb723389415aca2dd8511c7650e7400e4191e6a0383d1475b3cdf extends Twig_Template
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
        $__internal_116d6152239de7e9a3e94f33a03e943b1ad6b8485a03b96a0082495ada10d888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116d6152239de7e9a3e94f33a03e943b1ad6b8485a03b96a0082495ada10d888->enter($__internal_116d6152239de7e9a3e94f33a03e943b1ad6b8485a03b96a0082495ada10d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_copy.html.twig"));

        $__internal_243d5360a8868197ec5d242bf0349e3bb60414a235d56389d95003e2217a0ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243d5360a8868197ec5d242bf0349e3bb60414a235d56389d95003e2217a0ba4->enter($__internal_243d5360a8868197ec5d242bf0349e3bb60414a235d56389d95003e2217a0ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base_copy.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\">List of messages</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addAction");
        echo "\">Add new Message</a></li>
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
            echo "                <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
        <div class=\"col-md-12\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </div>
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</div>

    <!-- /.container -->
    ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
</html>
";
        
        $__internal_116d6152239de7e9a3e94f33a03e943b1ad6b8485a03b96a0082495ada10d888->leave($__internal_116d6152239de7e9a3e94f33a03e943b1ad6b8485a03b96a0082495ada10d888_prof);

        
        $__internal_243d5360a8868197ec5d242bf0349e3bb60414a235d56389d95003e2217a0ba4->leave($__internal_243d5360a8868197ec5d242bf0349e3bb60414a235d56389d95003e2217a0ba4_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e5bd9a470170b7c2b98f40f38143e74e57d0e5ef41db91bbc33a2ac24931bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5bd9a470170b7c2b98f40f38143e74e57d0e5ef41db91bbc33a2ac24931bbd->enter($__internal_2e5bd9a470170b7c2b98f40f38143e74e57d0e5ef41db91bbc33a2ac24931bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1279769c7d1cdfd15140111931d1902bdc90d5471938642c2d3a061beed14a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1279769c7d1cdfd15140111931d1902bdc90d5471938642c2d3a061beed14a70->enter($__internal_1279769c7d1cdfd15140111931d1902bdc90d5471938642c2d3a061beed14a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1279769c7d1cdfd15140111931d1902bdc90d5471938642c2d3a061beed14a70->leave($__internal_1279769c7d1cdfd15140111931d1902bdc90d5471938642c2d3a061beed14a70_prof);

        
        $__internal_2e5bd9a470170b7c2b98f40f38143e74e57d0e5ef41db91bbc33a2ac24931bbd->leave($__internal_2e5bd9a470170b7c2b98f40f38143e74e57d0e5ef41db91bbc33a2ac24931bbd_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9a8e0c2e7955931ebe6dac3c0ec12d3ac2629f3dc8ed3e205d3364d076aad74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a8e0c2e7955931ebe6dac3c0ec12d3ac2629f3dc8ed3e205d3364d076aad74->enter($__internal_a9a8e0c2e7955931ebe6dac3c0ec12d3ac2629f3dc8ed3e205d3364d076aad74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_69d32713db854766ded439fff53a4e65989cf731f437e06a5decb543de99ff39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d32713db854766ded439fff53a4e65989cf731f437e06a5decb543de99ff39->enter($__internal_69d32713db854766ded439fff53a4e65989cf731f437e06a5decb543de99ff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_69d32713db854766ded439fff53a4e65989cf731f437e06a5decb543de99ff39->leave($__internal_69d32713db854766ded439fff53a4e65989cf731f437e06a5decb543de99ff39_prof);

        
        $__internal_a9a8e0c2e7955931ebe6dac3c0ec12d3ac2629f3dc8ed3e205d3364d076aad74->leave($__internal_a9a8e0c2e7955931ebe6dac3c0ec12d3ac2629f3dc8ed3e205d3364d076aad74_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_21a18b32e51ff73f07ea1960fc637353c40a06548c2d8de23c130034ec405b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a18b32e51ff73f07ea1960fc637353c40a06548c2d8de23c130034ec405b7b->enter($__internal_21a18b32e51ff73f07ea1960fc637353c40a06548c2d8de23c130034ec405b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91fc94f6a0274676260465f54b044186544b9f7631c010b9990b21cdbd6daec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fc94f6a0274676260465f54b044186544b9f7631c010b9990b21cdbd6daec2->enter($__internal_91fc94f6a0274676260465f54b044186544b9f7631c010b9990b21cdbd6daec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91fc94f6a0274676260465f54b044186544b9f7631c010b9990b21cdbd6daec2->leave($__internal_91fc94f6a0274676260465f54b044186544b9f7631c010b9990b21cdbd6daec2_prof);

        
        $__internal_21a18b32e51ff73f07ea1960fc637353c40a06548c2d8de23c130034ec405b7b->leave($__internal_21a18b32e51ff73f07ea1960fc637353c40a06548c2d8de23c130034ec405b7b_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a31c207559a4dc141246a6d7b9321c846c48002812ef9a6efa3759d549f4534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a31c207559a4dc141246a6d7b9321c846c48002812ef9a6efa3759d549f4534->enter($__internal_0a31c207559a4dc141246a6d7b9321c846c48002812ef9a6efa3759d549f4534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_291e5b061c346abe69e159ac8ef215934644c0a4d2b37f6cd9877426f5762ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291e5b061c346abe69e159ac8ef215934644c0a4d2b37f6cd9877426f5762ae8->enter($__internal_291e5b061c346abe69e159ac8ef215934644c0a4d2b37f6cd9877426f5762ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_291e5b061c346abe69e159ac8ef215934644c0a4d2b37f6cd9877426f5762ae8->leave($__internal_291e5b061c346abe69e159ac8ef215934644c0a4d2b37f6cd9877426f5762ae8_prof);

        
        $__internal_0a31c207559a4dc141246a6d7b9321c846c48002812ef9a6efa3759d549f4534->leave($__internal_0a31c207559a4dc141246a6d7b9321c846c48002812ef9a6efa3759d549f4534_prof);

    }

    public function getTemplateName()
    {
        return "::base_copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 59,  179 => 55,  162 => 16,  144 => 12,  132 => 60,  130 => 59,  125 => 56,  123 => 55,  119 => 53,  110 => 51,  106 => 50,  102 => 48,  93 => 46,  89 => 45,  77 => 36,  70 => 32,  51 => 17,  49 => 16,  42 => 12,  29 => 1,);
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
            <a class=\"navbar-brand\" href=\"{{ path('list') }}\">List of messages</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('addAction') }}\">Add new Message</a></li>
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
        </div>
        <div class=\"col-md-12\">
            {% for flash_message in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger\">{{ flash_message }}</div>
            {% endfor %}
        </div>
    </div>
    {% block body %}{% endblock %}
</div>

    <!-- /.container -->
    {% block javascripts %}{% endblock %}
</body>
</html>
", "::base_copy.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/app/Resources/views/base_copy.html.twig");
    }
}
