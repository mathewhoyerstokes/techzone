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

/* @Storefront/storefront/component/feature.html.twig */
class __TwigTemplate_e0b53725215878ca5c7bf36515d6e30cf67cd0aed7b51d13162b9d8626e5b39d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_feature' => [$this, 'block_component_head_feature'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_head_feature', $context, $blocks);
    }

    public function block_component_head_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <script>
        window.features = ";
        // line 3
        echo json_encode($this->extensions['Shopware\Core\Framework\Adapter\Twig\FeatureFlagExtension']->getAll());
        echo ";
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/feature.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/feature.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/feature.html.twig");
    }
}
