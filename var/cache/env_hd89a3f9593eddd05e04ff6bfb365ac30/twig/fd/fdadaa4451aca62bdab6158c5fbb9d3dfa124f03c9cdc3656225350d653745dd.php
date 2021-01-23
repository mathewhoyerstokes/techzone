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

/* @Storefront/storefront/page/checkout/confirm/index.html.twig */
class __TwigTemplate_3df7b70422362799ccc3b239f69dd1c897a4f6fa69832253d5cab0d471e6b6a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_header' => [$this, 'block_base_header'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_confirm' => [$this, 'block_page_checkout_confirm'],
            'page_checkout_confirm_header' => [$this, 'block_page_checkout_confirm_header'],
            'page_checkout_confirm_alerts' => [$this, 'block_page_checkout_confirm_alerts'],
            'page_checkout_confirm_violations' => [$this, 'block_page_checkout_confirm_violations'],
            'page_checkout_confirm_errors' => [$this, 'block_page_checkout_confirm_errors'],
            'page_checkout_confirm_tos' => [$this, 'block_page_checkout_confirm_tos'],
            'page_checkout_confirm_tos_header' => [$this, 'block_page_checkout_confirm_tos_header'],
            'page_checkout_confirm_revocation_notice' => [$this, 'block_page_checkout_confirm_revocation_notice'],
            'page_checkout_confirm_revocation_notice_link' => [$this, 'block_page_checkout_confirm_revocation_notice_link'],
            'page_checkout_confirm_tos_control' => [$this, 'block_page_checkout_confirm_tos_control'],
            'page_checkout_confirm_tos_control_checkbox' => [$this, 'block_page_checkout_confirm_tos_control_checkbox'],
            'page_checkout_confirm_tos_control_label' => [$this, 'block_page_checkout_confirm_tos_control_label'],
            'page_checkout_confirm_address' => [$this, 'block_page_checkout_confirm_address'],
            'page_checkout_confirm_payment_shipping' => [$this, 'block_page_checkout_confirm_payment_shipping'],
            'page_checkout_confirm_payment' => [$this, 'block_page_checkout_confirm_payment'],
            'page_checkout_confirm_shipping' => [$this, 'block_page_checkout_confirm_shipping'],
            'page_checkout_confirm_product_table' => [$this, 'block_page_checkout_confirm_product_table'],
            'page_checkout_confirm_table_container' => [$this, 'block_page_checkout_confirm_table_container'],
            'page_checkout_confirm_table_header' => [$this, 'block_page_checkout_confirm_table_header'],
            'page_checkout_confirm_table_items' => [$this, 'block_page_checkout_confirm_table_items'],
            'page_checkout_confirm_table_item' => [$this, 'block_page_checkout_confirm_table_item'],
            'page_checkout_confirm_hidden_line_items_information' => [$this, 'block_page_checkout_confirm_hidden_line_items_information'],
            'page_checkout_additional' => [$this, 'block_page_checkout_additional'],
            'page_checkout_finish_customer_comment' => [$this, 'block_page_checkout_finish_customer_comment'],
            'page_checkout_confirm_customer_comment_header' => [$this, 'block_page_checkout_confirm_customer_comment_header'],
            'page_checkout_confirm_customer_comment_control' => [$this, 'block_page_checkout_confirm_customer_comment_control'],
            'page_checkout_confirm_customer_comment_control_textfield_label' => [$this, 'block_page_checkout_confirm_customer_comment_control_textfield_label'],
            'page_checkout_confirm_customer_comment_control_textfield' => [$this, 'block_page_checkout_confirm_customer_comment_control_textfield'],
            'page_checkout_aside_actions' => [$this, 'block_page_checkout_aside_actions'],
            'page_checkout_aside_actions_csrf' => [$this, 'block_page_checkout_aside_actions_csrf'],
            'page_checkout_confirm_form_submit' => [$this, 'block_page_checkout_confirm_form_submit'],
            'base_footer' => [$this, 'block_base_footer'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/confirm/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 2);
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
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/meta.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 8
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header-minimal.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 8)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_main_content"));

        // line 14
        echo "    ";
        $this->displayBlock('page_checkout_confirm', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_confirm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm"));

        // line 15
        echo "        ";
        $this->displayBlock('page_checkout_confirm_header', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('page_checkout_confirm_alerts', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('page_checkout_confirm_tos', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('page_checkout_confirm_address', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('page_checkout_confirm_payment_shipping', $context, $blocks);
        // line 113
        echo "
        ";
        // line 114
        $this->displayBlock('page_checkout_confirm_product_table', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('page_checkout_confirm_hidden_line_items_information', $context, $blocks);
        // line 141
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_checkout_confirm_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_header"));

        // line 16
        echo "            <h1 class=\"confirm-main-header\">
                ";
        // line 17
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmHeader"));
        echo "
            </h1>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_page_checkout_confirm_alerts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_alerts"));

        // line 22
        echo "            ";
        $this->displayBlock('page_checkout_confirm_violations', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('page_checkout_confirm_errors', $context, $blocks);
        // line 37
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_checkout_confirm_violations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_violations"));

        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [], "method", false, false, false, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
            // line 24
            echo "                    ";
            $context["snippetName"] = ("error." . twig_get_attribute($this->env, $this->source, $context["violation"], "code", [], "any", false, false, false, 24));
            // line 25
            echo "                    ";
            $context["fieldName"] = twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["violation"], "propertyPath", [], "any", false, false, false, 25), "/", "left");
            // line 26
            echo "
                    ";
            // line 27
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 27)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 29
($context["snippetName"] ?? null), ["%field%" => ($context["fieldName"] ?? null)]))]));
            // line 31
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_checkout_confirm_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_errors"));

        // line 35
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/cart-alerts.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 35)->display($context);
        // line 36
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_checkout_confirm_tos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_tos"));

        // line 40
        echo "            <div class=\"confirm-tos\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 43
        $this->displayBlock('page_checkout_confirm_tos_header', $context, $blocks);
        // line 48
        echo "
                        ";
        // line 49
        $this->displayBlock('page_checkout_confirm_revocation_notice', $context, $blocks);
        // line 63
        echo "
                        ";
        // line 64
        $this->displayBlock('page_checkout_confirm_tos_control', $context, $blocks);
        // line 85
        echo "                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_checkout_confirm_tos_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_tos_header"));

        // line 44
        echo "                            <div class=\"card-title\">
                                ";
        // line 45
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmTermsHeader"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_page_checkout_confirm_revocation_notice($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_revocation_notice"));

        // line 50
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 50), "confirm", [], "any", false, false, false, 50), "revocationNotice", [], "any", false, false, false, 50)) {
            // line 51
            echo "                                <p class=\"revocation-notice\">
                                    ";
            // line 52
            $this->displayBlock('page_checkout_confirm_revocation_notice_link', $context, $blocks);
            // line 60
            echo "                                </p>
                            ";
        }
        // line 62
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_page_checkout_confirm_revocation_notice_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_revocation_notice_link"));

        // line 53
        echo "                                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 53), "core", [], "any", false, false, false, 53), "basicInformation", [], "any", false, false, false, 53), "revocationPage", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\"
                                           data-toggle=\"modal\"
                                           title=\"";
        // line 55
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmRevocationNotice")), "html", null, true);
        echo "\"
                                           data-url=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 56), "core", [], "any", false, false, false, 56), "basicInformation", [], "any", false, false, false, 56), "revocationPage", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">
                                            ";
        // line 57
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmRevocationNotice"));
        echo "
                                        </a>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_page_checkout_confirm_tos_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_tos_control"));

        // line 65
        echo "                            <div class=\"custom-control custom-checkbox\">
                                ";
        // line 66
        $this->displayBlock('page_checkout_confirm_tos_control_checkbox', $context, $blocks);
        // line 74
        echo "
                                ";
        // line 75
        $this->displayBlock('page_checkout_confirm_tos_control_label', $context, $blocks);
        // line 83
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_page_checkout_confirm_tos_control_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_tos_control_checkbox"));

        // line 67
        echo "                                    <input type=\"checkbox\"
                                           class=\"checkout-confirm-tos-checkbox custom-control-input";
        // line 68
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/tos"], "method", false, false, false, 68))) {
            echo " is-invalid";
        }
        echo "\"
                                           required=\"required\"
                                           id=\"tos\"
                                           form=\"confirmOrderForm\"
                                           name=\"tos\"/>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_page_checkout_confirm_tos_control_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_tos_control_label"));

        // line 76
        echo "                                    <label for=\"tos\"
                                           class=\"checkout-confirm-tos-label custom-control-label\">
                                        ";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmTerms", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["shopware"] ?? null), "config", [], "any", false, false, false, 79), "core", [], "any", false, false, false, 79), "basicInformation", [], "any", false, false, false, 79), "tosPage", [], "any", false, false, false, 79)])]);
        // line 80
        echo "
                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_page_checkout_confirm_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_address"));

        // line 91
        echo "            <div class=\"confirm-address\">
                ";
        // line 92
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 92)->display($context);
        // line 93
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_page_checkout_confirm_payment_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment_shipping"));

        // line 97
        echo "            <div class=\"confirm-payment-shipping\">
                <div class=\"row\">
                    ";
        // line 99
        $this->displayBlock('page_checkout_confirm_payment', $context, $blocks);
        // line 104
        echo "
                    ";
        // line 105
        $this->displayBlock('page_checkout_confirm_shipping', $context, $blocks);
        // line 110
        echo "                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 99
    public function block_page_checkout_confirm_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_payment"));

        // line 100
        echo "                        <div class=\"col-sm-6 confirm-payment\">
                            ";
        // line 101
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 101)->display($context);
        // line 102
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 105
    public function block_page_checkout_confirm_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_shipping"));

        // line 106
        echo "                        <div class=\"col-sm-6 confirm-shipping\">
                            ";
        // line 107
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 107)->display($context);
        // line 108
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_page_checkout_confirm_product_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_product_table"));

        // line 115
        echo "            <div class=\"confirm-product\">
                ";
        // line 116
        $this->displayBlock('page_checkout_confirm_table_container', $context, $blocks);
        // line 133
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_page_checkout_confirm_table_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_table_container"));

        // line 117
        echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 119
        $this->displayBlock('page_checkout_confirm_table_header', $context, $blocks);
        // line 122
        echo "
                            ";
        // line 123
        $this->displayBlock('page_checkout_confirm_table_items', $context, $blocks);
        // line 130
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_page_checkout_confirm_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_table_header"));

        // line 120
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 120)->display($context);
        // line 121
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_page_checkout_confirm_table_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_table_items"));

        // line 124
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 124), "lineItems", [], "any", false, false, false, 124));
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
            // line 125
            echo "                                    ";
            $this->displayBlock('page_checkout_confirm_table_item', $context, $blocks);
            // line 128
            echo "                                ";
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
        // line 129
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_page_checkout_confirm_table_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_table_item"));

        // line 126
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 126)->display($context);
        // line 127
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 136
    public function block_page_checkout_confirm_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_hidden_line_items_information"));

        // line 137
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 137)->display(twig_array_merge($context, ["lineItems" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 138
($context["page"] ?? null), "cart", [], "any", false, false, false, 138), "lineItems", [], "any", false, false, false, 138)]));
        // line 140
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 144
    public function block_page_checkout_additional($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_additional"));

        // line 145
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 145), "core", [], "any", false, false, false, 145), "cart", [], "any", false, false, false, 145), "showCustomerComment", [], "any", false, false, false, 145)) {
            // line 146
            echo "        <div class=\"checkout-additional\">
            ";
            // line 147
            $this->displayBlock('page_checkout_finish_customer_comment', $context, $blocks);
            // line 176
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 147
    public function block_page_checkout_finish_customer_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_customer_comment"));

        // line 148
        echo "                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 150
        $this->displayBlock('page_checkout_confirm_customer_comment_header', $context, $blocks);
        // line 155
        echo "
                        ";
        // line 156
        $this->displayBlock('page_checkout_confirm_customer_comment_control', $context, $blocks);
        // line 173
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block_page_checkout_confirm_customer_comment_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_customer_comment_header"));

        // line 151
        echo "                            <div class=\"card-title\">
                                ";
        // line 152
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentHeader"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_page_checkout_confirm_customer_comment_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_customer_comment_control"));

        // line 157
        echo "                            <div class=\"checkout-customer-comment-control\">
                                ";
        // line 158
        $this->displayBlock('page_checkout_confirm_customer_comment_control_textfield_label', $context, $blocks);
        // line 163
        echo "
                                ";
        // line 164
        $this->displayBlock('page_checkout_confirm_customer_comment_control_textfield', $context, $blocks);
        // line 171
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 158
    public function block_page_checkout_confirm_customer_comment_control_textfield_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_customer_comment_control_textfield_label"));

        // line 159
        echo "                                    <label class=\"form-label\" for=\"";
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderService::CUSTOMER_COMMENT_KEY"), "html", null, true);
        echo "\">
                                        ";
        // line 160
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentLabel"));
        echo "
                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_page_checkout_confirm_customer_comment_control_textfield($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_customer_comment_control_textfield"));

        // line 165
        echo "                                    <textarea class=\"form-control\"
                                              placeholder=\"";
        // line 166
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentPlaceholder"));
        echo "\"
                                              id=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderService::CUSTOMER_COMMENT_KEY"), "html", null, true);
        echo "\"
                                              form=\"confirmOrderForm\"
                                              name=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Order\\SalesChannel\\OrderService::CUSTOMER_COMMENT_KEY"), "html", null, true);
        echo "\"></textarea>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 180
    public function block_page_checkout_aside_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_actions"));

        // line 181
        echo "    <div class=\"checkout-aside-action\">
        <form id=\"confirmOrderForm\"
              action=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.order");
        echo "\"
              data-form-csrf-handler=\"true\"
              data-form-preserver=\"true\"
              data-form-submit-loader=\"true\"
              method=\"post\">

            ";
        // line 189
        $this->displayBlock('page_checkout_aside_actions_csrf', $context, $blocks);
        // line 192
        echo "
            ";
        // line 193
        $this->displayBlock('page_checkout_confirm_form_submit', $context, $blocks);
        // line 204
        echo "        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 189
    public function block_page_checkout_aside_actions_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_actions_csrf"));

        // line 190
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.finish.order");
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 193
    public function block_page_checkout_confirm_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_confirm_form_submit"));

        // line 194
        echo "                <button id=\"confirmFormSubmit\"
                        class=\"btn btn-primary btn-block btn-lg\"
                        form=\"confirmOrderForm\"
                    ";
        // line 197
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 197), "errors", [], "any", false, false, false, 197), "blockOrder", [], "any", false, false, false, 197)) {
            // line 198
            echo "                        disabled
                    ";
        }
        // line 200
        echo "                        type=\"submit\">
                    ";
        // line 201
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmSubmit"));
        echo "
                </button>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 208
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer"));

        // line 209
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer-minimal.html.twig", "@Storefront/storefront/page/checkout/confirm/index.html.twig", 209)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/confirm/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  963 => 209,  956 => 208,  946 => 201,  943 => 200,  939 => 198,  937 => 197,  932 => 194,  925 => 193,  915 => 190,  908 => 189,  899 => 204,  897 => 193,  894 => 192,  892 => 189,  883 => 183,  879 => 181,  872 => 180,  863 => 169,  858 => 167,  854 => 166,  851 => 165,  844 => 164,  834 => 160,  829 => 159,  822 => 158,  814 => 171,  812 => 164,  809 => 163,  807 => 158,  804 => 157,  797 => 156,  787 => 152,  784 => 151,  777 => 150,  768 => 173,  766 => 156,  763 => 155,  761 => 150,  757 => 148,  750 => 147,  741 => 176,  739 => 147,  736 => 146,  733 => 145,  726 => 144,  719 => 140,  717 => 138,  715 => 137,  708 => 136,  701 => 127,  698 => 126,  691 => 125,  684 => 129,  670 => 128,  667 => 125,  649 => 124,  642 => 123,  635 => 121,  632 => 120,  625 => 119,  616 => 130,  614 => 123,  611 => 122,  609 => 119,  605 => 117,  598 => 116,  590 => 133,  588 => 116,  585 => 115,  578 => 114,  570 => 108,  568 => 107,  565 => 106,  558 => 105,  550 => 102,  548 => 101,  545 => 100,  538 => 99,  529 => 110,  527 => 105,  524 => 104,  522 => 99,  518 => 97,  511 => 96,  503 => 93,  501 => 92,  498 => 91,  491 => 90,  482 => 80,  480 => 79,  479 => 78,  475 => 76,  468 => 75,  453 => 68,  450 => 67,  443 => 66,  435 => 83,  433 => 75,  430 => 74,  428 => 66,  425 => 65,  418 => 64,  408 => 57,  404 => 56,  400 => 55,  394 => 53,  387 => 52,  380 => 62,  376 => 60,  374 => 52,  371 => 51,  368 => 50,  361 => 49,  351 => 45,  348 => 44,  341 => 43,  331 => 85,  329 => 64,  326 => 63,  324 => 49,  321 => 48,  319 => 43,  314 => 40,  307 => 39,  300 => 36,  297 => 35,  290 => 34,  283 => 32,  269 => 31,  267 => 29,  266 => 27,  263 => 26,  260 => 25,  257 => 24,  239 => 23,  232 => 22,  225 => 37,  223 => 34,  220 => 33,  217 => 22,  210 => 21,  200 => 17,  197 => 16,  190 => 15,  183 => 141,  181 => 136,  178 => 135,  176 => 114,  173 => 113,  171 => 96,  168 => 95,  166 => 90,  163 => 89,  161 => 39,  158 => 38,  156 => 21,  153 => 20,  150 => 15,  136 => 14,  129 => 13,  117 => 11,  109 => 8,  102 => 7,  94 => 4,  87 => 3,  70 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/checkout/_page.html.twig' %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/page/checkout/confirm/meta.html.twig' %}
{% endblock %}

