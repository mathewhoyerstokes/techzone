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

/* @Storefront/storefront/component/checkout/offcanvas-item.html.twig */
class __TwigTemplate_c8693e00ee82ad8cc0fc327d31eba37f34fe760205915b4db3321744e91c2eb3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_offcanvas_cart_item_inner' => [$this, 'block_component_offcanvas_cart_item_inner'],
            'component_offcanvas_cart_item_container' => [$this, 'block_component_offcanvas_cart_item_container'],
            'component_offcanvas_product_image' => [$this, 'block_component_offcanvas_product_image'],
            'component_offcanvas_product_image_inner' => [$this, 'block_component_offcanvas_product_image_inner'],
            'component_offcanvas_product_details' => [$this, 'block_component_offcanvas_product_details'],
            'component_offcanvas_product_details_inner' => [$this, 'block_component_offcanvas_product_details_inner'],
            'component_offcanvas_product_label' => [$this, 'block_component_offcanvas_product_label'],
            'cart_item_variant_characteristics' => [$this, 'block_cart_item_variant_characteristics'],
            'component_offcanvas_product_details_features' => [$this, 'block_component_offcanvas_product_details_features'],
            'component_offcanvas_product_variants' => [$this, 'block_component_offcanvas_product_variants'],
            'component_offcanvas_product_quantity_price' => [$this, 'block_component_offcanvas_product_quantity_price'],
            'component_offcanvas_product_quantity' => [$this, 'block_component_offcanvas_product_quantity'],
            'component_offcanvas_product_quantity_form' => [$this, 'block_component_offcanvas_product_quantity_form'],
            'component_offcanvas_product_quantity_form_csrf' => [$this, 'block_component_offcanvas_product_quantity_form_csrf'],
            'component_offcanvas_product_quantity_form_redirect' => [$this, 'block_component_offcanvas_product_quantity_form_redirect'],
            'component_offcanvas_product_buy_quantity' => [$this, 'block_component_offcanvas_product_buy_quantity'],
            'component_offcanvas_product_total_price' => [$this, 'block_component_offcanvas_product_total_price'],
            'component_offcanvas_product_remove' => [$this, 'block_component_offcanvas_product_remove'],
            'component_offcanvas_product_remove_form' => [$this, 'block_component_offcanvas_product_remove_form'],
            'component_offcanvas_product_remove_form_csrf' => [$this, 'block_component_offcanvas_product_remove_form_csrf'],
            'component_offcanvas_product_remove_redirect' => [$this, 'block_component_offcanvas_product_remove_redirect'],
            'component_offcanvas_product_remove_submit' => [$this, 'block_component_offcanvas_product_remove_submit'],
            'component_offcanvas_cart_item_children' => [$this, 'block_component_offcanvas_cart_item_children'],
            'component_offcanvas_cart_item_child' => [$this, 'block_component_offcanvas_cart_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig"));

        // line 1
        $this->displayBlock('component_offcanvas_cart_item_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_offcanvas_cart_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_inner"));

        // line 2
        echo "    ";
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["isDiscount"] = ( !twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 3) && (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 3) <= 0));
        // line 4
        echo "    ";
        $context["isNested"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4) > 0);
        // line 5
        echo "    ";
        $context["label"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 5);
        // line 6
        echo "    ";
        $context["referencedId"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 6);
        // line 7
        echo "    ";
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["quantity"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 8);
        // line 9
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 9);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('component_offcanvas_cart_item_container', $context, $blocks);
        // line 198
        echo "
    ";
        // line 199
        $this->displayBlock('component_offcanvas_cart_item_children', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_component_offcanvas_cart_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_container"));

        // line 12
        echo "        <div class=\"cart-item cart-item-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        if (($context["isNested"] ?? null)) {
            echo " is-nested";
        }
        if (($context["isChild"] ?? null)) {
            echo " is-child";
        }
        echo " js-cart-item\">
            <div class=\"row cart-item-row\">
                ";
        // line 14
        $this->displayBlock('component_offcanvas_product_image', $context, $blocks);
        // line 57
        echo "
                ";
        // line 58
        $this->displayBlock('component_offcanvas_product_details', $context, $blocks);
        // line 163
        echo "
                ";
        // line 164
        $this->displayBlock('component_offcanvas_product_remove', $context, $blocks);
        // line 195
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_component_offcanvas_product_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_image"));

        // line 15
        echo "                    <div class=\"col-auto\">
                        ";
        // line 16
        $this->displayBlock('component_offcanvas_product_image_inner', $context, $blocks);
        // line 55
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_component_offcanvas_product_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_image_inner"));

        // line 17
        echo "                            <div class=\"cart-item-img\">
                                ";
        // line 18
        if (($context["isDiscount"] ?? null)) {
            // line 19
            echo "                                    <div class=\"cart-item-discount-icon\">
                                        ";
            // line 20
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 20);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 23
            echo "                                    </div>
                                ";
        } elseif (        // line 24
($context["isNested"] ?? null)) {
            // line 25
            echo "                                    <div class=\"cart-item-nested-icon\">
                                        ";
            // line 26
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 26);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 29
            echo "                                    </div>
                                ";
        } else {
            // line 31
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                       class=\"cart-item-img-link\"
                                       title=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 34), "url", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 35);
                })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,                 // line 36
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 36), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img-source", "alt" =>                 // line 42
($context["label"] ?? null), "title" =>                 // line 43
($context["label"] ?? null)], "name" => "cart-item-img-thumbnails"]));
                // line 46
                echo "                                        ";
            } else {
                // line 47
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 47);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 50
                echo "                                        ";
            }
            // line 51
            echo "                                    </a>
                                ";
        }
        // line 53
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_component_offcanvas_product_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details"));

        // line 59
        echo "                    <div class=\"col cart-item-details\">
                        ";
        // line 60
        $this->displayBlock('component_offcanvas_product_details_inner', $context, $blocks);
        // line 161
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_component_offcanvas_product_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details_inner"));

        // line 61
        echo "                            <div class=\"cart-item-details-container\">
                                ";
        // line 62
        $this->displayBlock('component_offcanvas_product_label', $context, $blocks);
        // line 77
        echo "
                                ";
        // line 78
        $this->displayBlock('cart_item_variant_characteristics', $context, $blocks);
        // line 90
        echo "
                                ";
        // line 91
        $this->displayBlock('component_offcanvas_product_details_features', $context, $blocks);
        // line 98
        echo "
                                ";
        // line 100
        echo "                                ";
        $this->displayBlock('component_offcanvas_product_variants', $context, $blocks);
        // line 101
        echo "
                                ";
        // line 102
        $this->displayBlock('component_offcanvas_product_quantity_price', $context, $blocks);
        // line 159
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_component_offcanvas_product_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_label"));

        // line 63
        echo "                                    <div class=\"cart-item-details\">
                                        ";
        // line 64
        if ((($context["type"] ?? null) == "product")) {
            // line 65
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                               class=\"cart-item-label\"
                                               title=\"";
            // line 67
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                                ";
            // line 68
            echo twig_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.quantityTimes"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 68), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 71
            echo "                                            <div class=\"cart-item-label\">
                                                ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60, 1 => "...", 2 => false], "method", false, false, false, 72), "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        // line 75
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_cart_item_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_item_variant_characteristics"));

        // line 79
        echo "                                    <div class=\"cart-item-characteristics\">
                                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 80), "options", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 81
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 81), "html", null, true);
            echo ":
                                            <span class=\"cart-item-characteristics-option\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 82), "html", null, true);
            echo "</span>

                                            ";
            // line 84
            if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 84), "options", [], "any", false, false, false, 84)) != $context["option"])) {
                // line 85
                echo "                                                ";
                echo " | ";
                echo "
                                            ";
            }
            // line 87
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 91
    public function block_component_offcanvas_product_details_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details_features"));

        // line 92
        echo "                                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 92) == "product") &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 92), "features", [], "any", false, false, false, 92)))) {
            // line 93
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 93)->display(twig_array_merge($context, ["features" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 94
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 94), "features", [], "any", false, false, false, 94)]));
            // line 96
            echo "                                    ";
        }
        // line 97
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_component_offcanvas_product_variants($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_variants"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_component_offcanvas_product_quantity_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_price"));

        // line 103
        echo "                                    <div class=\"cart-quantity-price\">
                                        ";
        // line 104
        $this->displayBlock('component_offcanvas_product_quantity', $context, $blocks);
        // line 145
        echo "
                                        ";
        // line 146
        $this->displayBlock('component_offcanvas_product_total_price', $context, $blocks);
        // line 157
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_component_offcanvas_product_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity"));

        // line 105
        echo "                                            <div class=\"cart-item-quantity\">
                                                ";
        // line 106
        $this->displayBlock('component_offcanvas_product_quantity_form', $context, $blocks);
        // line 143
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_component_offcanvas_product_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form"));

        // line 107
        echo "                                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 107) && twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "stackable", [], "any", false, false, false, 107))) {
            // line 108
            echo "                                                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.change-quantity", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                                              class=\"cart-item-quantity-container\"
                                                              method=\"post\">

                                                            ";
            // line 112
            $this->displayBlock('component_offcanvas_product_quantity_form_csrf', $context, $blocks);
            // line 115
            echo "
                                                            ";
            // line 116
            $this->displayBlock('component_offcanvas_product_quantity_form_redirect', $context, $blocks);
            // line 121
            echo "
                                                            ";
            // line 122
            $context["quantityInformation"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 122);
            // line 123
            echo "                                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 123)) {
                // line 124
                echo "                                                                ";
                $context["maxQuantity"] = twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 124);
                // line 125
                echo "                                                            ";
            } else {
                // line 126
                echo "                                                                ";
                $context["maxQuantity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 126), "core", [], "any", false, false, false, 126), "cart", [], "any", false, false, false, 126), "maxQuantity", [], "any", false, false, false, 126);
                // line 127
                echo "                                                            ";
            }
            // line 128
            echo "
                                                            ";
            // line 129
            $this->displayBlock('component_offcanvas_product_buy_quantity', $context, $blocks);
            // line 140
            echo "                                                        </form>
                                                    ";
        }
        // line 142
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 112
    public function block_component_offcanvas_product_quantity_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form_csrf"));

        // line 113
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.change-quantity");
        echo "
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_component_offcanvas_product_quantity_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form_redirect"));

        // line 117
        echo "                                                                <input type=\"hidden\"
                                                                       name=\"redirectTo\"
                                                                       value=\"frontend.cart.offcanvas\"/>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_component_offcanvas_product_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_buy_quantity"));

        // line 130
        echo "                                                                <select name=\"quantity\"
                                                                        class=\"custom-select quantity-select-";
        // line 131
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " js-offcanvas-cart-change-quantity\">
                                                                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 132), ($context["maxQuantity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 132)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantityItem"]) {
            // line 133
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "\"
                                                                            ";
            // line 134
            if (($context["quantityItem"] == ($context["quantity"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                                            ";
            // line 135
            echo twig_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "
                                                                        </option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantityItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                                                </select>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 146
    public function block_component_offcanvas_product_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_total_price"));

        // line 147
        echo "                                            <div class=\"cart-item-price\">
                                                ";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 148)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                                                ";
        // line 149
        $context["referencePrice"] = twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 149);
        // line 150
        echo "                                                ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 151
            echo "                                                    <small class=\"cart-item-reference-price\">
                                                        (";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 152)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 152), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 152), "html", null, true);
            echo ")
                                                    </small>
                                                ";
        }
        // line 155
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_component_offcanvas_product_remove($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove"));

        // line 165
        echo "                    <div class=\"cart-item-remove\">
                        ";
        // line 166
        $this->displayBlock('component_offcanvas_product_remove_form', $context, $blocks);
        // line 193
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_component_offcanvas_product_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_form"));

        // line 167
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "removable", [], "any", false, false, false, 167)) {
            // line 168
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.delete", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                      class=\"cart-item-remove js-offcanvas-cart-remove-product\"
                                      method=\"post\">

                                    ";
            // line 172
            $this->displayBlock('component_offcanvas_product_remove_form_csrf', $context, $blocks);
            // line 175
            echo "
                                    ";
            // line 176
            $this->displayBlock('component_offcanvas_product_remove_redirect', $context, $blocks);
            // line 181
            echo "
                                    ";
            // line 182
            $this->displayBlock('component_offcanvas_product_remove_submit', $context, $blocks);
            // line 190
            echo "                                </form>
                            ";
        }
        // line 192
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 172
    public function block_component_offcanvas_product_remove_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_form_csrf"));

        // line 173
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.delete");
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 176
    public function block_component_offcanvas_product_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_redirect"));

        // line 177
        echo "                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.cart.offcanvas\"/>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 182
    public function block_component_offcanvas_product_remove_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_submit"));

        // line 183
        echo "                                        <button type=\"submit\"
                                                title=\"";
        // line 184
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.removeLineItem")), "html", null, true);
        echo "\"
                                                data-product-id=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 185), "html", null, true);
        echo "\"
                                                class=\"btn btn-light cart-item-remove-button\">
                                            ";
        // line 187
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 187);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 188
        echo "                                        </button>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 199
    public function block_component_offcanvas_cart_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_children"));

        // line 200
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lineItem"], "children", [], "any", false, false, false, 200));
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
            // line 201
            echo "            ";
            $this->displayBlock('component_offcanvas_cart_item_child', $context, $blocks);
            // line 206
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
        // line 207
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 201
    public function block_component_offcanvas_cart_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_child"));

        // line 202
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 202)->display(twig_array_merge($context, ["isChild" => true]));
        // line 205
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  881 => 205,  878 => 202,  871 => 201,  864 => 207,  850 => 206,  847 => 201,  829 => 200,  822 => 199,  814 => 188,  806 => 187,  801 => 185,  797 => 184,  794 => 183,  787 => 182,  777 => 177,  770 => 176,  760 => 173,  753 => 172,  746 => 192,  742 => 190,  740 => 182,  737 => 181,  735 => 176,  732 => 175,  730 => 172,  722 => 168,  719 => 167,  712 => 166,  704 => 193,  702 => 166,  699 => 165,  692 => 164,  684 => 155,  673 => 152,  670 => 151,  667 => 150,  665 => 149,  660 => 148,  657 => 147,  650 => 146,  642 => 138,  633 => 135,  627 => 134,  622 => 133,  618 => 132,  614 => 131,  611 => 130,  604 => 129,  594 => 117,  587 => 116,  577 => 113,  570 => 112,  563 => 142,  559 => 140,  557 => 129,  554 => 128,  551 => 127,  548 => 126,  545 => 125,  542 => 124,  539 => 123,  537 => 122,  534 => 121,  532 => 116,  529 => 115,  527 => 112,  519 => 108,  516 => 107,  509 => 106,  501 => 143,  499 => 106,  496 => 105,  489 => 104,  481 => 157,  479 => 146,  476 => 145,  474 => 104,  471 => 103,  464 => 102,  452 => 100,  445 => 97,  442 => 96,  440 => 94,  438 => 93,  435 => 92,  428 => 91,  420 => 88,  414 => 87,  408 => 85,  406 => 84,  401 => 82,  396 => 81,  392 => 80,  389 => 79,  382 => 78,  374 => 75,  368 => 72,  365 => 71,  356 => 68,  352 => 67,  346 => 65,  344 => 64,  341 => 63,  334 => 62,  326 => 159,  324 => 102,  321 => 101,  318 => 100,  315 => 98,  313 => 91,  310 => 90,  308 => 78,  305 => 77,  303 => 62,  300 => 61,  293 => 60,  285 => 161,  283 => 60,  280 => 59,  273 => 58,  265 => 53,  261 => 51,  258 => 50,  249 => 47,  246 => 46,  244 => 43,  243 => 42,  242 => 36,  234 => 35,  232 => 34,  228 => 33,  222 => 31,  218 => 29,  210 => 26,  207 => 25,  205 => 24,  202 => 23,  194 => 20,  191 => 19,  189 => 18,  186 => 17,  179 => 16,  171 => 55,  169 => 16,  166 => 15,  159 => 14,  150 => 195,  148 => 164,  145 => 163,  143 => 58,  140 => 57,  138 => 14,  123 => 12,  116 => 11,  109 => 199,  106 => 198,  104 => 11,  101 => 10,  98 => 9,  95 => 8,  92 => 7,  89 => 6,  86 => 5,  83 => 4,  80 => 3,  77 => 2,  64 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_offcanvas_cart_item_inner %}
    {% set price = lineItem.price %}
    {% set isDiscount = (not lineItem.good and price.totalPrice <= 0) %}
    {% set isNested = lineItem.children.count > 0 %}
    {% set label = lineItem.label %}
    {% set referencedId = lineItem.referencedId %}
    {% set type = lineItem.type %}
    {% set quantity = lineItem.quantity %}
    {% set id = lineItem.id %}

    {% block component_offcanvas_cart_item_container %}
        <div class=\"cart-item cart-item-{{ type }}{% if isDiscount %} is-discount{% endif %}{% if isNested %} is-nested{% endif %}{% if isChild %} is-child{% endif %} js-cart-item\">
            <div class=\"row cart-item-row\">
                {% block component_offcanvas_product_image %}
                    <div class=\"col-auto\">
                        {% block component_offcanvas_product_image_inner %}
                            <div class=\"cart-item-img\">
                                {% if isDiscount %}
                                    <div class=\"cart-item-discount-icon\">
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
                                    <a href=\"{{ seoUrl('frontend.detail.page', {'productId': referencedId}) }}\"
                                       class=\"cart-item-img-link\"
                                       title=\"{{ label }}\">
                                        {% if lineItem.cover.url %}
                                            {% sw_thumbnails 'cart-item-img-thumbnails' with {
                                                media: lineItem.cover,
                                                sizes: {
                                                    'default': '100px'
                                                },
                                                attributes: {
                                                    'class': 'img-fluid cart-item-img-source',
                                                    'alt': label,
                                                    'title': label
                                                }
                                            } %}
                                        {% else %}
                                            {% sw_icon 'placeholder' style {
                                                'size': 'fluid'
                                            } %}
                                        {% endif %}
                                    </a>
                                {% endif %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block component_offcanvas_product_details %}
                    <div class=\"col cart-item-details\">
                        {% block component_offcanvas_product_details_inner %}
                            <div class=\"cart-item-details-container\">
                                {% block component_offcanvas_product_label %}
                                    <div class=\"cart-item-details\">
                                        {% if type == 'product' %}
                                            <a href=\"{{ seoUrl('frontend.detail.page', {'productId': referencedId}) }}\"
                                               class=\"cart-item-label\"
                                               title=\"{{ label }}\">
                                                {{ quantity }}{{ \"checkout.quantityTimes\"|trans|sw_sanitize }} {{ label|u.truncate(60, '...', false) }}
                                            </a>
                                        {% else %}
                                            <div class=\"cart-item-label\">
                                                {{ label|u.truncate(60, '...', false) }}
                                            </div>
                                        {% endif  %}
                                    </div>
                                {% endblock %}

                                {% block cart_item_variant_characteristics %}
                                    <div class=\"cart-item-characteristics\">
                                        {% for option in lineItem.payload.options %}
                                            {{ option.group }}:
                                            <span class=\"cart-item-characteristics-option\">{{ option.option }}</span>

                                            {% if lineItem.payload.options|last != option %}
                                                {{ \" | \" }}
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                {% endblock %}

                                {% block component_offcanvas_product_details_features %}
                                    {% if lineItem.type == 'product' and lineItem.payload.features is not null %}
                                        {% sw_include '@Storefront/storefront/component/product/feature/list.html.twig' with {
                                            'features': lineItem.payload.features
                                        } %}
                                    {% endif %}
                                {% endblock %}

                                {# @deprecated tag:v6.4.0.0 #}
                                {% block component_offcanvas_product_variants %}{% endblock %}

                                {% block component_offcanvas_product_quantity_price %}
                                    <div class=\"cart-quantity-price\">
                                        {% block component_offcanvas_product_quantity %}
                                            <div class=\"cart-item-quantity\">
                                                {% block component_offcanvas_product_quantity_form %}
                                                    {% if lineItem.quantityInformation and lineItem.stackable %}
                                                        <form action=\"{{ path('frontend.checkout.line-item.change-quantity', {'id': id}) }}\"
                                                              class=\"cart-item-quantity-container\"
                                                              method=\"post\">

                                                            {% block component_offcanvas_product_quantity_form_csrf %}
                                                                {{ sw_csrf('frontend.checkout.line-item.change-quantity') }}
                                                            {% endblock %}

                                                            {% block component_offcanvas_product_quantity_form_redirect %}
                                                                <input type=\"hidden\"
                                                                       name=\"redirectTo\"
                                                                       value=\"frontend.cart.offcanvas\"/>
                                                            {% endblock %}

                                                            {% set quantityInformation = lineItem.quantityInformation %}
                                                            {% if quantityInformation.maxPurchase %}
                                                                {% set maxQuantity = quantityInformation.maxPurchase %}
                                                            {% else %}
                                                                {% set maxQuantity = shopware.config.core.cart.maxQuantity %}
                                                            {% endif %}

                                                            {% block component_offcanvas_product_buy_quantity %}
                                                                <select name=\"quantity\"
                                                                        class=\"custom-select quantity-select-{{ id }} js-offcanvas-cart-change-quantity\">
                                                                    {% for quantityItem in range(quantityInformation.minPurchase, maxQuantity, quantityInformation.purchaseSteps) %}
                                                                        <option value=\"{{ quantityItem }}\"
                                                                            {% if quantityItem == quantity %} selected=\"selected\"{% endif %}>
                                                                            {{ quantityItem }}
                                                                        </option>
                                                                    {% endfor %}
                                                                </select>
                                                            {% endblock %}
                                                        </form>
                                                    {% endif %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block component_offcanvas_product_total_price %}
                                            <div class=\"cart-item-price\">
                                                {{ price.totalPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                                                {% set referencePrice = price.referencePrice %}
                                                {% if referencePrice is not null %}
                                                    <small class=\"cart-item-reference-price\">
                                                        ({{ referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referencePrice.referenceUnit }}&nbsp;{{ referencePrice.unitName }})
                                                    </small>
                                                {% endif %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block component_offcanvas_product_remove %}
                    <div class=\"cart-item-remove\">
                        {% block component_offcanvas_product_remove_form %}
                            {% if lineItem.removable %}
                                <form action=\"{{ path('frontend.checkout.line-item.delete', {'id': id}) }}\"
                                      class=\"cart-item-remove js-offcanvas-cart-remove-product\"
                                      method=\"post\">

                                    {% block component_offcanvas_product_remove_form_csrf %}
                                        {{ sw_csrf('frontend.checkout.line-item.delete') }}
                                    {% endblock %}

                                    {% block component_offcanvas_product_remove_redirect %}
                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.cart.offcanvas\"/>
                                    {% endblock %}

                                    {% block component_offcanvas_product_remove_submit %}
                                        <button type=\"submit\"
                                                title=\"{{ \"checkout.removeLineItem\"|trans|striptags }}\"
                                                data-product-id=\"{{ lineItem.id }}\"
                                                class=\"btn btn-light cart-item-remove-button\">
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

    {% block component_offcanvas_cart_item_children %}
        {% for lineItem in lineItem.children %}
            {% block component_offcanvas_cart_item_child %}
                {% sw_include '@Storefront/storefront/component/checkout/offcanvas-item.html.twig' with {
                    'isChild': true
                } %}
            {% endblock %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-item.html.twig");
    }
}
