<?php

/* C:\lamp\www\october/plugins/dma/friends/components/activitycodeform/default.htm */
class __TwigTemplate_f6dca786ce7d24b9e4408901b3c61541347c60b78569a4e441017c86a8ec0284 extends Twig_Template
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
        echo "<div class=\"dma-code-input\">  
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onSubmit", array("class" => "activity-code", "success" => "\$('#activity-code').val('')")));
        echo "
        <input id=\"activity-code\" type=\"text\" name=\"activity_code\" placeholder=\"Enter Activity Code\">
        <button class=\"secondary\" type=\"submit\">Go</button>
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

    ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['linkTitle'] = "What kinds of codes can I enter?"        ;
        $context['__cms_component_params']['linkClasses'] = "help small pop"        ;
        $context['__cms_component_params']['title'] = "What kinds of codes can I enter?"        ;
        $context['__cms_component_params']['partial'] = "whatkindofcodes"        ;
        echo $this->env->getExtension('CMS')->componentFunction("Modal"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/plugins/dma/friends/components/activitycodeform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  33 => 7,  28 => 5,  22 => 2,  19 => 1,);
    }
}
