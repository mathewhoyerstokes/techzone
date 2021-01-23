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

/* @Storefront/storefront/element/cms-element-product-slider.html.twig */
class __TwigTemplate_9aa92ef23be9b5e325892fa560d3075c000d28f7c285034e0eb339f803e8d039 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_product_slider' => [$this, 'block_element_product_slider'],
            'element_product_slider_alignment' => [$this, 'block_element_product_slider_alignment'],
            'element_product_slider_slider' => [$this, 'block_element_product_slider_slider'],
            'element_product_slider_title' => [$this, 'block_element_product_slider_title'],
            'element_product_slider_inner' => [$this, 'block_element_product_slider_inner'],
            'element_product_slider_element' => [$this, 'block_element_product_slider_element'],
            'element_product_slider_inner_item' => [$this, 'block_element_product_slider_inner_item'],
            'element_product_slider_controls' => [$this, 'block_element_product_slider_controls'],
            'element_product_slider_controls_items' => [$this, 'block_element_product_slider_controls_items'],
            'element_product_slider_controls_items_prev_icon' => [$this, 'block_element_product_slider_controls_items_prev_icon'],
            'element_product_slider_controls_items_next_icon' => [$this, 'block_element_product_slider_controls_items_next_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-product-slider.html.twig"));

        // line 1
        $this->displayBlock('element_product_slider', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_product_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider"));

        // line 2
        echo "    ";
        if ( !($context["sliderConfig"] ?? null)) {
            // line 3
            echo "        ";
            $context["sliderConfig"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 3), "elements", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    <div class=\"cms-element-";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6) == "standard") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6))) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 7
        $this->displayBlock('element_product_slider_alignment', $context, $blocks);
        // line 90
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_element_product_slider_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_alignment"));

        // line 8
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8)) {
            // line 9
            echo "                <div class=\"cms-element-alignment";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9) == "center")) {
                echo " align-self-center";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9) == "flex-end")) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 11
        echo "
                ";
        // line 12
        $context["productSliderOptions"] = ["productboxMinWidth" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["sliderConfig"] ?? null), "elMinWidth", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "elMinWidth", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13)) : ("")), "slider" => ["gutter" => 30, "autoplayButtonOutput" => false, "nav" => false, "mouseDrag" => false, "controls" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["sliderConfig"] ?? null), "navigation", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19)) ? (true) : (false)), "autoplay" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["sliderConfig"] ?? null), "rotate", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)) ? (true) : (false))]];
        // line 23
        echo "
                ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigation", [], "any", false, false, false, 24), "value", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    ";
            $context["productSliderOptions"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\ReplaceRecursiveFilter']->replaceRecursive(($context["productSliderOptions"] ?? null), ["slider" => ["mouseDrag" => true]]);
            // line 30
            echo "                ";
        }
        // line 31
        echo "
                ";
        // line 32
        $this->displayBlock('element_product_slider_slider', $context, $blocks);
        // line 86
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86)) {
            // line 87
            echo "                </div>
            ";
        }
        // line 89
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_element_product_slider_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_slider"));

        // line 33
        echo "                    <div class=\"base-slider product-slider";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "border", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33)) {
            echo " has-border";
        }
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigation", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33)) {
            echo " has-nav";
        }
        echo "\"
                         data-product-slider=\"true\"
                         data-product-slider-options=\"";
        // line 35
        echo twig_escape_filter($this->env, json_encode(($context["productSliderOptions"] ?? null)), "html", null, true);
        echo "\">

                        ";
        // line 37
        $this->displayBlock('element_product_slider_title', $context, $blocks);
        // line 44
        echo "
                        ";
        // line 45
        $this->displayBlock('element_product_slider_inner', $context, $blocks);
        // line 84
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_element_product_slider_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_title"));

        // line 38
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "title", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38)) {
            // line 39
            echo "                                <div class=\"cms-element-title\">
                                    <p class=\"cms-element-title-paragraph\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "title", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                                </div>
                            ";
        }
        // line 43
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_element_product_slider_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_inner"));

        // line 46
        echo "                            ";
        $this->displayBlock('element_product_slider_element', $context, $blocks);
        // line 61
        echo "
                            ";
        // line 62
        $this->displayBlock('element_product_slider_controls', $context, $blocks);
        // line 83
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_element_product_slider_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_element"));

        // line 47
        echo "                                <div class=\"product-slider-container\"
                                     data-product-slider-container=\"true\">
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 49), "products", [], "any", false, false, false, 49), "elements", [], "any", false, false, false, 49));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "                                        ";
            $this->displayBlock('element_product_slider_inner_item', $context, $blocks);
            // line 58
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_element_product_slider_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_inner_item"));

        // line 51
        echo "                                            <div class=\"product-slider-item\">
                                                ";
        // line 52
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/element/cms-element-product-slider.html.twig", 52)->display(twig_array_merge($context, ["layout" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["sliderConfig"] ?? null), "boxLayout", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "displayMode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54)]));
        // line 56
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_element_product_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_controls"));

        // line 63
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigation", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63)) {
            // line 64
            echo "                                    <div class=\"product-slider-controls-container\">
                                        <div class=\"base-slider-controls\"
                                             data-product-slider-controls=\"true\">
                                            ";
            // line 67
            $this->displayBlock('element_product_slider_controls_items', $context, $blocks);
            // line 79
            echo "                                        </div>
                                    </div>
                                ";
        }
        // line 82
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_element_product_slider_controls_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_controls_items"));

        // line 68
        echo "                                                <button class=\"base-slider-controls-prev product-slider-controls-prev";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "border", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68)) {
            echo " has-border";
        }
        echo "\">
                                                    ";
        // line 69
        $this->displayBlock('element_product_slider_controls_items_prev_icon', $context, $blocks);
        // line 72
        echo "                                                </button>
                                                <button class=\"base-slider-controls-next product-slider-controls-next";
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "border", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73)) {
            echo " has-border";
        }
        echo "\">
                                                    ";
        // line 74
        $this->displayBlock('element_product_slider_controls_items_next_icon', $context, $blocks);
        // line 77
        echo "                                                </button>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_element_product_slider_controls_items_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_controls_items_prev_icon"));

        // line 70
        echo "                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-product-slider.html.twig", 70);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 71
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_element_product_slider_controls_items_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_product_slider_controls_items_next_icon"));

        // line 75
        echo "                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-product-slider.html.twig", 75);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 76
        echo "                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-product-slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  417 => 76,  408 => 75,  401 => 74,  394 => 71,  385 => 70,  378 => 69,  370 => 77,  368 => 74,  362 => 73,  359 => 72,  357 => 69,  350 => 68,  343 => 67,  336 => 82,  331 => 79,  329 => 67,  324 => 64,  321 => 63,  314 => 62,  306 => 56,  304 => 54,  303 => 53,  302 => 52,  299 => 51,  292 => 50,  284 => 59,  270 => 58,  267 => 50,  250 => 49,  246 => 47,  239 => 46,  232 => 83,  230 => 62,  227 => 61,  224 => 46,  217 => 45,  210 => 43,  204 => 40,  201 => 39,  198 => 38,  191 => 37,  183 => 84,  181 => 45,  178 => 44,  176 => 37,  171 => 35,  160 => 33,  153 => 32,  146 => 89,  142 => 87,  139 => 86,  137 => 32,  134 => 31,  131 => 30,  128 => 25,  126 => 24,  123 => 23,  121 => 20,  120 => 19,  119 => 13,  118 => 12,  115 => 11,  103 => 9,  100 => 8,  93 => 7,  85 => 90,  83 => 7,  76 => 6,  73 => 5,  70 => 4,  67 => 3,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_product_slider %}
    {% if not sliderConfig %}
        {% set sliderConfig = element.fieldConfig.elements %}
    {% endif %}

    <div class=\"cms-element-{{ element.type }}{% if sliderConfig.displayMode.value == \"standard\" and sliderConfig.verticalAlign.value %} has-vertical-alignment{% endif %}\">
        {% block element_product_slider_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if sliderConfig.verticalAlign.value == \"center\" %} align-self-center{% elseif sliderConfig.verticalAlign.value == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}

                {% set productSliderOptions = {
                    productboxMinWidth: sliderConfig.elMinWidth.value ? sliderConfig.elMinWidth.value : '',
                    slider: {
                        gutter: 30,
                        autoplayButtonOutput: false,
                        nav: false,
                        mouseDrag: false,
                        controls: sliderConfig.navigation.value ? true : false,
                        autoplay: sliderConfig.rotate.value ? true : false
                    }
                } %}

                {% if not sliderConfig.navigation.value %}
                    {% set productSliderOptions = productSliderOptions|replace_recursive({
                        slider: {
                            mouseDrag: true
                        }
                    }) %}
                {% endif %}

                {% block element_product_slider_slider %}
                    <div class=\"base-slider product-slider{% if sliderConfig.border.value %} has-border{% endif %}{% if sliderConfig.navigation.value %} has-nav{% endif %}\"
                         data-product-slider=\"true\"
                         data-product-slider-options=\"{{ productSliderOptions|json_encode }}\">

                        {% block element_product_slider_title %}
                            {% if sliderConfig.title.value %}
                                <div class=\"cms-element-title\">
                                    <p class=\"cms-element-title-paragraph\">{{ sliderConfig.title.value }}</p>
                                </div>
                            {% endif %}
                        {% endblock %}

                        {% block element_product_slider_inner %}
                            {% block element_product_slider_element %}
                                <div class=\"product-slider-container\"
                                     data-product-slider-container=\"true\">
                                    {% for product in element.data.products.elements %}
                                        {% block element_product_slider_inner_item %}
                                            <div class=\"product-slider-item\">
                                                {% sw_include '@Storefront/storefront/component/product/card/box.html.twig' with {
                                                    'layout': sliderConfig.boxLayout.value,
                                                    'displayMode': sliderConfig.displayMode.value
                                                } %}
                                            </div>
                                        {% endblock %}
                                    {% endfor %}
                                </div>
                            {% endblock %}

                            {% block element_product_slider_controls %}
                                {% if sliderConfig.navigation.value %}
                                    <div class=\"product-slider-controls-container\">
                                        <div class=\"base-slider-controls\"
                                             data-product-slider-controls=\"true\">
                                            {% block element_product_slider_controls_items %}
                                                <button class=\"base-slider-controls-prev product-slider-controls-prev{% if sliderConfig.border.value %} has-border{% endif %}\">
                                                    {% block element_product_slider_controls_items_prev_icon %}
                                                        {% sw_icon 'arrow-head-left' %}
                                                    {% endblock %}
                                                </button>
                                                <button class=\"base-slider-controls-next product-slider-controls-next{% if sliderConfig.border.value %} has-border{% endif %}\">
                                                    {% block element_product_slider_controls_items_next_icon %}
                                                        {% sw_icon 'arrow-head-right' %}
                                                    {% endblock %}
                                                </button>
                                            {% endblock %}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endblock %}
                        {% endblock %}
                    </div>
                {% endblock %}
            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-product-slider.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-product-slider.html.twig");
    }
}
