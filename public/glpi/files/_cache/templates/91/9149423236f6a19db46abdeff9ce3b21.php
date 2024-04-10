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

/* install/choose_language.html.twig */
class __TwigTemplate_1fa042a6a314319219648f95fc06d17b extends Template
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
<form action=\"install.php\" method=\"post\" data-submit-once>
   <div class=\"container\">
      <div class=\"mb-3\">
         ";
        // line 37
        echo ($context["languages_dropdown"] ?? null);
        echo "
      </div>

      <button type=\"submit\" name=\"lang_select\" class=\"btn btn-primary\" autofocus>
         ";
        // line 41
        echo twig_escape_filter($this->env, __("OK"), "html", null, true);
        echo "
         <i class=\"fas fa-chevron-right ms-1\"></i>
      </button>
   </div>

   <input type=\"hidden\" name=\"install\" value=\"lang_select\" />
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/choose_language.html.twig";
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
        return array (  59 => 47,  50 => 41,  43 => 37,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/choose_language.html.twig", "/Users/alexleblay/Documents/Edcuservice/inpro-laravel/public/glpi/templates/install/choose_language.html.twig");
    }
}
