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

/* @Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig */
class __TwigTemplate_0c541080996e3f6c348beea93821165dd72050a2e15b33d283665ab3cbee56a1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_category_back_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_category_back_link_text'],
            'layout_utilities_offcanvas_close_icon' => [$this, 'block_layout_utilities_offcanvas_close_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig"));

        // line 1
        echo "<a class=\"nav-item nav-link is-back-link navigation-offcanvas-link js-navigation-offcanvas-link\"
   href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\"
   itemprop=\"url\"
   title=\"";
        // line 4
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back")), "html", null, true);
        echo "\">
    ";
        // line 5
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_back_link_text', $context, $blocks);
        // line 16
        echo "</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_layout_navigation_offcanvas_navigation_category_back_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_category_back_link_text"));

        // line 6
        echo "        <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
            ";
        // line 7
        $this->displayBlock('layout_utilities_offcanvas_close_icon', $context, $blocks);
        // line 10
        echo "        </span>

        <span itemprop=\"name\">
            ";
        // line 13
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back"));
        echo "
        </span>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_layout_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_utilities_offcanvas_close_icon"));

        // line 8
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", 8);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-left"]));
        // line 9
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 9,  98 => 8,  91 => 7,  81 => 13,  76 => 10,  74 => 7,  71 => 6,  64 => 5,  56 => 16,  54 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"nav-item nav-link is-back-link navigation-offcanvas-link js-navigation-offcanvas-link\"
   href=\"{{ path('frontend.menu.offcanvas', { 'navigationId': item.parentId}) }}\"
   itemprop=\"url\"
   title=\"{{ \"general.back\"|trans|striptags }}\">
    {% block layout_navigation_offcanvas_navigation_category_back_link_text %}
        <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
            {% block layout_utilities_offcanvas_close_icon %}
                {% sw_icon 'arrow-medium-left' style { 'pack':'solid', 'size': 'sm' } %}
            {% endblock %}
        </span>

        <span itemprop=\"name\">
            {{ \"general.back\"|trans|sw_sanitize }}
        </span>
    {% endblock %}
</a>
", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/back-link.html.twig");
    }
}
