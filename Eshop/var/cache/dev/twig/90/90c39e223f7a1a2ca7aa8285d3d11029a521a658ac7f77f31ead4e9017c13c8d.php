<?php

/* user/myProducts.html.twig */
class __TwigTemplate_4cedf3abe08cb716ccb744ea4b0bd9c5b49e87a60bf5f5ad632573971ba9b629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/myProducts.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/myProducts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/myProducts.html.twig"));

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
    <h3><u>Your Products</u>: <strong>";
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
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pictureUrl", array()), "html", null, true);
            echo "\" width=\"400px\" height=\"200px\"/></a>

                        <p>Price: \$";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 2, ".", ","), "html", null, true);
            echo "</p>

                        <p>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "content", array()), "html", null, true);
            echo "
                        </p>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\" href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_index");
            echo "\">back &raquo;</a>
                                <a class=\"btn btn-success btn-xs\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">edit &raquo;</a>
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">remove &raquo;</a>
                            </div>
                        </footer>
                    </article>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/myProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  103 => 28,  99 => 27,  95 => 26,  87 => 21,  81 => 18,  74 => 16,  68 => 13,  63 => 10,  59 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    <h3><u>Your Products</u>: <strong>{{ products|length }}</strong></h3>

    <div class=\"container body-content\">
        <div class=\"row\">
            {% for product in products %}
                <div class=\"col-md-6\">
                    <article>
                        <header>
                            <h2>{{ product.name }}</h2>
                        </header>

                        <a href=\"{{ path('product_details', {'id': product.id} ) }}\" ><img src=\"{{ product.pictureUrl }}\" width=\"400px\" height=\"200px\"/></a>

                        <p>Price: \${{ product.price|number_format(2, '.', ',') }}</p>

                        <p>
                            {{ product.content }}
                        </p>

                        <footer>
                            <div class=\"pull-right\">
                                <a class=\"btn btn-default btn-xs\" href=\"{{ path('home_index') }}\">back &raquo;</a>
                                <a class=\"btn btn-success btn-xs\" href=\"{{ path('product_edit', {'id': product.id}) }}\">edit &raquo;</a>
                                <a class=\"btn btn-danger btn-xs\" href=\"{{ path('product_delete', {'id': product.id}) }}\">remove &raquo;</a>
                            </div>
                        </footer>
                    </article>
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}



", "user/myProducts.html.twig", "C:\\Users\\Mitko\\Desktop\\CRUD\\Symfony\\Eshop\\app\\Resources\\views\\user\\myProducts.html.twig");
    }
}
