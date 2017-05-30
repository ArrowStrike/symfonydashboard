<?php

/* @App/lucky/number.html.twig */
class __TwigTemplate_9f036d6b949a1189aae6ac8d821dccc7b1e6bcea02342558e01967345544ea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b3c0122febf5564fed067f1682f934d612c0f6e277bbf6da9c1864fef2de25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3c0122febf5564fed067f1682f934d612c0f6e277bbf6da9c1864fef2de25f->enter($__internal_9b3c0122febf5564fed067f1682f934d612c0f6e277bbf6da9c1864fef2de25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/lucky/number.html.twig"));

        $__internal_ddbe94294b890fd5984f89f6480d1688a297ac990d3373fb3c584aca344577bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbe94294b890fd5984f89f6480d1688a297ac990d3373fb3c584aca344577bc->enter($__internal_ddbe94294b890fd5984f89f6480d1688a297ac990d3373fb3c584aca344577bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/lucky/number.html.twig"));

        // line 2
        echo "
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_9b3c0122febf5564fed067f1682f934d612c0f6e277bbf6da9c1864fef2de25f->leave($__internal_9b3c0122febf5564fed067f1682f934d612c0f6e277bbf6da9c1864fef2de25f_prof);

        
        $__internal_ddbe94294b890fd5984f89f6480d1688a297ac990d3373fb3c584aca344577bc->leave($__internal_ddbe94294b890fd5984f89f6480d1688a297ac990d3373fb3c584aca344577bc_prof);

    }

    public function getTemplateName()
    {
        return "@App/lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/lucky/number.html.twig #}

<h1>Your lucky number is {{ number }}</h1>", "@App/lucky/number.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/AppBundle/Resources/views/lucky/number.html.twig");
    }
}
