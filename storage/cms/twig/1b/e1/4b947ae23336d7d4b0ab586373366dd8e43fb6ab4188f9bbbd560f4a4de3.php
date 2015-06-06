<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/layouts/default.htm */
class __TwigTemplate_1be14b947ae23336d7d4b0ab586373366dd8e43fb6ab4188f9bbbd560f4a4de3 extends Twig_Template
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
<section id=\"layout-content\" class=\"container\">
    <div class=\"row primary-links\">
        <div class=\"item col-xs-3 col-md-3\">
            <a class=\"icon-home\" href=\"/friends\">Home</a>
        </div>
        <div class=\"item col-xs-3 col-md-3\">
            <a class=\"icon-circle-o\" href=\"/badges\">My Badges</a>
        </div>
        <div class=\"item col-xs-3 col-md-3\">
            <a class=\"icon-trophy\" href=\"/rewards\">Get Rewards</a>
        </div>
        <div class=\"item col-xs-3 col-md-3\">
            <a class=\"icon-user\" href=\"/profile\">My Profile</a>
        </div>
        </ul>
    </div>
    
    ";
        // line 21
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 22
        echo "    
    ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("UserTimeout"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "</section>

";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 26,  53 => 24,  49 => 23,  46 => 22,  44 => 21,  23 => 2,  19 => 1,);
    }
}
