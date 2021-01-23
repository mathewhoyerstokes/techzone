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

/* @Storefront/storefront/page/checkout/address/index.html.twig */
class __TwigTemplate_e14b577687be71315b7eba71e26f73d2ea02ed1302e7d1ac11164cfc5f69fb48 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_header' => [$this, 'block_base_header'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'page_checkout_address' => [$this, 'block_page_checkout_address'],
            'page_checkout_address_header' => [$this, 'block_page_checkout_address_header'],
            'page_checkout_address_login_toggle' => [$this, 'block_page_checkout_address_login_toggle'],
            'page_checkout_address_login' => [$this, 'block_page_checkout_address_login'],
            'page_checkout_address_login_card' => [$this, 'block_page_checkout_address_login_card'],
            'page_checkout_address_register' => [$this, 'block_page_checkout_address_register'],
            'page_checkout_address_register_card' => [$this, 'block_page_checkout_address_register_card'],
            'page_checkout_aside_summary' => [$this, 'block_page_checkout_aside_summary'],
            'page_checkout_address_products' => [$this, 'block_page_checkout_address_products'],
            'page_checkout_address_products_header' => [$this, 'block_page_checkout_address_products_header'],
            'page_checkout_address_products_list' => [$this, 'block_page_checkout_address_products_list'],
            'page_checkout_address_product_list_container' => [$this, 'block_page_checkout_address_product_list_container'],
            'page_checkout_address_product_summary_item' => [$this, 'block_page_checkout_address_product_summary_item'],
            'base_footer' => [$this, 'block_base_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/address/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header-minimal.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_main_content"));

        // line 10
        echo "    ";
        $this->displayBlock('page_checkout_address', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address"));

        // line 11
        echo "        ";
        $this->displayBlock('page_checkout_address_header', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('page_checkout_address_login_toggle', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('page_checkout_address_login', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('page_checkout_address_register', $context, $blocks);
        // line 43
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_checkout_address_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_header"));

        // line 12
        echo "            <h1 class=\"address-main-header\">
                ";
        // line 13
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressHeader"));
        echo "
            </h1>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_checkout_address_login_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_login_toggle"));

        // line 18
        echo "            <div class=\"register-login-collapse-toogle\">
                ";
        // line 19
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/checkout/address/index.html.twig", 19);
        })())->display(twig_array_merge($context, ["name" => "avatar"]));
        // line 20
        echo "                <a href=\"#loginCollapse\"
                   class=\"login-collapse-toggle\"
                   data-toggle=\"collapse\"
                   aria-expanded=\"false\">
                    <strong>";
        // line 24
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressLoginToggle"));
        echo "</strong> </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_checkout_address_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_login"));

        // line 29
        echo "            <div class=\"collapse\" id=\"loginCollapse\">
                ";
        // line 30
        $this->displayBlock('page_checkout_address_login_card', $context, $blocks);
        // line 33
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_checkout_address_login_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_login_card"));

        // line 31
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/account/login.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 31)->display($context);
        // line 32
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_page_checkout_address_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_register"));

        // line 37
        echo "            ";
        $this->displayBlock('page_checkout_address_register_card', $context, $blocks);
        // line 42
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_page_checkout_address_register_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_register_card"));

        // line 38
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/address/register.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 38)->display(twig_array_merge($context, ["cardTitle" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.addressRegisterCardTitle"))]));
        // line 41
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_page_checkout_aside_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_aside_summary"));

        // line 47
        echo "    ";
        $this->displayParentBlock("page_checkout_aside_summary", $context, $blocks);
        echo "

    ";
        // line 49
        $this->displayBlock('page_checkout_address_products', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_address_products($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_products"));

        // line 50
        echo "        <div class=\"checkout-aside-products\">
            ";
        // line 51
        $this->displayBlock('page_checkout_address_products_header', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('page_checkout_address_products_list', $context, $blocks);
        // line 68
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_page_checkout_address_products_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_products_header"));

        // line 52
        echo "                <h2 class=\"checkout-aside-product-header\">
                    ";
        // line 53
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.cartHeader"));
        echo "
                </h2>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_page_checkout_address_products_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_products_list"));

        // line 58
        echo "                <div class=\"checkout-aside-product-list\">
                    ";
        // line 59
        $this->displayBlock('page_checkout_address_product_list_container', $context, $blocks);
        // line 66
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_page_checkout_address_product_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_product_list_container"));

        // line 60
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 60), "lineItems", [], "any", false, false, false, 60));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 61
            echo "                            ";
            $this->displayBlock('page_checkout_address_product_summary_item', $context, $blocks);
            // line 64
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_page_checkout_address_product_summary_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_address_product_summary_item"));

        // line 62
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/checkout-aside-item.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 62)->display($context);
        // line 63
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer"));

        // line 73
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer-minimal.html.twig", "@Storefront/storefront/page/checkout/address/index.html.twig", 73)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 73,  416 => 72,  409 => 63,  406 => 62,  399 => 61,  392 => 65,  378 => 64,  375 => 61,  357 => 60,  350 => 59,  342 => 66,  340 => 59,  337 => 58,  330 => 57,  320 => 53,  317 => 52,  310 => 51,  302 => 68,  300 => 57,  297 => 56,  295 => 51,  292 => 50,  279 => 49,  273 => 47,  266 => 46,  259 => 41,  256 => 38,  249 => 37,  242 => 42,  239 => 37,  232 => 36,  225 => 32,  222 => 31,  215 => 30,  207 => 33,  205 => 30,  202 => 29,  195 => 28,  185 => 24,  179 => 20,  171 => 19,  168 => 18,  161 => 17,  151 => 13,  148 => 12,  141 => 11,  134 => 43,  132 => 36,  129 => 35,  127 => 28,  124 => 27,  122 => 17,  119 => 16,  116 => 11,  102 => 10,  95 => 9,  83 => 7,  75 => 4,  68 => 3,  51 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/checkout/_page.html.twig' %}

{% block base_header %}
    {% sw_include '@Storefront/storefront/layout/header/header-minimal.html.twig' %}
{% endblock %}

{% block base_navigation %}{% endblock %}

{% block page_checkout_main_content %}
    {% block page_checkout_address %}
        {% block page_checkout_address_header %}
            <h1 class=\"address-main-header\">
                {{ \"checkout.addressHeader\"|trans|sw_sanitize }}
            </h1>
        {% endblock %}

        {% block page_checkout_address_login_toggle %}
            <div class=\"register-login-collapse-toogle\">
                {% sw_icon 'avatar' %}
                <a href=\"#loginCollapse\"
                   class=\"login-collapse-toggle\"
                   data-toggle=\"collapse\"
                   aria-expanded=\"false\">
                    <strong>{{ \"checkout.addressLoginToggle\"|trans|sw_sanitize }}</strong> </a>
            </div>
        {% endblock %}

        {% block page_checkout_address_login %}
            <div class=\"collapse\" id=\"loginCollapse\">
                {% block page_checkout_address_login_card %}
                    {% sw_include '@Storefront/storefront/component/account/login.html.twig' %}
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_checkout_address_register %}
            {% block page_checkout_address_register_card %}
                {% sw_include '@Storefront/storefront/page/checkout/address/register.html.twig' with {
                    'cardTitle': \"checkout.addressRegisterCardTitle\"|trans|sw_sanitize
                } %}
            {% endblock %}
        {% endblock %}
    {% endblock %}
{% endblock %}

{% block page_checkout_aside_summary %}
    {{ parent() }}

    {% block page_checkout_address_products %}
        <div class=\"checkout-aside-products\">
            {% block page_checkout_address_products_header %}
                <h2 class=\"checkout-aside-product-header\">
                    {{ \"checkout.cartHeader\"|trans|sw_sanitize }}
                </h2>
            {% endblock %}

            {% block page_checkout_address_products_list %}
                <div class=\"checkout-aside-product-list\">
                    {% block page_checkout_address_product_list_container %}
                        {% for lineItem in page.cart.lineItems %}
                            {% block page_checkout_address_product_summary_item %}
                                {% sw_include '@Storefront/storefront/page/checkout/checkout-aside-item.html.twig' %}
                            {% endblock %}
                        {% endfor %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}

{% block base_footer %}
    {% sw_include '@Storefront/storefront/layout/footer/footer-minimal.html.twig' %}
{% endblock %}
", "@Storefront/storefront/page/checkout/address/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/address/index.html.twig");
    }
}
