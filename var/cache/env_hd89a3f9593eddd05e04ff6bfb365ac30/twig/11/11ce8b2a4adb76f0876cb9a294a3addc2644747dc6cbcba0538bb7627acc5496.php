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

/* @Storefront/storefront/component/account/register.html.twig */
class __TwigTemplate_1c7b9b87e72afdf3081d40af7bff56821c503bbaefb6dd983b139cf72c43c0c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_register' => [$this, 'block_component_account_register'],
            'component_account_register_header' => [$this, 'block_component_account_register_header'],
            'component_account_register_form' => [$this, 'block_component_account_register_form'],
            'component_account_register_form_csrf' => [$this, 'block_component_account_register_form_csrf'],
            'component_account_register_redirect' => [$this, 'block_component_account_register_redirect'],
            'component_account_register_form_action' => [$this, 'block_component_account_register_form_action'],
            'component_account_register_personal' => [$this, 'block_component_account_register_personal'],
            'component_account_register_personal_fields' => [$this, 'block_component_account_register_personal_fields'],
            'component_account_register_personal_address_fields' => [$this, 'block_component_account_register_personal_address_fields'],
            'component_account_register_personal_mail' => [$this, 'block_component_account_register_personal_mail'],
            'component_account_register_personal_mail_label' => [$this, 'block_component_account_register_personal_mail_label'],
            'component_account_register_personal_mail_input' => [$this, 'block_component_account_register_personal_mail_input'],
            'component_account_register_personal_mail_input_error' => [$this, 'block_component_account_register_personal_mail_input_error'],
            'component_account_register_personal_mail_confirmation' => [$this, 'block_component_account_register_personal_mail_confirmation'],
            'component_account_register_personal_mail_confirmation_label' => [$this, 'block_component_account_register_personal_mail_confirmation_label'],
            'component_account_register_personal_mail_confirmation_input' => [$this, 'block_component_account_register_personal_mail_confirmation_input'],
            'component_account_register_personal_mail_confirmation_input_error' => [$this, 'block_component_account_register_personal_mail_confirmation_input_error'],
            'component_account_register_personal_password' => [$this, 'block_component_account_register_personal_password'],
            'component_account_register_personal_password_label' => [$this, 'block_component_account_register_personal_password_label'],
            'component_account_register_personal_password_input' => [$this, 'block_component_account_register_personal_password_input'],
            'component_account_register_personal_password_description' => [$this, 'block_component_account_register_personal_password_description'],
            'component_account_register_personal_password_input_error' => [$this, 'block_component_account_register_personal_password_input_error'],
            'component_account_register_personal_password_confirmation' => [$this, 'block_component_account_register_personal_password_confirmation'],
            'component_account_register_personal_password_confirmation_label' => [$this, 'block_component_account_register_personal_password_confirmation_label'],
            'component_account_register_personal_password_confirmation_input' => [$this, 'block_component_account_register_personal_password_confirmation_input'],
            'component_account_register_personal_password_confirmation_input_error' => [$this, 'block_component_account_register_personal_password_confirmation_input_error'],
            'component_account_register_personal_account_fields' => [$this, 'block_component_account_register_personal_account_fields'],
            'component_account_register_address' => [$this, 'block_component_account_register_address'],
            'component_account_register_address_fields' => [$this, 'block_component_account_register_address_fields'],
            'component_account_register_address_billing' => [$this, 'block_component_account_register_address_billing'],
            'component_account_register_address_billing_header' => [$this, 'block_component_account_register_address_billing_header'],
            'component_account_register_address_billing_fields' => [$this, 'block_component_account_register_address_billing_fields'],
            'component_account_register_address_different_shipping' => [$this, 'block_component_account_register_address_different_shipping'],
            'component_account_register_address_different_shipping_control' => [$this, 'block_component_account_register_address_different_shipping_control'],
            'component_account_register_address_different_shipping_input' => [$this, 'block_component_account_register_address_different_shipping_input'],
            'component_account_register_address_different_shipping_label' => [$this, 'block_component_account_register_address_different_shipping_label'],
            'component_account_register_address_shipping' => [$this, 'block_component_account_register_address_shipping'],
            'component_account_register_address_shipping_header' => [$this, 'block_component_account_register_address_shipping_header'],
            'component_account_register_address_shipping_fields' => [$this, 'block_component_account_register_address_shipping_fields'],
            'component_account_register_address_shipping_fields_personal' => [$this, 'block_component_account_register_address_shipping_fields_personal'],
            'component_account_register_address_shipping_fields_address' => [$this, 'block_component_account_register_address_shipping_fields_address'],
            'component_account_register_captcha' => [$this, 'block_component_account_register_captcha'],
            'component_account_register_privacy' => [$this, 'block_component_account_register_privacy'],
            'component_account_register_required_fields' => [$this, 'block_component_account_register_required_fields'],
            'component_account_register_submit' => [$this, 'block_component_account_register_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/register.html.twig"));

        // line 1
        $this->displayBlock('component_account_register', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_account_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register"));

        // line 2
        echo "    <div class=\"card register-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_register_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_register_form', $context, $blocks);
        // line 347
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_component_account_register_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_header"));

        // line 5
        echo "                ";
        if (($context["cardTitle"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-title\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["cardTitle"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_component_account_register_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form"));

        // line 13
        echo "                <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.register.save");
        echo "\"
                      class=\"register-form\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 19
        $this->displayBlock('component_account_register_form_csrf', $context, $blocks);
        // line 22
        echo "
                    ";
        // line 23
        $this->displayBlock('component_account_register_redirect', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_account_register_form_action', $context, $blocks);
        // line 42
        echo "
                    ";
        // line 43
        $this->displayBlock('component_account_register_personal', $context, $blocks);
        // line 243
        echo "
                    ";
        // line 244
        $this->displayBlock('component_account_register_address', $context, $blocks);
        // line 322
        echo "
                    ";
        // line 323
        $this->displayBlock('component_account_register_captcha', $context, $blocks);
        // line 326
        echo "
                    ";
        // line 327
        $this->displayBlock('component_account_register_privacy', $context, $blocks);
        // line 330
        echo "
                    ";
        // line 331
        $this->displayBlock('component_account_register_required_fields', $context, $blocks);
        // line 336
        echo "
                    ";
        // line 337
        $this->displayBlock('component_account_register_submit', $context, $blocks);
        // line 345
        echo "                </form>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_component_account_register_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_csrf"));

        // line 20
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.register.save");
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_component_account_register_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_redirect"));

        // line 24
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["redirectTo"] ?? null), "html", null, true);
        echo "\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["redirectParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_component_account_register_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_form_action"));

        // line 34
        echo "                        <input type=\"hidden\"
                               name=\"errorRoute\"
                               value=\"frontend.account.register.page\"/>

                        <input type=\"hidden\"
                               name=\"errorParameters\"
                               value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["errorParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_component_account_register_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal"));

        // line 44
        echo "                        <div class=\"register-personal\">
                            ";
        // line 45
        $this->displayBlock('component_account_register_personal_fields', $context, $blocks);
        // line 241
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_component_account_register_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_fields"));

        // line 46
        echo "                                ";
        $this->displayBlock('component_account_register_personal_address_fields', $context, $blocks);
        // line 52
        echo "
                                ";
        // line 53
        ob_start();
        // line 54
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_mail', $context, $blocks);
        // line 84
        echo "                                ";
        $context["formGroupMail"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
                                ";
        // line 86
        ob_start();
        // line 87
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_mail_confirmation', $context, $blocks);
        // line 122
        echo "                                ";
        $context["formGroupMailConfirmation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo "
                                ";
        // line 124
        ob_start();
        // line 125
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_password', $context, $blocks);
        // line 174
        echo "                                ";
        $context["formGroupPassword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        echo "
                                ";
        // line 176
        ob_start();
        // line 177
        echo "                                    ";
        $this->displayBlock('component_account_register_personal_password_confirmation', $context, $blocks);
        // line 214
        echo "                                ";
        $context["formGroupPasswordConfirmation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 215
        echo "
                                ";
        // line 216
        $this->displayBlock('component_account_register_personal_account_fields', $context, $blocks);
        // line 240
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_component_account_register_personal_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_address_fields"));

        // line 47
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/account/register.html.twig", 47)->display(twig_array_merge($context, ["showBirthdayField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["shopware"] ?? null), "config", [], "any", false, false, false, 48), "core", [], "any", false, false, false, 48), "loginRegistration", [], "any", false, false, false, 48), "showBirthdayField", [], "any", false, false, false, 48), "accountType" => twig_get_attribute($this->env, $this->source,         // line 49
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 49)]));
        // line 51
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_component_account_register_personal_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail"));

        // line 55
        echo "                                        ";
        $this->displayBlock('component_account_register_personal_mail_label', $context, $blocks);
        // line 61
        echo "
                                        ";
        // line 62
        $this->displayBlock('component_account_register_personal_mail_input', $context, $blocks);
        // line 75
        echo "
                                        ";
        // line 76
        $this->displayBlock('component_account_register_personal_mail_input_error', $context, $blocks);
        // line 83
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_component_account_register_personal_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_label"));

        // line 56
        echo "                                            <label class=\"form-label\"
                                                   for=\"personalMail\">
                                                ";
        // line 58
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                            </label>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_component_account_register_personal_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_input"));

        // line 63
        echo "                                            <input type=\"email\"
                                                   class=\"form-control";
        // line 64
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 64))) {
            echo " is-invalid";
        }
        echo "\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMail\"
                                                   placeholder=\"";
        // line 67
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"email\"
                                                   value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "email"], "method", false, false, false, 69), "html", null, true);
        echo "\"
                                                   ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 70), "core", [], "any", false, false, false, 70), "loginRegistration", [], "any", false, false, false, 70), "requireEmailConfirmation", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                                   data-form-validation-equal=\"personalMail\"
                                                   ";
        }
        // line 73
        echo "                                                   required=\"required\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_component_account_register_personal_mail_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_input_error"));

        // line 77
        echo "                                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 77))) {
            // line 78
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 78)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 81
            echo "                                            ";
        }
        // line 82
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_component_account_register_personal_mail_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation"));

        // line 88
        echo "                                        ";
        $this->displayBlock('component_account_register_personal_mail_confirmation_label', $context, $blocks);
        // line 94
        echo "
                                        ";
        // line 95
        $this->displayBlock('component_account_register_personal_mail_confirmation_input', $context, $blocks);
        // line 107
        echo "
                                        ";
        // line 108
        $this->displayBlock('component_account_register_personal_mail_confirmation_input_error', $context, $blocks);
        // line 121
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 88
    public function block_component_account_register_personal_mail_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_label"));

        // line 89
        echo "                                            <label class=\"form-label\"
                                                   for=\"personalMailConfirmation\">
                                                ";
        // line 91
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                            </label>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_component_account_register_personal_mail_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_input"));

        // line 96
        echo "                                            <input type=\"email\"
                                                   class=\"form-control";
        // line 97
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 97)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/emailConfirmation"], "method", false, false, false, 97)))) {
            echo " is-invalid";
        }
        echo "\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMailConfirmation\"
                                                   placeholder=\"";
        // line 100
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationPlaceholder")), "html", null, true);
        echo "\"
                                                   name=\"emailConfirmation\"
                                                   value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "emailConfirmation"], "method", false, false, false, 102), "html", null, true);
        echo "\"
                                                   data-form-validation-equal=\"personalMail\"
                                                   data-form-validation-equal-message=\"";
        // line 104
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationInvalidMessage")), "html", null, true);
        echo "\"
                                                   required=\"required\">
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_component_account_register_personal_mail_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_mail_confirmation_input_error"));

        // line 109
        echo "                                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 109))) {
            // line 110
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 110)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 113
            echo "                                            ";
        }
        // line 114
        echo "
                                            ";
        // line 115
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/emailConfirmation"], "method", false, false, false, 115))) {
            // line 116
            echo "                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 116)->display(twig_array_merge($context, ["violationPath" => "/emailConfirmation"]));
            // line 119
            echo "                                            ";
        }
        // line 120
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_component_account_register_personal_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password"));

        // line 126
        echo "                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            ";
        // line 127
        $this->displayBlock('component_account_register_personal_password_label', $context, $blocks);
        // line 133
        echo "
                                            ";
        // line 134
        $this->displayBlock('component_account_register_personal_password_input', $context, $blocks);
        // line 153
        echo "
                                            ";
        // line 154
        $this->displayBlock('component_account_register_personal_password_description', $context, $blocks);
        // line 164
        echo "
                                            ";
        // line 165
        $this->displayBlock('component_account_register_personal_password_input_error', $context, $blocks);
        // line 172
        echo "                                        </span>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_component_account_register_personal_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_label"));

        // line 128
        echo "                                                <label class=\"form-label\"
                                                       for=\"personalPassword\">
                                                    ";
        // line 130
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                </label>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_component_account_register_personal_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_input"));

        // line 135
        echo "                                                <input type=\"password\"
                                                       class=\"form-control";
        // line 136
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 136))) {
            echo " is-invalid";
        }
        echo "\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPassword\"
                                                       placeholder=\"";
        // line 139
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordPlaceholder")), "html", null, true);
        echo "\"
                                                       name=\"password\"
                                                       minlength=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 141), "core", [], "any", false, false, false, 141), "loginRegistration", [], "any", false, false, false, 141), "passwordMinLength", [], "any", false, false, false, 141), "html", null, true);
        echo "\"
                                                       ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 142), "core", [], "any", false, false, false, 142), "loginRegistration", [], "any", false, false, false, 142), "requirePasswordConfirmation", [], "any", false, false, false, 142)) {
            // line 143
            echo "                                                       data-form-validation-equal=\"newPassword\"
                                                       ";
        }
        // line 145
        echo "                                                       ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 145), "core", [], "any", false, false, false, 145), "loginRegistration", [], "any", false, false, false, 145), "passwordMinLength", [], "any", false, false, false, 145) != 0)) {
            // line 146
            echo "                                                       data-form-validation-length=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 146), "core", [], "any", false, false, false, 146), "loginRegistration", [], "any", false, false, false, 146), "passwordMinLength", [], "any", false, false, false, 146), "html", null, true);
            echo "\"
                                                       data-form-validation-length-message=\" ";
            // line 147
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 148
($context["shopware"] ?? null), "config", [], "any", false, false, false, 148), "core", [], "any", false, false, false, 148), "loginRegistration", [], "any", false, false, false, 148), "passwordMinLength", [], "any", false, false, false, 148)]));
            // line 149
            echo "\"
                                                       ";
        }
        // line 151
        echo "                                                       required=\"required\">
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 154
    public function block_component_account_register_personal_password_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_description"));

        // line 155
        echo "                                                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 155), "core", [], "any", false, false, false, 155), "loginRegistration", [], "any", false, false, false, 155), "passwordMinLength", [], "any", false, false, false, 155) != 0)) {
            // line 156
            echo "                                                    <small class=\"form-text js-validation-message\"
                                                           data-form-validation-length-text=\"true\">
                                                        ";
            // line 158
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 159
($context["shopware"] ?? null), "config", [], "any", false, false, false, 159), "core", [], "any", false, false, false, 159), "loginRegistration", [], "any", false, false, false, 159), "passwordMinLength", [], "any", false, false, false, 159)]));
            // line 160
            echo "
                                                    </small>
                                                ";
        }
        // line 163
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 165
    public function block_component_account_register_personal_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_input_error"));

        // line 166
        echo "                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 166))) {
            // line 167
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 167)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 170
            echo "                                                ";
        }
        // line 171
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_component_account_register_personal_password_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation"));

        // line 178
        echo "                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            ";
        // line 179
        $this->displayBlock('component_account_register_personal_password_confirmation_label', $context, $blocks);
        // line 185
        echo "
                                            ";
        // line 186
        $this->displayBlock('component_account_register_personal_password_confirmation_input', $context, $blocks);
        // line 198
        echo "
                                            ";
        // line 199
        $this->displayBlock('component_account_register_personal_password_confirmation_input_error', $context, $blocks);
        // line 212
        echo "                                        </span>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 179
    public function block_component_account_register_personal_password_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_label"));

        // line 180
        echo "                                                <label class=\"form-label\"
                                                       for=\"personalPasswordConfirmation\">
                                                    ";
        // line 182
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                </label>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 186
    public function block_component_account_register_personal_password_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_input"));

        // line 187
        echo "                                                <input type=\"password\"
                                                       class=\"form-control";
        // line 188
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 188)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/passwordConfirmation"], "method", false, false, false, 188)))) {
            echo " is-invalid";
        }
        echo "\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPasswordConfirmation\"
                                                       placeholder=\"";
        // line 191
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationPlaceholder")), "html", null, true);
        echo "\"
                                                       name=\"passwordConfirmation\"
                                                       minlength=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 193), "core", [], "any", false, false, false, 193), "loginRegistration", [], "any", false, false, false, 193), "passwordMinLength", [], "any", false, false, false, 193), "html", null, true);
        echo "\"
                                                       data-form-validation-equal=\"newPassword\"
                                                       data-form-validation-equal-message=\"";
        // line 195
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationInvalidMessage")), "html", null, true);
        echo "\"
                                                       required=\"required\">
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 199
    public function block_component_account_register_personal_password_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_password_confirmation_input_error"));

        // line 200
        echo "                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 200))) {
            // line 201
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 201)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 204
            echo "                                                ";
        }
        // line 205
        echo "
                                                ";
        // line 206
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/passwordConfirmation"], "method", false, false, false, 206))) {
            // line 207
            echo "                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/component/account/register.html.twig", 207)->display(twig_array_merge($context, ["violationPath" => "/passwordConfirmation"]));
            // line 210
            echo "                                                ";
        }
        // line 211
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 216
    public function block_component_account_register_personal_account_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_personal_account_fields"));

        // line 217
        echo "                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 219
        echo twig_escape_filter($this->env, ($context["formGroupMail"] ?? null), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 222), "core", [], "any", false, false, false, 222), "loginRegistration", [], "any", false, false, false, 222), "requireEmailConfirmation", [], "any", false, false, false, 222)) {
            // line 223
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupMailConfirmation"] ?? null), "html", null, true);
            echo "
                                            ";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 224
($context["shopware"] ?? null), "config", [], "any", false, false, false, 224), "core", [], "any", false, false, false, 224), "loginRegistration", [], "any", false, false, false, 224), "requirePasswordConfirmation", [], "any", false, false, false, 224)) {
            // line 225
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupPassword"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 227
        echo "                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 229
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 229), "core", [], "any", false, false, false, 229), "loginRegistration", [], "any", false, false, false, 229), "requireEmailConfirmation", [], "any", false, false, false, 229) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 229), "core", [], "any", false, false, false, 229), "loginRegistration", [], "any", false, false, false, 229), "requirePasswordConfirmation", [], "any", false, false, false, 229))) {
            // line 230
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupPassword"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 232
        echo "                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            ";
        // line 234
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 234), "core", [], "any", false, false, false, 234), "loginRegistration", [], "any", false, false, false, 234), "requirePasswordConfirmation", [], "any", false, false, false, 234)) {
            // line 235
            echo "                                                ";
            echo twig_escape_filter($this->env, ($context["formGroupPasswordConfirmation"] ?? null), "html", null, true);
            echo "
                                            ";
        }
        // line 237
        echo "                                        </div>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 244
    public function block_component_account_register_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address"));

        // line 245
        echo "                        <div class=\"register-address\">
                            ";
        // line 246
        $this->displayBlock('component_account_register_address_fields', $context, $blocks);
        // line 320
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 246
    public function block_component_account_register_address_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_fields"));

        // line 247
        echo "                                ";
        $this->displayBlock('component_account_register_address_billing', $context, $blocks);
        // line 264
        echo "
                                ";
        // line 265
        $this->displayBlock('component_account_register_address_different_shipping', $context, $blocks);
        // line 319
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 247
    public function block_component_account_register_address_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing"));

        // line 248
        echo "                                    <div class=\"register-billing\">
                                        ";
        // line 249
        $this->displayBlock('component_account_register_address_billing_header', $context, $blocks);
        // line 254
        echo "
                                        ";
        // line 255
        $this->displayBlock('component_account_register_address_billing_fields', $context, $blocks);
        // line 262
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 249
    public function block_component_account_register_address_billing_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing_header"));

        // line 250
        echo "                                            <div class=\"card-title\">
                                                ";
        // line 251
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAddressBillingHeader"));
        echo "
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 255
    public function block_component_account_register_address_billing_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_billing_fields"));

        // line 256
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/account/register.html.twig", 256)->display(twig_array_merge($context, ["prefix" => "billingAddress", "data" => twig_get_attribute($this->env, $this->source,         // line 258
($context["data"] ?? null), "get", [0 => "billingAddress"], "method", false, false, false, 258), "hasSelectedBusiness" => (twig_get_attribute($this->env, $this->source,         // line 259
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 259) == twig_constant("Shopware\\Core\\Checkout\\Customer\\CustomerEntity::ACCOUNT_TYPE_BUSINESS"))]));
        // line 261
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 265
    public function block_component_account_register_address_different_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping"));

        // line 266
        echo "                                    <div>
                                        ";
        // line 267
        $this->displayBlock('component_account_register_address_different_shipping_control', $context, $blocks);
        // line 289
        echo "
                                        ";
        // line 290
        $this->displayBlock('component_account_register_address_shipping', $context, $blocks);
        // line 317
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 267
    public function block_component_account_register_address_different_shipping_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_control"));

        // line 268
        echo "                                            <div class=\"custom-control custom-checkbox register-different-shipping\">
                                                ";
        // line 269
        $this->displayBlock('component_account_register_address_different_shipping_input', $context, $blocks);
        // line 280
        echo "
                                                ";
        // line 281
        $this->displayBlock('component_account_register_address_different_shipping_label', $context, $blocks);
        // line 287
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 269
    public function block_component_account_register_address_different_shipping_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_input"));

        // line 270
        echo "                                                    <input type=\"checkbox\"
                                                           class=\"custom-control-input js-different-shipping-checkbox\"
                                                           name=\"differentShippingAddress\"
                                                           value=\"1\"
                                                           id=\"differentShippingAddress\"
                                                           ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "differentShippingAddress"], "method", false, false, false, 275)) {
            echo "checked=\"checked\"";
        }
        // line 276
        echo "                                                           data-form-field-toggle=\"true\"
                                                           data-form-field-toggle-target=\".js-form-field-toggle-shipping-address\"
                                                           data-form-field-toggle-value=\"true\">
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 281
    public function block_component_account_register_address_different_shipping_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_different_shipping_label"));

        // line 282
        echo "                                                    <label class=\"custom-control-label no-validation\"
                                                           for=\"differentShippingAddress\">
                                                        ";
        // line 284
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerDifferentShipping"));
        echo "
                                                    </label>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 290
    public function block_component_account_register_address_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping"));

        // line 291
        echo "                                            <div class=\"register-shipping js-form-field-toggle-shipping-address d-none\">
                                                ";
        // line 292
        $this->displayBlock('component_account_register_address_shipping_header', $context, $blocks);
        // line 297
        echo "
                                                ";
        // line 298
        $this->displayBlock('component_account_register_address_shipping_fields', $context, $blocks);
        // line 315
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 292
    public function block_component_account_register_address_shipping_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_header"));

        // line 293
        echo "                                                    <div class=\"card-title\">
                                                        ";
        // line 294
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerAddressShippingHeader"));
        echo "
                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 298
    public function block_component_account_register_address_shipping_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields"));

        // line 299
        echo "                                                    ";
        $this->displayBlock('component_account_register_address_shipping_fields_personal', $context, $blocks);
        // line 307
        echo "
                                                    ";
        // line 308
        $this->displayBlock('component_account_register_address_shipping_fields_address', $context, $blocks);
        // line 314
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 299
    public function block_component_account_register_address_shipping_fields_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields_personal"));

        // line 300
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-personal.html.twig", "@Storefront/storefront/component/account/register.html.twig", 300)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "data" => twig_get_attribute($this->env, $this->source,         // line 302
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 302), "hideCustomerTypeSelect" => true, "accountType" => twig_get_attribute($this->env, $this->source,         // line 304
($context["data"] ?? null), "get", [0 => "accountType"], "method", false, false, false, 304)]));
        // line 306
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 308
    public function block_component_account_register_address_shipping_fields_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_address_shipping_fields_address"));

        // line 309
        echo "                                                        ";
        $this->loadTemplate("@Storefront/storefront/component/address/address-form.html.twig", "@Storefront/storefront/component/account/register.html.twig", 309)->display(twig_array_merge($context, ["prefix" => "shippingAddress", "data" => twig_get_attribute($this->env, $this->source,         // line 311
($context["data"] ?? null), "get", [0 => "shippingAddress"], "method", false, false, false, 311)]));
        // line 313
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 323
    public function block_component_account_register_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_captcha"));

        // line 324
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@Storefront/storefront/component/account/register.html.twig", 324)->display(twig_array_merge($context, ["captchas" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 324), "core", [], "any", false, false, false, 324), "basicInformation", [], "any", false, false, false, 324), "activeCaptchas", [], "any", false, false, false, 324)]));
        // line 325
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 327
    public function block_component_account_register_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_privacy"));

        // line 328
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/privacy-notice.html.twig", "@Storefront/storefront/component/account/register.html.twig", 328)->display($context);
        // line 329
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 331
    public function block_component_account_register_required_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_required_fields"));

        // line 332
        echo "                        <p class=\"register-required-info\">
                            ";
        // line 333
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                        </p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 337
    public function block_component_account_register_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_register_submit"));

        // line 338
        echo "                        <div class=\"register-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-lg\">
                                ";
        // line 341
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.registerSubmit"));
        echo "
                            </button>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1347 => 341,  1342 => 338,  1335 => 337,  1325 => 333,  1322 => 332,  1315 => 331,  1308 => 329,  1305 => 328,  1298 => 327,  1291 => 325,  1288 => 324,  1281 => 323,  1274 => 313,  1272 => 311,  1270 => 309,  1263 => 308,  1256 => 306,  1254 => 304,  1253 => 302,  1251 => 300,  1244 => 299,  1237 => 314,  1235 => 308,  1232 => 307,  1229 => 299,  1222 => 298,  1212 => 294,  1209 => 293,  1202 => 292,  1194 => 315,  1192 => 298,  1189 => 297,  1187 => 292,  1184 => 291,  1177 => 290,  1167 => 284,  1163 => 282,  1156 => 281,  1146 => 276,  1142 => 275,  1135 => 270,  1128 => 269,  1120 => 287,  1118 => 281,  1115 => 280,  1113 => 269,  1110 => 268,  1103 => 267,  1095 => 317,  1093 => 290,  1090 => 289,  1088 => 267,  1085 => 266,  1078 => 265,  1071 => 261,  1069 => 259,  1068 => 258,  1066 => 256,  1059 => 255,  1049 => 251,  1046 => 250,  1039 => 249,  1031 => 262,  1029 => 255,  1026 => 254,  1024 => 249,  1021 => 248,  1014 => 247,  1007 => 319,  1005 => 265,  1002 => 264,  999 => 247,  992 => 246,  984 => 320,  982 => 246,  979 => 245,  972 => 244,  963 => 237,  957 => 235,  955 => 234,  951 => 232,  945 => 230,  943 => 229,  939 => 227,  933 => 225,  931 => 224,  926 => 223,  924 => 222,  918 => 219,  914 => 217,  907 => 216,  900 => 211,  897 => 210,  894 => 207,  892 => 206,  889 => 205,  886 => 204,  883 => 201,  880 => 200,  873 => 199,  863 => 195,  858 => 193,  853 => 191,  845 => 188,  842 => 187,  835 => 186,  824 => 182,  820 => 180,  813 => 179,  805 => 212,  803 => 199,  800 => 198,  798 => 186,  795 => 185,  793 => 179,  790 => 178,  783 => 177,  776 => 171,  773 => 170,  770 => 167,  767 => 166,  760 => 165,  753 => 163,  748 => 160,  746 => 159,  745 => 158,  741 => 156,  738 => 155,  731 => 154,  723 => 151,  719 => 149,  717 => 148,  716 => 147,  711 => 146,  708 => 145,  704 => 143,  702 => 142,  698 => 141,  693 => 139,  685 => 136,  682 => 135,  675 => 134,  664 => 130,  660 => 128,  653 => 127,  645 => 172,  643 => 165,  640 => 164,  638 => 154,  635 => 153,  633 => 134,  630 => 133,  628 => 127,  625 => 126,  618 => 125,  611 => 120,  608 => 119,  605 => 116,  603 => 115,  600 => 114,  597 => 113,  594 => 110,  591 => 109,  584 => 108,  574 => 104,  569 => 102,  564 => 100,  556 => 97,  553 => 96,  546 => 95,  535 => 91,  531 => 89,  524 => 88,  517 => 121,  515 => 108,  512 => 107,  510 => 95,  507 => 94,  504 => 88,  497 => 87,  490 => 82,  487 => 81,  484 => 78,  481 => 77,  474 => 76,  466 => 73,  462 => 71,  460 => 70,  456 => 69,  451 => 67,  443 => 64,  440 => 63,  433 => 62,  422 => 58,  418 => 56,  411 => 55,  404 => 83,  402 => 76,  399 => 75,  397 => 62,  394 => 61,  391 => 55,  384 => 54,  377 => 51,  375 => 49,  374 => 48,  372 => 47,  365 => 46,  358 => 240,  356 => 216,  353 => 215,  350 => 214,  347 => 177,  345 => 176,  342 => 175,  339 => 174,  336 => 125,  334 => 124,  331 => 123,  328 => 122,  325 => 87,  323 => 86,  320 => 85,  317 => 84,  314 => 54,  312 => 53,  309 => 52,  306 => 46,  299 => 45,  291 => 241,  289 => 45,  286 => 44,  279 => 43,  270 => 40,  262 => 34,  255 => 33,  246 => 30,  239 => 26,  235 => 24,  228 => 23,  218 => 20,  211 => 19,  203 => 345,  201 => 337,  198 => 336,  196 => 331,  193 => 330,  191 => 327,  188 => 326,  186 => 323,  183 => 322,  181 => 244,  178 => 243,  176 => 43,  173 => 42,  171 => 33,  168 => 32,  166 => 23,  163 => 22,  161 => 19,  151 => 13,  144 => 12,  137 => 10,  131 => 7,  128 => 6,  125 => 5,  118 => 4,  109 => 347,  107 => 12,  104 => 11,  102 => 4,  98 => 2,  85 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_account_register %}
    <div class=\"card register-card\">
        <div class=\"card-body\">
            {% block component_account_register_header %}
                {% if cardTitle %}
                    <div class=\"card-title\">
                        {{ cardTitle }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_account_register_form %}
                <form action=\"{{ path('frontend.account.register.save') }}\"
                      class=\"register-form\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    {% block component_account_register_form_csrf %}
                        {{ sw_csrf('frontend.account.register.save') }}
                    {% endblock %}

                    {% block component_account_register_redirect %}
                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"{{ redirectTo }}\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"{{ redirectParameters }}\">
                    {% endblock %}

                    {% block component_account_register_form_action %}
                        <input type=\"hidden\"
                               name=\"errorRoute\"
                               value=\"frontend.account.register.page\"/>

                        <input type=\"hidden\"
                               name=\"errorParameters\"
                               value=\"{{ errorParameters }}\">
                    {% endblock %}

                    {% block component_account_register_personal %}
                        <div class=\"register-personal\">
                            {% block component_account_register_personal_fields %}
                                {% block component_account_register_personal_address_fields %}
                                    {% sw_include '@Storefront/storefront/component/address/address-personal.html.twig' with {
                                        'showBirthdayField': shopware.config.core.loginRegistration.showBirthdayField,
                                        'accountType': data.get('accountType')
                                    } %}
                                {% endblock %}

                                {% set formGroupMail %}
                                    {% block component_account_register_personal_mail %}
                                        {% block component_account_register_personal_mail_label %}
                                            <label class=\"form-label\"
                                                   for=\"personalMail\">
                                                {{ \"account.personalMailLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                            </label>
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_input %}
                                            <input type=\"email\"
                                                   class=\"form-control{% if formViolations.getViolations('/email') is not empty %} is-invalid{% endif %}\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMail\"
                                                   placeholder=\"{{ \"account.personalMailPlaceholder\"|trans|striptags }}\"
                                                   name=\"email\"
                                                   value=\"{{ data.get('email') }}\"
                                                   {% if shopware.config.core.loginRegistration.requireEmailConfirmation %}
                                                   data-form-validation-equal=\"personalMail\"
                                                   {% endif %}
                                                   required=\"required\">
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_input_error %}
                                            {% if formViolations.getViolations('/email') is not empty %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                    violationPath: '/email'
                                                } %}
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}
                                {% endset %}

                                {% set formGroupMailConfirmation %}
                                    {% block component_account_register_personal_mail_confirmation %}
                                        {% block component_account_register_personal_mail_confirmation_label %}
                                            <label class=\"form-label\"
                                                   for=\"personalMailConfirmation\">
                                                {{ \"account.personalMailConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                            </label>
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_confirmation_input %}
                                            <input type=\"email\"
                                                   class=\"form-control{% if formViolations.getViolations('/email') is not empty or formViolations.getViolations('/emailConfirmation') is not empty %} is-invalid{% endif %}\"
                                                   autocomplete=\"section-personal email\"
                                                   id=\"personalMailConfirmation\"
                                                   placeholder=\"{{ \"account.personalMailConfirmationPlaceholder\"|trans|striptags }}\"
                                                   name=\"emailConfirmation\"
                                                   value=\"{{ data.get('emailConfirmation') }}\"
                                                   data-form-validation-equal=\"personalMail\"
                                                   data-form-validation-equal-message=\"{{ \"account.personalMailConfirmationInvalidMessage\"|trans|striptags }}\"
                                                   required=\"required\">
                                        {% endblock %}

                                        {% block component_account_register_personal_mail_confirmation_input_error %}
                                            {% if formViolations.getViolations('/email') is not empty %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                    violationPath: '/email'
                                                } %}
                                            {% endif %}

                                            {% if formViolations.getViolations('/emailConfirmation') is not empty %}
                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                    violationPath: '/emailConfirmation'
                                                } %}
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}
                                {% endset %}

                                {% set formGroupPassword %}
                                    {% block component_account_register_personal_password %}
                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            {% block component_account_register_personal_password_label %}
                                                <label class=\"form-label\"
                                                       for=\"personalPassword\">
                                                    {{ \"account.personalPasswordLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                </label>
                                            {% endblock %}

                                            {% block component_account_register_personal_password_input %}
                                                <input type=\"password\"
                                                       class=\"form-control{% if formViolations.getViolations('/password') is not empty %} is-invalid{% endif %}\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPassword\"
                                                       placeholder=\"{{ \"account.personalPasswordPlaceholder\"|trans|striptags }}\"
                                                       name=\"password\"
                                                       minlength=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                       {% if shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                       data-form-validation-equal=\"newPassword\"
                                                       {% endif %}
                                                       {% if shopware.config.core.loginRegistration.passwordMinLength != 0 %}
                                                       data-form-validation-length=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                       data-form-validation-length-message=\" {{ \"account.personalPasswordDescription\"|trans({
                                                           '%minLength%': shopware.config.core.loginRegistration.passwordMinLength
                                                       })|sw_sanitize }}\"
                                                       {% endif %}
                                                       required=\"required\">
                                            {% endblock %}

                                            {% block component_account_register_personal_password_description %}
                                                {% if shopware.config.core.loginRegistration.passwordMinLength != 0 %}
                                                    <small class=\"form-text js-validation-message\"
                                                           data-form-validation-length-text=\"true\">
                                                        {{ \"account.personalPasswordDescription\"|trans({
                                                            '%minLength%': shopware.config.core.loginRegistration.passwordMinLength
                                                        })|sw_sanitize }}
                                                    </small>
                                                {% endif %}
                                            {% endblock %}

                                            {% block component_account_register_personal_password_input_error %}
                                                {% if formViolations.getViolations('/password') is not empty %}
                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                        violationPath: '/password'
                                                    } %}
                                                {% endif %}
                                            {% endblock %}
                                        </span>
                                    {% endblock %}
                                {% endset %}

                                {% set formGroupPasswordConfirmation %}
                                    {% block component_account_register_personal_password_confirmation %}
                                        <span class=\"js-form-field-toggle-guest-mode\">
                                            {% block component_account_register_personal_password_confirmation_label %}
                                                <label class=\"form-label\"
                                                       for=\"personalPasswordConfirmation\">
                                                    {{ \"account.personalPasswordConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                </label>
                                            {% endblock %}

                                            {% block component_account_register_personal_password_confirmation_input %}
                                                <input type=\"password\"
                                                       class=\"form-control{% if formViolations.getViolations('/password') is not empty or formViolations.getViolations('/passwordConfirmation') is not empty %} is-invalid{% endif %}\"
                                                       autocomplete=\"new-password\"
                                                       id=\"personalPasswordConfirmation\"
                                                       placeholder=\"{{ \"account.personalPasswordConfirmationPlaceholder\"|trans|striptags }}\"
                                                       name=\"passwordConfirmation\"
                                                       minlength=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                       data-form-validation-equal=\"newPassword\"
                                                       data-form-validation-equal-message=\"{{ \"account.personalPasswordConfirmationInvalidMessage\"|trans|striptags }}\"
                                                       required=\"required\">
                                            {% endblock %}

                                            {% block component_account_register_personal_password_confirmation_input_error %}
                                                {% if formViolations.getViolations('/password') is not empty %}
                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                        violationPath: '/password'
                                                    } %}
                                                {% endif %}

                                                {% if formViolations.getViolations('/passwordConfirmation') is not empty %}
                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                        violationPath: '/passwordConfirmation'
                                                    } %}
                                                {% endif %}
                                            {% endblock %}
                                        </span>
                                    {% endblock %}
                                {% endset %}

                                {% block component_account_register_personal_account_fields %}
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-sm-6\">
                                            {{ formGroupMail }}
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            {% if shopware.config.core.loginRegistration.requireEmailConfirmation %}
                                                {{ formGroupMailConfirmation }}
                                            {% elseif not shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                {{ formGroupPassword }}
                                            {% endif %}
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            {% if shopware.config.core.loginRegistration.requireEmailConfirmation or shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                {{ formGroupPassword }}
                                            {% endif %}
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            {% if shopware.config.core.loginRegistration.requirePasswordConfirmation %}
                                                {{ formGroupPasswordConfirmation }}
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endblock %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_register_address %}
                        <div class=\"register-address\">
                            {% block component_account_register_address_fields %}
                                {% block component_account_register_address_billing %}
                                    <div class=\"register-billing\">
                                        {% block component_account_register_address_billing_header %}
                                            <div class=\"card-title\">
                                                {{ \"account.registerAddressBillingHeader\"|trans|sw_sanitize }}
                                            </div>
                                        {% endblock %}

                                        {% block component_account_register_address_billing_fields %}
                                            {% sw_include '@Storefront/storefront/component/address/address-form.html.twig' with {
                                                'prefix': 'billingAddress',
                                                'data': data.get('billingAddress'),
                                                'hasSelectedBusiness': data.get('accountType') == constant('Shopware\\\\Core\\\\Checkout\\\\Customer\\\\CustomerEntity::ACCOUNT_TYPE_BUSINESS')
                                            } %}
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block component_account_register_address_different_shipping %}
                                    <div>
                                        {% block component_account_register_address_different_shipping_control %}
                                            <div class=\"custom-control custom-checkbox register-different-shipping\">
                                                {% block component_account_register_address_different_shipping_input %}
                                                    <input type=\"checkbox\"
                                                           class=\"custom-control-input js-different-shipping-checkbox\"
                                                           name=\"differentShippingAddress\"
                                                           value=\"1\"
                                                           id=\"differentShippingAddress\"
                                                           {% if data.get('differentShippingAddress') %}checked=\"checked\"{% endif %}
                                                           data-form-field-toggle=\"true\"
                                                           data-form-field-toggle-target=\".js-form-field-toggle-shipping-address\"
                                                           data-form-field-toggle-value=\"true\">
                                                {% endblock %}

                                                {% block component_account_register_address_different_shipping_label %}
                                                    <label class=\"custom-control-label no-validation\"
                                                           for=\"differentShippingAddress\">
                                                        {{ \"account.registerDifferentShipping\"|trans|sw_sanitize }}
                                                    </label>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block component_account_register_address_shipping %}
                                            <div class=\"register-shipping js-form-field-toggle-shipping-address d-none\">
                                                {% block component_account_register_address_shipping_header %}
                                                    <div class=\"card-title\">
                                                        {{ \"account.registerAddressShippingHeader\"|trans|sw_sanitize }}
                                                    </div>
                                                {% endblock %}

                                                {% block component_account_register_address_shipping_fields %}
                                                    {% block component_account_register_address_shipping_fields_personal %}
                                                        {% sw_include '@Storefront/storefront/component/address/address-personal.html.twig' with {
                                                            'prefix': 'shippingAddress',
                                                            'data': data.get('shippingAddress'),
                                                            'hideCustomerTypeSelect': true,
                                                            'accountType': data.get('accountType')
                                                        } %}
                                                    {% endblock %}

                                                    {% block component_account_register_address_shipping_fields_address %}
                                                        {% sw_include '@Storefront/storefront/component/address/address-form.html.twig' with {
                                                            'prefix': 'shippingAddress',
                                                            'data': data.get('shippingAddress')
                                                        } %}
                                                    {% endblock %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_register_captcha %}
                        {% sw_include '@Storefront/storefront/component/captcha/base.html.twig' with { 'captchas': shopware.config.core.basicInformation.activeCaptchas } %}
                    {% endblock %}

                    {% block component_account_register_privacy %}
                        {% sw_include '@Storefront/storefront/component/privacy-notice.html.twig' %}
                    {% endblock %}

                    {% block component_account_register_required_fields %}
                        <p class=\"register-required-info\">
                            {{ \"general.requiredFields\"|trans|sw_sanitize }}
                        </p>
                    {% endblock %}

                    {% block component_account_register_submit %}
                        <div class=\"register-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-lg\">
                                {{ \"account.registerSubmit\"|trans|sw_sanitize }}
                            </button>
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/component/account/register.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/account/register.html.twig");
    }
}
