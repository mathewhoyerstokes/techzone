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

/* @Storefront/storefront/layout/header/header-minimal.html.twig */
class __TwigTemplate_3a5ca4190e50db986f000fc450deb277c47d6afd539fc832535bdef52048a567 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header' => [$this, 'block_layout_header'],
            'layout_header_minimal_inner' => [$this, 'block_layout_header_minimal_inner'],
            'layout_header_minimal_row' => [$this, 'block_layout_header_minimal_row'],
            'layout_header_minimal_logo' => [$this, 'block_layout_header_minimal_logo'],
            'layout_header_minimal_contact' => [$this, 'block_layout_header_minimal_contact'],
            'layout_header_minimal_switch' => [$this, 'block_layout_header_minimal_switch'],
            'layout_header_minimal_button' => [$this, 'block_layout_header_minimal_button'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Techzone/storefront/layout/header/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/header-minimal.html.twig"));

        $this->parent = $this->loadTemplate("@Techzone/storefront/layout/header/header.html.twig", "@Storefront/storefront/layout/header/header-minimal.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_layout_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 4
        echo "    ";
        // line 5
        echo "    <header class=\"header-minimal fixed-top\">
        ";
        // line 6
        $this->displayBlock('layout_header_minimal_inner', $context, $blocks);
        // line 38
        echo "    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_layout_header_minimal_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_minimal_inner"));

        // line 7
        echo "            <div class=\"container\">
                ";
        // line 8
        $this->displayBlock('layout_header_minimal_row', $context, $blocks);
        // line 36
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_layout_header_minimal_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_minimal_row"));

        // line 9
        echo "                    <div class=\"row header-row header-minimal-row\">
                        ";
        // line 10
        $this->displayBlock('layout_header_minimal_logo', $context, $blocks);
        // line 15
        echo "
                        ";
        // line 16
        $this->displayBlock('layout_header_minimal_contact', $context, $blocks);
        // line 21
        echo "
                        ";
        // line 23
        echo "                        ";
        $this->displayBlock('layout_header_minimal_switch', $context, $blocks);
        // line 24
        echo "
                        ";
        // line 25
        $this->displayBlock('layout_header_minimal_button', $context, $blocks);
        // line 34
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_layout_header_minimal_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_minimal_logo"));

        // line 11
        echo "                            <div class=\"col-6 col-md-4 header-minimal-logo\">
                                ";
        // line 12
        $this->loadTemplate("@Techzone/storefront/layout/header/logo.html.twig", "@Storefront/storefront/layout/header/header-minimal.html.twig", 12)->display($context);
        // line 13
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_layout_header_minimal_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_minimal_contact"));

        // line 17
        echo "                            <div class=\"col-md-4 header-minimal-contact\">
                                ";
        // line 18
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.supportInfo"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_layout_header_minimal_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_minimal_switch"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_layout_header_minimal_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_minimal_button"));

        // line 26
        echo "                            <div class=\"col-md-4 header-minimal-back-to-shop\">
                                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                                   class=\"btn btn-outline-primary header-minimal-back-to-shop-button\"
                                   title=\"";
        // line 29
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishButtonBackToShop")), "html", null, true);
        echo "\">
                                    ";
        // line 30
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.finishButtonBackToShop")), "html", null, true);
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/header-minimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 30,  203 => 29,  198 => 27,  195 => 26,  188 => 25,  176 => 23,  166 => 18,  163 => 17,  156 => 16,  148 => 13,  146 => 12,  143 => 11,  136 => 10,  128 => 34,  126 => 25,  123 => 24,  120 => 23,  117 => 21,  115 => 16,  112 => 15,  110 => 10,  107 => 9,  100 => 8,  92 => 36,  90 => 8,  87 => 7,  80 => 6,  72 => 38,  70 => 6,  67 => 5,  65 => 4,  58 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/header/header.html.twig' %}

{% block layout_header %}
    {# @deprecated tag:6.4.0 class 'fixed-top' will be removed in version 6.4.0 #}
    <header class=\"header-minimal fixed-top\">
        {% block layout_header_minimal_inner %}
            <div class=\"container\">
                {% block layout_header_minimal_row %}
                    <div class=\"row header-row header-minimal-row\">
                        {% block layout_header_minimal_logo %}
                            <div class=\"col-6 col-md-4 header-minimal-logo\">
                                {% sw_include '@Storefront/storefront/layout/header/logo.html.twig' %}
                            </div>
                        {% endblock %}

                        {% block layout_header_minimal_contact %}
                            <div class=\"col-md-4 header-minimal-contact\">
                                {{ \"header.supportInfo\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {# @deprecated tag:v6.4.0 #}
                        {% block layout_header_minimal_switch %}{% endblock %}

                        {% block layout_header_minimal_button %}
                            <div class=\"col-md-4 header-minimal-back-to-shop\">
                                <a href=\"{{ path('frontend.home.page') }}\"
                                   class=\"btn btn-outline-primary header-minimal-back-to-shop-button\"
                                   title=\"{{ \"checkout.finishButtonBackToShop\"|trans|striptags }}\">
                                    {{ \"checkout.finishButtonBackToShop\"|trans|striptags }}
                                </a>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </header>
{% endblock %}
", "@Storefront/storefront/layout/header/header-minimal.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/header/header-minimal.html.twig");
    }
}
