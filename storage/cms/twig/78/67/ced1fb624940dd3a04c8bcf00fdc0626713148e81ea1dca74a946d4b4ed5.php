<?php

/* C:\lamp\www\october/plugins/dma/friends/components/notificationcounter/default.htm */
class __TwigTemplate_7867ced1fb624940dd3a04c8bcf00fdc0626713148e81ea1dca74a946d4b4ed5 extends Twig_Template
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
        echo "<a id=\"notification-counter\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["goToPage"]) ? $context["goToPage"] : null), "html", null, true);
        echo "\">Notifications <span class=\"badge\">";
        if (((isset($context["count"]) ? $context["count"] : null) > 0)) {
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        }
        echo "</span> </a>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/notificationcounter/default.htm";
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
