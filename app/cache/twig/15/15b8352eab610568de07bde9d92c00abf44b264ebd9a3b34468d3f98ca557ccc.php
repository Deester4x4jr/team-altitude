<?php

/* shoppingcart_orders.html.twig */
class __TwigTemplate_749edd601402d1d044fec3c5c56b571730f2ef6ca47d57c5874b555284e3b05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("shoppingcart_base.html.twig", "shoppingcart_orders.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "shoppingcart_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        th { background: #d9d9d9; }

        tr, td { text-align: left;}
        .details { flex: 1.5 }

        .center {
            margin: 0 auto;
            text-align: center;
        }
    </style>

    <h1>Latest Orders</h1>

    <div class=\"admin-block\">
        <table>
            <tbody class=\"js__orders-container\">
                <tr class=\"h\">
                    <th class=\"date\">Date</th>
                    <th class=\"amount\">Amount</th>
                    <th class=\"details\">Details</th>
                    <th class=\"products\">Products</th>
                </tr>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "orders", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 28
            echo "                    <tr>
                        <td class=\"date\">";
            // line 29
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["order"], "created_on", array()), 0, 4), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["order"], "created_on", array()), 4, 2), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["order"], "created_on", array()), 6, 2), "html", null, true);
            echo "</td>
                        <td class=\"amount\">
                            ";
            // line 31
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "ui", array()), "currency_symbol_position", array()) == "after")) {
                // line 32
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
                echo twig_escape_filter($this->env, ($context["currency_symbol"] ?? null), "html", null, true);
                echo "
                            ";
            } else {
                // line 34
                echo "                                ";
                echo twig_escape_filter($this->env, ($context["currency_symbol"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
                echo "
                            ";
            }
            // line 36
            echo "                        </td>
                        <td class=\"details\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge((($this->getAttribute($context["order"], "data", array())) ? ($this->getAttribute($context["order"], "data", array())) : (array())), (($this->getAttribute($context["order"], "address", array())) ? ($this->getAttribute($context["order"], "address", array())) : (array()))));
            foreach ($context['_seq'] as $context["index"] => $context["item"]) {
                // line 39
                echo "                                ";
                $context["the_field"] = "";
                // line 40
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "checkout_form", array()), "fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 41
                    echo "                                    ";
                    if (($this->getAttribute($context["field"], "name", array()) == $context["index"])) {
                        // line 42
                        echo "                                        ";
                        $context["the_field"] = $context["field"];
                        // line 43
                        echo "                                    ";
                    }
                    // line 44
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "
                                ";
                // line 46
                if ( !$this->getAttribute(($context["the_field"] ?? null), "ignore", array())) {
                    // line 47
                    echo "                                    <strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["the_field"] ?? null), "label", array())));
                    echo "</strong>:
                                    ";
                    // line 48
                    echo twig_escape_filter($this->env, $context["item"]);
                    echo "
                                    <br>
                                ";
                }
                // line 51
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                        </td>
                        <td class=\"products\">
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 55
                echo "                                <strong>Item</strong>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "product", array()), "title", array()), "html", null, true);
                echo " -
                                <strong>Quantity</strong>: ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                echo " -
                                <strong>Price</strong>:

                                ";
                // line 59
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "shoppingcart", array()), "ui", array()), "currency_symbol_position", array()) == "after")) {
                    // line 60
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "product", array()), "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["currency_symbol"] ?? null), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 62
                    echo "                                    ";
                    echo twig_escape_filter($this->env, ($context["currency_symbol"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "product", array()), "price", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 64
                echo "
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </tbody>
        </table>

        <p class=\"center\">
            <br>
            Showing <span class=\"totalRetrieved\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "totalRetrieved", array()), "html", null, true);
        echo "</span> orders of <span class=\"totalAvailable\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "totalAvailable", array()), "html", null, true);
        echo "</span>
            <br>
            <br>
            ";
        // line 78
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "page", array()) > 1)) {
            // line 79
            echo "                <a class=\"button center\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "route", array()), "html", null, true);
            echo "/shoppingcart/page:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "page", array()) - 1), "html", null, true);
            echo "\">Prev</a>
            ";
        }
        // line 81
        echo "
            ";
        // line 82
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "page", array()) * $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "totalRetrieved", array())) < $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "totalAvailable", array()))) {
            // line 83
            echo "                <a class=\"button center\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "route", array()), "html", null, true);
            echo "/shoppingcart/page:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "orders", array()), "page", array()) + 1), "html", null, true);
            echo "\">Next</a>
            ";
        }
        // line 85
        echo "        </p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "shoppingcart_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 85,  222 => 83,  220 => 82,  217 => 81,  209 => 79,  207 => 78,  199 => 75,  192 => 70,  184 => 67,  176 => 64,  169 => 62,  162 => 60,  160 => 59,  154 => 56,  149 => 55,  145 => 54,  141 => 52,  135 => 51,  129 => 48,  124 => 47,  122 => 46,  119 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  99 => 40,  96 => 39,  92 => 38,  88 => 36,  81 => 34,  74 => 32,  72 => 31,  63 => 29,  60 => 28,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'shoppingcart_base.html.twig' %}

