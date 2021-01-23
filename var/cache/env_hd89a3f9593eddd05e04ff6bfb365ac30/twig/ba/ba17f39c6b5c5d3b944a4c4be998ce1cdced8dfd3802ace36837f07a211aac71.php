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

/* @Storefront/storefront/component/product/card/action.html.twig */
class __TwigTemplate_1f33ca33ae57c96f60087b7607dba6e6742018d14b3eb2c390ebe67ac0fec4a4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_action_inner' => [$this, 'block_component_product_box_action_inner'],
            'component_product_box_action_buy' => [$this, 'block_component_product_box_action_buy'],
            'component_product_box_action_buy_csrf' => [$this, 'block_component_product_box_action_buy_csrf'],
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
            'component_product_box_action_buy_redirect_input' => [$this, 'block_component_product_box_action_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'page_product_detail_product_buy_meta' => [$this, 'block_page_product_detail_product_buy_meta'],
            'page_product_detail_product_buy_button' => [$this, 'block_page_product_detail_product_buy_button'],
            'component_product_box_action_detail' => [$this, 'block_component_product_box_action_detail'],
            'component_product_box_action_meta' => [$this, 'block_component_product_box_action_meta'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/action.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_action_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_action_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_inner"));

        // line 2
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "listing", [], "any", false, false, false, 4), "allowBuyInListing", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"product-action\">
            ";
            // line 6
            $context["isAvailable"] = ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 6) || (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 6) >= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 6)));
            // line 7
            echo "
            ";
            // line 8
            if ((((($context["isAvailable"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 8)) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 8) <= 0)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) <= 1))) {
                // line 9
                echo "                ";
                $this->displayBlock('component_product_box_action_buy', $context, $blocks);
                // line 70
                echo "            ";
            } else {
                // line 71
                echo "                ";
                $this->displayBlock('component_product_box_action_detail', $context, $blocks);
                // line 78
                echo "            ";
            }
            // line 79
            echo "        </div>
    ";
        }
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock('component_product_box_action_meta', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_component_product_box_action_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy"));

        // line 10
        echo "                    ";
        // line 11
        echo "                       <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        echo "\"
                              method=\"post\"
                              class=\"buy-widget\"
                              data-add-to-cart=\"true\">

                            ";
        // line 16
        $this->displayBlock('component_product_box_action_buy_csrf', $context, $blocks);
        // line 19
        echo "
                            ";
        // line 20
        $this->displayBlock('component_product_box_action_form', $context, $blocks);
        // line 68
        echo "                        </form>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_component_product_box_action_buy_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_csrf"));

        // line 17
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_form"));

        // line 21
        echo "
                                ";
        // line 22
        $this->displayBlock('component_product_box_action_buy_redirect_input', $context, $blocks);
        // line 33
        echo "
                                ";
        // line 34
        $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
        // line 54
        echo "
                                ";
        // line 55
        $this->displayBlock('page_product_detail_product_buy_meta', $context, $blocks);
        // line 60
        echo "
                                ";
        // line 61
        $this->displayBlock('page_product_detail_product_buy_button', $context, $blocks);
        // line 67
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_component_product_box_action_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_buy_redirect_input"));

        // line 23
        echo "                                    ";
        // line 24
        echo "                                    <input type=\"hidden\"
                                           name=\"redirectTo\"
                                           value=\"frontend.detail.page\">

                                    <input type=\"hidden\"
                                           name=\"redirectParameters\"
                                           data-redirect-parameters=\"true\"
                                           value='{\"productId\": \"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\"}'>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_product_buy_info"));

        // line 35
        echo "                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 36
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][id]\"
                                           value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 39
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][referencedId]\"
                                           value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 42
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][type]\"
                                           value=\"product\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][stackable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 48
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][removable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 51
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][quantity]\"
                                           value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_page_product_detail_product_buy_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_meta"));

        // line 56
        echo "                                    <input type=\"hidden\"
                                           name=\"product-name\"
                                           value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_page_product_detail_product_buy_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_product_buy_button"));

        // line 62
        echo "                                    <button class=\"btn btn-block btn-buy\"
                                            title=\"";
        // line 63
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
        echo "\">
                                        ";
        // line 64
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
        echo "
                                    </button>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_component_product_box_action_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_detail"));

        // line 72
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                       class=\"btn btn-block btn-light\"
                       title=\"";
        // line 74
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
        echo "\">
                        ";
        // line 75
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
        echo "
                    </a>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_component_product_box_action_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action_meta"));

        // line 83
        echo "        <input type=\"hidden\"
               name=\"product-name\"
               value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "\">

        <input type=\"hidden\"
               name=\"product-id\"
               value=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  366 => 89,  359 => 85,  355 => 83,  348 => 82,  338 => 75,  334 => 74,  328 => 72,  321 => 71,  311 => 64,  307 => 63,  304 => 62,  297 => 61,  288 => 58,  284 => 56,  277 => 55,  268 => 52,  264 => 51,  258 => 48,  252 => 45,  246 => 42,  241 => 40,  237 => 39,  232 => 37,  228 => 36,  225 => 35,  218 => 34,  209 => 31,  200 => 24,  198 => 23,  191 => 22,  184 => 67,  182 => 61,  179 => 60,  177 => 55,  174 => 54,  172 => 34,  169 => 33,  167 => 22,  164 => 21,  157 => 20,  147 => 17,  140 => 16,  132 => 68,  130 => 20,  127 => 19,  125 => 16,  116 => 11,  114 => 10,  107 => 9,  100 => 82,  97 => 81,  93 => 79,  90 => 78,  87 => 71,  84 => 70,  81 => 9,  79 => 8,  76 => 7,  74 => 6,  71 => 5,  69 => 4,  66 => 3,  63 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_action_inner %}
    {% set id = product.id %}

    {% if shopware.config.core.listing.allowBuyInListing %}
        <div class=\"product-action\">
            {% set isAvailable = not product.isCloseout or (product.availableStock >= product.minPurchase) %}

            {% if isAvailable and not product.isGrouped and product.childCount <= 0 and product.calculatedPrices.count <= 1 %}
                {% block component_product_box_action_buy %}
                    {# @var product \\Shopware\\Core\\Content\\Product\\SalesChannel\\SalesChannelProductEntity #}
                       <form action=\"{{ path('frontend.checkout.line-item.add') }}\"
                              method=\"post\"
                              class=\"buy-widget\"
                              data-add-to-cart=\"true\">

                            {% block component_product_box_action_buy_csrf %}
                                {{ sw_csrf('frontend.checkout.line-item.add') }}
                            {% endblock %}

                            {% block component_product_box_action_form %}

                                {% block component_product_box_action_buy_redirect_input %}
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
                                           name=\"lineItems[{{ id }}][id]\"
                                           value=\"{{ id }}\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][referencedId]\"
                                           value=\"{{ id }}\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][type]\"
                                           value=\"product\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][stackable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][removable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[{{ id }}][quantity]\"
                                           value=\"{{ product.minPurchase }}\">
                                {% endblock %}

                                {% block page_product_detail_product_buy_meta %}
                                    <input type=\"hidden\"
                                           name=\"product-name\"
                                           value=\"{{ product.translated.name }}\">
                                {% endblock %}

                                {% block page_product_detail_product_buy_button %}
                                    <button class=\"btn btn-block btn-buy\"
                                            title=\"{{ \"listing.boxAddProduct\"|trans|striptags }}\">
                                        {{ \"listing.boxAddProduct\"|trans|sw_sanitize }}
                                    </button>
                                {% endblock %}
                            {% endblock %}
                        </form>
                {% endblock %}
            {% else %}
                {% block component_product_box_action_detail %}
                    <a href=\"{{ seoUrl('frontend.detail.page', {'productId': id}) }}\"
                       class=\"btn btn-block btn-light\"
                       title=\"{{ \"listing.boxProductDetails\"|trans|striptags }}\">
                        {{ \"listing.boxProductDetails\"|trans|sw_sanitize }}
                    </a>
                {% endblock %}
            {% endif %}
        </div>
    {% endif %}

    {% block component_product_box_action_meta %}
        <input type=\"hidden\"
               name=\"product-name\"
               value=\"{{ product.translated.name }}\">

        <input type=\"hidden\"
               name=\"product-id\"
               value=\"{{ id }}\">
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/product/card/action.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
