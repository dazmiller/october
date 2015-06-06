<?php

/* C:\lamp\www\october/plugins/dma/friends/components/usertimeout/default.htm */
class __TwigTemplate_13a4e1ad0638b9a684541845ad11c5d70f14008d2990174ead7c43fc8a07bab7 extends Twig_Template
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
        echo "<a href=\"#\" class=\"usertimeoutHandler\" data-control=\"popup\" data-handler=\"onRenderModal\">Logout</a>

<script type=\"text/javascript\">
var modalTimeout = ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["timeout"]) ? $context["timeout"] : null), "html", null, true);
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/usertimeout/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
