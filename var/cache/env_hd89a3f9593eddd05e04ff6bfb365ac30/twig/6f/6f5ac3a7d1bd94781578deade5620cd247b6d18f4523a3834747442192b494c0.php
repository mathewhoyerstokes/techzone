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

/* @Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig */
class __TwigTemplate_65ba6aaee2386b19ef8d8eb57e8a2ba2d7b3eeeb982d5607cad989899f057ffe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/order/cancel-order-modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/order/cancel-order-modal.html.twig", "@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_checkout_aside_cancel_order_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal"));

        // line 4
        echo "    <div class=\"modal fade\"
         id=\"order-";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
         data-backdrop=\"static\"
         tabindex=\"-1\"
         role=\"dialog\"
         aria-hidden=\"true\">

        ";
        // line 11
        $this->displayBlock('page_checkout_aside_cancel_order_modal_dialog', $context, $blocks);
        // line 97
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_checkout_aside_cancel_order_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_dialog"));

        // line 12
        echo "            <div class=\"modal-dialog order-history-cancel-modal\" role=\"dialog\">

                ";
        // line 14
        $this->displayBlock('page_checkout_aside_cancel_order_modal_content', $context, $blocks);
        // line 95
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_checkout_aside_cancel_order_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_content"));

        // line 15
        echo "                    <div class=\"modal-content\">

                        ";
        // line 17
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header', $context, $blocks);
        // line 34
        echo "
                        ";
        // line 35
        $this->displayBlock('page_checkout_aside_cancel_order_modal_body', $context, $blocks);
        // line 47
        echo "
                        ";
        // line 48
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer', $context, $blocks);
        // line 93
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_checkout_aside_cancel_order_modal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header"));

        // line 18
        echo "                            <div class=\"modal-header\">

                                ";
        // line 20
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header_title', $context, $blocks);
        // line 23
        echo "
                                ";
        // line 24
        $this->displayBlock('page_checkout_aside_cancel_order_modal_header_close_button', $context, $blocks);
        // line 32
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_checkout_aside_cancel_order_modal_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header_title"));

        // line 21
        echo "                                    <h5 class=\"modal-title\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalHeader"));
        echo "</h5>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_checkout_aside_cancel_order_modal_header_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_header_close_button"));

        // line 25
        echo "                                    <button class=\"close\"
                                            type=\"button\"
                                            data-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        ";
        // line 29
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig", 29);
        })())->display(twig_array_merge($context, ["name" => "x"]));
        // line 30
        echo "                                    </button>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_page_checkout_aside_cancel_order_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_body"));

        // line 36
        echo "                            <div class=\"modal-body\">

                                ";
        // line 38
        $this->displayBlock('page_checkout_aside_cancel_order_modal_body_text', $context, $blocks);
        // line 41
        echo "
                                ";
        // line 42
        $this->displayBlock('page_checkout_aside_cancel_order_modal_body_question', $context, $blocks);
        // line 45
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_page_checkout_aside_cancel_order_modal_body_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_body_text"));

        // line 39
        echo "                                    <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalBodyText"));
        echo "</p>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_page_checkout_aside_cancel_order_modal_body_question($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_body_question"));

        // line 43
        echo "                                    <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.editOrderCancelOrderModalBodyQuestion"));
        echo "</p>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_page_checkout_aside_cancel_order_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer"));

        // line 49
        echo "                            <div class=\"modal-footer\">

                                ";
        // line 51
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form', $context, $blocks);
        // line 91
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_page_checkout_aside_cancel_order_modal_footer_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form"));

        // line 52
        echo "                                    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.order.cancel");
        echo "\"
                                          method=\"post\">

                                        ";
        // line 55
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_csrf', $context, $blocks);
        // line 58
        echo "                                        ";
        $this->displayBlock('page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode', $context, $blocks);
        // line 63
        echo "                                        ";
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

    // line 55
    public function block_page_checkout_aside_cancel_order_modal_footer_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_csrf"));

        // line 56
        echo "                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.order.cancel");
        echo "
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_cancel_order_modal_footer_form_deeplinkcode"));

        // line 59
        echo "                                            <input type=\"hidden\"
                                                   name=\"deepLinkCode\"
                                                   value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deepLinkCode", [], "any", false, false, false, 61), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
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
        return "@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 86,  450 => 84,  443 => 83,  433 => 79,  428 => 76,  421 => 75,  411 => 70,  404 => 69,  395 => 66,  391 => 64,  384 => 63,  375 => 61,  371 => 59,  364 => 58,  354 => 56,  347 => 55,  339 => 89,  337 => 83,  334 => 82,  332 => 75,  329 => 74,  327 => 69,  324 => 68,  321 => 63,  318 => 58,  316 => 55,  309 => 52,  302 => 51,  294 => 91,  292 => 51,  288 => 49,  281 => 48,  271 => 43,  264 => 42,  254 => 39,  247 => 38,  239 => 45,  237 => 42,  234 => 41,  232 => 38,  228 => 36,  221 => 35,  213 => 30,  205 => 29,  199 => 25,  192 => 24,  182 => 21,  175 => 20,  167 => 32,  165 => 24,  162 => 23,  160 => 20,  156 => 18,  149 => 17,  141 => 93,  139 => 48,  136 => 47,  134 => 35,  131 => 34,  129 => 17,  125 => 15,  118 => 14,  110 => 95,  108 => 14,  104 => 12,  97 => 11,  89 => 97,  87 => 11,  78 => 5,  75 => 4,  68 => 3,  51 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/order/cancel-order-modal.html.twig' %}

{% block page_checkout_aside_cancel_order_modal %}
    <div class=\"modal fade\"
         id=\"order-{{ order.id }}\"
         data-backdrop=\"static\"
         tabindex=\"-1\"
         role=\"dialog\"
         aria-hidden=\"true\">

        {% block page_checkout_aside_cancel_order_modal_dialog %}
            <div class=\"modal-dialog order-history-cancel-modal\" role=\"dialog\">

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
                                                   value=\"{{ order.deepLinkCode }}\">
                                        {% endblock %}
                                        {% block page_checkout_aside_cancel_order_modal_footer_form_order_id %}
                                            <input type=\"hidden\"
                                                   name=\"orderId\"
                                                   value=\"{{ order.id }}\">
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
", "@Storefront/storefront/page/account/order-history/cancel-order-modal.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/cancel-order-modal.html.twig");
    }
}
