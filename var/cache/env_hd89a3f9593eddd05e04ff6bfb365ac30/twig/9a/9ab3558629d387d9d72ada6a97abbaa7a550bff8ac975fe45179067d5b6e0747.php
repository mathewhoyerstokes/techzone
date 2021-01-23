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

/* @Storefront/storefront/page/checkout/finish/index.html.twig */
class __TwigTemplate_dea7be79376f421d1150c50d8c48efb8cb330a3126f10d9d6fdbcbe73dddb46b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_header' => [$this, 'block_base_header'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'page_checkout_main_content' => [$this, 'block_page_checkout_main_content'],
            'base_flashbags_checkout' => [$this, 'block_base_flashbags_checkout'],
            'page_checkout_finish' => [$this, 'block_page_checkout_finish'],
            'page_checkout_finish_details' => [$this, 'block_page_checkout_finish_details'],
            'page_checkout_finish_product_table' => [$this, 'block_page_checkout_finish_product_table'],
            'page_checkout_finish_table_header' => [$this, 'block_page_checkout_finish_table_header'],
            'page_checkout_finish_items' => [$this, 'block_page_checkout_finish_items'],
            'page_checkout_finish_item' => [$this, 'block_page_checkout_finish_item'],
            'page_checkout_additional' => [$this, 'block_page_checkout_additional'],
            'page_checkout_finish_customer_comment' => [$this, 'block_page_checkout_finish_customer_comment'],
            'page_checkout_finish_customer_comment_header' => [$this, 'block_page_checkout_finish_customer_comment_header'],
            'page_checkout_finish_customer_comment_content' => [$this, 'block_page_checkout_finish_customer_comment_content'],
            'base_footer' => [$this, 'block_base_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/checkout/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/checkout/finish/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/checkout/_page.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_header"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/header/header-minimal.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_navigation"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_checkout_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_main_content"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('base_flashbags_checkout', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('page_checkout_finish', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_base_flashbags_checkout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_flashbags_checkout"));

        // line 12
        echo "        <div class=\"flashbags\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 13));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 14
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 14)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 15
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_page_checkout_finish($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish"));

        // line 20
        echo "        ";
        $this->displayBlock('page_checkout_finish_details', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('page_checkout_finish_product_table', $context, $blocks);
        // line 41
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_page_checkout_finish_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_details"));

        // line 21
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/finish/finish-details.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_page_checkout_finish_product_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_product_table"));

        // line 25
        echo "            <div class=\"card checkout-product-table\">
                <div class=\"card-body\">
                    ";
        // line 27
        $this->displayBlock('page_checkout_finish_table_header', $context, $blocks);
        // line 30
        echo "
                    ";
        // line 31
        $this->displayBlock('page_checkout_finish_items', $context, $blocks);
        // line 38
        echo "                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_page_checkout_finish_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_table_header"));

        // line 28
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 28)->display($context);
        // line 29
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_page_checkout_finish_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_items"));

        // line 32
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 32), "nestedLineItems", [], "any", false, false, false, 32));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 33
            echo "                            ";
            $this->displayBlock('page_checkout_finish_item', $context, $blocks);
            // line 36
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_page_checkout_finish_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_item"));

        // line 34
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/page/checkout/finish/finish-item.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 34)->display($context);
        // line 35
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_page_checkout_additional($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_additional"));

        // line 45
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 45), "customerComment", [], "any", false, false, false, 45)) {
            // line 46
            echo "        <div class=\"checkout-additional\">
            ";
            // line 47
            $this->displayBlock('page_checkout_finish_customer_comment', $context, $blocks);
            // line 62
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_page_checkout_finish_customer_comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_customer_comment"));

        // line 48
        echo "                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        ";
        // line 50
        $this->displayBlock('page_checkout_finish_customer_comment_header', $context, $blocks);
        // line 55
        echo "
                        ";
        // line 56
        $this->displayBlock('page_checkout_finish_customer_comment_content', $context, $blocks);
        // line 59
        echo "                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_page_checkout_finish_customer_comment_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_customer_comment_header"));

        // line 51
        echo "                            <div class=\"card-title\">
                                ";
        // line 52
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.customerCommentHeader"));
        echo "
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_page_checkout_finish_customer_comment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_checkout_finish_customer_comment_content"));

        // line 57
        echo "                            <div class=\"checkout-customer-comment-control\">";
        echo nl2br($this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "order", [], "any", false, false, false, 57), "customerComment", [], "any", false, false, false, 57)));
        echo "</div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_footer"));

        // line 67
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer-minimal.html.twig", "@Storefront/storefront/page/checkout/finish/index.html.twig", 67)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/checkout/finish/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 67,  404 => 66,  394 => 57,  387 => 56,  377 => 52,  374 => 51,  367 => 50,  358 => 59,  356 => 56,  353 => 55,  351 => 50,  347 => 48,  340 => 47,  331 => 62,  329 => 47,  326 => 46,  323 => 45,  316 => 44,  309 => 35,  306 => 34,  299 => 33,  292 => 37,  278 => 36,  275 => 33,  257 => 32,  250 => 31,  243 => 29,  240 => 28,  233 => 27,  224 => 38,  222 => 31,  219 => 30,  217 => 27,  213 => 25,  206 => 24,  199 => 22,  196 => 21,  189 => 20,  182 => 41,  180 => 24,  177 => 23,  174 => 20,  167 => 19,  159 => 16,  145 => 15,  142 => 14,  125 => 13,  122 => 12,  115 => 11,  108 => 19,  105 => 18,  103 => 11,  100 => 10,  93 => 9,  81 => 7,  73 => 4,  66 => 3,  49 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/checkout/_page.html.twig' %}

