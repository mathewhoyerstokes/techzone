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

/* @Storefront/storefront/page/account/order-history/order-detail-list.html.twig */
class __TwigTemplate_9b31836499dc4db375968c6ab348c85890aa575557e2b03f28d69539897fdc27 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_order_item_detail_body' => [$this, 'block_page_account_order_item_detail_body'],
            'page_account_order_item_detail_line_items' => [$this, 'block_page_account_order_item_detail_line_items'],
            'page_account_order_item_detail_line_item' => [$this, 'block_page_account_order_item_detail_line_item'],
            'page_account_order_item_detail_action' => [$this, 'block_page_account_order_item_detail_action'],
            'page_account_order_item_detail_reorder' => [$this, 'block_page_account_order_item_detail_reorder'],
            'page_account_order_item_detail_reorder_form_action' => [$this, 'block_page_account_order_item_detail_reorder_form_action'],
            'page_account_order_item_detail_reorder_csrf' => [$this, 'block_page_account_order_item_detail_reorder_csrf'],
            'page_account_order_item_detail_reorder_redirect_input' => [$this, 'block_page_account_order_item_detail_reorder_redirect_input'],
            'page_account_order_item_detail_reorder_lineitems_input' => [$this, 'block_page_account_order_item_detail_reorder_lineitems_input'],
            'page_account_order_item_detail_reorder_lineitem_input' => [$this, 'block_page_account_order_item_detail_reorder_lineitem_input'],
            'page_account_order_item_detail_reorder_button' => [$this, 'block_page_account_order_item_detail_reorder_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/order-detail-list.html.twig"));

        // line 1
        $this->displayBlock('page_account_order_item_detail_body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_order_item_detail_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_body"));

        // line 2
        echo "    <div class=\"order-detail-content-body\">
        ";
        // line 3
        $this->displayBlock('page_account_order_item_detail_line_items', $context, $blocks);
        // line 10
        echo "
        ";
        // line 12
        echo "        ";
        $this->displayBlock('page_account_order_item_detail_action', $context, $blocks);
        // line 37
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_account_order_item_detail_line_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_line_items"));

        // line 4
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "lineItems", [], "any", false, false, false, 4));
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
            // line 5
            echo "                ";
            $this->displayBlock('page_account_order_item_detail_line_item', $context, $blocks);
            // line 8
            echo "            ";
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
        // line 9
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_account_order_item_detail_line_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_line_item"));

        // line 6
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig", "@Storefront/storefront/page/account/order-history/order-detail-list.html.twig", 6)->display($context);
        // line 7
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_account_order_item_detail_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_action"));

        // line 13
        echo "
            ";
        // line 15
        echo "            ";
        $this->displayBlock('page_account_order_item_detail_reorder', $context, $blocks);
        // line 36
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_account_order_item_detail_reorder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder"));

        // line 16
        echo "
                ";
        // line 18
        echo "                ";
        $this->displayBlock('page_account_order_item_detail_reorder_form_action', $context, $blocks);
        // line 19
        echo "
                ";
        // line 21
        echo "                ";
        $this->displayBlock('page_account_order_item_detail_reorder_csrf', $context, $blocks);
        // line 22
        echo "
                ";
        // line 24
        echo "                ";
        $this->displayBlock('page_account_order_item_detail_reorder_redirect_input', $context, $blocks);
        // line 25
        echo "
                ";
        // line 27
        echo "                ";
        $this->displayBlock('page_account_order_item_detail_reorder_lineitems_input', $context, $blocks);
        // line 32
        echo "
                ";
        // line 34
        echo "                ";
        $this->displayBlock('page_account_order_item_detail_reorder_button', $context, $blocks);
        // line 35
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_page_account_order_item_detail_reorder_form_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder_form_action"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_page_account_order_item_detail_reorder_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder_csrf"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_account_order_item_detail_reorder_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder_redirect_input"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_account_order_item_detail_reorder_lineitems_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder_lineitems_input"));

        // line 28
        echo "
                    ";
        // line 30
        echo "                    ";
        $this->displayBlock('page_account_order_item_detail_reorder_lineitem_input', $context, $blocks);
        // line 31
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_account_order_item_detail_reorder_lineitem_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder_lineitem_input"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_account_order_item_detail_reorder_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_item_detail_reorder_button"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order-history/order-detail-list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  281 => 34,  269 => 30,  262 => 31,  259 => 30,  256 => 28,  249 => 27,  237 => 24,  225 => 21,  213 => 18,  206 => 35,  203 => 34,  200 => 32,  197 => 27,  194 => 25,  191 => 24,  188 => 22,  185 => 21,  182 => 19,  179 => 18,  176 => 16,  169 => 15,  162 => 36,  159 => 15,  156 => 13,  149 => 12,  142 => 7,  139 => 6,  132 => 5,  125 => 9,  111 => 8,  108 => 5,  90 => 4,  83 => 3,  75 => 37,  72 => 12,  69 => 10,  67 => 3,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_order_item_detail_body %}
    <div class=\"order-detail-content-body\">
        {% block page_account_order_item_detail_line_items %}
            {% for lineItem in order.lineItems %}
                {% block page_account_order_item_detail_line_item %}
                    {% sw_include '@Storefront/storefront/page/account/order-history/order-detail-list-item.html.twig' %}
                {% endblock %}
            {% endfor %}
        {% endblock %}

        {# @deprecated tag:v6.4.0 #}
        {% block page_account_order_item_detail_action %}

            {# @deprecated tag:v6.4.0 #}
            {% block page_account_order_item_detail_reorder %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_detail_reorder_form_action %}{% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_detail_reorder_csrf %}{% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_detail_reorder_redirect_input %}{% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_detail_reorder_lineitems_input %}

                    {# @deprecated tag:v6.4.0 #}
                    {% block page_account_order_item_detail_reorder_lineitem_input %}{% endblock %}
                {% endblock %}

                {# @deprecated tag:v6.4.0 #}
                {% block page_account_order_item_detail_reorder_button %}{% endblock %}
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/account/order-history/order-detail-list.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/order-detail-list.html.twig");
    }
}
