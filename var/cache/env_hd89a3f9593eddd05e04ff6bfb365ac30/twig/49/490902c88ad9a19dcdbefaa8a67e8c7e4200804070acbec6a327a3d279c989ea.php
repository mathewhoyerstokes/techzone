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

/* @Storefront/storefront/page/product-detail/index.html.twig */
class __TwigTemplate_6d4a216cfbdc63aae3b7e7091776f66ae11038315c9aab74a19178798d04e6f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_content' => [$this, 'block_base_content'],
            'page_product_detail' => [$this, 'block_page_product_detail'],
            'page_product_detail_inner' => [$this, 'block_page_product_detail_inner'],
            'page_product_detail_content' => [$this, 'block_page_product_detail_content'],
            'page_product_detail_breadcrumb' => [$this, 'block_page_product_detail_breadcrumb'],
            'page_product_detail_headline' => [$this, 'block_page_product_detail_headline'],
            'page_product_detail_main' => [$this, 'block_page_product_detail_main'],
            'page_product_detail_media' => [$this, 'block_page_product_detail_media'],
            'page_product_detail_buy' => [$this, 'block_page_product_detail_buy'],
            'page_product_detail_tabs' => [$this, 'block_page_product_detail_tabs'],
            'page_product_detail_cross_selling' => [$this, 'block_page_product_detail_cross_selling'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 2);
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
        $this->loadTemplate("@Storefront/storefront/page/product-detail/meta.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 8
        echo "    ";
        $this->displayBlock('page_product_detail', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail"));

        // line 9
        echo "
        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            ";
        // line 13
        $this->displayBlock('page_product_detail_inner', $context, $blocks);
        // line 85
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_product_detail_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_inner"));

        // line 14
        echo "                ";
        $this->displayBlock('page_product_detail_content', $context, $blocks);
        // line 70
        echo "
                ";
        // line 71
        $this->displayBlock('page_product_detail_tabs', $context, $blocks);
        // line 76
        echo "
                ";
        // line 77
        $this->displayBlock('page_product_detail_cross_selling', $context, $blocks);
        // line 84
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_product_detail_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_content"));

        // line 15
        echo "                    <div class=\"product-detail-content\">
                        ";
        // line 16
        $this->displayBlock('page_product_detail_breadcrumb', $context, $blocks);
        // line 29
        echo "                        ";
        $this->displayBlock('page_product_detail_headline', $context, $blocks);
        // line 34
        echo "
                        ";
        // line 35
        $context["mediaItems"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 35), "media", [], "any", false, false, false, 35), "media", [], "any", false, false, false, 35);
        // line 36
        echo "
                        ";
        // line 37
        $this->displayBlock('page_product_detail_main', $context, $blocks);
        // line 68
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_page_product_detail_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_breadcrumb"));

        // line 17
        echo "                            ";
        @trigger_error("@deprecated tag:v6.4.0 - Breadcrumb will be handled by \"base_breadcrumb\" in \"storefront/base.html.twig\""." (\"@Storefront/storefront/page/product-detail/index.html.twig\" at line 17).", E_USER_DEPRECATED);
        // line 18
        echo "                            <div class=\"breadcrumb product-breadcrumb container\">
                                ";
        // line 20
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/breadcrumb.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 20)->display(twig_to_array(["context" =>         // line 21
($context["context"] ?? null), "category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["page"] ?? null), "product", [], "any", false, false, false, 22), "seoCategory", [], "any", false, false, false, 22), "navigationTree" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["page"] ?? null), "header", [], "any", false, false, false, 23), "navigation", [], "any", false, false, false, 23), "tree", [], "any", false, false, false, 23), "categoryTree" => twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
($context["page"] ?? null), "product", [], "any", false, false, false, 24), "categoryTree", [], "any", false, false, false, 24)), "product" => twig_get_attribute($this->env, $this->source,         // line 25
($context["page"] ?? null), "product", [], "any", false, false, false, 25)]));
        // line 27
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_page_product_detail_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_headline"));

        // line 30
        echo "                            <div class=\"row align-items-center product-detail-headline\">
                                ";
        // line 31
        $this->loadTemplate("@Storefront/storefront/page/product-detail/headline.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 31)->display($context);
        // line 32
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_product_detail_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_main"));

        // line 38
        echo "                            <div class=\"row product-detail-main\">
                                ";
        // line 39
        $this->displayBlock('page_product_detail_media', $context, $blocks);
        // line 60
        echo "
                                ";
        // line 61
        $this->displayBlock('page_product_detail_buy', $context, $blocks);
        // line 66
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_product_detail_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_media"));

        // line 40
        echo "                                    <div class=\"col-lg-7 product-detail-media\">
                                        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 41), "media", [], "any", false, false, false, 41)) {
            // line 42
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/element/cms-element-image-gallery.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 42)->display(twig_array_merge($context, ["mediaItems" =>             // line 43
($context["mediaItems"] ?? null), "zoom" => true, "zoomModal" => true, "displayMode" => "contain", "gutter" => 5, "minHeight" => "430px", "navigationArrows" => "inside", "navigationDots" => "inside", "galleryPosition" => "left", "isProduct" => true, "fallbackImageTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 53
($context["page"] ?? null), "product", [], "any", false, false, false, 53), "translated", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "startIndexThumbnails" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 54
($context["page"] ?? null), "product", [], "any", false, false, false, 54), "cover", [], "any", false, false, false, 54), "position", [], "any", false, false, false, 54) + 1), "startIndexSlider" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
($context["page"] ?? null), "product", [], "any", false, false, false, 55), "cover", [], "any", false, false, false, 55), "position", [], "any", false, false, false, 55) + 1)]));
            // line 57
            echo "                                        ";
        }
        // line 58
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_page_product_detail_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy"));

        // line 62
        echo "                                    <div class=\"col-lg-5 product-detail-buy\">
                                        ";
        // line 63
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 63)->display($context);
        // line 64
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_page_product_detail_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs"));

        // line 72
        echo "                    <div class=\"product-detail-tabs\">
                        ";
        // line 73
        $this->loadTemplate("@Storefront/storefront/page/product-detail/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 73)->display($context);
        // line 74
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_page_product_detail_cross_selling($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling"));

        // line 78
        echo "                    <div class=\"product-detail-tabs product-detail-cross-selling\">
                        ";
        // line 79
        $this->loadTemplate("@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 79)->display(twig_to_array(["crossSellings" => twig_get_attribute($this->env, $this->source,         // line 80
($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 80)]));
        // line 82
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 82,  330 => 80,  329 => 79,  326 => 78,  319 => 77,  311 => 74,  309 => 73,  306 => 72,  299 => 71,  291 => 64,  289 => 63,  286 => 62,  279 => 61,  271 => 58,  268 => 57,  266 => 55,  265 => 54,  264 => 53,  263 => 43,  261 => 42,  259 => 41,  256 => 40,  249 => 39,  241 => 66,  239 => 61,  236 => 60,  234 => 39,  231 => 38,  224 => 37,  216 => 32,  214 => 31,  211 => 30,  204 => 29,  196 => 27,  194 => 25,  193 => 24,  192 => 23,  191 => 22,  190 => 21,  188 => 20,  185 => 18,  182 => 17,  175 => 16,  167 => 68,  165 => 37,  162 => 36,  160 => 35,  157 => 34,  154 => 29,  152 => 16,  149 => 15,  142 => 14,  135 => 84,  133 => 77,  130 => 76,  128 => 71,  125 => 70,  122 => 14,  115 => 13,  107 => 85,  105 => 13,  99 => 9,  85 => 8,  78 => 7,  70 => 4,  63 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/page/product-detail/meta.html.twig' %}
{% endblock %}

