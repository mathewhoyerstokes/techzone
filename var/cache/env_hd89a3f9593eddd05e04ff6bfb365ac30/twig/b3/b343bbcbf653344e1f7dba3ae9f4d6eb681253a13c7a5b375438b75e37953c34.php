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

/* @Storefront/storefront/page/product-detail/review/review-widget.html.twig */
class __TwigTemplate_c5098f7fc82207979e5bf902256a4ab586b1d2c348fc039de6d0615621f6ed73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_widget' => [$this, 'block_page_product_detail_review_widget'],
            'page_product_detail_review_info_container' => [$this, 'block_page_product_detail_review_info_container'],
            'page_product_detail_review_info' => [$this, 'block_page_product_detail_review_info'],
            'page_product_detail_review_title' => [$this, 'block_page_product_detail_review_title'],
            'page_product_detail_review_overview' => [$this, 'block_page_product_detail_review_overview'],
            'page_product_detail_review_filter' => [$this, 'block_page_product_detail_review_filter'],
            'page_product_detail_review_filter_csrf' => [$this, 'block_page_product_detail_review_filter_csrf'],
            'page_product_detail_review_filter_box' => [$this, 'block_page_product_detail_review_filter_box'],
            'page_product_detail_review_filter_checkbox' => [$this, 'block_page_product_detail_review_filter_checkbox'],
            'page_product_detail_review_filter_checkbox_input' => [$this, 'block_page_product_detail_review_filter_checkbox_input'],
            'page_product_detail_review_filter_checkbox_label' => [$this, 'block_page_product_detail_review_filter_checkbox_label'],
            'page_product_detail_review_filter_progressbar' => [$this, 'block_page_product_detail_review_filter_progressbar'],
            'page_product_detail_review_filter_share' => [$this, 'block_page_product_detail_review_filter_share'],
            'page_product_detail_review_filter_divider' => [$this, 'block_page_product_detail_review_filter_divider'],
            'page_product_detail_review_form_teaser' => [$this, 'block_page_product_detail_review_form_teaser'],
            'page_product_detail_review_form_teaser_header' => [$this, 'block_page_product_detail_review_form_teaser_header'],
            'page_product_detail_review_form_teaser_text' => [$this, 'block_page_product_detail_review_form_teaser_text'],
            'page_product_detail_review_form_teaser_button' => [$this, 'block_page_product_detail_review_form_teaser_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_review_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget"));

        // line 2
        echo "    <div class=\"sticky-top product-detail-review-widget\">

        ";
        // line 4
        $this->displayBlock('page_product_detail_review_info_container', $context, $blocks);
        // line 144
        echo "
        ";
        // line 145
        $this->displayBlock('page_product_detail_review_form_teaser', $context, $blocks);
        // line 189
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_product_detail_review_info_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info_container"));

        // line 5
        echo "            ";
        $this->displayBlock('page_product_detail_review_info', $context, $blocks);
        // line 40
        echo "
            ";
        // line 41
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 42
            echo "                <hr>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-info", 1 => ".js-review-teaser", 2 => ".js-review-content"], "submitOnChange" => true];
        // line 53
        echo "
            ";
        // line 54
        $this->displayBlock('page_product_detail_review_filter', $context, $blocks);
        // line 143
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_page_product_detail_review_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_info"));

        // line 6
        echo "                <div class=\"product-detail-review-info js-review-info\">

                    ";
        // line 8
        $this->displayBlock('page_product_detail_review_title', $context, $blocks);
        // line 13
        echo "
                    ";
        // line 14
        $this->displayBlock('page_product_detail_review_overview', $context, $blocks);
        // line 38
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_product_detail_review_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_title"));

        // line 9
        echo "                        <p class=\"product-detail-review-title h5\">
                            ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTitle", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 10), "%total%" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "totalReviews", [], "any", false, false, false, 10)]));
        echo "
                        </p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_page_product_detail_review_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_overview"));

        // line 15
        echo "                        <div class=\"product-detail-review-rating\"
                            ";
        // line 16
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 17
            echo "                                itemprop=\"aggregateRating\" itemscope itemtype=\"https://schema.org/AggregateRating\"
                            ";
        }
        // line 18
        echo ">

                            ";
        // line 20
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 21
            echo "                                <meta itemprop=\"bestRating\" content=\"5\">
                                <meta itemprop=\"ratingCount\" content=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["productReviewCount"] ?? null), "html", null, true);
            echo "\">
                                <meta itemprop=\"ratingValue\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
            echo "\">
                            ";
        }
        // line 25
        echo "
                            ";
        // line 26
        $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", 26)->display(twig_array_merge($context, ["points" =>         // line 27
