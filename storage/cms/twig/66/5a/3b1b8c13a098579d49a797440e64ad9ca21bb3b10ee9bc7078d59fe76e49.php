<?php

/* C:\lamp\www\october/plugins/dma/friends/components/usermostrecentbadge/default.htm */
class __TwigTemplate_665a3b1b8c13a098579d49a797440e64ad9ca21bb3b10ee9bc7078d59fe76e49 extends Twig_Template
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
        echo "<div class=\"most-recent-badge\">
    ";
        // line 2
        echo (isset($context["badge"]) ? $context["badge"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/usermostrecentbadge/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
