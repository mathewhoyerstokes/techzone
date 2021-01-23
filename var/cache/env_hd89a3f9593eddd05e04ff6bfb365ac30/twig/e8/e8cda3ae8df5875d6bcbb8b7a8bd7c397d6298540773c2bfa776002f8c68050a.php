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

/* @Storefront/storefront/page/account/order-history/order-detail-document.html.twig */
class __TwigTemplate_3781d7c65afad3823380412af2a6a789e8db46386eeee8a889eb543d71b0be08 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_order_detail_document_table_body' => [$this, 'block_page_account_order_detail_document_table_body'],
            'page_account_order_document_detail_table_header' => [$this, 'block_page_account_order_document_detail_table_header'],
            'page_account_order_document_detail_table_header_name' => [$this, 'block_page_account_order_document_detail_table_header_name'],
            'page_account_order_document_detail_table_header_quantity' => [$this, 'block_page_account_order_document_detail_table_header_quantity'],
            'page_account_order_document_detail_table_header_price' => [$this, 'block_page_account_order_document_detail_table_header_price'],
            'page_account_orde_document_detail_items' => [$this, 'block_page_account_orde_document_detail_items'],
            'page_account_order_document_detail_item' => [$this, 'block_page_account_order_document_detail_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/order-history/order-detail-document.html.twig"));

        // line 1
        $this->displayBlock('page_account_order_detail_document_table_body', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_order_detail_document_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_detail_document_table_body"));

        // line 2
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "documents", [], "any", false, false, false, 2))) {
            // line 3
            echo "        <div class=\"order-detail-content-body\">
            ";
            // line 4
            $this->displayBlock('page_account_order_document_detail_table_header', $context, $blocks);
            // line 27
            echo "
            ";
            // line 28
            $this->displayBlock('page_account_orde_document_detail_items', $context, $blocks);
            // line 35
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_account_order_document_detail_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_document_detail_table_header"));

        // line 5
        echo "                <div class=\"order-detail-content-header document-detail-content-header\">
                    <div class=\"row\">
                        ";
        // line 7
        $this->displayBlock('page_account_order_document_detail_table_header_name', $context, $blocks);
        // line 12
        echo "
                        ";
        // line 13
        $this->displayBlock('page_account_order_document_detail_table_header_quantity', $context, $blocks);
        // line 18
        echo "
                        ";
        // line 19
        $this->displayBlock('page_account_order_document_detail_table_header_price', $context, $blocks);
        // line 24
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_account_order_document_detail_table_header_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_document_detail_table_header_name"));

        // line 8
        echo "                            <div class=\"col-6 order-detail-content-header-cell document-header-file-name\">
                                ";
        // line 9
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.documentItemColumnTitle"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_page_account_order_document_detail_table_header_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_document_detail_table_header_quantity"));

        // line 14
        echo "                            <div class=\"col-4 order-detail-content-header-cell document-header-date\">
                                ";
        // line 15
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.documentItemColumnDate"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_account_order_document_detail_table_header_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_document_detail_table_header_price"));

        // line 20
        echo "                            <div class=\"col-2 order-detail-content-header-cell document-header-file-link\">

                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_page_account_orde_document_detail_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_orde_document_detail_items"));

        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "documents", [], "any", false, false, false, 29));
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
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 30
            echo "                    ";
            $this->displayBlock('page_account_order_document_detail_item', $context, $blocks);
            // line 33
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_page_account_order_document_detail_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_order_document_detail_item"));

        // line 31
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/page/account/order-history/order-detail-document-item.html.twig", "@Storefront/storefront/page/account/order-history/order-detail-document.html.twig", 31)->display($context);
        // line 32
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/order-history/order-detail-document.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 32,  227 => 31,  220 => 30,  213 => 34,  199 => 33,  196 => 30,  178 => 29,  171 => 28,  161 => 20,  154 => 19,  144 => 15,  141 => 14,  134 => 13,  124 => 9,  121 => 8,  114 => 7,  105 => 24,  103 => 19,  100 => 18,  98 => 13,  95 => 12,  93 => 7,  89 => 5,  82 => 4,  73 => 35,  71 => 28,  68 => 27,  66 => 4,  63 => 3,  60 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_order_detail_document_table_body %}
    {% if order.documents|length %}
        <div class=\"order-detail-content-body\">
            {% block page_account_order_document_detail_table_header %}
                <div class=\"order-detail-content-header document-detail-content-header\">
                    <div class=\"row\">
                        {% block page_account_order_document_detail_table_header_name %}
                            <div class=\"col-6 order-detail-content-header-cell document-header-file-name\">
                                {{ \"account.documentItemColumnTitle\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_account_order_document_detail_table_header_quantity %}
                            <div class=\"col-4 order-detail-content-header-cell document-header-date\">
                                {{ \"account.documentItemColumnDate\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_account_order_document_detail_table_header_price %}
                            <div class=\"col-2 order-detail-content-header-cell document-header-file-link\">

                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block page_account_orde_document_detail_items %}
                {% for document in order.documents %}
                    {% block page_account_order_document_detail_item %}
                        {% sw_include '@Storefront/storefront/page/account/order-history/order-detail-document-item.html.twig' %}
                    {% endblock %}
                {% endfor %}
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/page/account/order-history/order-detail-document.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/order-history/order-detail-document.html.twig");
    }
}
