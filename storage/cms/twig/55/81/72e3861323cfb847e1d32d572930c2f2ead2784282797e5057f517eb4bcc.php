<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/partials/register-form.htm */
class __TwigTemplate_558172e3861323cfb847e1d32d572930c2f2ead2784282797e5057f517eb4bcc extends Twig_Template
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
        echo "<form id=\"register\" method=\"POST\" data-request=\"onRegisterSubmit\">
    <div id=\"carousel-register\" class=\"registration-carousel carousel slide\" data-ride=\"carousel\">
      <!-- Wrapper for slides -->
      <div class=\"carousel-inner\" role=\"listbox\">
        <!-- Slide 1 -->
        <div class=\"item item-1 active\">
            <div class=\"registration-step\">Step 1 of 6</div>
            <h3>Basic Info</h3>
<p>
You are signing up to become a DMA Friend. Once you complete the registration process, you will be ready to check out new badges and activities that are waiting for you. As you participate, you&#x2019;ll earn credit you can use to pick from a number of fun rewards.
</p>
            <div class=\"form-group is-required\">
                <label>First Name</label>
                <input type=\"text\" 
                    id=\"first-name\" 
                    name=\"first_name\" 
                    class=\"form-control\" 
                    data-parsley-required=\"true\" 
                    data-parsley-minlength=\"2\"
                    data-parsley-group=\"block0\"
                />
            </div>
            <div class=\"form-group is-required\">
                <label>Last Name</label>
                <input type=\"text\" 
                    id=\"last-name\" 
                    name=\"last_name\" 
                    class=\"form-control\" 
                    data-parsley-required=\"true\" 
                    data-parsley-minlength=\"2\"
                    data-parsley-group=\"block0\"
                />
            </div>

            <div class=\"row\">
                <div class=\"form-group is-required birthdate col-md-6 col-sm-6\">
                    <label>Date of Birth</label>
                    <select name=\"birthday[month]\" id=\"month\">
                        <option value=\"1\">January</option>
                        <option value=\"2\">February</option>
                        <option value=\"3\">March</option>
                        <option value=\"4\">April</option>
                        <option value=\"5\">May</option>
                        <option value=\"6\">June</option>
                        <option value=\"7\">July</option>
                        <option value=\"8\">August</option>
                        <option value=\"9\">September</option>
                        <option value=\"10\">October</option>
                        <option value=\"11\">November</option>
                        <option value=\"12\">Decemember</option>
                    </select>

                    <select name=\"birthday[day]\" id=\"day\">
                        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "                            <option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </select>

                    <select name=\"birthday[year]\" id=\"year\">
                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2015, 1900));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            echo "                        <option>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </select>
<!--                     <div id=\"DatePicker-birthdate\" 
                        class=\"field-datepicker\" 
                        data-control=\"datepicker\" 
                        data-min-date=\"1900-01-01\" 
                        data-max-date=\"2020-12-31\"
                    >
                    <input type=\"text\" 
                        id=\"birth-date\" 
                        name=\"birth_date\" 
                        class=\"form-control disabled\" 
                        autocomplete=\"off\"
                        data-parsley-pattern=\"/^(\\d{4})\\D?(0[1-9]|1[0-2])\\D?([12]\\d|0[1-9]|3[01])\$/\"
                        data-parsley-error-message=\"Enter a valid date\"
                        data-parsley-required=\"true\"
                        data-parsley-group=\"block0\"
                    >
                    </div> -->
                </div>

                <div class=\"form-group col-md-6 col-sm-6 is-required\">
                    <label>Zip</label>
                    <input type=\"number\" 
                        name=\"zip\" 
                        class=\"form-control\" 
                        data-parsley-type=\"number\"
                        data-parsley-required=\"true\"
                        data-parsley-length=\"[5, 5]\"
                        data-parsley-error-message=\"Please enter a valid zipcode\"
                        data-parsley-group=\"block0\"
                    />
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class=\"item item-2\">
            <div class=\"registration-step\">Step 2 of 6</div>
            <h3>Account information</h3>
            <p>
