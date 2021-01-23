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

/* @Storefront/storefront/page/account/order/cancel-order-modal.html.twig */
class __TwigTemplate_cdf03ffea47c8e8dbda02c5b33f6be3a112ac641ca5247cb0f0f0c1021cb90e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_aside_cancel_order_modal' => [$this, 'block_page_checkout_aside_cancel_order_modal'],
            'page_checkout_aside_cancel_order_modal_dialog' => [$this, 'block_page_checkout_aside_cancel_order_modal_dialog'],
            'page_checkout_aside_cancel_order_modal_content' => [$this, 'block_page_checkout_aside_cancel_order_modal_content'],
            'page_checkout_aside_cancel_order_modal_header' => [$this, 'block_page_checkout_aside_cancel_order_modal_header'],
            'page_checkout_aside_cancel_order_modal_header_title' => [$this, 'block_page_checkout_aside_cancel_order_modal_header_title'],
            'page_checkout_aside_cancel_order_modal_header_close_button' => [$this, 'block_page_checkout_aside_cancel_order_modal_header_close_button'],
            'page_checkout_aside_cancel_order_modal_body' => [$this, 'block_page_checkout_aside_cancel_order_modal_body'],
            'page_checkout_aside_cancel_order_modal_body_text' => [$this, 'block_page_checkout_aside_cancel_order_modal_body_text'],
            'page_checkout_aside_cancel_order_modal_body_question' => [$this, 'block_page_checkout_aside_cancel_order_modal_body_question'],
            'page_checkout_aside_cancel_order_modal_footer' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer'],
            'page_checkout_aside_cancel_order_modal_footer_form' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer_form'],
            'page_checkout_aside_cancel_order_modal_footer_form_csrf' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer_form_csrf'],
            'page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode'],
            'page_checkout_aside_cancel_order_modal_footer_form_order_id' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer_form_order_id'],
            'page_checkout_aside_cancel_order_modal_footer_form_redirect' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer_form_redirect'],
            'page_checkout_aside_cancel_order_modal_header_back_button' => [$this, 'block_page_checkout_aside_cancel_order_modal_header_back_button'],
            'page_checkout_aside_cancel_order_modal_footer_form_button' => [$this, 'block_page_checkout_aside_cancel_order_modal_footer_form_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order/cancel-order-modal.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_aside_cancel_order_modal', $context, $blocks);
        // line 99
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_page_checkout_aside_cancel_order_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal"));

        // line 2
        echo "    <div class=\"modal fade\"
         id=\"cancelOrderModal\"
         data-backdrop=\"static\"
         tabindex=\"-1\"
         role=\"dialog\"
         aria-hidden=\"true\">

        ";
        // line 9
        $this->displayBlock('page_checkout_aside_cancel_order_modal_dialog', $context, $blocks);
        // line 97
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_checkout_aside_cancel_order_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_dialog"));

        // line 10
        echo "            <div class=\"modal-dialog\" role=\"dialog\">

                ";
        // line 12
        $this->displayBlock('page_checkout_aside_cancel_order_modal_content', $context, $blocks);
        // line 95
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_checkout_aside_cancel_order_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_content"));

        // line 13
        echo "                    <div class=\"modal-content\">

                        ";
        // line 15
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header', $context, $blocks);
        // line 32
        echo "
                        ";
        // line 33
        $this->displayBlock('page_checkout_aside_cancel_order_modal_body', $context, $blocks);
        // line 45
        echo "
                        ";
        // line 46
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer', $context, $blocks);
        // line 93
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_checkout_aside_cancel_order_modal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header"));

        // line 16
        echo "                            <div class=\"modal-header\">

                                ";
        // line 18
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header_title', $context, $blocks);
        // line 21
        echo "
                                ";
        // line 22
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header_close_button', $context, $blocks);
        // line 30
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_aside_cancel_order_modal_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header_title"));

        // line 19
        echo "                                    <h5 class=\"modal-title\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalHeader"));
        echo "</h5>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_checkout_aside_cancel_order_modal_header_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header_close_button"));

        // line 23
        echo "                                    <button class=\"close\"
                                            type=\"button\"
                                            data-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        ";
        // line 27
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order/cancel-order-modal.html.twig", 27);
        })())->display(twig_array_merge($context, ["name" => "x"]));
        // line 28
        echo "                                    </button>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_page_checkout_aside_cancel_order_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_body"));

        // line 34
        echo "                            <div class=\"modal-body\">

                                ";
        // line 36
        $this->displayBlock('page_checkout_aside_cancel_order_modal_body_text', $context, $blocks);
        // line 39
        echo "
                                ";
        // line 40
        $this->displayBlock('page_checkout_aside_cancel_order_modal_body_question', $context, $blocks);
        // line 43
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_page_checkout_aside_cancel_order_modal_body_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_body_text"));

        // line 37
        echo "                                    <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalBodyText"));
        echo "</p>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_page_checkout_aside_cancel_order_modal_body_question($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_body_question"));

        // line 41
        echo "                                    <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalBodyQuestion"));
        echo "</p>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_page_checkout_aside_cancel_order_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer"));

        // line 47
        echo "                            <div class=\"modal-footer\">

                                ";
        // line 49
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form', $context, $blocks);
        // line 91
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_page_checkout_aside_cancel_order_modal_footer_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form"));

        // line 50
        echo "                                    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.order.cancel");
        echo "\"
                                          method=\"post\">

                                        ";
        // line 53
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_csrf', $context, $blocks);
        // line 56
        echo "
                                        ";
        // line 57
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode', $context, $blocks);
        // line 62
        echo "
                                        ";
        // line 63
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_order_id', $context, $blocks);
        // line 68
        echo "
                                        ";
        // line 69
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_redirect', $context, $blocks);
        // line 74
        echo "
                                        ";
        // line 75
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header_back_button', $context, $blocks);
        // line 82
        echo "
                                        ";
        // line 83
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_button', $context, $blocks);
        // line 89
        echo "                                    </form>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_page_checkout_aside_cancel_order_modal_footer_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_csrf"));

        // line 54
        echo "                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.order.cancel");
        echo "
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode"));

        // line 58
        echo "                                            <input type=\"hidden\"
                                                   name=\"deepLinkCode\"
                                                   value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 60), "deepLinkCode", [], "any", false, false, false, 60), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_page_checkout_aside_cancel_order_modal_footer_form_order_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_order_id"));

        // line 64
        echo "                                            <input type=\"hidden\"
                                                   name=\"orderId\"
                                                   value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_page_checkout_aside_cancel_order_modal_footer_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_redirect"));

        // line 70
        echo "                                            <input type=\"hidden\"
                                                   name=\"redirectTo\"
                                                   value=\"frontend.account.order.page\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_page_checkout_aside_cancel_order_modal_header_back_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header_back_button"));

        // line 76
        echo "                                            <button class=\"btn\"
                                                    type=\"button\"
                                                    data-dismiss=\"modal\">
                                                ";
        // line 79
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalFooterButtonBack"));
        echo "
                                            </button>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_page_checkout_aside_cancel_order_modal_footer_form_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_button"));

        // line 84
        echo "                                            <button type=\"submit\"
                                                    class=\"btn btn-primary\">
                                                ";
        // line 86
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalFooterButton"));
        echo "
                                            </button>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order/cancel-order-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  454 => 86,  450 => 84,  443 => 83,  433 => 79,  428 => 76,  421 => 75,  411 => 70,  404 => 69,  395 => 66,  391 => 64,  384 => 63,  375 => 60,  371 => 58,  364 => 57,  354 => 54,  347 => 53,  339 => 89,  337 => 83,  334 => 82,  332 => 75,  329 => 74,  327 => 69,  324 => 68,  322 => 63,  319 => 62,  317 => 57,  314 => 56,  312 => 53,  305 => 50,  298 => 49,  290 => 91,  288 => 49,  284 => 47,  277 => 46,  267 => 41,  260 => 40,  250 => 37,  243 => 36,  235 => 43,  233 => 40,  230 => 39,  228 => 36,  224 => 34,  217 => 33,  209 => 28,  201 => 27,  195 => 23,  188 => 22,  178 => 19,  171 => 18,  163 => 30,  161 => 22,  158 => 21,  156 => 18,  152 => 16,  145 => 15,  137 => 93,  135 => 46,  132 => 45,  130 => 33,  127 => 32,  125 => 15,  121 => 13,  114 => 12,  106 => 95,  104 => 12,  100 => 10,  93 => 9,  85 => 97,  83 => 9,  74 => 2,  67 => 1,  59 => 99,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_aside_cancel_order_modal %}
    <div class=\"modal fade\"
         id=\"cancelOrderModal\"
         data-backdrop=\"static\"
         tabindex=\"-1\"
         role=\"dialog\"
         aria-hidden=\"true\">

        {% block page_checkout_aside_cancel_order_modal_dialog %}
            <div class=\"modal-dialog\" role=\"dialog\">

                {% block page_checkout_aside_cancel_order_modal_content %}
                    <div class=\"modal-content\">

                        {% block page_checkout_aside_cancel_order_modal_header %}
                            <div class=\"modal-header\">

                                {% block page_checkout_aside_cancel_order_modal_header_title %}
                                    <h5 class=\"modal-title\">{{ \"account.editOrderCancelOrderModalHeader\"|trans|sw_sanitize }}</h5>
                                {% endblock %}

                                {% block page_checkout_aside_cancel_order_modal_header_close_button %}
                                    <button class=\"close\"
                                            type=\"button\"
                                            data-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        {% sw_icon 'x' %}
                                    </button>
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block page_checkout_aside_cancel_order_modal_body %}
                            <div class=\"modal-body\">

                                {% block page_checkout_aside_cancel_order_modal_body_text %}
                                    <p>{{ \"account.editOrderCancelOrderModalBodyText\"|trans|sw_sanitize }}</p>
                                {% endblock %}

                                {% block page_checkout_aside_cancel_order_modal_body_question %}
                                    <p>{{ \"account.editOrderCancelOrderModalBodyQuestion\"|trans|sw_sanitize }}</p>
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block page_checkout_aside_cancel_order_modal_footer %}
                            <div class=\"modal-footer\">

                                {% block page_checkout_aside_cancel_order_modal_footer_form %}
                                    <form action=\"{{ path('frontend.account.order.cancel') }}\"
                                          method=\"post\">

                                        {% block page_checkout_aside_cancel_order_modal_footer_form_csrf %}
                                            {{ sw_csrf('frontend.account.order.cancel') }}
                                        {% endblock %}

                                        {% block page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode %}
                                            <input type=\"hidden\"
                                                   name=\"deepLinkCode\"
                                                   value=\"{{ page.order.deepLinkCode }}\">
                                        {% endblock %}

                                        {% block page_checkout_aside_cancel_order_modal_footer_form_order_id %}
                                            <input type=\"hidden\"
                                                   name=\"orderId\"
                                                   value=\"{{ page.order.id }}\">
                                        {% endblock %}

                                        {% block page_checkout_aside_cancel_order_modal_footer_form_redirect %}
                                            <input type=\"hidden\"
                                                   name=\"redirectTo\"
                                                   value=\"frontend.account.order.page\">
                                        {% endblock %}

                                        {% block page_checkout_aside_cancel_order_modal_header_back_button %}
                                            <button class=\"btn\"
                                                    type=\"button\"
                                                    data-dismiss=\"modal\">
                                                {{ \"account.editOrderCancelOrderModalFooterButtonBack\"|trans|sw_sanitize }}
                                            </button>
                                        {% endblock %}

                                        {% block page_checkout_aside_cancel_order_modal_footer_form_button %}
                                            <button type=\"submit\"
                                                    class=\"btn btn-primary\">
                                                {{ \"account.editOrderCancelOrderModalFooterButton\"|trans|sw_sanitize }}
                                            </button>
                                        {% endblock %}
                                    </form>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}

", "@Storefront/storefront/page/account/order/cancel-order-modal.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order/cancel-order-modal.html.twig");
    }
}