($context["productAvgRating"] ?? null), "style" => "text-primary"]));
        // line 30
        echo "
                            ";
        // line 31
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 32
            echo "                                <p class=\"h6\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, ($context["productAvgRating"] ?? null), "html", null, true);
            echo " ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRate"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 33), "maxPoints", [], "any", false, false, false, 33), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewAvgRateElements"), "html", null, true);
            echo "
                                </p>
                            ";
        }
        // line 36
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_page_product_detail_review_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter"));

        // line 55
        echo "                ";
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 56
            echo "                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
                              action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 58), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"
                              method=\"post\"
                              data-form-ajax-submit=\"true\"
                              data-form-ajax-submit-options='";
            // line 61
            echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
            echo "'>

                            ";
            // line 63
            $this->displayBlock('page_product_detail_review_filter_csrf', $context, $blocks);
            // line 66
            echo "
                            ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "get", [0 => "limit"], "method", false, false, false, 67)) {
                // line 68
                echo "                                <input type=\"hidden\" name=\"limit\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "get", [0 => "limit"], "method", false, false, false, 68), "html", null, true);
                echo "\">
                            ";
            }
            // line 70
            echo "
                            ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "get", [0 => "language"], "method", false, false, false, 71)) {
                // line 72
                echo "                                <input type=\"hidden\" name=\"language\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "get", [0 => "language"], "method", false, false, false, 72), "html", null, true);
                echo "\">
                            ";
            }
            // line 74
            echo "
                            ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 75), "get", [0 => "sort"], "method", false, false, false, 75)) {
                // line 76
                echo "                                <input type=\"hidden\" name=\"sort\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 76), "get", [0 => "sort"], "method", false, false, false, 76), "html", null, true);
                echo "\">
                            ";
            }
            // line 78
            echo "
                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 79), "matrix", [], "any", false, false, false, 79));
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
            foreach ($context['_seq'] as $context["_key"] => $context["matrix"]) {
                // line 80
                echo "                                ";
                $this->displayBlock('page_product_detail_review_filter_box', $context, $blocks);
                // line 134
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                        </form>
                    </div>

                    ";
            // line 138
            $this->displayBlock('page_product_detail_review_filter_divider', $context, $blocks);
            // line 141
            echo "                ";
        }
        // line 142
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_page_product_detail_review_filter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_csrf"));

        // line 64
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_page_product_detail_review_filter_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_box"));

        // line 81
        echo "                                    <div class=\"row product-detail-review-filter\">

                                        ";
        // line 83
        $this->displayBlock('page_product_detail_review_filter_checkbox', $context, $blocks);
        // line 113
        echo "
                                        ";
        // line 114
        $this->displayBlock('page_product_detail_review_filter_progressbar', $context, $blocks);
        // line 126
        echo "
                                        ";
        // line 127
        $this->displayBlock('page_product_detail_review_filter_share', $context, $blocks);
        // line 132
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_page_product_detail_review_filter_checkbox($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox"));

        // line 84
        echo "                                            <div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
                                                <div class=\"custom-control custom-checkbox\">

                                                    ";
        // line 87
        $this->displayBlock('page_product_detail_review_filter_checkbox_input', $context, $blocks);
        // line 102
        echo "
                                                    ";
        // line 103
        $this->displayBlock('page_product_detail_review_filter_checkbox_label', $context, $blocks);
        // line 110
        echo "                                                </div>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_page_product_detail_review_filter_checkbox_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_input"));

        // line 88
        echo "                                                        <input type=\"checkbox\"
                                                               class=\"custom-control-input\"
                                                               id=\"reviewRating";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 90), "html", null, true);
        echo "\"
                                                               name=\"points[]\"
                                                            ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 92), "get", [0 => "points"], "method", false, false, false, 92)) {
            // line 93
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "get", [0 => "points"], "method", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 94
                echo "                                                                    ";
                if (($context["points"] == twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 94))) {
                    // line 95
                    echo "                                                                        checked=\"checked\"
                                                                    ";
                }
                // line 97
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                                            ";
        }
        // line 99
        echo "                                                               value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 99), "html", null, true);
        echo "\"
                                                            ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 100) < 1)) {
            echo "disabled";
        }
        echo ">
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_page_product_detail_review_filter_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_checkbox_label"));

        // line 104
        echo "                                                        <label class=\"custom-control-label text-nowrap\"
                                                               for=\"reviewRating";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
                                                            <small>";
        // line 106
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("detail.review" . twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "points", [], "any", false, false, false, 106)) . "PointRatingText")));
        echo "
                                                                (";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "count", [], "any", false, false, false, 107), "html", null, true);
        echo ")</small>
                                                        </label>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_page_product_detail_review_filter_progressbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_progressbar"));

        // line 115
        echo "                                            <div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
                                                <div class=\"progress product-detail-review-progressbar-container\">
                                                    <div class=\"progress-bar product-detail-review-progressbar-bar\"
                                                         role=\"progressbar\"
                                                         style=\"width: ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 119), "html", null, true);
        echo "%;\"
                                                         aria-valuenow=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 120), "html", null, true);
        echo "\"
                                                         aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_page_product_detail_review_filter_share($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_share"));

        // line 128
        echo "                                            <div class=\"col-12 col-md-3 product-detail-review-share\">
                                                <p><small>";
        // line 129
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, ($context["matrix"] ?? null), "percent", [], "any", false, false, false, 129)), "html", null, true);
        echo "%</small></p>
                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 138
    public function block_page_product_detail_review_filter_divider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_filter_divider"));

        // line 139
        echo "                        <hr/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_page_product_detail_review_form_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser"));

        // line 146
        echo "            <div class=\"product-detail-review-teaser js-review-teaser\">

                ";
        // line 148
        $this->displayBlock('page_product_detail_review_form_teaser_header', $context, $blocks);
        // line 157
        echo "
                ";
        // line 158
        $this->displayBlock('page_product_detail_review_form_teaser_text', $context, $blocks);
        // line 167
        echo "
                ";
        // line 168
        $this->displayBlock('page_product_detail_review_form_teaser_button', $context, $blocks);
        // line 187
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 148
    public function block_page_product_detail_review_form_teaser_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_header"));

        // line 149
        echo "                    <p class=\"h4\">
                        ";
        // line 150
        if ( !twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 150)) {
            // line 151
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserTitle"));
            echo "
                        ";
        } else {
            // line 153
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserTitle"));
            echo "
                        ";
        }
        // line 155
        echo "                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 158
    public function block_page_product_detail_review_form_teaser_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_text"));

        // line 159
        echo "                    <p>
                        ";
        // line 160
        if ( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "customerReview", [], "any", false, false, false, 160)) {
            // line 161
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserText"));
            echo "
                        ";
        } else {
            // line 163
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserText"));
            echo "
                        ";
        }
        // line 165
        echo "                    </p>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 168
    public function block_page_product_detail_review_form_teaser_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_teaser_button"));

        // line 169
        echo "                    <button class=\"btn btn-primary product-detail-review-teaser-btn\"
                            type=\"button\"
                            data-toggle=\"collapse\"
                            data-target=\".multi-collapse\"
                            aria-expanded=\"false\"
                            aria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t";
        // line 176
        if ( !twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 176)) {
            // line 177
            echo "                                ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButton"));
            echo "
                            ";
        } else {
            // line 179
            echo "                                ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewExistsTeaserButton"));
            echo "
                            ";
        }
        // line 181
        echo "\t\t\t\t\t\t</span>
                        <span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t";
        // line 183
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewTeaserButtonHide"));
        echo "
