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

/* @Storefront/storefront/block/cms-block-image-text.html.twig */
class __TwigTemplate_0a71d9fef2783652684ed5ef5d1783b8e082118aa656055e2e8a6b3eddcee1d9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_text' => [$this, 'block_block_image_text'],
            'block_image_text_left' => [$this, 'block_block_image_text_left'],
            'block_image_text_left_inner' => [$this, 'block_block_image_text_left_inner'],
            'block_image_text_right' => [$this, 'block_block_image_text_right'],
            'block_image_text_right_inner' => [$this, 'block_block_image_text_right_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-image-text.html.twig"));

        // line 1
        $this->displayBlock('block_image_text', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_block_image_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text"));

        // line 2
        echo "    ";
        $context["columns"] = 2;
        // line 3
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 3);
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('block_image_text_left', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('block_image_text_right', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_block_image_text_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_left"));

        // line 6
        echo "        ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 6), "getSlot", [0 => "left"], "method", false, false, false, 6);
        // line 7
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 9
        $this->displayBlock('block_image_text_left_inner', $context, $blocks);
        // line 12
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_block_image_text_left_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_left_inner"));

        // line 10
        echo "                ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 10)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 10);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 11
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_block_image_text_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_right"));

        // line 16
        echo "        ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 16), "getSlot", [0 => "right"], "method", false, false, false, 16);
        // line 17
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 19
        $this->displayBlock('block_image_text_right_inner', $context, $blocks);
        // line 22
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_block_image_text_right_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_right_inner"));

        // line 20
        echo "                ";
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 20)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 20);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
        }
        // line 21
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-text.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 21,  171 => 20,  164 => 19,  156 => 22,  154 => 19,  150 => 18,  147 => 17,  144 => 16,  137 => 15,  130 => 11,  113 => 10,  106 => 9,  98 => 12,  96 => 9,  92 => 8,  89 => 7,  86 => 6,  79 => 5,  72 => 15,  69 => 14,  67 => 5,  64 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block block_image_text %}
    {% set columns = 2 %}
    {% set id = element.id %}

    {% block block_image_text_left %}
        {% set element = block.slots.getSlot('left') %}

        <div class=\"col-md-6\" data-cms-element-id=\"{{ id }}\">
            {% block block_image_text_left_inner %}
                {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block block_image_text_right %}
        {% set element = block.slots.getSlot('right') %}

        <div class=\"col-md-6\" data-cms-element-id=\"{{ id }}\">
            {% block block_image_text_right_inner %}
                {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/block/cms-block-image-text.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-text.html.twig");
    }
}
