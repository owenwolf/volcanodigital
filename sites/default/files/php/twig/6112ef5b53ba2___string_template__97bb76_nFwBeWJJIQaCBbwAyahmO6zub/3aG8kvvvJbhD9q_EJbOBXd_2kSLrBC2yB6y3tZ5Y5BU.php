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

/* __string_template__97bb76506af92e0dd439f26a0890c2455c162408ed5974cf65330f6e64f0699a */
class __TwigTemplate_33f85116f14c67c564109f17269a1985a7d0a1612721915cbe370a7c3c65c4c7 extends \Twig\Template
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
        echo "<p><a href=\"https://t.me/volcanosourcedigital\" target=\"_blank\"><i class=\"fab fa-telegram-plane fa-4x\"></i>  @volcanosourcedigital</a></p>
<p><a href=\"https://wa.me/";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_telefono_whatsapp"] ?? null), 2, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-whatsapp fa-4x\"></i>   +505 7820 1310</a></p>
<p><a href=\"mailto:";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_cor"] ?? null), 3, $this->source), "html", null, true);
        echo "?subject=Correo de contacto Volcano Source\"><i class=\"fas fa-envelope fa-3x\"></i>   info@volcanosource.digital</a></p>  

";
    }

    public function getTemplateName()
    {
        return "__string_template__97bb76506af92e0dd439f26a0890c2455c162408ed5974cf65330f6e64f0699a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__97bb76506af92e0dd439f26a0890c2455c162408ed5974cf65330f6e64f0699a", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
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
