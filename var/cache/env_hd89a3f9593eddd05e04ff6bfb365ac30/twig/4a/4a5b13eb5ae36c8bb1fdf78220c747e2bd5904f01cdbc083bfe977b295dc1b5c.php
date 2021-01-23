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

/* @Storefront/storefront/element/cms-element-product-listing.html.twig */
class __TwigTemplate_56b8fff4f79f7fe3b7418bfe3c5e3d240d7ed7a56e31f904f29f592af09098ea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_product_listing' => [$this, 'block_element_product_listing'],
            'element_product_listing_wrapper' => [$this, 'block_element_product_listing_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-product-listing.html.twig"));

        // line 1
        $this->displayBlock('element_product_listing', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["searchResult"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 3), "listing", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["listingColumns"] = "col-sm-6 col-lg-4 col-xl-3";
        // line 5
        echo "
    ";
        // line 6
        if ((($context["section"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 6) == "sidebar"))) {
            // line 7
            echo "        ";
            $context["listingColumns"] = "col-sm-6 col-lg-6 col-xl-4";
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["slot"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 10), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 10);
        // line 11
        echo "
    ";
        // line 12
        $context["filterUrl"] = null;
        // line 13
        echo "    ";
        $context["dataUrl"] = null;
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 15), "navigationId", [], "any", false, false, false, 15)) {
            // line 16
            echo "        ";
            $context["filterUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.cms.navigation.filter", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 16), "navigationId", [], "any", false, false, false, 16)]);
            // line 17
            echo "        ";
            $context["dataUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.cms.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 17), "navigationId", [], "any", false, false, false, 17)]);
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context["sidebar"] = (($context["sectionType"] ?? null) == "sidebar");
        // line 21
        echo "    ";
        $context["params"] = ["slots" => twig_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "id", [], "any", false, false, false, 21), "no-aggregations" => 1];
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('element_product_listing_wrapper', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_product_listing_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper"));

        // line 24
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/product/listing.html.twig", "@Storefront/storefront/element/cms-element-product-listing.html.twig", 24)->display(twig_array_merge($context, ["searchResult" =>         // line 25
($context["searchResult"] ?? null), "dataUrl" =>         // line 26
($context["dataUrl"] ?? null), "filterUrl" =>         // line 27
($context["filterUrl"] ?? null), "params" =>         // line 28
($context["params"] ?? null), "sidebar" =>         // line 29
($context["sidebar"] ?? null), "boxLayout" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["element"] ?? null), "translated", [], "any", false, false, false, 30), "config", [], "any", false, false, false, 30), "boxLayout", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "displayMode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["element"] ?? null), "translated", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "displayMode", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "listingColumns" =>         // line 32
($context["listingColumns"] ?? null)]));
        // line 34
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-product-listing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  134 => 32,  133 => 31,  132 => 30,  131 => 29,  130 => 28,  129 => 27,  128 => 26,  127 => 25,  125 => 24,  112 => 23,  109 => 22,  106 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  87 => 14,  84 => 13,  82 => 12,  79 => 11,  77 => 10,  74 => 9,  71 => 8,  68 => 7,  66 => 6,  63 => 5,  60 => 4,  57 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_product_listing %}
    {# @var result \\Shopware\\Core\\Framework\\DataAbstractionLayer\\Search\\EntitySearchResult #}
    {% set searchResult = element.data.listing %}
    {% set listingColumns = 'col-sm-6 col-lg-4 col-xl-3' %}

    {% if section and section.type == 'sidebar' %}
        {% set listingColumns = 'col-sm-6 col-lg-6 col-xl-4' %}
    {% endif %}

    {% set slot = page.cmsPage.firstElementOfType('product-listing') %}

    {% set filterUrl = null %}
    {% set dataUrl = null %}

    {% if searchResult.currentFilters.navigationId %}
        {% set filterUrl = url('frontend.cms.navigation.filter', { navigationId: searchResult.currentFilters.navigationId }) %}
        {% set dataUrl = url('frontend.cms.navigation.page', { navigationId: searchResult.currentFilters.navigationId }) %}
    {% endif %}

    {% set sidebar = sectionType == 'sidebar' %}
    {% set params = { slots: slot.id, 'no-aggregations': 1 } %}

    {% block element_product_listing_wrapper %}
        {% sw_include '@Storefront/storefront/component/product/listing.html.twig' with {
            searchResult: searchResult,
            dataUrl: dataUrl,
            filterUrl: filterUrl,
            params: params,
            sidebar: sidebar,
            boxLayout: element.translated.config.boxLayout.value,
            displayMode: element.translated.config.displayMode.value,
            listingColumns: listingColumns
        } %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/element/cms-element-product-listing.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-product-listing.html.twig");
    }
}
