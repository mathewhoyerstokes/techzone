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

/* @Storefront/storefront/component/review/point.html.twig */
class __TwigTemplate_a68837149377fc8f907c5005f91650f333997113dfb194f317191411c05a4dac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_point' => [$this, 'block_component_review_point'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/point.html.twig"));

        // line 1
        $this->displayBlock('component_review_point', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_review_point($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_point"));

        // line 2
        echo "    ";
        if ( !(isset($context["size"]) || array_key_exists("size", $context))) {
            // line 3
            echo "        ";
            $context["size"] = "xs";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    <span class=\"product-review-point\">
        ";
        // line 7
        if ((($context["type"] ?? null) == "half")) {
            // line 8
            echo "            <div class=\"point-container\">
                <div class=\"point-rating point-partial-placeholder\">
                    ";
            // line 10
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 10);
            })())->display(twig_array_merge($context, ["color" => "light", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 11
            echo "                </div>
                <div class=\"point-rating point-partial\" style=\"clip-path: inset(0 ";
            // line 12
            echo twig_escape_filter($this->env, ((1 - ($context["left"] ?? null)) * 100), "html", null, true);
            echo "% 0 0)\">
                    ";
            // line 13
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 13);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 14
            echo "                </div>
            </div>
        ";
        } elseif ((        // line 16
($context["type"] ?? null) == "blank")) {
            // line 17
            echo "            <div class=\"point-container\">
                <div class=\"point-rating point-blank\">
                    ";
            // line 19
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 19);
            })())->display(twig_array_merge($context, ["color" => "light", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 20
            echo "                </div>
            </div>
        ";
        } else {
            // line 23
            echo "            <div class=\"point-container\">
                <div class=\"point-rating point-full\">
                    ";
            // line 25
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 25);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 26
            echo "                </div>
            </div>
        ";
        }
        // line 29
        echo "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/point.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  131 => 26,  123 => 25,  119 => 23,  114 => 20,  106 => 19,  102 => 17,  100 => 16,  96 => 14,  88 => 13,  84 => 12,  81 => 11,  73 => 10,  69 => 8,  67 => 7,  63 => 5,  60 => 4,  57 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_review_point %}
    {% if size is not defined %}
        {% set size = 'xs' %}
    {% endif %}

    <span class=\"product-review-point\">
        {% if type == 'half' %}
            <div class=\"point-container\">
                <div class=\"point-rating point-partial-placeholder\">
                    {% sw_icon 'star' style { 'color': 'light', 'size': size, 'pack': 'solid' } %}
                </div>
                <div class=\"point-rating point-partial\" style=\"clip-path: inset(0 {{ (1 - left) * 100 }}% 0 0)\">
                    {% sw_icon 'star' style { 'color': 'review', 'size': size, 'pack': 'solid' } %}
                </div>
            </div>
        {% elseif type == 'blank' %}
            <div class=\"point-container\">
                <div class=\"point-rating point-blank\">
                    {% sw_icon 'star' style { 'color': 'light', 'size': size, 'pack': 'solid' } %}
                </div>
            </div>
        {% else %}
            <div class=\"point-container\">
                <div class=\"point-rating point-full\">
                    {% sw_icon 'star' style { 'color': 'review', 'size': size, 'pack': 'solid' } %}
                </div>
            </div>
        {% endif %}
    </span>
{% endblock %}
", "@Storefront/storefront/component/review/point.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/review/point.html.twig");
    }
}
