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

/* extension/module/d_visual_designer_module.twig */
class __TwigTemplate_186a196618d2b1a6def5efec0d97d16b6c7f73308256439663efda242f462633 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save_and_stay"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <button id=\"save_and_exit\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 34
        if (($context["setup"] ?? null)) {
            // line 35
            echo "                    <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-vd-module\"
                        class=\"form-horizontal\">
                        ";
            // line 37
            if ( !($context["designer_installed"] ?? null)) {
                // line 38
                echo "                            <div class=\"alert alert-info\" style=\"overflow: inherit;\">
                                <div class=\"row\">
                                    <div class=\"col-md-10\">";
                // line 40
                echo ($context["help_designer_support"] ?? null);
                echo " </div>
                                    <div class=\"col-md-2\"><a href=\"";
                // line 41
                echo ($context["install_designer_support"] ?? null);
                echo "\"
                                                            class=\"btn btn-primary btn-block\">";
                // line 42
                echo ($context["text_install_designer_support"] ?? null);
                echo "</a>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 47
            echo "                        ";
            if (($context["designer_installed"] ?? null)) {
                // line 48
                echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
                // line 49
                echo ($context["entry_name"] ?? null);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"name\" value=\"";
                // line 51
                echo ($context["name"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\"
                                        id=\"input-name\" class=\"form-control\"/>
                                    ";
                // line 53
                if (($context["error_name"] ?? null)) {
                    // line 54
                    echo "                                        <div class=\"text-danger\">";
                    echo ($context["error_name"] ?? null);
                    echo "</div>
                                    ";
                }
                // line 56
                echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
                // line 59
                echo ($context["entry_status"] ?? null);
                echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                                    
                                    <input type=\"checkbox\" name=\"status\" class=\"switcher\"
                                            data-label-text=\"";
                // line 64
                echo ($context["text_enabled"] ?? null);
                echo "\"
                                            id=\"input-status\" ";
                // line 65
                echo ((($context["status"] ?? null)) ? ("checked=\"checked\"") : (""));
                echo " value=\"1\"/>
                                    
                                </div>
                            </div>
                            <div class=\"tab-pane\">
                                <ul class=\"nav nav-tabs\" id=\"language\">
                                    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 72
                    echo "                                        <li><a href=\"#language";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
                    echo "\" data-toggle=\"tab\"><img
                                                        src=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 73);
                    echo "\"
                                                        title=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 74);
                    echo "\"/> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 74);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                                </ul>
                                <div class=\"tab-content\">
                                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 79
                    echo "                                        <div class=\"tab-pane\" id=\"language";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
                    echo "\">

                                            <div class=\"form-group\">
                                                <div class=\"col-sm-12\">
                                                    <div class=\"d_visual_designer_backend\"
                                                        data-name=\"description[";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
                    echo "][description]\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                                </div>
                            </div>
                        ";
            }
            // line 92
            echo "                    </form>
                ";
        } else {
            // line 94
            echo "                    ";
            echo ($context["text_setup"] ?? null);
            echo "
                ";
        }
        // line 96
        echo "            </div>
        </div>
    </div>
</div>
<style>
    .panel .note-toolbar.panel-heading {
        justify-content: left;
    }

    .alertify-notifier .ajs-message.ajs-success {
        font-size: 17px;
    }

    .alertify-notifier .ajs-message.ajs-error {
        font-size: 17px;
    }

    .alertify-notifier .ajs-message.ajs-warning {
        font-size: 17px;
    }
</style>
<script type=\"text/javascript\">

 var action_status = 0;

    function alert_handler(json)
    {
        if (json['error']) {

            for (i in json['error']) {
                alertify.error(json.error[i]);
            }
        }

        if (json['success']) {
            alertify.success(json['success']);
        }
    }
    \$('#language a:first').tab('show');

    \$(\".switcher[type='checkbox']\").bootstrapSwitch({
        'onColor': 'success',
        'onText': '";
        // line 138
        echo ($context["text_yes"] ?? null);
        echo "',
        'offText': '";
        // line 139
        echo ($context["text_no"] ?? null);
        echo "'
    });

    \$(document).on('click', '.setup', function(){
        window.location.href = '";
        // line 143
        echo ($context["setup_link"] ?? null);
        echo "';
    })

    \$('body').on('click', '#save_and_stay', function() {
            if (!action_status) {
                action_status = 1;

                \$.ajax( {
                    type: 'post',
                    url: \$('#form-vd-module').attr('action'),
                    data: \$('#form-vd-module').serialize(),
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#content').fadeTo('slow', 0.5);
                    },
                    complete: function() {
                        \$('#content').fadeTo('slow', 1);
                        action_status = 0;
                    },
                    success: function(json) {
                        alert_handler(json);

                        if(json['current_url']) {
                            window.history.pushState({}, \"\", json['current_url']);
                        }
                        if(json['action']) {
                             \$('#form-vd-module').attr('action', json.action)
                        }
                        if(json['module_id'] && typeof d_visual_designer != 'undefined') {
                            if(!d_visual_designer.state.config.id){
                                d_visual_designer.state.config.id = json.module_id
                                d_visual_designer.state.config.frontend += json.module_id
                                riot.update()
                            }

                        }

                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        });

    \$('body').on('click', '#save_and_exit', function() {
        if (!action_status) {
            action_status = 1;

            \$.ajax( {
                type: 'post',
                url: \$('#form-vd-module').attr('action'),
                data: \$('#form-vd-module').serialize(),
                dataType: 'json',
                beforeSend: function() {
                    \$('#content').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#content').fadeTo('slow', 1);
                    action_status = 0;
                },
                success: function(json) {
                    alert_handler(json);

                    window.setTimeout(function() {
                        if (json['success']) location = '";
        // line 208
        echo ($context["get_cancel"] ?? null);
        echo "';
                    }, 300);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    });

</script>
";
        // line 219
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_visual_designer_module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 219,  392 => 208,  324 => 143,  317 => 139,  313 => 138,  269 => 96,  263 => 94,  259 => 92,  254 => 89,  243 => 84,  234 => 79,  230 => 78,  226 => 76,  216 => 74,  212 => 73,  207 => 72,  203 => 71,  194 => 65,  190 => 64,  182 => 59,  177 => 56,  171 => 54,  169 => 53,  162 => 51,  157 => 49,  154 => 48,  151 => 47,  143 => 42,  139 => 41,  135 => 40,  131 => 38,  129 => 37,  123 => 35,  121 => 34,  115 => 31,  111 => 29,  103 => 25,  100 => 24,  92 => 20,  90 => 19,  84 => 15,  73 => 13,  69 => 12,  62 => 10,  55 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_visual_designer_module.twig", "");
    }
}
