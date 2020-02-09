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

/* home/dernekshow.html.twig */
class __TwigTemplate_3bde251ab10adb2486804e31ee4a93705c2e0d4cbf7c878b858b89448b1108ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dernekshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dernekshow.html.twig"));

        $this->parent = $this->loadTemplate("homebase1.html.twig", "home/dernekshow.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.js\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.scrollUp.min.js\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/price-range.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.prettyPhoto.js\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/main.js\"></script>
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-7\">
                    <div class=\"span7\">
                        <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">

                            <div class=\"carousel-inner\">


                                ";
        // line 24
        $context["count"] = 0;
        // line 25
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 26
            echo "                                    ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 26, $this->source); })()) + 1);
            // line 27
            echo "                                    <div class=\"item ";
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 27, $this->source); })()) == 1)) {
                echo "active";
            }
            echo "\">
                                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dernek_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                                            <img  src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" class=\"center-block\"   style=\"border-radius: 3%; height:300px; width: 300px\" alt=\"\" />
                                        </a>
                                        <div class=\"carousel-caption\">


                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                            </div>

                            <a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                            <a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"blog-post-area\">

                        <div class=\"single-blog-post\">

                            <div class=\"post-meta\">
                                <h3 class=\"title text-center\">İlan Bilgisi</h3>


                                <table class=\"table\">
                                    <tbody>

                                    <tr>
                                        <th>Title</th>
                                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 64, $this->source); })()), "title", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                    </tr>

                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                    </tr>


                                    <tr>
                                        <th>Adress</th>
                                        <td>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 75, $this->source); })()), "adress", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 79, $this->source); })()), "phone", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 83, $this->source); })()), "fax", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 91, $this->source); })()), "city", [], "any", false, false, false, 91), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 95, $this->source); })()), "country", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
                                    </tr>




                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div><!--/blog-post-area-->
                </div>
            </div>
            <div class=\"category-tab shop-details-tab\"><!--category-tab-->
                <div class=\"col-sm-12\">
                    <ul class=\"nav nav-tabs\">

                        <li class=\"active\"><a href=\"#reviews\" data-toggle=\"tab\">Detay</a></li>
                    </ul>
                </div>
                <div class=\"tab-pane fade active in\" id=\"reviews\">
                    <div class=\"col-sm-12\">

                        <p>";
        // line 121
        echo twig_get_attribute($this->env, $this->source, (isset($context["dernek"]) || array_key_exists("dernek", $context) ? $context["dernek"] : (function () { throw new RuntimeError('Variable "dernek" does not exist.', 121, $this->source); })()), "detail", [], "any", false, false, false, 121);
        echo "</p>


                    </div>
                </div>
            </div>



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
        return "home/dernekshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 121,  241 => 95,  234 => 91,  227 => 87,  220 => 83,  213 => 79,  206 => 75,  197 => 69,  189 => 64,  160 => 37,  146 => 29,  142 => 28,  135 => 27,  132 => 26,  127 => 25,  125 => 24,  111 => 13,  107 => 12,  103 => 11,  99 => 10,  95 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase1.html.twig' %}

{% block title %}{{ dernek.title}}{% endblock %}


{% block body %}

    <script src=\"{{ asset('assets') }}/js/jquery.js\"></script>
    <script src=\"{{ asset('assets') }}/js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('assets') }}/js/jquery.scrollUp.min.js\"></script>
    <script src=\"{{ asset('assets') }}/js/price-range.js\"></script>
    <script src=\"{{ asset('assets') }}/js/jquery.prettyPhoto.js\"></script>
    <script src=\"{{ asset('assets') }}/js/main.js\"></script>
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-7\">
                    <div class=\"span7\">
                        <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">

                            <div class=\"carousel-inner\">


                                {% set count=0 %}
                                {% for rs in images %}
                                    {% set count=count+1 %}
                                    <div class=\"item {% if count==1 %}active{% endif %}\">
                                        <a href=\"{{ path('dernek_show', {'id': rs.id}) }}\">
                                            <img  src=\"{{ asset('uploads/images/' ~ rs.image) }}\" class=\"center-block\"   style=\"border-radius: 3%; height:300px; width: 300px\" alt=\"\" />
                                        </a>
                                        <div class=\"carousel-caption\">


                                        </div>
                                    </div>
                                {% endfor %}

                            </div>

                            <a href=\"#slider-carousel\" class=\"left control-carousel hidden-xs\" data-slide=\"prev\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                            <a href=\"#slider-carousel\" class=\"right control-carousel hidden-xs\" data-slide=\"next\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"blog-post-area\">

                        <div class=\"single-blog-post\">

                            <div class=\"post-meta\">
                                <h3 class=\"title text-center\">İlan Bilgisi</h3>


                                <table class=\"table\">
                                    <tbody>

                                    <tr>
                                        <th>Title</th>
                                        <td>{{ dernek.title }}</td>
                                    </tr>

                                    <tr>
                                        <th>Description</th>
                                        <td>{{ dernek.description }}</td>
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




                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div><!--/blog-post-area-->
                </div>
            </div>
            <div class=\"category-tab shop-details-tab\"><!--category-tab-->
                <div class=\"col-sm-12\">
                    <ul class=\"nav nav-tabs\">

                        <li class=\"active\"><a href=\"#reviews\" data-toggle=\"tab\">Detay</a></li>
                    </ul>
                </div>
                <div class=\"tab-pane fade active in\" id=\"reviews\">
                    <div class=\"col-sm-12\">

                        <p>{{ dernek.detail | raw}}</p>


                    </div>
                </div>
            </div>



                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "home/dernekshow.html.twig", "C:\\Users\\Tulpar\\Desktop\\Proje Yeni\\Son Hali\\mysiteski\\templates\\home\\dernekshow.html.twig");
    }
}
