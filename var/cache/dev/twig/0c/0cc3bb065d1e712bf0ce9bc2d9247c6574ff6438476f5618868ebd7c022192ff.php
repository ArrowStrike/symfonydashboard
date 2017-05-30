<?php

/* lucky/number.html.twig */
class __TwigTemplate_ea2e594994799b2b2c78605839a5649e96b1397e8aaeac93fbd1b94322209bec extends Twig_Template
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
        $__internal_c8f187ce9a5e526a9e9814ab47270b1548185f9060086dcc7d73e9b0ab354819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f187ce9a5e526a9e9814ab47270b1548185f9060086dcc7d73e9b0ab354819->enter($__internal_c8f187ce9a5e526a9e9814ab47270b1548185f9060086dcc7d73e9b0ab354819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_9c78d3f2cc0eb912ba4962fa85601912939d56be275b1989ec3194790c0556db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c78d3f2cc0eb912ba4962fa85601912939d56be275b1989ec3194790c0556db->enter($__internal_9c78d3f2cc0eb912ba4962fa85601912939d56be275b1989ec3194790c0556db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 2
        echo "
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h1>";
        
        $__internal_c8f187ce9a5e526a9e9814ab47270b1548185f9060086dcc7d73e9b0ab354819->leave($__internal_c8f187ce9a5e526a9e9814ab47270b1548185f9060086dcc7d73e9b0ab354819_prof);

        
        $__internal_9c78d3f2cc0eb912ba4962fa85601912939d56be275b1989ec3194790c0556db->leave($__internal_9c78d3f2cc0eb912ba4962fa85601912939d56be275b1989ec3194790c0556db_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
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

<h1>Your lucky number is {{ number }}</h1>", "lucky/number.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/app/Resources/views/lucky/number.html.twig");
    }
}
