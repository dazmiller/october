<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/pages/friends.htm */
class __TwigTemplate_ff5a9ee1ca707bd44d38f8ef60ed05b6bf98c4bef2078fe16c7dd847cd233919 extends Twig_Template
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
        echo "<div class=\"row content\">
    <div class=\"col-md-8 col-sm-8\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ActivityCodeForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "        <h3>Things to Do</h3>
        ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("badges"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "    </div>

    <div class=\"col-md-4 col-sm-4\">
        <h3>My Latest Badge</h3>
        ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("UserMostRecentBadge"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/pages/friends.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 10,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
