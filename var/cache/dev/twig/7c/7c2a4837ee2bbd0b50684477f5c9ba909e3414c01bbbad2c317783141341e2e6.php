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

/* user/ilanlar.html.twig */
class __TwigTemplate_331f5ac92bccc20c707ffcfffd271306bd0e3eba06de2183d6c4afde68c0c551 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ilanlar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/ilanlar.html.twig"));

        $this->parent = $this->loadTemplate("homebase1.html.twig", "user/ilanlar.html.twig", 1);
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


                                <table class=\"table\">
                                    <h3><a class=\"btn btn-primary\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dernek_new");
        echo "\">İlan Oluştur</a>
                                    </h3>
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Gallery</th>
                                        <th>Status</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["derneks"]) || array_key_exists("derneks", $context) ? $context["derneks"] : (function () { throw new RuntimeError('Variable "derneks" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dernek"]) {
            // line 44
            echo "                                        <tr>
                                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dernek"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dernek"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                            <td><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["dernek"], "image", [], "any", false, false, false, 47))), "html", null, true);
            echo "\"
                                                     style=\"width: 40px\">
                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dernek"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dernek"], "city", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"javascript:openWin('";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dernek_new", ["id" => twig_get_attribute($this->env, $this->source, $context["dernek"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/gallery.png\"
                                                         style=\"width: 40px\">
                                                </a>
                                            </td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dernek"], "status", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                            <td>
                                                <a class=\"btn btn-primary btn-sm\"
                                                   href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dernek_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dernek"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Show</a>
                                                <a class=\"btn btn-primary btn-sm\"
                                                   href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dernek_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dernek"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Edit</a>
                                            </td>
                                            <td>
                                                ";
            // line 65
            echo twig_include($this->env, $context, "admin/dernek/_delete_form.html.twig");
            echo "

                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dernek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    </tbody>
                                </table>


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
        return "user/ilanlar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 74,  223 => 70,  205 => 65,  199 => 62,  194 => 60,  188 => 57,  181 => 53,  177 => 52,  172 => 50,  168 => 49,  163 => 47,  159 => 46,  155 => 45,  152 => 44,  134 => 43,  116 => 28,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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


                                <table class=\"table\">
                                    <h3><a class=\"btn btn-primary\" href=\"{{ path('user_dernek_new') }}\">İlan Oluştur</a>
                                    </h3>
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Gallery</th>
                                        <th>Status</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for dernek in derneks %}
                                        <tr>
                                            <td>{{ dernek.id }}</td>
                                            <td>{{ dernek.title }}</td>
                                            <td><img src=\"{{ asset('uploads/images/' ~ dernek.image) }}\"
                                                     style=\"width: 40px\">
                                            <td>{{ dernek.email }}</td>
                                            <td>{{ dernek.city }}</td>
                                            <td>
                                                <a href=\"javascript:openWin('{{ path('user_dernek_new',{'id':dernek.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"{{ asset('assets/admin/img') }}/gallery.png\"
                                                         style=\"width: 40px\">
                                                </a>
                                            </td>
                                            <td>{{ dernek.status }}</td>
                                            <td>
                                                <a class=\"btn btn-primary btn-sm\"
                                                   href=\"{{ path('user_dernek_show', {'id': dernek.id}) }}\">Show</a>
                                                <a class=\"btn btn-primary btn-sm\"
                                                   href=\"{{ path('user_dernek_edit', {'id': dernek.id}) }}\">Edit</a>
                                            </td>
                                            <td>
                                                {{ include('admin/dernek/_delete_form.html.twig') }}

                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div><!--/blog-post-area-->
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "user/ilanlar.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\user\\ilanlar.html.twig");
    }
}
