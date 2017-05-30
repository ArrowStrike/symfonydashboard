<?php

/* @App/Todo/create.html.twig */
class __TwigTemplate_78652a11a42cd28da8904fec51efb84801517362bc9b3875cb66e2c98523975a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Todo/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e9e2fa2ac2145713278c5d56ae6d4c647043126a5250fa54c9c91b4a154051d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9e2fa2ac2145713278c5d56ae6d4c647043126a5250fa54c9c91b4a154051d->enter($__internal_8e9e2fa2ac2145713278c5d56ae6d4c647043126a5250fa54c9c91b4a154051d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/create.html.twig"));

        $__internal_131d437f872f57a2742043f66ccb3a6dee9da5b2f6ee8e48c30cdbccfb6c1dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131d437f872f57a2742043f66ccb3a6dee9da5b2f6ee8e48c30cdbccfb6c1dd7->enter($__internal_131d437f872f57a2742043f66ccb3a6dee9da5b2f6ee8e48c30cdbccfb6c1dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e9e2fa2ac2145713278c5d56ae6d4c647043126a5250fa54c9c91b4a154051d->leave($__internal_8e9e2fa2ac2145713278c5d56ae6d4c647043126a5250fa54c9c91b4a154051d_prof);

        
        $__internal_131d437f872f57a2742043f66ccb3a6dee9da5b2f6ee8e48c30cdbccfb6c1dd7->leave($__internal_131d437f872f57a2742043f66ccb3a6dee9da5b2f6ee8e48c30cdbccfb6c1dd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23f4d4e79b7b180b519f77dff707400dc455fc5a2f3d63e389acf26918c35f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f4d4e79b7b180b519f77dff707400dc455fc5a2f3d63e389acf26918c35f55->enter($__internal_23f4d4e79b7b180b519f77dff707400dc455fc5a2f3d63e389acf26918c35f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fee22360742d929e987fe77e765d35acf5ac29e07c6674263702bb6931ebe580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee22360742d929e987fe77e765d35acf5ac29e07c6674263702bb6931ebe580->enter($__internal_fee22360742d929e987fe77e765d35acf5ac29e07c6674263702bb6931ebe580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Todo:create";
        
        $__internal_fee22360742d929e987fe77e765d35acf5ac29e07c6674263702bb6931ebe580->leave($__internal_fee22360742d929e987fe77e765d35acf5ac29e07c6674263702bb6931ebe580_prof);

        
        $__internal_23f4d4e79b7b180b519f77dff707400dc455fc5a2f3d63e389acf26918c35f55->leave($__internal_23f4d4e79b7b180b519f77dff707400dc455fc5a2f3d63e389acf26918c35f55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f663b07098be247abe41b2da191680795ec0583f2fc3930298d33f974fe7e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f663b07098be247abe41b2da191680795ec0583f2fc3930298d33f974fe7e5d->enter($__internal_8f663b07098be247abe41b2da191680795ec0583f2fc3930298d33f974fe7e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dd3e6f6f2784fb9db25798165ad389a2bb5a84f2de0956868a6b052a836a6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3e6f6f2784fb9db25798165ad389a2bb5a84f2de0956868a6b052a836a6e0->enter($__internal_2dd3e6f6f2784fb9db25798165ad389a2bb5a84f2de0956868a6b052a836a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"page-header\">Add Todo</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2dd3e6f6f2784fb9db25798165ad389a2bb5a84f2de0956868a6b052a836a6e0->leave($__internal_2dd3e6f6f2784fb9db25798165ad389a2bb5a84f2de0956868a6b052a836a6e0_prof);

        
        $__internal_8f663b07098be247abe41b2da191680795ec0583f2fc3930298d33f974fe7e5d->leave($__internal_8f663b07098be247abe41b2da191680795ec0583f2fc3930298d33f974fe7e5d_prof);

    }

    public function getTemplateName()
    {
        return "@App/Todo/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Todo:create{% endblock %}

{% block body %}
<h2 class=\"page-header\">Add Todo</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "@App/Todo/create.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/AppBundle/Resources/views/Todo/create.html.twig");
    }
}
