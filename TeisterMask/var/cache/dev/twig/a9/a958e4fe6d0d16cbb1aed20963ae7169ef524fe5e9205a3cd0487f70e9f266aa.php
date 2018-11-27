<?php

/* task/index.html.twig */
class __TwigTemplate_e635a999c78ee72434a7a0f2c7934cad1e9189285924d06715d0c13bdc9c70ed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        <a class=\"button\" href=\"/create\">Create New Task</a>
    </div>

    <div class=\"tasks container\">
        <header>
            <div class=\"column header open\">Open</div>
            <div class=\"column header inProgress\">In progress</div>
            <div class=\"column header finished\">Finished</div>
        </header>
        <ul class=\"column open\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["openTasks"]) || array_key_exists("openTasks", $context) ? $context["openTasks"] : (function () { throw new Twig_Error_Runtime('Variable "openTasks" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 16
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon edit\"></a>
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon delete\"></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
        <ul class=\"column inProgress\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inProgressTasks"]) || array_key_exists("inProgressTasks", $context) ? $context["inProgressTasks"] : (function () { throw new Twig_Error_Runtime('Variable "inProgressTasks" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 24
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon edit\"></a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon delete\"></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
        <ul class=\"column finished\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["finishedTasks"]) || array_key_exists("finishedTasks", $context) ? $context["finishedTasks"] : (function () { throw new Twig_Error_Runtime('Variable "finishedTasks" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 32
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", array()), "html", null, true);
            echo "
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon edit\"></a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"icon delete\"></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  131 => 34,  127 => 33,  122 => 32,  118 => 31,  114 => 29,  105 => 26,  101 => 25,  96 => 24,  92 => 23,  88 => 21,  79 => 18,  75 => 17,  70 => 16,  66 => 15,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
    <div class=\"container\">
        <a class=\"button\" href=\"/create\">Create New Task</a>
    </div>

    <div class=\"tasks container\">
        <header>
            <div class=\"column header open\">Open</div>
            <div class=\"column header inProgress\">In progress</div>
            <div class=\"column header finished\">Finished</div>
        </header>
        <ul class=\"column open\">
            {% for task in openTasks %}
                <li>{{ task.title }}
                    <a href=\"{{ path('edit', {id: task.id}) }}\" class=\"icon edit\"></a>
                    <a href=\"{{ path('delete', {id: task.id}) }}\" class=\"icon delete\"></a>
                </li>
            {% endfor %}
        </ul>
        <ul class=\"column inProgress\">
            {% for task in inProgressTasks %}
                <li>{{ task.title }}
                    <a href=\"{{ path('edit', {id: task.id}) }}\" class=\"icon edit\"></a>
                    <a href=\"{{ path('delete', {id: task.id}) }}\" class=\"icon delete\"></a>
                </li>
            {% endfor %}
        </ul>
        <ul class=\"column finished\">
            {% for task in finishedTasks %}
                <li>{{ task.title }}
                    <a href=\"{{ path('edit', {id: task.id}) }}\" class=\"icon edit\"></a>
                    <a href=\"{{ path('delete', {id: task.id}) }}\" class=\"icon delete\"></a>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endblock %}", "task/index.html.twig", "C:\\Users\\Mitko\\Desktop\\CRUD\\TeisterMask\\app\\Resources\\views\\task\\index.html.twig");
    }
}
