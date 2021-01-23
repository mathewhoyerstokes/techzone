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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_4ace15e9a43ffd7a979f38e5f4148a82e2d80458ceb439812e05f336dbf9f747 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_listing' => [$this, 'block_product_listing'],
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["currentPage"] = twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) + 1) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "limit", [], "any", false, false, false, 1)), 0, "ceil");
        // line 2
        $context["paginationConfig"] = json_encode(["page" => ($context["currentPage"] ?? null)]);
        // line 3
        echo "
";
        // line 4
        $context["disableEmptyFilter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "listing", [], "any", false, false, false, 4), "disableEmptyFilterOptions", [], "any", false, false, false, 4);
        // line 5
        echo "
";
        // line 6
        $context["listingPagination"] = ["sidebar" =>         // line 7
($context["sidebar"] ?? null), "params" =>         // line 8
($context["params"] ?? null), "dataUrl" =>         // line 9
($context["dataUrl"] ?? null), "filterUrl" =>         // line 10
($context["filterUrl"] ?? null), "disableEmptyFilter" =>         // line 11
($context["disableEmptyFilter"] ?? null), "snippets" => ["resetAllButtonText" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll"))]];
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('product_listing', $context, $blocks);
    }

    public function block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='";
        // line 20
        echo twig_escape_filter($this->env, ($context["paginationConfig"] ?? null), "html", null, true);
        echo "'
         data-listing=\"true\"
         data-listing-options='";
        // line 22
        echo twig_escape_filter($this->env, json_encode(($context["listingPagination"] ?? null)), "html", null, true);
        echo "'>

        ";
        // line 24
        $this->displayBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 90
        echo "    </div>
";
    }

    // line 24
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <div class=\"cms-element-product-listing\">
                ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 26) > 0)) {
            // line 27
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 48
            echo "                ";
        }
        // line 49
        echo "
                ";
        // line 50
        $this->displayBlock('element_product_listing_row', $context, $blocks);
        // line 79
        echo "
                ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 80) > twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 80))) {
            // line 81
            echo "                    ";
            $this->displayBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 87
            echo "                ";
        }
        // line 88
        echo "            </div>
        ";
    }

    // line 27
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                ";
        // line 30
        $this->displayBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 36
        echo "                            </div>

                            <div class=\"col-md-auto\">
                                ";
        // line 39
        $this->displayBlock('element_product_listing_sorting', $context, $blocks);
        // line 45
        echo "                            </div>
                        </div>
                    ";
    }

    // line 30
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 31)->display(twig_array_merge($context, ["entities" =>         // line 32
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 33
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 33)]));
        // line 35
        echo "                                ";
    }

    // line 39
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 40)->display(twig_array_merge($context, ["current" => twig_get_attribute($this->env, $this->source,         // line 41
($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 41), "sortings" => twig_get_attribute($this->env, $this->source,         // line 42
($context["searchResult"] ?? null), "availableSortings", [], "any", false, false, false, 42)]));
        // line 44
        echo "                                ";
    }

    // line 50
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 52) > 0)) {
            // line 53
            echo "                            ";
            $this->displayBlock('element_product_listing_col', $context, $blocks);
            // line 65
            echo "                        ";
        } else {
            // line 66
            echo "                            ";
            $this->displayBlock('element_product_listing_col_empty', $context, $blocks);
            // line 76
            echo "                        ";
        }
        // line 77
        echo "                    </div>
                ";
    }

    // line 53
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 55
            echo "                                    <div class=\"cms-listing-col ";
            echo twig_escape_filter($this->env, ($context["listingColumns"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 56
            $this->displayBlock('element_product_listing_box', $context, $blocks);
            // line 62
            echo "                                    </div>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            ";
    }

    // line 56
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 57)->display(twig_array_merge($context, ["layout" =>         // line 58
($context["boxLayout"] ?? null), "displayMode" =>         // line 59
($context["displayMode"] ?? null)]));
        // line 61
        echo "                                        ";
    }

    // line 66
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 68
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 74
        echo "                                </div>
                            ";
    }

    // line 68
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 69)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 73
        echo "                                    ";
    }

    // line 81
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 82)->display(twig_array_merge($context, ["entities" =>         // line 83
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 84
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 84)]));
        // line 86
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 86,  302 => 84,  301 => 83,  299 => 82,  295 => 81,  291 => 73,  288 => 69,  284 => 68,  279 => 74,  277 => 68,  274 => 67,  270 => 66,  266 => 61,  264 => 59,  263 => 58,  261 => 57,  257 => 56,  253 => 64,  238 => 62,  236 => 56,  231 => 55,  213 => 54,  209 => 53,  204 => 77,  201 => 76,  198 => 66,  195 => 65,  192 => 53,  190 => 52,  187 => 51,  183 => 50,  179 => 44,  177 => 42,  176 => 41,  174 => 40,  170 => 39,  166 => 35,  164 => 33,  163 => 32,  161 => 31,  157 => 30,  151 => 45,  149 => 39,  144 => 36,  142 => 30,  138 => 28,  134 => 27,  129 => 88,  126 => 87,  123 => 81,  121 => 80,  118 => 79,  116 => 50,  113 => 49,  110 => 48,  107 => 27,  105 => 26,  102 => 25,  98 => 24,  93 => 90,  91 => 24,  86 => 22,  81 => 20,  77 => 18,  70 => 17,  67 => 16,  65 => 11,  64 => 10,  63 => 9,  62 => 8,  61 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/listing.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
