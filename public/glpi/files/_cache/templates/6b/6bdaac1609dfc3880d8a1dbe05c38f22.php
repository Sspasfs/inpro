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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_4cad302603e5c77a607dc9e0bac1ebc3 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 86
        echo "

";
        // line 107
        echo "

";
        // line 129
        echo "

";
        // line 158
        echo "

";
        // line 183
        echo "

";
        // line 198
        echo "

";
        // line 280
        echo "
";
        // line 314
        echo "
";
        // line 348
        echo "
";
        // line 383
        echo "
";
        // line 413
        echo "
";
        // line 452
        echo "
";
        // line 457
        echo "
";
        // line 479
        echo "
";
        // line 504
        echo "
";
        // line 532
        echo "
";
        // line 549
        echo "
";
        // line 572
        echo "
";
        // line 596
        echo "
";
        // line 619
        echo "
";
        // line 641
        echo "
";
        // line 666
        echo "
";
        // line 677
        echo "
";
        // line 699
        echo "
";
        // line 722
        echo "
";
        // line 756
        echo "
";
        // line 767
        echo "
";
        // line 802
        echo "
";
        // line 813
        echo "
";
        // line 823
        echo "

";
        // line 841
        echo "

";
        // line 903
        echo "

";
        // line 934
        echo "

