<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1e3b406cceb906a4e5dbe89542825cb9963f9179f5744936960842ddcde943f6 extends Twig_Template
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
        $__internal_ceaf1d9faeb692a8fca93f6dd913b2783ad9bc07e5718ca1fae664ad619c00cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaf1d9faeb692a8fca93f6dd913b2783ad9bc07e5718ca1fae664ad619c00cb->enter($__internal_ceaf1d9faeb692a8fca93f6dd913b2783ad9bc07e5718ca1fae664ad619c00cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_f41ddbd71729b85adc51109a335a4183da0a6a686227a87749776e108c9a72f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41ddbd71729b85adc51109a335a4183da0a6a686227a87749776e108c9a72f7->enter($__internal_f41ddbd71729b85adc51109a335a4183da0a6a686227a87749776e108c9a72f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ceaf1d9faeb692a8fca93f6dd913b2783ad9bc07e5718ca1fae664ad619c00cb->leave($__internal_ceaf1d9faeb692a8fca93f6dd913b2783ad9bc07e5718ca1fae664ad619c00cb_prof);

        
        $__internal_f41ddbd71729b85adc51109a335a4183da0a6a686227a87749776e108c9a72f7->leave($__internal_f41ddbd71729b85adc51109a335a4183da0a6a686227a87749776e108c9a72f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Applications/MAMP/htdocs/rest_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
