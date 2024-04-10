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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_ac89c87934aaf838e2efa0147f4a91a1 extends Template
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
        $context["rand_header"] = twig_random($this->env);
        // line 35
        echo "
<div class=\"btn-group\">
   ";
        // line 37
        if ( !(null === ($context["user"] ?? null))) {
            // line 38
            echo "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle user-menu-dropdown-toggle ";
            // line 40
            if (($context["is_debug_active"] ?? null)) {
                echo "bg-red-lt";
            }
            echo "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
               ";
            // line 42
            if ( !($context["anonymous"] ?? null)) {
                // line 43
                echo "                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : ("")))), "truncate", [35, "..."], "method", false, false, false, 44), "html", null, true);
                echo "</div>
                     ";
                // line 45
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name"));
                // line 46
                echo "                     <div class=\"mt-1 small text-muted\" title=\"";
                echo twig_escape_filter($this->env, ($context["entity_completename"] ?? null), "html", null, true);
                echo "\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        ";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
                echo "
                     </div>
                  </div>

                  ";
                // line 52
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,                 // line 53
($context["user"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 56
                echo "
               ";
            }
            // line 58
            echo "            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\">
               <h6 class=\"dropdown-header\">";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            echo "</h6>

               ";
            // line 62
            if ( !($context["anonymous"] ?? null)) {
                // line 63
                echo "                  ";
                echo twig_include($this->env, $context, "layout/parts/profile_selector.html.twig");
                echo "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 67
                if ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", twig_constant("UPDATE"))) {
                    // line 68
                    echo "                     <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    echo "\"
                        class=\"dropdown-item ";
                    // line 69
                    if (($context["is_debug_active"] ?? null)) {
                        echo "bg-red-lt";
                    }
                    echo "\"
                        title=\"";
                    // line 70
                    echo twig_escape_filter($this->env, __("Change mode"), "html", null, true);
                    echo "\">
                        <i class=\"ti fa-fw ti-bug debug\"></i>
                        ";
                    // line 72
                    echo twig_escape_filter($this->env, ((($context["is_debug_active"] ?? null)) ? (__("Debug mode enabled")) : (__("Debug mode disabled"))), "html", null, true);
                    echo "
                     </a>
                  ";
                }
                // line 75
                echo "               ";
            }
            // line 76
            echo "
               ";
            // line 78
            echo "
               <div class=\"dropdown-item\">
                  <i class=\"ti fa-fw ti-language\"></i>
                  ";
            // line 81
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["help_url"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-help\"></i>
                  ";
            // line 88
            echo twig_escape_filter($this->env, __("Help"), "html", null, true);
            echo "
               </a>

               <a href=\"#\" class=\"dropdown-item\" title=\"";
            // line 91
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "\"
                  id=\"show_about_modal_";
            // line 92
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-info-circle\"></i>
                  ";
            // line 94
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "
                  ";
            // line 95
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 96
                echo "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
            }
            // line 100
            echo "               </a>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-adjustments-alt\"></i>
                  ";
            // line 106
            echo twig_escape_filter($this->env, __("My settings"), "html", null, true);
            echo "
               </a>
               <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) ?: (false))) ? ("?noAUTO=1") : ("")))), "html", null, true);
            echo "\" class=\"dropdown-item\" title=\"";
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "\">
                  <i class=\"ti fa-fw ti-logout\"></i>
                  ";
            // line 110
            echo twig_escape_filter($this->env, __("Logout"), "html", null, true);
            echo "
               </a>
            </div>
         </div>
      </div>

      <div class=\"modal fade\" id=\"about_modal_";
            // line 116
            echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
            echo "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
            // line 120
            echo twig_escape_filter($this->env, __("About"), "html", null, true);
            echo "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 121
            echo twig_escape_filter($this->env, __("Close"), "html", null, true);
            echo "\"></button>
               </div>
               <div class=\"modal-body\">
                  <p><a href=\"http://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     GLPI ";
            // line 125
            echo twig_escape_filter($this->env, twig_constant("GLPI_VERSION"), "html", null, true);
            echo "
                     Copyright (C) 2015-";
            // line 126
            echo twig_escape_filter($this->env, twig_constant("GLPI_YEAR"), "html", null, true);
            echo " Teclib' and contributors
                  </a></p>
                  ";
            // line 128
            if ( !(null === ($context["founded_new_version"] ?? null))) {
                // line 129
                echo "                     <p>
                        <a href=\"http://www.glpi-project.org\" target=\"_blank\"
                           title=\"";
                // line 131
                echo twig_escape_filter($this->env, __("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                echo "\">
                           ";
                // line 132
                echo twig_escape_filter($this->env, twig_sprintf(__("A new version is available: %s."), ($context["founded_new_version"] ?? null)), "html", null, true);
                echo "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
            }
            // line 139
            echo "               </div>
            </div>
         </div>
      </div>

   ";
        } elseif (twig_constant("GLPI_DEMO_MODE")) {
            // line 145
            echo "      <div class=\"dropdown-item\">
         <i class=\"fas fa-fw fa-language\"></i>
         ";
            // line 147
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            echo "
      </div>

   ";
        }
        // line 151
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 155
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 157
        echo twig_escape_filter($this->env, ($context["rand_header"] ?? null), "html", null, true);
        echo "\").remove().modal(\"show\");
   });
});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/parts/user_header.html.twig";
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
        return array (  297 => 157,  292 => 155,  286 => 151,  279 => 147,  275 => 145,  267 => 139,  257 => 132,  253 => 131,  249 => 129,  247 => 128,  242 => 126,  238 => 125,  231 => 121,  227 => 120,  220 => 116,  211 => 110,  204 => 108,  199 => 106,  192 => 104,  186 => 100,  180 => 96,  178 => 95,  174 => 94,  169 => 92,  165 => 91,  159 => 88,  152 => 86,  144 => 81,  139 => 78,  136 => 76,  133 => 75,  127 => 72,  122 => 70,  116 => 69,  111 => 68,  109 => 67,  101 => 63,  99 => 62,  94 => 60,  90 => 58,  86 => 56,  84 => 53,  83 => 52,  76 => 48,  70 => 46,  68 => 45,  64 => 44,  61 => 43,  59 => 42,  52 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/user_header.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/layout/parts/user_header.html.twig");
    }
}
