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

/* dernek/show.html.twig */
class __TwigTemplate_2ff07d820c75e4d884024bb6c96d4a54f49fa6413b5c337ba00c7a79ae3a6d71 extends \Twig\Template
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
        return "homebase1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dernek/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dernek/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase1.html.twig", "dernek/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "Profile";
        
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
        echo "
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">


                        ";
        // line 14
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "


                    </div>
                </div>
                <div class=\"col-sm-9\">
                    <div class=\"blog-post-area\">
                        <h2 class=\"title text-center\">User Panel</h2>
                        <div class=\"single-blog-post\">
                            <h3 class=\"title text-center\">İlanlar</h3>
                            <div class=\"post-meta\">
                                <h3 class=\"title text-center\">İlan Bilgisi</h3>


                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 40, $this->source); })()), "keywords", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Star</th>
                                        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 52, $this->source); })()), "star", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Adress</th>
                                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 56, $this->source); })()), "adress", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 64, $this->source); })()), "fax", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 72, $this->source); })()), "city", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 76, $this->source); })()), "country", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 80, $this->source); })()), "location", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Created_at</th>
                                        <td>";
        // line 88
        ((twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 88, $this->source); })()), "createdAt", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 88, $this->source); })()), "createdAt", [], "any", false, false, false, 88), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Updated_at</th>
                                        <td>";
        // line 92
        ((twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 92, $this->source); })()), "updatedAt", [], "any", false, false, false, 92)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 92, $this->source); })()), "updatedAt", [], "any", false, false, false, 92), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Detail</th>
                                        <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 96, $this->source); })()), "detail", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Userid</th>
                                        <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 100, $this->source); })()), "userid", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a class=\"btn btn-danger\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dernek_index");
        echo "\">back to list</a>

                                <a class=\"btn btn-danger\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dernek_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\">edit</a>

                                ";
        // line 109
        echo twig_include($this->env, $context, "dernek/_delete_form.html.twig");
        echo "

                            </div>
                        </div>
                    </div><!--/blog-post-area-->
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dernek/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 109,  252 => 107,  247 => 105,  239 => 100,  232 => 96,  225 => 92,  218 => 88,  211 => 84,  204 => 80,  197 => 76,  190 => 72,  183 => 68,  176 => 64,  169 => 60,  162 => 56,  155 => 52,  148 => 48,  141 => 44,  134 => 40,  127 => 36,  120 => 32,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase1.html.twig' %}

{% block title %}{{ app.user.name }}Profile{% endblock %}

{% block body %}

    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"left-sidebar\">


                        {{ include('user/usermenu.html.twig') }}


                    </div>
                </div>
                <div class=\"col-sm-9\">
                    <div class=\"blog-post-area\">
                        <h2 class=\"title text-center\">User Panel</h2>
                        <div class=\"single-blog-post\">
                            <h3 class=\"title text-center\">İlanlar</h3>
                            <div class=\"post-meta\">
                                <h3 class=\"title text-center\">İlan Bilgisi</h3>


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
                                    <tr>
                                        <th>Detail</th>
                                        <td>{{ dernek.detail }}</td>
                                    </tr>
                                    <tr>
                                        <th>Userid</th>
                                        <td>{{ dernek.userid }}</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a class=\"btn btn-danger\" href=\"{{ path('user_dernek_index') }}\">back to list</a>

                                <a class=\"btn btn-danger\" href=\"{{ path('user_dernek_edit', {'id': dernek.id}) }}\">edit</a>

                                {{ include('dernek/_delete_form.html.twig') }}

                            </div>
                        </div>
                    </div><!--/blog-post-area-->
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "dernek/show.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\dernek\\show.html.twig");
    }
}
