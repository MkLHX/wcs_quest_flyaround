<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_a8e8ba8e7dfc59623aab47de2b6bbd7e7fcc4b7f9ef9a52fabb3b8f25fcb3891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e027878241e38a93c95feded039df151f3d73896b3c3ddf2c61537c087fdb004 = $this->env->getExtension("native_profiler");
        $__internal_e027878241e38a93c95feded039df151f3d73896b3c3ddf2c61537c087fdb004->enter($__internal_e027878241e38a93c95feded039df151f3d73896b3c3ddf2c61537c087fdb004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e027878241e38a93c95feded039df151f3d73896b3c3ddf2c61537c087fdb004->leave($__internal_e027878241e38a93c95feded039df151f3d73896b3c3ddf2c61537c087fdb004_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1613c05a1d637d25cf137cff089ea32420c7e417402c7501ce11addae55262b8 = $this->env->getExtension("native_profiler");
        $__internal_1613c05a1d637d25cf137cff089ea32420c7e417402c7501ce11addae55262b8->enter($__internal_1613c05a1d637d25cf137cff089ea32420c7e417402c7501ce11addae55262b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1613c05a1d637d25cf137cff089ea32420c7e417402c7501ce11addae55262b8->leave($__internal_1613c05a1d637d25cf137cff089ea32420c7e417402c7501ce11addae55262b8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */