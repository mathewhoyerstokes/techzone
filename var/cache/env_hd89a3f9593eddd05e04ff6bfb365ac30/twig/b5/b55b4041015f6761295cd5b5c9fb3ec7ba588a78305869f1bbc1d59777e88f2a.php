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

/* @Storefront/storefront/page/product-detail/buy-widget-form.html.twig */
class __TwigTemplate_841fefb932e7d085cafe20f1a291a8c1fec25fb01bac3658fc1f3785ac5d7afd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_form_inner' => [$this, 'block_page_product_detail_buy_form_inner'],
            'page_product_detail_buy_form_action' => [$this, 'block_page_product_detail_buy_form_action'],
            'page_product_detail_buy_form_inner_csrf' => [$this, 'block_page_product_detail_buy_form_inner_csrf'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_buy_quantity_container' => [$this, 'block_page_product_detail_buy_quantity_container'],
            'page_product_detail_buy_quantity' => [$this, 'block_page_product_detail_buy_quantity'],
            'page_product_detail_buy_redirect_input' => [$this, 'block_page_product_detail_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'page_product_detail_buy_button_container' => [$this, 'block_page_product_detail_buy_button_container'],
            'page_product_detail_buy_button' => [$this, 'block_page_product_detail_buy_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_buy_form_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_buy_form_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form_inner"));

        // line 2
        echo "    ";
        // line 3
        echo "
    ";
        // line 5
        echo "    ";
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5);
        // line 6
        echo "
    <form
        id=\"productDetailPageBuyProductForm\"
        action=\"";
        // line 9
        $this->displayBlock('page_product_detail_buy_form_action', $context, $blocks);
        echo "\"
        method=\"post\"
        class=\"buy-widget\"
        data-add-to-cart=\"true\">

        ";
        // line 14
        $this->displayBlock('page_product_detail_buy_form_inner_csrf', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context["buyable"] = ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "available", [], "any", false, false, false, 18) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 18) <= 0)) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 18) > 0));
        // line 19
        echo "        ";
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 99
        echo "    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_product_detail_buy_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form_action"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_product_detail_buy_form_inner_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form_inner_csrf"));

        // line 15
        echo "            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 20
        echo "            ";
        if (($context["buyable"] ?? null)) {
            // line 21
            echo "                <div class=\"form-row buy-widget-container\">
                    ";
            // line 22
            $this->displayBlock('page_product_detail_buy_quantity_container', $context, $blocks);
            // line 45
            echo "
                    ";
            // line 46
            $this->displayBlock('page_product_detail_buy_redirect_input', $context, $blocks);
            // line 57
            echo "
                    ";
            // line 58
            $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
            // line 75
            echo "
                    ";
            // line 76
            $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
            // line 84
            echo "
                    ";
            // line 85
            $this->displayBlock('page_product_detail_buy_button_container', $context, $blocks);
            // line 96
            echo "                </div>
            ";
        }
        // line 98
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_product_detail_buy_quantity_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_quantity_container"));

        // line 23
        echo "                        <div class=\"col-4\">
                            ";
        // line 24
        $this->displayBlock('page_product_detail_buy_quantity', $context, $blocks);
        // line 43
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_product_detail_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_quantity"));

        // line 25
        echo "                                <select name=\"lineItems[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "][quantity]\"
                                        class=\"custom-select product-detail-quantity-select\">
                                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedMaxPurchase", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseSteps", [], "any", false, false, false, 27)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantity"]) {
            // line 28
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "\">
                                            ";
            // line 29
            echo twig_escape_filter($this->env, $context["quantity"], "html", null, true);
            echo "
                                            ";
            // line 30
            if (($context["quantity"] == 1)) {
                // line 31
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 31), "packUnit", [], "any", false, false, false, 31)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 31), "packUnit", [], "any", false, false, false, 31), "html", null, true);
                }
                // line 32
                echo "                                            ";
            } else {
                // line 33
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 33), "packUnitPlural", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 34), "packUnitPlural", [], "any", false, false, false, 34), "html", null, true);
                    echo "
                                                ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 35
