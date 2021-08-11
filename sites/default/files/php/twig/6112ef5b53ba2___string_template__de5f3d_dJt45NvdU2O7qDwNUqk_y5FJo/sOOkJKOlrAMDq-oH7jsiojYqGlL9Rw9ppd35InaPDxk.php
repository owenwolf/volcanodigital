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

/* __string_template__de5f3dfbb32fc523b75604ed81ad92a5039d76fe42fad8dc95fc136f80b2e5b1 */
class __TwigTemplate_8d125f86f416317d1e47ae44978628d3d7ce219b0864fbedd041a72a1e334d32 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col-md-3\">
<div class=\"card-group\">
  <div class=\"card\">
    <img src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_logo_para_servicio"] ?? null), 4, $this->source), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Volcano Source Digital\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
        echo "</h5>
      <p class=\"card-text\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 7, $this->source), "html", null, true);
        echo "</p>
    </div>
    <div class=\"card-footer\">
      <small class=\"text-muted\"><a href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 10, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary\" target=\"_blank\">Ver Mas!</a></small>
    </div>
  </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "__string_template__de5f3dfbb32fc523b75604ed81ad92a5039d76fe42fad8dc95fc136f80b2e5b1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 7,  49 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__de5f3dfbb32fc523b75604ed81ad92a5039d76fe42fad8dc95fc136f80b2e5b1", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
