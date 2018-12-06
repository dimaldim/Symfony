<?php

/* product/details.html.twig */
class __TwigTemplate_eae4a8f339c9d7f066cf5c560f3fe6b8ee954b5ee8efb22a361009d721c92398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/details.html.twig"));

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
        echo "    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h2>
                    </header>

                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "pictureUrl", array()), "html", null, true);
        echo "\" width=\"400px\" height=\"200px\" />

                    <p>
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "content", array()), "html", null, true);
        echo "
                    </p>

                    <p>Price: <strong>\$";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</strong></p>

                    <p>DateAdded: ";
        // line 20
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "dateAdded", array()))) ? ("") : (twig_date_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "dateAdded", array()), "m/d/Y", "Europe/Paris"))), "html", null, true);
        echo "</p>

                    <small class=\"author\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "author", array()), "html", null, true);
        echo "
                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            ";
        // line 28
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method") && ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method"), "author", array(0 => ($context["product"] ?? $this->getContext($context, "product"))), "method") || $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")))) {
            // line 29
            echo "                            <a class=\"btn btn-success btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_to_cart", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
            echo "\">Add To Cart &raquo;</a>
                            ";
        }
        // line 31
        echo "
                            ";
        // line 32
        if ((($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method"), "isAdmin", array(), "method")) || ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "getUser", array(), "method"), "author", array(0 => ($context["product"] ?? $this->getContext($context, "product"))), "method")))) {
            // line 33
            echo "                            <a class=\"btn btn-primary btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
            echo "\">edit &raquo;</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_delete", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
            echo "\">remove &raquo;</a>
                            ";
        }
        // line 36
        echo "
                            <a class=\"btn btn-default btn-xs\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_index");
        echo "\">back &raquo;</a>

                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  116 => 36,  111 => 34,  106 => 33,  104 => 32,  101 => 31,  95 => 29,  93 => 28,  85 => 23,  79 => 20,  74 => 18,  68 => 15,  62 => 12,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container body-content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <article>
                    <header>
                        <h2>{{ product.name }}</h2>
                    </header>

                    <img src=\"{{ product.pictureUrl }}\" width=\"400px\" height=\"200px\" />

                    <p>
                        {{ product.content }}
                    </p>

                    <p>Price: <strong>\${{ product.price }}</strong></p>

                    <p>DateAdded: {{ product.dateAdded is empty ? \"\" : product.dateAdded|date(\"m/d/Y\", \"Europe/Paris\" ) }}</p>

                    <small class=\"author\">
                        {{ product.author }}
                    </small>

                    <footer>
                        <div class=\"pull-right\">
                            {% if app.getUser() and (not app.getUser().author(product) or app.getUser().isAdmin()) %}
                            <a class=\"btn btn-success btn-xs\" href=\"{{ path('add_to_cart', {'id': product.id}) }}\">Add To Cart &raquo;</a>
                            {% endif %}

                            {% if app.getUser() and app.getUser().isAdmin() or app.getUser() and app.getUser().author(product) %}
                            <a class=\"btn btn-primary btn-xs\" href=\"{{ path('product_edit', {'id': product.id}) }}\">edit &raquo;</a>
                            <a class=\"btn btn-danger btn-xs\" href=\"{{ path('product_delete', {'id': product.id}) }}\">remove &raquo;</a>
                            {% endif %}

                            <a class=\"btn btn-default btn-xs\" href=\"{{ path('home_index') }}\">back &raquo;</a>

                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>

{% endblock %}

", "product/details.html.twig", "C:\\Users\\Mitko\\Desktop\\CRUD\\Symfony\\Eshop\\app\\Resources\\views\\product\\details.html.twig");
    }
}
