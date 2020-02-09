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

/* home/header.html.twig */
class __TwigTemplate_9f710573971609c15245e271ef557bc581d269f648d51bf583e5f31e9bb15b97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        echo "<header id=\"header\"><!--header-->
    <div class=\"header_top\"><!--header_top-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"contactinfo\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +2 95 01 88 821</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"social-icons pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class=\"header-middle\"><!--header-middle-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 clearfix\">
                    <div class=\"logo pull-left\">
                        <a href=\"index.html\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/logo.png\" alt=\"\" /></a>
                    </div>
                    <div class=\"btn-group pull-right clearfix\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                USA
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"\">Canada</a></li>
                                <li><a href=\"\">UK</a></li>
                            </ul>
                        </div>

                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                DOLLAR
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"\">Canadian Dollar</a></li>
                                <li><a href=\"\">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8 clearfix\">
                    <div class=\"shop-menu clearfix pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"\"><i class=\"fa fa-user\"></i> Account</a></li>
                            <li><a href=\"\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
                            <li><a href=\"checkout.html\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
                            <li><a href=\"cart.html\"><i class=\"fa fa-shopping-cart\"></i> Cart</a></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-lock\"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class=\"header-bottom\"><!--header-bottom-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"mainmenu pull-left\">
                        <ul class=\"nav navbar-nav collapse navbar-collapse\">
                            <li><a href=\"index.html\" class=\"active\">Home</a></li>
                            <li class=\"dropdown\"><a href=\"#\">Shop<i class=\"fa fa-angle-down\"></i></a>
                                <ul role=\"menu\" class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Products</a></li>
                                    <li><a href=\"product-details.html\">Product Details</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"cart.html\">Cart</a></li>
                                    <li><a href=\"login.html\">Login</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                <ul role=\"menu\" class=\"sub-menu\">
                                    <li><a href=\"blog.html\">Blog List</a></li>
                                    <li><a href=\"blog-single.html\">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href=\"404.html\">404</a></li>
                            <li><a href=\"contact-us.html\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"search_box pull-right\">
                        <input type=\"text\" placeholder=\"Search\"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\"><!--header-->
    <div class=\"header_top\"><!--header_top-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"contactinfo\">
                        <ul class=\"nav nav-pills\">
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +2 95 01 88 821</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"social-icons pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class=\"header-middle\"><!--header-middle-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 clearfix\">
                    <div class=\"logo pull-left\">
                        <a href=\"index.html\"><img src=\"{{ asset('assets') }}/images/home/logo.png\" alt=\"\" /></a>
                    </div>
                    <div class=\"btn-group pull-right clearfix\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                USA
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"\">Canada</a></li>
                                <li><a href=\"\">UK</a></li>
                            </ul>
                        </div>

                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                DOLLAR
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"\">Canadian Dollar</a></li>
                                <li><a href=\"\">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8 clearfix\">
                    <div class=\"shop-menu clearfix pull-right\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"\"><i class=\"fa fa-user\"></i> Account</a></li>
                            <li><a href=\"\"><i class=\"fa fa-star\"></i> Wishlist</a></li>
                            <li><a href=\"checkout.html\"><i class=\"fa fa-crosshairs\"></i> Checkout</a></li>
                            <li><a href=\"cart.html\"><i class=\"fa fa-shopping-cart\"></i> Cart</a></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-lock\"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class=\"header-bottom\"><!--header-bottom-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"mainmenu pull-left\">
                        <ul class=\"nav navbar-nav collapse navbar-collapse\">
                            <li><a href=\"index.html\" class=\"active\">Home</a></li>
                            <li class=\"dropdown\"><a href=\"#\">Shop<i class=\"fa fa-angle-down\"></i></a>
                                <ul role=\"menu\" class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Products</a></li>
                                    <li><a href=\"product-details.html\">Product Details</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"cart.html\">Cart</a></li>
                                    <li><a href=\"login.html\">Login</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\"><a href=\"#\">Blog<i class=\"fa fa-angle-down\"></i></a>
                                <ul role=\"menu\" class=\"sub-menu\">
                                    <li><a href=\"blog.html\">Blog List</a></li>
                                    <li><a href=\"blog-single.html\">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href=\"404.html\">404</a></li>
                            <li><a href=\"contact-us.html\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"search_box pull-right\">
                        <input type=\"text\" placeholder=\"Search\"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->", "home/header.html.twig", "C:\\xampp\\htdocs\\mysite\\templates\\home\\header.html.twig");
    }
}