{% block base_header %}
    {% sw_include '@Storefront/storefront/layout/header/header-minimal.html.twig' %}
{% endblock %}

{% block base_navigation %}{% endblock %}

{% block page_checkout_main_content %}
    {% block page_checkout_confirm %}
        {% block page_checkout_confirm_header %}
            <h1 class=\"confirm-main-header\">
                {{ \"checkout.confirmHeader\"|trans|sw_sanitize }}
            </h1>
        {% endblock %}

        {% block page_checkout_confirm_alerts %}
            {% block page_checkout_confirm_violations %}
                {% for violation in formViolations.getViolations() %}
                    {% set snippetName = \"error.#{violation.code}\" %}
                    {% set fieldName = violation.propertyPath|trim('/', 'left') %}

                    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                        type: \"danger\",
                        content: snippetName|trans({'%field%': fieldName})|sw_sanitize
                    } %}
                {% endfor %}
            {% endblock %}

            {% block page_checkout_confirm_errors %}
                {% sw_include '@Storefront/storefront/component/checkout/cart-alerts.html.twig' %}
            {% endblock %}
        {% endblock %}

        {% block page_checkout_confirm_tos %}
            <div class=\"confirm-tos\">
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        {% block page_checkout_confirm_tos_header %}
                            <div class=\"card-title\">
                                {{ \"checkout.confirmTermsHeader\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_checkout_confirm_revocation_notice %}
                            {% if shopware.config.confirm.revocationNotice %}
                                <p class=\"revocation-notice\">
                                    {% block page_checkout_confirm_revocation_notice_link %}
                                        <a href=\"{{ path('frontend.cms.page',{ id: shopware.config.core.basicInformation.revocationPage }) }}\"
                                           data-toggle=\"modal\"
                                           title=\"{{ \"checkout.confirmRevocationNotice\"|trans|striptags }}\"
                                           data-url=\"{{ path('frontend.cms.page',{ id: shopware.config.core.basicInformation.revocationPage }) }}\">
                                            {{ \"checkout.confirmRevocationNotice\"|trans|sw_sanitize }}
                                        </a>
                                    {% endblock %}
                                </p>
                            {% endif %}
                        {% endblock %}

                        {% block page_checkout_confirm_tos_control %}
                            <div class=\"custom-control custom-checkbox\">
                                {% block page_checkout_confirm_tos_control_checkbox %}
                                    <input type=\"checkbox\"
                                           class=\"checkout-confirm-tos-checkbox custom-control-input{% if formViolations.getViolations('/tos') is not empty %} is-invalid{% endif %}\"
                                           required=\"required\"
                                           id=\"tos\"
                                           form=\"confirmOrderForm\"
                                           name=\"tos\"/>
                                {% endblock %}

                                {% block page_checkout_confirm_tos_control_label %}
                                    <label for=\"tos\"
                                           class=\"checkout-confirm-tos-label custom-control-label\">
                                        {{ \"checkout.confirmTerms\"|trans({
                                            '%url%': path('frontend.cms.page',{ id: shopware.config.core.basicInformation.tosPage })
                                        })|raw }}
                                    </label>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            </div>
        {% endblock %}

        {% block page_checkout_confirm_address %}
            <div class=\"confirm-address\">
                {% sw_include '@Storefront/storefront/page/checkout/confirm/confirm-address.html.twig' %}
            </div>
        {% endblock %}

        {% block page_checkout_confirm_payment_shipping %}
            <div class=\"confirm-payment-shipping\">
                <div class=\"row\">
                    {% block page_checkout_confirm_payment %}
                        <div class=\"col-sm-6 confirm-payment\">
                            {% sw_include '@Storefront/storefront/page/checkout/confirm/confirm-payment.html.twig' %}
                        </div>
                    {% endblock %}

                    {% block page_checkout_confirm_shipping %}
                        <div class=\"col-sm-6 confirm-shipping\">
                            {% sw_include '@Storefront/storefront/page/checkout/confirm/confirm-shipping.html.twig' %}
                        </div>
                    {% endblock %}
                </div>
            </div>
        {% endblock %}

        {% block page_checkout_confirm_product_table %}
            <div class=\"confirm-product\">
                {% block page_checkout_confirm_table_container %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            {% block page_checkout_confirm_table_header %}
                                {% sw_include '@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig' %}
                            {% endblock %}

                            {% block page_checkout_confirm_table_items %}
                                {% for lineItem in page.cart.lineItems %}
                                    {% block page_checkout_confirm_table_item %}
                                        {% sw_include '@Storefront/storefront/page/checkout/confirm/confirm-item.html.twig' %}
                                    {% endblock %}
                                {% endfor %}
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_checkout_confirm_hidden_line_items_information %}
            {% sw_include '@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig' with {
                lineItems: page.cart.lineItems
            } %}
        {% endblock %}
    {% endblock %}
{% endblock %}

{% block page_checkout_additional %}
    {% if shopware.config.core.cart.showCustomerComment %}
        <div class=\"checkout-additional\">
            {% block page_checkout_finish_customer_comment %}
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        {% block page_checkout_confirm_customer_comment_header %}
                            <div class=\"card-title\">
                                {{ \"checkout.customerCommentHeader\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_checkout_confirm_customer_comment_control %}
                            <div class=\"checkout-customer-comment-control\">
                                {% block page_checkout_confirm_customer_comment_control_textfield_label %}
                                    <label class=\"form-label\" for=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\SalesChannel\\\\OrderService::CUSTOMER_COMMENT_KEY') }}\">
                                        {{ \"checkout.customerCommentLabel\"|trans|sw_sanitize }}
                                    </label>
                                {% endblock %}

                                {% block page_checkout_confirm_customer_comment_control_textfield %}
                                    <textarea class=\"form-control\"
                                              placeholder=\"{{ \"checkout.customerCommentPlaceholder\"|trans|sw_sanitize }}\"
                                              id=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\SalesChannel\\\\OrderService::CUSTOMER_COMMENT_KEY') }}\"
                                              form=\"confirmOrderForm\"
                                              name=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Order\\\\SalesChannel\\\\OrderService::CUSTOMER_COMMENT_KEY') }}\"></textarea>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}

{% block page_checkout_aside_actions %}
    <div class=\"checkout-aside-action\">
        <form id=\"confirmOrderForm\"
              action=\"{{ path('frontend.checkout.finish.order') }}\"
              data-form-csrf-handler=\"true\"
              data-form-preserver=\"true\"
              data-form-submit-loader=\"true\"
              method=\"post\">

            {% block page_checkout_aside_actions_csrf %}
                {{ sw_csrf('frontend.checkout.finish.order') }}
            {% endblock %}

            {% block page_checkout_confirm_form_submit %}
                <button id=\"confirmFormSubmit\"
                        class=\"btn btn-primary btn-block btn-lg\"
                        form=\"confirmOrderForm\"
                    {% if page.cart.errors.blockOrder %}
                        disabled
                    {% endif %}
                        type=\"submit\">
                    {{ \"checkout.confirmSubmit\"|trans|sw_sanitize }}
                </button>
            {% endblock %}
        </form>
    </div>
{% endblock %}

{% block base_footer %}
    {% sw_include '@Storefront/storefront/layout/footer/footer-minimal.html.twig' %}
{% endblock %}
", "@Storefront/storefront/page/checkout/confirm/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/confirm/index.html.twig");
    }
}
