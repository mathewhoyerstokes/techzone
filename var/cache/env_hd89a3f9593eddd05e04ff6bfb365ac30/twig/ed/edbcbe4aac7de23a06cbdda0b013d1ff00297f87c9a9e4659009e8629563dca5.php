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

/* @Storefront/storefront/component/account/login.html.twig */
class __TwigTemplate_9c0153cbc26cb3cb4312915cb756f3f07cead0e1edc278bfe88934cf21aa5939 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_login' => [$this, 'block_component_account_login'],
            'component_account_login_header' => [$this, 'block_component_account_login_header'],
            'component_account_login_form' => [$this, 'block_component_account_login_form'],
            'component_account_login_form_csrf' => [$this, 'block_component_account_login_form_csrf'],
            'component_account_login_form_redirect' => [$this, 'block_component_account_login_form_redirect'],
            'component_account_login_form_description' => [$this, 'block_component_account_login_form_description'],
            'component_account_login_form_error' => [$this, 'block_component_account_login_form_error'],
            'component_account_login_form_fields' => [$this, 'block_component_account_login_form_fields'],
            'component_account_login_form_mail' => [$this, 'block_component_account_login_form_mail'],
            'component_account_login_form_mail_label' => [$this, 'block_component_account_login_form_mail_label'],
            'component_account_login_form_mail_input' => [$this, 'block_component_account_login_form_mail_input'],
            'component_account_login_form_password' => [$this, 'block_component_account_login_form_password'],
            'component_account_login_form_password_label' => [$this, 'block_component_account_login_form_password_label'],
            'component_account_login_form_password_input' => [$this, 'block_component_account_login_form_password_input'],
            'component_account_login_password_recover' => [$this, 'block_component_account_login_password_recover'],
            'component_account_login_password_recover_link' => [$this, 'block_component_account_login_password_recover_link'],
            'component_account_login_submit' => [$this, 'block_component_account_login_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/login.html.twig"));

        // line 1
        $this->displayBlock('component_account_login', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_account_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login"));

        // line 2
        echo "    <div class=\"card login-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_login_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_login_form', $context, $blocks);
        // line 118
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_component_account_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_header"));

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
    public function block_component_account_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form"));

        // line 13
        echo "                <form class=\"login-form\"
                      action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login");
        echo "\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 19
        $this->displayBlock('component_account_login_form_csrf', $context, $blocks);
        // line 22
        echo "
                    ";
        // line 23
        $this->displayBlock('component_account_login_form_redirect', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('component_account_login_form_description', $context, $blocks);
        // line 38
        echo "
                    ";
        // line 39
        $this->displayBlock('component_account_login_form_error', $context, $blocks);
        // line 54
        echo "
                    ";
        // line 55
        $this->displayBlock('component_account_login_form_fields', $context, $blocks);
        // line 97
        echo "
                    ";
        // line 98
        $this->displayBlock('component_account_login_password_recover', $context, $blocks);
        // line 107
        echo "
                    ";
        // line 108
        $this->displayBlock('component_account_login_submit', $context, $blocks);
        // line 116
        echo "                </form>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_component_account_login_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_csrf"));

        // line 20
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.login");
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_component_account_login_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_redirect"));

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
    public function block_component_account_login_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_description"));

        // line 34
        echo "                        <p class=\"login-form-description\">
                            ";
        // line 35
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginFormDescription"));
        echo "
                        </p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_component_account_login_form_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_error"));

        // line 40
        echo "                        ";
        if (($context["loginError"] ?? null)) {
            // line 41
            echo "                            ";
            if ((($context["errorSnippet"] ?? null) != null)) {
                // line 42
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 42)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 44
($context["errorSnippet"] ?? null)))]));
                // line 46
                echo "                            ";
            } else {
                // line 47
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 47)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginBadCredentials"))]));
                // line 51
                echo "                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_component_account_login_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_fields"));

        // line 56
        echo "                        <div class=\"form-row\">
                            ";
        // line 57
        $this->displayBlock('component_account_login_form_mail', $context, $blocks);
        // line 76
        echo "
                            ";
        // line 77
        $this->displayBlock('component_account_login_form_password', $context, $blocks);
        // line 95
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_component_account_login_form_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail"));

        // line 58
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 59
        $this->displayBlock('component_account_login_form_mail_label', $context, $blocks);
        // line 65
        echo "
                                    ";
        // line 66
        $this->displayBlock('component_account_login_form_mail_input', $context, $blocks);
        // line 74
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_component_account_login_form_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail_label"));

        // line 60
        echo "                                        <label class=\"form-label\"
                                               for=\"loginMail\">
                                            ";
        // line 62
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailLabel"));
        echo "
                                        </label>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_component_account_login_form_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail_input"));

        // line 67
        echo "                                        <input type=\"email\"
                                               class=\"form-control";
        // line 68
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginMail\"
                                               placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"username\"
                                               required=\"required\">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_component_account_login_form_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password"));

        // line 78
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 79
        $this->displayBlock('component_account_login_form_password_label', $context, $blocks);
        // line 85
        echo "                                    ";
        $this->displayBlock('component_account_login_form_password_input', $context, $blocks);
        // line 93
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_component_account_login_form_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password_label"));

        // line 80
        echo "                                        <label class=\"form-label\"
                                               for=\"loginPassword\">
                                            ";
        // line 82
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordLabel"));
        echo "
                                        </label>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_component_account_login_form_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password_input"));

        // line 86
        echo "                                        <input type=\"password\"
                                               class=\"form-control";
        // line 87
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginPassword\"
                                               placeholder=\"";
        // line 89
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"password\"
                                               required=\"required\">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_component_account_login_password_recover($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_password_recover"));

        // line 99
        echo "                        <div class=\"login-password-recover\">
                            ";
        // line 100
        $this->displayBlock('component_account_login_password_recover_link', $context, $blocks);
        // line 105
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_component_account_login_password_recover_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_password_recover_link"));

        // line 101
        echo "                                <a href=\"";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.account.recover.page");
        echo "\">
                                    ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordRecover"), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_component_account_login_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_submit"));

        // line 109
        echo "                        <div class=\"login-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary\">
                                ";
        // line 112
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        echo "
                            </button>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  499 => 112,  494 => 109,  487 => 108,  477 => 102,  472 => 101,  465 => 100,  457 => 105,  455 => 100,  452 => 99,  445 => 98,  434 => 89,  427 => 87,  424 => 86,  417 => 85,  407 => 82,  403 => 80,  396 => 79,  388 => 93,  385 => 85,  383 => 79,  380 => 78,  373 => 77,  362 => 70,  355 => 68,  352 => 67,  345 => 66,  335 => 62,  331 => 60,  324 => 59,  316 => 74,  314 => 66,  311 => 65,  309 => 59,  306 => 58,  299 => 57,  291 => 95,  289 => 77,  286 => 76,  284 => 57,  281 => 56,  274 => 55,  267 => 53,  264 => 52,  261 => 51,  258 => 47,  255 => 46,  253 => 44,  251 => 42,  248 => 41,  245 => 40,  238 => 39,  228 => 35,  225 => 34,  218 => 33,  209 => 30,  202 => 26,  198 => 24,  191 => 23,  181 => 20,  174 => 19,  166 => 116,  164 => 108,  161 => 107,  159 => 98,  156 => 97,  154 => 55,  151 => 54,  149 => 39,  146 => 38,  144 => 33,  141 => 32,  139 => 23,  136 => 22,  134 => 19,  126 => 14,  123 => 13,  116 => 12,  109 => 10,  103 => 7,  100 => 6,  97 => 5,  90 => 4,  81 => 118,  79 => 12,  76 => 11,  74 => 4,  70 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_account_login %}
    <div class=\"card login-card\">
        <div class=\"card-body\">
            {% block component_account_login_header %}
                {% if cardTitle %}
                    <div class=\"card-title\">
                        {{ cardTitle }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_account_login_form %}
                <form class=\"login-form\"
                      action=\"{{ path('frontend.account.login') }}\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    {% block component_account_login_form_csrf %}
                        {{ sw_csrf('frontend.account.login') }}
                    {% endblock %}

                    {% block component_account_login_form_redirect %}
                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"{{ redirectTo }}\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"{{ redirectParameters }}\">
                    {% endblock %}

                    {% block component_account_login_form_description %}
                        <p class=\"login-form-description\">
                            {{ \"account.loginFormDescription\"|trans|sw_sanitize }}
                        </p>
                    {% endblock %}

                    {% block component_account_login_form_error %}
                        {% if loginError %}
                            {% if errorSnippet != null %}
                                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                    type: \"danger\",
                                    content: errorSnippet|trans|sw_sanitize
                                } %}
                            {% else %}
                                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                    type: \"danger\",
                                    content: \"account.loginBadCredentials\"|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endif %}
                    {% endblock %}

                    {% block component_account_login_form_fields %}
                        <div class=\"form-row\">
                            {% block component_account_login_form_mail %}
                                <div class=\"form-group col-md-6\">
                                    {% block component_account_login_form_mail_label %}
                                        <label class=\"form-label\"
                                               for=\"loginMail\">
                                            {{ \"account.loginMailLabel\"|trans|sw_sanitize }}
                                        </label>
                                    {% endblock %}

                                    {% block component_account_login_form_mail_input %}
                                        <input type=\"email\"
                                               class=\"form-control{% if loginError %} is-invalid{% endif %}\"
                                               id=\"loginMail\"
                                               placeholder=\"{{ \"account.loginMailPlaceholder\"|trans|striptags }}\"
                                               name=\"username\"
                                               required=\"required\">
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block component_account_login_form_password %}
                                <div class=\"form-group col-md-6\">
                                    {% block component_account_login_form_password_label %}
                                        <label class=\"form-label\"
                                               for=\"loginPassword\">
                                            {{ \"account.loginPasswordLabel\"|trans|sw_sanitize }}
                                        </label>
                                    {% endblock %}
                                    {% block component_account_login_form_password_input %}
                                        <input type=\"password\"
                                               class=\"form-control{% if loginError %} is-invalid{% endif %}\"
                                               id=\"loginPassword\"
                                               placeholder=\"{{ \"account.loginPasswordPlaceholder\"|trans|striptags }}\"
                                               name=\"password\"
                                               required=\"required\">
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_login_password_recover %}
                        <div class=\"login-password-recover\">
                            {% block component_account_login_password_recover_link %}
                                <a href=\"{{ seoUrl('frontend.account.recover.page') }}\">
                                    {{ 'account.loginPasswordRecover'|trans }}
                                </a>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_login_submit %}
                        <div class=\"login-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary\">
                                {{ \"account.loginSubmit\"|trans|sw_sanitize }}
                            </button>
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/component/account/login.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/account/login.html.twig");
    }
}
