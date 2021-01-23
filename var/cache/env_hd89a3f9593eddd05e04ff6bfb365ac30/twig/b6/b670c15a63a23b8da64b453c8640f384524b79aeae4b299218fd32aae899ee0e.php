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

/* @Storefront/storefront/page/checkout/address/register.html.twig */
class __TwigTemplate_d7ece357bd75f5677a96a8c3f15e632d20c61851a0a2b9a8a9d80e4089169593 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_account_register_personal_account_fields' => [$this, 'block_component_account_register_personal_account_fields'],
            'page_checkout_register_personal_guest' => [$this, 'block_page_checkout_register_personal_guest'],
            'page_checkout_register_personal_guest_input' => [$this, 'block_page_checkout_register_personal_guest_input'],
            'page_checkout_register_personal_guest_label' => [$this, 'block_page_checkout_register_personal_guest_label'],
            'component_account_register_form_action' => [$this, 'block_component_account_register_form_action'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/account/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/address/register.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/account/register.html.twig", "@Storefront/storefront/page/checkout/address/register.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_account_register_personal_account_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_account_fields"));

        // line 4
        echo "    ";
        $this->displayBlock('page_checkout_register_personal_guest', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayParentBlock("component_account_register_personal_account_fields", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_checkout_register_personal_guest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_register_personal_guest"));

        // line 5
        echo "        <div class=\"custom-control custom-checkbox register-guest-control\">
            ";
        // line 6
        $this->displayBlock('page_checkout_register_personal_guest_input', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_checkout_register_personal_guest_label', $context, $blocks);
        // line 24
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_checkout_register_personal_guest_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_register_personal_guest_input"));

        // line 7
        echo "                <input type=\"checkbox\"
                       class=\"custom-control-input\"
                       name=\"guest\"
                       value=\"1\"
                       id=\"personalGuest\"
                       ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "guest"], "method", false, false, false, 12)) {
            echo "checked=\"checked\"";
        }
        // line 13
        echo "                       data-form-field-toggle=\"true\"
                       data-form-field-toggle-target=\".js-form-field-toggle-guest-mode\"
                       data-form-field-toggle-value=\"false\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_register_personal_guest_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_register_personal_guest_label"));

        // line 19
        echo "                <label class=\"custom-control-label\"
                       for=\"personalGuest\">
                    ";
        // line 21
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.registerGuestmodeLabel"));
        echo "
                </label>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_component_account_register_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_action"));

        // line 31
        echo "    <input type=\"hidden\"
           name=\"errorRoute\"
           value=\"frontend.checkout.register.page\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/address/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 31,  152 => 30,  142 => 21,  138 => 19,  131 => 18,  121 => 13,  117 => 12,  110 => 7,  103 => 6,  95 => 24,  93 => 18,  90 => 17,  88 => 6,  85 => 5,  78 => 4,  69 => 27,  66 => 26,  63 => 4,  56 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/account/register.html.twig' %}

{% block component_account_register_personal_account_fields %}
    {% block page_checkout_register_personal_guest %}
        <div class=\"custom-control custom-checkbox register-guest-control\">
            {% block page_checkout_register_personal_guest_input %}
                <input type=\"checkbox\"
                       class=\"custom-control-input\"
                       name=\"guest\"
                       value=\"1\"
                       id=\"personalGuest\"
                       {% if data.get('guest') %}checked=\"checked\"{% endif %}
                       data-form-field-toggle=\"true\"
                       data-form-field-toggle-target=\".js-form-field-toggle-guest-mode\"
                       data-form-field-toggle-value=\"false\">
            {% endblock %}

            {% block page_checkout_register_personal_guest_label %}
                <label class=\"custom-control-label\"
                       for=\"personalGuest\">
                    {{ \"checkout.registerGuestmodeLabel\"|trans|sw_sanitize }}
                </label>
            {% endblock %}
        </div>
    {% endblock %}

    {{ parent() }}
{% endblock %}

{% block component_account_register_form_action %}
    <input type=\"hidden\"
           name=\"errorRoute\"
           value=\"frontend.checkout.register.page\"/>
{% endblock %}
", "@Storefront/storefront/page/checkout/address/register.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/address/register.html.twig");
    }
}
