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

/* @Storefront/storefront/page/account/address.html.twig */
class __TwigTemplate_80764b03577c239a3c6faa3d2db0a6c56f606c204568ff6f7b2d322462e0dacb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_overview_addresses' => [$this, 'block_page_account_overview_addresses'],
            'page_account_overview_addresses_inner' => [$this, 'block_page_account_overview_addresses_inner'],
            'page_account_overview_billing_address' => [$this, 'block_page_account_overview_billing_address'],
            'page_account_overview_billing_address_card' => [$this, 'block_page_account_overview_billing_address_card'],
            'page_account_overview_billing_address_title' => [$this, 'block_page_account_overview_billing_address_title'],
            'page_account_overview_billing_address_content' => [$this, 'block_page_account_overview_billing_address_content'],
            'page_account_overview_billing_address_actions' => [$this, 'block_page_account_overview_billing_address_actions'],
            'page_account_overview_billing_address_actions_link' => [$this, 'block_page_account_overview_billing_address_actions_link'],
            'page_account_overview_shipping_address' => [$this, 'block_page_account_overview_shipping_address'],
            'page_account_overview_shipping_address_card' => [$this, 'block_page_account_overview_shipping_address_card'],
            'page_account_overview_shipping_address_title' => [$this, 'block_page_account_overview_shipping_address_title'],
            'page_account_overview_shipping_address_content' => [$this, 'block_page_account_overview_shipping_address_content'],
            'page_account_overview_shipping_address_actions' => [$this, 'block_page_account_overview_shipping_address_actions'],
            'page_account_overview_shipping_address_actions_link' => [$this, 'block_page_account_overview_shipping_address_actions_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/address.html.twig"));

        // line 1
        $this->displayBlock('page_account_overview_addresses', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_overview_addresses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses"));

        // line 2
        echo "    <div class=\"row js-account-overview-addresses\">
        ";
        // line 3
        $this->displayBlock('page_account_overview_addresses_inner', $context, $blocks);
        // line 86
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_account_overview_addresses_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses_inner"));

        // line 4
        echo "            ";
        $this->displayBlock('page_account_overview_billing_address', $context, $blocks);
        // line 42
        echo "
            ";
        // line 43
        $this->displayBlock('page_account_overview_shipping_address', $context, $blocks);
        // line 85
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_account_overview_billing_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address"));

        // line 5
        echo "                <div class=\"col-lg-6 card-col account-overview-card overview-billing-address\">
                    ";
        // line 6
        $this->displayBlock('page_account_overview_billing_address_card', $context, $blocks);
        // line 40
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_account_overview_billing_address_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_card"));

        // line 7
        echo "                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 9
        $this->displayBlock('page_account_overview_billing_address_title', $context, $blocks);
        // line 14
        echo "
                                ";
        // line 15
        $this->displayBlock('page_account_overview_billing_address_content', $context, $blocks);
        // line 18
        echo "
                                ";
        // line 19
        $this->displayBlock('page_account_overview_billing_address_actions', $context, $blocks);
        // line 37
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_account_overview_billing_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_title"));

        // line 10
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewBillingHeader"));
        echo "
                                    </h2>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_account_overview_billing_address_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_content"));

        // line 16
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/address.html.twig", 16)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 16), "defaultBillingAddress", [], "any", false, false, false, 16)]));
        // line 17
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_account_overview_billing_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_actions"));

        // line 20
        echo "                                    <div class=\"card-actions\">
                                        ";
        // line 21
        $context["addressEditorOptions"] = ["changeBilling" => true, "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 25
        echo "
                                        ";
        // line 26
        $this->displayBlock('page_account_overview_billing_address_actions_link', $context, $blocks);
        // line 35
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_page_account_overview_billing_address_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_billing_address_actions_link"));

        // line 27
        echo "                                            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 27), "defaultBillingAddress", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"
                                               title=\"";
        // line 28
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling")), "html", null, true);
        echo "\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='";
        // line 31
        echo twig_escape_filter($this->env, json_encode(($context["addressEditorOptions"] ?? null)), "html", null, true);
        echo "'>
                                                ";
        // line 32
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeBilling"));
        echo "
                                            </a>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_account_overview_shipping_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address"));

        // line 44
        echo "                <div class=\"col-lg-6 card-col account-overview-card overview-shipping-address\">
                    ";
        // line 45
        $this->displayBlock('page_account_overview_shipping_address_card', $context, $blocks);
        // line 83
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_page_account_overview_shipping_address_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_card"));

        // line 46
        echo "                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
        // line 48
        $this->displayBlock('page_account_overview_shipping_address_title', $context, $blocks);
        // line 53
        echo "
                                ";
        // line 54
        $this->displayBlock('page_account_overview_shipping_address_content', $context, $blocks);
        // line 61
        echo "
                                ";
        // line 62
        $this->displayBlock('page_account_overview_shipping_address_actions', $context, $blocks);
        // line 80
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_page_account_overview_shipping_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_title"));

        // line 49
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 50
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewShippingHeader"));
        echo "
                                    </h2>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_page_account_overview_shipping_address_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_content"));

        // line 55
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 55), "defaultBillingAddress", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 55), "defaultShippingAddress", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55))) {
            // line 56
            echo "                                        <p>";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewAddressEqual"));
            echo "</p>
                                    ";
        } else {
            // line 58
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/address.html.twig", 58)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 58), "defaultShippingAddress", [], "any", false, false, false, 58)]));
            // line 59
            echo "                                    ";
        }
        // line 60
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_page_account_overview_shipping_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_actions"));

        // line 63
        echo "                                    <div class=\"card-actions\">
                                        ";
        // line 64
        $context["addressEditorOptions"] = ["changeShipping" => true, "csrfToken" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.addressbook", ["mode" => "token"])];
        // line 68
        echo "
                                        ";
        // line 69
        $this->displayBlock('page_account_overview_shipping_address_actions_link', $context, $blocks);
        // line 78
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_page_account_overview_shipping_address_actions_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_shipping_address_actions_link"));

        // line 70
        echo "                                            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 70), "defaultShippingAddress", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\"
                                               title=\"";
        // line 71
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping")), "html", null, true);
        echo "\"
                                               class=\"btn btn-light\"
                                               data-address-editor=\"true\"
                                               data-address-editor-options='";
        // line 74
        echo twig_escape_filter($this->env, json_encode(($context["addressEditorOptions"] ?? null)), "html", null, true);
        echo "'>
                                                ";
        // line 75
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeShipping"));
        echo "
                                            </a>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  396 => 75,  392 => 74,  386 => 71,  381 => 70,  374 => 69,  366 => 78,  364 => 69,  361 => 68,  359 => 64,  356 => 63,  349 => 62,  342 => 60,  339 => 59,  336 => 58,  330 => 56,  327 => 55,  320 => 54,  310 => 50,  307 => 49,  300 => 48,  291 => 80,  289 => 62,  286 => 61,  284 => 54,  281 => 53,  279 => 48,  275 => 46,  268 => 45,  260 => 83,  258 => 45,  255 => 44,  248 => 43,  238 => 32,  234 => 31,  228 => 28,  223 => 27,  216 => 26,  208 => 35,  206 => 26,  203 => 25,  201 => 21,  198 => 20,  191 => 19,  184 => 17,  181 => 16,  174 => 15,  164 => 11,  161 => 10,  154 => 9,  145 => 37,  143 => 19,  140 => 18,  138 => 15,  135 => 14,  133 => 9,  129 => 7,  122 => 6,  114 => 40,  112 => 6,  109 => 5,  102 => 4,  95 => 85,  93 => 43,  90 => 42,  87 => 4,  80 => 3,  72 => 86,  70 => 3,  67 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_overview_addresses %}
    <div class=\"row js-account-overview-addresses\">
        {% block page_account_overview_addresses_inner %}
            {% block page_account_overview_billing_address %}
                <div class=\"col-lg-6 card-col account-overview-card overview-billing-address\">
                    {% block page_account_overview_billing_address_card %}
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block page_account_overview_billing_address_title %}
                                    <h2 class=\"card-title\">
                                        {{ \"account.overviewBillingHeader\"|trans|sw_sanitize }}
                                    </h2>
                                {% endblock %}

                                {% block page_account_overview_billing_address_content %}
                                    {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {'address': context.customer.defaultBillingAddress} %}
                                {% endblock %}

                                {% block page_account_overview_billing_address_actions %}
                                    <div class=\"card-actions\">
                                        {% set addressEditorOptions = {
                                            changeBilling: true,
                                            csrfToken: sw_csrf(\"frontend.account.addressbook\", {\"mode\": \"token\"})
                                        } %}

                                        {% block page_account_overview_billing_address_actions_link %}
                                            <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': context.customer.defaultBillingAddress.id}) }}\"
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
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_overview_shipping_address %}
                <div class=\"col-lg-6 card-col account-overview-card overview-shipping-address\">
                    {% block page_account_overview_shipping_address_card %}
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block page_account_overview_shipping_address_title %}
                                    <h2 class=\"card-title\">
                                        {{ \"account.overviewShippingHeader\"|trans|sw_sanitize }}
                                    </h2>
                                {% endblock %}

                                {% block page_account_overview_shipping_address_content %}
                                    {% if context.customer.defaultBillingAddress.id is same as(context.customer.defaultShippingAddress.id) %}
                                        <p>{{ \"account.overviewAddressEqual\"|trans|sw_sanitize }}</p>
                                    {% else %}
                                        {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {'address': context.customer.defaultShippingAddress} %}
                                    {% endif %}
                                {% endblock %}

                                {% block page_account_overview_shipping_address_actions %}
                                    <div class=\"card-actions\">
                                        {% set addressEditorOptions = {
                                            changeShipping: true,
                                            csrfToken: sw_csrf(\"frontend.account.addressbook\", {\"mode\": \"token\"})
                                        } %}

                                        {% block page_account_overview_shipping_address_actions_link %}
                                            <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': context.customer.defaultShippingAddress.id}) }}\"
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
                    {% endblock %}
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/address.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/address.html.twig");
    }
}