\t\t\t\t\t\t</span>
                    </button>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  707 => 183,  703 => 181,  697 => 179,  691 => 177,  689 => 176,  680 => 169,  673 => 168,  665 => 165,  659 => 163,  653 => 161,  651 => 160,  648 => 159,  641 => 158,  633 => 155,  627 => 153,  621 => 151,  619 => 150,  616 => 149,  609 => 148,  601 => 187,  599 => 168,  596 => 167,  594 => 158,  591 => 157,  589 => 148,  585 => 146,  578 => 145,  570 => 139,  563 => 138,  553 => 129,  550 => 128,  543 => 127,  530 => 120,  526 => 119,  520 => 115,  513 => 114,  503 => 107,  499 => 106,  495 => 105,  492 => 104,  485 => 103,  474 => 100,  469 => 99,  466 => 98,  460 => 97,  456 => 95,  453 => 94,  448 => 93,  446 => 92,  441 => 90,  437 => 88,  430 => 87,  421 => 110,  419 => 103,  416 => 102,  414 => 87,  409 => 84,  402 => 83,  394 => 132,  392 => 127,  389 => 126,  387 => 114,  384 => 113,  382 => 83,  378 => 81,  371 => 80,  361 => 64,  354 => 63,  347 => 142,  344 => 141,  342 => 138,  337 => 135,  323 => 134,  320 => 80,  303 => 79,  300 => 78,  294 => 76,  292 => 75,  289 => 74,  283 => 72,  281 => 71,  278 => 70,  272 => 68,  270 => 67,  267 => 66,  265 => 63,  260 => 61,  254 => 58,  250 => 56,  247 => 55,  240 => 54,  232 => 36,  220 => 33,  217 => 32,  215 => 31,  212 => 30,  210 => 27,  209 => 26,  206 => 25,  201 => 23,  197 => 22,  194 => 21,  192 => 20,  188 => 18,  184 => 17,  182 => 16,  179 => 15,  172 => 14,  162 => 10,  159 => 9,  152 => 8,  144 => 38,  142 => 14,  139 => 13,  137 => 8,  133 => 6,  126 => 5,  119 => 143,  117 => 54,  114 => 53,  112 => 45,  109 => 44,  105 => 42,  103 => 41,  100 => 40,  97 => 5,  90 => 4,  82 => 189,  80 => 145,  77 => 144,  75 => 4,  71 => 2,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_review_widget %}
    <div class=\"sticky-top product-detail-review-widget\">

        {% block page_product_detail_review_info_container %}
            {% block page_product_detail_review_info %}
                <div class=\"product-detail-review-info js-review-info\">

                    {% block page_product_detail_review_title %}
                        <p class=\"product-detail-review-title h5\">
                            {{ \"detail.reviewTitle\"|trans({'%count%': reviews.total, '%total%':reviews.totalReviews })|sw_sanitize }}
                        </p>
                    {% endblock %}

                    {% block page_product_detail_review_overview %}
                        <div class=\"product-detail-review-rating\"
                            {% if productReviewCount > 0 %}
                                itemprop=\"aggregateRating\" itemscope itemtype=\"https://schema.org/AggregateRating\"
                            {% endif %}>

                            {% if productReviewCount > 0 %}
                                <meta itemprop=\"bestRating\" content=\"5\">
                                <meta itemprop=\"ratingCount\" content=\"{{ productReviewCount }}\">
                                <meta itemprop=\"ratingValue\" content=\"{{ productAvgRating }}\">
                            {% endif %}

                            {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                points: productAvgRating,
                                style: 'text-primary'
                            } %}

                            {% if productReviewCount > 0 %}
                                <p class=\"h6\">
                                    {{ productAvgRating }} {{ \"detail.reviewAvgRate\"|trans|sw_sanitize }} {{ reviews.matrix.maxPoints }} {{ \"detail.reviewAvgRateElements\"|trans }}
                                </p>
                            {% endif %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% if productReviewCount > 0 %}
                <hr>
            {% endif %}

            {% set formAjaxSubmitOptions = {
                replaceSelectors: [
                    \".js-review-info\",
                    \".js-review-teaser\",
                    \".js-review-content\"
                ],
                submitOnChange: true
            } %}

            {% block page_product_detail_review_filter %}
                {% if productReviewCount > 0 %}
                    <div class=\"js-review-filter\">
                        <form class=\"review-filter-form\"
                              action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
                              method=\"post\"
                              data-form-ajax-submit=\"true\"
                              data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                            {% block page_product_detail_review_filter_csrf %}
                                {{ sw_csrf('frontend.product.reviews') }}
                            {% endblock %}

                            {% if app.request.get('limit') %}
                                <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                            {% endif %}

                            {% if app.request.get('language') %}
                                <input type=\"hidden\" name=\"language\" value=\"{{ app.request.get('language') }}\">
                            {% endif %}

                            {% if app.request.get('sort') %}
                                <input type=\"hidden\" name=\"sort\" value=\"{{ app.request.get('sort') }}\">
                            {% endif %}

                            {% for matrix in reviews.matrix.matrix %}
                                {% block page_product_detail_review_filter_box %}
                                    <div class=\"row product-detail-review-filter\">

                                        {% block page_product_detail_review_filter_checkbox %}
                                            <div class=\"col-md-8 col-lg-5 product-detail-review-checkbox\">
                                                <div class=\"custom-control custom-checkbox\">

                                                    {% block page_product_detail_review_filter_checkbox_input %}
                                                        <input type=\"checkbox\"
                                                               class=\"custom-control-input\"
                                                               id=\"reviewRating{{ matrix.points }}\"
                                                               name=\"points[]\"
                                                            {% if app.request.get('points') %}
                                                                {% for points in app.request.get('points') %}
                                                                    {% if points == matrix.points %}
                                                                        checked=\"checked\"
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                               value=\"{{ matrix.points }}\"
                                                            {% if matrix.count < 1 %}disabled{% endif %}>
                                                    {% endblock %}

                                                    {% block page_product_detail_review_filter_checkbox_label %}
                                                        <label class=\"custom-control-label text-nowrap\"
                                                               for=\"reviewRating{{ matrix.points }}\">
                                                            <small>{{ \"detail.review#{matrix.points}PointRatingText\"|trans|sw_sanitize }}
                                                                ({{ matrix.count }})</small>
                                                        </label>
                                                    {% endblock %}
                                                </div>
                                            </div>
                                        {% endblock %}

                                        {% block page_product_detail_review_filter_progressbar %}
                                            <div class=\"col d-none d-lg-block product-detail-review-progressbar-col\">
                                                <div class=\"progress product-detail-review-progressbar-container\">
                                                    <div class=\"progress-bar product-detail-review-progressbar-bar\"
                                                         role=\"progressbar\"
                                                         style=\"width: {{ matrix.percent }}%;\"
                                                         aria-valuenow=\"{{ matrix.percent }}\"
                                                         aria-valuemin=\"0\"
                                                         aria-valuemax=\"100\"></div>
                                                </div>
                                            </div>
                                        {% endblock %}

                                        {% block page_product_detail_review_filter_share %}
                                            <div class=\"col-12 col-md-3 product-detail-review-share\">
                                                <p><small>{{ matrix.percent|round }}%</small></p>
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            {% endfor %}
                        </form>
                    </div>

                    {% block page_product_detail_review_filter_divider %}
                        <hr/>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}

        {% block page_product_detail_review_form_teaser %}
            <div class=\"product-detail-review-teaser js-review-teaser\">

                {% block page_product_detail_review_form_teaser_header %}
                    <p class=\"h4\">
                        {% if not reviews.customerReview %}
                            {{ \"detail.reviewTeaserTitle\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"detail.reviewExistsTeaserTitle\"|trans|sw_sanitize }}
                        {% endif %}
                    </p>
                {% endblock %}

                {% block page_product_detail_review_form_teaser_text %}
                    <p>
                        {% if not page.customerReview %}
                            {{ \"detail.reviewTeaserText\"|trans|sw_sanitize }}
                        {% else %}
                            {{ \"detail.reviewExistsTeaserText\"|trans|sw_sanitize }}
                        {% endif %}
                    </p>
                {% endblock %}

                {% block page_product_detail_review_form_teaser_button %}
                    <button class=\"btn btn-primary product-detail-review-teaser-btn\"
                            type=\"button\"
                            data-toggle=\"collapse\"
                            data-target=\".multi-collapse\"
                            aria-expanded=\"false\"
                            aria-controls=\"review-form review-list\">
                        <span class=\"product-detail-review-teaser-show\">
\t\t\t\t\t\t\t{% if not reviews.customerReview %}
                                {{ \"detail.reviewTeaserButton\"|trans|sw_sanitize }}
                            {% else %}
                                {{ \"detail.reviewExistsTeaserButton\"|trans|sw_sanitize }}
                            {% endif %}
\t\t\t\t\t\t</span>
                        <span class=\"product-detail-review-teaser-hide\">
\t\t\t\t\t\t\t{{ \"detail.reviewTeaserButtonHide\"|trans|sw_sanitize }}
\t\t\t\t\t\t</span>
                    </button>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-widget.html.twig");
    }
}
