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

/* @Storefront/storefront/layout/cookie/cookie-permission.html.twig */
class __TwigTemplate_cbd1affcbc0f451e919a713dcc563597880d38623aa59a1b593815e5651dbe84 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_cookie_permission_inner' => [$this, 'block_layout_cookie_permission_inner'],
            'layout_cookie_permission_inner_content' => [$this, 'block_layout_cookie_permission_inner_content'],
            'layout_cookie_permission_inner_button' => [$this, 'block_layout_cookie_permission_inner_button'],
            'layout_cookie_permission_inner_button_deny' => [$this, 'block_layout_cookie_permission_inner_button_deny'],
            'layout_cookie_permission_inner_button_configuration' => [$this, 'block_layout_cookie_permission_inner_button_configuration'],
            'layout_cookie_permission_inner_button_accept_all' => [$this, 'block_layout_cookie_permission_inner_button_accept_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_cookie_permission_inner', $context, $blocks);
    }

    public function block_layout_cookie_permission_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["acceptAllCookies"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 2), "core", [], "any", false, false, false, 2), "basicInformation", [], "any", false, false, false, 2), "acceptAllCookies", [], "any", false, false, false, 2);
        // line 3
        echo "    <div
        class=\"cookie-permission-container\"
        data-cookie-permission=\"true\">
        <div class=\"container\">
            <div class=\"row align-items-center\">

                ";
        // line 9
        $this->displayBlock('layout_cookie_permission_inner_content', $context, $blocks);
        // line 16
        echo "
                ";
        // line 17
        $this->displayBlock('layout_cookie_permission_inner_button', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>
";
    }

    // line 9
    public function block_layout_cookie_permission_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    <div class=\"col cookie-permission-content\">
                        ";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.message", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["shopware"] ?? null), "config", [], "any", false, false, false, 12), "core", [], "any", false, false, false, 12), "basicInformation", [], "any", false, false, false, 12), "privacyPage", [], "any", false, false, false, 12)])]);
        // line 13
        echo "
                    </div>
                ";
    }

    // line 17
    public function block_layout_cookie_permission_inner_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                    <div class=\"col-12 col-md-auto pr-2 \">
                        ";
        // line 19
        $this->displayBlock('layout_cookie_permission_inner_button_deny', $context, $blocks);
        // line 28
        echo "
                        ";
        // line 29
        $this->displayBlock('layout_cookie_permission_inner_button_configuration', $context, $blocks);
        // line 38
        echo "
                        ";
        // line 39
        if (($context["acceptAllCookies"] ?? null)) {
            // line 40
            echo "                            ";
            $this->displayBlock('layout_cookie_permission_inner_button_accept_all', $context, $blocks);
            // line 49
            echo "                        ";
        }
        // line 50
        echo "                    </div>
                ";
    }

    // line 19
    public function block_layout_cookie_permission_inner_button_deny($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                            <span class=\"cookie-permission-button js-cookie-permission-button\">
                                <button
                                    type=\"submit\"
                                    class=\"btn ";
        // line 23
        echo ((($context["acceptAllCookies"] ?? null)) ? ("btn-outline-danger") : ("btn-secondary"));
        echo "\">
                                    ";
        // line 24
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.deny"));
        echo "
                                </button>
                            </span>
                        ";
    }

    // line 29
    public function block_layout_cookie_permission_inner_button_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                            <span class=\"js-cookie-configuration-button\">
                                <button
                                    type=\"submit\"
                                    class=\"btn ";
        // line 33
        echo ((($context["acceptAllCookies"] ?? null)) ? ("btn-secondary") : ("btn-primary"));
        echo "\">
                                    ";
        // line 34
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.configure"));
        echo "
                                </button>
                            </span>
                        ";
    }

    // line 40
    public function block_layout_cookie_permission_inner_button_accept_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                <span class=\"js-cookie-accept-all-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 45
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.acceptAll"));
        echo "
                                    </button>
                                </span>
                            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/cookie/cookie-permission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 45,  167 => 41,  163 => 40,  155 => 34,  151 => 33,  146 => 30,  142 => 29,  134 => 24,  130 => 23,  125 => 20,  121 => 19,  116 => 50,  113 => 49,  110 => 40,  108 => 39,  105 => 38,  103 => 29,  100 => 28,  98 => 19,  95 => 18,  91 => 17,  85 => 13,  83 => 12,  82 => 11,  79 => 10,  75 => 9,  68 => 52,  66 => 17,  63 => 16,  61 => 9,  53 => 3,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/cookie/cookie-permission.html.twig");
    }
}
