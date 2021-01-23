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

/* @Storefront/storefront/component/listing/filter-panel.html.twig */
class __TwigTemplate_066a39e4412810d7f92599154385a28ee7c4c9c2c7bd68feddc4e3973ebd90c3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_panel' => [$this, 'block_component_filter_panel'],
            'component_filter_panel_header' => [$this, 'block_component_filter_panel_header'],
            'component_filter_panel_element' => [$this, 'block_component_filter_panel_element'],
            'component_filter_panel_items_container' => [$this, 'block_component_filter_panel_items_container'],
            'component_filter_panel_item_manufacturer' => [$this, 'block_component_filter_panel_item_manufacturer'],
            'component_filter_panel_item_properties' => [$this, 'block_component_filter_panel_item_properties'],
            'component_filter_panel_item_price' => [$this, 'block_component_filter_panel_item_price'],
            'component_filter_panel_item_rating' => [$this, 'block_component_filter_panel_item_rating'],
            'component_filter_panel_item_shipping_free' => [$this, 'block_component_filter_panel_item_shipping_free'],
            'component_filter_panel_active_container' => [$this, 'block_component_filter_panel_active_container'],
            'component_filter_panel_active_container_inner' => [$this, 'block_component_filter_panel_active_container_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
    }

    // line 2
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div class=\"filter-panel-offcanvas-header\">
            <h3 class=\"filter-panel-offcanvas-only\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "</h3>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                ";
        // line 7
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter-panel.html.twig", 7);
        })())->display(twig_array_merge($context, ["size" => "md", "name" => "x"]));
        // line 8
        echo "            </div>
        </div>
    ";
    }

    // line 13
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <div class=\"filter-panel";
        if (($context["sidebar"] ?? null)) {
            echo " is--sidebar";
        }
        echo "\">
            ";
        // line 15
        $this->displayBlock('component_filter_panel_items_container', $context, $blocks);
        // line 91
        echo "
            ";
        // line 92
        $this->displayBlock('component_filter_panel_active_container', $context, $blocks);
        // line 97
        echo "        </div>
     ";
    }

    // line 15
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <div class=\"filter-panel-items-container\">

                    ";
        // line 18
        $this->displayBlock('component_filter_panel_item_manufacturer', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_filter_panel_item_properties', $context, $blocks);
        // line 51
        echo "
                    ";
        // line 52
        $this->displayBlock('component_filter_panel_item_price', $context, $blocks);
        // line 66
        echo "
                    ";
        // line 68
        echo "                    ";
        $this->displayBlock('component_filter_panel_item_rating', $context, $blocks);
        // line 78
        echo "
                    ";
        // line 79
        $this->displayBlock('component_filter_panel_item_shipping_free', $context, $blocks);
        // line 89
        echo "                </div>
            ";
    }

    // line 18
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                        ";
        // line 20
        echo "                        ";
        $context["manufacturers"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 20), "get", [0 => "manufacturer"], "method", false, false, false, 20);
        // line 21
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            ";
            $context["manufacturersSorted"] = twig_sort_filter(twig_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 22), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "translated", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22)) > twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "translated", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22))); });
            // line 23
            echo "
                            ";
            // line 24
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 24)->display(twig_array_merge($context, ["elements" =>             // line 25
($context["manufacturersSorted"] ?? null), "sidebar" =>             // line 26
($context["sidebar"] ?? null), "name" => "manufacturer", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterManufacturerDisplayName"))]));
            // line 30
            echo "                        ";
        }
        // line 31
        echo "                    ";
    }

    // line 33
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                        ";
        // line 35
        echo "                        ";
        $context["properties"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 35), "get", [0 => "properties"], "method", false, false, false, 35);
        // line 36
        echo "
                        ";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 37))) {
            // line 38
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 38));
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
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 39
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 39)->display(twig_array_merge($context, ["elements" => twig_get_attribute($this->env, $this->source,                 // line 40
$context["property"], "options", [], "any", false, false, false, 40), "sidebar" =>                 // line 41
($context["sidebar"] ?? null), "name" => "properties", "displayName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 43
$context["property"], "translated", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "displayType" => twig_get_attribute($this->env, $this->source,                 // line 44
$context["property"], "displayType", [], "any", false, false, false, 44), "pluginSelector" => "filter-property-select", "propertyName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 46
$context["property"], "translated", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)]));
                // line 48
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                        ";
        }
        // line 50
        echo "                    ";
    }

    // line 52
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        ";
        $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 53), "get", [0 => "price"], "method", false, false, false, 53);
        // line 54
        echo "
                        ";
        // line 55
        if (((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "min", [], "any", false, false, false, 55) > 0) && (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 55) > 0))) {
            // line 56
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-range.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 56)->display(twig_array_merge($context, ["price" =>             // line 57
($context["price"] ?? null), "sidebar" =>             // line 58
($context["sidebar"] ?? null), "name" => "price", "minKey" => "min-price", "maxKey" => "max-price", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPriceDisplayName"))]));
            // line 64
            echo "                        ";
        }
        // line 65
        echo "                    ";
    }

    // line 68
    public function block_component_filter_panel_item_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                        ";
        $context["rating"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 69), "get", [0 => "rating"], "method", false, false, false, 69);
        // line 70
        echo "
                        ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["rating"] ?? null), "max", [], "any", false, false, false, 71) > 0)) {
            // line 72
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 72)->display(twig_array_merge($context, ["name" => "rating", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingDisplayName"))]));
            // line 76
            echo "                        ";
        }
        // line 77
        echo "                    ";
    }

    // line 79
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                        ";
        $context["shippingFree"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 80), "get", [0 => "shipping-free"], "method", false, false, false, 80);
        // line 81
        echo "
                        ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["shippingFree"] ?? null), "max", [], "any", false, false, false, 82) > 0)) {
            // line 83
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 83)->display(twig_array_merge($context, ["name" => "shipping-free", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingDisplayName"))]));
            // line 87
            echo "                        ";
        }
        // line 88
        echo "                    ";
    }

    // line 92
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 94
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 95
        echo "                </div>
            ";
    }

    // line 94
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 94,  319 => 95,  317 => 94,  314 => 93,  310 => 92,  306 => 88,  303 => 87,  300 => 83,  298 => 82,  295 => 81,  292 => 80,  288 => 79,  284 => 77,  281 => 76,  278 => 72,  276 => 71,  273 => 70,  270 => 69,  266 => 68,  262 => 65,  259 => 64,  257 => 58,  256 => 57,  254 => 56,  252 => 55,  249 => 54,  246 => 53,  242 => 52,  238 => 50,  235 => 49,  221 => 48,  219 => 46,  218 => 44,  217 => 43,  216 => 41,  215 => 40,  213 => 39,  195 => 38,  193 => 37,  190 => 36,  187 => 35,  185 => 34,  181 => 33,  177 => 31,  174 => 30,  172 => 26,  171 => 25,  170 => 24,  167 => 23,  164 => 22,  161 => 21,  158 => 20,  156 => 19,  152 => 18,  147 => 89,  145 => 79,  142 => 78,  139 => 68,  136 => 66,  134 => 52,  131 => 51,  129 => 33,  126 => 32,  124 => 18,  120 => 16,  116 => 15,  111 => 97,  109 => 92,  106 => 91,  104 => 15,  97 => 14,  93 => 13,  87 => 8,  79 => 7,  73 => 4,  70 => 3,  66 => 2,  61 => 13,  58 => 11,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
