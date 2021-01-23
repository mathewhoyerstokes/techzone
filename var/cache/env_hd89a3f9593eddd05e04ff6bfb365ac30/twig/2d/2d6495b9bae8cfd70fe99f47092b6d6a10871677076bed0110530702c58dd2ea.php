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

/* @Storefront/storefront/page/account/profile/personal.html.twig */
class __TwigTemplate_269da2812b27fb2b51b0890e5645599a906d059cdb52de881f7a6af08e05b8e6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component_address_personal_customer_type' => [$this, 'block_component_address_personal_customer_type'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'page_account_profile_personal_fields_birthday_selects' => [$this, 'block_page_account_profile_personal_fields_birthday_selects'],
            'page_account_profile_personal_fields_birthday_select_day' => [$this, 'block_page_account_profile_personal_fields_birthday_select_day'],
            'page_account_profile_personal_fields_birthday_select_day_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_day_error'],
            'page_account_profile_personal_fields_birthday_select_month' => [$this, 'block_page_account_profile_personal_fields_birthday_select_month'],
            'page_account_profile_personal_fields_birthday_select_month_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_month_error'],
            'page_account_profile_personal_fields_birthday_select_year' => [$this, 'block_page_account_profile_personal_fields_birthday_select_year'],
            'page_account_profile_personal_fields_birthday_select_year_error' => [$this, 'block_page_account_profile_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/profile/personal.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_address_personal_customer_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_customer_type"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        // line 6
        echo "    ";
        $this->displayBlock('page_account_profile_personal_fields_birthday_selects', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_profile_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_selects"));

        // line 7
        echo "        <div class=\"form-row\">
            ";
        // line 8
        $context["birthday"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 8), "d");
        // line 9
        echo "            ";
        $context["birthmonth"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 9), "m");
        // line 10
        echo "            ";
        $context["birthyear"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "birthday", [], "any", false, false, false, 10), "Y");
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_day', $context, $blocks);
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_month', $context, $blocks);
        // line 70
        echo "
            ";
        // line 71
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_year', $context, $blocks);
        // line 102
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_account_profile_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_day"));

        // line 13
        echo "                <div class=\"form-group col-4 col-md-2\">
                    <select id=\"personalBirthday\"
                            name=\"birthdayDay\"
                            class=\"custom-select";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 16))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 18
        if ( !($context["birthday"] ?? null)) {
            // line 19
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 21
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                            </option>
                        ";
        }
        // line 24
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 25
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                ";
            // line 26
            if (($context["day"] == ($context["birthday"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 27
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </select>

                    ";
        // line 32
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 39
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_page_account_profile_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_day_error"));

        // line 33
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 33))) {
            // line 34
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 34)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 37
            echo "                        ";
        }
        // line 38
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_page_account_profile_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_month"));

        // line 43
        echo "                <div class=\"form-group col-4 col-md-2\">
                    <select name=\"birthdayMonth\"
                            class=\"custom-select";
        // line 45
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 45))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 47
        if ( !($context["birthmonth"] ?? null)) {
            // line 48
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 50
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                            </option>
                        ";
        }
        // line 53
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 54
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                ";
            // line 55
            if (($context["month"] == ($context["birthmonth"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 56
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </select>

                    ";
        // line 61
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 68
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_page_account_profile_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_month_error"));

        // line 62
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 62))) {
            // line 63
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 63)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 66
            echo "                        ";
        }
        // line 67
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_page_account_profile_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_year"));

        // line 72
        echo "                <div class=\"form-group col-4 col-md-2\">
                    ";
        // line 73
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 74
        echo "                    ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 75
        echo "
                    <select name=\"birthdayYear\"
                            class=\"custom-select";
        // line 77
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 77))) {
            echo " is-invalid";
        }
        echo "\"
                            required=\"required\">
                        ";
        // line 79
        if ( !($context["birthyear"] ?? null)) {
            // line 80
            echo "                            <option selected=\"selected\"
                                    value=\"\">
                                ";
            // line 82
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                            </option>
                        ";
        }
        // line 85
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 86
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                ";
            // line 87
            if (($context["year"] == ($context["birthyear"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                ";
            // line 88
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    </select>

                    ";
        // line 93
        $this->displayBlock('page_account_profile_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 100
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_page_account_profile_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields_birthday_select_year_error"));

        // line 94
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 94))) {
            // line 95
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/personal.html.twig", 95)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 98
            echo "                        ";
        }
        // line 99
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/profile/personal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 99,  402 => 98,  399 => 95,  396 => 94,  389 => 93,  381 => 100,  379 => 93,  375 => 91,  366 => 88,  360 => 87,  355 => 86,  350 => 85,  344 => 82,  340 => 80,  338 => 79,  331 => 77,  327 => 75,  324 => 74,  322 => 73,  319 => 72,  312 => 71,  305 => 67,  302 => 66,  299 => 63,  296 => 62,  289 => 61,  281 => 68,  279 => 61,  275 => 59,  266 => 56,  260 => 55,  255 => 54,  250 => 53,  244 => 50,  240 => 48,  238 => 47,  231 => 45,  227 => 43,  220 => 42,  213 => 38,  210 => 37,  207 => 34,  204 => 33,  197 => 32,  189 => 39,  187 => 32,  183 => 30,  174 => 27,  168 => 26,  163 => 25,  158 => 24,  152 => 21,  148 => 19,  146 => 18,  139 => 16,  134 => 13,  127 => 12,  119 => 102,  117 => 71,  114 => 70,  112 => 42,  109 => 41,  107 => 12,  104 => 11,  101 => 10,  98 => 9,  96 => 8,  93 => 7,  79 => 6,  72 => 5,  60 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/component/address/address-personal.html.twig' %}

{% block component_address_personal_customer_type %}{% endblock %}

{% block component_address_personal_fields_birthday_selects %}
    {% block page_account_profile_personal_fields_birthday_selects %}
        <div class=\"form-row\">
            {% set birthday = data.birthday|date('d') %}
            {% set birthmonth = data.birthday|date('m') %}
            {% set birthyear = data.birthday|date('Y') %}

            {% block page_account_profile_personal_fields_birthday_select_day %}
                <div class=\"form-group col-4 col-md-2\">
                    <select id=\"personalBirthday\"
                            name=\"birthdayDay\"
                            class=\"custom-select{% if formViolations.getViolations('/birthdayDay') is not empty %} is-invalid{% endif %}\"
                            required=\"required\">
                        {% if not birthday %}
                            <option selected=\"selected\"
                                    value=\"\">
                                {{ \"account.personalBirthdaySelectDay\"|trans|sw_sanitize }}
                            </option>
                        {% endif %}
                        {% for day in range(1, 31) %}
                            <option value=\"{{ day }}\"
                                {% if day == birthday %} selected=\"selected\"{% endif %}>
                                {{ day }}
                            </option>
                        {% endfor %}
                    </select>

                    {% block page_account_profile_personal_fields_birthday_select_day_error %}
                        {% if formViolations.getViolations('/birthdayDay') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/birthdayDay'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_profile_personal_fields_birthday_select_month %}
                <div class=\"form-group col-4 col-md-2\">
                    <select name=\"birthdayMonth\"
                            class=\"custom-select{% if formViolations.getViolations('/birthdayMonth') is not empty %} is-invalid{% endif %}\"
                            required=\"required\">
                        {% if not birthmonth %}
                            <option selected=\"selected\"
                                    value=\"\">
                                {{ \"account.personalBirthdaySelectMonth\"|trans|sw_sanitize }}
                            </option>
                        {% endif %}
                        {% for month in range(1, 12) %}
                            <option value=\"{{ month }}\"
                                {% if month == birthmonth %} selected=\"selected\"{% endif %}>
                                {{ month }}
                            </option>
                        {% endfor %}
                    </select>

                    {% block page_account_profile_personal_fields_birthday_select_month_error %}
                        {% if formViolations.getViolations('/birthdayMonth') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/birthdayMonth'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_profile_personal_fields_birthday_select_year %}
                <div class=\"form-group col-4 col-md-2\">
                    {% set currentYear = \"now\"|date('Y') %}
                    {% set startYear = currentYear - 120 %}

                    <select name=\"birthdayYear\"
                            class=\"custom-select{% if formViolations.getViolations('/birthdayYear') is not empty %} is-invalid{% endif %}\"
                            required=\"required\">
                        {% if not birthyear %}
                            <option selected=\"selected\"
                                    value=\"\">
                                {{ \"account.personalBirthdaySelectYear\"|trans|sw_sanitize }}
                            </option>
                        {% endif %}
                        {% for year in range(currentYear, startYear) %}
                            <option value=\"{{ year }}\"
                                {% if year == birthyear %} selected=\"selected\"{% endif %}>
                                {{ year }}
                            </option>
                        {% endfor %}
                    </select>

                    {% block page_account_profile_personal_fields_birthday_select_year_error %}
                        {% if formViolations.getViolations('/birthdayYear') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/birthdayYear'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/profile/personal.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/profile/personal.html.twig");
    }
}
