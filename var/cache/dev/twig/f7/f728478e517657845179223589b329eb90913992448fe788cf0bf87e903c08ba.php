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
class __TwigTemplate_a7dfd8f274ee966d352b3ac0ae6b4f9dfa89a5d091bb14e2263f47576fc55dac extends \Twig\Template
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
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +99 95 01 88 821</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@dernekler.com</a></li>
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
                        <a href=\"/\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/dernek.jpg\" style=\"border-radius:50%;width: 150px; height: 90px \" alt=\"\" /></a>
                    </div>
                    <div class=\"btn-group pull-right clearfix\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                Ankara
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"\">Ankara</a></li>
                                <li><a href=\"\">İstanbul</a></li>
                            </ul>
                        </div>

                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                TL
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
                            <li><a href=\"\"><i class=\"fa fa-user\"></i>User Account</a></li>




                            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "
                                <li><a href=\"/user\"><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "image", [], "any", false, false, false, 69))), "html", null, true);
            echo "\" class=\"img-circle elevation-2\"
                                                         style=\"border-radius: 50%\" height=\"40   \" alt=\"User Image\"><i class=\"icon-lock\"></i>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></li>
                                ";
        } else {
            // line 72
            echo "                                    <li><a href=\"/loginuser\"><i class=\"fa fa-lock\"></i> Login</a></li>
                            ";
        }
        // line 74
        echo "



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
                            <li><a href=\"/\" class=\"active\">Home</a></li>


                            <li><a href=\"404.html\">404</a></li>
                            <li><a href=\"/about\">About Us</a></li>
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
        return array (  132 => 74,  128 => 72,  123 => 70,  119 => 69,  116 => 68,  114 => 67,  77 => 33,  43 => 1,);
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
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +99 95 01 88 821</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i> info@dernekler.com</a></li>
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
                        <a href=\"/\"><img src=\"{{ asset('assets') }}/images/home/dernek.jpg\" style=\"border-radius:50%;width: 150px; height: 90px \" alt=\"\" /></a>
                    </div>
                    <div class=\"btn-group pull-right clearfix\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                Ankara
                                <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"\">Ankara</a></li>
                                <li><a href=\"\">İstanbul</a></li>
                            </ul>
                        </div>

                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-default dropdown-toggle usa\" data-toggle=\"dropdown\">
                                TL
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
                            <li><a href=\"\"><i class=\"fa fa-user\"></i>User Account</a></li>




                            {% if app.user %}

                                <li><a href=\"/user\"><img src=\"{{ asset ('uploads/images/' ~ app.user.image) }}\" class=\"img-circle elevation-2\"
                                                         style=\"border-radius: 50%\" height=\"40   \" alt=\"User Image\"><i class=\"icon-lock\"></i>{{ app.user.name }}</a></li>
                                {% else %}
                                    <li><a href=\"/loginuser\"><i class=\"fa fa-lock\"></i> Login</a></li>
                            {% endif %}




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
                            <li><a href=\"/\" class=\"active\">Home</a></li>


                            <li><a href=\"404.html\">404</a></li>
                            <li><a href=\"/about\">About Us</a></li>
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
