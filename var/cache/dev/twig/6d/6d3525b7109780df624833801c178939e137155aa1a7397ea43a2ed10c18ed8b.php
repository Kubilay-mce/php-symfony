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

/* /admin/category/_form.html.twig */
class __TwigTemplate_e1e50e1abf7398b0f29e31c8e66d5faf3e48d3b23710c9171d8dbcc43dd0219d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/category/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/category/_form.html.twig"));

        // line 1
        echo "

<div class=\"card\">

    <form name=\"category\" method=\"post\">

        <div class=\"form-group\">
            <label for=\"fname\" >ParentID</label>
            <select id=\"category_parentid\" name=\"category[parentid]\" class=\"form-control\">
                <option value=\"0\"> Main Category</option>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 12
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 12) == twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()), "parentid", [], "any", false, false, false, 12))) ? ("Selected") : (""));
            echo ">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            </select>
        </div>
            <div class=\"form-group\">
                <label for=\"lname\" >Category Name</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" id=\"category_title\" name=\"category[title]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "\"  class=\"form-control\">
                </div>
            </div>
            <div class=\"form-group\">
                 <label for=\"lname\" >Category Name</label>
                 <div class=\"col-sm-9\">
                    <input type=\"text\"id=\"category_keywords\" name=\"category[keywords]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"form-control\">
                 </div>
            </div>
            <div class=\"form-group\">
                 <label for=\"lname\" >Category Name</label>
                 <div class=\"col-sm-9\">
                     <input type=\"text\" id=\"category_description\" name=\"category[description]\"value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"form-control\">
                 </div>
            </div>
        <div class=\"form-group \">
            <label for=\"cono1\" >Status</label>
            <select id=\"category_status\" name=\"category[status]\" class=\"form-control\">
                <option>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), "html", null, true);
        echo "</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>





        <div class=\"card-body\">
            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Submit</button>
        </div>

    </form>

</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/admin/category/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  98 => 32,  89 => 26,  80 => 20,  72 => 14,  59 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"card\">

    <form name=\"category\" method=\"post\">

        <div class=\"form-group\">
            <label for=\"fname\" >ParentID</label>
            <select id=\"category_parentid\" name=\"category[parentid]\" class=\"form-control\">
                <option value=\"0\"> Main Category</option>
                {% for cat in categories %}
                    <option value=\"{{ cat.id }}\" {{ cat.id==category.parentid ? 'Selected': '' }}>  {{ cat.title }}</option>
                {% endfor %}

            </select>
        </div>
            <div class=\"form-group\">
                <label for=\"lname\" >Category Name</label>
                <div class=\"col-sm-9\">
                    <input type=\"text\" id=\"category_title\" name=\"category[title]\" value=\"{{ category.title }}\"  class=\"form-control\">
                </div>
            </div>
            <div class=\"form-group\">
                 <label for=\"lname\" >Category Name</label>
                 <div class=\"col-sm-9\">
                    <input type=\"text\"id=\"category_keywords\" name=\"category[keywords]\" value=\"{{ category.title }}\" class=\"form-control\">
                 </div>
            </div>
            <div class=\"form-group\">
                 <label for=\"lname\" >Category Name</label>
                 <div class=\"col-sm-9\">
                     <input type=\"text\" id=\"category_description\" name=\"category[description]\"value=\"{{ category.title }}\" class=\"form-control\">
                 </div>
            </div>
        <div class=\"form-group \">
            <label for=\"cono1\" >Status</label>
            <select id=\"category_status\" name=\"category[status]\" class=\"form-control\">
                <option>{{ category.status }}</option>
                <option>True</option>
                <option>False</option>
            </select>
        </div>





        <div class=\"card-body\">
            <button type=\"submit\" class=\"btn btn-lg btn-primary\">Submit</button>
        </div>

    </form>

</div>

", "/admin/category/_form.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\admin\\category\\_form.html.twig");
    }
}
