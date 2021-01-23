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

/* @Storefront/storefront/layout/sidebar/category-navigation.html.twig */
class __TwigTemplate_9801ad8c3c5aba668f5f25e96bdc32e4c037ff24628c69359b2b391ae402eb31 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_categories' => [$this, 'block_layout_navigation_categories'],
            'layout_navigation_categories_list' => [$this, 'block_layout_navigation_categories_list'],
            'layout_navigation_categories_list_entry' => [$this, 'block_layout_navigation_categories_list_entry'],
            'layout_navigation_categories_link_children' => [$this, 'block_layout_navigation_categories_link_children'],
            'layout_navigation_categories_link_children_name' => [$this, 'block_layout_navigation_categories_link_children_name'],
            'layout_navigation_categories_recoursion' => [$this, 'block_layout_navigation_categories_recoursion'],
            'layout_navigation_categories_link' => [$this, 'block_layout_navigation_categories_link'],
            'layout_navigation_categories_link_name' => [$this, 'block_layout_navigation_categories_link_name'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/sidebar/category-navigation.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_categories', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories"));

        // line 2
        echo "    ";
        $context["navigationMaxDepth"] = 3;
        // line 3
        echo "
    ";
        // line 4
        if ( !($context["level"] ?? null)) {
            // line 5
            echo "        ";
            $context["level"] = 0;
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('layout_navigation_categories_list', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_navigation_categories_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_list"));

        // line 9
        echo "        <ul class=\"category-navigation level-";
        echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigationTree"] ?? null));
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
            // line 11
            echo "
                ";
            // line 12
            $this->displayBlock('layout_navigation_categories_list_entry', $context, $blocks);
            // line 47
            echo "            ";
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
        // line 48
        echo "        </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_layout_navigation_categories_list_entry($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_list_entry"));

        // line 13
        echo "                    <li class=\"category-navigation-entry\">
                        ";
        // line 14
        if ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["activeResult"] ?? null), "id", [], "any", false, false, false, 14)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["activeResult"] ?? null), "path", [], "any", false, false, false, 14)))) {
            // line 15
            echo "
                            ";
            // line 16
            $this->displayBlock('layout_navigation_categories_link_children', $context, $blocks);
            // line 24
            echo "
                            ";
            // line 25
            $this->displayBlock('layout_navigation_categories_recoursion', $context, $blocks);
            // line 34
            echo "                        ";
        } else {
            // line 35
            echo "
                            ";
            // line 36
            $this->displayBlock('layout_navigation_categories_link', $context, $blocks);
            // line 44
            echo "                        ";
        }
        // line 45
        echo "                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_layout_navigation_categories_link_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_link_children"));

        // line 17
        echo "                                <a class=\"category-navigation-link";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) === twig_get_attribute($this->env, $this->source, ($context["activeResult"] ?? null), "id", [], "any", false, false, false, 17))) {
            echo " is-active";
        }
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, ($context["activeResult"] ?? null), "path", [], "any", false, false, false, 17))) {
            echo " in-path";
        }
        echo "\"
                                   href=\"";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 18), "externalLink", [], "any", false, false, false, 18)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 18), "externalLink", [], "any", false, false, false, 18), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
        }
        echo "\">
                                    ";
        // line 19
        $this->displayBlock('layout_navigation_categories_link_children_name', $context, $blocks);
        // line 22
        echo "                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_layout_navigation_categories_link_children_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_link_children_name"));

        // line 20
        echo "                                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 20), "translated", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_layout_navigation_categories_recoursion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_recoursion"));

        // line 26
        echo "                                ";
        if ((($context["level"] ?? null) < ($context["navigationMaxDepth"] ?? null))) {
            // line 27
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/layout/sidebar/category-navigation.html.twig", "@Storefront/storefront/layout/sidebar/category-navigation.html.twig", 27)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source,             // line 28
($context["item"] ?? null), "children", [], "any", false, false, false, 28), "activeResult" =>             // line 29
($context["activeResult"] ?? null), "level" => (            // line 30
($context["level"] ?? null) + 1)]));
            // line 32
            echo "                                ";
        }
        // line 33
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_layout_navigation_categories_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_link"));

        // line 37
        echo "                                <a class=\"category-navigation-link";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37) === twig_get_attribute($this->env, $this->source, ($context["activeResult"] ?? null), "id", [], "any", false, false, false, 37))) {
            echo " is-active";
        }
        echo "\"
                                   href=\"";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 38), "externalLink", [], "any", false, false, false, 38)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 38), "externalLink", [], "any", false, false, false, 38), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
        }
        echo "\">
                                    ";
        // line 39
        $this->displayBlock('layout_navigation_categories_link_name', $context, $blocks);
        // line 42
        echo "                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_layout_navigation_categories_link_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_link_name"));

        // line 40
        echo "                                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/sidebar/category-navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  298 => 40,  291 => 39,  283 => 42,  281 => 39,  273 => 38,  266 => 37,  259 => 36,  252 => 33,  249 => 32,  247 => 30,  246 => 29,  245 => 28,  243 => 27,  240 => 26,  233 => 25,  223 => 20,  216 => 19,  208 => 22,  206 => 19,  198 => 18,  188 => 17,  181 => 16,  173 => 45,  170 => 44,  168 => 36,  165 => 35,  162 => 34,  160 => 25,  157 => 24,  155 => 16,  152 => 15,  150 => 14,  147 => 13,  140 => 12,  132 => 48,  118 => 47,  116 => 12,  113 => 11,  96 => 10,  91 => 9,  78 => 8,  75 => 7,  72 => 6,  69 => 5,  67 => 4,  64 => 3,  61 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_categories %}
    {% set navigationMaxDepth = 3 %}

    {% if not level %}
        {% set level = 0 %}
    {% endif %}

    {% block layout_navigation_categories_list %}
        <ul class=\"category-navigation level-{{ level }}\">
            {% for item in navigationTree %}

                {% block layout_navigation_categories_list_entry %}
                    <li class=\"category-navigation-entry\">
                        {% if (item.category.id in activeResult.id) or (item.category.id in activeResult.path) %}

                            {% block layout_navigation_categories_link_children %}
                                <a class=\"category-navigation-link{% if item.category.id is same as(activeResult.id) %} is-active{% endif %}{% if item.category.id in activeResult.path %} in-path{% endif %}\"
                                   href=\"{% if item.category.externalLink %}{{ item.category.externalLink }}{% else %}{{ seoUrl('frontend.navigation.page', { navigationId: item.category.id }) }}{% endif %}\">
                                    {% block layout_navigation_categories_link_children_name %}
                                        {{ item.category.translated.name }}
                                    {% endblock %}
                                </a>
                            {% endblock %}

                            {% block layout_navigation_categories_recoursion %}
                                {% if level < navigationMaxDepth %}
                                    {% sw_include '@Storefront/storefront/layout/sidebar/category-navigation.html.twig' with {
                                        navigationTree: item.children,
                                        activeResult: activeResult,
                                        level: level + 1
                                    } only %}
                                {% endif %}
                            {% endblock %}
                        {% else %}

                            {% block layout_navigation_categories_link %}
                                <a class=\"category-navigation-link{% if item.category.id is same as(activeResult.id) %} is-active{% endif %}\"
                                   href=\"{% if item.category.externalLink %}{{ item.category.externalLink }}{% else %}{{ seoUrl('frontend.navigation.page', { navigationId: item.category.id }) }}{% endif %}\">
                                    {% block layout_navigation_categories_link_name %}
                                        {{ item.category.translated.name }}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}
                    </li>
                {% endblock %}
            {% endfor %}
        </ul>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/sidebar/category-navigation.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/sidebar/category-navigation.html.twig");
    }
}
