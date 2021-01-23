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
class __TwigTemplate_b92572b0cca5fee43ad17ba373e6a8a0d2ac8e3dc6706f4d64686ec1ba7019eb extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/listing.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_listing"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_wrapper_content"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_actions"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_top"));

        // line 31
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 31)->display(twig_array_merge($context, ["entities" =>         // line 32
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 33
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 33)]));
        // line 35
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_sorting"));

        // line 40
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 40)->display(twig_array_merge($context, ["current" => twig_get_attribute($this->env, $this->source,         // line 41
($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 41), "sortings" => twig_get_attribute($this->env, $this->source,         // line 42
($context["searchResult"] ?? null), "availableSortings", [], "any", false, false, false, 42)]));
        // line 44
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_row"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_box"));

        // line 57
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 57)->display(twig_array_merge($context, ["layout" =>         // line 58
($context["boxLayout"] ?? null), "displayMode" =>         // line 59
($context["displayMode"] ?? null)]));
        // line 61
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty"));

        // line 67
        echo "                                <div class=\"cms-listing-col col-12\">
                                    ";
        // line 68
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 74
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_col_empty_alert"));

        // line 69
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 69)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 73
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_listing_pagination_nav_bottom"));

        // line 82
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 82)->display(twig_array_merge($context, ["entities" =>         // line 83
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 84
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 84)]));
        // line 86
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  373 => 86,  371 => 84,  370 => 83,  368 => 82,  361 => 81,  354 => 73,  351 => 69,  344 => 68,  336 => 74,  334 => 68,  331 => 67,  324 => 66,  317 => 61,  315 => 59,  314 => 58,  312 => 57,  305 => 56,  298 => 64,  283 => 62,  281 => 56,  276 => 55,  258 => 54,  251 => 53,  243 => 77,  240 => 76,  237 => 66,  234 => 65,  231 => 53,  229 => 52,  226 => 51,  219 => 50,  212 => 44,  210 => 42,  209 => 41,  207 => 40,  200 => 39,  193 => 35,  191 => 33,  190 => 32,  188 => 31,  181 => 30,  172 => 45,  170 => 39,  165 => 36,  163 => 30,  159 => 28,  152 => 27,  144 => 88,  141 => 87,  138 => 81,  136 => 80,  133 => 79,  131 => 50,  128 => 49,  125 => 48,  122 => 27,  120 => 26,  117 => 25,  110 => 24,  102 => 90,  100 => 24,  95 => 22,  90 => 20,  86 => 18,  73 => 17,  70 => 16,  68 => 11,  67 => 10,  66 => 9,  65 => 8,  64 => 7,  63 => 6,  60 => 5,  58 => 4,  55 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPage = ((searchResult.criteria.offset + 1) / searchResult.criteria.limit )|round(0, 'ceil') %}
{% set paginationConfig = { page: currentPage }|json_encode %}

{% set disableEmptyFilter = shopware.config.core.listing.disableEmptyFilterOptions %}

{% set listingPagination = {
    sidebar: sidebar,
    params: params,
    dataUrl: dataUrl,
    filterUrl: filterUrl,
    disableEmptyFilter: disableEmptyFilter,
    snippets: {
        resetAllButtonText: 'listing.filterPanelResetAll'|trans|sw_sanitize
    }
} %}

{% block product_listing %}
    <div class=\"cms-element-product-listing-wrapper\"
         data-listing-pagination=\"true\"
         data-listing-pagination-options='{{ paginationConfig }}'
         data-listing=\"true\"
         data-listing-options='{{ listingPagination|json_encode }}'>

        {% block element_product_listing_wrapper_content %}
            <div class=\"cms-element-product-listing\">
                {% if searchResult.total > 0 %}
                    {% block element_product_listing_pagination_nav_actions %}
                        <div class=\"cms-element-product-listing-actions row justify-content-between\">
                            <div class=\"col-md-auto\">
                                {% block element_product_listing_pagination_nav_top %}
                                    {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                        entities: searchResult,
                                        criteria: searchResult.criteria
                                    } %}
                                {% endblock %}
                            </div>

                            <div class=\"col-md-auto\">
                                {% block element_product_listing_sorting %}
                                    {% sw_include '@Storefront/storefront/component/sorting.html.twig' with {
                                        current: searchResult.sorting,
                                        sortings: searchResult.availableSortings
                                    } %}
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                {% endif %}

                {% block element_product_listing_row %}
                    <div class=\"row cms-listing-row js-listing-wrapper\">
                        {% if searchResult.total > 0 %}
                            {% block element_product_listing_col %}
                                {% for product in searchResult %}
                                    <div class=\"cms-listing-col {{ listingColumns }}\">
                                        {% block element_product_listing_box %}
                                            {% sw_include '@Storefront/storefront/component/product/card/box.html.twig' with {
                                                'layout': boxLayout,
                                                'displayMode': displayMode
                                            } %}
                                        {% endblock %}
                                    </div>
                                {% endfor %}
                            {% endblock %}
                        {% else %}
                            {% block element_product_listing_col_empty %}
                                <div class=\"cms-listing-col col-12\">
                                    {% block element_product_listing_col_empty_alert %}
                                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                            type: 'info',
                                            content: 'listing.emptyResultMessage'|trans|sw_sanitize
                                        } %}
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}

                {% if searchResult.total > searchResult.limit %}
                    {% block element_product_listing_pagination_nav_bottom %}
                        {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                            entities: searchResult,
                            criteria: searchResult.criteria
                        } %}
                    {% endblock %}
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/listing.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