{% block base_content %}
    {% block page_product_detail %}

        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            {% block page_product_detail_inner %}
                {% block page_product_detail_content %}
                    <div class=\"product-detail-content\">
                        {% block page_product_detail_breadcrumb %}
                            {% deprecated '@deprecated tag:v6.4.0 - Breadcrumb will be handled by \"base_breadcrumb\" in \"storefront/base.html.twig\"' %}
                            <div class=\"breadcrumb product-breadcrumb container\">
                                {# @deprecated tag:v6.4.0 parameter `navigationTree`, `categoryTree` and `product` will be removed #}
                                {% sw_include '@Storefront/storefront/component/product/breadcrumb.html.twig' with {
                                    context: context,
                                    category: page.product.seoCategory,
                                    navigationTree: page.header.navigation.tree,
                                    categoryTree: page.product.categoryTree|last,
                                    product: page.product
                                } only %}
                            </div>
                        {% endblock %}
                        {% block page_product_detail_headline %}
                            <div class=\"row align-items-center product-detail-headline\">
                                {% sw_include '@Storefront/storefront/page/product-detail/headline.html.twig' %}
                            </div>
                        {% endblock %}

                        {% set mediaItems = page.product.media.media %}

                        {% block page_product_detail_main %}
                            <div class=\"row product-detail-main\">
                                {% block page_product_detail_media %}
                                    <div class=\"col-lg-7 product-detail-media\">
                                        {% if page.product.media %}
                                            {% sw_include '@Storefront/storefront/element/cms-element-image-gallery.html.twig' with {
                                                'mediaItems': mediaItems,
                                                'zoom': true,
                                                'zoomModal': true,
                                                'displayMode': 'contain',
                                                'gutter': 5,
                                                'minHeight': '430px',
                                                'navigationArrows': 'inside',
                                                'navigationDots': 'inside',
                                                'galleryPosition': 'left',
                                                'isProduct': true,
                                                'fallbackImageTitle': page.product.translated.name,
                                                'startIndexThumbnails': page.product.cover.position + 1,
                                                'startIndexSlider': page.product.cover.position + 1
                                            } %}
                                        {% endif %}
                                    </div>
                                {% endblock %}

                                {% block page_product_detail_buy %}
                                    <div class=\"col-lg-5 product-detail-buy\">
                                        {% sw_include '@Storefront/storefront/page/product-detail/buy-widget.html.twig' %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_product_detail_tabs %}
                    <div class=\"product-detail-tabs\">
                        {% sw_include '@Storefront/storefront/page/product-detail/tabs.html.twig' %}
                    </div>
                {% endblock %}

                {% block page_product_detail_cross_selling %}
                    <div class=\"product-detail-tabs product-detail-cross-selling\">
                        {% sw_include '@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig' with {
                            crossSellings: page.crossSellings
                        } only %}
                    </div>
                {% endblock %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/index.html.twig");
    }
}
