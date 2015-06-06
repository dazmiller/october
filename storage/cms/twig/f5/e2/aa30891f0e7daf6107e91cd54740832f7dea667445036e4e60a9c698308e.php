<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/pages/login.htm */
class __TwigTemplate_f5e2aa30891f0e7daf6107e91cd54740832f7dea667445036e4e60a9c698308e extends Twig_Template
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
        echo "<div class=\"info-box\">
    <div class=\"login-box\">
        <div class=\"dma-logo\">";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("WhatsThisModal"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>

        <div class=\"info\">";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("UserLogin"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div
    </div>

    <div class=\"location-info footer\">
        <h4 class=\"icon-map-marker\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "title", array()), "html", null, true);
        echo "</h4>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  30 => 5,  23 => 3,  19 => 1,);
    }
}
