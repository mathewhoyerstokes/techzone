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

/* @Storefront/storefront/component/checkout/cart-alerts.html.twig */
class __TwigTemplate_9636622d7dc8703e5001ac4949c62f2970af5c7018deae5ec84db63f5b060dd7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_checkout_cart_alerts' => [$this, 'block_component_checkout_cart_alerts'],
            'component_checkout_cart_alerts_notices' => [$this, 'block_component_checkout_cart_alerts_notices'],
            'component_checkout_cart_alerts_warnings' => [$this, 'block_component_checkout_cart_alerts_warnings'],
            'component_checkout_cart_alerts_errors' => [$this, 'block_component_checkout_cart_alerts_errors'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/cart-alerts.html.twig"));

        // line 1
        $this->displayBlock('component_checkout_cart_alerts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_checkout_cart_alerts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_checkout_cart_alerts"));

        // line 2
        echo "    ";
        $this->displayBlock('component_checkout_cart_alerts_notices', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('component_checkout_cart_alerts_warnings', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('component_checkout_cart_alerts_errors', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_component_checkout_cart_alerts_notices($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_checkout_cart_alerts_notices"));

        // line 3
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3), "notices", [], "any", false, false, false, 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 4
            echo "            ";
            $context["snippetName"] = ("checkout." . twig_get_attribute($this->env, $this->source, $context["error"], "messageKey", [], "any", false, false, false, 4));
            // line 5
            echo "
            ";
            // line 6
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/cart-alerts.html.twig", 6)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 8
($context["snippetName"] ?? null), ["%name%" => twig_get_attribute($this->env, $this->source, $context["error"], "name", [], "any", false, false, false, 8)]))]));
            // line 10
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_component_checkout_cart_alerts_warnings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_checkout_cart_alerts_warnings"));

        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13), "warnings", [], "any", false, false, false, 13));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 14
            echo "            ";
            $context["snippetName"] = ("error." . twig_get_attribute($this->env, $this->source, $context["error"], "messageKey", [], "any", false, false, false, 14));
            // line 15
            echo "
            ";
            // line 16
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/cart-alerts.html.twig", 16)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 18
($context["snippetName"] ?? null), ["%name%" => twig_get_attribute($this->env, $this->source, $context["error"], "name", [], "any", false, false, false, 18)]))]));
            // line 20
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_component_checkout_cart_alerts_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_checkout_cart_alerts_errors"));

        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 24
            echo "            ";
            $context["snippetName"] = ("error." . twig_get_attribute($this->env, $this->source, $context["error"], "messageKey", [], "any", false, false, false, 24));
            // line 25
            echo "
            ";
            // line 26
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/checkout/cart-alerts.html.twig", 26)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 28
($context["snippetName"] ?? null), ["%name%" => twig_get_attribute($this->env, $this->source, $context["error"], "name", [], "any", false, false, false, 28)]))]));
            // line 30
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/cart-alerts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 31,  215 => 30,  213 => 28,  212 => 26,  209 => 25,  206 => 24,  188 => 23,  181 => 22,  174 => 21,  160 => 20,  158 => 18,  157 => 16,  154 => 15,  151 => 14,  133 => 13,  126 => 12,  119 => 11,  105 => 10,  103 => 8,  102 => 6,  99 => 5,  96 => 4,  78 => 3,  71 => 2,  63 => 22,  60 => 12,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_checkout_cart_alerts %}
    {% block component_checkout_cart_alerts_notices %}
        {% for error in page.cart.errors.notices %}
            {% set snippetName = \"checkout.#{error.messageKey}\" %}

            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                type: \"info\",
                content: snippetName|trans({'%name%': error.name})|sw_sanitize
            } %}
        {% endfor %}
    {% endblock %}
    {% block component_checkout_cart_alerts_warnings %}
        {% for error in page.cart.errors.warnings %}
            {% set snippetName = \"error.#{error.messageKey}\" %}

            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                type: \"warning\",
                content: snippetName|trans({'%name%': error.name})|sw_sanitize
            } %}
        {% endfor %}
    {% endblock %}
    {% block component_checkout_cart_alerts_errors %}
        {% for error in page.cart.errors.errors %}
            {% set snippetName = \"error.#{error.messageKey}\" %}

            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                type: \"danger\",
                content: snippetName|trans({'%name%': error.name})|sw_sanitize
            } %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/checkout/cart-alerts.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/checkout/cart-alerts.html.twig");
    }
}
