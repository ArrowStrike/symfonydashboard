<?php

/* @Dashboard/Dashboard/message.html.twig */
class __TwigTemplate_b36934dc1bc06a91253894eb80e894c7a3c2a0cd013c6f9b8d9c07d2918d0b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dashboard/Default/base.html.twig", "@Dashboard/Dashboard/message.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Dashboard/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2fb857f4fac284fd27f55658b80cd3f570b6fc0ce5be6d9babe52540393cdfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fb857f4fac284fd27f55658b80cd3f570b6fc0ce5be6d9babe52540393cdfe->enter($__internal_f2fb857f4fac284fd27f55658b80cd3f570b6fc0ce5be6d9babe52540393cdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/message.html.twig"));

        $__internal_f1f1c38fcd6c1c7347261d5e6e64f09f1e539d1f4a5b42596e2350020bd13ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f1c38fcd6c1c7347261d5e6e64f09f1e539d1f4a5b42596e2350020bd13ed2->enter($__internal_f1f1c38fcd6c1c7347261d5e6e64f09f1e539d1f4a5b42596e2350020bd13ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2fb857f4fac284fd27f55658b80cd3f570b6fc0ce5be6d9babe52540393cdfe->leave($__internal_f2fb857f4fac284fd27f55658b80cd3f570b6fc0ce5be6d9babe52540393cdfe_prof);

        
        $__internal_f1f1c38fcd6c1c7347261d5e6e64f09f1e539d1f4a5b42596e2350020bd13ed2->leave($__internal_f1f1c38fcd6c1c7347261d5e6e64f09f1e539d1f4a5b42596e2350020bd13ed2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6c773509a8f5b3d0120a3483ffc1d302c0353e1f1a16655cf7256ddabb2b2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6c773509a8f5b3d0120a3483ffc1d302c0353e1f1a16655cf7256ddabb2b2e8->enter($__internal_d6c773509a8f5b3d0120a3483ffc1d302c0353e1f1a16655cf7256ddabb2b2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4ad8bcac6341a4b3950ba2483ce273dd937fe11a76954c7744143026c825533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ad8bcac6341a4b3950ba2483ce273dd937fe11a76954c7744143026c825533->enter($__internal_b4ad8bcac6341a4b3950ba2483ce273dd937fe11a76954c7744143026c825533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add message";
        
        $__internal_b4ad8bcac6341a4b3950ba2483ce273dd937fe11a76954c7744143026c825533->leave($__internal_b4ad8bcac6341a4b3950ba2483ce273dd937fe11a76954c7744143026c825533_prof);

        
        $__internal_d6c773509a8f5b3d0120a3483ffc1d302c0353e1f1a16655cf7256ddabb2b2e8->leave($__internal_d6c773509a8f5b3d0120a3483ffc1d302c0353e1f1a16655cf7256ddabb2b2e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bf2a8f09a236de5e1d7596d80df03bb24bf1b9870377e086ab1b7532925b20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf2a8f09a236de5e1d7596d80df03bb24bf1b9870377e086ab1b7532925b20e->enter($__internal_4bf2a8f09a236de5e1d7596d80df03bb24bf1b9870377e086ab1b7532925b20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed6e3055bcd60914ebb209aa839b2faa95b86f99edb717180c49741a7976d6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6e3055bcd60914ebb209aa839b2faa95b86f99edb717180c49741a7976d6fb->enter($__internal_ed6e3055bcd60914ebb209aa839b2faa95b86f99edb717180c49741a7976d6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"page-header\">Add Message</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_ed6e3055bcd60914ebb209aa839b2faa95b86f99edb717180c49741a7976d6fb->leave($__internal_ed6e3055bcd60914ebb209aa839b2faa95b86f99edb717180c49741a7976d6fb_prof);

        
        $__internal_4bf2a8f09a236de5e1d7596d80df03bb24bf1b9870377e086ab1b7532925b20e->leave($__internal_4bf2a8f09a236de5e1d7596d80df03bb24bf1b9870377e086ab1b7532925b20e_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Dashboard/Default/base.html.twig\" %}

{% block title %}Add message{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Add Message</h2>
    {{ form(form) }}
{% endblock %}
", "@Dashboard/Dashboard/message.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/DashboardBundle/Resources/views/Dashboard/message.html.twig");
    }
}
