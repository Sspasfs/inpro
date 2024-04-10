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

/* display_and_die.html.twig */
class __TwigTemplate_888dfd99bc9269b2057c721918dd67de extends Template
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
<div class=\"alert alert-danger alert-important\">
   <div class=\"d-flex\">
      <div class=\"me-2\">
         <i class=\"fas fa-exclamation-triangle fa-2x\"></i>
      </div>
      <div>
         ";
        // line 40
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "<br>
         <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, __("Return to previous page"), "html", null, true);
        echo "</a>
      </div>
   </div>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display_and_die.html.twig";
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
        return array (  50 => 41,  46 => 40,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "display_and_die.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/display_and_die.html.twig");
    }
}
