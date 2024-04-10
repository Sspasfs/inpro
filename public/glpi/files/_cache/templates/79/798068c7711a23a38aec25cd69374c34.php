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

/* components/form/header_content.html.twig */
class __TwigTemplate_ba2ef19e7da5fb5f026c0944f4e2bb56 extends Template
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
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["canedit"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["canedit"] ?? null) : null)) : (true));
        // line 35
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 36
        $context["rand"] = ((array_key_exists("rand", $context)) ? (_twig_default_filter(($context["rand"] ?? null), twig_random($this->env))) : (twig_random($this->env)));
        // line 37
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formtitle"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 37)));
        // line 38
        $context["friendlyname"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["friendlyname"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 38)));
        // line 39
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39), "id", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null)))) ? ((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null)) : ( -1));
        // line 40
        $context["in_navheader"] = ((array_key_exists("in_navheader", $context)) ? (_twig_default_filter(($context["in_navheader"] ?? null), false)) : (false));
        // line 41
        echo "
";
        // line 42
        $context["entity_name"] = ((array_key_exists("entity_name", $context)) ? (_twig_default_filter(($context["entity_name"] ?? null), "")) : (""));
        // line 43
        if (( !array_key_exists("entity_id", $context) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 43))) {
            // line 44
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 44) == "Entity") && ((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null) == 0))) {
                // line 45
                echo "      ";
                $context["entity_id"] = null;
                // line 46
                echo "   ";
            } else {
                // line 47
                echo "      ";
                $context["entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null)))) ? ((($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["entities_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 47)))) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 47)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 48
                echo "   ";
            }
            // line 49
            echo "
   ";
            // line 50
            if (Session::isMultiEntitiesMode()) {
                // line 51
                echo "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 51));
                // line 52
                echo "   ";
            }
        } elseif ( !        // line 53
array_key_exists("entity_id", $context)) {
            // line 54
            echo "   ";
            $context["entity_id"] = 0;
        }
        // line 56
        echo "
";
        // line 57
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["template_name"] ?? null) : null));
        // line 58
        if (((($context["withtemplate"] ?? null) == 2) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 58))) {
            // line 59
            echo "   <input type=\"hidden\" name=\"template_name\" value=\"";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
   ";
            // line 60
            $context["nametype"] = twig_sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
        } elseif ((        // line 61
($context["withtemplate"] ?? null) == 1)) {
            // line 62
            echo "   <input type=\"hidden\" name=\"is_template\" value=\"1\" />
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 63
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 63)) {
            // line 64
            echo "   ";
            $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
        } else {
            // line 66
            echo "   ";
            if (((($context["noid"] ?? null) == false) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (twig_length_filter($this->env, ($context["nametype"] ?? null)) == 0)))) {
                // line 67
                echo "      ";
                $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null));
                // line 68
                echo "   ";
            }
        }
        // line 70
        echo "
";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 71)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)], "method", false, false, false, 71)) {
            // line 72
            echo "   <form name=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" id=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" method=\"post\"
         action=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            echo "\" data-submit-once>
      <div id=\"massive_container_";
            // line 74
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </form>
";
        }
        // line 78
        echo "
