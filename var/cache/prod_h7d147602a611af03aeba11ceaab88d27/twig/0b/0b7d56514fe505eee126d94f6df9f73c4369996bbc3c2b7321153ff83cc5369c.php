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

/* @Techzone/storefront/layout/header/logo.html.twig */
class __TwigTemplate_e14c4d422947d3e1c99efb73352c237b3e5befb3ebcd7818a0ab2e62662ea496 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header_logo_link' => [$this, 'block_layout_header_logo_link'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/logo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@Techzone/storefront/layout/header/logo.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_layout_header_logo_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 11
        echo "    ";
        $this->displayParentBlock("layout_header_logo_link", $context, $blocks);
        echo "

    ";
        // line 14
        echo "    <span>test</span>

";
    }

    public function getTemplateName()
    {
        return "@Techzone/storefront/layout/header/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 11,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Techzone/storefront/layout/header/logo.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/custom/plugins/Techzone/src/Resources/views/storefront/layout/header/logo.html.twig");
    }
}
