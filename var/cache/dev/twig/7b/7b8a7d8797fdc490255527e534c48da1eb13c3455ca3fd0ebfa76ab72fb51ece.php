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

/* home/footer.html.twig */
class __TwigTemplate_134e8de2e72b3b60097a46a84d3074a0a61e42504b6dcb4ffbd9a9e2b36fc880 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\"><!--Footer-->
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"companyinfo\">

                    </div>
                </div>
                <div class=\"col-sm-7\">
                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/iframe1.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/iframe2.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/iframe3.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/iframe4.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"address\">
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/home/map.png\" alt=\"\" />

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-widget\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>Service</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">Online Help</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                            <li><a href=\"#\">Order Status</a></li>
                            <li><a href=\"#\">Change Location</a></li>
                            <li><a href=\"#\">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>Quock Shop</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">T-Shirt</a></li>
                            <li><a href=\"#\">Mens</a></li>
                            <li><a href=\"#\">Womens</a></li>
                            <li><a href=\"#\">Gift Cards</a></li>
                            <li><a href=\"#\">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>Policies</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">Terms of Use</a></li>
                            <li><a href=\"#\">Privecy Policy</a></li>
                            <li><a href=\"#\">Refund Policy</a></li>
                            <li><a href=\"#\">Billing System</a></li>
                            <li><a href=\"#\">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>About Shopper</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">Company Information</a></li>
                            <li><a href=\"#\">Careers</a></li>
                            <li><a href=\"#\">Store Location</a></li>
                            <li><a href=\"#\">Affillate Program</a></li>
                            <li><a href=\"#\">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"single-widget\">
                        <h2>About Shopper</h2>
                        <form action=\"#\" class=\"searchform\">
                            <input type=\"text\" placeholder=\"Your email address\" />
                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-arrow-circle-o-right\"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <p class=\"pull-left\">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class=\"pull-right\">Designed by <span><a target=\"_blank\" href=\"http://www.themeum.com\">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 69,  110 => 57,  93 => 43,  76 => 29,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\"><!--Footer-->
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"companyinfo\">

                    </div>
                </div>
                <div class=\"col-sm-7\">
                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"{{ asset('assets') }}/images/home/iframe1.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"{{ asset('assets') }}/images/home/iframe2.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"{{ asset('assets') }}/images/home/iframe3.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class=\"col-sm-3\">
                        <div class=\"video-gallery text-center\">
                            <a href=\"#\">
                                <div class=\"iframe-img\">
                                    <img src=\"{{ asset('assets') }}/images/home/iframe4.png\" alt=\"\" />
                                </div>
                                <div class=\"overlay-icon\">
                                    <i class=\"fa fa-play-circle-o\"></i>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"address\">
                        <img src=\"{{ asset('assets') }}/images/home/map.png\" alt=\"\" />

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"footer-widget\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>Service</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">Online Help</a></li>
                            <li><a href=\"#\">Contact Us</a></li>
                            <li><a href=\"#\">Order Status</a></li>
                            <li><a href=\"#\">Change Location</a></li>
                            <li><a href=\"#\">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>Quock Shop</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">T-Shirt</a></li>
                            <li><a href=\"#\">Mens</a></li>
                            <li><a href=\"#\">Womens</a></li>
                            <li><a href=\"#\">Gift Cards</a></li>
                            <li><a href=\"#\">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>Policies</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">Terms of Use</a></li>
                            <li><a href=\"#\">Privecy Policy</a></li>
                            <li><a href=\"#\">Refund Policy</a></li>
                            <li><a href=\"#\">Billing System</a></li>
                            <li><a href=\"#\">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"single-widget\">
                        <h2>About Shopper</h2>
                        <ul class=\"nav nav-pills nav-stacked\">
                            <li><a href=\"#\">Company Information</a></li>
                            <li><a href=\"#\">Careers</a></li>
                            <li><a href=\"#\">Store Location</a></li>
                            <li><a href=\"#\">Affillate Program</a></li>
                            <li><a href=\"#\">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"single-widget\">
                        <h2>About Shopper</h2>
                        <form action=\"#\" class=\"searchform\">
                            <input type=\"text\" placeholder=\"Your email address\" />
                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-arrow-circle-o-right\"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <p class=\"pull-left\">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class=\"pull-right\">Designed by <span><a target=\"_blank\" href=\"http://www.themeum.com\">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->", "home/footer.html.twig", "C:\\Users\\Tulpar\\Desktop\\Proje Yeni\\Son Hali\\mysiteski\\templates\\home\\footer.html.twig");
    }
}
