<?php

/* @Dashboard/Default/main.html.twig */
class __TwigTemplate_c08e5887b152ed0219e7a849ed62a86f3f04c9fa771f5d6f5a3c61470c2a9f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_copy.html.twig", "@Dashboard/Default/main.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_copy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_250daad7e65359eb4a3be86dd3c95c8bd304d848e8a540b077015ae89e72c097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250daad7e65359eb4a3be86dd3c95c8bd304d848e8a540b077015ae89e72c097->enter($__internal_250daad7e65359eb4a3be86dd3c95c8bd304d848e8a540b077015ae89e72c097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/main.html.twig"));

        $__internal_a9e037c5455c68d18276c69b0ad940baef88b50c9ad403737814ebc8d2bc5279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e037c5455c68d18276c69b0ad940baef88b50c9ad403737814ebc8d2bc5279->enter($__internal_a9e037c5455c68d18276c69b0ad940baef88b50c9ad403737814ebc8d2bc5279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250daad7e65359eb4a3be86dd3c95c8bd304d848e8a540b077015ae89e72c097->leave($__internal_250daad7e65359eb4a3be86dd3c95c8bd304d848e8a540b077015ae89e72c097_prof);

        
        $__internal_a9e037c5455c68d18276c69b0ad940baef88b50c9ad403737814ebc8d2bc5279->leave($__internal_a9e037c5455c68d18276c69b0ad940baef88b50c9ad403737814ebc8d2bc5279_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a10762a43fcbd738846b03ebb6068f25661c4b7f60d208581691220eefc4b51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10762a43fcbd738846b03ebb6068f25661c4b7f60d208581691220eefc4b51a->enter($__internal_a10762a43fcbd738846b03ebb6068f25661c4b7f60d208581691220eefc4b51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc0202e12cb095062d09b57b2e305c23e85997be41e405312ac7b040b4bf6589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0202e12cb095062d09b57b2e305c23e85997be41e405312ac7b040b4bf6589->enter($__internal_cc0202e12cb095062d09b57b2e305c23e85997be41e405312ac7b040b4bf6589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "DashboardBundle:Dashboard:index.html.twig", array("messages" => ($context["messages"] ?? $this->getContext($context, "messages"))));
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "DashboardBundle:Dashboard:message.html.twig", array("form" => ($context["form"] ?? $this->getContext($context, "form"))));
        echo "
";
        
        $__internal_cc0202e12cb095062d09b57b2e305c23e85997be41e405312ac7b040b4bf6589->leave($__internal_cc0202e12cb095062d09b57b2e305c23e85997be41e405312ac7b040b4bf6589_prof);

        
        $__internal_a10762a43fcbd738846b03ebb6068f25661c4b7f60d208581691220eefc4b51a->leave($__internal_a10762a43fcbd738846b03ebb6068f25661c4b7f60d208581691220eefc4b51a_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Default/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base_copy.html.twig\" %}

{% block body %}
    {{ include('DashboardBundle:Dashboard:index.html.twig' , {'messages': messages})}}
    {{ include('DashboardBundle:Dashboard:message.html.twig', {'form': form}) }}
{% endblock %}
", "@Dashboard/Default/main.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/DashboardBundle/Resources/views/Default/main.html.twig");
    }
}
