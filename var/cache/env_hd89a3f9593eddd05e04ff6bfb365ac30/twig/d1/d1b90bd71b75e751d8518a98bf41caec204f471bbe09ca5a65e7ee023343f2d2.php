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

/* @Storefront/storefront/page/product-detail/headline.html.twig */
class __TwigTemplate_fcc0ded8df8c650cdef23f0f8124c2a22ad0a69ccc5332011669b9b7d519834e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_headline_inner' => [$this, 'block_page_product_detail_headline_inner'],
            'page_product_detail_name_container' => [$this, 'block_page_product_detail_name_container'],
            'page_product_detail_name' => [$this, 'block_page_product_detail_name'],
            'page_product_detail_manufacturer' => [$this, 'block_page_product_detail_manufacturer'],
            'page_product_detail_manufacturer_inner' => [$this, 'block_page_product_detail_manufacturer_inner'],
            'page_product_detail_manufacturer_link' => [$this, 'block_page_product_detail_manufacturer_link'],
            'page_product_detail_manufacturer_logo' => [$this, 'block_page_product_detail_manufacturer_logo'],
            'page_product_detail_manufacturer_text' => [$this, 'block_page_product_detail_manufacturer_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/headline.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_headline_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_headline_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_headline_inner"));

        // line 2
        echo "    ";
        $this->displayBlock('page_product_detail_name_container', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('page_product_detail_manufacturer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page_product_detail_name_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_name_container"));

        // line 3
        echo "        <div class=\"col product-detail-name-container\">
            ";
        // line 4
        $this->displayBlock('page_product_detail_name', $context, $blocks);
        // line 10
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_product_detail_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_name"));

        // line 5
        echo "                <h1 class=\"product-detail-name\"
                    itemprop=\"name\">
                    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
                </h1>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_product_detail_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_manufacturer"));

        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 14), "manufacturer", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"col-md-auto product-detail-manufacturer\">
                ";
            // line 16
            $this->displayBlock('page_product_detail_manufacturer_inner', $context, $blocks);
            // line 37
            echo "            </div>
        ";
        }
        // line 39
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_page_product_detail_manufacturer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_manufacturer_inner"));

        // line 17
        echo "                    ";
        $this->displayBlock('page_product_detail_manufacturer_link', $context, $blocks);
        // line 36
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_product_detail_manufacturer_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_manufacturer_link"));

        // line 18
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 18), "manufacturer", [], "any", false, false, false, 18), "link", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
                           class=\"product-detail-manufacturer-link\"
                           rel=\"noreferrer noopener\"
                           target=\"_blank\"
                           title=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 22), "manufacturer", [], "any", false, false, false, 22), "translated", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 23), "manufacturer", [], "any", false, false, false, 23), "media", [], "any", false, false, false, 23)) {
            // line 24
            echo "                                ";
            $this->displayBlock('page_product_detail_manufacturer_logo', $context, $blocks);
            // line 29
            echo "                            ";
        } else {
            // line 30
            echo "                                ";
            $this->displayBlock('page_product_detail_manufacturer_text', $context, $blocks);
            // line 33
            echo "                            ";
        }
        // line 34
        echo "                        </a>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_product_detail_manufacturer_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_manufacturer_logo"));

        // line 25
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "manufacturer", [], "any", false, false, false, 25), "media", [], "any", false, false, false, 25)), "html", null, true);
        echo "\"
                                         class=\"product-detail-manufacturer-logo\"
                                         alt=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 27), "manufacturer", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\"/>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_product_detail_manufacturer_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_manufacturer_text"));

        // line 31
        echo "                                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 31), "manufacturer", [], "any", false, false, false, 31), "translated", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/headline.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  228 => 31,  221 => 30,  212 => 27,  206 => 25,  199 => 24,  191 => 34,  188 => 33,  185 => 30,  182 => 29,  179 => 24,  177 => 23,  173 => 22,  165 => 18,  158 => 17,  151 => 36,  148 => 17,  141 => 16,  134 => 39,  130 => 37,  128 => 16,  125 => 15,  122 => 14,  115 => 13,  105 => 7,  101 => 5,  94 => 4,  86 => 10,  84 => 4,  81 => 3,  74 => 2,  67 => 13,  64 => 12,  61 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_headline_inner %}
    {% block page_product_detail_name_container %}
        <div class=\"col product-detail-name-container\">
            {% block page_product_detail_name %}
                <h1 class=\"product-detail-name\"
                    itemprop=\"name\">
                    {{ page.product.translated.name }}
                </h1>
            {% endblock %}
        </div>
    {% endblock %}

    {% block page_product_detail_manufacturer %}
        {% if page.product.manufacturer %}
            <div class=\"col-md-auto product-detail-manufacturer\">
                {% block page_product_detail_manufacturer_inner %}
                    {% block page_product_detail_manufacturer_link %}
                        <a href=\"{{ page.product.manufacturer.link }}\"
                           class=\"product-detail-manufacturer-link\"
                           rel=\"noreferrer noopener\"
                           target=\"_blank\"
                           title=\"{{ page.product.manufacturer.translated.name }}\">
                            {% if page.product.manufacturer.media %}
                                {% block page_product_detail_manufacturer_logo %}
                                    <img src=\"{{ page.product.manufacturer.media|sw_encode_media_url }}\"
                                         class=\"product-detail-manufacturer-logo\"
                                         alt=\"{{ page.product.manufacturer.translated.name }}\"/>
                                {% endblock %}
                            {% else %}
                                {% block page_product_detail_manufacturer_text %}
                                    {{ page.product.manufacturer.translated.name }}
                                {% endblock %}
                            {% endif %}
                        </a>
                    {% endblock %}
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/headline.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/headline.html.twig");
    }
}
