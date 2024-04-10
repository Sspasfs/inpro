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

/* central/widget_tab.html.twig */
class __TwigTemplate_aa08d0e626f9ff1ca1c771dedd36e578 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "<table class=\"tab_cadre_central\">
   ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        echo "
</table>

<div id=\"home-dashboard";
        // line 39
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"container-fluid\">
   ";
        // line 40
        $context["grid_items"] = [];
        // line 41
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 42
            echo "      ";
            ob_start(function () { return ''; });
            // line 43
            echo "         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "itemtype", [], "any", false, false, false, 45), "html", null, true);
            echo "\" data-widget=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "widget", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                 data-params=\"";
            // line 46
            echo twig_escape_filter($this->env, json_encode(((twig_get_attribute($this->env, $this->source, $context["card"], "params", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["card"], "params", [], "any", false, false, false, 46), [])) : ([]))), "html", null, true);
            echo "\">
              </div>
            </div>
         </div>
      ";
            $context["card_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "
      ";
            // line 52
            $context["grid_items"] = twig_array_merge(($context["grid_items"] ?? null), [            // line 53
($context["card_html"] ?? null)]);
            // line 55
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
   ";
        // line 57
        echo twig_include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 58
($context["grid_items"] ?? null)], false);
        // line 59
        echo "

   <script>
   \$(function () {
      \$('#home-dashboard";
        // line 63
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .lazy-widget').each(function() {
         const this_obj = \$(this);
         const params = {
            'itemtype': this_obj.data('itemtype'),
            'widget': this_obj.data('widget'),
            'params': this_obj.data('params')
         };
         this_obj.html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
            .load('";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/central.php"), "html", null, true);
        echo "', params, function(response, status, xhr) {
               const parent = this_obj.closest('.grid-item').parent();

               if (status === 'error' || !response) {
                  window['msnry_' + parent.prop('id')].remove(this_obj.closest('.grid-item'));
               }

               window['msnry_' + parent.prop('id')].layout();
            });
      });
   });
   </script>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "central/widget_tab.html.twig";
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
        return array (  118 => 71,  107 => 63,  101 => 59,  99 => 58,  98 => 57,  95 => 56,  89 => 55,  87 => 53,  86 => 52,  83 => 51,  75 => 46,  69 => 45,  65 => 43,  62 => 42,  57 => 41,  55 => 40,  51 => 39,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "central/widget_tab.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/central/widget_tab.html.twig");
    }
}