{% block base_header %}
    {% sw_include '@Storefront/storefront/layout/header/header-minimal.html.twig' %}
{% endblock %}

{% block base_navigation %}{% endblock %}

{% block page_checkout_main_content %}

    {% block base_flashbags_checkout %}
        <div class=\"flashbags\">
            {% for type, messages in app.flashes %}
                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with { type: type, list: messages } %}
            {% endfor %}
        </div>
    {% endblock %}

    {% block page_checkout_finish %}
        {% block page_checkout_finish_details %}
            {% sw_include '@Storefront/storefront/page/checkout/finish/finish-details.html.twig' %}
        {% endblock %}

        {% block page_checkout_finish_product_table %}
            <div class=\"card checkout-product-table\">
                <div class=\"card-body\">
                    {% block page_checkout_finish_table_header %}
                        {% sw_include '@Storefront/storefront/page/checkout/confirm/confirm-product-header.html.twig' %}
                    {% endblock %}

                    {% block page_checkout_finish_items %}
                        {% for lineItem in page.order.nestedLineItems %}
                            {% block page_checkout_finish_item %}
                                {% sw_include '@Storefront/storefront/page/checkout/finish/finish-item.html.twig' %}
                            {% endblock %}
                        {% endfor %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}
    {% endblock %}
{% endblock %}

{% block page_checkout_additional %}
    {% if page.order.customerComment %}
        <div class=\"checkout-additional\">
            {% block page_checkout_finish_customer_comment %}
                <div class=\"card checkout-card\">
                    <div class=\"card-body\">
                        {% block page_checkout_finish_customer_comment_header %}
                            <div class=\"card-title\">
                                {{ \"checkout.customerCommentHeader\"|trans|sw_sanitize }}
                            </div>
                        {% endblock %}

                        {% block page_checkout_finish_customer_comment_content %}
                            <div class=\"checkout-customer-comment-control\">{{ page.order.customerComment|sw_sanitize|nl2br }}</div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    {% endif %}
{% endblock %}

{% block base_footer %}
    {% sw_include '@Storefront/storefront/layout/footer/footer-minimal.html.twig' %}
{% endblock %}
", "@Storefront/storefront/page/checkout/finish/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/checkout/finish/index.html.twig");
    }
}
