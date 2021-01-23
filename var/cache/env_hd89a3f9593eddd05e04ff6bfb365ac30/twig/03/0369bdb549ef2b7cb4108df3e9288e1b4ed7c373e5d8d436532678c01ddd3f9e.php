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

/* @Storefront/storefront/utilities/alert.html.twig */
class __TwigTemplate_1fb31c827e0da8bf576eaf925e95ee575dfd6d3b2b1f97c72037259068761992 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_alert' => [$this, 'block_utilities_alert'],
            'utilities_alert_icon' => [$this, 'block_utilities_alert_icon'],
            'utilities_alert_content_container' => [$this, 'block_utilities_alert_content_container'],
            'utilities_alert_heading' => [$this, 'block_utilities_alert_heading'],
            'utilities_alert_content' => [$this, 'block_utilities_alert_content'],
            'utilities_alert_dismissible' => [$this, 'block_utilities_alert_dismissible'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/alert.html.twig"));

        // line 75
        echo "
";
        // line 76
        $this->displayBlock('utilities_alert', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_utilities_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert"));

        // line 77
        echo "    <div role=\"alert\"
         class=\"alert ";
        // line 78
        if (($context["type"] ?? null)) {
            echo "alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        }
        if (($context["dismissible"] ?? null)) {
            echo " alert-dismissible fade show";
        }
        if ((($context["icon"] ?? null) != "error")) {
            echo " alert-has-icon";
        }
        echo "\">
        ";
        // line 79
        $this->displayBlock('utilities_alert_icon', $context, $blocks);
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('utilities_alert_content_container', $context, $blocks);
        // line 135
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_utilities_alert_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_icon"));

        // line 80
        echo "            ";
        if ((($context["icon"] ?? null) != "false")) {
            // line 81
            echo "                ";
            if ((($context["type"] ?? null) == "danger")) {
                // line 82
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 82);
                })())->display(twig_array_merge($context, ["name" => "blocked"]));
                // line 83
                echo "                ";
            } elseif ((($context["type"] ?? null) == "warning")) {
                // line 84
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 84);
                })())->display(twig_array_merge($context, ["name" => "warning"]));
                // line 85
                echo "                ";
            } elseif ((($context["type"] ?? null) == "info")) {
                // line 86
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 86);
                })())->display(twig_array_merge($context, ["name" => "info"]));
                // line 87
                echo "                ";
            } elseif ((($context["type"] ?? null) == "success")) {
                // line 88
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 88);
                })())->display(twig_array_merge($context, ["name" => "checkmark-circle"]));
                // line 89
                echo "                ";
            } else {
                // line 90
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 90);
                })())->display(twig_array_merge($context, ["name" => "alert"]));
                // line 91
                echo "                ";
            }
            // line 92
            echo "            ";
        }
        // line 93
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_utilities_alert_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_content_container"));

        // line 96
        echo "            <div class=\"alert-content-container\">
                ";
        // line 97
        $this->displayBlock('utilities_alert_heading', $context, $blocks);
        // line 104
        echo "
                ";
        // line 105
        $this->displayBlock('utilities_alert_content', $context, $blocks);
        // line 122
        echo "
                ";
        // line 123
        $this->displayBlock('utilities_alert_dismissible', $context, $blocks);
        // line 133
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_utilities_alert_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_heading"));

        // line 98
        echo "                    ";
        if (($context["heading"] ?? null)) {
            // line 99
            echo "                        <div class=\"alert-heading h5\">
                            ";
            // line 100
            echo twig_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 103
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 105
    public function block_utilities_alert_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_content"));

        // line 106
        echo "                    <div class=\"alert-content\">
                        ";
        // line 107
        if ((twig_length_filter($this->env, ($context["list"] ?? null)) > 1)) {
            // line 108
            echo "                            <ul class=\"alert-list\">
                                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 110
                echo "                                    <li>";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($context["entry"]);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                            </ul>
                        ";
        } elseif ((twig_length_filter($this->env,         // line 113
($context["list"] ?? null)) == 1)) {
            // line 114
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 115
                echo "                                ";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($context["entry"]);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        ";
        } else {
            // line 118
            echo "                            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["content"] ?? null));
            echo "
                        ";
        }
        // line 120
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_utilities_alert_dismissible($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_dismissible"));

        // line 124
        echo "                    ";
        if (($context["dismissible"] ?? null)) {
            // line 125
            echo "                        <button type=\"button\"
                                class=\"close\"
                                data-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    ";
        }
        // line 132
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/alert.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  315 => 132,  306 => 125,  303 => 124,  296 => 123,  288 => 120,  282 => 118,  279 => 117,  270 => 115,  265 => 114,  263 => 113,  260 => 112,  251 => 110,  247 => 109,  244 => 108,  242 => 107,  239 => 106,  232 => 105,  225 => 103,  219 => 100,  216 => 99,  213 => 98,  206 => 97,  198 => 133,  196 => 123,  193 => 122,  191 => 105,  188 => 104,  186 => 97,  183 => 96,  176 => 95,  169 => 93,  166 => 92,  163 => 91,  154 => 90,  151 => 89,  142 => 88,  139 => 87,  130 => 86,  127 => 85,  118 => 84,  115 => 83,  106 => 82,  103 => 81,  100 => 80,  93 => 79,  85 => 135,  83 => 95,  80 => 94,  78 => 79,  65 => 78,  62 => 77,  49 => 76,  46 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Global messages template

https://getbootstrap.com/docs/4.3/components/alerts/

*Type:
The template provides an easy way to display messages in the storefront. The following types are supported:

* primary
* secondary
* danger (red)
* success (green)
* warning (yellow)
* info (blue)
* light (white)
* dark (dark gray)

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\"
    } %}

