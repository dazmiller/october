<?php

/* C:\lamp\www\october/plugins/rainlab/googleanalytics/components/tracker/default.htm */
class __TwigTemplate_0de52295a8ccb62641cf49d9b3342d378f61365cf52349b79eaacb2e40a5ffe1 extends Twig_Template
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
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "trackingId", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "domainName", array()), "html", null, true);
        echo "');
  ga('send', 'pageview');

</script>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/rainlab/googleanalytics/components/tracker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
