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

/* @Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig */
class __TwigTemplate_9eb459f70eb305951cae4c9bdc05a5a991c9e2bc2485f413c8518d361e664a2b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_cross_selling_tabs_inner' => [$this, 'block_page_product_detail_cross_selling_tabs_inner'],
            'page_product_detail_cross_selling_tabs_navigation' => [$this, 'block_page_product_detail_cross_selling_tabs_navigation'],
            'page_product_detail_cross_selling_tabs_navigation_container' => [$this, 'block_page_product_detail_cross_selling_tabs_navigation_container'],
            'page_product_detail_cross_selling_tabs_content' => [$this, 'block_page_product_detail_cross_selling_tabs_content'],
            'page_product_detail_cross_selling_tabs_content_container' => [$this, 'block_page_product_detail_cross_selling_tabs_content_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_cross_selling_tabs_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_cross_selling_tabs_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling_tabs_inner"));

        // line 2
        echo "    <div class=\"card card-tabs\" data-cross-selling=\"true\">
        ";
        // line 3
        $this->displayBlock('page_product_detail_cross_selling_tabs_navigation', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('page_product_detail_cross_selling_tabs_content', $context, $blocks);
        // line 92
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_product_detail_cross_selling_tabs_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling_tabs_navigation"));

        // line 4
        echo "            <div class=\"card-header product-detail-tab-navigation product-cross-selling-tab-navigation\">
                ";
        // line 5
        $this->displayBlock('page_product_detail_cross_selling_tabs_navigation_container', $context, $blocks);
        // line 30
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_product_detail_cross_selling_tabs_navigation_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling_tabs_navigation_container"));

        // line 6
        echo "                    <ul class=\"nav nav-tabs product-detail-tab-navigation-list\"
                        id=\"product-detail-cross-selling-tabs\"
                        role=\"tablist\">
                        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["crossSellings"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "crossSelling", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10);
            // line 11
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "crossSelling", [], "any", false, false, false, 11), "active", [], "any", false, false, false, 11) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProducts", [], "method", false, false, false, 11), "elements", [], "any", false, false, false, 11))) {
                // line 12
                echo "                                <li class=\"nav-item\">
                                    <a class=\"nav-link product-detail-tab-navigation-link";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                    echo " active";
                }
                echo "\"
                                       id=\"cs-";
                // line 14
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-tab\"
                                       data-toggle=\"tab\"
                                       href=\"#cs-";
                // line 16
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-tab-pane\"
                                       role=\"tab\"
                                       aria-controls=\"cs-";
                // line 18
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-tab-pane\"
                                       aria-selected=\"true\">
                                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "crossSelling", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "
                                        <span class=\"product-detail-tab-navigation-icon\">
                                            ";
                // line 22
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", 22);
                })())->display(twig_array_merge($context, ["pack" => "solid", "name" => "arrow-medium-right"]));
                // line 23
                echo "                                        </span>
                                    </a>
                                </li>
                            ";
            }
            // line 27
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </ul>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_page_product_detail_cross_selling_tabs_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling_tabs_content"));

        // line 34
        echo "            <div class=\"product-detail-tabs-content card-body\">
                ";
        // line 35
        $this->displayBlock('page_product_detail_cross_selling_tabs_content_container', $context, $blocks);
        // line 90
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_page_product_detail_cross_selling_tabs_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling_tabs_content_container"));

        // line 36
        echo "                    <div class=\"tab-content\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["crossSellings"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "crossSelling", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38);
            // line 39
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "crossSelling", [], "any", false, false, false, 39), "active", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getProducts", [], "method", false, false, false, 39), "elements", [], "any", false, false, false, 39))) {
                // line 40
                echo "                                <div class=\"tab-pane fade show";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 40)) {
                    echo " active";
                }
                echo "\"
                                     id=\"cs-";
                // line 41
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-tab-pane\"
                                     role=\"tabpanel\"
                                     aria-labelledby=\"cs-";
                // line 43
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-tab\">
                                        ";
                // line 44
                $context["config"] = ["title" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 46
$context["item"], "crossSelling", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)], "border" => ["value" => false], "rotate" => ["value" => false], "products" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 55
$context["item"], "getProducts", [], "method", false, false, false, 55)], "boxLayout" => ["value" => "standard"], "elMinWidth" => ["value" => "300px"], "navigation" => ["value" => true], "displayMode" => ["value" => "minimal"], "verticalAlign" => ["value" => "top"]];
                // line 73
                echo "
                                        ";
                // line 74
                $this->loadTemplate("@Storefront/storefront/element/cms-element-product-slider.html.twig", "@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", 74)->display(twig_to_array(["sliderConfig" =>                 // line 75
($context["config"] ?? null), "element" => ["data" => ["products" => ["elements" => twig_get_attribute($this->env, $this->source,                 // line 79
$context["item"], "getProducts", [], "method", false, false, false, 79)]], "type" => "product-slider"]]));
                // line 85
                echo "                                </div>
                            ";
            }
            // line 87
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 88,  280 => 87,  276 => 85,  274 => 79,  273 => 75,  272 => 74,  269 => 73,  267 => 55,  266 => 46,  265 => 44,  261 => 43,  256 => 41,  249 => 40,  246 => 39,  243 => 38,  226 => 37,  223 => 36,  216 => 35,  208 => 90,  206 => 35,  203 => 34,  196 => 33,  188 => 28,  174 => 27,  168 => 23,  160 => 22,  155 => 20,  150 => 18,  145 => 16,  140 => 14,  134 => 13,  131 => 12,  128 => 11,  125 => 10,  108 => 9,  103 => 6,  96 => 5,  88 => 30,  86 => 5,  83 => 4,  76 => 3,  68 => 92,  66 => 33,  63 => 32,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_cross_selling_tabs_inner %}
    <div class=\"card card-tabs\" data-cross-selling=\"true\">
        {% block page_product_detail_cross_selling_tabs_navigation %}
            <div class=\"card-header product-detail-tab-navigation product-cross-selling-tab-navigation\">
                {% block page_product_detail_cross_selling_tabs_navigation_container %}
                    <ul class=\"nav nav-tabs product-detail-tab-navigation-list\"
                        id=\"product-detail-cross-selling-tabs\"
                        role=\"tablist\">
                        {% for item in crossSellings %}
                            {% set id = item.crossSelling.id %}
                            {% if item.crossSelling.active and item.getProducts().elements %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link product-detail-tab-navigation-link{% if loop.first %} active{% endif %}\"
                                       id=\"cs-{{ id }}-tab\"
                                       data-toggle=\"tab\"
                                       href=\"#cs-{{ id }}-tab-pane\"
                                       role=\"tab\"
                                       aria-controls=\"cs-{{ id }}-tab-pane\"
                                       aria-selected=\"true\">
                                        {{ item.crossSelling.translated.name }}
                                        <span class=\"product-detail-tab-navigation-icon\">
                                            {% sw_icon 'arrow-medium-right' style {'pack':'solid'} %}
                                        </span>
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_product_detail_cross_selling_tabs_content %}
            <div class=\"product-detail-tabs-content card-body\">
                {% block page_product_detail_cross_selling_tabs_content_container %}
                    <div class=\"tab-content\">
                        {% for item in crossSellings %}
                            {% set id = item.crossSelling.id %}
                            {% if item.crossSelling.active and item.getProducts().elements %}
                                <div class=\"tab-pane fade show{% if loop.first %} active{% endif %}\"
                                     id=\"cs-{{ id }}-tab-pane\"
                                     role=\"tabpanel\"
                                     aria-labelledby=\"cs-{{ id }}-tab\">
                                        {% set config = {
                                            'title': {
                                                'value': item.crossSelling.name
                                            },
                                            'border': {
                                                'value': false
                                            },
                                            'rotate': {
                                                'value': false
                                            },
                                            'products': {
                                                'value': item.getProducts()
                                            },
                                            'boxLayout': {
                                                'value': 'standard'
                                            },
                                            'elMinWidth': {
                                                'value': '300px'
                                            },
                                            'navigation': {
                                                'value': true
                                            },
                                            'displayMode': {
                                                'value': 'minimal'
                                            },
                                            'verticalAlign': {
                                                'value': 'top'
                                            },
                                        } %}

                                        {% sw_include \"@Storefront/storefront/element/cms-element-product-slider.html.twig\" with {
                                            sliderConfig: config,
                                            element: {
                                                'data': {
                                                    'products': {
                                                        elements: item.getProducts()
                                                    }
                                                },
                                                type: 'product-slider'
                                            }
                                        } only %}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/cross-selling/tabs.html.twig");
    }
}
