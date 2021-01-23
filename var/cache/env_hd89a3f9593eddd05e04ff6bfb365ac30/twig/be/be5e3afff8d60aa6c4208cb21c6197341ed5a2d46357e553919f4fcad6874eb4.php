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

/* @Storefront/storefront/page/account/addressbook/index.html.twig */
class __TwigTemplate_a5dfb1cf3e7597a67ee14539e3fb2386bfde73727479a5e062a3727b26e74f30 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_address_welcome' => [$this, 'block_page_account_address_welcome'],
            'page_account_address_welcome_headline' => [$this, 'block_page_account_address_welcome_headline'],
            'page_account_address_welcome_intro' => [$this, 'block_page_account_address_welcome_intro'],
            'page_account_address_success_messages' => [$this, 'block_page_account_address_success_messages'],
            'page_account_address_error_messages' => [$this, 'block_page_account_address_error_messages'],
            'page_account_address_main' => [$this, 'block_page_account_address_main'],
            'page_account_address_default' => [$this, 'block_page_account_address_default'],
            'page_account_address_billing' => [$this, 'block_page_account_address_billing'],
            'page_account_address_billing_body' => [$this, 'block_page_account_address_billing_body'],
            'page_account_address_billing_title' => [$this, 'block_page_account_address_billing_title'],
            'page_account_address_billing_address' => [$this, 'block_page_account_address_billing_address'],
            'page_account_address_shipping' => [$this, 'block_page_account_address_shipping'],
            'page_account_address_shipping_body' => [$this, 'block_page_account_address_shipping_body'],
            'page_account_address_shipping_title' => [$this, 'block_page_account_address_shipping_title'],
            'page_account_address_shipping_address' => [$this, 'block_page_account_address_shipping_address'],
            'page_account_address_item_content_create' => [$this, 'block_page_account_address_item_content_create'],
            'page_account_address_list' => [$this, 'block_page_account_address_list'],
            'page_account_address_overview_body' => [$this, 'block_page_account_address_overview_body'],
            'page_account_address_overview_address' => [$this, 'block_page_account_address_overview_address'],
            'page_account_address_overview_actions' => [$this, 'block_page_account_address_overview_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/addressbook/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_main_content"));

        // line 4
        echo "    <div class=\"account-address\">
        ";
        // line 5
        $this->displayBlock('page_account_address_welcome', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('page_account_address_success_messages', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('page_account_address_error_messages', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('page_account_address_main', $context, $blocks);
        // line 152
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_account_address_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome"));

        // line 6
        echo "            <div class=\"account-welcome\">
                ";
        // line 7
        $this->displayBlock('page_account_address_welcome_headline', $context, $blocks);
        // line 12
        echo "                ";
        $this->displayBlock('page_account_address_welcome_intro', $context, $blocks);
        // line 17
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_account_address_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome_headline"));

        // line 8
        echo "                    <h1>
                        ";
        // line 9
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressWelcome"));
        echo "
                    </h1>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_account_address_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_welcome_intro"));

        // line 13
        echo "                    <p>
                        ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressText"));
        echo "
                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_account_address_success_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_success_messages"));

        // line 21
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "get", [0 => "changedDefaultAddress"], "method", false, false, false, 21) == "1")) {
            // line 22
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 22)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDefaultChanged"))]));
            // line 26
            echo "            ";
        }
        // line 27
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "get", [0 => "addressDeleted"], "method", false, false, false, 27) == "1")) {
            // line 28
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 28)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDeleted"))]));
            // line 32
            echo "            ";
        }
        // line 33
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "get", [0 => "addressSaved"], "method", false, false, false, 33)) {
            // line 34
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 34)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressSaved"))]));
            // line 38
            echo "            ";
        }
        // line 39
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_page_account_address_error_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_error_messages"));

        // line 42
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "get", [0 => "changedDefaultAddress"], "method", false, false, false, 42) == "0")) {
            // line 43
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 43)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressDefaultNotChanged"))]));
            // line 47
            echo "            ";
        }
        // line 48
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 48), "get", [0 => "addressDeleted"], "method", false, false, false, 48) == "0")) {
            // line 49
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 49)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressNotDeleted"))]));
            // line 53
            echo "            ";
        }
        // line 54
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_page_account_address_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_main"));

        // line 57
        echo "            ";
        $context["defaultBillingAddress"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 57), "defaultBillingAddress", [], "any", false, false, false, 57);
        // line 58
        echo "            ";
        $context["defaultShippingAddress"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 58), "defaultShippingAddress", [], "any", false, false, false, 58);
        // line 59
        echo "
            ";
        // line 60
        $this->displayBlock('page_account_address_default', $context, $blocks);
        // line 109
        echo "
            ";
        // line 110
        $this->displayBlock('page_account_address_item_content_create', $context, $blocks);
        // line 119
        echo "
            ";
        // line 120
        $this->displayBlock('page_account_address_list', $context, $blocks);
        // line 151
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_page_account_address_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_default"));

        // line 61
        echo "                <div class=\"row default-address\">
                    ";
        // line 62
        $this->displayBlock('page_account_address_billing', $context, $blocks);
        // line 84
        echo "
                    ";
        // line 85
        $this->displayBlock('page_account_address_shipping', $context, $blocks);
        // line 107
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_page_account_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing"));

        // line 63
        echo "                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card billing-address\">
                                <div class=\"card-body\">
                                    ";
        // line 66
        $this->displayBlock('page_account_address_billing_body', $context, $blocks);
        // line 80
        echo "                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_page_account_address_billing_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_body"));

        // line 67
        echo "                                        <div class=\"address-item-body\">
                                            ";
        // line 68
        $this->displayBlock('page_account_address_billing_title', $context, $blocks);
        // line 73
        echo "                                            ";
        $this->displayBlock('page_account_address_billing_address', $context, $blocks);
        // line 78
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_page_account_address_billing_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_title"));

        // line 69
        echo "                                                <div class=\"card-title\">
                                                    <div>";
        // line 70
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleDefaultBillingAddress"));
        echo "</div>
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_page_account_address_billing_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_billing_address"));

        // line 74
        echo "                                                ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 74)->display(twig_array_merge($context, ["address" =>         // line 75
