<?php

/* shoppingcart_base.html.twig */
class __TwigTemplate_c63a5dd4f1aca33c60f0e1940f00d46618b90578ba571538675fd40a02643d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "shoppingcart_base.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 4
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_SHOPPINGCART.SHOPPING_CART"), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_content_top($context, array $blocks = array())
    {
        // line 12
        echo "    <!--<div class=\"alert notice\"></div>-->
    <ul class=\"tab-bar\">
        <li ";
        // line 14
        if (($this->getAttribute(($context["uri"] ?? null), "basename", array()) == "shoppingcart")) {
            echo "class=\"active\"";
        }
        echo ">
            ";
        // line 15
        if (($this->getAttribute(($context["uri"] ?? null), "basename", array()) == "shoppingcart")) {
            echo "<span>";
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/shoppingcart\">";
        }
        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("Orders"), "html", null, true);
        echo "
            ";
        // line 17
        if (($this->getAttribute(($context["uri"] ?? null), "basename", array()) == "shoppingcart")) {
            echo "</span>";
        } else {
            echo "</a>";
        }
        // line 18
        echo "        </li>
        <li ";
        // line 19
        if (($this->getAttribute(($context["uri"] ?? null), "basename", array()) == "shoppingcart-addons")) {
            echo "class=\"active\"";
        }
        echo ">
            ";
        // line 20
        if (($this->getAttribute(($context["uri"] ?? null), "basename", array()) == "shoppingcart-addons")) {
            echo "<span>";
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/shoppingcart-addons\">";
        }
        // line 21
        echo "            Addons
            ";
        // line 22
        if (($this->getAttribute(($context["uri"] ?? null), "basename", array()) == "shoppingcart-addons")) {
            echo "</span>";
        } else {
            echo "</a>";
        }
        // line 23
        echo "        </li>
    </ul>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "shoppingcart_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  110 => 27,  104 => 23,  98 => 22,  95 => 21,  87 => 20,  81 => 19,  78 => 18,  72 => 17,  67 => 16,  59 => 15,  53 => 14,  49 => 12,  46 => 11,  39 => 8,  36 => 7,  32 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_SHOPPINGCART.SHOPPING_CART\"|tu }}</h1>
{% endblock %}

{% block content_top %}
    <!--<div class=\"alert notice\"></div>-->
    <ul class=\"tab-bar\">
        <li {% if uri.basename == 'shoppingcart' %}class=\"active\"{% endif %}>
            {% if uri.basename == 'shoppingcart' %}<span>{% else %}<a href=\"{{ base_url_relative }}/shoppingcart\">{% endif %}
            {{ \"Orders\"|tu }}
            {% if uri.basename == 'shoppingcart' %}</span>{% else %}</a>{% endif %}
        </li>
        <li {% if uri.basename == 'shoppingcart-addons' %}class=\"active\"{% endif %}>
            {% if uri.basename == 'shoppingcart-addons' %}<span>{% else %}<a href=\"{{ base_url_relative }}/shoppingcart-addons\">{% endif %}
            Addons
            {% if uri.basename == 'shoppingcart-addons' %}</span>{% else %}</a>{% endif %}
        </li>
    </ul>
{% endblock %}

{% block content %}

{% endblock %}


", "shoppingcart_base.html.twig", "/srv/users/serverpilot/apps/grav/public/user/plugins/shoppingcart/admin/templates/shoppingcart_base.html.twig");
    }
}
