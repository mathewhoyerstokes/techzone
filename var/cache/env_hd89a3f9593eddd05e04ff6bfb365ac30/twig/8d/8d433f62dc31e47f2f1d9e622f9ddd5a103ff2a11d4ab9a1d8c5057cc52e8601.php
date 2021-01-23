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

/* @Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig */
class __TwigTemplate_2f1553bce22554620b83ae2adfd669cbfb6ec6d59c0e200e5cd30030fe024b80 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_confirm_shipping_inner' => [$this, 'block_page_checkout_confirm_shipping_inner'],
            'page_checkout_confirm_shipping_title' => [$this, 'block_page_checkout_confirm_shipping_title'],
            'page_checkout_confirm_shipping_current' => [$this, 'block_page_checkout_confirm_shipping_current'],
            'page_checkout_confirm_shipping_current_image' => [$this, 'block_page_checkout_confirm_shipping_current_image'],
            'page_checkout_confirm_shipping_current_text' => [$this, 'block_page_checkout_confirm_shipping_current_text'],
            'page_checkout_confirm_shipping_invalid_tooltip' => [$this, 'block_page_checkout_confirm_shipping_invalid_tooltip'],
            'page_checkout_confirm_shipping_modal_toggle' => [$this, 'block_page_checkout_confirm_shipping_modal_toggle'],
            'page_checkout_confirm_shipping_modal' => [$this, 'block_page_checkout_confirm_shipping_modal'],
            'page_checkout_confirm_shipping_form' => [$this, 'block_page_checkout_confirm_shipping_form'],
            'page_checkout_confirm_shipping_form_csrf' => [$this, 'block_page_checkout_confirm_shipping_form_csrf'],
            'page_checkout_confirm_shipping_form_redirect' => [$this, 'block_page_checkout_confirm_shipping_form_redirect'],
            'page_checkout_confirm_shipping_form_fields' => [$this, 'block_page_checkout_confirm_shipping_form_fields'],
            'page_checkout_confirm_shipping_form_field' => [$this, 'block_page_checkout_confirm_shipping_form_field'],
            'page_checkout_confirm_shipping_form_control' => [$this, 'block_page_checkout_confirm_shipping_form_control'],
            'page_checkout_confirm_shipping_form_input' => [$this, 'block_page_checkout_confirm_shipping_form_input'],
            'page_checkout_confirm_shipping_form_label' => [$this, 'block_page_checkout_confirm_shipping_form_label'],
            'page_checkout_confirm_shipping_form_image' => [$this, 'block_page_checkout_confirm_shipping_form_image'],
            'page_checkout_confirm_shipping_form_description' => [$this, 'block_page_checkout_confirm_shipping_form_description'],
            'page_checkout_confirm_shipping_form_submit' => [$this, 'block_page_checkout_confirm_shipping_form_submit'],
            'page_checkout_confirm_shipping_cancel' => [$this, 'block_page_checkout_confirm_shipping_cancel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_confirm_shipping_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_confirm_shipping_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_inner"));

        // line 2
        echo "    <div class=\"card checkout-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $context["shippingMethodInvalid"] = true;
        // line 5
        echo "
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 7
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 7) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7))) {
                // line 8
                echo "                    ";
                $context["shippingMethodInvalid"] = false;
                // line 9
                echo "                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_checkout_confirm_shipping_title', $context, $blocks);
        // line 17
        echo "
            ";
        // line 19
        echo "            ";
        // line 20
        echo "            ";
        $this->displayBlock('page_checkout_confirm_shipping_current', $context, $blocks);
        // line 55
        echo "
            ";
        // line 57
        echo "            ";
        $this->displayBlock('page_checkout_confirm_shipping_modal_toggle', $context, $blocks);
        // line 71
        echo "
            ";
        // line 73
        echo "            ";
        $this->displayBlock('page_checkout_confirm_shipping_modal', $context, $blocks);
        // line 202
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_checkout_confirm_shipping_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_title"));

        // line 13
        echo "                <div class=\"card-title\">
                    ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmShippingMethod"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_checkout_confirm_shipping_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_current"));

        // line 21
        echo "                <p class=\"confirm-shipping-current\">

                    ";
        // line 24
        echo "                    ";
        $this->displayBlock('page_checkout_confirm_shipping_current_image', $context, $blocks);
        // line 39
        echo "
                    ";
        // line 41
        echo "                    ";
        $this->displayBlock('page_checkout_confirm_shipping_current_text', $context, $blocks);
        // line 50
        echo "
                    ";
        // line 52
        echo "                    ";
        $this->displayBlock('page_checkout_confirm_shipping_invalid_tooltip', $context, $blocks);
        // line 53
        echo "                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_checkout_confirm_shipping_current_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_current_image"));

        // line 25
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 25), "media", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig", 26);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 27), "media", [], "any", false, false, false, 27), "sizes" => ["default" => "100px"], "attributes" => ["class" => "confirm-shipping-method-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 33), "media", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 33), "media", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 34), "media", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 34), "media", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34)))], "name" => "confirm-shipping-current-image-thumbnails"]));
            // line 37
            echo "                        ";
        }
        // line 38
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_page_checkout_confirm_shipping_current_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_current_text"));

        // line 42
        echo "                        <strong>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmCurrentPaymentShipping"));
        echo "</strong>

                        ";
        // line 44
        if (($context["shippingMethodInvalid"] ?? null)) {
            // line 45
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmSelectionNone"));
            echo "
                        ";
        } else {
            // line 47
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 47), "translated", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "
                        ";
        }
        // line 49
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_page_checkout_confirm_shipping_invalid_tooltip($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_invalid_tooltip"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_page_checkout_confirm_shipping_modal_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_modal_toggle"));

        // line 58
        echo "                <button type=\"button\"
                        class=\"btn btn-light\"
                        data-toggle=\"modal\"
                        data-backdrop=\"static\"
                        data-target=\"#confirmShippingModal\">

                    ";
        // line 64
        if (($context["shippingMethodInvalid"] ?? null)) {
            // line 65
            echo "                        ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChooseShipping"));
            echo "
                    ";
        } else {
            // line 67
            echo "                        ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangeShipping"));
            echo "
                    ";
        }
        // line 69
        echo "                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_page_checkout_confirm_shipping_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_modal"));

        // line 74
        echo "                <div class=\"modal fade confirm-shipping-modal\"
                     id=\"confirmShippingModal\"
                     tabindex=\"-1\"
                     role=\"dialog\">
                    <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\"
                         role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <div class=\"modal-title h5\">
                                    ";
        // line 83
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangeShipping"));
        echo "
                                </div>
                                <button type=\"button\"
                                        class=\"modal-close close\"
                                        data-dismiss=\"modal\"
                                        aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        ";
        // line 90
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig", 90);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 91
        echo "                                    </span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                ";
        // line 97
        echo "                                ";
        $this->displayBlock('page_checkout_confirm_shipping_form', $context, $blocks);
        // line 197
        echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_page_checkout_confirm_shipping_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form"));

        // line 98
        echo "                                    <form id=\"confirmShippingForm\"
                                          name=\"confirmShippingForm\"
                                          action=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                                          data-form-csrf-handler=\"true\"
                                          method=\"post\">

                                        ";
        // line 104
        $this->displayBlock('page_checkout_confirm_shipping_form_csrf', $context, $blocks);
        // line 107
        echo "
                                        ";
        // line 108
        $this->displayBlock('page_checkout_confirm_shipping_form_redirect', $context, $blocks);
        // line 111
        echo "
                                        ";
        // line 113
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_shipping_form_fields', $context, $blocks);
        // line 178
        echo "
                                        ";
        // line 180
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_shipping_form_submit', $context, $blocks);
        // line 185
        echo "
                                        ";
        // line 187
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_shipping_cancel', $context, $blocks);
        // line 195
        echo "                                    </form>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_page_checkout_confirm_shipping_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_csrf"));

        // line 105
        echo "                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_page_checkout_confirm_shipping_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_redirect"));

        // line 109
        echo "                                            <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.checkout.confirm.page\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_page_checkout_confirm_shipping_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_fields"));

        // line 114
        echo "                                            <div class=\"confirm-shipping-fields\">
                                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "shippingMethods", [], "any", false, false, false, 115));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 116
            echo "                                                    <div class=\"confirm-shipping-method\">

                                                        ";
            // line 119
            echo "                                                        ";
            // line 120
            echo "                                                        ";
            $this->displayBlock('page_checkout_confirm_shipping_form_field', $context, $blocks);
            // line 174
            echo "                                                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 120
    public function block_page_checkout_confirm_shipping_form_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_field"));

        // line 121
        echo "                                                            <div class=\"form-group checkout-config-form-group\">

                                                                ";
        // line 124
        echo "                                                                ";
        $this->displayBlock('page_checkout_confirm_shipping_form_control', $context, $blocks);
        // line 172
        echo "                                                            </div>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_page_checkout_confirm_shipping_form_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_control"));

        // line 125
        echo "                                                                    <div class=\"custom-control custom-radio confirm-shipping-method-radio\">

                                                                        ";
        // line 128
        echo "                                                                        ";
        $this->displayBlock('page_checkout_confirm_shipping_form_input', $context, $blocks);
        // line 136
        echo "
                                                                        ";
        // line 138
        echo "                                                                        ";
        $this->displayBlock('page_checkout_confirm_shipping_form_label', $context, $blocks);
        // line 170
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_page_checkout_confirm_shipping_form_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_input"));

        // line 129
        echo "                                                                            <input type=\"radio\"
                                                                                   id=\"shippingMethod";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 130), "html", null, true);
        echo "\"
                                                                                   name=\"shippingMethodId\"
                                                                                   value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 132), "html", null, true);
        echo "\"
                                                                                   ";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "id", [], "any", false, false, false, 133) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "shippingMethod", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133))) {
            echo "checked=\"checked\"";
        }
        // line 134
        echo "                                                                                   class=\"custom-control-input shipping-method-input\">
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 138
    public function block_page_checkout_confirm_shipping_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_label"));

        // line 139
        echo "                                                                            <label class=\"custom-control-label shipping-method-label\"
                                                                                   for=\"shippingMethod";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 140), "html", null, true);
        echo "\">

                                                                                ";
        // line 143
        echo "                                                                                ";
        $this->displayBlock('page_checkout_confirm_shipping_form_image', $context, $blocks);
        // line 158
        echo "
                                                                                ";
        // line 160
        echo "                                                                                ";
        $this->displayBlock('page_checkout_confirm_shipping_form_description', $context, $blocks);
        // line 168
        echo "                                                                            </label>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_page_checkout_confirm_shipping_form_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_image"));

        // line 144
        echo "                                                                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "media", [], "any", false, false, false, 144)) {
            // line 145
            echo "                                                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig", 145);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 146