{% block content %}
    <style>
        th { background: #d9d9d9; }

        tr, td { text-align: left;}
        .details { flex: 1.5 }

        .center {
            margin: 0 auto;
            text-align: center;
        }
    </style>

    <h1>Latest Orders</h1>

    <div class=\"admin-block\">
        <table>
            <tbody class=\"js__orders-container\">
                <tr class=\"h\">
                    <th class=\"date\">Date</th>
                    <th class=\"amount\">Amount</th>
                    <th class=\"details\">Details</th>
                    <th class=\"products\">Products</th>
                </tr>
                {% for order in grav.twig.orders.orders %}
                    <tr>
                        <td class=\"date\">{{order.created_on|slice(0, 4)}}/{{order.created_on|slice(4, 2)}}/{{order.created_on|slice(6, 2)}}</td>
                        <td class=\"amount\">
                            {% if config.plugins.shoppingcart.ui.currency_symbol_position == 'after' %}
                                {{ order.amount }}{{ currency_symbol }}
                            {% else %}
                                {{ currency_symbol }}{{ order.amount }}
                            {% endif %}
                        </td>
                        <td class=\"details\">
                            {% for index, item in (order.data ?: [])|merge(order.address ?: []) %}
                                {% set the_field = '' %}
                                {% for field in config.plugins.shoppingcart.checkout_form.fields %}
                                    {% if field.name == index %}
                                        {% set the_field = field %}
                                    {% endif %}
                                {% endfor %}

                                {% if not the_field.ignore %}
                                    <strong>{{ the_field.label|t|e }}</strong>:
                                    {{ item|e }}
                                    <br>
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td class=\"products\">
                            {% for product in order.products %}
                                <strong>Item</strong>: {{product.product.title}} -
                                <strong>Quantity</strong>: {{product.quantity}} -
                                <strong>Price</strong>:

                                {% if config.plugins.shoppingcart.ui.currency_symbol_position == 'after' %}
                                    {{ product.product.price }}{{ currency_symbol }}
                                {% else %}
                                    {{ currency_symbol }}{{ product.product.price }}
                                {% endif %}

                                <br>
                            {% endfor %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <p class=\"center\">
            <br>
            Showing <span class=\"totalRetrieved\">{{grav.twig.orders.totalRetrieved}}</span> orders of <span class=\"totalAvailable\">{{grav.twig.orders.totalAvailable}}</span>
            <br>
            <br>
            {% if (grav.twig.orders.page > 1) %}
                <a class=\"button center\" href=\"{{ config.plugins.admin.route }}/shoppingcart/page:{{ (grav.twig.orders.page - 1) }}\">Prev</a>
            {% endif %}

            {% if (grav.twig.orders.page * grav.twig.orders.totalRetrieved) < grav.twig.orders.totalAvailable %}
                <a class=\"button center\" href=\"{{ config.plugins.admin.route }}/shoppingcart/page:{{ (grav.twig.orders.page + 1) }}\">Next</a>
            {% endif %}
        </p>
    </div>
{% endblock %}
", "shoppingcart_orders.html.twig", "/srv/users/serverpilot/apps/grav/public/user/plugins/shoppingcart/admin/templates/shoppingcart_orders.html.twig");
    }
}
