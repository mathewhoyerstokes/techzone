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

/* @Storefront/storefront/component/product/card/meta.html.twig */
class __TwigTemplate_b7ff5376e4a5d562262dac558933df01981c25a3abda74df66504f3e800ac454 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_rich_snippets_inner' => [$this, 'block_component_product_box_rich_snippets_inner'],
            'component_product_box_rich_snippets_brand' => [$this, 'block_component_product_box_rich_snippets_brand'],
            'component_product_box_rich_snippets_gtin13' => [$this, 'block_component_product_box_rich_snippets_gtin13'],
            'component_product_box_rich_snippets_mpn' => [$this, 'block_component_product_box_rich_snippets_mpn'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/meta.html.twig"));

        // line 1
        $this->displayBlock('component_product_box_rich_snippets_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box_rich_snippets_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets_inner"));

        // line 2
        echo "    ";
        $this->displayBlock('component_product_box_rich_snippets_brand', $context, $blocks);
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('component_product_box_rich_snippets_gtin13', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('component_product_box_rich_snippets_mpn', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_component_product_box_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets_brand"));

        // line 3
        echo "        <meta itemprop=\"brand\"
              content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 4), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_component_product_box_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets_gtin13"));

        // line 8
        echo "        ";
        $context["ean"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ean", [], "any", false, false, false, 8);
        // line 9
        echo "        ";
        if (($context["ean"] ?? null)) {
            // line 10
            echo "            <meta itemprop=\"gtin13\"
                  content=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["ean"] ?? null), "html", null, true);
            echo "\"/>
        ";
        }
        // line 13
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_component_product_box_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets_mpn"));

        // line 16
        echo "        <meta itemprop=\"mpn\"
              content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productNumber", [], "any", false, false, false, 17), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 17,  129 => 16,  122 => 15,  115 => 13,  110 => 11,  107 => 10,  104 => 9,  101 => 8,  94 => 7,  85 => 4,  82 => 3,  75 => 2,  68 => 15,  65 => 14,  63 => 7,  60 => 6,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box_rich_snippets_inner %}
    {% block component_product_box_rich_snippets_brand %}
        <meta itemprop=\"brand\"
              content=\"{{ product.manufacturer.translated.name }}\"/>
    {% endblock %}

    {% block component_product_box_rich_snippets_gtin13 %}
        {% set ean = product.ean %}
        {% if ean %}
            <meta itemprop=\"gtin13\"
                  content=\"{{ ean }}\"/>
        {% endif %}
    {% endblock %}

    {% block component_product_box_rich_snippets_mpn %}
        <meta itemprop=\"mpn\"
              content=\"{{ product.productNumber }}\"/>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/product/card/meta.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/card/meta.html.twig");
    }
}
