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

/* @Storefront/storefront/page/account/order-history/order-detail.html.twig */
class __TwigTemplate_26e8bfc72b622fa38f6bf17c6df1d965b669850ebc99701b3fe882a988543f28 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_order_item_detail_overview' => [$this, 'block_page_account_order_item_detail_overview'],
            'page_account_order_documents_table' => [$this, 'block_page_account_order_documents_table'],
            'page_account_order_item_detail_table_header' => [$this, 'block_page_account_order_item_detail_table_header'],
            'page_account_order_item_detail_table_header_name' => [$this, 'block_page_account_order_item_detail_table_header_name'],
            'page_account_order_item_detail_table_header_quantity' => [$this, 'block_page_account_order_item_detail_table_header_quantity'],
            'page_account_order_item_detail_table_header_price' => [$this, 'block_page_account_order_item_detail_table_header_price'],
            'page_account_order_item_detail_table_header_total' => [$this, 'block_page_account_order_item_detail_table_header_total'],
            'page_account_order_item_detail_table_body' => [$this, 'block_page_account_order_item_detail_table_body'],
            'page_account_order_item_detail_table_body_customer_comment' => [$this, 'block_page_account_order_item_detail_table_body_customer_comment'],
            'page_account_order_customer_comment_header' => [$this, 'block_page_account_order_customer_comment_header'],
            'page_account_order_customer_comment_content' => [$this, 'block_page_account_order_customer_comment_content'],
            'page_account_order_item_detail_table_footer' => [$this, 'block_page_account_order_item_detail_table_footer'],
            'page_account_order_item_detail_table_labels_summary' => [$this, 'block_page_account_order_item_detail_table_labels_summary'],
            'page_account_order_item_detail_date' => [$this, 'block_page_account_order_item_detail_date'],
            'page_account_order_item_detail_date_label' => [$this, 'block_page_account_order_item_detail_date_label'],
            'page_account_order_item_detail_date_value' => [$this, 'block_page_account_order_item_detail_date_value'],
            'page_account_order_item_detail_number' => [$this, 'block_page_account_order_item_detail_number'],
            'page_account_order_item_detail_number_label' => [$this, 'block_page_account_order_item_detail_number_label'],
            'page_account_order_item_detail_number_value' => [$this, 'block_page_account_order_item_detail_number_value'],
            'page_account_order_item_detail_payment_method' => [$this, 'block_page_account_order_item_detail_payment_method'],
            'page_account_order_item_detail_payment_method_label' => [$this, 'block_page_account_order_item_detail_payment_method_label'],
            'page_account_order_item_detail_payment_method_value' => [$this, 'block_page_account_order_item_detail_payment_method_value'],
            'page_account_order_item_detail_shipping_method' => [$this, 'block_page_account_order_item_detail_shipping_method'],
            'page_account_order_item_detail_shipping_method_label' => [$this, 'block_page_account_order_item_detail_shipping_method_label'],
            'page_account_order_item_detail_shipping_method_value' => [$this, 'block_page_account_order_item_detail_shipping_method_value'],
            'page_account_order_item_detail_tracking_code' => [$this, 'block_page_account_order_item_detail_tracking_code'],
            'page_account_order_item_detail_tracking_code_label' => [$this, 'block_page_account_order_item_detail_tracking_code_label'],
            'page_account_order_item_detail_tracking_code_label_value' => [$this, 'block_page_account_order_item_detail_tracking_code_label_value'],
            'page_account_order_item_detail_summary' => [$this, 'block_page_account_order_item_detail_summary'],
            'page_account_order_item_detail_shipping_costs' => [$this, 'block_page_account_order_item_detail_shipping_costs'],
            'page_account_order_item_detail_shipping_costs_label' => [$this, 'block_page_account_order_item_detail_shipping_costs_label'],
            'page_account_order_item_detail_shipping_costs_value' => [$this, 'block_page_account_order_item_detail_shipping_costs_value'],
            'page_account_order_item_detail_amount' => [$this, 'block_page_account_order_item_detail_amount'],
            'page_account_order_item_detail_amount_label' => [$this, 'block_page_account_order_item_detail_amount_label'],
            'page_account_order_item_detail_amount_value' => [$this, 'block_page_account_order_item_detail_amount_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/order-detail.html.twig"));

        // line 1
        $this->displayBlock('page_account_order_item_detail_overview', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_order_item_detail_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_overview"));

        // line 2
        echo "    <div class=\"order-item-detail\">
        <div class=\"collapse\"
             id=\"order";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
            <div class=\"order-detail-content\">

                ";
        // line 7
        $this->displayBlock('page_account_order_documents_table', $context, $blocks);
        // line 12
        echo "
                ";
        // line 13
        $this->displayBlock('page_account_order_item_detail_table_header', $context, $blocks);
        // line 42
        echo "
                ";
        // line 43
        $this->displayBlock('page_account_order_item_detail_table_body', $context, $blocks);
        // line 48
        echo "
                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerComment", [], "any", false, false, false, 49)) {
            // line 50
            echo "                    ";
            $this->displayBlock('page_account_order_item_detail_table_body_customer_comment', $context, $blocks);
            // line 65
            echo "                ";
        }
        // line 66
        echo "
                ";
        // line 67
        $this->displayBlock('page_account_order_item_detail_table_footer', $context, $blocks);
        // line 205
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_account_order_documents_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_documents_table"));

        // line 8
        echo "                    <div class=\"order-detail-content-body\">
                        ";
        // line 9
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-detail-document.html.twig", "@Storefront/storefront/page/account/order-history/order-detail.html.twig", 9)->display($context);
        // line 10
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_account_order_item_detail_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_header"));

        // line 14
        echo "                    <div class=\"order-detail-content-header\">
                        <div class=\"row\">
                            ";
        // line 16
        $this->displayBlock('page_account_order_item_detail_table_header_name', $context, $blocks);
        // line 21
        echo "
                            ";
        // line 22
        $this->displayBlock('page_account_order_item_detail_table_header_quantity', $context, $blocks);
        // line 27
        echo "
                            ";
        // line 28
        $this->displayBlock('page_account_order_item_detail_table_header_price', $context, $blocks);
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('page_account_order_item_detail_table_header_total', $context, $blocks);
        // line 39
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_page_account_order_item_detail_table_header_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_header_name"));

        // line 17
        echo "                                <div class=\"col-6 order-detail-content-header-cell order-header-name\">
                                    ";
        // line 18
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnName"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_account_order_item_detail_table_header_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_header_quantity"));

        // line 23
        echo "                                <div class=\"col-2 order-detail-content-header-cell order-header-quantity\">
                                    ";
        // line 24
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnQuantity"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_account_order_item_detail_table_header_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_header_price"));

        // line 29
        echo "                                <div class=\"col-2 order-detail-content-header-cell order-header-price\">
                                    ";
        // line 30
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnPrice"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_account_order_item_detail_table_header_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_header_total"));

        // line 35
        echo "                                <div class=\"col-2 order-detail-content-header-cell order-header-total\">
                                    ";
        // line 36
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnTotal"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_account_order_item_detail_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_body"));

        // line 44
        echo "                    <div class=\"order-detail-content-body\">
                        ";
        // line 45
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-detail-list.html.twig", "@Storefront/storefront/page/account/order-history/order-detail.html.twig", 45)->display($context);
        // line 46
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_page_account_order_item_detail_table_body_customer_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_body_customer_comment"));

        // line 51
        echo "                        <div class=\"order-detail-content-body\">
                            <div class=\"row order-detail-content-row\">
                                ";
        // line 53
        $this->displayBlock('page_account_order_customer_comment_header', $context, $blocks);
        // line 58
        echo "
                                ";
        // line 59
        $this->displayBlock('page_account_order_customer_comment_content', $context, $blocks);
        // line 62
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_page_account_order_customer_comment_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_customer_comment_header"));

        // line 54
        echo "                                    <div class=\"col-12 card-title\">
                                        ";
        // line 55
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentHeader"));
        echo "
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_page_account_order_customer_comment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_customer_comment_content"));

        // line 60
        echo "                                    <div class=\"col-12\">";
        echo nl2br($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerComment", [], "any", false, false, false, 60)));
        echo "</div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_page_account_order_item_detail_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_footer"));

        // line 68
        echo "                    <div class=\"order-detail-content-footer\">
                        ";
        // line 69
        $this->displayBlock('page_account_order_item_detail_table_labels_summary', $context, $blocks);
        // line 203
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_page_account_order_item_detail_table_labels_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_table_labels_summary"));

        // line 70
        echo "                            <div class=\"order-item-detail-footer\">
                                <div class=\"row no-gutters\">
                                    <div class=\"col-12 col-md-7 col-xl-6\">
                                        <dl class=\"row no-gutters order-item-detail-labels\">
                                            ";
        // line 74
        $this->displayBlock('page_account_order_item_detail_date', $context, $blocks);
        // line 83
        echo "
                                            ";
        // line 84
        $this->displayBlock('page_account_order_item_detail_number', $context, $blocks);
        // line 93
        echo "
                                            ";
        // line 94
        $this->displayBlock('page_account_order_item_detail_payment_method', $context, $blocks);
        // line 109
        echo "
                                            ";
        // line 110
        $this->displayBlock('page_account_order_item_detail_shipping_method', $context, $blocks);
        // line 125
        echo "
                                            ";
        // line 126
        $this->displayBlock('page_account_order_item_detail_tracking_code', $context, $blocks);
        // line 160
        echo "                                        </dl>
                                    </div>

                                    <div class=\"col-12 col-md-5 col-xl-6\">
                                        ";
        // line 164
        $this->displayBlock('page_account_order_item_detail_summary', $context, $blocks);
        // line 199
        echo "                                    </div>
                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_page_account_order_item_detail_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_date"));

        // line 75
        echo "                                                ";
        $this->displayBlock('page_account_order_item_detail_date_label', $context, $blocks);
        // line 78
        echo "
                                                ";
        // line 79
        $this->displayBlock('page_account_order_item_detail_date_value', $context, $blocks);
        // line 82
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_page_account_order_item_detail_date_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_date_label"));

        // line 76
        echo "                                                    <dt class=\"col-6 col-md-5\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemDate"));
        echo "</dt>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_page_account_order_item_detail_date_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_date_value"));

        // line 80
        echo "                                                    <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDateTime", [], "any", false, false, false, 80), "short", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 80), "locale", [], "any", false, false, false, 80)), "html", null, true);
        echo "</dd>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_page_account_order_item_detail_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_number"));

        // line 85
        echo "                                                ";
        $this->displayBlock('page_account_order_item_detail_number_label', $context, $blocks);
        // line 88
        echo "
                                                ";
        // line 89
        $this->displayBlock('page_account_order_item_detail_number_value', $context, $blocks);
        // line 92
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_page_account_order_item_detail_number_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_number_label"));

        // line 86
        echo "                                                    <dt class=\"col-6 col-md-5\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemNumber"));
        echo "</dt>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_page_account_order_item_detail_number_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_number_value"));

        // line 90
        echo "                                                    <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 90), "html", null, true);
        echo "</dd>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_page_account_order_item_detail_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_payment_method"));

        // line 95
        echo "                                                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transactions", [], "any", false, false, false, 95)) > 0)) {
            // line 96
            echo "                                                    ";
            $this->displayBlock('page_account_order_item_detail_payment_method_label', $context, $blocks);
            // line 99
            echo "
                                                    ";
            // line 100
            $this->displayBlock('page_account_order_item_detail_payment_method_value', $context, $blocks);
            // line 107
            echo "                                                ";
        }
        // line 108
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_page_account_order_item_detail_payment_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_payment_method_label"));

        // line 97
        echo "                                                        <dt class=\"col-6 col-md-5\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemPaymentMethod"));
        echo "</dt>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_page_account_order_item_detail_payment_method_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_payment_method_value"));

        // line 101
        echo "                                                        <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">
                                                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "transactions", [], "any", false, false, false, 102));
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
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 103
            echo "                                                                ";
            if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 103) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 103) > 1))) {
                echo ", ";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "paymentMethod", [], "any", false, false, false, 103), "translated", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                                        </dd>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_page_account_order_item_detail_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_shipping_method"));

        // line 111
        echo "                                                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 111)) > 0)) {
            // line 112
            echo "                                                    ";
            $this->displayBlock('page_account_order_item_detail_shipping_method_label', $context, $blocks);
            // line 115
            echo "
                                                    ";
            // line 116
            $this->displayBlock('page_account_order_item_detail_shipping_method_value', $context, $blocks);
            // line 123
            echo "                                                ";
        }
        // line 124
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 112
    public function block_page_account_order_item_detail_shipping_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_shipping_method_label"));

        // line 113
        echo "                                                        <dt class=\"col-6 col-md-5\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemShippingMethod"));
        echo "</dt>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_page_account_order_item_detail_shipping_method_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_shipping_method_value"));

        // line 117
        echo "                                                        <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">
                                                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 118));
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
        foreach ($context['_seq'] as $context["_key"] => $context["delivery"]) {
            // line 119
            echo "                                                                ";
            if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 119) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 119) > 1))) {
                echo ", ";
            }
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery"], "shippingMethod", [], "any", false, false, false, 119), "translated", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                                        </dd>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_page_account_order_item_detail_tracking_code($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_tracking_code"));

        // line 127
        echo "                                                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 127)) > 0)) {
            // line 128
            echo "                                                    ";
            $this->displayBlock('page_account_order_item_detail_tracking_code_label', $context, $blocks);
            // line 131
            echo "
                                                    ";
            // line 132
            $this->displayBlock('page_account_order_item_detail_tracking_code_label_value', $context, $blocks);
            // line 158
            echo "                                                ";
        }
        // line 159
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_page_account_order_item_detail_tracking_code_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_tracking_code_label"));

        // line 129
        echo "                                                        <dt class=\"col-6 col-md-5\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemTracking"));
        echo "</dt>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_page_account_order_item_detail_tracking_code_label_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_tracking_code_label_value"));

        // line 133
        echo "                                                        ";
        ob_start();
        // line 134
        echo "                                                            <dd class=\"col-6 col-md-7\">
                                                                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deliveries", [], "any", false, false, false, 135));
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
        foreach ($context['_seq'] as $context["_key"] => $context["delivery"]) {
            // line 136
            echo "                                                                    ";
            $context["trackingCodes"] = twig_get_attribute($this->env, $this->source, $context["delivery"], "trackingCodes", [], "any", false, false, false, 136);
            // line 137
            echo "                                                                    ";
            $context["trackingUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["delivery"], "shippingMethod", [], "any", false, false, false, 137), "trackingUrl", [], "any", false, false, false, 137);
            // line 138
            echo "
                                                                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["trackingCodes"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["trackingCode"]) {
                // line 140
                echo "                                                                        ";
                if (($context["trackingUrl"] ?? null)) {
                    // line 141
                    echo "                                                                            ";
                    ob_start();
                    // line 142
                    echo "                                                                                <a href=\"";
                    echo twig_escape_filter($this->env, sprintf(($context["trackingUrl"] ?? null), $context["trackingCode"]), "html", null, true);
                    echo "\" target=\"_blank\" rel=\"noopener\">";
                    echo twig_escape_filter($this->env, $context["trackingCode"], "html", null, true);
                    echo "</a>
                                                                            ";
                    $context["output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 144
                    echo "                                                                        ";
                } else {
                    // line 145
                    echo "                                                                            ";
                    ob_start();
                    // line 146
                    echo "                                                                                <span>";
                    echo twig_escape_filter($this->env, $context["trackingCode"], "html", null, true);
                    echo "</span>
                                                                            ";
                    $context["output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 148
                    echo "                                                                        ";
                }
                // line 149
                echo "
                                                                        ";
                // line 150
                if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 150) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 150) > 0))) {
                    echo "<span>, </span>";
                }
                echo twig_escape_filter($this->env, ($context["output"] ?? null), "html", null, true);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trackingCode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "
                                                                    ";
            // line 153
            if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 153) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 153) > 0))) {
                echo "<span>, </span>";
            }
            // line 154
            echo "                                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                                            </dd>
                                                        ";
        $___internal_5b21a0f32771694ebb2d7bb0b67814fce7af783f374e24d620227b8880326d0c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo twig_spaceless($___internal_5b21a0f32771694ebb2d7bb0b67814fce7af783f374e24d620227b8880326d0c_);
        // line 157
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_page_account_order_item_detail_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_summary"));

        // line 165
        echo "                                            <dl class=\"row no-gutters order-item-detail-summary\">
                                                ";
        // line 166
        $this->displayBlock('page_account_order_item_detail_shipping_costs', $context, $blocks);
        // line 175
        echo "
                                                ";
        // line 176
        $this->displayBlock('page_account_order_item_detail_amount', $context, $blocks);
        // line 197
        echo "                                            </dl>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_page_account_order_item_detail_shipping_costs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_shipping_costs"));

        // line 167
        echo "                                                    ";
        $this->displayBlock('page_account_order_item_detail_shipping_costs_label', $context, $blocks);
        // line 170
        echo "
                                                    ";
        // line 171
        $this->displayBlock('page_account_order_item_detail_shipping_costs_value', $context, $blocks);
        // line 174
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 167
    public function block_page_account_order_item_detail_shipping_costs_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_shipping_costs_label"));

        // line 168
        echo "                                                        <dt class=\"col-6 col-md-8\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemShippingcosts"));
        echo "</dt>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 171
    public function block_page_account_order_item_detail_shipping_costs_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_shipping_costs_value"));

        // line 172
        echo "                                                        <dd class=\"col-6 col-md-4\">";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shippingTotal", [], "any", false, false, false, 172), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 172), "isoCode", [], "any", false, false, false, 172)), "html", null, true);
        echo "</dd>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 176
    public function block_page_account_order_item_detail_amount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_amount"));

        // line 177
        echo "                                                    ";
        $this->displayBlock('page_account_order_item_detail_amount_label', $context, $blocks);
        // line 186
        echo "
                                                    ";
        // line 187
        $this->displayBlock('page_account_order_item_detail_amount_value', $context, $blocks);
        // line 196
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_page_account_order_item_detail_amount_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_amount_label"));

        // line 178
        echo "                                                        <dt class=\"col-6 col-md-8\">
                                                            ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "isTaxFree", [], "any", false, false, false, 179)) {
            // line 180
            echo "                                                                ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemNetTotal"));
            echo "
                                                            ";
        } else {
            // line 182
            echo "                                                                ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemTotal"));
            echo "
                                                            ";
        }
        // line 184
        echo "                                                        </dt>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 187
    public function block_page_account_order_item_detail_amount_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_amount_value"));

        // line 188
        echo "                                                        <dd class=\"col-6 col-md-4\">
                                                            ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "isTaxFree", [], "any", false, false, false, 189)) {
            // line 190
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "amountNet", [], "any", false, false, false, 190), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 190), "isoCode", [], "any", false, false, false, 190)), "html", null, true);
            echo "
                                                            ";
        } else {
            // line 192
            echo "                                                                ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "amountTotal", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 192), "isoCode", [], "any", false, false, false, 192)), "html", null, true);
            echo "
                                                            ";
        }
        // line 194
        echo "                                                        </dd>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order-history/order-detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1087 => 194,  1081 => 192,  1075 => 190,  1073 => 189,  1070 => 188,  1063 => 187,  1055 => 184,  1049 => 182,  1043 => 180,  1041 => 179,  1038 => 178,  1031 => 177,  1024 => 196,  1022 => 187,  1019 => 186,  1016 => 177,  1009 => 176,  999 => 172,  992 => 171,  982 => 168,  975 => 167,  968 => 174,  966 => 171,  963 => 170,  960 => 167,  953 => 166,  945 => 197,  943 => 176,  940 => 175,  938 => 166,  935 => 165,  928 => 164,  921 => 157,  919 => 133,  915 => 155,  901 => 154,  897 => 153,  894 => 152,  875 => 150,  872 => 149,  869 => 148,  863 => 146,  860 => 145,  857 => 144,  849 => 142,  846 => 141,  843 => 140,  826 => 139,  823 => 138,  820 => 137,  817 => 136,  800 => 135,  797 => 134,  794 => 133,  787 => 132,  777 => 129,  770 => 128,  763 => 159,  760 => 158,  758 => 132,  755 => 131,  752 => 128,  749 => 127,  742 => 126,  734 => 121,  714 => 119,  697 => 118,  694 => 117,  687 => 116,  677 => 113,  670 => 112,  663 => 124,  660 => 123,  658 => 116,  655 => 115,  652 => 112,  649 => 111,  642 => 110,  634 => 105,  614 => 103,  597 => 102,  594 => 101,  587 => 100,  577 => 97,  570 => 96,  563 => 108,  560 => 107,  558 => 100,  555 => 99,  552 => 96,  549 => 95,  542 => 94,  532 => 90,  525 => 89,  515 => 86,  508 => 85,  501 => 92,  499 => 89,  496 => 88,  493 => 85,  486 => 84,  476 => 80,  469 => 79,  459 => 76,  452 => 75,  445 => 82,  443 => 79,  440 => 78,  437 => 75,  430 => 74,  420 => 199,  418 => 164,  412 => 160,  410 => 126,  407 => 125,  405 => 110,  402 => 109,  400 => 94,  397 => 93,  395 => 84,  392 => 83,  390 => 74,  384 => 70,  377 => 69,  369 => 203,  367 => 69,  364 => 68,  357 => 67,  347 => 60,  340 => 59,  330 => 55,  327 => 54,  320 => 53,  311 => 62,  309 => 59,  306 => 58,  304 => 53,  300 => 51,  293 => 50,  285 => 46,  283 => 45,  280 => 44,  273 => 43,  263 => 36,  260 => 35,  253 => 34,  243 => 30,  240 => 29,  233 => 28,  223 => 24,  220 => 23,  213 => 22,  203 => 18,  200 => 17,  193 => 16,  184 => 39,  182 => 34,  179 => 33,  177 => 28,  174 => 27,  172 => 22,  169 => 21,  167 => 16,  163 => 14,  156 => 13,  148 => 10,  146 => 9,  143 => 8,  136 => 7,  126 => 205,  124 => 67,  121 => 66,  118 => 65,  115 => 50,  113 => 49,  110 => 48,  108 => 43,  105 => 42,  103 => 13,  100 => 12,  98 => 7,  92 => 4,  88 => 2,  75 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_order_item_detail_overview %}
    <div class=\"order-item-detail\">
        <div class=\"collapse\"
             id=\"order{{ order.orderNumber }}\">
            <div class=\"order-detail-content\">

                {% block page_account_order_documents_table %}
                    <div class=\"order-detail-content-body\">
                        {% sw_include '@Storefront/storefront/page/account/order-history/order-detail-document.html.twig' %}
                    </div>
                {% endblock %}

                {% block page_account_order_item_detail_table_header %}
                    <div class=\"order-detail-content-header\">
                        <div class=\"row\">
                            {% block page_account_order_item_detail_table_header_name %}
                                <div class=\"col-6 order-detail-content-header-cell order-header-name\">
                                    {{ \"account.orderItemColumnName\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_order_item_detail_table_header_quantity %}
                                <div class=\"col-2 order-detail-content-header-cell order-header-quantity\">
                                    {{ \"account.orderItemColumnQuantity\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_order_item_detail_table_header_price %}
                                <div class=\"col-2 order-detail-content-header-cell order-header-price\">
                                    {{ \"account.orderItemColumnPrice\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_order_item_detail_table_header_total %}
                                <div class=\"col-2 order-detail-content-header-cell order-header-total\">
                                    {{ \"account.orderItemColumnTotal\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}

                {% block page_account_order_item_detail_table_body %}
                    <div class=\"order-detail-content-body\">
                        {% sw_include '@Storefront/storefront/page/account/order-history/order-detail-list.html.twig' %}
                    </div>
                {% endblock %}

                {% if order.customerComment %}
                    {% block page_account_order_item_detail_table_body_customer_comment %}
                        <div class=\"order-detail-content-body\">
                            <div class=\"row order-detail-content-row\">
                                {% block page_account_order_customer_comment_header %}
                                    <div class=\"col-12 card-title\">
                                        {{ \"checkout.customerCommentHeader\"|trans|sw_sanitize }}
                                    </div>
                                {% endblock %}

                                {% block page_account_order_customer_comment_content %}
                                    <div class=\"col-12\">{{ order.customerComment|sw_sanitize|nl2br }}</div>
                                {% endblock %}
                            </div>
                        </div>
                    {% endblock %}
                {% endif %}

                {% block page_account_order_item_detail_table_footer %}
                    <div class=\"order-detail-content-footer\">
                        {% block page_account_order_item_detail_table_labels_summary %}
                            <div class=\"order-item-detail-footer\">
                                <div class=\"row no-gutters\">
                                    <div class=\"col-12 col-md-7 col-xl-6\">
                                        <dl class=\"row no-gutters order-item-detail-labels\">
                                            {% block page_account_order_item_detail_date %}
                                                {% block page_account_order_item_detail_date_label %}
                                                    <dt class=\"col-6 col-md-5\">{{ \"account.orderItemDate\"|trans|sw_sanitize }}</dt>
                                                {% endblock %}

                                                {% block page_account_order_item_detail_date_value %}
                                                    <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">{{ order.orderDateTime|format_date('short', locale=app.request.locale) }}</dd>
                                                {% endblock %}
                                            {% endblock %}

                                            {% block page_account_order_item_detail_number %}
                                                {% block page_account_order_item_detail_number_label %}
                                                    <dt class=\"col-6 col-md-5\">{{ \"account.orderItemNumber\"|trans|sw_sanitize }}</dt>
                                                {% endblock %}

                                                {% block page_account_order_item_detail_number_value %}
                                                    <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">{{ order.orderNumber }}</dd>
                                                {% endblock %}
                                            {% endblock %}

                                            {% block page_account_order_item_detail_payment_method %}
                                                {% if order.transactions|length > 0 %}
                                                    {% block page_account_order_item_detail_payment_method_label %}
                                                        <dt class=\"col-6 col-md-5\">{{ \"account.orderItemPaymentMethod\"|trans|sw_sanitize }}</dt>
                                                    {% endblock %}

                                                    {% block page_account_order_item_detail_payment_method_value %}
                                                        <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">
                                                            {% for transaction in order.transactions %}
                                                                {% if not loop.first and loop.index > 1 %}, {% endif %}{{ transaction.paymentMethod.translated.name }}
                                                            {% endfor %}
                                                        </dd>
                                                    {% endblock %}
                                                {% endif %}
                                            {% endblock %}

                                            {% block page_account_order_item_detail_shipping_method %}
                                                {% if order.deliveries|length > 0 %}
                                                    {% block page_account_order_item_detail_shipping_method_label %}
                                                        <dt class=\"col-6 col-md-5\">{{ \"account.orderItemShippingMethod\"|trans|sw_sanitize }}</dt>
                                                    {% endblock %}

                                                    {% block page_account_order_item_detail_shipping_method_value %}
                                                        <dd class=\"col-6 col-md-7 order-item-detail-labels-value\">
                                                            {% for delivery in order.deliveries %}
                                                                {% if not loop.first and loop.index > 1 %}, {% endif %}{{ delivery.shippingMethod.translated.name }}
                                                            {% endfor %}
                                                        </dd>
                                                    {% endblock %}
                                                {% endif %}
                                            {% endblock %}

                                            {% block page_account_order_item_detail_tracking_code %}
                                                {% if order.deliveries|length > 0 %}
                                                    {% block page_account_order_item_detail_tracking_code_label %}
                                                        <dt class=\"col-6 col-md-5\">{{ \"account.orderItemTracking\"|trans|sw_sanitize }}</dt>
                                                    {% endblock %}

                                                    {% block page_account_order_item_detail_tracking_code_label_value %}
                                                        {% apply spaceless %}
                                                            <dd class=\"col-6 col-md-7\">
                                                                {% for delivery in order.deliveries %}
                                                                    {% set trackingCodes = delivery.trackingCodes %}
                                                                    {% set trackingUrl = delivery.shippingMethod.trackingUrl %}

                                                                    {% for trackingCode in trackingCodes %}
                                                                        {% if trackingUrl %}
                                                                            {% set output %}
                                                                                <a href=\"{{ trackingUrl|format(trackingCode) }}\" target=\"_blank\" rel=\"noopener\">{{ trackingCode }}</a>
                                                                            {% endset %}
                                                                        {% else %}
                                                                            {% set output %}
                                                                                <span>{{ trackingCode }}</span>
                                                                            {% endset %}
                                                                        {% endif %}

                                                                        {% if not loop.first and loop.index > 0 %}<span>, </span>{% endif %}{{ output }}
                                                                    {% endfor %}

                                                                    {% if not loop.first and loop.index > 0 %}<span>, </span>{% endif %}
                                                                {% endfor %}
                                                            </dd>
                                                        {% endapply %}
                                                    {% endblock %}
                                                {% endif %}
                                            {% endblock %}
                                        </dl>
                                    </div>

                                    <div class=\"col-12 col-md-5 col-xl-6\">
                                        {% block page_account_order_item_detail_summary %}
                                            <dl class=\"row no-gutters order-item-detail-summary\">
                                                {% block page_account_order_item_detail_shipping_costs %}
                                                    {% block page_account_order_item_detail_shipping_costs_label %}
                                                        <dt class=\"col-6 col-md-8\">{{ \"account.orderItemShippingcosts\"|trans|sw_sanitize }}</dt>
                                                    {% endblock %}

                                                    {% block page_account_order_item_detail_shipping_costs_value %}
                                                        <dd class=\"col-6 col-md-4\">{{ order.shippingTotal|currency(order.currency.isoCode) }}</dd>
                                                    {% endblock %}
                                                {% endblock %}

                                                {% block page_account_order_item_detail_amount %}
                                                    {% block page_account_order_item_detail_amount_label %}
                                                        <dt class=\"col-6 col-md-8\">
                                                            {% if order.isTaxFree %}
                                                                {{ \"account.orderItemNetTotal\"|trans|sw_sanitize }}
                                                            {% else %}
                                                                {{ \"account.orderItemTotal\"|trans|sw_sanitize }}
                                                            {% endif %}
                                                        </dt>
                                                    {% endblock %}

                                                    {% block page_account_order_item_detail_amount_value %}
                                                        <dd class=\"col-6 col-md-4\">
                                                            {% if order.isTaxFree %}
                                                                {{ order.amountNet|currency(order.currency.isoCode) }}
                                                            {% else %}
                                                                {{ order.amountTotal|currency(order.currency.isoCode) }}
                                                            {% endif %}
                                                        </dd>
                                                    {% endblock %}
                                                {% endblock %}
                                            </dl>
                                        {% endblock %}
                                    </div>
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/order-history/order-detail.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/order-detail.html.twig");
    }
}
