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

/* home/slider.html.twig */
class __TwigTemplate_3ebc434410884991ca8ef9115fe5a179e57ace084d46f97b2a0e869cebf579fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/slider.html.twig"));

        // line 1
        echo "
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.scrollUp.min.js\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/price-range.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.prettyPhoto.js\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/main.js\"></script>


<section id=\"slider\"><!--slider-->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">



                        ";
        // line 25
        $context["count"] = 0;
        // line 26
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 27
            echo "                            ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 27, $this->source); })()) + 1);
            // line 28
            echo "                            <div class=\"item ";
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 28, $this->source); })()) == 1)) {
                echo "active";
            }
            echo "\">
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dernek_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                                <img  src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" class=\"center-block\"   style=\"border-radius: 3%; height: 450px; width: 450px\" alt=\"\" />
                                </a>
                                <div style=\"position: absolute;left: -20px; top:-40px\" class=\"carousel-caption\">
                                    <h3 style=\"color: -moz-mac-menutextselect\" class=\"align-content-xl-start\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</h3>

                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
    </div>
</section><!--/slider-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  114 => 33,  108 => 30,  104 => 29,  97 => 28,  94 => 27,  89 => 26,  87 => 25,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<script src=\"{{ asset('assets') }}/js/jquery.js\"></script>
<script src=\"{{ asset('assets') }}/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('assets') }}/js/jquery.scrollUp.min.js\"></script>
<script src=\"{{ asset('assets') }}/js/price-range.js\"></script>
<script src=\"{{ asset('assets') }}/js/jquery.prettyPhoto.js\"></script>
<script src=\"{{ asset('assets') }}/js/main.js\"></script>


<section id=\"slider\"><!--slider-->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div id=\"slider-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#slider-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#slider-carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#slider-carousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">



                        {% set count=0 %}
                        {% for rs in slider %}
                            {% set count=count+1 %}
                            <div class=\"item {% if count==1 %}active{% endif %}\">
                                <a href=\"{{ path('dernek_show', {'id': rs.id}) }}\">
                                <img  src=\"{{ asset('uploads/images/' ~ rs.image) }}\" class=\"center-block\"   style=\"border-radius: 3%; height: 450px; width: 450px\" alt=\"\" />
                                </a>
                                <div style=\"position: absolute;left: -20px; top:-40px\" class=\"carousel-caption\">
                                    <h3 style=\"color: -moz-mac-menutextselect\" class=\"align-content-xl-start\">{{ rs.title }}</h3>

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
    </div>
</section><!--/slider-->", "home/slider.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\home\\slider.html.twig");
    }
}
