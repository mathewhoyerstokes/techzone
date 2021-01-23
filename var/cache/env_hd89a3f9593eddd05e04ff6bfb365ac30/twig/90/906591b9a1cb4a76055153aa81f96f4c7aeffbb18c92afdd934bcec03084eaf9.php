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

/* @Storefront/storefront/page/product-detail/review/review.html.twig */
class __TwigTemplate_afb64d93f0a9cd25fe818a96c3528be69246b31e757ef90e1ce5a09795b71acd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'page_product_detail_review_container' => [$this, 'block_page_product_detail_review_container'],
            'page_product_detail_review_tab_pane' => [$this, 'block_page_product_detail_review_tab_pane'],
            'page_product_detail_review_aside' => [$this, 'block_page_product_detail_review_aside'],
            'page_product_detail_review_widget_container' => [$this, 'block_page_product_detail_review_widget_container'],
            'page_product_detail_review_main' => [$this, 'block_page_product_detail_review_main'],
            'page_product_detail_review_alert' => [$this, 'block_page_product_detail_review_alert'],
            'page_product_detail_review_form_container' => [$this, 'block_page_product_detail_review_form_container'],
            'page_product_detail_review_list_container' => [$this, 'block_page_product_detail_review_list_container'],
            'page_product_detail_review_list' => [$this, 'block_page_product_detail_review_list'],
            'page_product_detail_review_list_actions' => [$this, 'block_page_product_detail_review_list_actions'],
            'page_product_detail_review_list_action_language' => [$this, 'block_page_product_detail_review_list_action_language'],
            'page_product_detail_review_list_action_language_csrf' => [$this, 'block_page_product_detail_review_list_action_language_csrf'],
            'page_product_detail_review_list_action_sortby' => [$this, 'block_page_product_detail_review_list_action_sortby'],
            'page_product_detail_review_list_action_sortby_form' => [$this, 'block_page_product_detail_review_list_action_sortby_form'],
            'page_product_detail_review_list_action_sortby_form_csrf' => [$this, 'block_page_product_detail_review_list_action_sortby_form_csrf'],
            'page_product_detail_review_list_action_sortby_label' => [$this, 'block_page_product_detail_review_list_action_sortby_label'],
            'page_product_detail_review_list_action_sortby_select' => [$this, 'block_page_product_detail_review_list_action_sortby_select'],
            'page_product_detail_review_list_content' => [$this, 'block_page_product_detail_review_list_content'],
            'page_product_detail_review_list_paging' => [$this, 'block_page_product_detail_review_list_paging'],
            'page_product_detail_review_list_paging_form' => [$this, 'block_page_product_detail_review_list_paging_form'],
            'page_product_detail_review_list_paging_csrf' => [$this, 'block_page_product_detail_review_list_paging_csrf'],
            'page_product_detail_review_list_empty' => [$this, 'block_page_product_detail_review_list_empty'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        echo "\t";
        $this->displayBlock('page_product_detail_review_container', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_container"));

        // line 5
        echo "
\t\t";
        // line 7
        echo "\t\t";
        $context["reviewsPerListPage"] = 10;
        // line 8
        echo "
\t\t";
        // line 10
        echo "\t\t";
        $context["currentListPage"] = 1;
        // line 11
        echo "
\t\t";
        // line 12
        $context["productReviewCount"] = twig_length_filter($this->env, ($context["reviews"] ?? null));
        // line 13
        echo "
\t\t";
        // line 14
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 15
            echo "            ";
            $context["productAvgRating"] = twig_round(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 15), "averageRating", [], "any", false, false, false, 15), 2, "common");
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "
\t\t";
        // line 19
        echo "\t\t";
        $context["foreignReviewsCount"] = 150;
        // line 20
        echo "
\t\t<div class=\"product-detail-review tab-pane-container\">
\t\t\t";
        // line 22
        $this->displayBlock('page_product_detail_review_tab_pane', $context, $blocks);
        // line 274
        echo "\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_page_product_detail_review_tab_pane($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_tab_pane"));

        // line 23
        echo "                <div class=\"row product-detail-review-content js-review-container\">
\t\t\t\t\t";
        // line 24
        $this->displayBlock('page_product_detail_review_aside', $context, $blocks);
        // line 31
        echo "