";
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 35
            echo "   ";
            $context["margins"] = "mt-3";
            // line 36
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 37
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 38
                echo "   ";
            }
            // line 39
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 43
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 44
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 60
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 61
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 72
            echo "   ";
            $context["tpl_value"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            echo "   ";
            $context["tplmark"] = "";
            // line 74
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                echo " ";
                // line 75
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [($context["name"] ?? null), ["withtemplate" => ($context["withtemplate"] ?? null)], ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                echo "   ";
            }
            // line 77
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 77), ($context["name"] ?? null), [], "array", true, true, false, 77) &&  !(null === (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)))) {
                // line 78
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["name"] ?? null)] ?? null) : null)), ($context["name"] ?? null), (($context["withtemplate"] ?? null) == 2), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 78), (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null)]);
                // line 79
                echo "   ";
            } else {
                // line 80
                echo "      ";
                $context["value"] = null;
                // line 81
                echo "   ";
            }
            // line 82
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 83
            echo "
   ";
            // line 84
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 84, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 88
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 89
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 90
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 90), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 90)) {
                // line 91
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 92
                echo "   ";
            }
            // line 93
            echo "
   ";
            // line 94
            ob_start(function () { return ''; });
            // line 95
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 95), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 96), "html", null, true);
            echo "\"
             name=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 98
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, ("maxlength=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 98)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 99
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 99)) ? ("readonly") : (""));
            echo "
             ";
            // line 100
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 100)) ? ("disabled") : (""));
            echo "
             ";
            // line 101
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 101)) ? ("multiple") : (""));
            echo " ";
            // line 102
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 102)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            echo "
   ";
            // line 105
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 105, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 110
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 110), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 110)) {
                // line 111
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 112
                echo "   ";
            }
            // line 113
            echo "
   ";
            // line 114
            $context["options"] = twig_array_merge(["center" => true],             // line 116
($context["options"] ?? null));
            // line 117
            echo "
   ";
            // line 118
            ob_start(function () { return ''; });
            // line 119
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 121
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
             ";
            // line 122
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 122)) ? ("readonly") : (""));
            echo "
             ";
            // line 123
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 123)) ? ("required") : (""));
            echo "
             ";
            // line 124
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 124)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "
   ";
            // line 127
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 127, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 132
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 132), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 132)) {
                // line 133
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true],                 // line 135
($context["options"] ?? null));
                // line 136
                echo "   ";
            }
            // line 137
            echo "   ";
            $context["options"] = twig_array_merge(["no_value" => 0, "yes_value" => 1],             // line 140
($context["options"] ?? null));
            // line 141
            echo "
   ";
            // line 142
            ob_start(function () { return ''; });
            // line 143
            echo "      <label class=\"form-check form-switch mt-2\">
         <input type=\"hidden\"   name=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 144), "html", null, true);
            echo "\" />
         <input type=\"checkbox\" name=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 145), "html", null, true);
            echo "\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 146
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
                ";
            // line 147
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 147)) ? ("readonly") : (""));
            echo "
                ";
            // line 148
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 148)) ? ("required") : (""));
            echo "
                ";
            // line 149
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 149)) ? ("disabled") : (""));
            echo " />
         ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 150)) {
                // line 151
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 151), "html", null, true);
                echo "</span>
         ";
            }
            // line 153
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            echo "
   ";
            // line 156
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 156, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 160
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 161
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161) != "any") && (twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161), 0, "floor") != twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 161)))) {
                // line 162
                echo "      ";
                // line 163
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                // line 164
                echo "   ";
            }
            // line 165
            echo "
   ";
            // line 166
            if ((($context["value"] ?? null) == "")) {
                // line 167
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 167)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 167)) : (0));
                // line 168
                echo "   ";
            }
            // line 169
            echo "
   ";
            // line 170
            ob_start(function () { return ''; });
            // line 171
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 172), "html", null, true);
            echo "\"
             name=\"";
            // line 173
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 174
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 174)) ? ("readonly") : (""));
            echo "
         ";
            // line 175
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 175)) ? ("disabled") : (""));
            echo "
         ";
            // line 176
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 176)) ? ("required") : (""));
            echo "
         ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 177)) {
                echo "min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 177), "html", null, true);
                echo "\"";
            }
            // line 178
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 178)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 178), "html", null, true);
                echo "\"";
            }
            // line 179
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 179)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 179), "html", null, true);
                echo "\"";
            }
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 181
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 181, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 185
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 186
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 187
            echo "   ";
            ob_start(function () { return ''; });
            // line 188
            echo "      <span class=\"form-control ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 188), "html", null, true);
            echo "\" readonly>
         ";
            // line 189
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 190
                echo "            &nbsp;
         ";
            } else {
                // line 192
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 194
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 196
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 196, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "enable_mentions" => false, "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => []],             // line 209
($context["options"] ?? null));
            // line 210
            echo "
   ";
            // line 211
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 211), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 211)) {
                // line 212
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 213
                echo "   ";
            }
            // line 214
            echo "   ";
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 214)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 214))));
            // line 215
            echo "
   ";
            // line 216
            ob_start(function () { return ''; });
            // line 217
            echo "      ";
            // line 218
            echo "      <textarea class=\"form-control ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 218), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 220
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 220)) ? ("disabled") : (""));
            echo "
                ";
            // line 221
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 221)) ? ("readonly") : (""));
            echo "
                ";
            // line 222
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 222)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 222)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 224
            echo "
   ";
            // line 225
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 225)) {
                // line 226
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [                // line 227
($context["id"] ?? null), twig_get_attribute($this->env, $this->source,                 // line 228
($context["options"] ?? null), "rand", [], "any", false, false, false, 228), true, ((twig_get_attribute($this->env, $this->source,                 // line 230
($context["options"] ?? null), "disabled", [], "any", true, true, false, 230)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 230), false)) : (false)), twig_get_attribute($this->env, $this->source,                 // line 231
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 231)]);
                // line 233
                echo "   ";
            }
            // line 234
            echo "
   ";
            // line 235
            $context["add_html"] = "";
            // line 236
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 236) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 236))) {
                // line 237
                echo "      ";
                ob_start(function () { return ''; });
                // line 238
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" =>                 // line 239
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 241
($context["options"] ?? null), "uploads", [], "any", false, false, false, 241), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 242
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 242), "isMandatoryField", ["_documents_id"], "method", false, false, false, 242)]]);
                // line 244
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 245
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 245) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 245)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 245)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 245))) {
                // line 246
                echo "      ";
                ob_start(function () { return ''; });
                // line 247
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" =>                 // line 248
($context["id"] ?? null), "name" =>                 // line 249
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 251
($context["options"] ?? null), "uploads", [], "any", false, false, false, 251), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 252
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 252), "isMandatoryField", ["_documents_id"], "method", false, false, false, 252)]]);
                // line 254
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 255
                echo "   ";
            }
            // line 256
            echo "
   ";
            // line 257
            if ((($context["add_html"] ?? null) != "")) {
                // line 258
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 258)) {
                    // line 259
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 259));
                    // line 260
                    echo "      ";
                }
                // line 261
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 262
                echo "   ";
            }
            // line 263
            echo "
   ";
            // line 264
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 264, $context, $this->getSourceContext());
            echo "
   ";
            // line 265
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 265) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 266
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 270
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 271), "html", null, true);
                echo ",
                  '";
                // line 272
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 272)]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 281
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 282
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 282), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 282)) {
                // line 283
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 284
                echo "   ";
            }
            // line 285
            echo "
   ";
            // line 286
            if ((($context["value"] ?? null) == "NULL")) {
                // line 287
                echo "      ";
                $context["value"] = null;
                // line 288
                echo "   ";
            }
            // line 289
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 289)) {
                // line 290
                echo "      ";
                if ((twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s") < twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                    // line 291
                    echo "         ";
                    $context["class"] = "warn";
                    // line 292
                    echo "      ";
                }
                // line 293
                echo "   ";
            } else {
                // line 294
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 294)) {
                    // line 295
                    echo "         ";
                    $context["class"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 295);
                    // line 296
                    echo "      ";
                } else {
                    // line 297
                    echo "         ";
                    $context["class"] = "";
                    // line 298
                    echo "      ";
                }
                // line 299
                echo "   ";
            }
            // line 300
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 301), "html", null, true);
            echo "\">
      ";
            // line 303
            echo "      ";
            // line 304
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 304), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 305
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 306
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 306)) ? ("required") : (""));
            echo "
             ";
            // line 307
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 307)) ? ("readonly") : (""));
            echo "
             ";
            // line 308
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 308)) ? ("disabled") : (""));
            echo " />
      ";
            // line 309
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 309)) {
                // line 310
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 312
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 315
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 316
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 317
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 317))], ($context["options"] ?? null));
            // line 318
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 319
            echo "
   ";
            // line 320
            ob_start(function () { return ''; });
            // line 321
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 321, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 324), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            time_24hr: true,
            allowInput: ";
            // line 332
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 332)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 333
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 333)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 334
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 345
            echo "
   ";
            // line 346
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 346, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 349
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 350
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 351
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 351))], ($context["options"] ?? null));
            // line 352
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 353
            echo "
   ";
            // line 354
            ob_start(function () { return ''; });
            // line 355
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 355, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 358
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 358), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 361
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            time_24hr: true,
            allowInput: ";
            // line 367
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 367)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 368
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 368)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 369
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["locale"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 380
            echo "
   ";
            // line 381
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 381, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 384
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 385
            echo "   ";
            ob_start(function () { return ''; });
            // line 386
            echo "      <input id=\"%id%\"
             class=\"form-control ";
            // line 387
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 387), "html", null, true);
            echo "\"
             name=\"";
            // line 388
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 389
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 389)) ? ("readonly") : (""));
            echo "
         ";
            // line 390
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 390)) ? ("disabled") : (""));
            echo "
         ";
            // line 391
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 391)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            cancelText: \"";
            // line 398
            echo twig_escape_filter($this->env, __("Cancel"), "html", null, true);
            echo "\",
            chooseText: \"";
            // line 399
            echo twig_escape_filter($this->env, __("Validate"), "html", null, true);
            echo "\",
            change: function(color) {
                if (color !== null && color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 411
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 411, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 414
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 415
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password", "is_disclosable" => false, "rand" => (((twig_get_attribute($this->env, $this->source,             // line 418
($context["options"] ?? null), "rand", [], "any", true, true, false, 418) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 418)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 418)) : (twig_random($this->env)))],             // line 419
($context["options"] ?? null));
            // line 420
            echo "   ";
            $context["options"] = twig_array_merge(["id" => ((twig_get_attribute($this->env, $this->source,             // line 421
($context["options"] ?? null), "id", [], "any", true, true, false, 421)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 421)) : ((($context["name"] ?? null) . twig_random($this->env)))), "clearable" => ((twig_get_attribute($this->env, $this->source,             // line 422
($context["options"] ?? null), "clearable", [], "any", true, true, false, 422)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 422)) : ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 422)))],             // line 423
($context["options"] ?? null));
            // line 424
            echo "
   ";
            // line 425
            ob_start(function () { return ''; });
            // line 426
            echo "      <input type=\"password\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 426), "html", null, true);
            echo "\"
             class=\"form-control ";
            // line 427
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 427), "html", null, true);
            echo "\"
             name=\"";
            // line 428
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
             value=\"";
            // line 429
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 429)) ? (print (twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
         ";
            // line 430
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 430)) ? ("readonly") : (""));
            echo "
         ";
            // line 431
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 431)) ? ("disabled") : (""));
            echo "
         ";
            // line 432
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 432)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 434
            echo "   ";
            ob_start(function () { return ''; });
            // line 435
            echo "      &nbsp;<i class=\"far fa-eye pointer disclose\" onmousedown=\"showDisclosablePasswordField('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 435), "html", null, true);
            echo "')\"
               onmouseup=\"hideDisclosablePasswordField('";
            // line 436
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 436), "html", null, true);
            echo "')\"
               onmouseout=\"hideDisclosablePasswordField('";
            // line 437
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 437), "html", null, true);
            echo "')\"></i>
      &nbsp;<i class=\"fa fa-paste pointer disclose\" onclick=\"copyDisclosablePasswordFieldToClipboard('";
            // line 438
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 438), "html", null, true);
            echo "')\"></i>
   ";
            $context["btn_group"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 440
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 440)) {
                // line 441
                echo "      ";
                $context["label"] = (($context["label"] ?? null) . ($context["btn_group"] ?? null));
                // line 442
                echo "   ";
            }
            // line 443
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 443)) {
                // line 444
                echo "      ";
                ob_start(function () { return ''; });
                // line 445
                echo "         <input type=\"checkbox\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">&nbsp;<label for=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __("Clear"), "html", null, true);
                echo "</label>
      ";
                $context["clear_chk"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 447
                echo "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["clear_chk"] ?? null));
                // line 448
                echo "   ";
            }
            // line 449
            echo "
   ";
            // line 450
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 450, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 453
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 454
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 455
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 455, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 458
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 459
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 461
($context["name"] ?? null), "simple" => false],             // line 463
($context["options"] ?? null));
            // line 464
            echo "   ";
            ob_start(function () { return ''; });
            // line 465
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 465)) {
                // line 466
                echo "        <input type=\"file\" id=\"%id%\"
               class=\"form-control ";
                // line 467
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 467), "html", null, true);
                echo "\"
               name=\"";
                // line 468
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
               ";
                // line 469
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 469)) ? ("multiple") : (""));
                echo "
               ";
                // line 470
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 470)) ? ("readonly") : (""));
                echo "
               ";
                // line 471
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 471)) ? ("disabled") : (""));
                echo "
               ";
                // line 472
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 472)) ? ("required") : (""));
                echo " />
      ";
            } else {
                // line 474
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [($context["options"] ?? null)]);
                // line 475
                echo "      ";
            }
            // line 476
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 477
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 477, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 480
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 481
            echo "   ";
            ob_start(function () { return ''; });
            // line 482
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 483
            $context["clearable"] = (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["clearable"] ?? null) : null);
            // line 484
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 484) &&  !(null === (($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["url"] ?? null) : null)) : (null));
            // line 485
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
            // line 486
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 487
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["link_options"] ?? null)]);
                echo ">
         ";
            }
            // line 489
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["options"] ?? null)]);
            echo " />
         ";
            // line 490
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 491
                echo "            </a>
         ";
            }
            // line 493
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 494
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 495
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 496
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 500
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 502
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 502, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 505
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 506
            echo "   ";
            ob_start(function () { return ''; });
            // line 507
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 509
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 510
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_11 =                 // line 513
($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["clearable"] ?? null) : null), "no_label" => true]], 510, $context, $this->getSourceContext());
                // line 515
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 518
            echo "      </div>
      ";
            // line 519
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 519, $context, $this->getSourceContext());
            // line 522
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 524
            echo "
   ";
            // line 525
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 525)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 525)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 525))));
            // line 526
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 526, $context, $this->getSourceContext());
            echo "
   ";
            // line 527
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 527, $context, $this->getSourceContext());
            // line 530
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 533
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 534
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 534)) {
                // line 535
                echo "      ";
                $context["options"] = twig_array_merge(["mb" => "mb-0"],                 // line 537
($context["options"] ?? null));
                // line 538
                echo "   ";
            }
            // line 539
            echo "   ";
            ob_start(function () { return ''; });
            // line 540
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control ";
            // line 541
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 541), "html", null, true);
            echo "\"
             name=\"";
            // line 542
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 543
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 543)) ? ("readonly") : (""));
            echo "
         ";
            // line 544
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 544)) ? ("disabled") : (""));
            echo "
         ";
            // line 545
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 545)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 547
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 547, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 550
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 551
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 554
($context["options"] ?? null));
            // line 555
            echo "
   ";
            // line 556
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 556)) {
                // line 557
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 558
                echo "   ";
            }
            // line 559
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 559), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 559)) {
                // line 560
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 561
                echo "   ";
            }
            // line 562
            echo "
   ";
            // line 563
            ob_start(function () { return ''; });
            // line 564
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 565
($context["value"] ?? null), "rand" =>             // line 566
($context["rand"] ?? null)],             // line 567
($context["options"] ?? null))]);
            // line 568
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 569
            echo "
   ";
            // line 570
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 570))])], 570, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 573
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 574
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 577
($context["options"] ?? null));
            // line 578
            echo "
   ";
            // line 579
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 579)) {
                // line 580
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 581
                echo "   ";
            }
            // line 582
            echo "
   ";
            // line 583
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 583), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 583)) {
                // line 584
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 585
                echo "   ";
            }
            // line 586
            echo "
   ";
            // line 587
            ob_start(function () { return ''; });
            // line 588
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [($context["name"] ?? null), ($context["elements"] ?? null), twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 589
($context["value"] ?? null)), "rand" =>             // line 590
($context["rand"] ?? null)],             // line 591
($context["options"] ?? null))]);
            // line 592
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 593
            echo "
   ";
            // line 594
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 594))])], 594, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 597
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 598
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 601
($context["options"] ?? null));
            // line 602
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 602), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 602)) {
                // line 603
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 604
                echo "   ";
            }
            // line 605
            echo "
   ";
            // line 606
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 606)) {
                // line 607
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 608
                echo "   ";
            }
            // line 609
            echo "
   ";
            // line 610
            ob_start(function () { return ''; });
            // line 611
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [($context["name"] ?? null), twig_array_merge(["value" =>             // line 612
($context["value"] ?? null), "rand" =>             // line 613
($context["rand"] ?? null)],             // line 614
($context["options"] ?? null))]);
            // line 615
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 616
            echo "
   ";
            // line 617
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 617))])], 617, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 620
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 621
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 624
($context["options"] ?? null));
            // line 625
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 625), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 625)) {
                // line 626
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 627
                echo "   ";
            }
            // line 628
            echo "
   ";
            // line 629
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 629)) {
                // line 630
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 631
                echo "   ";
            }
            // line 632
            echo "
   ";
            // line 633
            ob_start(function () { return ''; });
            // line 634
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [($context["name"] ?? null), ($context["value"] ?? null),  -1, twig_array_merge(["rand" =>             // line 635
($context["rand"] ?? null)],             // line 636
($context["options"] ?? null))]);
            // line 637
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 638
            echo "
   ";
            // line 639
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 639))])], 639, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 642
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 643
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 646
($context["options"] ?? null));
            // line 647
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 647), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 647)) {
                // line 648
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 649
                echo "   ";
            }
            // line 650
            echo "
   ";
            // line 651
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 651)) {
                // line 652
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 653
                echo "   ";
            }
            // line 654
            echo "
   ";
            // line 655
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 655)) ? (_twig_default_filter((($__internal_compile_12 = ($context["options"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["types"] ?? null) : null), [])) : ([]));
            // line 656
            echo "
   ";
            // line 657
            ob_start(function () { return ''; });
            // line 658
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [($context["name"] ?? null), ($context["types"] ?? null), twig_array_merge(["rand" =>             // line 659
($context["rand"] ?? null), "value" =>             // line 660
($context["value"] ?? null)],             // line 661
($context["options"] ?? null))]);
            // line 662
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 663
            echo "
   ";
            // line 664
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 664))])], 664, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 667
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 668
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 670
($context["options"] ?? null));
            // line 671
            echo "
   ";
            // line 672
            ob_start(function () { return ''; });
            // line 673
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [($context["options"] ?? null)]);
            // line 674
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 675
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 675))])], 675, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 678
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 679
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 682
($context["options"] ?? null));
            // line 683
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 683), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 683)) {
                // line 684
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 685
                echo "   ";
            }
            // line 686
            echo "
   ";
            // line 687
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 687)) {
                // line 688
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 689
                echo "   ";
            }
            // line 690
            echo "
   ";
            // line 691
            ob_start(function () { return ''; });
            // line 692
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [($context["name"] ?? null), ($context["value"] ?? null), (twig_constant("GLPI_ROOT") . "/pics/icones"), twig_array_merge(["rand" =>             // line 693
($context["rand"] ?? null)],             // line 694
($context["options"] ?? null))]);
            // line 695
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 696
            echo "
   ";
            // line 697
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 697))])], 697, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 700
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 701
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 704
($context["options"] ?? null));
            // line 705
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 705), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 705)) {
                // line 706
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 707
                echo "   ";
            }
            // line 708
            echo "
   ";
            // line 709
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 709)) {
                // line 710
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 711
                echo "   ";
            }
            // line 712
            echo "
   ";
            // line 713
            ob_start(function () { return ''; });
            // line 714
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [($context["name"] ?? null), twig_array_merge(["rand" =>             // line 715
($context["rand"] ?? null), "value" =>             // line 716
($context["value"] ?? null)],             // line 717
($context["options"] ?? null))]);
            // line 718
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 719
            echo "
   ";
            // line 720
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 720))])], 720, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 723
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 724
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 724)) {
                // line 725
                echo "      ";
                // line 726
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 727
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 730
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 731
                echo "   ";
            }
            // line 732
            echo "    ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "width" => "100%"],             // line 735
