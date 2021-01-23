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

/* @Storefront/storefront/page/checkout/confirm/confirm-address.html.twig */
class __TwigTemplate_f28849cbfa135b38e68e4f898b596658df762d485c5c725ee8fdd5210483296d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_confirm_address_inner' => [$this, 'block_page_checkout_confirm_address_inner'],
            'page_checkout_confirm_address' => [$this, 'block_page_checkout_confirm_address'],
            'page_checkout_confirm_address_billing' => [$this, 'block_page_checkout_confirm_address_billing'],
            'page_checkout_confirm_address_billing_title' => [$this, 'block_page_checkout_confirm_address_billing_title'],
            'page_checkout_confirm_address_billing_data' => [$this, 'block_page_checkout_confirm_address_billing_data'],
            'page_checkout_confirm_address_billing_actions' => [$this, 'block_page_checkout_confirm_address_billing_actions'],
            'page_checkout_confirm_address_billing_actions_link' => [$this, 'block_page_checkout_confirm_address_billing_actions_link'],
            'page_checkout_confirm_address_shipping' => [$this, 'block_page_checkout_confirm_address_shipping'],
            'page_checkout_confirm_address_shipping_title' => [$this, 'block_page_checkout_confirm_address_shipping_title'],
            'page_checkout_confirm_address_shipping_data' => [$this, 'block_page_checkout_confirm_address_shipping_data'],
            'page_checkout_confirm_address_shipping_data_equal' => [$this, 'block_page_checkout_confirm_address_shipping_data_equal'],
            'page_checkout_confirm_address_shipping_actions' => [$this, 'block_page_checkout_confirm_address_shipping_actions'],
            'page_checkout_confirm_address_shipping_actions_link' => [$this, 'block_page_checkout_confirm_address_shipping_actions_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_confirm_address_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_confirm_address_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_inner"));

        // line 2
        echo "    ";
        $context["billingAddress"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 2), "activeBillingAddress", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["shippingAddress"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 3), "activeShippingAddress", [], "any", false, false, false, 3);
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('page_checkout_confirm_address', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_confirm_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address"));

        // line 6
        echo "        <div class=\"row js-confirm-overview-addresses\">
            ";
        // line 7
        $this->displayBlock('page_checkout_confirm_address_billing', $context, $blocks);
        // line 48
        echo "
            ";
        // line 49
        $this->displayBlock('page_checkout_confirm_address_shipping', $context, $blocks);
        // line 98
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_checkout_confirm_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_billing"));

        // line 8
        echo "                <div class=\"col-sm-6 card-col confirm-billing-address\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            ";
        // line 11
        $this->displayBlock('page_checkout_confirm_address_billing_title', $context, $blocks);
        // line 16
        echo "
                            ";
        // line 17
        $this->displayBlock('page_checkout_confirm_address_billing_data', $context, $blocks);
        // line 24
        echo "
                            ";
        // line 25
        $this->displayBlock('page_checkout_confirm_address_billing_actions', $context, $blocks);
        // line 44
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_checkout_confirm_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_billing_title"));

        // line 12
        echo "                                <div class=\"card-title\">
                                    ";
        // line 13
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.billingAddressHeader"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_checkout_confirm_address_billing_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_billing_data"));

        // line 18
        echo "                                <div class=\"confirm-address-billing\">
                                    ";
        // line 19
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", 19)->display(twig_array_merge($context, ["address" =>         // line 20
($context["billingAddress"] ?? null)]));
        // line 22
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_page_checkout_confirm_address_billing_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_billing_actions"));

        // line 26
        echo "                                <div class=\"card-actions\">
                                    ";
        // line 27
        $context["addressEditorOptions"] = ["changeBilling" => true, "addressId" => twig_get_attribute($this->env, $this->source,         // line 29
($context["billingAddress"] ?? null), "id", [], "any", false, false, false, 29), "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 32
        echo "
                                    ";
        // line 33
        $this->displayBlock('page_checkout_confirm_address_billing_actions_link', $context, $blocks);
        // line 42
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_page_checkout_confirm_address_billing_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_billing_actions_link"));

        // line 34
        echo "                                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => twig_get_attribute($this->env, $this->source, ($context["billingAddress"] ?? null), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\"
                                           title=\"";
        // line 35
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling")), "html", null, true);
        echo "\"
                                           class=\"btn btn-light\"
                                           data-address-editor=\"true\"
                                           data-address-editor-options='";
        // line 38
        echo twig_escape_filter($this->env, json_encode(($context["addressEditorOptions"] ?? null)), "html", null, true);
        echo "'>
                                            ";
        // line 39
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling"));
        echo "
                                        </a>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_page_checkout_confirm_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_shipping"));

        // line 50
        echo "                <div class=\"col-sm-6 card-col confirm-shipping-address\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            ";
        // line 53
        $this->displayBlock('page_checkout_confirm_address_shipping_title', $context, $blocks);
        // line 58
        echo "
                            ";
        // line 59
        $this->displayBlock('page_checkout_confirm_address_shipping_data', $context, $blocks);
        // line 74
        echo "
                            ";
        // line 75
        $this->displayBlock('page_checkout_confirm_address_shipping_actions', $context, $blocks);
        // line 94
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_page_checkout_confirm_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_shipping_title"));

        // line 54
        echo "                                <div class=\"card-title\">
                                    ";
        // line 55
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingAddressHeader"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_page_checkout_confirm_address_shipping_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_shipping_data"));

        // line 60
        echo "                                <div class=\"confirm-address-shipping\">
                                    ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["billingAddress"] ?? null), "id", [], "any", false, false, false, 61) === twig_get_attribute($this->env, $this->source, ($context["shippingAddress"] ?? null), "id", [], "any", false, false, false, 61))) {
            // line 62
            echo "                                        ";
            $this->displayBlock('page_checkout_confirm_address_shipping_data_equal', $context, $blocks);
            // line 67
            echo "                                    ";
        } else {
            // line 68
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", 68)->display(twig_array_merge($context, ["address" =>             // line 69
($context["shippingAddress"] ?? null)]));
            // line 71
            echo "                                    ";
        }
        // line 72
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_page_checkout_confirm_address_shipping_data_equal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_shipping_data_equal"));

        // line 63
        echo "                                            <p>
                                                ";
        // line 64
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressEqualText"));
        echo "
                                            </p>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_page_checkout_confirm_address_shipping_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_shipping_actions"));

        // line 76
        echo "                                <div class=\"card-actions\">
                                    ";
        // line 77
        $context["addressEditorOptions"] = ["changeShipping" => true, "addressId" => twig_get_attribute($this->env, $this->source,         // line 79
($context["shippingAddress"] ?? null), "id", [], "any", false, false, false, 79), "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 82
        echo "
                                    ";
        // line 83
        $this->displayBlock('page_checkout_confirm_address_shipping_actions_link', $context, $blocks);
        // line 92
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_page_checkout_confirm_address_shipping_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address_shipping_actions_link"));

        // line 84
        echo "                                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => twig_get_attribute($this->env, $this->source, ($context["shippingAddress"] ?? null), "id", [], "any", false, false, false, 84)]), "html", null, true);
        echo "\"
                                           title=\"";
        // line 85
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping")), "html", null, true);
        echo "\"
                                           class=\"btn btn-light\"
                                           data-address-editor=\"true\"
                                           data-address-editor-options='";
        // line 88
        echo twig_escape_filter($this->env, json_encode(($context["addressEditorOptions"] ?? null)), "html", null, true);
        echo "'>
                                            ";
        // line 89
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping"));
        echo "
                                        </a>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  394 => 89,  390 => 88,  384 => 85,  379 => 84,  372 => 83,  364 => 92,  362 => 83,  359 => 82,  357 => 79,  356 => 77,  353 => 76,  346 => 75,  336 => 64,  333 => 63,  326 => 62,  318 => 72,  315 => 71,  313 => 69,  311 => 68,  308 => 67,  305 => 62,  303 => 61,  300 => 60,  293 => 59,  283 => 55,  280 => 54,  273 => 53,  263 => 94,  261 => 75,  258 => 74,  256 => 59,  253 => 58,  251 => 53,  246 => 50,  239 => 49,  229 => 39,  225 => 38,  219 => 35,  214 => 34,  207 => 33,  199 => 42,  197 => 33,  194 => 32,  192 => 29,  191 => 27,  188 => 26,  181 => 25,  173 => 22,  171 => 20,  170 => 19,  167 => 18,  160 => 17,  150 => 13,  147 => 12,  140 => 11,  130 => 44,  128 => 25,  125 => 24,  123 => 17,  120 => 16,  118 => 11,  113 => 8,  106 => 7,  98 => 98,  96 => 49,  93 => 48,  91 => 7,  88 => 6,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_confirm_address_inner %}
    {% set billingAddress = context.customer.activeBillingAddress %}
    {% set shippingAddress = context.customer.activeShippingAddress %}

    {% block page_checkout_confirm_address %}
        <div class=\"row js-confirm-overview-addresses\">
            {% block page_checkout_confirm_address_billing %}
                <div class=\"col-sm-6 card-col confirm-billing-address\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            {% block page_checkout_confirm_address_billing_title %}
                                <div class=\"card-title\">
                                    {{ \"checkout.billingAddressHeader\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_checkout_confirm_address_billing_data %}
                                <div class=\"confirm-address-billing\">
                                    {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {
                                        'address': billingAddress
                                    } %}
                                </div>
                            {% endblock %}

                            {% block page_checkout_confirm_address_billing_actions %}
                                <div class=\"card-actions\">
                                    {% set addressEditorOptions = {
                                        changeBilling: true,
                                        addressId: billingAddress.id,
                                        csrfToken: sw_csrf(\"frontend.account.addressbook\", {\"mode\": \"token\"})
                                    } %}

                                    {% block  page_checkout_confirm_address_billing_actions_link %}
                                        <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': billingAddress.id}) }}\"
                                           title=\"{{ \"account.overviewChangeBilling\"|trans|striptags }}\"
                                           class=\"btn btn-light\"
                                           data-address-editor=\"true\"
                                           data-address-editor-options='{{ addressEditorOptions|json_encode }}'>
                                            {{ \"account.overviewChangeBilling\"|trans|sw_sanitize }}
                                        </a>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block page_checkout_confirm_address_shipping %}
                <div class=\"col-sm-6 card-col confirm-shipping-address\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            {% block page_checkout_confirm_address_shipping_title %}
                                <div class=\"card-title\">
                                    {{ \"checkout.shippingAddressHeader\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_checkout_confirm_address_shipping_data %}
                                <div class=\"confirm-address-shipping\">
                                    {% if billingAddress.id is same as(shippingAddress.id) %}
                                        {% block page_checkout_confirm_address_shipping_data_equal %}
                                            <p>
                                                {{ \"checkout.addressEqualText\"|trans|sw_sanitize }}
                                            </p>
                                        {% endblock %}
                                    {% else %}
                                        {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {
                                            'address': shippingAddress
                                        } %}
                                    {% endif %}
                                </div>
                            {% endblock %}

                            {% block page_checkout_confirm_address_shipping_actions %}
                                <div class=\"card-actions\">
                                    {% set addressEditorOptions = {
                                        changeShipping: true,
                                        addressId: shippingAddress.id,
                                        csrfToken: sw_csrf(\"frontend.account.addressbook\", {\"mode\": \"token\"})
                                    } %}

                                    {% block  page_checkout_confirm_address_shipping_actions_link %}
                                        <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': shippingAddress.id}) }}\"
                                           title=\"{{ \"account.overviewChangeShipping\"|trans|striptags }}\"
                                           class=\"btn btn-light\"
                                           data-address-editor=\"true\"
                                           data-address-editor-options='{{ addressEditorOptions|json_encode }}'>
                                            {{ \"account.overviewChangeShipping\"|trans|sw_sanitize }}
                                        </a>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-address.html.twig");
    }
}
