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

/* @Storefront/storefront/utilities/offcanvas.html.twig */
class __TwigTemplate_4d58b95e91da9fcdc8e013b83ff2e498dfe09794a20c4216f26e6f02d8b4fe7d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas' => [$this, 'block_utilities_offcanvas'],
            'utilities_offcanvas_close' => [$this, 'block_utilities_offcanvas_close'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_content_container' => [$this, 'block_utilities_offcanvas_content_container'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isAjaxOffcanvas"] = false;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('utilities_offcanvas_meta', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('utilities_offcanvas', $context, $blocks);
    }

    // line 3
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 5), "xmlHttpRequest", [], "any", false, false, false, 5) && ($context["isAjaxOffcanvas"] ?? null))) {
            // line 6
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/utilities/offcanvas.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
    }

    // line 10
    public function block_utilities_offcanvas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayBlock('utilities_offcanvas_close', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('utilities_offcanvas_content_container', $context, $blocks);
    }

    // line 11
    public function block_utilities_offcanvas_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <button class=\"btn btn-light btn-block offcanvas-close js-offcanvas-close sticky-top\">
            ";
        // line 13
        $this->displayBlock('utilities_offcanvas_close_icon', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('utilities_offcanvas_close_text', $context, $blocks);
        // line 20
        echo "        </button>
    ";
    }

    // line 13
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/offcanvas.html.twig", 14);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 15
        echo "            ";
    }

    // line 17
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.offcanvasCloseMenu"));
        echo "
            ";
    }

    // line 23
    public function block_utilities_offcanvas_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "        <div class=\"offcanvas-content-container\">
            ";
        // line 25
        $this->displayBlock('utilities_offcanvas_content', $context, $blocks);
        // line 26
        echo "        </div>
    ";
    }

    // line 25
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 25,  145 => 26,  143 => 25,  140 => 24,  136 => 23,  129 => 18,  125 => 17,  121 => 15,  112 => 14,  108 => 13,  103 => 20,  101 => 17,  98 => 16,  96 => 13,  93 => 12,  89 => 11,  85 => 23,  82 => 22,  79 => 11,  75 => 10,  70 => 7,  67 => 6,  64 => 5,  62 => 4,  58 => 3,  54 => 10,  51 => 9,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/offcanvas.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/utilities/offcanvas.html.twig");
    }
}
