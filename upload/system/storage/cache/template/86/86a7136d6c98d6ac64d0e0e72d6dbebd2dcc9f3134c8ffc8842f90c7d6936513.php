<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/d_visual_designer/designer.twig */
class __TwigTemplate_e27263a549e9c6ee9a01146f7ae6c82c4852a018e6bfcd637933e9a11e4efb51 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        riot.compile(";
        // line 3
        echo json_encode(($context["riot_tags"] ?? null));
        echo ", function(){
            d_visual_designer.initLocal(";
        // line 4
        echo json_encode(($context["local"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo ")
            d_visual_designer.initOptions(";
        // line 5
        echo json_encode(($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo ")
            d_visual_designer.initState(";
        // line 6
        echo json_encode(($context["state"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo ")
            d_visual_designer.initContent();
        })
    })
</script>";
    }

    public function getTemplateName()
    {
        return "extension/d_visual_designer/designer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_visual_designer/designer.twig", "");
    }
}
