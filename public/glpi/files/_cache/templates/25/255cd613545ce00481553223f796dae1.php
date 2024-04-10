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

/* components/form/header.html.twig */
class __TwigTemplate_65601fccccbbde9423422d146fecaab8 extends Template
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
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 34)));
        // line 35
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 37) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formtitle"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 37)));
        // line 38
        $context["no_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["noid"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["noid"] ?? null) : null)) : (false));
        // line 39
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["formoptions"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["formoptions"] ?? null) : null)) : (""));
        // line 40
        echo "
";
        // line 41
        $context["entity_id"] = 0;
        // line 42
        $context["entity_name"] = "";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 43)) {
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
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (( !twig_test_empty(($context["entity_id"] ?? null))) ? (($context["entity_id"] ?? null)) : (null)));
                // line 52
                echo "   ";
            }
        }
        // line 54
        echo "
";
        // line 55
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), false)) : (false));
        // line 56
        $context["open_form"] = ((($context["no_header"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [(($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null)], "method", false, false, false, 56)) ||  !array_key_exists("in_twig", $context));
        // line 60
        $context["include_header_content"] = ((($context["no_header"] ?? null) == false) && ((array_key_exists("in_twig", $context) || ((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 60), false)) : (false))) || ( !array_key_exists("in_twig", $context) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [(($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null)], "method", false, false, false, 60))));
        // line 61
        echo "
";
        // line 62
        if ((($context["open_form"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null)], "method", false, false, false, 62))) {
            // line 63
            echo "<form name=\"asset_form\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo ($context["formoptions"] ?? null);
            echo " enctype=\"multipart/form-data\" data-submit-once>
   ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["entities_id"], "method", false, false, false, 64)) {
                // line 65
                echo "       <input type=\"hidden\" name=\"entities_id\" value=\"";
                echo twig_escape_filter($this->env, ($context["entity_id"] ?? null), "html", null, true);
                echo "\" />
   ";
            }
            // line 67
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 67) && ((($__internal_compile_16 = ($context["_request"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_in_modal"] ?? null) : null) == "1"))) {
                // line 68
                echo "      <input type=\"hidden\" name=\"_in_modal\" value=\"1\"/>
   ";
            }
        }
        // line 71
        echo "   <div id=\"mainformtable\">
      ";
        // line 72
        if (($context["include_header_content"] ?? null)) {
            // line 73
            echo "         ";
            echo twig_include($this->env, $context, "components/form/header_content.html.twig", ["inside_main" => true]);
            echo "
      ";
        } else {
            // line 75
            echo "         <input type=\"hidden\" name=\"is_recursive\" value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 75), "is_recursive", [], "array", true, true, false, 75)) ? (_twig_default_filter((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 75)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["is_recursive"] ?? null) : null), 1)) : (1)), "html", null, true);
            echo "\" />
      ";
        }
        // line 77
        echo "
      ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

      ";
        // line 81
        echo "      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 81), "request", ["in_modal"], "method", false, false, false, 81) == true)) {
            // line 82
            echo "      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/header.html.twig";
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
        return array (  153 => 82,  150 => 81,  145 => 78,  142 => 77,  136 => 75,  130 => 73,  128 => 72,  125 => 71,  120 => 68,  117 => 67,  111 => 65,  109 => 64,  102 => 63,  100 => 62,  97 => 61,  95 => 60,  93 => 56,  91 => 55,  88 => 54,  84 => 52,  81 => 51,  79 => 50,  76 => 49,  73 => 48,  70 => 47,  67 => 46,  64 => 45,  61 => 44,  59 => 43,  57 => 42,  55 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/header.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/form/header.html.twig");
    }
}
