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

/* @Storefront/storefront/page/product-detail/review/review-form.html.twig */
class __TwigTemplate_de81f9d38138f6b7be1d25033692a604c1d33cf69510d635c6aed2c92aafbfa7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_review_form' => [$this, 'block_page_product_detail_review_form'],
            'page_product_detail_review_form_form' => [$this, 'block_page_product_detail_review_form_form'],
            'page_product_detail_review_form_csrf' => [$this, 'block_page_product_detail_review_form_csrf'],
            'page_product_detail_review_form_forward' => [$this, 'block_page_product_detail_review_form_forward'],
            'page_product_detail_review_form_details' => [$this, 'block_page_product_detail_review_form_details'],
            'page_product_detail_review_form_rating' => [$this, 'block_page_product_detail_review_form_rating'],
            'page_product_detail_review_form_title' => [$this, 'block_page_product_detail_review_form_title'],
            'page_product_detail_review_form_title_label' => [$this, 'block_page_product_detail_review_form_title_label'],
            'page_product_detail_review_form_title_input' => [$this, 'block_page_product_detail_review_form_title_input'],
            'page_product_detail_review_form_title_violation' => [$this, 'block_page_product_detail_review_form_title_violation'],
            'page_product_detail_review_form_content' => [$this, 'block_page_product_detail_review_form_content'],
            'page_product_detail_review_form_content_label' => [$this, 'block_page_product_detail_review_form_content_label'],
            'page_product_detail_review_form_content_textarea' => [$this, 'block_page_product_detail_review_form_content_textarea'],
            'page_product_detail_review_form_content_violation' => [$this, 'block_page_product_detail_review_form_content_violation'],
            'page_product_detail_review_form_footer' => [$this, 'block_page_product_detail_review_form_footer'],
            'page_product_detail_review_form_required' => [$this, 'block_page_product_detail_review_form_required'],
            'page_product_detail_review_form_cancel' => [$this, 'block_page_product_detail_review_form_cancel'],
            'page_product_detail_review_form_submit' => [$this, 'block_page_product_detail_review_form_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/review/review-form.html.twig"));

        // line 1
        $this->displayBlock('page_product_detail_review_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form"));

        // line 2
        echo "
    ";
        // line 3
        if (( !(isset($context["data"]) || array_key_exists("data", $context)) && twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["data"] = twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    ";
        // line 7
        $context["formAjaxSubmitOptions"] = ["replaceSelectors" => ".js-review-container"];
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('page_product_detail_review_form_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_review_form_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_form"));

        // line 12
        echo "        <form class=\"review-form\"
              action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.detail.review.save", ["productId" => twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "productId", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\"
              method=\"post\"
              data-form-validation=\"true\"
              data-form-ajax-submit=\"true\"
              data-form-ajax-submit-options='";
        // line 17
        echo twig_escape_filter($this->env, json_encode(($context["formAjaxSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

            ";
        // line 19
        $this->displayBlock('page_product_detail_review_form_csrf', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('page_product_detail_review_form_forward', $context, $blocks);
        // line 36
        echo "
            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 37)) {
            // line 38
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "customerReview", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" name=\"id\"/>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        $this->displayBlock('page_product_detail_review_form_details', $context, $blocks);
        // line 114
        echo "
            ";
        // line 115
        $this->displayBlock('page_product_detail_review_form_content', $context, $blocks);
        // line 141
        echo "
            ";
        // line 142
        $this->displayBlock('page_product_detail_review_form_footer', $context, $blocks);
        // line 171
        echo "        </form>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_product_detail_review_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_csrf"));

        // line 20
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.detail.review.save");
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_page_product_detail_review_form_forward($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_forward"));

        // line 24
        echo "                <input type=\"hidden\"
                       name=\"forwardTo\"
                       value=\"frontend.product.reviews\">

                <input type=\"hidden\"
                       name=\"parentId\"
                       value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "parentId", [], "any", false, false, false, 30), "html", null, true);
        echo "\">

                <input type=\"hidden\"
                       name=\"forwardParameters\"
                       value='{\"productId\": \"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "product", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "\"}'>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_page_product_detail_review_form_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_details"));

        // line 42
        echo "                <div class=\"form-row\">
                    ";
        // line 43
        $this->displayBlock('page_product_detail_review_form_rating', $context, $blocks);
        // line 83
        echo "
                    ";
        // line 84
        $this->displayBlock('page_product_detail_review_form_title', $context, $blocks);
        // line 112
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_page_product_detail_review_form_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_rating"));

        // line 44
        echo "                        <div class=\"form-group col-md-4 product-detail-review-form-rating\">
                            <label for=\"#review-form-rating\">
                                ";
        // line 46
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormRatingLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                            </label>

                            <div id=\"review-form-rating\"
                                 class=\"product-detail-review-form-rating-input\"
                                 data-rating-system=\"true\">
                                ";
        // line 52
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "points"], "method", false, false, false, 52))) {
            // line 53
            echo "                                    ";
            $context["currentPoints"] = twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "points"], "method", false, false, false, 53));
            // line 54
            echo "                                ";
        } else {
            // line 55
            echo "                                    ";
            $context["currentPoints"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 55), "maxPoints", [], "any", false, false, false, 55);
            // line 56
            echo "                                ";
        }
        // line 57
        echo "
                                ";
        // line 58
        $context["maxPoints"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 58), "maxPoints", [], "any", false, false, false, 58);
        // line 59
        echo "
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPoints"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 61
            echo "                                    <label data-review-form-point=\"";
            echo twig_escape_filter($this->env, $context["point"], "html", null, true);
            echo "\"
                                           class=\"product-detail-review-form-star";
            // line 62
            if ((($context["currentPoints"] ?? null) >= $context["point"])) {
                echo " is-active";
            }
            echo "\">
                                        <input class=\"product-detail-review-form-radio\"
                                               type=\"radio\"
                                               name=\"points\"
                                               value=\"";
            // line 66
            echo twig_escape_filter($this->env, $context["point"], "html", null, true);
            echo "\"
                                            ";
            // line 67
            if ((($context["currentPoints"] ?? null) >= $context["point"])) {
                echo " checked=\"checked\"";
            }
            echo ">

                                        ";
            // line 69
            $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", 69)->display(twig_array_merge($context, ["type" => "blank"]));
            // line 72
            echo "                                    </label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reviews"] ?? null), "matrix", [], "any", false, false, false, 74), "matrix", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["matrix"]) {
            // line 75
            echo "                                    <p class=\"h6 product-detail-review-form-rating-text ";
            if ((($context["currentPoints"] ?? null) != twig_get_attribute($this->env, $this->source, $context["matrix"], "points", [], "any", false, false, false, 75))) {
                echo " d-none";
            }
            echo "\"
                                       data-rating-text=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matrix"], "points", [], "any", false, false, false, 76), "html", null, true);
            echo "\">
                                        ";
            // line 77
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("detail.review" . twig_get_attribute($this->env, $this->source, $context["matrix"], "points", [], "any", false, false, false, 77)) . "PointRatingText")));
            echo "
                                    </p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matrix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_page_product_detail_review_form_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_title"));

        // line 85
        echo "                        <div class=\"form-group col-12 product-detail-review-form-title\">
                            ";
        // line 86
        $this->displayBlock('page_product_detail_review_form_title_label', $context, $blocks);
        // line 91
        echo "
                            ";
        // line 92
        $this->displayBlock('page_product_detail_review_form_title_input', $context, $blocks);
        // line 102
        echo "
                            ";
        // line 103
        $this->displayBlock('page_product_detail_review_form_title_violation', $context, $blocks);
        // line 110
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_page_product_detail_review_form_title_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_title_label"));

        // line 87
        echo "                                <label class=\"form-label\" for=\"reviewTitle\">
                                    ";
        // line 88
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormTitleLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                </label>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 92
    public function block_page_product_detail_review_form_title_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_title_input"));

        // line 93
        echo "                                <input type=\"text\"
                                       class=\"form-control";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/title"], "method", false, false, false, 94)) {
            echo " is-invalid";
        }
        echo "\"
                                       id=\"reviewTitle\"
                                       placeholder=\"";
        // line 96
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormTitlePlaceholder")), "html", null, true);
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                       name=\"title\"
                                       value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "title"], "method", false, false, false, 98), "html", null, true);
        echo "\"
                                       required=\"required\"
                                       minlength=\"5\">
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_page_product_detail_review_form_title_violation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_title_violation"));

        // line 104
        echo "                                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/title"], "method", false, false, false, 104))) {
            // line 105
            echo "                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", 105)->display(twig_array_merge($context, ["violationPath" => "/title"]));
            // line 108
            echo "                                ";
        }
        // line 109
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_page_product_detail_review_form_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_content"));

        // line 116
        echo "                <div class=\"form-group product-detail-review-form-content\">
                    ";
        // line 117
        $this->displayBlock('page_product_detail_review_form_content_label', $context, $blocks);
        // line 122
        echo "
                    ";
        // line 123
        $this->displayBlock('page_product_detail_review_form_content_textarea', $context, $blocks);
        // line 131
        echo "
                    ";
        // line 132
        $this->displayBlock('page_product_detail_review_form_content_violation', $context, $blocks);
        // line 139
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_page_product_detail_review_form_content_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_content_label"));

        // line 118
        echo "                        <label for=\"reviewContent\">
                            ";
        // line 119
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormContentLabel"));
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                        </label>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_page_product_detail_review_form_content_textarea($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_content_textarea"));

        // line 124
        echo "                        <textarea class=\"form-control";
        if (twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/content"], "method", false, false, false, 124)) {
            echo " is-invalid";
        }
        echo "\"
                                  id=\"reviewContent\"
                                  name=\"content\"
                                  required=\"required\"
                                  minlength=\"40\"
                                  rows=\"8\">";
        // line 129
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "content"], "method", false, false, false, 129))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => "content"], "method", false, false, false, 129), "html", null, true);
        }
        echo "</textarea>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 132
    public function block_page_product_detail_review_form_content_violation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_content_violation"));

        // line 133
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/content"], "method", false, false, false, 133))) {
            // line 134
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", 134)->display(twig_array_merge($context, ["violationPath" => "/content"]));
            // line 137
            echo "                        ";
        }
        // line 138
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_page_product_detail_review_form_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_footer"));

        // line 143
        echo "                <div class=\"product-detail-review-form-footer\">
                    ";
        // line 144
        $this->displayBlock('page_product_detail_review_form_required', $context, $blocks);
        // line 149
        echo "
                    <div class=\"product-detail-review-form-actions\">
                        ";
        // line 151
        $this->displayBlock('page_product_detail_review_form_cancel', $context, $blocks);
        // line 161
        echo "
                        ";
        // line 162
        $this->displayBlock('page_product_detail_review_form_submit', $context, $blocks);
        // line 168
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 144
    public function block_page_product_detail_review_form_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_required"));

        // line 145
        echo "                        <p class=\"required-fields\">
                            ";
        // line 146
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                        </p>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 151
    public function block_page_product_detail_review_form_cancel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_cancel"));

        // line 152
        echo "                            <a href=\"#\"
                               class=\"btn btn-outline-secondary product-detail-review-cancel\"
                               data-toggle=\"collapse\"
                               data-target=\".multi-collapse\"
                               aria-expanded=\"false\"
                               aria-controls=\"review-form review-list\">
                                ";
        // line 158
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormCancelText"));
        echo "
                            </a>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 162
    public function block_page_product_detail_review_form_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_review_form_submit"));

        // line 163
        echo "                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-review-submit\">
                                ";
        // line 165
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewFormSubmitText"));
        echo "
                            </button>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/review/review-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  667 => 165,  663 => 163,  656 => 162,  646 => 158,  638 => 152,  631 => 151,  621 => 146,  618 => 145,  611 => 144,  602 => 168,  600 => 162,  597 => 161,  595 => 151,  591 => 149,  589 => 144,  586 => 143,  579 => 142,  572 => 138,  569 => 137,  566 => 134,  563 => 133,  556 => 132,  545 => 129,  534 => 124,  527 => 123,  516 => 119,  513 => 118,  506 => 117,  498 => 139,  496 => 132,  493 => 131,  491 => 123,  488 => 122,  486 => 117,  483 => 116,  476 => 115,  469 => 109,  466 => 108,  463 => 105,  460 => 104,  453 => 103,  442 => 98,  436 => 96,  429 => 94,  426 => 93,  419 => 92,  408 => 88,  405 => 87,  398 => 86,  390 => 110,  388 => 103,  385 => 102,  383 => 92,  380 => 91,  378 => 86,  375 => 85,  368 => 84,  359 => 80,  350 => 77,  346 => 76,  339 => 75,  334 => 74,  319 => 72,  317 => 69,  310 => 67,  306 => 66,  297 => 62,  292 => 61,  275 => 60,  272 => 59,  270 => 58,  267 => 57,  264 => 56,  261 => 55,  258 => 54,  255 => 53,  253 => 52,  243 => 46,  239 => 44,  232 => 43,  224 => 112,  222 => 84,  219 => 83,  217 => 43,  214 => 42,  207 => 41,  198 => 34,  191 => 30,  183 => 24,  176 => 23,  166 => 20,  159 => 19,  151 => 171,  149 => 142,  146 => 141,  144 => 115,  141 => 114,  139 => 41,  136 => 40,  130 => 38,  128 => 37,  125 => 36,  123 => 23,  120 => 22,  118 => 19,  113 => 17,  106 => 13,  103 => 12,  90 => 11,  87 => 10,  85 => 7,  82 => 6,  79 => 5,  76 => 4,  74 => 3,  71 => 2,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_product_detail_review_form %}

    {% if data is not defined and reviews.customerReview is defined %}
        {% set data = reviews.customerReview %}
    {% endif %}

    {% set formAjaxSubmitOptions = {
        replaceSelectors: '.js-review-container'
    } %}

    {% block page_product_detail_review_form_form %}
        <form class=\"review-form\"
              action=\"{{ path('frontend.detail.review.save', { productId: reviews.productId }) }}\"
              method=\"post\"
              data-form-validation=\"true\"
              data-form-ajax-submit=\"true\"
              data-form-ajax-submit-options='{{ formAjaxSubmitOptions|json_encode }}'>

            {% block page_product_detail_review_form_csrf %}
                {{ sw_csrf('frontend.detail.review.save') }}
            {% endblock %}

            {% block page_product_detail_review_form_forward %}
                <input type=\"hidden\"
                       name=\"forwardTo\"
                       value=\"frontend.product.reviews\">

                <input type=\"hidden\"
                       name=\"parentId\"
                       value=\"{{ reviews.parentId }}\">

                <input type=\"hidden\"
                       name=\"forwardParameters\"
                       value='{\"productId\": \"{{ reviews.product.id }}\"}'>
            {% endblock %}

            {% if reviews.customerReview %}
                <input type=\"hidden\" value=\"{{ reviews.customerReview.id }}\" name=\"id\"/>
            {% endif %}

            {% block page_product_detail_review_form_details %}
                <div class=\"form-row\">
                    {% block page_product_detail_review_form_rating %}
                        <div class=\"form-group col-md-4 product-detail-review-form-rating\">
                            <label for=\"#review-form-rating\">
                                {{ \"detail.reviewFormRatingLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                            </label>

                            <div id=\"review-form-rating\"
                                 class=\"product-detail-review-form-rating-input\"
                                 data-rating-system=\"true\">
                                {% if data.get('points') is not empty %}
                                    {% set currentPoints = data.get('points')|number_format %}
                                {% else %}
                                    {% set currentPoints = reviews.matrix.maxPoints %}
                                {% endif %}

                                {% set maxPoints = reviews.matrix.maxPoints %}

                                {% for point in 1..maxPoints %}
                                    <label data-review-form-point=\"{{ point }}\"
                                           class=\"product-detail-review-form-star{% if currentPoints >= point %} is-active{% endif %}\">
                                        <input class=\"product-detail-review-form-radio\"
                                               type=\"radio\"
                                               name=\"points\"
                                               value=\"{{ point }}\"
                                            {% if currentPoints >= point %} checked=\"checked\"{% endif %}>

                                        {% sw_include '@Storefront/storefront/component/review/point.html.twig' with {
                                            type: 'blank'
                                        } %}
                                    </label>
                                {% endfor %}
                                {% for matrix in reviews.matrix.matrix %}
                                    <p class=\"h6 product-detail-review-form-rating-text {% if currentPoints != matrix.points %} d-none{% endif %}\"
                                       data-rating-text=\"{{ matrix.points }}\">
                                        {{ \"detail.review#{matrix.points}PointRatingText\"|trans|sw_sanitize }}
                                    </p>
                                {% endfor %}
                            </div>
                        </div>
                    {% endblock %}

                    {% block page_product_detail_review_form_title %}
                        <div class=\"form-group col-12 product-detail-review-form-title\">
                            {% block page_product_detail_review_form_title_label %}
                                <label class=\"form-label\" for=\"reviewTitle\">
                                    {{ \"detail.reviewFormTitleLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                </label>
                            {% endblock %}

                            {% block page_product_detail_review_form_title_input %}
                                <input type=\"text\"
                                       class=\"form-control{% if formViolations.getViolations('/title') %} is-invalid{% endif %}\"
                                       id=\"reviewTitle\"
                                       placeholder=\"{{ \"detail.reviewFormTitlePlaceholder\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                       name=\"title\"
                                       value=\"{{ data.get('title') }}\"
                                       required=\"required\"
                                       minlength=\"5\">
                            {% endblock %}

                            {% block page_product_detail_review_form_title_violation %}
                                {% if formViolations.getViolations('/title') is not empty %}
                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                        violationPath: '/title'
                                    } %}
                                {% endif %}
                            {% endblock %}
                        </div>
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_product_detail_review_form_content %}
                <div class=\"form-group product-detail-review-form-content\">
                    {% block page_product_detail_review_form_content_label %}
                        <label for=\"reviewContent\">
                            {{ \"detail.reviewFormContentLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                        </label>
                    {% endblock %}

                    {% block page_product_detail_review_form_content_textarea %}
                        <textarea class=\"form-control{% if formViolations.getViolations('/content') %} is-invalid{% endif %}\"
                                  id=\"reviewContent\"
                                  name=\"content\"
                                  required=\"required\"
                                  minlength=\"40\"
                                  rows=\"8\">{% if data.get('content') is not empty %}{{ data.get('content') }}{% endif %}</textarea>
                    {% endblock %}

                    {% block page_product_detail_review_form_content_violation %}
                        {% if formViolations.getViolations('/content') is not empty %}
                            {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                violationPath: '/content'
                            } %}
                        {% endif %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block page_product_detail_review_form_footer %}
                <div class=\"product-detail-review-form-footer\">
                    {% block page_product_detail_review_form_required %}
                        <p class=\"required-fields\">
                            {{ \"general.requiredFields\"|trans|sw_sanitize }}
                        </p>
                    {% endblock %}

                    <div class=\"product-detail-review-form-actions\">
                        {% block page_product_detail_review_form_cancel %}
                            <a href=\"#\"
                               class=\"btn btn-outline-secondary product-detail-review-cancel\"
                               data-toggle=\"collapse\"
                               data-target=\".multi-collapse\"
                               aria-expanded=\"false\"
                               aria-controls=\"review-form review-list\">
                                {{ \"detail.reviewFormCancelText\"|trans|sw_sanitize }}
                            </a>
                        {% endblock %}

                        {% block page_product_detail_review_form_submit %}
                            <button type=\"submit\"
                                    class=\"btn btn-primary btn-review-submit\">
                                {{ \"detail.reviewFormSubmitText\"|trans|sw_sanitize }}
                            </button>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </form>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/review/review-form.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/review/review-form.html.twig");
    }
}