We will use your e-mail address consistent with the privacy policy to send you messages concerning your Friends membership.
            </p>
<!--             <div class=\"form-group is-required\">
                <label>Username</label>
                <input type=\"text\" 
                    id=\"name\" 
                    name=\"username\" 
                    class=\"form-control\"
                    data-parsley-required=\"true\"
                    data-parsley-minlength=\"6\"
                    data-parsley-group=\"block1\"
                />
            </div> -->
            <div class=\"form-group is-required\">
                <label>Email</label>
                <input type=\"email\" 
                    id=\"email\" 
                    name=\"email\" 
                    class=\"form-control\"
                    data-parsley-required=\"true\"
                    data-parsley-type=\"email\"
                    data-parsley-group=\"block1\"
                    data-parsley-remote
                    data-parsley-remote-validator=\"validateUsername\"
                    data-parsley-trigger=\"change focusout\"
                    data-parsley-remote-message=\"A user with this email address already exists.\"
                    data-parsley-remote-options='{ \"type\": \"POST\", \"dataType\": \"json\", \"headers\": {\t\"X-OCTOBER-REQUEST-HANDLER\": \"onAvailableUser\", \"X-OCTOBER-REQUEST-PARTIALS\":\"\" }}'
                    />
            </div>

            <div class=\"form-group\">
                <label>
                    <input type=\"checkbox\" name=\"email_optin\" value=\"1\" checked=\"checked\"/> 
                    Please send me e-mail concerning other DMA news, events, and offerings. I understand I may unsubscribe later if I choose to do so.
                </label>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class=\"item item-3\">
            <div class=\"registration-step\">Step 3 of 6</div>
            <h3>Create a Password</h3>
            <p>
Your password is used for security and verification purposes. Your password is private, so please keep it safe!
            </p>
            <div class=\"form-group is-required\">
                <label class=\"control-label\" for=\"password\">Password</label>
                <input 
                    id=\"password\" 
                    type=\"password\" 
                    name=\"password\" 
                    class=\"form-control\" 
                    data-parsley-required=\"true\"
                    data-parsley-minlength=\"6\"
                    data-parsley-group=\"block2\"
                />
            </div>
                <div class=\"form-group is-required\">
                <label class=\"control-label\" for=\"password-confirmation\">Password Confirm</label>
                <input 
                    id=\"password-confirmation\" 
                    type=\"password\" 
                    name=\"password_confirmation\" 
                    class=\"form-control\" 
                    data-parsley-required=\"true\"
                    data-parsley-minlength=\"6\"
                    data-parsley-equalto=\"#password\"
                    data-parsley-group=\"block2\"
                />
            </div>
        </div>

        <!-- Slide 4 -->
        <div class=\"item item-4\">
            <div class=\"registration-step\">Step 4 of 6</div>
            <h3>Contact Info</h3>
Sharing your mobile number with DMA Friends is optional but enables you to use Friends in new ways. By entering your phone number here, you agree to allow us to text message you occasionally about your friends membership and your activities.
            <div class=\"form-group\">
                <label>Cell Number</label>
                <input type=\"text\" 
                    name=\"phone\" 
                    class=\"form-control\"
                />
            </div>
            <div class=\"form-group\">
                <label>Street Address</label>
                <input type=\"text\" name=\"street_addr\" class=\"form-control\"/>
            </div>

            <div class=\"row\">
                <div class=\"form-group col-md-6 col-sm-6\">
                    <label>City</label>
                    <input type=\"text\" name=\"city\" class=\"form-control\"/>
                </div>
                <div class=\"form-group col-md-6 col-sm-6\">
                    <label>State</label>
                    <select name=\"state\" class=\"form-control\">
                        <option value=\"\">- Choose a state -</option>
                    ";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "states", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
            // line 202
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["state"], "name", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
                    </select>
                </div>
            </div>
        </div>

        <!-- Slide 5 -->
        <div class=\"item item-5\">
            <div class=\"registration-step\">Step 5 of 6</div>
            ";
        // line 213
        echo (isset($context["avatars"]) ? $context["avatars"] : null);
        echo "
            <div class=\"is-required\">
                <input type=\"hidden\" 
                    name=\"avatar\" 
                    id=\"avatar\" 
                    data-parsley-required=\"true\"
                />
            </div>
        </div>

        <!-- Slide 6 -->
