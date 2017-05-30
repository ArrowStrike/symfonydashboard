<?php

/* @App/Todo/index.html.twig */
class __TwigTemplate_d0861eb65b8821b0c8389e7f2170d9916adb9bb6d61d021bce0bd2d240d37010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Todo/index.html.twig", 1);
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
        $__internal_9137bebe3b9187d64650f3cbf8bb29caab0c4bc6c3b39c9b2297fe98b831fd19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9137bebe3b9187d64650f3cbf8bb29caab0c4bc6c3b39c9b2297fe98b831fd19->enter($__internal_9137bebe3b9187d64650f3cbf8bb29caab0c4bc6c3b39c9b2297fe98b831fd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/index.html.twig"));

        $__internal_ca924fc4dcf77c6e0ed5120d575282b28daa310364623b2817b800886c40e08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca924fc4dcf77c6e0ed5120d575282b28daa310364623b2817b800886c40e08e->enter($__internal_ca924fc4dcf77c6e0ed5120d575282b28daa310364623b2817b800886c40e08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9137bebe3b9187d64650f3cbf8bb29caab0c4bc6c3b39c9b2297fe98b831fd19->leave($__internal_9137bebe3b9187d64650f3cbf8bb29caab0c4bc6c3b39c9b2297fe98b831fd19_prof);

        
        $__internal_ca924fc4dcf77c6e0ed5120d575282b28daa310364623b2817b800886c40e08e->leave($__internal_ca924fc4dcf77c6e0ed5120d575282b28daa310364623b2817b800886c40e08e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_668e186bd846c49b3145e08b548fcca5507df479c129b88aa69e2a1006d2d123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668e186bd846c49b3145e08b548fcca5507df479c129b88aa69e2a1006d2d123->enter($__internal_668e186bd846c49b3145e08b548fcca5507df479c129b88aa69e2a1006d2d123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3173faed61f326bcecab2319d9bab9597611fb3b94499fb70460edb8e889d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3173faed61f326bcecab2319d9bab9597611fb3b94499fb70460edb8e889d1a->enter($__internal_a3173faed61f326bcecab2319d9bab9597611fb3b94499fb70460edb8e889d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Todo:index";
        
        $__internal_a3173faed61f326bcecab2319d9bab9597611fb3b94499fb70460edb8e889d1a->leave($__internal_a3173faed61f326bcecab2319d9bab9597611fb3b94499fb70460edb8e889d1a_prof);

        
        $__internal_668e186bd846c49b3145e08b548fcca5507df479c129b88aa69e2a1006d2d123->leave($__internal_668e186bd846c49b3145e08b548fcca5507df479c129b88aa69e2a1006d2d123_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8fa5e569a388dd7943ff0b3fad14b9a5ec2c7e79022fa720657abb6b3e009cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fa5e569a388dd7943ff0b3fad14b9a5ec2c7e79022fa720657abb6b3e009cb->enter($__internal_d8fa5e569a388dd7943ff0b3fad14b9a5ec2c7e79022fa720657abb6b3e009cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cbf13343fde89313e198807acc5010881c09fd43cbe7082171f1f57bca2f373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbf13343fde89313e198807acc5010881c09fd43cbe7082171f1f57bca2f373->enter($__internal_7cbf13343fde89313e198807acc5010881c09fd43cbe7082171f1f57bca2f373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"page-header\">Latest Todos</h2>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Due date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 18
            echo "        <tr>
            <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
            <th><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details", array("id" => $this->getAttribute($context["todo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["todo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["todo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></th>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_7cbf13343fde89313e198807acc5010881c09fd43cbe7082171f1f57bca2f373->leave($__internal_7cbf13343fde89313e198807acc5010881c09fd43cbe7082171f1f57bca2f373_prof);

        
        $__internal_d8fa5e569a388dd7943ff0b3fad14b9a5ec2c7e79022fa720657abb6b3e009cb->leave($__internal_d8fa5e569a388dd7943ff0b3fad14b9a5ec2c7e79022fa720657abb6b3e009cb_prof);

    }

    public function getTemplateName()
    {
        return "@App/Todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  85 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Todo:index{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Latest Todos</h2>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Todo</th>
            <th>Due date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% for todo in todos %}
        <tr>
            <th scope=\"row\">{{ todo.id }}</th>
            <td>{{ todo.name }}</td>
            <td>{{ todo.dueDate|date('F j, Y, g:i a') }}</td>
            <th><a href=\"{{ path('details',{'id': todo.id}) }}\" class=\"btn btn-success\">View</a>
                <a href=\"{{ path('edit',{'id': todo.id})}}\" class=\"btn btn-default\">Edit</a>
                <a href=\"{{ path('delete',{'id': todo.id}) }}\" class=\"btn btn-danger\">Delete</a></th>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "@App/Todo/index.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/AppBundle/Resources/views/Todo/index.html.twig");
    }
}
