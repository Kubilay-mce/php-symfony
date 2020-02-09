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
class __TwigTemplate_9f5165cd00cc435c4fcfaf24836ef8eaafdca2eff30ae23de220f3382107cacf extends \Twig\Template
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
        echo "<section id=\"slider\"><!--slider-->
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
                        <div class=\"item active\">
                            <div class=\"col-sm-6\">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/girl1.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"col-sm-6\">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/girl2.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"col-sm-6\">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/girl3.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/pricing.png\" class=\"pricing\" alt=\"\" />
                            </div>
                        </div>

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
        return array (  106 => 47,  102 => 46,  87 => 34,  83 => 33,  69 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"slider\"><!--slider-->
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
                        <div class=\"item active\">
                            <div class=\"col-sm-6\">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"{{ asset('assets') }}/images/home/girl1.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                <img src=\"{{ asset('assets') }}/images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"col-sm-6\">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"{{ asset('assets') }}/images/home/girl2.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                <img src=\"{{ asset('assets') }}/images/home/pricing.png\"  class=\"pricing\" alt=\"\" />
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"col-sm-6\">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type=\"button\" class=\"btn btn-default get\">Get it now</button>
                            </div>
                            <div class=\"col-sm-6\">
                                <img src=\"{{ asset('assets') }}/images/home/girl3.jpg\" class=\"girl img-responsive\" alt=\"\" />
                                <img src=\"{{ asset('assets') }}/images/home/pricing.png\" class=\"pricing\" alt=\"\" />
                            </div>
                        </div>

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
