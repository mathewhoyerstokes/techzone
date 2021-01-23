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

/* @Storefront/storefront/component/product/breadcrumb.html.twig */
class __TwigTemplate_f3dd9db5e34986006be8edfe2e9b6ca4282d9ea39ef1aca701d8191a8dc0fec4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_breadcrumb' => [$this, 'block_component_product_breadcrumb'],
            'component_product_breadcrumb_category' => [$this, 'block_component_product_breadcrumb_category'],
            'component_product_breadcrumb_link_name' => [$this, 'block_component_product_breadcrumb_link_name'],
            'component_product_breadcrumb_placeholder' => [$this, 'block_component_product_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/breadcrumb.html.twig"));

        // line 2
        $this->displayBlock('component_product_breadcrumb', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb"));

        // line 3
        echo "    ";
        if (($context["category"] ?? null)) {
            // line 4
            echo "        ";
            $context["breadcrumb"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->buildSeoBreadcrumb($context, ($context["category"] ?? null));
            // line 5
            echo "        ";
            $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumb"] ?? null));
            // line 6
            echo "
        ";
            // line 7
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
                // line 8
                echo "            <div class=\"breadcrumb-container\">
                ";
                // line 9
                $this->displayBlock('component_product_breadcrumb_category', $context, $blocks);
                // line 17
                echo "                ";
                $this->displayBlock('component_product_breadcrumb_placeholder', $context, $blocks);
                // line 24
                echo "            </div>
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
            // line 26
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_component_product_breadcrumb_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_category"));

        // line 10
        echo "                    <a class=\"";
        if ((($context["key"] ?? null) === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 10))) {
            echo " is-active";
        }
        echo "\"
                       href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["key"] ?? null)]), "html", null, true);
        echo "\">
                        ";
        // line 12
        $this->displayBlock('component_product_breadcrumb_link_name', $context, $blocks);
        // line 15
        echo "                    </a>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_component_product_breadcrumb_link_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_link_name"));

        // line 13
        echo "                            ";
        echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_component_product_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_breadcrumb_placeholder"));

        // line 18
        echo "                    ";
        if ((($context["key"] ?? null) != twig_last($this->env, ($context["breadcrumbKeys"] ?? null)))) {
            // line 19
            echo "                        <div class=\"breadcrumb-placeholder\">
                            ";
            // line 20
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/breadcrumb.html.twig", 20);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 21
            echo "                        </div>
                    ";
        }
        // line 23
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 23,  183 => 21,  175 => 20,  172 => 19,  169 => 18,  162 => 17,  152 => 13,  145 => 12,  137 => 15,  135 => 12,  131 => 11,  124 => 10,  117 => 9,  109 => 26,  94 => 24,  91 => 17,  89 => 9,  86 => 8,  69 => 7,  66 => 6,  63 => 5,  60 => 4,  57 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @deprecated tag:v6.4.0 -  Will be handled by generic \"layout/breadcrumb.html.twig\" template #}
{% block component_product_breadcrumb %}
    {% if category %}
        {% set breadcrumb = sw_breadcrumb(category) %}
        {% set breadcrumbKeys = breadcrumb|keys %}

        {% for key, item in breadcrumb %}
            <div class=\"breadcrumb-container\">
                {% block component_product_breadcrumb_category %}
                    <a class=\"{% if key is same as(category.id) %} is-active{% endif %}\"
                       href=\"{{ seoUrl('frontend.navigation.page', { navigationId: key }) }}\">
                        {% block component_product_breadcrumb_link_name %}
                            {{ item }}
                        {% endblock %}
                    </a>
                {% endblock %}
                {% block component_product_breadcrumb_placeholder %}
                    {% if key != breadcrumbKeys|last %}
                        <div class=\"breadcrumb-placeholder\">
                            {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                        </div>
                    {% endif %}
                {% endblock %}
            </div>
        {% endfor %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/breadcrumb.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/breadcrumb.html.twig");
    }
}
