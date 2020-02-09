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

/* admin/dernek/show.html.twig */
class __TwigTemplate_9fc952dd9ba429703ad1f9b4ac769169d8303e5478d0565b64e48b6454407980 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dernek/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dernek/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/dernek/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dernek";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Dernek</h1>
<div class=\"page-wrapper\">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"page-breadcrumb\">
        <div class=\"row\">
            <div class=\"col-12 d-flex no-block align-items-center\">
                <h4 class=\"page-title\">Full Width</h4>
                <div class=\"ml-auto text-right\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class=\"container-fluid\">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 49, $this->source); })()), "title", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 53, $this->source); })()), "keywords", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Star</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 65, $this->source); })()), "star", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 69, $this->source); })()), "adress", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 73, $this->source); })()), "phone", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 77, $this->source); })()), "fax", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 85, $this->source); })()), "city", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 89, $this->source); })()), "country", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 93, $this->source); })()), "location", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 97, $this->source); })()), "status", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 101
        ((twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 101, $this->source); })()), "createdAt", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 101, $this->source); })()), "createdAt", [], "any", false, false, false, 101), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 105
        ((twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 105, $this->source); })()), "updatedAt", [], "any", false, false, false, 105)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 105, $this->source); })()), "updatedAt", [], "any", false, false, false, 105), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn-success\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dernek_index");
        echo "\">back to list</a>

    <a class=\"btn-success\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dernek_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 114
        echo twig_include($this->env, $context, "admin/dernek/_delete_form.html.twig");
        echo "
                    </div>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dernek/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 114,  247 => 112,  242 => 110,  234 => 105,  227 => 101,  220 => 97,  213 => 93,  206 => 89,  199 => 85,  192 => 81,  185 => 77,  178 => 73,  171 => 69,  164 => 65,  157 => 61,  150 => 57,  143 => 53,  136 => 49,  129 => 45,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Dernek{% endblock %}

{% block body %}
    <h1>Dernek</h1>
<div class=\"page-wrapper\">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"page-breadcrumb\">
        <div class=\"row\">
            <div class=\"col-12 d-flex no-block align-items-center\">
                <h4 class=\"page-title\">Full Width</h4>
                <div class=\"ml-auto text-right\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class=\"container-fluid\">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ dernek.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ dernek.title }}</td>
            </tr>
            <tr>
                <th>Keywords</th>
                <td>{{ dernek.keywords }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ dernek.description }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ dernek.image }}</td>
            </tr>
            <tr>
                <th>Star</th>
                <td>{{ dernek.star }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ dernek.adress }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ dernek.phone }}</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>{{ dernek.fax }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ dernek.email }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ dernek.city }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ dernek.country }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ dernek.location }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ dernek.status }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ dernek.createdAt ? dernek.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>{{ dernek.updatedAt ? dernek.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn-success\" href=\"{{ path('admin_dernek_index') }}\">back to list</a>

    <a class=\"btn-success\" href=\"{{ path('admin_dernek_edit', {'id': dernek.id}) }}\">edit</a>

    {{ include('admin/dernek/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>
{% endblock %}
", "admin/dernek/show.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\admin\\dernek\\show.html.twig");
    }
}