<!-- UNCOMMENT TO ENABLE DEMOGRAPHIC INFORMATION IN REGISTRATION FORM
        <div class=\"item\">
            <h3>Demographic Information</h3>
<span class=\"small\">
Answering questions about your demographic background is optional. The DMA wants to know this information so we can improve the visitor experience of the Museum. The DMA will never share or use your information for purposes outside the Museum.
</span>
            <div class=\"form-group\">
                <label>Gender</label>
                <select id=\"gender\" name=\"gender\" class=\"form-control\">
                    <option value=\"\">Choose not to disclose</option>
                <?php foreach (\$options['gender'] as \$option) { ?>
                    <option><?= \$option ?></option>
                <?php } ?>
                </select>
            </div>
            <div class=\"form-group\">
                <label>Race</label>
                <select name=\"race\" class=\"form-control\">
                    <option value=\"\"> - Select One - </option>
                <?php foreach (\$options['race'] as \$option) { ?>
                    <option><?= \$option ?></option>
                <?php } ?>
                </select>
            </div>
            <div class=\"form-group\">
                <label>Education</label>
                <select name=\"education\" class=\"form-control\">
                    <option value=\"\"> - Select One - </option>
                <?php foreach (\$options['education'] as \$option) { ?>
                    <option><?= \$option ?></option>
                <?php } ?>
                </select>
            </div>

            <div class=\"form-group\">
                <label>Household Income</label>
                <select name=\"household_income\" class=\"form-control\">
                    <option value=\"\"> - Select One - </option>

                <?php foreach (\$options['household_income'] as \$option) { ?>
                    <option><?= \$option ?></option>
                <?php } ?>
                </select>
            </div>
            <div class=\"form-group\">
                <label>Number of people in your household</label>
                <select name=\"household_size\" class=\"form-control\">
                    <option value=\"\"> - Select One - </option>

                <?php for (\$i = 1; \$i < 10; \$i++) { ?>
                    <option><?= \$i?></option>
                <?php } ?>
                    <option>10+</option>
                </select>
            </div>

        </div> -->

        <!-- Slide 6 -->
        <div class=\"item item-6\">
            <div class=\"registration-step\">Step 6 of 6</div>
            <div class=\"terms\">
                ";
        // line 286
        echo (isset($context["terms"]) ? $context["terms"] : null);
        echo "
            </div>
        </div>

      </div>

    </div>

    <div class=\"buttons\">
        <button class=\"registration-prev btn btn-primary icon-arrow-left\" href=\"#carousel-register\" role=\"button\" data-slide=\"prev\">&nbsp;</a>
        <button class=\"registration-next btn btn-primary\" href=\"#carousel-register\" role=\"button\" data-slide=\"next\">Continue</a>
     
        <button type=\"submit\" data-request=\"onRegisterSubmit\" class=\"register btn btn-primary\">Accept Terms and Conditions</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"popup\">Cancel</button>
    </div>
</form>

<script src=\"/themes/friends/assets/javascript/registration-form.js\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/partials/register-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 286,  271 => 213,  260 => 204,  249 => 202,  245 => 201,  105 => 63,  96 => 61,  92 => 60,  87 => 57,  78 => 55,  74 => 54,  19 => 1,);
    }
}
