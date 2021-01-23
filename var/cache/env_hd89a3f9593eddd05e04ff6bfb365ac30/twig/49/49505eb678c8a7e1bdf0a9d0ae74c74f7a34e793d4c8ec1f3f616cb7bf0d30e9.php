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

/* @Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig */
class __TwigTemplate_c80d55989412160c608230b23564dca4a854e2c4971f223a4760fdd1ef4d70b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig"));

        // line 1
        $context["isActive"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == ($context["activeId"] ?? null));
        // line 2
        $context["hasChildren"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 2), "childCount", [], "any", false, false, false, 2) > 0);
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 3), "externalLink", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            $context["url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 4), "externalLink", [], "any", false, false, false, 4);
        } else {
            // line 6
            echo "    ";
            $context["url"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)]);
        }
        // line 8
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 8), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8);
        // line 9
        echo "
<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 11
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link', $context, $blocks);
        // line 32
        echo "</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link"));

        // line 12
        echo "        <a class=\"navigation-offcanvas-link nav-item nav-link";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        if (($context["hasChildren"] ?? null)) {
            echo " js-navigation-offcanvas-link";
        }
        echo "\"
           href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 14
        if (($context["hasChildren"] ?? null)) {
            // line 15
            echo "                data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\"
            ";
        }
        // line 17
        echo "           itemprop=\"url\"
           title=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 19
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_text', $context, $blocks);
        // line 30
        echo "        </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_text"));

        // line 20
        echo "                <span itemprop=\"name\">";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</span>
                ";
        // line 21
        if (($context["hasChildren"] ?? null)) {
            // line 22
            echo "                    ";
            $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon', $context, $blocks);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon"));

        // line 23
        echo "                        <span
                            class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            ";
        // line 25
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", 25);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 26
        echo "                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 26,  157 => 25,  153 => 23,  146 => 22,  139 => 29,  136 => 28,  133 => 22,  131 => 21,  126 => 20,  119 => 19,  111 => 30,  109 => 19,  105 => 18,  102 => 17,  96 => 15,  94 => 14,  90 => 13,  80 => 12,  73 => 11,  65 => 32,  63 => 11,  59 => 9,  57 => 8,  53 => 6,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isActive = item.category.id == activeId %}
{% set hasChildren = item.category.childCount > 0 %}
{% if item.category.externalLink %}
    {% set url = item.category.externalLink %}
{% else %}
    {% set url = seoUrl('frontend.navigation.page', { navigationId: item.category.id }) %}
{% endif %}
{% set name = item.category.translated.name %}

<li class=\"navigation-offcanvas-list-item\">
    {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link %}
        <a class=\"navigation-offcanvas-link nav-item nav-link{% if isActive %} active{% endif %}{% if hasChildren %} js-navigation-offcanvas-link{% endif %}\"
           href=\"{{ url }}\"
            {% if hasChildren %}
                data-href=\"{{ path('frontend.menu.offcanvas', {'navigationId': item.category.id}) }}\"
            {% endif %}
           itemprop=\"url\"
           title=\"{{ name }}\">
            {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link_text %}
                <span itemprop=\"name\">{{ name }}</span>
                {% if hasChildren %}
                    {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon %}
                        <span
                            class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            {% sw_icon 'arrow-medium-right' style { 'pack':'solid', 'size': 'sm' } %}
                        </span>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        </a>
    {% endblock %}
</li>
", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/item-link.html.twig");
    }
}