\t\t\t\t\t";
        // line 32
        $this->displayBlock('page_product_detail_review_main', $context, $blocks);
        // line 272
        echo "\t\t\t\t</div>
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_product_detail_review_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_aside"));

        // line 25
        echo "\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('page_product_detail_review_widget_container', $context, $blocks);
        // line 29
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_page_product_detail_review_widget_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_widget_container"));

        // line 27
        echo "\t\t\t\t\t\t\t\t";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-widget.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 27)->display($context);
        // line 28
        echo "\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_page_product_detail_review_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_main"));

        // line 33
        echo "\t\t\t\t\t\t<div class=\"col product-detail-review-main js-review-content\">
\t\t\t\t\t\t\t";
        // line 34
        $this->displayBlock('page_product_detail_review_alert', $context, $blocks);
        // line 52
        echo "
\t\t\t\t\t\t\t";
        // line 53
        $this->displayBlock('page_product_detail_review_form_container', $context, $blocks);
        // line 67
        echo "
\t\t\t\t\t\t\t";
        // line 68
        $this->displayBlock('page_product_detail_review_list_container', $context, $blocks);
        // line 270
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_page_product_detail_review_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_alert"));

        // line 35
        echo "\t\t\t\t\t\t\t\t";
        if ((($context["ratingSuccess"] ?? null) == 1)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 36)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSuccessAlert"))]));
            // line 40
            echo "                                ";
        } elseif ((($context["ratingSuccess"] ?? null) == 2)) {
            // line 41
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 41)->display(twig_array_merge($context, ["type" => "success", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSuccessUpdateAlert"))]));
            // line 45
            echo "\t\t\t\t\t\t\t\t";
        } elseif ((($context["ratingSuccess"] ?? null) ==  -1)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 46)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormErrorAlert"))]));
            // line 50
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_page_product_detail_review_form_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_container"));

        // line 54
        echo "\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse ";
        if ((($context["ratingSuccess"] ?? null) ==  -1)) {
            echo "show";
        }
        echo "\"
\t\t\t\t\t\t\t\t\t id=\"review-form\">
\t\t\t\t\t\t\t\t\t";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 56)) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-form\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-form.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 58)->display($context);
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-login\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-login.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 62)->display($context);
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_page_product_detail_review_list_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_container"));

        // line 69
        echo "\t\t\t\t\t\t\t\t<div id=\"review-list\"
\t\t\t\t\t\t\t\t\t class=\"collapse multi-collapse product-detail-review-list ";
        // line 70
        if ((($context["ratingSuccess"] ?? null) !=  -1)) {
            echo "show";
        }
        echo "\">

                                    ";
        // line 72
        $this->displayBlock('page_product_detail_review_list', $context, $blocks);
        // line 259
        echo "
                                    ";
        // line 260
        if ((($context["productReviewCount"] ?? null) <= 0)) {
            // line 261
            echo "                                        ";
            $this->displayBlock('page_product_detail_review_list_empty', $context, $blocks);
            // line 267
            echo "                                    ";
        }
        // line 268
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_page_product_detail_review_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list"));

        // line 73
        echo "                                        ";
        $this->displayBlock('page_product_detail_review_list_actions', $context, $blocks);
        // line 199
        echo "
                                        ";
        // line 200
        $this->displayBlock('page_product_detail_review_list_content', $context, $blocks);
        // line 207
        echo "
                                        ";
        // line 208
        $this->displayBlock('page_product_detail_review_list_paging', $context, $blocks);
        // line 258
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_page_product_detail_review_list_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_actions"));

        // line 74
        echo "                                            <div class=\"row align-items-center product-detail-review-actions\">
                                                ";
        // line 75
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-container"], "submitOnChange" => true];
        // line 79
        echo "
                                                ";
        // line 80
        $this->displayBlock('page_product_detail_review_list_action_language', $context, $blocks);
        // line 118
        echo "
                                                ";
        // line 119
        $this->displayBlock('page_product_detail_review_list_action_sortby', $context, $blocks);
        // line 180
        echo "                                            </div>

                                            <hr/>

                                            ";
        // line 185
        echo "                                            ";
        $context["listReviewsCount"] = (($context["productReviewCount"] ?? null) - ($context["foreignReviewsCount"] ?? null));
        // line 186
        echo "                                            ";
        // line 187
        echo "                                            ";
        if ((($context["listReviewsCount"] ?? null) < 0)) {
            // line 188
            echo "                                                ";
            $context["listReviewsCount"] = 0;
            // line 189
            echo "                                            ";
        }
        // line 190
        echo "
                                            <p class=\"text-right product-detail-review-counter\">
                                                ";
        // line 192
        if (((($context["listReviewsCount"] ?? null) > 1) && (($context["listReviewsCount"] ?? null) > ($context["reviewsPerListPage"] ?? null)))) {
            // line 193
            echo "                                                    <small><strong>";
            echo twig_escape_filter($this->env, ($context["currentListPage"] ?? null), "html", null, true);
            echo "</strong> - <strong>";
            echo twig_escape_filter($this->env, ($context["reviewsPerListPage"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountBefore"));
            echo " <strong>";
            echo twig_escape_filter($this->env, ($context["listReviewsCount"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountAfter", ["%count%" => ($context["listReviewsCount"] ?? null)]));
            echo "</small>
                                                ";
        } elseif ((        // line 194
($context["listReviewsCount"] ?? null) > 0)) {
            echo " ";
            // line 195
            echo "                                                    <small><strong>";
            echo twig_escape_filter($this->env, ($context["listReviewsCount"] ?? null), "html", null, true);
            echo "</strong> ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewCountAfter", ["%count%" => ($context["listReviewsCount"] ?? null)]));
            echo "</small>
                                                ";
        }
        // line 197
        echo "                                            </p>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_page_product_detail_review_list_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_language"));

        // line 81
        echo "                                                    <div class=\"col product-detail-review-language\">
                                                        ";
        // line 82
        if ((($context["foreignReviewsCount"] ?? null) > 0)) {
            // line 83
            echo "                                                            <form class=\"product-detail-review-language-form\"
                                                                  action=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 84), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='";
            // line 87
            echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
            echo "'>

                                                                ";
            // line 89
            $this->displayBlock('page_product_detail_review_list_action_language_csrf', $context, $blocks);
            // line 92
            echo "
                                                                ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "get", [0 => "limit"], "method", false, false, false, 93)) {
                // line 94
                echo "                                                                    <input type=\"hidden\" name=\"limit\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 94), "get", [0 => "limit"], "method", false, false, false, 94), "html", null, true);
                echo "\">
                                                                ";
            }
            // line 96
            echo "
                                                                ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 97), "get", [0 => "sort"], "method", false, false, false, 97)) {
                // line 98
                echo "                                                                    <input type=\"hidden\" name=\"sort\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 98), "get", [0 => "sort"], "method", false, false, false, 98), "html", null, true);
                echo "\">
                                                                ";
            }
            // line 100
            echo "
                                                                <div class=\"custom-control custom-switch\">
                                                                    ";
            // line 103
            echo "                                                                    <input type=\"checkbox\"
                                                                           class=\"custom-control-input\"
                                                                           id=\"showForeignReviews\"
                                                                           value=\"filter-language\"
                                                                           name=\"language\"
                                                                           ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 108), "get", [0 => "language"], "method", false, false, false, 108)) {
                echo "checked=\"checked\"";
            }
            echo ">
                                                                    <label class=\"custom-control-label form-label\"
                                                                           for=\"showForeignReviews\">
                                                                        <small>";
            // line 111
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLanguageFilterLabel"));
            echo "</small>
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        ";
        }
        // line 116
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_page_product_detail_review_list_action_language_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_language_csrf"));

        // line 90
        echo "                                                                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_page_product_detail_review_list_action_sortby($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby"));

        // line 120
        echo "                                                    ";
        if ((($context["productReviewCount"] ?? null) > 0)) {
            // line 121
            echo "                                                        <div class=\"col-12 col-md-auto product-detail-review-sortby\">
                                                            ";
            // line 122
            $context["formAjaxSubmitOptions"] = ["replaceSelectors" => [0 => ".js-review-info", 1 => ".js-review-teaser", 2 => ".js-review-content"], "submitOnChange" => true];
            // line 130
            echo "
                                                            ";
            // line 131
            $this->displayBlock('page_product_detail_review_list_action_sortby_form', $context, $blocks);
            // line 177
            echo "                                                        </div>
                                                    ";
        }
        // line 179
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_page_product_detail_review_list_action_sortby_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_form"));

        // line 132
        echo "                                                                <form class=\"form-inline product-detail-review-sortby-form\"
                                                                      action=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 133), "parentId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 133)]), "html", null, true);
        echo "\"
                                                                      method=\"post\"
                                                                      data-form-ajax-submit=\"true\"
                                                                      data-form-ajax-submit-options='";
        // line 136
        echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

                                                                    ";
        // line 138
        $this->displayBlock('page_product_detail_review_list_action_sortby_form_csrf', $context, $blocks);
        // line 141
        echo "
                                                                    ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 142), "get", [0 => "limit"], "method", false, false, false, 142)) {
            // line 143
            echo "                                                                        <input type=\"hidden\" name=\"limit\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 143), "get", [0 => "limit"], "method", false, false, false, 143), "html", null, true);
            echo "\">
                                                                    ";
        }
        // line 145
        echo "
                                                                    ";
        // line 146
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "get", [0 => "language"], "method", false, false, false, 146)) {
            // line 147
            echo "                                                                        <input type=\"hidden\" name=\"language\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 147), "get", [0 => "language"], "method", false, false, false, 147), "html", null, true);
            echo "\">
                                                                    ";
        }
        // line 149
        echo "
                                                                    ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 150), "get", [0 => "points"], "method", false, false, false, 150)) {
            // line 151
            echo "                                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 151), "get", [0 => "points"], "method", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 152
                echo "                                                                            <input type=\"hidden\" name=\"points[]\" value=\"";
                echo twig_escape_filter($this->env, $context["points"], "html", null, true);
                echo "\">
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                                                                    ";
        }
        // line 155
        echo "
                                                                    ";
        // line 156
        $this->displayBlock('page_product_detail_review_list_action_sortby_label', $context, $blocks);
        // line 162
        echo "
                                                                    ";
        // line 163
        $this->displayBlock('page_product_detail_review_list_action_sortby_select', $context, $blocks);
        // line 175
        echo "                                                                </form>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 138
    public function block_page_product_detail_review_list_action_sortby_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_form_csrf"));

        // line 139
        echo "                                                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_page_product_detail_review_list_action_sortby_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_label"));

        // line 157
        echo "                                                                        <label class=\"form-label product-detail-review-sortby-label\"
                                                                               for=\"reviewsSortby\">
                                                                            <small>";
        // line 159
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortLabel"));
        echo "</small>
                                                                        </label>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_page_product_detail_review_list_action_sortby_select($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_action_sortby_select"));

        // line 164
        echo "                                                                        <select class=\"custom-select custom-select-sm\"
                                                                                name=\"sort\"
                                                                                id=\"reviewsSortby\">
                                                                            <option value=\"createdAt\"";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 167), "sorting", [], "any", false, false, false, 167), 0, [], "any", false, false, false, 167), "field", [], "any", false, false, false, 167) == "createdAt")) {
            echo " selected";
        }
        echo ">
                                                                                ";
        // line 168
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortNewLabel"));
        echo "
                                                                            </option>
                                                                            <option value=\"points\"";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 170), "sorting", [], "any", false, false, false, 170), 0, [], "any", false, false, false, 170), "field", [], "any", false, false, false, 170) == "points")) {
            echo " selected";
        }
        echo ">
                                                                                ";
        // line 171
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewSortTopRatedLabel"));
        echo "
                                                                            </option>
                                                                        </select>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 200
    public function block_page_product_detail_review_list_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_content"));

        // line 201
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 202
            echo "                                                <div class=\"product-detail-review-list-content\">
                                                    ";
            // line 203
            $this->loadTemplate("@Storefront/storefront/page/product-detail/review/review-item.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 203)->display($context);
            // line 204
            echo "                                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 208
    public function block_page_product_detail_review_list_paging($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging"));

        // line 209
        echo "                                            ";
        $context["criteria"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "criteria", [], "any", false, false, false, 209);
        // line 210
        echo "
                                            ";
        // line 211
        $context["totalPages"] = twig_round((twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "total", [], "any", false, false, false, 211) / twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 211)), 0, "ceil");
        // line 212
        echo "
                                            ";
        // line 213
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 214
            echo "                                                ";
            $context["formAjaxSubmitOptions"] = ["replaceSelectors" => ".js-review-container", "submitOnChange" => true];
            // line 218
            echo "
                                                ";
            // line 219
            $this->displayBlock('page_product_detail_review_list_paging_form', $context, $blocks);
            // line 256
            echo "                                            ";
        }
        // line 257
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 219
    public function block_page_product_detail_review_list_paging_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging_form"));

        // line 220
        echo "                                                    <div class=\"product-detail-review-pagination\">
                                                        <form class=\"product-detail-review-pagination-form\"
                                                              action=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.product.reviews", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 222)]), "html", null, true);
        echo "\"
                                                              method=\"post\"
                                                              data-form-ajax-submit=\"true\"
                                                              data-form-ajax-submit-options='";
        // line 225
        echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

                                                            ";
        // line 227
        $this->displayBlock('page_product_detail_review_list_paging_csrf', $context, $blocks);
        // line 230
        echo "
                                                            ";
        // line 231
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 231), "get", [0 => "limit"], "method", false, false, false, 231)) {
            // line 232
            echo "                                                                <input type=\"hidden\" name=\"limit\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 232), "get", [0 => "limit"], "method", false, false, false, 232), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 234
        echo "
                                                            ";
        // line 235
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 235), "get", [0 => "language"], "method", false, false, false, 235)) {
            // line 236
            echo "                                                                <input type=\"hidden\" name=\"language\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 236), "get", [0 => "language"], "method", false, false, false, 236), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 238
        echo "
                                                            ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 239), "get", [0 => "sort"], "method", false, false, false, 239)) {
            // line 240
            echo "                                                                <input type=\"hidden\" name=\"sort\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 240), "get", [0 => "sort"], "method", false, false, false, 240), "html", null, true);
            echo "\">
                                                            ";
        }
        // line 242
        echo "
                                                            ";
        // line 243
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 243), "get", [0 => "points"], "method", false, false, false, 243)) {
            // line 244
            echo "                                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 244), "get", [0 => "points"], "method", false, false, false, 244));
            foreach ($context['_seq'] as $context["_key"] => $context["points"]) {
                // line 245
                echo "                                                                    <input type=\"hidden\" name=\"points[]\" value=\"";
                echo twig_escape_filter($this->env, $context["points"], "html", null, true);
                echo "\">
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['points'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                                                            ";
        }
        // line 248
        echo "
                                                            ";
        // line 249
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 249)->display(twig_array_merge($context, ["entities" =>         // line 250
($context["reviews"] ?? null), "criteria" =>         // line 251
($context["criteria"] ?? null)]));
        // line 253
        echo "                                                        </form>
                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 227
    public function block_page_product_detail_review_list_paging_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_paging_csrf"));

        // line 228
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.product.reviews");
        echo "
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 261
    public function block_page_product_detail_review_list_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_list_empty"));

        // line 262
        echo "                                            ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/product-detail/review/review.html.twig", 262)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewListEmpty"))]));
        // line 266
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  966 => 266,  963 => 262,  956 => 261,  946 => 228,  939 => 227,  930 => 253,  928 => 251,  927 => 250,  926 => 249,  923 => 248,  920 => 247,  911 => 245,  906 => 244,  904 => 243,  901 => 242,  895 => 240,  893 => 239,  890 => 238,  884 => 236,  882 => 235,  879 => 234,  873 => 232,  871 => 231,  868 => 230,  866 => 227,  861 => 225,  855 => 222,  851 => 220,  844 => 219,  837 => 257,  834 => 256,  832 => 219,  829 => 218,  826 => 214,  824 => 213,  821 => 212,  819 => 211,  816 => 210,  813 => 209,  806 => 208,  799 => 206,  784 => 204,  782 => 203,  779 => 202,  761 => 201,  754 => 200,  743 => 171,  737 => 170,  732 => 168,  726 => 167,  721 => 164,  714 => 163,  704 => 159,  700 => 157,  693 => 156,  683 => 139,  676 => 138,  668 => 175,  666 => 163,  663 => 162,  661 => 156,  658 => 155,  655 => 154,  646 => 152,  641 => 151,  639 => 150,  636 => 149,  630 => 147,  628 => 146,  625 => 145,  619 => 143,  617 => 142,  614 => 141,  612 => 138,  607 => 136,  601 => 133,  598 => 132,  591 => 131,  584 => 179,  580 => 177,  578 => 131,  575 => 130,  573 => 122,  570 => 121,  567 => 120,  560 => 119,  550 => 90,  543 => 89,  535 => 116,  527 => 111,  519 => 108,  512 => 103,  508 => 100,  502 => 98,  500 => 97,  497 => 96,  491 => 94,  489 => 93,  486 => 92,  484 => 89,  479 => 87,  473 => 84,  470 => 83,  468 => 82,  465 => 81,  458 => 80,  450 => 197,  442 => 195,  439 => 194,  426 => 193,  424 => 192,  420 => 190,  417 => 189,  414 => 188,  411 => 187,  409 => 186,  406 => 185,  400 => 180,  398 => 119,  395 => 118,  393 => 80,  390 => 79,  388 => 75,  385 => 74,  378 => 73,  371 => 258,  369 => 208,  366 => 207,  364 => 200,  361 => 199,  358 => 73,  351 => 72,  343 => 268,  340 => 267,  337 => 261,  335 => 260,  332 => 259,  330 => 72,  323 => 70,  320 => 69,  313 => 68,  305 => 65,  301 => 63,  299 => 62,  296 => 61,  292 => 59,  290 => 58,  287 => 57,  285 => 56,  277 => 54,  270 => 53,  263 => 51,  260 => 50,  257 => 46,  254 => 45,  251 => 41,  248 => 40,  245 => 36,  242 => 35,  235 => 34,  227 => 270,  225 => 68,  222 => 67,  220 => 53,  217 => 52,  215 => 34,  212 => 33,  205 => 32,  198 => 28,  195 => 27,  188 => 26,  180 => 29,  178 => 26,  175 => 25,  168 => 24,  160 => 272,  158 => 32,  155 => 31,  153 => 24,  150 => 23,  143 => 22,  135 => 274,  133 => 22,  129 => 20,  126 => 19,  123 => 17,  120 => 16,  117 => 15,  115 => 14,  112 => 13,  110 => 12,  107 => 11,  104 => 10,  101 => 8,  98 => 7,  95 => 5,  81 => 4,  74 => 3,  57 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
\t{% block page_product_detail_review_container %}

