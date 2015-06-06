<?php

/* C:\lamp\www\october/plugins/dma/friends/components/partials/modalDisplay.htm */
class __TwigTemplate_80ed3e6cb3ae2f4c2d9cc60aed36825f2f24c3f09846704117cb84ed86cc06f1 extends Twig_Template
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
        echo "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"popup\">×</button>
    ";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    <h4 class=\"modal-title\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
    ";
        }
        // line 6
        echo "</div>
<div class=\"modal-body\">
    ";
        // line 8
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/partials/modalDisplay.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
