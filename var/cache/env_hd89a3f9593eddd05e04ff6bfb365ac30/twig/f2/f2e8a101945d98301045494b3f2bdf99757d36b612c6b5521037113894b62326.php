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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_7deee814b41274e5fdc17df39e78ca1287b9e9f27c41d864cf5f49b84bd48a71 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/price-unit.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_price_info', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_price_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_info"));

        // line 2
        echo "    ";
        $context["purchaseUnit"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseUnit", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["listingPrice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["fromPrice"] = twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "from", [], "any", false, false, false, 4);
        // line 5
        echo "    ";
        $context["referncePrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 5), "referencePrice", [], "any", false, false, false, 5);
        // line 6
        echo "
    <div class=\"product-price-info\">
        ";
        // line 8
        $this->displayBlock('component_product_box_price_unit', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 57
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_component_product_box_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_unit"));

        // line 9
        echo "            <p class=\"product-price-unit\">
                ";
        // line 11
        echo "                ";
        $this->displayBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 21
        echo "
                ";
        // line 23
        echo "                ";
        $this->displayBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 34
        echo "            </p>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_component_product_box_price_purchase_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_purchase_unit"));

        // line 12
        echo "                    ";
        if ((($context["purchaseUnit"] ?? null) && (($context["purchaseUnit"] ?? null) != 0))) {
            // line 13
            echo "                        <span class=\"product-unit-label\">
                            ";
            // line 14
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            echo "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, ($context["purchaseUnit"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 17), "translation", [0 => "name"], "method", false, false, false, 17), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 20
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_component_product_box_price_reference_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price_reference_unit"));

        // line 24
        echo "                    ";
        if ( !(null === ($context["referncePrice"] ?? null))) {
            // line 25
            echo "                        <span class=\"price-unit-reference\">
                            ";
            // line 26
            if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 26)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) > 1))) {
                // line 27
                echo "                                (";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "referenceUnit", [], "any", false, false, false, 27), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "unitName", [], "any", false, false, false, 27), "html", null, true);
                echo ")
                            ";
            } else {
                // line 29
                echo "                                (";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "price", [], "any", false, false, false, 29)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "unitName", [], "any", false, false, false, 29), "html", null, true);
                echo ")
                            ";
            }
            // line 31
            echo "                        </span>
                    ";
        }
        // line 33
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 38
        echo "            ";
        $context["listPrice"] = (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 38) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) > 0))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 38), "listPrice", [], "any", false, false, false, 38)));
        // line 39
        echo "
            <p class=\"product-price";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 40) > 0)) {
            echo " with-list-price";
        }
        echo "\">
                ";
        // line 41
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 41) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 41)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41) > 1))) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "unitPrice", [], "any", false, false, false, 42)), "html", null, true);
            echo "
                    -
                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "to", [], "any", false, false, false, 44), "unitPrice", [], "any", false, false, false, 44)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 45
($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 45)) == 1)) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), "unitPrice", [], "any", false, false, false, 46)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                ";
        } else {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 48), "unitPrice", [], "any", false, false, false, 48)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 49) > 0)) {
                // line 50
                echo "                        <span class=\"list-price";
                if (((twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")) > 0) || (twig_length_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")) > 0))) {
                    echo " list-price-no-line-through";
                }
                echo "\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.beforeListPrice")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 51)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " ";
                echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.afterListPrice")), "html", null, true);
                echo "
                        </span>
                    ";
            }
            // line 54
            echo "                ";
        }
        // line 55
        echo "            </p>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  270 => 55,  267 => 54,  256 => 51,  249 => 50,  247 => 49,  241 => 48,  234 => 46,  232 => 45,  227 => 44,  221 => 42,  219 => 41,  213 => 40,  210 => 39,  207 => 38,  200 => 37,  193 => 33,  189 => 31,  178 => 29,  165 => 27,  163 => 26,  160 => 25,  157 => 24,  150 => 23,  143 => 20,  135 => 17,  129 => 14,  126 => 13,  123 => 12,  116 => 11,  108 => 34,  105 => 23,  102 => 21,  99 => 11,  96 => 9,  89 => 8,  81 => 57,  79 => 37,  76 => 36,  74 => 8,  70 => 6,  67 => 5,  64 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_price_info %}
    {% set purchaseUnit = product.purchaseUnit %}
    {% set listingPrice = product.calculatedListingPrice %}
    {% set fromPrice = listingPrice.from %}
    {% set referncePrice = product.calculatedPrice.referencePrice %}

    <div class=\"product-price-info\">
        {% block component_product_box_price_unit %}
            <p class=\"product-price-unit\">
                {# Price is based on the purchase unit #}
                {% block component_product_box_price_purchase_unit %}
                    {% if purchaseUnit and purchaseUnit != 0 %}
                        <span class=\"product-unit-label\">
                            {{ \"listing.boxUnitLabel\"|trans|sw_sanitize }}
                        </span>
                        <span class=\"price-unit-content\">
                            {{ purchaseUnit }} {{ product.unit.translation('name') }}
                        </span>
                    {% endif %}
                {% endblock %}

                {# Item price is based on a reference unit #}
                {% block component_product_box_price_reference_unit %}
                    {% if referncePrice is not null %}
                        <span class=\"price-unit-reference\">
                            {% if (product.priceRange and product.isGrouped) or product.calculatedPrices.count > 1 %}
                                ({{ \"listing.listingTextFrom\"|trans|sw_sanitize }} {{ fromPrice.referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ fromPrice.referencePrice.referenceUnit }}&nbsp;{{ fromPrice.referencePrice.unitName }})
                            {% else %}
                                ({{ referncePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referncePrice.referenceUnit }} {{ referncePrice.unitName }})
                            {% endif %}
                        </span>
                    {% endif %}
                {% endblock %}
            </p>
        {% endblock %}

        {% block component_product_box_price %}
            {% set listPrice = product.priceRange or product.calculatedPrices.count > 0 ? null : product.calculatedPrice.listPrice %}

            <p class=\"product-price{% if listPrice.percentage > 0 %} with-list-price{% endif %}\">
                {% if (product.priceRange and product.isGrouped) or product.calculatedPrices.count > 1 %}
                    {{ fromPrice.unitPrice|currency }}
                    -
                    {{ listingPrice.to.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                {% elseif product.calculatedPrices|length == 1 %}
                    {{ product.calculatedPrices.first.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                {% else %}
                    {{ product.calculatedPrice.unitPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                    {% if listPrice.percentage > 0 %}
                        <span class=\"list-price{% if \"listing.beforeListPrice\"|trans|length > 0 or \"listing.afterListPrice\"|trans|length > 0  %} list-price-no-line-through{% endif %}\">
                            {{\"listing.beforeListPrice\"|trans|trim}} {{ listPrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} {{\"listing.afterListPrice\"|trans|trim}}
                        </span>
                    {% endif %}
                {% endif %}
            </p>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
