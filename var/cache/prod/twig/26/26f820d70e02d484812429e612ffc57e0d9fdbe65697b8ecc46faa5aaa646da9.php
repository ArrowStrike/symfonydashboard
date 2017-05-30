<?php

/* AppBundle:Todo:details.html.twig */
class __TwigTemplate_4d7e4b610665de253f7072d6d3ab27f9c8ec3a614a19c8fb20ea08329551b198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Todo:details.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "AppBundle:Todo:details";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("todo");
        echo "\">Back To Todos</a>
    <hr>
    <h2 class=\"page-header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? null), "category", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Priority: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? null), "priority", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Due: <strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["todo"] ?? null), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
    </ul>
    <p>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? null), "description", array()), "html", null, true);
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Todo:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 12,  53 => 11,  49 => 10,  44 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Todo:details.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/AppBundle/Resources/views/Todo/details.html.twig");
    }
}
