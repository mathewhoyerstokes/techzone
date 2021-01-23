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

/* @Storefront/storefront/component/captcha/honeypot.html.twig */
class __TwigTemplate_c1a50677ef210b939ee44a52d68bfb33c45887811308083774823a903ef63e6f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_captcha_honeypot' => [$this, 'block_component_captcha_honeypot'],
            'component_captcha_honeypot_input' => [$this, 'block_component_captcha_honeypot_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/captcha/honeypot.html.twig"));

        // line 1
        $this->displayBlock('component_captcha_honeypot', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_captcha_honeypot($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_honeypot"));

        // line 2
        echo "    <div class=\"captcha--honeypot\">
        ";
        // line 3
        $this->displayBlock('component_captcha_honeypot_input', $context, $blocks);
        // line 15
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_component_captcha_honeypot_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_honeypot_input"));

        // line 4
        echo "            <input type=\"text\"
                   name=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Framework\\Captcha\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER"), "html", null, true);
        echo "\"
                   class=\"d-none\"
                   value=\"\"
                   tabindex=\"-1\"
                   autocapitalize=\"off\"
                   spellcheck=\"false\"
                   autocorrect=\"off\"
                   autocomplete=\"off\"
            >
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/captcha/honeypot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 5,  75 => 4,  68 => 3,  60 => 15,  58 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_captcha_honeypot %}
    <div class=\"captcha--honeypot\">
        {% block component_captcha_honeypot_input %}
            <input type=\"text\"
                   name=\"{{ constant('Shopware\\\\Storefront\\\\Framework\\\\Captcha\\\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER') }}\"
                   class=\"d-none\"
                   value=\"\"
                   tabindex=\"-1\"
                   autocapitalize=\"off\"
                   spellcheck=\"false\"
                   autocorrect=\"off\"
                   autocomplete=\"off\"
            >
        {% endblock %}
    </div>
{% endblock %}", "@Storefront/storefront/component/captcha/honeypot.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/captcha/honeypot.html.twig");
    }
}
