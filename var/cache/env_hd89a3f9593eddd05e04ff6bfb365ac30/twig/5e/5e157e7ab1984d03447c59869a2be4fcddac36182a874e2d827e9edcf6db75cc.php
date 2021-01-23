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

/* @Storefront/storefront/page/checkout/cart/index.html.twig */
class __TwigTemplate_de72179b4fc9da152944295b255c65ab3896210e7e04417449f18b791a634761 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'page_checkout_container' => [$this, 'block_page_checkout_container'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_cart' => [$this, 'block_page_checkout_cart'],
            'page_checkout_cart_header' => [$this, 'block_page_checkout_cart_header'],
            'page_checkout_cart_messages' => [$this, 'block_page_checkout_cart_messages'],
            'page_checkout_confirm_errors' => [$this, 'block_page_checkout_confirm_errors'],
            'page_checkout_cart_product_table' => [$this, 'block_page_checkout_cart_product_table'],
            'page_checkout_cart_table_header' => [$this, 'block_page_checkout_cart_table_header'],
            'page_checkout_cart_table_items' => [$this, 'block_page_checkout_cart_table_items'],
            'page_checkout_cart_table_item' => [$this, 'block_page_checkout_cart_table_item'],
            'page_checkout_item' => [$this, 'block_page_checkout_item'],
            'page_checkout_cart_hidden_line_items_information' => [$this, 'block_page_checkout_cart_hidden_line_items_information'],
            'page_checkout_cart_add_product_and_shipping' => [$this, 'block_page_checkout_cart_add_product_and_shipping'],
            'page_checkout_cart_add_product' => [$this, 'block_page_checkout_cart_add_product'],
            'page_checkout_cart_add_product_csrf' => [$this, 'block_page_checkout_cart_add_product_csrf'],
            'page_checkout_cart_add_product_redirect' => [$this, 'block_page_checkout_cart_add_product_redirect'],
            'page_checkout_cart_add_product_input_group' => [$this, 'block_page_checkout_cart_add_product_input_group'],
            'page_checkout_cart_add_product_label' => [$this, 'block_page_checkout_cart_add_product_label'],
            'page_checkout_cart_add_product_input' => [$this, 'block_page_checkout_cart_add_product_input'],
            'page_checkout_cart_add_product_submit' => [$this, 'block_page_checkout_cart_add_product_submit'],
            'page_checkout_cart_shipping_costs' => [$this, 'block_page_checkout_cart_shipping_costs'],
            'page_checkout_cart_shipping_costs_csrf' => [$this, 'block_page_checkout_cart_shipping_costs_csrf'],
            'page_checkout_cart_shipping_costs_trigger' => [$this, 'block_page_checkout_cart_shipping_costs_trigger'],
            'page_checkout_cart_shipping_costs_trigger_icon' => [$this, 'block_page_checkout_cart_shipping_costs_trigger_icon'],
            'page_checkout_cart_shipping_costs_form_group' => [$this, 'block_page_checkout_cart_shipping_costs_form_group'],
            'page_checkout_cart_shipping_costs_form_group_country' => [$this, 'block_page_checkout_cart_shipping_costs_form_group_country'],
            'page_checkout_cart_shipping_costs_form_group_payment_method' => [$this, 'block_page_checkout_cart_shipping_costs_form_group_payment_method'],
            'page_checkout_cart_shipping_costs_form_group_shipping_method' => [$this, 'block_page_checkout_cart_shipping_costs_form_group_shipping_method'],
            'page_checkout_aside_actions' => [$this, 'block_page_checkout_aside_actions'],
            'page_checkout_cart_add_promotion' => [$this, 'block_page_checkout_cart_add_promotion'],
            'page_checkout_cart_add_promotion_csrf' => [$this, 'block_page_checkout_cart_add_promotion_csrf'],
            'page_checkout_cart_add_promotion_forward' => [$this, 'block_page_checkout_cart_add_promotion_forward'],
            'page_checkout_cart_add_promotion_input_group' => [$this, 'block_page_checkout_cart_add_promotion_input_group'],
            'page_checkout_cart_add_promotion_label' => [$this, 'block_page_checkout_cart_add_promotion_label'],
            'page_checkout_cart_add_promotion_input' => [$this, 'block_page_checkout_cart_add_promotion_input'],
            'page_checkout_cart_add_promotion_submit' => [$this, 'block_page_checkout_cart_add_promotion_submit'],
            'page_checkout_cart_action_proceed' => [$this, 'block_page_checkout_cart_action_proceed'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/cart/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/cart/meta.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_checkout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_container"));

        // line 8
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 8), "lineItems", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) === 0)) {
            // line 9
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 9)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartEmpty"))]));
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $this->displayParentBlock("page_checkout_container", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_main_content"));

        // line 19
        echo "    ";
        $this->displayBlock('page_checkout_cart', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart"));

        // line 20
        echo "        ";
        $this->displayBlock('page_checkout_cart_header', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('page_checkout_cart_messages', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('page_checkout_cart_product_table', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('page_checkout_cart_hidden_line_items_information', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('page_checkout_cart_add_product_and_shipping', $context, $blocks);
        // line 189
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_checkout_cart_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_header"));

        // line 21
        echo "            <h1 class=\"cart-main-header\">
                ";
        // line 22
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
            </h1>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_page_checkout_cart_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_messages"));

        // line 27
        echo "            ";
        $this->displayBlock('page_checkout_confirm_errors', $context, $blocks);
        // line 30
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_checkout_confirm_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_errors"));

        // line 28
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/cart-alerts.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_page_checkout_cart_product_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_product_table"));

        // line 33
        echo "            <div class=\"card checkout-product-table\">
                <div class=\"card-body\">
                    ";
        // line 35
        $this->displayBlock('page_checkout_cart_table_header', $context, $blocks);
        // line 38
        echo "
                    ";
        // line 39
        $this->displayBlock('page_checkout_cart_table_items', $context, $blocks);
        // line 48
        echo "                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_page_checkout_cart_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_table_header"));

        // line 36
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 36)->display($context);
        // line 37
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_checkout_cart_table_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_table_items"));

        // line 40
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 40), "lineItems", [], "any", false, false, false, 40));
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
            // line 41
            echo "                            ";
            $this->displayBlock('page_checkout_cart_table_item', $context, $blocks);
            // line 46
            echo "                        ";
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
        // line 47
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_page_checkout_cart_table_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_table_item"));

        // line 42
        echo "                                ";
        $this->displayBlock('page_checkout_item', $context, $blocks);
        // line 45
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_page_checkout_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_item"));

        // line 43
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-item.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 43)->display($context);
        // line 44
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_page_checkout_cart_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_hidden_line_items_information"));

        // line 53
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/page/checkout/cart/index.html.twig", 53)->display(twig_array_merge($context, ["lineItems" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["page"] ?? null), "cart", [], "any", false, false, false, 54), "lineItems", [], "any", false, false, false, 54)]));
        // line 56
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_page_checkout_cart_add_product_and_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_and_shipping"));

        // line 59
        echo "            <div class=\"row\">
                ";
        // line 60
        $this->displayBlock('page_checkout_cart_add_product', $context, $blocks);
        // line 110
        echo "
                ";
        // line 111
        $this->displayBlock('page_checkout_cart_shipping_costs', $context, $blocks);
        // line 187
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_page_checkout_cart_add_product($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product"));

        // line 61
        echo "                    <div class=\"col-md-4 cart-add-product-container\">
                        <form action=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.product.add-by-number");
        echo "\"
                              data-form-csrf-handler=\"true\"
                              class=\"cart-add-product\"
                              method=\"post\">

                            ";
        // line 67
        $this->displayBlock('page_checkout_cart_add_product_csrf', $context, $blocks);
        // line 70
        echo "
                            ";
        // line 71
        $this->displayBlock('page_checkout_cart_add_product_redirect', $context, $blocks);
        // line 76
        echo "
                            ";
        // line 77
        $this->displayBlock('page_checkout_cart_add_product_input_group', $context, $blocks);
        // line 107
        echo "                        </form>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_page_checkout_cart_add_product_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_csrf"));

        // line 68
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.product.add-by-number");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_page_checkout_cart_add_product_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_redirect"));

        // line 72
        echo "                                <input type=\"hidden\"
                                       name=\"redirectTo\"
                                       value=\"frontend.checkout.cart.page\">
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_page_checkout_cart_add_product_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_input_group"));

        // line 78
        echo "                                <div class=\"input-group\">
                                    ";
        // line 79
        $this->displayBlock('page_checkout_cart_add_product_label', $context, $blocks);
        // line 84
        echo "
                                    ";
        // line 85
        $this->displayBlock('page_checkout_cart_add_product_input', $context, $blocks);
        // line 95
        echo "
                                    ";
        // line 96
        $this->displayBlock('page_checkout_cart_add_product_submit', $context, $blocks);
        // line 105
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_page_checkout_cart_add_product_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_label"));

        // line 80
        echo "                                        <label class=\"sr-only\" for=\"addProductInput\">
                                            ";
        // line 81
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addProductLabel"));
        echo "
                                        </label>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_page_checkout_cart_add_product_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_input"));

        // line 86
        echo "                                        <input type=\"text\"
                                               name=\"number\"
                                               class=\"form-control\"
                                               id=\"addProductInput\"
                                               placeholder=\"";
        // line 90
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addProductPlaceholder")), "html", null, true);
        echo "\"
                                               aria-label=\"";
        // line 91
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addProductLabel")), "html", null, true);
        echo "\"
                                               aria-describedby=\"addProductButton\"
                                               required=\"required\">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_page_checkout_cart_add_product_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_product_submit"));

        // line 97
        echo "                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-secondary\"
                                                    type=\"submit\"
                                                    id=\"addProductButton\">
                                                ";
        // line 101
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 101);
        })())->display(twig_array_merge($context, ["name" => "checkmark"]));
        // line 102
        echo "                                            </button>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_page_checkout_cart_shipping_costs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs"));

        // line 112
        echo "                    <div class=\"col-md-8 cart-shipping-costs-container\">
                        <form name=\"precalc\"
                              method=\"post\"
                              action=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                              data-form-auto-submit=\"true\">

                            ";
        // line 118
        $this->displayBlock('page_checkout_cart_shipping_costs_csrf', $context, $blocks);
        // line 121
        echo "
                            ";
        // line 122
        $this->displayBlock('page_checkout_cart_shipping_costs_trigger', $context, $blocks);
        // line 135
        echo "
                            ";
        // line 136
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group', $context, $blocks);
        // line 184
        echo "                        </form>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 118
    public function block_page_checkout_cart_shipping_costs_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_csrf"));

        // line 119
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 122
    public function block_page_checkout_cart_shipping_costs_trigger($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_trigger"));

        // line 123
        echo "                                <a class=\"btn btn-link cart-shipping-costs-btn\"
                                   data-toggle=\"collapse\"
                                   href=\"#collapseShippingCost\"
                                   role=\"button\"
                                   aria-expanded=\"false\"
                                   aria-controls=\"collapseExample\">
                                    ";
        // line 129
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingCosts"));
        echo "
                                    ";
        // line 130
        $this->displayBlock('page_checkout_cart_shipping_costs_trigger_icon', $context, $blocks);
        // line 133
        echo "                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_page_checkout_cart_shipping_costs_trigger_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_trigger_icon"));

        // line 131
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 131);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 132
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 136
    public function block_page_checkout_cart_shipping_costs_form_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_form_group"));

        // line 137
        echo "                                <div class=\"collapse\" id=\"collapseShippingCost\">
                                    ";
        // line 138
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group_country', $context, $blocks);
        // line 153
        echo "
                                    ";
        // line 154
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group_payment_method', $context, $blocks);
        // line 167
        echo "
                                    ";
        // line 168
        $this->displayBlock('page_checkout_cart_shipping_costs_form_group_shipping_method', $context, $blocks);
        // line 181
        echo "                                    <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.checkout.cart.page\">
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 138
    public function block_page_checkout_cart_shipping_costs_form_group_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_form_group_country"));

        // line 139
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 139)) {
            // line 140
            echo "                                            <div class=\"form-group\">
                                                <label for=\"countryId\">";
            // line 141
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingCountry"));
            echo "</label>
                                                <select class=\"custom-select\" type=\"text\" id=\"countryId\" name=\"countryId\">
                                                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 143));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 144
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 144), "html", null, true);
                echo "\"
                                                            ";
                // line 145
                echo (((twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 145) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingLocation", [], "any", false, false, false, 145), "country", [], "any", false, false, false, 145), "id", [], "any", false, false, false, 145))) ? ("selected=\"selected\"") : (""));
                echo ">
                                                            ";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
                echo "
                                                        </option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                                                </select>
                                            </div>
                                        ";
        }
        // line 152
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 154
    public function block_page_checkout_cart_shipping_costs_form_group_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_form_group_payment_method"));

        // line 155
        echo "                                        <div class=\"form-group\">
                                            <label for=\"paymentMethodId\">";
        // line 156
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.paymentMethod"));
        echo "</label>
                                            <select class=\"custom-select\" type=\"text\" id=\"paymentMethodId\" name=\"paymentMethodId\">
                                                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 159
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\"
                                                        ";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 160) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 160), "id", [], "any", false, false, false, 160))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                        ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "translated", [], "any", false, false, false, 161), "name", [], "any", false, false, false, 161), "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                            </select>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 168
    public function block_page_checkout_cart_shipping_costs_form_group_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_shipping_costs_form_group_shipping_method"));

        // line 169
        echo "                                        <div class=\"form-group\">
                                            <label for=\"shippingMethodId\">";
        // line 170
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.shippingMethod"));
        echo "</label>
                                            <select class=\"custom-select\" type=\"text\" id=\"shippingMethodId\" name=\"shippingMethodId\">
                                                ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 173
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 173), "html", null, true);
            echo "\"
                                                        ";
            // line 174
            if ((twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 174) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                        ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "translated", [], "any", false, false, false, 175), "name", [], "any", false, false, false, 175), "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                                            </select>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 192
    public function block_page_checkout_aside_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_actions"));

        // line 193
        echo "    <div class=\"checkout-aside-action\">
        ";
        // line 194
        $this->displayBlock('page_checkout_cart_add_promotion', $context, $blocks);
        // line 242
        echo "    </div>

    ";
        // line 244
        $this->displayBlock('page_checkout_cart_action_proceed', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 194
    public function block_page_checkout_cart_add_promotion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion"));

        // line 195
        echo "            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.promotion.add");
        echo "\"
                  class=\"cart-add-promotion\"
                  data-form-csrf-handler=\"true\"
                  method=\"post\">

                ";
        // line 200
        $this->displayBlock('page_checkout_cart_add_promotion_csrf', $context, $blocks);
        // line 203
        echo "
                ";
        // line 204
        $this->displayBlock('page_checkout_cart_add_promotion_forward', $context, $blocks);
        // line 209
        echo "
                ";
        // line 210
        $this->displayBlock('page_checkout_cart_add_promotion_input_group', $context, $blocks);
        // line 240
        echo "            </form>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_page_checkout_cart_add_promotion_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion_csrf"));

        // line 201
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.promotion.add");
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 204
    public function block_page_checkout_cart_add_promotion_forward($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion_forward"));

        // line 205
        echo "                    <input type=\"hidden\"
                           name=\"forwardTo\"
                           value=\"frontend.checkout.cart.page\">
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_page_checkout_cart_add_promotion_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion_input_group"));

        // line 211
        echo "                    <div class=\"input-group checkout-aside-add-code\">
                        ";
        // line 212
        $this->displayBlock('page_checkout_cart_add_promotion_label', $context, $blocks);
        // line 217
        echo "
                        ";
        // line 218
        $this->displayBlock('page_checkout_cart_add_promotion_input', $context, $blocks);
        // line 228
        echo "
                        ";
        // line 229
        $this->displayBlock('page_checkout_cart_add_promotion_submit', $context, $blocks);
        // line 238
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 212
    public function block_page_checkout_cart_add_promotion_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion_label"));

        // line 213
        echo "                            <label class=\"sr-only\" for=\"addPromotionInput\">
                                ";
        // line 214
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel"));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 218
    public function block_page_checkout_cart_add_promotion_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion_input"));

        // line 219
        echo "                            <input type=\"text\"
                                   name=\"code\"
                                   class=\"form-control\"
                                   id=\"addPromotionInput\"
                                   placeholder=\"";
        // line 223
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionPlaceholder")), "html", null, true);
        echo "\"
                                   aria-label=\"";
        // line 224
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel")), "html", null, true);
        echo "\"
                                   aria-describedby=\"addPromotion\"
                                   required=\"required\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 229
    public function block_page_checkout_cart_add_promotion_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_add_promotion_submit"));

        // line 230
        echo "                            <div class=\"input-group-append\">
                                <button class=\"btn btn-secondary\"
                                        type=\"submit\"
                                        id=\"addPromotion\">
                                    ";
        // line 234
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/cart/index.html.twig", 234);
        })())->display(twig_array_merge($context, ["name" => "checkmark"]));
        // line 235
        echo "                                </button>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 244
    public function block_page_checkout_cart_action_proceed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_cart_action_proceed"));

        // line 245
        echo "        <div class=\"checkout-aside-action\">
            <a href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
        echo "\"
               class=\"btn btn-primary btn-block btn-lg begin-checkout-btn\"
               title=\"";
        // line 248
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedLink")), "html", null, true);
        echo "\">
                ";
        // line 249
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedLink"));
        echo "
            </a>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1094 => 249,  1090 => 248,  1085 => 246,  1082 => 245,  1075 => 244,  1066 => 235,  1058 => 234,  1052 => 230,  1045 => 229,  1034 => 224,  1030 => 223,  1024 => 219,  1017 => 218,  1007 => 214,  1004 => 213,  997 => 212,  989 => 238,  987 => 229,  984 => 228,  982 => 218,  979 => 217,  977 => 212,  974 => 211,  967 => 210,  957 => 205,  950 => 204,  940 => 201,  933 => 200,  925 => 240,  923 => 210,  920 => 209,  918 => 204,  915 => 203,  913 => 200,  904 => 195,  897 => 194,  890 => 244,  886 => 242,  884 => 194,  881 => 193,  874 => 192,  865 => 178,  856 => 175,  850 => 174,  845 => 173,  841 => 172,  836 => 170,  833 => 169,  826 => 168,  817 => 164,  808 => 161,  802 => 160,  797 => 159,  793 => 158,  788 => 156,  785 => 155,  778 => 154,  771 => 152,  766 => 149,  757 => 146,  753 => 145,  748 => 144,  744 => 143,  739 => 141,  736 => 140,  733 => 139,  726 => 138,  717 => 181,  715 => 168,  712 => 167,  710 => 154,  707 => 153,  705 => 138,  702 => 137,  695 => 136,  688 => 132,  679 => 131,  672 => 130,  664 => 133,  662 => 130,  658 => 129,  650 => 123,  643 => 122,  633 => 119,  626 => 118,  617 => 184,  615 => 136,  612 => 135,  610 => 122,  607 => 121,  605 => 118,  599 => 115,  594 => 112,  587 => 111,  578 => 102,  570 => 101,  564 => 97,  557 => 96,  546 => 91,  542 => 90,  536 => 86,  529 => 85,  519 => 81,  516 => 80,  509 => 79,  501 => 105,  499 => 96,  496 => 95,  494 => 85,  491 => 84,  489 => 79,  486 => 78,  479 => 77,  469 => 72,  462 => 71,  452 => 68,  445 => 67,  436 => 107,  434 => 77,  431 => 76,  429 => 71,  426 => 70,  424 => 67,  416 => 62,  413 => 61,  406 => 60,  398 => 187,  396 => 111,  393 => 110,  391 => 60,  388 => 59,  381 => 58,  374 => 56,  372 => 54,  370 => 53,  363 => 52,  356 => 44,  353 => 43,  346 => 42,  339 => 45,  336 => 42,  329 => 41,  322 => 47,  308 => 46,  305 => 41,  287 => 40,  280 => 39,  273 => 37,  270 => 36,  263 => 35,  254 => 48,  252 => 39,  249 => 38,  247 => 35,  243 => 33,  236 => 32,  229 => 29,  226 => 28,  219 => 27,  212 => 30,  209 => 27,  202 => 26,  192 => 22,  189 => 21,  182 => 20,  175 => 189,  173 => 58,  170 => 57,  168 => 52,  165 => 51,  163 => 32,  160 => 31,  158 => 26,  155 => 25,  152 => 20,  138 => 19,  131 => 18,  120 => 14,  117 => 13,  114 => 9,  111 => 8,  104 => 7,  96 => 4,  89 => 3,  72 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/checkout/_page.html.twig' %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/page/checkout/cart/meta.html.twig' %}
{% endblock %}

