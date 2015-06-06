<?php

/* C:\lamp\www\october/plugins/dma/friends/components/userlogin/avatars.htm */
class __TwigTemplate_897b1533cb9f8e3711661f5b1f81fa15186275efcbe6a7ba6b696a39fb47ab4f extends Twig_Template
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
        echo "<div class=\"avatars row\">
    <ul class=\"selectable\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avatars"]) ? $context["avatars"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar"]) {
            // line 4
            echo "        <li class=\"avatar col-md-3 col-sm-3\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $context["avatar"], "html", null, true);
            echo "\"/>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/userlogin/avatars.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
