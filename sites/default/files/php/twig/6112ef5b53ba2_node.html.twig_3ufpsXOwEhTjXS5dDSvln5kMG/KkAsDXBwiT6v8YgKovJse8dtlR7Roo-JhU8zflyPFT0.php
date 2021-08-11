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

/* themes/custom/volcanodigital/templates/content/node.html.twig */
class __TwigTemplate_f7b119fd619696297d71d9420ceed6b4cfdce7d7a7017fb7ceb5b5017f9e7dbc extends \Twig\Template
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
        echo "
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 5
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "bundle", [], "any", false, false, true, 7), 7, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 8)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 9)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 10)) ? ("node--unpublished") : ("")), 5 => ((        // line 11
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 11, $this->source)))) : ("")), 6 => "clearfix"];
        // line 15
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 15), 15, $this->source), "html", null, true);
        echo ">
  <header>
    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 17, $this->source), "html", null, true);
        echo "
    ";
        // line 18
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 19
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 20, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 20, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 23
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 23, $this->source), "html", null, true);
        echo "
    ";
        // line 24
        if (($context["display_submitted"] ?? null)) {
            // line 25
            echo "      <div class=\"row article_user\">
         <div class=\"col-md-3\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 26, $this->source), "html", null, true);
            echo "</div>
         <div class=\"col-md-6\">Escrito por <strong>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 27, $this->source), "html", null, true);
            echo " - Desarrollaor web</strong></div>
         <div class=\"col-md-3\"><strong>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 28, $this->source), "html", null, true);
            echo "</strong></div> 
      </div>
      
    ";
        }
        // line 32
        echo "  </header>
  <div";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo ">
    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 34, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/volcanodigital/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  107 => 33,  104 => 32,  97 => 28,  93 => 27,  89 => 26,  86 => 25,  84 => 24,  79 => 23,  71 => 20,  66 => 19,  64 => 18,  60 => 17,  54 => 15,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/volcanodigital/templates/content/node.html.twig", "C:\\xampp\\htdocs\\volcanosourcedigital\\web\\themes\\custom\\volcanodigital\\templates\\content\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "if" => 18);
        static $filters = array("escape" => 2, "clean_class" => 7);
        static $functions = array("attach_library" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class'],
                ['attach_library']
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
