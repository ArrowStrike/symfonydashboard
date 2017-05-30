<?php

/* @App/Todo/details.html.twig */
class __TwigTemplate_6beb41a9c650f490a859beba539ada75df5e11237a42d176d099e2e13ba866c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Todo/details.html.twig", 1);
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
        $__internal_97c1f8f4bb585b60a27b6732dc76f2a67ef273492c83da0fd7e8382783234e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c1f8f4bb585b60a27b6732dc76f2a67ef273492c83da0fd7e8382783234e2b->enter($__internal_97c1f8f4bb585b60a27b6732dc76f2a67ef273492c83da0fd7e8382783234e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/details.html.twig"));

        $__internal_1b63d325f14833efa098f4a5628bb26ec13e1c9bf6d5ad605a9c27c5fb07ca2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b63d325f14833efa098f4a5628bb26ec13e1c9bf6d5ad605a9c27c5fb07ca2e->enter($__internal_1b63d325f14833efa098f4a5628bb26ec13e1c9bf6d5ad605a9c27c5fb07ca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c1f8f4bb585b60a27b6732dc76f2a67ef273492c83da0fd7e8382783234e2b->leave($__internal_97c1f8f4bb585b60a27b6732dc76f2a67ef273492c83da0fd7e8382783234e2b_prof);

        
        $__internal_1b63d325f14833efa098f4a5628bb26ec13e1c9bf6d5ad605a9c27c5fb07ca2e->leave($__internal_1b63d325f14833efa098f4a5628bb26ec13e1c9bf6d5ad605a9c27c5fb07ca2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17b008008bb5db4f582f9813ba21b8360df453e74cdc067ccdad602e60e7e04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b008008bb5db4f582f9813ba21b8360df453e74cdc067ccdad602e60e7e04a->enter($__internal_17b008008bb5db4f582f9813ba21b8360df453e74cdc067ccdad602e60e7e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5f50183e0f3b31a78ae066309700bae3a786c8ebaccf46719b778a6e139a602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f50183e0f3b31a78ae066309700bae3a786c8ebaccf46719b778a6e139a602->enter($__internal_c5f50183e0f3b31a78ae066309700bae3a786c8ebaccf46719b778a6e139a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Todo:details";
        
        $__internal_c5f50183e0f3b31a78ae066309700bae3a786c8ebaccf46719b778a6e139a602->leave($__internal_c5f50183e0f3b31a78ae066309700bae3a786c8ebaccf46719b778a6e139a602_prof);

        
        $__internal_17b008008bb5db4f582f9813ba21b8360df453e74cdc067ccdad602e60e7e04a->leave($__internal_17b008008bb5db4f582f9813ba21b8360df453e74cdc067ccdad602e60e7e04a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdb6ad17d7997f263bd671ae5a843045714c913b4aed20107d78a34f24fe6ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb6ad17d7997f263bd671ae5a843045714c913b4aed20107d78a34f24fe6ac5->enter($__internal_cdb6ad17d7997f263bd671ae5a843045714c913b4aed20107d78a34f24fe6ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f0b46fffd877cf6f2c0aa8034a8ad314f4b8faebb73c8c98217cfbd5c6c16d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0b46fffd877cf6f2c0aa8034a8ad314f4b8faebb73c8c98217cfbd5c6c16d3->enter($__internal_7f0b46fffd877cf6f2c0aa8034a8ad314f4b8faebb73c8c98217cfbd5c6c16d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo");
        echo "\">Back To Todos</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: <strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>
    <p>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
    </p>
";
        
        $__internal_7f0b46fffd877cf6f2c0aa8034a8ad314f4b8faebb73c8c98217cfbd5c6c16d3->leave($__internal_7f0b46fffd877cf6f2c0aa8034a8ad314f4b8faebb73c8c98217cfbd5c6c16d3_prof);

        
        $__internal_cdb6ad17d7997f263bd671ae5a843045714c913b4aed20107d78a34f24fe6ac5->leave($__internal_cdb6ad17d7997f263bd671ae5a843045714c913b4aed20107d78a34f24fe6ac5_prof);

    }

    public function getTemplateName()
    {
        return "@App/Todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  87 => 12,  83 => 11,  79 => 10,  74 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Todo:details{% endblock %}

{% block body %}
<a class=\"btn btn-default\" href=\"{{ path('todo') }}\">Back To Todos</a>
    <hr>
    <h2 class=\"page-header\">{{ todo.name }}</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: {{ todo.category }}</li>
        <li class=\"list-group-item\">Priority: {{ todo.priority }}</li>
        <li class=\"list-group-item\">Due: <strong>{{ todo.dueDate|date('F j, Y, g:i a')  }}</strong></li>
    </ul>
    <p>
        {{ todo.description }}
    </p>
{% endblock %}
", "@App/Todo/details.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/AppBundle/Resources/views/Todo/details.html.twig");
    }
}
