<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8233046663611070444a9ad421cf4d4df3f94eb85a9b1f9f65063d5d2d153f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8233046663611070444a9ad421cf4d4df3f94eb85a9b1f9f65063d5d2d153f9->enter($__internal_d8233046663611070444a9ad421cf4d4df3f94eb85a9b1f9f65063d5d2d153f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de13482674d18558e8ad1cb933d203c27958542296eb88a03c3e4b346e895f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de13482674d18558e8ad1cb933d203c27958542296eb88a03c3e4b346e895f6f->enter($__internal_de13482674d18558e8ad1cb933d203c27958542296eb88a03c3e4b346e895f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8233046663611070444a9ad421cf4d4df3f94eb85a9b1f9f65063d5d2d153f9->leave($__internal_d8233046663611070444a9ad421cf4d4df3f94eb85a9b1f9f65063d5d2d153f9_prof);

        
        $__internal_de13482674d18558e8ad1cb933d203c27958542296eb88a03c3e4b346e895f6f->leave($__internal_de13482674d18558e8ad1cb933d203c27958542296eb88a03c3e4b346e895f6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a3d5d98211eb21e20ef4dfccdfa77efa17f2556a51611e8a3eef1c9b3d469f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3d5d98211eb21e20ef4dfccdfa77efa17f2556a51611e8a3eef1c9b3d469f4->enter($__internal_9a3d5d98211eb21e20ef4dfccdfa77efa17f2556a51611e8a3eef1c9b3d469f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a71b2408d7a2837426a1f4a3f31a887c2d358d96cad0b1ea647d99a4b2153fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71b2408d7a2837426a1f4a3f31a887c2d358d96cad0b1ea647d99a4b2153fb0->enter($__internal_a71b2408d7a2837426a1f4a3f31a887c2d358d96cad0b1ea647d99a4b2153fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a71b2408d7a2837426a1f4a3f31a887c2d358d96cad0b1ea647d99a4b2153fb0->leave($__internal_a71b2408d7a2837426a1f4a3f31a887c2d358d96cad0b1ea647d99a4b2153fb0_prof);

        
        $__internal_9a3d5d98211eb21e20ef4dfccdfa77efa17f2556a51611e8a3eef1c9b3d469f4->leave($__internal_9a3d5d98211eb21e20ef4dfccdfa77efa17f2556a51611e8a3eef1c9b3d469f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a857644390c6293f55ca69882d5359fbb22c905341398abe8eafd70cbb0151b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a857644390c6293f55ca69882d5359fbb22c905341398abe8eafd70cbb0151b->enter($__internal_9a857644390c6293f55ca69882d5359fbb22c905341398abe8eafd70cbb0151b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a91c607e8fee815793a9276726c4d5d5bd35fef88d9bfd9c14f4ef83491133f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a91c607e8fee815793a9276726c4d5d5bd35fef88d9bfd9c14f4ef83491133f->enter($__internal_8a91c607e8fee815793a9276726c4d5d5bd35fef88d9bfd9c14f4ef83491133f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a91c607e8fee815793a9276726c4d5d5bd35fef88d9bfd9c14f4ef83491133f->leave($__internal_8a91c607e8fee815793a9276726c4d5d5bd35fef88d9bfd9c14f4ef83491133f_prof);

        
        $__internal_9a857644390c6293f55ca69882d5359fbb22c905341398abe8eafd70cbb0151b->leave($__internal_9a857644390c6293f55ca69882d5359fbb22c905341398abe8eafd70cbb0151b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_733461d797274b0570e434ee218f0f61501cd2e828f36f7058eadf36d5dfd6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733461d797274b0570e434ee218f0f61501cd2e828f36f7058eadf36d5dfd6b3->enter($__internal_733461d797274b0570e434ee218f0f61501cd2e828f36f7058eadf36d5dfd6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e8bb1266068b72fa29d978e3c75e510bf4f44a12e5ce4be983be2169852b73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8bb1266068b72fa29d978e3c75e510bf4f44a12e5ce4be983be2169852b73e->enter($__internal_9e8bb1266068b72fa29d978e3c75e510bf4f44a12e5ce4be983be2169852b73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e8bb1266068b72fa29d978e3c75e510bf4f44a12e5ce4be983be2169852b73e->leave($__internal_9e8bb1266068b72fa29d978e3c75e510bf4f44a12e5ce4be983be2169852b73e_prof);

        
        $__internal_733461d797274b0570e434ee218f0f61501cd2e828f36f7058eadf36d5dfd6b3->leave($__internal_733461d797274b0570e434ee218f0f61501cd2e828f36f7058eadf36d5dfd6b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
