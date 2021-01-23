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

/* @Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig */
class __TwigTemplate_2543a8b16180dea64db2c345bc5ecacfe7a312a1d7d3135a1cd01ef629ff3f6b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_home_link' => [$this, 'block_layout_navigation_offcanvas_navigation_home_link'],
            'layout_navigation_offcanvas_navigation_home_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_home_link_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig"));

        // line 1
        $this->displayBlock('layout_navigation_offcanvas_navigation_home_link', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_navigation_offcanvas_navigation_home_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_home_link"));

        // line 2
        echo "    <a class=\"nav-item nav-link is-home-link navigation-offcanvas-link js-navigation-offcanvas-link\"
       href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "\"
       itemprop=\"url\"
       title=\"";
        // line 5
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.mainMenu")), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->displayBlock('layout_navigation_offcanvas_navigation_home_link_text', $context, $blocks);
        // line 14
        echo "    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_layout_navigation_offcanvas_navigation_home_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_home_link_text"));

        // line 7
        echo "            <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                ";
        // line 8
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", 8);
        })())->display(twig_array_merge($context, ["name" => "stack"]));
        // line 9
        echo "            </span>
            <span itemprop=\"";
        // line 10
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.mainMenu")), "html", null, true);
        echo "\">
                ";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.mainMenu"));
        echo "
            </span>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 11,  98 => 10,  95 => 9,  87 => 8,  84 => 7,  77 => 6,  69 => 14,  67 => 6,  63 => 5,  58 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_navigation_offcanvas_navigation_home_link %}
    <a class=\"nav-item nav-link is-home-link navigation-offcanvas-link js-navigation-offcanvas-link\"
       href=\"{{ path('frontend.menu.offcanvas') }}\"
       itemprop=\"url\"
       title=\"{{ \"general.mainMenu\"|trans|striptags }}\">
        {% block layout_navigation_offcanvas_navigation_home_link_text %}
            <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                {% sw_icon 'stack' %}
            </span>
            <span itemprop=\"{{ \"general.mainMenu\"|trans|striptags }}\">
                {{ \"general.mainMenu\"|trans|sw_sanitize }}
            </span>
        {% endblock %}
    </a>
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/show-all-link.html.twig");
    }
}
