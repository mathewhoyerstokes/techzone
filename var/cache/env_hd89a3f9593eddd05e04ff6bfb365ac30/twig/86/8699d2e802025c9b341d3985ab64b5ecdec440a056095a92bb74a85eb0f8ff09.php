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

/* @Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig */
class __TwigTemplate_17432dab1be34cfc648414bd1ac50ef8edbb0164838239d16510af55b57e0a71 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig"));

        // line 1
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "translated", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1);
        // line 2
        echo "<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 3
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_link', $context, $blocks);
        // line 15
        echo "</li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_current_category_item_link"));

        // line 4
        echo "        <a class=\"nav-item nav-link navigation-offcanvas-link is-current-category\"
           href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\"
           itemprop=\"url\"
           title=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 8
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_text', $context, $blocks);
        // line 13
        echo "        </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_current_category_item_text"));

        // line 9
        echo "                <span itemprop=\"name\">
                    ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.showCategory", ["%category%" => ($context["name"] ?? null)]));
        echo "
                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  93 => 9,  86 => 8,  78 => 13,  76 => 8,  72 => 7,  67 => 5,  64 => 4,  57 => 3,  49 => 15,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set name = item.translated.name %}
<li class=\"navigation-offcanvas-list-item\">
    {% block layout_navigation_offcanvas_navigation_categories_list_current_category_item_link %}
        <a class=\"nav-item nav-link navigation-offcanvas-link is-current-category\"
           href=\"{{ seoUrl('frontend.navigation.page', { navigationId: item.id }) }}\"
           itemprop=\"url\"
           title=\"{{ name }}\">
            {% block layout_navigation_offcanvas_navigation_categories_list_current_category_item_text %}
                <span itemprop=\"name\">
                    {{ \"general.showCategory\"|trans({\"%category%\": name})|sw_sanitize }}
                </span>
            {% endblock %}
        </a>
    {% endblock %}
</li>
", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/show-active-link.html.twig");
    }
}
