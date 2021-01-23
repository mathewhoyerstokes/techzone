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

/* @Storefront/storefront/component/delivery-information.html.twig */
class __TwigTemplate_5d1708331cd3b34a67b30e8d2fbe163000bc89c97fdcf8d749bf4a4f82c80ccc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_delivery_information' => [$this, 'block_component_delivery_information'],
            'component_delivery_information_shipping_free' => [$this, 'block_component_delivery_information_shipping_free'],
            'component_delivery_information_not_available' => [$this, 'block_component_delivery_information_not_available'],
            'component_delivery_information_pre_order' => [$this, 'block_component_delivery_information_pre_order'],
            'component_delivery_information_available' => [$this, 'block_component_delivery_information_available'],
            'component_delivery_information_soldout' => [$this, 'block_component_delivery_information_soldout'],
            'component_delivery_information_restock' => [$this, 'block_component_delivery_information_restock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/delivery-information.html.twig"));

        // line 1
        $this->displayBlock('component_delivery_information', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_delivery_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["product"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 3);
        // line 4
        echo "
    <div class=\"product-delivery-information\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "shippingFree", [], "any", false, false, false, 6)) {
            // line 7
            echo "            ";
            $this->displayBlock('component_delivery_information_shipping_free', $context, $blocks);
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 15)) {
            // line 16
            echo "            ";
            $this->displayBlock('component_delivery_information_not_available', $context, $blocks);
            // line 24
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 24) && (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 24), "U") > twig_date_format_filter($this->env, "now", "U")))) {
            // line 25
            echo "            ";
            $this->displayBlock('component_delivery_information_pre_order', $context, $blocks);
            // line 33
            echo "        ";
        } elseif (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 33) >= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 33)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 33))) {
            // line 34
            echo "            ";
            $this->displayBlock('component_delivery_information_available', $context, $blocks);
            // line 44
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 44) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 44) < twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 44)))) {
            // line 45
            echo "            ";
            $this->displayBlock('component_delivery_information_soldout', $context, $blocks);
            // line 52
            echo "        ";
        } elseif ((((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 52) < twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 52)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 52)) && twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "restockTime", [], "any", false, false, false, 52))) {
            // line 53
            echo "            ";
            $this->displayBlock('component_delivery_information_restock', $context, $blocks);
            // line 64
            echo "        ";
        }
        // line 65
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_component_delivery_information_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_shipping_free"));

        // line 8
        echo "                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShippingFree"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_component_delivery_information_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_not_available"));

        // line 17
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-not-available\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 21
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryNotAvailable"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_component_delivery_information_pre_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_pre_order"));

        // line 26
        echo "                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information delivery-preorder\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 30
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.deliveryShipping"));
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "releaseDate", [], "any", false, false, false, 30), "long", "", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 30), "locale", [], "any", false, false, false, 30)), "html", null, true);
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_component_delivery_information_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_available"));

        // line 35
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                <p class=\"delivery-information delivery-available\">
                    <span class=\"delivery-status-indicator bg-success\"></span>

                    ";
        // line 39
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeAvailable", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 40), "translation", [0 => "name"], "method", false, false, false, 40)]));
        // line 41
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_component_delivery_information_soldout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_soldout"));

        // line 46
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-soldout\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    ";
        // line 49
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.soldOut"));
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_component_delivery_information_restock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_delivery_information_restock"));

        // line 54
        echo "                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-restock\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    ";
        // line 57
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.deliveryTimeRestock", ["%count%" => twig_get_attribute($this->env, $this->source,         // line 58
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 58), "%restockTime%" => twig_get_attribute($this->env, $this->source,         // line 59
($context["product"] ?? null), "restockTime", [], "any", false, false, false, 59), "%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["product"] ?? null), "deliveryTime", [], "any", false, false, false, 60), "translation", [0 => "name"], "method", false, false, false, 60)]));
        // line 61
        echo "
                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/delivery-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 61,  251 => 60,  250 => 59,  249 => 58,  248 => 57,  243 => 54,  236 => 53,  226 => 49,  221 => 46,  214 => 45,  205 => 41,  203 => 40,  202 => 39,  196 => 35,  189 => 34,  177 => 30,  171 => 26,  164 => 25,  154 => 21,  148 => 17,  141 => 16,  131 => 10,  127 => 8,  120 => 7,  112 => 65,  109 => 64,  106 => 53,  103 => 52,  100 => 45,  97 => 44,  94 => 34,  91 => 33,  88 => 25,  85 => 24,  82 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 7,  69 => 6,  65 => 4,  62 => 3,  60 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_delivery_information %}
    {# @var product \\Shopware\\Core\\Content\\Product\\ProductEntity #}
    {% set product = page.product %}

    <div class=\"product-delivery-information\">
        {% if product.shippingFree %}
            {% block component_delivery_information_shipping_free %}
                <p class=\"delivery-information delivery-shipping-free\">
                    <span class=\"delivery-status-indicator bg-info\"></span>
                    {{ \"general.deliveryShippingFree\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% endif %}

        {% if not product.active %}
            {% block component_delivery_information_not_available %}
                <link itemprop=\"availability\"
                      href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-not-available\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    {{ \"general.deliveryNotAvailable\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.releaseDate and product.releaseDate|date('U') > \"now\"|date('U') %}
            {% block component_delivery_information_pre_order %}
                <link itemprop=\"availability\"
                      href=\"http://schema.org/PreOrder\"/>
                <p class=\"delivery-information delivery-preorder\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    {{ \"general.deliveryShipping\"|trans|sw_sanitize }} {{ product.releaseDate|format_date('long', locale=app.request.locale) }}
                </p>
            {% endblock %}
        {% elseif product.availableStock >= product.minPurchase and product.deliveryTime %}
            {% block component_delivery_information_available %}
                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                <p class=\"delivery-information delivery-available\">
                    <span class=\"delivery-status-indicator bg-success\"></span>

                    {{ \"detail.deliveryTimeAvailable\"|trans({
                        '%name%': product.deliveryTime.translation('name')
                    })|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.isCloseout and product.availableStock < product.minPurchase %}
            {% block component_delivery_information_soldout %}
                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-soldout\">
                    <span class=\"delivery-status-indicator bg-danger\"></span>
                    {{ \"detail.soldOut\"|trans|sw_sanitize }}
                </p>
            {% endblock %}
        {% elseif product.availableStock < product.minPurchase and product.deliveryTime and product.restockTime %}
            {% block component_delivery_information_restock %}
                <link itemprop=\"availability\" href=\"http://schema.org/LimitedAvailability\"/>
                <p class=\"delivery-information delivery-restock\">
                    <span class=\"delivery-status-indicator bg-warning\"></span>
                    {{ \"detail.deliveryTimeRestock\"|trans({
                        '%count%': product.restockTime,
                        '%restockTime%': product.restockTime,
                        '%name%': product.deliveryTime.translation('name')
                    })|sw_sanitize }}
                </p>
            {% endblock %}
        {% endif %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/delivery-information.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/delivery-information.html.twig");
    }
}
