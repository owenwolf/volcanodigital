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

/* themes/custom/volcanodigital/templates/layout/page.html.twig */
class __TwigTemplate_d87538a08fc2c6fe18a722b1c436295975c4a233d9279a4641002b9a7022d176 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "    </header>
    ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 47)) {
            // line 48
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 49, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 54
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 54)) {
            // line 55
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 62
            echo "    ";
        }
        // line 63
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mainslider", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
        ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email_registro", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "    </div>
    ";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_contact", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "
    ";
        // line 95
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 95) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 95)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 95))) {
            // line 96
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 97, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
          ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
          ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 104
        echo "    <footer class=\"site-footer\">
      ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 121
        echo "    </footer>
  </div>
</div>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 5))) {
            // line 6
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 6, $this->source), "html", null, true);
            echo ">
          ";
            // line 7
            if (($context["container_navbar"] ?? null)) {
                // line 8
                echo "          <div class=\"container justify-content-end\">
          ";
            }
            // line 10
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
              ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
              ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 12)) {
                // line 13
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 17
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 18
                echo "          </div>
          ";
            }
            // line 20
            echo "          </nav>
        ";
        }
        // line 22
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 22, $this->source), "html", null, true);
        echo ">
          ";
        // line 23
        if (($context["container_navbar"] ?? null)) {
            // line 24
            echo "          <div class=\"container\">
          ";
        }
        // line 26
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
            ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 27) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 27))) {
            // line 28
            echo "              <button class=\"navbar-toggler navbar-toggler-right collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
                ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 31)) {
                // line 32
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 36
            echo "\t          </div>
            ";
        }
        // line 38
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 39
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 41
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 42
            echo "          </div>
          ";
        }
        // line 44
        echo "        </nav>
      ";
    }

    // line 55
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 57, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 67, $this->source), "html", null, true);
        echo "\">
          ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 70, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76)) {
            // line 77
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 77, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 83
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 83)) {
            // line 84
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 84, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 90
        echo "          </div>
        </div>
      ";
    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 106, $this->source), "html", null, true);
        echo "\">
          ";
        // line 107
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 107) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 107)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 107))) {
            // line 108
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
              ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
              ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 114
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 114)) {
            // line 115
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 119
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/volcanodigital/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 119,  361 => 116,  358 => 115,  355 => 114,  349 => 111,  345 => 110,  341 => 109,  338 => 108,  336 => 107,  331 => 106,  327 => 105,  321 => 90,  314 => 86,  308 => 84,  305 => 83,  298 => 79,  292 => 77,  290 => 76,  284 => 73,  278 => 70,  273 => 68,  268 => 67,  264 => 66,  256 => 58,  252 => 57,  249 => 56,  245 => 55,  240 => 44,  236 => 42,  233 => 41,  229 => 39,  226 => 38,  222 => 36,  216 => 33,  213 => 32,  211 => 31,  207 => 30,  203 => 28,  201 => 27,  196 => 26,  192 => 24,  190 => 23,  185 => 22,  181 => 20,  177 => 18,  174 => 17,  168 => 14,  165 => 13,  163 => 12,  159 => 11,  154 => 10,  150 => 8,  148 => 7,  143 => 6,  140 => 5,  136 => 4,  129 => 121,  127 => 105,  124 => 104,  117 => 100,  113 => 99,  109 => 98,  105 => 97,  102 => 96,  100 => 95,  96 => 94,  93 => 93,  91 => 66,  86 => 64,  81 => 63,  78 => 62,  75 => 55,  72 => 54,  65 => 50,  61 => 49,  58 => 48,  56 => 47,  53 => 46,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/volcanodigital/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\volcanosourcedigital\\web\\themes\\custom\\volcanodigital\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 4, "if" => 47);
        static $filters = array("t" => 3, "escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
