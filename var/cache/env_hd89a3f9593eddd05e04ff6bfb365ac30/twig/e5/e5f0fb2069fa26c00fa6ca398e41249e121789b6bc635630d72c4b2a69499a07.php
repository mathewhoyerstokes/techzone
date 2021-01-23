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

/* @Storefront/storefront/component/pagination.html.twig */
class __TwigTemplate_930ca408a50d6b6507bcc9438790dda8e49c14bef44edffe56d1d9464e83e951 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_pagination_nav' => [$this, 'block_component_pagination_nav'],
            'component_pagination' => [$this, 'block_component_pagination'],
            'component_pagination_first' => [$this, 'block_component_pagination_first'],
            'component_pagination_first_input' => [$this, 'block_component_pagination_first_input'],
            'component_pagination_first_label' => [$this, 'block_component_pagination_first_label'],
            'component_pagination_first_link' => [$this, 'block_component_pagination_first_link'],
            'component_pagination_prev' => [$this, 'block_component_pagination_prev'],
            'component_pagination_prev_input' => [$this, 'block_component_pagination_prev_input'],
            'component_pagination_prev_label' => [$this, 'block_component_pagination_prev_label'],
            'component_pagination_prev_link' => [$this, 'block_component_pagination_prev_link'],
            'component_pagination_prev_icon' => [$this, 'block_component_pagination_prev_icon'],
            'component_pagination_loop' => [$this, 'block_component_pagination_loop'],
            'component_pagination_item' => [$this, 'block_component_pagination_item'],
            'component_pagination_item_input' => [$this, 'block_component_pagination_item_input'],
            'component_pagination_item_label' => [$this, 'block_component_pagination_item_label'],
            'component_pagination_item_link' => [$this, 'block_component_pagination_item_link'],
            'component_pagination_item_text' => [$this, 'block_component_pagination_item_text'],
            'component_pagination_next' => [$this, 'block_component_pagination_next'],
            'component_pagination_next_input' => [$this, 'block_component_pagination_next_input'],
            'component_pagination_next_label' => [$this, 'block_component_pagination_next_label'],
            'component_pagination_next_link' => [$this, 'block_component_pagination_next_link'],
            'component_pagination_next_icon' => [$this, 'block_component_pagination_next_icon'],
            'component_pagination_last' => [$this, 'block_component_pagination_last'],
            'component_pagination_last_input' => [$this, 'block_component_pagination_last_input'],
            'component_pagination_last_label' => [$this, 'block_component_pagination_last_label'],
            'component_pagination_last_link' => [$this, 'block_component_pagination_last_link'],
            'component_pagination_last_icon' => [$this, 'block_component_pagination_last_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pagination.html.twig"));

        // line 1
        $this->displayBlock('component_pagination_nav', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_pagination_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_nav"));

        // line 2
        echo "    ";
        $context["currentPage"] = twig_round(((twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "offset", [], "any", false, false, false, 2) + 1) / twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 2)), 0, "ceil");
        // line 3
        echo "    ";
        $context["totalPages"] = twig_round((twig_get_attribute($this->env, $this->source, ($context["entities"] ?? null), "total", [], "any", false, false, false, 3) / twig_get_attribute($this->env, $this->source, ($context["criteria"] ?? null), "limit", [], "any", false, false, false, 3)), 0, "ceil");
        // line 4
        echo "
    ";
        // line 5
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 6
            echo "        <nav aria-label=\"pagination\" class=\"pagination-nav\">
            ";
            // line 7
            $this->displayBlock('component_pagination', $context, $blocks);
            // line 154
            echo "        </nav>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_component_pagination($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination"));

        // line 8
        echo "            <ul class=\"pagination\">
                ";
        // line 9
        $this->displayBlock('component_pagination_first', $context, $blocks);
        // line 30
        echo "
                ";
        // line 31
        $this->displayBlock('component_pagination_prev', $context, $blocks);
        // line 54
        echo "
                ";
        // line 55
        $this->displayBlock('component_pagination_loop', $context, $blocks);
        // line 101
        echo "
                ";
        // line 102
        $this->displayBlock('component_pagination_next', $context, $blocks);
        // line 125
        echo "
                ";
        // line 126
        $this->displayBlock('component_pagination_last', $context, $blocks);
        // line 152
        echo "            </ul>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_component_pagination_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first"));

        // line 10
        echo "                    <li class=\"page-item page-first";
        if ((($context["currentPage"] ?? null) == 1)) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 11
        $this->displayBlock('component_pagination_first_input', $context, $blocks);
        // line 20
        echo "
                        ";
        // line 21
        $this->displayBlock('component_pagination_first_label', $context, $blocks);
        // line 28
        echo "                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_component_pagination_first_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_input"));

        // line 12
        echo "                            <input type=\"radio\"
                                   ";
        // line 13
        if ((($context["currentPage"] ?? null) == 1)) {
            echo "disabled=\"disabled\"";
        }
        // line 14
        echo "                                   name=\"p\"
                                   id=\"p-first\"
                                   value=\"1\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_component_pagination_first_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_label"));

        // line 22
        echo "                            <label class=\"page-link\" for=\"p-first\">
                                ";
        // line 23
        $this->displayBlock('component_pagination_first_link', $context, $blocks);
        // line 26
        echo "                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_component_pagination_first_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_first_link"));

        // line 24
        echo "                                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 24);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-left"]));
        // line 25
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_component_pagination_prev($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev"));

        // line 32
        echo "                    <li class=\"page-item page-prev";
        if ((($context["currentPage"] ?? null) == 1)) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 33
        $this->displayBlock('component_pagination_prev_input', $context, $blocks);
        // line 42
        echo "
                        ";
        // line 43
        $this->displayBlock('component_pagination_prev_label', $context, $blocks);
        // line 52
        echo "                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_component_pagination_prev_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_input"));

        // line 34
        echo "                            <input type=\"radio\"
                                   ";
        // line 35
        if ((($context["currentPage"] ?? null) == 1)) {
            echo "disabled=\"disabled\"";
        }
        // line 36
        echo "                                   name=\"p\"
                                   id=\"p-prev\"
                                   value=\"";
        // line 38
        echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) - 1), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_component_pagination_prev_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_label"));

        // line 44
        echo "                            <label class=\"page-link\" for=\"p-prev\">
                                ";
        // line 45
        $this->displayBlock('component_pagination_prev_link', $context, $blocks);
        // line 50
        echo "                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_component_pagination_prev_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_link"));

        // line 46
        echo "                                    ";
        $this->displayBlock('component_pagination_prev_icon', $context, $blocks);
        // line 49
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_component_pagination_prev_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_prev_icon"));

        // line 47
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 47);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-left"]));
        // line 48
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_component_pagination_loop($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_loop"));

        // line 56
        echo "                    ";
        $context["start"] = (($context["currentPage"] ?? null) - 2);
        // line 57
        echo "                    ";
        if ((($context["start"] ?? null) <= 0)) {
            // line 58
            echo "                        ";
            $context["start"] = (($context["currentPage"] ?? null) - 1);
            // line 59
            echo "                        ";
            if ((($context["start"] ?? null) <= 0)) {
                // line 60
                echo "                            ";
                $context["start"] = ($context["currentPage"] ?? null);
                // line 61
                echo "                        ";
            }
            // line 62
            echo "                    ";
        }
        // line 63
        echo "
                    ";
        // line 64
        $context["end"] = (($context["start"] ?? null) + 4);
        // line 65
        echo "
                    ";
        // line 66
        if ((($context["end"] ?? null) > ($context["totalPages"] ?? null))) {
            // line 67
            echo "                        ";
            $context["end"] = ($context["totalPages"] ?? null);
            // line 68
            echo "                    ";
        }
        // line 69
        echo "
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 71
            echo "
                        ";
            // line 72
            $context["isActive"] = (($context["currentPage"] ?? null) == $context["page"]);
            // line 73
            echo "
                        ";
            // line 74
            $this->displayBlock('component_pagination_item', $context, $blocks);
            // line 98
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_component_pagination_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item"));

        // line 75
        echo "                            <li class=\"page-item";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        echo "\">
                                ";
        // line 76
        $this->displayBlock('component_pagination_item_input', $context, $blocks);
        // line 85
        echo "
                                ";
        // line 86
        $this->displayBlock('component_pagination_item_label', $context, $blocks);
        // line 96
        echo "                            </li>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_component_pagination_item_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_input"));

        // line 77
        echo "                                    <input type=\"radio\"
                                           name=\"p\"
                                           id=\"p";
        // line 79
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\"
                                           value=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\"
                                           class=\"d-none\"
                                           title=\"pagination\"
                                           ";
        // line 83
        if (($context["isActive"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_component_pagination_item_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_label"));

        // line 87
        echo "                                    <label class=\"page-link\"
                                           for=\"p";
        // line 88
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "\">
                                        ";
        // line 89
        $this->displayBlock('component_pagination_item_link', $context, $blocks);
        // line 94
        echo "                                    </label>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_component_pagination_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_link"));

        // line 90
        echo "                                            ";
        $this->displayBlock('component_pagination_item_text', $context, $blocks);
        // line 93
        echo "                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_component_pagination_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_item_text"));

        // line 91
        echo "                                                ";
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_component_pagination_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next"));

        // line 103
        echo "                    <li class=\"page-item page-next";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 104
        $this->displayBlock('component_pagination_next_input', $context, $blocks);
        // line 113
        echo "
                        ";
        // line 114
        $this->displayBlock('component_pagination_next_label', $context, $blocks);
        // line 123
        echo "                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_component_pagination_next_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_input"));

        // line 105
        echo "                            <input type=\"radio\"
                                   ";
        // line 106
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 107
        echo "                                   name=\"p\"
                                   id=\"p-next\"
                                   value=\"";
        // line 109
        echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) + 1), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 114
    public function block_component_pagination_next_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_label"));

        // line 115
        echo "                            <label class=\"page-link\" for=\"p-next\">
                                ";
        // line 116
        $this->displayBlock('component_pagination_next_link', $context, $blocks);
        // line 121
        echo "                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_component_pagination_next_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_link"));

        // line 117
        echo "                                    ";
        $this->displayBlock('component_pagination_next_icon', $context, $blocks);
        // line 120
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_component_pagination_next_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_next_icon"));

        // line 118
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 118);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
        // line 119
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_component_pagination_last($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last"));

        // line 127
        echo "                    <li class=\"page-item page-last";
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo " disabled";
        }
        echo "\">
                        ";
        // line 128
        $this->displayBlock('component_pagination_last_input', $context, $blocks);
        // line 137
        echo "
                        ";
        // line 138
        $this->displayBlock('component_pagination_last_label', $context, $blocks);
        // line 150
        echo "                    </li>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_component_pagination_last_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_input"));

        // line 129
        echo "                            <input type=\"radio\"
                                   ";
        // line 130
        if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 131
        echo "                                   name=\"p\"
                                   id=\"p-last\"
                                   value=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["totalPages"] ?? null), "html", null, true);
        echo "\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 138
    public function block_component_pagination_last_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_label"));

        // line 139
        echo "                            <label class=\"page-link\" for=\"p-last\">
                                ";
        // line 140
        $this->displayBlock('component_pagination_last_link', $context, $blocks);
        // line 148
        echo "                            </label>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 140
    public function block_component_pagination_last_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_link"));

        // line 141
        echo "                                    ";
        $this->displayBlock('component_pagination_last_icon', $context, $blocks);
        // line 147
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 141
    public function block_component_pagination_last_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_pagination_last_icon"));

        // line 142
        echo "                                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pagination.html.twig", 142);
        })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-double-right"]));
        // line 146
        echo "                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  805 => 146,  796 => 142,  789 => 141,  782 => 147,  779 => 141,  772 => 140,  764 => 148,  762 => 140,  759 => 139,  752 => 138,  741 => 133,  737 => 131,  733 => 130,  730 => 129,  723 => 128,  715 => 150,  713 => 138,  710 => 137,  708 => 128,  701 => 127,  694 => 126,  687 => 119,  678 => 118,  671 => 117,  664 => 120,  661 => 117,  654 => 116,  646 => 121,  644 => 116,  641 => 115,  634 => 114,  623 => 109,  619 => 107,  615 => 106,  612 => 105,  605 => 104,  597 => 123,  595 => 114,  592 => 113,  590 => 104,  583 => 103,  576 => 102,  566 => 91,  559 => 90,  552 => 93,  549 => 90,  542 => 89,  534 => 94,  532 => 89,  528 => 88,  525 => 87,  518 => 86,  507 => 83,  501 => 80,  497 => 79,  493 => 77,  486 => 76,  478 => 96,  476 => 86,  473 => 85,  471 => 76,  464 => 75,  457 => 74,  450 => 100,  435 => 98,  433 => 74,  430 => 73,  428 => 72,  425 => 71,  408 => 70,  405 => 69,  402 => 68,  399 => 67,  397 => 66,  394 => 65,  392 => 64,  389 => 63,  386 => 62,  383 => 61,  380 => 60,  377 => 59,  374 => 58,  371 => 57,  368 => 56,  361 => 55,  354 => 48,  345 => 47,  338 => 46,  331 => 49,  328 => 46,  321 => 45,  313 => 50,  311 => 45,  308 => 44,  301 => 43,  290 => 38,  286 => 36,  282 => 35,  279 => 34,  272 => 33,  264 => 52,  262 => 43,  259 => 42,  257 => 33,  250 => 32,  243 => 31,  236 => 25,  227 => 24,  220 => 23,  212 => 26,  210 => 23,  207 => 22,  200 => 21,  188 => 14,  184 => 13,  181 => 12,  174 => 11,  166 => 28,  164 => 21,  161 => 20,  159 => 11,  152 => 10,  145 => 9,  137 => 152,  135 => 126,  132 => 125,  130 => 102,  127 => 101,  125 => 55,  122 => 54,  120 => 31,  117 => 30,  115 => 9,  112 => 8,  105 => 7,  96 => 154,  94 => 7,  91 => 6,  89 => 5,  86 => 4,  83 => 3,  80 => 2,  67 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_pagination_nav %}
    {% set currentPage = ((criteria.offset + 1) / criteria.limit )|round(0, 'ceil') %}
    {% set totalPages = (entities.total / criteria.limit)|round(0, 'ceil') %}

    {% if totalPages > 1 %}
        <nav aria-label=\"pagination\" class=\"pagination-nav\">
            {% block component_pagination %}
            <ul class=\"pagination\">
                {% block component_pagination_first %}
                    <li class=\"page-item page-first{% if currentPage == 1 %} disabled{% endif %}\">
                        {% block component_pagination_first_input %}
                            <input type=\"radio\"
                                   {% if currentPage == 1 %}disabled=\"disabled\"{% endif %}
                                   name=\"p\"
                                   id=\"p-first\"
                                   value=\"1\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        {% endblock %}

                        {% block component_pagination_first_label %}
                            <label class=\"page-link\" for=\"p-first\">
                                {% block component_pagination_first_link %}
                                    {% sw_icon 'arrow-medium-double-left' style { 'size': 'fluid', 'pack': 'solid'} %}
                                {% endblock %}
                            </label>
                        {% endblock %}
                    </li>
                {% endblock %}

                {% block component_pagination_prev %}
                    <li class=\"page-item page-prev{% if currentPage == 1 %} disabled{% endif %}\">
                        {% block component_pagination_prev_input %}
                            <input type=\"radio\"
                                   {% if currentPage == 1 %}disabled=\"disabled\"{% endif %}
                                   name=\"p\"
                                   id=\"p-prev\"
                                   value=\"{{ currentPage - 1 }}\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        {% endblock %}

                        {% block component_pagination_prev_label %}
                            <label class=\"page-link\" for=\"p-prev\">
                                {% block component_pagination_prev_link %}
                                    {% block component_pagination_prev_icon %}
                                        {% sw_icon 'arrow-medium-left' style {'size': 'fluid', 'pack': 'solid'} %}
                                    {% endblock %}
                                {% endblock %}
                            </label>
                        {% endblock %}
                    </li>
                {% endblock %}

                {% block component_pagination_loop %}
                    {% set start = currentPage - 2 %}
                    {% if start <= 0 %}
                        {% set start = currentPage - 1 %}
                        {% if start <= 0 %}
                            {% set start = currentPage %}
                        {% endif %}
                    {% endif %}

                    {% set end = start + 4 %}

                    {% if end > totalPages %}
                        {% set end = totalPages %}
                    {% endif %}

                    {% for page in start..end %}

                        {% set isActive = (currentPage == page) %}

                        {% block component_pagination_item %}
                            <li class=\"page-item{% if isActive %} active{% endif %}\">
                                {% block component_pagination_item_input %}
                                    <input type=\"radio\"
                                           name=\"p\"
                                           id=\"p{{ page }}\"
                                           value=\"{{ page }}\"
                                           class=\"d-none\"
                                           title=\"pagination\"
                                           {% if isActive %}checked=\"checked\"{% endif %}>
                                {% endblock %}

                                {% block component_pagination_item_label %}
                                    <label class=\"page-link\"
                                           for=\"p{{ page }}\">
                                        {% block component_pagination_item_link %}
                                            {% block component_pagination_item_text %}
                                                {{ page }}
                                            {% endblock %}
                                        {% endblock %}
                                    </label>
                                {% endblock %}
                            </li>
                        {% endblock %}

                    {% endfor %}
                {% endblock %}

                {% block component_pagination_next %}
                    <li class=\"page-item page-next{% if currentPage == totalPages %} disabled{% endif %}\">
                        {% block component_pagination_next_input %}
                            <input type=\"radio\"
                                   {% if currentPage == totalPages %}disabled=\"disabled\"{% endif %}
                                   name=\"p\"
                                   id=\"p-next\"
                                   value=\"{{ currentPage + 1 }}\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        {% endblock %}

                        {% block component_pagination_next_label %}
                            <label class=\"page-link\" for=\"p-next\">
                                {% block component_pagination_next_link %}
                                    {% block component_pagination_next_icon %}
                                        {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                                    {% endblock %}
                                {% endblock %}
                            </label>
                        {% endblock %}
                    </li>
                {% endblock %}

                {% block component_pagination_last %}
                    <li class=\"page-item page-last{% if currentPage == totalPages %} disabled{% endif %}\">
                        {% block component_pagination_last_input %}
                            <input type=\"radio\"
                                   {% if currentPage == totalPages %}disabled=\"disabled\"{% endif %}
                                   name=\"p\"
                                   id=\"p-last\"
                                   value=\"{{ totalPages }}\"
                                   class=\"d-none\"
                                   title=\"pagination\">
                        {% endblock %}

                        {% block component_pagination_last_label %}
                            <label class=\"page-link\" for=\"p-last\">
                                {% block component_pagination_last_link %}
                                    {% block component_pagination_last_icon %}
                                        {% sw_icon 'arrow-medium-double-right' style {
                                            'size': 'fluid',
                                            'pack': 'solid'
                                        } %}
                                    {% endblock %}
                                {% endblock %}
                            </label>
                        {% endblock %}
                    </li>
                {% endblock %}
            </ul>
        {% endblock %}
        </nav>
    {% endif %}
{% endblock %}
", "@Storefront/storefront/component/pagination.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/pagination.html.twig");
    }
}
