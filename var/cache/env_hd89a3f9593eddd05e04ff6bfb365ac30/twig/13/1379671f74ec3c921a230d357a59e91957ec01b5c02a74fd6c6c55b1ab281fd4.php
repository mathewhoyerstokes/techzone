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

/* @Storefront/storefront/page/account/payment/index.html.twig */
class __TwigTemplate_0b2e23e2338325bec13a564cb689a971861252475190ac12c61242901726da3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_payment' => [$this, 'block_page_account_payment'],
            'page_account_payment_welcome' => [$this, 'block_page_account_payment_welcome'],
            'page_account_payment_welcome_headline' => [$this, 'block_page_account_payment_welcome_headline'],
            'page_account_payment_welcome_intro' => [$this, 'block_page_account_payment_welcome_intro'],
            'page_account_payment_main' => [$this, 'block_page_account_payment_main'],
            'page_account_payment_title' => [$this, 'block_page_account_payment_title'],
            'page_account_payment_form' => [$this, 'block_page_account_payment_form'],
            'page_account_payment_form_csrf' => [$this, 'block_page_account_payment_form_csrf'],
            'page_account_payment_fields' => [$this, 'block_page_account_payment_fields'],
            'page_account_payment_actions' => [$this, 'block_page_account_payment_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/payment/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/payment/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_main_content"));

        // line 4
        echo "    ";
        $this->displayBlock('page_account_payment', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment"));

        // line 5
        echo "        <div class=\"account-payment\">
            ";
        // line 6
        $this->displayBlock('page_account_payment_welcome', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('page_account_payment_main', $context, $blocks);
        // line 55
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_account_payment_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_welcome"));

        // line 7
        echo "                <div class=\"account-welcome\">
                    ";
        // line 8
        $this->displayBlock('page_account_payment_welcome_headline', $context, $blocks);
        // line 11
        echo "
                    ";
        // line 12
        $this->displayBlock('page_account_payment_welcome_intro', $context, $blocks);
        // line 15
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_account_payment_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_welcome_headline"));

        // line 9
        echo "                        <h1>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentTitle"));
        echo "</h1>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_account_payment_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_welcome_intro"));

        // line 13
        echo "                        <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentText"));
        echo "</p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_account_payment_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_main"));

        // line 19
        echo "                <div class=\"account-payment-card card\">
                    <div class=\"card-body\">
                        ";
        // line 21
        $this->displayBlock('page_account_payment_title', $context, $blocks);
        // line 26
        echo "
                        ";
        // line 27
        $this->displayBlock('page_account_payment_form', $context, $blocks);
        // line 52
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_page_account_payment_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_title"));

        // line 22
        echo "                            <h2 class=\"card-title\">
                                ";
        // line 23
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewPaymentHeader"));
        echo "
                            </h2>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_account_payment_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_form"));

        // line 28
        echo "                            <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.save");
        echo "\"
                                  method=\"post\"
                                  data-form-csrf-handler=\"true\">

                                ";
        // line 32
        $this->displayBlock('page_account_payment_form_csrf', $context, $blocks);
        // line 35
        echo "
                                <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.account.payment.page\">
                                ";
        // line 37
        $this->displayBlock('page_account_payment_fields', $context, $blocks);
        // line 42
        echo "
                                ";
        // line 43
        $this->displayBlock('page_account_payment_actions', $context, $blocks);
        // line 50
        echo "                            </form>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_page_account_payment_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_form_csrf"));

        // line 33
        echo "                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.payment.save");
        echo "
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_account_payment_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_fields"));

        // line 38
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/payment/payment-fields.html.twig", "@Storefront/storefront/page/account/payment/index.html.twig", 38)->display(twig_array_merge($context, ["defaultPaymentMethodId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["context"] ?? null), "customer", [], "any", false, false, false, 39), "defaultPaymentMethodId", [], "any", false, false, false, 39)]));
        // line 41
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_account_payment_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_payment_actions"));

        // line 44
        echo "                                    <button class=\"btn btn-primary\"
                                            type=\"submit\"
                                            title=\"";
        // line 46
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentChangeSubmit")), "html", null, true);
        echo "\">
                                        ";
        // line 47
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.paymentChangeSubmit"));
        echo "
                                    </button>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 47,  289 => 46,  285 => 44,  278 => 43,  271 => 41,  269 => 39,  267 => 38,  260 => 37,  250 => 33,  243 => 32,  235 => 50,  233 => 43,  230 => 42,  228 => 37,  224 => 35,  222 => 32,  214 => 28,  207 => 27,  197 => 23,  194 => 22,  187 => 21,  178 => 52,  176 => 27,  173 => 26,  171 => 21,  167 => 19,  160 => 18,  150 => 13,  143 => 12,  133 => 9,  126 => 8,  118 => 15,  116 => 12,  113 => 11,  111 => 8,  108 => 7,  101 => 6,  93 => 55,  91 => 18,  88 => 17,  86 => 6,  83 => 5,  69 => 4,  62 => 3,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    {% block page_account_payment %}
        <div class=\"account-payment\">
            {% block page_account_payment_welcome %}
                <div class=\"account-welcome\">
                    {% block page_account_payment_welcome_headline %}
                        <h1>{{ \"account.paymentTitle\"|trans|sw_sanitize }}</h1>
                    {% endblock %}

                    {% block page_account_payment_welcome_intro %}
                        <p>{{ \"account.paymentText\"|trans|sw_sanitize }}</p>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_payment_main %}
                <div class=\"account-payment-card card\">
                    <div class=\"card-body\">
                        {% block page_account_payment_title %}
                            <h2 class=\"card-title\">
                                {{ \"account.overviewPaymentHeader\"|trans|sw_sanitize }}
                            </h2>
                        {% endblock %}

                        {% block page_account_payment_form %}
                            <form action=\"{{ path('frontend.account.payment.save') }}\"
                                  method=\"post\"
                                  data-form-csrf-handler=\"true\">

                                {% block page_account_payment_form_csrf %}
                                    {{ sw_csrf('frontend.account.payment.save') }}
                                {% endblock %}

                                <input type=\"hidden\" name=\"redirectTo\" value=\"frontend.account.payment.page\">
                                {% block page_account_payment_fields %}
                                    {% sw_include '@Storefront/storefront/component/payment/payment-fields.html.twig' with {
                                        'defaultPaymentMethodId': context.customer.defaultPaymentMethodId,
                                    } %}
                                {% endblock %}

                                {% block page_account_payment_actions %}
                                    <button class=\"btn btn-primary\"
                                            type=\"submit\"
                                            title=\"{{ \"account.paymentChangeSubmit\"|trans|striptags }}\">
                                        {{ \"account.paymentChangeSubmit\"|trans|sw_sanitize }}
                                    </button>
                                {% endblock %}
                            </form>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/payment/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/payment/index.html.twig");
    }
}
