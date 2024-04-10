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

/* install/step1.html.twig */
class __TwigTemplate_cab1237ac0e2a1dc3cd019e012a502c3 extends Template
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
        // line 33
        echo "
";
        // line 34
        if (($context["config_write_denied"] ?? null)) {
            // line 35
            echo "    <h3>";
            echo twig_escape_filter($this->env, __("Checking write access to configuration files"), "html", null, true);
            echo "</h3>
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            <div>
                <i class=\"ti ti-alert-circle me-2\"></i>
            </div>
            <div>
                <h4 class=\"alert-title\">";
            // line 42
            echo twig_escape_filter($this->env, __("Write access denied for configuration files"), "html", null, true);
            echo "</h4>
                <div class=\"text-secondary\">
                    ";
            // line 44
            echo twig_escape_filter($this->env, twig_sprintf(__("A temporary write access to the following files is required: %s."), (("`" . twig_join_filter(($context["config_files_to_update"] ?? null), "`, `")) . "`")), "html", null, true);
            echo "
                    <br />
                    ";
            // line 46
            echo twig_escape_filter($this->env, __("Write access to these files can be removed once the operation is finished."), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 52
            echo "    <h3>";
            echo twig_escape_filter($this->env, __("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
            echo "</h3>
    ";
            // line 53
            echo twig_include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
            echo "
";
        }
        // line 55
        echo "
";
        // line 56
        ob_start(function () { return ''; });
        // line 57
        echo "   <input type=\"hidden\" name=\"language\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
        echo "\">
   <input type=\"hidden\" name=\"update\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["update"] ?? null), "html", null, true);
        echo "\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
";
        $context["common_hiddens"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
";
        // line 62
        ob_start(function () { return ''; });
        // line 63
        echo "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 65
        echo twig_escape_filter($this->env, __("Continue"), "html", null, true);
        echo "
         <i class=\"fas fa-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
        // line 70
        echo twig_escape_filter($this->env, ($context["common_hiddens"] ?? null), "html", null, true);
        echo "
   </form>
";
        $context["continue_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
";
        // line 74
        ob_start(function () { return ''; });
        // line 75
        echo "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
        // line 77
        echo twig_escape_filter($this->env, __("Try again"), "html", null, true);
        echo "
         <i class=\"fas fa-redo ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
        // line 82
        echo twig_escape_filter($this->env, ($context["common_hiddens"] ?? null), "html", null, true);
        echo "
   </form>
";
        $context["retry_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
";
        // line 86
        if ((($context["config_write_denied"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 86))) {
            // line 87
            echo "   <h3>";
            echo twig_escape_filter($this->env, __("Do you want to continue?"), "html", null, true);
            echo "</h3>
   <div class=\"text-center\">
      ";
            // line 89
            echo twig_escape_filter($this->env, ($context["retry_form"] ?? null), "html", null, true);
            echo "
   </div>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 91
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 91)) {
            // line 92
            echo "   <h3>";
            echo twig_escape_filter($this->env, __("Do you want to continue?"), "html", null, true);
            echo "</h3>
   <div class=\"text-center\">
      ";
            // line 94
            echo twig_escape_filter($this->env, ($context["continue_form"] ?? null), "html", null, true);
            echo "
      ";
            // line 95
            echo twig_escape_filter($this->env, ($context["retry_form"] ?? null), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 98
            echo "   <div class=\"text-center\">
      ";
            // line 99
            echo twig_escape_filter($this->env, ($context["continue_form"] ?? null), "html", null, true);
            echo "
   </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/step1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  184 => 99,  181 => 98,  175 => 95,  171 => 94,  165 => 92,  163 => 91,  158 => 89,  152 => 87,  150 => 86,  147 => 85,  141 => 82,  133 => 77,  129 => 75,  127 => 74,  124 => 73,  118 => 70,  110 => 65,  106 => 63,  104 => 62,  101 => 61,  96 => 59,  92 => 58,  87 => 57,  85 => 56,  82 => 55,  77 => 53,  72 => 52,  63 => 46,  58 => 44,  53 => 42,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step1.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/install/step1.html.twig");
    }
}
