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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_7e4f87fa019e10acddf64ec11fd0a5b8165fe11a2a3eb33917afd6e49d5e8c22 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/footer/footer.html.twig"));

        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

        // line 2
        echo "    ";
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 153
        echo "
    ";
        // line 154
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

        // line 3
        echo "        <div id=\"footerColumns\"
             class=\"row footer-columns\"
             data-collapse-footer=\"true\">
            ";
        // line 6
        $this->displayBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 103
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline"));

        // line 7
        echo "                <div class=\"col-md-4 footer-column js-footer-column\">
                    ";
        // line 8
        $this->displayBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 27
        echo "
                    ";
        // line 28
        $this->displayBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 44
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_headline"));

        // line 9
        echo "                        <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                             id=\"collapseFooterHotlineTitle\"
                             data-target=\"#collapseFooterHotline\"
                             aria-expanded=\"true\"
                             aria-controls=\"collapseFooterHotline\">
                            ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                            ";
        // line 15
        $this->displayBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 25
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_icons"));

        // line 16
        echo "                                <div class=\"footer-column-toggle\">
                                    <span class=\"footer-plus-icon\">
                                        ";
        // line 18
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 18);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 19
        echo "                                    </span>
                                    <span class=\"footer-minus-icon\">
                                        ";
        // line 21
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 21);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 22
        echo "                                    </span>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_content"));

        // line 29
        echo "                        <div id=\"collapseFooterHotline\"
                             class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                             aria-labelledby=\"collapseFooterHotlineTitle\">
                            <div class=\"footer-column-content-inner\">
                                <p class=\"footer-contact-hotline\">
                                    ";
        // line 34
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                </p>
                            </div>
                            <div class=\"footer-contact-form\">
                                ";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactLink", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["shopware"] ?? null), "config", [], "any", false, false, false, 39), "core", [], "any", false, false, false, 39), "basicInformation", [], "any", false, false, false, 39), "contactPage", [], "any", false, false, false, 39)])]);
        // line 40
        echo "
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 48), "navigation", [], "any", false, false, false, 48), "tree", [], "any", false, false, false, 48));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 49
            echo "                    ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 101
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

        // line 50
        echo "                        <div class=\"col-md-4 footer-column js-footer-column\">
                            ";
        // line 51
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 70
        echo "
                            ";
        // line 71
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 99
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

        // line 52
        echo "                                <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                     data-target=\"#collapseFooterTitle";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 53), "html", null, true);
        echo "\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooter";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 55), "html", null, true);
        echo "\">

                                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 57), "translated", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "
                                    ";
        // line 58
        $this->displayBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 68
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

        // line 59
        echo "                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                ";
        // line 61
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 61);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 62
        echo "                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                ";
        // line 64
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 64);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 65
        echo "                                            </span>
                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

        // line 72
        echo "                                <div id=\"collapseFooter";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 72), "html", null, true);
        echo "\"
                                     class=\"footer-column-content collapse js-footer-column-content\"
                                     aria-labelledby=\"collapseFooterTitle";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
                                    <div class=\"footer-column-content-inner\">
                                        ";
        // line 76
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 96
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

        // line 77
        echo "                                            <ul class=\"list-unstyled\">
                                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 78));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 79
            echo "                                                    ";
            $context["category"] = twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 79);
            // line 80
            echo "                                                    ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80);
            // line 81
            echo "                                                    ";
            $context["externalLink"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 81), "externalLink", [], "any", false, false, false, 81);
            // line 82
            echo "                                                    ";
            $this->displayBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 93
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                            </ul>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link_item"));

        // line 83
        echo "                                                        <li class=\"footer-link-item\">
                                                            ";
        // line 84
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 91
        echo "                                                        </li>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link"));

        // line 85
        echo "                                                                <a class=\"footer-link\"
                                                                   href=\"";
        // line 86
        if (($context["externalLink"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["externalLink"] ?? null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 86)]), "html", null, true);
        }
        echo "\"
                                                                   title=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                                                    ";
        // line 88
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                                                </a>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

        // line 107
        echo "        <div class=\"footer-logos\">
            ";
        // line 108
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 129
        echo "
            ";
        // line 130
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 151
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

        // line 109
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 109));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 110
            echo "                    ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 127
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

        // line 111
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 111)) {
            // line 112
            echo "                            <div class=\"footer-logo is-payment\">
                                ";
            // line 113
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 113);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 114
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 114), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 120
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 120), "translated", [], "any", false, false, false, 120), "alt", [], "any", false, false, false, 120)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 120), "translated", [], "any", false, false, false, 120), "alt", [], "any", false, false, false, 120)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 121
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 121), "translated", [], "any", false, false, false, 121), "title", [], "any", false, false, false, 121)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 121), "translated", [], "any", false, false, false, 121), "title", [], "any", false, false, false, 121)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121)))], "name" => "footer-payment-image-thumbnails"]));
            // line 124
            echo "                            </div>
                        ";
        }
        // line 126
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

        // line 131
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 131));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 132
            echo "                    ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 149
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

        // line 133
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 133)) {
            // line 134
            echo "                            <div class=\"footer-logo is-shipping\">
                                ";
            // line 135
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 135);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 136
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 136), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 142
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 142), "translated", [], "any", false, false, false, 142), "alt", [], "any", false, false, false, 142)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 142), "translated", [], "any", false, false, false, 142), "alt", [], "any", false, false, false, 142)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 143), "translated", [], "any", false, false, false, 143), "title", [], "any", false, false, false, 143)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 143), "translated", [], "any", false, false, false, 143), "title", [], "any", false, false, false, 143)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 146
            echo "                            </div>
                        ";
        }
        // line 148
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 154
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

        // line 155
        echo "        <div class=\"footer-bottom\">
            ";
        // line 156
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 175
        echo "
            ";
        // line 176
        $this->displayBlock('layout_footer_vat', $context, $blocks);
        // line 193
        echo "
            ";
        // line 194
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 200
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        // line 157
        echo "                <div class=\"container\">
                    ";
        // line 158
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 173
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 158
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_content"));

        // line 159
        echo "                        <ul class=\"footer-service-menu-list list-unstyled\">
                            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 160), "serviceMenu", [], "any", false, false, false, 160));
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
        foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
            // line 161
            echo "                                ";
            $this->displayBlock('layout_footer_service_menu_item', $context, $blocks);
            // line 170
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                        </ul>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 161
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_item"));

        // line 162
        echo "                                    <li class=\"footer-service-menu-item\">
                                        <a class=\"footer-service-menu-link\"
                                           href=\"";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "externalLink", [], "any", false, false, false, 164)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "externalLink", [], "any", false, false, false, 164), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "id", [], "any", false, false, false, 164)]), "html", null, true);
        }
        echo "\"
                                           title=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true);
        echo "\">
                                            ";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 166), "name", [], "any", false, false, false, 166), "html", null, true);
        echo "
                                        </a>
                                    </li>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 176
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_vat"));

        // line 177
        echo "                <div class=\"footer-vat\">
                    ";
        // line 178
        if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 178) == "gross")) {
            // line 179
            echo "                        <p>
                            ";
            // line 180
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.includeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 181
($context["shopware"] ?? null), "config", [], "any", false, false, false, 181), "core", [], "any", false, false, false, 181), "basicInformation", [], "any", false, false, false, 181), "shippingPaymentInfoPage", [], "any", false, false, false, 181)])]);
            // line 182
            echo "
                        </p>
                    ";
        } else {
            // line 185
            echo "                        <p>
                            ";
            // line 186
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.excludeVat", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 187
($context["shopware"] ?? null), "config", [], "any", false, false, false, 187), "core", [], "any", false, false, false, 187), "basicInformation", [], "any", false, false, false, 187), "shippingPaymentInfoPage", [], "any", false, false, false, 187)])]);
            // line 188
            echo "
                        </p>
                    ";
        }
        // line 191
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 194
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

        // line 195
        echo "                <div class=\"footer-copyright\">
                    ";
        // line 196
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 196);
        })())->display(twig_array_merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 197
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        echo "
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  929 => 197,  921 => 196,  918 => 195,  911 => 194,  903 => 191,  898 => 188,  896 => 187,  895 => 186,  892 => 185,  887 => 182,  885 => 181,  884 => 180,  881 => 179,  879 => 178,  876 => 177,  869 => 176,  858 => 166,  854 => 165,  846 => 164,  842 => 162,  835 => 161,  827 => 171,  813 => 170,  810 => 161,  793 => 160,  790 => 159,  783 => 158,  775 => 173,  773 => 158,  770 => 157,  763 => 156,  755 => 200,  753 => 194,  750 => 193,  748 => 176,  745 => 175,  743 => 156,  740 => 155,  733 => 154,  726 => 148,  722 => 146,  720 => 143,  719 => 142,  718 => 136,  711 => 135,  708 => 134,  705 => 133,  698 => 132,  691 => 150,  677 => 149,  674 => 132,  656 => 131,  649 => 130,  642 => 126,  638 => 124,  636 => 121,  635 => 120,  634 => 114,  627 => 113,  624 => 112,  621 => 111,  614 => 110,  607 => 128,  593 => 127,  590 => 110,  572 => 109,  565 => 108,  557 => 151,  555 => 130,  552 => 129,  550 => 108,  547 => 107,  540 => 106,  530 => 88,  526 => 87,  518 => 86,  515 => 85,  508 => 84,  500 => 91,  498 => 84,  495 => 83,  488 => 82,  480 => 94,  466 => 93,  463 => 82,  460 => 81,  457 => 80,  454 => 79,  437 => 78,  434 => 77,  427 => 76,  418 => 96,  416 => 76,  411 => 74,  405 => 72,  398 => 71,  389 => 65,  381 => 64,  377 => 62,  369 => 61,  365 => 59,  358 => 58,  350 => 68,  348 => 58,  344 => 57,  339 => 55,  334 => 53,  331 => 52,  324 => 51,  316 => 99,  314 => 71,  311 => 70,  309 => 51,  306 => 50,  299 => 49,  292 => 102,  278 => 101,  275 => 49,  257 => 48,  250 => 47,  240 => 40,  238 => 39,  237 => 38,  230 => 34,  223 => 29,  216 => 28,  207 => 22,  199 => 21,  195 => 19,  187 => 18,  183 => 16,  176 => 15,  168 => 25,  166 => 15,  162 => 14,  155 => 9,  148 => 8,  140 => 44,  138 => 28,  135 => 27,  133 => 8,  130 => 7,  123 => 6,  115 => 103,  113 => 47,  110 => 46,  108 => 6,  103 => 3,  96 => 2,  89 => 154,  86 => 153,  84 => 106,  81 => 105,  78 => 2,  65 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_footer_inner_container %}
    {% block layout_footer_navigation %}
        <div id=\"footerColumns\"
             class=\"row footer-columns\"
             data-collapse-footer=\"true\">
            {% block layout_footer_navigation_hotline %}
                <div class=\"col-md-4 footer-column js-footer-column\">
                    {% block layout_footer_navigation_hotline_headline %}
                        <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                             id=\"collapseFooterHotlineTitle\"
                             data-target=\"#collapseFooterHotline\"
                             aria-expanded=\"true\"
                             aria-controls=\"collapseFooterHotline\">
                            {{ 'footer.serviceHotlineHeadline'|trans|sw_sanitize }}
                            {% block layout_footer_navigation_hotline_icons %}
                                <div class=\"footer-column-toggle\">
                                    <span class=\"footer-plus-icon\">
                                        {% sw_icon 'plus' %}
                                    </span>
                                    <span class=\"footer-minus-icon\">
                                        {% sw_icon 'minus' %}
                                    </span>
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block layout_footer_navigation_hotline_content %}
                        <div id=\"collapseFooterHotline\"
                             class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                             aria-labelledby=\"collapseFooterHotlineTitle\">
                            <div class=\"footer-column-content-inner\">
                                <p class=\"footer-contact-hotline\">
                                    {{ 'footer.serviceHotline'|trans|sw_sanitize }}
                                </p>
                            </div>
                            <div class=\"footer-contact-form\">
                                {{ 'footer.serviceContactLink'|trans({
                                    '%url%': path('frontend.cms.page', { id: shopware.config.core.basicInformation.contactPage })
                                })|raw }}
                            </div>
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block layout_footer_navigation_columns %}
                {% for root in page.footer.navigation.tree %}
                    {% block layout_footer_navigation_column %}
                        <div class=\"col-md-4 footer-column js-footer-column\">
                            {% block layout_footer_navigation_information_headline %}
                                <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                     data-target=\"#collapseFooterTitle{{ loop.index }}\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooter{{ loop.index }}\">

                                    {{ root.category.translated.name }}
                                    {% block layout_footer_navigation_information_icons %}
                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                {% sw_icon 'plus' %}
                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                {% sw_icon 'minus' %}
                                            </span>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block layout_footer_navigation_information_content %}
                                <div id=\"collapseFooter{{ loop.index }}\"
                                     class=\"footer-column-content collapse js-footer-column-content\"
                                     aria-labelledby=\"collapseFooterTitle{{ loop.index }}\">
                                    <div class=\"footer-column-content-inner\">
                                        {% block layout_footer_navigation_information_links %}
                                            <ul class=\"list-unstyled\">
                                                {% for treeItem in root.children %}
                                                    {% set category = treeItem.category %}
                                                    {% set name = category.translated.name %}
                                                    {% set externalLink = category.translated.externalLink %}
                                                    {% block layout_footer_navigation_information_link_item %}
                                                        <li class=\"footer-link-item\">
                                                            {% block layout_footer_navigation_information_link %}
                                                                <a class=\"footer-link\"
                                                                   href=\"{% if externalLink %}{{ externalLink }}{% else %}{{ seoUrl('frontend.navigation.page', { navigationId: category.id }) }}{% endif %}\"
                                                                   title=\"{{ name }}\">
                                                                    {{ name }}
                                                                </a>
                                                            {% endblock %}
                                                        </li>
                                                    {% endblock %}
                                                {% endfor %}
                                            </ul>
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}
                {% endfor %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block layout_footer_payment_shipping_logos %}
        <div class=\"footer-logos\">
            {% block layout_footer_payment_logos %}
                {% for paymentMethod in page.salesChannelPaymentMethods %}
                    {% block layout_footer_payment_logo %}
                        {% if paymentMethod.media %}
                            <div class=\"footer-logo is-payment\">
                                {% sw_thumbnails 'footer-payment-image-thumbnails' with {
                                    media: paymentMethod.media,
                                    sizes: {
                                        'default': '100px'
                                    },
                                    attributes: {
                                        'class': 'img-fluid footer-logo-image',
                                        'alt': (paymentMethod.media.translated.alt ?: paymentMethod.translated.name),
                                        'title': (paymentMethod.media.translated.title ?: paymentMethod.translated.name)
                                    }
                                } %}
                            </div>
                        {% endif %}
                    {% endblock %}
                {% endfor %}
            {% endblock %}

            {% block layout_footer_shipping_logos %}
                {% for shippingMethod in page.salesChannelShippingMethods %}
                    {% block layout_footer_shipping_logo %}
                        {% if shippingMethod.media %}
                            <div class=\"footer-logo is-shipping\">
                                {% sw_thumbnails 'footer-shipping-image-thumbnails' with {
                                    media: shippingMethod.media,
                                    sizes: {
                                        'default': '100px'
                                    },
                                    attributes: {
                                        'class': 'img-fluid footer-logo-image',
                                        'alt': (shippingMethod.media.translated.alt ?: shippingMethod.translated.name),
                                        'title': (shippingMethod.media.translated.title ?: shippingMethod.translated.name)
                                    }
                                } %}
                            </div>
                        {% endif %}
                    {% endblock %}
                {% endfor %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block layout_footer_bottom %}
        <div class=\"footer-bottom\">
            {% block layout_footer_service_menu %}
                <div class=\"container\">
                    {% block layout_footer_service_menu_content %}
                        <ul class=\"footer-service-menu-list list-unstyled\">
                            {% for serviceMenuItem in page.header.serviceMenu %}
                                {% block layout_footer_service_menu_item %}
                                    <li class=\"footer-service-menu-item\">
                                        <a class=\"footer-service-menu-link\"
                                           href=\"{% if serviceMenuItem.externalLink %}{{ serviceMenuItem.externalLink }}{% else %}{{ seoUrl('frontend.navigation.page', { navigationId: serviceMenuItem.id }) }}{% endif %}\"
                                           title=\"{{ serviceMenuItem.translated.name }}\">
                                            {{ serviceMenuItem.translated.name }}
                                        </a>
                                    </li>
                                {% endblock %}
                            {% endfor %}
                        </ul>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block layout_footer_vat %}
                <div class=\"footer-vat\">
                    {% if context.taxState == \"gross\" %}
                        <p>
                            {{ \"footer.includeVat\"|trans({
                                '%url%': path('frontend.cms.page',{ id: shopware.config.core.basicInformation.shippingPaymentInfoPage })
                            })|raw }}
                        </p>
                    {% else %}
                        <p>
                            {{ \"footer.excludeVat\"|trans({
                                '%url%': path('frontend.cms.page',{ id: shopware.config.core.basicInformation.shippingPaymentInfoPage })
                            })|raw }}
                        </p>
                    {% endif %}
                </div>
            {% endblock %}

            {% block layout_footer_copyright %}
                <div class=\"footer-copyright\">
                    {% sw_icon 'shopware' style {'size':'xs'} %}
                    {{ \"footer.copyrightInfo\"|trans|sw_sanitize }}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/footer/footer.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
