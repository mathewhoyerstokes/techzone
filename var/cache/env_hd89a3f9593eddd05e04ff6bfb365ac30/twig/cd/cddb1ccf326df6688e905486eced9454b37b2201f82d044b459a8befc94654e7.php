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

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_268ef59121dcdb4e27423524239bbc639085860cb063b96567a71ef385058c45 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        // line 1
        $this->displayBlock('utilities_icon', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        // line 2
        echo "    ";
        $context["styles"] = [0 => ($context["size"] ?? null), 1 => ($context["color"] ?? null), 2 => ($context["rotation"] ?? null), 3 => ($context["flip"] ?? null), 4 => ($context["class"] ?? null)];
        // line 3
        echo "
    ";
        // line 4
        if ( !(isset($context["pack"]) || array_key_exists("pack", $context))) {
            // line 5
            echo "        ";
            $context["pack"] = "default";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ( !(isset($context["namespace"]) || array_key_exists("namespace", $context))) {
            // line 9
            echo "        ";
            $context["namespace"] = "Storefront";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    <span
        class=\"icon icon-";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            if (($context["entry"] != "")) {
                echo " icon-";
                echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
            ";
        // line 14
        echo twig_source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/../app/storefront/dist/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
        echo "
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  83 => 13,  79 => 11,  76 => 10,  73 => 9,  71 => 8,  68 => 7,  65 => 6,  62 => 5,  60 => 4,  57 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block utilities_icon %}
    {% set styles = [ size, color, rotation, flip, class ] %}

    {% if pack is not defined %}
        {% set pack = 'default' %}
    {% endif %}

    {% if namespace is not defined %}
        {% set namespace = 'Storefront' %}
    {% endif %}

    <span
        class=\"icon icon-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
            {{ source('@' ~ namespace ~ '/../app/storefront/dist/assets/icon/'~ pack ~'/'~ name ~'.svg', ignore_missing = true) }}
    </span>
{% endblock %}
", "@Storefront/storefront/utilities/icon.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
