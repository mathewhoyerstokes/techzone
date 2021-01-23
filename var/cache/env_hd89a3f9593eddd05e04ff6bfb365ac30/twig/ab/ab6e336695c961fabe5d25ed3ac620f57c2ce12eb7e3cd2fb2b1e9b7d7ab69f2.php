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
class __TwigTemplate_7a8ac0a3d387df2f4ea71cc8fa1f63f56e72e8e823a1f4b5182df341b494a0d1 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/filter-panel.html.twig"));

        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel"));

        // line 2
        echo "    ";
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 13
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_header"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_element"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_items_container"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_manufacturer"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_properties"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_price"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_component_filter_panel_item_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_rating"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_item_shipping_free"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container"));

        // line 93
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 94
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 95
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_filter_panel_active_container_inner"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 94,  382 => 95,  380 => 94,  377 => 93,  370 => 92,  363 => 88,  360 => 87,  357 => 83,  355 => 82,  352 => 81,  349 => 80,  342 => 79,  335 => 77,  332 => 76,  329 => 72,  327 => 71,  324 => 70,  321 => 69,  314 => 68,  307 => 65,  304 => 64,  302 => 58,  301 => 57,  299 => 56,  297 => 55,  294 => 54,  291 => 53,  284 => 52,  277 => 50,  274 => 49,  260 => 48,  258 => 46,  257 => 44,  256 => 43,  255 => 41,  254 => 40,  252 => 39,  234 => 38,  232 => 37,  229 => 36,  226 => 35,  224 => 34,  217 => 33,  210 => 31,  207 => 30,  205 => 26,  204 => 25,  203 => 24,  200 => 23,  197 => 22,  194 => 21,  191 => 20,  189 => 19,  182 => 18,  174 => 89,  172 => 79,  169 => 78,  166 => 68,  163 => 66,  161 => 52,  158 => 51,  156 => 33,  153 => 32,  151 => 18,  147 => 16,  140 => 15,  132 => 97,  130 => 92,  127 => 91,  125 => 15,  118 => 14,  111 => 13,  102 => 8,  94 => 7,  88 => 4,  85 => 3,  78 => 2,  70 => 13,  67 => 11,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_filter_panel %}
    {% block component_filter_panel_header %}
        <div class=\"filter-panel-offcanvas-header\">
            <h3 class=\"filter-panel-offcanvas-only\">{{ \"listing.filterTitleText\"|trans }}</h3>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                {% sw_icon 'x' style { 'size': 'md' } %}
            </div>
        </div>
    {% endblock %}

    {# @var listing \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% block component_filter_panel_element %}
        <div class=\"filter-panel{% if sidebar %} is--sidebar{% endif %}\">
            {% block component_filter_panel_items_container %}
                <div class=\"filter-panel-items-container\">

                    {% block component_filter_panel_item_manufacturer %}
                        {# @var manufacturers \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                        {% set manufacturers = listing.aggregations.get('manufacturer') %}
                        {% if not manufacturers.entities is empty %}
                            {% set manufacturersSorted = manufacturers.entities|sort((a, b) => a.translated.name|lower > b.translated.name|lower) %}

                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig' with {
                                elements: manufacturersSorted,
                                sidebar: sidebar,
                                name: 'manufacturer',
                                displayName: 'listing.filterManufacturerDisplayName'|trans|sw_sanitize
                            } %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_properties %}
                        {# @var properties \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\AggregationResult\\Metric\\EntityResult #}
                        {% set properties = listing.aggregations.get('properties') %}

                        {% if not properties.entities is empty %}
                            {% for property in properties.entities %}
                                {% sw_include '@Storefront/storefront/component/listing/filter/filter-property-select.html.twig' with {
                                    elements: property.options,
                                    sidebar: sidebar,
                                    name: 'properties',
                                    displayName: property.translated.name,
                                    displayType: property.displayType,
                                    pluginSelector: 'filter-property-select',
                                    propertyName: property.translated.name
                                } %}
                            {% endfor %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_price %}
                        {% set price = listing.aggregations.get('price') %}

                        {% if price.min > 0 and price.max > 0 %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-range.html.twig' with {
                                price: price,
                                sidebar: sidebar,
                                name: 'price',
                                minKey: 'min-price',
                                maxKey: 'max-price',
                                displayName: 'listing.filterPriceDisplayName'|trans|sw_sanitize,
                            } %}
                        {% endif %}
                    {% endblock %}

                    {# @deprecated tag:v6.4.0.0 this block will be removed/replaced with a new rating plugin #}
                    {% block component_filter_panel_item_rating %}
                        {% set rating = listing.aggregations.get('rating') %}

                        {% if rating.max > 0 %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-rating.html.twig' with {
                                name: 'rating',
                                displayName: 'listing.filterRatingDisplayName'|trans|sw_sanitize
                            } %}
                        {% endif %}
                    {% endblock %}

                    {% block component_filter_panel_item_shipping_free %}
                        {% set shippingFree = listing.aggregations.get('shipping-free') %}

                        {% if shippingFree.max > 0 %}
                            {% sw_include '@Storefront/storefront/component/listing/filter/filter-boolean.html.twig' with {
                                name: 'shipping-free',
                                displayName: 'listing.filterFreeShippingDisplayName'|trans|sw_sanitize
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_filter_panel_active_container %}
                <div class=\"filter-panel-active-container\">
                    {% block component_filter_panel_active_container_inner %}{% endblock %}
                </div>
            {% endblock %}
        </div>
     {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
