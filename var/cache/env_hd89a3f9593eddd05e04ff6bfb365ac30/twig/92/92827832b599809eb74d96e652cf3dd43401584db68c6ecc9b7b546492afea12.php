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

/* @Storefront/storefront/element/cms-element-image-gallery.html.twig */
class __TwigTemplate_1bf30e60b604032e806a0f307a255147f5f5af05373fb4ca5a1811dfdbbfdf55 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image_gallery' => [$this, 'block_element_image_gallery'],
            'element_image_gallery_alignment' => [$this, 'block_element_image_gallery_alignment'],
            'element_image_gallery_inner' => [$this, 'block_element_image_gallery_inner'],
            'element_image_gallery_inner_col' => [$this, 'block_element_image_gallery_inner_col'],
            'element_image_gallery_inner_wrapper' => [$this, 'block_element_image_gallery_inner_wrapper'],
            'element_image_gallery_inner_multiple_slides' => [$this, 'block_element_image_gallery_inner_multiple_slides'],
            'element_image_gallery_inner_container' => [$this, 'block_element_image_gallery_inner_container'],
            'element_image_gallery_inner_items' => [$this, 'block_element_image_gallery_inner_items'],
            'element_image_gallery_inner_item' => [$this, 'block_element_image_gallery_inner_item'],
            'element_image_gallery_inner_controls' => [$this, 'block_element_image_gallery_inner_controls'],
            'element_image_gallery_inner_control_items' => [$this, 'block_element_image_gallery_inner_control_items'],
            'element_image_gallery_inner_control_prev' => [$this, 'block_element_image_gallery_inner_control_prev'],
            'element_image_gallery_inner_control_prev_icon' => [$this, 'block_element_image_gallery_inner_control_prev_icon'],
            'element_image_gallery_inner_control_next' => [$this, 'block_element_image_gallery_inner_control_next'],
            'element_image_gallery_inner_control_next_icon' => [$this, 'block_element_image_gallery_inner_control_next_icon'],
            'element_image_gallery_inner_single' => [$this, 'block_element_image_gallery_inner_single'],
            'element_image_gallery_slider_dots' => [$this, 'block_element_image_gallery_slider_dots'],
            'element_image_gallery_slider_dots_buttons' => [$this, 'block_element_image_gallery_slider_dots_buttons'],
            'element_image_gallery_slider_dots_button' => [$this, 'block_element_image_gallery_slider_dots_button'],
            'element_image_gallery_inner_thumbnails_col' => [$this, 'block_element_image_gallery_inner_thumbnails_col'],
            'element_image_gallery_inner_thumbnails' => [$this, 'block_element_image_gallery_inner_thumbnails'],
            'element_image_gallery_inner_thumbnails_items' => [$this, 'block_element_image_gallery_inner_thumbnails_items'],
            'element_image_gallery_inner_thumbnails_item' => [$this, 'block_element_image_gallery_inner_thumbnails_item'],
            'element_image_gallery_inner_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_thumbnails_item_inner'],
            'element_image_gallery_inner_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_thumbnails_controls'],
            'element_image_gallery_inner_zoom_modal_wrapper' => [$this, 'block_element_image_gallery_inner_zoom_modal_wrapper'],
            'element_image_gallery_inner_zoom_modal' => [$this, 'block_element_image_gallery_inner_zoom_modal'],
            'element_image_gallery_inner_zoom_modal_dialog' => [$this, 'block_element_image_gallery_inner_zoom_modal_dialog'],
            'element_image_gallery_inner_zoom_modal_content' => [$this, 'block_element_image_gallery_inner_zoom_modal_content'],
            'element_image_gallery_inner_zoom_modal_close_button' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_button'],
            'element_image_gallery_inner_zoom_modal_close_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_close_icon'],
            'element_image_gallery_inner_zoom_modal_body' => [$this, 'block_element_image_gallery_inner_zoom_modal_body'],
            'element_image_gallery_inner_zoom_modal_action_buttons' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_buttons'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out'],
            'element_image_gallery_inner_zoom_modal_action_zoom_out_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset'],
            'element_image_gallery_inner_zoom_modal_action_zoom_reset_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in'],
            'element_image_gallery_inner_zoom_modal_action_zoom_in_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon'],
            'element_image_gallery_inner_zoom_modal_slider' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider'],
            'element_image_gallery_inner_zoom_modal_slider_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_items'],
            'element_image_gallery_inner_zoom_modal_slider_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item'],
            'element_image_gallery_inner_zoom_modal_slider_item_zoom_container' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container'],
            'element_image_gallery_inner_zoom_modal_slider_item_image' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_item_image'],
            'element_image_gallery_inner_zoom_modal_slider_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_controls'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev'],
            'element_image_gallery_inner_zoom_modal_slider_control_prev_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon'],
            'element_image_gallery_inner_zoom_modal_slider_control_next' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next'],
            'element_image_gallery_inner_zoom_modal_slider_control_next_icon' => [$this, 'block_element_image_gallery_inner_zoom_modal_slider_control_next_icon'],
            'element_image_gallery_inner_zoom_modal_footer' => [$this, 'block_element_image_gallery_inner_zoom_modal_footer'],
            'element_image_gallery_inner_zoom_modal_thumbnails_controls' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_controls'],
            'element_image_gallery_inner_zoom_modal_thumbnails' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails'],
            'element_image_gallery_inner_zoom_modal_thumbnails_items' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_items'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item'],
            'element_image_gallery_inner_zoom_modal_thumbnails_item_inner' => [$this, 'block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-image-gallery.html.twig"));

        // line 1
        $this->displayBlock('element_image_gallery', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_element_image_gallery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", true, true, false, 3) && twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", true, true, false, 3))) {
            // line 4
            echo "        ";
            $context["sliderConfig"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 4), "elements", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            $context["mediaItems"] = [];
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 7), "sliderItems", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            ";
                $context["mediaItems"] = twig_array_merge(($context["mediaItems"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["item"], "media", [], "any", false, false, false, 8)]);
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
        ";
            // line 11
            $context["zoom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoom", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $context["gutter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "gutter", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $context["magnifierOverGallery"] = true;
            // line 14
            echo "        ";
            $context["zoomModal"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "fullScreen", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14);
            // line 15
            echo "        ";
            $context["minHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "minHeight", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15);
            // line 16
            echo "        ";
            $context["displayMode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "displayMode", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16);
            // line 17
            echo "        ";
            $context["navigationArrows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationArrows", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17);
            // line 18
            echo "        ";
            $context["navigationDots"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "navigationDots", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18);
            // line 19
            echo "        ";
            $context["galleryPosition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "galleryPosition", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19);
            // line 20
            echo "        ";
            $context["verticalAlign"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "verticalAlign", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20);
            // line 21
            echo "        ";
            $context["zoomImageContainerSelector"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sliderConfig"] ?? null), "zoomImageContainerSelector", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21);
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if ( !(isset($context["fallbackImageTitle"]) || array_key_exists("fallbackImageTitle", $context))) {
            // line 25
            echo "        ";
            $context["fallbackImageTitle"] = "";
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $context["imageCount"] = twig_length_filter($this->env, ($context["mediaItems"] ?? null));
        // line 30
        echo "
    ";
        // line 32
        echo "    ";
        $context["maxItemsToShowMobileNav"] = 5;
        // line 33
        echo "    ";
        $context["maxItemsToShowNav"] = 8;
        // line 34
        echo "
    ";
        // line 35
        $context["magnifierOptions"] = [];
        // line 36
        echo "
    ";
        // line 37
        if (($context["magnifierOverGallery"] ?? null)) {
            // line 38
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["magnifierOverGallery" => true, "cursorType" => "crosshair"]);
            // line 42
            echo "    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (($context["zoomImageContainerSelector"] ?? null)) {
            // line 45
            echo "        ";
            $context["magnifierOptions"] = twig_array_merge(($context["magnifierOptions"] ?? null), ["zoomImageContainerSelector" =>             // line 46
($context["zoomImageContainerSelector"] ?? null)]);
            // line 48
            echo "    ";
        }
        // line 49
        echo "
    <div class=\"cms-element-";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 50), "html", null, true);
        if (((($context["displayMode"] ?? null) == "standard") && ($context["verticalAlign"] ?? null))) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 51
        $this->displayBlock('element_image_gallery_alignment', $context, $blocks);
        // line 473
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_element_image_gallery_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_alignment"));

        // line 52
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52)) {
            // line 53
            echo "                <div class=\"cms-element-alignment";
            if ((($context["verticalAlign"] ?? null) == "center")) {
                echo " align-self-center";
            } elseif ((($context["verticalAlign"] ?? null) == "flex-end")) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 55
        echo "

                ";
        // line 57
        $context["gallerySliderOptions"] = ["slider" => ["navPosition" => "bottom", "speed" => 500, "gutter" => ((        // line 61
($context["gutter"] ?? null)) ? (($context["gutter"] ?? null)) : (0)), "controls" => ((        // line 62
($context["navigationArrows"] ?? null)) ? (true) : (false)), "autoHeight" => false, "startIndex" => ((        // line 64
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null))], "thumbnailSlider" => ["autoWidth" => (((        // line 67
($context["galleryPosition"] ?? null) == "underneath")) ? (true) : (false)), "controls" => (((        // line 68
($context["galleryPosition"] ?? null) == "underneath")) ? (false) : (true)), "startIndex" => ((        // line 69
($context["startIndexThumbnails"] ?? null)) ? (($context["startIndexThumbnails"] ?? null)) : (null)), "responsive" => ["xs" => ["enabled" => false, "controls" => false], "sm" => ["enabled" => false, "controls" => false]]]];
        // line 82
        echo "
                ";
        // line 83
        if ((($context["galleryPosition"] ?? null) == "left")) {
            // line 84
            echo "                    ";
            $context["gallerySliderOptions"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\ReplaceRecursiveFilter']->replaceRecursive(($context["gallerySliderOptions"] ?? null), ["thumbnailSlider" => ["responsive" => ["md" => ["axis" => "vertical"], "lg" => ["axis" => "vertical"], "xl" => ["axis" => "vertical"]]]]);
            // line 99
            echo "                ";
        }
        // line 100
        echo "
                ";
        // line 101
        $this->displayBlock('element_image_gallery_inner', $context, $blocks);
        // line 468
        echo "
            ";
        // line 469
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 469), "value", [], "any", false, false, false, 469)) {
            // line 470
            echo "                </div>
            ";
        }
        // line 472
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_element_image_gallery_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner"));

        // line 102
        echo "                    <div class=\"row gallery-slider-row";
        if ((($context["imageCount"] ?? null) == 1)) {
            echo " is-single-image";
        } else {
            echo " is-loading";
        }
        echo " js-gallery-zoom-modal-container\"
                            ";
        // line 103
        if (($context["zoom"] ?? null)) {
            // line 104
            echo "                                data-magnifier=\"true\"
                            ";
        }
        // line 106
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["magnifierOptions"] ?? null)) > 0)) {
            // line 107
            echo "                                data-magnifier-options='";
            echo json_encode(($context["magnifierOptions"] ?? null));
            echo "'
                            ";
        }
        // line 109
        echo "                            ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 110
            echo "                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='";
            // line 111
            echo twig_escape_filter($this->env, json_encode(($context["gallerySliderOptions"] ?? null)), "html", null, true);
            echo "'
                            ";
        }
        // line 112
        echo ">

                        ";
        // line 114
        $this->displayBlock('element_image_gallery_inner_col', $context, $blocks);
        // line 234
        echo "
                        ";
        // line 235
        $this->displayBlock('element_image_gallery_inner_thumbnails_col', $context, $blocks);
        // line 289
        echo "
                        ";
        // line 290
        $this->displayBlock('element_image_gallery_inner_zoom_modal_wrapper', $context, $blocks);
        // line 466
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_element_image_gallery_inner_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_col"));

        // line 115
        echo "                            <div class=\"gallery-slider-col";
        if ((($context["galleryPosition"] ?? null) == "left")) {
            echo " col order-1 order-md-2";
        } elseif ((($context["galleryPosition"] ?? null) == "underneath")) {
            echo " col-12 order-1";
        }
        echo "\"
                                 ";
        // line 116
        if (($context["zoomModal"] ?? null)) {
            echo "data-zoom-modal=\"true\"";
        }
        echo ">
                                ";
        // line 118
        echo "                                <div class=\"base-slider gallery-slider";
        if ((($context["navigationArrows"] ?? null) == "outside")) {
            echo " has-nav-outside";
        }
        if ((($context["navigationDots"] ?? null) == "outside")) {
            echo " has-dots-outside";
        }
        if (($context["magnifierOverGallery"] ?? null)) {
            echo " js-magnifier-zoom-image-container";
        }
        echo "\">
                                    ";
        // line 119
        $this->displayBlock('element_image_gallery_inner_wrapper', $context, $blocks);
        // line 215
        echo "
                                    ";
        // line 216
        $this->displayBlock('element_image_gallery_slider_dots', $context, $blocks);
        // line 231
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_element_image_gallery_inner_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_wrapper"));

        // line 120
        echo "                                        ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 121
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_multiple_slides', $context, $blocks);
            // line 183
            echo "                                        ";
        } else {
            // line 184
            echo "                                            ";
            $this->displayBlock('element_image_gallery_inner_single', $context, $blocks);
            // line 213
            echo "                                        ";
        }
        // line 214
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 121
    public function block_element_image_gallery_inner_multiple_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_multiple_slides"));

        // line 122
        echo "                                                ";
        $this->displayBlock('element_image_gallery_inner_container', $context, $blocks);
        // line 155
        echo "
                                                ";
        // line 156
        $this->displayBlock('element_image_gallery_inner_controls', $context, $blocks);
        // line 182
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 122
    public function block_element_image_gallery_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_container"));

        // line 123
        echo "                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        ";
        // line 125
        $this->displayBlock('element_image_gallery_inner_items', $context, $blocks);
        // line 153
        echo "                                                    </div>
                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_element_image_gallery_inner_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_items"));

        // line 126
        echo "                                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 127
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_item', $context, $blocks);
            // line 151
            echo "                                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_element_image_gallery_inner_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_item"));

        // line 128
        echo "                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-";
        // line 129
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if ((($context["minHeight"] ?? null) && ((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain")))) {
            echo " style=\"min-height: ";
            echo twig_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                                            ";
        // line 130
        $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 132
($context["image"] ?? null), "translated", [], "any", false, false, false, 132), "alt", [], "any", false, false, false, 132)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 132), "alt", [], "any", false, false, false, 132)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 133
($context["image"] ?? null), "translated", [], "any", false, false, false, 133), "title", [], "any", false, false, false, 133)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 133), "title", [], "any", false, false, false, 133)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => twig_get_attribute($this->env, $this->source,         // line 134
($context["image"] ?? null), "url", [], "any", false, false, false, 134)];
        // line 136
        echo "
                                                                            ";
        // line 137
        if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
            // line 138
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
            // line 139
            echo "                                                                            ";
        }
        // line 140
        echo "
                                                                            ";
        // line 141
        if (($context["isProduct"] ?? null)) {
            // line 142
            echo "                                                                                ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 143
            echo "                                                                            ";
        }
        // line 144
        echo "
                                                                            ";
        // line 145
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 145);
        })())->display(twig_array_merge($context, ["media" =>         // line 146
($context["image"] ?? null), "name" => "gallery-slider-image-thumbnails"]));
        // line 148
        echo "                                                                        </div>
                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_element_image_gallery_inner_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_controls"));

        // line 157
        echo "                                                    ";
        if (($context["navigationArrows"] ?? null)) {
            // line 158
            echo "                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"";
            // line 159
            if (($context["navigationArrows"] ?? null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\">
                                                            ";
            // line 160
            $this->displayBlock('element_image_gallery_inner_control_items', $context, $blocks);
            // line 179
            echo "                                                        </div>
                                                    ";
        }
        // line 181
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 160
    public function block_element_image_gallery_inner_control_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_items"));

        // line 161
        echo "                                                                ";
        $this->displayBlock('element_image_gallery_inner_control_prev', $context, $blocks);
        // line 169
        echo "
                                                                ";
        // line 170
        $this->displayBlock('element_image_gallery_inner_control_next', $context, $blocks);
        // line 178
        echo "                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 161
    public function block_element_image_gallery_inner_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev"));

        // line 162
        echo "                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev";
        if ((($context["navigationArrows"] ?? null) == "outside")) {
            echo " is-nav-prev-outside";
        } elseif ((($context["navigationArrows"] ?? null) == "inside")) {
            echo " is-nav-prev-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 163
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                        ";
        // line 164
        $this->displayBlock('element_image_gallery_inner_control_prev_icon', $context, $blocks);
        // line 167
        echo "                                                                    </button>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 164
    public function block_element_image_gallery_inner_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_prev_icon"));

        // line 165
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 165);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 166
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 170
    public function block_element_image_gallery_inner_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next"));

        // line 171
        echo "                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next";
        if ((($context["navigationArrows"] ?? null) == "outside")) {
            echo " is-nav-next-outside";
        } elseif ((($context["navigationArrows"] ?? null) == "inside")) {
            echo " is-nav-next-inside";
        }
        echo "\"
                                                                            aria-label=\"";
        // line 172
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                        ";
        // line 173
        $this->displayBlock('element_image_gallery_inner_control_next_icon', $context, $blocks);
        // line 176
        echo "                                                                    </button>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 173
    public function block_element_image_gallery_inner_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_control_next_icon"));

        // line 174
        echo "                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 174);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 175
        echo "                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 184
    public function block_element_image_gallery_inner_single($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_single"));

        // line 185
        echo "                                                <div class=\"gallery-slider-single-image is-";
        echo twig_escape_filter($this->env, ($context["displayMode"] ?? null), "html", null, true);
        echo " js-magnifier-container\"";
        if (($context["minHeight"] ?? null)) {
            echo " style=\"min-height: ";
            echo twig_escape_filter($this->env, ($context["minHeight"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
                                                    ";
        // line 186
        if ((($context["imageCount"] ?? null) > 0)) {
            // line 187
            echo "                                                        ";
            $context["attributes"] = ["class" => "img-fluid gallery-slider-image magnifier-image js-magnifier-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 189
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 189), "alt", [], "any", false, false, false, 189)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 189), "alt", [], "any", false, false, false, 189)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 190
($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 190), "title", [], "any", false, false, false, 190)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["mediaItems"] ?? null)), "translated", [], "any", false, false, false, 190), "title", [], "any", false, false, false, 190)) : (($context["fallbackImageTitle"] ?? null))), "data-full-image" => twig_get_attribute($this->env, $this->source, twig_first($this->env,             // line 191
($context["mediaItems"] ?? null)), "url", [], "any", false, false, false, 191)];
            // line 193
            echo "
                                                        ";
            // line 194
            if (((($context["displayMode"] ?? null) == "cover") || (($context["displayMode"] ?? null) == "contain"))) {
                // line 195
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => ($context["displayMode"] ?? null)]);
                // line 196
                echo "                                                        ";
            }
            // line 197
            echo "
                                                        ";
            // line 198
            if (($context["isProduct"] ?? null)) {
                // line 199
                echo "                                                            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
                // line 200
                echo "                                                        ";
            }
            // line 201
            echo "
                                                        ";
            // line 202
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 202);
            })())->display(twig_array_merge($context, ["media" => twig_first($this->env,             // line 203
($context["mediaItems"] ?? null)), "name" => "gallery-slider-image-thumbnails"]));
            // line 206
            echo "                                                    ";
        } else {
            // line 207
            echo "                                                        ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 207);
            })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
            // line 210
            echo "                                                    ";
        }
        // line 211
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 216
    public function block_element_image_gallery_slider_dots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots"));

        // line 217
        echo "                                        ";
        if (((($context["imageCount"] ?? null) > 1) && ($context["navigationDots"] ?? null))) {
            // line 218
            echo "                                            <div class=\"base-slider-dots ";
            if ((($context["imageCount"] ?? null) > ($context["maxItemsToShowNav"] ?? null))) {
                echo " hide-dots";
            } elseif ((($context["imageCount"] ?? null) > ($context["maxItemsToShowMobileNav"] ?? null))) {
                echo " hide-dots-mobile";
            }
            echo "\">
                                                ";
            // line 219
            $this->displayBlock('element_image_gallery_slider_dots_buttons', $context, $blocks);
            // line 228
            echo "                                            </div>
                                        ";
        }
        // line 230
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 219
    public function block_element_image_gallery_slider_dots_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_buttons"));

        // line 220
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 221
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_slider_dots_button', $context, $blocks);
            // line 226
            echo "                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 221
    public function block_element_image_gallery_slider_dots_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_slider_dots_button"));

        // line 222
        echo "                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 223), "html", null, true);
        echo "\"
                                                                    tabindex=\"-1\"></button>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 235
    public function block_element_image_gallery_inner_thumbnails_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_col"));

        // line 236
        echo "                            ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 237
            echo "                                <div class=\"gallery-slider-thumbnails-col";
            if ((($context["galleryPosition"] ?? null) == "left")) {
                echo " col-0 col-md-auto order-2 order-md-1 is-left";
            } elseif ((($context["galleryPosition"] ?? null) == "underneath")) {
                echo " col-12 order-2 is-underneath";
            }
            echo "\">
                                    <div class=\"gallery-slider-thumbnails-container";
            // line 238
            if (((($context["imageCount"] ?? null) > ($context["maxItemsToShowNav"] ?? null)) && (($context["galleryPosition"] ?? null) == "underneath"))) {
                echo " hide-thumbs";
            }
            echo "\">
                                        ";
            // line 239
            $this->displayBlock('element_image_gallery_inner_thumbnails', $context, $blocks);
            // line 272
            echo "
                                        ";
            // line 273
            $this->displayBlock('element_image_gallery_inner_thumbnails_controls', $context, $blocks);
            // line 285
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 288
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 239
    public function block_element_image_gallery_inner_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails"));

        // line 240
        echo "                                            <div class=\"gallery-slider-thumbnails";
        if ((($context["galleryPosition"] ?? null) == "underneath")) {
            echo " is-underneath";
        }
        echo "\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                ";
        // line 242
        $this->displayBlock('element_image_gallery_inner_thumbnails_items', $context, $blocks);
        // line 270
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 242
    public function block_element_image_gallery_inner_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_items"));

        // line 243
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 244
            echo "                                                        ";
            $this->displayBlock('element_image_gallery_inner_thumbnails_item', $context, $blocks);
            // line 268
            echo "                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 244
    public function block_element_image_gallery_inner_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item"));

        // line 245
        echo "                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                ";
        // line 246
        $this->displayBlock('element_image_gallery_inner_thumbnails_item_inner', $context, $blocks);
        // line 266
        echo "                                                            </div>
                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 246
    public function block_element_image_gallery_inner_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_item_inner"));

        // line 247
        echo "                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        ";
        // line 248
        $context["attributes"] = ["class" => "gallery-slider-thumbnails-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 250
($context["image"] ?? null), "translated", [], "any", false, false, false, 250), "alt", [], "any", false, false, false, 250)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 250), "alt", [], "any", false, false, false, 250)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 251
($context["image"] ?? null), "translated", [], "any", false, false, false, 251), "title", [], "any", false, false, false, 251)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 251), "title", [], "any", false, false, false, 251)) : (($context["fallbackImageTitle"] ?? null)))];
        // line 253
        echo "
                                                                        ";
        // line 254
        if (($context["isProduct"] ?? null)) {
            // line 255
            echo "                                                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["itemprop" => "image"]);
            // line 256
            echo "                                                                        ";
        }
        // line 257
        echo "
                                                                        ";
        // line 258
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 258);
        })())->display(twig_array_merge($context, ["media" =>         // line 259
($context["image"] ?? null), "sizes" => ["default" => "200px"], "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 264
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 273
    public function block_element_image_gallery_inner_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_thumbnails_controls"));

        // line 274
        echo "                                            ";
        if ((($context["galleryPosition"] ?? null) == "left")) {
            // line 275
            echo "                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        ";
            // line 277
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 277);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-up"]));
            // line 278
            echo "                                                    </button>
                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        ";
            // line 280
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 280);
            })())->display(twig_array_merge($context, ["name" => "arrow-head-down"]));
            // line 281
            echo "                                                    </button>
                                                </div>
                                            ";
        }
        // line 284
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 290
    public function block_element_image_gallery_inner_zoom_modal_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_wrapper"));

        // line 291
        echo "                            ";
        if (($context["zoomModal"] ?? null)) {
            // line 292
            echo "                                <div class=\"zoom-modal-wrapper\">
                                    ";
            // line 293
            $this->displayBlock('element_image_gallery_inner_zoom_modal', $context, $blocks);
            // line 463
            echo "                                </div>
                            ";
        }
        // line 465
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 293
    public function block_element_image_gallery_inner_zoom_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal"));

        // line 294
        echo "                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal";
        if ((($context["imageCount"] ?? null) === 1)) {
            echo " no-thumbnails";
        }
        echo "\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            ";
        // line 298
        $this->displayBlock('element_image_gallery_inner_zoom_modal_dialog', $context, $blocks);
        // line 461
        echo "                                        </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 298
    public function block_element_image_gallery_inner_zoom_modal_dialog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_dialog"));

        // line 299
        echo "                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    ";
        // line 301
        $this->displayBlock('element_image_gallery_inner_zoom_modal_content', $context, $blocks);
        // line 459
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 301
    public function block_element_image_gallery_inner_zoom_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_content"));

        // line 302
        echo "                                                        <div class=\"modal-content\"";
        if ((($context["imageCount"] ?? null) > 1)) {
            echo " data-modal-gallery-slider=\"true\"";
        }
        echo ">
                                                            ";
        // line 303
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_button', $context, $blocks);
        // line 315
        echo "
                                                            ";
        // line 316
        $this->displayBlock('element_image_gallery_inner_zoom_modal_body', $context, $blocks);
        // line 406
        echo "
                                                            ";
        // line 407
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 408
            echo "                                                                ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_footer', $context, $blocks);
            // line 456
            echo "                                                            ";
        }
        // line 457
        echo "                                                        </div>
                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 303
    public function block_element_image_gallery_inner_zoom_modal_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_button"));

        // line 304
        echo "                                                                <button type=\"button\"
                                                                        class=\"modal-close close\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    ";
        // line 308
        $this->displayBlock('element_image_gallery_inner_zoom_modal_close_icon', $context, $blocks);
        // line 313
        echo "                                                                </button>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 308
    public function block_element_image_gallery_inner_zoom_modal_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_close_icon"));

        // line 309
        echo "                                                                        <span aria-hidden=\"true\">
                                                                            ";
        // line 310
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 310);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 311
        echo "                                                                        </span>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 316
    public function block_element_image_gallery_inner_zoom_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_body"));

        // line 317
        echo "                                                                <div class=\"modal-body\">

                                                                    ";
        // line 319
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_buttons', $context, $blocks);
        // line 349
        echo "
                                                                    ";
        // line 350
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider', $context, $blocks);
        // line 379
        echo "
                                                                    ";
        // line 380
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_controls', $context, $blocks);
        // line 404
        echo "                                                                </div>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 319
    public function block_element_image_gallery_inner_zoom_modal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_buttons"));

        // line 320
        echo "                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            ";
        // line 324
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out', $context, $blocks);
        // line 331
        echo "
                                                                            ";
        // line 332
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset', $context, $blocks);
        // line 339
        echo "
                                                                            ";
        // line 340
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in', $context, $blocks);
        // line 347
        echo "                                                                        </div>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 324
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out"));

        // line 325
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    ";
        // line 326
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_out_icon', $context, $blocks);
        // line 329
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 326
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_out_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_out_icon"));

        // line 327
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 327);
        })())->display(twig_array_merge($context, ["name" => "minus-circle"]));
        // line 328
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 332
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset"));

        // line 333
        echo "                                                                                <buton class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    ";
        // line 334
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_reset_icon', $context, $blocks);
        // line 337
        echo "                                                                                </buton>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 334
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_reset_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_reset_icon"));

        // line 335
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 335);
        })())->display(twig_array_merge($context, ["name" => "screen-minimize"]));
        // line 336
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 340
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in"));

        // line 341
        echo "                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    ";
        // line 342
        $this->displayBlock('element_image_gallery_inner_zoom_modal_action_zoom_in_icon', $context, $blocks);
        // line 345
        echo "                                                                                </button>
                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 342
    public function block_element_image_gallery_inner_zoom_modal_action_zoom_in_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_action_zoom_in_icon"));

        // line 343
        echo "                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 343);
        })())->display(twig_array_merge($context, ["name" => "plus-circle"]));
        // line 344
        echo "                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 350
    public function block_element_image_gallery_inner_zoom_modal_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider"));

        // line 351
        echo "                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            ";
        // line 353
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_items', $context, $blocks);
        // line 377
        echo "                                                                        </div>
                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 353
    public function block_element_image_gallery_inner_zoom_modal_slider_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_items"));

        // line 354
        echo "                                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 355
            echo "                                                                                    ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item', $context, $blocks);
            // line 375
            echo "                                                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 355
    public function block_element_image_gallery_inner_zoom_modal_slider_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item"));

        // line 356
        echo "                                                                                        <div class=\"gallery-slider-item\">
                                                                                            ";
        // line 357
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_zoom_container', $context, $blocks);
        // line 373
        echo "                                                                                        </div>
                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 357
    public function block_element_image_gallery_inner_zoom_modal_slider_item_zoom_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_zoom_container"));

        // line 358
        echo "                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    ";
        // line 360
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_item_image', $context, $blocks);
        // line 371
        echo "                                                                                                </div>
                                                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 360
    public function block_element_image_gallery_inner_zoom_modal_slider_item_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_item_image"));

        // line 361
        echo "                                                                                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 361);
        })())->display(twig_array_merge($context, ["media" =>         // line 362
($context["image"] ?? null), "attributes" => ["class" => "gallery-slider-image js-image-zoom-element js-load-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 365
($context["image"] ?? null), "translated", [], "any", false, false, false, 365), "alt", [], "any", false, false, false, 365)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 365), "alt", [], "any", false, false, false, 365)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 366
($context["image"] ?? null), "translated", [], "any", false, false, false, 366), "title", [], "any", false, false, false, 366)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 366), "title", [], "any", false, false, false, 366)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "name" => "gallery-slider-image-thumbnails"]));
        // line 370
        echo "                                                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 380
    public function block_element_image_gallery_inner_zoom_modal_slider_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_controls"));

        // line 381
        echo "                                                                        ";
        if ((($context["imageCount"] ?? null) > 1)) {
            // line 382
            echo "                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                ";
            // line 384
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev', $context, $blocks);
            // line 392
            echo "
                                                                                ";
            // line 393
            $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next', $context, $blocks);
            // line 401
            echo "                                                                            </div>
                                                                        ";
        }
        // line 403
        echo "                                                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 384
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev"));

        // line 385
        echo "                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"";
        // line 386
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 387
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_prev_icon', $context, $blocks);
        // line 390
        echo "                                                                                    </button>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 387
    public function block_element_image_gallery_inner_zoom_modal_slider_control_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_prev_icon"));

        // line 388
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 388);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 389
        echo "                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 393
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next"));

        // line 394
        echo "                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"";
        // line 395
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 396
        $this->displayBlock('element_image_gallery_inner_zoom_modal_slider_control_next_icon', $context, $blocks);
        // line 399
        echo "                                                                                    </button>
                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 396
    public function block_element_image_gallery_inner_zoom_modal_slider_control_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_slider_control_next_icon"));

        // line 397
        echo "                                                                                            ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 397);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 398
        echo "                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 408
    public function block_element_image_gallery_inner_zoom_modal_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_footer"));

        // line 409
        echo "                                                                    <div class=\"modal-footer\">
                                                                        ";
        // line 410
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_controls', $context, $blocks);
        // line 424
        echo "
                                                                        ";
        // line 425
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails', $context, $blocks);
        // line 454
        echo "                                                                    </div>
                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 410
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_controls($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_controls"));

        // line 411
        echo "                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"";
        // line 414
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.previous")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 415
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 415);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-left"]));
        // line 416
        echo "                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"";
        // line 418
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.next")), "html", null, true);
        echo "\">
                                                                                        ";
        // line 419
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 419);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 420
        echo "                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 425
    public function block_element_image_gallery_inner_zoom_modal_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails"));

        // line 426
        echo "                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                ";
        // line 428
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_items', $context, $blocks);
        // line 452
        echo "                                                                            </div>
                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 428
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_items"));

        // line 429
        echo "                                                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 430
            echo "                                                                                        ";
            $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item', $context, $blocks);
            // line 450
            echo "                                                                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 430
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item"));

        // line 431
        echo "                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                ";
        // line 432
        $this->displayBlock('element_image_gallery_inner_zoom_modal_thumbnails_item_inner', $context, $blocks);
        // line 448
        echo "                                                                                            </div>
                                                                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 432
    public function block_element_image_gallery_inner_zoom_modal_thumbnails_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_gallery_inner_zoom_modal_thumbnails_item_inner"));

        // line 433
        echo "                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        ";
        // line 434
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image-gallery.html.twig", 434);
        })())->display(twig_array_merge($context, ["media" =>         // line 435
($context["image"] ?? null), "sizes" => ["default" => "200px"], "attributes" => ["class" => "gallery-slider-thumbnails-image js-load-img", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 441
($context["image"] ?? null), "translated", [], "any", false, false, false, 441), "alt", [], "any", false, false, false, 441)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 441), "alt", [], "any", false, false, false, 441)) : (($context["fallbackImageTitle"] ?? null))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 442
($context["image"] ?? null), "translated", [], "any", false, false, false, 442), "title", [], "any", false, false, false, 442)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "translated", [], "any", false, false, false, 442), "title", [], "any", false, false, false, 442)) : (($context["fallbackImageTitle"] ?? null)))], "load" => false, "name" => "gallery-slider-thumbnails-image-thumbnails"]));
        // line 446
        echo "                                                                                                    </div>
                                                                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image-gallery.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1999 => 446,  1997 => 442,  1996 => 441,  1995 => 435,  1988 => 434,  1985 => 433,  1978 => 432,  1970 => 448,  1968 => 432,  1965 => 431,  1958 => 430,  1951 => 451,  1937 => 450,  1934 => 430,  1916 => 429,  1909 => 428,  1901 => 452,  1899 => 428,  1895 => 426,  1888 => 425,  1878 => 420,  1870 => 419,  1866 => 418,  1862 => 416,  1854 => 415,  1850 => 414,  1845 => 411,  1838 => 410,  1830 => 454,  1828 => 425,  1825 => 424,  1823 => 410,  1820 => 409,  1813 => 408,  1806 => 398,  1797 => 397,  1790 => 396,  1782 => 399,  1780 => 396,  1776 => 395,  1773 => 394,  1766 => 393,  1759 => 389,  1750 => 388,  1743 => 387,  1735 => 390,  1733 => 387,  1729 => 386,  1726 => 385,  1719 => 384,  1712 => 403,  1708 => 401,  1706 => 393,  1703 => 392,  1701 => 384,  1697 => 382,  1694 => 381,  1687 => 380,  1680 => 370,  1678 => 366,  1677 => 365,  1676 => 362,  1668 => 361,  1661 => 360,  1653 => 371,  1651 => 360,  1647 => 358,  1640 => 357,  1632 => 373,  1630 => 357,  1627 => 356,  1620 => 355,  1613 => 376,  1599 => 375,  1596 => 355,  1578 => 354,  1571 => 353,  1563 => 377,  1561 => 353,  1557 => 351,  1550 => 350,  1543 => 344,  1534 => 343,  1527 => 342,  1519 => 345,  1517 => 342,  1514 => 341,  1507 => 340,  1500 => 336,  1491 => 335,  1484 => 334,  1476 => 337,  1474 => 334,  1471 => 333,  1464 => 332,  1457 => 328,  1448 => 327,  1441 => 326,  1433 => 329,  1431 => 326,  1428 => 325,  1421 => 324,  1413 => 347,  1411 => 340,  1408 => 339,  1406 => 332,  1403 => 331,  1401 => 324,  1395 => 320,  1388 => 319,  1380 => 404,  1378 => 380,  1375 => 379,  1373 => 350,  1370 => 349,  1368 => 319,  1364 => 317,  1357 => 316,  1349 => 311,  1341 => 310,  1338 => 309,  1331 => 308,  1323 => 313,  1321 => 308,  1315 => 304,  1308 => 303,  1300 => 457,  1297 => 456,  1294 => 408,  1292 => 407,  1289 => 406,  1287 => 316,  1284 => 315,  1282 => 303,  1275 => 302,  1268 => 301,  1260 => 459,  1258 => 301,  1254 => 299,  1247 => 298,  1239 => 461,  1237 => 298,  1227 => 294,  1220 => 293,  1213 => 465,  1209 => 463,  1207 => 293,  1204 => 292,  1201 => 291,  1194 => 290,  1187 => 284,  1182 => 281,  1174 => 280,  1170 => 278,  1162 => 277,  1158 => 275,  1155 => 274,  1148 => 273,  1140 => 264,  1138 => 259,  1131 => 258,  1128 => 257,  1125 => 256,  1122 => 255,  1120 => 254,  1117 => 253,  1115 => 251,  1114 => 250,  1113 => 248,  1110 => 247,  1103 => 246,  1095 => 266,  1093 => 246,  1090 => 245,  1083 => 244,  1076 => 269,  1062 => 268,  1059 => 244,  1041 => 243,  1034 => 242,  1026 => 270,  1024 => 242,  1016 => 240,  1009 => 239,  1002 => 288,  997 => 285,  995 => 273,  992 => 272,  990 => 239,  984 => 238,  975 => 237,  972 => 236,  965 => 235,  955 => 223,  952 => 222,  945 => 221,  938 => 227,  924 => 226,  921 => 221,  903 => 220,  896 => 219,  889 => 230,  885 => 228,  883 => 219,  874 => 218,  871 => 217,  864 => 216,  856 => 211,  853 => 210,  844 => 207,  841 => 206,  839 => 203,  832 => 202,  829 => 201,  826 => 200,  823 => 199,  821 => 198,  818 => 197,  815 => 196,  812 => 195,  810 => 194,  807 => 193,  805 => 191,  804 => 190,  803 => 189,  801 => 187,  799 => 186,  788 => 185,  781 => 184,  774 => 175,  765 => 174,  758 => 173,  750 => 176,  748 => 173,  744 => 172,  735 => 171,  728 => 170,  721 => 166,  712 => 165,  705 => 164,  697 => 167,  695 => 164,  691 => 163,  682 => 162,  675 => 161,  668 => 178,  666 => 170,  663 => 169,  660 => 161,  653 => 160,  646 => 181,  642 => 179,  640 => 160,  632 => 159,  629 => 158,  626 => 157,  619 => 156,  610 => 148,  608 => 146,  601 => 145,  598 => 144,  595 => 143,  592 => 142,  590 => 141,  587 => 140,  584 => 139,  581 => 138,  579 => 137,  576 => 136,  574 => 134,  573 => 133,  572 => 132,  571 => 130,  561 => 129,  558 => 128,  551 => 127,  544 => 152,  530 => 151,  527 => 127,  509 => 126,  502 => 125,  494 => 153,  492 => 125,  488 => 123,  481 => 122,  474 => 182,  472 => 156,  469 => 155,  466 => 122,  459 => 121,  452 => 214,  449 => 213,  446 => 184,  443 => 183,  440 => 121,  437 => 120,  430 => 119,  421 => 231,  419 => 216,  416 => 215,  414 => 119,  401 => 118,  395 => 116,  386 => 115,  379 => 114,  371 => 466,  369 => 290,  366 => 289,  364 => 235,  361 => 234,  359 => 114,  355 => 112,  350 => 111,  347 => 110,  344 => 109,  338 => 107,  335 => 106,  331 => 104,  329 => 103,  320 => 102,  313 => 101,  306 => 472,  302 => 470,  300 => 469,  297 => 468,  295 => 101,  292 => 100,  289 => 99,  286 => 84,  284 => 83,  281 => 82,  279 => 69,  278 => 68,  277 => 67,  276 => 64,  275 => 62,  274 => 61,  273 => 57,  269 => 55,  257 => 53,  254 => 52,  247 => 51,  239 => 473,  237 => 51,  230 => 50,  227 => 49,  224 => 48,  222 => 46,  220 => 45,  218 => 44,  215 => 43,  212 => 42,  209 => 38,  207 => 37,  204 => 36,  202 => 35,  199 => 34,  196 => 33,  193 => 32,  190 => 30,  187 => 29,  184 => 27,  181 => 26,  178 => 25,  176 => 24,  173 => 23,  170 => 22,  167 => 21,  164 => 20,  161 => 19,  158 => 18,  155 => 17,  152 => 16,  149 => 15,  146 => 14,  143 => 13,  140 => 12,  138 => 11,  135 => 10,  129 => 9,  126 => 8,  121 => 7,  119 => 6,  116 => 5,  113 => 4,  110 => 3,  108 => 2,  95 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block element_image_gallery %}
    {# cms element data and configs #}
    {% if element.fieldConfig is defined and element.data is defined %}
        {% set sliderConfig = element.fieldConfig.elements %}

        {% set mediaItems = [] %}
        {% for item in element.data.sliderItems %}
            {% set mediaItems = mediaItems|merge([item.media]) %}
        {% endfor %}

        {% set zoom = sliderConfig.zoom.value %}
        {% set gutter = sliderConfig.gutter.value %}
        {% set magnifierOverGallery = true %}
        {% set zoomModal = sliderConfig.fullScreen.value %}
        {% set minHeight = sliderConfig.minHeight.value %}
        {% set displayMode = sliderConfig.displayMode.value %}
        {% set navigationArrows = sliderConfig.navigationArrows.value %}
        {% set navigationDots = sliderConfig.navigationDots.value %}
        {% set galleryPosition = sliderConfig.galleryPosition.value %}
        {% set verticalAlign = sliderConfig.verticalAlign.value %}
        {% set zoomImageContainerSelector = sliderConfig.zoomImageContainerSelector.value %}
    {% endif %}

    {% if fallbackImageTitle is not defined %}
        {% set fallbackImageTitle = '' %}
    {% endif %}

    {# @var mediaItems \\Shopware\\Core\\Content\\Media\\MediaCollection #}
    {% set imageCount = mediaItems|length %}

    {# too many underneath thumbs or slider dots make them hard to see #}
    {% set maxItemsToShowMobileNav = 5 %}
    {% set maxItemsToShowNav = 8 %}

    {% set magnifierOptions = [] %}

    {% if magnifierOverGallery %}
        {% set magnifierOptions = magnifierOptions|merge({
            'magnifierOverGallery': true,
            'cursorType': 'crosshair'
        }) %}
    {% endif %}

    {% if zoomImageContainerSelector %}
        {% set magnifierOptions = magnifierOptions|merge({
            'zoomImageContainerSelector': zoomImageContainerSelector
        }) %}
    {% endif %}

    <div class=\"cms-element-{{ element.type }}{% if displayMode == \"standard\" and verticalAlign %} has-vertical-alignment{% endif %}\">
        {% block element_image_gallery_alignment %}
            {% if config.verticalAlign.value %}
                <div class=\"cms-element-alignment{% if verticalAlign == \"center\" %} align-self-center{% elseif verticalAlign == \"flex-end\" %} align-self-end{% else %} align-self-start{% endif %}\">
            {% endif %}


                {% set gallerySliderOptions = {
                    slider: {
                        navPosition: 'bottom',
                        speed: 500,
                        gutter: gutter ? gutter : 0,
                        controls: navigationArrows ? true : false,
                        autoHeight: false,
                        startIndex: startIndexThumbnails ? startIndexThumbnails : null
                    },
                    thumbnailSlider: {
                        autoWidth: (galleryPosition == \"underneath\") ? true : false,
                        controls: (galleryPosition == \"underneath\") ? false : true,
                        startIndex: startIndexThumbnails ? startIndexThumbnails : null,
                        responsive: {
                            xs: {
                                enabled: false,
                                controls: false
                            },
                            sm: {
                                enabled: false,
                                controls: false
                            }
                        }
                    }
                } %}

                {% if galleryPosition == \"left\" %}
                    {% set gallerySliderOptions = gallerySliderOptions|replace_recursive({
                        thumbnailSlider: {
                            responsive: {
                                md: {
                                    axis: 'vertical'
                                },
                                lg: {
                                    axis: 'vertical'
                                },
                                xl: {
                                    axis: 'vertical'
                                }
                            }
                        }
                    }) %}
                {% endif %}

                {% block element_image_gallery_inner %}
                    <div class=\"row gallery-slider-row{% if imageCount == 1 %} is-single-image{% else %} is-loading{% endif %} js-gallery-zoom-modal-container\"
                            {% if zoom %}
                                data-magnifier=\"true\"
                            {% endif %}
                            {% if magnifierOptions|length > 0 %}
                                data-magnifier-options='{{ magnifierOptions|json_encode|raw }}'
                            {% endif %}
                            {% if imageCount > 1 %}
                                data-gallery-slider=\"true\"
                                data-gallery-slider-options='{{ gallerySliderOptions|json_encode }}'
                            {% endif %}>

                        {% block element_image_gallery_inner_col %}
                            <div class=\"gallery-slider-col{% if galleryPosition == \"left\" %} col order-1 order-md-2{% elseif galleryPosition == \"underneath\" %} col-12 order-1{% endif %}\"
                                 {% if zoomModal %}data-zoom-modal=\"true\"{% endif %}>
                                {# option \"magnifierOverGallery\" shows zoom container over gallery #}
                                <div class=\"base-slider gallery-slider{% if navigationArrows == \"outside\" %} has-nav-outside{% endif %}{% if navigationDots == \"outside\" %} has-dots-outside{% endif %}{% if magnifierOverGallery %} js-magnifier-zoom-image-container{% endif %}\">
                                    {% block element_image_gallery_inner_wrapper %}
                                        {% if imageCount > 1 %}
                                            {% block element_image_gallery_inner_multiple_slides %}
                                                {% block element_image_gallery_inner_container %}
                                                    <div class=\"gallery-slider-container\"
                                                         data-gallery-slider-container=\"true\">
                                                        {% block element_image_gallery_inner_items %}
                                                            {% for image in mediaItems %}
                                                                {% block element_image_gallery_inner_item %}
                                                                    <div class=\"gallery-slider-item-container\">
                                                                        <div class=\"gallery-slider-item is-{{ displayMode }} js-magnifier-container\"{% if minHeight and  (displayMode == \"cover\" or displayMode == \"contain\" ) %} style=\"min-height: {{ minHeight }}\"{% endif %}>
                                                                            {% set attributes = {
                                                                                'class': 'img-fluid gallery-slider-image magnifier-image js-magnifier-image',
                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                'title': (image.translated.title ?: fallbackImageTitle),
                                                                                'data-full-image': image.url
                                                                            } %}

                                                                            {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                                                {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                                            {% endif %}

                                                                            {% if isProduct %}
                                                                                {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                                            {% endif %}

                                                                            {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                                                media: image
                                                                            } %}
                                                                        </div>
                                                                    </div>
                                                                {% endblock %}
                                                            {% endfor %}
                                                        {% endblock %}
                                                    </div>
                                                {% endblock %}

                                                {% block element_image_gallery_inner_controls %}
                                                    {% if navigationArrows %}
                                                        <div class=\"gallery-slider-controls\"
                                                             data-gallery-slider-controls=\"{% if navigationArrows %}true{% else %}false{% endif %}\">
                                                            {% block element_image_gallery_inner_control_items %}
                                                                {% block element_image_gallery_inner_control_prev %}
                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev{% if navigationArrows == \"outside\" %} is-nav-prev-outside{% elseif navigationArrows == \"inside\" %} is-nav-prev-inside{% endif %}\"
                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                        {% block element_image_gallery_inner_control_prev_icon %}
                                                                            {% sw_icon 'arrow-head-left' %}
                                                                        {% endblock %}
                                                                    </button>
                                                                {% endblock %}

                                                                {% block element_image_gallery_inner_control_next %}
                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next{% if navigationArrows == \"outside\" %} is-nav-next-outside{% elseif navigationArrows == \"inside\" %} is-nav-next-inside{% endif %}\"
                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                        {% block element_image_gallery_inner_control_next_icon %}
                                                                            {% sw_icon 'arrow-head-right' %}
                                                                        {% endblock %}
                                                                    </button>
                                                                {% endblock %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endif %}
                                                {% endblock %}
                                            {% endblock %}
                                        {% else %}
                                            {% block element_image_gallery_inner_single %}
                                                <div class=\"gallery-slider-single-image is-{{ displayMode }} js-magnifier-container\"{% if minHeight %} style=\"min-height: {{ minHeight }}\"{% endif %}>
                                                    {% if imageCount > 0 %}
                                                        {% set attributes = {
                                                            'class': 'img-fluid gallery-slider-image magnifier-image js-magnifier-image',
                                                            'alt': (mediaItems|first.translated.alt ?: fallbackImageTitle),
                                                            'title': (mediaItems|first.translated.title ?: fallbackImageTitle),
                                                            'data-full-image': mediaItems|first.url
                                                        } %}

                                                        {% if displayMode == 'cover' or displayMode == 'contain' %}
                                                            {% set attributes = attributes|merge({ 'data-object-fit': displayMode }) %}
                                                        {% endif %}

                                                        {% if isProduct %}
                                                            {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                        {% endif %}

                                                        {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                            media: mediaItems|first,

                                                        } %}
                                                    {% else %}
                                                        {% sw_icon 'placeholder' style {
                                                            'size': 'fluid'
                                                        } %}
                                                    {% endif %}
                                                </div>
                                            {% endblock %}
                                        {% endif %}
                                    {% endblock %}

                                    {% block element_image_gallery_slider_dots %}
                                        {% if imageCount > 1 and navigationDots %}
                                            <div class=\"base-slider-dots {% if imageCount > maxItemsToShowNav %} hide-dots{% elseif imageCount > maxItemsToShowMobileNav %} hide-dots-mobile{% endif %}\">
                                                {% block element_image_gallery_slider_dots_buttons %}
                                                    {% for image in mediaItems %}
                                                        {% block element_image_gallery_slider_dots_button %}
                                                            <button class=\"base-slider-dot\"
                                                                    data-nav-dot=\"{{ loop.index }}\"
                                                                    tabindex=\"-1\"></button>
                                                        {% endblock %}
                                                    {% endfor %}
                                                {% endblock %}
                                            </div>
                                        {% endif %}
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block element_image_gallery_inner_thumbnails_col %}
                            {% if imageCount > 1 %}
                                <div class=\"gallery-slider-thumbnails-col{% if galleryPosition == \"left\" %} col-0 col-md-auto order-2 order-md-1 is-left{% elseif galleryPosition == \"underneath\" %} col-12 order-2 is-underneath{% endif %}\">
                                    <div class=\"gallery-slider-thumbnails-container{% if imageCount > maxItemsToShowNav and galleryPosition == \"underneath\" %} hide-thumbs{% endif %}\">
                                        {% block element_image_gallery_inner_thumbnails %}
                                            <div class=\"gallery-slider-thumbnails{% if galleryPosition == \"underneath\" %} is-underneath{% endif %}\"
                                                 data-gallery-slider-thumbnails=\"true\">
                                                {% block element_image_gallery_inner_thumbnails_items %}
                                                    {% for image in mediaItems %}
                                                        {% block element_image_gallery_inner_thumbnails_item %}
                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                {% block element_image_gallery_inner_thumbnails_item_inner %}
                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                        {% set attributes = {
                                                                            'class': 'gallery-slider-thumbnails-image',
                                                                            'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                            'title': (image.translated.title ?: fallbackImageTitle)
                                                                        } %}

                                                                        {% if isProduct %}
                                                                            {% set attributes = attributes|merge({ 'itemprop': 'image' }) %}
                                                                        {% endif %}

                                                                        {% sw_thumbnails 'gallery-slider-thumbnails-image-thumbnails' with {
                                                                            media: image,
                                                                            sizes: {
                                                                                'default': '200px'
                                                                            }
                                                                        } %}
                                                                    </div>
                                                                {% endblock %}
                                                            </div>
                                                        {% endblock %}
                                                    {% endfor %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block element_image_gallery_inner_thumbnails_controls %}
                                            {% if galleryPosition == \"left\" %}
                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-thumbnails-controls\">
                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\">
                                                        {% sw_icon 'arrow-head-up' %}
                                                    </button>
                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\">
                                                        {% sw_icon 'arrow-head-down' %}
                                                    </button>
                                                </div>
                                            {% endif %}
                                        {% endblock %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endblock %}

                        {% block element_image_gallery_inner_zoom_modal_wrapper %}
                            {% if zoomModal %}
                                <div class=\"zoom-modal-wrapper\">
                                    {% block element_image_gallery_inner_zoom_modal %}
                                        <div class=\"modal is-fullscreen zoom-modal js-zoom-modal{% if imageCount is same as(1) %} no-thumbnails{% endif %}\"
                                             data-image-zoom-modal=\"true\"
                                             tabindex=\"-1\"
                                             role=\"dialog\">
                                            {% block element_image_gallery_inner_zoom_modal_dialog %}
                                                <div class=\"modal-dialog\"
                                                     role=\"document\">
                                                    {% block element_image_gallery_inner_zoom_modal_content %}
                                                        <div class=\"modal-content\"{% if imageCount > 1 %} data-modal-gallery-slider=\"true\"{% endif %}>
                                                            {% block element_image_gallery_inner_zoom_modal_close_button %}
                                                                <button type=\"button\"
                                                                        class=\"modal-close close\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\">
                                                                    {% block element_image_gallery_inner_zoom_modal_close_icon %}
                                                                        <span aria-hidden=\"true\">
                                                                            {% sw_icon 'x' style { 'size': 'sm' } %}
                                                                        </span>
                                                                    {% endblock %}
                                                                </button>
                                                            {% endblock %}

                                                            {% block element_image_gallery_inner_zoom_modal_body %}
                                                                <div class=\"modal-body\">

                                                                    {% block element_image_gallery_inner_zoom_modal_action_buttons %}
                                                                        <div class=\"zoom-modal-actions btn-group\"
                                                                             role=\"group\"
                                                                             aria-label=\"zoom actions\">

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_out %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-out\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_out_icon %}
                                                                                        {% sw_icon 'minus-circle' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_reset %}
                                                                                <buton class=\"btn btn-light image-zoom-btn js-image-zoom-reset\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_reset_icon %}
                                                                                        {% sw_icon 'screen-minimize' %}
                                                                                    {% endblock %}
                                                                                </buton>
                                                                            {% endblock %}

                                                                            {% block element_image_gallery_inner_zoom_modal_action_zoom_in %}
                                                                                <button class=\"btn btn-light image-zoom-btn js-image-zoom-in\">
                                                                                    {% block element_image_gallery_inner_zoom_modal_action_zoom_in_icon %}
                                                                                        {% sw_icon 'plus-circle' %}
                                                                                    {% endblock %}
                                                                                </button>
                                                                            {% endblock %}
                                                                        </div>
                                                                    {% endblock %}

                                                                    {% block element_image_gallery_inner_zoom_modal_slider %}
                                                                        <div class=\"gallery-slider\"
                                                                             data-gallery-slider-container=true>
                                                                            {% block element_image_gallery_inner_zoom_modal_slider_items %}
                                                                                {% for image in mediaItems %}
                                                                                    {% block element_image_gallery_inner_zoom_modal_slider_item %}
                                                                                        <div class=\"gallery-slider-item\">
                                                                                            {% block element_image_gallery_inner_zoom_modal_slider_item_zoom_container %}
                                                                                                <div class=\"image-zoom-container\"
                                                                                                     data-image-zoom=\"true\">
                                                                                                    {% block element_image_gallery_inner_zoom_modal_slider_item_image %}
                                                                                                        {% sw_thumbnails 'gallery-slider-image-thumbnails' with {
                                                                                                            media: image,
                                                                                                            attributes: {
                                                                                                                'class': 'gallery-slider-image js-image-zoom-element js-load-img',
                                                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                                                'title': (image.translated.title ?: fallbackImageTitle)
                                                                                                            },
                                                                                                            load: false
                                                                                                        } %}
                                                                                                    {% endblock %}
                                                                                                </div>
                                                                                            {% endblock %}
                                                                                        </div>
                                                                                    {% endblock %}
                                                                                {% endfor %}
                                                                            {% endblock %}
                                                                        </div>
                                                                    {% endblock %}

                                                                    {% block element_image_gallery_inner_zoom_modal_slider_controls %}
                                                                        {% if imageCount > 1 %}
                                                                            <div class=\"gallery-slider-controls\"
                                                                                 data-gallery-slider-controls=\"true\">
                                                                                {% block element_image_gallery_inner_zoom_modal_slider_control_prev %}
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-controls-prev\"
                                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                                        {% block element_image_gallery_inner_zoom_modal_slider_control_prev_icon %}
                                                                                            {% sw_icon 'arrow-head-left' %}
                                                                                        {% endblock %}
                                                                                    </button>
                                                                                {% endblock %}

                                                                                {% block element_image_gallery_inner_zoom_modal_slider_control_next %}
                                                                                    <button class=\"base-slider-controls-next gallery-slider-controls-next\"
                                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                                        {% block element_image_gallery_inner_zoom_modal_slider_control_next_icon %}
                                                                                            {% sw_icon 'arrow-head-right' %}
                                                                                        {% endblock %}
                                                                                    </button>
                                                                                {% endblock %}
                                                                            </div>
                                                                        {% endif %}
                                                                    {% endblock %}
                                                                </div>
                                                            {% endblock %}

                                                            {% if imageCount > 1 %}
                                                                {% block element_image_gallery_inner_zoom_modal_footer %}
                                                                    <div class=\"modal-footer\">
                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails_controls %}
                                                                            <div class=\"gallery-slider-modal-controls\">
                                                                                <div data-thumbnail-slider-controls=\"true\" class=\"gallery-slider-modal-thumbnails\">
                                                                                    <button class=\"base-slider-controls-prev gallery-slider-thumbnails-controls-prev\"
                                                                                            aria-label=\"{{ 'general.previous'|trans|striptags }}\">
                                                                                        {% sw_icon 'arrow-head-left' %}
                                                                                    </button>
                                                                                    <button class=\"base-slider-controls-next gallery-slider-thumbnails-controls-next\"
                                                                                            aria-label=\"{{ 'general.next'|trans|striptags }}\">
                                                                                        {% sw_icon 'arrow-head-right' %}
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        {% endblock %}

                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails %}
                                                                            <div class=\"gallery-slider-thumbnails\"
                                                                                 data-gallery-slider-thumbnails=true>
                                                                                {% block element_image_gallery_inner_zoom_modal_thumbnails_items %}
                                                                                    {% for image in mediaItems %}
                                                                                        {% block element_image_gallery_inner_zoom_modal_thumbnails_item %}
                                                                                            <div class=\"gallery-slider-thumbnails-item\">
                                                                                                {% block element_image_gallery_inner_zoom_modal_thumbnails_item_inner %}
                                                                                                    <div class=\"gallery-slider-thumbnails-item-inner\">
                                                                                                        {% sw_thumbnails 'gallery-slider-thumbnails-image-thumbnails' with {
                                                                                                            media: image,
                                                                                                            sizes: {
                                                                                                                'default': '200px'
                                                                                                            },
                                                                                                            attributes: {
                                                                                                                'class': 'gallery-slider-thumbnails-image js-load-img',
                                                                                                                'alt': (image.translated.alt ?: fallbackImageTitle),
                                                                                                                'title': (image.translated.title ?: fallbackImageTitle)
                                                                                                            },
                                                                                                            load: false
                                                                                                        } %}
                                                                                                    </div>
                                                                                                {% endblock %}
                                                                                            </div>
                                                                                        {% endblock %}
                                                                                    {% endfor %}
                                                                                {% endblock %}
                                                                            </div>
                                                                        {% endblock %}
                                                                    </div>
                                                                {% endblock %}
                                                            {% endif %}
                                                        </div>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}

            {% if config.verticalAlign.value %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-image-gallery.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image-gallery.html.twig");
    }
}
