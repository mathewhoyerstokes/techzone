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

/* @Storefront/storefront/component/product/card/box-standard.html.twig */
class __TwigTemplate_b63da26c0455ffebb58e07e796957ffc68c863912016af7bee8f58f99df4f5b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box' => [$this, 'block_component_product_box'],
            'component_product_box_content' => [$this, 'block_component_product_box_content'],
            'component_product_box_badges' => [$this, 'block_component_product_box_badges'],
            'component_product_box_rich_snippets' => [$this, 'block_component_product_box_rich_snippets'],
            'component_product_box_image' => [$this, 'block_component_product_box_image'],
            'component_product_box_wishlist_action' => [$this, 'block_component_product_box_wishlist_action'],
            'component_product_box_info' => [$this, 'block_component_product_box_info'],
            'component_product_box_rating' => [$this, 'block_component_product_box_rating'],
            'component_product_box_name' => [$this, 'block_component_product_box_name'],
            'component_product_box_variant_characteristics' => [$this, 'block_component_product_box_variant_characteristics'],
            'component_product_box_description' => [$this, 'block_component_product_box_description'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
            'component_product_box_action' => [$this, 'block_component_product_box_action'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/product/card/box-standard.html.twig"));

        // line 1
        $this->displayBlock('component_product_box', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_product_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box"));

        // line 2
        echo "    ";
        if (($context["product"] ?? null)) {
            // line 3
            echo "        ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3);
            // line 4
            echo "        ";
            $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "        ";
            $context["cover"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cover", [], "any", false, false, false, 5), "media", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["variation"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 6);
            // line 7
            echo "
        <div class=\"card product-box box-";
            // line 8
            echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 9
            $this->displayBlock('component_product_box_content', $context, $blocks);
            // line 134
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_component_product_box_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_content"));

        // line 10
        echo "                <div class=\"card-body\">
                    ";
        // line 11
        $this->displayBlock('component_product_box_badges', $context, $blocks);
        // line 14
        echo "
                    ";
        // line 15
        $this->displayBlock('component_product_box_rich_snippets', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('component_product_box_image', $context, $blocks);
        // line 73
        echo "
                    ";
        // line 74
        $this->displayBlock('component_product_box_info', $context, $blocks);
        // line 132
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_component_product_box_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_badges"));

        // line 12
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/badges.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 12)->display($context);
        // line 13
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_component_product_box_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rich_snippets"));

        // line 16
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/meta.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 16)->display($context);
        // line 17
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_component_product_box_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_image"));

        // line 20
        echo "                        <div class=\"product-image-wrapper\">
                            ";
        // line 22
        echo "                            ";
        $context["displayMode"] = ((($context["displayMode"] ?? null)) ? (($context["displayMode"] ?? null)) : ("standard"));
        // line 23
        echo "
                            ";
        // line 25
        echo "                            ";
        if (((($context["layout"] ?? null) == "image") && (($context["displayMode"] ?? null) == "standard"))) {
            // line 26
            echo "                                ";
            $context["displayMode"] = "cover";
            // line 27
            echo "                            ";
        }
        // line 28
        echo "
                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                               title=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"
                               class=\"product-image-link is-";
        // line 31
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo "\">
                                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "url", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                    ";
            $context["attributes"] = ["class" => ("product-image is-" .             // line 34
($context["displayMode"] ?? null)), "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "alt", [], "any", false, false, false, 35)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 35), "alt", [], "any", false, false, false, 35)) : (($context["name"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "translated", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36)) : (($context["name"] ?? null)))];
            // line 38
            echo "
                                    ";
            // line 39
            if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                // line 40
                echo "                                        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 41
                echo "                                    ";
            }
            // line 42
            echo "
                                    ";
            // line 43
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 43);
            })())->display(twig_array_merge($context, ["media" =>             // line 44
($context["cover"] ?? null), "sizes" => ["xs" => "501px", "sm" => "315px", "md" => "427px", "lg" => "333px", "xl" => "284px"], "name" => "product-image-thumbnails"]));
            // line 53
            echo "                                ";
        } else {
            // line 54
            echo "                                    <div class=\"product-image-placeholder\">
                                        ";
            // line 55
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box-standard.html.twig", 55);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 58
            echo "                                    </div>
                                ";
        }
        // line 60
        echo "                            </a>

                            ";
        // line 62
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->feature("FEATURE_NEXT_10549") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 62), "core", [], "any", false, false, false, 62), "cart", [], "any", false, false, false, 62), "wishlistEnabled", [], "any", false, false, false, 62))) {
            // line 63
            echo "                                ";
            $this->displayBlock('component_product_box_wishlist_action', $context, $blocks);
            // line 69
            echo "                            ";
        }
        // line 70
        echo "
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_component_product_box_wishlist_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_wishlist_action"));

        // line 64
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/wishlist.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 64)->display(twig_array_merge($context, ["appearance" => "circle", "productId" =>         // line 66
($context["id"] ?? null)]));
        // line 68
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_component_product_box_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_info"));

        // line 75
        echo "                        <div class=\"product-info\">

                            ";
        // line 77
        $this->displayBlock('component_product_box_rating', $context, $blocks);
        // line 89
        echo "
                            ";
        // line 90
        $this->displayBlock('component_product_box_name', $context, $blocks);
        // line 97
        echo "
                            ";
        // line 98
        $this->displayBlock('component_product_box_variant_characteristics', $context, $blocks);
        // line 116
        echo "
                            ";
        // line 117
        $this->displayBlock('component_product_box_description', $context, $blocks);
        // line 122
        echo "
                            ";
        // line 123
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 126
        echo "
                            ";
        // line 127
        $this->displayBlock('component_product_box_action', $context, $blocks);
        // line 130
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_component_product_box_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_rating"));

        // line 78
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 78), "core", [], "any", false, false, false, 78), "listing", [], "any", false, false, false, 78), "showReview", [], "any", false, false, false, 78)) {
            // line 79
            echo "                                    <div class=\"product-rating\">
                                        ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 80)) {
                // line 81
                echo "                                            ";
                $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 81)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source,                 // line 82
