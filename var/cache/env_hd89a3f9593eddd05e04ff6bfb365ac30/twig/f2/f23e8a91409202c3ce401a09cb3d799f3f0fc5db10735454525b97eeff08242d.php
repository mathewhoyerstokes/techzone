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

/* @Storefront/storefront/layout/header/actions/language-widget.html.twig */
class __TwigTemplate_444a6113950995882715c8321b1e68a4d29761a2b39c0194e4f98fcdc5aa51ee extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_language_widget' => [$this, 'block_layout_header_actions_language_widget'],
            'layout_header_actions_language_widget_form' => [$this, 'block_layout_header_actions_language_widget_form'],
            'layout_header_actions_language_widget_form_csrf' => [$this, 'block_layout_header_actions_language_widget_form_csrf'],
            'layout_header_actions_language_widget_content' => [$this, 'block_layout_header_actions_language_widget_content'],
            'layout_header_actions_languages_widget_form_items' => [$this, 'block_layout_header_actions_languages_widget_form_items'],
            'layout_header_actions_languages_widget_form_items_flag' => [$this, 'block_layout_header_actions_languages_widget_form_items_flag'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/language-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_language_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_header_actions_language_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget"));

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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "languages", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 1)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-language\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_language_widget_form', $context, $blocks);
            // line 71
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_layout_header_actions_language_widget_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form"));

        // line 9
        echo "                <form method=\"post\"
                      action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.switch-language");
        echo "\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    ";
        // line 14
        $this->displayBlock('layout_header_actions_language_widget_form_csrf', $context, $blocks);
        // line 17
        echo "
                    ";
        // line 18
        $this->displayBlock('layout_header_actions_language_widget_content', $context, $blocks);
        // line 69
        echo "                </form>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_layout_header_actions_language_widget_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_form_csrf"));

        // line 15
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.switch-language");
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_layout_header_actions_language_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_language_widget_content"));

        // line 19
        echo "                        ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 19), "activeLanguage", [], "any", false, false, false, 19), "translationCode", [], "any", false, false, false, 19), "code", [], "any", false, false, false, 19)), "-");
        // line 20
        echo "                        ";
        $context["country"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["isoCode"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 21
        echo "                        ";
        $context["language"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["isoCode"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null);
        // line 22
        echo "
                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-";
        // line 26
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-";
        // line 30
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo " language-";
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\"></div>
                                <span class=\"top-bar-nav-text\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "activeLanguage", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "</span>
                            </button>
                            ";
        // line 33
        $this->displayBlock('layout_header_actions_languages_widget_form_items', $context, $blocks);
        // line 61
        echo "                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "_route"], "method", false, false, false, 63), "html", null, true);
        echo "\"/>

                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", [0 => "_route_params"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 66
            echo "                            <input name=\"redirectParameters[";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "]\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_layout_header_actions_languages_widget_form_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items"));

        // line 34
        echo "                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"languagesDropdown-";
        // line 35
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 36), "languages", [], "any", false, false, false, 36));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                                            <div class=\"top-bar-list-item dropdown-item";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 37) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 37), "activeLanguage", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
                echo " item-checked";
            }
            echo "\"
                                                 title=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["language"], "translated", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "\">

                                                ";
            // line 40
            $this->displayBlock('layout_header_actions_languages_widget_form_items_flag', $context, $blocks);
            // line 57
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_layout_header_actions_languages_widget_form_items_flag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_languages_widget_form_items_flag"));

        // line 41
        echo "                                                    ";
        $context["isoCode"] = twig_split_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "translationCode", [], "any", false, false, false, 41), "code", [], "any", false, false, false, 41)), "-");
        // line 42
        echo "                                                    ";
        $context["flagCountry"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["isoCode"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null);
        // line 43
        echo "                                                    ";
        $context["flagLanguage"] = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["isoCode"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null);
        // line 44
        echo "
                                                    <label class=\"top-bar-list-label\"
                                                           for=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                                                        <input id=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "\"
                                                               class=\"top-bar-list-radio\"
                                                               value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\"
                                                               name=\"languageId\"
                                                               type=\"radio\"
                                                            ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "id", [], "any", false, false, false, 52) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 52), "activeLanguage", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52))) {
            echo " checked";
        }
        echo ">
                                                        <div class=\"top-bar-list-icon language-flag country-";
        // line 53
        echo twig_escape_filter($this->env, ($context["flagCountry"] ?? null), "html", null, true);
        echo " language-";
        echo twig_escape_filter($this->env, ($context["flagLanguage"] ?? null), "html", null, true);
        echo "\"></div>
                                                        ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "
                                                    </label>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/language-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 54,  322 => 53,  316 => 52,  310 => 49,  303 => 47,  297 => 46,  293 => 44,  290 => 43,  287 => 42,  284 => 41,  277 => 40,  269 => 59,  254 => 57,  252 => 40,  247 => 38,  240 => 37,  223 => 36,  219 => 35,  216 => 34,  209 => 33,  202 => 68,  191 => 66,  187 => 65,  182 => 63,  178 => 61,  176 => 33,  171 => 31,  165 => 30,  158 => 26,  152 => 22,  149 => 21,  146 => 20,  143 => 19,  136 => 18,  126 => 15,  119 => 14,  111 => 69,  109 => 18,  106 => 17,  104 => 14,  97 => 10,  94 => 9,  87 => 8,  78 => 71,  76 => 8,  73 => 7,  71 => 6,  68 => 5,  65 => 4,  62 => 3,  59 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_language_widget%}
    {% if position is empty %}
        {% set position = 'top-bar' %}
    {% endif %}

    {% if  page.header.languages.count > 1 %}
        <div class=\"top-bar-nav-item top-bar-language\">
            {% block layout_header_actions_language_widget_form %}
                <form method=\"post\"
                      action=\"{{ path('frontend.checkout.switch-language') }}\"
                      class=\"language-form\"
                      data-form-auto-submit=\"true\">

                    {% block layout_header_actions_language_widget_form_csrf %}
                        {{ sw_csrf('frontend.checkout.switch-language') }}
                    {% endblock %}

                    {% block layout_header_actions_language_widget_content %}
                        {% set isoCode = page.header.activeLanguage.translationCode.code|lower|split('-') %}
                        {% set country = isoCode[0] %}
                        {% set language = isoCode[1] %}

                        <div class=\"languages-menu dropdown\">
                            <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                                    type=\"button\"
                                    id=\"languagesDropdown-{{ position }}\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\">
                                <div class=\"top-bar-list-icon language-flag country-{{ country }} language-{{ language }}\"></div>
                                <span class=\"top-bar-nav-text\">{{ page.header.activeLanguage.name }}</span>
                            </button>
                            {% block layout_header_actions_languages_widget_form_items %}
                                <div class=\"top-bar-list dropdown-menu dropdown-menu-right\"
                                    aria-labelledby=\"languagesDropdown-{{ position }}\">
                                    {% for language in  page.header.languages %}
                                            <div class=\"top-bar-list-item dropdown-item{% if language.id is same as(page.header.activeLanguage.id) %} item-checked{% endif %}\"
                                                 title=\"{{ language.translated.name }}\">

                                                {% block layout_header_actions_languages_widget_form_items_flag %}
                                                    {% set isoCode = language.translationCode.code|lower|split('-') %}
                                                    {% set flagCountry = isoCode[0] %}
                                                    {% set flagLanguage = isoCode[1] %}

                                                    <label class=\"top-bar-list-label\"
                                                           for=\"{{ position }}-{{ language.id }}\">
                                                        <input id=\"{{ position }}-{{ language.id }}\"
                                                               class=\"top-bar-list-radio\"
                                                               value=\"{{ language.id }}\"
                                                               name=\"languageId\"
                                                               type=\"radio\"
                                                            {% if language.id is same as(page.header.activeLanguage.id) %} checked{% endif %}>
                                                        <div class=\"top-bar-list-icon language-flag country-{{ flagCountry }} language-{{ flagLanguage }}\"></div>
                                                        {{ language.name }}
                                                    </label>
                                                {% endblock %}
                                            </div>
                                    {% endfor %}
                                </div>
                            {% endblock %}
                        </div>

                        <input name=\"redirectTo\" type=\"hidden\" value=\"{{ app.request.get('_route') }}\"/>

                        {% for key, value in app.request.attributes.get('_route_params') %}
                            <input name=\"redirectParameters[{{ key }}]\" type=\"hidden\" value=\"{{ value }}\">
                        {% endfor %}
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/header/actions/language-widget.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/language-widget.html.twig");
    }
}
