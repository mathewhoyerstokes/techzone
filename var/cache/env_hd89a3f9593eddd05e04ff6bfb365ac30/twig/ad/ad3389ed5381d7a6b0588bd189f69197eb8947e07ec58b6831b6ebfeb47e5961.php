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

/* @Storefront/storefront/component/checkout/hidden-line-items-information.html.twig */
class __TwigTemplate_2021c2c23139409cbe4c3f10186f238728eb12b7616b7bc1a7ea0c57deb6687d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_hidden_line_items_information' => [$this, 'block_component_hidden_line_items_information'],
            'component_hidden_line_item_information' => [$this, 'block_component_hidden_line_item_information'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig"));

        // line 1
        $this->displayBlock('component_hidden_line_items_information', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_hidden_line_items_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_hidden_line_items_information"));

        // line 2
        echo "    <div class=\"d-none hidden-line-items-information\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lineItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 4
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lineItem"], "priceDefinition", [], "any", false, false, false, 4), "price", [], "any", false, false, false, 4)) {
                // line 5
                echo "              ";
                $context["gaPrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lineItem"], "priceDefinition", [], "any", false, false, false, 5), "price", [], "any", false, false, false, 5);
                // line 6
                echo "            ";
            } else {
                // line 7
                echo "              ";
                $context["gaPrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lineItem"], "price", [], "any", false, false, false, 7), "totalPrice", [], "any", false, false, false, 7);
                // line 8
                echo "            ";
            }
            // line 9
            echo "            ";
            $this->displayBlock('component_hidden_line_item_information', $context, $blocks);
            // line 17
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_component_hidden_line_item_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_hidden_line_item_information"));

        // line 10
        echo "                <span class=\"hidden-line-item\"
                      data-id=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
                      data-name=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 12), "html", null, true);
        echo "\"
                      data-quantity=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
                      data-price=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["gaPrice"] ?? null), "html", null, true);
        echo "\">
                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 14,  133 => 13,  129 => 12,  125 => 11,  122 => 10,  115 => 9,  107 => 18,  93 => 17,  90 => 9,  87 => 8,  84 => 7,  81 => 6,  78 => 5,  75 => 4,  58 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_hidden_line_items_information %}
    <div class=\"d-none hidden-line-items-information\">
        {% for lineItem in lineItems  %}
            {% if lineItem.priceDefinition.price %}
              {% set gaPrice = lineItem.priceDefinition.price %}
            {% else %}
              {% set gaPrice = lineItem.price.totalPrice %}
            {% endif %}
            {% block component_hidden_line_item_information %}
                <span class=\"hidden-line-item\"
                      data-id=\"{{ lineItem.id }}\"
                      data-name=\"{{ lineItem.label }}\"
                      data-quantity=\"{{ lineItem.quantity }}\"
                      data-price=\"{{ gaPrice }}\">
                </span>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/checkout/hidden-line-items-information.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/checkout/hidden-line-items-information.html.twig");
    }
}