($context["options"] ?? null));
            // line 736
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 736), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 736)) {
                // line 737
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 738
                echo "   ";
            }
            // line 739
            echo "
   ";
            // line 740
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 740)) {
                // line 741
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 742
                echo "   ";
            }
            // line 743
            echo "
   ";
            // line 744
            ob_start(function () { return ''; });
            // line 745
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 746
($context["name"] ?? null), "value" =>             // line 747
($context["value"] ?? null), "rand" =>             // line 748
($context["rand"] ?? null)],             // line 749
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 751
            echo "
   ";
            // line 752
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 753
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 753))])], 753, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 757
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 758
            echo "   ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 759
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 760
                echo "   ";
            }
            // line 761
            echo "
   ";
            // line 762
            ob_start(function () { return ''; });
            // line 763
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 765
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 765, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 768
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 769
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 776
($context["options"] ?? null));
            // line 777
            echo "
   ";
            // line 778
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 778), ($context["name"] ?? null), [], "array", true, true, false, 778)) {
                // line 779
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 779)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["name"] ?? null)] ?? null) : null)]);
                // line 780
                echo "   ";
            } elseif (twig_in_filter(($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 780))) {
                // line 781
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true]);
                // line 782
                echo "   ";
            }
            // line 783
            echo "
   ";
            // line 784
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 784)) {
                // line 785
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 787
                echo "      ";
                $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 787)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 787)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 787))));
                // line 788
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 789
                echo "      ";
                $context["add_field_html"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 789)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 789)) : (""));
                // line 790
                echo "
      ";
                // line 791
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 791) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 791), "isHiddenField", [($context["name"] ?? null)], "method", false, false, false, 791))) {
                    // line 792
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 792)) {
                        // line 793
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 793, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 794
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 794)) {
                        // line 795
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 795, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 797
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 797, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 799
                    echo "      ";
                }
                // line 800
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 803
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 804
            echo "   ";
            ob_start(function () { return ''; });
            // line 805
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 806
            if ( !(null === ($context["value"] ?? null))) {
                // line 807
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 809
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 811
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 811))])], 811, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 814
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 815
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 816
            echo "
   ";
            // line 817
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 817)) {
                // line 818
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 818, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 820
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 820, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 825
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 826
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 829
($context["options"] ?? null));
            // line 830
            echo "
   ";
            // line 831
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 831) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 831)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 831)) : ("col-12 col-sm-6"));
            // line 832
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 832)) {
                // line 833
                echo "      ";
                $context["class"] = "col-12";
                // line 834
                echo "   ";
            }
            // line 835
            echo "
   <div class=\"";
            // line 836
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 836), "html", null, true);
            echo "\">
      ";
            // line 837
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 838
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 843
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 844
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 853
($context["options"] ?? null));
            // line 854
            echo "
   ";
            // line 855
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 855)) {
                // line 856
                echo "      ";
                $context["options"] = twig_array_merge(["label_class" => "col-2", "input_class" => "col-10"],                 // line 859
($context["options"] ?? null));
                // line 860
                echo "   ";
            }
            // line 861
            echo "
   ";
            // line 862
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 862)) {
                // line 863
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 866
                echo "
      ";
                // line 867
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 867)) {
                    // line 868
                    echo "         ";
                    $context["options"] = twig_array_merge(["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"],                     // line 871
($context["options"] ?? null));
                    // line 872
                    echo "      ";
                }
                // line 873
                echo "   ";
            }
            // line 874
            echo "
   ";
            // line 875
            $context["options"] = twig_array_merge(["label_class" => "col-xxl-5", "input_class" => "col-xxl-7"],             // line 878
($context["options"] ?? null));
            // line 879
            echo "
   ";
            // line 880
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 880)) {
                // line 881
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 882
($context["options"] ?? null), "label_class", [], "any", false, false, false, 882) . " text-xxl-end")]);
                // line 884
                echo "   ";
            }
            // line 885
            echo "
   ";
            // line 886
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 886))) {
                // line 887
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 887)]);
                // line 888
                echo "   ";
            } else {
                // line 889
                echo "      ";
                $context["extra_attribs"] = "";
                // line 890
                echo "   ";
            }
            // line 891
            echo "
   <div class=\"form-field row ";
            // line 892
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 892), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 892), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 892), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 893
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 893))], 893, $context, $this->getSourceContext());
            echo "
      ";
            // line 894
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 894)) {
                // line 895
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 896
                echo "      ";
            }
            // line 897
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 897), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 898
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 899
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 905
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 906
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 912
($context["options"] ?? null));
            // line 913
            echo "
   ";
            // line 914
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 914)) {
                // line 915
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 918
                echo "   ";
            }
            // line 919
            echo "
   ";
            // line 920
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 920))) {
                // line 921
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 921)]);
                // line 922
                echo "   ";
            } else {
                // line 923
                echo "      ";
                $context["extra_attribs"] = "";
                // line 924
                echo "   ";
            }
            // line 925
            echo "
   <div class=\"form-field ";
            // line 926
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 926), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 926), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 926), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 927
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 927))], 927, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 928
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 928), "html", null, true);
            echo " field-container\">
         ";
            // line 929
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 931
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 936
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 937
            echo "    ";
            $context["options"] = twig_array_merge(["locked" => false, "locked_value" => null],             // line 940
($context["options"] ?? null));
            // line 941
            echo "
   ";
            // line 942
            $context["required_mark"] = "";
            // line 943
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 943), "isMandatoryField", [twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 943)], "method", false, false, false, 943) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 943))) {
                // line 944
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 945
                echo "   ";
            }
            // line 946
            echo "
   ";
            // line 947
            $context["helper"] = "";
            // line 948
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 948)) {
                // line 949
                echo "      ";
                ob_start(function () { return ''; });
                // line 950
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 951
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 951), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 955
                echo "   ";
            }
            // line 956
            echo "
   ";
            // line 957
            $context["locked_mark"] = "";
            // line 958
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 958)) {
                // line 959
                echo "      ";
                ob_start(function () { return ''; });
                // line 960
                echo "        ";
                ob_start(function () { return ''; });
                echo twig_escape_filter($this->env, __("Field will not be updated from inventory"), "html", null, true);
                $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 961
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 961))) {
                    // line 962
                    echo "            ";
                    ob_start(function () { return ''; });
                    echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, ((__("Last inventory value was:") . " ") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 962)), "html", null, true);
                    $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 963
                    echo "        ";
                }
                // line 964
                echo "        <i class=\"ti ti-lock\"
           title=\"";
                // line 965
                echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                echo "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                $context["locked_mark"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 968
                echo "   ";
            }
            // line 969
            echo "
   <label class=\"";
            // line 970
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 971
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 972
            echo ($context["locked_mark"] ?? null);
            echo "
      ";
            // line 973
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 974
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
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
        return array (  3033 => 974,  3029 => 973,  3025 => 972,  3021 => 971,  3015 => 970,  3012 => 969,  3009 => 968,  3003 => 965,  3000 => 964,  2997 => 963,  2990 => 962,  2987 => 961,  2982 => 960,  2979 => 959,  2976 => 958,  2974 => 957,  2971 => 956,  2968 => 955,  2961 => 951,  2958 => 950,  2955 => 949,  2952 => 948,  2950 => 947,  2947 => 946,  2944 => 945,  2941 => 944,  2938 => 943,  2936 => 942,  2933 => 941,  2931 => 940,  2929 => 937,  2913 => 936,  2901 => 931,  2896 => 929,  2892 => 928,  2888 => 927,  2878 => 926,  2875 => 925,  2872 => 924,  2869 => 923,  2866 => 922,  2863 => 921,  2861 => 920,  2858 => 919,  2855 => 918,  2852 => 915,  2850 => 914,  2847 => 913,  2845 => 912,  2843 => 906,  2826 => 905,  2813 => 899,  2809 => 898,  2802 => 897,  2799 => 896,  2796 => 895,  2794 => 894,  2790 => 893,  2780 => 892,  2777 => 891,  2774 => 890,  2771 => 889,  2768 => 888,  2765 => 887,  2763 => 886,  2760 => 885,  2757 => 884,  2755 => 882,  2753 => 881,  2751 => 880,  2748 => 879,  2746 => 878,  2745 => 875,  2742 => 874,  2739 => 873,  2736 => 872,  2734 => 871,  2732 => 868,  2730 => 867,  2727 => 866,  2724 => 863,  2722 => 862,  2719 => 861,  2716 => 860,  2714 => 859,  2712 => 856,  2710 => 855,  2707 => 854,  2705 => 853,  2703 => 844,  2686 => 843,  2674 => 838,  2670 => 837,  2664 => 836,  2661 => 835,  2658 => 834,  2655 => 833,  2652 => 832,  2650 => 831,  2647 => 830,  2645 => 829,  2643 => 826,  2627 => 825,  2614 => 820,  2608 => 818,  2606 => 817,  2603 => 816,  2600 => 815,  2587 => 814,  2575 => 811,  2571 => 809,  2565 => 807,  2563 => 806,  2558 => 805,  2555 => 804,  2539 => 803,  2529 => 800,  2526 => 799,  2520 => 797,  2514 => 795,  2512 => 794,  2507 => 793,  2504 => 792,  2502 => 791,  2499 => 790,  2496 => 789,  2493 => 788,  2490 => 787,  2484 => 785,  2482 => 784,  2479 => 783,  2476 => 782,  2473 => 781,  2470 => 780,  2467 => 779,  2465 => 778,  2462 => 777,  2460 => 776,  2458 => 769,  2442 => 768,  2430 => 765,  2424 => 763,  2422 => 762,  2419 => 761,  2416 => 760,  2413 => 759,  2410 => 758,  2394 => 757,  2381 => 753,  2379 => 752,  2376 => 751,  2371 => 749,  2370 => 748,  2369 => 747,  2368 => 746,  2366 => 745,  2364 => 744,  2361 => 743,  2358 => 742,  2355 => 741,  2353 => 740,  2350 => 739,  2347 => 738,  2344 => 737,  2341 => 736,  2339 => 735,  2337 => 732,  2334 => 731,  2331 => 730,  2325 => 727,  2322 => 726,  2320 => 725,  2317 => 724,  2300 => 723,  2289 => 720,  2286 => 719,  2283 => 718,  2281 => 717,  2280 => 716,  2279 => 715,  2277 => 714,  2275 => 713,  2272 => 712,  2269 => 711,  2266 => 710,  2264 => 709,  2261 => 708,  2258 => 707,  2255 => 706,  2252 => 705,  2250 => 704,  2248 => 701,  2232 => 700,  2221 => 697,  2218 => 696,  2215 => 695,  2213 => 694,  2212 => 693,  2210 => 692,  2208 => 691,  2205 => 690,  2202 => 689,  2199 => 688,  2197 => 687,  2194 => 686,  2191 => 685,  2188 => 684,  2185 => 683,  2183 => 682,  2181 => 679,  2165 => 678,  2153 => 675,  2150 => 674,  2147 => 673,  2145 => 672,  2142 => 671,  2140 => 670,  2138 => 668,  2123 => 667,  2112 => 664,  2109 => 663,  2106 => 662,  2104 => 661,  2103 => 660,  2102 => 659,  2100 => 658,  2098 => 657,  2095 => 656,  2093 => 655,  2090 => 654,  2087 => 653,  2084 => 652,  2082 => 651,  2079 => 650,  2076 => 649,  2073 => 648,  2070 => 647,  2068 => 646,  2066 => 643,  2050 => 642,  2039 => 639,  2036 => 638,  2033 => 637,  2031 => 636,  2030 => 635,  2028 => 634,  2026 => 633,  2023 => 632,  2020 => 631,  2017 => 630,  2015 => 629,  2012 => 628,  2009 => 627,  2006 => 626,  2003 => 625,  2001 => 624,  1999 => 621,  1983 => 620,  1972 => 617,  1969 => 616,  1966 => 615,  1964 => 614,  1963 => 613,  1962 => 612,  1960 => 611,  1958 => 610,  1955 => 609,  1952 => 608,  1949 => 607,  1947 => 606,  1944 => 605,  1941 => 604,  1938 => 603,  1935 => 602,  1933 => 601,  1931 => 598,  1915 => 597,  1904 => 594,  1901 => 593,  1898 => 592,  1896 => 591,  1895 => 590,  1894 => 589,  1892 => 588,  1890 => 587,  1887 => 586,  1884 => 585,  1881 => 584,  1879 => 583,  1876 => 582,  1873 => 581,  1870 => 580,  1868 => 579,  1865 => 578,  1863 => 577,  1861 => 574,  1844 => 573,  1833 => 570,  1830 => 569,  1827 => 568,  1825 => 567,  1824 => 566,  1823 => 565,  1821 => 564,  1819 => 563,  1816 => 562,  1813 => 561,  1810 => 560,  1807 => 559,  1804 => 558,  1801 => 557,  1799 => 556,  1796 => 555,  1794 => 554,  1792 => 551,  1776 => 550,  1764 => 547,  1759 => 545,  1755 => 544,  1751 => 543,  1745 => 542,  1741 => 541,  1738 => 540,  1735 => 539,  1732 => 538,  1730 => 537,  1728 => 535,  1725 => 534,  1709 => 533,  1699 => 530,  1697 => 527,  1692 => 526,  1690 => 525,  1687 => 524,  1683 => 522,  1681 => 519,  1678 => 518,  1670 => 515,  1668 => 513,  1667 => 510,  1664 => 509,  1660 => 508,  1657 => 507,  1654 => 506,  1638 => 505,  1626 => 502,  1622 => 500,  1615 => 496,  1611 => 495,  1606 => 494,  1603 => 493,  1599 => 491,  1597 => 490,  1590 => 489,  1582 => 487,  1579 => 486,  1576 => 485,  1573 => 484,  1571 => 483,  1568 => 482,  1565 => 481,  1548 => 480,  1536 => 477,  1533 => 476,  1530 => 475,  1527 => 474,  1522 => 472,  1518 => 471,  1514 => 470,  1510 => 469,  1506 => 468,  1502 => 467,  1499 => 466,  1496 => 465,  1493 => 464,  1491 => 463,  1490 => 461,  1488 => 459,  1472 => 458,  1460 => 455,  1457 => 454,  1441 => 453,  1430 => 450,  1427 => 449,  1424 => 448,  1421 => 447,  1409 => 445,  1406 => 444,  1403 => 443,  1400 => 442,  1397 => 441,  1394 => 440,  1389 => 438,  1385 => 437,  1381 => 436,  1376 => 435,  1373 => 434,  1368 => 432,  1364 => 431,  1360 => 430,  1356 => 429,  1352 => 428,  1348 => 427,  1343 => 426,  1341 => 425,  1338 => 424,  1336 => 423,  1335 => 422,  1334 => 421,  1332 => 420,  1330 => 419,  1329 => 418,  1327 => 415,  1311 => 414,  1299 => 411,  1284 => 399,  1280 => 398,  1270 => 391,  1266 => 390,  1262 => 389,  1256 => 388,  1252 => 387,  1249 => 386,  1246 => 385,  1230 => 384,  1219 => 381,  1216 => 380,  1200 => 369,  1196 => 368,  1192 => 367,  1183 => 361,  1177 => 358,  1170 => 355,  1168 => 354,  1165 => 353,  1162 => 352,  1159 => 351,  1156 => 350,  1140 => 349,  1129 => 346,  1126 => 345,  1110 => 334,  1106 => 333,  1102 => 332,  1094 => 327,  1088 => 324,  1081 => 321,  1079 => 320,  1076 => 319,  1073 => 318,  1070 => 317,  1067 => 316,  1051 => 315,  1041 => 312,  1037 => 310,  1035 => 309,  1031 => 308,  1027 => 307,  1023 => 306,  1017 => 305,  1010 => 304,  1008 => 303,  1004 => 301,  1001 => 300,  998 => 299,  995 => 298,  992 => 297,  989 => 296,  986 => 295,  983 => 294,  980 => 293,  977 => 292,  974 => 291,  971 => 290,  968 => 289,  965 => 288,  962 => 287,  960 => 286,  957 => 285,  954 => 284,  951 => 283,  948 => 282,  932 => 281,  915 => 272,  911 => 271,  907 => 270,  901 => 266,  899 => 265,  895 => 264,  892 => 263,  889 => 262,  886 => 261,  883 => 260,  880 => 259,  877 => 258,  875 => 257,  872 => 256,  869 => 255,  866 => 254,  864 => 252,  863 => 251,  862 => 249,  861 => 248,  859 => 247,  856 => 246,  853 => 245,  850 => 244,  848 => 242,  847 => 241,  846 => 239,  844 => 238,  841 => 237,  838 => 236,  836 => 235,  833 => 234,  830 => 233,  828 => 231,  827 => 230,  826 => 228,  825 => 227,  823 => 226,  821 => 225,  818 => 224,  811 => 222,  807 => 221,  803 => 220,  793 => 218,  791 => 217,  789 => 216,  786 => 215,  783 => 214,  780 => 213,  777 => 212,  775 => 211,  772 => 210,  770 => 209,  768 => 201,  752 => 200,  740 => 196,  736 => 194,  730 => 192,  726 => 190,  724 => 189,  719 => 188,  716 => 187,  713 => 186,  697 => 185,  685 => 181,  675 => 179,  668 => 178,  662 => 177,  658 => 176,  654 => 175,  650 => 174,  644 => 173,  640 => 172,  637 => 171,  635 => 170,  632 => 169,  629 => 168,  626 => 167,  624 => 166,  621 => 165,  618 => 164,  615 => 163,  613 => 162,  610 => 161,  594 => 160,  583 => 156,  580 => 155,  576 => 153,  570 => 151,  568 => 150,  564 => 149,  560 => 148,  556 => 147,  552 => 146,  546 => 145,  540 => 144,  537 => 143,  535 => 142,  532 => 141,  530 => 140,  528 => 137,  525 => 136,  523 => 135,  521 => 133,  518 => 132,  502 => 131,  491 => 127,  488 => 126,  483 => 124,  479 => 123,  475 => 122,  471 => 121,  467 => 120,  462 => 119,  460 => 118,  457 => 117,  455 => 116,  454 => 114,  451 => 113,  448 => 112,  445 => 111,  442 => 110,  426 => 109,  415 => 105,  412 => 104,  406 => 102,  403 => 101,  399 => 100,  395 => 99,  391 => 98,  385 => 97,  381 => 96,  376 => 95,  374 => 94,  371 => 93,  368 => 92,  365 => 91,  362 => 90,  359 => 89,  343 => 88,  332 => 84,  329 => 83,  326 => 82,  323 => 81,  320 => 80,  317 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  301 => 74,  298 => 73,  295 => 72,  278 => 71,  263 => 65,  257 => 62,  254 => 61,  252 => 60,  248 => 59,  243 => 57,  240 => 56,  237 => 55,  223 => 54,  208 => 48,  202 => 45,  199 => 44,  197 => 43,  193 => 42,  188 => 40,  185 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  158 => 34,  152 => 934,  148 => 903,  144 => 841,  140 => 823,  137 => 813,  134 => 802,  131 => 767,  128 => 756,  125 => 722,  122 => 699,  119 => 677,  116 => 666,  113 => 641,  110 => 619,  107 => 596,  104 => 572,  101 => 549,  98 => 532,  95 => 504,  92 => 479,  89 => 457,  86 => 452,  83 => 413,  80 => 383,  77 => 348,  74 => 314,  71 => 280,  67 => 198,  63 => 183,  59 => 158,  55 => 129,  51 => 107,  47 => 86,  44 => 70,  41 => 53,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/form/fields_macros.html.twig");
    }
}
