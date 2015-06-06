<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/layouts/login.htm */
class __TwigTemplate_32572a60c3df8b49463e3f0c8c0f6152d439002d756e82fb3eab7b8d4a49637f extends Twig_Template
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
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!-- Content -->
<section id=\"layout-content\">
    ";
        // line 5
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 6
        echo "</section>

";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/layouts/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }
}
