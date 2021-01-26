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

/* measurement/shirt_add.twig */
class __TwigTemplate_95aa23a92abb2c5805d7cfac2d3efd6b686945b1c65d68d749cce48c9e699d73 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-admin\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>

      
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shirt\" class=\"form-horizontal\">

            <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 32
        echo ($context["entry_length"] ?? null);
        echo "</label>
                <div class=\"col-sm-1\">
                  <input type=\"text\" name=\"length\" value=\"";
        // line 34
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                  ";
        // line 35
        if (($context["error_length"] ?? null)) {
            // line 36
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_length"] ?? null);
            echo "</div>
                  ";
        }
        // line 38
        echo "                </div>
              </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-shoulder\">";
        // line 41
        echo ($context["entry_shoulder"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              <input type=\"text\" name=\"shoulder\" value=\"";
        // line 43
        echo ($context["shoulder"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_shoulder"] ?? null);
        echo "\" id=\"input-shoulder\" class=\"form-control\" />
              ";
        // line 44
        if (($context["error_shoulder"] ?? null)) {
            // line 45
            echo "              <div class=\"text-danger\">";
            echo ($context["error_shoulder"] ?? null);
            echo "</div>
              ";
        }
        // line 47
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-cuff_h\">";
        // line 50
        echo ($context["entry_cuff_h"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"cuff_h\" value=\"";
        // line 52
        echo ($context["cuff_h"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cuff_h"] ?? null);
        echo "\" id=\"input-cuff_h\" class=\"form-control\" />
              ";
        // line 53
        if (($context["error_cuff_h"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_cuff_h"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-cuff_o\">";
        // line 60
        echo ($context["entry_cuff_o"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"cuff_o\" value=\"";
        // line 62
        echo ($context["cuff_o"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cuff_o"] ?? null);
        echo "\" id=\"input-cuff_o\" class=\"form-control\" />
              ";
        // line 63
        if (($context["error_cuff_o"] ?? null)) {
            // line 64
            echo "              <div class=\"text-danger\">";
            echo ($context["error_cuff_o"] ?? null);
            echo "</div>
              ";
        }
        // line 66
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-chest_f\">";
        // line 69
        echo ($context["entry_chest_f"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"chest_f\" value=\"";
        // line 71
        echo ($context["chest_f"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_chest_f"] ?? null);
        echo "\" id=\"input-chest_f\" class=\"form-control\" />
              ";
        // line 72
        if (($context["error_chest_f"] ?? null)) {
            // line 73
            echo "              <div class=\"text-danger\">";
            echo ($context["error_chest_f"] ?? null);
            echo "</div>
              ";
        }
        // line 75
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-chest_b\">";
        // line 78
        echo ($context["entry_chest_b"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"chest_b\" value=\"";
        // line 80
        echo ($context["chest_b"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_chest_b"] ?? null);
        echo "\" id=\"input-chest_b\" class=\"form-control\" />
              ";
        // line 81
        if (($context["error_chest_b"] ?? null)) {
            // line 82
            echo "              <div class=\"text-danger\">";
            echo ($context["error_chest_b"] ?? null);
            echo "</div>
              ";
        }
        // line 84
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-hip\">";
        // line 87
        echo ($context["entry_hip"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"hip\" value=\"";
        // line 89
        echo ($context["hip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_hip"] ?? null);
        echo "\" id=\"input-hip\" class=\"form-control\" />
              ";
        // line 90
        if (($context["error_hip"] ?? null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo ($context["error_hip"] ?? null);
            echo "</div>
              ";
        }
        // line 93
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-collar\">";
        // line 97
        echo ($context["entry_collar"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"collar\" value=\"";
        // line 99
        echo ($context["collar"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_collar"] ?? null);
        echo "\" id=\"input-collar\" class=\"form-control\" />
              ";
        // line 100
        if (($context["error_collar"] ?? null)) {
            // line 101
            echo "              <div class=\"text-danger\">";
            echo ($context["error_collar"] ?? null);
            echo "</div>
              ";
        }
        // line 103
        echo "            </div>
          </div>


          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 108
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 111
        if (($context["status"] ?? null)) {
            // line 112
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 113
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 115
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 116
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 118
        echo "              </select>
            </div>
          </div>
          
          </div>
        </form>
      </div>
    </div>
  </div>
 
";
    }

    public function getTemplateName()
    {
        return "measurement/shirt_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 118,  329 => 116,  324 => 115,  319 => 113,  314 => 112,  312 => 111,  306 => 108,  299 => 103,  293 => 101,  291 => 100,  285 => 99,  280 => 97,  274 => 93,  268 => 91,  266 => 90,  260 => 89,  255 => 87,  250 => 84,  244 => 82,  242 => 81,  236 => 80,  231 => 78,  226 => 75,  220 => 73,  218 => 72,  212 => 71,  207 => 69,  202 => 66,  196 => 64,  194 => 63,  188 => 62,  183 => 60,  177 => 56,  171 => 54,  169 => 53,  163 => 52,  158 => 50,  153 => 47,  147 => 45,  145 => 44,  139 => 43,  134 => 41,  129 => 38,  123 => 36,  121 => 35,  115 => 34,  110 => 32,  104 => 29,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/shirt_add.twig", "");
    }
}