\t\t{#TODO: replace items per list config value#}
\t\t{% set reviewsPerListPage = 10 %}

\t\t{#TODO: replace current list page value#}
\t\t{% set currentListPage = 1 %}

\t\t{% set productReviewCount = reviews|length %}

\t\t{% if productReviewCount > 0 %}
            {% set productAvgRating = reviews.matrix.averageRating|round(2, 'common')  %}
\t\t{% endif %}

\t\t{# TODO: replace language flag #}
\t\t{% set foreignReviewsCount = 150 %}

\t\t<div class=\"product-detail-review tab-pane-container\">
\t\t\t{% block page_product_detail_review_tab_pane %}
                <div class=\"row product-detail-review-content js-review-container\">
\t\t\t\t\t{% block page_product_detail_review_aside %}
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t{% block page_product_detail_review_widget_container %}
\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/page/product-detail/review/review-widget.html.twig' %}
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}

\t\t\t\t\t{% block page_product_detail_review_main %}
\t\t\t\t\t\t<div class=\"col product-detail-review-main js-review-content\">
\t\t\t\t\t\t\t{% block page_product_detail_review_alert %}
\t\t\t\t\t\t\t\t{% if ratingSuccess == 1 %}
\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
\t\t\t\t\t\t\t\t\t\ttype: \"success\",
\t\t\t\t\t\t\t\t\t\tcontent: \"detail.reviewFormSuccessAlert\"|trans|sw_sanitize
\t\t\t\t\t\t\t\t\t} %}
                                {% elseif ratingSuccess == 2  %}
                                    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                        type: \"success\",
                                        content: \"detail.reviewFormSuccessUpdateAlert\"|trans|sw_sanitize
                                    } %}
