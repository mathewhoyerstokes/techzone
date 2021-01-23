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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_0672a14e8c3deb56baca3602dbbf0237deab058d236a1aa441d148ff464c0316 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container-main\">
        ";
        // line 5
        $this->displayBlock('page_content', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 5
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        // line 7
        echo "            <div class=\"breadcrumb cms-breadcrumb cms-breadcrump container\">
                ";
        // line 8
        $this->displayBlock('cms_breadcrumb', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"cms-page\">
                ";
        // line 18
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 21
        echo "            </div>
        ";
    }

    // line 8
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    ";
        // line 10
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/listing/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 10)->display(twig_to_array(["context" =>         // line 11
($context["context"] ?? null), "navigationTree" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["page"] ?? null), "header", [], "any", false, false, false, 12), "navigation", [], "any", false, false, false, 12), "tree", [], "any", false, false, false, 12), "category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["page"] ?? null), "header", [], "any", false, false, false, 13), "navigation", [], "any", false, false, false, 13), "active", [], "any", false, false, false, 13)]));
        // line 15
        echo "                ";
    }

    // line 18
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 19)->display(twig_array_merge($context, ["cmsPage" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 19)]));
        // line 20
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  105 => 19,  101 => 18,  97 => 15,  95 => 13,  94 => 12,  93 => 11,  91 => 10,  89 => 9,  85 => 8,  80 => 21,  78 => 18,  74 => 16,  72 => 8,  69 => 7,  67 => 6,  63 => 5,  58 => 23,  56 => 5,  53 => 4,  49 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/content/index.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
