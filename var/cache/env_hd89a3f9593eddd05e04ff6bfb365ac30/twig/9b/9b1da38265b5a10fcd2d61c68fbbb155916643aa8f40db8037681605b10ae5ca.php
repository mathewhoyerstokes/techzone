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

/* @Storefront/storefront/section/cms-section-sidebar.html.twig */
class __TwigTemplate_e4af1b4cc0f48b719b5117e771adc5b821638642dd78d6a957d1e7009b3afb6a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content_section_sidebar' => [$this, 'block_page_content_section_sidebar'],
            'section_sidebar_content' => [$this, 'block_section_sidebar_content'],
            'section_sidebar_content_block' => [$this, 'block_section_sidebar_content_block'],
            'section_main_content' => [$this, 'block_section_main_content'],
            'section_main_content_block' => [$this, 'block_section_main_content_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-sidebar.html.twig"));

        // line 1
        $this->displayBlock('page_content_section_sidebar', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_content_section_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section_sidebar"));

        // line 2
        echo "    ";
        $context["sectionMobileBehaviorClass"] = ("cms-section-sidebar-mobile-" . twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "mobileBehavior", [], "any", false, false, false, 2));
        // line 3
        echo "    ";
        $context["layout"] = ((twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 3)) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 3), ["_" => "-"])) : ("container"));
        // line 4
        echo "
    <div class=\"cms-section-sidebar ";
        // line 5
        echo twig_escape_filter($this->env, ($context["sectionMobileBehaviorClass"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo " row\">

        ";
        // line 7
        $context["sidebarBlocks"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "blocks", [], "any", false, false, false, 7), "filterBySectionPosition", [0 => "sidebar"], "method", false, false, false, 7);
        // line 8
        echo "        ";
        $context["mainContentBlocks"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "blocks", [], "any", false, false, false, 8), "filterBySectionPosition", [0 => "main"], "method", false, false, false, 8);
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('section_sidebar_content', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('section_main_content', $context, $blocks);
        // line 31
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_section_sidebar_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_sidebar_content"));

        // line 11
        echo "            <div class=\"cms-section-sidebar-sidebar-content col-lg-4 col-xl-3\">

                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sidebarBlocks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 14
            echo "                    ";
            $this->displayBlock('section_sidebar_content_block', $context, $blocks);
            // line 17
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_section_sidebar_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_sidebar_content_block"));

        // line 15
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/section/cms-section-block-container.html.twig", "@Storefront/storefront/section/cms-section-sidebar.html.twig", 15)->display($context);
        // line 16
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_section_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_main_content"));

        // line 22
        echo "            <div class=\"cms-section-sidebar-main-content col-lg-8 col-xl-9\">

                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mainContentBlocks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 25
            echo "                    ";
            $this->displayBlock('section_main_content_block', $context, $blocks);
            // line 28
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_section_main_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_main_content_block"));

        // line 26
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/section/cms-section-block-container.html.twig", "@Storefront/storefront/section/cms-section-sidebar.html.twig", 26)->display($context);
        // line 27
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 27,  227 => 26,  220 => 25,  212 => 29,  198 => 28,  195 => 25,  178 => 24,  174 => 22,  167 => 21,  160 => 16,  157 => 15,  150 => 14,  142 => 18,  128 => 17,  125 => 14,  108 => 13,  104 => 11,  97 => 10,  89 => 31,  87 => 21,  84 => 20,  82 => 10,  79 => 9,  76 => 8,  74 => 7,  67 => 5,  64 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_content_section_sidebar %}
    {% set sectionMobileBehaviorClass = 'cms-section-sidebar-mobile-' ~ section.mobileBehavior %}
    {% set layout = section.sizingMode ? section.sizingMode|replace({\"_\": \"-\"}) : \"container\" %}

    <div class=\"cms-section-sidebar {{ sectionMobileBehaviorClass }} {{ layout }} row\">

        {% set sidebarBlocks = section.blocks.filterBySectionPosition('sidebar') %}
        {% set mainContentBlocks = section.blocks.filterBySectionPosition('main') %}

        {% block section_sidebar_content %}
            <div class=\"cms-section-sidebar-sidebar-content col-lg-4 col-xl-3\">

                {% for block in sidebarBlocks %}
                    {% block section_sidebar_content_block %}
                        {% sw_include \"@Storefront/storefront/section/cms-section-block-container.html.twig\" %}
                    {% endblock %}
                {% endfor %}
            </div>
        {% endblock %}

        {% block section_main_content %}
            <div class=\"cms-section-sidebar-main-content col-lg-8 col-xl-9\">

                {% for block in mainContentBlocks %}
                    {% block section_main_content_block %}
                        {% sw_include \"@Storefront/storefront/section/cms-section-block-container.html.twig\" %}
                    {% endblock %}
                {% endfor %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/section/cms-section-sidebar.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-sidebar.html.twig");
    }
}