{% block page_checkout_container %}
    {% if page.cart.lineItems.count is same as(0) %}
        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
            type: \"info\",
            content: \"checkout.cartEmpty\"|trans|sw_sanitize
        } %}
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block page_checkout_main_content %}
    {% block page_checkout_cart %}
        {% block page_checkout_cart_header %}
            <h1 class=\"cart-main-header\">
                {{ \"checkout.cartHeader\"|trans|sw_sanitize }}
            </h1>
        {% endblock %}

        {% block page_checkout_cart_messages %}
            {% block page_checkout_confirm_errors %}
                {%  sw_include '@Storefront/storefront/component/checkout/cart-alerts.html.twig' %}
            {% endblock %}
        {% endblock %}

        {% block page_checkout_cart_product_table %}
            <div class=\"card checkout-product-table\">
                <div class=\"card-body\">
                    {% block page_checkout_cart_table_header %}
                        {% sw_include '@Storefront/storefront/page/checkout/cart/cart-product-header.html.twig' %}
                    {% endblock %}

                    {% block page_checkout_cart_table_items %}
                        {% for lineItem in page.cart.lineItems %}
                            {% block page_checkout_cart_table_item %}
                                {% block page_checkout_item %}
                                    {% sw_include '@Storefront/storefront/page/checkout/checkout-item.html.twig' %}
                                {% endblock %}
                            {% endblock %}
                        {% endfor %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}

        {% block page_checkout_cart_hidden_line_items_information %}
            {% sw_include '@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig' with {
                lineItems: page.cart.lineItems
            } %}
        {% endblock %}

        {% block page_checkout_cart_add_product_and_shipping %}
            <div class=\"row\">
                {% block page_checkout_cart_add_product %}
                    <div class=\"col-md-4 cart-add-product-container\">
                        <form action=\"{{ path('frontend.checkout.product.add-by-number') }}\"
                              data-form-csrf-handler=\"true\"
                              class=\"cart-add-product\"
                              method=\"post\">

                            {% block page_checkout_cart_add_product_csrf %}
                                {{ sw_csrf('frontend.checkout.product.add-by-number') }}
                            {% endblock %}

                            {% block page_checkout_cart_add_product_redirect %}
                                <input type=\"hidden\"
                                       name=\"redirectTo\"
                                       value=\"frontend.checkout.cart.page\">
                            {% endblock %}

                            {% block page_checkout_cart_add_product_input_group %}
                                <div class=\"input-group\">
                                    {% block page_checkout_cart_add_product_label %}
                                        <label class=\"sr-only\" for=\"addProductInput\">
                                            {{ \"checkout.addProductLabel\"|trans|sw_sanitize }}
                                        </label>
                                    {% endblock %}

                                    {% block page_checkout_cart_add_product_input %}
                                        <input type=\"text\"
                                               name=\"number\"
                                               class=\"form-control\"
                                               id=\"addProductInput\"
                                               placeholder=\"{{ \"checkout.addProductPlaceholder\"|trans|striptags }}\"
                                               aria-label=\"{{ \"checkout.addProductLabel\"|trans|striptags }}\"
                                               aria-describedby=\"addProductButton\"
                                               required=\"required\">
                                    {% endblock %}

                                    {% block page_checkout_cart_add_product_submit %}
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-secondary\"
                                                    type=\"submit\"
                                                    id=\"addProductButton\">
                                                {% sw_icon 'checkmark' %}
                                            </button>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </form>
                    </div>
                {% endblock %}

                {% block page_checkout_cart_shipping_costs %}
                    <div class=\"col-md-8 cart-shipping-costs-container\">
                        <form name=\"precalc\"
                              method=\"post\"
                              action=\"{{ path('frontend.checkout.configure') }}\"
                              data-form-auto-submit=\"true\">

                            {% block page_checkout_cart_shipping_costs_csrf %}
                                {{ sw_csrf('frontend.checkout.configure') }}
                            {% endblock %}

                            {% block page_checkout_cart_shipping_costs_trigger %}
                                <a class=\"btn btn-link cart-shipping-costs-btn\"
                                   data-toggle=\"collapse\"
                                   href=\"#collapseShippingCost\"
                                   role=\"button\"
                                   aria-expanded=\"false\"
                                   aria-controls=\"collapseExample\">
                                    {{ \"checkout.shippingCosts\"|trans|sw_sanitize }}
                                    {% block page_checkout_cart_shipping_costs_trigger_icon %}
                                        {% sw_icon 'arrow-medium-right' style { 'pack':'solid', 'size': 'sm' } %}
                                    {% endblock %}
                                </a>
                            {% endblock %}

                            {% block page_checkout_cart_shipping_costs_form_group %}
                                <div class=\"collapse\" id=\"collapseShippingCost\">
                                    {% block page_checkout_cart_shipping_costs_form_group_country %}
                                        {% if not context.customer %}
                                            <div class=\"form-group\">
                                                <label for=\"countryId\">{{ \"checkout.shippingCountry\"|trans|sw_sanitize }}</label>
                                                <select class=\"custom-select\" type=\"text\" id=\"countryId\" name=\"countryId\">
                                                    {% for country in page.countries %}
                                                        <option value=\"{{ country.id }}\"
                                                            {{ country.id == context.shippingLocation.country.id ? 'selected=\"selected\"' : '' }}>
                                                            {{ country.translated.name }}
                                                        </option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        {% endif %}
                                    {% endblock %}

                                    {% block page_checkout_cart_shipping_costs_form_group_payment_method %}
                                        <div class=\"form-group\">
                                            <label for=\"paymentMethodId\">{{ \"checkout.paymentMethod\"|trans|sw_sanitize }}</label>
                                            <select class=\"custom-select\" type=\"text\" id=\"paymentMethodId\" name=\"paymentMethodId\">
                                                {% for payment in page.paymentMethods %}
                                                    <option value=\"{{ payment.id }}\"
                                                        {% if payment.id == context.paymentMethod.id %} selected=\"selected\"{% endif %}>
                                                        {{ payment.translated.name }}
                                                    </option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    {% endblock %}

                                    {% block page_checkout_cart_shipping_costs_form_group_shipping_method %}
                                        <div class=\"form-group\">
                                            <label for=\"shippingMethodId\">{{ \"checkout.shippingMethod\"|trans|sw_sanitize }}</label>
                                            <select class=\"custom-select\" type=\"text\" id=\"shippingMethodId\" name=\"shippingMethodId\">
                                                {% for shipping in page.shippingMethods %}
                                                    <option value=\"{{ shipping.id }}\"
                                                        {% if shipping.id == context.shippingMethod.id %} selected=\"selected\"{% endif %}>
                                                        {{ shipping.translated.name }}
                                                    </option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    {% endblock %}
                                    <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.checkout.cart.page\">
                                </div>
                            {% endblock %}
                        </form>
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}
{% endblock %}

{% block page_checkout_aside_actions %}
    <div class=\"checkout-aside-action\">
        {% block page_checkout_cart_add_promotion %}
            <form action=\"{{ path('frontend.checkout.promotion.add') }}\"
                  class=\"cart-add-promotion\"
                  data-form-csrf-handler=\"true\"
                  method=\"post\">

                {% block page_checkout_cart_add_promotion_csrf %}
                    {{ sw_csrf('frontend.checkout.promotion.add') }}
                {% endblock %}

                {% block page_checkout_cart_add_promotion_forward %}
                    <input type=\"hidden\"
                           name=\"forwardTo\"
                           value=\"frontend.checkout.cart.page\">
                {% endblock %}

                {% block page_checkout_cart_add_promotion_input_group %}
                    <div class=\"input-group checkout-aside-add-code\">
                        {% block page_checkout_cart_add_promotion_label %}
                            <label class=\"sr-only\" for=\"addPromotionInput\">
                                {{ \"checkout.addPromotionLabel\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block page_checkout_cart_add_promotion_input %}
                            <input type=\"text\"
                                   name=\"code\"
                                   class=\"form-control\"
                                   id=\"addPromotionInput\"
                                   placeholder=\"{{ \"checkout.addPromotionPlaceholder\"|trans|striptags }}\"
                                   aria-label=\"{{ \"checkout.addPromotionLabel\"|trans|striptags }}\"
                                   aria-describedby=\"addPromotion\"
                                   required=\"required\">
                        {% endblock %}

                        {% block page_checkout_cart_add_promotion_submit %}
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-secondary\"
                                        type=\"submit\"
                                        id=\"addPromotion\">
                                    {% sw_icon 'checkmark' %}
                                </button>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </form>
        {% endblock %}
    </div>

    {% block page_checkout_cart_action_proceed %}
        <div class=\"checkout-aside-action\">
            <a href=\"{{ path('frontend.checkout.confirm.page') }}\"
               class=\"btn btn-primary btn-block btn-lg begin-checkout-btn\"
               title=\"{{ \"checkout.proceedLink\"|trans|striptags }}\">
                {{ \"checkout.proceedLink\"|trans|sw_sanitize }}
            </a>
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/checkout/cart/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/cart/index.html.twig");
    }
}
