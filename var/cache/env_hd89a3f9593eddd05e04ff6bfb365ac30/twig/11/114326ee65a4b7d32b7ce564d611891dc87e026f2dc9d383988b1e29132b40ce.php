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

/* @Storefront/storefront/component/address/address.html.twig */
class __TwigTemplate_1e031eadc0e52f7f60b6ac78d8189444fd4a850e502ea69f8e5bb3319150b33c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address' => [$this, 'block_component_address'],
            'component_address_company' => [$this, 'block_component_address_company'],
            'component_address_company_name' => [$this, 'block_component_address_company_name'],
            'component_address_company_vat_id' => [$this, 'block_component_address_company_vat_id'],
            'component_address_salutation' => [$this, 'block_component_address_salutation'],
            'component_address_title' => [$this, 'block_component_address_title'],
            'component_address_name' => [$this, 'block_component_address_name'],
            'component_address_street' => [$this, 'block_component_address_street'],
            'component_address_additional_address_line_1' => [$this, 'block_component_address_additional_address_line_1'],
            'component_address_additional_address_line_2' => [$this, 'block_component_address_additional_address_line_2'],
            'component_address_phone_number' => [$this, 'block_component_address_phone_number'],
            'component_address_zipcode_city' => [$this, 'block_component_address_zipcode_city'],
            'component_address_state' => [$this, 'block_component_address_state'],
            'component_address_country' => [$this, 'block_component_address_country'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address.html.twig"));

        // line 1
        $this->displayBlock('component_address', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address"));

        // line 2
        echo "    <div class=\"address\">
        ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "vatId", [], "any", false, false, false, 3))) {
            // line 4
            echo "            ";
            $this->displayBlock('component_address_company', $context, $blocks);
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <p>
            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 21), "salutationKey", [], "any", false, false, false, 21) != "not_specified")) {
            // line 22
            echo "                ";
            $this->displayBlock('component_address_salutation', $context, $blocks);
            // line 25
            echo "            ";
        }
        // line 26
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 26)) {
            // line 27
            echo "                ";
            $this->displayBlock('component_address_title', $context, $blocks);
            // line 30
            echo "            ";
        }
        // line 31
        echo "            ";
        $this->displayBlock('component_address_name', $context, $blocks);
        // line 34
        echo "            ";
        $this->displayBlock('component_address_street', $context, $blocks);
        // line 37
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 37)) {
            // line 38
            echo "                ";
            $this->displayBlock('component_address_additional_address_line_1', $context, $blocks);
            // line 41
            echo "            ";
        }
        // line 42
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 42)) {
            // line 43
            echo "                ";
            $this->displayBlock('component_address_additional_address_line_2', $context, $blocks);
            // line 46
            echo "            ";
        }
        // line 47
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 47)) {
            // line 48
            echo "                ";
            $this->displayBlock('component_address_phone_number', $context, $blocks);
            // line 51
            echo "            ";
        }
        // line 52
        echo "            ";
        $this->displayBlock('component_address_zipcode_city', $context, $blocks);
        // line 59
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 59)) {
            // line 60
            echo "                ";
            $this->displayBlock('component_address_state', $context, $blocks);
            // line 63
            echo "            ";
        }
        // line 64
        echo "            ";
        $this->displayBlock('component_address_country', $context, $blocks);
        // line 67
        echo "        </p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_component_address_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company"));

        // line 5
        echo "                <p>
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 6)) {
            // line 7
            echo "                    ";
            $this->displayBlock('component_address_company_name', $context, $blocks);
            // line 10
            echo "                    <br/>
                ";
        }
        // line 12
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "vatId", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    ";
            $this->displayBlock('component_address_company_vat_id', $context, $blocks);
            // line 16
            echo "                ";
        }
        // line 17
        echo "                </p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_component_address_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company_name"));

        // line 8
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 8), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 8)) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 8), "html", null, true);
        }
        // line 9
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_component_address_company_vat_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company_vat_id"));

        // line 14
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.companyVatLabel"));
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "vatId", [], "any", false, false, false, 14), "html", null, true);
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_component_address_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_salutation"));

        // line 23
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 23), "translated", [], "any", false, false, false, 23), "displayName", [], "any", false, false, false, 23), "html", null, true);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_component_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_title"));

        // line 28
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_component_address_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_name"));

        // line 32
        echo "                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 32), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 32), "html", null, true);
        echo "<br/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_component_address_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_street"));

        // line 35
        echo "                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 35), "html", null, true);
        echo "<br/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_component_address_additional_address_line_1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_1"));

        // line 39
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 39), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_component_address_additional_address_line_2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_2"));

        // line 44
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 44), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_component_address_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_phone_number"));

        // line 49
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 49), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_component_address_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_zipcode_city"));

        // line 53
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 53), "core", [], "any", false, false, false, 53), "address", [], "any", false, false, false, 53), "showZipcodeInFrontOfCity", [], "any", false, false, false, 53)) {
            // line 54
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 54), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 54), "html", null, true);
            echo "<br/>
                ";
        } else {
            // line 56
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 56), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 56), "html", null, true);
            echo "<br/>
                ";
        }
        // line 58
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 60
    public function block_component_address_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_state"));

        // line 61
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 61), "translated", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_component_address_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_country"));

        // line 65
        echo "                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 65), "translated", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  409 => 65,  402 => 64,  392 => 61,  385 => 60,  378 => 58,  370 => 56,  362 => 54,  359 => 53,  352 => 52,  342 => 49,  335 => 48,  325 => 44,  318 => 43,  308 => 39,  301 => 38,  291 => 35,  284 => 34,  272 => 32,  265 => 31,  255 => 28,  248 => 27,  238 => 23,  231 => 22,  219 => 14,  212 => 13,  205 => 9,  198 => 8,  191 => 7,  183 => 17,  180 => 16,  177 => 13,  174 => 12,  170 => 10,  167 => 7,  165 => 6,  162 => 5,  155 => 4,  146 => 67,  143 => 64,  140 => 63,  137 => 60,  134 => 59,  131 => 52,  128 => 51,  125 => 48,  122 => 47,  119 => 46,  116 => 43,  113 => 42,  110 => 41,  107 => 38,  104 => 37,  101 => 34,  98 => 31,  95 => 30,  92 => 27,  89 => 26,  86 => 25,  83 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 4,  70 => 3,  67 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_address %}
    <div class=\"address\">
        {% if address.company or address.vatId %}
            {% block component_address_company %}
                <p>
                {% if address.company %}
                    {% block component_address_company_name %}
                    {{ address.company }}{% if address.department %} - {{ address.department }}{% endif %}
                    {% endblock %}
                    <br/>
                {% endif %}
                {% if address.vatId %}
                    {% block component_address_company_vat_id %}
                        {{ \"address.companyVatLabel\"|trans|sw_sanitize }}: {{ address.vatId }}
                    {% endblock %}
                {% endif %}
                </p>
            {% endblock %}
        {% endif %}
        <p>
            {% if address.salutation.salutationKey != 'not_specified' %}
                {% block component_address_salutation %}
                    {{ address.salutation.translated.displayName }}
                {% endblock %}
            {% endif %}
            {% if address.title %}
                {% block component_address_title %}
                    {{ address.title }}<br/>
                {% endblock %}
            {% endif %}
            {% block component_address_name %}
                {{ address.firstName }} {{ address.lastName }}<br/>
            {% endblock %}
            {% block component_address_street %}
                {{ address.street }}<br/>
            {% endblock %}
            {% if address.additionalAddressLine1 %}
                {% block component_address_additional_address_line_1 %}
                    {{ address.additionalAddressLine1 }}<br/>
                {% endblock %}
            {% endif %}
            {% if address.additionalAddressLine2 %}
                {% block component_address_additional_address_line_2 %}
                    {{ address.additionalAddressLine2 }}<br/>
                {% endblock %}
            {% endif %}
            {% if address.phoneNumber %}
                {% block component_address_phone_number %}
                    {{ address.phoneNumber }}<br/>
                {% endblock %}
            {% endif %}
            {% block component_address_zipcode_city %}
                {% if shopware.config.core.address.showZipcodeInFrontOfCity %}
                    {{ address.zipcode }} {{ address.city }}<br/>
                {% else %}
                    {{ address.zipcode }} {{ address.city }}<br/>
                {% endif %}
            {% endblock %}
            {% if address.countryState %}
                {% block component_address_state %}
                    {{ address.countryState.translated.name }}<br/>
                {% endblock %}
            {% endif %}
            {% block component_address_country %}
                {{ address.country.translated.name }}
            {% endblock %}
        </p>
    </div>
{% endblock %}
", "@Storefront/storefront/component/address/address.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/address/address.html.twig");
    }
}