($context["shipping"] ?? null), "media", [], "any", false, false, false, 146), "sizes" => ["default" => "100px"], "attributes" => ["class" => "confirm-shipping-method-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 152
($context["shipping"] ?? null), "media", [], "any", false, false, false, 152), "translated", [], "any", false, false, false, 152), "alt", [], "any", false, false, false, 152)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "media", [], "any", false, false, false, 152), "translated", [], "any", false, false, false, 152), "alt", [], "any", false, false, false, 152)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 152), "name", [], "any", false, false, false, 152))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 153
($context["shipping"] ?? null), "media", [], "any", false, false, false, 153), "translated", [], "any", false, false, false, 153), "title", [], "any", false, false, false, 153)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "media", [], "any", false, false, false, 153), "translated", [], "any", false, false, false, 153), "title", [], "any", false, false, false, 153)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153)))], "name" => "confirm-shipping-image-thumbnails"]));
            // line 156
            echo "                                                                                    ";
        }
        // line 157
        echo "                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 160
    public function block_page_checkout_confirm_shipping_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_description"));

        // line 161
        echo "                                                                                    <div class=\"shipping-method-description\">
                                                                                        <strong>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
        echo "</strong>
                                                                                        ";
        // line 163
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 163), "description", [], "any", false, false, false, 163)) {
            // line 164
            echo "                                                                                            <p>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "translated", [], "any", false, false, false, 164), "description", [], "any", false, false, false, 164);
            echo "</p>
                                                                                        ";
        }
        // line 166
        echo "                                                                                    </div>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 180
    public function block_page_checkout_confirm_shipping_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_form_submit"));

        // line 181
        echo "                                            <button class=\"btn btn-primary\" type=\"submit\">
                                                ";
        // line 182
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangePaymentShippingSave"));
        echo "
                                            </button>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 187
    public function block_page_checkout_confirm_shipping_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping_cancel"));

        // line 188
        echo "                                            <button class=\"btn btn-light\"
                                                    type=\"button\"
                                                    data-dismiss=\"modal\"
                                                    aria-label=\"Close\">
                                                ";
        // line 192
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangePaymentShippingCancel"));
        echo "
                                            </button>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  711 => 192,  705 => 188,  698 => 187,  688 => 182,  685 => 181,  678 => 180,  670 => 166,  664 => 164,  662 => 163,  658 => 162,  655 => 161,  648 => 160,  641 => 157,  638 => 156,  636 => 153,  635 => 152,  634 => 146,  626 => 145,  623 => 144,  616 => 143,  608 => 168,  605 => 160,  602 => 158,  599 => 143,  594 => 140,  591 => 139,  584 => 138,  576 => 134,  572 => 133,  568 => 132,  563 => 130,  560 => 129,  553 => 128,  545 => 170,  542 => 138,  539 => 136,  536 => 128,  532 => 125,  525 => 124,  517 => 172,  514 => 124,  510 => 121,  503 => 120,  495 => 176,  480 => 174,  477 => 120,  475 => 119,  471 => 116,  454 => 115,  451 => 114,  444 => 113,  436 => 109,  429 => 108,  419 => 105,  412 => 104,  404 => 195,  401 => 187,  398 => 185,  395 => 180,  392 => 178,  389 => 113,  386 => 111,  384 => 108,  381 => 107,  379 => 104,  372 => 100,  368 => 98,  361 => 97,  350 => 197,  347 => 97,  340 => 91,  332 => 90,  322 => 83,  311 => 74,  304 => 73,  296 => 69,  290 => 67,  284 => 65,  282 => 64,  274 => 58,  267 => 57,  255 => 52,  248 => 49,  242 => 47,  236 => 45,  234 => 44,  228 => 42,  221 => 41,  214 => 38,  211 => 37,  209 => 34,  208 => 33,  207 => 27,  199 => 26,  196 => 25,  189 => 24,  181 => 53,  178 => 52,  175 => 50,  172 => 41,  169 => 39,  166 => 24,  162 => 21,  155 => 20,  145 => 14,  142 => 13,  135 => 12,  126 => 202,  123 => 73,  120 => 71,  117 => 57,  114 => 55,  111 => 20,  109 => 19,  106 => 17,  104 => 12,  101 => 11,  95 => 10,  92 => 9,  89 => 8,  86 => 7,  82 => 6,  79 => 5,  77 => 4,  73 => 2,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_confirm_shipping_inner %}
    <div class=\"card checkout-card\">
        <div class=\"card-body\">
            {% set shippingMethodInvalid = true %}

            {% for shipping in page.shippingMethods %}
                {% if shipping.id is same as(context.shippingMethod.id) %}
                    {% set shippingMethodInvalid = false %}
                {% endif %}
            {% endfor %}

            {% block page_checkout_confirm_shipping_title %}
                <div class=\"card-title\">
                    {{ \"checkout.confirmShippingMethod\"|trans|sw_sanitize }}
                </div>
            {% endblock %}

            {# @deprecated tag:v6.4.0.0 renamed to page_checkout_confirm_shipping_form #}
            {# will include new component/shipping/shipping-form.html.twig in v6.4.0.0 #}
            {% block page_checkout_confirm_shipping_current %}
                <p class=\"confirm-shipping-current\">

                    {# @deprecated tag:v6.4.0.0 removed #}
                    {% block page_checkout_confirm_shipping_current_image %}
                        {% if context.shippingMethod.media %}
                            {% sw_thumbnails 'confirm-shipping-current-image-thumbnails' with {
                                media: context.shippingMethod.media,
                                sizes: {
                                    'default': '100px'
                                },
                                attributes: {
                                    'class': 'confirm-shipping-method-image',
                                    'alt': (context.shippingMethod.media.translated.alt ?: context.shippingMethod.translated.name),
                                    'title': (context.shippingMethod.media.translated.title ?: context.shippingMethod.translated.name)
                                }
                            } %}
                        {% endif %}
                    {% endblock %}

                    {# @deprecated tag:v6.4.0.0 removed #}
                    {% block page_checkout_confirm_shipping_current_text %}
                        <strong>{{ \"checkout.confirmCurrentPaymentShipping\"|trans|sw_sanitize }}</strong>

                        {% if shippingMethodInvalid %}
                            {{ \"checkout.confirmSelectionNone\"|trans|sw_sanitize }}
                        {% else %}
                            {{ context.shippingMethod.translated.name }}
                        {% endif %}
                    {% endblock %}

                    {# @deprecated tag:v6.4.0.0 removed #}
                    {% block page_checkout_confirm_shipping_invalid_tooltip %}{% endblock %}
                </p>
            {% endblock %}

            {# @deprecated tag:v6.4.0.0 removed #}
            {% block page_checkout_confirm_shipping_modal_toggle %}
                <button type=\"button\"
                        class=\"btn btn-light\"
                        data-toggle=\"modal\"
                        data-backdrop=\"static\"
                        data-target=\"#confirmShippingModal\">

                    {% if shippingMethodInvalid %}
                        {{ \"checkout.confirmChooseShipping\"|trans|sw_sanitize }}
                    {% else %}
                        {{ \"checkout.confirmChangeShipping\"|trans|sw_sanitize }}
                    {% endif %}
                </button>
            {% endblock %}

            {# @deprecated tag:v6.4.0.0 removed this parent block, but most of the child blocks will be moved to new files #}
            {% block page_checkout_confirm_shipping_modal %}
                <div class=\"modal fade confirm-shipping-modal\"
                     id=\"confirmShippingModal\"
                     tabindex=\"-1\"
                     role=\"dialog\">
                    <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\"
                         role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <div class=\"modal-title h5\">
                                    {{ \"checkout.confirmChangeShipping\"|trans|sw_sanitize }}
                                </div>
                                <button type=\"button\"
                                        class=\"modal-close close\"
                                        data-dismiss=\"modal\"
                                        aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        {% sw_icon 'x' style { 'size': 'sm' } %}
                                    </span>
                                </button>
                            </div>
                            <div class=\"modal-body\">

                                {# @deprecated tag:v6.4.0.0 content moved to new component/shipping/shipping_form.html.twig #}
                                {% block page_checkout_confirm_shipping_form %}
                                    <form id=\"confirmShippingForm\"
                                          name=\"confirmShippingForm\"
                                          action=\"{{ path('frontend.checkout.configure') }}\"
                                          data-form-csrf-handler=\"true\"
                                          method=\"post\">

                                        {% block page_checkout_confirm_shipping_form_csrf %}
                                            {{ sw_csrf('frontend.checkout.configure') }}
                                        {% endblock %}

                                        {% block page_checkout_confirm_shipping_form_redirect %}
                                            <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.checkout.confirm.page\">
                                        {% endblock %}

                                        {# @deprecated tag:v6.4.0.0 content moved to new component/shipping/shipping-fields.html.twig #}
                                        {% block page_checkout_confirm_shipping_form_fields %}
                                            <div class=\"confirm-shipping-fields\">
                                                {% for shipping in page.shippingMethods %}
                                                    <div class=\"confirm-shipping-method\">

                                                        {# @deprecated tag:v6.4.0.0 content moved to new component/shipping/shipping-method.html.twig #}
                                                        {# @deprecated tag:v6.4.0.0 renamed to component_shipping_method_field #}
                                                        {% block page_checkout_confirm_shipping_form_field %}
                                                            <div class=\"form-group checkout-config-form-group\">

                                                                {# @deprecated tag:v6.4.0.0 renamed to component_shipping_method_control #}
                                                                {% block page_checkout_confirm_shipping_form_control %}
                                                                    <div class=\"custom-control custom-radio confirm-shipping-method-radio\">

                                                                        {# @deprecated tag:v6.4.0.0 renamed to component_shipping_method_input #}
                                                                        {% block page_checkout_confirm_shipping_form_input %}
                                                                            <input type=\"radio\"
                                                                                   id=\"shippingMethod{{ loop.index }}\"
                                                                                   name=\"shippingMethodId\"
                                                                                   value=\"{{ shipping.id }}\"
                                                                                   {% if shipping.id is same as(context.shippingMethod.id) %}checked=\"checked\"{% endif %}
                                                                                   class=\"custom-control-input shipping-method-input\">
                                                                        {% endblock %}

                                                                        {# @deprecated tag:v6.4.0.0 renamed to component_shipping_method_label #}
                                                                        {% block page_checkout_confirm_shipping_form_label %}
                                                                            <label class=\"custom-control-label shipping-method-label\"
                                                                                   for=\"shippingMethod{{ loop.index }}\">

                                                                                {# @deprecated tag:v6.4.0.0 renamed to component_shipping_form_image #}
                                                                                {% block page_checkout_confirm_shipping_form_image %}
                                                                                    {% if shipping.media %}
                                                                                        {% sw_thumbnails 'confirm-shipping-image-thumbnails' with {
                                                                                            media: shipping.media,
                                                                                            sizes: {
                                                                                                'default': '100px'
                                                                                            },
                                                                                            attributes: {
                                                                                                'class': 'confirm-shipping-method-image',
                                                                                                'alt': (shipping.media.translated.alt ?: shipping.translated.name),
                                                                                                'title': (shipping.media.translated.title ?: shipping.translated.name)
                                                                                            }
                                                                                        } %}
                                                                                    {% endif %}
                                                                                {% endblock %}

                                                                                {# @deprecated tag:v6.4.0.0 renamed to component_shipping_method_description #}
                                                                                {% block page_checkout_confirm_shipping_form_description %}
                                                                                    <div class=\"shipping-method-description\">
                                                                                        <strong>{{ shipping.translated.name }}</strong>
                                                                                        {% if shipping.translated.description %}
                                                                                            <p>{{ shipping.translated.description|raw }}</p>
                                                                                        {% endif %}
                                                                                    </div>
                                                                                {% endblock %}
                                                                            </label>
                                                                        {% endblock %}
                                                                    </div>
                                                                {% endblock %}
                                                            </div>
                                                        {% endblock %}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                        {% endblock %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_shipping_form_submit %}
                                            <button class=\"btn btn-primary\" type=\"submit\">
                                                {{ \"checkout.confirmChangePaymentShippingSave\"|trans|sw_sanitize }}
                                            </button>
                                        {% endblock %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_shipping_cancel %}
                                            <button class=\"btn btn-light\"
                                                    type=\"button\"
                                                    data-dismiss=\"modal\"
                                                    aria-label=\"Close\">
                                                {{ \"checkout.confirmChangePaymentShippingCancel\"|trans|sw_sanitize }}
                                            </button>
                                        {% endblock %}
                                    </form>
                                {% endblock %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-shipping.html.twig");
    }
}
