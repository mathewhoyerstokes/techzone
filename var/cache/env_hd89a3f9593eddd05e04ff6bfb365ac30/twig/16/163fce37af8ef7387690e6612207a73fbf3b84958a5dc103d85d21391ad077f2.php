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

/* @Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig */
class __TwigTemplate_a642e7fcfefa5df071e6c21bc1c2ec1183a9494c8174ebcfdfa7b9167aa92e8f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_order_item_detail_list_item' => [$this, 'block_page_account_order_item_detail_list_item'],
            'page_account_order_item_detail_list_item_container' => [$this, 'block_page_account_order_item_detail_list_item_container'],
            'page_account_order_item_detail_image' => [$this, 'block_page_account_order_item_detail_image'],
            'page_account_order_item_detail_image_value' => [$this, 'block_page_account_order_item_detail_image_value'],
            'page_checkout_item_info_image_element' => [$this, 'block_page_checkout_item_info_image_element'],
            'page_account_order_item_detail_name' => [$this, 'block_page_account_order_item_detail_name'],
            'page_account_order_item_detail_name_value' => [$this, 'block_page_account_order_item_detail_name_value'],
            'page_account_order_item_detail_variants' => [$this, 'block_page_account_order_item_detail_variants'],
            'page_account_order_item_detail_unitprice' => [$this, 'block_page_account_order_item_detail_unitprice'],
            'page_account_order_item_detail_purchaseunit' => [$this, 'block_page_account_order_item_detail_purchaseunit'],
            'page_account_order_item_detail_purchaseunit_label' => [$this, 'block_page_account_order_item_detail_purchaseunit_label'],
            'page_account_order_item_detail_purchaseunit_content' => [$this, 'block_page_account_order_item_detail_purchaseunit_content'],
            'page_account_order_item_detail_referenceunit' => [$this, 'block_page_account_order_item_detail_referenceunit'],
            'page_account_order_item_detail_referenceunit_content' => [$this, 'block_page_account_order_item_detail_referenceunit_content'],
            'page_account_order_item_detail_quantity' => [$this, 'block_page_account_order_item_detail_quantity'],
            'page_account_order_item_detail_quantity_label' => [$this, 'block_page_account_order_item_detail_quantity_label'],
            'page_account_order_item_detail_quantity_value' => [$this, 'block_page_account_order_item_detail_quantity_value'],
            'page_account_order_item_detail_price' => [$this, 'block_page_account_order_item_detail_price'],
            'page_account_order_item_detail_price_label' => [$this, 'block_page_account_order_item_detail_price_label'],
            'page_account_order_item_detail_price_value' => [$this, 'block_page_account_order_item_detail_price_value'],
            'page_account_order_item_detail_total' => [$this, 'block_page_account_order_item_detail_total'],
            'page_account_order_item_detail_total_label' => [$this, 'block_page_account_order_item_detail_total_label'],
            'page_account_order_item_detail_total_value' => [$this, 'block_page_account_order_item_detail_total_value'],
            'page_account_order_item_detail_list_item_children' => [$this, 'block_page_account_order_item_detail_list_item_children'],
            'page_account_order_item_detail_list_item_child' => [$this, 'block_page_account_order_item_detail_list_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig"));

        // line 1
        $this->displayBlock('page_account_order_item_detail_list_item', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_order_item_detail_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_list_item"));

        // line 2
        echo "    ";
        $context["isDiscount"] = ( !twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 2) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 2), "totalPrice", [], "any", false, false, false, 2) <= 0));
        // line 3
        echo "    ";
        $context["isNested"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 3), "count", [], "any", false, false, false, 3) > 0);
        // line 4
        echo "    ";
        $context["childTemplate"] = "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig";
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('page_account_order_item_detail_list_item_container', $context, $blocks);
        // line 197
        echo "
    ";
        // line 198
        $this->displayBlock('page_account_order_item_detail_list_item_children', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_account_order_item_detail_list_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_list_item_container"));

        // line 7
        echo "        <div class=\"order-item-detail-list-item order-detail-item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 7), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        if (($context["isNested"] ?? null)) {
            echo " is-nested";
        }
        if (($context["isChild"] ?? null)) {
            echo " is-child";
        }
        echo "\">
            <div class=\"row order-detail-content-row\">
                ";
        // line 9
        $this->displayBlock('page_account_order_item_detail_image', $context, $blocks);
        // line 57
        echo "
                ";
        // line 58
        $this->displayBlock('page_account_order_item_detail_name', $context, $blocks);
        // line 132
        echo "
                ";
        // line 133
        $this->displayBlock('page_account_order_item_detail_quantity', $context, $blocks);
        // line 150
        echo "
                ";
        // line 151
        $this->displayBlock('page_account_order_item_detail_price', $context, $blocks);
        // line 174
        echo "
                ";
        // line 175
        $this->displayBlock('page_account_order_item_detail_total', $context, $blocks);
        // line 194
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_account_order_item_detail_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_image"));

        // line 10
        echo "                    <div class=\"col-12 col-md-2 order-item order-item-image\">
                        ";
        // line 11
        $this->displayBlock('page_account_order_item_detail_image_value', $context, $blocks);
        // line 55
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_account_order_item_detail_image_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_image_value"));

        // line 12
        echo "                            <div class=\"order-item-product-image\">
                                ";
        // line 13
        if (($context["isDiscount"] ?? null)) {
            // line 14
            echo "                                    <div class=\"order-item-img order-item-discount-icon\">
                                        ";
            // line 15
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", 15);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 18
            echo "                                    </div>
                                ";
        } elseif (        // line 19
($context["isNested"] ?? null)) {
            // line 20
            echo "                                    <div class=\"order-item-nested-icon\">
                                        ";
            // line 21
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", 21);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 24
            echo "                                    </div>
                                ";
        } else {
            // line 26
            echo "                                    ";
            $context["url"] = ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 26)) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 26)])) : ("#not-found"));
            // line 27
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"
                                       class=\"product-image-link\"
                                       title=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                                        ";
            // line 30
            $this->displayBlock('page_checkout_item_info_image_element', $context, $blocks);
            // line 51
            echo "                                    </a>
                                ";
        }
        // line 53
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_checkout_item_info_image_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_image_element"));

        // line 31
        echo "                                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 31)) {
            // line 32
            echo "                                                ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", 32);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 33
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 33), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid order-item-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 39), "translated", [], "any", false, false, false, 39), "alt", [], "any", false, false, false, 39)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 39), "translated", [], "any", false, false, false, 39), "alt", [], "any", false, false, false, 39)) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 40
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "title", [], "any", false, false, false, 40)) : (""))], "name" => "cart-item-img-thumbnails"]));
            // line 43
            echo "                                            ";
        } else {
            // line 44
            echo "                                                <div class=\"product-image-placeholder\">
                                                    ";
            // line 45
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", 45);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 48
            echo "                                                </div>
                                            ";
        }
        // line 50
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_page_account_order_item_detail_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_name"));

        // line 59
        echo "                    <div class=\"col-12 col-md-4 order-item order-item-name\">
                        ";
        // line 60
        $this->displayBlock('page_account_order_item_detail_name_value', $context, $blocks);
        // line 74
        echo "
                        ";
        // line 75
        $this->displayBlock('page_account_order_item_detail_variants', $context, $blocks);
        // line 94
        echo "
                        ";
        // line 95
        $this->displayBlock('page_account_order_item_detail_unitprice', $context, $blocks);
        // line 130
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_page_account_order_item_detail_name_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_name_value"));

        // line 61
        echo "                            ";
        if (($context["isDiscount"] ?? null)) {
            // line 62
            echo "                                <strong class=\"name-value\">
                                        ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                    </strong>
                            ";
        } else {
            // line 66
            echo "                                ";
            $context["url"] = ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 66)) ? ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 66)])) : ("#not-found"));
            // line 67
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"
                                   class=\"order-item-product-name\"
                                   title=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 69), "html", null, true);
            echo "\"> <strong class=\"name-value\">
                                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 70), "html", null, true);
            echo "
                                    </strong> </a>
                            ";
        }
        // line 73
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_page_account_order_item_detail_variants($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_variants"));

        // line 76
        echo "                            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 76), "options", [], "any", false, false, false, 76)) >= 1)) {
            // line 77
            echo "                                <div class=\"order-item-variants\">
                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 78), "options", [], "any", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 79
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                                            <div class=\"order-item-variants-properties\">
                                                <div class=\"order-item-variants-properties-name\">";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 81), "html", null, true);
                    echo ":</div>
                                                <div class=\"order-item-variants-properties-value\">";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 82), "html", null, true);
                    echo "</div>
                                            </div>
                                        ";
                } else {
                    // line 85
                    echo "                                            <div class=\"order-item-variants-properties\">
                                                <div class=\"order-item-variants-properties-name\">";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 86), "translated", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
                    echo ":</div>
                                                <div class=\"order-item-variants-properties-value\">";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "translated", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
                    echo "</div>
                                            </div>
                                        ";
                }
                // line 90
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                                </div>
                            ";
        }
        // line 93
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_page_account_order_item_detail_unitprice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_unitprice"));

        // line 96
        echo "                            ";
        $context["referencePrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 96), "referencePrice", [], "any", false, false, false, 96);
        // line 97
        echo "
                            ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "purchaseUnit", [], "any", false, false, false, 98)) {
            // line 99
            echo "                                <div class=\"order-price-unit\">
                                    ";
            // line 100
            $this->displayBlock('page_account_order_item_detail_purchaseunit', $context, $blocks);
            // line 115
            echo "
                                    ";
            // line 116
            $this->displayBlock('page_account_order_item_detail_referenceunit', $context, $blocks);
            // line 127
            echo "                                </div>
                            ";
        }
        // line 129
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_page_account_order_item_detail_purchaseunit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_purchaseunit"));

        // line 101
        echo "                                        <div class=\"order-price-purchase\">
                                            ";
        // line 102
        $this->displayBlock('page_account_order_item_detail_purchaseunit_label', $context, $blocks);
        // line 107
        echo "
                                            ";
        // line 108
        $this->displayBlock('page_account_order_item_detail_purchaseunit_content', $context, $blocks);
        // line 113
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_page_account_order_item_detail_purchaseunit_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_purchaseunit_label"));

        // line 103
        echo "                                                <span class=\"order-price-purchase-label\">
                                                    ";
        // line 104
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemInfoContent"));
        echo "
                                                </span>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_page_account_order_item_detail_purchaseunit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_purchaseunit_content"));

        // line 109
        echo "                                                <span class=\"order-price-purchase-content\">
                                                   ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "purchaseUnit", [], "any", false, false, false, 110), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 110), "html", null, true);
        echo "
                                                </span>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_page_account_order_item_detail_referenceunit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_referenceunit"));

        // line 117
        echo "                                        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 117))) {
            // line 118
            echo "                                            <div class=\"order-price-reference\">
                                                ";
            // line 119
            $this->displayBlock('page_account_order_item_detail_referenceunit_content', $context, $blocks);
            // line 124
            echo "                                            </div>
                                        ";
        }
        // line 126
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_page_account_order_item_detail_referenceunit_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_referenceunit_content"));

        // line 120
        echo "                                                    <span class=\"order-price-reference-content\">
                                                        (";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 121), "isoCode", [], "any", false, false, false, 121)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 121), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 121), "html", null, true);
        echo ")
                                                    </span>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 133
    public function block_page_account_order_item_detail_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_quantity"));

        // line 134
        echo "                    <div class=\"col-12 col-md-2 order-item order-item-quantity\">
                        ";
        // line 135
        if ( !($context["isChild"] ?? null)) {
            // line 136
            echo "                            ";
            $this->displayBlock('page_account_order_item_detail_quantity_label', $context, $blocks);
            // line 141
            echo "
                            ";
            // line 142
            $this->displayBlock('page_account_order_item_detail_quantity_value', $context, $blocks);
            // line 147
            echo "                        ";
        }
        // line 148
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 136
    public function block_page_account_order_item_detail_quantity_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_quantity_label"));

        // line 137
        echo "                                <strong class=\"order-item-label order-item-quantity-label\">
                                    ";
        // line 138
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnQuantity"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                                </strong>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_page_account_order_item_detail_quantity_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_quantity_value"));

        // line 143
        echo "                                <span class=\"order-item-value order-item-quantity-value\">
                                    ";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 144), "html", null, true);
        echo "
                                </span>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 151
    public function block_page_account_order_item_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_price"));

        // line 152
        echo "                    <div class=\"col-12 col-md-2 order-item order-item-price\">
                        ";
        // line 153
        if (( !($context["isDiscount"] ?? null) &&  !($context["isNested"] ?? null))) {
            // line 154
            echo "                            ";
            $this->displayBlock('page_account_order_item_detail_price_label', $context, $blocks);
            // line 159
            echo "
                            ";
            // line 160
            $this->displayBlock('page_account_order_item_detail_price_value', $context, $blocks);
            // line 171
            echo "                        ";
        }
        // line 172
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 154
    public function block_page_account_order_item_detail_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_price_label"));

        // line 155
        echo "                                <strong class=\"order-item-label order-item-price-label\">
                                    ";
        // line 156
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnPrice"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                                </strong>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 160
    public function block_page_account_order_item_detail_price_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_price_value"));

        // line 161
        echo "                                <span class=\"order-item-value order-item-price-value\">
                                    ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "unitPrice", [], "any", false, false, false, 162) && (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 162) == "product"))) {
            // line 163
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "unitPrice", [], "any", false, false, false, 163), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 163), "isoCode", [], "any", false, false, false, 163)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 164
($context["lineItem"] ?? null), "type", [], "any", false, false, false, 164) == "promotion")) {
            // line 165
            echo "                                        /
                                    ";
        } else {
            // line 167
            echo "                                        ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemInfoFree"));
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
            echo "
                                    ";
        }
        // line 169
        echo "                                </span>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 175
    public function block_page_account_order_item_detail_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_total"));

        // line 176
        echo "                    <div class=\"col-12 col-md-2 order-item order-item-total\">
                        ";
        // line 177
        $this->displayBlock('page_account_order_item_detail_total_label', $context, $blocks);
        // line 182
        echo "
                        ";
        // line 183
        $this->displayBlock('page_account_order_item_detail_total_value', $context, $blocks);
        // line 192
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_page_account_order_item_detail_total_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_total_label"));

        // line 178
        echo "                            <strong class=\"order-item-label order-item-total-label\">
                                ";
        // line 179
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemColumnTotal"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.colonCharacter"));
        echo "
                            </strong>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 183
    public function block_page_account_order_item_detail_total_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_total_value"));

        // line 184
        echo "                            <span class=\"order-item-value order-item-total-value\">
                                ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "totalPrice", [], "any", false, false, false, 185)) {
            // line 186
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "totalPrice", [], "any", false, false, false, 186), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 186), "isoCode", [], "any", false, false, false, 186)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                                ";
        } else {
            // line 188
            echo "                                    ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orderItemInfoFree"));
            echo "
                                ";
        }
        // line 190
        echo "                            </span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 198
    public function block_page_account_order_item_detail_list_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_list_item_children"));

        // line 199
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lineItem"], "children", [], "any", false, false, false, 199));
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
            // line 200
            echo "            ";
            $this->displayBlock('page_account_order_item_detail_list_item_child', $context, $blocks);
            // line 205
            echo "        ";
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
        // line 206
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_page_account_order_item_detail_list_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_list_item_child"));

        // line 201
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName(($context["childTemplate"] ?? null)));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", 201);
        })())->display(twig_array_merge($context, ["isChild" => true]));
        // line 204
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  891 => 204,  882 => 201,  875 => 200,  868 => 206,  854 => 205,  851 => 200,  833 => 199,  826 => 198,  818 => 190,  812 => 188,  805 => 186,  803 => 185,  800 => 184,  793 => 183,  782 => 179,  779 => 178,  772 => 177,  764 => 192,  762 => 183,  759 => 182,  757 => 177,  754 => 176,  747 => 175,  739 => 169,  732 => 167,  728 => 165,  726 => 164,  720 => 163,  718 => 162,  715 => 161,  708 => 160,  697 => 156,  694 => 155,  687 => 154,  679 => 172,  676 => 171,  674 => 160,  671 => 159,  668 => 154,  666 => 153,  663 => 152,  656 => 151,  646 => 144,  643 => 143,  636 => 142,  625 => 138,  622 => 137,  615 => 136,  607 => 148,  604 => 147,  602 => 142,  599 => 141,  596 => 136,  594 => 135,  591 => 134,  584 => 133,  569 => 121,  566 => 120,  559 => 119,  552 => 126,  548 => 124,  546 => 119,  543 => 118,  540 => 117,  533 => 116,  521 => 110,  518 => 109,  511 => 108,  501 => 104,  498 => 103,  491 => 102,  483 => 113,  481 => 108,  478 => 107,  476 => 102,  473 => 101,  466 => 100,  459 => 129,  455 => 127,  453 => 116,  450 => 115,  448 => 100,  445 => 99,  443 => 98,  440 => 97,  437 => 96,  430 => 95,  423 => 93,  419 => 91,  413 => 90,  407 => 87,  403 => 86,  400 => 85,  394 => 82,  390 => 81,  387 => 80,  384 => 79,  380 => 78,  377 => 77,  374 => 76,  367 => 75,  360 => 73,  354 => 70,  350 => 69,  344 => 67,  341 => 66,  335 => 63,  332 => 62,  329 => 61,  322 => 60,  314 => 130,  312 => 95,  309 => 94,  307 => 75,  304 => 74,  302 => 60,  299 => 59,  292 => 58,  285 => 50,  281 => 48,  273 => 45,  270 => 44,  267 => 43,  265 => 40,  264 => 39,  263 => 33,  255 => 32,  252 => 31,  245 => 30,  237 => 53,  233 => 51,  231 => 30,  227 => 29,  221 => 27,  218 => 26,  214 => 24,  206 => 21,  203 => 20,  201 => 19,  198 => 18,  190 => 15,  187 => 14,  185 => 13,  182 => 12,  175 => 11,  167 => 55,  165 => 11,  162 => 10,  155 => 9,  146 => 194,  144 => 175,  141 => 174,  139 => 151,  136 => 150,  134 => 133,  131 => 132,  129 => 58,  126 => 57,  124 => 9,  109 => 7,  102 => 6,  95 => 198,  92 => 197,  90 => 6,  87 => 5,  84 => 4,  81 => 3,  78 => 2,  65 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_order_item_detail_list_item %}
    {% set isDiscount = (not lineItem.good and lineItem.price.totalPrice <= 0) %}
    {% set isNested = lineItem.children.count > 0 %}
    {% set childTemplate = '@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig' %}

    {% block page_account_order_item_detail_list_item_container %}
        <div class=\"order-item-detail-list-item order-detail-item-{{ lineItem.type }}{% if isDiscount %} is-discount{% endif %}{% if isNested %} is-nested{% endif %}{% if isChild %} is-child{% endif %}\">
            <div class=\"row order-detail-content-row\">
                {% block page_account_order_item_detail_image %}
                    <div class=\"col-12 col-md-2 order-item order-item-image\">
                        {% block page_account_order_item_detail_image_value %}
                            <div class=\"order-item-product-image\">
                                {% if isDiscount %}
                                    <div class=\"order-item-img order-item-discount-icon\">
                                        {% sw_icon 'marketing' style {
                                            'color': 'success'
                                        } %}
                                    </div>
                                {% elseif isNested %}
                                    <div class=\"order-item-nested-icon\">
                                        {% sw_icon 'bag-product' style {
                                            'color': 'light'
                                        } %}
                                    </div>
                                {% else %}
                                    {% set url = lineItem.referencedId ? seoUrl('frontend.detail.page', {'productId': lineItem.referencedId }) : '#not-found' %}
                                    <a href=\"{{ url }}\"
                                       class=\"product-image-link\"
                                       title=\"{{ lineItem.label }}\">
                                        {% block page_checkout_item_info_image_element %}
                                            {% if lineItem.cover %}
                                                {% sw_thumbnails 'cart-item-img-thumbnails' with {
                                                    media: lineItem.cover,
                                                    sizes: {
                                                        'default': '100px'
                                                    },
                                                    attributes: {
                                                        'class': 'img-fluid order-item-img',
                                                        'alt': (lineItem.cover.translated.alt ?: ''),
                                                        'title': (lineItem.cover.translated.title ?: '')
                                                    }
                                                } %}
                                            {% else %}
                                                <div class=\"product-image-placeholder\">
                                                    {% sw_icon 'placeholder' style {
                                                        'size': 'fluid'
                                                    } %}
                                                </div>
                                            {% endif %}
                                        {% endblock %}
                                    </a>
                                {% endif %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_account_order_item_detail_name %}
                    <div class=\"col-12 col-md-4 order-item order-item-name\">
                        {% block page_account_order_item_detail_name_value %}
                            {% if isDiscount %}
                                <strong class=\"name-value\">
                                        {{ lineItem.label }}
                                    </strong>
                            {% else %}
                                {% set url = lineItem.referencedId ? seoUrl('frontend.detail.page', {'productId': lineItem.referencedId }) : '#not-found' %}
                                <a href=\"{{ url }}\"
                                   class=\"order-item-product-name\"
                                   title=\"{{ lineItem.label }}\"> <strong class=\"name-value\">
                                        {{ lineItem.label }}
                                    </strong> </a>
                            {% endif %}
                        {% endblock %}

                        {% block page_account_order_item_detail_variants %}
                            {% if lineItem.payload.options|length >= 1 %}
                                <div class=\"order-item-variants\">
                                    {% for option in lineItem.payload.options %}
                                        {% if option.option %}
                                            <div class=\"order-item-variants-properties\">
                                                <div class=\"order-item-variants-properties-name\">{{ option.group }}:</div>
                                                <div class=\"order-item-variants-properties-value\">{{ option.option }}</div>
                                            </div>
                                        {% else %}
                                            <div class=\"order-item-variants-properties\">
                                                <div class=\"order-item-variants-properties-name\">{{ option.group.translated.name }}:</div>
                                                <div class=\"order-item-variants-properties-value\">{{ option.translated.name }}</div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            {% endif %}
                        {% endblock %}

                        {% block page_account_order_item_detail_unitprice %}
                            {% set referencePrice = lineItem.price.referencePrice %}

                            {% if referencePrice.purchaseUnit %}
                                <div class=\"order-price-unit\">
                                    {% block page_account_order_item_detail_purchaseunit %}
                                        <div class=\"order-price-purchase\">
                                            {% block page_account_order_item_detail_purchaseunit_label %}
                                                <span class=\"order-price-purchase-label\">
                                                    {{ \"account.orderItemInfoContent\"|trans|sw_sanitize }}
                                                </span>
                                            {% endblock %}

                                            {% block page_account_order_item_detail_purchaseunit_content %}
                                                <span class=\"order-price-purchase-content\">
                                                   {{ referencePrice.purchaseUnit }} {{ referencePrice.unitName }}
                                                </span>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}

                                    {% block page_account_order_item_detail_referenceunit %}
                                        {% if referencePrice.referenceUnit is not null %}
                                            <div class=\"order-price-reference\">
                                                {% block page_account_order_item_detail_referenceunit_content %}
                                                    <span class=\"order-price-reference-content\">
                                                        ({{ referencePrice.price|currency(order.currency.isoCode) }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referencePrice.referenceUnit }} {{ referencePrice.unitName }})
                                                    </span>
                                                {% endblock %}
                                            </div>
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_account_order_item_detail_quantity %}
                    <div class=\"col-12 col-md-2 order-item order-item-quantity\">
                        {% if not isChild %}
                            {% block page_account_order_item_detail_quantity_label %}
                                <strong class=\"order-item-label order-item-quantity-label\">
                                    {{ \"account.orderItemColumnQuantity\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                </strong>
                            {% endblock %}

                            {% block page_account_order_item_detail_quantity_value %}
                                <span class=\"order-item-value order-item-quantity-value\">
                                    {{ lineItem.quantity }}
                                </span>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}

                {% block page_account_order_item_detail_price %}
                    <div class=\"col-12 col-md-2 order-item order-item-price\">
                        {% if not isDiscount and not isNested %}
                            {% block page_account_order_item_detail_price_label %}
                                <strong class=\"order-item-label order-item-price-label\">
                                    {{ \"account.orderItemColumnPrice\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                </strong>
                            {% endblock %}

                            {% block page_account_order_item_detail_price_value %}
                                <span class=\"order-item-value order-item-price-value\">
                                    {% if lineItem.unitPrice and lineItem.type == 'product' %}
                                        {{ lineItem.unitPrice|currency(order.currency.isoCode) }}{{ \"general.star\"|trans|sw_sanitize }}
                                    {% elseif lineItem.type == 'promotion' %}
                                        /
                                    {% else %}
                                        {{ \"account.orderItemInfoFree\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                                    {% endif %}
                                </span>
                            {% endblock %}
                        {% endif %}
                    </div>
                {% endblock %}

                {% block page_account_order_item_detail_total %}
                    <div class=\"col-12 col-md-2 order-item order-item-total\">
                        {% block page_account_order_item_detail_total_label %}
                            <strong class=\"order-item-label order-item-total-label\">
                                {{ \"account.orderItemColumnTotal\"|trans|sw_sanitize }}{{ \"account.colonCharacter\"|trans|sw_sanitize }}
                            </strong>
                        {% endblock %}

                        {% block page_account_order_item_detail_total_value %}
                            <span class=\"order-item-value order-item-total-value\">
                                {% if lineItem.totalPrice %}
                                    {{ lineItem.totalPrice|currency(order.currency.isoCode) }}{{ \"general.star\"|trans|sw_sanitize }}
                                {% else %}
                                    {{ \"account.orderItemInfoFree\"|trans|sw_sanitize }}
                                {% endif %}
                            </span>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block page_account_order_item_detail_list_item_children %}
        {% for lineItem in lineItem.children %}
            {% block page_account_order_item_detail_list_item_child %}
                {% sw_include childTemplate with {
                    'isChild': true
                } %}
            {% endblock %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/order-detail-list-item.html.twig");
    }
}
