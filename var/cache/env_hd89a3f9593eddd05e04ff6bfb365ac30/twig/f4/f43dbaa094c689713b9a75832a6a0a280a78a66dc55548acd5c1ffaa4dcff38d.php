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

/* @Storefront/storefront/page/account/order-history/order-item.html.twig */
class __TwigTemplate_b5c4c19a5e65d25cac4f6ebcbfd257e408ff67ec7165d7dd0e5cd08e61db60c8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_order_item_overview' => [$this, 'block_page_account_order_item_overview'],
            'page_account_order_item_date' => [$this, 'block_page_account_order_item_date'],
            'page_account_order_item_date_label' => [$this, 'block_page_account_order_item_date_label'],
            'page_account_order_item_date_value' => [$this, 'block_page_account_order_item_date_value'],
            'page_account_order_item_number' => [$this, 'block_page_account_order_item_number'],
            'page_account_order_item_number_label' => [$this, 'block_page_account_order_item_number_label'],
            'page_account_order_item_number_value' => [$this, 'block_page_account_order_item_number_value'],
            'page_account_order_item_payment_method' => [$this, 'block_page_account_order_item_payment_method'],
            'page_account_order_item_payment_method_label' => [$this, 'block_page_account_order_item_payment_method_label'],
            'page_account_order_item_payment_method_value' => [$this, 'block_page_account_order_item_payment_method_value'],
            'page_account_order_item_shipping_method' => [$this, 'block_page_account_order_item_shipping_method'],
            'page_account_order_item_shipping_method_label' => [$this, 'block_page_account_order_item_shipping_method_label'],
            'page_account_order_item_shipping_method_value' => [$this, 'block_page_account_order_item_shipping_method_value'],
            'page_account_order_item_actions' => [$this, 'block_page_account_order_item_actions'],
            'page_account_order_item_actions_value' => [$this, 'block_page_account_order_item_actions_value'],
            'page_account_order_item_actions_value_text' => [$this, 'block_page_account_order_item_actions_value_text'],
            'page_account_order_item_heading' => [$this, 'block_page_account_order_item_heading'],
            'page_account_order_item_status_col' => [$this, 'block_page_account_order_item_status_col'],
            'page_account_order_item_status' => [$this, 'block_page_account_order_item_status'],
            'page_account_order_item_status_badge_payment_process_needed' => [$this, 'block_page_account_order_item_status_badge_payment_process_needed'],
            'page_account_order_item_status_badge' => [$this, 'block_page_account_order_item_status_badge'],
            'page_account_order_item_context_menu_col' => [$this, 'block_page_account_order_item_context_menu_col'],
            'page_account_order_item_context_menu' => [$this, 'block_page_account_order_item_context_menu'],
            'page_account_order_item_context_menu_button' => [$this, 'block_page_account_order_item_context_menu_button'],
            'page_account_order_item_context_menu_content' => [$this, 'block_page_account_order_item_context_menu_content'],
            'page_account_order_item_context_menu_content_change_payment_button' => [$this, 'block_page_account_order_item_context_menu_content_change_payment_button'],
            'page_account_order_item_context_menu_reorder' => [$this, 'block_page_account_order_item_context_menu_reorder'],
            'page_account_order_item_context_menu_reorder_form_action' => [$this, 'block_page_account_order_item_context_menu_reorder_form_action'],
            'page_account_order_item_context_menu_reorder_form' => [$this, 'block_page_account_order_item_context_menu_reorder_form'],
            'page_account_order_item_context_menu_reorder_form_csrf' => [$this, 'block_page_account_order_item_context_menu_reorder_form_csrf'],
            'page_account_order_item_context_menu_reorder_form_redirect' => [$this, 'block_page_account_order_item_context_menu_reorder_form_redirect'],
            'page_account_order_item_context_menu_reorder_form_line_items_input' => [$this, 'block_page_account_order_item_context_menu_reorder_form_line_items_input'],
            'page_account_order_item_context_menu_reorder_form_line_item_input' => [$this, 'block_page_account_order_item_context_menu_reorder_form_line_item_input'],
            'page_account_order_item_context_menu_reorder_form_button' => [$this, 'block_page_account_order_item_context_menu_reorder_form_button'],
            'page_account_order_item_context_menu_cancel_order' => [$this, 'block_page_account_order_item_context_menu_cancel_order'],
            'page_account_order_item_order_number_col' => [$this, 'block_page_account_order_item_order_number_col'],
            'page_account_order_item_order_number' => [$this, 'block_page_account_order_item_order_number'],
            'page_account_order_item_order_table_header_col' => [$this, 'block_page_account_order_item_order_table_header_col'],
            'page_account_order_item_order_table_header' => [$this, 'block_page_account_order_item_order_table_header'],
            'page_account_order_item_order_table_header_cell_shipping_status' => [$this, 'block_page_account_order_item_order_table_header_cell_shipping_status'],
            'page_account_order_item_order_table_header_cell_payment_status' => [$this, 'block_page_account_order_item_order_table_header_cell_payment_status'],
            'page_account_order_item_order_table_header_cell_payment_method' => [$this, 'block_page_account_order_item_order_table_header_cell_payment_method'],
            'page_account_order_item_order_table_header_cell_shipping_method' => [$this, 'block_page_account_order_item_order_table_header_cell_shipping_method'],
            'page_account_order_item_order_table_header_cell_placeholder' => [$this, 'block_page_account_order_item_order_table_header_cell_placeholder'],
            'page_account_order_item_order_table_body_col' => [$this, 'block_page_account_order_item_order_table_body_col'],
            'page_account_order_item_order_table_body' => [$this, 'block_page_account_order_item_order_table_body'],
            'page_account_order_item_order_table_body_cell_shipping_status' => [$this, 'block_page_account_order_item_order_table_body_cell_shipping_status'],
            'page_account_order_item_order_table_body_cell_payment_status' => [$this, 'block_page_account_order_item_order_table_body_cell_payment_status'],
            'page_account_order_item_order_table_body_cell_payment_method' => [$this, 'block_page_account_order_item_order_table_body_cell_payment_method'],
            'page_account_order_item_order_table_body_cell_shipping_method' => [$this, 'block_page_account_order_item_order_table_body_cell_shipping_method'],
            'page_account_order_item_order_table_body_cell_toggle_order_details' => [$this, 'block_page_account_order_item_order_table_body_cell_toggle_order_details'],
            'page_account_order_item_order_table_body_cell_toggle_order_details_button' => [$this, 'block_page_account_order_item_order_table_body_cell_toggle_order_details_button'],
            'page_account_order_item_order_table_body_cell_toggle_order_details_button_text' => [$this, 'block_page_account_order_item_order_table_body_cell_toggle_order_details_button_text'],
            'page_account_order_item_detail' => [$this, 'block_page_account_order_item_detail'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/order-item.html.twig"));

        // line 1
        $context["ORDER_TRANSACTION_STATE_OPEN"] = twig_constant("Shopware\\Core\\Checkout\\Order\\Aggregate\\OrderTransaction\\OrderTransactionStates::STATE_OPEN");
        // line 2
        $context["ORDER_TRANSACTION_STATE_FAILED"] = twig_constant("Shopware\\Core\\Checkout\\Order\\Aggregate\\OrderTransaction\\OrderTransactionStates::STATE_FAILED");
        // line 3
        $context["ORDER_TRANSACTION_STATE_REMINDED"] = twig_constant("Shopware\\Core\\Checkout\\Order\\Aggregate\\OrderTransaction\\OrderTransactionStates::STATE_REMINDED");
        // line 4
        $context["ORDER_TRANSACTION_STATE_CANCELLED"] = twig_constant("Shopware\\Core\\Checkout\\Order\\Aggregate\\OrderTransaction\\OrderTransactionStates::STATE_CANCELLED");
        // line 5
        $context["ORDER_STATE_CANCELLED"] = twig_constant("Shopware\\Core\\Checkout\\Order\\OrderStates::STATE_CANCELLED");
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('page_account_order_item_overview', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_order_item_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_overview"));

        // line 8
        echo "    <div class=\"order-wrapper\">
        <div class=\"order-item-header\">

                ";
        // line 12
        echo "                ";
        $this->displayBlock('page_account_order_item_date', $context, $blocks);
        // line 19
        echo "
                ";
        // line 21
        echo "                ";
        $this->displayBlock('page_account_order_item_number', $context, $blocks);
        // line 29
        echo "
                ";
        // line 31
        echo "                ";
        $this->displayBlock('page_account_order_item_payment_method', $context, $blocks);
        // line 39
        echo "
                ";
        // line 41
        echo "                ";
        $this->displayBlock('page_account_order_item_shipping_method', $context, $blocks);
        // line 49
        echo "
                ";
        // line 51
        echo "                ";
        $this->displayBlock('page_account_order_item_actions', $context, $blocks);
        // line 60
        echo "
                ";
        // line 61
        $context["states"] = [0 =>         // line 62
($context["ORDER_TRANSACTION_STATE_FAILED"] ?? null), 1 =>         // line 63
($context["ORDER_TRANSACTION_STATE_REMINDED"] ?? null), 2 =>         // line 64
($context["ORDER_TRANSACTION_STATE_CANCELLED"] ?? null)];
        // line 66
        echo "
                ";
        // line 67
        $context["state"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transactions", [], "any", false, false, false, 67), "last", [], "any", false, false, false, 67), "stateMachineState", [], "any", false, false, false, 67), "technicalName", [], "any", false, false, false, 67);
        // line 68
        echo "
                ";
        // line 69
        $context["isPaymentNeeded"] = twig_in_filter(($context["state"] ?? null), ($context["states"] ?? null));
        // line 70
        echo "
                <div class=\"row flex-wrap\">
                    ";
        // line 72
        $this->displayBlock('page_account_order_item_heading', $context, $blocks);
        // line 75
        echo "
                    ";
        // line 76
        $this->displayBlock('page_account_order_item_status_col', $context, $blocks);
        // line 99
        echo "
                    ";
        // line 100
        $this->displayBlock('page_account_order_item_context_menu_col', $context, $blocks);
        // line 221
        echo "
                    ";
        // line 222
        $this->displayBlock('page_account_order_item_order_number_col', $context, $blocks);
        // line 230
        echo "                </div>


                ";
        // line 233
        $this->displayBlock('page_account_order_item_order_table_header_col', $context, $blocks);
        // line 259
        echo "
                ";
        // line 260
        $this->displayBlock('page_account_order_item_order_table_body_col', $context, $blocks);
        // line 323
        echo "            </div>

        ";
        // line 325
        $this->displayBlock('page_account_order_item_detail', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_account_order_item_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_date"));

        // line 13
        echo "                        ";
        // line 14
        echo "                        ";
        $this->displayBlock('page_account_order_item_date_label', $context, $blocks);
        // line 15
        echo "
                        ";
        // line 17
        echo "                        ";
        $this->displayBlock('page_account_order_item_date_value', $context, $blocks);
        // line 18
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_account_order_item_date_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_date_label"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_account_order_item_date_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_date_value"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_page_account_order_item_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_number"));

        // line 22
        echo "
                        ";
        // line 24
        echo "                        ";
        $this->displayBlock('page_account_order_item_number_label', $context, $blocks);
        // line 25
        echo "
                        ";
        // line 27
        echo "                        ";
        $this->displayBlock('page_account_order_item_number_value', $context, $blocks);
        // line 28
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_account_order_item_number_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_number_label"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_account_order_item_number_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_number_value"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_page_account_order_item_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_payment_method"));

        // line 32
        echo "
                        ";
        // line 34
        echo "                        ";
        $this->displayBlock('page_account_order_item_payment_method_label', $context, $blocks);
        // line 35
        echo "
                        ";
        // line 37
        echo "                        ";
        $this->displayBlock('page_account_order_item_payment_method_value', $context, $blocks);
        // line 38
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_account_order_item_payment_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_payment_method_label"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_account_order_item_payment_method_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_payment_method_value"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_page_account_order_item_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_shipping_method"));

        // line 42
        echo "
                        ";
        // line 44
        echo "                        ";
        $this->displayBlock('page_account_order_item_shipping_method_label', $context, $blocks);
        // line 45
        echo "
                        ";
        // line 47
        echo "                        ";
        $this->displayBlock('page_account_order_item_shipping_method_value', $context, $blocks);
        // line 48
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_page_account_order_item_shipping_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_shipping_method_label"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_page_account_order_item_shipping_method_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_shipping_method_value"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_page_account_order_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_actions"));

        // line 52
        echo "
                    ";
        // line 54
        echo "                    ";
        $this->displayBlock('page_account_order_item_actions_value', $context, $blocks);
        // line 59
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_page_account_order_item_actions_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_actions_value"));

        // line 55
        echo "
                        ";
        // line 57
        echo "                        ";
        $this->displayBlock('page_account_order_item_actions_value_text', $context, $blocks);
        // line 58
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_page_account_order_item_actions_value_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_actions_value_text"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_page_account_order_item_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_heading"));

        // line 73
        echo "                        <h3 class=\"col-auto order-table-header-heading\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderHeadline"));
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDateTime", [], "any", false, false, false, 73), "short", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 73), "locale", [], "any", false, false, false, 73)), "html", null, true);
        echo "</h3>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_page_account_order_item_status_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_status_col"));

        // line 77
        echo "                        <div class=\"col-12 col-sm\">
                            ";
        // line 78
        $this->displayBlock('page_account_order_item_status', $context, $blocks);
        // line 97
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_page_account_order_item_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_status"));

        // line 79
        echo "                                <div class=\"order-table-header-order-status\">
                                    ";
        // line 80
        if (($context["isPaymentNeeded"] ?? null)) {
            // line 81
            echo "                                        ";
            $this->displayBlock('page_account_order_item_status_badge_payment_process_needed', $context, $blocks);
            // line 88
            echo "                                    ";
        } else {
            // line 89
            echo "                                        ";
            $this->displayBlock('page_account_order_item_status_badge', $context, $blocks);
            // line 94
            echo "                                    ";
        }
        // line 95
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_page_account_order_item_status_badge_payment_process_needed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_status_badge_payment_process_needed"));

        // line 82
        echo "                                            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.edit-order.page", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 82)]), "html", null, true);
        echo "\"
                                               class=\"badge badge-lg order-item-status-badge badge-danger\">
                                                ";
        // line 84
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderStatusActionCompletePayment"));
        echo "
                                                ";
        // line 85
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-item.html.twig", 85);
        })())->display(twig_array_merge($context, ["size" => "sm", "pack" => "solid", "name" => "arrow-medium-right"]));
        // line 86
        echo "                                            </a>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_page_account_order_item_status_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_status_badge"));

        // line 90
        echo "                                            <span class=\"badge badge-lg order-item-status-badge order-item-status-badge-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "stateMachineState", [], "any", false, false, false, 90), "technicalName", [], "any", false, false, false, 90), "html", null, true);
        echo "\">
                                                ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "stateMachineState", [], "any", false, false, false, 91), "translated", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo "
                                            </span>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_page_account_order_item_context_menu_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_col"));

        // line 101
        echo "                        <div class=\"col-1 order-table-header-context-menu-wrapper\">

                            ";
        // line 103
        if (($context["isPaymentNeeded"] ?? null)) {
            // line 104
            echo "                                <span class=\"order-table-header-context-menu-indicator notification-dot notification-dot-danger\"></span>
                            ";
        }
        // line 106
        echo "
                            ";
        // line 107
        $this->displayBlock('page_account_order_item_context_menu', $context, $blocks);
        // line 212
        echo "
                            ";
        // line 213
        if ((($context["orderState"] ?? null) != ($context["ORDER_STATE_CANCELLED"] ?? null))) {
            // line 214
            echo "                                <div class=\"tester\">
                                    ";
            // line 215
            $this->loadTemplate("@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig", "@Storefront/storefront/page/account/order-history/order-item.html.twig", 215)->display($context);
            // line 216
            echo "                                </div>
                            ";
        }
        // line 218
        echo "
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_page_account_order_item_context_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu"));

        // line 108
        echo "
                                ";
        // line 109
        $this->displayBlock('page_account_order_item_context_menu_button', $context, $blocks);
        // line 119
        echo "
                                ";
        // line 120
        $this->displayBlock('page_account_order_item_context_menu_content', $context, $blocks);
        // line 210
        echo "                               </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_page_account_order_item_context_menu_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_button"));

        // line 110
        echo "                                    <button class=\"btn dropdown-toggle order-table-header-context-menu\"
                                            type=\"button\"
                                            id=\"accountOrderDropdown\"
                                            data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                        ";
        // line 116
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-item.html.twig", 116);
        })())->display(twig_array_merge($context, ["name" => "more-horizontal"]));
        // line 117
        echo "                                    </button>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 120
    public function block_page_account_order_item_context_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_content"));

        // line 121
        echo "                                    <div class=\"dropdown-menu dropdown-menu-right order-table-header-context-menu-content\"
                                         aria-labelledby=\"accountOrderDropdown\">

                                        ";
        // line 124
        $context["orderState"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "stateMachineState", [], "any", false, false, false, 124), "technicalName", [], "any", false, false, false, 124);
        // line 125
        echo "                                        ";
        $context["orderPaymentState"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transactions", [], "any", false, false, false, 125), "last", [], "any", false, false, false, 125), "stateMachineState", [], "any", false, false, false, 125), "technicalName", [], "any", false, false, false, 125);
        // line 126
        echo "
                                        ";
        // line 127
        if (((($context["orderState"] ?? null) != ($context["ORDER_STATE_CANCELLED"] ?? null)) && (((($context["orderPaymentState"] ?? null) == ($context["ORDER_TRANSACTION_STATE_OPEN"] ?? null)) || (($context["orderPaymentState"] ?? null) == ($context["ORDER_TRANSACTION_STATE_FAILED"] ?? null))) || (($context["orderPaymentState"] ?? null) == ($context["ORDER_TRANSACTION_STATE_REMINDED"] ?? null))))) {
            // line 128
            echo "                                            ";
            $this->displayBlock('page_account_order_item_context_menu_content_change_payment_button', $context, $blocks);
            // line 141
            echo "                                        ";
        }
        // line 142
        echo "
                                        ";
        // line 143
        $this->displayBlock('page_account_order_item_context_menu_reorder', $context, $blocks);
        // line 198
        echo "
                                        ";
        // line 199
        $this->displayBlock('page_account_order_item_context_menu_cancel_order', $context, $blocks);
        // line 209
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_page_account_order_item_context_menu_content_change_payment_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_content_change_payment_button"));

        // line 129
        echo "                                                ";
        if (($context["isPaymentNeeded"] ?? null)) {
            // line 130
            echo "                                                    <a class=\"order-table-header-context-menu-content-link\"
                                                       href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.edit-order.page", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 131)]), "html", null, true);
            echo "\">
                                                        <strong>";
            // line 132
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderStatusActionCompletePayment"));
            echo "</strong>
                                                    </a>
                                                ";
        } else {
            // line 135
            echo "                                                    <a class=\"order-table-header-context-menu-content-link\"
                                                       href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.edit-order.page", ["orderId" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\">
                                                        ";
            // line 137
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderContextMenuChangePayment"));
            echo "
                                                    </a>
                                                ";
        }
        // line 140
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_page_account_order_item_context_menu_reorder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder"));

        // line 144
        echo "                                            ";
        ob_start();
        // line 145
        echo "                                                ";
        $this->displayBlock('page_account_order_item_context_menu_reorder_form_action', $context, $blocks);
        // line 148
        echo "                                            ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        echo "
                                            ";
        // line 150
        $this->displayBlock('page_account_order_item_context_menu_reorder_form', $context, $blocks);
        // line 197
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_page_account_order_item_context_menu_reorder_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form_action"));

        // line 146
        echo "                                                    ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        echo "
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block_page_account_order_item_context_menu_reorder_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form"));

        // line 151
        echo "                                                <form action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"
                                                      id=\"orderDetailForm-";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "Id", [], "any", false, false, false, 152), "html", null, true);
        echo "\"
                                                      method=\"post\"
                                                      class=\"order-table-header-context-menu-content-form\"
                                                      data-add-to-cart=\"true\">

                                                    ";
        // line 157
        $this->displayBlock('page_account_order_item_context_menu_reorder_form_csrf', $context, $blocks);
        // line 160
        echo "
                                                    ";
        // line 161
        $this->displayBlock('page_account_order_item_context_menu_reorder_form_redirect', $context, $blocks);
        // line 164
        echo "
                                                    ";
        // line 165
        $this->displayBlock('page_account_order_item_context_menu_reorder_form_line_items_input', $context, $blocks);
        // line 191
        echo "
                                                    ";
        // line 192
        $this->displayBlock('page_account_order_item_context_menu_reorder_form_button', $context, $blocks);
        // line 195
        echo "                                                 </form>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 157
    public function block_page_account_order_item_context_menu_reorder_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form_csrf"));

        // line 158
        echo "                                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 161
    public function block_page_account_order_item_context_menu_reorder_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form_redirect"));

        // line 162
        echo "                                                        <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.cart.offcanvas\"/>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 165
    public function block_page_account_order_item_context_menu_reorder_form_line_items_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form_line_items_input"));

        // line 166
        echo "                                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "lineItems", [], "any", false, false, false, 166));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 167
            echo "                                                            ";
            $this->displayBlock('page_account_order_item_context_menu_reorder_form_line_item_input', $context, $blocks);
            // line 189
            echo "                                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 167
    public function block_page_account_order_item_context_menu_reorder_form_line_item_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form_line_item_input"));

        // line 168
        echo "                                                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 168) == "product")) {
            // line 169
            echo "                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 170), "html", null, true);
            echo "][id]\"
                                                                           value=\"";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 171), "html", null, true);
            echo "\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 173), "html", null, true);
            echo "][referencedId]\"
                                                                           value=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 174), "html", null, true);
            echo "\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 176), "html", null, true);
            echo "][type]\"
                                                                           value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 177), "html", null, true);
            echo "\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 179), "html", null, true);
            echo "][stackable]\"
                                                                           value=\"1\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 182), "html", null, true);
            echo "][removable]\"
                                                                           value=\"1\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "identifier", [], "any", false, false, false, 185), "html", null, true);
            echo "][quantity]\"
                                                                           value=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 186), "html", null, true);
            echo "\">
                                                                ";
        }
        // line 188
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 192
    public function block_page_account_order_item_context_menu_reorder_form_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_reorder_form_button"));

        // line 193
        echo "                                                        <button class=\"order-table-header-context-menu-content-link\" type=\"submit\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderContextMenuReorder"));
        echo "</button>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 199
    public function block_page_account_order_item_context_menu_cancel_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_context_menu_cancel_order"));

        // line 200
        echo "                                            ";
        if (((($context["orderState"] ?? null) != ($context["ORDER_STATE_CANCELLED"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 200), "core", [], "any", false, false, false, 200), "cart", [], "any", false, false, false, 200), "enableOrderRefunds", [], "any", false, false, false, 200))) {
            // line 201
            echo "                                                <button type=\"button\"
                                                        class=\"order-table-header-context-menu-content-link\"
                                                        data-toggle=\"modal\"
                                                        data-target=\"#order-";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 204), "html", null, true);
            echo "\">
                                                    ";
            // line 205
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderButton"));
            echo "
                                                </button>
                                            ";
        }
        // line 208
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 222
    public function block_page_account_order_item_order_number_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_number_col"));

        // line 223
        echo "                        <div class=\"col-12 order-table-header-order-number\">
                            ";
        // line 224
        $this->displayBlock('page_account_order_item_order_number', $context, $blocks);
        // line 228
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 224
    public function block_page_account_order_item_order_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_number"));

        // line 225
        echo "                                <strong class=\"order-table-header-label\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderNumber"));
        echo "</strong>
                                <span class=\"order-table-body-value\">";
        // line 226
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 226));
        echo "</span>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 233
    public function block_page_account_order_item_order_table_header_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header_col"));

        // line 234
        echo "                        ";
        $this->displayBlock('page_account_order_item_order_table_header', $context, $blocks);
        // line 258
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 234
    public function block_page_account_order_item_order_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header"));

        // line 235
        echo "                            <div class=\"col-12 row order-table-header-order-table-header\">

                                ";
        // line 237
        $this->displayBlock('page_account_order_item_order_table_header_cell_shipping_status', $context, $blocks);
        // line 240
        echo "
                                ";
        // line 241
        $this->displayBlock('page_account_order_item_order_table_header_cell_payment_status', $context, $blocks);
        // line 244
        echo "
                                ";
        // line 245
        $this->displayBlock('page_account_order_item_order_table_header_cell_payment_method', $context, $blocks);
        // line 248
        echo "
                                ";
        // line 249
        $this->displayBlock('page_account_order_item_order_table_header_cell_shipping_method', $context, $blocks);
        // line 252
        echo "
                                ";
        // line 253
        $this->displayBlock('page_account_order_item_order_table_header_cell_placeholder', $context, $blocks);
        // line 256
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 237
    public function block_page_account_order_item_order_table_header_cell_shipping_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header_cell_shipping_status"));

        // line 238
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderShippingStatus"));
        echo "</div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 241
    public function block_page_account_order_item_order_table_header_cell_payment_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header_cell_payment_status"));

        // line 242
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderPaymentStatus"));
        echo "</div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 245
    public function block_page_account_order_item_order_table_header_cell_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header_cell_payment_method"));

        // line 246
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderPaymentMethod"));
        echo "</div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 249
    public function block_page_account_order_item_order_table_header_cell_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header_cell_shipping_method"));

        // line 250
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderShippingMethod"));
        echo "</div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 253
    public function block_page_account_order_item_order_table_header_cell_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_header_cell_placeholder"));

        // line 254
        echo "                                    <div class=\"col-2 order-table-header-order-table-header-cell\"></div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 260
    public function block_page_account_order_item_order_table_body_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_col"));

        // line 261
        echo "                        ";
        $this->displayBlock('page_account_order_item_order_table_body', $context, $blocks);
        // line 321
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 261
    public function block_page_account_order_item_order_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body"));

        // line 262
        echo "                            <div class=\"col-12 row order-table-header-order-table-body\">

                                ";
        // line 264
        $this->displayBlock('page_account_order_item_order_table_body_cell_shipping_status', $context, $blocks);
        // line 272
        echo "
                                ";
        // line 273
        $this->displayBlock('page_account_order_item_order_table_body_cell_payment_status', $context, $blocks);
        // line 281
        echo "
                                ";
        // line 282
        $this->displayBlock('page_account_order_item_order_table_body_cell_payment_method', $context, $blocks);
        // line 290
        echo "
                                ";
        // line 291
        $this->displayBlock('page_account_order_item_order_table_body_cell_shipping_method', $context, $blocks);
        // line 299
        echo "
                                ";
        // line 300
        $this->displayBlock('page_account_order_item_order_table_body_cell_toggle_order_details', $context, $blocks);
        // line 319
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 264
    public function block_page_account_order_item_order_table_body_cell_shipping_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_shipping_status"));

        // line 265
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            ";
        // line 267
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderShippingStatus"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                                        </strong>
                                        <span class=\"order-table-body-value\">";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 269)), "stateMachineState", [], "any", false, false, false, 269), "translated", [], "any", false, false, false, 269), "name", [], "any", false, false, false, 269), "html", null, true);
        echo "</span>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 273
    public function block_page_account_order_item_order_table_body_cell_payment_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_payment_status"));

        // line 274
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            ";
        // line 276
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderPaymentStatus"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                                        </strong>
                                        <span class=\"order-table-body-value\">";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transactions", [], "any", false, false, false, 278)), "stateMachineState", [], "any", false, false, false, 278), "translated", [], "any", false, false, false, 278), "name", [], "any", false, false, false, 278), "html", null, true);
        echo "</span>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 282
    public function block_page_account_order_item_order_table_body_cell_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_payment_method"));

        // line 283
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            ";
        // line 285
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderPaymentMethod"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                                        </strong>
                                        <span class=\"order-table-body-value\">";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transactions", [], "any", false, false, false, 287)), "paymentMethod", [], "any", false, false, false, 287), "translated", [], "any", false, false, false, 287), "name", [], "any", false, false, false, 287), "html", null, true);
        echo "</span>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 291
    public function block_page_account_order_item_order_table_body_cell_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_shipping_method"));

        // line 292
        echo "                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            ";
        // line 294
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderShippingMethod"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                                        </strong>
                                        <span class=\"order-table-body-value\">";
        // line 296
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 296)), "shippingMethod", [], "any", false, false, false, 296), "translated", [], "any", false, false, false, 296), "name", [], "any", false, false, false, 296), "html", null, true);
        echo "</span>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 300
    public function block_page_account_order_item_order_table_body_cell_toggle_order_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_toggle_order_details"));

        // line 301
        echo "                                    <div class=\"col-12 col-sm-2 order-item order-item-actions order-table-header-order-table-body-cell\">

                                        ";
        // line 303
        $this->displayBlock('page_account_order_item_order_table_body_cell_toggle_order_details_button', $context, $blocks);
        // line 317
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 303
    public function block_page_account_order_item_order_table_body_cell_toggle_order_details_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_toggle_order_details_button"));

        // line 304
        echo "                                            <button class=\"btn btn-light btn-sm order-hide-btn collapsed\"
                                                    type=\"submit\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#order";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 307), "html", null, true);
        echo "\"
                                                    aria-expanded=\"false\"
                                                    aria-controls=\"collapseExample\">

                                                ";
        // line 311
        $this->displayBlock('page_account_order_item_order_table_body_cell_toggle_order_details_button_text', $context, $blocks);
        // line 315
        echo "                                            </button>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 311
    public function block_page_account_order_item_order_table_body_cell_toggle_order_details_button_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_order_table_body_cell_toggle_order_details_button_text"));

        // line 312
        echo "                                                    <span class=\"order-hide-btn-text\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderActionHide"));
        echo "</span>
                                                    <span class=\"order-view-btn-text\">";
        // line 313
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderActionView"));
        echo "</span>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 325
    public function block_page_account_order_item_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail"));

        // line 326
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-detail.html.twig", "@Storefront/storefront/page/account/order-history/order-item.html.twig", 326)->display($context);
        // line 327
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order-history/order-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1498 => 327,  1495 => 326,  1488 => 325,  1479 => 313,  1474 => 312,  1467 => 311,  1459 => 315,  1457 => 311,  1450 => 307,  1445 => 304,  1438 => 303,  1430 => 317,  1428 => 303,  1424 => 301,  1417 => 300,  1407 => 296,  1401 => 294,  1397 => 292,  1390 => 291,  1380 => 287,  1374 => 285,  1370 => 283,  1363 => 282,  1353 => 278,  1347 => 276,  1343 => 274,  1336 => 273,  1326 => 269,  1320 => 267,  1316 => 265,  1309 => 264,  1301 => 319,  1299 => 300,  1296 => 299,  1294 => 291,  1291 => 290,  1289 => 282,  1286 => 281,  1284 => 273,  1281 => 272,  1279 => 264,  1275 => 262,  1268 => 261,  1260 => 321,  1257 => 261,  1250 => 260,  1242 => 254,  1235 => 253,  1225 => 250,  1218 => 249,  1208 => 246,  1201 => 245,  1191 => 242,  1184 => 241,  1174 => 238,  1167 => 237,  1159 => 256,  1157 => 253,  1154 => 252,  1152 => 249,  1149 => 248,  1147 => 245,  1144 => 244,  1142 => 241,  1139 => 240,  1137 => 237,  1133 => 235,  1126 => 234,  1119 => 258,  1116 => 234,  1109 => 233,  1100 => 226,  1095 => 225,  1088 => 224,  1080 => 228,  1078 => 224,  1075 => 223,  1068 => 222,  1061 => 208,  1055 => 205,  1051 => 204,  1046 => 201,  1043 => 200,  1036 => 199,  1026 => 193,  1019 => 192,  1012 => 188,  1007 => 186,  1003 => 185,  997 => 182,  991 => 179,  986 => 177,  982 => 176,  977 => 174,  973 => 173,  968 => 171,  964 => 170,  961 => 169,  958 => 168,  951 => 167,  944 => 190,  930 => 189,  927 => 167,  909 => 166,  902 => 165,  894 => 162,  887 => 161,  877 => 158,  870 => 157,  862 => 195,  860 => 192,  857 => 191,  855 => 165,  852 => 164,  850 => 161,  847 => 160,  845 => 157,  837 => 152,  832 => 151,  825 => 150,  815 => 146,  808 => 145,  801 => 197,  799 => 150,  796 => 149,  793 => 148,  790 => 145,  787 => 144,  780 => 143,  773 => 140,  767 => 137,  763 => 136,  760 => 135,  754 => 132,  750 => 131,  747 => 130,  744 => 129,  737 => 128,  730 => 209,  728 => 199,  725 => 198,  723 => 143,  720 => 142,  717 => 141,  714 => 128,  712 => 127,  709 => 126,  706 => 125,  704 => 124,  699 => 121,  692 => 120,  684 => 117,  676 => 116,  668 => 110,  661 => 109,  653 => 210,  651 => 120,  648 => 119,  646 => 109,  643 => 108,  636 => 107,  627 => 218,  623 => 216,  621 => 215,  618 => 214,  616 => 213,  613 => 212,  611 => 107,  608 => 106,  604 => 104,  602 => 103,  598 => 101,  591 => 100,  581 => 91,  576 => 90,  569 => 89,  561 => 86,  553 => 85,  549 => 84,  543 => 82,  536 => 81,  528 => 95,  525 => 94,  522 => 89,  519 => 88,  516 => 81,  514 => 80,  511 => 79,  504 => 78,  496 => 97,  494 => 78,  491 => 77,  484 => 76,  472 => 73,  465 => 72,  453 => 57,  446 => 58,  443 => 57,  440 => 55,  433 => 54,  426 => 59,  423 => 54,  420 => 52,  413 => 51,  401 => 47,  389 => 44,  382 => 48,  379 => 47,  376 => 45,  373 => 44,  370 => 42,  363 => 41,  351 => 37,  339 => 34,  332 => 38,  329 => 37,  326 => 35,  323 => 34,  320 => 32,  313 => 31,  301 => 27,  289 => 24,  282 => 28,  279 => 27,  276 => 25,  273 => 24,  270 => 22,  263 => 21,  251 => 17,  239 => 14,  232 => 18,  229 => 17,  226 => 15,  223 => 14,  221 => 13,  214 => 12,  207 => 325,  203 => 323,  201 => 260,  198 => 259,  196 => 233,  191 => 230,  189 => 222,  186 => 221,  184 => 100,  181 => 99,  179 => 76,  176 => 75,  174 => 72,  170 => 70,  168 => 69,  165 => 68,  163 => 67,  160 => 66,  158 => 64,  157 => 63,  156 => 62,  155 => 61,  152 => 60,  149 => 51,  146 => 49,  143 => 41,  140 => 39,  137 => 31,  134 => 29,  131 => 21,  128 => 19,  125 => 12,  120 => 8,  107 => 7,  104 => 6,  102 => 5,  100 => 4,  98 => 3,  96 => 2,  94 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set ORDER_TRANSACTION_STATE_OPEN = constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\Aggregate\\\\OrderTransaction\\\\OrderTransactionStates::STATE_OPEN') %}
{% set ORDER_TRANSACTION_STATE_FAILED = constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\Aggregate\\\\OrderTransaction\\\\OrderTransactionStates::STATE_FAILED') %}
{% set ORDER_TRANSACTION_STATE_REMINDED = constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\Aggregate\\\\OrderTransaction\\\\OrderTransactionStates::STATE_REMINDED') %}
{% set ORDER_TRANSACTION_STATE_CANCELLED = constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\Aggregate\\\\OrderTransaction\\\\OrderTransactionStates::STATE_CANCELLED') %}
{% set ORDER_STATE_CANCELLED = constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\OrderStates::STATE_CANCELLED') %}

{% block page_account_order_item_overview %}
    <div class=\"order-wrapper\">
        <div class=\"order-item-header\">

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_date %}
                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_date_label %}{% endblock %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_date_value %}{% endblock %}
                {% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_number %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_number_label %}{% endblock %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_number_value %}{% endblock %}
                {% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_payment_method %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_payment_method_label %}{% endblock %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_payment_method_value %}{% endblock %}
                {% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_shipping_method %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_shipping_method_label %}{% endblock %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_shipping_method_value %}{% endblock %}
                {% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_actions %}

                    {# @deprecated tag:v6.4.0 #}
                    {% block page_account_order_item_actions_value %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block page_account_order_item_actions_value_text %}{% endblock %}
                    {% endblock %}
                {% endblock %}

                {% set states = [
                    ORDER_TRANSACTION_STATE_FAILED,
                    ORDER_TRANSACTION_STATE_REMINDED,
                    ORDER_TRANSACTION_STATE_CANCELLED
                ] %}

                {% set state = order.transactions.last.stateMachineState.technicalName %}

                {% set isPaymentNeeded = state in states %}

                <div class=\"row flex-wrap\">
                    {% block page_account_order_item_heading %}
                        <h3 class=\"col-auto order-table-header-heading\">{{ \"account.orderHeadline\"|trans|sw_sanitize }} {{ order.orderDateTime|format_date('short', locale=app.request.locale) }}</h3>
                    {% endblock %}

                    {% block page_account_order_item_status_col %}
                        <div class=\"col-12 col-sm\">
                            {% block page_account_order_item_status %}
                                <div class=\"order-table-header-order-status\">
                                    {% if isPaymentNeeded %}
                                        {% block page_account_order_item_status_badge_payment_process_needed %}
                                            <a href=\"{{ path('frontend.account.edit-order.page', { 'orderId': order.id }) }}\"
                                               class=\"badge badge-lg order-item-status-badge badge-danger\">
                                                {{ \"account.orderStatusActionCompletePayment\"|trans|sw_sanitize }}
                                                {% sw_icon 'arrow-medium-right' style { 'size': 'sm', 'pack': 'solid' } %}
                                            </a>
                                        {% endblock %}
                                    {% else %}
                                        {% block page_account_order_item_status_badge %}
                                            <span class=\"badge badge-lg order-item-status-badge order-item-status-badge-{{ order.stateMachineState.technicalName}}\">
                                                {{ order.stateMachineState.translated.name }}
                                            </span>
                                        {% endblock %}
                                    {% endif %}
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block page_account_order_item_context_menu_col %}
                        <div class=\"col-1 order-table-header-context-menu-wrapper\">

                            {% if isPaymentNeeded %}
                                <span class=\"order-table-header-context-menu-indicator notification-dot notification-dot-danger\"></span>
                            {% endif %}

                            {% block page_account_order_item_context_menu %}

                                {% block page_account_order_item_context_menu_button %}
                                    <button class=\"btn dropdown-toggle order-table-header-context-menu\"
                                            type=\"button\"
                                            id=\"accountOrderDropdown\"
                                            data-toggle=\"dropdown\"
                                            aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                        {% sw_icon 'more-horizontal' %}
                                    </button>
                                {% endblock %}

                                {% block page_account_order_item_context_menu_content %}
                                    <div class=\"dropdown-menu dropdown-menu-right order-table-header-context-menu-content\"
                                         aria-labelledby=\"accountOrderDropdown\">

                                        {% set orderState = order.stateMachineState.technicalName %}
                                        {% set orderPaymentState = order.transactions.last.stateMachineState.technicalName %}

                                        {% if orderState != ORDER_STATE_CANCELLED and (orderPaymentState == ORDER_TRANSACTION_STATE_OPEN or orderPaymentState == ORDER_TRANSACTION_STATE_FAILED or orderPaymentState == ORDER_TRANSACTION_STATE_REMINDED) %}
                                            {% block page_account_order_item_context_menu_content_change_payment_button %}
                                                {% if isPaymentNeeded %}
                                                    <a class=\"order-table-header-context-menu-content-link\"
                                                       href=\"{{ path('frontend.account.edit-order.page', { 'orderId': order.id }) }}\">
                                                        <strong>{{ \"account.orderStatusActionCompletePayment\"|trans|sw_sanitize }}</strong>
                                                    </a>
                                                {% else %}
                                                    <a class=\"order-table-header-context-menu-content-link\"
                                                       href=\"{{ path('frontend.account.edit-order.page', { 'orderId': order.id }) }}\">
                                                        {{ \"account.orderContextMenuChangePayment\"|trans|sw_sanitize }}
                                                    </a>
                                                {% endif %}
                                            {% endblock %}
                                        {% endif %}

                                        {% block page_account_order_item_context_menu_reorder %}
                                            {% set action %}
                                                {% block page_account_order_item_context_menu_reorder_form_action %}
                                                    {{ path('frontend.checkout.line-item.add') }}
                                                {% endblock %}
                                            {% endset %}

                                            {% block page_account_order_item_context_menu_reorder_form %}
                                                <form action=\"{{ action }}\"
                                                      id=\"orderDetailForm-{{ order.Id }}\"
                                                      method=\"post\"
                                                      class=\"order-table-header-context-menu-content-form\"
                                                      data-add-to-cart=\"true\">

                                                    {% block page_account_order_item_context_menu_reorder_form_csrf %}
                                                        {{ sw_csrf('frontend.checkout.line-item.add') }}
                                                    {% endblock %}

                                                    {% block page_account_order_item_context_menu_reorder_form_redirect %}
                                                        <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.cart.offcanvas\"/>
                                                    {% endblock %}

                                                    {% block page_account_order_item_context_menu_reorder_form_line_items_input %}
                                                        {% for lineItem in order.lineItems %}
                                                            {% block page_account_order_item_context_menu_reorder_form_line_item_input %}
                                                                {% if lineItem.type == 'product' %}
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[{{ lineItem.identifier }}][id]\"
                                                                           value=\"{{ lineItem.identifier }}\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[{{ lineItem.identifier }}][referencedId]\"
                                                                           value=\"{{ lineItem.referencedId }}\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[{{ lineItem.identifier }}][type]\"
                                                                           value=\"{{ lineItem.type }}\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[{{ lineItem.identifier }}][stackable]\"
                                                                           value=\"1\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[{{ lineItem.identifier }}][removable]\"
                                                                           value=\"1\">
                                                                    <input type=\"hidden\"
                                                                           name=\"lineItems[{{ lineItem.identifier }}][quantity]\"
                                                                           value=\"{{ lineItem.quantity }}\">
                                                                {% endif %}
                                                            {% endblock %}
                                                        {% endfor %}
                                                    {% endblock %}

                                                    {% block page_account_order_item_context_menu_reorder_form_button %}
                                                        <button class=\"order-table-header-context-menu-content-link\" type=\"submit\">{{ \"account.orderContextMenuReorder\"|trans|sw_sanitize }}</button>
                                                    {% endblock %}
                                                 </form>
                                            {% endblock %}
                                        {% endblock %}

                                        {% block page_account_order_item_context_menu_cancel_order %}
                                            {% if orderState != ORDER_STATE_CANCELLED and shopware.config.core.cart.enableOrderRefunds %}
                                                <button type=\"button\"
                                                        class=\"order-table-header-context-menu-content-link\"
                                                        data-toggle=\"modal\"
                                                        data-target=\"#order-{{ order.id }}\">
                                                    {{ \"account.editOrderCancelOrderButton\"|trans|sw_sanitize }}
                                                </button>
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}
                               </div>
                            {% endblock %}

                            {% if orderState != ORDER_STATE_CANCELLED %}
                                <div class=\"tester\">
                                    {% sw_include '@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig' %}
                                </div>
                            {% endif %}

                        </div>
                    {% endblock %}

                    {% block page_account_order_item_order_number_col %}
                        <div class=\"col-12 order-table-header-order-number\">
                            {% block page_account_order_item_order_number %}
                                <strong class=\"order-table-header-label\">{{ \"account.orderNumber\"|trans|sw_sanitize }}</strong>
                                <span class=\"order-table-body-value\">{{ order.orderNumber|sw_sanitize }}</span>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>


                {% block page_account_order_item_order_table_header_col %}
                        {% block page_account_order_item_order_table_header %}
                            <div class=\"col-12 row order-table-header-order-table-header\">

                                {% block page_account_order_item_order_table_header_cell_shipping_status %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">{{ \"account.orderShippingStatus\"|trans|sw_sanitize }}</div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_header_cell_payment_status %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">{{ \"account.orderPaymentStatus\"|trans|sw_sanitize }}</div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_header_cell_payment_method %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">{{ \"account.orderPaymentMethod\"|trans|sw_sanitize }}</div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_header_cell_shipping_method %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-header-cell\">{{ \"account.orderShippingMethod\"|trans|sw_sanitize }}</div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_header_cell_placeholder %}
                                    <div class=\"col-2 order-table-header-order-table-header-cell\"></div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                {% endblock %}

                {% block page_account_order_item_order_table_body_col %}
                        {% block page_account_order_item_order_table_body %}
                            <div class=\"col-12 row order-table-header-order-table-body\">

                                {% block page_account_order_item_order_table_body_cell_shipping_status %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            {{ \"account.orderShippingStatus\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                        </strong>
                                        <span class=\"order-table-body-value\">{{ order.deliveries|first.stateMachineState.translated.name }}</span>
                                    </div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_body_cell_payment_status %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            {{ \"account.orderPaymentStatus\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                        </strong>
                                        <span class=\"order-table-body-value\">{{ order.transactions|last.stateMachineState.translated.name }}</span>
                                    </div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_body_cell_payment_method %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            {{ \"account.orderPaymentMethod\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                        </strong>
                                        <span class=\"order-table-body-value\">{{ order.transactions|last.paymentMethod.translated.name }}</span>
                                    </div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_body_cell_shipping_method %}
                                    <div class=\"col-12 col-sm order-table-header-order-table-body-cell\">
                                        <strong class=\"order-table-header-label\">
                                            {{ \"account.orderShippingMethod\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                        </strong>
                                        <span class=\"order-table-body-value\">{{ order.deliveries|first.shippingMethod.translated.name }}</span>
                                    </div>
                                {% endblock %}

                                {% block page_account_order_item_order_table_body_cell_toggle_order_details %}
                                    <div class=\"col-12 col-sm-2 order-item order-item-actions order-table-header-order-table-body-cell\">

                                        {% block page_account_order_item_order_table_body_cell_toggle_order_details_button %}
                                            <button class=\"btn btn-light btn-sm order-hide-btn collapsed\"
                                                    type=\"submit\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#order{{ order.orderNumber }}\"
                                                    aria-expanded=\"false\"
                                                    aria-controls=\"collapseExample\">

                                                {% block page_account_order_item_order_table_body_cell_toggle_order_details_button_text %}
                                                    <span class=\"order-hide-btn-text\">{{ \"account.orderActionHide\"|trans|sw_sanitize }}</span>
                                                    <span class=\"order-view-btn-text\">{{ \"account.orderActionView\"|trans|sw_sanitize }}</span>
                                                {% endblock %}
                                            </button>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>

        {% block page_account_order_item_detail %}
            {% sw_include '@Storefront/storefront/page/account/order-history/order-detail.html.twig' %}
        {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/order-history/order-item.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/order-item.html.twig");
    }
}
