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

/* measurement/pants_add.twig */
class __TwigTemplate_ee1fac46ba872f6a7eed5b4356ea6e02e635fbafc31eb9e71200fa170130b908 extends \Twig\Template
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-measurement\" class=\"form-horizontal\">

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
            <label class=\"col-sm-2 control-label\" for=\"input-bottom\">";
        // line 41
        echo ($context["entry_bottom"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              <input type=\"text\" name=\"bottom\" value=\"";
        // line 43
        echo ($context["bottom"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bottom"] ?? null);
        echo "\" id=\"input-bottom\" class=\"form-control\" />
              ";
        // line 44
        if (($context["error_bottom"] ?? null)) {
            // line 45
            echo "              <div class=\"text-danger\">";
            echo ($context["error_bottom"] ?? null);
            echo "</div>
              ";
        }
        // line 47
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-waist\">";
        // line 50
        echo ($context["entry_waist"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"waist\" value=\"";
        // line 52
        echo ($context["waist"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_waist"] ?? null);
        echo "\" id=\"input-waist\" class=\"form-control\" />
              ";
        // line 53
        if (($context["error_waist"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_waist"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-hip\">";
        // line 59
        echo ($context["entry_hip"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"hip\" value=\"";
        // line 61
        echo ($context["hip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_hip"] ?? null);
        echo "\" id=\"input-hip\" class=\"form-control\" />
              ";
        // line 62
        if (($context["error_hip"] ?? null)) {
            // line 63
            echo "              <div class=\"text-danger\">";
            echo ($context["error_hip"] ?? null);
            echo "</div>
              ";
        }
        // line 65
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-crotch\">";
        // line 68
        echo ($context["entry_crotch"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"crotch\" value=\"";
        // line 70
        echo ($context["crotch"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_crotch"] ?? null);
        echo "\" id=\"input-crotch\" class=\"form-control\" />
              ";
        // line 71
        if (($context["error_crotch"] ?? null)) {
            // line 72
            echo "              <div class=\"text-danger\">";
            echo ($context["error_crotch"] ?? null);
            echo "</div>
              ";
        }
        // line 74
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-leg\">";
        // line 77
        echo ($context["entry_leg"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"leg\" value=\"";
        // line 79
        echo ($context["leg"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_leg"] ?? null);
        echo "\" id=\"input-leg\" class=\"form-control\" />
              ";
        // line 80
        if (($context["error_leg"] ?? null)) {
            // line 81
            echo "              <div class=\"text-danger\">";
            echo ($context["error_leg"] ?? null);
            echo "</div>
              ";
        }
        // line 83
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-knee\">";
        // line 86
        echo ($context["entry_knee"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <input type=\"text\" name=\"knee\" value=\"";
        // line 88
        echo ($context["knee"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_knee"] ?? null);
        echo "\" id=\"input-knee\" class=\"form-control\" />
              ";
        // line 89
        if (($context["error_knee"] ?? null)) {
            // line 90
            echo "              <div class=\"text-danger\">";
            echo ($context["error_knee"] ?? null);
            echo "</div>
              ";
        }
        // line 92
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 96
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 99
        if (($context["status"] ?? null)) {
            // line 100
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 101
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 103
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 104
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 106
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
        return "measurement/pants_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 106,  302 => 104,  297 => 103,  292 => 101,  287 => 100,  285 => 99,  279 => 96,  273 => 92,  267 => 90,  265 => 89,  259 => 88,  254 => 86,  249 => 83,  243 => 81,  241 => 80,  235 => 79,  230 => 77,  225 => 74,  219 => 72,  217 => 71,  211 => 70,  206 => 68,  201 => 65,  195 => 63,  193 => 62,  187 => 61,  182 => 59,  177 => 56,  171 => 54,  169 => 53,  163 => 52,  158 => 50,  153 => 47,  147 => 45,  145 => 44,  139 => 43,  134 => 41,  129 => 38,  123 => 36,  121 => 35,  115 => 34,  110 => 32,  104 => 29,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/pants_add.twig", "");
    }
}
