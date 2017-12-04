<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_386aacf34b2d5a517ffbac283b9881d9803374f0ca07f8a26a6091c7ff063438 extends Twig_Template
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
        $__internal_df4ef50ea118ed1bc76698ab5c99e6d43c374022fe6849f17e70eb002300ab33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4ef50ea118ed1bc76698ab5c99e6d43c374022fe6849f17e70eb002300ab33->enter($__internal_df4ef50ea118ed1bc76698ab5c99e6d43c374022fe6849f17e70eb002300ab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_ffc491596a309f53fcaba208c7075983f36dca6afeab5e1896d753d0c3e8502c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc491596a309f53fcaba208c7075983f36dca6afeab5e1896d753d0c3e8502c->enter($__internal_ffc491596a309f53fcaba208c7075983f36dca6afeab5e1896d753d0c3e8502c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_df4ef50ea118ed1bc76698ab5c99e6d43c374022fe6849f17e70eb002300ab33->leave($__internal_df4ef50ea118ed1bc76698ab5c99e6d43c374022fe6849f17e70eb002300ab33_prof);

        
        $__internal_ffc491596a309f53fcaba208c7075983f36dca6afeab5e1896d753d0c3e8502c->leave($__internal_ffc491596a309f53fcaba208c7075983f36dca6afeab5e1896d753d0c3e8502c_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
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
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "/Applications/MAMP/htdocs/rest_symfony/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
