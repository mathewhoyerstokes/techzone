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

/* @Storefront/storefront/component/listing/breadcrumb.html.twig */
class __TwigTemplate_f48661312c1b57f340743330b6b08a52bd896c50168f467067809deec9dd1742 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_listing_breadcrumb' => [$this, 'block_component_listing_breadcrumb'],
            'component_listing_breadcrumb_category' => [$this, 'block_component_listing_breadcrumb_category'],
            'component_listing_breadcrumb_link_name' => [$this, 'block_component_listing_breadcrumb_link_name'],
            'component_listing_breadcrumb_placeholder' => [$this, 'block_component_listing_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/listing/breadcrumb.html.twig"));

        // line 2
        $this->displayBlock('component_listing_breadcrumb', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_listing_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_listing_breadcrumb"));

        // line 3
        echo "    ";
        $context["breadcrumb"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildSeoBreadcrumb($context, ($context["category"] ?? null));
        // line 4
        echo "    ";
        $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumb"] ?? null));
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 7
            echo "        <div class=\"breadcrumb-container\">
            ";
            // line 8
            $this->displayBlock('component_listing_breadcrumb_category', $context, $blocks);
            // line 16
            echo "            ";
            $this->displayBlock('component_listing_breadcrumb_placeholder', $context, $blocks);
            // line 23
            echo "        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_component_listing_breadcrumb_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_listing_breadcrumb_category"));

        // line 9
        echo "                <a class=\"";
        if ((($context["key"] ?? null) === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 9))) {
            echo " is-active";
        }
        echo "\"
                   href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["key"] ?? null)]), "html", null, true);
        echo "\">
                    ";
        // line 11
        $this->displayBlock('component_listing_breadcrumb_link_name', $context, $blocks);
        // line 14
        echo "                </a>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_component_listing_breadcrumb_link_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_listing_breadcrumb_link_name"));

        // line 12
        echo "                        ";
        echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_component_listing_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_listing_breadcrumb_placeholder"));

        // line 17
        echo "                ";
        if ((($context["key"] ?? null) != twig_last($this->env, ($context["breadcrumbKeys"] ?? null)))) {
            // line 18
            echo "                    <div class=\"breadcrumb-placeholder\">
                        ";
            // line 19
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/breadcrumb.html.twig", 19);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 20
            echo "                    </div>
                ";
        }
        // line 22
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 22,  177 => 20,  169 => 19,  166 => 18,  163 => 17,  156 => 16,  146 => 12,  139 => 11,  131 => 14,  129 => 11,  125 => 10,  118 => 9,  111 => 8,  91 => 23,  88 => 16,  86 => 8,  83 => 7,  66 => 6,  63 => 5,  60 => 4,  57 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @deprecated tag:v6.4.0 -  Will be handled by generic \"layout/breadcrumb.html.twig\" template #}
{% block component_listing_breadcrumb %}
    {% set breadcrumb = sw_breadcrumb(category) %}
    {% set breadcrumbKeys = breadcrumb|keys %}

    {% for key, item in breadcrumb %}
        <div class=\"breadcrumb-container\">
            {% block component_listing_breadcrumb_category %}
                <a class=\"{% if key is same as(category.id) %} is-active{% endif %}\"
                   href=\"{{ seoUrl('frontend.navigation.page', { navigationId: key }) }}\">
                    {% block component_listing_breadcrumb_link_name %}
                        {{ item }}
                    {% endblock %}
                </a>
            {% endblock %}
            {% block component_listing_breadcrumb_placeholder %}
                {% if key != breadcrumbKeys|last %}
                    <div class=\"breadcrumb-placeholder\">
                        {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endfor %}
{% endblock %}
", "@Storefront/storefront/component/listing/breadcrumb.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/listing/breadcrumb.html.twig");
    }
}
