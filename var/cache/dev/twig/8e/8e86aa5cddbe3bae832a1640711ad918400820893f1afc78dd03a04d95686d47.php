<?php

/* DashboardBundle:Test:test.html.twig */
class __TwigTemplate_25e00dd5380b35f6efd702c935fa71bd27fcbe265e24621ed4566a04e53d158b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DashboardBundle:Test:test.html.twig", 1);
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
        $__internal_c7307ab89c29faf939aa31248b26974dbf6e8d43daf2a9a2239fdced095fc62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7307ab89c29faf939aa31248b26974dbf6e8d43daf2a9a2239fdced095fc62d->enter($__internal_c7307ab89c29faf939aa31248b26974dbf6e8d43daf2a9a2239fdced095fc62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Test:test.html.twig"));

        $__internal_f74996bd54dd1ae45c435d482a8c794911dee3c65ecb335ed364966f1d50e77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74996bd54dd1ae45c435d482a8c794911dee3c65ecb335ed364966f1d50e77a->enter($__internal_f74996bd54dd1ae45c435d482a8c794911dee3c65ecb335ed364966f1d50e77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DashboardBundle:Test:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7307ab89c29faf939aa31248b26974dbf6e8d43daf2a9a2239fdced095fc62d->leave($__internal_c7307ab89c29faf939aa31248b26974dbf6e8d43daf2a9a2239fdced095fc62d_prof);

        
        $__internal_f74996bd54dd1ae45c435d482a8c794911dee3c65ecb335ed364966f1d50e77a->leave($__internal_f74996bd54dd1ae45c435d482a8c794911dee3c65ecb335ed364966f1d50e77a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff86c3d2fc445702e320751423e878748f8db5174c9eb81ef2c1235623e79145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff86c3d2fc445702e320751423e878748f8db5174c9eb81ef2c1235623e79145->enter($__internal_ff86c3d2fc445702e320751423e878748f8db5174c9eb81ef2c1235623e79145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_071d2051a1974cb3f47ebab31b664c014ccfe99f21cef307683597555c591fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071d2051a1974cb3f47ebab31b664c014ccfe99f21cef307683597555c591fec->enter($__internal_071d2051a1974cb3f47ebab31b664c014ccfe99f21cef307683597555c591fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DashboardBundle:Test:test";
        
        $__internal_071d2051a1974cb3f47ebab31b664c014ccfe99f21cef307683597555c591fec->leave($__internal_071d2051a1974cb3f47ebab31b664c014ccfe99f21cef307683597555c591fec_prof);

        
        $__internal_ff86c3d2fc445702e320751423e878748f8db5174c9eb81ef2c1235623e79145->leave($__internal_ff86c3d2fc445702e320751423e878748f8db5174c9eb81ef2c1235623e79145_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a5721427ab5d2211f14eea879f598809092a3e75abc531dd502491fb57ae6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5721427ab5d2211f14eea879f598809092a3e75abc531dd502491fb57ae6a4->enter($__internal_3a5721427ab5d2211f14eea879f598809092a3e75abc531dd502491fb57ae6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_061f075fe639714e947ce9f948503ec49ebc64dbe9a9a019cc7649b2660cbb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061f075fe639714e947ce9f948503ec49ebc64dbe9a9a019cc7649b2660cbb8f->enter($__internal_061f075fe639714e947ce9f948503ec49ebc64dbe9a9a019cc7649b2660cbb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Test:test page</h1>
";
        
        $__internal_061f075fe639714e947ce9f948503ec49ebc64dbe9a9a019cc7649b2660cbb8f->leave($__internal_061f075fe639714e947ce9f948503ec49ebc64dbe9a9a019cc7649b2660cbb8f_prof);

        
        $__internal_3a5721427ab5d2211f14eea879f598809092a3e75abc531dd502491fb57ae6a4->leave($__internal_3a5721427ab5d2211f14eea879f598809092a3e75abc531dd502491fb57ae6a4_prof);

    }

    public function getTemplateName()
    {
        return "DashboardBundle:Test:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}DashboardBundle:Test:test{% endblock %}

{% block body %}
<h1>Welcome to the Test:test page</h1>
{% endblock %}
", "DashboardBundle:Test:test.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/DashboardBundle/Resources/views/Test/test.html.twig");
    }
}
