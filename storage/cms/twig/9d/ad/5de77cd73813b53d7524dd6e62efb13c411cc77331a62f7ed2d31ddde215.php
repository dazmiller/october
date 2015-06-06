<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/pages/activity-stream.htm */
class __TwigTemplate_9dad5de77cd73813b53d7524dd6e62efb13c411cc77331a62f7ed2d31ddde215 extends Twig_Template
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
        echo "<div id=\"activity-stream\">";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("ActivityStream"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/pages/activity-stream.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
