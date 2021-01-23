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

/* @Techzone/storefront/layout/header/actions/account-widget.html.twig */
class __TwigTemplate_0bf74e99f58e5628d9052e0f9dd596f06c78f4dfcee59fa531fd6709d375097b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header_actions_account_widget' => [$this, 'block_layout_header_actions_account_widget'],
            'layout_header_actions_account_widget_dropdown_button' => [$this, 'block_layout_header_actions_account_widget_dropdown_button'],
            'layout_header_actions_account_widget_dropdown_menu' => [$this, 'block_layout_header_actions_account_widget_dropdown_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/actions/account-widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Techzone/storefront/layout/header/actions/account-widget.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/actions/account-widget.html.twig", "@Techzone/storefront/layout/header/actions/account-widget.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_layout_header_actions_account_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget"));

        // line 6
        echo "    <div class=\"dropdown\">
        ";
        // line 7
        $this->displayBlock('layout_header_actions_account_widget_dropdown_button', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('layout_header_actions_account_widget_dropdown_menu', $context, $blocks);
        // line 31
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_layout_header_actions_account_widget_dropdown_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_button"));

        // line 8
        echo "            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    data-offcanvas-account-menu=\"true\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 15
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\"
                    title=\"";
        // line 16
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\">

                    <svg class=\"account-link-icon\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 1000 1000\" enable-background=\"new 0 0 1000 1000\" xml:space=\"preserve\">
                    <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                    <g><path d=\"M641.6,590.7c-3-1.8-6.5-12.9-0.2-36c67.2-73.6,108.6-179.1,108.6-277.6C750.1,120.3,642.4,10,494.5,10C347,10,243.9,119.5,243.9,276.2c0,99.9,41.9,206.2,109.7,279.4c6.8,23-2.1,31.3-7.7,33.9C278.6,614,59.1,703.6,59.1,827.7V990h881.7v-36.7v-36.7v-110C908.2,693,699.6,609.9,641.6,590.7L641.6,590.7L641.6,590.7z M127,921.6v-89c0-46.9,107.6-124.6,243.8-174.3c5.6-2.1,34.4-14.2,49.5-47.6c8-17.7,14.4-47.3-0.9-87.8l-2.7-7.1l-5.3-5.4c-57.6-59.3-94.7-151.2-94.7-234.2c0-142.3,95.9-192.9,177.9-192.9c82.3,0,183.5,51.7,183.5,194c0,82.2-37.2,173.9-94.8,233.7c0,0-24.4,34.7-24.1,59.6c0.2,16.4,9.4,37.1,16.5,51.3c13.5,26.9,35.7,35.8,42,37.9C744,702,858.8,758.1,873,807.7v113.9L127,921.6L127,921.6L127,921.6z\"/></g>
                    </svg>
            </button>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_layout_header_actions_account_widget_dropdown_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_menu"));

        // line 26
        echo "            <div class=\"dropdown-menu dropdown-menu-right account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                ";
        // line 28
        $this->loadTemplate("@Storefront/storefront/layout/header/account-menu.html.twig", "@Techzone/storefront/layout/header/actions/account-widget.html.twig", 28)->display($context);
        // line 29
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Techzone/storefront/layout/header/actions/account-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 29,  125 => 28,  121 => 26,  114 => 25,  99 => 16,  95 => 15,  86 => 8,  79 => 7,  71 => 31,  69 => 25,  66 => 24,  64 => 7,  61 => 6,  54 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/header/actions/account-widget.html.twig' %}



{% block layout_header_actions_account_widget %}
    <div class=\"dropdown\">
        {% block layout_header_actions_account_widget_dropdown_button %}
            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    data-offcanvas-account-menu=\"true\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"{{ \"account.myAccount\"|trans|striptags }}\"
                    title=\"{{ \"account.myAccount\"|trans|striptags }}\">

                    <svg class=\"account-link-icon\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 1000 1000\" enable-background=\"new 0 0 1000 1000\" xml:space=\"preserve\">
                    <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                    <g><path d=\"M641.6,590.7c-3-1.8-6.5-12.9-0.2-36c67.2-73.6,108.6-179.1,108.6-277.6C750.1,120.3,642.4,10,494.5,10C347,10,243.9,119.5,243.9,276.2c0,99.9,41.9,206.2,109.7,279.4c6.8,23-2.1,31.3-7.7,33.9C278.6,614,59.1,703.6,59.1,827.7V990h881.7v-36.7v-36.7v-110C908.2,693,699.6,609.9,641.6,590.7L641.6,590.7L641.6,590.7z M127,921.6v-89c0-46.9,107.6-124.6,243.8-174.3c5.6-2.1,34.4-14.2,49.5-47.6c8-17.7,14.4-47.3-0.9-87.8l-2.7-7.1l-5.3-5.4c-57.6-59.3-94.7-151.2-94.7-234.2c0-142.3,95.9-192.9,177.9-192.9c82.3,0,183.5,51.7,183.5,194c0,82.2-37.2,173.9-94.8,233.7c0,0-24.4,34.7-24.1,59.6c0.2,16.4,9.4,37.1,16.5,51.3c13.5,26.9,35.7,35.8,42,37.9C744,702,858.8,758.1,873,807.7v113.9L127,921.6L127,921.6L127,921.6z\"/></g>
                    </svg>
            </button>
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_menu %}
            <div class=\"dropdown-menu dropdown-menu-right account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                {% sw_include '@Storefront/storefront/layout/header/account-menu.html.twig' %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Techzone/storefront/layout/header/actions/account-widget.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/custom/plugins/Techzone/src/Resources/views/storefront/layout/header/actions/account-widget.html.twig");
    }
}
