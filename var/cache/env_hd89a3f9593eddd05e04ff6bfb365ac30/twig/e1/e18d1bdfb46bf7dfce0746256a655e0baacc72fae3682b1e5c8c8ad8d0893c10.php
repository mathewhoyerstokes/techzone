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

/* @Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig */
class __TwigTemplate_deedffd4c3393cb76ad8f329dc7dd415ed66e0a954b1cd508e230ef9fdae03c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_checkout_cart_header_quantity' => [$this, 'block_page_checkout_cart_header_quantity'],
            'page_checkout_cart_header_unit_price' => [$this, 'block_page_checkout_cart_header_unit_price'],
            'page_checkout_cart_header_tax_price' => [$this, 'block_page_checkout_cart_header_tax_price'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_checkout_cart_header_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_quantity"));

        // line 4
        echo "    ";
        $context["layout"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 4), "taxCalculationType", [], "any", false, false, false, 4) == "horizontal")) ? ("col-2") : ("col-4"));
        // line 5
        echo "
    <div class=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " cart-header-quantity\">
        ";
        // line 7
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"));
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_checkout_cart_header_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_unit_price"));

        // line 12
        echo "    ";
        // line 13
        echo "    ";
        $this->displayBlock('page_checkout_cart_header_tax_price', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_cart_header_tax_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_tax_price"));

        // line 14
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 14), "taxCalculationType", [], "any", false, false, false, 14) == "horizontal")) {
            // line 15
            echo "            <div class=\"col-2 cart-header-tax-price\">
                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 16) == "gross")) {
                // line 17
                echo "                    ";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxIncludeVat"));
                echo "
                ";
            } else {
                // line 19
                echo "                    ";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTaxExcludeVat"));
                echo "
                ";
            }
            // line 21
            echo "            </div>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 23,  124 => 21,  118 => 19,  112 => 17,  110 => 16,  107 => 15,  104 => 14,  90 => 13,  88 => 12,  81 => 11,  71 => 7,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig' %}

{% block page_checkout_cart_header_quantity %}
    {% set layout = context.salesChannel.taxCalculationType == 'horizontal' ? 'col-2' : 'col-4' %}

    <div class=\"{{ layout }} cart-header-quantity\">
        {{ \"checkout.cartHeaderQuantity\"|trans|sw_sanitize }}
    </div>
{% endblock %}

{% block page_checkout_cart_header_unit_price %}
    {# display tax instead of item price in confirm header #}
    {% block page_checkout_cart_header_tax_price %}
        {% if context.salesChannel.taxCalculationType == 'horizontal' %}
            <div class=\"col-2 cart-header-tax-price\">
                {% if context.taxState == \"gross\" %}
                    {{ \"checkout.cartHeaderTaxIncludeVat\"|trans|sw_sanitize }}
                {% else %}
                    {{ \"checkout.cartHeaderTaxExcludeVat\"|trans|sw_sanitize }}
                {% endif %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-product-header.html.twig");
    }
}
