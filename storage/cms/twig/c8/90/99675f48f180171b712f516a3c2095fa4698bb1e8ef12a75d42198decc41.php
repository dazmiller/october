<?php

/* C:\lamp\www\october/plugins/dma/friends/components/usertimeout/timeout-modal.htm */
class __TwigTemplate_c89099675f48f180171b712f516a3c2095fa4698bb1e8ef12a75d42198decc41 extends Twig_Template
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
        echo "<p>For security, please enter your password to remain logged in.
You will automatically be logged out for inactivity in <span class=\"time\"></span> seconds.</p>

<form id=\"stay-logged-in\" method=\"post\">
    <div class=\"form-group\">
        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Enter your password\" />
    </div>
    
    <div class=\"buttons\">
        <a role=\"button\" class=\"timeout-logged-in btn btn-info\" data-request=\"onStayLoggedIn\">Stay logged in</a>
        <a role=\"button\" class=\"timeout-logout btn btn-default\" data-request=\"onLogout\">Logout</a>
    </div>
</form>

<script type=\"text/javascript\">
\$(document).trigger('modal.open');
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/usertimeout/timeout-modal.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
