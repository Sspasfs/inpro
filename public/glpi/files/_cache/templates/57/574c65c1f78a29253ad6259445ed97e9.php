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

/* components/user/info_card.html.twig */
class __TwigTemplate_c8746ea4e5990d8fbf1909c70ee4201d extends Template
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
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 35
        echo "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col pt-1\">
         ";
        // line 39
        if ((($__internal_compile_0 = ($context["user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)) {
            // line 40
            echo "            ";
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_1 =             // line 41
($context["user"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "user_object" =>             // line 42
($context["user_object"] ?? null), "enable_anonymization" =>             // line 43
($context["enable_anonymization"] ?? null)]);
            // line 44
            echo "
         ";
        }
        // line 46
        echo "      </div>
      <div class=\"col-auto ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 49
        if ((($__internal_compile_2 = ($context["user"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)) {
            // line 50
            echo "               <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User", (($__internal_compile_3 = ($context["user"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["user"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["user_name"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 52
            echo "               ";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["user"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["user_name"] ?? null) : null), "html", null, true);
            echo "
            ";
        }
        // line 54
        echo "         </h4>

         <div class=\"text-muted\">
            ";
        // line 57
        if ((twig_length_filter($this->env, (($__internal_compile_6 = ($context["user"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["email"] ?? null) : null)) > 0)) {
            // line 58
            echo "               <div>
                  <i class=\"fas fa-fw fa-envelope\"></i>
                  <a href=\"mailto:";
            // line 60
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["user"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["email"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["user"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["email"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 63
        echo "            ";
        if (( !twig_test_empty((($__internal_compile_9 = ($context["user"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["phone"] ?? null) : null)) ||  !twig_test_empty((($__internal_compile_10 = ($context["user"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["phone2"] ?? null) : null)))) {
            // line 64
            echo "               <div>
                  ";
            // line 65
            if ( !twig_test_empty((($__internal_compile_11 = ($context["user"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["phone"] ?? null) : null))) {
                // line 66
                echo "                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:";
                // line 67
                echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["user"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["phone"] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["user"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["phone"] ?? null) : null), "html", null, true);
                echo "</a>
                  ";
            }
            // line 69
            echo "                  ";
            if (( !twig_test_empty((($__internal_compile_14 = ($context["user"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["phone"] ?? null) : null)) &&  !twig_test_empty((($__internal_compile_15 = ($context["user"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["phone2"] ?? null) : null)))) {
                // line 70
                echo "                     <span> - </span>
                  ";
            }
            // line 72
            echo "                  ";
            if ( !twig_test_empty((($__internal_compile_16 = ($context["user"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["phone2"] ?? null) : null))) {
                // line 73
                echo "                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:";
                // line 74
                echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["user"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["phone2"] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_18 = ($context["user"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["phone2"] ?? null) : null), "html", null, true);
                echo "</a>
                  ";
            }
            // line 76
            echo "               </div>
            ";
        }
        // line 78
        echo "            ";
        if ((twig_length_filter($this->env, (($__internal_compile_19 = ($context["user"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["mobile"] ?? null) : null)) > 0)) {
            // line 79
            echo "               <div>
                  <i class=\"fas fa-fw fa-mobile\"></i>
                  <a href=\"tel:";
            // line 81
            echo twig_escape_filter($this->env, (($__internal_compile_20 = ($context["user"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["mobile"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["user"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["mobile"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 84
        echo "            ";
        if (((($__internal_compile_22 = ($context["user"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["locations_id"] ?? null) : null) > 0)) {
            // line 85
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-map-marker-alt\"></i>
                  ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", (($__internal_compile_23 = ($context["user"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["locations_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 90
        echo "            ";
        if (((($__internal_compile_24 = ($context["user"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["usertitles_id"] ?? null) : null) > 0)) {
            // line 91
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _x("person", "Title"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tie\"></i>
                  ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", (($__internal_compile_25 = ($context["user"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["usertitles_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 96
        echo "            ";
        if (((($__internal_compile_26 = ($context["user"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["usercategories_id"] ?? null) : null) > 0)) {
            // line 97
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tag\"></i>
                  ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", (($__internal_compile_27 = ($context["user"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["usercategories_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 102
        echo "            ";
        if (((($__internal_compile_28 = ($context["user"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["groups_id"] ?? null) : null) > 0)) {
            // line 103
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, __("Default group"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-users\"></i>
                  ";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", (($__internal_compile_29 = ($context["user"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["groups_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 108
        echo "         </div>
      </div>

      ";
        // line 111
        if (($context["can_edit"] ?? null)) {
            // line 112
            echo "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            echo "\"
               title=\"";
            // line 114
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"fas fa-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 119
        echo "   </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/user/info_card.html.twig";
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
        return array (  239 => 119,  231 => 114,  227 => 113,  224 => 112,  222 => 111,  217 => 108,  211 => 105,  205 => 103,  202 => 102,  196 => 99,  190 => 97,  187 => 96,  181 => 93,  175 => 91,  172 => 90,  166 => 87,  160 => 85,  157 => 84,  149 => 81,  145 => 79,  142 => 78,  138 => 76,  131 => 74,  128 => 73,  125 => 72,  121 => 70,  118 => 69,  111 => 67,  108 => 66,  106 => 65,  103 => 64,  100 => 63,  92 => 60,  88 => 58,  86 => 57,  81 => 54,  75 => 52,  67 => 50,  65 => 49,  60 => 46,  56 => 44,  54 => 43,  53 => 42,  52 => 41,  50 => 40,  48 => 39,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/user/info_card.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/user/info_card.html.twig");
    }
}
