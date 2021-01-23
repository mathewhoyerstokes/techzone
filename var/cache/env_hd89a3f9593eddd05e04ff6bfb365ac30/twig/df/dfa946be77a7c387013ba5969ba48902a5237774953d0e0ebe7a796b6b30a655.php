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

/* @Storefront/storefront/page/account/addressbook/address-actions.html.twig */
class __TwigTemplate_69d0ecd4fe22b6a50d095567ff23b095c545d66f880a85c4e2c2c822f303e3c5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_address_actions' => [$this, 'block_page_account_address_actions'],
            'page_account_address_actions_set_default' => [$this, 'block_page_account_address_actions_set_default'],
            'page_account_address_actions_set_default_shipping' => [$this, 'block_page_account_address_actions_set_default_shipping'],
            'page_account_address_actions_set_default_shipping_csrf' => [$this, 'block_page_account_address_actions_set_default_shipping_csrf'],
            'page_account_address_actions_set_default_billing' => [$this, 'block_page_account_address_actions_set_default_billing'],
            'page_account_address_actions_set_default_billing_csrf' => [$this, 'block_page_account_address_actions_set_default_billing_csrf'],
            'page_account_address_actions_buttons' => [$this, 'block_page_account_address_actions_buttons'],
            'page_account_address_actions_update' => [$this, 'block_page_account_address_actions_update'],
            'page_account_address_actions_delete' => [$this, 'block_page_account_address_actions_delete'],
            'page_account_address_actions_delete_csrf' => [$this, 'block_page_account_address_actions_delete_csrf'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/addressbook/address-actions.html.twig"));

        // line 1
        $this->displayBlock('page_account_address_actions', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_account_address_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions"));

        // line 2
        echo "    ";
        $this->displayBlock('page_account_address_actions_set_default', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('page_account_address_actions_buttons', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_page_account_address_actions_set_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default"));

        // line 3
        echo "        <div class=\"address-actions-defaults\">
            ";
        // line 4
        $this->displayBlock('page_account_address_actions_set_default_shipping', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('page_account_address_actions_set_default_billing', $context, $blocks);
        // line 41
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_account_address_actions_set_default_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_shipping"));

        // line 5
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 5) != twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 5))) {
            // line 6
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.set-default-address", ["type" => "shipping", "addressId" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        ";
            // line 10
            $this->displayBlock('page_account_address_actions_set_default_shipping_csrf', $context, $blocks);
            // line 13
            echo "
                        <button type=\"submit\"
                                title=\"";
            // line 15
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultShippingAction")), "html", null, true);
            echo "\"
                                class=\"btn btn-link address-action-set-default\">
                            ";
            // line 17
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultShippingAction"));
            echo "
                        </button>
                    </form>
                ";
        }
        // line 21
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_account_address_actions_set_default_shipping_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_shipping_csrf"));

        // line 11
        echo "                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.set-default-address");
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_page_account_address_actions_set_default_billing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_billing"));

        // line 24
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["defaultBillingAddress"] ?? null), "id", [], "any", false, false, false, 24) != twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 24))) {
            // line 25
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.set-default-address", ["type" => "billing", "addressId" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        ";
            // line 29
            $this->displayBlock('page_account_address_actions_set_default_billing_csrf', $context, $blocks);
            // line 32
            echo "
                        <button type=\"submit\"
                                title=\"";
            // line 34
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultBillingAction")), "html", null, true);
            echo "\"
                                class=\"btn btn-link address-action-set-default\">
                            ";
            // line 36
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesSetAsDefaultBillingAction"));
            echo "
                        </button>
                    </form>
                ";
        }
        // line 40
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_page_account_address_actions_set_default_billing_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_set_default_billing_csrf"));

        // line 30
        echo "                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.set-default-address");
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_page_account_address_actions_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_buttons"));

        // line 45
        echo "        <div class=\"row no-gutters address-actions-buttons\">
            ";
        // line 46
        $this->displayBlock('page_account_address_actions_update', $context, $blocks);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('page_account_address_actions_delete', $context, $blocks);
        // line 77
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_page_account_address_actions_update($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_update"));

        // line 47
        echo "                <div class=\"col-auto\">
                    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.edit.page", ["addressId" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\"
                       title=\"";
        // line 49
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionEdit")), "html", null, true);
        echo "\"
                       class=\"btn btn-light btn-sm\">
                        ";
        // line 51
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionEdit"));
        echo "
                    </a>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_page_account_address_actions_delete($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_delete"));

        // line 57
        echo "                ";
        if (((twig_get_attribute($this->env, $this->source, ($context["defaultShippingAddress"] ?? null), "id", [], "any", false, false, false, 57) != twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 57)) && (twig_get_attribute($this->env, $this->source, ($context["defaultBillingAddress"] ?? null), "id", [], "any", false, false, false, 57) != twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 57)))) {
            // line 58
            echo "                    <div class=\"col-auto\">
                        <form action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.address.delete", ["addressId" => twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"
                              data-form-csrf-handler=\"true\"
                              class=\"address-action-delete\"
                              method=\"post\">

                            ";
            // line 64
            $this->displayBlock('page_account_address_actions_delete_csrf', $context, $blocks);
            // line 67
            echo "
                            <button type=\"submit\"
                                    class=\"btn btn-light btn-sm\"
                                    title=\"";
            // line 70
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionDelete")), "html", null, true);
            echo "\">
                                ";
            // line 71
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.addressesContentItemActionDelete"));
            echo "
                            </button>
                        </form>
                    </div>
                ";
        }
        // line 76
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_page_account_address_actions_delete_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_address_actions_delete_csrf"));

        // line 65
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.address.delete");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/addressbook/address-actions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  330 => 65,  323 => 64,  316 => 76,  308 => 71,  304 => 70,  299 => 67,  297 => 64,  289 => 59,  286 => 58,  283 => 57,  276 => 56,  265 => 51,  260 => 49,  256 => 48,  253 => 47,  246 => 46,  238 => 77,  236 => 56,  233 => 55,  231 => 46,  228 => 45,  221 => 44,  211 => 30,  204 => 29,  197 => 40,  190 => 36,  185 => 34,  181 => 32,  179 => 29,  171 => 25,  168 => 24,  161 => 23,  151 => 11,  144 => 10,  137 => 21,  130 => 17,  125 => 15,  121 => 13,  119 => 10,  111 => 6,  108 => 5,  101 => 4,  93 => 41,  91 => 23,  88 => 22,  86 => 4,  83 => 3,  76 => 2,  69 => 44,  66 => 43,  63 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_address_actions %}
    {% block page_account_address_actions_set_default %}
        <div class=\"address-actions-defaults\">
            {% block page_account_address_actions_set_default_shipping %}
                {% if defaultShippingAddress.id != address.id %}
                    <form action=\"{{ path('frontend.account.address.set-default-address', {'type': 'shipping', 'addressId': address.id}) }}\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        {% block page_account_address_actions_set_default_shipping_csrf %}
                            {{ sw_csrf('frontend.account.address.set-default-address') }}
                        {% endblock %}

                        <button type=\"submit\"
                                title=\"{{ \"account.addressesSetAsDefaultShippingAction\"|trans|striptags }}\"
                                class=\"btn btn-link address-action-set-default\">
                            {{ \"account.addressesSetAsDefaultShippingAction\"|trans|sw_sanitize }}
                        </button>
                    </form>
                {% endif %}
            {% endblock %}

            {% block page_account_address_actions_set_default_billing %}
                {% if defaultBillingAddress.id != address.id %}
                    <form action=\"{{ path('frontend.account.address.set-default-address', {'type': 'billing', 'addressId': address.id}) }}\"
                          data-form-csrf-handler=\"true\"
                          method=\"post\">

                        {% block page_account_address_actions_set_default_billing_csrf %}
                            {{ sw_csrf('frontend.account.address.set-default-address') }}
                        {% endblock %}

                        <button type=\"submit\"
                                title=\"{{ \"account.addressesSetAsDefaultBillingAction\"|trans|striptags }}\"
                                class=\"btn btn-link address-action-set-default\">
                            {{ \"account.addressesSetAsDefaultBillingAction\"|trans|sw_sanitize }}
                        </button>
                    </form>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block page_account_address_actions_buttons %}
        <div class=\"row no-gutters address-actions-buttons\">
            {% block page_account_address_actions_update %}
                <div class=\"col-auto\">
                    <a href=\"{{ path('frontend.account.address.edit.page', {'addressId': address.id}) }}\"
                       title=\"{{ \"account.addressesContentItemActionEdit\"|trans|striptags }}\"
                       class=\"btn btn-light btn-sm\">
                        {{ \"account.addressesContentItemActionEdit\"|trans|sw_sanitize }}
                    </a>
                </div>
            {% endblock %}

            {% block page_account_address_actions_delete %}
                {% if defaultShippingAddress.id != address.id and defaultBillingAddress.id != address.id %}
                    <div class=\"col-auto\">
                        <form action=\"{{ path('frontend.account.address.delete', {'addressId': address.id}) }}\"
                              data-form-csrf-handler=\"true\"
                              class=\"address-action-delete\"
                              method=\"post\">

                            {% block page_account_address_actions_delete_csrf %}
                                {{ sw_csrf('frontend.account.address.delete') }}
                            {% endblock %}

                            <button type=\"submit\"
                                    class=\"btn btn-light btn-sm\"
                                    title=\"{{ \"account.addressesContentItemActionDelete\"|trans|striptags }}\">
                                {{ \"account.addressesContentItemActionDelete\"|trans|sw_sanitize }}
                            </button>
                        </form>
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/addressbook/address-actions.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/account/addressbook/address-actions.html.twig");
    }
}
