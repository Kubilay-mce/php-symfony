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

/* home/sidebar.html.twig */
class __TwigTemplate_526316bdc30278341c3b123e77d6da6857ce1e7f42f3704cbd432b441bd559b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sidebar.html.twig"));

        // line 1
        echo "<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
                <div class=\"left-sidebar\">
                    <h2>Category</h2>
                    <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
                                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                                        Sportswear
                                    </a>
                                </h4>
                            </div>
                            <div id=\"sportswear\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <ul>
                                        <li><a href=\"#\">Nike </a></li>
                                        <li><a href=\"#\">Under Armour </a></li>
                                        <li><a href=\"#\">Adidas </a></li>
                                        <li><a href=\"#\">Puma</a></li>
                                        <li><a href=\"#\">ASICS </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
                                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                                        Mens
                                    </a>
                                </h4>
                            </div>
                            <div id=\"mens\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <ul>
                                        <li><a href=\"#\">Fendi</a></li>
                                        <li><a href=\"#\">Guess</a></li>
                                        <li><a href=\"#\">Valentino</a></li>
                                        <li><a href=\"#\">Dior</a></li>
                                        <li><a href=\"#\">Versace</a></li>
                                        <li><a href=\"#\">Armani</a></li>
                                        <li><a href=\"#\">Prada</a></li>
                                        <li><a href=\"#\">Dolce and Gabbana</a></li>
                                        <li><a href=\"#\">Chanel</a></li>
                                        <li><a href=\"#\">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
                                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                                        Womens
                                    </a>
                                </h4>
                            </div>
                            <div id=\"womens\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <ul>
                                        <li><a href=\"#\">Fendi</a></li>
                                        <li><a href=\"#\">Guess</a></li>
                                        <li><a href=\"#\">Valentino</a></li>
                                        <li><a href=\"#\">Dior</a></li>
                                        <li><a href=\"#\">Versace</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Kids</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Fashion</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Households</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Interiors</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Clothing</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Bags</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Shoes</a></h4>
                            </div>
                        </div>
                    </div><!--/category-products-->

                    <div class=\"brands_products\"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class=\"brands-name\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li><a href=\"#\"> <span class=\"pull-right\">(50)</span>Acne</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(56)</span>Grüne Erde</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(27)</span>Albiro</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(32)</span>Ronhill</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(5)</span>Oddmolly</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(9)</span>Boudestijn</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class=\"price-range\"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class=\"well text-center\">
                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"sl2\" ><br />
                            <b class=\"pull-left\">\$ 0</b> <b class=\"pull-right\">\$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class=\"shipping text-center\"><!--shipping-->
                        <img src=\"images/home/shipping.jpg\" alt=\"\" />
                    </div><!--/shipping-->

                </div>
            </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-3\">
                <div class=\"left-sidebar\">
                    <h2>Category</h2>
                    <div class=\"panel-group category-products\" id=\"accordian\"><!--category-productsr-->
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#sportswear\">
                                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                                        Sportswear
                                    </a>
                                </h4>
                            </div>
                            <div id=\"sportswear\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <ul>
                                        <li><a href=\"#\">Nike </a></li>
                                        <li><a href=\"#\">Under Armour </a></li>
                                        <li><a href=\"#\">Adidas </a></li>
                                        <li><a href=\"#\">Puma</a></li>
                                        <li><a href=\"#\">ASICS </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#mens\">
                                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                                        Mens
                                    </a>
                                </h4>
                            </div>
                            <div id=\"mens\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <ul>
                                        <li><a href=\"#\">Fendi</a></li>
                                        <li><a href=\"#\">Guess</a></li>
                                        <li><a href=\"#\">Valentino</a></li>
                                        <li><a href=\"#\">Dior</a></li>
                                        <li><a href=\"#\">Versace</a></li>
                                        <li><a href=\"#\">Armani</a></li>
                                        <li><a href=\"#\">Prada</a></li>
                                        <li><a href=\"#\">Dolce and Gabbana</a></li>
                                        <li><a href=\"#\">Chanel</a></li>
                                        <li><a href=\"#\">Gucci</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordian\" href=\"#womens\">
                                        <span class=\"badge pull-right\"><i class=\"fa fa-plus\"></i></span>
                                        Womens
                                    </a>
                                </h4>
                            </div>
                            <div id=\"womens\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <ul>
                                        <li><a href=\"#\">Fendi</a></li>
                                        <li><a href=\"#\">Guess</a></li>
                                        <li><a href=\"#\">Valentino</a></li>
                                        <li><a href=\"#\">Dior</a></li>
                                        <li><a href=\"#\">Versace</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Kids</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Fashion</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Households</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Interiors</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Clothing</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Bags</a></h4>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><a href=\"#\">Shoes</a></h4>
                            </div>
                        </div>
                    </div><!--/category-products-->

                    <div class=\"brands_products\"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class=\"brands-name\">
                            <ul class=\"nav nav-pills nav-stacked\">
                                <li><a href=\"#\"> <span class=\"pull-right\">(50)</span>Acne</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(56)</span>Grüne Erde</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(27)</span>Albiro</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(32)</span>Ronhill</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(5)</span>Oddmolly</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(9)</span>Boudestijn</a></li>
                                <li><a href=\"#\"> <span class=\"pull-right\">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class=\"price-range\"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class=\"well text-center\">
                            <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"sl2\" ><br />
                            <b class=\"pull-left\">\$ 0</b> <b class=\"pull-right\">\$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class=\"shipping text-center\"><!--shipping-->
                        <img src=\"images/home/shipping.jpg\" alt=\"\" />
                    </div><!--/shipping-->

                </div>
            </div>", "home/sidebar.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\home\\sidebar.html.twig");
    }
}
