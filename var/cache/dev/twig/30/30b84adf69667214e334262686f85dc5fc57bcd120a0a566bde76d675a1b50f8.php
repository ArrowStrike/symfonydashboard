<?php

/* @Dashboard/Default/base.html.twig */
class __TwigTemplate_ad7fa8bd82957b77c136310e7eb022ff17a421526a5fb2452b4ff31939d77199 extends Twig_Template
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
        $__internal_f8b2c35b0701617ea9575a879d8beb5c24a642a5673f79378a27d7afa650e018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b2c35b0701617ea9575a879d8beb5c24a642a5673f79378a27d7afa650e018->enter($__internal_f8b2c35b0701617ea9575a879d8beb5c24a642a5673f79378a27d7afa650e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/base.html.twig"));

        $__internal_fd49e1d22d80a6208655999f47dacca9f1df2338b65103195152e3942b3a546b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd49e1d22d80a6208655999f47dacca9f1df2338b65103195152e3942b3a546b->enter($__internal_fd49e1d22d80a6208655999f47dacca9f1df2338b65103195152e3942b3a546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/base.html.twig"));

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
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 49
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
    </div>
    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "</div>

    <!-- /.container -->
    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "</body>
</html>
";
        
        $__internal_f8b2c35b0701617ea9575a879d8beb5c24a642a5673f79378a27d7afa650e018->leave($__internal_f8b2c35b0701617ea9575a879d8beb5c24a642a5673f79378a27d7afa650e018_prof);

        
        $__internal_fd49e1d22d80a6208655999f47dacca9f1df2338b65103195152e3942b3a546b->leave($__internal_fd49e1d22d80a6208655999f47dacca9f1df2338b65103195152e3942b3a546b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef4105c834e9363cbec2c18a1f467258b042bc77f3d68329d24795648ea524b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4105c834e9363cbec2c18a1f467258b042bc77f3d68329d24795648ea524b2->enter($__internal_ef4105c834e9363cbec2c18a1f467258b042bc77f3d68329d24795648ea524b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6accd4adebd7e963bb1333b5af1fcb5c23c7911cfb698a46a98c1d62f1228c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6accd4adebd7e963bb1333b5af1fcb5c23c7911cfb698a46a98c1d62f1228c51->enter($__internal_6accd4adebd7e963bb1333b5af1fcb5c23c7911cfb698a46a98c1d62f1228c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6accd4adebd7e963bb1333b5af1fcb5c23c7911cfb698a46a98c1d62f1228c51->leave($__internal_6accd4adebd7e963bb1333b5af1fcb5c23c7911cfb698a46a98c1d62f1228c51_prof);

        
        $__internal_ef4105c834e9363cbec2c18a1f467258b042bc77f3d68329d24795648ea524b2->leave($__internal_ef4105c834e9363cbec2c18a1f467258b042bc77f3d68329d24795648ea524b2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00914588cc332abd8a69703777a46e01942212b60ac364cb0855deefc2e5f165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00914588cc332abd8a69703777a46e01942212b60ac364cb0855deefc2e5f165->enter($__internal_00914588cc332abd8a69703777a46e01942212b60ac364cb0855deefc2e5f165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d12a9387866cbe17cf3585a8df178266a24d41e6060cb19e24eef95a52e007e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12a9387866cbe17cf3585a8df178266a24d41e6060cb19e24eef95a52e007e8->enter($__internal_d12a9387866cbe17cf3585a8df178266a24d41e6060cb19e24eef95a52e007e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d12a9387866cbe17cf3585a8df178266a24d41e6060cb19e24eef95a52e007e8->leave($__internal_d12a9387866cbe17cf3585a8df178266a24d41e6060cb19e24eef95a52e007e8_prof);

        
        $__internal_00914588cc332abd8a69703777a46e01942212b60ac364cb0855deefc2e5f165->leave($__internal_00914588cc332abd8a69703777a46e01942212b60ac364cb0855deefc2e5f165_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2eabb584baface1f96f692ea9f814ebd43fa11e752809449240e316e41774b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eabb584baface1f96f692ea9f814ebd43fa11e752809449240e316e41774b5->enter($__internal_a2eabb584baface1f96f692ea9f814ebd43fa11e752809449240e316e41774b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80fb41c1bea2f7c6c6d70faa049e78d4948b134858f8c7ee42bf21c47eb51ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fb41c1bea2f7c6c6d70faa049e78d4948b134858f8c7ee42bf21c47eb51ea4->enter($__internal_80fb41c1bea2f7c6c6d70faa049e78d4948b134858f8c7ee42bf21c47eb51ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80fb41c1bea2f7c6c6d70faa049e78d4948b134858f8c7ee42bf21c47eb51ea4->leave($__internal_80fb41c1bea2f7c6c6d70faa049e78d4948b134858f8c7ee42bf21c47eb51ea4_prof);

        
        $__internal_a2eabb584baface1f96f692ea9f814ebd43fa11e752809449240e316e41774b5->leave($__internal_a2eabb584baface1f96f692ea9f814ebd43fa11e752809449240e316e41774b5_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6fb17f19272f1607bba613872e1fd58bdfa1cc1b45aca3e81c69600e1990209f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb17f19272f1607bba613872e1fd58bdfa1cc1b45aca3e81c69600e1990209f->enter($__internal_6fb17f19272f1607bba613872e1fd58bdfa1cc1b45aca3e81c69600e1990209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_082b4c36339be73d4270f5ee58362dac4e7096642b22927936ff65f7b9857992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082b4c36339be73d4270f5ee58362dac4e7096642b22927936ff65f7b9857992->enter($__internal_082b4c36339be73d4270f5ee58362dac4e7096642b22927936ff65f7b9857992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_082b4c36339be73d4270f5ee58362dac4e7096642b22927936ff65f7b9857992->leave($__internal_082b4c36339be73d4270f5ee58362dac4e7096642b22927936ff65f7b9857992_prof);

        
        $__internal_6fb17f19272f1607bba613872e1fd58bdfa1cc1b45aca3e81c69600e1990209f->leave($__internal_6fb17f19272f1607bba613872e1fd58bdfa1cc1b45aca3e81c69600e1990209f_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 57,  176 => 53,  159 => 16,  141 => 12,  129 => 58,  127 => 57,  122 => 54,  120 => 53,  116 => 51,  107 => 49,  102 => 48,  93 => 46,  89 => 45,  77 => 36,  70 => 32,  51 => 17,  49 => 16,  42 => 12,  29 => 1,);
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
", "@Dashboard/Default/base.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/DashboardBundle/Resources/views/Default/base.html.twig");
    }
}
