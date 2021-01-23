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

/* @Storefront/storefront/component/product/card/badges.html.twig */
class __TwigTemplate_b2759d4c97fe317d9a384c0e42e6aaed5aa8d2b5656f40e9ad6a6e729ee35b40 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_badges' => [$this, 'block_component_product_badges'],
            'component_product_badges_discount' => [$this, 'block_component_product_badges_discount'],
            'component_product_badges_topseller' => [$this, 'block_component_product_badges_topseller'],
            'component_product_badges_new' => [$this, 'block_component_product_badges_new'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/badges.html.twig"));

        // line 1
        $this->displayBlock('component_product_badges', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges"));

        // line 2
        echo "    <div class=\"product-badges\">
        ";
        // line 3
        $this->displayBlock('component_product_badges_discount', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('component_product_badges_topseller', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('component_product_badges_new', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_product_badges_discount($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges_discount"));

        // line 4
        echo "            ";
        $context["listPrice"] = (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 4) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4) > 0))) ? (null) : ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 4), "listPrice", [], "any", false, false, false, 4), "percentage", [], "any", false, false, false, 4) > 0)));
        // line 5
        echo "
            ";
        // line 6
        if (($context["listPrice"] ?? null)) {
            // line 7
            echo "                <div class=\"badge badge-danger badge-discount\">
                    <span>&#37;</span>
                </div>
            ";
        }
        // line 11
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_component_product_badges_topseller($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges_topseller"));

        // line 14
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "markAsTopseller", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div>
                    <span class=\"badge badge-warning badge-topseller\">";
            // line 16
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelTopseller"));
            echo "</span>
                </div>
            ";
        }
        // line 19
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_component_product_badges_new($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_badges_new"));

        // line 22
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isNew", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <div>
                    <span class=\"badge badge-success badge-new\">";
            // line 24
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelNew"));
            echo "</span>
                </div>
            ";
        }
        // line 27
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/badges.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  153 => 27,  147 => 24,  144 => 23,  141 => 22,  134 => 21,  127 => 19,  121 => 16,  118 => 15,  115 => 14,  108 => 13,  101 => 11,  95 => 7,  93 => 6,  90 => 5,  87 => 4,  80 => 3,  72 => 28,  70 => 21,  67 => 20,  65 => 13,  62 => 12,  60 => 3,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_badges %}
    <div class=\"product-badges\">
        {% block component_product_badges_discount %}
            {% set listPrice = product.priceRange or product.calculatedPrices.count > 0 ? null : product.calculatedPrice.listPrice.percentage > 0 %}

            {% if listPrice %}
                <div class=\"badge badge-danger badge-discount\">
                    <span>&#37;</span>
                </div>
            {% endif %}
        {% endblock %}

        {% block component_product_badges_topseller %}
            {% if product.markAsTopseller %}
                <div>
                    <span class=\"badge badge-warning badge-topseller\">{{ \"listing.boxLabelTopseller\"|trans|sw_sanitize }}</span>
                </div>
            {% endif %}
        {% endblock %}

        {% block component_product_badges_new %}
            {% if product.isNew %}
                <div>
                    <span class=\"badge badge-success badge-new\">{{ \"listing.boxLabelNew\"|trans|sw_sanitize }}</span>
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/product/card/badges.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/card/badges.html.twig");
    }
}
