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

/* @Storefront/storefront/page/product-detail/buy-widget.html.twig */
class __TwigTemplate_f712f563e1032db14940d75ec8e9e36d2dfc7eab3577e8f60f54e9270918149e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_inner' => [$this, 'block_page_product_detail_buy_inner'],
            'page_product_detail_rich_snippets' => [$this, 'block_page_product_detail_rich_snippets'],
            'page_product_detail_rich_snippets_brand' => [$this, 'block_page_product_detail_rich_snippets_brand'],
            'page_product_detail_rich_snippets_gtin13' => [$this, 'block_page_product_detail_rich_snippets_gtin13'],
            'page_product_detail_rich_snippets_mpn' => [$this, 'block_page_product_detail_rich_snippets_mpn'],
            'page_product_detail_rich_snippets_weight' => [$this, 'block_page_product_detail_rich_snippets_weight'],
            'page_product_detail_rich_snippets_height' => [$this, 'block_page_product_detail_rich_snippets_height'],
            'page_product_detail_rich_snippets_width' => [$this, 'block_page_product_detail_rich_snippets_width'],
            'page_product_detail_rich_snippets_depth' => [$this, 'block_page_product_detail_rich_snippets_depth'],
            'page_product_detail_rich_snippets_release_date' => [$this, 'block_page_product_detail_rich_snippets_release_date'],
            'page_product_detail_not_available' => [$this, 'block_page_product_detail_not_available'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_data' => [$this, 'block_page_product_detail_data'],
            'page_product_detail_data_rich_snippet_url' => [$this, 'block_page_product_detail_data_rich_snippet_url'],
            'page_product_detail_data_rich_snippet_price_range' => [$this, 'block_page_product_detail_data_rich_snippet_price_range'],
            'page_product_detail_data_rich_snippet_price_currency' => [$this, 'block_page_product_detail_data_rich_snippet_price_currency'],
            'page_product_detail_price' => [$this, 'block_page_product_detail_price'],
            'page_product_detail_tax' => [$this, 'block_page_product_detail_tax'],
            'page_product_detail_tax_link' => [$this, 'block_page_product_detail_tax_link'],
            'page_product_detail_reviews' => [$this, 'block_page_product_detail_reviews'],
            'page_product_detail_delivery_informations' => [$this, 'block_page_product_detail_delivery_informations'],
            'page_product_detail_configurator_include' => [$this, 'block_page_product_detail_configurator_include'],
            'page_product_detail_buy_form' => [$this, 'block_page_product_detail_buy_form'],
            'page_product_detail_wishlist' => [$this, 'block_page_product_detail_wishlist'],
            'page_product_detail_ordernumber_container' => [$this, 'block_page_product_detail_ordernumber_container'],
            'page_product_detail_ordernumber_label' => [$this, 'block_page_product_detail_ordernumber_label'],
            'page_product_detail_ordernumber' => [$this, 'block_page_product_detail_ordernumber'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_buy_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_buy_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        // line 2
        echo "    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_rich_snippets', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('page_product_detail_not_available', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 175
        echo "
        ";
        // line 176
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_10549") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 176), "core", [], "any", false, false, false, 176), "cart", [], "any", false, false, false, 176), "wishlistEnabled", [], "any", false, false, false, 176))) {
            // line 177
            echo "            ";
            $this->displayBlock('page_product_detail_wishlist', $context, $blocks);
            // line 184
            echo "        ";
        }
        // line 185
        echo "
        ";
        // line 186
        $this->displayBlock('page_product_detail_ordernumber_container', $context, $blocks);
        // line 206
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_product_detail_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        // line 4
        echo "            ";
        $this->displayBlock('page_product_detail_rich_snippets_brand', $context, $blocks);
        // line 10
        echo "
            ";
        // line 11
        $this->displayBlock('page_product_detail_rich_snippets_gtin13', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_product_detail_rich_snippets_mpn', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('page_product_detail_rich_snippets_weight', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('page_product_detail_rich_snippets_height', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('page_product_detail_rich_snippets_width', $context, $blocks);
        // line 43
        echo "
            ";
        // line 44
        $this->displayBlock('page_product_detail_rich_snippets_depth', $context, $blocks);
        // line 50
        echo "
            ";
        // line 51
        $this->displayBlock('page_product_detail_rich_snippets_release_date', $context, $blocks);
        // line 55
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_product_detail_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        // line 5
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 5), "manufacturer", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <meta itemprop=\"brand\"
                          content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "manufacturer", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
                ";
        }
        // line 9
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_product_detail_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        // line 12
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 12), "ean", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <meta itemprop=\"gtin13\"
                          content=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "ean", [], "any", false, false, false, 14), "html", null, true);
            echo "\"/>
                ";
        }
        // line 16
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_product_detail_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        // line 19
        echo "                <meta itemprop=\"mpn\"
                      content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 20), "productNumber", [], "any", false, false, false, 20), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_page_product_detail_rich_snippets_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 24), "weight", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    <meta itemprop=\"weight\"
                          content=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 26), "weight", [], "any", false, false, false, 26), "html", null, true);
            echo " kg\"/>
                ";
        }
        // line 28
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_product_detail_rich_snippets_height($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        // line 31
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "height", [], "any", false, false, false, 31)) {
            // line 32
            echo "                    <meta itemprop=\"height\"
                          content=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 33), "height", [], "any", false, false, false, 33), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 35
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_product_detail_rich_snippets_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        // line 38
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 38), "width", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <meta itemprop=\"width\"
                          content=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 40), "width", [], "any", false, false, false, 40), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 42
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_page_product_detail_rich_snippets_depth($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        // line 45
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 45), "length", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <meta itemprop=\"depth\"
                          content=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 47), "length", [], "any", false, false, false, 47), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 49
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_page_product_detail_rich_snippets_release_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        // line 52
        echo "                <meta itemprop=\"releaseDate\"
                      content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 53), "releaseDate", [], "any", false, false, false, 53), "medium", "Y-MM-dd", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "locale", [], "any", false, false, false, 53)), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_page_product_detail_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        // line 58
        echo "            ";
        // line 59
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 62
        echo "            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 64), "calculatedPrices", [], "any", false, false, false, 64)) > 1)) {
            echo "http://schema.org/AggregateOffer";
        } else {
            echo "http://schema.org/Offer";
        }
        echo "\">
                ";
        // line 65
        $this->displayBlock('page_product_detail_data', $context, $blocks);
        // line 157
        echo "
                ";
        // line 158
        $this->displayBlock('page_product_detail_configurator_include', $context, $blocks);
        // line 165
        echo "
                ";
        // line 166
        $this->displayBlock('page_product_detail_buy_form', $context, $blocks);
        // line 173
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_page_product_detail_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        // line 66
        echo "                    ";
        $this->displayBlock('page_product_detail_data_rich_snippet_url', $context, $blocks);
        // line 70
        echo "
                    ";
        // line 71
        $this->displayBlock('page_product_detail_data_rich_snippet_price_range', $context, $blocks);
        // line 90
        echo "
                    ";
        // line 91
        $this->displayBlock('page_product_detail_data_rich_snippet_price_currency', $context, $blocks);
        // line 95
        echo "
                    ";
        // line 96
        $this->displayBlock('page_product_detail_price', $context, $blocks);
        // line 101
        echo "
                    ";
        // line 102
        $this->displayBlock('page_product_detail_tax', $context, $blocks);
        // line 123
        echo "
                    ";
        // line 124
        $context["remoteClickOptions"] = ["selector" => "#review-tab", "scrollToElement" => true];
        // line 128
        echo "
                    ";
        // line 129
        $this->displayBlock('page_product_detail_reviews', $context, $blocks);
        // line 150
        echo "
                    ";
        // line 151
        $this->displayBlock('page_product_detail_delivery_informations', $context, $blocks);
        // line 156
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_page_product_detail_data_rich_snippet_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        // line 67
        echo "                        <meta itemprop=\"url\"
                              content=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_page_product_detail_data_rich_snippet_price_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        // line 72
        echo "                        ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 72), "calculatedPrices", [], "any", false, false, false, 72)) > 1)) {
            // line 73
            echo "                            ";
            $context["lowestPrice"] = false;
            // line 74
            echo "                            ";
            $context["highestPrice"] = false;
            // line 75
            echo "
                            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 76), "calculatedPrices", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 77
                echo "                                ";
                if (( !($context["lowestPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 77) < ($context["lowestPrice"] ?? null)))) {
                    // line 78
                    echo "                                    ";
                    $context["lowestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 78);
                    // line 79
                    echo "                                ";
                }
                // line 80
                echo "                                ";
                if (( !($context["highestPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 80) > ($context["highestPrice"] ?? null)))) {
                    // line 81
                    echo "                                    ";
                    $context["highestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 81);
                    // line 82
                    echo "                                ";
                }
                // line 83
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
                            <meta itemprop=\"lowPrice\" content=\"";
            // line 85
            echo twig_escape_filter($this->env, ($context["lowestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"highPrice\" content=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["highestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"offerCount\" content=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 87), "calculatedPrices", [], "any", false, false, false, 87)), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 89
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 91
    public function block_page_product_detail_data_rich_snippet_price_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        // line 92
        echo "                        <meta itemprop=\"priceCurrency\"
                              content=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 93), "translated", [], "any", false, false, false, 93), "shortName", [], "any", false, false, false, 93), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_page_product_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        // line 97
        echo "                        <div class=\"product-detail-price-container\">
                            ";
        // line 98
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 98)->display($context);
        // line 99
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_page_product_detail_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        // line 103
        echo "                        <div class=\"product-detail-tax-container\">
                            ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 104) == "gross")) {
            // line 105
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            // line 106
            echo "                            ";
        } else {
            // line 107
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            // line 108
            echo "                            ";
        }
        // line 109
        echo "
                            <p class=\"product-detail-tax\">
                                ";
        // line 111
        $this->displayBlock('page_product_detail_tax_link', $context, $blocks);
        // line 120
        echo "                            </p>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_page_product_detail_tax_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        // line 112
        echo "                                    <a class=\"product-detail-tax-link\"
                                       href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 113), "core", [], "any", false, false, false, 113), "basicInformation", [], "any", false, false, false, 113), "shippingPaymentInfoPage", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "\"
                                       data-toggle=\"modal\"
                                       data-url=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 116), "core", [], "any", false, false, false, 116), "basicInformation", [], "any", false, false, false, 116), "shippingPaymentInfoPage", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\">
                                        ";
        // line 117
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "
                                    </a>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_page_product_detail_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        // line 130
        echo "                        ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 130), "ratingAverage", [], "any", false, false, false, 130) > 0) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 130), "totalReviews", [], "any", false, false, false, 130) > 0)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 130), "core", [], "any", false, false, false, 130), "listing", [], "any", false, false, false, 130), "showReview", [], "any", false, false, false, 130))) {
            // line 131
            echo "                            <div class=\"product-detail-reviews\">

                                ";
            // line 133
            $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 133)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 134
