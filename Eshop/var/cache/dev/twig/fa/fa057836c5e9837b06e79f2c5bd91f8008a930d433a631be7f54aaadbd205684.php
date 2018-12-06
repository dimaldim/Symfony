<?php

/* user/cartProducts.html.twig */
class __TwigTemplate_f93c59adddcbb18de48cbb5c38b293d64c5476c5436a1903c2a023ade743ddc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/cartProducts.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/cartProducts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/cartProducts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <h3><u>Items In Your Cart</u>: <strong>";
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["products"] ?? $this->getContext($context, "products"))), "html", null, true);
        echo "</strong></h3>

    <div class=\"container body-content\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h2>
                        </header>

                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pictureUrl", array()), "html", null, true);
            echo "\"
                                                                                       width=\"400px\"
                                                                                       height=\"200px\"/></a>

                        <p>Price: <strong>\$";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 2, ".", ","), "html", null, true);
            echo "</strong></p>

                        <p>
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "content", array()), "html", null, true);
            echo "
                        </p>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_index");
            echo "\">back &raquo;</a>
                                <a class=\"btn btn-danger btn-xs\"
                                   href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_cart_remove", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">remove &raquo;</a>
                                <a class=\"btn btn-success btn-xs\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_cart_buy", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">buy &raquo;</a>
                            </div>
                        </footer>
                    </article>


                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
            <footer>
                <div class=\"pull-right\">
                    <h3>Total Cart Value: <strong>\$";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), 2, ".", ","), "html", null, true);
        echo "</strong></h3>
                    <a class=\"btn btn-success\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_product_cart_buy");
        echo "\">buy all products</a>
                </div>
            </footer>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/cartProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  125 => 42,  120 => 39,  106 => 31,  102 => 30,  97 => 28,  89 => 23,  83 => 20,  74 => 16,  68 => 13,  63 => 10,  59 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}

    <h3><u>Items In Your Cart</u>: <strong>{{ products|length }}</strong></h3>

    <div class=\"container body-content\">
        <div class=\"row\">
            {% for product in products %}
                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>{{ product.name }}</h2>
                        </header>

                        <a href=\"{{ path('product_details', {'id': product.id} ) }}\"><img src=\"{{ product.pictureUrl }}\"
                                                                                       width=\"400px\"
                                                                                       height=\"200px\"/></a>

                        <p>Price: <strong>\${{ product.price|number_format(2, '.', ',') }}</strong></p>

                        <p>
                            {{ product.content }}
                        </p>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\" href=\"{{ path('home_index') }}\">back &raquo;</a>
                                <a class=\"btn btn-danger btn-xs\"
                                   href=\"{{ path('product_cart_remove', {'id': product.id}) }}\">remove &raquo;</a>
                                <a class=\"btn btn-success btn-xs\" href=\"{{ path('product_cart_buy', {'id': product.id}) }}\">buy &raquo;</a>
                            </div>
                        </footer>
                    </article>


                </div>
            {% endfor %}

            <footer>
                <div class=\"pull-right\">
                    <h3>Total Cart Value: <strong>\${{ total|number_format(2, '.', ',') }}</strong></h3>
                    <a class=\"btn btn-success\" href=\"{{ path('all_product_cart_buy') }}\">buy all products</a>
                </div>
            </footer>

        </div>
    </div>

{% endblock %}
", "user/cartProducts.html.twig", "C:\\Users\\Mitko\\Desktop\\CRUD\\Symfony\\Eshop\\app\\Resources\\views\\user\\cartProducts.html.twig");
    }
}
