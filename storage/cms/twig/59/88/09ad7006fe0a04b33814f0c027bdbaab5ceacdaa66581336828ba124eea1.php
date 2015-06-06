<?php

/* C:\lamp\www\october/plugins/dma/friends/components/userprofile/default.htm */
class __TwigTemplate_598809ad7006fe0a04b33814f0c027bdbaab5ceacdaa66581336828ba124eea1 extends Twig_Template
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
        echo "<form id=\"user-profile\" class=\"row\">
    <div class=\"col-md-6 col-sm-6\">
        
        <div class=\"form-group\">
            <a href=\"#\" class=\"avatar-image\" data-control=\"popup\" data-handler=\"onAvatar\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "getThumb", array(0 => 100, 1 => 100), "method"), "html", null, true);
        echo "\"/>
            </a>
        </div>

        <div class=\"form-group is-required\">
            <label>First Name</label>
            <input type=\"text\" 
                name=\"metadata[first_name]\" 
                class=\"form-control\" 
                value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "first_name", array()), "html", null, true);
        echo "\" 
                data-parsley-required=\"true\" 
                data-parsley-minlength=\"2\"
            />
        </div>

        <div class=\"form-group is-required\">
            <label>Last Name</label>
            <input type=\"text\" 
                name=\"metadata[last_name]\" 
                class=\"form-control is-required\" 
                value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "last_name", array()), "html", null, true);
        echo "\"
                data-parsley-required=\"true\" 
                data-parsley-minlength=\"2\"
            />
        </div>

        <div class=\"form-group is-required\">
            <label>Email</label>
            <input type=\"text\" 
                name=\"email\" 
                class=\"form-control\"  
                value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\"
                data-parsley-required=\"true\"
                data-parsley-type=\"email\"
            />
        </div>

        <div class=\"form-group\">
            <a href=\"#\" data-control=\"popup\" data-handler=\"onPassword\">Change Password</a>
        </div>

         <div class=\"form-group\">
            <label>
                <input type=\"checkbox\" name=\"metadata[email_optin]\" value=\"1\" 
                ";
        // line 50
        if ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "email_optin", array())) {
            // line 51
            echo "                    checked=\"checked\"
                ";
        }
        // line 53
        echo "                /> Email Opt-in
            </label>
        </div>

        <h3>Contact Information</h3>

        <div class=\"form-group\">
            <label>Street Address</label>
            <input type=\"text\" name=\"street_addr\" class=\"form-control\"  value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "street_addr", array()), "html", null, true);
        echo "\"/>
        </div>

        <div class=\"form-group\">
            <label>City</label>
            <input type=\"text\" name=\"city\" class=\"form-control\"  value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "city", array()), "html", null, true);
        echo "\"/>
        </div>

        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label>State</label>
                <select
                    id=\"state\"
                    name=\"state\"
                    class=\"form-control custom-select\">
                        <option> - Select a State - </option>
                    ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "states", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 78
            echo "                        <option
                        ";
            // line 79
            if (($this->getAttribute($context["state"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "state", array()), "id", array()))) {
                // line 80
                echo "                        selected=\"selected\"
                        ";
            }
            // line 82
            echo "                        value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "name", array()), "html", null, true);
            echo "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </select>
            </div>

            <div class=\"form-group is-required col-md-6\">
                <label>Zipcode</label>
                <input type=\"text\" 
                    name=\"zip\" 
                    class=\"form-control\"  
                    value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "zip", array()), "html", null, true);
        echo "\"
                    data-parsley-type=\"number\"
                    data-parsley-required=\"true\"
                    data-parsley-length=\"[5, 5]\"
                    data-parsley-error-message=\"Please enter a valid zipcode\"
                />
            </div>
        </div>

        <div class=\"form-group text-field\">
            <label>Phone</label>
            <input type=\"text\" name=\"phone\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "phone", array()), "html", null, true);
        echo "\" class=\"form-control\"/>   
        </div>

    </div>

    <div class=\"col-md-6 col-sm-6\">

        <h3>Demographic Information</h3>

        <div class=\"form-group\">
            <label>Gender</label>
            <select id=\"gender\" name=\"metadata[gender]\" class=\"form-control\">
                <option value=\"\">Choose not to disclose</option>
                ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "gender", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 119
            echo "                <option
                ";
            // line 120
            if (($context["option"] == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "gender", array()))) {
                // line 121
                echo "                selected=\"selected\"
                ";
            }
            // line 123
            echo "                >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label>Race</label>
            <select name=\"metadata[race]\" class=\"form-control\">
                <option value=\"\"> - Select One - </option>
                ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "race", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 132
            echo "                <option
                ";
            // line 133
            if (($context["option"] == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "race", array()))) {
                // line 134
                echo "                selected=\"selected\"
                ";
            }
            // line 136
            echo "                >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label>Education</label>
            <select name=\"metadata[education]\" class=\"form-control\">
                <option value=\"\"> - Select One - </option>
                ";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "education", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 145
            echo "                <option
                ";
            // line 146
            if (($context["option"] == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "education", array()))) {
                // line 147
                echo "                selected=\"selected\"
                ";
            }
            // line 149
            echo "                >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <label>Household Income</label>
            <select name=\"metadata[household_income]\" class=\"form-control\">
                <option value=\"\"> - Select One - </option>
                ";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "household_income", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 159
            echo "                <option
                ";
            // line 160
            if (($context["option"] == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "household_income", array()))) {
                // line 161
                echo "                selected=\"selected\"
                ";
            }
            // line 163
            echo "                >";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "            </select>
        </div>
        <div class=\"form-group\">
            <label>Number of people in your household</label>
            <select name=\"metadata[household_size]\" class=\"form-control\">
                <option value=\"\"> - Select One - </option>
                ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 172
            echo "                <option
                ";
            // line 173
            if (($context["i"] == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "household_size", array()))) {
                // line 174
                echo "                selected=\"selected\"
                ";
            }
            // line 176
            echo "                >";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                <option>10+</option>
            </select>
        </div>

    </div>

    <div class=\"col-md-12 col-sm-12\">
        <button type=\"submit\" data-request=\"onSave\" class=\"btn btn-primary\">Save</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/userprofile/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 178,  321 => 176,  317 => 174,  315 => 173,  312 => 172,  308 => 171,  300 => 165,  291 => 163,  287 => 161,  285 => 160,  282 => 159,  278 => 158,  269 => 151,  260 => 149,  256 => 147,  254 => 146,  251 => 145,  247 => 144,  239 => 138,  230 => 136,  226 => 134,  224 => 133,  221 => 132,  217 => 131,  209 => 125,  200 => 123,  196 => 121,  194 => 120,  191 => 119,  187 => 118,  171 => 105,  157 => 94,  147 => 86,  138 => 83,  133 => 82,  129 => 80,  127 => 79,  124 => 78,  120 => 77,  106 => 66,  98 => 61,  88 => 53,  84 => 51,  82 => 50,  66 => 37,  52 => 26,  38 => 15,  26 => 6,  19 => 1,);
    }
}
