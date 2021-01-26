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

/* measurement/suit_list.twig */
class __TwigTemplate_00cefb949bf337ea29a6796051b6e3808bb9194e82eb444e17c4483b95762e7c extends \Twig\Template
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
        if ((($context["sort"] ?? null) == "shoulder")) {
            echo "<a href=\"";
            echo ($context["sort_shoulder"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_shoulder"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_shoulder"] ?? null);
            echo "\">";
            echo ($context["column_shoulder"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "cuff_h")) {
            echo "<a href=\"";
            echo ($context["sort_cuff_h"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_cuff_h"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_cuff_h"] ?? null);
            echo "\">";
            echo ($context["column_cuff_h"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "cuff_o")) {
            echo "<a href=\"";
            echo ($context["sort_cuff_o"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_cuff_o"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_cuff_o"] ?? null);
            echo "\">";
            echo ($context["column_cuff_o"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 42
        if ((($context["sort"] ?? null) == "chest_f")) {
            echo "<a href=\"";
            echo ($context["sort_chest_f"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_chest_f"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_chest_f"] ?? null);
            echo "\">";
            echo ($context["column_chest_f"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "chest_b")) {
            echo "<a href=\"";
            echo ($context["sort_chest_b"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_chest_b"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_chest_b"] ?? null);
            echo "\">";
            echo ($context["column_chest_b"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 44
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
        // line 45
        if ((($context["sort"] ?? null) == "collar")) {
            echo "<a href=\"";
            echo ($context["sort_collar"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_collar"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_collar"] ?? null);
            echo "\">";
            echo ($context["column_collar"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 46
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
        // line 47
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
        // line 48
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
        // line 49
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
              ";
        // line 53
        if (($context["suits"] ?? null)) {
            // line 54
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["suits"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["suit"]) {
                // line 55
                echo "              <tr>
                <td class=\"text-center\">";
                // line 56
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["suit"], "suit_id", [], "any", false, false, false, 56), ($context["selected"] ?? null))) {
                    // line 57
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["suit"], "suit_id", [], "any", false, false, false, 57);
                    echo "\" checked=\"checked\" />
                  ";
                } else {
                    // line 59
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["suit"], "suit_id", [], "any", false, false, false, 59);
                    echo "\" />
                  ";
                }
                // line 60
                echo "</td>
                <td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "length", [], "any", false, false, false, 61);
                echo "</td>
                <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "shoulder", [], "any", false, false, false, 62);
                echo "</td>
                <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "cuff_h", [], "any", false, false, false, 63);
                echo "</td>
                <td class=\"text-left\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "cuff_o", [], "any", false, false, false, 64);
                echo "</td>
                <td class=\"text-left\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "chest_f", [], "any", false, false, false, 65);
                echo "</td>
                <td class=\"text-left\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "chest_b", [], "any", false, false, false, 66);
                echo "</td>
                <td class=\"text-left\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "hip", [], "any", false, false, false, 67);
                echo "</td>
                <td class=\"text-left\">";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "collar", [], "any", false, false, false, 68);
                echo "</td>
                <td class=\"text-left\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "status", [], "any", false, false, false, 69);
                echo "</td>
                <td class=\"text-left\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "date_added", [], "any", false, false, false, 70);
                echo "</td>
                <td class=\"text-left\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "date_modified", [], "any", false, false, false, 71);
                echo "</td>
                <td class=\"text-right\">
                  <div class=\"btn-group\" style=\"min-width: 65px;\">
                    <a href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["suit"], "edit", [], "any", false, false, false, 74);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li class=\"dropdown-header\">";
                // line 77
                echo ($context["text_option"] ?? null);
                echo "</li>
                      ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["suit"], "unlock", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["suit"], "unlock", [], "any", false, false, false, 79);
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                } else {
                    // line 81
                    echo "                      <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                }
                // line 83
                echo "                      <li role=\"separator\" class=\"divider\"></li>
                      <li class=\"dropdown-header\">";
                // line 84
                echo ($context["text_login"] ?? null);
                echo "</li>
                      ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["suit"], "store", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 86
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 86);
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 86);
                    echo "</a></li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                    </ul>
                  </div>
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "              ";
        } else {
            // line 94
            echo "              <tr>
                <td class=\"text-center\" colspan=\"12\">";
            // line 95
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 98
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 103
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 104
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 110
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "measurement/suit_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 110,  485 => 104,  481 => 103,  474 => 98,  468 => 95,  465 => 94,  462 => 93,  452 => 88,  441 => 86,  437 => 85,  433 => 84,  430 => 83,  424 => 81,  416 => 79,  414 => 78,  410 => 77,  402 => 74,  396 => 71,  392 => 70,  388 => 69,  384 => 68,  380 => 67,  376 => 66,  372 => 65,  368 => 64,  364 => 63,  360 => 62,  356 => 61,  353 => 60,  347 => 59,  341 => 57,  339 => 56,  336 => 55,  331 => 54,  329 => 53,  322 => 49,  304 => 48,  286 => 47,  268 => 46,  250 => 45,  232 => 44,  214 => 43,  196 => 42,  178 => 41,  160 => 40,  142 => 39,  124 => 38,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/suit_list.twig", "");
    }
}
