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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_a718730ce9b1a4bcaba939b3a0c3cf597a6fcc2c8f00fc95fc9f8455aa1206bb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_tag_config' => [$this, 'block_component_head_analytics_tag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        // line 2
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "analytics", [], "any", false, false, false, 2) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "analytics", [], "any", false, false, false, 2), "isActive", [], "method", false, false, false, 2))) {
            // line 3
            echo "        ";
            $context["trackingId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3), "getTrackingId", [], "method", false, false, false, 3);
            // line 4
            echo "        <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
            echo "\"></script>
        <script>
            window.gtagActive = true;
            window.controllerName = '";
            // line 7
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
            echo "';
            window.actionName = '";
            // line 8
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
            echo "';
            window.dataLayer = window.dataLayer || [];
            window.trackOrders = '";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 10), "analytics", [], "any", false, false, false, 10), "isTrackOrders", [], "method", false, false, false, 10), "html", null, true);
            echo "';

            function gtag() { dataLayer.push(arguments); }

            ";
            // line 14
            $this->displayBlock('component_head_analytics_tag_config', $context, $blocks);
            // line 25
            echo "        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_component_head_analytics_tag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_tag_config"));

        // line 15
        echo "                window.gtagCallback = function gtagCallbackFunction() {
                    gtag('js', new Date());

                    gtag('config', '";
        // line 18
        echo twig_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "', {
                        'anonymize_ip': '";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 19), "analytics", [], "any", false, false, false, 19), "isAnonymizeIp", [], "method", false, false, false, 19), "html", null, true);
        echo "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    });
                };
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 19,  107 => 18,  102 => 15,  95 => 14,  86 => 25,  84 => 14,  77 => 10,  72 => 8,  68 => 7,  61 => 4,  58 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_head_analytics %}
    {% if context.salesChannel.analytics and context.salesChannel.analytics.isActive() %}
        {% set trackingId = context.salesChannel.analytics.getTrackingId() %}
        <script async src=\"https://www.googletagmanager.com/gtag/js?id={{ trackingId }}\"></script>
        <script>
            window.gtagActive = true;
            window.controllerName = '{{ controllerName|lower }}';
            window.actionName = '{{ controllerAction|lower }}';
            window.dataLayer = window.dataLayer || [];
            window.trackOrders = '{{ context.salesChannel.analytics.isTrackOrders() }}';

            function gtag() { dataLayer.push(arguments); }

            {% block component_head_analytics_tag_config %}
                window.gtagCallback = function gtagCallbackFunction() {
                    gtag('js', new Date());

                    gtag('config', '{{ trackingId }}', {
                        'anonymize_ip': '{{ context.salesChannel.analytics.isAnonymizeIp() }}',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    });
                };
            {% endblock %}
        </script>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/analytics.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
