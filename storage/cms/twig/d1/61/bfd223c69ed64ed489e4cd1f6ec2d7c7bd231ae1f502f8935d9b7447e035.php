<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/pages/notifications.htm */
class __TwigTemplate_d161bfd223c69ed64ed489e4cd1f6ec2d7c7bd231ae1f502f8935d9b7447e035 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"pull-right\">
        
        </div>
    </div>
    
\t<div class=\"row\">
\t\t<div class=\"col-md-12 col-md-12\">
            ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("NotificationList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/pages/notifications.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  30 => 10,  19 => 1,);
    }
}
