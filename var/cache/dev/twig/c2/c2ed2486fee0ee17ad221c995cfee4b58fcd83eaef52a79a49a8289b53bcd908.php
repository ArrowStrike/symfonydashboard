<?php

/* @App/Todo/edit.html.twig */
class __TwigTemplate_a15c35f87fee600c280520e1c0ea16e8e31fef995a476394a9616328069d23b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Todo/edit.html.twig", 1);
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
        $__internal_8eb108453c1cb74d9b7e22b47d6f0899c03717794c5b2b394a3ab485f048fe08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb108453c1cb74d9b7e22b47d6f0899c03717794c5b2b394a3ab485f048fe08->enter($__internal_8eb108453c1cb74d9b7e22b47d6f0899c03717794c5b2b394a3ab485f048fe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/edit.html.twig"));

        $__internal_e9737b58e6943e4e0963726c9a2083aa35ad48e31571e2f7cef4fef47679ff54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9737b58e6943e4e0963726c9a2083aa35ad48e31571e2f7cef4fef47679ff54->enter($__internal_e9737b58e6943e4e0963726c9a2083aa35ad48e31571e2f7cef4fef47679ff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb108453c1cb74d9b7e22b47d6f0899c03717794c5b2b394a3ab485f048fe08->leave($__internal_8eb108453c1cb74d9b7e22b47d6f0899c03717794c5b2b394a3ab485f048fe08_prof);

        
        $__internal_e9737b58e6943e4e0963726c9a2083aa35ad48e31571e2f7cef4fef47679ff54->leave($__internal_e9737b58e6943e4e0963726c9a2083aa35ad48e31571e2f7cef4fef47679ff54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03b715a5cae9c8ed22f1661b830f1e197565dd27845d15840e8988106da84c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b715a5cae9c8ed22f1661b830f1e197565dd27845d15840e8988106da84c14->enter($__internal_03b715a5cae9c8ed22f1661b830f1e197565dd27845d15840e8988106da84c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5120f8a534e3d71a7efdf7ff5b23d6ddee8df3fd1d006e9f92f1d40b765ab9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5120f8a534e3d71a7efdf7ff5b23d6ddee8df3fd1d006e9f92f1d40b765ab9a4->enter($__internal_5120f8a534e3d71a7efdf7ff5b23d6ddee8df3fd1d006e9f92f1d40b765ab9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Todo:edit";
        
        $__internal_5120f8a534e3d71a7efdf7ff5b23d6ddee8df3fd1d006e9f92f1d40b765ab9a4->leave($__internal_5120f8a534e3d71a7efdf7ff5b23d6ddee8df3fd1d006e9f92f1d40b765ab9a4_prof);

        
        $__internal_03b715a5cae9c8ed22f1661b830f1e197565dd27845d15840e8988106da84c14->leave($__internal_03b715a5cae9c8ed22f1661b830f1e197565dd27845d15840e8988106da84c14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ec1563115e9b058a0011bc662ebce5c5abcc6b3033795845e804cc3d826d531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec1563115e9b058a0011bc662ebce5c5abcc6b3033795845e804cc3d826d531->enter($__internal_4ec1563115e9b058a0011bc662ebce5c5abcc6b3033795845e804cc3d826d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88290d92b4ba74338f16288d27fafa33f75876728811e7b03490aaa18fe36a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88290d92b4ba74338f16288d27fafa33f75876728811e7b03490aaa18fe36a52->enter($__internal_88290d92b4ba74338f16288d27fafa33f75876728811e7b03490aaa18fe36a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"page-header\">Edit Todo</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_88290d92b4ba74338f16288d27fafa33f75876728811e7b03490aaa18fe36a52->leave($__internal_88290d92b4ba74338f16288d27fafa33f75876728811e7b03490aaa18fe36a52_prof);

        
        $__internal_4ec1563115e9b058a0011bc662ebce5c5abcc6b3033795845e804cc3d826d531->leave($__internal_4ec1563115e9b058a0011bc662ebce5c5abcc6b3033795845e804cc3d826d531_prof);

    }

    public function getTemplateName()
    {
        return "@App/Todo/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 9,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Todo:edit{% endblock %}

{% block body %}
    <h2 class=\"page-header\">Edit Todo</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "@App/Todo/edit.html.twig", "/home/vtarasenkovs/public_html/symfony-dashboard3/src/AppBundle/Resources/views/Todo/edit.html.twig");
    }
}
