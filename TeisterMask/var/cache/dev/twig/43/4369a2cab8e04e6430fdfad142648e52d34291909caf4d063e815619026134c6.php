<?php

/* task/create.html.twig */
class __TwigTemplate_4417de1c5d77f3d1030954e3b57ad175c984433a511f3ce0d8532769d0eb26d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/create.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/create.html.twig"));

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
        echo "    <header>
        <h3>Create New Task</h3>
    </header>

    <form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\">
        <div>
            <label class=\"desc\" for=\"title\">Title</label>
            <div>
                <input id=\"title\" name=\"task[title]\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\"
                       autofocus required>
            </div>
        </div>

        <div>
            <fieldset>
                <legend class=\"desc\">
                    Status
                </legend>

                <div>
                    <div>
                        <input id=\"status1\" name=\"task[status]\" type=\"radio\" value=\"Open\" tabindex=\"2\" checked>
                        <label class=\"choice\" for=\"status1\">Open</label>
                    </div>
                    <div>
                        <input id=\"status2\" name=\"task[status]\" type=\"radio\" value=\"In Progress\" tabindex=\"3\">
                        <label class=\"choice\" for=\"status2\">In Progress</label>
                    </div>
                    <div>
                        <input id=\"status3\" name=\"task[status]\" type=\"radio\" value=\"Finished\" tabindex=\"4\">
                        <label class=\"choice\" for=\"status3\">Finished</label>
                    </div>
                </div>
            </fieldset>
        </div>

        <div>
            <div>
                <input class=\"button createBnt\" type=\"submit\" value=\"Create\">
                <a class=\"button cancel\" href=\"/\">Cancel</a>
            </div>
        </div>

        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "_token", array()), 'row');
        echo "
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
    <header>
        <h3>Create New Task</h3>
    </header>

    <form method=\"post\" action=\"{{ path('create') }}\">
        <div>
            <label class=\"desc\" for=\"title\">Title</label>
            <div>
                <input id=\"title\" name=\"task[title]\" type=\"text\" class=\"field text fn\" value=\"\" size=\"8\" tabindex=\"1\"
                       autofocus required>
            </div>
        </div>

        <div>
            <fieldset>
                <legend class=\"desc\">
                    Status
                </legend>

                <div>
                    <div>
                        <input id=\"status1\" name=\"task[status]\" type=\"radio\" value=\"Open\" tabindex=\"2\" checked>
                        <label class=\"choice\" for=\"status1\">Open</label>
                    </div>
                    <div>
                        <input id=\"status2\" name=\"task[status]\" type=\"radio\" value=\"In Progress\" tabindex=\"3\">
                        <label class=\"choice\" for=\"status2\">In Progress</label>
                    </div>
                    <div>
                        <input id=\"status3\" name=\"task[status]\" type=\"radio\" value=\"Finished\" tabindex=\"4\">
                        <label class=\"choice\" for=\"status3\">Finished</label>
                    </div>
                </div>
            </fieldset>
        </div>

        <div>
            <div>
                <input class=\"button createBnt\" type=\"submit\" value=\"Create\">
                <a class=\"button cancel\" href=\"/\">Cancel</a>
            </div>
        </div>

        {{ form_row(form._token) }}
    </form>
{% endblock %}", "task/create.html.twig", "C:\\Users\\Mitko\\Desktop\\CRUD\\TeisterMask\\app\\Resources\\views\\task\\create.html.twig");
    }
}
