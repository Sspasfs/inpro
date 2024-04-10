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

/* components/masonry_grid.html.twig */
class __TwigTemplate_ae0d2c19c219421443fe51ed2c722f07 extends Template
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
        if ( !array_key_exists("grid_item_class", $context)) {
            // line 35
            echo "   ";
            $context["grid_item_class"] = "col-xl-6";
        }
        // line 37
        echo "
";
        // line 38
        $context["rand"] = twig_random($this->env);
        // line 39
        echo "<div id=\"grid_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"masonry_grid row row-cards mb-5\">
   ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grid_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "      ";
            if ( !twig_test_empty($context["item"])) {
                // line 42
                echo "         <div class=\"grid-item ";
                echo twig_escape_filter($this->env, ($context["grid_item_class"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 43
                echo $context["item"];
                echo "
         </div>
      ";
            }
            // line 46
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   window.msnry_grid_";
        // line 51
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " = new Masonry('#grid_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "', {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$('#grid_";
        // line 56
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on(\"layout:refresh\", function() {
       window.msnry_grid_";
        // line 57
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo ".layout();
   });

   \$(document).on('masonry_grid:layout', function() {
       window.msnry_grid_";
        // line 61
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo ".layout();
   })

});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/masonry_grid.html.twig";
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
        return array (  107 => 61,  100 => 57,  96 => 56,  86 => 51,  80 => 47,  74 => 46,  68 => 43,  63 => 42,  60 => 41,  56 => 40,  51 => 39,  49 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/masonry_grid.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/masonry_grid.html.twig");
    }
}