*Icons:
Icons are shown by default. To hide the icon within the alert, set the value of \"icon\" to false:

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        icon: false
    } %}

*Message Content:
The component requires the parameters ```content``` or ```list``` to display a message. If no ```type``` is defined it
will use the fallback option (success).

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\"
    } %}

*Message List:
If you need to display a bunch of messages (for example error messages in the registration), you can pass an array
of messages to the template using the parameter ```list```:

     {% set list1 = [
        'Error message 1',
        'Error message 2',
        'Error message 3'
    ] %}

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"secondary\",
        list: list1
    } %}

*Heading:
To display a heading, use \"heading\".

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        heading: \"Test Heading\"
    } %}

*Dismissible Button:
To display a dismissible button set the value of \"dismissible\" to true.

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        dismissible: true
    } %}

#}

{% block utilities_alert %}
    <div role=\"alert\"
         class=\"alert {% if type %}alert-{{ type }}{% endif %}{% if dismissible %} alert-dismissible fade show{% endif %}{% if icon != \"error\" %} alert-has-icon{% endif %}\">
        {% block utilities_alert_icon %}
            {% if icon != \"false\" %}
                {% if type == \"danger\" %}
                    {% sw_icon 'blocked' %}
                {% elseif type == \"warning\" %}
                    {% sw_icon 'warning' %}
                {% elseif type == \"info\" %}
                    {% sw_icon 'info' %}
                {% elseif type == \"success\" %}
                    {% sw_icon 'checkmark-circle' %}
                {% else %}
                    {% sw_icon 'alert' %}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block utilities_alert_content_container %}
            <div class=\"alert-content-container\">
                {% block utilities_alert_heading %}
                    {% if heading %}
                        <div class=\"alert-heading h5\">
                            {{ heading }}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block utilities_alert_content %}
                    <div class=\"alert-content\">
                        {% if list|length > 1 %}
                            <ul class=\"alert-list\">
                                {% for entry in list %}
                                    <li>{{ entry|sw_sanitize }}</li>
                                {% endfor %}
                            </ul>
                        {% elseif list|length == 1 %}
                            {% for entry in list %}
                                {{ entry|sw_sanitize }}
                            {% endfor %}
                        {% else %}
                            {{ content|sw_sanitize }}
                        {% endif %}
                    </div>
                {% endblock %}

                {% block utilities_alert_dismissible %}
                    {% if dismissible %}
                        <button type=\"button\"
                                class=\"close\"
                                data-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/utilities/alert.html.twig", "/Applications/MAMP/htdocs/shopware-techzone/vendor/shopware/storefront/Resources/views/storefront/utilities/alert.html.twig");
    }
}
