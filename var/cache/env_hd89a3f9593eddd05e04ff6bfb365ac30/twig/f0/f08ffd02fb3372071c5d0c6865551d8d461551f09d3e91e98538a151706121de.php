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

/* @Storefront/storefront/component/checkout/offcanvas-cart.html.twig */
class __TwigTemplate_f5c85e9a0360934d1707e74e05820c4d4ba39d4fda91e980b5fa8f52957a33fc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'component_offcanvas_cart' => [$this, 'block_component_offcanvas_cart'],
            'component_offcanvas_cart_header' => [$this, 'block_component_offcanvas_cart_header'],
            'component_offcanvas_cart_header_item_counter' => [$this, 'block_component_offcanvas_cart_header_item_counter'],
            'component_offcanvas_cart_flashbags' => [$this, 'block_component_offcanvas_cart_flashbags'],
            'component_offcanvas_cart_items' => [$this, 'block_component_offcanvas_cart_items'],
            'component_offcanvas_cart_item' => [$this, 'block_component_offcanvas_cart_item'],
            'component_offcanvas_cart_empty' => [$this, 'block_component_offcanvas_cart_empty'],
            'component_offcanvas_summary' => [$this, 'block_component_offcanvas_summary'],
            'component_offcanvas_cart_actions' => [$this, 'block_component_offcanvas_cart_actions'],
            'component_offcanvas_cart_actions_promotion' => [$this, 'block_component_offcanvas_cart_actions_promotion'],
            'component_offcanvas_cart_actions_promotion_form' => [$this, 'block_component_offcanvas_cart_actions_promotion_form'],
            'component_offcanvas_cart_actions_promotion_form_csrf' => [$this, 'block_component_offcanvas_cart_actions_promotion_form_csrf'],
            'component_offcanvas_cart_actions_promotion_redirect' => [$this, 'block_component_offcanvas_cart_actions_promotion_redirect'],
            'component_offcanvas_cart_actions_promotion_input_group' => [$this, 'block_component_offcanvas_cart_actions_promotion_input_group'],
            'component_offcanvas_cart_actions_promotion_label' => [$this, 'block_component_offcanvas_cart_actions_promotion_label'],
            'component_offcanvas_cart_actions_promotion_input' => [$this, 'block_component_offcanvas_cart_actions_promotion_input'],
            'component_offcanvas_cart_actions_promotion_submit' => [$this, 'block_component_offcanvas_cart_actions_promotion_submit'],
            'component_offcanvas_cart_actions_checkout' => [$this, 'block_component_offcanvas_cart_actions_checkout'],
            'component_offcanvas_cart_actions_cart' => [$this, 'block_component_offcanvas_cart_actions_cart'],
            'component_offcanvas_cart_hidden_line_items_information' => [$this, 'block_component_offcanvas_cart_hidden_line_items_information'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_meta"));

        // line 4
        echo "    ";
        $context["isAjaxOffcanvas"] = true;
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("utilities_offcanvas_meta", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_close_text"));

        // line 10
        echo "    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.continueShopping"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_close_icon"));

        // line 14
        echo "    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 14);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-head-left"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 18
        echo "    ";
        $this->displayBlock('component_offcanvas_cart', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_offcanvas_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart"));

        // line 19
        echo "        ";
        $context["isCartNotEmpty"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 19), "lineItems", [], "any", false, false, false, 19)) > 0);
        // line 20
        echo "
        <div class=\"offcanvas-cart\">
            ";
        // line 22
        $this->displayBlock('component_offcanvas_cart_header', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('component_offcanvas_cart_flashbags', $context, $blocks);
        // line 52
        echo "
            ";
        // line 53
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 54
            echo "                ";
            $this->displayBlock('component_offcanvas_cart_items', $context, $blocks);
            // line 63
            echo "            ";
        } else {
            // line 64
            echo "                ";
            $this->displayBlock('component_offcanvas_cart_empty', $context, $blocks);
            // line 70
            echo "            ";
        }
        // line 71
        echo "
            ";
        // line 72
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 73
            echo "                ";
            $this->displayBlock('component_offcanvas_summary', $context, $blocks);
            // line 76
            echo "            ";
        }
        // line 77
        echo "
            ";
        // line 78
        $this->displayBlock('component_offcanvas_cart_actions', $context, $blocks);
        // line 151
        echo "        </div>

        ";
        // line 153
        $this->displayBlock('component_offcanvas_cart_hidden_line_items_information', $context, $blocks);
        // line 158
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_component_offcanvas_cart_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_header"));

        // line 23
        echo "                <div class=\"row align-items-center h4 offcanvas-cart-header\">
                    <div class=\"col\">
                        ";
        // line 25
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
                    </div>

                    ";
        // line 28
        $context["checkoutItemCounter"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 28), "lineItems", [], "any", false, false, false, 28));
        // line 29
        echo "
                    ";
        // line 30
        $this->displayBlock('component_offcanvas_cart_header_item_counter', $context, $blocks);
        // line 39
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_component_offcanvas_cart_header_item_counter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_header_item_counter"));

        // line 31
        echo "                        ";
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 32
            echo "                            <div class=\"col-auto\">
                                <small class=\"offcanvas-cart-header-count\">
                                    ";
            // line 34
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.itemCounter", ["%count%" => ($context["checkoutItemCounter"] ?? null)]));
            echo "
                                </small>
                            </div>
                        ";
        }
        // line 38
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_component_offcanvas_cart_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_flashbags"));

        // line 43
        echo "                <div class=\"flashbags\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 44));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 45
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 45)->display(twig_array_merge($context, ["type" =>             // line 46
$context["type"], "list" =>             // line 47
$context["messages"]]));
            // line 49
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_component_offcanvas_cart_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_items"));

        // line 55
        echo "                    <div class=\"offcanvas-cart-items\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 56), "lineItems", [], "any", false, false, false, 56));
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
            // line 57
            echo "                            ";
            $this->displayBlock('component_offcanvas_cart_item', $context, $blocks);
            // line 60
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
        // line 61
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_component_offcanvas_cart_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item"));

        // line 58
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 58)->display($context);
        // line 59
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_component_offcanvas_cart_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_empty"));

        // line 65
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 65)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.emptyCart"))]));
        // line 69
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_component_offcanvas_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_summary"));

        // line 74
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 74)->display($context);
        // line 75
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_component_offcanvas_cart_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions"));

        // line 79
        echo "                <div class=\"offcanvas-cart-actions\">
                    ";
        // line 80
        $this->displayBlock('component_offcanvas_cart_actions_promotion', $context, $blocks);
        // line 133
        echo "
                    ";
        // line 134
        $this->displayBlock('component_offcanvas_cart_actions_checkout', $context, $blocks);
        // line 141
        echo "
                    ";
        // line 142
        $this->displayBlock('component_offcanvas_cart_actions_cart', $context, $blocks);
        // line 149
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_component_offcanvas_cart_actions_promotion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion"));

        // line 81
        echo "                        ";
        if (($context["isCartNotEmpty"] ?? null)) {
            // line 82
            echo "                            <div class=\"js-offcanvas-cart-promotion\">
                                ";
            // line 83
            $this->displayBlock('component_offcanvas_cart_actions_promotion_form', $context, $blocks);
            // line 130
            echo "                            </div>
                        ";
        }
        // line 132
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_component_offcanvas_cart_actions_promotion_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_form"));

        // line 84
        echo "                                    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.promotion.add");
        echo "\"
                                          class=\"offcanvas-cart-promotion-form js-offcanvas-cart-add-promotion\"
                                          method=\"post\">

                                        ";
        // line 88
        $this->displayBlock('component_offcanvas_cart_actions_promotion_form_csrf', $context, $blocks);
        // line 91
        echo "
                                        ";
        // line 92
        $this->displayBlock('component_offcanvas_cart_actions_promotion_redirect', $context, $blocks);
        // line 97
        echo "
                                        ";
        // line 98
        $this->displayBlock('component_offcanvas_cart_actions_promotion_input_group', $context, $blocks);
        // line 128
        echo "                                    </form>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_component_offcanvas_cart_actions_promotion_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_form_csrf"));

        // line 89
        echo "                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.promotion.add");
        echo "
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_component_offcanvas_cart_actions_promotion_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_redirect"));

        // line 93
        echo "                                            <input type=\"hidden\"
                                                   name=\"redirectTo\"
                                                   value=\"frontend.cart.offcanvas\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_component_offcanvas_cart_actions_promotion_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_input_group"));

        // line 99
        echo "                                            <div class=\"input-group\">
                                                ";
        // line 100
        $this->displayBlock('component_offcanvas_cart_actions_promotion_label', $context, $blocks);
        // line 105
        echo "
                                                ";
        // line 106
        $this->displayBlock('component_offcanvas_cart_actions_promotion_input', $context, $blocks);
        // line 116
        echo "
                                                ";
        // line 117
        $this->displayBlock('component_offcanvas_cart_actions_promotion_submit', $context, $blocks);
        // line 126
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_component_offcanvas_cart_actions_promotion_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_label"));

        // line 101
        echo "                                                    <label class=\"sr-only\" for=\"addPromotionOffcanvasCartInput\">
                                                        ";
        // line 102
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel"));
        echo "
                                                    </label>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_component_offcanvas_cart_actions_promotion_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_input"));

        // line 107
        echo "                                                    <input type=\"text\"
                                                           name=\"code\"
                                                           class=\"form-control\"
                                                           id=\"addPromotionOffcanvasCartInput\"
                                                           placeholder=\"";
        // line 111
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionPlaceholder")), "html", null, true);
        echo "\"
                                                           aria-label=\"";
        // line 112
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addPromotionLabel")), "html", null, true);
        echo "\"
                                                           aria-describedby=\"addPromotionOffcanvasCart\"
                                                           required=\"required\">
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_component_offcanvas_cart_actions_promotion_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_promotion_submit"));

        // line 118
        echo "                                                    <div class=\"input-group-append\">
                                                        <button class=\"btn btn-secondary\"
                                                                type=\"submit\"
                                                                id=\"addPromotionOffcanvasCart\">
                                                            ";
        // line 122
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 122);
        })())->display(twig_array_merge($context, ["name" => "checkmark"]));
        // line 123
        echo "                                                        </button>
                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_component_offcanvas_cart_actions_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_checkout"));

        // line 135
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.confirm.page");
        echo "\"
                           class=\"btn btn-block begin-checkout-btn";
        // line 136
        if (($context["isCartNotEmpty"] ?? null)) {
            echo " btn-primary";
        } else {
            echo " btn-light disabled";
        }
        echo "\"
                           title=\"";
        // line 137
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout")), "html", null, true);
        echo "\">
                            ";
        // line 138
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCheckout"));
        echo "
                        </a>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_component_offcanvas_cart_actions_cart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_actions_cart"));

        // line 143
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.cart.page");
        echo "\"
                           class=\"btn btn-block btn-link\"
                           title=\"";
        // line 145
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart")), "html", null, true);
        echo "\">
                            ";
        // line 146
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.proceedToCart"));
        echo "
                        </a>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 153
    public function block_component_offcanvas_cart_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_hidden_line_items_information"));

        // line 154
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", 154)->display(twig_array_merge($context, ["lineItems" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 155
($context["page"] ?? null), "cart", [], "any", false, false, false, 155), "lineItems", [], "any", false, false, false, 155)]));
        // line 157
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 157,  736 => 155,  734 => 154,  727 => 153,  717 => 146,  713 => 145,  707 => 143,  700 => 142,  690 => 138,  686 => 137,  678 => 136,  673 => 135,  666 => 134,  657 => 123,  649 => 122,  643 => 118,  636 => 117,  625 => 112,  621 => 111,  615 => 107,  608 => 106,  598 => 102,  595 => 101,  588 => 100,  580 => 126,  578 => 117,  575 => 116,  573 => 106,  570 => 105,  568 => 100,  565 => 99,  558 => 98,  548 => 93,  541 => 92,  531 => 89,  524 => 88,  516 => 128,  514 => 98,  511 => 97,  509 => 92,  506 => 91,  504 => 88,  496 => 84,  489 => 83,  482 => 132,  478 => 130,  476 => 83,  473 => 82,  470 => 81,  463 => 80,  455 => 149,  453 => 142,  450 => 141,  448 => 134,  445 => 133,  443 => 80,  440 => 79,  433 => 78,  426 => 75,  423 => 74,  416 => 73,  409 => 69,  406 => 65,  399 => 64,  392 => 59,  389 => 58,  382 => 57,  374 => 61,  360 => 60,  357 => 57,  340 => 56,  337 => 55,  330 => 54,  322 => 50,  308 => 49,  306 => 47,  305 => 46,  303 => 45,  286 => 44,  283 => 43,  276 => 42,  269 => 38,  262 => 34,  258 => 32,  255 => 31,  248 => 30,  240 => 39,  238 => 30,  235 => 29,  233 => 28,  227 => 25,  223 => 23,  216 => 22,  209 => 158,  207 => 153,  203 => 151,  201 => 78,  198 => 77,  195 => 76,  192 => 73,  190 => 72,  187 => 71,  184 => 70,  181 => 64,  178 => 63,  175 => 54,  173 => 53,  170 => 52,  168 => 42,  165 => 41,  163 => 22,  159 => 20,  156 => 19,  142 => 18,  135 => 17,  121 => 14,  114 => 13,  104 => 10,  97 => 9,  88 => 6,  85 => 5,  82 => 4,  75 => 3,  58 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_meta %}
    {% set isAjaxOffcanvas = true %}

    {{ parent() }}
{% endblock %}

