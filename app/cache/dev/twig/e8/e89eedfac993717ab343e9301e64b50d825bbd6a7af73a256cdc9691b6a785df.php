<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_835c3f3294470cde5f0d609b0e93c110fe81d46075a8fc72db76601ee0e8f749 extends Twig_Template
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
        $__internal_0e4e5337a3f168515bb93fae09cf896f9efacccb14de538443cd8474b7ca7760 = $this->env->getExtension("native_profiler");
        $__internal_0e4e5337a3f168515bb93fae09cf896f9efacccb14de538443cd8474b7ca7760->enter($__internal_0e4e5337a3f168515bb93fae09cf896f9efacccb14de538443cd8474b7ca7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0e4e5337a3f168515bb93fae09cf896f9efacccb14de538443cd8474b7ca7760->leave($__internal_0e4e5337a3f168515bb93fae09cf896f9efacccb14de538443cd8474b7ca7760_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */