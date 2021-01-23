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

/* @Storefront/storefront/page/product-detail/review/review-login.html.twig */
class __TwigTemplate_1487abe6e2062d7beef26b9b0e41f1bd4c422315258349734a1ee390c5aebab3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_account_login_header' => [$this, 'block_component_account_login_header'],
            'component_account_login_form_description' => [$this, 'block_component_account_login_form_description'],
            'component_account_login_form_redirect' => [$this, 'block_component_account_login_form_redirect'],
            'component_account_login_submit' => [$this, 'block_component_account_login_submit'],
            'page_product_detail_review_form_cancel' => [$this, 'block_page_product_detail_review_form_cancel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/account/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-login.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/account/login.html.twig", "@Storefront/storefront/page/product-detail/review/review-login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_account_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_header"));

        // line 4
        echo "\t<h2 class=\"card-title\">
\t\t";
        // line 5
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLoginHeader"));
        echo "
\t</h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_component_account_login_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_description"));

        // line 10
        echo "\t<p class=\"login-form-description\">
\t\t";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLoginDescription"));
        echo "
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        echo "\"
\t\t   title=\"";
        // line 13
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewRegisterLink")), "html", null, true);
        echo "\">
            ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewRegisterLink"));
        echo "
\t\t</a>
\t</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_component_account_login_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_redirect"));

        // line 20
        echo "\t<input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.detail.page\">

\t<input type=\"hidden\"
\t\t   name=\"redirectParameters\"
\t\t   value='{\"productId\": \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 26), "html", null, true);
        echo "\"}'>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_component_account_login_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_submit"));

        // line 30
        echo "\t<div class=\"float-left\">
\t\t";
        // line 31
        $this->displayParentBlock("component_account_login_submit", $context, $blocks);
        echo "
\t</div>
\t<div class=\"login-cancel\">
\t\t";
        // line 34
        $this->displayBlock('page_product_detail_review_form_cancel', $context, $blocks);
        // line 44
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_product_detail_review_form_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_cancel"));

        // line 35
        echo "\t\t\t<a href=\"#\"
\t\t\t   class=\"btn btn-outline-secondary ml-1\"
\t\t\t   data-toggle=\"collapse\"
\t\t\t   data-target=\".multi-collapse\"
\t\t\t   aria-expanded=\"false\"
\t\t\t   aria-controls=\"review-form review-list\">
\t\t\t\t";
        // line 41
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLoginCancelButton"));
        echo "
\t\t\t</a>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 41,  166 => 35,  159 => 34,  151 => 44,  149 => 34,  143 => 31,  140 => 30,  133 => 29,  124 => 26,  116 => 20,  109 => 19,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  83 => 10,  76 => 9,  66 => 5,  63 => 4,  56 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/account/login.html.twig' %}

{% block component_account_login_header %}
\t<h2 class=\"card-title\">
\t\t{{ \"detail.reviewLoginHeader\"|trans|sw_sanitize }}
\t</h2>
{% endblock %}

{% block component_account_login_form_description %}
\t<p class=\"login-form-description\">
\t\t{{ \"detail.reviewLoginDescription\"|trans|sw_sanitize }}
\t\t<a href=\"{{ path('frontend.account.login.page') }}\"
\t\t   title=\"{{ \"detail.reviewRegisterLink\"|trans|striptags }}\">
            {{ \"detail.reviewRegisterLink\"|trans|sw_sanitize }}
\t\t</a>
\t</p>
{% endblock %}

{% block component_account_login_form_redirect %}
\t<input type=\"hidden\"
           name=\"redirectTo\"
           value=\"frontend.detail.page\">

\t<input type=\"hidden\"
\t\t   name=\"redirectParameters\"
\t\t   value='{\"productId\": \"{{ reviews.productId }}\"}'>
{% endblock %}

{% block component_account_login_submit %}
\t<div class=\"float-left\">
\t\t{{ parent() }}
\t</div>
\t<div class=\"login-cancel\">
\t\t{% block page_product_detail_review_form_cancel %}
\t\t\t<a href=\"#\"
\t\t\t   class=\"btn btn-outline-secondary ml-1\"
\t\t\t   data-toggle=\"collapse\"
\t\t\t   data-target=\".multi-collapse\"
\t\t\t   aria-expanded=\"false\"
\t\t\t   aria-controls=\"review-form review-list\">
\t\t\t\t{{ \"detail.reviewLoginCancelButton\"|trans|sw_sanitize }}
\t\t\t</a>
\t\t{% endblock %}
\t</div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review-login.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-login.html.twig");
    }
}
