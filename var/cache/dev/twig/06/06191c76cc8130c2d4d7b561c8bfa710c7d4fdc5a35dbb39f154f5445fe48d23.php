<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36fbdd863916b401dde5f9e8839cc711e30c8ac50b1f35639d2f0d016fdae8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fbdd863916b401dde5f9e8839cc711e30c8ac50b1f35639d2f0d016fdae8d4->enter($__internal_36fbdd863916b401dde5f9e8839cc711e30c8ac50b1f35639d2f0d016fdae8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0f7dcff25d84d605036558a3f4c01d481e9f3488d29dc139fd9072864d99d359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7dcff25d84d605036558a3f4c01d481e9f3488d29dc139fd9072864d99d359->enter($__internal_0f7dcff25d84d605036558a3f4c01d481e9f3488d29dc139fd9072864d99d359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fbdd863916b401dde5f9e8839cc711e30c8ac50b1f35639d2f0d016fdae8d4->leave($__internal_36fbdd863916b401dde5f9e8839cc711e30c8ac50b1f35639d2f0d016fdae8d4_prof);

        
        $__internal_0f7dcff25d84d605036558a3f4c01d481e9f3488d29dc139fd9072864d99d359->leave($__internal_0f7dcff25d84d605036558a3f4c01d481e9f3488d29dc139fd9072864d99d359_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f290c027fce3ebacdc8300bdc8c0755e60da4c3a972662ec880006cec5fe9786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f290c027fce3ebacdc8300bdc8c0755e60da4c3a972662ec880006cec5fe9786->enter($__internal_f290c027fce3ebacdc8300bdc8c0755e60da4c3a972662ec880006cec5fe9786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f88f45419c9f2faede544725292f67dec9bd8b4aa46b04b6e70dbde10612056e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88f45419c9f2faede544725292f67dec9bd8b4aa46b04b6e70dbde10612056e->enter($__internal_f88f45419c9f2faede544725292f67dec9bd8b4aa46b04b6e70dbde10612056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f88f45419c9f2faede544725292f67dec9bd8b4aa46b04b6e70dbde10612056e->leave($__internal_f88f45419c9f2faede544725292f67dec9bd8b4aa46b04b6e70dbde10612056e_prof);

        
        $__internal_f290c027fce3ebacdc8300bdc8c0755e60da4c3a972662ec880006cec5fe9786->leave($__internal_f290c027fce3ebacdc8300bdc8c0755e60da4c3a972662ec880006cec5fe9786_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d445e586ca05cb852fed9371fd130aae9b17282b044a215b7b01c22bffafcb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d445e586ca05cb852fed9371fd130aae9b17282b044a215b7b01c22bffafcb97->enter($__internal_d445e586ca05cb852fed9371fd130aae9b17282b044a215b7b01c22bffafcb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbe784b4a501554e785ec7cc1b1f0d04c756818945d1a95650d80e0810621f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe784b4a501554e785ec7cc1b1f0d04c756818945d1a95650d80e0810621f7a->enter($__internal_bbe784b4a501554e785ec7cc1b1f0d04c756818945d1a95650d80e0810621f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbe784b4a501554e785ec7cc1b1f0d04c756818945d1a95650d80e0810621f7a->leave($__internal_bbe784b4a501554e785ec7cc1b1f0d04c756818945d1a95650d80e0810621f7a_prof);

        
        $__internal_d445e586ca05cb852fed9371fd130aae9b17282b044a215b7b01c22bffafcb97->leave($__internal_d445e586ca05cb852fed9371fd130aae9b17282b044a215b7b01c22bffafcb97_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_71acf0a74807181d7e9381413c3e7a7e797211b66c091a83a9392f570b6e59ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71acf0a74807181d7e9381413c3e7a7e797211b66c091a83a9392f570b6e59ce->enter($__internal_71acf0a74807181d7e9381413c3e7a7e797211b66c091a83a9392f570b6e59ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc4720cdc1bc65d398e34feb75e3dd10d570dc90eeabd1fe4a3454a0ccb0fba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4720cdc1bc65d398e34feb75e3dd10d570dc90eeabd1fe4a3454a0ccb0fba5->enter($__internal_bc4720cdc1bc65d398e34feb75e3dd10d570dc90eeabd1fe4a3454a0ccb0fba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bc4720cdc1bc65d398e34feb75e3dd10d570dc90eeabd1fe4a3454a0ccb0fba5->leave($__internal_bc4720cdc1bc65d398e34feb75e3dd10d570dc90eeabd1fe4a3454a0ccb0fba5_prof);

        
        $__internal_71acf0a74807181d7e9381413c3e7a7e797211b66c091a83a9392f570b6e59ce->leave($__internal_71acf0a74807181d7e9381413c3e7a7e797211b66c091a83a9392f570b6e59ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
