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

/* @Storefront/storefront/component/address/address-personal.html.twig */
class __TwigTemplate_5ab10d7d593dd63167cab08b01d22af14e998da855c2899eb91a55fd6ed52c2a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_personal_fields' => [$this, 'block_component_address_personal_fields'],
            'component_address_personal_account_type' => [$this, 'block_component_address_personal_account_type'],
            'component_address_personal_account_type_label' => [$this, 'block_component_address_personal_account_type_label'],
            'component_address_personal_account_type_select' => [$this, 'block_component_address_personal_account_type_select'],
            'component_address_personal_account_type_error' => [$this, 'block_component_address_personal_account_type_error'],
            'component_address_personal_fields_salutation_title' => [$this, 'block_component_address_personal_fields_salutation_title'],
            'component_address_personal_fields_salutation' => [$this, 'block_component_address_personal_fields_salutation'],
            'component_address_personal_fields_salutation_label' => [$this, 'block_component_address_personal_fields_salutation_label'],
            'component_address_form_salutation_select' => [$this, 'block_component_address_form_salutation_select'],
            'component_address_form_salutation_select_error' => [$this, 'block_component_address_form_salutation_select_error'],
            'component_address_personal_fields_title' => [$this, 'block_component_address_personal_fields_title'],
            'component_address_personal_fields_title_label' => [$this, 'block_component_address_personal_fields_title_label'],
            'component_address_personal_fields_title_input' => [$this, 'block_component_address_personal_fields_title_input'],
            'component_address_personal_fields_name' => [$this, 'block_component_address_personal_fields_name'],
            'component_address_personal_fields_first_name' => [$this, 'block_component_address_personal_fields_first_name'],
            'component_address_personal_fields_first_name_label' => [$this, 'block_component_address_personal_fields_first_name_label'],
            'component_address_personal_fields_first_name_input' => [$this, 'block_component_address_personal_fields_first_name_input'],
            'component_address_personal_fields_first_name_input_error' => [$this, 'block_component_address_personal_fields_first_name_input_error'],
            'component_address_personal_fields_last_name' => [$this, 'block_component_address_personal_fields_last_name'],
            'component_address_personal_fields_last_name_label' => [$this, 'block_component_address_personal_fields_last_name_label'],
            'component_address_personal_fields_last_name_input' => [$this, 'block_component_address_personal_fields_last_name_input'],
            'component_address_personal_fields_last_name_input_error' => [$this, 'block_component_address_personal_fields_last_name_input_error'],
            'component_address_personal_company' => [$this, 'block_component_address_personal_company'],
            'component_address_personal_company_fields' => [$this, 'block_component_address_personal_company_fields'],
            'component_address_personal_company_name' => [$this, 'block_component_address_personal_company_name'],
            'component_address_personal_company_name_label' => [$this, 'block_component_address_personal_company_name_label'],
            'component_address_personal_company_name_input' => [$this, 'block_component_address_personal_company_name_input'],
            'component_address_personal_company_name_input_error' => [$this, 'block_component_address_personal_company_name_input_error'],
            'component_address_personal_fields_birthday' => [$this, 'block_component_address_personal_fields_birthday'],
            'component_address_personal_fields_birthday_label' => [$this, 'block_component_address_personal_fields_birthday_label'],
            'component_address_personal_fields_birthday_selects' => [$this, 'block_component_address_personal_fields_birthday_selects'],
            'component_address_personal_fields_birthday_select_day' => [$this, 'block_component_address_personal_fields_birthday_select_day'],
            'component_address_personal_fields_birthday_select_day_error' => [$this, 'block_component_address_personal_fields_birthday_select_day_error'],
            'component_address_personal_fields_birthday_select_month' => [$this, 'block_component_address_personal_fields_birthday_select_month'],
            'component_address_personal_fields_birthday_select_month_error' => [$this, 'block_component_address_personal_fields_birthday_select_month_error'],
            'component_address_personal_fields_birthday_select_year' => [$this, 'block_component_address_personal_fields_birthday_select_year'],
            'component_address_personal_fields_birthday_select_year_error' => [$this, 'block_component_address_personal_fields_birthday_select_year_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-personal.html.twig"));

        // line 2
        $this->displayBlock('component_address_personal_fields', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_address_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields"));

        // line 3
        echo "    ";
        $this->displayBlock('component_address_personal_account_type', $context, $blocks);
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('component_address_personal_fields_salutation_title', $context, $blocks);
        // line 140
        echo "
    ";
        // line 141
        $this->displayBlock('component_address_personal_fields_name', $context, $blocks);
        // line 204
        echo "
    ";
        // line 205
        $this->displayBlock('component_address_personal_company', $context, $blocks);
        // line 244
        echo "
    ";
        // line 245
        $this->displayBlock('component_address_personal_fields_birthday', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_address_personal_account_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type"));

        // line 4
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "loginRegistration", [], "any", false, false, false, 4), "showAccountTypeSelection", [], "any", false, false, false, 4) &&  !($context["hideCustomerTypeSelect"] ?? null))) {
            // line 5
            echo "            <div class=\"form-row\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    ";
            // line 7
            $this->displayBlock('component_address_personal_account_type_label', $context, $blocks);
            // line 13
            echo "
                    ";
            // line 14
            $this->displayBlock('component_address_personal_account_type_select', $context, $blocks);
            // line 62
            echo "
                    ";
            // line 63
            $this->displayBlock('component_address_personal_account_type_error', $context, $blocks);
            // line 65
            echo "                </div>
            </div>
        ";
        } else {
            // line 68
            echo "            <input type=\"hidden\" name=\"accountType\">
        ";
        }
        // line 70
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_component_address_personal_account_type_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_label"));

        // line 8
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "accountType\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_component_address_personal_account_type_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_select"));

        // line 15
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 15), "core", [], "any", false, false, false, 15), "loginRegistration", [], "any", false, false, false, 15), "showAccountTypeSelection", [], "any", false, false, false, 15)) {
            // line 16
            echo "                                <select name=\"";
            if (($context["prefix"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
                echo "[accountType]";
            } else {
                echo "accountType";
            }
            echo "\"
                                    id=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "accountType\"
                                    required=\"required\"
                                    class=\"custom-select contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company\"
                                    data-form-field-toggle-value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
            echo "\"
                                    data-form-field-toggle-scope=\"";
            // line 23
            if ((($context["scope"] ?? null) == "parent")) {
                echo "parent";
            } else {
                echo "all";
            }
            echo "\"
                                    ";
            // line 24
            if ((($context["scope"] ?? null) == "parent")) {
                echo "data-form-field-toggle-parent-selector=";
                echo twig_escape_filter($this->env, ($context["parentSelector"] ?? null), "html", null, true);
            }
            // line 25
            echo "                                >
                            ";
        }
        // line 27
        echo "
                            ";
        // line 28
        $context["isCompany"] = false;
        // line 29
        echo "
                            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, false, 30), "company", [], "any", false, false, false, 30) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "company", [], "any", false, false, false, 30)))) {
            // line 31
            echo "                                ";
            $context["isCompany"] = true;
            // line 32
            echo "                            ";
        }
        // line 33
        echo "
                            ";
        // line 34
        if ((($context["accountType"] ?? null) && (($context["accountType"] ?? null) == twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS")))) {
            // line 35
            echo "                                ";
            $context["isCompany"] = true;
            // line 36
            echo "                            ";
        }
        // line 37
        echo "
                            ";
        // line 38
        $context["isLoginPage"] = false;
        // line 39
        echo "                            ";
        if ((($context["activeRoute"] ?? null) == "frontend.account.login.page")) {
            // line 40
            echo "                                ";
            $context["isLoginPage"] = true;
            // line 41
            echo "                            ";
        }
        // line 42
        echo "
                            ";
        // line 43
        if (($context["isLoginPage"] ?? null)) {
            // line 44
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 47
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeLabel"));
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
            echo "
                                </option>
                            ";
        }
        // line 50
        echo "
                            <option value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_PRIVATE"), "html", null, true);
        echo "\"
                                ";
        // line 52
        if (((($context["isCompany"] ?? null) == false) && (($context["isLoginPage"] ?? null) == false))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 53
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypePrivate"));
        echo "
                            </option>

                            <option value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"), "html", null, true);
        echo "\"
                                ";
        // line 57
        if (((($context["isCompany"] ?? null) == true) && (($context["isLoginPage"] ?? null) == false))) {
            echo " selected=\"selected\"";
        }
        echo ">
                                ";
        // line 58
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTypeBusiness"));
        echo "
                            </option>
                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_component_address_personal_account_type_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_account_type_error"));

        // line 64
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_component_address_personal_fields_salutation_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_title"));

        // line 73
        echo "        <div class=\"form-row\">
            ";
        // line 74
        $this->displayBlock('component_address_personal_fields_salutation', $context, $blocks);
        // line 115
        echo "
            ";
        // line 116
        $this->displayBlock('component_address_personal_fields_title', $context, $blocks);
        // line 138
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_component_address_personal_fields_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation"));

        // line 75
        echo "                <div class=\"form-group col-md-3 col-sm-6\">
                    ";
        // line 76
        $this->displayBlock('component_address_personal_fields_salutation_label', $context, $blocks);
        // line 82
        echo "
                    ";
        // line 83
        $this->displayBlock('component_address_form_salutation_select', $context, $blocks);
        // line 105
        echo "
                    ";
        // line 106
        $this->displayBlock('component_address_form_salutation_select_error', $context, $blocks);
        // line 113
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_component_address_personal_fields_salutation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_salutation_label"));

        // line 77
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalSalutation\">
                            ";
        // line 79
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_component_address_form_salutation_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select"));

        // line 84
        echo "                        <select id=\"";
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalSalutation\"
                                class=\"custom-select";
        // line 85
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 85))) {
            echo " is-invalid";
        }
        echo "\"
                                name=\"";
        // line 86
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[salutationId]";
        } else {
            echo "salutationId";
        }
        echo "\"
                                required=\"required\">
                            ";
        // line 88
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 88)) {
            // line 89
            echo "                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    ";
            // line 92
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalSalutationPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 95
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salutations", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["salutation"]) {
            // line 96
            echo "                                <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "salutationId"], "method", false, false, false, 96))) {
                // line 97
                echo "                                    selected=\"selected\"
                                ";
            }
            // line 99
            echo "                                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["salutation"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                                    ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["salutation"], "translated", [], "any", false, false, false, 100), "displayName", [], "any", false, false, false, 100), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salutation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_component_address_form_salutation_select_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_salutation_select_error"));

        // line 107
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/salutationId"], "method", false, false, false, 107))) {
            // line 108
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 108)->display(twig_array_merge($context, ["violationPath" => "/salutationId"]));
            // line 111
            echo "                        ";
        }
        // line 112
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_component_address_personal_fields_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title"));

        // line 117
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 117), "core", [], "any", false, false, false, 117), "loginRegistration", [], "any", false, false, false, 117), "showTitleField", [], "any", false, false, false, 117)) {
            // line 118
            echo "                    <div class=\"form-group col-md-3 col-sm-6\">
                        ";
            // line 119
            $this->displayBlock('component_address_personal_fields_title_label', $context, $blocks);
            // line 125
            echo "
                        ";
            // line 126
            $this->displayBlock('component_address_personal_fields_title_input', $context, $blocks);
            // line 135
            echo "                    </div>
                ";
        }
        // line 137
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_component_address_personal_fields_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_label"));

        // line 120
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalTitle\">
                                ";
        // line 122
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitleLabel"));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_component_address_personal_fields_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_title_input"));

        // line 127
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"";
        // line 130
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalTitle\"
                                   placeholder=\"";
        // line 131
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalTitlePlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 132
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[title]";
        } else {
            echo "title";
        }
        echo "\"
                                   value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 133), "html", null, true);
        echo "\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 141
    public function block_component_address_personal_fields_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_name"));

        // line 142
        echo "        <div class=\"form-row\">
            ";
        // line 143
        $this->displayBlock('component_address_personal_fields_first_name', $context, $blocks);
        // line 172
        echo "
            ";
        // line 173
        $this->displayBlock('component_address_personal_fields_last_name', $context, $blocks);
        // line 202
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_component_address_personal_fields_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name"));

        // line 144
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 145
        $this->displayBlock('component_address_personal_fields_first_name_label', $context, $blocks);
        // line 151
        echo "
                    ";
        // line 152
        $this->displayBlock('component_address_personal_fields_first_name_input', $context, $blocks);
        // line 162
        echo "
                    ";
        // line 163
        $this->displayBlock('component_address_personal_fields_first_name_input_error', $context, $blocks);
        // line 170
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_component_address_personal_fields_first_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_label"));

        // line 146
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalFirstName\">
                            ";
        // line 148
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNameLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 152
    public function block_component_address_personal_fields_first_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input"));

        // line 153
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 154
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 154))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal given-name\"
                               id=\"";
        // line 156
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalFirstName\"
                               placeholder=\"";
        // line 157
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalFirstNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 158
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[firstName]";
        } else {
            echo "firstName";
        }
        echo "\"
                               value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "firstName"], "method", false, false, false, 159), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_component_address_personal_fields_first_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_first_name_input_error"));

        // line 164
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/firstName"], "method", false, false, false, 164))) {
            // line 165
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 165)->display(twig_array_merge($context, ["violationPath" => "/firstName"]));
            // line 168
            echo "                        ";
        }
        // line 169
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 173
    public function block_component_address_personal_fields_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name"));

        // line 174
        echo "                <div class=\"form-group col-sm-6\">
                    ";
        // line 175
        $this->displayBlock('component_address_personal_fields_last_name_label', $context, $blocks);
        // line 181
        echo "
                    ";
        // line 182
        $this->displayBlock('component_address_personal_fields_last_name_input', $context, $blocks);
        // line 192
        echo "
                    ";
        // line 193
        $this->displayBlock('component_address_personal_fields_last_name_input_error', $context, $blocks);
        // line 200
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 175
    public function block_component_address_personal_fields_last_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_label"));

        // line 176
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 177
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalLastName\">
                            ";
        // line 178
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNameLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 182
    public function block_component_address_personal_fields_last_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input"));

        // line 183
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 184
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 184))) {
            echo " is-invalid";
        }
        echo "\"
                               autocomplete=\"section-personal family-name\"
                               id=\"";
        // line 186
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalLastName\"
                               placeholder=\"";
        // line 187
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalLastNamePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 188
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[lastName]";
        } else {
            echo "lastName";
        }
        echo "\"
                               value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "lastName"], "method", false, false, false, 189), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 193
    public function block_component_address_personal_fields_last_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_last_name_input_error"));

        // line 194
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/lastName"], "method", false, false, false, 194))) {
            // line 195
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 195)->display(twig_array_merge($context, ["violationPath" => "/lastName"]));
            // line 198
            echo "                        ";
        }
        // line 199
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 205
    public function block_component_address_personal_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company"));

        // line 206
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 206), "core", [], "any", false, false, false, 206), "loginRegistration", [], "any", false, false, false, 206), "showAccountTypeSelection", [], "any", false, false, false, 206) && (($context["activeRoute"] ?? null) == "frontend.account.profile.page"))) {
            // line 207
            echo "            <div class=\"js-field-toggle-contact-type-company\">
                ";
            // line 208
            $this->displayBlock('component_address_personal_company_fields', $context, $blocks);
            // line 241
            echo "            </div>
        ";
        }
        // line 243
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 208
    public function block_component_address_personal_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_fields"));

        // line 209
        echo "                    <div class=\"form-row\">
                        ";
        // line 210
        $this->displayBlock('component_address_personal_company_name', $context, $blocks);
        // line 239
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_component_address_personal_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name"));

        // line 211
        echo "                            <div class=\"form-group col-12\">
                                ";
        // line 212
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 212))) {
            // line 213
            echo "                                    ";
            $context["violationPath"] = "/company";
            // line 214
            echo "                                ";
        }
        // line 215
        echo "
                                ";
        // line 216
        $this->displayBlock('component_address_personal_company_name_label', $context, $blocks);
        // line 221
        echo "
                                ";
        // line 222
        $this->displayBlock('component_address_personal_company_name_input', $context, $blocks);
        // line 231
        echo "
                                ";
        // line 232
        $this->displayBlock('component_address_personal_company_name_input_error', $context, $blocks);
        // line 237
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 216
    public function block_component_address_personal_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_label"));

        // line 217
        echo "                                    <label class=\"form-label\" for=\"company\">
                                        ";
        // line 218
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 222
    public function block_component_address_personal_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input"));

        // line 223
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 224
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"company\"
                                           placeholder=\"";
        // line 226
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                           name=\"company\"
                                           value=\"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 228), "html", null, true);
        echo "\"
                                           required=\"required\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 232
    public function block_component_address_personal_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_company_name_input_error"));

        // line 233
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 234
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 234)->display($context);
            // line 235
            echo "                                    ";
        }
        // line 236
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 245
    public function block_component_address_personal_fields_birthday($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday"));

        // line 246
        echo "        ";
        if (($context["showBirthdayField"] ?? null)) {
            // line 247
            echo "            ";
            $this->displayBlock('component_address_personal_fields_birthday_label', $context, $blocks);
            // line 252
            echo "
            ";
            // line 253
            $this->displayBlock('component_address_personal_fields_birthday_selects', $context, $blocks);
            // line 347
            echo "        ";
        }
        // line 348
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 247
    public function block_component_address_personal_fields_birthday_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_label"));

        // line 248
        echo "                <label for=\"";
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalBirthday\">
                    ";
        // line 249
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdayLabel"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 249), "core", [], "any", false, false, false, 249), "loginRegistration", [], "any", false, false, false, 249), "birthdayFieldRequired", [], "any", false, false, false, 249)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                </label>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 253
    public function block_component_address_personal_fields_birthday_selects($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_selects"));

        // line 254
        echo "                <div class=\"form-row\">
                    ";
        // line 255
        $this->displayBlock('component_address_personal_fields_birthday_select_day', $context, $blocks);
        // line 284
        echo "
                    ";
        // line 285
        $this->displayBlock('component_address_personal_fields_birthday_select_month', $context, $blocks);
        // line 313
        echo "
                    ";
        // line 314
        $this->displayBlock('component_address_personal_fields_birthday_select_year', $context, $blocks);
        // line 345
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 255
    public function block_component_address_personal_fields_birthday_select_day($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day"));

        // line 256
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"";
        // line 257
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "personalBirthday\"
                                    name=\"";
        // line 258
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayDay]";
        } else {
            echo "birthdayDay";
        }
        echo "\"
                                    class=\"custom-select";
        // line 259
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 259))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 260
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 260), "core", [], "any", false, false, false, 260), "loginRegistration", [], "any", false, false, false, 260), "birthdayFieldRequired", [], "any", false, false, false, 260)) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 261
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 261)) {
            // line 262
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 264
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectDay"));
            echo "
                                    </option>
                                ";
        }
        // line 267
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 268
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "\"
                                            ";
            // line 269
            if (($context["day"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayDay"], "method", false, false, false, 269))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 270
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                            </select>

                            ";
        // line 275
        $this->displayBlock('component_address_personal_fields_birthday_select_day_error', $context, $blocks);
        // line 282
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 275
    public function block_component_address_personal_fields_birthday_select_day_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_day_error"));

        // line 276
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayDay"], "method", false, false, false, 276))) {
            // line 277
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 277)->display(twig_array_merge($context, ["violationPath" => "/birthdayDay"]));
            // line 280
            echo "                                ";
        }
        // line 281
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 285
    public function block_component_address_personal_fields_birthday_select_month($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month"));

        // line 286
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"";
        // line 287
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayMonth]";
        } else {
            echo "birthdayMonth";
        }
        echo "\"
                                    class=\"custom-select";
        // line 288
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 288))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 289
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 289), "core", [], "any", false, false, false, 289), "loginRegistration", [], "any", false, false, false, 289), "birthdayFieldRequired", [], "any", false, false, false, 289)) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 290
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 290)) {
            // line 291
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 293
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectMonth"));
            echo "
                                    </option>
                                ";
        }
        // line 296
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 297
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "\"
                                            ";
            // line 298
            if (($context["month"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayMonth"], "method", false, false, false, 298))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 299
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                            </select>

                            ";
        // line 304
        $this->displayBlock('component_address_personal_fields_birthday_select_month_error', $context, $blocks);
        // line 311
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 304
    public function block_component_address_personal_fields_birthday_select_month_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_month_error"));

        // line 305
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayMonth"], "method", false, false, false, 305))) {
            // line 306
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 306)->display(twig_array_merge($context, ["violationPath" => "/birthdayMonth"]));
            // line 309
            echo "                                ";
        }
        // line 310
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 314
    public function block_component_address_personal_fields_birthday_select_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year"));

        // line 315
        echo "                        <div class=\"form-group col-md-2 col-4\">
                            ";
        // line 316
        $context["currentYear"] = twig_date_format_filter($this->env, "now", "Y");
        // line 317
        echo "                            ";
        $context["startYear"] = (($context["currentYear"] ?? null) - 120);
        // line 318
        echo "
                            <select name=\"";
        // line 319
        if (($context["prefix"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[birthdayYear]";
        } else {
            echo "birthdayYear";
        }
        echo "\"
                                    class=\"custom-select";
        // line 320
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 320))) {
            echo " is-invalid";
        }
        echo "\"
                                    ";
        // line 321
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 321), "core", [], "any", false, false, false, 321), "loginRegistration", [], "any", false, false, false, 321), "birthdayFieldRequired", [], "any", false, false, false, 321)) ? ("required=\"required\"") : (""));
        echo ">
                                ";
        // line 322
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 322)) {
            // line 323
            echo "                                    <option selected=\"selected\"
                                            value=\"\">
                                        ";
            // line 325
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalBirthdaySelectYear"));
            echo "
                                    </option>
                                ";
        }
        // line 328
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["currentYear"] ?? null), ($context["startYear"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 329
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"
                                            ";
            // line 330
            if (($context["year"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "birthdayYear"], "method", false, false, false, 330))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                        ";
            // line 331
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "                            </select>

                            ";
        // line 336
        $this->displayBlock('component_address_personal_fields_birthday_select_year_error', $context, $blocks);
        // line 343
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 336
    public function block_component_address_personal_fields_birthday_select_year_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_personal_fields_birthday_select_year_error"));

        // line 337
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/birthdayYear"], "method", false, false, false, 337))) {
            // line 338
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-personal.html.twig", 338)->display(twig_array_merge($context, ["violationPath" => "/birthdayYear"]));
            // line 341
            echo "                                ";
        }
        // line 342
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-personal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1444 => 342,  1441 => 341,  1438 => 338,  1435 => 337,  1428 => 336,  1420 => 343,  1418 => 336,  1414 => 334,  1405 => 331,  1399 => 330,  1394 => 329,  1389 => 328,  1383 => 325,  1379 => 323,  1377 => 322,  1373 => 321,  1367 => 320,  1358 => 319,  1355 => 318,  1352 => 317,  1350 => 316,  1347 => 315,  1340 => 314,  1333 => 310,  1330 => 309,  1327 => 306,  1324 => 305,  1317 => 304,  1309 => 311,  1307 => 304,  1303 => 302,  1294 => 299,  1288 => 298,  1283 => 297,  1278 => 296,  1272 => 293,  1268 => 291,  1266 => 290,  1262 => 289,  1256 => 288,  1247 => 287,  1244 => 286,  1237 => 285,  1230 => 281,  1227 => 280,  1224 => 277,  1221 => 276,  1214 => 275,  1206 => 282,  1204 => 275,  1200 => 273,  1191 => 270,  1185 => 269,  1180 => 268,  1175 => 267,  1169 => 264,  1165 => 262,  1163 => 261,  1159 => 260,  1153 => 259,  1144 => 258,  1140 => 257,  1137 => 256,  1130 => 255,  1122 => 345,  1120 => 314,  1117 => 313,  1115 => 285,  1112 => 284,  1110 => 255,  1107 => 254,  1100 => 253,  1089 => 249,  1084 => 248,  1077 => 247,  1070 => 348,  1067 => 347,  1065 => 253,  1062 => 252,  1059 => 247,  1056 => 246,  1049 => 245,  1042 => 236,  1039 => 235,  1036 => 234,  1033 => 233,  1026 => 232,  1016 => 228,  1011 => 226,  1004 => 224,  1001 => 223,  994 => 222,  983 => 218,  980 => 217,  973 => 216,  965 => 237,  963 => 232,  960 => 231,  958 => 222,  955 => 221,  953 => 216,  950 => 215,  947 => 214,  944 => 213,  942 => 212,  939 => 211,  932 => 210,  924 => 239,  922 => 210,  919 => 209,  912 => 208,  905 => 243,  901 => 241,  899 => 208,  896 => 207,  893 => 206,  886 => 205,  879 => 199,  876 => 198,  873 => 195,  870 => 194,  863 => 193,  853 => 189,  844 => 188,  840 => 187,  836 => 186,  829 => 184,  826 => 183,  819 => 182,  808 => 178,  804 => 177,  801 => 176,  794 => 175,  786 => 200,  784 => 193,  781 => 192,  779 => 182,  776 => 181,  774 => 175,  771 => 174,  764 => 173,  757 => 169,  754 => 168,  751 => 165,  748 => 164,  741 => 163,  731 => 159,  722 => 158,  718 => 157,  714 => 156,  707 => 154,  704 => 153,  697 => 152,  686 => 148,  682 => 147,  679 => 146,  672 => 145,  664 => 170,  662 => 163,  659 => 162,  657 => 152,  654 => 151,  652 => 145,  649 => 144,  642 => 143,  634 => 202,  632 => 173,  629 => 172,  627 => 143,  624 => 142,  617 => 141,  608 => 133,  599 => 132,  595 => 131,  591 => 130,  586 => 127,  579 => 126,  569 => 122,  565 => 121,  562 => 120,  555 => 119,  548 => 137,  544 => 135,  542 => 126,  539 => 125,  537 => 119,  534 => 118,  531 => 117,  524 => 116,  517 => 112,  514 => 111,  511 => 108,  508 => 107,  501 => 106,  493 => 103,  484 => 100,  479 => 99,  475 => 97,  472 => 96,  467 => 95,  461 => 92,  456 => 89,  454 => 88,  444 => 86,  438 => 85,  433 => 84,  426 => 83,  415 => 79,  411 => 78,  408 => 77,  401 => 76,  393 => 113,  391 => 106,  388 => 105,  386 => 83,  383 => 82,  381 => 76,  378 => 75,  371 => 74,  363 => 138,  361 => 116,  358 => 115,  356 => 74,  353 => 73,  346 => 72,  339 => 64,  332 => 63,  321 => 58,  315 => 57,  311 => 56,  305 => 53,  299 => 52,  295 => 51,  292 => 50,  285 => 47,  280 => 44,  278 => 43,  275 => 42,  272 => 41,  269 => 40,  266 => 39,  264 => 38,  261 => 37,  258 => 36,  255 => 35,  253 => 34,  250 => 33,  247 => 32,  244 => 31,  242 => 30,  239 => 29,  237 => 28,  234 => 27,  230 => 25,  225 => 24,  217 => 23,  213 => 22,  205 => 17,  195 => 16,  192 => 15,  185 => 14,  174 => 10,  170 => 9,  167 => 8,  160 => 7,  153 => 70,  149 => 68,  144 => 65,  142 => 63,  139 => 62,  137 => 14,  134 => 13,  132 => 7,  128 => 5,  125 => 4,  118 => 3,  111 => 245,  108 => 244,  106 => 205,  103 => 204,  101 => 141,  98 => 140,  96 => 72,  93 => 71,  90 => 3,  77 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Provides customer type, salutation, title, firstname, lastname and birthday fields for address forms (e.g. registering a user, creating or updating an address) #}
{% block component_address_personal_fields %}
    {% block component_address_personal_account_type %}
        {% if shopware.config.core.loginRegistration.showAccountTypeSelection and not hideCustomerTypeSelect %}
            <div class=\"form-row\">
                <div class=\"form-group col-md-3 col-sm-6 contact-type\">
                    {% block component_address_personal_account_type_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}accountType\">
                            {{ \"account.personalTypeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_account_type_select %}
                            {% if shopware.config.core.loginRegistration.showAccountTypeSelection %}
                                <select name=\"{% if prefix %}{{ prefix }}[accountType]{% else %}accountType{% endif %}\"
                                    id=\"{{ prefix }}accountType\"
                                    required=\"required\"
                                    class=\"custom-select contact-select\"
                                    data-form-field-toggle=\"true\"
                                    data-form-field-toggle-target=\".js-field-toggle-contact-type-company\"
                                    data-form-field-toggle-value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\"
                                    data-form-field-toggle-scope=\"{% if scope == 'parent' %}parent{% else %}all{% endif %}\"
                                    {% if scope == 'parent' %}data-form-field-toggle-parent-selector={{ parentSelector }}{% endif %}
                                >
                            {% endif %}

                            {% set isCompany = false %}

                            {% if page.address.company or data.company is not empty %}
                                {% set isCompany  = true %}
                            {% endif %}

                            {% if accountType and accountType == constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') %}
                                {% set isCompany  = true %}
                            {% endif %}

                            {% set isLoginPage = false %}
                            {% if activeRoute == 'frontend.account.login.page' %}
                                {% set isLoginPage = true %}
                            {% endif %}

                            {% if isLoginPage %}
                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    {{ \"account.personalTypeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}

                            <option value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_PRIVATE') }}\"
                                {% if isCompany == false and isLoginPage == false %} selected=\"selected\"{% endif %}>
                                {{ \"account.personalTypePrivate\"|trans|sw_sanitize }}
                            </option>

                            <option value=\"{{ constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS') }}\"
                                {% if isCompany == true and isLoginPage == false %} selected=\"selected\"{% endif %}>
                                {{ \"account.personalTypeBusiness\"|trans|sw_sanitize }}
                            </option>
                        </select>
                    {% endblock %}

                    {% block component_address_personal_account_type_error %}
                    {% endblock %}
                </div>
            </div>
        {% else %}
            <input type=\"hidden\" name=\"accountType\">
        {% endif %}
    {% endblock %}

    {% block component_address_personal_fields_salutation_title %}
        <div class=\"form-row\">
            {% block component_address_personal_fields_salutation %}
                <div class=\"form-group col-md-3 col-sm-6\">
                    {% block component_address_personal_fields_salutation_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}personalSalutation\">
                            {{ \"account.personalSalutationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_salutation_select %}
                        <select id=\"{{ prefix }}personalSalutation\"
                                class=\"custom-select{% if formViolations.getViolations('/salutationId') is not empty %} is-invalid{% endif %}\"
                                name=\"{% if prefix %}{{ prefix }}[salutationId]{% else %}salutationId{% endif %}\"
                                required=\"required\">
                            {% if not data.get('salutationId') %}
                                <option disabled=\"disabled\"
                                        selected=\"selected\"
                                        value=\"\">
                                    {{ \"account.personalSalutationPlaceholder\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}
                            {% for salutation in page.salutations %}
                                <option {% if salutation.id == data.get('salutationId') %}
                                    selected=\"selected\"
                                {% endif %}
                                        value=\"{{ salutation.id }}\">
                                    {{ salutation.translated.displayName }}
                                </option>
                            {% endfor %}
                        </select>
                    {% endblock %}

                    {% block component_address_form_salutation_select_error %}
                        {% if formViolations.getViolations('/salutationId') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/salutationId'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_personal_fields_title %}
                {% if shopware.config.core.loginRegistration.showTitleField %}
                    <div class=\"form-group col-md-3 col-sm-6\">
                        {% block component_address_personal_fields_title_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}personalTitle\">
                                {{ \"account.personalTitleLabel\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_personal_fields_title_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   autocomplete=\"section-personal title\"
                                   id=\"{{ prefix }}personalTitle\"
                                   placeholder=\"{{ \"account.personalTitlePlaceholder\"|trans|striptags }}\"
                                   name=\"{% if prefix %}{{ prefix }}[title]{% else %}title{% endif %}\"
                                   value=\"{{ data.get('title') }}\">
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block component_address_personal_fields_name %}
        <div class=\"form-row\">
            {% block component_address_personal_fields_first_name %}
                <div class=\"form-group col-sm-6\">
                    {% block component_address_personal_fields_first_name_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}personalFirstName\">
                            {{ \"account.personalFirstNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_fields_first_name_input %}
                        <input type=\"text\"
                               class=\"form-control{% if formViolations.getViolations('/firstName') is not empty %} is-invalid{% endif %}\"
                               autocomplete=\"section-personal given-name\"
                               id=\"{{ prefix }}personalFirstName\"
                               placeholder=\"{{ \"account.personalFirstNamePlaceholder\"|trans|striptags }}\"
                               name=\"{% if prefix %}{{ prefix }}[firstName]{% else %}firstName{% endif %}\"
                               value=\"{{ data.get('firstName') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_personal_fields_first_name_input_error %}
                        {% if formViolations.getViolations('/firstName') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/firstName'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_personal_fields_last_name %}
                <div class=\"form-group col-sm-6\">
                    {% block component_address_personal_fields_last_name_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}personalLastName\">
                            {{ \"account.personalLastNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_personal_fields_last_name_input %}
                        <input type=\"text\"
                               class=\"form-control{% if formViolations.getViolations('/lastName') is not empty %} is-invalid{% endif %}\"
                               autocomplete=\"section-personal family-name\"
                               id=\"{{ prefix }}personalLastName\"
                               placeholder=\"{{ \"account.personalLastNamePlaceholder\"|trans|striptags }}\"
                               name=\"{% if prefix %}{{ prefix }}[lastName]{% else %}lastName{% endif %}\"
                               value=\"{{ data.get('lastName') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_personal_fields_last_name_input_error %}
                        {% if formViolations.getViolations('/lastName') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/lastName'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block component_address_personal_company %}
        {% if shopware.config.core.loginRegistration.showAccountTypeSelection and activeRoute == 'frontend.account.profile.page' %}
            <div class=\"js-field-toggle-contact-type-company\">
                {% block component_address_personal_company_fields %}
                    <div class=\"form-row\">
                        {% block component_address_personal_company_name %}
                            <div class=\"form-group col-12\">
                                {% if formViolations.getViolations(\"/company\") is not empty %}
                                    {% set violationPath = \"/company\" %}
                                {% endif %}

                                {% block component_address_personal_company_name_label %}
                                    <label class=\"form-label\" for=\"company\">
                                        {{ \"address.companyNameLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                    </label>
                                {% endblock %}

                                {% block component_address_personal_company_name_input %}
                                    <input type=\"text\"
                                           class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                           id=\"company\"
                                           placeholder=\"{{ \"address.companyNamePlaceholder\"|trans|striptags }}\"
                                           name=\"company\"
                                           value=\"{{ data.get('company') }}\"
                                           required=\"required\">
                                {% endblock %}

                                {% block component_address_personal_company_name_input_error %}
                                    {% if violationPath %}
                                        {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}

    {% block component_address_personal_fields_birthday %}
        {% if showBirthdayField %}
            {% block component_address_personal_fields_birthday_label %}
                <label for=\"{{ prefix }}personalBirthday\">
                    {{ \"account.personalBirthdayLabel\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.birthdayFieldRequired ? \"general.required\"|trans|sw_sanitize }}
                </label>
            {% endblock %}

            {% block component_address_personal_fields_birthday_selects %}
                <div class=\"form-row\">
                    {% block component_address_personal_fields_birthday_select_day %}
                        <div class=\"form-group col-md-2 col-4\">
                            <select id=\"{{ prefix }}personalBirthday\"
                                    name=\"{% if prefix %}{{ prefix }}[birthdayDay]{% else %}birthdayDay{% endif %}\"
                                    class=\"custom-select{% if formViolations.getViolations('/birthdayDay') is not empty %} is-invalid{% endif %}\"
                                    {{ shopware.config.core.loginRegistration.birthdayFieldRequired ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayDay') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectDay\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for day in range(1, 31) %}
                                    <option value=\"{{ day }}\"
                                            {% if day == data.get('birthdayDay') %} selected=\"selected\"{% endif %}>
                                        {{ day }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_day_error %}
                                {% if formViolations.getViolations('/birthdayDay') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayDay'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_personal_fields_birthday_select_month %}
                        <div class=\"form-group col-md-2 col-4\">
                            <select name=\"{% if prefix %}{{ prefix }}[birthdayMonth]{% else %}birthdayMonth{% endif %}\"
                                    class=\"custom-select{% if formViolations.getViolations('/birthdayMonth') is not empty %} is-invalid{% endif %}\"
                                    {{ shopware.config.core.loginRegistration.birthdayFieldRequired ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayMonth') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectMonth\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for month in range(1, 12) %}
                                    <option value=\"{{ month }}\"
                                            {% if month == data.get('birthdayMonth') %} selected=\"selected\"{% endif %}>
                                        {{ month }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_month_error %}
                                {% if formViolations.getViolations('/birthdayMonth') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/birthdayMonth'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_address_personal_fields_birthday_select_year %}
                        <div class=\"form-group col-md-2 col-4\">
                            {% set currentYear = \"now\"|date('Y') %}
                            {% set startYear = currentYear - 120 %}

                            <select name=\"{% if prefix %}{{ prefix }}[birthdayYear]{% else %}birthdayYear{% endif %}\"
                                    class=\"custom-select{% if formViolations.getViolations('/birthdayYear') is not empty %} is-invalid{% endif %}\"
                                    {{ shopware.config.core.loginRegistration.birthdayFieldRequired ? 'required=\"required\"' }}>
                                {% if not data.get('birthdayYear') %}
                                    <option selected=\"selected\"
                                            value=\"\">
                                        {{ \"account.personalBirthdaySelectYear\"|trans|sw_sanitize }}
                                    </option>
                                {% endif %}
                                {% for year in range(currentYear, startYear) %}
                                    <option value=\"{{ year }}\"
                                            {% if year == data.get('birthdayYear') %} selected=\"selected\"{% endif %}>
                                        {{ year }}
                                    </option>
                                {% endfor %}
                            </select>

                            {% block component_address_personal_fields_birthday_select_year_error %}
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
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/address/address-personal.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/address/address-personal.html.twig");
    }
}
