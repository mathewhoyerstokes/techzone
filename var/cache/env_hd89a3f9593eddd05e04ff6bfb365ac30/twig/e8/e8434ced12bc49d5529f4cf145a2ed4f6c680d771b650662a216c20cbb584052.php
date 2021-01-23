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

/* @Storefront/storefront/component/address/address-form.html.twig */
class __TwigTemplate_f84b04d51dcaea4db0333d2bb36fba3b2ae6c251ba7896b18ae20360a20362bb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address_form' => [$this, 'block_component_address_form'],
            'component_address_form_addressId' => [$this, 'block_component_address_form_addressId'],
            'component_address_form_company' => [$this, 'block_component_address_form_company'],
            'component_address_form_company_fields' => [$this, 'block_component_address_form_company_fields'],
            'component_address_form_company_name' => [$this, 'block_component_address_form_company_name'],
            'component_address_form_company_name_label' => [$this, 'block_component_address_form_company_name_label'],
            'component_address_form_company_name_input' => [$this, 'block_component_address_form_company_name_input'],
            'component_address_form_company_name_input_error' => [$this, 'block_component_address_form_company_name_input_error'],
            'component_address_form_company_department' => [$this, 'block_component_address_form_company_department'],
            'component_address_form_company_department_label' => [$this, 'block_component_address_form_company_department_label'],
            'component_address_form_company_department_input' => [$this, 'block_component_address_form_company_department_input'],
            'component_address_form_company_department_input_error' => [$this, 'block_component_address_form_company_department_input_error'],
            'component_address_form_company_vatId' => [$this, 'block_component_address_form_company_vatId'],
            'component_address_form_company_vatId_label' => [$this, 'block_component_address_form_company_vatId_label'],
            'component_address_form_company_vatId_input' => [$this, 'block_component_address_form_company_vatId_input'],
            'component_address_form_company_vatId_input_error' => [$this, 'block_component_address_form_company_vatId_input_error'],
            'component_address_form_address_fields' => [$this, 'block_component_address_form_address_fields'],
            'component_address_form_street' => [$this, 'block_component_address_form_street'],
            'component_address_form_street_label' => [$this, 'block_component_address_form_street_label'],
            'component_address_form_street_input' => [$this, 'block_component_address_form_street_input'],
            'component_address_form_street_input_error' => [$this, 'block_component_address_form_street_input_error'],
            'component_address_form_zipcode_city' => [$this, 'block_component_address_form_zipcode_city'],
            'component_address_form_zipcode_label' => [$this, 'block_component_address_form_zipcode_label'],
            'component_address_form_zipcode_input' => [$this, 'block_component_address_form_zipcode_input'],
            'component_address_form_zipcode_error' => [$this, 'block_component_address_form_zipcode_error'],
            'component_address_form_city_label' => [$this, 'block_component_address_form_city_label'],
            'component_address_form_city_input' => [$this, 'block_component_address_form_city_input'],
            'component_address_form_city_error' => [$this, 'block_component_address_form_city_error'],
            'component_address_form_additional_field1' => [$this, 'block_component_address_form_additional_field1'],
            'component_address_form_additional_field1_label' => [$this, 'block_component_address_form_additional_field1_label'],
            'component_address_form_additional_field1_input' => [$this, 'block_component_address_form_additional_field1_input'],
            'component_address_form_additional_field2' => [$this, 'block_component_address_form_additional_field2'],
            'component_address_form_additional_field2_label' => [$this, 'block_component_address_form_additional_field2_label'],
            'component_address_form_additional_field2_input' => [$this, 'block_component_address_form_additional_field2_input'],
            'component_address_form_country' => [$this, 'block_component_address_form_country'],
            'component_address_form_country_label' => [$this, 'block_component_address_form_country_label'],
            'component_address_form_country_select' => [$this, 'block_component_address_form_country_select'],
            'component_address_form_country_state_label' => [$this, 'block_component_address_form_country_state_label'],
            'component_address_form_country_state_select' => [$this, 'block_component_address_form_country_state_select'],
            'component_address_form_country_error' => [$this, 'block_component_address_form_country_error'],
            'component_address_form_phone_number' => [$this, 'block_component_address_form_phone_number'],
            'component_address_form_phone_number_label' => [$this, 'block_component_address_form_phone_number_label'],
            'component_address_form_phone_number_input' => [$this, 'block_component_address_form_phone_number_input'],
            'component_address_form_phone_error' => [$this, 'block_component_address_form_phone_error'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address-form.html.twig"));

        // line 1
        $this->displayBlock('component_address_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_address_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form"));

        // line 2
        echo "    ";
        $this->displayBlock('component_address_form_addressId', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('component_address_form_company', $context, $blocks);
        // line 123
        echo "
    ";
        // line 124
        $this->displayBlock('component_address_form_address_fields', $context, $blocks);
        // line 404
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_component_address_form_addressId($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_addressId"));

        // line 3
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 3)) {
            // line 4
            echo "            <input type=\"hidden\"
                   name=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "[id]\"
                   value=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "id"], "method", false, false, false, 6), "html", null, true);
            echo "\">
        ";
        }
        // line 8
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_component_address_form_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company"));

        // line 11
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 11), "core", [], "any", false, false, false, 11), "loginRegistration", [], "any", false, false, false, 11), "showAccountTypeSelection", [], "any", false, false, false, 11)) {
            // line 12
            echo "            ";
            $context["accountTypeRequired"] = true;
            // line 13
            echo "            ";
            // line 14
            echo "            ";
            $context["accounTypeRequired"] = true;
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 17), "core", [], "any", false, false, false, 17), "loginRegistration", [], "any", false, false, false, 17), "showAccountTypeSelection", [], "any", false, false, false, 17) || (($context["prefix"] ?? null) == "address")) || (($context["prefix"] ?? null) == "shippingAddress")) || ($context["hasSelectedBusiness"] ?? null))) {
            // line 18
            echo "            <div class=\"";
            if (((($context["prefix"] ?? null) == "shippingAddress") || ($context["hasSelectedBusiness"] ?? null))) {
                echo "address-contact-type-company";
            } elseif ((($context["prefix"] ?? null) == "address")) {
                echo "js-field-toggle-contact-type-company d-block";
            } else {
                echo "js-field-toggle-contact-type-company d-none";
            }
            echo "\">
                ";
            // line 19
            $this->displayBlock('component_address_form_company_fields', $context, $blocks);
            // line 120
            echo "            </div>
        ";
        }
        // line 122
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_component_address_form_company_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_fields"));

        // line 20
        echo "                    <div class=\"form-row\">
                        ";
        // line 21
        $this->displayBlock('component_address_form_company_name', $context, $blocks);
        // line 53
        echo "                    </div>
                    <div class=\"form-row\">
                        ";
        // line 55
        $this->displayBlock('component_address_form_company_department', $context, $blocks);
        // line 86
        echo "
                        ";
        // line 87
        $this->displayBlock('component_address_form_company_vatId', $context, $blocks);
        // line 118
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_component_address_form_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name"));

        // line 22
        echo "                            <div class=\"form-group col-12\">
                                ";
        // line 23
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/company"], "method", false, false, false, 23))) {
            // line 24
            echo "                                    ";
            $context["violationPath"] = "/company";
            // line 25
            echo "                                ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/company")], "method", false, false, false, 25))) {
            // line 26
            echo "                                    ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/company");
            // line 27
            echo "                                ";
        }
        // line 28
        echo "
                                ";
        // line 29
        $this->displayBlock('component_address_form_company_name_label', $context, $blocks);
        // line 35
        echo "
                                ";
        // line 36
        $this->displayBlock('component_address_form_company_name_input', $context, $blocks);
        // line 45
        echo "
                                ";
        // line 46
        $this->displayBlock('component_address_form_company_name_input_error', $context, $blocks);
        // line 51
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_component_address_form_company_name_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_label"));

        // line 30
        echo "                                    <label class=\"form-label\"
                                           for=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "company\">
                                        ";
        // line 32
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNameLabel"));
        if (((($context["prefix"] ?? null) != "shippingAddress") && ($context["accountTypeRequired"] ?? null))) {
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        }
        // line 33
        echo "                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_component_address_form_company_name_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input"));

        // line 37
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 38
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "company\"
                                           placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyNamePlaceholder")), "html", null, true);
        echo "\"
                                           name=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[company]\"
                                           value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "company"], "method", false, false, false, 42), "html", null, true);
        echo "\"
                                           ";
        // line 43
        if (((($context["prefix"] ?? null) != "shippingAddress") && ($context["accountTypeRequired"] ?? null))) {
            echo "required=\"required\"";
        }
        echo ">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_component_address_form_company_name_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_name_input_error"));

        // line 47
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 48
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 48)->display($context);
            // line 49
            echo "                                    ";
        }
        // line 50
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_component_address_form_company_department($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department"));

        // line 56
        echo "                            <div class=\"form-group col-md-6\">
                                ";
        // line 57
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/department"], "method", false, false, false, 57))) {
            // line 58
            echo "                                    ";
            $context["violationPath"] = "/department";
            // line 59
            echo "                                ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/department")], "method", false, false, false, 59))) {
            // line 60
            echo "                                    ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/department");
            // line 61
            echo "                                ";
        }
        // line 62
        echo "
                                ";
        // line 63
        $this->displayBlock('component_address_form_company_department_label', $context, $blocks);
        // line 69
        echo "
                                ";
        // line 70
        $this->displayBlock('component_address_form_company_department_input', $context, $blocks);
        // line 78
        echo "
                                ";
        // line 79
        $this->displayBlock('component_address_form_company_department_input_error', $context, $blocks);
        // line 84
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_component_address_form_company_department_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_label"));

        // line 64
        echo "                                    <label class=\"form-label\"
                                           for=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "department\">
                                        ";
        // line 66
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentLabel"));
        echo "
                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_component_address_form_company_department_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input"));

        // line 71
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 72
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "department\"
                                           placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyDepartmentPlaceholder")), "html", null, true);
        echo "\"
                                           name=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[department]\"
                                           value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "department"], "method", false, false, false, 76), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_component_address_form_company_department_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_department_input_error"));

        // line 80
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 81
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 81)->display($context);
            // line 82
            echo "                                    ";
        }
        // line 83
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_component_address_form_company_vatId($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId"));

        // line 88
        echo "                            <div class=\"form-group col-md-6\">
                                ";
        // line 89
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/vatId"], "method", false, false, false, 89))) {
            // line 90
            echo "                                    ";
            $context["violationPath"] = "/vatId";
            // line 91
            echo "                                ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/vatId")], "method", false, false, false, 91))) {
            // line 92
            echo "                                    ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/vatId");
            // line 93
            echo "                                ";
        }
        // line 94
        echo "
                                ";
        // line 95
        $this->displayBlock('component_address_form_company_vatId_label', $context, $blocks);
        // line 101
        echo "
                                ";
        // line 102
        $this->displayBlock('component_address_form_company_vatId_input', $context, $blocks);
        // line 110
        echo "
                                ";
        // line 111
        $this->displayBlock('component_address_form_company_vatId_input_error', $context, $blocks);
        // line 116
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_component_address_form_company_vatId_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_label"));

        // line 96
        echo "                                    <label class=\"form-label\"
                                           for=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "vatId\">
                                        ";
        // line 98
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
        echo "
                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_component_address_form_company_vatId_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_input"));

        // line 103
        echo "                                    <input type=\"text\"
                                           class=\"form-control";
        // line 104
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                           id=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "vatId\"
                                           placeholder=\"";
        // line 106
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatPlaceholder")), "html", null, true);
        echo "\"
                                           name=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[vatId]\"
                                           value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "vatId"], "method", false, false, false, 108), "html", null, true);
        echo "\">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 111
    public function block_component_address_form_company_vatId_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_company_vatId_input_error"));

        // line 112
        echo "                                    ";
        if (($context["violationPath"] ?? null)) {
            // line 113
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 113)->display($context);
            // line 114
            echo "                                    ";
        }
        // line 115
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_component_address_form_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_address_fields"));

        // line 125
        echo "        <div class=\"form-row\">
            ";
        // line 126
        $this->displayBlock('component_address_form_street', $context, $blocks);
        // line 158
        echo "
            ";
        // line 159
        $this->displayBlock('component_address_form_zipcode_city', $context, $blocks);
        // line 242
        echo "
            ";
        // line 243
        $this->displayBlock('component_address_form_additional_field1', $context, $blocks);
        // line 265
        echo "
            ";
        // line 266
        $this->displayBlock('component_address_form_additional_field2', $context, $blocks);
        // line 288
        echo "        </div>

        <div class=\"form-row country-and-state-form-elements\" data-country-state-select=\"true\">
            ";
        // line 291
        $this->displayBlock('component_address_form_country', $context, $blocks);
        // line 365
        echo "        </div>

        <div class=\"form-row\">
            ";
        // line 368
        $this->displayBlock('component_address_form_phone_number', $context, $blocks);
        // line 402
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_component_address_form_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street"));

        // line 127
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 128
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/street"], "method", false, false, false, 128))) {
            // line 129
            echo "                        ";
            $context["violationPath"] = "/street";
            // line 130
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/street")], "method", false, false, false, 130))) {
            // line 131
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/street");
            // line 132
            echo "                    ";
        }
        // line 133
        echo "
                    ";
        // line 134
        $this->displayBlock('component_address_form_street_label', $context, $blocks);
        // line 140
        echo "
                    ";
        // line 141
        $this->displayBlock('component_address_form_street_input', $context, $blocks);
        // line 150
        echo "
                    ";
        // line 151
        $this->displayBlock('component_address_form_street_input_error', $context, $blocks);
        // line 156
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_component_address_form_street_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_label"));

        // line 135
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressStreet\">
                            ";
        // line 137
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 141
    public function block_component_address_form_street_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_input"));

        // line 142
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 143
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressStreet\"
                               placeholder=\"";
        // line 145
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.streetPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[street]\"
                               value=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "street"], "method", false, false, false, 147), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 151
    public function block_component_address_form_street_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_street_input_error"));

        // line 152
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 153
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 153)->display($context);
            // line 154
            echo "                        ";
        }
        // line 155
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 159
    public function block_component_address_form_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_city"));

        // line 160
        echo "                ";
        ob_start();
        // line 161
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/zipcode"], "method", false, false, false, 161))) {
            // line 162
            echo "                        ";
            $context["violationPath"] = "/zipcode";
            // line 163
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/zipcode")], "method", false, false, false, 163))) {
            // line 164
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/zipcode");
            // line 165
            echo "                    ";
        }
        // line 166
        echo "
                    ";
        // line 167
        $this->displayBlock('component_address_form_zipcode_label', $context, $blocks);
        // line 173
        echo "
                    ";
        // line 174
        $this->displayBlock('component_address_form_zipcode_input', $context, $blocks);
        // line 183
        echo "
                    ";
        // line 184
        $this->displayBlock('component_address_form_zipcode_error', $context, $blocks);
        // line 189
        echo "                ";
        $context["zipcodeField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "
                ";
        // line 191
        ob_start();
        // line 192
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/city"], "method", false, false, false, 192))) {
            // line 193
            echo "                        ";
            $context["violationPath"] = "/city";
            // line 194
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/city")], "method", false, false, false, 194))) {
            // line 195
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/city");
            // line 196
            echo "                    ";
        } else {
            // line 197
            echo "                        ";
            $context["violationPath"] = null;
            // line 198
            echo "                    ";
        }
        // line 199
        echo "
                    ";
        // line 200
        $this->displayBlock('component_address_form_city_label', $context, $blocks);
        // line 206
        echo "
                    ";
        // line 207
        $this->displayBlock('component_address_form_city_input', $context, $blocks);
        // line 216
        echo "
                    ";
        // line 217
        $this->displayBlock('component_address_form_city_error', $context, $blocks);
        // line 222
        echo "                ";
        $context["cityField"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 223
        echo "
                ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 224), "core", [], "any", false, false, false, 224), "address", [], "any", false, false, false, 224), "showZipcodeInFrontOfCity", [], "any", false, false, false, 224)) {
            // line 225
            echo "                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 226
            echo twig_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 230
            echo twig_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        } else {
            // line 233
            echo "                    <div class=\"form-group col-md-4 col-8\">
                        ";
            // line 234
            echo twig_escape_filter($this->env, ($context["cityField"] ?? null), "html", null, true);
            echo "
                    </div>

                    <div class=\"form-group col-md-2 col-4\">
                        ";
            // line 238
            echo twig_escape_filter($this->env, ($context["zipcodeField"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 241
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 167
    public function block_component_address_form_zipcode_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_label"));

        // line 168
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 169
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressZipcode\">
                            ";
        // line 170
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodeLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 174
    public function block_component_address_form_zipcode_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_input"));

        // line 175
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 176
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 177
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressZipcode\"
                               placeholder=\"";
        // line 178
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.zipcodePlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 179
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[zipcode]\"
                               value=\"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "zipcode"], "method", false, false, false, 180), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 184
    public function block_component_address_form_zipcode_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_zipcode_error"));

        // line 185
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 186
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 186)->display($context);
            // line 187
            echo "                        ";
        }
        // line 188
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_component_address_form_city_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_label"));

        // line 201
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 202
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCity\">
                            ";
        // line 203
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 207
    public function block_component_address_form_city_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_input"));

        // line 208
        echo "                        <input type=\"text\"
                               class=\"form-control";
        // line 209
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                               id=\"";
        // line 210
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCity\"
                               placeholder=\"";
        // line 211
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.cityPlaceholder")), "html", null, true);
        echo "\"
                               name=\"";
        // line 212
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[city]\"
                               value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "city"], "method", false, false, false, 213), "html", null, true);
        echo "\"
                               required=\"required\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 217
    public function block_component_address_form_city_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_city_error"));

        // line 218
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 219
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 219)->display($context);
            // line 220
            echo "                        ";
        }
        // line 221
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 243
    public function block_component_address_form_additional_field1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1"));

        // line 244
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 244), "core", [], "any", false, false, false, 244), "loginRegistration", [], "any", false, false, false, 244), "showAdditionalAddressField1", [], "any", false, false, false, 244)) {
            // line 245
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 246
            $this->displayBlock('component_address_form_additional_field1_label', $context, $blocks);
            // line 252
            echo "
                        ";
            // line 253
            $this->displayBlock('component_address_form_additional_field1_input', $context, $blocks);
            // line 262
            echo "                    </div>
                ";
        }
        // line 264
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 246
    public function block_component_address_form_additional_field1_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1_label"));

        // line 247
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 248
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField1\">
                                ";
        // line 249
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Label"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 249), "core", [], "any", false, false, false, 249), "loginRegistration", [], "any", false, false, false, 249), "additionalAddressField1Required", [], "any", false, false, false, 249)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 253
    public function block_component_address_form_additional_field1_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field1_input"));

        // line 254
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 256
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField1\"
                                   placeholder=\"";
        // line 257
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField1Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 258
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine1]\"
                                   value=\"";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine1"], "method", false, false, false, 259), "html", null, true);
        echo "\"
                                    ";
        // line 260
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 260), "core", [], "any", false, false, false, 260), "loginRegistration", [], "any", false, false, false, 260), "additionalAddressField1Required", [], "any", false, false, false, 260)) ? ("required=\"true\"") : (""));
        echo ">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 266
    public function block_component_address_form_additional_field2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2"));

        // line 267
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 267), "core", [], "any", false, false, false, 267), "loginRegistration", [], "any", false, false, false, 267), "showAdditionalAddressField2", [], "any", false, false, false, 267)) {
            // line 268
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 269
            $this->displayBlock('component_address_form_additional_field2_label', $context, $blocks);
            // line 275
            echo "
                        ";
            // line 276
            $this->displayBlock('component_address_form_additional_field2_input', $context, $blocks);
            // line 285
            echo "                    </div>
                ";
        }
        // line 287
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 269
    public function block_component_address_form_additional_field2_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2_label"));

        // line 270
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 271
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField2\">
                                ";
        // line 272
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Label"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 272), "core", [], "any", false, false, false, 272), "loginRegistration", [], "any", false, false, false, 272), "additionalAddressField2Required", [], "any", false, false, false, 272)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 276
    public function block_component_address_form_additional_field2_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_additional_field2_input"));

        // line 277
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 279
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AdditionalField2\"
                                   placeholder=\"";
        // line 280
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.additionalField2Placeholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 281
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[additionalAddressLine2]\"
                                   value=\"";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "additionalAddressLine2"], "method", false, false, false, 282), "html", null, true);
        echo "\"
                                    ";
        // line 283
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 283), "core", [], "any", false, false, false, 283), "loginRegistration", [], "any", false, false, false, 283), "additionalAddressField2Required", [], "any", false, false, false, 283)) ? ("required=\"true\"") : (""));
        echo ">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 291
    public function block_component_address_form_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country"));

        // line 292
        echo "                <div class=\"form-group col-md-6\">
                    ";
        // line 293
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryId"], "method", false, false, false, 293))) {
            // line 294
            echo "                        ";
            $context["violationPath"] = "/countryId";
            // line 295
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryId")], "method", false, false, false, 295))) {
            // line 296
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryId");
            // line 297
            echo "                    ";
        }
        // line 298
        echo "
                    ";
        // line 299
        $this->displayBlock('component_address_form_country_label', $context, $blocks);
        // line 305
        echo "
                    ";
        // line 306
        $this->displayBlock('component_address_form_country_select', $context, $blocks);
        // line 329
        echo "                </div>

                <div class=\"form-group col-md-6  d-none\">
                    ";
        // line 332
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/countryStateId"], "method", false, false, false, 332))) {
            // line 333
            echo "                        ";
            $context["violationPath"] = "/countryStateId";
            // line 334
            echo "                    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/countryStateId")], "method", false, false, false, 334))) {
            // line 335
            echo "                        ";
            $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/countryStateId");
            // line 336
            echo "                    ";
        }
        // line 337
        echo "
                    ";
        // line 338
        $this->displayBlock('component_address_form_country_state_label', $context, $blocks);
        // line 344
        echo "
                    ";
        // line 345
        $this->displayBlock('component_address_form_country_state_select', $context, $blocks);
        // line 357
        echo "
                    ";
        // line 358
        $this->displayBlock('component_address_form_country_error', $context, $blocks);
        // line 363
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 299
    public function block_component_address_form_country_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_label"));

        // line 300
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 301
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 302
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 306
    public function block_component_address_form_country_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_select"));

        // line 307
        echo "                        <select class=\"country-select custom-select";
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 308
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountry\"
                                name=\"";
        // line 309
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryId]\"
                                required=\"required\"
                                data-initial-country-id=\"";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 311), "html", null, true);
        echo "\">
                            ";
        // line 312
        if ( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 312)) {
            // line 313
            echo "                                <option disabled=\"disabled\"
                                        value=\"\"
                                        selected=\"selected\">
                                    ";
            // line 316
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryPlaceholder"));
            echo "
                                </option>
                            ";
        }
        // line 319
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "countries", [], "any", false, false, false, 319));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 320
            echo "                                <option ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 320) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryId"], "method", false, false, false, 320))) {
                // line 321
                echo "                                        selected=\"selected\"
                                        ";
            }
            // line 323
            echo "                                        value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "id", [], "any", false, false, false, 323), "html", null, true);
            echo "\">
                                    ";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "translated", [], "any", false, false, false, 324), "name", [], "any", false, false, false, 324), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 338
    public function block_component_address_form_country_state_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_state_label"));

        // line 339
        echo "                        <label class=\"form-label\"
                               for=\"";
        // line 340
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountry\">
                            ";
        // line 341
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStateLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 345
    public function block_component_address_form_country_state_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_state_select"));

        // line 346
        echo "                        <select class=\"country-state-select custom-select";
        if (($context["violationPath"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                id=\"";
        // line 347
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressCountryState\"
                                name=\"";
        // line 348
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[countryStateId]\"
                                data-initial-country-state-id=\"";
        // line 349
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "countryStateId"], "method", false, false, false, 349), "html", null, true);
        echo "\">
                            <option value=\"\"
                                    selected=\"selected\"
                                    data-placeholder-option=\"true\">
                                ";
        // line 353
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryStatePlaceholder"));
        echo "
                            </option>
                        </select>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 358
    public function block_component_address_form_country_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_country_error"));

        // line 359
        echo "                        ";
        if (($context["violationPath"] ?? null)) {
            // line 360
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 360)->display($context);
            // line 361
            echo "                        ";
        }
        // line 362
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 368
    public function block_component_address_form_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number"));

        // line 369
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 369), "core", [], "any", false, false, false, 369), "loginRegistration", [], "any", false, false, false, 369), "showPhoneNumberField", [], "any", false, false, false, 369)) {
            // line 370
            echo "                    <div class=\"form-group col-md-6\">
                        ";
            // line 371
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/phoneNumber"], "method", false, false, false, 371))) {
                // line 372
                echo "                            ";
                $context["violationPath"] = "/phoneNumber";
                // line 373
                echo "                        ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => (("/" . ($context["prefix"] ?? null)) . "/phoneNumber")], "method", false, false, false, 373))) {
                // line 374
                echo "                            ";
                $context["violationPath"] = (("/" . ($context["prefix"] ?? null)) . "/phoneNumber");
                // line 375
                echo "                        ";
            }
            // line 376
            echo "
                        ";
            // line 377
            $this->displayBlock('component_address_form_phone_number_label', $context, $blocks);
            // line 383
            echo "
                        ";
            // line 384
            $this->displayBlock('component_address_form_phone_number_input', $context, $blocks);
            // line 393
            echo "
                        ";
            // line 394
            $this->displayBlock('component_address_form_phone_error', $context, $blocks);
            // line 399
            echo "                    </div>
                ";
        }
        // line 401
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 377
    public function block_component_address_form_phone_number_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number_label"));

        // line 378
        echo "                            <label class=\"form-label\"
                                   for=\"";
        // line 379
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressPhoneNumber\">
                                ";
        // line 380
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberLabel"));
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 380), "core", [], "any", false, false, false, 380), "loginRegistration", [], "any", false, false, false, 380), "phoneNumberFieldRequired", [], "any", false, false, false, 380)) ? ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"))) : (""));
        echo "
                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 384
    public function block_component_address_form_phone_number_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_number_input"));

        // line 385
        echo "                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"";
        // line 387
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "AddressPhoneNumber\"
                                   placeholder=\"";
        // line 388
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.phoneNumberPlaceholder")), "html", null, true);
        echo "\"
                                   name=\"";
        // line 389
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "[phoneNumber]\"
                                   value=\"";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "phoneNumber"], "method", false, false, false, 390), "html", null, true);
        echo "\"
                                ";
        // line 391
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 391), "core", [], "any", false, false, false, 391), "loginRegistration", [], "any", false, false, false, 391), "phoneNumberFieldRequired", [], "any", false, false, false, 391)) ? ("required=\"true\"") : (""));
        echo ">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 394
    public function block_component_address_form_phone_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_form_phone_error"));

        // line 395
        echo "                            ";
        if (($context["violationPath"] ?? null)) {
            // line 396
            echo "                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/address/address-form.html.twig", 396)->display($context);
            // line 397
            echo "                            ";
        }
        // line 398
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1692 => 398,  1689 => 397,  1686 => 396,  1683 => 395,  1676 => 394,  1667 => 391,  1663 => 390,  1659 => 389,  1655 => 388,  1651 => 387,  1647 => 385,  1640 => 384,  1629 => 380,  1625 => 379,  1622 => 378,  1615 => 377,  1608 => 401,  1604 => 399,  1602 => 394,  1599 => 393,  1597 => 384,  1594 => 383,  1592 => 377,  1589 => 376,  1586 => 375,  1583 => 374,  1580 => 373,  1577 => 372,  1575 => 371,  1572 => 370,  1569 => 369,  1562 => 368,  1555 => 362,  1552 => 361,  1549 => 360,  1546 => 359,  1539 => 358,  1528 => 353,  1521 => 349,  1517 => 348,  1513 => 347,  1506 => 346,  1499 => 345,  1488 => 341,  1484 => 340,  1481 => 339,  1474 => 338,  1466 => 327,  1457 => 324,  1452 => 323,  1448 => 321,  1445 => 320,  1440 => 319,  1434 => 316,  1429 => 313,  1427 => 312,  1423 => 311,  1418 => 309,  1414 => 308,  1407 => 307,  1400 => 306,  1389 => 302,  1385 => 301,  1382 => 300,  1375 => 299,  1367 => 363,  1365 => 358,  1362 => 357,  1360 => 345,  1357 => 344,  1355 => 338,  1352 => 337,  1349 => 336,  1346 => 335,  1343 => 334,  1340 => 333,  1338 => 332,  1333 => 329,  1331 => 306,  1328 => 305,  1326 => 299,  1323 => 298,  1320 => 297,  1317 => 296,  1314 => 295,  1311 => 294,  1309 => 293,  1306 => 292,  1299 => 291,  1290 => 283,  1286 => 282,  1282 => 281,  1278 => 280,  1274 => 279,  1270 => 277,  1263 => 276,  1252 => 272,  1248 => 271,  1245 => 270,  1238 => 269,  1231 => 287,  1227 => 285,  1225 => 276,  1222 => 275,  1220 => 269,  1217 => 268,  1214 => 267,  1207 => 266,  1198 => 260,  1194 => 259,  1190 => 258,  1186 => 257,  1182 => 256,  1178 => 254,  1171 => 253,  1160 => 249,  1156 => 248,  1153 => 247,  1146 => 246,  1139 => 264,  1135 => 262,  1133 => 253,  1130 => 252,  1128 => 246,  1125 => 245,  1122 => 244,  1115 => 243,  1108 => 221,  1105 => 220,  1102 => 219,  1099 => 218,  1092 => 217,  1082 => 213,  1078 => 212,  1074 => 211,  1070 => 210,  1064 => 209,  1061 => 208,  1054 => 207,  1043 => 203,  1039 => 202,  1036 => 201,  1029 => 200,  1022 => 188,  1019 => 187,  1016 => 186,  1013 => 185,  1006 => 184,  996 => 180,  992 => 179,  988 => 178,  984 => 177,  978 => 176,  975 => 175,  968 => 174,  957 => 170,  953 => 169,  950 => 168,  943 => 167,  936 => 241,  930 => 238,  923 => 234,  920 => 233,  914 => 230,  907 => 226,  904 => 225,  902 => 224,  899 => 223,  896 => 222,  894 => 217,  891 => 216,  889 => 207,  886 => 206,  884 => 200,  881 => 199,  878 => 198,  875 => 197,  872 => 196,  869 => 195,  866 => 194,  863 => 193,  860 => 192,  858 => 191,  855 => 190,  852 => 189,  850 => 184,  847 => 183,  845 => 174,  842 => 173,  840 => 167,  837 => 166,  834 => 165,  831 => 164,  828 => 163,  825 => 162,  822 => 161,  819 => 160,  812 => 159,  805 => 155,  802 => 154,  799 => 153,  796 => 152,  789 => 151,  779 => 147,  775 => 146,  771 => 145,  767 => 144,  761 => 143,  758 => 142,  751 => 141,  740 => 137,  736 => 136,  733 => 135,  726 => 134,  718 => 156,  716 => 151,  713 => 150,  711 => 141,  708 => 140,  706 => 134,  703 => 133,  700 => 132,  697 => 131,  694 => 130,  691 => 129,  689 => 128,  686 => 127,  679 => 126,  671 => 402,  669 => 368,  664 => 365,  662 => 291,  657 => 288,  655 => 266,  652 => 265,  650 => 243,  647 => 242,  645 => 159,  642 => 158,  640 => 126,  637 => 125,  630 => 124,  623 => 115,  620 => 114,  617 => 113,  614 => 112,  607 => 111,  598 => 108,  594 => 107,  590 => 106,  586 => 105,  580 => 104,  577 => 103,  570 => 102,  560 => 98,  556 => 97,  553 => 96,  546 => 95,  538 => 116,  536 => 111,  533 => 110,  531 => 102,  528 => 101,  526 => 95,  523 => 94,  520 => 93,  517 => 92,  514 => 91,  511 => 90,  509 => 89,  506 => 88,  499 => 87,  492 => 83,  489 => 82,  486 => 81,  483 => 80,  476 => 79,  467 => 76,  463 => 75,  459 => 74,  455 => 73,  449 => 72,  446 => 71,  439 => 70,  429 => 66,  425 => 65,  422 => 64,  415 => 63,  407 => 84,  405 => 79,  402 => 78,  400 => 70,  397 => 69,  395 => 63,  392 => 62,  389 => 61,  386 => 60,  383 => 59,  380 => 58,  378 => 57,  375 => 56,  368 => 55,  361 => 50,  358 => 49,  355 => 48,  352 => 47,  345 => 46,  334 => 43,  330 => 42,  326 => 41,  322 => 40,  318 => 39,  312 => 38,  309 => 37,  302 => 36,  294 => 33,  289 => 32,  285 => 31,  282 => 30,  275 => 29,  267 => 51,  265 => 46,  262 => 45,  260 => 36,  257 => 35,  255 => 29,  252 => 28,  249 => 27,  246 => 26,  243 => 25,  240 => 24,  238 => 23,  235 => 22,  228 => 21,  220 => 118,  218 => 87,  215 => 86,  213 => 55,  209 => 53,  207 => 21,  204 => 20,  197 => 19,  190 => 122,  186 => 120,  184 => 19,  173 => 18,  171 => 17,  168 => 16,  165 => 15,  162 => 14,  160 => 13,  157 => 12,  154 => 11,  147 => 10,  140 => 8,  135 => 6,  131 => 5,  128 => 4,  125 => 3,  118 => 2,  110 => 404,  108 => 124,  105 => 123,  103 => 10,  100 => 9,  97 => 2,  84 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_address_form %}
    {% block component_address_form_addressId %}
        {% if data.get('id') %}
            <input type=\"hidden\"
                   name=\"{{ prefix }}[id]\"
                   value=\"{{ data.get('id') }}\">
        {% endif %}
    {% endblock %}

    {% block component_address_form_company %}
        {% if shopware.config.core.loginRegistration.showAccountTypeSelection %}
            {% set accountTypeRequired = true %}
            {# @deprecated tag:v6.4.0 - Variable \"accounTypeRequired\" will be removed. Use \"accountTypeRequired\" instead #}
            {% set accounTypeRequired = true %}
        {% endif %}

        {% if shopware.config.core.loginRegistration.showAccountTypeSelection or prefix == \"address\" or prefix == \"shippingAddress\" or hasSelectedBusiness %}
            <div class=\"{% if prefix == \"shippingAddress\" or hasSelectedBusiness %}address-contact-type-company{% elseif prefix == \"address\" %}js-field-toggle-contact-type-company d-block{% else %}js-field-toggle-contact-type-company d-none{% endif %}\">
                {% block component_address_form_company_fields %}
                    <div class=\"form-row\">
                        {% block component_address_form_company_name %}
                            <div class=\"form-group col-12\">
                                {% if formViolations.getViolations(\"/company\") is not empty %}
                                    {% set violationPath = \"/company\" %}
                                {% elseif formViolations.getViolations(\"/#{prefix}/company\") is not empty %}
                                    {% set violationPath = \"/#{prefix}/company\" %}
                                {% endif %}

                                {% block component_address_form_company_name_label %}
                                    <label class=\"form-label\"
                                           for=\"{{ prefix }}company\">
                                        {{ \"address.companyNameLabel\"|trans|sw_sanitize }}{% if prefix != \"shippingAddress\" and accountTypeRequired %}{{ \"general.required\"|trans|sw_sanitize }}{% endif %}
                                    </label>
                                {% endblock %}

                                {% block component_address_form_company_name_input %}
                                    <input type=\"text\"
                                           class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                           id=\"{{ prefix }}company\"
                                           placeholder=\"{{ \"address.companyNamePlaceholder\"|trans|striptags }}\"
                                           name=\"{{ prefix }}[company]\"
                                           value=\"{{ data.get('company') }}\"
                                           {% if prefix != \"shippingAddress\" and accountTypeRequired %}required=\"required\"{% endif %}>
                                {% endblock %}

                                {% block component_address_form_company_name_input_error %}
                                    {% if violationPath %}
                                        {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                    <div class=\"form-row\">
                        {% block component_address_form_company_department %}
                            <div class=\"form-group col-md-6\">
                                {% if formViolations.getViolations(\"/department\") is not empty %}
                                    {% set violationPath = \"/department\" %}
                                {% elseif formViolations.getViolations(\"/#{prefix}/department\") is not empty %}
                                    {% set violationPath = \"/#{prefix}/department\" %}
                                {% endif %}

                                {% block component_address_form_company_department_label %}
                                    <label class=\"form-label\"
                                           for=\"{{ prefix }}department\">
                                        {{ \"address.companyDepartmentLabel\"|trans|sw_sanitize }}
                                    </label>
                                {% endblock %}

                                {% block component_address_form_company_department_input %}
                                    <input type=\"text\"
                                           class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                           id=\"{{ prefix }}department\"
                                           placeholder=\"{{ \"address.companyDepartmentPlaceholder\"|trans|striptags }}\"
                                           name=\"{{ prefix }}[department]\"
                                           value=\"{{ data.get('department') }}\">
                                {% endblock %}

                                {% block component_address_form_company_department_input_error %}
                                    {% if violationPath %}
                                        {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                                    {% endif %}
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block component_address_form_company_vatId %}
                            <div class=\"form-group col-md-6\">
                                {% if formViolations.getViolations(\"/vatId\") is not empty %}
                                    {% set violationPath = \"/vatId\" %}
                                {% elseif formViolations.getViolations(\"/#{prefix}/vatId\") is not empty %}
                                    {% set violationPath = \"/#{prefix}/vatId\" %}
                                {% endif %}

                                {% block component_address_form_company_vatId_label %}
                                    <label class=\"form-label\"
                                           for=\"{{ prefix }}vatId\">
                                        {{ \"address.companyVatLabel\"|trans|sw_sanitize }}
                                    </label>
                                {% endblock %}

                                {% block component_address_form_company_vatId_input %}
                                    <input type=\"text\"
                                           class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                                           id=\"{{ prefix }}vatId\"
                                           placeholder=\"{{ \"address.companyVatPlaceholder\"|trans|striptags }}\"
                                           name=\"{{ prefix }}[vatId]\"
                                           value=\"{{ data.get('vatId') }}\">
                                {% endblock %}

                                {% block component_address_form_company_vatId_input_error %}
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

    {% block component_address_form_address_fields %}
        <div class=\"form-row\">
            {% block component_address_form_street %}
                <div class=\"form-group col-md-6\">
                    {% if formViolations.getViolations(\"/street\") is not empty %}
                        {% set violationPath = \"/street\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/street\") is not empty %}
                        {% set violationPath = \"/#{prefix}/street\" %}
                    {% endif %}

                    {% block component_address_form_street_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressStreet\">
                            {{ \"address.streetLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_street_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               id=\"{{ prefix }}AddressStreet\"
                               placeholder=\"{{ \"address.streetPlaceholder\"|trans|striptags }}\"
                               name=\"{{ prefix }}[street]\"
                               value=\"{{ data.get('street') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_form_street_input_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block component_address_form_zipcode_city %}
                {% set zipcodeField %}
                    {% if formViolations.getViolations(\"/zipcode\") is not empty %}
                        {% set violationPath = \"/zipcode\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/zipcode\") is not empty %}
                        {% set violationPath = \"/#{prefix}/zipcode\" %}
                    {% endif %}

                    {% block component_address_form_zipcode_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressZipcode\">
                            {{ \"address.zipcodeLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_zipcode_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               id=\"{{ prefix }}AddressZipcode\"
                               placeholder=\"{{ \"address.zipcodePlaceholder\"|trans|striptags }}\"
                               name=\"{{ prefix }}[zipcode]\"
                               value=\"{{ data.get('zipcode') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_form_zipcode_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                {% endset %}

                {% set cityField %}
                    {% if formViolations.getViolations(\"/city\") is not empty %}
                        {% set violationPath = \"/city\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/city\") is not empty %}
                        {% set violationPath = \"/#{prefix}/city\" %}
                    {% else %}
                        {% set violationPath = null %}
                    {% endif %}

                    {% block component_address_form_city_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressCity\">
                            {{ \"address.cityLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_city_input %}
                        <input type=\"text\"
                               class=\"form-control{% if violationPath %} is-invalid{% endif %}\"
                               id=\"{{ prefix }}AddressCity\"
                               placeholder=\"{{ \"address.cityPlaceholder\"|trans|striptags }}\"
                               name=\"{{ prefix }}[city]\"
                               value=\"{{ data.get('city') }}\"
                               required=\"required\">
                    {% endblock %}

                    {% block component_address_form_city_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                {% endset %}

                {% if shopware.config.core.address.showZipcodeInFrontOfCity %}
                    <div class=\"form-group col-md-2 col-4\">
                        {{ zipcodeField }}
                    </div>

                    <div class=\"form-group col-md-4 col-8\">
                        {{ cityField }}
                    </div>
                {% else %}
                    <div class=\"form-group col-md-4 col-8\">
                        {{ cityField }}
                    </div>

                    <div class=\"form-group col-md-2 col-4\">
                        {{ zipcodeField }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_address_form_additional_field1 %}
                {% if shopware.config.core.loginRegistration.showAdditionalAddressField1 %}
                    <div class=\"form-group col-md-6\">
                        {% block component_address_form_additional_field1_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}AdditionalField1\">
                                {{ \"address.additionalField1Label\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.additionalAddressField1Required ? \"general.required\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_form_additional_field1_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"{{ prefix }}AdditionalField1\"
                                   placeholder=\"{{ \"address.additionalField1Placeholder\"|trans|striptags }}\"
                                   name=\"{{ prefix }}[additionalAddressLine1]\"
                                   value=\"{{ data.get('additionalAddressLine1') }}\"
                                    {{ shopware.config.core.loginRegistration.additionalAddressField1Required ? 'required=\"true\"' }}>
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_address_form_additional_field2 %}
                {% if shopware.config.core.loginRegistration.showAdditionalAddressField2 %}
                    <div class=\"form-group col-md-6\">
                        {% block component_address_form_additional_field2_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}AdditionalField2\">
                                {{ \"address.additionalField2Label\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.additionalAddressField2Required ? \"general.required\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_form_additional_field2_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"{{ prefix }}AdditionalField2\"
                                   placeholder=\"{{ \"address.additionalField2Placeholder\"|trans|striptags }}\"
                                   name=\"{{ prefix }}[additionalAddressLine2]\"
                                   value=\"{{ data.get('additionalAddressLine2') }}\"
                                    {{ shopware.config.core.loginRegistration.additionalAddressField2Required ? 'required=\"true\"' }}>
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>

        <div class=\"form-row country-and-state-form-elements\" data-country-state-select=\"true\">
            {% block component_address_form_country %}
                <div class=\"form-group col-md-6\">
                    {% if formViolations.getViolations(\"/countryId\") is not empty %}
                        {% set violationPath = \"/countryId\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/countryId\") is not empty %}
                        {% set violationPath = \"/#{prefix}/countryId\" %}
                    {% endif %}

                    {% block component_address_form_country_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressCountry\">
                            {{ \"address.countryLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_country_select %}
                        <select class=\"country-select custom-select{% if violationPath %} is-invalid{% endif %}\"
                                id=\"{{ prefix }}AddressCountry\"
                                name=\"{{ prefix }}[countryId]\"
                                required=\"required\"
                                data-initial-country-id=\"{{ data.get('countryId') }}\">
                            {% if not data.get('countryId') %}
                                <option disabled=\"disabled\"
                                        value=\"\"
                                        selected=\"selected\">
                                    {{ \"address.countryPlaceholder\"|trans|sw_sanitize }}
                                </option>
                            {% endif %}
                            {% for country in page.countries %}
                                <option {% if country.id == data.get('countryId') %}
                                        selected=\"selected\"
                                        {% endif %}
                                        value=\"{{ country.id }}\">
                                    {{ country.translated.name }}
                                </option>
                            {% endfor %}
                        </select>
                    {% endblock %}
                </div>

                <div class=\"form-group col-md-6  d-none\">
                    {% if formViolations.getViolations(\"/countryStateId\") is not empty %}
                        {% set violationPath = \"/countryStateId\" %}
                    {% elseif formViolations.getViolations(\"/#{prefix}/countryStateId\") is not empty %}
                        {% set violationPath = \"/#{prefix}/countryStateId\" %}
                    {% endif %}

                    {% block component_address_form_country_state_label %}
                        <label class=\"form-label\"
                               for=\"{{ prefix }}AddressCountry\">
                            {{ \"address.countryStateLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block component_address_form_country_state_select %}
                        <select class=\"country-state-select custom-select{% if violationPath %} is-invalid{% endif %}\"
                                id=\"{{ prefix }}AddressCountryState\"
                                name=\"{{ prefix }}[countryStateId]\"
                                data-initial-country-state-id=\"{{ data.get('countryStateId') }}\">
                            <option value=\"\"
                                    selected=\"selected\"
                                    data-placeholder-option=\"true\">
                                {{ \"address.countryStatePlaceholder\"|trans|sw_sanitize }}
                            </option>
                        </select>
                    {% endblock %}

                    {% block component_address_form_country_error %}
                        {% if violationPath %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>

        <div class=\"form-row\">
            {% block component_address_form_phone_number %}
                {% if shopware.config.core.loginRegistration.showPhoneNumberField %}
                    <div class=\"form-group col-md-6\">
                        {% if formViolations.getViolations(\"/phoneNumber\") is not empty %}
                            {% set violationPath = \"/phoneNumber\" %}
                        {% elseif formViolations.getViolations(\"/#{prefix}/phoneNumber\") is not empty %}
                            {% set violationPath = \"/#{prefix}/phoneNumber\" %}
                        {% endif %}

                        {% block component_address_form_phone_number_label %}
                            <label class=\"form-label\"
                                   for=\"{{ prefix }}AddressPhoneNumber\">
                                {{ \"address.phoneNumberLabel\"|trans|sw_sanitize }}{{ shopware.config.core.loginRegistration.phoneNumberFieldRequired ? \"general.required\"|trans|sw_sanitize }}
                            </label>
                        {% endblock %}

                        {% block component_address_form_phone_number_input %}
                            <input type=\"text\"
                                   class=\"form-control\"
                                   id=\"{{ prefix }}AddressPhoneNumber\"
                                   placeholder=\"{{ \"address.phoneNumberPlaceholder\"|trans|striptags }}\"
                                   name=\"{{ prefix }}[phoneNumber]\"
                                   value=\"{{ data.get('phoneNumber') }}\"
                                {{ shopware.config.core.loginRegistration.phoneNumberFieldRequired ? 'required=\"true\"' }}>
                        {% endblock %}

                        {% block component_address_form_phone_error %}
                            {% if violationPath %}
                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {#TODO: NEXT-2671 - country states#}
{% endblock %}
", "@Storefront/storefront/component/address/address-form.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/address/address-form.html.twig");
    }
}
