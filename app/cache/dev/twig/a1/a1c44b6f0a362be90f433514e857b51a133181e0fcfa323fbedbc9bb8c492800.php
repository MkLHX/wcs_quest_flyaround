<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_3b3d5c5ba72a89e767785a7e91d2d69c0400cd2bb195a4e790cc72d100f6879c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8664b4749bd2785c40a14157a70529a377184378cfd88355d17b3ebd423e7a8 = $this->env->getExtension("native_profiler");
        $__internal_d8664b4749bd2785c40a14157a70529a377184378cfd88355d17b3ebd423e7a8->enter($__internal_d8664b4749bd2785c40a14157a70529a377184378cfd88355d17b3ebd423e7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8664b4749bd2785c40a14157a70529a377184378cfd88355d17b3ebd423e7a8->leave($__internal_d8664b4749bd2785c40a14157a70529a377184378cfd88355d17b3ebd423e7a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */