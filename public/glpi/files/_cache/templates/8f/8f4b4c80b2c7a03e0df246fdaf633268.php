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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_ec9f60432e61fc7b6d317801faf111fc extends Template
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
        if ((Session::haveRight("inventory", twig_constant("READ")) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDynamic", [], "method", false, false, false, 34) != false))) {
            // line 35
            echo "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"fas fa-cloud-download-alt\"></i>
      </div>
      <h4 class=\"card-title ps-4\">
         ";
            // line 41
            echo twig_escape_filter($this->env, __("Inventory information"), "html", null, true);
            echo "
      </h4>
      ";
            // line 43
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryFileName", [false], "method", false, false, false, 43)) : (null));
            // line 44
            echo "      ";
            if ( !(null === ($context["inventory_filename"] ?? null))) {
                // line 45
                echo "         <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . ($context["inventory_filename"] ?? null))), "html", null, true);
                echo "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["item"] ?? null))), "html", null, true);
                echo "\">
            <i class=\"fas fa-download\"></i>
         </a>
      ";
            } else {
                // line 52
                echo "         <span class=\"ms-auto\" title=\"";
                echo twig_escape_filter($this->env, __("Inventory file missing"), "html", null, true);
                echo "\">
            <i class=\"fas fa-ban\"></i>
            <span class=\"visually-hidden\">";
                // line 54
                echo twig_escape_filter($this->env, __("Inventory file missing"), "html", null, true);
                echo "</span>
         </span>
      ";
            }
            // line 57
            echo "   </div>

   ";
            // line 59
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 59)) : (null));
            // line 60
            echo "   ";
            if ( !(null === ($context["agent"] ?? null))) {
                // line 61
                echo "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "getTypeName", [], "method", false, false, false, 63), "html", null, true);
                echo "</label>
            <span>
               <i class=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "getIcon", [], "method", false, false, false, 65), "html", null, true);
                echo "\"></i>
               ";
                // line 66
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink(($context["agent"] ?? null));
                echo "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 71
                echo twig_escape_filter($this->env, __("Useragent"), "html", null, true);
                echo "</label>
            <span>";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["useragent"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 76
                echo twig_escape_filter($this->env, __("Inventory tag"), "html", null, true);
                echo "</label>
            <span>";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["tag"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 81
                echo twig_escape_filter($this->env, __("Public contact address"), "html", null, true);
                echo "</label>
            <span>";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["remote_addr"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 86
                echo twig_escape_filter($this->env, __("Last contact"), "html", null, true);
                echo "</label>
            <span>";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["last_contact"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>

         ";
                // line 90
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 90)) {
                    // line 91
                    echo "            <div class=\"mb-3 col-12 col-sm-4\">
               <label class=\"form-label\" >";
                    // line 92
                    echo twig_escape_filter($this->env, __("Last inventory update"), "html", null, true);
                    echo "</label>
               <span>";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["last_inventory_update"] ?? null) : null)), "html", null, true);
                    echo "</span>
            </div>
         ";
                } else {
                    // line 96
                    echo "            <div class=\"mb-3 col-12 col-sm-4\">
            </div>
         ";
                }
                // line 99
                echo "
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 102
                echo twig_escape_filter($this->env, __("Agent status"), "html", null, true);
                echo "
               <i id=\"update-status\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 103
                echo twig_escape_filter($this->env, __("Ask agent about its current status"), "html", null, true);
                echo "\"></i>
            </label>
            <span id='agent_status'>";
                // line 105
                echo twig_escape_filter($this->env, __("Unknown"), "html", null, true);
                echo "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 110
                echo twig_escape_filter($this->env, __("Request inventory"), "html", null, true);
                echo "
               <i id=\"update-inventory\" class=\"fas fa-sync\" role=\"button\" title=\"";
                // line 111
                echo twig_escape_filter($this->env, __("Request agent to proceed an new inventory"), "html", null, true);
                echo "\"></i>
            </label>
            <span id='inventory_status'>";
                // line 113
                echo twig_escape_filter($this->env, __("Unknown"), "html", null, true);
                echo "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$('#update-status').on('click', function() {
            var icon = \$(this);
            icon.addClass('fa-spin');
            \$.ajax({
               type: 'POST',
               url: '";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                echo "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 128
                echo twig_escape_filter($this->env, twig_constant("Agent::ACTION_STATUS"), "html", null, true);
                echo "',
                  id: '";
                // line 129
                echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
                echo "'
               },
               success: function(json) {
                  \$('#agent_status').text(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });

         \$('#update-inventory').on('click', function() {
            var icon = \$(this);
            icon.addClass(\"fa-spin\");
            \$.ajax({
               type: 'POST',
               url: '";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/agent.php"), "html", null, true);
                echo "',
               timeout: 30000, // 30 seconds timeout
               dataType: 'json',
               data: {
                  action: '";
                // line 149
                echo twig_escape_filter($this->env, twig_constant("Agent::ACTION_INVENTORY"), "html", null, true);
                echo "',
                  id: '";
                // line 150
                echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                echo "'
               },
               success: function(json) {
                  \$('#inventory_status').text(json.answer);
               },
               complete: function() {
                  icon.removeClass('fa-spin');
               }
            });
         });
      });
      </script>
   ";
            } else {
                // line 163
                echo "   <div class=\"card-body row\">
      <div class=\"mb-3 col-12 col-sm-6\">
         ";
                // line 165
                echo twig_escape_filter($this->env, __("Agent information is not available."), "html", null, true);
                echo "
      </div>
   </div>
   ";
            }
            // line 169
            echo "
   ";
            // line 171
            echo "   ";
            // line 172
            echo "   ";
            if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\Inventoriable") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getInventoryAgent", [], "method", false, false, false, 172) == null)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["last_inventory_update"], "method", false, false, false, 172))) {
                // line 173
                echo "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 175
                echo twig_escape_filter($this->env, __("Last inventory"), "html", null, true);
                echo "</label>
            <span>";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["last_inventory_update"] ?? null) : null)), "html", null, true);
                echo "</span>
         </div>
      </div>
   ";
            }
            // line 180
            echo "
   ";
            // line 181
            if ((((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 181)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null) > 0) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 181))) {
                // line 182
                echo "      ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), ($context["item"] ?? null)), "html", null, true);
                echo "
   ";
            }
            // line 184
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/inventory_info.html.twig";
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
        return array (  326 => 184,  320 => 182,  318 => 181,  315 => 180,  308 => 176,  304 => 175,  300 => 173,  297 => 172,  295 => 171,  292 => 169,  285 => 165,  281 => 163,  265 => 150,  261 => 149,  254 => 145,  235 => 129,  231 => 128,  224 => 124,  210 => 113,  205 => 111,  201 => 110,  193 => 105,  188 => 103,  184 => 102,  179 => 99,  174 => 96,  168 => 93,  164 => 92,  161 => 91,  159 => 90,  153 => 87,  149 => 86,  142 => 82,  138 => 81,  131 => 77,  127 => 76,  120 => 72,  116 => 71,  108 => 66,  104 => 65,  99 => 63,  95 => 61,  92 => 60,  90 => 59,  86 => 57,  80 => 54,  74 => 52,  67 => 48,  60 => 45,  57 => 44,  55 => 43,  50 => 41,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/inventory_info.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/form/inventory_info.html.twig");
    }
}
