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

/* components/modal.html.twig */
class __TwigTemplate_438a5cf7d2a6ef18f7dcb757426ff086 extends Template
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
<div class=\"modal-dialog ";
        // line 34
        echo twig_escape_filter($this->env, ($context["modal_class"] ?? null), "html", null, true);
        echo "\">
   <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">";
        // line 37
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 38
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\"></button>
      </div>
      <div class=\"modal-body\"></div>
   </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/modal.html.twig";
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
        return array (  50 => 38,  46 => 37,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/modal.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/components/modal.html.twig");
    }
}
