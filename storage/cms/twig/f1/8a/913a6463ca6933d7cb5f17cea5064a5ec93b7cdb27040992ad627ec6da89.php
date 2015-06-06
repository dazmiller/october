<?php

/* C:\lamp\www\october/plugins/dma/friends/components/getrewards/default.htm */
class __TwigTemplate_f18a913a6463ca6933d7cb5f17cea5064a5ec93b7cdb27040992ad627ec6da89 extends Twig_Template
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
        echo "<div class=\"row rewards-menu\">
    <div class=\"col-md-12\">
        <ul class=\"filter-buttons-wrap button-group buttons\">
            <li><a class=\"filter-all button large current\" 
                    href=\"#\"
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'all'\"
            >All</a></li>
            <li><a class=\"filter-limited-time button large\" 
                href=\"#\"
                data-request=\"onUpdate\" 
                data-request-data=\"filter: 'time'\"
            >Limited Time</a></li>
            <li><a class=\"filter-limited-qty button large\" 
                href=\"#\"
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'qty'\"
            >Limited Qty.</a></li>
            <li><a class=\"filter-bookmarked button large\" 
                href=\"#\"
                data-request=\"onUpdate\" 
                data-request-data=\"filter: 'bookmarked'\"
            >Bookmarked</a></li>              
        </ul>
    </div>
</div>

<div class=\"row rewards\">
    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rewards"]) ? $context["rewards"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
            // line 30
            echo "        ";
            echo $this->getAttribute($context["reward"], "rendered", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    ";
        // line 33
        if (twig_test_empty((isset($context["rewards"]) ? $context["rewards"] : null))) {
            // line 34
            echo "        <div class=\"col-xs-12 col-md-12 col-lg-12\">
            <h3>Sorry there are no rewards</h3>
        </div>
    ";
        }
        // line 38
        echo "
    <div class=\"links\">
        ";
        // line 40
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/getrewards/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 40,  73 => 38,  67 => 34,  65 => 33,  62 => 32,  53 => 30,  49 => 29,  19 => 1,);
    }
}
