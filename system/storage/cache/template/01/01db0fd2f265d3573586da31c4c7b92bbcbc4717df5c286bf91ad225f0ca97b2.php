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

/* measurement/pants_list.twig */
class __TwigTemplate_91da44685d40f37e7f243753ddecb1b1d7fa4274ecf698643881f3a71a7f9529 extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-admin').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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

  <div class=\"container-fluid\">";
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-admin\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <td style=\"width: 5px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "length")) {
            echo "<a href=\"";
            echo ($context["sort_length"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_length"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_length"] ?? null);
            echo "\">";
            echo ($context["column_length"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 39
        if ((($context["sort"] ?? null) == "bottom")) {
            echo "<a href=\"";
            echo ($context["sort_bottom"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_bottom"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_bottom"] ?? null);
            echo "\">";
            echo ($context["column_bottom"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "waist")) {
            echo "<a href=\"";
            echo ($context["sort_waist"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_waist"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_pwaist"] ?? null);
            echo "\">";
            echo ($context["column_waist"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "hip")) {
            echo "<a href=\"";
            echo ($context["hip"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_hip"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_hip"] ?? null);
            echo "\">";
            echo ($context["column_hip"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 42
        if ((($context["sort"] ?? null) == "crotch")) {
            echo "<a href=\"";
            echo ($context["sort_crotch"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_crotch"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_crotch"] ?? null);
            echo "\">";
            echo ($context["column_crotch"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "leg")) {
            echo "<a href=\"";
            echo ($context["sort_leg"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_leg"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_leg"] ?? null);
            echo "\">";
            echo ($context["column_leg"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 44
        if ((($context["sort"] ?? null) == "knee")) {
            echo "<a href=\"";
            echo ($context["sort_knee"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_knee"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_knee"] ?? null);
            echo "\">";
            echo ($context["column_knee"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 45
        if ((($context["sort"] ?? null) == "status")) {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 46
        if ((($context["sort"] ?? null) == "date_added")) {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 47
        if ((($context["sort"] ?? null) == "date_modified")) {
            echo "<a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
              ";
        // line 52
        if (($context["pantss"] ?? null)) {
            // line 53
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pantss"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pants"]) {
                // line 54
                echo "              <tr>
                <td class=\"text-center\">";
                // line 55
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["pants"], "pants_id", [], "any", false, false, false, 55), ($context["selected"] ?? null))) {
                    // line 56
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pants"], "pants_id", [], "any", false, false, false, 56);
                    echo "\" checked=\"checked\" />
                  ";
                } else {
                    // line 58
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pants"], "pants_id", [], "any", false, false, false, 58);
                    echo "\" />
                  ";
                }
                // line 59
                echo "</td>
                <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "length", [], "any", false, false, false, 60);
                echo "</td>
                <td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "bottom", [], "any", false, false, false, 61);
                echo "</td>
                <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "waist", [], "any", false, false, false, 62);
                echo "</td>
                <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "hip", [], "any", false, false, false, 63);
                echo "</td>
                <td class=\"text-left\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "crotch", [], "any", false, false, false, 64);
                echo "</td>
                <td class=\"text-left\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "leg", [], "any", false, false, false, 65);
                echo "</td>
                <td class=\"text-left\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "knee", [], "any", false, false, false, 66);
                echo "</td>
                <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "status", [], "any", false, false, false, 67);
                echo "</td>
                <td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "date_added", [], "any", false, false, false, 68);
                echo "</td>
                <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "date_modified", [], "any", false, false, false, 69);
                echo "</td>
                <td class=\"text-right\">
                  <div class=\"btn-group\" style=\"min-width: 65px;\">
                    <a href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["pants"], "edit", [], "any", false, false, false, 72);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li class=\"dropdown-header\">";
                // line 75
                echo ($context["text_option"] ?? null);
                echo "</li>
                      ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["pants"], "unlock", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pants"], "unlock", [], "any", false, false, false, 77);
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                } else {
                    // line 79
                    echo "                      <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                }
                // line 81
                echo "                      <li role=\"separator\" class=\"divider\"></li>
                      <li class=\"dropdown-header\">";
                // line 82
                echo ($context["text_login"] ?? null);
                echo "</li>
                      ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["pants"], "store", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 84
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 84);
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 84);
                    echo "</a></li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                    </ul>
                  </div>
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pants'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "              ";
        } else {
            // line 92
            echo "              <tr>
                <td class=\"text-center\" colspan=\"12\">";
            // line 93
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 96
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 101
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 102
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 108
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "measurement/pants_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 108,  463 => 102,  459 => 101,  452 => 96,  446 => 93,  443 => 92,  440 => 91,  430 => 86,  419 => 84,  415 => 83,  411 => 82,  408 => 81,  402 => 79,  394 => 77,  392 => 76,  388 => 75,  380 => 72,  374 => 69,  370 => 68,  366 => 67,  362 => 66,  358 => 65,  354 => 64,  350 => 63,  346 => 62,  342 => 61,  338 => 60,  335 => 59,  329 => 58,  323 => 56,  321 => 55,  318 => 54,  313 => 53,  311 => 52,  304 => 48,  286 => 47,  268 => 46,  250 => 45,  232 => 44,  214 => 43,  196 => 42,  178 => 41,  160 => 40,  142 => 39,  124 => 38,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/pants_list.twig", "");
    }
}
