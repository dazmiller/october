<?php

/* C:\lamp\www\october/themes/OctoberFriendsTheme/partials/header.htm */
class __TwigTemplate_2ef2d35e348b8d8ffcce693763320749f5fc4c353aebe98485746ebd5943b208 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Friends - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

        <link rel=\"Shortcut Icon\" href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
        <meta name=\"author\" content=\"Dallas Museum of Art\">
        <meta name=\"robots\" content=\"noindex,follow\">


        <!-- include apple icons and splash screens -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta content=\"yes\" name=\"apple-mobile-web-app-capable\">

        <!-- iPad -->
        <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/apple-touch-icon-72x72.png");
        echo "\" sizes=\"72x72\" rel=\"apple-touch-icon\">
        <link href=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/apple-touch-startup-image-768x1004.png");
        echo "\" media=\"(device-width: 768px) and (device-height: 1024px)
                 and (orientation: portrait)
                 and (-webkit-device-pixel-ratio: 1)\" rel=\"apple-touch-startup-image\">
        <link href=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/apple-touch-startup-image-748x1024.png");
        echo "\" media=\"(device-width: 768px) and (device-height: 1024px)
                 and (orientation: landscape)
                 and (-webkit-device-pixel-ratio: 1)\" rel=\"apple-touch-startup-image\">

        <!-- iPad (Retina) -->
        <link href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/apple-touch-icon-144x144.png");
        echo "\" sizes=\"144x144\" rel=\"apple-touch-icon\">
        <link href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/apple-touch-startup-image-1536x2008.png");
        echo "\" media=\"(device-width: 768px) and (device-height: 1024px)
                 and (orientation: portrait)
                 and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">
        <link href=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/apple-touch-startup-image-1496x2048.png");
        echo "\" media=\"(device-width: 768px) and (device-height: 1024px)
                 and (orientation: landscape)
                 and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">

        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" />
        ";
        // line 34
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 35
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "../../modules/backend/assets/css/october.css", 1 => "assets/vendor/bootstrap/css/bootstrap.css", 2 => "assets/vendor/jquery-ui/jquery-ui.css", 3 => "assets/vendor/jquery-ui/jquery-ui.structure.css", 4 => "assets/vendor/jquery-ui/jquery-ui.theme.css", 5 => "assets/vendor/parsley.css", 6 => "assets/css/theme.less", 7 => "assets/css/badge.css", 8 => "assets/css/reward.css", 9 => "assets/css/kiosk.css"));
        // line 46
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), "html", null, true);
        echo "\"
        ";
        // line 49
        if ( !(null === $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "image", array()))) {
            // line 50
            echo "        style=\"background-repeat: no-repeat;
        background-size: 100%;
        background-image: url('";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["location"]) ? $context["location"] : null), "image", array()), "getPath", array(), "method"), "html", null, true);
            echo "');\"
        ";
        }
        // line 54
        echo "    >

    <!-- Preloader -->
    <div id=\"preloader\">
        <div id=\"status\">&nbsp;</div>
    </div>
        
    <!-- Header -->
    <header id=\"layout-header\" data-spy=\"affix\" data-offset-top=\"60\">
        ";
        // line 63
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 64
            echo "        <!-- Nav -->
        <nav id=\"layout-nav\" class=\"navbar-inverse\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\">

                    <ul class=\"nav navbar-nav left\">
                        <li><img class=\"user-avatar\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array()), "getThumb", array(0 => 50, 1 => 50), "method"), "html", null, true);
            echo "\"></li>
                        <li><h4 class=\"user-name\">Hello, ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "metadata", array()), "first_name", array()), "html", null, true);
            echo "</h4></li>
                        <li><span class=\"points\">";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "points", array())), "html", null, true);
            echo " Points</span></li>
                    </ul>
                    <ul class=\"nav navbar-nav right\">
                        <li><a class=\"nav-item activity-feed icon-list\" href=\"/activity-stream\">Activity Stream</a></li>
                        <li>";
            // line 76
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("NotificationCounter"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            echo "</li>
                        <!--
                        <li><a class=\"nav-item group-feed icon-users\" href=\"/group\">Groups</a></li>
                        -->
                        <li><a class=\"nav-item user-logout icon-sign-out\" href=\"/logout\">Sign out</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        ";
        }
        // line 87
        echo "
    </header>

    <div id=\"flashMessages\">
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/OctoberFriendsTheme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 87,  142 => 76,  135 => 72,  131 => 71,  127 => 70,  119 => 64,  117 => 63,  106 => 54,  101 => 52,  97 => 50,  95 => 49,  91 => 48,  87 => 46,  84 => 35,  81 => 34,  77 => 33,  70 => 29,  64 => 26,  60 => 25,  52 => 20,  46 => 17,  42 => 16,  29 => 6,  24 => 4,  19 => 1,);
    }
}
