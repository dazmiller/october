<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/partials/footer.htm */
class __TwigTemplate_f15ace6e0be22516460582b517cd475fabfc8810ca41dfa2fe0e5c2ac9d115a3 extends Twig_Template
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
        echo "<!-- Scripts -->
        <script src=\"";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/vendor/bootstrap/js/bootstrap.js", 4 => "assets/vendor/jquery-ui/jquery-ui.js", 5 => "assets/vendor/parsley.remote.js", 6 => "assets/vendor/parsley.js", 7 => "assets/javascript/app.js"));
        // line 11
        echo "\"></script>
        ";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 13
        echo "
        ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  33 => 14,  30 => 13,  27 => 12,  24 => 11,  22 => 2,  19 => 1,);
    }
}