{% block utilities_offcanvas_close_text %}
    {{ \"checkout.continueShopping\"|trans|sw_sanitize }}
{% endblock %}

{% block utilities_offcanvas_close_icon %}
    {% sw_icon 'arrow-head-left' style { 'size': 'sm' } %}
{% endblock %}

{% block utilities_offcanvas_content %}
    {% block component_offcanvas_cart %}
        {% set isCartNotEmpty = (page.cart.lineItems|length > 0) %}

        <div class=\"offcanvas-cart\">
            {% block component_offcanvas_cart_header %}
                <div class=\"row align-items-center h4 offcanvas-cart-header\">
                    <div class=\"col\">
                        {{ \"checkout.cartHeader\"|trans|sw_sanitize }}
                    </div>

                    {% set checkoutItemCounter = page.cart.lineItems|length %}

                    {% block component_offcanvas_cart_header_item_counter %}
                        {% if isCartNotEmpty %}
                            <div class=\"col-auto\">
                                <small class=\"offcanvas-cart-header-count\">
                                    {{ \"checkout.itemCounter\"|trans({'%count%': checkoutItemCounter})|sw_sanitize }}
                                </small>
                            </div>
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_offcanvas_cart_flashbags %}
                <div class=\"flashbags\">
                    {% for type, messages in app.flashes %}
                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                            type: type,
                            list: messages
                        } %}
                    {% endfor %}
                </div>
            {% endblock %}

            {% if isCartNotEmpty %}
                {% block component_offcanvas_cart_items %}
                    <div class=\"offcanvas-cart-items\">
                        {% for lineItem in page.cart.lineItems %}
                            {% block component_offcanvas_cart_item %}
                                {% sw_include '@Storefront/storefront/component/checkout/offcanvas-item.html.twig' %}
                            {% endblock %}
                        {% endfor %}
                    </div>
                {% endblock %}
            {% else %}
                {% block component_offcanvas_cart_empty %}
                    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                        type: \"info\",
                        content: \"checkout.emptyCart\"|trans|sw_sanitize
                    } %}
                {% endblock %}
            {% endif %}

            {% if isCartNotEmpty %}
                {% block component_offcanvas_summary %}
                    {% sw_include '@Storefront/storefront/component/checkout/offcanvas-cart-summary.html.twig' %}
                {% endblock %}
            {% endif %}

            {% block component_offcanvas_cart_actions %}
                <div class=\"offcanvas-cart-actions\">
                    {% block component_offcanvas_cart_actions_promotion %}
                        {% if isCartNotEmpty %}
                            <div class=\"js-offcanvas-cart-promotion\">
                                {% block component_offcanvas_cart_actions_promotion_form %}
                                    <form action=\"{{ path('frontend.checkout.promotion.add') }}\"
                                          class=\"offcanvas-cart-promotion-form js-offcanvas-cart-add-promotion\"
                                          method=\"post\">

                                        {% block component_offcanvas_cart_actions_promotion_form_csrf %}
                                            {{ sw_csrf('frontend.checkout.promotion.add') }}
                                        {% endblock %}

                                        {% block component_offcanvas_cart_actions_promotion_redirect %}
                                            <input type=\"hidden\"
                                                   name=\"redirectTo\"
                                                   value=\"frontend.cart.offcanvas\">
                                        {% endblock %}

                                        {% block component_offcanvas_cart_actions_promotion_input_group %}
                                            <div class=\"input-group\">
                                                {% block component_offcanvas_cart_actions_promotion_label %}
                                                    <label class=\"sr-only\" for=\"addPromotionOffcanvasCartInput\">
                                                        {{ \"checkout.addPromotionLabel\"|trans|sw_sanitize }}
                                                    </label>
                                                {% endblock %}

                                                {% block component_offcanvas_cart_actions_promotion_input %}
                                                    <input type=\"text\"
                                                           name=\"code\"
                                                           class=\"form-control\"
                                                           id=\"addPromotionOffcanvasCartInput\"
                                                           placeholder=\"{{ \"checkout.addPromotionPlaceholder\"|trans|striptags }}\"
                                                           aria-label=\"{{ \"checkout.addPromotionLabel\"|trans|striptags }}\"
                                                           aria-describedby=\"addPromotionOffcanvasCart\"
                                                           required=\"required\">
                                                {% endblock %}

                                                {% block component_offcanvas_cart_actions_promotion_submit %}
                                                    <div class=\"input-group-append\">
                                                        <button class=\"btn btn-secondary\"
                                                                type=\"submit\"
                                                                id=\"addPromotionOffcanvasCart\">
                                                            {% sw_icon 'checkmark' %}
                                                        </button>
                                                    </div>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </form>
                                {% endblock %}
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block component_offcanvas_cart_actions_checkout %}
                        <a href=\"{{ path('frontend.checkout.confirm.page') }}\"
                           class=\"btn btn-block begin-checkout-btn{% if isCartNotEmpty %} btn-primary{% else %} btn-light disabled{% endif %}\"
                           title=\"{{ \"checkout.proceedToCheckout\"|trans|striptags }}\">
                            {{ \"checkout.proceedToCheckout\"|trans|sw_sanitize }}
                        </a>
                    {% endblock %}

                    {% block component_offcanvas_cart_actions_cart %}
                        <a href=\"{{ path('frontend.checkout.cart.page') }}\"
                           class=\"btn btn-block btn-link\"
                           title=\"{{ \"checkout.proceedToCart\"|trans|striptags }}\">
                            {{ \"checkout.proceedToCart\"|trans|sw_sanitize }}
                        </a>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>

        {% block component_offcanvas_cart_hidden_line_items_information %}
            {% sw_include '@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig' with {
                lineItems: page.cart.lineItems
            } %}
        {% endblock %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/checkout/offcanvas-cart.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/checkout/offcanvas-cart.html.twig");
    }
}
