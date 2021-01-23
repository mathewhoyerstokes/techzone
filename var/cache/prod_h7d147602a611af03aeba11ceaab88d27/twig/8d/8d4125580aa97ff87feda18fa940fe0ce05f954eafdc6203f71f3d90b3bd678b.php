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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_76150ff465c02c88dfc821fd7136d614984da0b8b214f90099768d31ccd6f193 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_body_script' => [$this, 'block_base_body_script'],
            'base_script_token' => [$this, 'block_base_script_token'],
            'base_script_router' => [$this, 'block_base_script_router'],
            'base_script_breakpoints' => [$this, 'block_base_script_breakpoints'],
            'base_script_csrf' => [$this, 'block_base_script_csrf'],
            'base_script_wishlist_state' => [$this, 'block_base_script_wishlist_state'],
            'base_script_hmr_mode' => [$this, 'block_base_script_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isHMRMode"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "headers", [], "any", false, false, false, 2), "get", [0 => "hot-reload-mode"], "method", false, false, false, 2) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 2) == "dev"));
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('base_doctype', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('base_html', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('base_head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('base_body', $context, $blocks);
        // line 184
        echo "</html>
";
    }

    // line 4
    public function block_base_doctype($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!DOCTYPE html>
";
    }

    // line 8
    public function block_base_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 14
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 15)->display($context);
    }

    // line 18
    public function block_base_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <body class=\"";
        $this->displayBlock('base_body_classes', $context, $blocks);
        echo "\">

    ";
        // line 21
        $this->displayBlock('base_body_inner', $context, $blocks);
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('base_scroll_up', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('base_cookie_permission', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('base_pseudo_modal', $context, $blocks);
        // line 109
        echo "
    ";
        // line 110
        $this->displayBlock('base_body_script', $context, $blocks);
        // line 182
        echo "    </body>
";
    }

    // line 19
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "is-ctl-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo " is-act-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
    }

    // line 21
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $this->displayBlock('base_noscript', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('base_header', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('base_navigation', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('base_offcanvas_navigation', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('base_main', $context, $blocks);
        // line 86
        echo "
        ";
        // line 87
        $this->displayBlock('base_footer', $context, $blocks);
        // line 96
        echo "    ";
    }

    // line 22
    public function block_base_noscript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <noscript class=\"noscript-main\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 24)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice"))]));
        // line 28
        echo "            </noscript>
        ";
    }

    // line 31
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <header class=\"header-main\">
                ";
        // line 33
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 38
        echo "            </header>
        ";
    }

    // line 33
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    <div class=\"container\">
                        ";
        // line 35
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 35)->display($context);
        // line 36
        echo "                    </div>
                ";
    }

    // line 41
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            <div class=\"nav-main\">
                ";
        // line 43
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 46
        echo "            </div>
        ";
    }

    // line 43
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 44)->display($context);
        // line 45
        echo "                ";
    }

    // line 49
    public function block_base_offcanvas_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "navigation", [], "any", false, false, false, 50)) {
            // line 51
            echo "                <div class=\"d-none js-navigation-offcanvas-initial-content\">
                    ";
            // line 52
            $this->displayBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 55
            echo "                </div>
            ";
        }
        // line 57
        echo "        ";
    }

    // line 52
    public function block_base_offcanvas_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 53)->display(twig_array_merge($context, ["navigation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "navigation", [], "any", false, false, false, 53)]));
        // line 54
        echo "                    ";
    }

    // line 59
    public function block_base_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            <main class=\"content-main\">
                ";
        // line 61
        $this->displayBlock('base_flashbags', $context, $blocks);
        // line 68
        echo "
                ";
        // line 69
        $this->displayBlock('base_main_inner', $context, $blocks);
        // line 84
        echo "            </main>
        ";
    }

    // line 61
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                    <div class=\"flashbags container\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 63));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 64
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 64)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 65
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </div>
                ";
    }

    // line 69
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                    <div class=\"container\">
                        ";
        // line 71
        $this->displayBlock('base_main_container', $context, $blocks);
        // line 82
        echo "                    </div>
                ";
    }

    // line 71
    public function block_base_main_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                            <div class=\"container-main\">
                                ";
        // line 73
        $this->displayBlock('base_breadcrumb', $context, $blocks);
        // line 78
        echo "
                                ";
        // line 79
        $this->displayBlock('base_content', $context, $blocks);
        // line 80
        echo "                            </div>
                        ";
    }

    // line 73
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                                    ";
        if (($context["breadcrumbList"] ?? null)) {
            // line 75
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 75)->display($context);
            // line 76
            echo "                                    ";
        }
        // line 77
        echo "                                ";
    }

    // line 79
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 87
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "            <footer class=\"footer-main\">
                ";
        // line 89
        $this->displayBlock('base_footer_inner', $context, $blocks);
        // line 94
        echo "            </footer>
        ";
    }

    // line 89
    public function block_base_footer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "                    <div class=\"container\">
                        ";
        // line 91
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 91)->display($context);
        // line 92
        echo "                    </div>
                ";
    }

    // line 98
    public function block_base_scroll_up($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 99)->display($context);
        // line 100
        echo "    ";
    }

    // line 102
    public function block_base_cookie_permission($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 103)->display($context);
        // line 104
        echo "    ";
    }

    // line 106
    public function block_base_pseudo_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 107)->display($context);
        // line 108
        echo "    ";
    }

    // line 110
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "        ";
        $this->displayBlock('base_script_token', $context, $blocks);
        // line 117
        echo "
        ";
        // line 118
        $this->displayBlock('base_script_router', $context, $blocks);
        // line 138
        echo "
        ";
        // line 139
        $this->displayBlock('base_script_breakpoints', $context, $blocks);
        // line 145
        echo "
        ";
        // line 146
        $this->displayBlock('base_script_csrf', $context, $blocks);
        // line 154
        echo "
        ";
        // line 155
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_10549") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 155), "core", [], "any", false, false, false, 155), "cart", [], "any", false, false, false, 155), "wishlistEnabled", [], "any", false, false, false, 155))) {
            // line 156
            echo "            ";
            $this->displayBlock('base_script_wishlist_state', $context, $blocks);
            // line 163
            echo "        ";
        }
        // line 164
        echo "
        ";
        // line 165
        $this->displayBlock('base_script_hmr_mode', $context, $blocks);
        // line 181
        echo "    ";
    }

    // line 111
    public function block_base_script_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "            <script>
                ";
        // line 114
        echo "                window.apiAccessUrl = \"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.api-access");
        echo "\";
            </script>
        ";
    }

    // line 118
    public function block_base_script_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "            ";
        // line 120
        echo "            <script>
                window.activeNavigationId = '";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 121), "navigation", [], "any", false, false, false, 121), "active", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
        echo "';
                window.router = {
                    'frontend.cart.offcanvas': '";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                    'frontend.cookie.offcanvas': '";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                    'frontend.checkout.finish.page': '";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                    'frontend.checkout.info': '";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                    'frontend.menu.offcanvas': '";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                    'frontend.cms.page': '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                    'frontend.cms.navigation.page': '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                    'frontend.account.addressbook': '";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                    'frontend.csrf.generateToken': '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                    'frontend.country.country-data': '";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                    'frontend.store-api.proxy': '";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.store-api.proxy");
        echo "',
                };
                window.storeApiProxyToken = '";
        // line 135
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.store-api.proxy", ["mode" => "token"]);
        echo "';
            </script>
        ";
    }

    // line 139
    public function block_base_script_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "            ";
        // line 141
        echo "            <script>
                window.breakpoints = ";
        // line 142
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 142), "breakpoint", [], "any", false, false, false, 142));
        echo ";
            </script>
        ";
    }

    // line 146
    public function block_base_script_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "            <script>
                window.csrf = {
                    'enabled': '";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 149), "html", null, true);
        echo "',
                    'mode': '";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 150), "html", null, true);
        echo "'
                }
            </script>
        ";
    }

    // line 156
    public function block_base_script_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                <script>
                    window.customerLoggedInState = ";
        // line 158
        echo ((( !(null === twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 158)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 158), "guest", [], "any", false, false, false, 158))) ? (1) : (0));
        echo ";

                    window.wishlistEnabled = ";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 160), "core", [], "any", false, false, false, 160), "cart", [], "any", false, false, false, 160), "wishlistEnabled", [], "any", false, false, false, 160), "html", null, true);
        echo ";
                </script>
            ";
    }

    // line 165
    public function block_base_script_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 167
            echo "                ";
            $context["baseUrl"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 167), "getScheme", [], "method", false, false, false, 167) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 167), "getHost", [], "method", false, false, false, 167));
            // line 168
            echo "                ";
            $context["port"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 168), "headers", [], "any", false, false, false, 168), "get", [0 => "hot-reload-port"], "method", false, false, false, 168);
            // line 169
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/vendor-node.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 170
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/vendor-shared.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 171
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/runtime.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/app.js\"></script>
                ";
            // line 174
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["port"] ?? null), "html", null, true);
            echo "/js/storefront.js\"></script>
            ";
        } else {
            // line 176
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 176), "assets", [], "any", false, false, false, 176), "js", [], "any", false, false, false, 176));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 177
                echo "                    <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" async></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            ";
        }
        // line 180
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  730 => 180,  727 => 179,  718 => 177,  713 => 176,  705 => 174,  699 => 172,  693 => 171,  687 => 170,  680 => 169,  677 => 168,  674 => 167,  671 => 166,  667 => 165,  660 => 160,  655 => 158,  652 => 157,  648 => 156,  640 => 150,  636 => 149,  632 => 147,  628 => 146,  621 => 142,  618 => 141,  616 => 140,  612 => 139,  605 => 135,  600 => 133,  596 => 132,  592 => 131,  588 => 130,  584 => 129,  580 => 128,  576 => 127,  572 => 126,  568 => 125,  564 => 124,  560 => 123,  555 => 121,  552 => 120,  550 => 119,  546 => 118,  538 => 114,  535 => 112,  531 => 111,  527 => 181,  525 => 165,  522 => 164,  519 => 163,  516 => 156,  514 => 155,  511 => 154,  509 => 146,  506 => 145,  504 => 139,  501 => 138,  499 => 118,  496 => 117,  493 => 111,  489 => 110,  485 => 108,  482 => 107,  478 => 106,  474 => 104,  471 => 103,  467 => 102,  463 => 100,  460 => 99,  456 => 98,  451 => 92,  449 => 91,  446 => 90,  442 => 89,  437 => 94,  435 => 89,  432 => 88,  428 => 87,  422 => 79,  418 => 77,  415 => 76,  412 => 75,  409 => 74,  405 => 73,  400 => 80,  398 => 79,  395 => 78,  393 => 73,  390 => 72,  386 => 71,  381 => 82,  379 => 71,  376 => 70,  372 => 69,  367 => 66,  353 => 65,  350 => 64,  333 => 63,  330 => 62,  326 => 61,  321 => 84,  319 => 69,  316 => 68,  314 => 61,  311 => 60,  307 => 59,  303 => 54,  300 => 53,  296 => 52,  292 => 57,  288 => 55,  286 => 52,  283 => 51,  280 => 50,  276 => 49,  272 => 45,  269 => 44,  265 => 43,  260 => 46,  258 => 43,  255 => 42,  251 => 41,  246 => 36,  244 => 35,  241 => 34,  237 => 33,  232 => 38,  230 => 33,  227 => 32,  223 => 31,  218 => 28,  216 => 24,  213 => 23,  209 => 22,  205 => 96,  203 => 87,  200 => 86,  198 => 59,  195 => 58,  193 => 49,  190 => 48,  188 => 41,  185 => 40,  183 => 31,  180 => 30,  177 => 22,  173 => 21,  163 => 19,  158 => 182,  156 => 110,  153 => 109,  151 => 106,  148 => 105,  146 => 102,  143 => 101,  141 => 98,  138 => 97,  136 => 21,  130 => 19,  126 => 18,  121 => 15,  117 => 14,  108 => 9,  104 => 8,  99 => 5,  95 => 4,  90 => 184,  88 => 18,  85 => 17,  83 => 14,  80 => 13,  78 => 8,  75 => 7,  73 => 4,  70 => 3,  68 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/base.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
