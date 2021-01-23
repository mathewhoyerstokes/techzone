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

/* @Storefront/storefront/layout/header/actions/currency-widget.html.twig */
class __TwigTemplate_b177bd7ffb4e2097bf959094b274f68d51ecb306f104ef04cf683eb4001fa121 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_currency_widget' => [$this, 'block_layout_header_actions_currency_widget'],
            'layout_header_actions_currency_widget_form' => [$this, 'block_layout_header_actions_currency_widget_form'],
            'layout_header_actions_currency_widget_form_csrf' => [$this, 'block_layout_header_actions_currency_widget_form_csrf'],
            'layout_header_actions_currency_widget_content' => [$this, 'block_layout_header_actions_currency_widget_content'],
            'layout_header_actions_currency_widget_dropdown_toggle' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle'],
            'layout_header_actions_currency_widget_dropdown_toggle_name' => [$this, 'block_layout_header_actions_currency_widget_dropdown_toggle_name'],
            'layout_header_actions_currency_widget_form_items' => [$this, 'block_layout_header_actions_currency_widget_form_items'],
            'layout_header_actions_currency_widget_form_items_element' => [$this, 'block_layout_header_actions_currency_widget_form_items_element'],
            'layout_header_actions_currency_widget_form_items_element_label' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_label'],
            'layout_header_actions_currency_widget_form_items_element_input' => [$this, 'block_layout_header_actions_currency_widget_form_items_element_input'],
            'layout_header_actions_currency_widget_form_redirect' => [$this, 'block_layout_header_actions_currency_widget_form_redirect'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_currency_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_header_actions_currency_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget"));

        // line 2
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 3
            echo "        ";
            $context["position"] = "top-bar";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "currencies", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 1)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-currency\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_currency_widget_form', $context, $blocks);
            // line 76
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_layout_header_actions_currency_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form"));

        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.configure");
        echo "\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 14
        $this->displayBlock('layout_header_actions_currency_widget_form_csrf', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('layout_header_actions_currency_widget_content', $context, $blocks);
        // line 74
        echo "                </form>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_layout_header_actions_currency_widget_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_csrf"));

        // line 15
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.configure");
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_layout_header_actions_currency_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_content"));

        // line 19
        echo "                        <div class=\"currencies-menu dropdown\">
                            ";
        // line 20
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle', $context, $blocks);
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('layout_header_actions_currency_widget_form_items', $context, $blocks);
        // line 60
        echo "
                            ";
        // line 61
        $this->displayBlock('layout_header_actions_currency_widget_form_redirect', $context, $blocks);
        // line 72
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_layout_header_actions_currency_widget_dropdown_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle"));

        // line 21
        echo "                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-";
        // line 23
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                        data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    ";
        // line 27
        $this->displayBlock('layout_header_actions_currency_widget_dropdown_toggle_name', $context, $blocks);
        // line 31
        echo "                                </button>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_layout_header_actions_currency_widget_dropdown_toggle_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_dropdown_toggle_name"));

        // line 28
        echo "                                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "activeCurrency", [], "any", false, false, false, 28), "symbol", [], "any", false, false, false, 28), "html", null, true);
        echo "
                                        <span class=\"top-bar-nav-text\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 29), "activeCurrency", [], "any", false, false, false, 29), "translated", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_layout_header_actions_currency_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items"));

        // line 35
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"currenciesDropdown-";
        // line 36
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 37), "currencies", [], "any", false, false, false, 37));
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
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 38
            echo "                                        ";
            $this->displayBlock('layout_header_actions_currency_widget_form_items_element', $context, $blocks);
            // line 57
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_layout_header_actions_currency_widget_form_items_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element"));

        // line 39
        echo "                                            <div class=\"top-bar-list-item dropdown-item";
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 39) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "activeCurrency", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39))) {
            echo " item-checked";
        }
        echo "\"
                                                 title=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 40), "shortName", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                                                ";
        // line 41
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_label', $context, $blocks);
        // line 55
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_layout_header_actions_currency_widget_form_items_element_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_label"));

        // line 42
        echo "                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
                                                        ";
        // line 44
        $this->displayBlock('layout_header_actions_currency_widget_form_items_element_input', $context, $blocks);
        // line 53
        echo "                                                    </label>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_layout_header_actions_currency_widget_form_items_element_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_items_element_input"));

        // line 45
        echo "                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\"
                                                                   value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "id", [], "any", false, false, false, 50) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "activeCurrency", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50))) {
            echo " checked";
        }
        echo ">
                                                            ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "symbol", [], "any", false, false, false, 51), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "translated", [], "any", false, false, false, 51), "shortName", [], "any", false, false, false, 51), "html", null, true);
        echo "
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_layout_header_actions_currency_widget_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_currency_widget_form_redirect"));

        // line 62
        echo "                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64), "html", null, true);
        echo "\"/>

                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", [0 => "_route_params"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 67
            echo "                                    <input name=\"redirectParameters[";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\"
                                           type=\"hidden\"
                                           value=\"";
            // line 69
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/currency-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  403 => 71,  395 => 69,  389 => 67,  385 => 66,  380 => 64,  376 => 62,  369 => 61,  358 => 51,  352 => 50,  346 => 47,  340 => 46,  337 => 45,  330 => 44,  322 => 53,  320 => 44,  314 => 43,  311 => 42,  304 => 41,  296 => 55,  294 => 41,  290 => 40,  283 => 39,  276 => 38,  268 => 58,  254 => 57,  251 => 38,  234 => 37,  230 => 36,  227 => 35,  220 => 34,  211 => 29,  206 => 28,  199 => 27,  191 => 31,  189 => 27,  182 => 23,  178 => 21,  171 => 20,  163 => 72,  161 => 61,  158 => 60,  156 => 34,  153 => 33,  151 => 20,  148 => 19,  141 => 18,  131 => 15,  124 => 14,  116 => 74,  114 => 18,  111 => 17,  109 => 14,  102 => 10,  99 => 9,  92 => 8,  83 => 76,  81 => 8,  78 => 7,  76 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_currency_widget %}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if page.header.currencies.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-currency\">
            {% block layout_header_actions_currency_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.configure') }}\"
                      class=\"currency-form\"
                      data-form-auto-submit=\"true\">

                    {% block layout_header_actions_currency_widget_form_csrf %}
                        {{ sw_csrf('frontend.checkout.configure') }}
                    {% endblock %}

                    {% block layout_header_actions_currency_widget_content %}
                        <div class=\"currencies-menu dropdown\">
                            {% block layout_header_actions_currency_widget_dropdown_toggle %}
                                <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                        type=\"button\"
                                        id=\"currenciesDropdown-{{ position }}\"
                                        data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\"
                                        aria-expanded=\"false\">
                                    {% block layout_header_actions_currency_widget_dropdown_toggle_name %}
                                        {{ page.header.activeCurrency.symbol }}
                                        <span class=\"top-bar-nav-text\">{{ page.header.activeCurrency.translated.name }}</span>
                                    {% endblock %}
                                </button>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_items %}
                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"currenciesDropdown-{{ position }}\">
                                    {% for currency in page.header.currencies %}
                                        {% block layout_header_actions_currency_widget_form_items_element %}
                                            <div class=\"top-bar-list-item dropdown-item{% if currency.id is same as(page.header.activeCurrency.id) %} item-checked{% endif %}\"
                                                 title=\"{{ currency.translated.shortName }}\">
                                                {% block layout_header_actions_currency_widget_form_items_element_label %}
                                                    <label class=\"top-bar-list-label\"
                                                           for=\"{{ position }}-{{ currency.id }}\">
                                                        {% block layout_header_actions_currency_widget_form_items_element_input %}
                                                            <input class=\"top-bar-list-radio\"
                                                                   id=\"{{ position }}-{{ currency.id }}\"
                                                                   value=\"{{ currency.id }}\"
                                                                   name=\"currencyId\"
                                                                   type=\"radio\"
                                                                {% if currency.id is same as(page.header.activeCurrency.id) %} checked{% endif %}>
                                                            {{ currency.symbol }} {{ currency.translated.shortName }}
                                                        {% endblock %}
                                                    </label>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    {% endfor %}
                                </div>
                            {% endblock %}

                            {% block layout_header_actions_currency_widget_form_redirect %}
                                <input name=\"redirectTo\"
                                       type=\"hidden\"
                                       value=\"{{ app.request.get('_route') }}\"/>

                                {% for key, value in app.request.attributes.get('_route_params') %}
                                    <input name=\"redirectParameters[{{ key }}]\"
                                           type=\"hidden\"
                                           value=\"{{ value }}\">
                                {% endfor %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/currency-widget.html.twig");
    }
}