($context["product"] ?? null), "translated", [], "any", false, false, false, 35), "packUnit", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 36), "packUnit", [], "any", false, false, false, 36), "html", null, true);
                    echo "
                                                ";
                }
                // line 38
                echo "                                            ";
            }
            // line 39
            echo "                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                </select>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_page_product_detail_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_redirect_input"));

        // line 47
        echo "                        ";
        // line 48
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"frontend.detail.page\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               data-redirect-parameters=\"true\"
                               value='{\"productId\": \"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\"}'>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_product_buy_info"));

        // line 59
        echo "                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "][id]\"
                               value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "][type]\"
                               value=\"product\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
        echo "][referencedId]\"
                               value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "][stackable]\"
                               value=\"1\">
                        <input type=\"hidden\"
                               name=\"lineItems[";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 72), "html", null, true);
        echo "][removable]\"
                               value=\"1\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_meta"));

        // line 77
        echo "                        <input type=\"hidden\"
                               name=\"product-name\"
                               value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                        <input type=\"hidden\"
                               name=\"brand-name\"
                               value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 82), "getName", [], "method", false, false, false, 82), "html", null, true);
        echo "\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_page_product_detail_buy_button_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_button_container"));

        // line 86
        echo "                        <div class=\"col-8\">
                            ";
        // line 87
        $this->displayBlock('page_product_detail_buy_button', $context, $blocks);
        // line 94
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_page_product_detail_buy_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_button"));

        // line 88
        echo "                                <button class=\"btn btn-primary btn-block btn-buy\"
                                        title=\"";
        // line 89
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
        echo "\"
                                        aria-label=\"";
        // line 90
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct")), "html", null, true);
        echo "\">
                                    ";
        // line 91
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.addProduct"));
        echo "
                                </button>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  411 => 91,  407 => 90,  403 => 89,  400 => 88,  393 => 87,  385 => 94,  383 => 87,  380 => 86,  373 => 85,  364 => 82,  358 => 79,  354 => 77,  347 => 76,  337 => 72,  331 => 69,  326 => 67,  322 => 66,  316 => 63,  311 => 61,  307 => 60,  304 => 59,  297 => 58,  288 => 55,  279 => 48,  277 => 47,  270 => 46,  262 => 41,  255 => 39,  252 => 38,  246 => 36,  244 => 35,  239 => 34,  236 => 33,  233 => 32,  227 => 31,  225 => 30,  221 => 29,  216 => 28,  212 => 27,  206 => 25,  199 => 24,  191 => 43,  189 => 24,  186 => 23,  179 => 22,  172 => 98,  168 => 96,  166 => 85,  163 => 84,  161 => 76,  158 => 75,  156 => 58,  153 => 57,  151 => 46,  148 => 45,  146 => 22,  143 => 21,  140 => 20,  133 => 19,  123 => 15,  116 => 14,  103 => 9,  95 => 99,  92 => 19,  90 => 18,  87 => 17,  85 => 14,  77 => 9,  72 => 6,  69 => 5,  66 => 3,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_buy_form_inner %}
    {# @var page \\Shopware\\Storefront\\Page\\Product\\ProductPage #}

    {# @var product \\Shopware\\Core\\Content\\Product\\SalesChannel\\SalesChannelProductEntity #}
    {% set product = page.product %}

    <form
        id=\"productDetailPageBuyProductForm\"
        action=\"{% block page_product_detail_buy_form_action %}{{ path('frontend.checkout.line-item.add') }}{% endblock %}\"
        method=\"post\"
        class=\"buy-widget\"
        data-add-to-cart=\"true\">

        {% block page_product_detail_buy_form_inner_csrf %}
            {{ sw_csrf('frontend.checkout.line-item.add') }}
        {% endblock %}

        {% set buyable = product.available and product.childCount <= 0 and product.calculatedMaxPurchase > 0 %}
        {% block page_product_detail_buy_container %}
            {% if buyable %}
                <div class=\"form-row buy-widget-container\">
                    {% block page_product_detail_buy_quantity_container %}
                        <div class=\"col-4\">
                            {% block page_product_detail_buy_quantity %}
                                <select name=\"lineItems[{{ product.id }}][quantity]\"
                                        class=\"custom-select product-detail-quantity-select\">
                                    {% for quantity in range(product.minPurchase, product.calculatedMaxPurchase, product.purchaseSteps) %}
                                        <option value=\"{{ quantity }}\">
                                            {{ quantity }}
                                            {% if quantity == 1 %}
                                                {% if product.translated.packUnit %} {{ product.translated.packUnit }}{% endif %}
                                            {% else %}
                                                {% if product.translated.packUnitPlural %}
                                                    {{ product.translated.packUnitPlural }}
                                                {% elseif product.translated.packUnit %}
                                                    {{ product.translated.packUnit }}
                                                {% endif %}
                                            {% endif %}
                                        </option>
                                    {% endfor %}
                                </select>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block page_product_detail_buy_redirect_input %}
                        {# fallback redirect back to detail page is deactivated via js #}
                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"frontend.detail.page\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               data-redirect-parameters=\"true\"
                               value='{\"productId\": \"{{ product.id }}\"}'>
                    {% endblock %}

                    {% block page_product_detail_buy_product_buy_info %}
                        <input type=\"hidden\"
                               name=\"lineItems[{{ product.id }}][id]\"
                               value=\"{{ product.id }}\">
                        <input type=\"hidden\"
                               name=\"lineItems[{{ product.id }}][type]\"
                               value=\"product\">
                        <input type=\"hidden\"
                               name=\"lineItems[{{ product.id }}][referencedId]\"
                               value=\"{{ product.id }}\">
                        <input type=\"hidden\"
                               name=\"lineItems[{{ product.id }}][stackable]\"
                               value=\"1\">
                        <input type=\"hidden\"
                               name=\"lineItems[{{ product.id }}][removable]\"
                               value=\"1\">
                    {% endblock %}

                    {% block page_product_detail_product_buy_meta %}
                        <input type=\"hidden\"
                               name=\"product-name\"
                               value=\"{{ product.translated.name }}\">
                        <input type=\"hidden\"
                               name=\"brand-name\"
                               value=\"{{ product.manufacturer.getName() }}\">
                    {% endblock %}

                    {% block page_product_detail_buy_button_container %}
                        <div class=\"col-8\">
                            {% block page_product_detail_buy_button %}
                                <button class=\"btn btn-primary btn-block btn-buy\"
                                        title=\"{{ \"detail.addProduct\"|trans|striptags }}\"
                                        aria-label=\"{{ \"detail.addProduct\"|trans|striptags }}\">
                                    {{ \"detail.addProduct\"|trans|sw_sanitize }}
                                </button>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}
    </form>
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget-form.html.twig");
    }
}
