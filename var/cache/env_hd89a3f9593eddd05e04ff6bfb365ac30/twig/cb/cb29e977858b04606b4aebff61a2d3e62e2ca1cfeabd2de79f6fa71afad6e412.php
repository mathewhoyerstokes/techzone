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

/* @Storefront/storefront/page/checkout/cart/cart-product-header.html.twig */
class __TwigTemplate_0522fce8879584d106c4552b82a3653c38b6b9cc7cd21f20a4435467312f9154 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_cart_header_container' => [$this, 'block_page_checkout_cart_header_container'],
            'page_checkout_cart_header_product_info' => [$this, 'block_page_checkout_cart_header_product_info'],
            'page_checkout_cart_header_quantity' => [$this, 'block_page_checkout_cart_header_quantity'],
            'page_checkout_cart_header_unit_price' => [$this, 'block_page_checkout_cart_header_unit_price'],
            'page_checkout_cart_header_total_price' => [$this, 'block_page_checkout_cart_header_total_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_cart_header_container', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_cart_header_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_container"));

        // line 2
        echo "    <div class=\"card-title cart-table-header\">
        <div class=\"row cart-header-row\">
            ";
        // line 4
        $this->displayBlock('page_checkout_cart_header_product_info', $context, $blocks);
        // line 9
        echo "
            ";
        // line 10
        $this->displayBlock('page_checkout_cart_header_quantity', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_checkout_cart_header_unit_price', $context, $blocks);
        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('page_checkout_cart_header_total_price', $context, $blocks);
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_checkout_cart_header_product_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_product_info"));

        // line 5
        echo "                <div class=\"col-5 cart-header-info\">
                    ";
        // line 6
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderInfo"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_checkout_cart_header_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_quantity"));

        // line 11
        echo "                ";
        // line 12
        echo "                ";
        $context["layout"] = "col-2";
        // line 13
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " cart-header-quantity\">
                    ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_cart_header_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_unit_price"));

        // line 19
        echo "                <div class=\"col-2 cart-header-unit-price\">
                    ";
        // line 20
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderUnitPrice"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_checkout_cart_header_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header_total_price"));

        // line 25
        echo "                <div class=\"col-2 cart-header-total-price\">
                    ";
        // line 26
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTotalPrice"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 26,  162 => 25,  155 => 24,  145 => 20,  142 => 19,  135 => 18,  125 => 14,  120 => 13,  117 => 12,  115 => 11,  108 => 10,  98 => 6,  95 => 5,  88 => 4,  79 => 29,  77 => 24,  74 => 23,  72 => 18,  69 => 17,  67 => 10,  64 => 9,  62 => 4,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_cart_header_container %}
    <div class=\"card-title cart-table-header\">
        <div class=\"row cart-header-row\">
            {% block page_checkout_cart_header_product_info %}
                <div class=\"col-5 cart-header-info\">
                    {{ \"checkout.cartHeaderInfo\"|trans|sw_sanitize }}
                </div>
            {% endblock %}

            {% block page_checkout_cart_header_quantity %}
                {# @deprecated tag:v6.4.0 - Variable 'layout' will be removed #}
                {% set layout = 'col-2' %}
                <div class=\"{{ layout }} cart-header-quantity\">
                    {{ \"checkout.cartHeaderQuantity\"|trans|sw_sanitize }}
                </div>
            {% endblock %}

            {% block page_checkout_cart_header_unit_price %}
                <div class=\"col-2 cart-header-unit-price\">
                    {{ \"checkout.cartHeaderUnitPrice\"|trans|sw_sanitize }}
                </div>
            {% endblock %}

            {% block page_checkout_cart_header_total_price %}
                <div class=\"col-2 cart-header-total-price\">
                    {{ \"checkout.cartHeaderTotalPrice\"|trans|sw_sanitize }}
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/cart/cart-product-header.html.twig");
    }
}