\t\t\t\t\t\t\t\t{% elseif ratingSuccess == -1  %}
\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
\t\t\t\t\t\t\t\t\t\ttype: \"danger\",
\t\t\t\t\t\t\t\t\t\tcontent: \"detail.reviewFormErrorAlert\"|trans|sw_sanitize
\t\t\t\t\t\t\t\t\t} %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t{% block page_product_detail_review_form_container %}
\t\t\t\t\t\t\t\t<div class=\"collapse multi-collapse {% if ratingSuccess == -1 %}show{% endif %}\"
\t\t\t\t\t\t\t\t\t id=\"review-form\">
\t\t\t\t\t\t\t\t\t{% if context.customer %}
\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-form\">
\t\t\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/page/product-detail/review/review-form.html.twig' %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"product-detail-review-login\">
\t\t\t\t\t\t\t\t\t\t\t{% sw_include '@Storefront/storefront/page/product-detail/review/review-login.html.twig' %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t{% block page_product_detail_review_list_container %}
\t\t\t\t\t\t\t\t<div id=\"review-list\"
\t\t\t\t\t\t\t\t\t class=\"collapse multi-collapse product-detail-review-list {% if ratingSuccess != -1 %}show{% endif %}\">

                                    {% block page_product_detail_review_list %}
                                        {% block page_product_detail_review_list_actions %}
                                            <div class=\"row align-items-center product-detail-review-actions\">
                                                {% set formAjaxSubmitOptions = {
                                                    replaceSelectors: [\".js-review-container\"],
                                                    submitOnChange: true
                                                } %}

                                                {% block page_product_detail_review_list_action_language %}
                                                    <div class=\"col product-detail-review-language\">
                                                        {% if foreignReviewsCount > 0 %}
                                                            <form class=\"product-detail-review-language-form\"
                                                                  action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
                                                                  method=\"post\"
                                                                  data-form-ajax-submit=\"true\"
                                                                  data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                                                                {% block page_product_detail_review_list_action_language_csrf %}
                                                                    {{ sw_csrf('frontend.product.reviews') }}
                                                                {% endblock %}

                                                                {% if app.request.get('limit') %}
                                                                    <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                                                                {% endif %}

                                                                {% if app.request.get('sort') %}
                                                                    <input type=\"hidden\" name=\"sort\" value=\"{{ app.request.get('sort') }}\">
                                                                {% endif %}

                                                                <div class=\"custom-control custom-switch\">
                                                                    {#TODO: set checked and disabled state#}
                                                                    <input type=\"checkbox\"
                                                                           class=\"custom-control-input\"
                                                                           id=\"showForeignReviews\"
                                                                           value=\"filter-language\"
                                                                           name=\"language\"
                                                                           {% if app.request.get('language') %}checked=\"checked\"{% endif %}>
                                                                    <label class=\"custom-control-label form-label\"
                                                                           for=\"showForeignReviews\">
                                                                        <small>{{ \"detail.reviewLanguageFilterLabel\"|trans|sw_sanitize }}</small>
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        {% endif %}
                                                    </div>
                                                {% endblock %}

                                                {% block page_product_detail_review_list_action_sortby %}
                                                    {% if productReviewCount > 0 %}
                                                        <div class=\"col-12 col-md-auto product-detail-review-sortby\">
                                                            {% set formAjaxSubmitOptions = {
                                                                replaceSelectors: [
                                                                    \".js-review-info\",
                                                                    \".js-review-teaser\",
                                                                    \".js-review-content\"
                                                                ],
                                                                submitOnChange: true
                                                            } %}

                                                            {% block page_product_detail_review_list_action_sortby_form %}
                                                                <form class=\"form-inline product-detail-review-sortby-form\"
                                                                      action=\"{{ path('frontend.product.reviews', { productId: reviews.productId, parentId: reviews.parentId }) }}\"
                                                                      method=\"post\"
                                                                      data-form-ajax-submit=\"true\"
                                                                      data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                                                                    {% block page_product_detail_review_list_action_sortby_form_csrf %}
                                                                        {{ sw_csrf('frontend.product.reviews') }}
                                                                    {% endblock %}

                                                                    {% if app.request.get('limit') %}
                                                                        <input type=\"hidden\" name=\"limit\" value=\"{{ app.request.get('limit') }}\">
                                                                    {% endif %}

                                                                    {% if app.request.get('language') %}
                                                                        <input type=\"hidden\" name=\"language\" value=\"{{ app.request.get('language') }}\">
                                                                    {% endif %}

                                                                    {% if app.request.get('points') %}
                                                                        {% for points in app.request.get('points') %}
                                                                            <input type=\"hidden\" name=\"points[]\" value=\"{{ points }}\">
                                                                        {% endfor %}
                                                                    {% endif %}

                                                                    {% block page_product_detail_review_list_action_sortby_label %}
                                                                        <label class=\"form-label product-detail-review-sortby-label\"
                                                                               for=\"reviewsSortby\">
                                                                            <small>{{ \"detail.reviewSortLabel\"|trans|sw_sanitize }}</small>
                                                                        </label>
                                                                    {% endblock %}

                                                                    {% block page_product_detail_review_list_action_sortby_select %}
                                                                        <select class=\"custom-select custom-select-sm\"
                                                                                name=\"sort\"
                                                                                id=\"reviewsSortby\">
                                                                            <option value=\"createdAt\"{% if reviews.criteria.sorting.0.field == 'createdAt' %} selected{% endif %}>
                                                                                {{ \"detail.reviewSortNewLabel\"|trans|sw_sanitize }}
                                                                            </option>
                                                                            <option value=\"points\"{% if reviews.criteria.sorting.0.field== 'points' %} selected{% endif %}>
                                                                                {{ \"detail.reviewSortTopRatedLabel\"|trans|sw_sanitize }}
                                                                            </option>
                                                                        </select>
                                                                    {% endblock %}
                                                                </form>
                                                            {% endblock %}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}
                                            </div>

                                            <hr/>

                                            {# TODO: calculate reviews in current language in list #}
                                            {% set listReviewsCount = productReviewCount - foreignReviewsCount %}
                                            {# TODO: fix if reviews in foreign language are more than in customer language#}
                                            {% if listReviewsCount < 0 %}
                                                {% set listReviewsCount = 0 %}
                                            {% endif %}

                                            <p class=\"text-right product-detail-review-counter\">
                                                {% if (listReviewsCount > 1 and listReviewsCount > reviewsPerListPage) %}
                                                    <small><strong>{{ currentListPage }}</strong> - <strong>{{ reviewsPerListPage }}</strong> {{ \"detail.reviewCountBefore\"|trans|sw_sanitize }} <strong>{{ listReviewsCount }}</strong> {{ \"detail.reviewCountAfter\"|trans({'%count%': listReviewsCount })|sw_sanitize }}</small>
                                                {% elseif listReviewsCount > 0 %} {# TODO fix detail.reviewCountAfter snippet for listReviewsCount = 0#}
                                                    <small><strong>{{ listReviewsCount }}</strong> {{ \"detail.reviewCountAfter\"|trans({'%count%': listReviewsCount })|sw_sanitize }}</small>
                                                {% endif %}
                                            </p>
                                        {% endblock %}

                                        {% block page_product_detail_review_list_content %}
                                            {% for review in reviews %}
                                                <div class=\"product-detail-review-list-content\">
                                                    {% sw_include '@Storefront/storefront/page/product-detail/review/review-item.html.twig' %}
                                                </div>
                                            {% endfor %}
                                        {% endblock %}

                                        {% block page_product_detail_review_list_paging %}
                                            {% set criteria = reviews.criteria %}

                                            {% set totalPages = (reviews.total/criteria.limit)|round(0,'ceil') %}

                                            {% if totalPages > 1 %}
                                                {% set formAjaxSubmitOptions = {
                                                    replaceSelectors: \".js-review-container\",
                                                    submitOnChange: true
                                                } %}

                                                {% block page_product_detail_review_list_paging_form %}
                                                    <div class=\"product-detail-review-pagination\">
                                                        <form class=\"product-detail-review-pagination-form\"
                                                              action=\"{{ path('frontend.product.reviews', { productId: reviews.productId }) }}\"
                                                              method=\"post\"
                                                              data-form-ajax-submit=\"true\"
                                                              data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

                                                            {% block page_product_detail_review_list_paging_csrf %}
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

                                                            {% if app.request.get('points') %}
                                                                {% for points in app.request.get('points') %}
                                                                    <input type=\"hidden\" name=\"points[]\" value=\"{{ points }}\">
                                                                {% endfor %}
                                                            {% endif %}

                                                            {% sw_include '@Storefront/storefront/component/pagination.html.twig' with {
                                                                entities: reviews,
                                                                criteria: criteria
                                                            }  %}
                                                        </form>
                                                    </div>
                                                {% endblock %}
                                            {% endif %}
                                        {% endblock %}
                                    {% endblock %}

                                    {% if productReviewCount <= 0 %}
                                        {% block page_product_detail_review_list_empty %}
                                            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                                type: \"info\",
                                                content: \"detail.reviewListEmpty\"|trans|sw_sanitize
                                            } %}
                                        {% endblock %}
                                    {% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t{% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review.html.twig");
    }
}
