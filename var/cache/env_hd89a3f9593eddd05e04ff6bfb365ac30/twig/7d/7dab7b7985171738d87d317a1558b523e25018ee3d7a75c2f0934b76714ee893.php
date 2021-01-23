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

/* @Storefront/storefront/page/checkout/finish/finish-details.html.twig */
class __TwigTemplate_aeacf2b15d035941b7209d128099fd2ce5cf82a4db949f146a72d6d39d5b66f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_finish_details_inner' => [$this, 'block_page_checkout_finish_details_inner'],
            'page_checkout_finish_data' => [$this, 'block_page_checkout_finish_data'],
            'page_checkout_finish_header' => [$this, 'block_page_checkout_finish_header'],
            'page_checkout_finish_ordernumber' => [$this, 'block_page_checkout_finish_ordernumber'],
            'page_checkout_finish_subtitle' => [$this, 'block_page_checkout_finish_subtitle'],
            'page_checkout_finish_content' => [$this, 'block_page_checkout_finish_content'],
            'page_checkout_finish_teaser' => [$this, 'block_page_checkout_finish_teaser'],
            'page_checkout_finish_action' => [$this, 'block_page_checkout_finish_action'],
            'page_checkout_finish_action_back' => [$this, 'block_page_checkout_finish_action_back'],
            'page_checkout_finish_order' => [$this, 'block_page_checkout_finish_order'],
            'page_checkout_finish_order_address' => [$this, 'block_page_checkout_finish_order_address'],
            'page_checkout_finish_order_details' => [$this, 'block_page_checkout_finish_order_details'],
            'page_checkout_finish_order_title' => [$this, 'block_page_checkout_finish_order_title'],
            'page_checkout_finish_order_payment_method' => [$this, 'block_page_checkout_finish_order_payment_method'],
            'page_checkout_finish_order_dispatch_method' => [$this, 'block_page_checkout_finish_order_dispatch_method'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/finish/finish-details.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_finish_details_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_finish_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_details_inner"));

        // line 2
        echo "    ";
        $this->displayBlock('page_checkout_finish_data', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('page_checkout_finish_order', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page_checkout_finish_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_data"));

        // line 3
        echo "        <div class=\"card checkout-card\">
            <div class=\"card-body\">
                ";
        // line 5
        $this->displayBlock('page_checkout_finish_header', $context, $blocks);
        // line 16
        echo "
                ";
        // line 17
        $this->displayBlock('page_checkout_finish_ordernumber', $context, $blocks);
        // line 22
        echo "
                ";
        // line 23
        $this->displayBlock('page_checkout_finish_subtitle', $context, $blocks);
        // line 30
        echo "
                ";
        // line 31
        $this->displayBlock('page_checkout_finish_content', $context, $blocks);
        // line 47
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_checkout_finish_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_header"));

        // line 6
        echo "                    <h1 class=\"finish-header\">
                        ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "changedPayment", [], "any", false, false, false, 7) == true)) {
            // line 8
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishUpdateHeader"));
            echo "
                        ";
        } else {
            // line 10
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishHeader", ["%shop%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
($context["shopware"] ?? null), "config", [], "any", false, false, false, 11), "core", [], "any", false, false, false, 11), "basicInformation", [], "any", false, false, false, 11), "shopName", [], "any", false, false, false, 11)]));
            // line 12
            echo "
                        ";
        }
        // line 14
        echo "                    </h1>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_checkout_finish_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_ordernumber"));

        // line 18
        echo "                    <p class=\"finish-ordernumber\">
                        ";
        // line 19
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoOrdernumber"));
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 19), "orderNumber", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_page_checkout_finish_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_subtitle"));

        // line 24
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "changedPayment", [], "any", false, false, false, 24) == true)) {
            // line 25
            echo "                        <p class=\"finish-order-subtitle\">
                            ";
            // line 26
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishPaymentHeader", ["%paymentName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 26), "transactions", [], "any", false, false, false, 26), "last", [], "any", false, false, false, 26), "paymentMethod", [], "any", false, false, false, 26), "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26)]));
            echo "
                        </p>
                    ";
        }
        // line 29
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_page_checkout_finish_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_content"));

        // line 32
        echo "                    <div class=\"finish-content\">
                        ";
        // line 33
        $this->displayBlock('page_checkout_finish_teaser', $context, $blocks);
        // line 38
        echo "
                        ";
        // line 40
        echo "                        ";
        $this->displayBlock('page_checkout_finish_action', $context, $blocks);
        // line 45
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_page_checkout_finish_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_teaser"));

        // line 34
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "changedPayment", [], "any", false, false, false, 34) != true)) {
            // line 35
            echo "                                <p class=\"finish-teaser\">";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoConfirmationMail"));
            echo "</p>
                            ";
        }
        // line 37
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_page_checkout_finish_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_action"));

        // line 41
        echo "
                            ";
        // line 43
        echo "                            ";
        $this->displayBlock('page_checkout_finish_action_back', $context, $blocks);
        // line 44
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_checkout_finish_action_back($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_action_back"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_page_checkout_finish_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_order"));

        // line 52
        echo "        <div class=\"row finish-info\">
            ";
        // line 53
        $this->displayBlock('page_checkout_finish_order_address', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('page_checkout_finish_order_details', $context, $blocks);
        // line 86
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_page_checkout_finish_order_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_order_address"));

        // line 54
        echo "                <div class=\"col-md-8 finish-address\">
                    ";
        // line 55
        $this->loadTemplate("@Storefront/storefront/page/checkout/finish/finish-address.html.twig", "@Storefront/storefront/page/checkout/finish/finish-details.html.twig", 55)->display($context);
        // line 56
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_page_checkout_finish_order_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_order_details"));

        // line 60
        echo "                <div class=\"col-md-4 finish-order-details\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            ";
        // line 63
        $this->displayBlock('page_checkout_finish_order_title', $context, $blocks);
        // line 68
        echo "
                            ";
        // line 69
        $this->displayBlock('page_checkout_finish_order_payment_method', $context, $blocks);
        // line 75
        echo "
                            ";
        // line 76
        $this->displayBlock('page_checkout_finish_order_dispatch_method', $context, $blocks);
        // line 82
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_page_checkout_finish_order_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_order_title"));

        // line 64
        echo "                                <div class=\"card-title\">
                                    ";
        // line 65
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoHeader"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_page_checkout_finish_order_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_order_payment_method"));

        // line 70
        echo "                                <p>
                                    <strong>";
        // line 71
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoPayment"));
        echo "</strong>
                                    ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 72), "transactions", [], "any", false, false, false, 72), "last", [], "any", false, false, false, 72), "paymentMethod", [], "any", false, false, false, 72), "translated", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "
                                </p>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_page_checkout_finish_order_dispatch_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_order_dispatch_method"));

        // line 77
        echo "                                <p>
                                    <strong>";
        // line 78
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishInfoShipping"));
        echo "</strong>
                                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 79), "deliveries", [], "any", false, false, false, 79), "first", [], "any", false, false, false, 79), "shippingMethod", [], "any", false, false, false, 79), "translated", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "
                                </p>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/finish-details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  417 => 79,  413 => 78,  410 => 77,  403 => 76,  393 => 72,  389 => 71,  386 => 70,  379 => 69,  369 => 65,  366 => 64,  359 => 63,  349 => 82,  347 => 76,  344 => 75,  342 => 69,  339 => 68,  337 => 63,  332 => 60,  325 => 59,  317 => 56,  315 => 55,  312 => 54,  305 => 53,  297 => 86,  295 => 59,  292 => 58,  290 => 53,  287 => 52,  280 => 51,  268 => 43,  261 => 44,  258 => 43,  255 => 41,  248 => 40,  241 => 37,  235 => 35,  232 => 34,  225 => 33,  217 => 45,  214 => 40,  211 => 38,  209 => 33,  206 => 32,  199 => 31,  192 => 29,  186 => 26,  183 => 25,  180 => 24,  173 => 23,  162 => 19,  159 => 18,  152 => 17,  144 => 14,  140 => 12,  138 => 11,  136 => 10,  130 => 8,  128 => 7,  125 => 6,  118 => 5,  109 => 47,  107 => 31,  104 => 30,  102 => 23,  99 => 22,  97 => 17,  94 => 16,  92 => 5,  88 => 3,  81 => 2,  74 => 51,  71 => 50,  68 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_finish_details_inner %}
    {% block page_checkout_finish_data %}
        <div class=\"card checkout-card\">
            <div class=\"card-body\">
                {% block page_checkout_finish_header %}
                    <h1 class=\"finish-header\">
                        {% if page.changedPayment == true %}
                            {{ \"checkout.finishUpdateHeader\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"checkout.finishHeader\"|trans({
                                '%shop%': shopware.config.core.basicInformation.shopName
                            })|sw_sanitize }}
                        {% endif %}
                    </h1>
                {% endblock %}

                {% block page_checkout_finish_ordernumber %}
                    <p class=\"finish-ordernumber\">
                        {{ \"checkout.finishInfoOrdernumber\"|trans|sw_sanitize }}{{ page.order.orderNumber }}
                    </p>
                {% endblock %}

                {% block page_checkout_finish_subtitle %}
                    {% if page.changedPayment == true %}
                        <p class=\"finish-order-subtitle\">
                            {{ \"checkout.finishPaymentHeader\"|trans({'%paymentName%': page.order.transactions.last.paymentMethod.translated.name})|sw_sanitize }}
                        </p>
                    {% endif %}
                {% endblock %}

                {% block page_checkout_finish_content %}
                    <div class=\"finish-content\">
                        {% block page_checkout_finish_teaser %}
                            {% if page.changedPayment != true %}
                                <p class=\"finish-teaser\">{{ \"checkout.finishInfoConfirmationMail\"|trans|sw_sanitize }}</p>
                            {% endif %}
                        {% endblock %}

                        {# @depracted tag:6.4.0 #}
                        {% block page_checkout_finish_action %}

                            {# @depracted tag:6.4.0 #}
                            {% block page_checkout_finish_action_back %}{% endblock %}
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block page_checkout_finish_order %}
        <div class=\"row finish-info\">
            {% block page_checkout_finish_order_address %}
                <div class=\"col-md-8 finish-address\">
                    {% sw_include '@Storefront/storefront/page/checkout/finish/finish-address.html.twig' %}
                </div>
            {% endblock %}

            {% block page_checkout_finish_order_details %}
                <div class=\"col-md-4 finish-order-details\">
                    <div class=\"card checkout-card\">
                        <div class=\"card-body\">
                            {% block page_checkout_finish_order_title %}
                                <div class=\"card-title\">
                                    {{ \"checkout.finishInfoHeader\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_checkout_finish_order_payment_method %}
                                <p>
                                    <strong>{{ \"checkout.finishInfoPayment\"|trans|sw_sanitize }}</strong>
                                    {{ page.order.transactions.last.paymentMethod.translated.name }}
                                </p>
                            {% endblock %}

                            {% block page_checkout_finish_order_dispatch_method %}
                                <p>
                                    <strong>{{ \"checkout.finishInfoShipping\"|trans|sw_sanitize }}</strong>
                                    {{ page.order.deliveries.first.shippingMethod.translated.name }}
                                </p>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/checkout/finish/finish-details.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/finish-details.html.twig");
    }
}