<div id=\"header_";
        // line 79
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"
     class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch ";
        // line 80
        if (($context["in_navheader"] ?? null)) {
            echo " align-self-end ";
        }
        echo " flex-grow-1\">
   ";
        // line 81
        if (((($context["withtemplate"] ?? null) == 1) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 81))) {
            // line 82
            echo "      <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
            echo twig_escape_filter($this->env, __("Template name"), "html", null, true);
            echo "\"
             name=\"template_name\" id=\"textfield_template_name";
            // line 83
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
             value=\"";
            // line 84
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
   ";
        }
        // line 86
        echo "   <h3 class=\"card-title d-flex align-items-center ";
        echo ((($context["in_navheader"] ?? null)) ? ("ps-5") : ("ps-4"));
        echo "\">
      ";
        // line 87
        $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 87);
        // line 88
        echo "      ";
        if (( !($context["in_navheader"] ?? null) && (twig_length_filter($this->env, ($context["icon"] ?? null)) > 0))) {
            // line 89
            echo "         <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
            <i class=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo " fa-2x\"></i>
         </div>
      ";
        }
        // line 93
        echo "      <span ";
        if (($context["in_navheader"] ?? null)) {
            echo " class=\"status rounded-1\" ";
        }
        echo ">
         ";
        // line 94
        if (($context["in_navheader"] ?? null)) {
            // line 95
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i>
         ";
        }
        // line 97
        echo "         ";
        if (((($context["withtemplate"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 97) > 0))) {
            // line 98
            echo "            ";
            echo twig_escape_filter($this->env, _n("Template", "Templates", 1), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "
         ";
        } elseif ( !twig_get_attribute($this->env, $this->source,         // line 99
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 99)) {
            // line 100
            echo "            ";
            echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
            echo "
         ";
        } else {
            // line 102
            echo "            ";
            echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
            echo "
         ";
        }
        // line 104
        echo "      </span>
      ";
        // line 105
        if (((($context["in_navheader"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_dynamic"], "method", false, false, false, 105)) && (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["is_dynamic"] ?? null) : null))) {
            // line 106
            echo "      <span class=\"mx-1 bg-secondary status rounded-1\" title=\"";
            echo twig_escape_filter($this->env, __("Automatic Inventory"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
         <i class=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Agent::getIcon"), "html", null, true);
            echo "\"></i>
      </span>
      ";
        }
        // line 110
        echo "      ";
        if (((($context["in_navheader"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_deleted"], "method", false, false, false, 110)) && (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["is_deleted"] ?? null) : null))) {
            // line 111
            echo "      ";
            $context["title"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 111)) ? (twig_sprintf(__("Item has been deleted on %s"), (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["date_mod"] ?? null) : null))) : (__("Deleted")));
            // line 112
            echo "      <span class=\"mx-1 bg-danger status rounded-1\" title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
         <i class=\"ti ti-trash\"></i>
         ";
            // line 114
            echo twig_escape_filter($this->env, __("Deleted"), "html", null, true);
            echo "
      </span>
      ";
        }
        // line 117
        echo "
      ";
        // line 118
        if (($context["header_toolbar"] ?? null)) {
            // line 119
            echo "         <div class=\"d-inline-block toolbar ms-2\">
            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header_toolbar"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                // line 121
                echo "               ";
                echo $context["raw_element"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "         </div>
      ";
        }
        // line 125
        echo "   </h3>

   ";
        // line 127
        $context["single_actions_ms_auto"] = true;
        // line 128
        echo "   ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 128) && Session::isMultiEntitiesMode()) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
            // line 129
            echo "      ";
            $context["single_actions_ms_auto"] = false;
            // line 130
            echo "      <span class=\"badge entity-name mx-1 px-2 ms-auto align-items-center\" title=\"";
            echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
            echo "\">
                  <i class=\"ti ti-stack me-2\"></i>
                  ";
            // line 132
            echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
            echo "
               </span>

      ";
            // line 135
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 135)) {
                // line 136
                echo "         <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center\">
            <label class=\"form-check d-flex align-items-center mb-0\">
               ";
                // line 138
                $context["disabled"] = (($context["canedit"] ?? null) == false);
                // line 139
                echo "               ";
                $context["comment"] = __("Change visibility in child entities.");
                // line 140
                echo "
               ";
                // line 141
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                    // line 142
                    echo "                  ";
                    $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                    // line 143
                    echo "                  ";
                    $context["disabled"] = true;
                    // line 144
                    echo "               ";
                } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), "recursive"], "method", false, false, false, 144)) {
                    // line 145
                    echo "                  ";
                    $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                    // line 146
                    echo "                  ";
                    $context["disabled"] = true;
                    // line 147
                    echo "               ";
                } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 147)) {
                    // line 148
                    echo "                  ";
                    $context["comment"] = __("Flag change forbidden. Linked items found.");
                    // line 149
                    echo "                  ";
                    $context["disabled"] = true;
                    // line 150
                    echo "               ";
                }
                // line 151
                echo "
               ";
                // line 152
                if ( !($context["disabled"] ?? null)) {
                    echo "<input type=\"hidden\" name=\"is_recursive\" value=\"0\" />";
                }
                // line 153
                echo "               <input class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                  ";
                // line 154
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 154)) {
                    echo "checked=\"checked\"";
                }
                // line 155
                echo "                  ";
                if (($context["disabled"] ?? null)) {
                    echo "disabled=\"disabled\"";
                }
                echo " />
               ";
                // line 156
                if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 156)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 156))) {
                    // line 157
                    echo "                  ";
                    // line 158
                    echo "                  <input type=\"hidden\" name=\"is_recursive\" value=\"1\" />
               ";
                }
                // line 160
                echo "               <span class=\"form-check-label mb-0 mx-2\">
                  ";
                // line 161
                echo twig_escape_filter($this->env, __("Child entities"), "html", null, true);
                echo "
                  <i class=\"fas fa-info ms-1\" title=\"";
                // line 162
                echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                echo "\"></i>
               </span>
            </label>
         </span>
      ";
            }
            // line 167
            echo "   ";
        }
        // line 168
        echo "
   ";
        // line 169
        echo twig_include($this->env, $context, "components/form/single-action.html.twig");
        echo "

   ";
        // line 171
        if ( !array_key_exists("inside_main", $context)) {
            // line 172
            echo "      <script>
         \$(\"#header_";
            // line 173
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " input[name='is_recursive']\").on('change', function(e) {
             const asset_form = \$(\"form[name='asset_form']\");
             // If asset form has an is_recursive checkbox, we need set the value to the one in the header
             if (asset_form.length) {
                 const chk = asset_form.find(\"input[name='is_recursive']\");
                 if (chk.length) {
                     chk.val(e.target.checked ? 1 : 0);
                 }
             }
         });
      </script>
   ";
        }
        // line 185
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/header_content.html.twig";
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
        return array (  446 => 185,  431 => 173,  428 => 172,  426 => 171,  421 => 169,  418 => 168,  415 => 167,  407 => 162,  403 => 161,  400 => 160,  396 => 158,  394 => 157,  392 => 156,  385 => 155,  381 => 154,  378 => 153,  374 => 152,  371 => 151,  368 => 150,  365 => 149,  362 => 148,  359 => 147,  356 => 146,  353 => 145,  350 => 144,  347 => 143,  344 => 142,  342 => 141,  339 => 140,  336 => 139,  334 => 138,  330 => 136,  328 => 135,  322 => 132,  316 => 130,  313 => 129,  310 => 128,  308 => 127,  304 => 125,  300 => 123,  291 => 121,  287 => 120,  284 => 119,  282 => 118,  279 => 117,  273 => 114,  267 => 112,  264 => 111,  261 => 110,  255 => 107,  250 => 106,  248 => 105,  245 => 104,  239 => 102,  231 => 100,  229 => 99,  220 => 98,  217 => 97,  211 => 95,  209 => 94,  202 => 93,  196 => 90,  193 => 89,  190 => 88,  188 => 87,  183 => 86,  178 => 84,  174 => 83,  169 => 82,  167 => 81,  161 => 80,  157 => 79,  154 => 78,  148 => 75,  144 => 74,  140 => 73,  133 => 72,  131 => 71,  128 => 70,  124 => 68,  121 => 67,  118 => 66,  114 => 64,  112 => 63,  109 => 62,  107 => 61,  105 => 60,  100 => 59,  98 => 58,  96 => 57,  93 => 56,  89 => 54,  87 => 53,  84 => 52,  81 => 51,  79 => 50,  76 => 49,  73 => 48,  70 => 47,  67 => 46,  64 => 45,  61 => 44,  59 => 43,  57 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/header_content.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/form/header_content.html.twig");
    }
}
