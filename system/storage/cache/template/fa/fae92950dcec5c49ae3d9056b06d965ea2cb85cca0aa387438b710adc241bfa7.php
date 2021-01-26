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

/* measurement/measurement_list.twig */
class __TwigTemplate_910be83ae3e4975360521689844ffcf537631b27ba9d1d824d979dc85d22f12b extends \Twig\Template
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
        // line 39
        if ((($context["sort"] ?? null) == "admin_name")) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "username")) {
            echo "<a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_username"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_username"] ?? null);
            echo "\">";
            echo ($context["column_username"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
        if ((($context["sort"] ?? null) == "department")) {
            echo "<a href=\"";
            echo ($context["sort_department"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_department"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_department"] ?? null);
            echo "\">";
            echo ($context["column_department"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 42
        if ((($context["sort"] ?? null) == "position")) {
            echo "<a href=\"";
            echo ($context["sort_position"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_position"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_position"] ?? null);
            echo "\">";
            echo ($context["column_position"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
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
        // line 44
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
        // line 45
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
        // line 46
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
              ";
        // line 50
        if (($context["admins"] ?? null)) {
            // line 51
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 52
                echo "              <tr>
                <td class=\"text-center\">";
                // line 53
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "admin_id", [], "any", false, false, false, 53), ($context["selected"] ?? null))) {
                    // line 54
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["admin"], "admin_id", [], "any", false, false, false, 54);
                    echo "\" checked=\"checked\" />
                  ";
                } else {
                    // line 56
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["admin"], "admin_id", [], "any", false, false, false, 56);
                    echo "\" />
                  ";
                }
                // line 57
                echo "</td>
                <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "name", [], "any", false, false, false, 58);
                echo "</td>
                <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "username", [], "any", false, false, false, 59);
                echo "</td>
                <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "department", [], "any", false, false, false, 60);
                echo "</td>
                <td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "position", [], "any", false, false, false, 61);
                echo "</td>
                <td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "status", [], "any", false, false, false, 62);
                echo "</td>
                <td class=\"text-left\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "date_added", [], "any", false, false, false, 63);
                echo "</td>
                <td class=\"text-left\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "date_modified", [], "any", false, false, false, 64);
                echo "</td>
                <td class=\"text-right\">
                  <div class=\"btn-group\" style=\"min-width: 65px;\">
                    <a href=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["admin"], "edit", [], "any", false, false, false, 67);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li class=\"dropdown-header\">";
                // line 70
                echo ($context["text_option"] ?? null);
                echo "</li>
                      ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["admin"], "unlock", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["admin"], "unlock", [], "any", false, false, false, 72);
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                } else {
                    // line 74
                    echo "                      <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                }
                // line 76
                echo "                      <li role=\"separator\" class=\"divider\"></li>
                      <li class=\"dropdown-header\">";
                // line 77
                echo ($context["text_login"] ?? null);
                echo "</li>
                      ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["admin"], "store", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 79
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 79);
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 79);
                    echo "</a></li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                    </ul>
                  </div>
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "              ";
        } else {
            // line 87
            echo "              <tr>
                <td class=\"text-center\" colspan=\"11\">";
            // line 88
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 91
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 96
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 97
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 103
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "measurement/measurement_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 103,  398 => 97,  394 => 96,  387 => 91,  381 => 88,  378 => 87,  375 => 86,  365 => 81,  354 => 79,  350 => 78,  346 => 77,  343 => 76,  337 => 74,  329 => 72,  327 => 71,  323 => 70,  315 => 67,  309 => 64,  305 => 63,  301 => 62,  297 => 61,  293 => 60,  289 => 59,  285 => 58,  282 => 57,  276 => 56,  270 => 54,  268 => 53,  265 => 52,  260 => 51,  258 => 50,  251 => 46,  233 => 45,  215 => 44,  197 => 43,  179 => 42,  161 => 41,  143 => 40,  125 => 39,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/measurement_list.twig", "");
    }
}
