<?php

/* C:\lamp\www\october/plugins/dma/friends/components/activitystream/default.htm */
class __TwigTemplate_88ec6255d401f1305364d5d47d836e357b40e169319a99e4346b6d26da835cf1 extends Twig_Template
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
        echo "<div class=\"activity-stream row\">
    <div class=\"col-md-9 col-sm-9\">
        <ul class=\"items list-group\">
            ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 5
            echo "                <li class=\"list-group-item\">
                    <span class=\"time-ago\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "timeAgo", array()), "html", null, true);
            echo "</span>
                    ";
            // line 7
            if (($this->getAttribute($context["result"], "action", array()) == "reward")) {
                // line 8
                echo "                        You claimed a reward
                        <div>\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "object", array()), "title", array()), "html", null, true);
                echo "\"</div>
                    ";
            } elseif (($this->getAttribute(            // line 10
$context["result"], "action", array()) == "unlocked")) {
                // line 11
                echo "                        You earned a badge 
                        <div>\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "object", array()), "title", array()), "html", null, true);
                echo "\"</div>
                    ";
            } elseif (($this->getAttribute(            // line 13
$context["result"], "action", array()) == "activity")) {
                // line 14
                echo "                        You completed the activity
                        <div>\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["result"], "object", array()), "title", array()), "html", null, true);
                echo "\"</div>
                    ";
            } elseif (($this->getAttribute(            // line 16
$context["result"], "action", array()) == "artwork")) {
                // line 17
                echo "                        Liked a work of art
                        <div>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "artwork_id", array()), "html", null, true);
                echo "</div>
                    ";
            }
            // line 20
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>
        <div class=\"links\">";
        // line 23
        echo (isset($context["links"]) ? $context["links"] : null);
        echo "</div>
    </div>

    <div class=\"col-md-3 col-sm-3\">
        <ul class=\"filter-buttons-wrap button-group buttons\">
            <li class=\"first\">
                <a 
                    class=\"filter-all button large current icon-align-justify\" 
                    href=\"#\" 
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'all'\"
                >View All</a>
            </li>
            <li>
                <a 
                    class=\"filter-stream-badge button large icon-circle-o\" 
                    href=\"#\" 
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'unlocked'\"
                >Badges</a>
            </li>
            <li>
                <a 
                    class=\"filter-stream-reward button large icon-trophy\" 
                    href=\"#\" 
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'reward'\"
                >Rewards</a>
            </li>
            <li>
                <a 
                    class=\"filter-stream-activity button large icon-check\" 
                    href=\"#\" 
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'activity'\"
                >Activities</a>
            </li>
            <li>
                <a 
                    class=\"filter-stream-artwork button large icon-heart\" 
                    href=\"#\" 
                    data-request=\"onUpdate\" 
                    data-request-data=\"filter: 'artwork'\"
                >Liked Art</a>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/activitystream/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  79 => 22,  72 => 20,  67 => 18,  64 => 17,  62 => 16,  58 => 15,  55 => 14,  53 => 13,  49 => 12,  46 => 11,  44 => 10,  40 => 9,  37 => 8,  35 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