($context["product"] ?? null), "ratingAverage", [], "any", false, false, false, 82), "style" => "text-primary"]));
                // line 85
                echo "                                        ";
            }
            // line 86
            echo "                                    </div>
                                ";
        }
        // line 88
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_component_product_box_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_name"));

        // line 91
        echo "                                <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                                   class=\"product-name\"
                                   title=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                    ";
        // line 94
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_component_product_box_variant_characteristics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_variant_characteristics"));

        // line 99
        echo "                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        ";
        // line 101
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isGrouped", [], "any", false, false, false, 101)) {
            // line 102
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                // line 103
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "group", [], "any", false, false, false, 103), "html", null, true);
                echo ":
                                                <span class=\"product-variant-characteristics-option\">
                                                    ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variation"], "option", [], "any", false, false, false, 105), "html", null, true);
                echo "
                                                </span>

                                                ";
                // line 108
                if ((twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variation", [], "any", false, false, false, 108)) != $context["variation"])) {
                    // line 109
                    echo "                                                    ";
                    echo " | ";
                    echo "
                                                ";
                }
                // line 111
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                        ";
        }
        // line 113
        echo "                                    </div>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_component_product_box_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_description"));

        // line 118
        echo "                                <div class=\"product-description\">
                                    ";
        // line 119
        echo strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "translated", [], "any", false, false, false, 119), "description", [], "any", false, false, false, 119));
        echo "
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_price"));

        // line 124
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/price-unit.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 124)->display($context);
        // line 125
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_component_product_box_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_product_box_action"));

        // line 128
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/action.html.twig", "@Storefront/storefront/component/product/card/box-standard.html.twig", 128)->display($context);
        // line 129
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box-standard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  505 => 129,  502 => 128,  495 => 127,  488 => 125,  485 => 124,  478 => 123,  468 => 119,  465 => 118,  458 => 117,  449 => 113,  446 => 112,  440 => 111,  434 => 109,  432 => 108,  426 => 105,  420 => 103,  415 => 102,  413 => 101,  409 => 99,  402 => 98,  392 => 94,  388 => 93,  382 => 91,  375 => 90,  368 => 88,  364 => 86,  361 => 85,  359 => 82,  357 => 81,  355 => 80,  352 => 79,  349 => 78,  342 => 77,  334 => 130,  332 => 127,  329 => 126,  327 => 123,  324 => 122,  322 => 117,  319 => 116,  317 => 98,  314 => 97,  312 => 90,  309 => 89,  307 => 77,  303 => 75,  296 => 74,  289 => 68,  287 => 66,  285 => 64,  278 => 63,  269 => 70,  266 => 69,  263 => 63,  261 => 62,  257 => 60,  253 => 58,  245 => 55,  242 => 54,  239 => 53,  237 => 44,  230 => 43,  227 => 42,  224 => 41,  221 => 40,  219 => 39,  216 => 38,  214 => 36,  213 => 35,  212 => 34,  210 => 33,  208 => 32,  204 => 31,  200 => 30,  196 => 29,  193 => 28,  190 => 27,  187 => 26,  184 => 25,  181 => 23,  178 => 22,  175 => 20,  168 => 19,  161 => 17,  158 => 16,  151 => 15,  144 => 13,  141 => 12,  134 => 11,  126 => 132,  124 => 74,  121 => 73,  119 => 19,  116 => 18,  114 => 15,  111 => 14,  109 => 11,  106 => 10,  99 => 9,  90 => 134,  88 => 9,  84 => 8,  81 => 7,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_product_box %}
    {% if product %}
        {% set name = product.translated.name %}
        {% set id = product.id %}
        {% set cover = product.cover.media %}
        {% set variation = product.variation %}

        <div class=\"card product-box box-{{ layout }}\">
            {% block component_product_box_content %}
                <div class=\"card-body\">
                    {% block component_product_box_badges %}
                        {% sw_include '@Storefront/storefront/component/product/card/badges.html.twig' %}
                    {% endblock %}

                    {% block component_product_box_rich_snippets %}
                        {% sw_include '@Storefront/storefront/component/product/card/meta.html.twig' %}
                    {% endblock %}

                    {% block component_product_box_image %}
                        <div class=\"product-image-wrapper\">
                            {# fallback if display mode is not set #}
                            {% set displayMode = displayMode ?: 'standard' %}

                            {# set display mode 'cover' for box-image with standard display mode #}
                            {% if layout == 'image' and displayMode == 'standard' %}
                                {% set displayMode = 'cover' %}
                            {% endif %}

                            <a href=\"{{ seoUrl('frontend.detail.page', {'productId': id}) }}\"
                               title=\"{{ name }}\"
                               class=\"product-image-link is-{{ displayMode }}\">
                                {% if cover.url %}
                                    {% set attributes = {
                                        'class': 'product-image is-'~displayMode,
                                        'alt': (cover.translated.alt ?: name),
                                        'title': (cover.translated.title ?: name)
                                    } %}

                                    {% if displayMode == 'cover' or displayMode == 'contain' %}
                                        {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                    {% endif %}

                                    {% sw_thumbnails 'product-image-thumbnails' with {
                                        media: cover,
                                        sizes: {
                                            'xs': '501px',
                                            'sm': '315px',
                                            'md': '427px',
                                            'lg': '333px',
                                            'xl': '284px'
                                        }
                                    } %}
                                {% else %}
                                    <div class=\"product-image-placeholder\">
                                        {% sw_icon 'placeholder' style {
                                            'size': 'fluid'
                                        } %}
                                    </div>
                                {% endif %}
                            </a>

                            {% if feature('FEATURE_NEXT_10549') and shopware.config.core.cart.wishlistEnabled %}
                                {% block component_product_box_wishlist_action %}
                                    {% sw_include '@Storefront/storefront/component/product/card/wishlist.html.twig' with {
                                        appearance: 'circle',
                                        productId: id
                                    } %}
                                {% endblock %}
                            {% endif %}

                        </div>
                    {% endblock %}

                    {% block component_product_box_info %}
                        <div class=\"product-info\">

                            {% block component_product_box_rating %}
                                {% if shopware.config.core.listing.showReview %}
                                    <div class=\"product-rating\">
                                        {% if product.ratingAverage %}
                                            {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                                points: product.ratingAverage,
                                                style: 'text-primary'
                                            } %}
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endblock %}

                            {% block component_product_box_name %}
                                <a href=\"{{ seoUrl('frontend.detail.page', {'productId': id}) }}\"
                                   class=\"product-name\"
                                   title=\"{{ name }}\">
                                    {{ name }}
                                </a>
                            {% endblock %}

                            {% block component_product_box_variant_characteristics %}
                                <div class=\"product-variant-characteristics\">
                                    <div class=\"product-variant-characteristics-text\">
                                        {% if not product.isGrouped %}
                                            {% for variation in product.variation %}
                                                {{ variation.group }}:
                                                <span class=\"product-variant-characteristics-option\">
                                                    {{ variation.option }}
                                                </span>

                                                {% if product.variation|last != variation %}
                                                    {{ \" | \" }}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    </div>
                                </div>
                            {% endblock %}

                            {% block component_product_box_description %}
                                <div class=\"product-description\">
                                    {{ product.translated.description|striptags|raw }}
                                </div>
                            {% endblock %}

                            {% block component_product_box_price %}
                                {% sw_include '@Storefront/storefront/component/product/card/price-unit.html.twig' %}
                            {% endblock %}

                            {% block component_product_box_action %}
                                {% sw_include '@Storefront/storefront/component/product/card/action.html.twig' %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/product/card/box-standard.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box-standard.html.twig");
    }
}
