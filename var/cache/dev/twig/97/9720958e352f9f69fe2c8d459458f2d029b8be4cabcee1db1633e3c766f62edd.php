<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_345a758b07d2e7ff4d6f4e932e7f8d4dcda265d2379f66586b3bc41b3766055e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345a758b07d2e7ff4d6f4e932e7f8d4dcda265d2379f66586b3bc41b3766055e->enter($__internal_345a758b07d2e7ff4d6f4e932e7f8d4dcda265d2379f66586b3bc41b3766055e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_884a55f62bdc5e41dfd00fa1f06c3a0ff53c325bbac7e523c013bfefbaebdfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884a55f62bdc5e41dfd00fa1f06c3a0ff53c325bbac7e523c013bfefbaebdfca->enter($__internal_884a55f62bdc5e41dfd00fa1f06c3a0ff53c325bbac7e523c013bfefbaebdfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345a758b07d2e7ff4d6f4e932e7f8d4dcda265d2379f66586b3bc41b3766055e->leave($__internal_345a758b07d2e7ff4d6f4e932e7f8d4dcda265d2379f66586b3bc41b3766055e_prof);

        
        $__internal_884a55f62bdc5e41dfd00fa1f06c3a0ff53c325bbac7e523c013bfefbaebdfca->leave($__internal_884a55f62bdc5e41dfd00fa1f06c3a0ff53c325bbac7e523c013bfefbaebdfca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fae9c57fe207585cb3482d0e5feb90d2596759046ffcfe8a52fe1bb6819b4ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae9c57fe207585cb3482d0e5feb90d2596759046ffcfe8a52fe1bb6819b4ae9->enter($__internal_fae9c57fe207585cb3482d0e5feb90d2596759046ffcfe8a52fe1bb6819b4ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43dc3eb1d6c2061f727ccf4161b394c79757ea7622ff5dc45f57af35c0be65a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dc3eb1d6c2061f727ccf4161b394c79757ea7622ff5dc45f57af35c0be65a6->enter($__internal_43dc3eb1d6c2061f727ccf4161b394c79757ea7622ff5dc45f57af35c0be65a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_43dc3eb1d6c2061f727ccf4161b394c79757ea7622ff5dc45f57af35c0be65a6->leave($__internal_43dc3eb1d6c2061f727ccf4161b394c79757ea7622ff5dc45f57af35c0be65a6_prof);

        
        $__internal_fae9c57fe207585cb3482d0e5feb90d2596759046ffcfe8a52fe1bb6819b4ae9->leave($__internal_fae9c57fe207585cb3482d0e5feb90d2596759046ffcfe8a52fe1bb6819b4ae9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_706a87ea4a009a6b6df7af676fd9fdf1335ecd223848ccdc1d8abd77cf71166b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706a87ea4a009a6b6df7af676fd9fdf1335ecd223848ccdc1d8abd77cf71166b->enter($__internal_706a87ea4a009a6b6df7af676fd9fdf1335ecd223848ccdc1d8abd77cf71166b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4da827c2444466ce6dcb58caf078724992fe538e6acaa72de8406f103c412adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da827c2444466ce6dcb58caf078724992fe538e6acaa72de8406f103c412adf->enter($__internal_4da827c2444466ce6dcb58caf078724992fe538e6acaa72de8406f103c412adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4da827c2444466ce6dcb58caf078724992fe538e6acaa72de8406f103c412adf->leave($__internal_4da827c2444466ce6dcb58caf078724992fe538e6acaa72de8406f103c412adf_prof);

        
        $__internal_706a87ea4a009a6b6df7af676fd9fdf1335ecd223848ccdc1d8abd77cf71166b->leave($__internal_706a87ea4a009a6b6df7af676fd9fdf1335ecd223848ccdc1d8abd77cf71166b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_377521384f6a7afaa942c27dd4116efcfc2b5e423cd5b659ec1ee6e65dc28d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377521384f6a7afaa942c27dd4116efcfc2b5e423cd5b659ec1ee6e65dc28d12->enter($__internal_377521384f6a7afaa942c27dd4116efcfc2b5e423cd5b659ec1ee6e65dc28d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10db6f6badf9655892f6a453bfd7ae8be3a7968cce5488cff4a9880f009e75d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10db6f6badf9655892f6a453bfd7ae8be3a7968cce5488cff4a9880f009e75d7->enter($__internal_10db6f6badf9655892f6a453bfd7ae8be3a7968cce5488cff4a9880f009e75d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_10db6f6badf9655892f6a453bfd7ae8be3a7968cce5488cff4a9880f009e75d7->leave($__internal_10db6f6badf9655892f6a453bfd7ae8be3a7968cce5488cff4a9880f009e75d7_prof);

        
        $__internal_377521384f6a7afaa942c27dd4116efcfc2b5e423cd5b659ec1ee6e65dc28d12->leave($__internal_377521384f6a7afaa942c27dd4116efcfc2b5e423cd5b659ec1ee6e65dc28d12_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
