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

/* navigation/main.twig */
class __TwigTemplate_f0cc89d5e72a1c7c74ddd4329e1a8c4a extends Template
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
        if ( !($context["is_ajax"] ?? null)) {
            // line 2
            echo "<div class='small-run2'>
      <div class=\"loading\">
        <svg width=\"64px\" height=\"48px\">
            <polyline points=\"0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24\" id=\"back\"></polyline>
          <polyline points=\"0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24\" id=\"front\"></polyline>
        </svg>
      </div>
    </div>
  <div id=\"pma_navigation\" style=\"background:rgba(0, 63, 94, 0.5);\"  class=\"d-print-none\" data-config-navigation-width=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["config_navigation_width"] ?? null), "html", null, true);
            echo "\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\" style=\"background-color:transparent;\">
      <div id=\"pma_navigation_header\">

        ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "is_displayed", [], "any", false, false, false, 16)) {
                // line 17
                echo "          <div id=\"pmalogo\">
            ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "has_link", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", false, false, false, 19), "#")) : ("#")), "html", null, true);
                    echo "\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "attributes", [], "any", false, false, false, 19);
                    echo ">
            ";
                }
                // line 21
                echo "            ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "source", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "              <img id=\"imgpmalogo\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "source", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" alt=\"phpMyAdmin\">
            ";
                } else {
                    // line 24
                    echo "              <h1>phpMyAdmin</h1>
            ";
                }
                // line 26
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "has_link", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "              </a>
            ";
                }
                // line 29
                echo "          </div>
        ";
            }
            // line 31
            echo "
        <div id=\"navipanellinks\">
          <a href=\"";
            // line 33
            echo PhpMyAdmin\Url::getFromRoute("/");
            echo "\" title=\"";
echo _gettext("Home");
            echo "\">";
            // line 34
            echo PhpMyAdmin\Html\Generator::getImage("b_home", _gettext("Home"));
            // line 35
            echo "</a>

          ";
            // line 37
            if ((($context["server"] ?? null) != 0)) {
                // line 38
                echo "            <a class=\"logout disableAjax\" href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/logout");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (((($context["auth_type"] ?? null) == "config")) ? (_gettext("Empty session data")) : (_gettext("Log out"))), "html", null, true);
                echo "\">";
                // line 39
                echo PhpMyAdmin\Html\Generator::getImage("s_loggoff", (((($context["auth_type"] ?? null) == "config")) ? (_gettext("Empty session data")) : (_gettext("Log out"))));
                // line 40
                echo "</a>
          ";
            }
            // line 42
            echo "
          <a href=\"";
            // line 43
            echo PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
            echo "\" title=\"";
echo _gettext("phpMyAdmin documentation");
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 44
            echo PhpMyAdmin\Html\Generator::getImage("b_docs", _gettext("phpMyAdmin documentation"));
            // line 45
            echo "</a>

          <a href=\"";
            // line 47
            echo PhpMyAdmin\Util::getdocuURL(($context["is_mariadb"] ?? null));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((($context["is_mariadb"] ?? null)) ? (_gettext("MariaDB Documentation")) : (_gettext("MySQL Documentation"))), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 48
            echo PhpMyAdmin\Html\Generator::getImage("b_sqlhelp", ((($context["is_mariadb"] ?? null)) ? (_gettext("MariaDB Documentation")) : (_gettext("MySQL Documentation"))));
            // line 49
            echo "</a>

          <a id=\"pma_navigation_settings_icon\"";
            // line 51
            echo (( !($context["is_navigation_settings_enabled"] ?? null)) ? (" class=\"hide\"") : (""));
            echo " href=\"#\" title=\"";
echo _gettext("Navigation panel settings");
            echo "\">";
            // line 52
            echo PhpMyAdmin\Html\Generator::getImage("s_cog", _gettext("Navigation panel settings"));
            // line 53
            echo "</a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"";
echo _gettext("Reload navigation panel");
            // line 55
            echo "\">";
            // line 56
            echo PhpMyAdmin\Html\Generator::getImage("s_reload", _gettext("Reload navigation panel"));
            // line 57
            echo "</a>
        </div>

        ";
            // line 60
            if ((($context["is_servers_displayed"] ?? null) && (twig_length_filter($this->env, ($context["servers"] ?? null)) > 1))) {
                // line 61
                echo "          <div id=\"serverChoice\">
            ";
                // line 62
                echo ($context["server_select"] ?? null);
                echo "
          </div>
        ";
            }
            // line 65
            echo "
        ";
            // line 66
            echo PhpMyAdmin\Html\Generator::getImage("ajax_clock_small", _gettext("Loading…"), ["style" => "visibility: hidden; display:none", "class" => "throbber"]);
            // line 69
            echo "
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container";
            // line 71
            echo ((($context["is_synced"] ?? null)) ? (" synced") : (""));
            echo ((($context["is_highlighted"] ?? null)) ? (" highlight") : (""));
            echo ((($context["is_autoexpanded"] ?? null)) ? (" autoexpand") : (""));
            echo "\">
";
        }
        // line 73
        echo "
";
        // line 74
        if ( !($context["navigation_tree"] ?? null)) {
            // line 75
            echo "  ";
            echo $this->env->getFilter('error')->getCallable()(_gettext("An error has occurred while loading the navigation display"));
            echo "
";
        } else {
            // line 77
            echo "  ";
            echo ($context["navigation_tree"] ?? null);
            echo "
";
        }
        // line 79
        echo "
";
        // line 80
        if ( !($context["is_ajax"] ?? null)) {
            // line 81
            echo "      </div>

      <div id=\"pma_navi_settings_container\">
        ";
            // line 84
            if (($context["is_navigation_settings_enabled"] ?? null)) {
                // line 85
                echo "          ";
                echo ($context["navigation_settings"] ?? null);
                echo "
        ";
            }
            // line 87
            echo "      </div>
    </div>

    ";
            // line 90
            if (($context["is_drag_drop_import_enabled"] ?? null)) {
                // line 91
                echo "      <div class=\"pma_drop_handler\">
        ";
echo _gettext("Drop files here");
                // line 93
                echo "      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          ";
echo _gettext("SQL upload");
                // line 97
                echo "          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    ";
            }
            // line 104
            echo "  </div>
  ";
            // line 105
            echo twig_include($this->env, $context, "modals/unhide_nav_item.twig");
            echo "
  ";
            // line 106
            echo twig_include($this->env, $context, "modals/create_view.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "navigation/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 106,  263 => 105,  260 => 104,  251 => 97,  245 => 93,  241 => 91,  239 => 90,  234 => 87,  228 => 85,  226 => 84,  221 => 81,  219 => 80,  216 => 79,  210 => 77,  204 => 75,  202 => 74,  199 => 73,  192 => 71,  188 => 69,  186 => 66,  183 => 65,  177 => 62,  174 => 61,  172 => 60,  167 => 57,  165 => 56,  163 => 55,  158 => 53,  156 => 52,  151 => 51,  147 => 49,  145 => 48,  140 => 47,  136 => 45,  134 => 44,  129 => 43,  126 => 42,  122 => 40,  120 => 39,  114 => 38,  112 => 37,  108 => 35,  106 => 34,  101 => 33,  97 => 31,  93 => 29,  89 => 27,  86 => 26,  82 => 24,  76 => 22,  73 => 21,  65 => 19,  63 => 18,  60 => 17,  58 => 16,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/main.twig", "E:\\Xampp\\phpMyAdmin\\templates\\navigation\\main.twig");
    }
}