($context["page"] ?? null), "product", [], "any", false, false, false, 134), "ratingAverage", [], "any", false, false, false, 134), "style" => "text-primary"]));
            // line 137
            echo "                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='";
            // line 141
            echo twig_escape_filter($this->env, json_encode(($context["remoteClickOptions"] ?? null)), "html", null, true);
            echo "'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 144), "totalReviews", [], "any", false, false, false, 144), "html", null, true);
            echo "
                                    ";
            // line 145
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLinkText", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 145), "totalReviews", [], "any", false, false, false, 145)]));
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 149
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 151
    public function block_page_product_detail_delivery_informations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        // line 152
        echo "                        <div class=\"product-detail-delivery-information\">
                            ";
        // line 153
        $this->loadTemplate("@Storefront/storefront/component/delivery-information.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 153)->display($context);
        // line 154
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 158
    public function block_page_product_detail_configurator_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        // line 159
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 159), "parentId", [], "any", false, false, false, 159) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 159)) > 0))) {
            // line 160
            echo "                        <div class=\"product-detail-configurator-container\">
                            ";
            // line 161
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 161)->display($context);
            // line 162
            echo "                        </div>
                    ";
        }
        // line 164
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_page_product_detail_buy_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        // line 167
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 167), "active", [], "any", false, false, false, 167)) {
            // line 168
            echo "                        <div class=\"product-detail-form-container\">
                            ";
            // line 169
            $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 169)->display($context);
            // line 170
            echo "                        </div>
                    ";
        }
        // line 172
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_page_product_detail_wishlist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_wishlist"));

        // line 178
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 178)->display(twig_array_merge($context, ["showText" => true, "size" => "md", "productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 181
($context["page"] ?? null), "product", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181)]));
        // line 183
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 186
    public function block_page_product_detail_ordernumber_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        // line 187
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 187), "productNumber", [], "any", false, false, false, 187)) {
            // line 188
            echo "                <div class=\"product-detail-ordernumber-container\">
                    ";
            // line 189
            $this->displayBlock('page_product_detail_ordernumber_label', $context, $blocks);
            // line 194
            echo "
                    ";
            // line 195
            $this->displayBlock('page_product_detail_ordernumber', $context, $blocks);
            // line 203
            echo "                </div>
            ";
        }
        // line 205
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 189
    public function block_page_product_detail_ordernumber_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        // line 190
        echo "                        <span class=\"product-detail-ordernumber-label\">
                            ";
        // line 191
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.productNumberLabel"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 195
    public function block_page_product_detail_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        // line 196
        echo "                        <meta itemprop=\"productID\"
                              content=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197), "html", null, true);
        echo "\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            ";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 200), "productNumber", [], "any", false, false, false, 200), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  870 => 200,  864 => 197,  861 => 196,  854 => 195,  844 => 191,  841 => 190,  834 => 189,  827 => 205,  823 => 203,  821 => 195,  818 => 194,  816 => 189,  813 => 188,  810 => 187,  803 => 186,  796 => 183,  794 => 181,  792 => 178,  785 => 177,  778 => 172,  774 => 170,  772 => 169,  769 => 168,  766 => 167,  759 => 166,  752 => 164,  748 => 162,  746 => 161,  743 => 160,  740 => 159,  733 => 158,  725 => 154,  723 => 153,  720 => 152,  713 => 151,  706 => 149,  699 => 145,  695 => 144,  689 => 141,  683 => 137,  681 => 134,  680 => 133,  676 => 131,  673 => 130,  666 => 129,  656 => 117,  652 => 116,  647 => 114,  643 => 113,  640 => 112,  633 => 111,  624 => 120,  622 => 111,  618 => 109,  615 => 108,  612 => 107,  609 => 106,  606 => 105,  604 => 104,  601 => 103,  594 => 102,  586 => 99,  584 => 98,  581 => 97,  574 => 96,  565 => 93,  562 => 92,  555 => 91,  548 => 89,  543 => 87,  539 => 86,  535 => 85,  532 => 84,  526 => 83,  523 => 82,  520 => 81,  517 => 80,  514 => 79,  511 => 78,  508 => 77,  504 => 76,  501 => 75,  498 => 74,  495 => 73,  492 => 72,  485 => 71,  476 => 68,  473 => 67,  466 => 66,  459 => 156,  457 => 151,  454 => 150,  452 => 129,  449 => 128,  447 => 124,  444 => 123,  442 => 102,  439 => 101,  437 => 96,  434 => 95,  432 => 91,  429 => 90,  427 => 71,  424 => 70,  421 => 66,  414 => 65,  406 => 173,  404 => 166,  401 => 165,  399 => 158,  396 => 157,  394 => 65,  386 => 64,  382 => 62,  375 => 61,  368 => 59,  366 => 58,  359 => 57,  350 => 53,  347 => 52,  340 => 51,  333 => 49,  328 => 47,  325 => 46,  322 => 45,  315 => 44,  308 => 42,  303 => 40,  300 => 39,  297 => 38,  290 => 37,  283 => 35,  278 => 33,  275 => 32,  272 => 31,  265 => 30,  258 => 28,  253 => 26,  250 => 25,  247 => 24,  240 => 23,  231 => 20,  228 => 19,  221 => 18,  214 => 16,  209 => 14,  206 => 13,  203 => 12,  196 => 11,  189 => 9,  184 => 7,  181 => 6,  178 => 5,  171 => 4,  164 => 55,  162 => 51,  159 => 50,  157 => 44,  154 => 43,  152 => 37,  149 => 36,  147 => 30,  144 => 29,  142 => 23,  139 => 22,  137 => 18,  134 => 17,  132 => 11,  129 => 10,  126 => 4,  119 => 3,  111 => 206,  109 => 186,  106 => 185,  103 => 184,  100 => 177,  98 => 176,  95 => 175,  93 => 61,  90 => 60,  88 => 57,  85 => 56,  83 => 3,  80 => 2,  67 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_buy_inner %}
    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        {% block page_product_detail_rich_snippets %}
            {% block page_product_detail_rich_snippets_brand %}
                {% if page.product.manufacturer %}
                    <meta itemprop=\"brand\"
                          content=\"{{ page.product.manufacturer.translated.name }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_gtin13 %}
                {% if page.product.ean %}
                    <meta itemprop=\"gtin13\"
                          content=\"{{ page.product.ean }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_mpn %}
                <meta itemprop=\"mpn\"
                      content=\"{{ page.product.productNumber }}\"/>
            {% endblock %}

            {% block page_product_detail_rich_snippets_weight %}
                {% if page.product.weight %}
                    <meta itemprop=\"weight\"
                          content=\"{{ page.product.weight }} kg\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_height %}
                {% if page.product.height %}
                    <meta itemprop=\"height\"
                          content=\"{{ page.product.height }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_width %}
                {% if page.product.width %}
                    <meta itemprop=\"width\"
                          content=\"{{ page.product.width }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_depth %}
                {% if page.product.length %}
                    <meta itemprop=\"depth\"
                          content=\"{{ page.product.length }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_release_date %}
                <meta itemprop=\"releaseDate\"
                      content=\"{{ page.product.releaseDate|format_date(pattern=\"Y-MM-dd\", locale=app.request.locale) }}\"/>
            {% endblock %}
        {% endblock %}

        {% block page_product_detail_not_available %}
            {#TODO: NEXT-2784 - product not available message#}
        {% endblock %}

        {% block page_product_detail_buy_container %}
            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"{% if page.product.calculatedPrices|length > 1 %}http://schema.org/AggregateOffer{% else %}http://schema.org/Offer{% endif %}\">
                {% block page_product_detail_data %}
                    {% block page_product_detail_data_rich_snippet_url %}
                        <meta itemprop=\"url\"
                              content=\"{{ seoUrl('frontend.detail.page', { productId: page.product.id }) }}\"/>
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_range %}
                        {% if page.product.calculatedPrices|length > 1 %}
                            {% set lowestPrice = false %}
                            {% set highestPrice = false %}

                            {% for price in page.product.calculatedPrices %}
                                {% if not lowestPrice or price.unitPrice < lowestPrice %}
                                    {% set lowestPrice = price.unitPrice %}
                                {% endif %}
                                {% if not highestPrice or price.unitPrice > highestPrice %}
                                    {% set highestPrice = price.unitPrice %}
                                {% endif %}
                            {% endfor %}

                            <meta itemprop=\"lowPrice\" content=\"{{ lowestPrice }}\"/>
                            <meta itemprop=\"highPrice\" content=\"{{ highestPrice }}\"/>
                            <meta itemprop=\"offerCount\" content=\"{{ page.product.calculatedPrices|length }}\"/>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_currency %}
                        <meta itemprop=\"priceCurrency\"
                              content=\"{{ context.currency.translated.shortName }}\"/>
                    {% endblock %}

                    {% block page_product_detail_price %}
                        <div class=\"product-detail-price-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-price.html.twig' %}
                        </div>
                    {% endblock %}

                    {% block page_product_detail_tax %}
                        <div class=\"product-detail-tax-container\">
                            {% if context.taxState == \"gross\" %}
                                {% set taxText = \"general.grossTaxInformation\"|trans|sw_sanitize %}
                            {% else %}
                                {% set taxText = \"general.netTaxInformation\"|trans|sw_sanitize %}
                            {% endif %}

                            <p class=\"product-detail-tax\">
                                {% block page_product_detail_tax_link %}
                                    <a class=\"product-detail-tax-link\"
                                       href=\"{{ path('frontend.cms.page',{ id: shopware.config.core.basicInformation.shippingPaymentInfoPage }) }}\"
                                       title=\"{{ taxText }}\"
                                       data-toggle=\"modal\"
                                       data-url=\"{{ path('frontend.cms.page',{ id: shopware.config.core.basicInformation.shippingPaymentInfoPage }) }}\">
                                        {{ taxText }}
                                    </a>
                                {% endblock %}
                            </p>
                        </div>
                    {% endblock %}

                    {% set remoteClickOptions = {
                        selector: \"#review-tab\",
                        scrollToElement: true
                    } %}

                    {% block page_product_detail_reviews %}
                        {% if page.product.ratingAverage > 0 and page.reviews.totalReviews > 0 and shopware.config.core.listing.showReview %}
                            <div class=\"product-detail-reviews\">

                                {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                    points: page.product.ratingAverage,
                                    style: 'text-primary'
                                } %}
                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='{{ remoteClickOptions|json_encode }}'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    {{ page.reviews.totalReviews }}
                                    {{ \"detail.reviewLinkText\"|trans({'%count%': page.reviews.totalReviews})|sw_sanitize }}
                                </a>
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_delivery_informations %}
                        <div class=\"product-detail-delivery-information\">
                            {% sw_include '@Storefront/storefront/component/delivery-information.html.twig' %}
                        </div>
                    {% endblock %}
                {% endblock %}

                {% block page_product_detail_configurator_include %}
                    {% if page.product.parentId and page.configuratorSettings|length > 0 %}
                        <div class=\"product-detail-configurator-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/configurator.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_product_detail_buy_form %}
                    {% if page.product.active %}
                        <div class=\"product-detail-form-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-form.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}

        {% if feature('FEATURE_NEXT_10549') and shopware.config.core.cart.wishlistEnabled %}
            {% block page_product_detail_wishlist %}
                {% sw_include '@Storefront/storefront/component/product/card/wishlist.html.twig' with {
                    showText: true,
                    size: 'md',
                    productId: page.product.id
                } %}
            {% endblock %}
        {% endif %}

        {% block page_product_detail_ordernumber_container %}
            {% if page.product.productNumber %}
                <div class=\"product-detail-ordernumber-container\">
                    {% block page_product_detail_ordernumber_label %}
                        <span class=\"product-detail-ordernumber-label\">
                            {{ \"detail.productNumberLabel\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_ordernumber %}
                        <meta itemprop=\"productID\"
                              content=\"{{ page.product.id }}\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            {{ page.product.productNumber }}
                        </span>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget.html.twig");
    }
}
