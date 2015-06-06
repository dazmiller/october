<?php

/* C:\lamp\www\october/plugins/dma/friends/components/modal/default.htm */
class __TwigTemplate_4580826ffb56d8a16930c19e9420f213006c9e2263e125d08805f3fffde709da extends Twig_Template
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
        echo "<a href=\"#\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true);
        echo "\" data-control=\"popup\" data-handler=\"onRenderModal\">";
        echo (isset($context["linkTitle"]) ? $context["linkTitle"] : null);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/modal/default.htm";
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
