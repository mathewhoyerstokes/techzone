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

/* @Storefront/storefront/page/account/profile/index.html.twig */
class __TwigTemplate_5c8a6757d54414621d39f0af68ec5ce2b7fd3f1ac620d08e937d80b856738aa0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_profile' => [$this, 'block_page_account_profile'],
            'page_account_profile_main' => [$this, 'block_page_account_profile_main'],
            'page_account_profile_personal_welcome' => [$this, 'block_page_account_profile_personal_welcome'],
            'page_account_profile_personal_welcome_headline' => [$this, 'block_page_account_profile_personal_welcome_headline'],
            'page_account_profile_personal_welcome_intro' => [$this, 'block_page_account_profile_personal_welcome_intro'],
            'page_account_profile_personal' => [$this, 'block_page_account_profile_personal'],
            'page_account_profile_personal_header' => [$this, 'block_page_account_profile_personal_header'],
            'page_account_profile_personal_form' => [$this, 'block_page_account_profile_personal_form'],
            'page_account_profile_personal_form_csrf' => [$this, 'block_page_account_profile_personal_form_csrf'],
            'page_account_profile_personal_fields' => [$this, 'block_page_account_profile_personal_fields'],
            'page_account_profile_personal_required' => [$this, 'block_page_account_profile_personal_required'],
            'page_account_profile_personal_action_buttons' => [$this, 'block_page_account_profile_personal_action_buttons'],
            'page_account_profile_personal_action_button_send' => [$this, 'block_page_account_profile_personal_action_button_send'],
            'page_account_profile_credentials' => [$this, 'block_page_account_profile_credentials'],
            'page_account_profile_credentials_header' => [$this, 'block_page_account_profile_credentials_header'],
            'page_account_profile_credentials_container' => [$this, 'block_page_account_profile_credentials_container'],
            'page_account_profile_credentials_current_mail' => [$this, 'block_page_account_profile_credentials_current_mail'],
            'page_account_profile_credentials_current_mail_label' => [$this, 'block_page_account_profile_credentials_current_mail_label'],
            'page_account_profile_credentials_change_mail' => [$this, 'block_page_account_profile_credentials_change_mail'],
            'page_account_profile_credentials_change_password' => [$this, 'block_page_account_profile_credentials_change_password'],
            'page_account_profile_mail_and_password' => [$this, 'block_page_account_profile_mail_and_password'],
            'page_account_profile_mail_collapse' => [$this, 'block_page_account_profile_mail_collapse'],
            'page_account_profile_mail_form' => [$this, 'block_page_account_profile_mail_form'],
            'page_account_profile_mail_form_csrf' => [$this, 'block_page_account_profile_mail_form_csrf'],
            'page_account_profile_mail_title' => [$this, 'block_page_account_profile_mail_title'],
            'page_account_profile_mail_container' => [$this, 'block_page_account_profile_mail_container'],
            'page_account_profile_mail' => [$this, 'block_page_account_profile_mail'],
            'page_account_profile_mail_label' => [$this, 'block_page_account_profile_mail_label'],
            'page_account_profile_mail_input' => [$this, 'block_page_account_profile_mail_input'],
            'page_account_profile_mail_input_error' => [$this, 'block_page_account_profile_mail_input_error'],
            'page_account_profile_mail_confirmation' => [$this, 'block_page_account_profile_mail_confirmation'],
            'page_account_profile_personal_mail_confirmation_label' => [$this, 'block_page_account_profile_personal_mail_confirmation_label'],
            'page_account_profile_mail_confirmation_input' => [$this, 'block_page_account_profile_mail_confirmation_input'],
            'page_account_profile_mail_confirmation_input_error' => [$this, 'block_page_account_profile_mail_confirmation_input_error'],
            'page_account_profile_mail_password' => [$this, 'block_page_account_profile_mail_password'],
            'page_account_profile_mail_password_label' => [$this, 'block_page_account_profile_mail_password_label'],
            'page_account_profile_mail_password_input' => [$this, 'block_page_account_profile_mail_password_input'],
            'page_account_profile_mail_password_input_error' => [$this, 'block_page_account_profile_mail_password_input_error'],
            'page_account_profile_mail_required' => [$this, 'block_page_account_profile_mail_required'],
            'page_account_profile_mail_action_buttons' => [$this, 'block_page_account_profile_mail_action_buttons'],
            'page_account_profile_mail_action_button_send' => [$this, 'block_page_account_profile_mail_action_button_send'],
            'page_account_profile_password' => [$this, 'block_page_account_profile_password'],
            'page_account_profile_password_form' => [$this, 'block_page_account_profile_password_form'],
            'page_account_profile_password_form_csrf' => [$this, 'block_page_account_profile_password_form_csrf'],
            'page_account_profile_password_title' => [$this, 'block_page_account_profile_password_title'],
            'page_account_profile_password_container' => [$this, 'block_page_account_profile_password_container'],
            'page_account_profile_new_password' => [$this, 'block_page_account_profile_new_password'],
            'page_account_profile_new_password_label' => [$this, 'block_page_account_profile_new_password_label'],
            'page_account_profile_new_password_input' => [$this, 'block_page_account_profile_new_password_input'],
            'page_account_profile_new_password_input_error' => [$this, 'block_page_account_profile_new_password_input_error'],
            'page_account_profile_new_password_confirmation' => [$this, 'block_page_account_profile_new_password_confirmation'],
            'page_account_profile_new_password_confirmation_label' => [$this, 'block_page_account_profile_new_password_confirmation_label'],
            'page_account_profile_new_password_confirmation_input' => [$this, 'block_page_account_profile_new_password_confirmation_input'],
            'page_account_profile_new_password_confirmation_error' => [$this, 'block_page_account_profile_new_password_confirmation_error'],
            'page_account_profile_current_password' => [$this, 'block_page_account_profile_current_password'],
            'page_account_profile_current_password_label' => [$this, 'block_page_account_profile_current_password_label'],
            'page_account_profile_current_password_input' => [$this, 'block_page_account_profile_current_password_input'],
            'page_account_profile_current_password_input_error' => [$this, 'block_page_account_profile_current_password_input_error'],
            'page_account_profile_password_required' => [$this, 'block_page_account_profile_password_required'],
            'page_account_profile_password_action_buttons' => [$this, 'block_page_account_profile_password_action_buttons'],
            'page_account_profile_password_action_button_send' => [$this, 'block_page_account_profile_password_action_button_send'],
            'page_account_profile_delete_account' => [$this, 'block_page_account_profile_delete_account'],
            'page_account_delete_account_confirm_modal' => [$this, 'block_page_account_delete_account_confirm_modal'],
            'page_account_delete_account_confirm_modal_content' => [$this, 'block_page_account_delete_account_confirm_modal_content'],
            'page_account_delete_account_confirm_modal_header' => [$this, 'block_page_account_delete_account_confirm_modal_header'],
            'page_account_delete_account_confirm_modal_header_title' => [$this, 'block_page_account_delete_account_confirm_modal_header_title'],
            'page_account_delete_account_confirm_modal_header_close_button' => [$this, 'block_page_account_delete_account_confirm_modal_header_close_button'],
            'page_account_delete_account_confirm_modal_body' => [$this, 'block_page_account_delete_account_confirm_modal_body'],
            'page_account_delete_account_confirm_modal_form' => [$this, 'block_page_account_delete_account_confirm_modal_form'],
            'page_account_delete_account_confirm_form_csrf' => [$this, 'block_page_account_delete_account_confirm_form_csrf'],
            'page_account_delete_account_confirm_alert' => [$this, 'block_page_account_delete_account_confirm_alert'],
            'page_account_delete_account_confirm_text' => [$this, 'block_page_account_delete_account_confirm_text'],
            'page_account_delete_account_confirm_button' => [$this, 'block_page_account_delete_account_confirm_button'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 2);
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
        $this->displayBlock('page_account_profile', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile"));

        // line 5
        echo "        <div class=\"account-profile\">
            ";
        // line 6
        $this->displayBlock('page_account_profile_main', $context, $blocks);
        // line 495
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_account_profile_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_main"));

        // line 7
        echo "                ";
        $this->displayBlock('page_account_profile_personal_welcome', $context, $blocks);
        // line 18
        echo "
                ";
        // line 19
        $this->displayBlock('page_account_profile_personal', $context, $blocks);
        // line 68
        echo "
                ";
        // line 69
        $this->displayBlock('page_account_profile_credentials', $context, $blocks);
        // line 119
        echo "
                ";
        // line 120
        $this->displayBlock('page_account_profile_mail_and_password', $context, $blocks);
        // line 411
        echo "
                ";
        // line 412
        $this->displayBlock('page_account_profile_delete_account', $context, $blocks);
        // line 421
        echo "
                ";
        // line 422
        $this->displayBlock('page_account_delete_account_confirm_modal', $context, $blocks);
        // line 494
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_account_profile_personal_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome"));

        // line 8
        echo "                    <div class=\"account-welcome\">
                        ";
        // line 9
        $this->displayBlock('page_account_profile_personal_welcome_headline', $context, $blocks);
        // line 12
        echo "
                        ";
        // line 13
        $this->displayBlock('page_account_profile_personal_welcome_intro', $context, $blocks);
        // line 16
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_account_profile_personal_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome_headline"));

        // line 10
        echo "                            <h1>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileTitle"));
        echo "</h1>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_account_profile_personal_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome_intro"));

        // line 14
        echo "                            <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileText"));
        echo "</p>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_account_profile_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal"));

        // line 20
        echo "                    <div class=\"card account-profile-personal\">
                        <div class=\"card-body\">
                            ";
        // line 22
        $this->displayBlock('page_account_profile_personal_header', $context, $blocks);
        // line 27
        echo "
                            ";
        // line 28
        $this->displayBlock('page_account_profile_personal_form', $context, $blocks);
        // line 65
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_account_profile_personal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_header"));

        // line 23
        echo "                                <div class=\"card-title\">
                                    ";
        // line 24
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePersonalTitle"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_account_profile_personal_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_form"));

        // line 29
        echo "                                <form id=\"profilePersonalForm\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\"
                                      action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.save");
        echo "\"
                                      data-form-validation=\"true\">

                                    ";
        // line 35
        $this->displayBlock('page_account_profile_personal_form_csrf', $context, $blocks);
        // line 38
        echo "
                                    ";
        // line 39
        $this->displayBlock('page_account_profile_personal_fields', $context, $blocks);
        // line 45
        echo "
                                    ";
        // line 46
        $this->displayBlock('page_account_profile_personal_required', $context, $blocks);
        // line 51
        echo "
                                    ";
        // line 52
        $this->displayBlock('page_account_profile_personal_action_buttons', $context, $blocks);
        // line 63
        echo "                                </form>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_page_account_profile_personal_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_form_csrf"));

        // line 36
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.save");
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_account_profile_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields"));

        // line 40
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/page/account/profile/personal.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 40)->display(twig_array_merge($context, ["showBirthdayField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["shopware"] ?? null), "config", [], "any", false, false, false, 41), "core", [], "any", false, false, false, 41), "loginRegistration", [], "any", false, false, false, 41), "showBirthdayField", [], "any", false, false, false, 41), "data" => twig_get_attribute($this->env, $this->source,         // line 42
($context["context"] ?? null), "customer", [], "any", false, false, false, 42)]));
        // line 44
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_page_account_profile_personal_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_required"));

        // line 47
        echo "                                        <p class=\"account-profile-required-info required-fields\">
                                            ";
        // line 48
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                        </p>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_page_account_profile_personal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_action_buttons"));

        // line 53
        echo "                                        <div class=\"card-actions\">
                                            ";
        // line 54
        $this->displayBlock('page_account_profile_personal_action_button_send', $context, $blocks);
        // line 61
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_page_account_profile_personal_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_action_button_send"));

        // line 55
        echo "                                                <button type=\"submit\"
                                                        class=\"profile-form-submit btn btn-light btn-sm\"
                                                        title=\"";
        // line 57
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                    ";
        // line 58
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                </button>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_page_account_profile_credentials($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials"));

        // line 70
        echo "                    <div class=\"card account-profile-credentials\">
                        <div class=\"card-body\">
                            ";
        // line 72
        $this->displayBlock('page_account_profile_credentials_header', $context, $blocks);
        // line 77
        echo "
                            ";
        // line 78
        $this->displayBlock('page_account_profile_credentials_container', $context, $blocks);
        // line 116
        echo "                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_page_account_profile_credentials_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_header"));

        // line 73
        echo "                                <div class=\"card-title\">
                                    ";
        // line 74
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileCredentialsTitle"));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_page_account_profile_credentials_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_container"));

        // line 79
        echo "                                <div class=\"row align-items-center\">
                                    ";
        // line 80
        $this->displayBlock('page_account_profile_credentials_current_mail', $context, $blocks);
        // line 88
        echo "
                                    ";
        // line 89
        $this->displayBlock('page_account_profile_credentials_change_mail', $context, $blocks);
        // line 101
        echo "
                                    ";
        // line 102
        $this->displayBlock('page_account_profile_credentials_change_password', $context, $blocks);
        // line 114
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_page_account_profile_credentials_current_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_current_mail"));

        // line 81
        echo "                                        <div class=\"col-6\">
                                            ";
        // line 82
        $this->displayBlock('page_account_profile_credentials_current_mail_label', $context, $blocks);
        // line 86
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_page_account_profile_credentials_current_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_current_mail_label"));

        // line 83
        echo "                                                <span class=\"account-profile-mail-label\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileCurrentMail"));
        echo "</span>
                                                <span class=\"account-profile-mail\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 84), "email", [], "any", false, false, false, 84), "html", null, true);
        echo "</span>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_page_account_profile_credentials_change_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_change_mail"));

        // line 90
        echo "                                        <div class=\"col-3\">
                                            <a class=\"account-profile-change";
        // line 91
        if ( !($context["emailFormViolation"] ?? null)) {
            echo " collapsed";
        }
        echo "\"
                                               data-toggle=\"collapse\"
                                               href=\"#profile-email-form\"
                                               role=\"button\"
                                               aria-expanded=\"";
        // line 95
        if (($context["emailFormViolation"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                                               aria-controls=\"profile-email-form\">
                                                ";
        // line 97
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileChangeEmail"));
        echo "
                                            </a>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_page_account_profile_credentials_change_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_change_password"));

        // line 103
        echo "                                        <div class=\"col-3\">
                                            <a class=\"account-profile-change";
        // line 104
        if ( !($context["passwordFormViolation"] ?? null)) {
            echo " collapsed";
        }
        echo "\"
                                               data-toggle=\"collapse\"
                                               href=\"#profile-password-form\"
                                               role=\"button\"
                                               aria-expanded=\"";
        // line 108
        if (($context["passwordFormViolation"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                                               aria-controls=\"profile-password-form\">
                                                ";
        // line 110
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileChangePassword"));
        echo "
                                            </a>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 120
    public function block_page_account_profile_mail_and_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_and_password"));

        // line 121
        echo "                    <div class=\"profile-content accordion\">
                        ";
        // line 122
        $this->displayBlock('page_account_profile_mail_collapse', $context, $blocks);
        // line 263
        echo "
                        ";
        // line 264
        $this->displayBlock('page_account_profile_password', $context, $blocks);
        // line 409
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 122
    public function block_page_account_profile_mail_collapse($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_collapse"));

        // line 123
        echo "                            <div class=\"collapse";
        if ((($context["emailFormViolation"] ?? null) && ($context["formViolations"] ?? null))) {
            echo " show";
        }
        echo "\" id=\"profile-email-form\" data-parent=\".profile-content\">
                                <div class=\"card account-email\">
                                    ";
        // line 125
        $this->displayBlock('page_account_profile_mail_form', $context, $blocks);
        // line 260
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_page_account_profile_mail_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_form"));

        // line 126
        echo "                                        <form id=\"profileMailForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              action=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.email.save");
        echo "\"
                                              data-form-csrf-handler=\"true\"
                                              data-form-validation=\"true\">

                                            ";
        // line 133
        $this->displayBlock('page_account_profile_mail_form_csrf', $context, $blocks);
        // line 136
        echo "
                                            ";
        // line 137
        $this->displayBlock('page_account_profile_mail_title', $context, $blocks);
        // line 142
        echo "
                                            ";
        // line 143
        $this->displayBlock('page_account_profile_mail_container', $context, $blocks);
        // line 209
        echo "
                                            ";
        // line 210
        $this->displayBlock('page_account_profile_mail_password', $context, $blocks);
        // line 240
        echo "
                                            ";
        // line 241
        $this->displayBlock('page_account_profile_mail_required', $context, $blocks);
        // line 246
        echo "
                                            ";
        // line 247
        $this->displayBlock('page_account_profile_mail_action_buttons', $context, $blocks);
        // line 258
        echo "                                        </form>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 133
    public function block_page_account_profile_mail_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_form_csrf"));

        // line 134
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.email.save");
        echo "
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 137
    public function block_page_account_profile_mail_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_title"));

        // line 138
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 139
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileMailTitle"));
        echo "
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_page_account_profile_mail_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_container"));

        // line 144
        echo "                                                <div class=\"form-row\">
                                                    ";
        // line 145
        $this->displayBlock('page_account_profile_mail', $context, $blocks);
        // line 174
        echo "
                                                    ";
        // line 175
        $this->displayBlock('page_account_profile_mail_confirmation', $context, $blocks);
        // line 205
        echo "                                                </div>

                                                <p class=\"text-muted\">";
        // line 207
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileConfirmPassword"));
        echo "</p>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_page_account_profile_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail"));

        // line 146
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 147
        $this->displayBlock('page_account_profile_mail_label', $context, $blocks);
        // line 153
        echo "
                                                            ";
        // line 154
        $this->displayBlock('page_account_profile_mail_input', $context, $blocks);
        // line 164
        echo "
                                                            ";
        // line 165
        $this->displayBlock('page_account_profile_mail_input_error', $context, $blocks);
        // line 172
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 147
    public function block_page_account_profile_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_label"));

        // line 148
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"personalMail\">
                                                                    ";
        // line 150
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 154
    public function block_page_account_profile_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_input"));

        // line 155
        echo "                                                                <input type=\"email\"
                                                                       class=\"form-control";
        // line 156
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 156))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMail\"
                                                                       placeholder=\"";
        // line 159
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailPlaceholder")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"email[email]\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       required=\"required\">
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 165
    public function block_page_account_profile_mail_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_input_error"));

        // line 166
        echo "                                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 166))) {
            // line 167
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 167)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 170
            echo "                                                                ";
        }
        // line 171
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 175
    public function block_page_account_profile_mail_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation"));

        // line 176
        echo "                                                        <div class=\"form-group col\">
                                                            ";
        // line 177
        $this->displayBlock('page_account_profile_personal_mail_confirmation_label', $context, $blocks);
        // line 183
        echo "
                                                            ";
        // line 184
        $this->displayBlock('page_account_profile_mail_confirmation_input', $context, $blocks);
        // line 195
        echo "
                                                            ";
        // line 196
        $this->displayBlock('page_account_profile_mail_confirmation_input_error', $context, $blocks);
        // line 203
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_page_account_profile_personal_mail_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_mail_confirmation_label"));

        // line 178
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"personalMailConfirmation\">
                                                                    ";
        // line 180
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 184
    public function block_page_account_profile_mail_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation_input"));

        // line 185
        echo "                                                                <input type=\"email\"
                                                                       class=\"form-control";
        // line 186
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 186))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMailConfirmation\"
                                                                       placeholder=\"";
        // line 189
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationPlaceholder")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"email[emailConfirmation]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       data-form-validation-equal-message=\"";
        // line 193
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationInvalidMessage")), "html", null, true);
        echo "\">
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 196
    public function block_page_account_profile_mail_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation_input_error"));

        // line 197
        echo "                                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 197))) {
            // line 198
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 198)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 201
            echo "                                                                ";
        }
        // line 202
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_page_account_profile_mail_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password"));

        // line 211
        echo "                                                <div class=\"form-row\">
                                                    <div class=\"form-group col-6\">
                                                        ";
        // line 213
        $this->displayBlock('page_account_profile_mail_password_label', $context, $blocks);
        // line 219
        echo "
                                                        ";
        // line 220
        $this->displayBlock('page_account_profile_mail_password_input', $context, $blocks);
        // line 229
        echo "
                                                        ";
        // line 230
        $this->displayBlock('page_account_profile_mail_password_input_error', $context, $blocks);
        // line 237
        echo "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 213
    public function block_page_account_profile_mail_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_label"));

        // line 214
        echo "                                                            <label class=\"form-label\"
                                                                   for=\"personalMailPasswordCurrent\">
                                                                ";
        // line 216
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                            </label>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 220
    public function block_page_account_profile_mail_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_input"));

        // line 221
        echo "                                                            <input type=\"password\"
                                                                   class=\"form-control";
        // line 222
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 222)) && ($context["emailFormViolation"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"personalMailPasswordCurrent\"
                                                                   placeholder=\"";
        // line 225
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                   name=\"email[password]\"
                                                                   required=\"required\">
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 230
    public function block_page_account_profile_mail_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_input_error"));

        // line 231
        echo "                                                            ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 231)) && ($context["emailFormViolation"] ?? null))) {
            // line 232
            echo "                                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 232)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 235
            echo "                                                            ";
        }
        // line 236
        echo "                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 241
    public function block_page_account_profile_mail_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_required"));

        // line 242
        echo "                                                <p class=\"account-profile-required-info required-fields\">
                                                    ";
        // line 243
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                                </p>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 247
    public function block_page_account_profile_mail_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_action_buttons"));

        // line 248
        echo "                                                <div class=\"card-actions\">
                                                    ";
        // line 249
        $this->displayBlock('page_account_profile_mail_action_button_send', $context, $blocks);
        // line 256
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 249
    public function block_page_account_profile_mail_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_action_button_send"));

        // line 250
        echo "                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"";
        // line 252
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                            ";
        // line 253
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                        </button>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 264
    public function block_page_account_profile_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password"));

        // line 265
        echo "                            <div class=\"collapse";
        if ((($context["passwordFormViolation"] ?? null) && ($context["formViolations"] ?? null))) {
            echo " show";
        }
        echo "\" id=\"profile-password-form\" data-parent=\".profile-content\">
                                <div class=\"card account-password\">
                                    ";
        // line 267
        $this->displayBlock('page_account_profile_password_form', $context, $blocks);
        // line 406
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 267
    public function block_page_account_profile_password_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_form"));

        // line 268
        echo "                                        <form id=\"profilePasswordForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              data-form-csrf-handler=\"true\"
                                              action=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.password.save");
        echo "\"
                                              data-form-validation=\"true\">

                                            ";
        // line 275
        $this->displayBlock('page_account_profile_password_form_csrf', $context, $blocks);
        // line 278
        echo "
                                            ";
        // line 279
        $this->displayBlock('page_account_profile_password_title', $context, $blocks);
        // line 284
        echo "
                                            ";
        // line 285
        $this->displayBlock('page_account_profile_password_container', $context, $blocks);
        // line 355
        echo "
                                            ";
        // line 356
        $this->displayBlock('page_account_profile_current_password', $context, $blocks);
        // line 386
        echo "
                                            ";
        // line 387
        $this->displayBlock('page_account_profile_password_required', $context, $blocks);
        // line 392
        echo "
                                            ";
        // line 393
        $this->displayBlock('page_account_profile_password_action_buttons', $context, $blocks);
        // line 404
        echo "                                        </form>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 275
    public function block_page_account_profile_password_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_form_csrf"));

        // line 276
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.password.save");
        echo "
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 279
    public function block_page_account_profile_password_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_title"));

        // line 280
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 281
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordTitle"));
        echo "
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 285
    public function block_page_account_profile_password_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_container"));

        // line 286
        echo "                                                <div class=\"form-row\">
                                                    ";
        // line 287
        $this->displayBlock('page_account_profile_new_password', $context, $blocks);
        // line 320
        echo "
                                                    ";
        // line 321
        $this->displayBlock('page_account_profile_new_password_confirmation', $context, $blocks);
        // line 351
        echo "                                                </div>

                                                <p class=\"text-muted\">";
        // line 353
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileConfirmPassword"));
        echo "</p>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 287
    public function block_page_account_profile_new_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password"));

        // line 288
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 289
        $this->displayBlock('page_account_profile_new_password_label', $context, $blocks);
        // line 295
        echo "
                                                            ";
        // line 296
        $this->displayBlock('page_account_profile_new_password_input', $context, $blocks);
        // line 310
        echo "
                                                            ";
        // line 311
        $this->displayBlock('page_account_profile_new_password_input_error', $context, $blocks);
        // line 318
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 289
    public function block_page_account_profile_new_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_label"));

        // line 290
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"newPassword\">
                                                                    ";
        // line 292
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCreateNew"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 296
    public function block_page_account_profile_new_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_input"));

        // line 297
        echo "                                                                <input type=\"password\"
                                                                       class=\"form-control";
        // line 298
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 298))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"newPassword\"
                                                                       placeholder=\"";
        // line 301
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCreateNew")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"password[newPassword]\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-length=\"";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 304), "core", [], "any", false, false, false, 304), "loginRegistration", [], "any", false, false, false, 304), "passwordMinLength", [], "any", false, false, false, 304), "html", null, true);
        echo "\"
                                                                       data-form-validation-length-message=\" ";
        // line 305
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 306
($context["shopware"] ?? null), "config", [], "any", false, false, false, 306), "core", [], "any", false, false, false, 306), "loginRegistration", [], "any", false, false, false, 306), "passwordMinLength", [], "any", false, false, false, 306)]));
        // line 307
        echo "\"
                                                                       required=\"required\">
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 311
    public function block_page_account_profile_new_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_input_error"));

        // line 312
        echo "                                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 312))) {
            // line 313
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 313)->display(twig_array_merge($context, ["violationPath" => "/newPassword"]));
            // line 316
            echo "                                                                ";
        }
        // line 317
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 321
    public function block_page_account_profile_new_password_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation"));

        // line 322
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 323
        $this->displayBlock('page_account_profile_new_password_confirmation_label', $context, $blocks);
        // line 329
        echo "
                                                            ";
        // line 330
        $this->displayBlock('page_account_profile_new_password_confirmation_input', $context, $blocks);
        // line 341
        echo "
                                                            ";
        // line 342
        $this->displayBlock('page_account_profile_new_password_confirmation_error', $context, $blocks);
        // line 349
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 323
    public function block_page_account_profile_new_password_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_label"));

        // line 324
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"passwordConfirmation\">
                                                                    ";
        // line 326
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 330
    public function block_page_account_profile_new_password_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_input"));

        // line 331
        echo "                                                                <input type=\"password\"
                                                                       class=\"form-control";
        // line 332
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 332))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"passwordConfirmation\"
                                                                       placeholder=\"";
        // line 335
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"password[newPasswordConfirm]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-equal-message=\"";
        // line 339
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationInvalidMessage")), "html", null, true);
        echo "\">
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 342
    public function block_page_account_profile_new_password_confirmation_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_error"));

        // line 343
        echo "                                                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 343))) {
            // line 344
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 344)->display(twig_array_merge($context, ["violationPath" => "/newPassword"]));
            // line 347
            echo "                                                                ";
        }
        // line 348
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 356
    public function block_page_account_profile_current_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password"));

        // line 357
        echo "                                                <div class=\"form-row\">
                                                    <div class=\"col-6 form-group\">
                                                        ";
        // line 359
        $this->displayBlock('page_account_profile_current_password_label', $context, $blocks);
        // line 365
        echo "
                                                        ";
        // line 366
        $this->displayBlock('page_account_profile_current_password_input', $context, $blocks);
        // line 375
        echo "
                                                        ";
        // line 376
        $this->displayBlock('page_account_profile_current_password_input_error', $context, $blocks);
        // line 383
        echo "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 359
    public function block_page_account_profile_current_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_label"));

        // line 360
        echo "                                                            <label class=\"form-label\"
                                                                   for=\"password\">
                                                                ";
        // line 362
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                            </label>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 366
    public function block_page_account_profile_current_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_input"));

        // line 367
        echo "                                                            <input type=\"password\"
                                                                   class=\"form-control";
        // line 368
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 368)) && ($context["passwordFormViolation"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"password\"
                                                                   placeholder=\"";
        // line 371
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                   name=\"password[password]\"
                                                                   required=\"required\">
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 376
    public function block_page_account_profile_current_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_input_error"));

        // line 377
        echo "                                                            ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 377)) && ($context["passwordFormViolation"] ?? null))) {
            // line 378
            echo "                                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 378)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 381
            echo "                                                            ";
        }
        // line 382
        echo "                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 387
    public function block_page_account_profile_password_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_required"));

        // line 388
        echo "                                                <p class=\"account-profile-required-info required-fields\">
                                                    ";
        // line 389
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                                </p>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 393
    public function block_page_account_profile_password_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_action_buttons"));

        // line 394
        echo "                                                <div class=\"card-actions\">
                                                    ";
        // line 395
        $this->displayBlock('page_account_profile_password_action_button_send', $context, $blocks);
        // line 402
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 395
    public function block_page_account_profile_password_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_action_button_send"));

        // line 396
        echo "                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"";
        // line 398
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                            ";
        // line 399
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                        </button>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 412
    public function block_page_account_profile_delete_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_delete_account"));

        // line 413
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 413), "core", [], "any", false, false, false, 413), "loginRegistration", [], "any", false, false, false, 413), "allowCustomerDeletion", [], "any", false, false, false, 413)) {
            // line 414
            echo "                        <div class=\"account-deleting py-4\">
                            ";
            // line 415
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDelete", ["%target%" => "#confirmDeleteAccountModal"]);
            // line 417
            echo "
                        </div>
                    ";
        }
        // line 420
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 422
    public function block_page_account_delete_account_confirm_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal"));

        // line 423
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 423), "core", [], "any", false, false, false, 423), "loginRegistration", [], "any", false, false, false, 423), "allowCustomerDeletion", [], "any", false, false, false, 423)) {
            // line 424
            echo "                        <div class=\"modal fade confirm-delete-account-modal\"
                             id=\"confirmDeleteAccountModal\"
                             tabindex=\"1\"
                             role=\"dialog\">
                            <div class=\"modal-dialog modal-dialog-centered\"
                                 role=\"document\">

                                ";
            // line 431
            $this->displayBlock('page_account_delete_account_confirm_modal_content', $context, $blocks);
            // line 490
            echo "                            </div>
                        </div>
                    ";
        }
        // line 493
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 431
    public function block_page_account_delete_account_confirm_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_content"));

        // line 432
        echo "                                    <div class=\"modal-content\">

                                        ";
        // line 434
        $this->displayBlock('page_account_delete_account_confirm_modal_header', $context, $blocks);
        // line 456
        echo "
                                        ";
        // line 457
        $this->displayBlock('page_account_delete_account_confirm_modal_body', $context, $blocks);
        // line 488
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 434
    public function block_page_account_delete_account_confirm_modal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header"));

        // line 435
        echo "                                            <div class=\"modal-header\">

                                                ";
        // line 437
        $this->displayBlock('page_account_delete_account_confirm_modal_header_title', $context, $blocks);
        // line 442
        echo "
                                                ";
        // line 443
        $this->displayBlock('page_account_delete_account_confirm_modal_header_close_button', $context, $blocks);
        // line 454
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 437
    public function block_page_account_delete_account_confirm_modal_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header_title"));

        // line 438
        echo "                                                    <div class=\"modal-title h3\">
                                                        ";
        // line 439
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteModalTitle"));
        echo "
                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 443
    public function block_page_account_delete_account_confirm_modal_header_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header_close_button"));

        // line 444
        echo "                                                    <button
                                                        type=\"button\"
                                                        class=\"modal-close close\"
                                                        data-dismiss=\"modal\"
                                                        aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">
                                                            ";
        // line 450
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/profile/index.html.twig", 450);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 451
        echo "                                                        </span>
                                                    </button>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 457
    public function block_page_account_delete_account_confirm_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_body"));

        // line 458
        echo "                                            <div class=\"modal-body\">

                                                ";
        // line 460
        $this->displayBlock('page_account_delete_account_confirm_modal_form', $context, $blocks);
        // line 486
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 460
    public function block_page_account_delete_account_confirm_modal_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_form"));

        // line 461
        echo "                                                    <form method=\"post\"
                                                          action=\"";
        // line 462
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.delete");
        echo "\"
                                                          data-form-submit-loader=\"true\">

                                                        ";
        // line 465
        $this->displayBlock('page_account_delete_account_confirm_form_csrf', $context, $blocks);
        // line 468
        echo "
                                                        ";
        // line 469
        $this->displayBlock('page_account_delete_account_confirm_alert', $context, $blocks);
        // line 472
        echo "
                                                        ";
        // line 473
        $this->displayBlock('page_account_delete_account_confirm_text', $context, $blocks);
        // line 476
        echo "
                                                        ";
        // line 477
        $this->displayBlock('page_account_delete_account_confirm_button', $context, $blocks);
        // line 484
        echo "                                                    </form>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 465
    public function block_page_account_delete_account_confirm_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_form_csrf"));

        // line 466
        echo "                                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.delete");
        echo "
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 469
    public function block_page_account_delete_account_confirm_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_alert"));

        // line 470
        echo "                                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteAlert"));
        echo "
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 473
    public function block_page_account_delete_account_confirm_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_text"));

        // line 474
        echo "                                                            <h6 class=\"py-2\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteConfirm"));
        echo "</h6>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 477
    public function block_page_account_delete_account_confirm_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_button"));

        // line 478
        echo "                                                            <div class=\"text-right\">
                                                                <button class=\"btn btn-outline-danger\" type=\"submit\">
                                                                    ";
        // line 480
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteButton"));
        echo "
                                                                </button>
                                                            </div>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2040 => 480,  2036 => 478,  2029 => 477,  2019 => 474,  2012 => 473,  2002 => 470,  1995 => 469,  1985 => 466,  1978 => 465,  1970 => 484,  1968 => 477,  1965 => 476,  1963 => 473,  1960 => 472,  1958 => 469,  1955 => 468,  1953 => 465,  1947 => 462,  1944 => 461,  1937 => 460,  1929 => 486,  1927 => 460,  1923 => 458,  1916 => 457,  1907 => 451,  1899 => 450,  1891 => 444,  1884 => 443,  1874 => 439,  1871 => 438,  1864 => 437,  1856 => 454,  1854 => 443,  1851 => 442,  1849 => 437,  1845 => 435,  1838 => 434,  1830 => 488,  1828 => 457,  1825 => 456,  1823 => 434,  1819 => 432,  1812 => 431,  1805 => 493,  1800 => 490,  1798 => 431,  1789 => 424,  1786 => 423,  1779 => 422,  1772 => 420,  1767 => 417,  1765 => 415,  1762 => 414,  1759 => 413,  1752 => 412,  1742 => 399,  1738 => 398,  1734 => 396,  1727 => 395,  1719 => 402,  1717 => 395,  1714 => 394,  1707 => 393,  1697 => 389,  1694 => 388,  1687 => 387,  1680 => 382,  1677 => 381,  1674 => 378,  1671 => 377,  1664 => 376,  1652 => 371,  1644 => 368,  1641 => 367,  1634 => 366,  1623 => 362,  1619 => 360,  1612 => 359,  1603 => 383,  1601 => 376,  1598 => 375,  1596 => 366,  1593 => 365,  1591 => 359,  1587 => 357,  1580 => 356,  1573 => 348,  1570 => 347,  1567 => 344,  1564 => 343,  1557 => 342,  1548 => 339,  1540 => 335,  1532 => 332,  1529 => 331,  1522 => 330,  1511 => 326,  1507 => 324,  1500 => 323,  1492 => 349,  1490 => 342,  1487 => 341,  1485 => 330,  1482 => 329,  1480 => 323,  1477 => 322,  1470 => 321,  1463 => 317,  1460 => 316,  1457 => 313,  1454 => 312,  1447 => 311,  1438 => 307,  1436 => 306,  1435 => 305,  1431 => 304,  1424 => 301,  1416 => 298,  1413 => 297,  1406 => 296,  1395 => 292,  1391 => 290,  1384 => 289,  1376 => 318,  1374 => 311,  1371 => 310,  1369 => 296,  1366 => 295,  1364 => 289,  1361 => 288,  1354 => 287,  1345 => 353,  1341 => 351,  1339 => 321,  1336 => 320,  1334 => 287,  1331 => 286,  1324 => 285,  1314 => 281,  1311 => 280,  1304 => 279,  1294 => 276,  1287 => 275,  1279 => 404,  1277 => 393,  1274 => 392,  1272 => 387,  1269 => 386,  1267 => 356,  1264 => 355,  1262 => 285,  1259 => 284,  1257 => 279,  1254 => 278,  1252 => 275,  1246 => 272,  1240 => 268,  1233 => 267,  1224 => 406,  1222 => 267,  1214 => 265,  1207 => 264,  1197 => 253,  1193 => 252,  1189 => 250,  1182 => 249,  1174 => 256,  1172 => 249,  1169 => 248,  1162 => 247,  1152 => 243,  1149 => 242,  1142 => 241,  1135 => 236,  1132 => 235,  1129 => 232,  1126 => 231,  1119 => 230,  1107 => 225,  1099 => 222,  1096 => 221,  1089 => 220,  1078 => 216,  1074 => 214,  1067 => 213,  1058 => 237,  1056 => 230,  1053 => 229,  1051 => 220,  1048 => 219,  1046 => 213,  1042 => 211,  1035 => 210,  1028 => 202,  1025 => 201,  1022 => 198,  1019 => 197,  1012 => 196,  1003 => 193,  995 => 189,  987 => 186,  984 => 185,  977 => 184,  966 => 180,  962 => 178,  955 => 177,  947 => 203,  945 => 196,  942 => 195,  940 => 184,  937 => 183,  935 => 177,  932 => 176,  925 => 175,  918 => 171,  915 => 170,  912 => 167,  909 => 166,  902 => 165,  889 => 159,  881 => 156,  878 => 155,  871 => 154,  860 => 150,  856 => 148,  849 => 147,  841 => 172,  839 => 165,  836 => 164,  834 => 154,  831 => 153,  829 => 147,  826 => 146,  819 => 145,  810 => 207,  806 => 205,  804 => 175,  801 => 174,  799 => 145,  796 => 144,  789 => 143,  779 => 139,  776 => 138,  769 => 137,  759 => 134,  752 => 133,  744 => 258,  742 => 247,  739 => 246,  737 => 241,  734 => 240,  732 => 210,  729 => 209,  727 => 143,  724 => 142,  722 => 137,  719 => 136,  717 => 133,  710 => 129,  705 => 126,  698 => 125,  689 => 260,  687 => 125,  679 => 123,  672 => 122,  664 => 409,  662 => 264,  659 => 263,  657 => 122,  654 => 121,  647 => 120,  636 => 110,  627 => 108,  618 => 104,  615 => 103,  608 => 102,  597 => 97,  588 => 95,  579 => 91,  576 => 90,  569 => 89,  560 => 84,  555 => 83,  548 => 82,  540 => 86,  538 => 82,  535 => 81,  528 => 80,  520 => 114,  518 => 102,  515 => 101,  513 => 89,  510 => 88,  508 => 80,  505 => 79,  498 => 78,  488 => 74,  485 => 73,  478 => 72,  469 => 116,  467 => 78,  464 => 77,  462 => 72,  458 => 70,  451 => 69,  441 => 58,  437 => 57,  433 => 55,  426 => 54,  418 => 61,  416 => 54,  413 => 53,  406 => 52,  396 => 48,  393 => 47,  386 => 46,  379 => 44,  377 => 42,  376 => 41,  374 => 40,  367 => 39,  357 => 36,  350 => 35,  342 => 63,  340 => 52,  337 => 51,  335 => 46,  332 => 45,  330 => 39,  327 => 38,  325 => 35,  319 => 32,  314 => 29,  307 => 28,  297 => 24,  294 => 23,  287 => 22,  278 => 65,  276 => 28,  273 => 27,  271 => 22,  267 => 20,  260 => 19,  250 => 14,  243 => 13,  233 => 10,  226 => 9,  218 => 16,  216 => 13,  213 => 12,  211 => 9,  208 => 8,  201 => 7,  194 => 494,  192 => 422,  189 => 421,  187 => 412,  184 => 411,  182 => 120,  179 => 119,  177 => 69,  174 => 68,  172 => 19,  169 => 18,  166 => 7,  159 => 6,  151 => 495,  149 => 6,  146 => 5,  132 => 4,  125 => 3,  108 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    {% block page_account_profile %}
        <div class=\"account-profile\">
            {% block page_account_profile_main %}
                {% block page_account_profile_personal_welcome %}
                    <div class=\"account-welcome\">
                        {% block page_account_profile_personal_welcome_headline %}
                            <h1>{{ \"account.profileTitle\"|trans|sw_sanitize }}</h1>
                        {% endblock %}

                        {% block page_account_profile_personal_welcome_intro %}
                            <p>{{ \"account.profileText\"|trans|sw_sanitize }}</p>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_account_profile_personal %}
                    <div class=\"card account-profile-personal\">
                        <div class=\"card-body\">
                            {% block page_account_profile_personal_header %}
                                <div class=\"card-title\">
                                    {{ \"account.profilePersonalTitle\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_profile_personal_form %}
                                <form id=\"profilePersonalForm\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\"
                                      action=\"{{ path('frontend.account.profile.save') }}\"
                                      data-form-validation=\"true\">

                                    {% block page_account_profile_personal_form_csrf %}
                                        {{ sw_csrf('frontend.account.profile.save') }}
                                    {% endblock %}

                                    {% block page_account_profile_personal_fields %}
                                        {% sw_include '@Storefront/storefront/page/account/profile/personal.html.twig' with {
                                            'showBirthdayField': shopware.config.core.loginRegistration.showBirthdayField,
                                            'data': context.customer
                                        } %}
                                    {% endblock %}

                                    {% block page_account_profile_personal_required %}
                                        <p class=\"account-profile-required-info required-fields\">
                                            {{ \"general.requiredFields\"|trans|sw_sanitize }}
                                        </p>
                                    {% endblock %}

                                    {% block page_account_profile_personal_action_buttons %}
                                        <div class=\"card-actions\">
                                            {% block page_account_profile_personal_action_button_send %}
                                                <button type=\"submit\"
                                                        class=\"profile-form-submit btn btn-light btn-sm\"
                                                        title=\"{{ \"account.profileSaveChanges\"|trans|striptags }}\">
                                                    {{ \"account.profileSaveChanges\"|trans|sw_sanitize }}
                                                </button>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </form>
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}

                {% block page_account_profile_credentials %}
                    <div class=\"card account-profile-credentials\">
                        <div class=\"card-body\">
                            {% block page_account_profile_credentials_header %}
                                <div class=\"card-title\">
                                    {{ \"account.profileCredentialsTitle\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_profile_credentials_container %}
                                <div class=\"row align-items-center\">
                                    {% block page_account_profile_credentials_current_mail %}
                                        <div class=\"col-6\">
                                            {% block page_account_profile_credentials_current_mail_label %}
                                                <span class=\"account-profile-mail-label\">{{ \"account.profileCurrentMail\"|trans|sw_sanitize }}</span>
                                                <span class=\"account-profile-mail\">{{ context.customer.email }}</span>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}

                                    {% block page_account_profile_credentials_change_mail %}
                                        <div class=\"col-3\">
                                            <a class=\"account-profile-change{% if not emailFormViolation %} collapsed{% endif %}\"
                                               data-toggle=\"collapse\"
                                               href=\"#profile-email-form\"
                                               role=\"button\"
                                               aria-expanded=\"{% if emailFormViolation %}true{% else %}false{% endif %}\"
                                               aria-controls=\"profile-email-form\">
                                                {{ \"account.profileChangeEmail\"|trans|sw_sanitize }}
                                            </a>
                                        </div>
                                    {% endblock %}

                                    {% block page_account_profile_credentials_change_password %}
                                        <div class=\"col-3\">
                                            <a class=\"account-profile-change{% if not passwordFormViolation %} collapsed{% endif %}\"
                                               data-toggle=\"collapse\"
                                               href=\"#profile-password-form\"
                                               role=\"button\"
                                               aria-expanded=\"{% if passwordFormViolation %}true{% else %}false{% endif %}\"
                                               aria-controls=\"profile-password-form\">
                                                {{ \"account.profileChangePassword\"|trans|sw_sanitize }}
                                            </a>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}

                {% block page_account_profile_mail_and_password %}
                    <div class=\"profile-content accordion\">
                        {% block page_account_profile_mail_collapse %}
                            <div class=\"collapse{% if emailFormViolation and formViolations %} show{% endif %}\" id=\"profile-email-form\" data-parent=\".profile-content\">
                                <div class=\"card account-email\">
                                    {% block page_account_profile_mail_form %}
                                        <form id=\"profileMailForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              action=\"{{ path('frontend.account.profile.email.save') }}\"
                                              data-form-csrf-handler=\"true\"
                                              data-form-validation=\"true\">

                                            {% block page_account_profile_mail_form_csrf %}
                                                {{ sw_csrf('frontend.account.profile.email.save') }}
                                            {% endblock %}

                                            {% block page_account_profile_mail_title %}
                                                <div class=\"card-title\">
                                                    {{ \"account.profileMailTitle\"|trans|sw_sanitize }}
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_mail_container %}
                                                <div class=\"form-row\">
                                                    {% block page_account_profile_mail %}
                                                        <div class=\"col form-group\">
                                                            {% block page_account_profile_mail_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"personalMail\">
                                                                    {{ \"account.personalMailLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_input %}
                                                                <input type=\"email\"
                                                                       class=\"form-control{% if formViolations.getViolations('/email') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMail\"
                                                                       placeholder=\"{{ \"account.personalMailPlaceholder\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"email[email]\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       required=\"required\">
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_input_error %}
                                                                {% if formViolations.getViolations('/email') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/email'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}

                                                    {% block page_account_profile_mail_confirmation %}
                                                        <div class=\"form-group col\">
                                                            {% block page_account_profile_personal_mail_confirmation_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"personalMailConfirmation\">
                                                                    {{ \"account.personalMailConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_confirmation_input %}
                                                                <input type=\"email\"
                                                                       class=\"form-control{% if formViolations.getViolations('/email') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMailConfirmation\"
                                                                       placeholder=\"{{ \"account.personalMailConfirmationPlaceholder\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"email[emailConfirmation]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       data-form-validation-equal-message=\"{{ \"account.personalMailConfirmationInvalidMessage\"|trans|striptags }}\">
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_confirmation_input_error %}
                                                                {% if formViolations.getViolations('/email') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/email'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}
                                                </div>

                                                <p class=\"text-muted\">{{ \"account.profileConfirmPassword\"|trans|sw_sanitize }}</p>
                                            {% endblock %}

                                            {% block page_account_profile_mail_password %}
                                                <div class=\"form-row\">
                                                    <div class=\"form-group col-6\">
                                                        {% block page_account_profile_mail_password_label %}
                                                            <label class=\"form-label\"
                                                                   for=\"personalMailPasswordCurrent\">
                                                                {{ \"account.personalPasswordLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                            </label>
                                                        {% endblock %}

                                                        {% block page_account_profile_mail_password_input %}
                                                            <input type=\"password\"
                                                                   class=\"form-control{% if formViolations.getViolations('/password') is not empty and emailFormViolation %} is-invalid{% endif %}\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"personalMailPasswordCurrent\"
                                                                   placeholder=\"{{ \"account.profilePasswordCurrent\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                   name=\"email[password]\"
                                                                   required=\"required\">
                                                        {% endblock %}

                                                        {% block page_account_profile_mail_password_input_error %}
                                                            {% if formViolations.getViolations('/password') is not empty and emailFormViolation %}
                                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                    violationPath: '/password'
                                                                } %}
                                                            {% endif %}
                                                        {% endblock %}
                                                    </div>
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_mail_required %}
                                                <p class=\"account-profile-required-info required-fields\">
                                                    {{ \"general.requiredFields\"|trans|sw_sanitize }}
                                                </p>
                                            {% endblock %}

                                            {% block page_account_profile_mail_action_buttons %}
                                                <div class=\"card-actions\">
                                                    {% block page_account_profile_mail_action_button_send %}
                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"{{ \"account.profileSaveChanges\"|trans|striptags }}\">
                                                            {{ \"account.profileSaveChanges\"|trans|sw_sanitize }}
                                                        </button>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block page_account_profile_password %}
                            <div class=\"collapse{% if passwordFormViolation and formViolations %} show{% endif %}\" id=\"profile-password-form\" data-parent=\".profile-content\">
                                <div class=\"card account-password\">
                                    {% block page_account_profile_password_form %}
                                        <form id=\"profilePasswordForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              data-form-csrf-handler=\"true\"
                                              action=\"{{ path('frontend.account.profile.password.save') }}\"
                                              data-form-validation=\"true\">

                                            {% block page_account_profile_password_form_csrf %}
                                                {{ sw_csrf('frontend.account.profile.password.save') }}
                                            {% endblock %}

                                            {% block page_account_profile_password_title %}
                                                <div class=\"card-title\">
                                                    {{ \"account.profilePasswordTitle\"|trans|sw_sanitize }}
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_password_container %}
                                                <div class=\"form-row\">
                                                    {% block page_account_profile_new_password %}
                                                        <div class=\"col form-group\">
                                                            {% block page_account_profile_new_password_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"newPassword\">
                                                                    {{ \"account.profilePasswordCreateNew\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_input %}
                                                                <input type=\"password\"
                                                                       class=\"form-control{% if formViolations.getViolations('/newPassword') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"newPassword\"
                                                                       placeholder=\"{{ \"account.profilePasswordCreateNew\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"password[newPassword]\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-length=\"{{ shopware.config.core.loginRegistration.passwordMinLength }}\"
                                                                       data-form-validation-length-message=\" {{ \"account.personalPasswordDescription\"|trans({
                                                                           '%minLength%': shopware.config.core.loginRegistration.passwordMinLength
                                                                       })|sw_sanitize }}\"
                                                                       required=\"required\">
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_input_error %}
                                                                {% if formViolations.getViolations('/newPassword') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/newPassword'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}

                                                    {% block page_account_profile_new_password_confirmation %}
                                                        <div class=\"col form-group\">
                                                            {% block page_account_profile_new_password_confirmation_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"passwordConfirmation\">
                                                                    {{ \"account.personalPasswordConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_confirmation_input %}
                                                                <input type=\"password\"
                                                                       class=\"form-control{% if formViolations.getViolations('/newPassword') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"passwordConfirmation\"
                                                                       placeholder=\"{{ \"account.personalPasswordConfirmationLabel\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"password[newPasswordConfirm]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-equal-message=\"{{ \"account.personalPasswordConfirmationInvalidMessage\"|trans|striptags }}\">
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_confirmation_error %}
                                                                {% if formViolations.getViolations('/newPassword') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/newPassword'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}
                                                </div>

                                                <p class=\"text-muted\">{{ \"account.profileConfirmPassword\"|trans|sw_sanitize }}</p>
                                            {% endblock %}

                                            {% block page_account_profile_current_password %}
                                                <div class=\"form-row\">
                                                    <div class=\"col-6 form-group\">
                                                        {% block page_account_profile_current_password_label %}
                                                            <label class=\"form-label\"
                                                                   for=\"password\">
                                                                {{ \"account.profilePasswordCurrent\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                            </label>
                                                        {% endblock %}

                                                        {% block page_account_profile_current_password_input %}
                                                            <input type=\"password\"
                                                                   class=\"form-control{% if formViolations.getViolations('/password') is not empty and passwordFormViolation %} is-invalid{% endif %}\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"password\"
                                                                   placeholder=\"{{ \"account.profilePasswordCurrent\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                   name=\"password[password]\"
                                                                   required=\"required\">
                                                        {% endblock %}

                                                        {% block page_account_profile_current_password_input_error %}
                                                            {% if formViolations.getViolations('/password') is not empty and passwordFormViolation %}
                                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                    violationPath: '/password'
                                                                } %}
                                                            {% endif %}
                                                        {% endblock %}
                                                    </div>
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_password_required %}
                                                <p class=\"account-profile-required-info required-fields\">
                                                    {{ \"general.requiredFields\"|trans|sw_sanitize }}
                                                </p>
                                            {% endblock %}

                                            {% block page_account_profile_password_action_buttons %}
                                                <div class=\"card-actions\">
                                                    {% block page_account_profile_password_action_button_send %}
                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"{{ \"account.profileSaveChanges\"|trans|striptags }}\">
                                                            {{ \"account.profileSaveChanges\"|trans|sw_sanitize }}
                                                        </button>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_account_profile_delete_account %}
                    {% if shopware.config.core.loginRegistration.allowCustomerDeletion %}
                        <div class=\"account-deleting py-4\">
                            {{ 'account.profileDelete'|trans({
                                '%target%': '#confirmDeleteAccountModal'
                            })|raw }}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_account_delete_account_confirm_modal %}
                    {% if shopware.config.core.loginRegistration.allowCustomerDeletion %}
                        <div class=\"modal fade confirm-delete-account-modal\"
                             id=\"confirmDeleteAccountModal\"
                             tabindex=\"1\"
                             role=\"dialog\">
                            <div class=\"modal-dialog modal-dialog-centered\"
                                 role=\"document\">

                                {% block page_account_delete_account_confirm_modal_content %}
                                    <div class=\"modal-content\">

                                        {% block page_account_delete_account_confirm_modal_header %}
                                            <div class=\"modal-header\">

                                                {% block page_account_delete_account_confirm_modal_header_title %}
                                                    <div class=\"modal-title h3\">
                                                        {{ \"account.profileDeleteModalTitle\"|trans|sw_sanitize }}
                                                    </div>
                                                {% endblock %}

                                                {% block page_account_delete_account_confirm_modal_header_close_button %}
                                                    <button
                                                        type=\"button\"
                                                        class=\"modal-close close\"
                                                        data-dismiss=\"modal\"
                                                        aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">
                                                            {% sw_icon 'x' style { 'size': 'sm' } %}
                                                        </span>
                                                    </button>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block page_account_delete_account_confirm_modal_body %}
                                            <div class=\"modal-body\">

                                                {% block page_account_delete_account_confirm_modal_form %}
                                                    <form method=\"post\"
                                                          action=\"{{ path('frontend.account.profile.delete') }}\"
                                                          data-form-submit-loader=\"true\">

                                                        {% block page_account_delete_account_confirm_form_csrf %}
                                                            {{ sw_csrf('frontend.account.profile.delete') }}
                                                        {% endblock %}

                                                        {% block page_account_delete_account_confirm_alert %}
                                                            {{ \"account.profileDeleteAlert\"|trans|sw_sanitize }}
                                                        {% endblock %}

                                                        {% block page_account_delete_account_confirm_text %}
                                                            <h6 class=\"py-2\">{{ \"account.profileDeleteConfirm\"|trans|sw_sanitize }}</h6>
                                                        {% endblock %}

                                                        {% block page_account_delete_account_confirm_button %}
                                                            <div class=\"text-right\">
                                                                <button class=\"btn btn-outline-danger\" type=\"submit\">
                                                                    {{ \"account.profileDeleteButton\"|trans|sw_sanitize }}
                                                                </button>
                                                            </div>
                                                        {% endblock %}
                                                    </form>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/profile/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/profile/index.html.twig");
    }
}
