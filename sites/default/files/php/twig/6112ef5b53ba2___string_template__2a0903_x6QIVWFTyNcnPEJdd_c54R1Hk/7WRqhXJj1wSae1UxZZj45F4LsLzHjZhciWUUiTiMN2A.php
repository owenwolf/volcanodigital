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

/* __string_template__2a0903fa419712dca0cd668de16cc992f9be3958c361d6e135f3cab49e7e6c07 */
class __TwigTemplate_0e0ab3d7a2455430c3e2ca7744ffc47ca2f09f211b2c9b7fef34a1840b5231e1 extends \Twig\Template
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
        echo "<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_facebook"] ?? null), 1, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
<a href=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_instagram"] ?? null), 2, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
<a href=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_linkedin"] ?? null), 3, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a>
<a href=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_telegram_chanel"] ?? null), 4, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-telegram-plane\"></i></a>
<a href=\"https://wa.me/";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_telefono_whatsapp"] ?? null), 5, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-whatsapp\"></i></a>
<a href=\"mailto:";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_cor"] ?? null), 6, $this->source), "html", null, true);
        echo "?subject=Correo de contacto Volcano Source\"><i class=\"fas fa-envelope\"></i></a>  

";
    }

    public function getTemplateName()
    {
        return "__string_template__2a0903fa419712dca0cd668de16cc992f9be3958c361d6e135f3cab49e7e6c07";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2a0903fa419712dca0cd668de16cc992f9be3958c361d6e135f3cab49e7e6c07", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
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
