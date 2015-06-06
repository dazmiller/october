<?php

/* C:\lamp\www\october/plugins/dma/recommendations/components/recommendations/default.htm */
class __TwigTemplate_31e4dc6423ea20569a7d48b095166819867cb355c2152c05b939ada5390dd961 extends Twig_Template
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
        echo "<div class=\"row\">\t
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["recommend"]) {
            // line 3
            echo "\t";
            echo $context["recommend"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recommend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/recommendations/components/recommendations/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
