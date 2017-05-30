<?php

/* @Dashboard/Dashboard/index.html.twig */
class __TwigTemplate_b0f95580ce8c0635e5e033e586b6e6862372c07d3dfe22f4adbbb90665fa7a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dashboard/Default/base.html.twig", "@Dashboard/Dashboard/index.html.twig", 1);
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
        $__internal_9a69e6b3a4200ac5c63c2ca477d1f2c799166016e74c8307e5ad6a378eb43562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a69e6b3a4200ac5c63c2ca477d1f2c799166016e74c8307e5ad6a378eb43562->enter($__internal_9a69e6b3a4200ac5c63c2ca477d1f2c799166016e74c8307e5ad6a378eb43562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/index.html.twig"));

        $__internal_4d45be803e886f56b4802c650c0afce735419e76fe462aa46f81338644144422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d45be803e886f56b4802c650c0afce735419e76fe462aa46f81338644144422->enter($__internal_4d45be803e886f56b4802c650c0afce735419e76fe462aa46f81338644144422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Dashboard/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a69e6b3a4200ac5c63c2ca477d1f2c799166016e74c8307e5ad6a378eb43562->leave($__internal_9a69e6b3a4200ac5c63c2ca477d1f2c799166016e74c8307e5ad6a378eb43562_prof);

        
        $__internal_4d45be803e886f56b4802c650c0afce735419e76fe462aa46f81338644144422->leave($__internal_4d45be803e886f56b4802c650c0afce735419e76fe462aa46f81338644144422_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb2803aa6dea2e92f74fcacbcc84321f68590fc73fa9111823c1425a9f749c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2803aa6dea2e92f74fcacbcc84321f68590fc73fa9111823c1425a9f749c96->enter($__internal_fb2803aa6dea2e92f74fcacbcc84321f68590fc73fa9111823c1425a9f749c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25402a7757a692f1a6f30f06e49f8761a8d2c23a9815503f2f5e22cbd971aee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25402a7757a692f1a6f30f06e49f8761a8d2c23a9815503f2f5e22cbd971aee7->enter($__internal_25402a7757a692f1a6f30f06e49f8761a8d2c23a9815503f2f5e22cbd971aee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of messages";
        
        $__internal_25402a7757a692f1a6f30f06e49f8761a8d2c23a9815503f2f5e22cbd971aee7->leave($__internal_25402a7757a692f1a6f30f06e49f8761a8d2c23a9815503f2f5e22cbd971aee7_prof);

        
        $__internal_fb2803aa6dea2e92f74fcacbcc84321f68590fc73fa9111823c1425a9f749c96->leave($__internal_fb2803aa6dea2e92f74fcacbcc84321f68590fc73fa9111823c1425a9f749c96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0659aeaa58939d6f73447f06f7d314fd5c230db216c79729c8506c5c610dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0659aeaa58939d6f73447f06f7d314fd5c230db216c79729c8506c5c610dd0->enter($__internal_cb0659aeaa58939d6f73447f06f7d314fd5c230db216c79729c8506c5c610dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ceecde84fdf2201e502c5a31f333447c5facdd217500c1a800aa395196edb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceecde84fdf2201e502c5a31f333447c5facdd217500c1a800aa395196edb6d->enter($__internal_9ceecde84fdf2201e502c5a31f333447c5facdd217500c1a800aa395196edb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"page-header\">List of messages</h2>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Username</th>
            <th>Message</th>
            <th>Created at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <tr>
                <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
                <th>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteAction", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a></th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_9ceecde84fdf2201e502c5a31f333447c5facdd217500c1a800aa395196edb6d->leave($__internal_9ceecde84fdf2201e502c5a31f333447c5facdd217500c1a800aa395196edb6d_prof);

        
        $__internal_cb0659aeaa58939d6f73447f06f7d314fd5c230db216c79729c8506c5c610dd0->leave($__internal_cb0659aeaa58939d6f73447f06f7d314fd5c230db216c79729c8506c5c610dd0_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  87 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}List of messages{% endblock %}

{% block body %}
    <h2 class=\"page-header\">List of messages</h2>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Username</th>
            <th>Message</th>
            <th>Created at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <th scope=\"row\">{{ message.id }}</th>
                <td>{{ message.email }}</td>
                <td>{{ message.username }}</td>
                <td>{{ message.message }}</td>
                <td>{{ message.createdAt|date('F j, Y, g:i a') }}</td>
                <th>
                    <a href=\"{{ path('deleteAction',{'id': message.id}) }}\" class=\"btn btn-danger\">Delete</a></th>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "@Dashboard/Dashboard/index.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
