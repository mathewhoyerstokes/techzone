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

/* @Storefront/storefront/page/checkout/finish/finish-address.html.twig */
class __TwigTemplate_c0617a2ae7689fb1bd3e2f64008fa8ee6302053dae6a4065db34b2312a1c5bb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_finish_address_inner' => [$this, 'block_page_checkout_finish_address_inner'],
            'page_checkout_finish_address_billing' => [$this, 'block_page_checkout_finish_address_billing'],
            'page_checkout_finish_address_billing_title' => [$this, 'block_page_checkout_finish_address_billing_title'],
            'page_checkout_finish_address_billing_data' => [$this, 'block_page_checkout_finish_address_billing_data'],
            'page_checkout_finish_address_shipping' => [$this, 'block_page_checkout_finish_address_shipping'],
            'page_checkout_finish_address_shipping_title' => [$this, 'block_page_checkout_finish_address_shipping_title'],
            'page_checkout_finish_address_shipping_data' => [$this, 'block_page_checkout_finish_address_shipping_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_finish_address_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_finish_address_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_inner"));

        // line 2
        echo "    ";
        $context["billingAddress"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 2), "defaultBillingAddress", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["shippingAddress"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 3), "defaultShippingAddress", [], "any", false, false, false, 3);
        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $this->displayBlock('page_checkout_finish_address_billing', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('page_checkout_finish_address_shipping', $context, $blocks);
        // line 44
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_checkout_finish_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_billing"));

        // line 6
        echo "            <div class=\"col-sm-6\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 9
        $this->displayBlock('page_checkout_finish_address_billing_title', $context, $blocks);
        // line 14
        echo "
                        ";
        // line 15
        $this->displayBlock('page_checkout_finish_address_billing_data', $context, $blocks);
        // line 20
        echo "                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_checkout_finish_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_billing_title"));

        // line 10
        echo "                            <div class=\"card-title\">
                                ";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.billingAddressHeader"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_checkout_finish_address_billing_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_billing_data"));

        // line 16
        echo "                            <div class=\"finish-address-billing\">
                                ";
        // line 17
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig", 17)->display(twig_array_merge($context, ["address" => ($context["billingAddress"] ?? null)]));
        // line 18
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_page_checkout_finish_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_shipping"));

        // line 26
        echo "            <div class=\"col-sm-6\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 29
        $this->displayBlock('page_checkout_finish_address_shipping_title', $context, $blocks);
        // line 34
        echo "
                        ";
        // line 35
        $this->displayBlock('page_checkout_finish_address_shipping_data', $context, $blocks);
        // line 40
        echo "                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_page_checkout_finish_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_shipping_title"));

        // line 30
        echo "                            <div class=\"card-title\">
                                ";
        // line 31
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingAddressHeader"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_page_checkout_finish_address_shipping_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_address_shipping_data"));

        // line 36
        echo "                            <div class=\"finish-address-shipping\">
                                ";
        // line 37
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig", 37)->display(twig_array_merge($context, ["address" => ($context["shippingAddress"] ?? null)]));
        // line 38
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/finish-address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 38,  212 => 37,  209 => 36,  202 => 35,  192 => 31,  189 => 30,  182 => 29,  172 => 40,  170 => 35,  167 => 34,  165 => 29,  160 => 26,  153 => 25,  145 => 18,  143 => 17,  140 => 16,  133 => 15,  123 => 11,  120 => 10,  113 => 9,  103 => 20,  101 => 15,  98 => 14,  96 => 9,  91 => 6,  84 => 5,  76 => 44,  74 => 25,  71 => 24,  69 => 5,  66 => 4,  63 => 3,  60 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_finish_address_inner %}
    {% set billingAddress = context.customer.defaultBillingAddress %}
    {% set shippingAddress = context.customer.defaultShippingAddress %}
    <div class=\"row\">
        {% block page_checkout_finish_address_billing %}
            <div class=\"col-sm-6\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        {% block page_checkout_finish_address_billing_title %}
                            <div class=\"card-title\">
                                {{ \"checkout.billingAddressHeader\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_checkout_finish_address_billing_data %}
                            <div class=\"finish-address-billing\">
                                {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {'address': billingAddress} %}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            </div>
        {% endblock %}

        {% block page_checkout_finish_address_shipping %}
            <div class=\"col-sm-6\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        {% block page_checkout_finish_address_shipping_title %}
                            <div class=\"card-title\">
                                {{ \"checkout.shippingAddressHeader\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_checkout_finish_address_shipping_data %}
                            <div class=\"finish-address-shipping\">
                                {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {'address': shippingAddress} %}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/checkout/finish/finish-address.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/finish-address.html.twig");
    }
}
