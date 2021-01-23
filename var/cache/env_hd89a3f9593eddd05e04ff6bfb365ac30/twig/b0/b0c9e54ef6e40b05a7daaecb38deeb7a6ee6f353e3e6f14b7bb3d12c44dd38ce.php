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

/* @Storefront/storefront/page/checkout/change-payment-modal.html.twig */
class __TwigTemplate_75824b731749e8998557be392d843acd197cfff98f4f8b097841cd71b8d2d5d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_change_payment_form' => [$this, 'block_page_checkout_change_payment_form'],
            'page_checkout_change_payment_form_csrf' => [$this, 'block_page_checkout_change_payment_form_csrf'],
            'page_checkout_change_payment_form_redirect' => [$this, 'block_page_checkout_change_payment_form_redirect'],
            'page_checkout_change_payment_form_fields' => [$this, 'block_page_checkout_change_payment_form_fields'],
            'page_checkout_change_payment_form_submit' => [$this, 'block_page_checkout_change_payment_form_submit'],
            'page_checkout_change_payment_cancel' => [$this, 'block_page_checkout_change_payment_cancel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/change-payment-modal.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('page_checkout_change_payment_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_change_payment_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_change_payment_form"));

        // line 4
        echo "    <form id=\"confirmPaymentForm\"
          name=\"confirmPaymentForm\"
          action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["action"] ?? null));
        echo "\"
          data-form-csrf-handler=\"true\"
          method=\"post\">

        ";
        // line 10
        $this->displayBlock('page_checkout_change_payment_form_csrf', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('page_checkout_change_payment_form_redirect', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('page_checkout_change_payment_form_fields', $context, $blocks);
        // line 23
        echo "
        ";
        // line 25
        echo "        ";
        $this->displayBlock('page_checkout_change_payment_form_submit', $context, $blocks);
        // line 30
        echo "
        ";
        // line 32
        echo "        ";
        $this->displayBlock('page_checkout_change_payment_cancel', $context, $blocks);
        // line 40
        echo "    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_checkout_change_payment_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_change_payment_form_csrf"));

        // line 11
        echo "            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder(($context["action"] ?? null));
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_checkout_change_payment_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_change_payment_form_redirect"));

        // line 15
        echo "            <input type=\"hidden\" name=\"redirectTo\" value=\"";
        echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_change_payment_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_change_payment_form_fields"));

        // line 19
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/payment/payment-fields.html.twig", "@Storefront/storefront/page/checkout/change-payment-modal.html.twig", 19)->display(twig_array_merge($context, ["defaultPaymentMethodId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["context"] ?? null), "paymentMethod", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]));
        // line 22
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_page_checkout_change_payment_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_change_payment_form_submit"));

        // line 26
        echo "            <button class=\"btn btn-primary\" type=\"submit\">
                ";
        // line 27
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangePaymentShippingSave"));
        echo "
            </button>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_page_checkout_change_payment_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_change_payment_cancel"));

        // line 33
        echo "            <button class=\"btn btn-light\"
                    type=\"button\"
                    data-dismiss=\"modal\"
                    aria-label=\"Close\">
                ";
        // line 37
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.confirmChangePaymentShippingCancel"));
        echo "
            </button>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/change-payment-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 37,  184 => 33,  177 => 32,  167 => 27,  164 => 26,  157 => 25,  150 => 22,  148 => 20,  146 => 19,  139 => 18,  129 => 15,  122 => 14,  112 => 11,  105 => 10,  97 => 40,  94 => 32,  91 => 30,  88 => 25,  85 => 23,  83 => 18,  80 => 17,  78 => 14,  75 => 13,  73 => 10,  66 => 6,  62 => 4,  49 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @deprecated tag:v6.4.0.0 the content of this file will be moved to new component/payment/payment-form.html.twig #}

{% block page_checkout_change_payment_form %}
    <form id=\"confirmPaymentForm\"
          name=\"confirmPaymentForm\"
          action=\"{{ path(action) }}\"
          data-form-csrf-handler=\"true\"
          method=\"post\">

        {% block page_checkout_change_payment_form_csrf %}
            {{ sw_csrf(action) }}
        {% endblock %}

        {% block page_checkout_change_payment_form_redirect %}
            <input type=\"hidden\" name=\"redirectTo\" value=\"{{ redirect }}\">
        {% endblock %}

        {% block page_checkout_change_payment_form_fields %}
            {% sw_include '@Storefront/storefront/component/payment/payment-fields.html.twig' with {
                'defaultPaymentMethodId': context.paymentMethod.id,
            } %}
        {% endblock %}

        {# @deprecated tag:v6.4.0.0 removed #}
        {% block page_checkout_change_payment_form_submit %}
            <button class=\"btn btn-primary\" type=\"submit\">
                {{ \"checkout.confirmChangePaymentShippingSave\"|trans|sw_sanitize }}
            </button>
        {% endblock %}

        {# @deprecated tag:v6.4.0.0 removed #}
        {% block page_checkout_change_payment_cancel %}
            <button class=\"btn btn-light\"
                    type=\"button\"
                    data-dismiss=\"modal\"
                    aria-label=\"Close\">
                {{ \"checkout.confirmChangePaymentShippingCancel\"|trans|sw_sanitize }}
            </button>
        {% endblock %}
    </form>
{% endblock %}
", "@Storefront/storefront/page/checkout/change-payment-modal.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/change-payment-modal.html.twig");
    }
}
