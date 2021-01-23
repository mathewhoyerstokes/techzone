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

/* @Storefront/storefront/page/checkout/confirm/confirm-item.html.twig */
class __TwigTemplate_aeaa5aea13a8eebf5122142ddbc95fbd83365b16691c3bc012ee36295467c569 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_checkout_item_unit_price' => [$this, 'block_page_checkout_item_unit_price'],
            'page_checkout_item_tax_price' => [$this, 'block_page_checkout_item_tax_price'],
            'page_checkout_item_tax_price_label' => [$this, 'block_page_checkout_item_tax_price_label'],
            'page_checkout_item_tax_price_inner' => [$this, 'block_page_checkout_item_tax_price_inner'],
            'page_checkout_item_total_price_tax_symbol' => [$this, 'block_page_checkout_item_total_price_tax_symbol'],
            'page_checkout_item_quantity_redirect' => [$this, 'block_page_checkout_item_quantity_redirect'],
            'page_checkout_item_remove_redirect' => [$this, 'block_page_checkout_item_remove_redirect'],
            'page_checkout_item_children' => [$this, 'block_page_checkout_item_children'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/checkout-item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-item.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_checkout_item_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_unit_price"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayBlock('page_checkout_item_tax_price', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_item_tax_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_tax_price"));

        // line 6
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 6), "taxCalculationType", [], "any", false, false, false, 6) == "horizontal")) {
            // line 7
            echo "            <div class=\"col-12 col-sm-4 col-md-2 cart-item-tax-price\">
                ";
            // line 8
            $this->displayBlock('page_checkout_item_tax_price_label', $context, $blocks);
            // line 17
            echo "
                ";
            // line 18
            $this->displayBlock('page_checkout_item_tax_price_inner', $context, $blocks);
            // line 24
            echo "            </div>
        ";
        }
        // line 26
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_checkout_item_tax_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_tax_price_label"));

        // line 9
        echo "                    <div class=\"cart-item-tax-price-label\">
                        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 10) == "gross")) {
            // line 11
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxIncludeVat"));
            echo "
                        ";
        } else {
            // line 13
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxExcludeVat"));
            echo "
                        ";
        }
        // line 15
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_item_tax_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_tax_price_inner"));

        // line 19
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 19), "calculatedTaxes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["calculatedTax"]) {
            // line 20
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, $context["calculatedTax"], "tax", [], "any", false, false, false, 20)), "html", null, true);
            echo "
                        <br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calculatedTax'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_page_checkout_item_total_price_tax_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_total_price_tax_symbol"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_page_checkout_item_quantity_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_redirect"));

        // line 32
        echo "    <input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.checkout.confirm.page\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_checkout_item_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_remove_redirect"));

        // line 38
        echo "    <input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.checkout.confirm.page\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_checkout_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_children"));

        // line 44
        echo "    ";
        $context["childTemplate"] = "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig";
        // line 45
        echo "    ";
        $this->displayParentBlock("page_checkout_item_children", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 45,  220 => 44,  213 => 43,  203 => 38,  196 => 37,  186 => 32,  179 => 31,  167 => 29,  160 => 23,  150 => 20,  145 => 19,  138 => 18,  130 => 15,  124 => 13,  118 => 11,  116 => 10,  113 => 9,  106 => 8,  99 => 26,  95 => 24,  93 => 18,  90 => 17,  88 => 8,  85 => 7,  82 => 6,  68 => 5,  66 => 4,  59 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/checkout/checkout-item.html.twig' %}

{% block page_checkout_item_unit_price %}
    {# display tax instead of item price in confirm item #}
    {% block page_checkout_item_tax_price %}
        {% if context.salesChannel.taxCalculationType == 'horizontal' %}
            <div class=\"col-12 col-sm-4 col-md-2 cart-item-tax-price\">
                {% block page_checkout_item_tax_price_label %}
                    <div class=\"cart-item-tax-price-label\">
                        {% if context.taxState == \"gross\" %}
                            {{ \"checkout.cartHeaderTaxIncludeVat\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"checkout.cartHeaderTaxExcludeVat\"|trans|sw_sanitize }}
                        {% endif %}
                    </div>
                {% endblock %}

                {% block page_checkout_item_tax_price_inner %}
                    {% for calculatedTax in lineItem.price.calculatedTaxes %}
                        {{ calculatedTax.tax|currency }}
                        <br>
                    {% endfor %}
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}

{% block page_checkout_item_total_price_tax_symbol %}{% endblock %}

{% block page_checkout_item_quantity_redirect %}
    <input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.checkout.confirm.page\">
{% endblock %}

{% block page_checkout_item_remove_redirect %}
    <input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.checkout.confirm.page\">
{% endblock %}

{% block page_checkout_item_children %}
    {% set childTemplate = '@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig' %}
    {{ parent() }}
{% endblock %}
", "@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-item.html.twig");
    }
}
