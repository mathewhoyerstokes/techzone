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

/* @Storefront/storefront/component/payment/payment-fields.html.twig */
class __TwigTemplate_32ad04753aea4ffbdf01690efb2a5a201204e2f6e25bfcbf677b3f3c769be565 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_payment_methods' => [$this, 'block_component_payment_methods'],
            'component_payment_method' => [$this, 'block_component_payment_method'],
            'component_payment_method_field' => [$this, 'block_component_payment_method_field'],
            'component_payment_method_control' => [$this, 'block_component_payment_method_control'],
            'component_payment_method_input' => [$this, 'block_component_payment_method_input'],
            'component_payment_method_label' => [$this, 'block_component_payment_method_label'],
            'component_payment_method_image' => [$this, 'block_component_payment_method_image'],
            'component_payment_method_description' => [$this, 'block_component_payment_method_description'],
            'component_payment_fieldset_template' => [$this, 'block_component_payment_fieldset_template'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/payment/payment-fields.html.twig"));

        // line 1
        $this->displayBlock('component_payment_methods', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_payment_methods($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_methods"));

        // line 2
        echo "    <div class=\"payment-methods\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paymentMethods", [], "any", false, false, false, 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 4
            echo "
            ";
            // line 6
            echo "            ";
            $this->displayBlock('component_payment_method', $context, $blocks);
            // line 58
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_component_payment_method($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method"));

        // line 7
        echo "                <div class=\"payment-method\">
                    ";
        // line 8
        $this->displayBlock('component_payment_method_field', $context, $blocks);
        // line 54
        echo "
                    ";
        // line 55
        $this->displayBlock('component_payment_fieldset_template', $context, $blocks);
        // line 56
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_component_payment_method_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method_field"));

        // line 9
        echo "                        <div class=\"payment-form-group form-group\">
                            ";
        // line 10
        $this->displayBlock('component_payment_method_control', $context, $blocks);
        // line 52
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_component_payment_method_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method_control"));

        // line 11
        echo "                                <div class=\"custom-control custom-radio payment-control\">
                                    ";
        // line 12
        $this->displayBlock('component_payment_method_input', $context, $blocks);
        // line 20
        echo "
                                    ";
        // line 21
        $this->displayBlock('component_payment_method_label', $context, $blocks);
        // line 50
        echo "                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_component_payment_method_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method_input"));

        // line 13
        echo "                                        <input type=\"radio\"
                                               id=\"paymentMethod";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 14), "html", null, true);
        echo "\"
                                               name=\"paymentMethodId\"
                                               value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\"
                                               ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "id", [], "any", false, false, false, 17) === ($context["defaultPaymentMethodId"] ?? null))) {
            echo "checked=\"checked\"";
        }
        // line 18
        echo "                                               class=\"custom-control-input payment-method-input\">
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_component_payment_method_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method_label"));

        // line 22
        echo "                                        <label class=\"custom-control-label payment-method-label\"
                                               for=\"paymentMethod";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                                            ";
        // line 24
        $this->displayBlock('component_payment_method_image', $context, $blocks);
        // line 39
        echo "
                                            ";
        // line 40
        $this->displayBlock('component_payment_method_description', $context, $blocks);
        // line 48
        echo "                                        </label>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_component_payment_method_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method_image"));

        // line 25
        echo "                                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "media", [], "any", false, false, false, 25)) {
            // line 26
            echo "                                                    ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/payment/payment-fields.html.twig", 26);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 27
($context["payment"] ?? null), "media", [], "any", false, false, false, 27), "sizes" => ["default" => "100px"], "attributes" => ["class" => "payment-method-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["payment"] ?? null), "media", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "media", [], "any", false, false, false, 33), "translated", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["payment"] ?? null), "media", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "media", [], "any", false, false, false, 34), "translated", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34)))], "name" => "payment-method-image-thumbnails"]));
            // line 37
            echo "                                                ";
        }
        // line 38
        echo "                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_component_payment_method_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_method_description"));

        // line 41
        echo "                                                <div class=\"payment-method-description\">
                                                    <strong>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "</strong>
                                                    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 43), "description", [], "any", false, false, false, 43)) {
            // line 44
            echo "                                                        <p>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "translated", [], "any", false, false, false, 44), "description", [], "any", false, false, false, 44);
            echo "</p>
                                                    ";
        }
        // line 46
        echo "                                                </div>
                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_component_payment_fieldset_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_payment_fieldset_template"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/payment/payment-fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  302 => 55,  294 => 46,  288 => 44,  286 => 43,  282 => 42,  279 => 41,  272 => 40,  265 => 38,  262 => 37,  260 => 34,  259 => 33,  258 => 27,  250 => 26,  247 => 25,  240 => 24,  232 => 48,  230 => 40,  227 => 39,  225 => 24,  221 => 23,  218 => 22,  211 => 21,  203 => 18,  199 => 17,  195 => 16,  190 => 14,  187 => 13,  180 => 12,  172 => 50,  170 => 21,  167 => 20,  165 => 12,  162 => 11,  155 => 10,  147 => 52,  145 => 10,  142 => 9,  135 => 8,  127 => 56,  125 => 55,  122 => 54,  120 => 8,  117 => 7,  110 => 6,  102 => 59,  88 => 58,  85 => 6,  82 => 4,  65 => 3,  62 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_payment_methods %}
    <div class=\"payment-methods\">
        {% for payment in page.paymentMethods %}

            {# @deprecated tag:v6.4.0.0 moved to new component/payment/payment-method.html.twig #}
            {% block component_payment_method %}
                <div class=\"payment-method\">
                    {% block component_payment_method_field %}
                        <div class=\"payment-form-group form-group\">
                            {% block component_payment_method_control %}
                                <div class=\"custom-control custom-radio payment-control\">
                                    {% block component_payment_method_input %}
                                        <input type=\"radio\"
                                               id=\"paymentMethod{{ loop.index }}\"
                                               name=\"paymentMethodId\"
                                               value=\"{{ payment.id }}\"
                                               {% if payment.id is same as(defaultPaymentMethodId) %}checked=\"checked\"{% endif %}
                                               class=\"custom-control-input payment-method-input\">
                                    {% endblock %}

                                    {% block component_payment_method_label %}
                                        <label class=\"custom-control-label payment-method-label\"
                                               for=\"paymentMethod{{ loop.index }}\">
                                            {% block component_payment_method_image %}
                                                {% if payment.media %}
                                                    {% sw_thumbnails 'payment-method-image-thumbnails' with {
                                                        media: payment.media,
                                                        sizes: {
                                                            'default': '100px'
                                                        },
                                                        attributes: {
                                                            'class': 'payment-method-image',
                                                            'alt': (payment.media.translated.alt ?: payment.translated.name),
                                                            'title': (payment.media.translated.title ?: payment.translated.name)
                                                        }
                                                    } %}
                                                {% endif %}
                                            {% endblock %}

                                            {% block component_payment_method_description %}
                                                <div class=\"payment-method-description\">
                                                    <strong>{{ payment.translated.name }}</strong>
                                                    {% if payment.translated.description %}
                                                        <p>{{ payment.translated.description|raw }}</p>
                                                    {% endif %}
                                                </div>
                                            {% endblock %}
                                        </label>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_payment_fieldset_template %}{% endblock %}
                </div>
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/payment/payment-fields.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/component/payment/payment-fields.html.twig");
    }
}
