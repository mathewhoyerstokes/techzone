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

/* @Storefront/storefront/page/account/newsletter.html.twig */
class __TwigTemplate_dd7503947ac2ba68f11be255fdcb69d8b958141da6821baa97eb8b2ac5e280c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_overview_newsletter_content_inner' => [$this, 'block_page_account_overview_newsletter_content_inner'],
            'page_account_overview_newsletter_content_success' => [$this, 'block_page_account_overview_newsletter_content_success'],
            'page_account_overview_newsletter_content_form' => [$this, 'block_page_account_overview_newsletter_content_form'],
            'page_account_overview_newsletter_content_form_csrf' => [$this, 'block_page_account_overview_newsletter_content_form_csrf'],
            'page_account_overview_newsletter_content_form_check_control' => [$this, 'block_page_account_overview_newsletter_content_form_check_control'],
            'page_account_overview_newsletter_content_form_input' => [$this, 'block_page_account_overview_newsletter_content_form_input'],
            'page_account_overview_newsletter_content_form_label' => [$this, 'block_page_account_overview_newsletter_content_form_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/newsletter.html.twig"));

        // line 1
        $this->displayBlock('page_account_overview_newsletter_content_inner', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_overview_newsletter_content_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_inner"));

        // line 2
        echo "    ";
        $this->displayBlock('page_account_overview_newsletter_content_success', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $context["formAutoSubmitOptions"] = ["useAjax" => true, "ajaxContainerSelector" => ".js-newsletter-wrapper"];
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('page_account_overview_newsletter_content_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page_account_overview_newsletter_content_success($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_success"));

        // line 3
        echo "        ";
        if ( !(null === ($context["success"] ?? null))) {
            // line 4
            echo "            <div class=\"newsletter-alerts\">
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "                    ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/newsletter.html.twig", 6)->display(twig_array_merge($context, ["type" => twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 6), "content" => twig_get_attribute($this->env, $this->source, $context["message"], "text", [], "any", false, false, false, 6)]));
                // line 7
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            </div>
        ";
        }
        // line 10
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_account_overview_newsletter_content_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form"));

        // line 18
        echo "        <form name=\"newsletterRegister\"
              method=\"post\"
              action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.newsletter");
        echo "\"
              data-form-auto-submit=\"true\"
              data-form-auto-submit-options='";
        // line 22
        echo twig_escape_filter($this->env, json_encode(($context["formAutoSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

            ";
        // line 24
        $this->displayBlock('page_account_overview_newsletter_content_form_csrf', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('page_account_overview_newsletter_content_form_check_control', $context, $blocks);
        // line 47
        echo "        </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_account_overview_newsletter_content_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_csrf"));

        // line 25
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.newsletter");
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_account_overview_newsletter_content_form_check_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_check_control"));

        // line 29
        echo "                <div class=\"custom-control custom-checkbox\">
                    ";
        // line 30
        $this->displayBlock('page_account_overview_newsletter_content_form_input', $context, $blocks);
        // line 38
        echo "
                    ";
        // line 39
        $this->displayBlock('page_account_overview_newsletter_content_form_label', $context, $blocks);
        // line 45
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_account_overview_newsletter_content_form_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_input"));

        // line 31
        echo "                        <input type=\"checkbox\"
                               class=\"custom-control-input\"
                               id=\"newsletterRegister\"
                               name=\"option\"
                               value=\"direct\"
                               ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "newsletter", [], "any", false, false, false, 36)) {
            echo "checked=\"checked\"";
        }
        echo ">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_account_overview_newsletter_content_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_label"));

        // line 40
        echo "                        <label class=\"form-check-label custom-control-label\"
                               for=\"newsletterRegister\">
                            ";
        // line 42
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.newsletterSettings", ["%shopname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 42), "core", [], "any", false, false, false, 42), "basicInformation", [], "any", false, false, false, 42), "shopName", [], "any", false, false, false, 42)]));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/newsletter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 42,  246 => 40,  239 => 39,  228 => 36,  221 => 31,  214 => 30,  206 => 45,  204 => 39,  201 => 38,  199 => 30,  196 => 29,  189 => 28,  179 => 25,  172 => 24,  164 => 47,  162 => 28,  159 => 27,  157 => 24,  152 => 22,  147 => 20,  143 => 18,  136 => 17,  129 => 10,  125 => 8,  111 => 7,  108 => 6,  91 => 5,  88 => 4,  85 => 3,  78 => 2,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  60 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_overview_newsletter_content_inner %}
    {% block page_account_overview_newsletter_content_success %}
        {% if success is not null %}
            <div class=\"newsletter-alerts\">
                {% for message in messages %}
                    {% sw_include \"@Storefront/storefront/utilities/alert.html.twig\" with { 'type': message.type, 'content': message.text} %}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}

    {% set formAutoSubmitOptions = {
        useAjax: true,
        ajaxContainerSelector: '.js-newsletter-wrapper'
    } %}

    {% block page_account_overview_newsletter_content_form %}
        <form name=\"newsletterRegister\"
              method=\"post\"
              action=\"{{ path(\"frontend.account.newsletter\") }}\"
              data-form-auto-submit=\"true\"
              data-form-auto-submit-options='{{ formAutoSubmitOptions|json_encode }}'>

            {% block page_account_overview_newsletter_content_form_csrf %}
                {{ sw_csrf('frontend.account.newsletter') }}
            {% endblock %}

            {% block page_account_overview_newsletter_content_form_check_control %}
                <div class=\"custom-control custom-checkbox\">
                    {% block page_account_overview_newsletter_content_form_input %}
                        <input type=\"checkbox\"
                               class=\"custom-control-input\"
                               id=\"newsletterRegister\"
                               name=\"option\"
                               value=\"direct\"
                               {% if customer.newsletter %}checked=\"checked\"{% endif %}>
                    {% endblock %}

                    {% block page_account_overview_newsletter_content_form_label %}
                        <label class=\"form-check-label custom-control-label\"
                               for=\"newsletterRegister\">
                            {{ \"account.newsletterSettings\"|trans({'%shopname%': shopware.config.core.basicInformation.shopName})|sw_sanitize }}
                        </label>
                    {% endblock %}
                </div>
            {% endblock %}
        </form>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/newsletter.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/newsletter.html.twig");
    }
}