($context["defaultBillingAddress"] ?? null)]));
        // line 77
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_page_account_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping"));

        // line 86
        echo "                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card shipping-address\">
                                <div class=\"card-body\">
                                    ";
        // line 89
        $this->displayBlock('page_account_address_shipping_body', $context, $blocks);
        // line 103
        echo "                                </div>
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_page_account_address_shipping_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_body"));

        // line 90
        echo "                                        <div class=\"address-item-body\">
                                            ";
        // line 91
        $this->displayBlock('page_account_address_shipping_title', $context, $blocks);
        // line 96
        echo "                                            ";
        $this->displayBlock('page_account_address_shipping_address', $context, $blocks);
        // line 101
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 91
    public function block_page_account_address_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_title"));

        // line 92
        echo "                                                <div class=\"card-title\">
                                                    <div>";
        // line 93
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesTitleDefaultShippingAddress"));
        echo "</div>
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_page_account_address_shipping_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_shipping_address"));

        // line 97
        echo "                                                ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 97)->display(twig_array_merge($context, ["address" =>         // line 98
($context["defaultShippingAddress"] ?? null)]));
        // line 100
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_page_account_address_item_content_create($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_item_content_create"));

        // line 111
        echo "                <div class=\"address-action-create\">
                    <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.create.page");
        echo "\"
                       title=\"";
        // line 113
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn")), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\">
                        ";
        // line 115
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressCreateBtn"));
        echo "
                    </a>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 120
    public function block_page_account_address_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_list"));

        // line 121
        echo "                <div class=\"address-list\">
                    <div class=\"h3\">
                        ";
        // line 123
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressListHeader"));
        echo "
                    </div>

                    <div class=\"row\">
                        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "addresses", [], "any", false, false, false, 127));
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
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 128
            echo "                            <div class=\"col-sm-6 card-col address-card\">
                                <div class=\"card other-address\">
                                    <div class=\"card-body\">
                                        ";
            // line 131
            $this->displayBlock('page_account_address_overview_body', $context, $blocks);
            // line 144
            echo "                                    </div>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_page_account_address_overview_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_body"));

        // line 132
        echo "                                            <div class=\"address-item-body\">
                                                ";
        // line 133
        $this->displayBlock('page_account_address_overview_address', $context, $blocks);
        // line 136
        echo "
                                                ";
        // line 137
        $this->displayBlock('page_account_address_overview_actions', $context, $blocks);
        // line 142
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 133
    public function block_page_account_address_overview_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_address"));

        // line 134
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 134)->display($context);
        // line 135
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 137
    public function block_page_account_address_overview_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_overview_actions"));

        // line 138
        echo "                                                    <div class=\"card-actions\">
                                                        ";
        // line 139
        $this->loadTemplate("@Storefront/storefront/page/account/addressbook/address-actions.html.twig", "@Storefront/storefront/page/account/addressbook/index.html.twig", 139)->display($context);
        // line 140
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/addressbook/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 140,  623 => 139,  620 => 138,  613 => 137,  606 => 135,  603 => 134,  596 => 133,  588 => 142,  586 => 137,  583 => 136,  581 => 133,  578 => 132,  571 => 131,  562 => 148,  545 => 144,  543 => 131,  538 => 128,  521 => 127,  514 => 123,  510 => 121,  503 => 120,  492 => 115,  487 => 113,  483 => 112,  480 => 111,  473 => 110,  466 => 100,  464 => 98,  462 => 97,  455 => 96,  445 => 93,  442 => 92,  435 => 91,  427 => 101,  424 => 96,  422 => 91,  419 => 90,  412 => 89,  402 => 103,  400 => 89,  395 => 86,  388 => 85,  381 => 77,  379 => 75,  377 => 74,  370 => 73,  360 => 70,  357 => 69,  350 => 68,  342 => 78,  339 => 73,  337 => 68,  334 => 67,  327 => 66,  317 => 80,  315 => 66,  310 => 63,  303 => 62,  295 => 107,  293 => 85,  290 => 84,  288 => 62,  285 => 61,  278 => 60,  271 => 151,  269 => 120,  266 => 119,  264 => 110,  261 => 109,  259 => 60,  256 => 59,  253 => 58,  250 => 57,  243 => 56,  236 => 54,  233 => 53,  230 => 49,  227 => 48,  224 => 47,  221 => 43,  218 => 42,  211 => 41,  204 => 39,  201 => 38,  198 => 34,  195 => 33,  192 => 32,  189 => 28,  186 => 27,  183 => 26,  180 => 22,  177 => 21,  170 => 20,  160 => 14,  157 => 13,  150 => 12,  140 => 9,  137 => 8,  130 => 7,  122 => 17,  119 => 12,  117 => 7,  114 => 6,  107 => 5,  99 => 152,  97 => 56,  94 => 55,  92 => 41,  89 => 40,  87 => 20,  84 => 19,  82 => 5,  79 => 4,  72 => 3,  55 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    <div class=\"account-address\">
        {% block page_account_address_welcome %}
            <div class=\"account-welcome\">
                {% block page_account_address_welcome_headline %}
                    <h1>
                        {{ \"account.addressWelcome\"|trans|sw_sanitize }}
                    </h1>
                {% endblock %}
                {% block page_account_address_welcome_intro %}
                    <p>
                        {{ \"account.addressText\"|trans|sw_sanitize }}
                    </p>
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_account_address_success_messages %}
            {% if app.request.get('changedDefaultAddress') == '1' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"success\",
                    content: \"account.addressDefaultChanged\"|trans|sw_sanitize
                } %}
            {% endif %}
            {% if app.request.get('addressDeleted') == '1' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"success\",
                    content: \"account.addressDeleted\"|trans|sw_sanitize
                } %}
            {% endif %}
            {% if app.request.get('addressSaved') %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"success\",
                    content: \"account.addressSaved\"|trans|sw_sanitize
                } %}
            {% endif %}
        {% endblock %}

        {% block page_account_address_error_messages %}
            {% if app.request.get('changedDefaultAddress') == '0' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"danger\",
                    content: \"account.addressDefaultNotChanged\"|trans|sw_sanitize
                } %}
            {% endif %}
            {% if app.request.get('addressDeleted') == '0' %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                    type:\"danger\",
                    content: \"account.addressNotDeleted\"|trans|sw_sanitize
                } %}
            {% endif %}
        {% endblock %}

        {% block page_account_address_main %}
            {% set defaultBillingAddress = context.customer.defaultBillingAddress %}
            {% set defaultShippingAddress = context.customer.defaultShippingAddress %}

            {% block page_account_address_default %}
                <div class=\"row default-address\">
                    {% block page_account_address_billing %}
                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card billing-address\">
                                <div class=\"card-body\">
                                    {% block page_account_address_billing_body %}
                                        <div class=\"address-item-body\">
                                            {% block page_account_address_billing_title %}
                                                <div class=\"card-title\">
                                                    <div>{{ \"account.addressesTitleDefaultBillingAddress\"|trans|sw_sanitize }}</div>
                                                </div>
                                            {% endblock %}
                                            {% block page_account_address_billing_address %}
                                                {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {
                                                    'address': defaultBillingAddress
                                                } %}
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>
                    {% endblock %}

                    {% block page_account_address_shipping %}
                        <div class=\"col-sm-6 card-col address-card\">
                            <div class=\"card shipping-address\">
                                <div class=\"card-body\">
                                    {% block page_account_address_shipping_body %}
                                        <div class=\"address-item-body\">
                                            {% block page_account_address_shipping_title %}
                                                <div class=\"card-title\">
                                                    <div>{{ \"account.addressesTitleDefaultShippingAddress\"|trans|sw_sanitize }}</div>
                                                </div>
                                            {% endblock %}
                                            {% block page_account_address_shipping_address %}
                                                {% sw_include '@Storefront/storefront/component/address/address.html.twig' with {
                                                    'address': defaultShippingAddress
                                                } %}
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_address_item_content_create %}
                <div class=\"address-action-create\">
                    <a href=\"{{ path('frontend.account.address.create.page') }}\"
                       title=\"{{ \"account.addressCreateBtn\"|trans|striptags }}\"
                       class=\"btn btn-primary\">
                        {{ \"account.addressCreateBtn\"|trans|sw_sanitize }}
                    </a>
                </div>
            {% endblock %}

            {% block page_account_address_list %}
                <div class=\"address-list\">
                    <div class=\"h3\">
                        {{ \"account.addressListHeader\"|trans|sw_sanitize }}
                    </div>

                    <div class=\"row\">
                        {% for address in page.addresses %}
                            <div class=\"col-sm-6 card-col address-card\">
                                <div class=\"card other-address\">
                                    <div class=\"card-body\">
                                        {% block page_account_address_overview_body %}
                                            <div class=\"address-item-body\">
                                                {% block page_account_address_overview_address %}
                                                    {% sw_include '@Storefront/storefront/component/address/address.html.twig' %}
                                                {% endblock %}

                                                {% block page_account_address_overview_actions %}
                                                    <div class=\"card-actions\">
                                                        {% sw_include '@Storefront/storefront/page/account/addressbook/address-actions.html.twig' %}
                                                    </div>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/addressbook/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/addressbook/index.html.twig");
    }
}
