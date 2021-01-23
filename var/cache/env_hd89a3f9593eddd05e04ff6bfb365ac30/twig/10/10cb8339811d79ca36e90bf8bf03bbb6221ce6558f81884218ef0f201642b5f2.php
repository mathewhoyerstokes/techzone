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

/* @Storefront/storefront/page/account/order-history/index.html.twig */
class __TwigTemplate_5315e1b362b35fd572be2b5066af2fb20b585b4807b20259cf8f16e3856a04f1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_orders' => [$this, 'block_page_account_orders'],
            'page_account_orders_welcome' => [$this, 'block_page_account_orders_welcome'],
            'page_account_orders_welcome_headline' => [$this, 'block_page_account_orders_welcome_headline'],
            'page_account_orders_main' => [$this, 'block_page_account_orders_main'],
            'page_account_orders_info_empty' => [$this, 'block_page_account_orders_info_empty'],
            'page_account_orders_overview' => [$this, 'block_page_account_orders_overview'],
            'page_account_orders_table' => [$this, 'block_page_account_orders_table'],
            'page_account_orders_table_header' => [$this, 'block_page_account_orders_table_header'],
            'page_account_orders_table_header_date' => [$this, 'block_page_account_orders_table_header_date'],
            'page_account_orders_table_header_number' => [$this, 'block_page_account_orders_table_header_number'],
            'page_account_orders_table_header_payment_method' => [$this, 'block_page_account_orders_table_header_payment_method'],
            'page_account_orders_table_header_shipping_method' => [$this, 'block_page_account_orders_table_header_shipping_method'],
            'page_account_orders_table_header_actions' => [$this, 'block_page_account_orders_table_header_actions'],
            'page_account_orders_table_body' => [$this, 'block_page_account_orders_table_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/order-history/index.html.twig", 2);
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
        $this->displayBlock('page_account_orders', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_orders($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders"));

        // line 5
        echo "        <div class=\"account-orders\">
            ";
        // line 6
        $this->displayBlock('page_account_orders_welcome', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('page_account_orders_main', $context, $blocks);
        // line 62
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_account_orders_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_welcome"));

        // line 7
        echo "                <div class=\"account-welcome\">
                    ";
        // line 8
        $this->displayBlock('page_account_orders_welcome_headline', $context, $blocks);
        // line 12
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_account_orders_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_welcome_headline"));

        // line 9
        echo "                        <h1>";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersTitle"));
        echo "</h1>
                        <p>";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersWelcome"));
        echo "</p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_account_orders_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_main"));

        // line 16
        echo "                <div class=\"account-orders-main\">
                    ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "orders", [], "any", false, false, false, 17), "total", [], "any", false, false, false, 17) == 0)) {
            // line 18
            echo "                        ";
            $this->displayBlock('page_account_orders_info_empty', $context, $blocks);
            // line 24
            echo "                    ";
        } else {
            // line 25
            echo "                        ";
            $this->displayBlock('page_account_orders_overview', $context, $blocks);
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_account_orders_info_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_info_empty"));

        // line 19
        echo "                            ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/order-history/index.html.twig", 19)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.ordersInfoEmpty"))]));
        // line 23
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_page_account_orders_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_overview"));

        // line 26
        echo "                            <div class=\"account-orders-overview\">
                                ";
        // line 27
        $this->displayBlock('page_account_orders_table', $context, $blocks);
        // line 57
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_account_orders_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table"));

        // line 28
        echo "
                                    ";
        // line 30
        echo "                                    ";
        $this->displayBlock('page_account_orders_table_header', $context, $blocks);
        // line 47
        echo "
                                    ";
        // line 48
        $this->displayBlock('page_account_orders_table_body', $context, $blocks);
        // line 56
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_account_orders_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_header"));

        // line 31
        echo "
                                        ";
        // line 33
        echo "                                        ";
        $this->displayBlock('page_account_orders_table_header_date', $context, $blocks);
        // line 34
        echo "
                                        ";
        // line 36
        echo "                                        ";
        $this->displayBlock('page_account_orders_table_header_number', $context, $blocks);
        // line 37
        echo "
                                        ";
        // line 39
        echo "                                        ";
        $this->displayBlock('page_account_orders_table_header_payment_method', $context, $blocks);
        // line 40
        echo "
                                        ";
        // line 42
        echo "                                        ";
        $this->displayBlock('page_account_orders_table_header_shipping_method', $context, $blocks);
        // line 43
        echo "
                                        ";
        // line 45
        echo "                                        ";
        $this->displayBlock('page_account_orders_table_header_actions', $context, $blocks);
        // line 46
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_page_account_orders_table_header_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_header_date"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_page_account_orders_table_header_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_header_number"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_page_account_orders_table_header_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_header_payment_method"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_page_account_orders_table_header_shipping_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_header_shipping_method"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_page_account_orders_table_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_header_actions"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_page_account_orders_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orders_table_body"));

        // line 49
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "orders", [], "any", false, false, false, 49));
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
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 50
            echo "                                            <div class=\"table order-table\"
                                                 data-order-detail-loader=\"true\">
                                                ";
            // line 52
            $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-item.html.twig", "@Storefront/storefront/page/account/order-history/index.html.twig", 52)->display($context);
            // line 53
            echo "                                            </div>
                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order-history/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 55,  375 => 53,  373 => 52,  369 => 50,  351 => 49,  344 => 48,  332 => 45,  320 => 42,  308 => 39,  296 => 36,  284 => 33,  277 => 46,  274 => 45,  271 => 43,  268 => 42,  265 => 40,  262 => 39,  259 => 37,  256 => 36,  253 => 34,  250 => 33,  247 => 31,  240 => 30,  233 => 56,  231 => 48,  228 => 47,  225 => 30,  222 => 28,  215 => 27,  207 => 57,  205 => 27,  202 => 26,  195 => 25,  188 => 23,  185 => 19,  178 => 18,  170 => 60,  167 => 59,  164 => 25,  161 => 24,  158 => 18,  156 => 17,  153 => 16,  146 => 15,  137 => 10,  132 => 9,  125 => 8,  117 => 12,  115 => 8,  112 => 7,  105 => 6,  97 => 62,  95 => 15,  92 => 14,  90 => 6,  87 => 5,  73 => 4,  66 => 3,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    {% block page_account_orders %}
        <div class=\"account-orders\">
            {% block page_account_orders_welcome %}
                <div class=\"account-welcome\">
                    {% block page_account_orders_welcome_headline %}
                        <h1>{{ \"account.ordersTitle\"|trans|sw_sanitize }}</h1>
                        <p>{{ \"account.ordersWelcome\"|trans|sw_sanitize }}</p>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_account_orders_main %}
                <div class=\"account-orders-main\">
                    {% if page.orders.total == 0 %}
                        {% block page_account_orders_info_empty %}
                            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                type: \"warning\",
                                content: \"account.ordersInfoEmpty\"|trans|sw_sanitize
                            } %}
                        {% endblock %}
                    {% else %}
                        {% block page_account_orders_overview %}
                            <div class=\"account-orders-overview\">
                                {% block page_account_orders_table %}

                                    {# @deprecated tag:v6.4.0 #}
                                    {% block page_account_orders_table_header %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_orders_table_header_date %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_orders_table_header_number %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_orders_table_header_payment_method %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_orders_table_header_shipping_method %}{% endblock %}

                                        {# @deprecated tag:v6.4.0 #}
                                        {% block page_account_orders_table_header_actions %}{% endblock %}
                                    {% endblock %}

                                    {% block page_account_orders_table_body %}
                                        {% for order in page.orders %}
                                            <div class=\"table order-table\"
                                                 data-order-detail-loader=\"true\">
                                                {% sw_include '@Storefront/storefront/page/account/order-history/order-item.html.twig' %}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endif %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/order-history/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/index.html.twig");
    }
}
