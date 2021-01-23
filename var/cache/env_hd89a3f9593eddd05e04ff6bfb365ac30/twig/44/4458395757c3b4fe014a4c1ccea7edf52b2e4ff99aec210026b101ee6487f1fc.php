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

/* @Storefront/storefront/page/checkout/checkout-aside-item.html.twig */
class __TwigTemplate_88a932b46bb5e6ba5468056e7a3387e93b653368f14db17ac3499873668620be extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_aside_item' => [$this, 'block_page_checkout_aside_item'],
            'page_checkout_aside_item_container' => [$this, 'block_page_checkout_aside_item_container'],
            'page_checkout_aside_item_image' => [$this, 'block_page_checkout_aside_item_image'],
            'page_checkout_aside_item_image_inner' => [$this, 'block_page_checkout_aside_item_image_inner'],
            'page_checkout_aside_item_data' => [$this, 'block_page_checkout_aside_item_data'],
            'page_checkout_aside_item_title' => [$this, 'block_page_checkout_aside_item_title'],
            'page_checkout_aside_item_variant_characteristics' => [$this, 'block_page_checkout_aside_item_variant_characteristics'],
            'page_checkout_aside_item_info_features' => [$this, 'block_page_checkout_aside_item_info_features'],
            'page_checkout_aside_item_quantity' => [$this, 'block_page_checkout_aside_item_quantity'],
            'page_checkout_aside_item_price' => [$this, 'block_page_checkout_aside_item_price'],
            'page_checkout_aside_item_children' => [$this, 'block_page_checkout_aside_item_children'],
            'page_checkout_aside_item_child' => [$this, 'block_page_checkout_aside_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_aside_item', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_aside_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item"));

        // line 2
        echo "    ";
        $context["isDiscount"] = ( !twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 2) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 2), "totalPrice", [], "any", false, false, false, 2) <= 0));
        // line 3
        echo "    ";
        $context["isNested"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 3), "count", [], "any", false, false, false, 3) > 0);
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('page_checkout_aside_item_container', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('page_checkout_aside_item_children', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_checkout_aside_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_container"));

        // line 6
        echo "        <div class=\"row checkout-aside-item cart-item cart-item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
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
            ";
        // line 7
        $this->displayBlock('page_checkout_aside_item_image', $context, $blocks);
        // line 44
        echo "
            ";
        // line 45
        $this->displayBlock('page_checkout_aside_item_data', $context, $blocks);
        // line 89
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_checkout_aside_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_image"));

        // line 8
        echo "                <div class=\"col-4 checkout-aside-item-image\">
                    ";
        // line 9
        $this->displayBlock('page_checkout_aside_item_image_inner', $context, $blocks);
        // line 42
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_checkout_aside_item_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_image_inner"));

        // line 10
        echo "                        ";
        if (($context["isDiscount"] ?? null)) {
            // line 11
            echo "                            <div class=\"cart-item-discount-icon cart-item-img\">
                                ";
            // line 12
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 12);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 15
            echo "                            </div>
                        ";
        } elseif (        // line 16
($context["isNested"] ?? null)) {
            // line 17
            echo "                            <div class=\"cart-item-nested-icon\">
                                ";
            // line 18
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 18);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 21
            echo "                            </div>
                        ";
        } else {
            // line 23
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 23), "url", [], "any", false, false, false, 23)) {
                // line 24
                echo "                                ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 24);
                })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,                 // line 25
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 25), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 31
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "alt", [], "any", false, false, false, 31)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "alt", [], "any", false, false, false, 31)) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 32
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 32), "translated", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 32), "translated", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32)) : (""))], "name" => "cart-item-img-thumbnails"]));
                // line 35
                echo "                            ";
            } else {
                // line 36
                echo "                                ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 36);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 39
                echo "                            ";
            }
            // line 40
            echo "                        ";
        }
        // line 41
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_page_checkout_aside_item_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_data"));

        // line 46
        echo "                <div class=\"col-8 checkout-aside-item-data\">
                    ";
        // line 47
        $this->displayBlock('page_checkout_aside_item_title', $context, $blocks);
        // line 52
        echo "
                    ";
        // line 53
        $this->displayBlock('page_checkout_aside_item_variant_characteristics', $context, $blocks);
        // line 65
        echo "
                    ";
        // line 66
        $this->displayBlock('page_checkout_aside_item_info_features', $context, $blocks);
        // line 73
        echo "
                    ";
        // line 74
        $this->displayBlock('page_checkout_aside_item_quantity', $context, $blocks);
        // line 81
        echo "
                    ";
        // line 82
        $this->displayBlock('page_checkout_aside_item_price', $context, $blocks);
        // line 87
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_page_checkout_aside_item_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_title"));

        // line 48
        echo "                        <div class=\"checkout-aside-item-title\">
                            ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 49)), "truncate", [0 => 60], "method", false, false, false, 49), "html", null, true);
        echo "
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_page_checkout_aside_item_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_variant_characteristics"));

        // line 54
        echo "                        <div class=\"checkout-aside-item-characteristics\">
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 55), "options", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 56
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 56), "html", null, true);
            echo ":
                                <span class=\"checkout-aside-item-characteristics-option\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 57), "html", null, true);
            echo "</span>

                                ";
            // line 59
            if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 59), "options", [], "any", false, false, false, 59)) != $context["option"])) {
                // line 60
                echo "                                    ";
                echo " | ";
                echo "
                                ";
            }
            // line 62
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_page_checkout_aside_item_info_features($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_info_features"));

        // line 67
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 67) == "product") &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 67), "features", [], "any", false, false, false, 67)))) {
            // line 68
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/product/feature/list.html.twig", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 68)->display(twig_array_merge($context, ["features" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 69
($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 69), "features", [], "any", false, false, false, 69)]));
            // line 71
            echo "                        ";
        }
        // line 72
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_page_checkout_aside_item_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_quantity"));

        // line 75
        echo "                        <div class=\"checkout-aside-item-link-quantity\">
                            ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 76) && (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 76) != "promotion"))) {
            // line 77
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeaderQuantity"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 77), "html", null, true);
            echo "
                            ";
        }
        // line 79
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_page_checkout_aside_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_price"));

        // line 83
        echo "                        <div class=\"checkout-aside-item-link-price\">
                            ";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 84), "totalPrice", [], "any", false, false, false, 84)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_page_checkout_aside_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_children"));

        // line 93
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lineItem"], "children", [], "any", false, false, false, 93));
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
            // line 94
            echo "            ";
            $this->displayBlock('page_checkout_aside_item_child', $context, $blocks);
            // line 99
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
        // line 100
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_page_checkout_aside_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_item_child"));

        // line 95
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", 95)->display(twig_array_merge($context, ["isChild" => true]));
        // line 98
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  461 => 98,  458 => 95,  451 => 94,  444 => 100,  430 => 99,  427 => 94,  409 => 93,  402 => 92,  391 => 84,  388 => 83,  381 => 82,  373 => 79,  365 => 77,  363 => 76,  360 => 75,  353 => 74,  346 => 72,  343 => 71,  341 => 69,  339 => 68,  336 => 67,  329 => 66,  321 => 63,  315 => 62,  309 => 60,  307 => 59,  302 => 57,  297 => 56,  293 => 55,  290 => 54,  283 => 53,  273 => 49,  270 => 48,  263 => 47,  255 => 87,  253 => 82,  250 => 81,  248 => 74,  245 => 73,  243 => 66,  240 => 65,  238 => 53,  235 => 52,  233 => 47,  230 => 46,  223 => 45,  216 => 41,  213 => 40,  210 => 39,  201 => 36,  198 => 35,  196 => 32,  195 => 31,  194 => 25,  186 => 24,  183 => 23,  179 => 21,  171 => 18,  168 => 17,  166 => 16,  163 => 15,  155 => 12,  152 => 11,  149 => 10,  142 => 9,  134 => 42,  132 => 9,  129 => 8,  122 => 7,  114 => 89,  112 => 45,  109 => 44,  107 => 7,  93 => 6,  86 => 5,  79 => 92,  76 => 91,  74 => 5,  71 => 4,  68 => 3,  65 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_aside_item %}
    {% set isDiscount = (not lineItem.good and lineItem.price.totalPrice <= 0) %}
    {% set isNested = lineItem.children.count > 0 %}

    {% block page_checkout_aside_item_container %}
        <div class=\"row checkout-aside-item cart-item cart-item-{{ lineItem.type }}{% if isDiscount %} is-discount{% endif %}{% if isNested %} is-nested{% endif %}{% if isChild %} is-child{% endif %}\">
            {% block page_checkout_aside_item_image %}
                <div class=\"col-4 checkout-aside-item-image\">
                    {% block page_checkout_aside_item_image_inner %}
                        {% if isDiscount %}
                            <div class=\"cart-item-discount-icon cart-item-img\">
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
                        {%  else %}
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
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_checkout_aside_item_data %}
                <div class=\"col-8 checkout-aside-item-data\">
                    {% block page_checkout_aside_item_title %}
                        <div class=\"checkout-aside-item-title\">
                            {{ lineItem.label|u.truncate(60) }}
                        </div>
                    {% endblock %}

                    {% block page_checkout_aside_item_variant_characteristics %}
                        <div class=\"checkout-aside-item-characteristics\">
                            {% for option in lineItem.payload.options %}
                                {{ option.group }}:
                                <span class=\"checkout-aside-item-characteristics-option\">{{ option.option }}</span>

                                {% if lineItem.payload.options|last != option %}
                                    {{ \" | \" }}
                                {% endif %}
                            {% endfor %}
                        </div>
                    {% endblock %}

                    {% block page_checkout_aside_item_info_features %}
                        {% if lineItem.type == 'product' and lineItem.payload.features is not null %}
                            {% sw_include '@Storefront/storefront/component/product/feature/list.html.twig' with {
                                'features': lineItem.payload.features
                            } %}
                        {% endif %}
                    {% endblock %}

                    {% block page_checkout_aside_item_quantity %}
                        <div class=\"checkout-aside-item-link-quantity\">
                            {% if lineItem.quantity and lineItem.type != \"promotion\" %}
                                {{ \"checkout.cartHeaderQuantity\"|trans }}: {{ lineItem.quantity }}
                            {% endif %}
                        </div>
                    {% endblock %}

                    {% block page_checkout_aside_item_price %}
                        <div class=\"checkout-aside-item-link-price\">
                            {{ lineItem.price.totalPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block page_checkout_aside_item_children %}
        {% for lineItem in lineItem.children %}
            {% block page_checkout_aside_item_child %}
                {% sw_include '@Storefront/storefront/page/checkout/checkout-aside-item.html.twig' with {
                    \"isChild\": true
                } %}
            {% endblock %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/checkout-aside-item.html.twig");
    }
}
