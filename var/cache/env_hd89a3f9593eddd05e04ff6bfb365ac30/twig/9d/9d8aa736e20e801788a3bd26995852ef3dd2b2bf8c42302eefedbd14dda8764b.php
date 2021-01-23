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

/* @Storefront/storefront/component/review/rating.html.twig */
class __TwigTemplate_2804c581745c0518e4243f42479057a6314621f8f66ebb60d4269a753d182b61 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_rating' => [$this, 'block_component_review_rating'],
            'component_review_rating_output' => [$this, 'block_component_review_rating_output'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/review/rating.html.twig"));

        // line 1
        $this->displayBlock('component_review_rating', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_review_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating"));

        // line 2
        echo "    ";
        $context["full"] = twig_round(($context["points"] ?? null), 0, "floor");
        // line 3
        echo "    ";
        $context["left"] = twig_round(((($context["points"] ?? null) - ($context["full"] ?? null)) * 4));
        // line 4
        echo "    ";
        $context["left"] = (($context["left"] ?? null) / 4);
        // line 5
        echo "
    ";
        // line 6
        if ((($context["left"] ?? null) > 0)) {
            // line 7
            echo "        ";
            $context["half"] = 1;
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["blank"] = ((5 - ($context["full"] ?? null)) - ($context["half"] ?? null));
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('component_review_rating_output', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_review_rating_output($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_review_rating_output"));

        // line 13
        echo "        <span class=\"product-review-rating\">

            ";
        // line 15
        if ((($context["full"] ?? null) > 0)) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["full"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 17
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 17)->display(twig_array_merge($context, ["type" => "full"]));
                // line 20
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            ";
        }
        // line 22
        echo "
            ";
        // line 23
        if (($context["half"] ?? null)) {
            // line 24
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 24)->display(twig_array_merge($context, ["type" => "half"]));
            // line 27
            echo "            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ((($context["blank"] ?? null) > 0)) {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["blank"] ?? null)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["star"]) {
                // line 31
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/review/rating.html.twig", 31)->display(twig_array_merge($context, ["type" => "blank"]));
                // line 34
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['star'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        }
        // line 36
        echo "        </span>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 36,  191 => 35,  177 => 34,  174 => 31,  156 => 30,  154 => 29,  151 => 28,  148 => 27,  145 => 24,  143 => 23,  140 => 22,  137 => 21,  123 => 20,  120 => 17,  102 => 16,  100 => 15,  96 => 13,  83 => 12,  80 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_review_rating %}
    {% set full = points|round(0, 'floor')   %}
    {% set left = ((points - full) * 4)|round %}
    {% set left = left / 4 %}

    {% if left > 0 %}
        {% set half = 1 %}
    {% endif %}

    {% set blank = 5 - full - half  %}

    {% block component_review_rating_output %}
        <span class=\"product-review-rating\">

            {% if full > 0 %}
                {% for star in range(1,full) %}
                    {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                        type: 'full'
                    } %}
                {% endfor %}
            {% endif %}

            {% if half %}
                {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                    type: 'half'
                } %}
            {% endif %}

            {% if blank > 0 %}
                {% for star in range(1,blank) %}
                    {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                        type: 'blank'
                    } %}
                {% endfor %}
            {% endif %}
        </span>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/review/rating.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/review/rating.html.twig");
    }
}
