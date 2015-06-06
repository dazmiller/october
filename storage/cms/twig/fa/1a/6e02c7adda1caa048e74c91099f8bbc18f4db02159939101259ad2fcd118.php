<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/pages/my-profile.htm */
class __TwigTemplate_fa1a6e02c7adda1caa048e74c91099f8bbc18f4db02159939101259ad2fcd118 extends Twig_Template
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
        echo "<h3>My Profile</h3>

";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("UserProfile"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/pages/my-profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
