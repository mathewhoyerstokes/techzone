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

/* @Storefront/storefront/page/account/index.html.twig */
class __TwigTemplate_3b10e55d171801f183384767a6b09368ce4944abee608e53138105cfa2c6011f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_overview' => [$this, 'block_page_account_overview'],
            'page_account_overview_welcome' => [$this, 'block_page_account_overview_welcome'],
            'page_account_overview_welcome_intro' => [$this, 'block_page_account_overview_welcome_intro'],
            'page_account_overview_main' => [$this, 'block_page_account_overview_main'],
            'page_account_overview_profile' => [$this, 'block_page_account_overview_profile'],
            'page_account_overview_profile_card' => [$this, 'block_page_account_overview_profile_card'],
            'page_account_overview_profile_title' => [$this, 'block_page_account_overview_profile_title'],
            'page_account_overview_profile_content' => [$this, 'block_page_account_overview_profile_content'],
            'page_account_overview_profile_email' => [$this, 'block_page_account_overview_profile_email'],
            'page_account_overview_profile_actions' => [$this, 'block_page_account_overview_profile_actions'],
            'page_account_overview_payment' => [$this, 'block_page_account_overview_payment'],
            'page_account_overview_payment_card' => [$this, 'block_page_account_overview_payment_card'],
            'page_account_overview_payment_title' => [$this, 'block_page_account_overview_payment_title'],
            'page_account_overview_payment_content' => [$this, 'block_page_account_overview_payment_content'],
            'page_account_overview_payment_actions' => [$this, 'block_page_account_overview_payment_actions'],
            'page_account_overview_newsletter' => [$this, 'block_page_account_overview_newsletter'],
            'page_account_overview_newsletter_title' => [$this, 'block_page_account_overview_newsletter_title'],
            'page_account_overview_newsletter_content' => [$this, 'block_page_account_overview_newsletter_content'],
            'page_account_overview_addresses_include' => [$this, 'block_page_account_overview_addresses_include'],
            'page_account_overview_newest_order' => [$this, 'block_page_account_overview_newest_order'],
            'page_account_overview_newest_order_title' => [$this, 'block_page_account_overview_newest_order_title'],
            'page_account_overview_newest_order_content' => [$this, 'block_page_account_overview_newest_order_content'],
            'page_account_overview_newest_order_table_header' => [$this, 'block_page_account_overview_newest_order_table_header'],
            'page_account_overview_newest_order_table_header_date' => [$this, 'block_page_account_overview_newest_order_table_header_date'],
            'page_account_overview_newest_order_table_header_number' => [$this, 'block_page_account_overview_newest_order_table_header_number'],
            'page_account_overview_newest_order_table_header_payment_method' => [$this, 'block_page_account_overview_newest_order_table_header_payment_method'],
            'page_account_overview_newest_order_table_header_shipping_method' => [$this, 'block_page_account_overview_newest_order_table_header_shipping_method'],
            'page_account_overview_newest_order_table_header_actions' => [$this, 'block_page_account_overview_newest_order_table_header_actions'],
            'page_account_overview_newest_order_table' => [$this, 'block_page_account_overview_newest_order_table'],
            'page_account_overview_newest_order_table_body' => [$this, 'block_page_account_overview_newest_order_table_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/index.html.twig", 2);
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
        $this->displayBlock('page_account_overview', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview"));

        // line 5
        echo "        <div class=\"account-overview\">
            ";
        // line 6
        $this->displayBlock('page_account_overview_welcome', $context, $blocks);
        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('page_account_overview_main', $context, $blocks);
        // line 102
        echo "
            ";
        // line 103
        $this->displayBlock('page_account_overview_newsletter', $context, $blocks);
        // line 122
        echo "
            ";
        // line 123
        $this->displayBlock('page_account_overview_addresses_include', $context, $blocks);
        // line 126
        echo "
            ";
        // line 127
        $this->displayBlock('page_account_overview_newest_order', $context, $blocks);
        // line 178
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_account_overview_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_welcome"));

        // line 7
        echo "                <div class=\"account-welcome\">
                    <h1>";
        // line 8
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewTitle"));
        echo "</h1>
                    ";
        // line 9
        $this->displayBlock('page_account_overview_welcome_intro', $context, $blocks);
        // line 12
        echo "
                    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customer", [], "any", false, false, false, 13), "requestedGroup", [], "any", false, false, false, 13)) {
            // line 14
            echo "                        ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/index.html.twig", 14)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewCustomerGroupRequest", ["%group%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 17
($context["page"] ?? null), "customer", [], "any", false, false, false, 17), "requestedGroup", [], "any", false, false, false, 17), "translated", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)])]));
            // line 20
            echo "                    ";
        }
        // line 21
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_account_overview_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_welcome_intro"));

        // line 10
        echo "                        <p>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewInfo"));
        echo "</p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_account_overview_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_main"));

        // line 25
        echo "                <div class=\"row\">
                    ";
        // line 26
        $this->displayBlock('page_account_overview_profile', $context, $blocks);
        // line 69
        echo "
                    ";
        // line 70
        $this->displayBlock('page_account_overview_payment', $context, $blocks);
        // line 100
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_page_account_overview_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile"));

        // line 27
        echo "                        <div class=\"col-lg-6 card-col account-overview-card account-overview-profile\">
                            ";
        // line 28
        $this->displayBlock('page_account_overview_profile_card', $context, $blocks);
        // line 67
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_account_overview_profile_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_card"));

        // line 29
        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 31
        $this->displayBlock('page_account_overview_profile_title', $context, $blocks);
        // line 36
        echo "
                                        ";
        // line 37
        $this->displayBlock('page_account_overview_profile_content', $context, $blocks);
        // line 48
        echo "
                                        ";
        // line 49
        $this->displayBlock('page_account_overview_profile_email', $context, $blocks);
        // line 54
        echo "
                                        ";
        // line 55
        $this->displayBlock('page_account_overview_profile_actions', $context, $blocks);
        // line 64
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_page_account_overview_profile_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_title"));

        // line 32
        echo "                                            <h2 class=\"card-title\">
                                                ";
        // line 33
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewProfileHeader"));
        echo "
                                            </h2>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_account_overview_profile_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_content"));

        // line 38
        echo "                                            <p>
                                                ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 39), "salutation", [], "any", false, false, false, 39), "salutationKey", [], "any", false, false, false, 39) != "not_specified")) {
            // line 40
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 40), "salutation", [], "any", false, false, false, 40), "translated", [], "any", false, false, false, 40), "displayName", [], "any", false, false, false, 40), "html", null, true);
            echo "
                                                ";
        }
        // line 42
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
            echo "<br/>
                                                ";
        }
        // line 45
        echo "                                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 45), "firstName", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 45), "lastName", [], "any", false, false, false, 45), "html", null, true);
        echo "
                                            </p>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_page_account_overview_profile_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_email"));

        // line 50
        echo "                                            <p>
                                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
        echo "
                                            </p>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_page_account_overview_profile_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_profile_actions"));

        // line 56
        echo "                                            <div class=\"card-actions\">
                                                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.page");
        echo "\"
                                                   title=\"";
        // line 58
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeProfile")), "html", null, true);
        echo "\"
                                                   class=\"btn btn-light\">
                                                    ";
        // line 60
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangeProfile"));
        echo "
                                                </a>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_page_account_overview_payment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment"));

        // line 71
        echo "                        <div class=\"col-lg-6 card-col account-overview-card account-overview-payment\">
                            ";
        // line 72
        $this->displayBlock('page_account_overview_payment_card', $context, $blocks);
        // line 98
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_page_account_overview_payment_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_card"));

        // line 73
        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 75
        $this->displayBlock('page_account_overview_payment_title', $context, $blocks);
        // line 80
        echo "
                                        ";
        // line 81
        $this->displayBlock('page_account_overview_payment_content', $context, $blocks);
        // line 85
        echo "
                                        ";
        // line 86
        $this->displayBlock('page_account_overview_payment_actions', $context, $blocks);
        // line 95
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_page_account_overview_payment_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_title"));

        // line 76
        echo "                                            <h2 class=\"card-title\">
                                                ";
        // line 77
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewPaymentHeader"));
        echo "
                                            </h2>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
    public function block_page_account_overview_payment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_content"));

        // line 82
        echo "                                            <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 82), "defaultPaymentMethod", [], "any", false, false, false, 82), "translated", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
        echo "</strong>
                                            <p>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 83), "defaultPaymentMethod", [], "any", false, false, false, 83), "description", [], "any", false, false, false, 83), "html", null, true);
        echo "</p>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_page_account_overview_payment_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_payment_actions"));

        // line 87
        echo "                                            <div class=\"card-actions\">
                                                <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.payment.page");
        echo "\"
                                                   title=\"";
        // line 89
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangePayment")), "html", null, true);
        echo "\"
                                                   class=\"btn btn-light\">
                                                    ";
        // line 91
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewChangePayment"));
        echo "
                                                </a>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_page_account_overview_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter"));

        // line 104
        echo "                <div class=\"account-overview-card account-overview-newsletter\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 107
        $this->displayBlock('page_account_overview_newsletter_title', $context, $blocks);
        // line 112
        echo "
                            ";
        // line 113
        $this->displayBlock('page_account_overview_newsletter_content', $context, $blocks);
        // line 118
        echo "                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_page_account_overview_newsletter_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_title"));

        // line 108
        echo "                                <h2 class=\"card-title\">
                                    ";
        // line 109
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.newsletterTitle"));
        echo "
                                </h2>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_page_account_overview_newsletter_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content"));

        // line 114
        echo "                                <div class=\"js-newsletter-wrapper\">
                                    ";
        // line 115
        $this->loadTemplate("@Storefront/storefront/page/account/newsletter.html.twig", "@Storefront/storefront/page/account/index.html.twig", 115)->display(twig_array_merge($context, ["customer" => twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 115)]));
        // line 116
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_page_account_overview_addresses_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_addresses_include"));

        // line 124
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/page/account/address.html.twig", "@Storefront/storefront/page/account/index.html.twig", 124)->display($context);
        // line 125
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_page_account_overview_newest_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order"));

        // line 128
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "newestOrder", [], "any", false, false, false, 128)) {
            // line 129
            echo "                    <div class=\"account-overview-card account-overview-newest-order\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                ";
            // line 132
            $this->displayBlock('page_account_overview_newest_order_title', $context, $blocks);
            // line 137
            echo "
                                ";
            // line 138
            $this->displayBlock('page_account_overview_newest_order_content', $context, $blocks);
            // line 173
            echo "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 177
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_page_account_overview_newest_order_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_title"));

        // line 133
        echo "                                    <h2 class=\"card-title\">
                                        ";
        // line 134
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.overviewNewestOrderHeader"));
        echo "
                                    </h2>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 138
    public function block_page_account_overview_newest_order_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_content"));

        // line 139
        echo "
                                    ";
        // line 141
        echo "                                    ";
        $this->displayBlock('page_account_overview_newest_order_table_header', $context, $blocks);
        // line 158
        echo "
                                    ";
        // line 159
        $this->displayBlock('page_account_overview_newest_order_table', $context, $blocks);
        // line 172
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 141
    public function block_page_account_overview_newest_order_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_header"));

        // line 142
        echo "
                                        ";
        // line 144
        echo "                                        ";
        $this->displayBlock('page_account_overview_newest_order_table_header_date', $context, $blocks);
        // line 145
        echo "
                                        ";
        // line 147
        echo "                                        ";
        $this->displayBlock('page_account_overview_newest_order_table_header_number', $context, $blocks);
        // line 148
        echo "
                                        ";
        // line 150
        echo "                                        ";
        $this->displayBlock('page_account_overview_newest_order_table_header_payment_method', $context, $blocks);
        // line 151
        echo "
                                        ";
        // line 153
        echo "                                        ";
        $this->displayBlock('page_account_overview_newest_order_table_header_shipping_method', $context, $blocks);
        // line 154
        echo "
                                        ";
        // line 156
        echo "                                        ";
        $this->displayBlock('page_account_overview_newest_order_table_header_actions', $context, $blocks);
        // line 157
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 144
    public function block_page_account_overview_newest_order_table_header_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_header_date"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 147
    public function block_page_account_overview_newest_order_table_header_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_header_number"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block_page_account_overview_newest_order_table_header_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_header_payment_method"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 153
    public function block_page_account_overview_newest_order_table_header_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_header_shipping_method"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_page_account_overview_newest_order_table_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_header_actions"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 159
    public function block_page_account_overview_newest_order_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table"));

        // line 160
        echo "                                        <div class=\"table order-table\">

                                            ";
        // line 162
        $this->displayBlock('page_account_overview_newest_order_table_body', $context, $blocks);
        // line 170
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 162
    public function block_page_account_overview_newest_order_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newest_order_table_body"));

        // line 163
        echo "                                                <div class=\"order-table-body\"
                                                     data-order-detail-loader=\"true\">
                                                    ";
        // line 165
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-item.html.twig", "@Storefront/storefront/page/account/index.html.twig", 165)->display(twig_array_merge($context, ["order" => twig_get_attribute($this->env, $this->source,         // line 166
($context["page"] ?? null), "newestOrder", [], "any", false, false, false, 166)]));
        // line 168
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  809 => 168,  807 => 166,  806 => 165,  802 => 163,  795 => 162,  787 => 170,  785 => 162,  781 => 160,  774 => 159,  762 => 156,  750 => 153,  738 => 150,  726 => 147,  714 => 144,  707 => 157,  704 => 156,  701 => 154,  698 => 153,  695 => 151,  692 => 150,  689 => 148,  686 => 147,  683 => 145,  680 => 144,  677 => 142,  670 => 141,  663 => 172,  661 => 159,  658 => 158,  655 => 141,  652 => 139,  645 => 138,  635 => 134,  632 => 133,  625 => 132,  618 => 177,  612 => 173,  610 => 138,  607 => 137,  605 => 132,  600 => 129,  597 => 128,  590 => 127,  583 => 125,  580 => 124,  573 => 123,  565 => 116,  563 => 115,  560 => 114,  553 => 113,  543 => 109,  540 => 108,  533 => 107,  523 => 118,  521 => 113,  518 => 112,  516 => 107,  511 => 104,  504 => 103,  493 => 91,  488 => 89,  484 => 88,  481 => 87,  474 => 86,  465 => 83,  460 => 82,  453 => 81,  443 => 77,  440 => 76,  433 => 75,  424 => 95,  422 => 86,  419 => 85,  417 => 81,  414 => 80,  412 => 75,  408 => 73,  401 => 72,  393 => 98,  391 => 72,  388 => 71,  381 => 70,  370 => 60,  365 => 58,  361 => 57,  358 => 56,  351 => 55,  341 => 51,  338 => 50,  331 => 49,  318 => 45,  312 => 43,  309 => 42,  303 => 40,  301 => 39,  298 => 38,  291 => 37,  281 => 33,  278 => 32,  271 => 31,  262 => 64,  260 => 55,  257 => 54,  255 => 49,  252 => 48,  250 => 37,  247 => 36,  245 => 31,  241 => 29,  234 => 28,  226 => 67,  224 => 28,  221 => 27,  214 => 26,  206 => 100,  204 => 70,  201 => 69,  199 => 26,  196 => 25,  189 => 24,  179 => 10,  172 => 9,  164 => 21,  161 => 20,  159 => 17,  157 => 14,  155 => 13,  152 => 12,  150 => 9,  146 => 8,  143 => 7,  136 => 6,  128 => 178,  126 => 127,  123 => 126,  121 => 123,  118 => 122,  116 => 103,  113 => 102,  111 => 24,  108 => 23,  106 => 6,  103 => 5,  89 => 4,  82 => 3,  65 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    {% block page_account_overview %}
        <div class=\"account-overview\">
            {% block page_account_overview_welcome %}
                <div class=\"account-welcome\">
                    <h1>{{ \"account.overviewTitle\"|trans|sw_sanitize }}</h1>
                    {% block page_account_overview_welcome_intro %}
                        <p>{{ \"account.overviewInfo\"|trans|sw_sanitize }}</p>
                    {% endblock %}

                    {% if page.customer.requestedGroup %}
                        {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                            type: 'info',
                            content: 'account.overviewCustomerGroupRequest'|trans({
                                '%group%': page.customer.requestedGroup.translated.name
                            })
                        } %}
                    {% endif %}
                </div>
            {% endblock %}

            {% block page_account_overview_main %}
                <div class=\"row\">
                    {% block page_account_overview_profile %}
                        <div class=\"col-lg-6 card-col account-overview-card account-overview-profile\">
                            {% block page_account_overview_profile_card %}
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        {% block page_account_overview_profile_title %}
                                            <h2 class=\"card-title\">
                                                {{ \"account.overviewProfileHeader\"|trans|sw_sanitize }}
                                            </h2>
                                        {% endblock %}

                                        {% block page_account_overview_profile_content %}
                                            <p>
                                                {% if context.customer.salutation.salutationKey != 'not_specified' %}
                                                    {{ context.customer.salutation.translated.displayName }}
                                                {% endif %}
                                                {% if context.customer.title %}
                                                    {{ context.customer.title }}<br/>
                                                {% endif %}
                                                {{ context.customer.firstName }} {{ context.customer.lastName }}
                                            </p>
                                        {% endblock %}

                                        {% block page_account_overview_profile_email %}
                                            <p>
                                                {{ context.customer.email }}
                                            </p>
                                        {% endblock %}

                                        {% block page_account_overview_profile_actions %}
                                            <div class=\"card-actions\">
                                                <a href=\"{{ path('frontend.account.profile.page') }}\"
                                                   title=\"{{ \"account.overviewChangeProfile\"|trans|striptags }}\"
                                                   class=\"btn btn-light\">
                                                    {{ \"account.overviewChangeProfile\"|trans|sw_sanitize }}
                                                </a>
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block page_account_overview_payment %}
                        <div class=\"col-lg-6 card-col account-overview-card account-overview-payment\">
                            {% block page_account_overview_payment_card %}
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        {% block page_account_overview_payment_title %}
                                            <h2 class=\"card-title\">
                                                {{ \"account.overviewPaymentHeader\"|trans|sw_sanitize }}
                                            </h2>
                                        {% endblock %}

                                        {% block page_account_overview_payment_content %}
                                            <strong>{{ context.customer.defaultPaymentMethod.translated.name }}</strong>
                                            <p>{{ context.customer.defaultPaymentMethod.description }}</p>
                                        {% endblock %}

                                        {% block page_account_overview_payment_actions %}
                                            <div class=\"card-actions\">
                                                <a href=\"{{ path('frontend.account.payment.page') }}\"
                                                   title=\"{{ \"account.overviewChangePayment\"|trans|striptags }}\"
                                                   class=\"btn btn-light\">
                                                    {{ \"account.overviewChangePayment\"|trans|sw_sanitize }}
                                                </a>
                                            </div>
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_overview_newsletter %}
                <div class=\"account-overview-card account-overview-newsletter\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            {% block page_account_overview_newsletter_title %}
                                <h2 class=\"card-title\">
                                    {{ \"account.newsletterTitle\"|trans|sw_sanitize }}
                                </h2>
                            {% endblock %}

                            {% block page_account_overview_newsletter_content %}
                                <div class=\"js-newsletter-wrapper\">
                                    {% sw_include \"@Storefront/storefront/page/account/newsletter.html.twig\" with { \"customer\": context.customer } %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block page_account_overview_addresses_include %}
                {% sw_include \"@Storefront/storefront/page/account/address.html.twig\" %}
            {% endblock %}

            {% block page_account_overview_newest_order %}
                {% if page.newestOrder %}
                    <div class=\"account-overview-card account-overview-newest-order\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {% block page_account_overview_newest_order_title %}
                                    <h2 class=\"card-title\">
                                        {{ \"account.overviewNewestOrderHeader\"|trans|sw_sanitize }}
                                    </h2>
                                {% endblock %}

                                {% block page_account_overview_newest_order_content %}

                                    {# @deprecated tag:v6.4.0 #}
                                    {% block page_account_overview_newest_order_table_header %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_overview_newest_order_table_header_date %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_overview_newest_order_table_header_number %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_overview_newest_order_table_header_payment_method %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_overview_newest_order_table_header_shipping_method %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_overview_newest_order_table_header_actions %}{% endblock %}
                                    {% endblock %}

                                    {% block page_account_overview_newest_order_table %}
                                        <div class=\"table order-table\">

                                            {% block page_account_overview_newest_order_table_body %}
                                                <div class=\"order-table-body\"
                                                     data-order-detail-loader=\"true\">
                                                    {% sw_include '@Storefront/storefront/page/account/order-history/order-item.html.twig' with {
                                                        order: page.newestOrder
                                                    } %}
                                                </div>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                {% endblock %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/index.html.twig");
    }
}
