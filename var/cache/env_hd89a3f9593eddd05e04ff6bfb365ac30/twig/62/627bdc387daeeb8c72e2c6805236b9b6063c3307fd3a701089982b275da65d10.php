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

/* @Storefront/storefront/page/checkout/summary.html.twig */
class __TwigTemplate_7df3b1e75b9167305cad0fd7fb6d693d8ed72ad14fdb356a881a462d70b474d4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_checkout_summary' => [$this, 'block_page_checkout_summary'],
            'page_checkout_summary_inner' => [$this, 'block_page_checkout_summary_inner'],
            'page_checkout_summary_position' => [$this, 'block_page_checkout_summary_position'],
            'page_checkout_summary_position_label' => [$this, 'block_page_checkout_summary_position_label'],
            'page_checkout_summary_position_value' => [$this, 'block_page_checkout_summary_position_value'],
            'page_checkout_summary_shippings' => [$this, 'block_page_checkout_summary_shippings'],
            'page_checkout_summary_shipping' => [$this, 'block_page_checkout_summary_shipping'],
            'page_checkout_summary_shipping_label' => [$this, 'block_page_checkout_summary_shipping_label'],
            'page_checkout_summary_shipping_value' => [$this, 'block_page_checkout_summary_shipping_value'],
            'page_checkout_summary_total' => [$this, 'block_page_checkout_summary_total'],
            'page_checkout_summary_total_label' => [$this, 'block_page_checkout_summary_total_label'],
            'page_checkout_summary_total_value' => [$this, 'block_page_checkout_summary_total_value'],
            'page_checkout_summary_net' => [$this, 'block_page_checkout_summary_net'],
            'page_checkout_summary_net_label' => [$this, 'block_page_checkout_summary_net_label'],
            'page_checkout_summary_net_value' => [$this, 'block_page_checkout_summary_net_value'],
            'page_checkout_summary_taxes' => [$this, 'block_page_checkout_summary_taxes'],
            'page_checkout_summary_tax' => [$this, 'block_page_checkout_summary_tax'],
            'page_checkout_summary_tax_label' => [$this, 'block_page_checkout_summary_tax_label'],
            'page_checkout_summary_tax_value' => [$this, 'block_page_checkout_summary_tax_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/summary.html.twig"));

        // line 1
        $this->displayBlock('page_checkout_summary', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_checkout_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary"));

        // line 2
        echo "    <div class=\"checkout-aside-summary-container\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            $context["summary"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
        } elseif (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 5)) {
            // line 6
            echo "            ";
            $context["summary"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
        }
        // line 8
        echo "
        <dl class=\"row checkout-aside-summary-list\">
            ";
        // line 10
        $this->displayBlock('page_checkout_summary_inner', $context, $blocks);
        // line 91
        echo "        </dl>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_checkout_summary_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_inner"));

        // line 11
        echo "                ";
        $this->displayBlock('page_checkout_summary_position', $context, $blocks);
        // line 24
        echo "
                ";
        // line 25
        $this->displayBlock('page_checkout_summary_shippings', $context, $blocks);
        // line 42
        echo "
                ";
        // line 43
        $this->displayBlock('page_checkout_summary_total', $context, $blocks);
        // line 56
        echo "
                ";
        // line 57
        $this->displayBlock('page_checkout_summary_net', $context, $blocks);
        // line 70
        echo "
                ";
        // line 71
        $this->displayBlock('page_checkout_summary_taxes', $context, $blocks);
        // line 90
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_checkout_summary_position($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_position"));

        // line 12
        echo "                    ";
        $this->displayBlock('page_checkout_summary_position_label', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('page_checkout_summary_position_value', $context, $blocks);
        // line 23
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_checkout_summary_position_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_position_label"));

        // line 13
        echo "                        <dt class=\"col-7 checkout-aside-summary-label\">
                            ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryPositionPrice"));
        echo "
                        </dt>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_checkout_summary_position_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_position_value"));

        // line 19
        echo "                        <dd class=\"col-5 checkout-aside-summary-value\">
                            ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 20), "positionPrice", [], "any", false, false, false, 20)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                        </dd>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_page_checkout_summary_shippings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_shippings"));

        // line 26
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "deliveries", [], "any", false, false, false, 26));
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
        foreach ($context['_seq'] as $context["_key"] => $context["delivery"]) {
            // line 27
            echo "                        ";
            $this->displayBlock('page_checkout_summary_shipping', $context, $blocks);
            // line 40
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_checkout_summary_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_shipping"));

        // line 28
        echo "                            ";
        $this->displayBlock('page_checkout_summary_shipping_label', $context, $blocks);
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('page_checkout_summary_shipping_value', $context, $blocks);
        // line 39
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_checkout_summary_shipping_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_shipping_label"));

        // line 29
        echo "                                <dt class=\"col-7 checkout-aside-summary-label\">
                                    ";
        // line 30
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryShipping"));
        echo "
                                </dt>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_checkout_summary_shipping_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_shipping_value"));

        // line 35
        echo "                                <dd class=\"col-5 checkout-aside-summary-value\">
                                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "shippingCosts", [], "any", false, false, false, 36), "totalPrice", [], "any", false, false, false, 36)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                                </dd>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_checkout_summary_total($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_total"));

        // line 44
        echo "                    ";
        $this->displayBlock('page_checkout_summary_total_label', $context, $blocks);
        // line 49
        echo "
                    ";
        // line 50
        $this->displayBlock('page_checkout_summary_total_value', $context, $blocks);
        // line 55
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_page_checkout_summary_total_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_total_label"));

        // line 45
        echo "                        <dt class=\"col-7 checkout-aside-summary-label checkout-aside-summary-total\">
                            ";
        // line 46
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryTotalPrice"));
        echo "
                        </dt>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_page_checkout_summary_total_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_total_value"));

        // line 51
        echo "                        <dd class=\"col-5 checkout-aside-summary-value checkout-aside-summary-total\">
                            ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 52), "totalPrice", [], "any", false, false, false, 52)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                        </dd>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_page_checkout_summary_net($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_net"));

        // line 58
        echo "                    ";
        $this->displayBlock('page_checkout_summary_net_label', $context, $blocks);
        // line 63
        echo "
                    ";
        // line 64
        $this->displayBlock('page_checkout_summary_net_value', $context, $blocks);
        // line 69
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_page_checkout_summary_net_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_net_label"));

        // line 59
        echo "                        <dt class=\"col-7 checkout-aside-summary-label\">
                            ";
        // line 60
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryNetPrice"));
        echo "
                        </dt>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_page_checkout_summary_net_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_net_value"));

        // line 65
        echo "                        <dd class=\"col-5 checkout-aside-summary-value\">
                            ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 66), "netPrice", [], "any", false, false, false, 66)), "html", null, true);
        echo "
                        </dd>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_page_checkout_summary_taxes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_taxes"));

        // line 72
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["summary"] ?? null), "price", [], "any", false, false, false, 72), "calculatedTaxes", [], "any", false, false, false, 72));
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
        foreach ($context['_seq'] as $context["_key"] => $context["taxItem"]) {
            // line 73
            echo "                        ";
            $this->displayBlock('page_checkout_summary_tax', $context, $blocks);
            // line 88
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_page_checkout_summary_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_tax"));

        // line 74
        echo "                            ";
        $this->displayBlock('page_checkout_summary_tax_label', $context, $blocks);
        // line 81
        echo "
                            ";
        // line 82
        $this->displayBlock('page_checkout_summary_tax_value', $context, $blocks);
        // line 87
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_page_checkout_summary_tax_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_tax_label"));

        // line 75
        echo "                                <dt class=\"col-7 checkout-aside-summary-label\">
                                    ";
        // line 76
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.summaryTax", ["%rate%" => twig_get_attribute($this->env, $this->source,         // line 77
($context["taxItem"] ?? null), "taxRate", [], "any", false, false, false, 77)]));
        // line 78
        echo "
                                </dt>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_page_checkout_summary_tax_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_summary_tax_value"));

        // line 83
        echo "                                <dd class=\"col-5 checkout-aside-summary-value\">
                                    ";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["taxItem"] ?? null), "tax", [], "any", false, false, false, 84)), "html", null, true);
        echo "
                                </dd>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/summary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  544 => 84,  541 => 83,  534 => 82,  525 => 78,  523 => 77,  522 => 76,  519 => 75,  512 => 74,  505 => 87,  503 => 82,  500 => 81,  497 => 74,  490 => 73,  483 => 89,  469 => 88,  466 => 73,  448 => 72,  441 => 71,  431 => 66,  428 => 65,  421 => 64,  411 => 60,  408 => 59,  401 => 58,  394 => 69,  392 => 64,  389 => 63,  386 => 58,  379 => 57,  368 => 52,  365 => 51,  358 => 50,  348 => 46,  345 => 45,  338 => 44,  331 => 55,  329 => 50,  326 => 49,  323 => 44,  316 => 43,  305 => 36,  302 => 35,  295 => 34,  285 => 30,  282 => 29,  275 => 28,  268 => 39,  266 => 34,  263 => 33,  260 => 28,  253 => 27,  246 => 41,  232 => 40,  229 => 27,  211 => 26,  204 => 25,  193 => 20,  190 => 19,  183 => 18,  173 => 14,  170 => 13,  163 => 12,  156 => 23,  154 => 18,  151 => 17,  148 => 12,  141 => 11,  134 => 90,  132 => 71,  129 => 70,  127 => 57,  124 => 56,  122 => 43,  119 => 42,  117 => 25,  114 => 24,  111 => 11,  104 => 10,  95 => 91,  93 => 10,  89 => 8,  86 => 7,  83 => 6,  80 => 5,  77 => 4,  75 => 3,  72 => 2,  59 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_checkout_summary %}
    <div class=\"checkout-aside-summary-container\">
        {% if page.cart %}
            {% set summary = page.cart %}
        {% elseif page.order %}
            {% set summary = page.order %}
        {% endif %}

        <dl class=\"row checkout-aside-summary-list\">
            {% block page_checkout_summary_inner %}
                {% block page_checkout_summary_position %}
                    {% block page_checkout_summary_position_label %}
                        <dt class=\"col-7 checkout-aside-summary-label\">
                            {{ \"checkout.summaryPositionPrice\"|trans|sw_sanitize }}
                        </dt>
                    {% endblock %}

                    {% block page_checkout_summary_position_value %}
                        <dd class=\"col-5 checkout-aside-summary-value\">
                            {{ summary.price.positionPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                        </dd>
                    {% endblock %}
                {% endblock %}

                {% block page_checkout_summary_shippings %}
                    {% for delivery in summary.deliveries %}
                        {% block page_checkout_summary_shipping %}
                            {% block page_checkout_summary_shipping_label %}
                                <dt class=\"col-7 checkout-aside-summary-label\">
                                    {{ \"checkout.summaryShipping\"|trans|sw_sanitize }}
                                </dt>
                            {% endblock %}

                            {% block page_checkout_summary_shipping_value %}
                                <dd class=\"col-5 checkout-aside-summary-value\">
                                    {{ delivery.shippingCosts.totalPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                                </dd>
                            {% endblock %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}

                {% block page_checkout_summary_total %}
                    {% block page_checkout_summary_total_label %}
                        <dt class=\"col-7 checkout-aside-summary-label checkout-aside-summary-total\">
                            {{ \"checkout.summaryTotalPrice\"|trans|sw_sanitize }}
                        </dt>
                    {% endblock %}

                    {% block page_checkout_summary_total_value %}
                        <dd class=\"col-5 checkout-aside-summary-value checkout-aside-summary-total\">
                            {{ summary.price.totalPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                        </dd>
                    {% endblock %}
                {% endblock %}

                {% block page_checkout_summary_net %}
                    {% block page_checkout_summary_net_label %}
                        <dt class=\"col-7 checkout-aside-summary-label\">
                            {{ \"checkout.summaryNetPrice\"|trans|sw_sanitize }}
                        </dt>
                    {% endblock %}

                    {% block page_checkout_summary_net_value %}
                        <dd class=\"col-5 checkout-aside-summary-value\">
                            {{ summary.price.netPrice|currency }}
                        </dd>
                    {% endblock %}
                {% endblock %}

                {% block page_checkout_summary_taxes %}
                    {% for taxItem in summary.price.calculatedTaxes %}
                        {% block page_checkout_summary_tax %}
                            {% block page_checkout_summary_tax_label %}
                                <dt class=\"col-7 checkout-aside-summary-label\">
                                    {{ \"checkout.summaryTax\"|trans({
                                        '%rate%': taxItem.taxRate
                                    })|sw_sanitize }}
                                </dt>
                            {% endblock %}

                            {% block page_checkout_summary_tax_value %}
                                <dd class=\"col-5 checkout-aside-summary-value\">
                                    {{ taxItem.tax|currency }}
                                </dd>
                            {% endblock %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            {% endblock %}
        </dl>
    </div>
{% endblock %}
", "@Storefront/storefront/page/checkout/summary.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/summary.html.twig");
    }
}
