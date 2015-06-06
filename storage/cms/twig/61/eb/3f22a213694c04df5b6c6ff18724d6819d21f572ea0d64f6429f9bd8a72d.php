<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/pages/get-rewards.htm */
class __TwigTemplate_61eb3f22a213694c04df5b6c6ff18724d6819d21f572ea0d64f6429f9bd8a72d extends Twig_Template
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
        echo "<h3>Get Rewards</h3>

<div id=\"rewards\">";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("GetRewards"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/pages/get-rewards.htm";
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
