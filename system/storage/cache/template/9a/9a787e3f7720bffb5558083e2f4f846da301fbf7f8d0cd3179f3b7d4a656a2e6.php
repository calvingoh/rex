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

/* measurement/measurement_add.twig */
class __TwigTemplate_0233a0b38e6eda5e26cfc28dab37e2fefc1754f93fa598225fa4f5d7e0f96fb8 extends \Twig\Template
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-admin\" class=\"form-horizontal\">

            <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 35
        if (($context["error_name"] ?? null)) {
            // line 36
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 38
        echo "                </div>
              </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 41
        echo ($context["entry_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 43
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
              ";
        // line 44
        if (($context["error_username"] ?? null)) {
            // line 45
            echo "              <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
              ";
        }
        // line 47
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 50
        echo ($context["entry_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 52
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
              ";
        // line 53
        if (($context["error_username"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>


          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-position\">";
        // line 61
        echo ($context["entry_position"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"position_id\" id=\"input-position\" class=\"form-control\">
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["positions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
            // line 65
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["position"], "position_id", [], "any", false, false, false, 65) == ($context["position_id"] ?? null))) {
                // line 66
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["position"], "position_id", [], "any", false, false, false, 66);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["position"], "position_name", [], "any", false, false, false, 66);
                echo "</option>
                ";
            } else {
                // line 68
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["position"], "position_id", [], "any", false, false, false, 68);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["position"], "position_name", [], "any", false, false, false, 68);
                echo "</option>
                ";
            }
            // line 70
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-department\">";
        // line 76
        echo ($context["entry_department"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"department_id\" id=\"input-department\" class=\"form-control\">
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 80
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["department"], "department_id", [], "any", false, false, false, 80) == ($context["department_id"] ?? null))) {
                // line 81
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["department"], "department_id", [], "any", false, false, false, 81);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["department"], "department_name", [], "any", false, false, false, 81);
                echo "</option>
                ";
            } else {
                // line 83
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["department"], "department_id", [], "any", false, false, false, 83);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["department"], "department_name", [], "any", false, false, false, 83);
                echo "</option>
                ";
            }
            // line 85
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 91
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 94
        if (($context["status"] ?? null)) {
            // line 95
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                <option value=\"1\" selected=\"selected\">";
            // line 96
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 98
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                <option value=\"1\">";
            // line 99
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 101
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
        return "measurement/measurement_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 101,  291 => 99,  286 => 98,  281 => 96,  276 => 95,  274 => 94,  268 => 91,  261 => 86,  255 => 85,  247 => 83,  239 => 81,  236 => 80,  232 => 79,  226 => 76,  219 => 71,  213 => 70,  205 => 68,  197 => 66,  194 => 65,  190 => 64,  184 => 61,  177 => 56,  171 => 54,  169 => 53,  163 => 52,  158 => 50,  153 => 47,  147 => 45,  145 => 44,  139 => 43,  134 => 41,  129 => 38,  123 => 36,  121 => 35,  115 => 34,  110 => 32,  104 => 29,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/measurement_add.twig", "");
    }
}
