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

/* @Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig */
class __TwigTemplate_cf6329d9f6476fbc6c4cb1c71191b8a5428fd42746c3adabbf0963471a6dd59c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_confirm_payment_inner' => [$this, 'block_page_checkout_confirm_payment_inner'],
            'page_checkout_confirm_payment_title' => [$this, 'block_page_checkout_confirm_payment_title'],
            'page_checkout_confirm_payment_current' => [$this, 'block_page_checkout_confirm_payment_current'],
            'page_checkout_confirm_payment_current_image' => [$this, 'block_page_checkout_confirm_payment_current_image'],
            'page_checkout_confirm_payment_current_text' => [$this, 'block_page_checkout_confirm_payment_current_text'],
            'page_checkout_confirm_payment_invalid_tooltip' => [$this, 'block_page_checkout_confirm_payment_invalid_tooltip'],
            'page_checkout_confirm_payment_modal_toggle' => [$this, 'block_page_checkout_confirm_payment_modal_toggle'],
            'page_checkout_confirm_payment_modal' => [$this, 'block_page_checkout_confirm_payment_modal'],
            'page_checkout_confirm_payment_modal_body' => [$this, 'block_page_checkout_confirm_payment_modal_body'],
            'page_checkout_confirm_payment_form' => [$this, 'block_page_checkout_confirm_payment_form'],
            'page_checkout_confirm_payment_form_csrf' => [$this, 'block_page_checkout_confirm_payment_form_csrf'],
            'page_checkout_confirm_payment_form_redirect' => [$this, 'block_page_checkout_confirm_payment_form_redirect'],
            'page_checkout_confirm_payment_form_fields' => [$this, 'block_page_checkout_confirm_payment_form_fields'],
            'page_checkout_confirm_payment_form_submit' => [$this, 'block_page_checkout_confirm_payment_form_submit'],
            'page_checkout_confirm_payment_cancel' => [$this, 'block_page_checkout_confirm_payment_cancel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_confirm_payment_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_confirm_payment_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_inner"));

        // line 2
        echo "    <div class=\"card checkout-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $context["paymentMethodInvalid"] = true;
        // line 5
        echo "
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 7
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 7) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7))) {
                // line 8
                echo "                    ";
                $context["paymentMethodInvalid"] = false;
                // line 9
                echo "                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_checkout_confirm_payment_title', $context, $blocks);
        // line 17
        echo "
            ";
        // line 19
        echo "            ";
        // line 20
        echo "            ";
        $this->displayBlock('page_checkout_confirm_payment_current', $context, $blocks);
        // line 56
        echo "
            ";
        // line 58
        echo "            ";
        $this->displayBlock('page_checkout_confirm_payment_modal_toggle', $context, $blocks);
        // line 75
        echo "
            ";
        // line 77
        echo "            ";
        $this->displayBlock('page_checkout_confirm_payment_modal', $context, $blocks);
        // line 129
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_checkout_confirm_payment_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_title"));

        // line 13
        echo "                <div class=\"card-title\">
                    ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmPaymentMethod"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_checkout_confirm_payment_current($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_current"));

        // line 21
        echo "                <p class=\"confirm-payment-current\">

                    ";
        // line 24
        echo "                    ";
        $this->displayBlock('page_checkout_confirm_payment_current_image', $context, $blocks);
        // line 39
        echo "
                    ";
        // line 41
        echo "                    ";
        $this->displayBlock('page_checkout_confirm_payment_current_text', $context, $blocks);
        // line 54
        echo "                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_checkout_confirm_payment_current_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_current_image"));

        // line 25
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 25), "media", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", 26);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 27), "media", [], "any", false, false, false, 27), "sizes" => ["default" => "100px"], "attributes" => ["class" => "payment-method-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 33), "media", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 33), "media", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 34), "media", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 34), "media", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34)))], "name" => "confirm-payment-current-image-thumbnails"]));
            // line 37
            echo "                        ";
        }
        // line 38
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_page_checkout_confirm_payment_current_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_current_text"));

        // line 42
        echo "                        <strong>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmCurrentPaymentShipping"));
        echo "</strong>

                        ";
        // line 45
        echo "                        ";
        $this->displayBlock('page_checkout_confirm_payment_invalid_tooltip', $context, $blocks);
        // line 46
        echo "
                        ";
        // line 47
        if (($context["paymentMethodInvalid"] ?? null)) {
            // line 48
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmSelectionNone"));
            echo "
                        ";
        } else {
            // line 50
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 50), "translated", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "
                        ";
        }
        // line 52
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_page_checkout_confirm_payment_invalid_tooltip($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_invalid_tooltip"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_page_checkout_confirm_payment_modal_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_modal_toggle"));

        // line 59
        echo "                <button type=\"button\"
                        class=\"btn btn-light\"
                        data-toggle=\"modal\"
                        data-backdrop=\"static\"
                        ";
        // line 63
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentChangeable", [], "any", false, false, false, 63)) && (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentChangeable", [], "any", false, false, false, 63) == false))) {
            // line 64
            echo "                            disabled=\"disabled\"
                        ";
        }
        // line 66
        echo "                        data-target=\"#confirmPaymentModal\">

                    ";
        // line 68
        if (($context["paymentMethodInvalid"] ?? null)) {
            // line 69
            echo "                        ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChoosePayment"));
            echo "
                    ";
        } else {
            // line 71
            echo "                        ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangePayment"));
            echo "
                    ";
        }
        // line 73
        echo "                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_page_checkout_confirm_payment_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_modal"));

        // line 78
        echo "                <div class=\"modal fade confirm-payment-modal\"
                     id=\"confirmPaymentModal\"
                     tabindex=\"-1\"
                     role=\"dialog\">
                    <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\"
                         role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <div class=\"modal-title h5\">
                                    ";
        // line 87
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangePayment"));
        echo "
                                </div>
                                <button type=\"button\"
                                        class=\"modal-close close\"
                                        data-dismiss=\"modal\"
                                        aria-label=\"Close\">
                                    <span aria-hidden=\"true\">
                                        ";
        // line 94
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", 94);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 95
        echo "                                    </span>
                                </button>
                            </div>

                            ";
        // line 100
        echo "                            ";
        $this->displayBlock('page_checkout_confirm_payment_modal_body', $context, $blocks);
        // line 125
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_page_checkout_confirm_payment_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_modal_body"));

        // line 101
        echo "                                <div class=\"modal-body\">

                                    ";
        // line 104
        echo "                                    ";
        $this->displayBlock('page_checkout_confirm_payment_form', $context, $blocks);
        // line 121
        echo "
                                    ";
        // line 122
        $this->loadTemplate("@Storefront/storefront/page/checkout/change-payment-modal.html.twig", "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", 122)->display(twig_array_merge($context, ["redirect" => "frontend.checkout.confirm.page", "action" => "frontend.checkout.configure"]));
        // line 123
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_page_checkout_confirm_payment_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_form"));

        // line 105
        echo "
                                        ";
        // line 107
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_payment_form_csrf', $context, $blocks);
        // line 108
        echo "
                                        ";
        // line 110
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_payment_form_redirect', $context, $blocks);
        // line 111
        echo "
                                        ";
        // line 113
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_payment_form_fields', $context, $blocks);
        // line 114
        echo "
                                        ";
        // line 116
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_payment_form_submit', $context, $blocks);
        // line 117
        echo "
                                        ";
        // line 119
        echo "                                        ";
        $this->displayBlock('page_checkout_confirm_payment_cancel', $context, $blocks);
        // line 120
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_page_checkout_confirm_payment_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_form_csrf"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_page_checkout_confirm_payment_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_form_redirect"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_page_checkout_confirm_payment_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_form_fields"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_page_checkout_confirm_payment_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_form_submit"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_page_checkout_confirm_payment_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_cancel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  482 => 119,  470 => 116,  458 => 113,  446 => 110,  434 => 107,  427 => 120,  424 => 119,  421 => 117,  418 => 116,  415 => 114,  412 => 113,  409 => 111,  406 => 110,  403 => 108,  400 => 107,  397 => 105,  390 => 104,  382 => 123,  380 => 122,  377 => 121,  374 => 104,  370 => 101,  363 => 100,  353 => 125,  350 => 100,  344 => 95,  336 => 94,  326 => 87,  315 => 78,  308 => 77,  300 => 73,  294 => 71,  288 => 69,  286 => 68,  282 => 66,  278 => 64,  276 => 63,  270 => 59,  263 => 58,  251 => 45,  243 => 52,  237 => 50,  231 => 48,  229 => 47,  226 => 46,  223 => 45,  217 => 42,  210 => 41,  203 => 38,  200 => 37,  198 => 34,  197 => 33,  196 => 27,  188 => 26,  185 => 25,  178 => 24,  170 => 54,  167 => 41,  164 => 39,  161 => 24,  157 => 21,  150 => 20,  140 => 14,  137 => 13,  130 => 12,  121 => 129,  118 => 77,  115 => 75,  112 => 58,  109 => 56,  106 => 20,  104 => 19,  101 => 17,  99 => 12,  96 => 11,  90 => 10,  87 => 9,  84 => 8,  81 => 7,  77 => 6,  74 => 5,  72 => 4,  68 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_confirm_payment_inner %}
    <div class=\"card checkout-card\">
        <div class=\"card-body\">
            {% set paymentMethodInvalid = true %}

            {% for payment in page.paymentMethods %}
                {% if payment.id is same as(context.paymentMethod.id) %}
                    {% set paymentMethodInvalid = false %}
                {% endif %}
            {% endfor %}

            {% block page_checkout_confirm_payment_title %}
                <div class=\"card-title\">
                    {{ \"checkout.confirmPaymentMethod\"|trans|sw_sanitize }}
                </div>
            {% endblock %}

            {# @deprecated tag:v6.4.0.0 renamed to page_checkout_change_payment_form #}
            {# will include new component/payment/payment-form.html.twig in v6.4.0.0 #}
            {% block page_checkout_confirm_payment_current %}
                <p class=\"confirm-payment-current\">

                    {# @deprecated tag:v6.4.0.0 removed #}
                    {% block page_checkout_confirm_payment_current_image %}
                        {% if context.paymentMethod.media %}
                            {% sw_thumbnails 'confirm-payment-current-image-thumbnails' with {
                                media: context.paymentMethod.media,
                                sizes: {
                                    'default': '100px'
                                },
                                attributes: {
                                    'class': 'payment-method-image',
                                    'alt': (context.paymentMethod.media.translated.alt ?: context.paymentMethod.translated.name),
                                    'title': (context.paymentMethod.media.translated.title ?: context.paymentMethod.translated.name)
                                }
                            } %}
                        {% endif %}
                    {% endblock %}

                    {# @deprecated tag:v6.4.0.0 removed #}
                    {% block page_checkout_confirm_payment_current_text %}
                        <strong>{{ \"checkout.confirmCurrentPaymentShipping\"|trans|sw_sanitize }}</strong>

                        {# @deprecated tag:v6.4.0.0 removed #}
                        {% block page_checkout_confirm_payment_invalid_tooltip %}{% endblock %}

                        {% if paymentMethodInvalid %}
                            {{ \"checkout.confirmSelectionNone\"|trans|sw_sanitize }}
                        {% else %}
                            {{ context.paymentMethod.translated.name }}
                        {% endif %}

                    {% endblock %}
                </p>
            {% endblock %}

            {# @deprecated tag:v6.4.0.0 removed #}
            {% block page_checkout_confirm_payment_modal_toggle %}
                <button type=\"button\"
                        class=\"btn btn-light\"
                        data-toggle=\"modal\"
                        data-backdrop=\"static\"
                        {% if page.paymentChangeable is not null and page.paymentChangeable == false %}
                            disabled=\"disabled\"
                        {% endif %}
                        data-target=\"#confirmPaymentModal\">

                    {% if paymentMethodInvalid %}
                        {{ \"checkout.confirmChoosePayment\"|trans|sw_sanitize }}
                    {% else %}
                        {{ \"checkout.confirmChangePayment\"|trans|sw_sanitize }}
                    {% endif %}
                </button>
            {% endblock %}

            {# @deprecated tag:v6.4.0.0 removed #}
            {% block page_checkout_confirm_payment_modal %}
                <div class=\"modal fade confirm-payment-modal\"
                     id=\"confirmPaymentModal\"
                     tabindex=\"-1\"
                     role=\"dialog\">
                    <div class=\"modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered\"
                         role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <div class=\"modal-title h5\">
                                    {{ \"checkout.confirmChangePayment\"|trans|sw_sanitize }}
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

                            {# @deprecated tag:v6.4.0.0 removed #}
                            {% block page_checkout_confirm_payment_modal_body %}
                                <div class=\"modal-body\">

                                    {# @deprecated tag:v6.4.0.0 removed #}
                                    {% block page_checkout_confirm_payment_form %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_payment_form_csrf %}{% endblock %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_payment_form_redirect %}{% endblock %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_payment_form_fields %}{% endblock %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_payment_form_submit %}{% endblock %}

                                        {# @deprecated tag:v6.4.0.0 removed #}
                                        {% block page_checkout_confirm_payment_cancel %}{% endblock %}
                                    {% endblock %}

                                    {% sw_include '@Storefront/storefront/page/checkout/change-payment-modal.html.twig' with { 'redirect': 'frontend.checkout.confirm.page', 'action':  'frontend.checkout.configure'} %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/confirm-payment.html.twig");
    }
}
