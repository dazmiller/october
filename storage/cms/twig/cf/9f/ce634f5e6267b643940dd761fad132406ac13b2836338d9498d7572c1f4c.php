<?php

/* C:\lamp\www\october/plugins/dma/friends/components/notificationlist/default.htm */
class __TwigTemplate_cf9fce634f5e6267b643940dd761fad132406ac13b2836338d9498d7572c1f4c extends Twig_Template
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
        echo "<div id=\"notifications-list\">
";
        // line 2
        if ((isset($context["notifications"]) ? $context["notifications"] : null)) {
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 4
                echo "\t
\t
\t\t";
                // line 6
                $context["notifyDate"] = twig_date_converter($this->env, $this->getAttribute($context["notification"], "created_at", array()));
                // line 7
                echo "\t\t
\t\t";
                // line 8
                if (((isset($context["notifyDate"]) ? $context["notifyDate"] : null) >= twig_date_converter($this->env, "today"))) {
                    // line 9
                    echo "\t\t\t";
                    $context["group"] = "Today";
                    // line 10
                    echo "\t\t";
                } elseif (((isset($context["notifyDate"]) ? $context["notifyDate"] : null) >= twig_date_converter($this->env, "yesterday"))) {
                    // line 11
                    echo "\t\t\t";
                    $context["group"] = "Yesterday";
                    // line 12
                    echo "\t\t";
                } else {
                    // line 13
                    echo "\t\t\t";
                    $context["group"] = twig_date_format_filter($this->env, (isset($context["notifyDate"]) ? $context["notifyDate"] : null), "F d");
                    // line 14
                    echo "\t\t";
                }
                // line 15
                echo "\t
\t";
                // line 16
                if (((isset($context["currentGroup"]) ? $context["currentGroup"] : null) != (isset($context["group"]) ? $context["group"] : null))) {
                    // line 17
                    echo "\t\t";
                    $context["currentGroup"] = (isset($context["group"]) ? $context["group"] : null);
                    // line 18
                    echo "
\t\t";
                    // line 19
                    if (( !(isset($context["tools"]) ? $context["tools"] : null) && ((isset($context["unReadCount"]) ? $context["unReadCount"] : null) > 0))) {
                        // line 20
                        echo "\t\t\t";
                        $context["tools"] = true;
                        // line 21
                        echo "\t\t\t<div class=\"col-md-12\">
\t\t\t<a data-remove=\"";
                        // line 22
                        echo twig_escape_filter($this->env, (isset($context["onlyUnread"]) ? $context["onlyUnread"] : null), "html", null, true);
                        echo "\" 
\t\t\t   class=\"markReadAll pull-right\"
\t\t\t   data-request-success=\"\"
\t\t\t   href=\"#\" class=\"pull-right\">mark all as read</a>\t
\t\t\t   
\t\t\t</div>
\t\t";
                    }
                    // line 29
                    echo "
\t\t<h3>";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["currentGroup"]) ? $context["currentGroup"] : null), "html", null, true);
                    echo "</h3>
\t\t\t
\t";
                }
                // line 33
                echo "\t
\t
\t<div class=\"notification ";
                // line 35
                echo (( !$this->getAttribute($context["notification"], "is_read", array())) ? ("notification-unread") : (""));
                echo "\">

\t\t<button data-id=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
                echo "\"
\t\t\t\tdata-remove=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["onlyUnread"]) ? $context["onlyUnread"] : null), "html", null, true);
                echo "\"
\t\t\t\tclass=\"markRead close\"
\t\t\t\ttype=\"button\" class=\"close\" >
\t\t\t\t<span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
\t\t</button>
\t\t
\t\t";
                // line 44
                if ($this->getAttribute($context["notification"], "subject", array())) {
                    // line 45
                    echo "\t\t\t<h4>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "subject", array()), "html", null, true);
                    echo "</h4>
\t\t";
                }
                // line 47
                echo "\t\t<div id=\"message\">
\t\t\t";
                // line 48
                echo $this->getAttribute($context["notification"], "message", array());
                echo "
\t\t</div>
\t\t<div id=\"time\">
\t\t\t<small>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notification"], "created_at", array()), "g:i A"), "html", null, true);
                echo "</small>
\t\t</div>

\t</div>\t
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 57
            echo "\t<div>
\t\t<p class=\"text-center lead\">There are no new notifications</p>
\t</div>
";
        }
        // line 61
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/notificationlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 61,  146 => 57,  134 => 51,  128 => 48,  125 => 47,  119 => 45,  117 => 44,  108 => 38,  104 => 37,  99 => 35,  95 => 33,  89 => 30,  86 => 29,  76 => 22,  73 => 21,  70 => 20,  68 => 19,  65 => 18,  62 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
