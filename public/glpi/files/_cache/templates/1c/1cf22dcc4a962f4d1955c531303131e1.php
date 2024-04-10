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

/* install/blocks/requirements_table.html.twig */
class __TwigTemplate_1a3c0732912fcd329f11f8359105cc32 extends Template
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
<table class=\"table tab_check\">
   <thead>
      <tr>
         <th>";
        // line 37
        echo twig_escape_filter($this->env, __("Test done"), "html", null, true);
        echo "</th>
         <th>";
        // line 38
        echo twig_escape_filter($this->env, __("Results"), "html", null, true);
        echo "</th>
      </tr>
   </thead>
   <tbody>
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 43
            echo "         ";
            if ( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isOutOfContext", [], "method", false, false, false, 43)) {
                // line 44
                echo "            ";
                $context["is_important"] = ( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 44) || twig_get_attribute($this->env, $this->source, $context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 44));
                // line 45
                echo "            <tr class=\"tab_bg_1\">
               <td class=\"text-start\">
                  ";
                // line 47
                if ( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 47)) {
                    // line 48
                    echo "                     <span class=\"badge bg-warning\">";
                    echo twig_escape_filter($this->env, __("Required"), "html", null, true);
                    echo "</span>
                  ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 49
$context["requirement"], "isRecommendedForSecurity", [], "method", false, false, false, 49)) {
                    // line 50
                    echo "                     <span class=\"badge bg-danger\">";
                    echo twig_escape_filter($this->env, __("Security"), "html", null, true);
                    echo "</span>
                  ";
                } else {
                    // line 52
                    echo "                     <span class=\"badge bg-secondary\">";
                    echo twig_escape_filter($this->env, __("Suggested"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 54
                echo "                  <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["requirement"], "getTitle", [], "method", false, false, false, 54), "html", null, true);
                echo "</strong>
                  ";
                // line 55
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 55);
                // line 56
                echo "                  ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 57
                    echo "                      <br />
                      <em>";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["requirement"], "getDescription", [], "method", false, false, false, 58), "html", null, true);
                    echo "</em>
                  ";
                }
                // line 60
                echo "                  ";
                if ( !twig_get_attribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 60)) {
                    // line 61
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 61));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 62
                        echo "                          <br />
                          <strong>
                             <em class=\"";
                        // line 64
                        echo ((($context["is_important"] ?? null)) ? ("red") : ("missing"));
                        echo "\">
                                ";
                        // line 65
                        echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                        echo "
                             </em>
                          </strong>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                  ";
                }
                // line 70
                echo "               </td>
               <td class=\"";
                // line 71
                echo ((twig_get_attribute($this->env, $this->source, $context["requirement"], "isMissing", [], "method", false, false, false, 71)) ? (((($context["is_important"] ?? null)) ? ("red") : ("missing"))) : ("green"));
                echo "\">
                  <span data-bs-toggle=\"popover\"
                        data-bs-placement=\"right\"
                        data-bs-html=\"true\"
                        data-bs-custom-class=\"validation-messages\"
                        data-bs-content=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["requirement"], "getValidationMessages", [], "method", false, false, false, 76), "<br />"), "html", null, true);
                echo "\">
                     <i class=\"";
                // line 77
                echo ((twig_get_attribute($this->env, $this->source, $context["requirement"], "isValidated", [], "method", false, false, false, 77)) ? ("fas fa-check") : (((twig_get_attribute($this->env, $this->source, $context["requirement"], "isOptional", [], "method", false, false, false, 77)) ? ("fas fa-exclamation-triangle") : ("ti ti-x"))));
                echo "\"></i>
                  </span>
               </td>
            </tr>
         ";
            }
            // line 82
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "   </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/blocks/requirements_table.html.twig";
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
        return array (  165 => 83,  159 => 82,  151 => 77,  147 => 76,  139 => 71,  136 => 70,  133 => 69,  123 => 65,  119 => 64,  115 => 62,  110 => 61,  107 => 60,  102 => 58,  99 => 57,  96 => 56,  94 => 55,  89 => 54,  83 => 52,  77 => 50,  75 => 49,  70 => 48,  68 => 47,  64 => 45,  61 => 44,  58 => 43,  54 => 42,  47 => 38,  43 => 37,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/blocks/requirements_table.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/install/blocks/requirements_table.html.twig");
    }
}
