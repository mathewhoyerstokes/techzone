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

/* @Storefront/storefront/page/checkout/checkout-item.html.twig */
class __TwigTemplate_3bbe3dc7f07e7dee10c7a1d72ae43486ef863a419d62547ef87da2a410688ad1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_item' => [$this, 'block_page_checkout_item'],
            'page_checkout_item_container' => [$this, 'block_page_checkout_item_container'],
            'page_checkout_item_info' => [$this, 'block_page_checkout_item_info'],
            'page_checkout_item_info_inner' => [$this, 'block_page_checkout_item_info_inner'],
            'page_checkout_item_info_image' => [$this, 'block_page_checkout_item_info_image'],
            'page_checkout_item_info_image_container' => [$this, 'block_page_checkout_item_info_image_container'],
            'page_checkout_item_info_image_link' => [$this, 'block_page_checkout_item_info_image_link'],
            'page_checkout_item_info_image_element' => [$this, 'block_page_checkout_item_info_image_element'],
            'page_checkout_item_info_details' => [$this, 'block_page_checkout_item_info_details'],
            'page_checkout_item_info_details_inner' => [$this, 'block_page_checkout_item_info_details_inner'],
            'page_checkout_item_info_label' => [$this, 'block_page_checkout_item_info_label'],
            'page_checkout_item_info_variant_characteristics' => [$this, 'block_page_checkout_item_info_variant_characteristics'],
            'page_checkout_item_info_features' => [$this, 'block_page_checkout_item_info_features'],
            'page_checkout_item_info_variants' => [$this, 'block_page_checkout_item_info_variants'],
            'page_checkout_item_info_ordernumber' => [$this, 'block_page_checkout_item_info_ordernumber'],
            'page_checkout_item_delivery_date' => [$this, 'block_page_checkout_item_delivery_date'],
            'page_checkout_item_wishlist' => [$this, 'block_page_checkout_item_wishlist'],
            'page_checkout_item_quantity' => [$this, 'block_page_checkout_item_quantity'],
            'page_checkout_item_quantity_label' => [$this, 'block_page_checkout_item_quantity_label'],
            'page_checkout_item_quantity_select' => [$this, 'block_page_checkout_item_quantity_select'],
            'page_checkout_item_quantity_form' => [$this, 'block_page_checkout_item_quantity_form'],
            'page_checkout_item_quantity_form_csrf' => [$this, 'block_page_checkout_item_quantity_form_csrf'],
            'page_checkout_item_quantity_redirect' => [$this, 'block_page_checkout_item_quantity_redirect'],
            'page_product_detail_buy_quantity' => [$this, 'block_page_product_detail_buy_quantity'],
            'page_checkout_item_quantity_number' => [$this, 'block_page_checkout_item_quantity_number'],
            'page_checkout_item_unit_price' => [$this, 'block_page_checkout_item_unit_price'],
            'page_checkout_item_unit_price_wrapper' => [$this, 'block_page_checkout_item_unit_price_wrapper'],
            'page_checkout_item_unit_price_label' => [$this, 'block_page_checkout_item_unit_price_label'],
            'page_checkout_item_unit_price_inner' => [$this, 'block_page_checkout_item_unit_price_inner'],
            'page_checkout_item_unit_price_tax_symbol' => [$this, 'block_page_checkout_item_unit_price_tax_symbol'],
            'page_checkout_item_total_price' => [$this, 'block_page_checkout_item_total_price'],
            'page_checkout_item_total_price_wrapper' => [$this, 'block_page_checkout_item_total_price_wrapper'],
            'page_checkout_item_total_price_label' => [$this, 'block_page_checkout_item_total_price_label'],
            'page_checkout_item_total_price_inner' => [$this, 'block_page_checkout_item_total_price_inner'],
            'page_checkout_item_total_price_tax_symbol' => [$this, 'block_page_checkout_item_total_price_tax_symbol'],
            'page_checkout_item_remove' => [$this, 'block_page_checkout_item_remove'],
            'page_checkout_item_remove_form' => [$this, 'block_page_checkout_item_remove_form'],
            'page_checkout_item_remove_form_csrf' => [$this, 'block_page_checkout_item_remove_form_csrf'],
            'page_checkout_item_remove_redirect' => [$this, 'block_page_checkout_item_remove_redirect'],
            'page_checkout_item_remove_submit' => [$this, 'block_page_checkout_item_remove_submit'],
            'page_checkout_item_children' => [$this, 'block_page_checkout_item_children'],
            'page_checkout_item_child' => [$this, 'block_page_checkout_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/checkout-item.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_item', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        // line 5
        echo "
    ";
        // line 6
        $context["isDiscount"] = ( !twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 6), "totalPrice", [], "any", false, false, false, 6) <= 0));
        // line 7
        echo "    ";
        $context["isNested"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 7), "count", [], "any", false, false, false, 7) > 0);
        // line 8
        echo "    ";
        $context["childTemplate"] = "@Storefront/storefront/page/checkout/checkout-item.html.twig";
        // line 9
        echo "    ";
        $context["deliveryPosition"] = null;
        // line 10
        echo "
    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 11), "deliveries", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) > 0)) {
            // line 12
            echo "        ";
            $context["delivery"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 12), "deliveries", [], "any", false, false, false, 12), "first", [], "any", false, false, false, 12);
            // line 13
            echo "
        ";
            // line 14
            $context["deliveryPosition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "positions", [], "any", false, false, false, 14), "get", [0 => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 14)], "method", false, false, false, 14);
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('page_checkout_item_container', $context, $blocks);
        // line 294
        echo "
    ";
        // line 295
        $this->displayBlock('page_checkout_item_children', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_checkout_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_container"));

        // line 18
        echo "        <div class=\"cart-item cart-item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 18), "html", null, true);
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
            <div class=\"row cart-item-row\">
                ";
        // line 20
        $this->displayBlock('page_checkout_item_info', $context, $blocks);
        // line 163
        echo "
                ";
        // line 164
        $this->displayBlock('page_checkout_item_quantity', $context, $blocks);
        // line 225
        echo "
                ";
        // line 226
        $this->displayBlock('page_checkout_item_unit_price', $context, $blocks);
        // line 243
        echo "
                ";
        // line 244
        $this->displayBlock('page_checkout_item_total_price', $context, $blocks);
        // line 259
        echo "
                ";
        // line 260
        $this->displayBlock('page_checkout_item_remove', $context, $blocks);
        // line 291
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_checkout_item_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info"));

        // line 21
        echo "                    <div class=\"col-10 col-md cart-item-info\">
                        ";
        // line 22
        $this->displayBlock('page_checkout_item_info_inner', $context, $blocks);
        // line 161
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_checkout_item_info_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_inner"));

        // line 23
        echo "                            <div class=\"row cart-item-row\">
                                ";
        // line 24
        $this->displayBlock('page_checkout_item_info_image', $context, $blocks);
        // line 77
        echo "
                                ";
        // line 78
        $this->displayBlock('page_checkout_item_info_details', $context, $blocks);
        // line 159
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_checkout_item_info_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_image"));

        // line 25
        echo "                                    <div class=\"col-auto cart-item-info-img\">
                                        ";
        // line 26
        $this->displayBlock('page_checkout_item_info_image_container', $context, $blocks);
        // line 75
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_page_checkout_item_info_image_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_image_container"));

        // line 27
        echo "                                            <div class=\"cart-item-img-container\">
                                                ";
        // line 28
        $this->displayBlock('page_checkout_item_info_image_link', $context, $blocks);
        // line 73
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_checkout_item_info_image_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_image_link"));

        // line 29
        echo "                                                    ";
        if (($context["isDiscount"] ?? null)) {
            // line 30
            echo "                                                        <div class=\"cart-item-img cart-item-discount-icon\">
                                                            ";
            // line 31
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 31);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 34
            echo "                                                        </div>
                                                    ";
        } elseif (        // line 35
($context["isNested"] ?? null)) {
            // line 36
            echo "                                                        <div class=\"cart-item-nested-icon\">
                                                            ";
            // line 37
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 37);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 40
            echo "                                                        </div>
                                                    ";
        } else {
            // line 42
            echo "                                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"
                                                           class=\"cart-item-img-link\"
                                                           title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
                                                           ";
            // line 45
            if ((($context["controllerAction"] ?? null) === "confirmPage")) {
                // line 46
                echo "                                                           data-toggle=\"modal\"
                                                           data-modal-class=\"quickview-modal\"
                                                           data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets.quickview.minimal", ["productId" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"
                                                           ";
            }
            // line 50
            echo "                                                        >
                                                            ";
            // line 51
            $this->displayBlock('page_checkout_item_info_image_element', $context, $blocks);
            // line 70
            echo "                                                        </a>
                                                    ";
        }
        // line 72
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_page_checkout_item_info_image_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_image_element"));

        // line 52
        echo "                                                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 52), "url", [], "any", false, false, false, 52)) {
            // line 53
            echo "                                                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 53);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 54
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 54), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 60
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 60), "translated", [], "any", false, false, false, 60), "alt", [], "any", false, false, false, 60)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 60), "translated", [], "any", false, false, false, 60), "alt", [], "any", false, false, false, 60)) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 61
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 61), "translated", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 61), "translated", [], "any", false, false, false, 61), "title", [], "any", false, false, false, 61)) : (""))], "name" => "cart-item-img-thumbnails"]));
            // line 64
            echo "                                                                ";
        } else {
            // line 65
            echo "                                                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 65);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 68
            echo "                                                                ";
        }
        // line 69
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_page_checkout_item_info_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_details"));

        // line 79
        echo "                                    <div class=\"col cart-item-details\">
                                        ";
        // line 80
        $this->displayBlock('page_checkout_item_info_details_inner', $context, $blocks);
        // line 156
        echo "
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_page_checkout_item_info_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_details_inner"));

        // line 81
        echo "                                            <div class=\"cart-item-details-container\">
                                                ";
        // line 82
        $this->displayBlock('page_checkout_item_info_label', $context, $blocks);
        // line 101
        echo "
                                                ";
        // line 102
        $this->displayBlock('page_checkout_item_info_variant_characteristics', $context, $blocks);
        // line 114
        echo "
                                                ";
        // line 115
        $this->displayBlock('page_checkout_item_info_features', $context, $blocks);
        // line 122
        echo "
                                                ";
        // line 124
        echo "                                                ";
        $this->displayBlock('page_checkout_item_info_variants', $context, $blocks);
        // line 125
        echo "
                                                ";
        // line 126
        $this->displayBlock('page_checkout_item_info_ordernumber', $context, $blocks);
        // line 133
        echo "
                                                ";
        // line 134
        $this->displayBlock('page_checkout_item_delivery_date', $context, $blocks);
        // line 144
        echo "
                                                ";
        // line 145
        if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_10549") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 145), "core", [], "any", false, false, false, 145), "cart", [], "any", false, false, false, 145), "wishlistEnabled", [], "any", false, false, false, 145)) && (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 145) == "product"))) {
            // line 146
            echo "                                                    ";
            $this->displayBlock('page_checkout_item_wishlist', $context, $blocks);
            // line 153
            echo "                                                ";
        }
        // line 154
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_page_checkout_item_info_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_label"));

        // line 83
        echo "                                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 83) == "product")) {
            // line 84
            echo "                                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\"
                                                           class=\"cart-item-label\"
                                                           title=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 86), "html", null, true);
            echo "\"
                                                           ";
            // line 87
            if ((($context["controllerAction"] ?? null) === "confirmPage")) {
                // line 88
                echo "                                                           data-toggle=\"modal\"
                                                           data-modal-class=\"quickview-modal\"
                                                           data-url=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("widgets.quickview.minimal", ["productId" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\"
                                                           ";
            }
            // line 92
            echo "                                                        >
                                                            ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 93)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 93), "html", null, true);
            echo "
                                                        </a>
                                                    ";
        } else {
            // line 96
            echo "                                                        <div class=\"cart-item-label\">
                                                            ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 97)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 97), "html", null, true);
            echo "
                                                        </div>
                                                    ";
        }
        // line 100
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_page_checkout_item_info_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_variant_characteristics"));

        // line 103
        echo "                                                    <div class=\"cart-item-details-characteristics\">
                                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 104), "options", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 105
            echo "                                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 105), "html", null, true);
            echo ":
                                                            <span class=\"cart-item-details-characteristics-option\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 106), "html", null, true);
            echo "</span>

                                                            ";
            // line 108
            if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 108), "options", [], "any", false, false, false, 108)) != $context["option"])) {
                // line 109
                echo "                                                                ";
                echo " | ";
                echo "
                                                            ";
            }
            // line 111
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_page_checkout_item_info_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_features"));

        // line 116
        echo "                                                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 116) == "product") &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 116), "features", [], "any", false, false, false, 116)))) {
            // line 117
            echo "                                                        ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/page/checkout/checkout-item.html.twig", 117)->display(twig_array_merge($context, ["features" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 118
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 118), "features", [], "any", false, false, false, 118)]));
            // line 120
            echo "                                                    ";
        }
        // line 121
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_page_checkout_item_info_variants($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_variants"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_page_checkout_item_info_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_info_ordernumber"));

        // line 127
        echo "                                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 127), "productNumber", [], "any", false, false, false, 127)) {
            // line 128
            echo "                                                        <div class=\"cart-item-ordernumber\">
                                                            ";
            // line 129
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartItemInfoId"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 129), "productNumber", [], "any", false, false, false, 129), "html", null, true);
            echo "
                                                        </div>
                                                    ";
        }
        // line 132
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_page_checkout_item_delivery_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_delivery_date"));

        // line 135
        echo "                                                    ";
        if (((($context["deliveryPosition"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["deliveryPosition"] ?? null), "deliveryDate", [], "any", false, false, false, 135)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 135), "core", [], "any", false, false, false, 135), "cart", [], "any", false, false, false, 135), "showDeliveryTime", [], "any", false, false, false, 135))) {
            // line 136
            echo "                                                        <div class=\"cart-item-delivery-date\">
                                                            ";
            // line 137
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.lineItemDeliveryDate", ["%earliest%" => $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 138
($context["deliveryPosition"] ?? null), "deliveryDate", [], "any", false, false, false, 138), "earliest", [], "any", false, false, false, 138), "short", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 138), "locale", [], "any", false, false, false, 138)), "%latest%" => $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 139
($context["deliveryPosition"] ?? null), "deliveryDate", [], "any", false, false, false, 139), "latest", [], "any", false, false, false, 139), "short", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 139), "locale", [], "any", false, false, false, 139))]));
            // line 140
            echo "
                                                        </div>
                                                    ";
        }
        // line 143
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 146
    public function block_page_checkout_item_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_wishlist"));

        // line 147
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/page/checkout/checkout-item.html.twig", 147)->display(twig_array_merge($context, ["showText" => true, "size" => "sm", "productId" => twig_get_attribute($this->env, $this->source,         // line 150
($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 150)]));
        // line 152
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_page_checkout_item_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity"));

        // line 165
        echo "                    <div class=\"col-12 col-sm-4 col-md-auto cart-item-quantity\">
                        <div class=\"row cart-item-quantity-row\">
                            ";
        // line 167
        $this->displayBlock('page_checkout_item_quantity_label', $context, $blocks);
        // line 172
        echo "
                            ";
        // line 173
        $this->displayBlock('page_checkout_item_quantity_select', $context, $blocks);
        // line 222
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 167
    public function block_page_checkout_item_quantity_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_label"));

        // line 168
        echo "                                <div class=\"col-8 col-sm-12 cart-item-quantity-label\">
                                    ";
        // line 169
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 173
    public function block_page_checkout_item_quantity_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_select"));

        // line 174
        echo "                                <div class=\"col-4 col-sm-12\">
                                    ";
        // line 175
        $this->displayBlock('page_checkout_item_quantity_form', $context, $blocks);
        // line 220
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 175
    public function block_page_checkout_item_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_form"));

        // line 176
        echo "                                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 176) && twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "stackable", [], "any", false, false, false, 176)) &&  !($context["isChild"] ?? null))) {
            // line 177
            echo "                                            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.change-quantity", ["id" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 177)]), "html", null, true);
            echo "\"
                                                  class=\"cart-item-quantity-container\"
                                                  method=\"post\"
                                                  data-form-auto-submit=\"true\">

                                                ";
            // line 182
            $this->displayBlock('page_checkout_item_quantity_form_csrf', $context, $blocks);
            // line 185
            echo "
                                                ";
            // line 186
            $this->displayBlock('page_checkout_item_quantity_redirect', $context, $blocks);
            // line 191
            echo "
                                                ";
            // line 193
            echo "                                                ";
            $context["quantityInformation"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 193);
            // line 194
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 194)) {
                // line 195
                echo "                                                    ";
                $context["maxQuantity"] = twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 195);
                // line 196
                echo "                                                ";
            } else {
                // line 197
                echo "                                                    ";
                $context["maxQuantity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 197), "core", [], "any", false, false, false, 197), "cart", [], "any", false, false, false, 197), "maxQuantity", [], "any", false, false, false, 197);
                // line 198
                echo "                                                ";
            }
            // line 199
            echo "
                                                ";
            // line 200
            $this->displayBlock('page_product_detail_buy_quantity', $context, $blocks);
            // line 211
            echo "                                            </form>
                                        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 212
($context["lineItem"] ?? null), "type", [], "any", false, false, false, 212) != "promotion")) {
            // line 213
            echo "                                            ";
            $this->displayBlock('page_checkout_item_quantity_number', $context, $blocks);
            // line 218
            echo "                                        ";
        }
        // line 219
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 182
    public function block_page_checkout_item_quantity_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_form_csrf"));

        // line 183
        echo "                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.change-quantity");
        echo "
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 186
    public function block_page_checkout_item_quantity_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_redirect"));

        // line 187
        echo "                                                    <input type=\"hidden\"
                                                           name=\"redirectTo\"
                                                           value=\"frontend.checkout.cart.page\">
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_page_product_detail_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_quantity"));

        // line 201
        echo "                                                    <select name=\"quantity\"
                                                            class=\"custom-select quantity-select\">
                                                        ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 203), "minPurchase", [], "any", false, false, false, 203), ($context["maxQuantity"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 203), "purchaseSteps", [], "any", false, false, false, 203)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
            // line 204
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "\"
                                                                ";
            // line 205
            if (($context["quantity"] == twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 205))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                                ";
            // line 206
            echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "
                                                            </option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                                                    </select>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 213
    public function block_page_checkout_item_quantity_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_quantity_number"));

        // line 214
        echo "                                                <div class=\"d-flex justify-content-end cart-item-quantity\">
                                                    ";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 215), "html", null, true);
        echo "
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 226
    public function block_page_checkout_item_unit_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_unit_price"));

        // line 227
        echo "                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-unit-price\">
                        ";
        // line 228
        $this->displayBlock('page_checkout_item_unit_price_wrapper', $context, $blocks);
        // line 241
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 228
    public function block_page_checkout_item_unit_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_unit_price_wrapper"));

        // line 229
        echo "                            ";
        if (( !($context["isDiscount"] ?? null) &&  !($context["isNested"] ?? null))) {
            // line 230
            echo "                                ";
            $this->displayBlock('page_checkout_item_unit_price_label', $context, $blocks);
            // line 235
            echo "
                                ";
            // line 236
            $this->displayBlock('page_checkout_item_unit_price_inner', $context, $blocks);
            // line 239
            echo "                            ";
        }
        // line 240
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 230
    public function block_page_checkout_item_unit_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_unit_price_label"));

        // line 231
        echo "                                    <div class=\"cart-item-unit-price-label\">
                                        ";
        // line 232
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderUnitPrice"));
        echo "
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 236
    public function block_page_checkout_item_unit_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_unit_price_inner"));

        // line 237
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 237), "unitPrice", [], "any", false, false, false, 237)), "html", null, true);
        $this->displayBlock('page_checkout_item_unit_price_tax_symbol', $context, $blocks);
        // line 238
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 237
    public function block_page_checkout_item_unit_price_tax_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_unit_price_tax_symbol"));

        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 244
    public function block_page_checkout_item_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_total_price"));

        // line 245
        echo "                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-total-price\">
                        ";
        // line 246
        $this->displayBlock('page_checkout_item_total_price_wrapper', $context, $blocks);
        // line 257
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 246
    public function block_page_checkout_item_total_price_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_total_price_wrapper"));

        // line 247
        echo "                            ";
        $this->displayBlock('page_checkout_item_total_price_label', $context, $blocks);
        // line 252
        echo "
                            ";
        // line 253
        $this->displayBlock('page_checkout_item_total_price_inner', $context, $blocks);
        // line 256
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 247
    public function block_page_checkout_item_total_price_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_total_price_label"));

        // line 248
        echo "                                <div class=\"cart-item-total-price-label\">
                                    ";
        // line 249
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderTotalPrice"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 253
    public function block_page_checkout_item_total_price_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_total_price_inner"));

        // line 254
        echo "                                ";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 254), "totalPrice", [], "any", false, false, false, 254)), "html", null, true);
        $this->displayBlock('page_checkout_item_total_price_tax_symbol', $context, $blocks);
        // line 255
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 254
    public function block_page_checkout_item_total_price_tax_symbol($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_total_price_tax_symbol"));

        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 260
    public function block_page_checkout_item_remove($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_remove"));

        // line 261
        echo "                    <div class=\"col-2 col-md-1 cart-item-remove\">
                        ";
        // line 262
        $this->displayBlock('page_checkout_item_remove_form', $context, $blocks);
        // line 289
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 262
    public function block_page_checkout_item_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_remove_form"));

        // line 263
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "removable", [], "any", false, false, false, 263)) {
            // line 264
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 264)]), "html", null, true);
            echo "\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\">

                                    ";
            // line 268
            $this->displayBlock('page_checkout_item_remove_form_csrf', $context, $blocks);
            // line 271
            echo "
                                    ";
            // line 272
            $this->displayBlock('page_checkout_item_remove_redirect', $context, $blocks);
            // line 277
            echo "
                                    ";
            // line 278
            $this->displayBlock('page_checkout_item_remove_submit', $context, $blocks);
            // line 286
            echo "                                </form>
                            ";
        }
        // line 288
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 268
    public function block_page_checkout_item_remove_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_remove_form_csrf"));

        // line 269
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.delete");
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 272
    public function block_page_checkout_item_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_remove_redirect"));

        // line 273
        echo "                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.checkout.cart.page\">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 278
    public function block_page_checkout_item_remove_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_remove_submit"));

        // line 279
        echo "                                        <button type=\"submit\"
                                                title=\"";
        // line 280
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.removeLineItem")), "html", null, true);
        echo "\"
                                                data-product-id=\"";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 281), "html", null, true);
        echo "\"
                                                class=\"btn btn-light btn-sm cart-item-remove-button\">
                                            ";
        // line 283
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 283);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 284
        echo "                                        </button>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 295
    public function block_page_checkout_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_children"));

        // line 296
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lineItem"], "children", [], "any", false, false, false, 296));
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
            // line 297
            echo "            ";
            $this->displayBlock('page_checkout_item_child', $context, $blocks);
            // line 302
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
        // line 303
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 297
    public function block_page_checkout_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item_child"));

        // line 298
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName(($context["childTemplate"] ?? null)));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-item.html.twig", 298);
        })())->display(twig_array_merge($context, ["isChild" => true]));
        // line 301
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/checkout-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1318 => 301,  1309 => 298,  1302 => 297,  1295 => 303,  1281 => 302,  1278 => 297,  1260 => 296,  1253 => 295,  1245 => 284,  1237 => 283,  1232 => 281,  1228 => 280,  1225 => 279,  1218 => 278,  1208 => 273,  1201 => 272,  1191 => 269,  1184 => 268,  1177 => 288,  1173 => 286,  1171 => 278,  1168 => 277,  1166 => 272,  1163 => 271,  1161 => 268,  1153 => 264,  1150 => 263,  1143 => 262,  1135 => 289,  1133 => 262,  1130 => 261,  1123 => 260,  1110 => 254,  1103 => 255,  1099 => 254,  1092 => 253,  1082 => 249,  1079 => 248,  1072 => 247,  1065 => 256,  1063 => 253,  1060 => 252,  1057 => 247,  1050 => 246,  1042 => 257,  1040 => 246,  1037 => 245,  1030 => 244,  1017 => 237,  1010 => 238,  1006 => 237,  999 => 236,  989 => 232,  986 => 231,  979 => 230,  972 => 240,  969 => 239,  967 => 236,  964 => 235,  961 => 230,  958 => 229,  951 => 228,  943 => 241,  941 => 228,  938 => 227,  931 => 226,  921 => 215,  918 => 214,  911 => 213,  903 => 209,  894 => 206,  888 => 205,  883 => 204,  879 => 203,  875 => 201,  868 => 200,  858 => 187,  851 => 186,  841 => 183,  834 => 182,  827 => 219,  824 => 218,  821 => 213,  819 => 212,  816 => 211,  814 => 200,  811 => 199,  808 => 198,  805 => 197,  802 => 196,  799 => 195,  796 => 194,  793 => 193,  790 => 191,  788 => 186,  785 => 185,  783 => 182,  774 => 177,  771 => 176,  764 => 175,  756 => 220,  754 => 175,  751 => 174,  744 => 173,  734 => 169,  731 => 168,  724 => 167,  715 => 222,  713 => 173,  710 => 172,  708 => 167,  704 => 165,  697 => 164,  690 => 152,  688 => 150,  686 => 147,  679 => 146,  672 => 143,  667 => 140,  665 => 139,  664 => 138,  663 => 137,  660 => 136,  657 => 135,  650 => 134,  643 => 132,  635 => 129,  632 => 128,  629 => 127,  622 => 126,  610 => 124,  603 => 121,  600 => 120,  598 => 118,  596 => 117,  593 => 116,  586 => 115,  578 => 112,  572 => 111,  566 => 109,  564 => 108,  559 => 106,  554 => 105,  550 => 104,  547 => 103,  540 => 102,  533 => 100,  527 => 97,  524 => 96,  518 => 93,  515 => 92,  510 => 90,  506 => 88,  504 => 87,  500 => 86,  494 => 84,  491 => 83,  484 => 82,  476 => 154,  473 => 153,  470 => 146,  468 => 145,  465 => 144,  463 => 134,  460 => 133,  458 => 126,  455 => 125,  452 => 124,  449 => 122,  447 => 115,  444 => 114,  442 => 102,  439 => 101,  437 => 82,  434 => 81,  427 => 80,  418 => 156,  416 => 80,  413 => 79,  406 => 78,  399 => 69,  396 => 68,  387 => 65,  384 => 64,  382 => 61,  381 => 60,  380 => 54,  372 => 53,  369 => 52,  362 => 51,  355 => 72,  351 => 70,  349 => 51,  346 => 50,  341 => 48,  337 => 46,  335 => 45,  331 => 44,  325 => 42,  321 => 40,  313 => 37,  310 => 36,  308 => 35,  305 => 34,  297 => 31,  294 => 30,  291 => 29,  284 => 28,  276 => 73,  274 => 28,  271 => 27,  264 => 26,  256 => 75,  254 => 26,  251 => 25,  244 => 24,  236 => 159,  234 => 78,  231 => 77,  229 => 24,  226 => 23,  219 => 22,  211 => 161,  209 => 22,  206 => 21,  199 => 20,  190 => 291,  188 => 260,  185 => 259,  183 => 244,  180 => 243,  178 => 226,  175 => 225,  173 => 164,  170 => 163,  168 => 20,  153 => 18,  146 => 17,  139 => 295,  136 => 294,  134 => 17,  131 => 16,  128 => 15,  126 => 14,  123 => 13,  120 => 12,  118 => 11,  115 => 10,  112 => 9,  109 => 8,  106 => 7,  104 => 6,  101 => 5,  99 => 4,  97 => 3,  95 => 2,  82 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_item %}
    {# @var page \\Shopware\\Storefront\\Page\\Checkout\\Cart\\CheckoutCartPage #}
    {# @var delivery \\Shopware\\Core\\Checkout\\Cart\\Delivery\\Struct\\Delivery #}
    {# @var lineItem \\Shopware\\Core\\Checkout\\Cart\\LineItem\\LineItem #}

    {% set isDiscount = (not lineItem.good and lineItem.price.totalPrice <= 0) %}
    {% set isNested = lineItem.children.count > 0 %}
    {% set childTemplate = '@Storefront/storefront/page/checkout/checkout-item.html.twig' %}
    {% set deliveryPosition = null %}

    {% if page.cart.deliveries.count > 0 %}
        {% set delivery = page.cart.deliveries.first %}

        {% set deliveryPosition = delivery.positions.get(lineItem.id) %}
    {% endif %}

    {% block page_checkout_item_container %}
        <div class=\"cart-item cart-item-{{ lineItem.type }}{% if isDiscount %} is-discount{% endif %}{% if isNested %} is-nested{% endif %}{% if isChild %} is-child{% endif %}\">
            <div class=\"row cart-item-row\">
                {% block page_checkout_item_info %}
                    <div class=\"col-10 col-md cart-item-info\">
                        {% block page_checkout_item_info_inner %}
                            <div class=\"row cart-item-row\">
                                {% block page_checkout_item_info_image %}
                                    <div class=\"col-auto cart-item-info-img\">
                                        {% block page_checkout_item_info_image_container %}
                                            <div class=\"cart-item-img-container\">
                                                {% block page_checkout_item_info_image_link %}
                                                    {% if isDiscount %}
                                                        <div class=\"cart-item-img cart-item-discount-icon\">
                                                            {% sw_icon 'marketing' style {
                                                                'color': 'success'
                                                            } %}
                                                        </div>
                                                    {% elseif isNested %}
                                                        <div class=\"cart-item-nested-icon\">
                                                            {% sw_icon 'bag-product' style {
                                                                'color': 'light'
                                                            } %}
                                                        </div>
                                                    {% else %}
                                                        <a href=\"{{ seoUrl('frontend.detail.page', {'productId': lineItem.referencedId}) }}\"
                                                           class=\"cart-item-img-link\"
                                                           title=\"{{ lineItem.label }}\"
                                                           {% if controllerAction is same as('confirmPage') %}
                                                           data-toggle=\"modal\"
                                                           data-modal-class=\"quickview-modal\"
                                                           data-url=\"{{ path('widgets.quickview.minimal', { 'productId': lineItem.referencedId }) }}\"
                                                           {% endif %}
                                                        >
                                                            {% block page_checkout_item_info_image_element %}
                                                                {% if lineItem.cover.url %}
                                                                    {% sw_thumbnails 'cart-item-img-thumbnails' with {
                                                                        media: lineItem.cover,
                                                                        sizes: {
                                                                            'default': '100px'
                                                                        },
                                                                        attributes: {
                                                                            'class': 'img-fluid cart-item-img',
                                                                            'alt': (lineItem.cover.translated.alt ?: ''),
                                                                            'title': (lineItem.cover.translated.title ?: '')
                                                                        }
                                                                    } %}
                                                                {% else %}
                                                                    {% sw_icon 'placeholder' style {
                                                                        'size': 'fluid'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </a>
                                                    {% endif %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block page_checkout_item_info_details %}
                                    <div class=\"col cart-item-details\">
                                        {% block page_checkout_item_info_details_inner %}
                                            <div class=\"cart-item-details-container\">
                                                {% block page_checkout_item_info_label %}
                                                    {% if lineItem.type == 'product' %}
                                                        <a href=\"{{ seoUrl('frontend.detail.page', {'productId': lineItem.referencedId}) }}\"
                                                           class=\"cart-item-label\"
                                                           title=\"{{ lineItem.label }}\"
                                                           {% if controllerAction is same as('confirmPage') %}
                                                           data-toggle=\"modal\"
                                                           data-modal-class=\"quickview-modal\"
                                                           data-url=\"{{ path('widgets.quickview.minimal',{ 'productId': lineItem.referencedId }) }}\"
                                                           {% endif %}
                                                        >
                                                            {{ lineItem.label|u.truncate(60, '...', false) }}
                                                        </a>
                                                    {% else %}
                                                        <div class=\"cart-item-label\">
                                                            {{ lineItem.label|u.truncate(60, '...', false) }}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}

                                                {% block page_checkout_item_info_variant_characteristics %}
                                                    <div class=\"cart-item-details-characteristics\">
                                                        {% for option in lineItem.payload.options %}
                                                            {{ option.group }}:
                                                            <span class=\"cart-item-details-characteristics-option\">{{ option.option }}</span>

                                                            {% if lineItem.payload.options|last != option %}
                                                                {{ \" | \" }}
                                                            {% endif %}
                                                        {% endfor %}
                                                    </div>
                                                {% endblock %}

                                                {% block page_checkout_item_info_features %}
                                                    {% if lineItem.type == 'product' and lineItem.payload.features is not null %}
                                                        {% sw_include '@Storefront/storefront/component/product/feature/list.html.twig' with {
                                                            'features': lineItem.payload.features
                                                        } %}
                                                    {% endif %}
                                                {% endblock %}

                                                {# @deprecated tag:v6.4.0.0 #}
                                                {% block page_checkout_item_info_variants %}{% endblock %}

                                                {% block page_checkout_item_info_ordernumber %}
                                                    {% if lineItem.payload.productNumber %}
                                                        <div class=\"cart-item-ordernumber\">
                                                            {{ \"checkout.cartItemInfoId\"|trans|sw_sanitize }} {{ lineItem.payload.productNumber }}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}

                                                {% block page_checkout_item_delivery_date %}
                                                    {% if deliveryPosition and deliveryPosition.deliveryDate and shopware.config.core.cart.showDeliveryTime %}
                                                        <div class=\"cart-item-delivery-date\">
                                                            {{ \"checkout.lineItemDeliveryDate\"|trans({
                                                                '%earliest%': deliveryPosition.deliveryDate.earliest|format_date('short', locale=app.request.locale),
                                                                '%latest%': deliveryPosition.deliveryDate.latest|format_date('short', locale=app.request.locale)
                                                            })|sw_sanitize }}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}

                                                {% if feature('FEATURE_NEXT_10549') and shopware.config.core.cart.wishlistEnabled and lineItem.type == 'product' %}
                                                    {% block page_checkout_item_wishlist %}
                                                        {% sw_include '@Storefront/storefront/component/product/card/wishlist.html.twig' with {
                                                            showText: true,
                                                            size: 'sm',
                                                            productId: lineItem.referencedId
                                                        } %}
                                                    {% endblock %}
                                                {% endif %}
                                            </div>
                                        {% endblock %}

                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_checkout_item_quantity %}
                    <div class=\"col-12 col-sm-4 col-md-auto cart-item-quantity\">
                        <div class=\"row cart-item-quantity-row\">
                            {% block page_checkout_item_quantity_label %}
                                <div class=\"col-8 col-sm-12 cart-item-quantity-label\">
                                    {{ \"checkout.cartHeaderQuantity\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_checkout_item_quantity_select %}
                                <div class=\"col-4 col-sm-12\">
                                    {% block page_checkout_item_quantity_form %}
                                        {% if lineItem.quantityInformation and lineItem.stackable and not isChild %}
                                            <form action=\"{{ path('frontend.checkout.line-item.change-quantity', {'id': lineItem.id}) }}\"
                                                  class=\"cart-item-quantity-container\"
                                                  method=\"post\"
                                                  data-form-auto-submit=\"true\">

                                                {% block page_checkout_item_quantity_form_csrf %}
                                                    {{ sw_csrf('frontend.checkout.line-item.change-quantity') }}
                                                {% endblock %}

                                                {% block page_checkout_item_quantity_redirect %}
                                                    <input type=\"hidden\"
                                                           name=\"redirectTo\"
                                                           value=\"frontend.checkout.cart.page\">
                                                {% endblock %}

                                                {# @var quantityInformation \\Shopware\\Core\\Checkout\\Cart\\LineItem\\QuantityInformation #}
                                                {% set quantityInformation = lineItem.quantityInformation %}
                                                {% if quantityInformation.maxPurchase %}
                                                    {% set maxQuantity = quantityInformation.maxPurchase %}
                                                {% else %}
                                                    {% set maxQuantity = shopware.config.core.cart.maxQuantity %}
                                                {% endif %}

                                                {% block page_product_detail_buy_quantity %}
                                                    <select name=\"quantity\"
                                                            class=\"custom-select quantity-select\">
                                                        {% for quantity in range(lineItem.quantityInformation.minPurchase, maxQuantity, lineItem.quantityInformation.purchaseSteps) %}
                                                            <option value=\"{{ quantity }}\"
                                                                {% if quantity == lineItem.quantity %} selected=\"selected\"{% endif %}>
                                                                {{ quantity }}
                                                            </option>
                                                        {% endfor %}
                                                    </select>
                                                {% endblock %}
                                            </form>
                                        {% elseif lineItem.type != \"promotion\" %}
                                            {% block page_checkout_item_quantity_number %}
                                                <div class=\"d-flex justify-content-end cart-item-quantity\">
                                                    {{ lineItem.quantity }}
                                                </div>
                                            {% endblock %}
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}

                {% block page_checkout_item_unit_price %}
                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-unit-price\">
                        {% block page_checkout_item_unit_price_wrapper %}
                            {% if not isDiscount and not isNested %}
                                {% block page_checkout_item_unit_price_label %}
                                    <div class=\"cart-item-unit-price-label\">
                                        {{ \"checkout.cartHeaderUnitPrice\"|trans|sw_sanitize }}
                                    </div>
                                {% endblock %}

                                {% block page_checkout_item_unit_price_inner %}
                                    {{ lineItem.price.unitPrice|currency }}{% block page_checkout_item_unit_price_tax_symbol %}{{ \"general.star\"|trans|sw_sanitize }}{% endblock %}
                                {% endblock %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_checkout_item_total_price %}
                    <div class=\"col-12 col-sm-4 col-md-2 cart-item-total-price\">
                        {% block page_checkout_item_total_price_wrapper %}
                            {% block page_checkout_item_total_price_label %}
                                <div class=\"cart-item-total-price-label\">
                                    {{ \"checkout.cartHeaderTotalPrice\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_checkout_item_total_price_inner %}
                                {{ lineItem.price.totalPrice|currency }}{% block page_checkout_item_total_price_tax_symbol %}{{ \"general.star\"|trans|sw_sanitize }}{% endblock %}
                            {% endblock %}
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_checkout_item_remove %}
                    <div class=\"col-2 col-md-1 cart-item-remove\">
                        {% block page_checkout_item_remove_form %}
                            {% if lineItem.removable %}
                                <form action=\"{{ path('frontend.checkout.line-item.delete', {'id': lineItem.id}) }}\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\">

                                    {% block page_checkout_item_remove_form_csrf %}
                                        {{ sw_csrf('frontend.checkout.line-item.delete') }}
                                    {% endblock %}

                                    {% block page_checkout_item_remove_redirect %}
                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.checkout.cart.page\">
                                    {% endblock %}

                                    {% block page_checkout_item_remove_submit %}
                                        <button type=\"submit\"
                                                title=\"{{ \"checkout.removeLineItem\"|trans|striptags }}\"
                                                data-product-id=\"{{ lineItem.id }}\"
                                                class=\"btn btn-light btn-sm cart-item-remove-button\">
                                            {% sw_icon 'x' style { 'size': 'sm' } %}
                                        </button>
                                    {% endblock %}
                                </form>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block page_checkout_item_children %}
        {% for lineItem in lineItem.children %}
            {% block page_checkout_item_child %}
                {% sw_include childTemplate with {
                    'isChild': true
                } %}
            {% endblock %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/checkout/checkout-item.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/checkout-item.html.twig");
    }
}
