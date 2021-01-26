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
class __TwigTemplate_fff4639b9146cf0b5717987b9688890ccdac6ef999c4326f62e740263bf110e0 extends \Twig\Template
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
        if ((($context["sort"] ?? null) == "telephone")) {
            echo "<a href=\"";
            echo ($context["sort_telephone"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_telephone"] ?? null);
            echo "</a> ";
        } else {
            echo "<a href=\"";
            echo ($context["sort_telephone"] ?? null);
            echo "\">";
            echo ($context["column_telephone"] ?? null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 41
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
        // line 42
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
        // line 43
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
        // line 44
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
              ";
        // line 48
        if (($context["measurements"] ?? null)) {
            // line 49
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["measurements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["measurement"]) {
                // line 50
                echo "              <tr>
                <td class=\"text-center\">";
                // line 51
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["measurement"], "measurement_id", [], "any", false, false, false, 51), ($context["selected"] ?? null))) {
                    // line 52
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["measurement"], "measurement_id", [], "any", false, false, false, 52);
                    echo "\" checked=\"checked\" />
                  ";
                } else {
                    // line 54
                    echo "                  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["measurement"], "measurement_id", [], "any", false, false, false, 54);
                    echo "\" />
                  ";
                }
                // line 55
                echo "</td>
                <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["measurement"], "name", [], "any", false, false, false, 56);
                echo "</td>
                <td class=\"text-left\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["measurement"], "telephone", [], "any", false, false, false, 57);
                echo "</td>
                <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["measurement"], "status", [], "any", false, false, false, 58);
                echo "</td>
                <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["measurement"], "date_added", [], "any", false, false, false, 59);
                echo "</td>
                <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["measurement"], "date_modified", [], "any", false, false, false, 60);
                echo "</td>
                <td class=\"text-right\">
                  <div class=\"btn-group\" style=\"min-width: 65px;\">
                    <a href=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["measurement"], "edit", [], "any", false, false, false, 63);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li class=\"dropdown-header\">";
                // line 66
                echo ($context["text_option"] ?? null);
                echo "</li>
                      ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["measurement"], "unlock", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["measurement"], "unlock", [], "any", false, false, false, 68);
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                } else {
                    // line 70
                    echo "                      <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                      ";
                }
                // line 72
                echo "                      <li role=\"separator\" class=\"divider\"></li>
                      <li class=\"dropdown-header\">";
                // line 73
                echo ($context["text_login"] ?? null);
                echo "</li>
                      ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["measurement"], "store", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 75
                    echo "                      <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 75);
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 75);
                    echo "</a></li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                    </ul>
                  </div>
                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['measurement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "              ";
        } else {
            // line 83
            echo "              <tr>
                <td class=\"text-center\" colspan=\"11\">";
            // line 84
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 87
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 92
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 93
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 99
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
        return array (  363 => 99,  354 => 93,  350 => 92,  343 => 87,  337 => 84,  334 => 83,  331 => 82,  321 => 77,  310 => 75,  306 => 74,  302 => 73,  299 => 72,  293 => 70,  285 => 68,  283 => 67,  279 => 66,  271 => 63,  265 => 60,  261 => 59,  257 => 58,  253 => 57,  249 => 56,  246 => 55,  240 => 54,  234 => 52,  232 => 51,  229 => 50,  224 => 49,  222 => 48,  215 => 44,  197 => 43,  179 => 42,  161 => 41,  143 => 40,  125 => 39,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "measurement/measurement_list.twig", "");
    }
}
